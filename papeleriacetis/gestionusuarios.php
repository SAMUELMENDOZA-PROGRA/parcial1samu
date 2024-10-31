<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit();
}
?>
<!-- Botón para mostrar la lista de personajes -->
<form action="usulist.php" method="get">
                <button type="submit">Lista de usuarios</button>
            </form>
