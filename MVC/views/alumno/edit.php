<?php require "views/layouts/header.php"?>
    <form action=<?php echo constant('URL')?>alumno/update method="POST">
    <label for="">Id</label>
        <input type="text" name="id" value=<?php echo $this->datos->id?> readonly>
        <label for="">Nombre</label>
        <input type="text" name="nombre" value=<?php echo $this->datos->Nombre?>>
        <label for="">Edad</label>
        <input type="text" name="edad" value=<?php echo $this->datos->Edad?>>
        <label for="">Boleta</label>
        <input type="text" name="boleta" value=<?php echo $this->datos->Boleta?>>
        <button type="submit">Actualizar Usuario</button>
    </form>

<?php require "views/layouts/footer.php"?>