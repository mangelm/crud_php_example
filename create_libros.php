<?php
include 'config_libros.php';

$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $autor = $_POST['autor'];
    $stock = $_POST['stock'];
    $precio = $_POST['precio'];
    $editorial = $_POST['editorial'];

    try {
        $sql = "INSERT INTO libros (nombre, descripcion, autor, stock, precio) VALUES (:nombre, :descripcion, :autor, :stock, :precio)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['nombre' => $nombre, 'descripcion' => $descripcion, 'autor' => $autor, 'stock' => $stock , 'precio' => $precio,]);

        $message = 'Libro añadido con éxito!';
    } catch (PDOException $e) {
        $message = 'Error al añadir el Libro: ' . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Libro</title>
</head>
<body>
<h2>Añadir nuevo Libro</h2>

<?php if (!empty($message)): ?>
    <p><?= $message ?></p>
<?php endif; ?>

<form action="create_libros.php" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" required>
    <br>
    <label for="descripcion">Descripción:</label>
    <textarea name="descripcion" id="descripcion"></textarea>
    <br>
    <label for="autor">Autor:</label>
    <input type="text" name="autor" id="autor">
    <br>
    <label for="stock">Stock:</label>
    <input type="number" name="stock" id="stock" required>
    <br>
    <label for="precio">Precio:</label>
    <input type="text" name="precio" id="precio" required>
    <br>
    <label for="editorial">Editorial:</label>
    <input type="text" name="editorial" id="editorial" required>
    <br>
    <input type="submit" value="Añadir Libro">

</form>

</body>
</html>
