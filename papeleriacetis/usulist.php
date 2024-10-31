<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit();
}

include 'db.php';

// Obtener el ID del usuario logueado
$user_id = $_SESSION['user_id'];

// Obtener los personajes asociados al usuario
$query = $pdo->prepare("SELECT * FROM users WHERE user_id = :user_id");
$query->execute(['user_id' => $user_id]);
$user_id = $query->fetchAll();

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="csss.css">
    <title>Lista de usuarios</title>
</head>
<body>
    <div class="characters-list-container">
        <h1>Usuarios creados</h1>

        <?php if (count($user_id) > 0): ?>
            <ul>
                <?php foreach ($user_id as $user_id): ?>
                    <li>
                        <p><strong>Nombre:</strong> <?php echo $user['name']; ?></p>
                        <p><strong>Nivel:</strong> <?php echo $user['email']; ?></p>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>No has creado ningún usuario todavía.</p>
        <?php endif; ?>

        <!-- Botón para regresar al dashboard principal -->
        <form action="dashboardCharacters.php" method="get">
            <button type="submit">Regresar</button>
        </form>
    </div>
</body>
</html>