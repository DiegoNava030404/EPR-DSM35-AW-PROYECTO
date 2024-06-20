<?php
session_start();

class User {
    public $id;
    public $id_tipo_usuario;
    public $name;
    public $email;
    public $password;

    public static function findByEmail($email) {
        // Conexión a la base de datos y búsqueda del usuario por email.
        // Esto es solo un ejemplo, se debe ajustar según la base de datos utilizada.
        $pdo = new PDO('mysql:host=localhost; dbname=ALMACEN', 'usuario', 'contraseña');
        $stmt = $pdo->prepare('SELECT * FROM users WHERE email = ?');
        $stmt->execute([$email]);
        return $stmt->fetchObject('User');
    }

    public function save() {
        // Guardar el usuario en la base de datos
        $pdo = new PDO('mysql:host=localhost;dbname=nombre_bd', 'usuario', 'contraseña');
        $stmt = $pdo->prepare('INSERT INTO users (id_tipo_usuario, name, email, password) VALUES (?, ?, ?, ?)');
        $stmt->execute([$this->id_tipo_usuario, $this->name, $this->email, $this->password]);
        $this->id = $pdo->lastInsertId();
    }
}

class LoginController {

    public function register($request) {
        // Validación de datos
        if(empty($request['nombre_usuario']) || empty($request['email']) || !filter_var($request['email'], FILTER_VALIDATE_EMAIL) || empty($request['pass'])) {
            die('Validación fallida');
        }

        // Comprobar si el email ya existe
        if(User::findByEmail($request['email'])) {
            die('El email ya está registrado');
        }

        $id_tipo_usuario = 1;

        $user = new User();
        $user->id_tipo_usuario = $id_tipo_usuario;
        $user->name = $request['nombre_usuario'];
        $user->email = $request['email'];
        $user->password = password_hash($request['pass'], PASSWORD_BCRYPT);
        $user->save();

        // Iniciar sesión
        $_SESSION['user_id'] = $user->id;

        // Redirigir
        header('Location: inicio.php');
        exit;
    }

    public function login($request) {
        $credentials = [
            "email" => $request['email'],
            "password" => $request['password']
        ];

        $remember = isset($request['remember']) ? true : false;

        $user = User::findByEmail($credentials['email']);
        if ($user && password_verify($credentials['password'], $user->password)) {
            $_SESSION['user_id'] = $user->id;
            session_regenerate_id(true);

            $userId = $user->id_tipo_usuario;
            if ($userId == 1) {
                header('Location: inicio.php');
            } else if ($userId == 2) {
                header('Location: inicio_dueño.php');
            } else if ($userId == 3) {
                header('Location: inicio_empleado.php');
            }
            exit;
        } else {
            $_SESSION['status'] = 'Error al iniciar sesión';
            header('Location: login.php');
            exit;
        }
    }

    public function logout() {
        session_destroy();
        header('Location: index.php');
        exit;
    }
}

// Ejemplo de uso:
$controller = new LoginController();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action']) && $_POST['action'] === 'register') {
        $controller->register($_POST);
    } else if (isset($_POST['action']) && $_POST['action'] === 'login') {
        $controller->login($_POST);
    }
} else if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['action']) && $_GET['action'] === 'logout') {
    $controller->logout();
}
?>