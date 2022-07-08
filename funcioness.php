<?php
/*Write a program that requests the information shown below and that formats it as shown:

Ingrese su nombre: Billy Gruff
Ingrese N° horas trabajadas: 12
Ingrese sueldo por hora: 7.5
Sueldo total empleado Billy Gruff = 90
*/
class Persona {

    public $nombre;
    public $horas;
    public $sueldohs;
    public $sueldototal;

    public function getNombre()
    {
        return $this->nombre;
    }
    public function getHoras()
    {
        return $this->horas;
    }
    public function getSueldohs()
    {
        return $this->sueldohs;
    }
    public function getSueldototal()
    {
        return $this->horas * $this->sueldohs;
    }
}

function MostrarPersona($verPersona)
    {
        echo 'Ingrese su nombre: '. $verPersona->getNombre();
        echo "<br>";
        echo 'Ingrese numero de horas trabajadas: '. $verPersona->getHoras();
        echo "<br>";
        echo 'Ingrese sueldo por hora: '. $verPersona->getSueldohs();
        echo "<br>";
        echo 'Sueldo total: '. $verPersona->getSueldototal();
    }

$personas = new Persona();
$personas->nombre=$_POST["n"];
$personas->horas=$_POST["hs"];
$personas->sueldohs=$_POST["shs"];
$personas->sueldototal;
MostrarPersona($personas);

?>