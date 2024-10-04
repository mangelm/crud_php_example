<?php
include 'config_libros.php';

// Comprobando si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];  // Asegúrate de obtener el ID desde el formulario oculto
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];

    // Corrección del orden de los parámetros en el UPDATE
    $stmt = $pdo->prepare("UPDATE libros SET nombre = ?, descripcion = ?, precio = ?, stock = ? WHERE id = ?");
    $stmt->execute([$nombre, $descripcion, $precio, $stock, $id]);

    header('Location: libros.php');  // Redireccionar después de guardar
    exit;
}

// Usamos una consulta preparada para evitar inyecciones SQL
$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM libros WHERE id = ?");
$stmt->execute([$id]);
$libro = $stmt->fetch();

?>

<h2>Editar Libro</h2>

<form action="edit_libros.php" method="post">
    <input type="hidden" name="id" value="<?php echo $libro['id']; ?>">
    Nombre: <input type="text" name="nombre" value="<?php echo $libro['nombre']; ?>"><br>
    Descripción: <textarea name="descripcion" id="descripcion"><?php echo $libro['descripcion']; ?></textarea><br>
    Precio: <input type="text" name="precio" value="<?php echo $libro['precio']; ?>"><br>
    Stock: <input type="text" name="stock" value="<?php echo $libro['stock']; ?>"><br>
    <input type="submit" value="Guardar Cambios">
</form>
