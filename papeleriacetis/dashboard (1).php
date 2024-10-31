<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="csss.css">
    <title>dashboard - papelaria</title>
    <style>
     body{
        background-image: url(fondoadmin.jpg)
     }
         body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    /* Estilos del contenedor principal */
    .dashboard-container {
        width: 80%;
        max-width: 1000px;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
        justify-items: center;
    }

    /* Estilos de las fichas */
    .card {
        width: 100%;
        background-color:blue;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        padding: 20px;
        text-align: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }

    .card h3 {
        margin: 10px 0;
    }

    .card p {
        color: #666;
    }

    /* Botón en cada ficha */
    .card a {
        display: inline-block;
        margin-top: 15px;
        padding: 10px 20px;
        background-color:crimson;
        color: white;
        text-decoration: none;
        border-radius: 4px;
        transition: background-color 0.3s ease;
    }

    .card a:hover {
        background-color:cornflowerblue;
    }

    /* Ajustes para dispositivos pequeños */
    @media (max-width: 600px) {
        .dashboard-container {
            grid-template-columns: 1fr;
        }
    }
    </style>

</head>
<body>
    <center>
<div class="dashboard-container">
    <!-- Ficha de Perfil de Personaje -->
    <div class="card">
        <h3>Selecciona que tipo de usuario quieres supervisar</h3>
        <p>Aqui puedes ver las diferentes funciones de cada tipo de usuario.</p>
        <a href="dashboardVendedor.php"> Vendedor</a>
        <a href="dashboardAdmin.php">Admin</a>
    </div>
</center>

</body>