<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit();
}

include 'pape.php';
// Obtener el ID del usuario logueado
$user_id = $_SESSION['user_id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seccion de administrador</title>
    <style> 
     body{
        background-image: url('fondoadmin2.jpg')
     }
    .card {
        height: 200px;
    width: 300px;
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
        background-color: #0056b3;
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
<div class="card">
        <h3>Bienvenido Admin</h3>
        <a href="gestionusuarios.php">Gestion de usuarios</a>
        <a href="gestionproduc.php">Gestion de productos</a>
    </div></center>
</body>
</html>