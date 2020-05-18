<?php

namespace MVC\Models;

use MVC\Libs\Model;
use PDO;
use PDOException;

class AlumnoModel extends Model
{

    public $id;
    public $Nombre;
    public $Edad;
    public $Boleta;


    function __construct()
    {
        parent::__construct();
    }

    public function getAll()
    {
        try {

            $stm = $this->db->connect()->prepare("SELECT * FROM Alumnos");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_CLASS);
        } catch (PDOException $error) {
            print_r($error);
        }
    }

    public function insertar($alumno)
    {
        try {
            $stm = $this->db->connect()->prepare("INSERT INTO Alumnos VALUES (:id, :nombre, :edad, :boleta)");
            $stm->execute([
                'id' => $alumno->id,
                'nombre' => $alumno->Nombre,
                'edad' => $alumno->Edad,
                'boleta' => $alumno->Boleta
            ]);
            return true;
        } catch (PDOException $error) {
            print_r($error);
        }
    }

    public function getById($id)
    {
        try {
            $stm = $this->db->connect()->prepare("SELECT * FROM Alumnos WHERE id = :id");
            $stm->execute(['id' => $id]);
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $error) {
            print_r($error);
        }
    }

    public function actualizar($alumno)
    {
        try {
            $stm = $this->db->connect()->prepare("UPDATE Alumnos SET nombre = :nombre, edad = :edad, boleta = :boleta WHERE id = :id");
            $stm->execute([
                'nombre' => $alumno->Nombre,
                'edad' => $alumno->Edad,
                'boleta' => $alumno->Boleta,
                'id' => $alumno->id,
            ]);
            return true;
        } catch (PDOException $error) {
            print_r($error);
        }
    }

    public function eliminar($id)
    {
        try {
            $stm = $this->db->connect()->prepare("DELETE FROM Alumnos WHERE id = :id");
            $stm->execute(['id' => $id]);
            return true;
        } catch (PDOException $error) {
            print_r($error);
        }
    }
}
