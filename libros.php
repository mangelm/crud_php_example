<?php
include 'config_libros.php';

$stmt = $pdo->query('SELECT * FROM libros');
$libros = $stmt->fetchAll();
?>

<h2>Listado de Libros</h2>

<!-- Botón para crear un nuevo libro -->
<a href="create_libros.php">Crear nuevo Libro</a>
<br><br>

<ul>
<?php foreach ($libros as $libro): ?>
    <li>
        <?php echo $libro['nombre']; ?> - $<?php echo $libro['precio']; ?>
        <a href="edit_libros.php?id=<?php echo $libro['id']; ?>">Editar</a>
        <a href="delete_libros.php?id=<?php echo $libro['id']; ?>">Eliminar</a>
    </li>
<?php endforeach; ?>
</ul>
