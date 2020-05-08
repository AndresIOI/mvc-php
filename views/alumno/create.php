<?php require "views/layouts/header.php"?>

    <form action=<?php echo constant('URL')?>alumno/store method="POST">
        <label for="">Nombre</label>
        <input type="text" name="nombre">
        <label for="">Edad</label>
        <input type="text" name="edad">
        <label for="">Boleta</label>
        <input type="text" name="boleta">
        <button type="submit">Registar Usuario</button>
    </form>

<?php require "views/layouts/footer.php"?>