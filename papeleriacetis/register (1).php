<?php
include 'pape.php'; //Importar información de un archivo externo
if (isset($_POST['register'])) { //Si doy clic a un boton llamado register+
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Comprobamos si el nombre ya existe
    $checkname = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $checkname->execute(['email' => $email]);
    if ($checkname->rowCount() > 0) {
        $error = "El usuario ya está registrado.";
    } else {
        // Insertamos el nuevo usuario
        $query = $pdo->prepare("INSERT INTO users (name, email, password) VALUES (:name, :email, :password)");
        $query->execute(['name' => $name, 'email' => $email, 'password' => $password]);
        //echo $password."---".$_POST['password'];
        header('Location: index.php');
        exit();
    }
}
//me, me@gmail.com, me123;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="csss.css">
    <title>Registro - Torneo de Artes Marciales</title>
   
</head>
<body>
    <div class="register-container">
        <h2>Registrarse</h2>
        <?php if (isset($error)):?>
            <p class="error"><?php echo $error; ?></p>
        <?php endif; ?>
        <form method="POST">
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit" name="register">Registrarse</button>
        </form>
        <p>¿Ya tienes una cuenta? <a href="index.php">Inicia sesión aquí</a></p>
    </div>
</body>
</html>