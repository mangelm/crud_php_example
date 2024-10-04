<?php
include 'config.php';

$stmt = $pdo->query('SELECT * FROM libros');
$libros = $stmt->fetchAll();
?>

<h2>Listado de Libros</h2>

<!-- Botón para crear un nuevo jabón -->
<a href="create.php">Crear nuevo Libro</a>
<br><br>

<ul>
<?php foreach ($libros as $libro): ?>
    <li>
        <?php echo $jabon['nombre']; ?> - $<?php echo $jabon['precio']; ?>
        <a href="edit.php?id=<?php echo $jabon['id']; ?>">Editar</a>
        <a href="delete.php?id=<?php echo $jabon['id']; ?>">Eliminar</a>
    </li>
<?php endforeach; ?>
</ul>
