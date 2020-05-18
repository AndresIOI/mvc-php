<?php require 'views/layouts/header.php' ?>

<h1>Alumnos</h1>
<a href=<?php echo constant('URL')?>alumno/registar>Registrar Alumno</a>
<?php 
    foreach ($this->datos as $key => $alumno) {
        echo "<li> 
                ID: ".$alumno->id." 
                Nombre: ".$alumno->Nombre." 
                Edad: ".$alumno->Edad." 
                Boleta: ".$alumno->Boleta."
                <a href=".constant('URL')."alumno/editar/".$alumno->id.">Actulizar</a>
                <a href=".constant('URL')."alumno/eliminar/".$alumno->id.">Eliminar</a>
            </li>";
    }

?>

<?php require 'views/layouts/footer.php' ?>