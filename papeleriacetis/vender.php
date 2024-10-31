<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulación de Venta</title>
    <style>
        body {
            background-image:url(venderr.jpg);
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        button {
            padding: 10px 15px;
            font-size: 16px;
            cursor: pointer;
        }
        p{
            color: red;
        }
    </style>
</head>
<body>
<h1>Simulación de Venta</h1>

<form id="ventaForm">
    <div class="form-group">
        <label for="producto">Seleccione el Producto:</label>
        <select id="producto" required>
            <option value="">-- Seleccionar --</option>
            <option value="Lapiz 1">Lapiz 1</option>
            <option value="Lapiz 2">Lapiz 2</option>
            <option value="Pluma 1">Pluma 1</option>
            <option value="Pluma 2">Pluma 2</option>
            <option value="Borrador 1">Borrador 1</option>
            <option value="Borrador 2">Borrador 2</option>
        </select>
    </div>
    <button type="submit">Completar venta</button>
    <p>¿Ya terminaste? regresa al menu<a href="dashboardVendedor.php">Regresa al menu</a></p>

</form>

<h2>Compraste: <span id="productoSeleccionado"></span></h2>

<script>
    document.getElementById('ventaForm').addEventListener('submit', function(event) {
        event.preventDefault();

        const productoSeleccionado = document.getElementById('producto').value;

        if (productoSeleccionado) {
            document.getElementById('productoSeleccionado').textContent = `Has seleccionado ${productoSeleccionado}.`;

            // Anuncio de que se completó la venta
            alert(`¡Venta completada!\n${productoSeleccionado}`);
        } else {
            alert("Por favor, selecciona un producto.");
        }
    });
</script>

</body>
</html>
            