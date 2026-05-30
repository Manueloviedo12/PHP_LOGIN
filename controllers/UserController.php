<?php

require_once __DIR__ . "/../db/conexion.php";

class UserController {
   private $conn;
    public function __construct($conn) {
        $this->conn = $conn;
    }
   
public function perfil() {

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    if (!isset($_SESSION['user'])) {
        header("Location: index.php?action=login");
        exit;
    }
    $user = $_SESSION['user'];

    $perfil = $this->conn->query("
        SELECT * FROM usuarios 
        WHERE id = {$user['id']} 
        LIMIT 1
    ")->fetch_assoc();

    // 🔹 COMENTARIOS
    $comentarios = $this->conn->query("
        SELECT nombre, correo, mensaje 
        FROM contactos 
        ORDER BY id DESC
    ");

    include __DIR__ . "/../views/perfil.php";
}

   public function perfilpublico() {

    include __DIR__ . "/../views/perfil_publico.php";
}


public function actualizarPerfil() {

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    if (!isset($_SESSION['user'])) {
        header("Location: index.php?action=login");
        exit;
    }

    $user = $_SESSION['user'];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $id = $_SESSION['user']['id']; //
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];

        $sql = "UPDATE usuarios SET nombre=?, correo=? WHERE id=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssi", $nombre, $correo, $id);

        if ($stmt->execute()) {

            // 🔥 ACTUALIZA SESIÓN TAMBIÉN
            $_SESSION['user']['nombre'] = $nombre;
            $_SESSION['user']['correo'] = $correo;
    $_SESSION['mensaje'] = "✔ Datos actualizados correctamente";

            header("Location: index.php?action=perfil");
            exit;
        }
    }

    include __DIR__ . "/../views/actualizarPerfil.php";
}


public function formPassword() {

    // 🔥 Asegura que la sesión esté iniciada
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    // 🔒 Protección: si no hay usuario logueado, lo manda al login
    if (!isset($_SESSION['user'])) {
        header("Location: index.php?action=login");
        exit;
    }

    // 👤 Obtiene datos del usuario logueado (si los necesitas en la vista)
    $user = $_SESSION['user'];

    // 📄 Carga la vista del formulario de cambio de contraseña
    include __DIR__ . "/../views/update_clave.php";
}
   

public function actualizarPassword() {

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    if (!isset($_SESSION['user'])) {
        header("Location: index.php?action=login");
        exit;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        echo "🚀 INICIO ACTUALIZAR PASSWORD <br>";

        $id_usuario = $_SESSION['user']['id']; // 🔥 CORRECTO
        $actual = $_POST['actual'] ?? '';
        $nueva = $_POST['nueva'] ?? '';
        $confirmar = $_POST['confirmar'] ?? '';

        if (!$id_usuario) {
            echo "❌ No hay sesión <br>";
            exit;
        }

        // consultar password actual
        $sql = "SELECT password FROM usuarios WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id_usuario);
        $stmt->execute();

        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        if (!$row) {
            echo "❌ Usuario no encontrado";
            exit;
        }

        // verificar password actual
        if (!password_verify($actual, $row['password'])) {
            echo "❌ Password actual incorrecta";
            exit;
        }

        // validar confirmación
        if ($nueva !== $confirmar) {
            echo "❌ Las contraseñas no coinciden";
            exit;
        }

        // actualizar password
        $hash = password_hash($nueva, PASSWORD_BCRYPT);

        $update = "UPDATE usuarios SET password = ? WHERE id = ?";
        $stmt = $this->conn->prepare($update);
        $stmt->bind_param("si", $hash, $id_usuario);

        if ($stmt->execute()) {
             header("Location: index.php?action=perfil");
            exit;
        }

        echo "❌ Error al actualizar";
        exit;
    }
}
}