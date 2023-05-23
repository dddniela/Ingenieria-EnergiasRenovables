<?php

require_once("src/Models/Conexion.php");
require_once "src/Models/Docente.php";
require_once("src/Models/Materia.php");
require_once("src/Models/Comunidad.php");
require_once("src/Models/Especialidad.php");
$url = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];

$urlControl = array(
$_SERVER['SERVER_NAME']."/Energias-Renovables/",
$_SERVER['SERVER_NAME']."/Energias-Renovables/?option=0");
$conn = new Conexion();
$conn->connect();
$especialidad = new Especialidad();
$especialidad->setConnection($conn->getDB());
$docente = new Docente();
$docente->setConnection($conn->getDB());
$materia = new Materia();
$materia->setConnection($conn->getDB());
$comunidad = new Comunidad();
$comunidad->setConnection($conn->getDB());
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Ingenieria, Energías, Energías Renovables">
    <meta name="author" content="Daniela Castro Rodriguez, Gabriel Escobar Medina, 
    Nancy Daniela Mendez Arpidez, Marco Gabriel Cortes Toledo, Yelitza Magali Rosas Jimenez">
    <link rel="icon" href="img/itver-logo.PNG"/>

    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/style.css">
    <title>Ingeniería en Energías Renovables</title>
</head>
    <?php
        include_once "src/View/header.php";  
        for($i = 0; $i < 2; $i++){
            if($url==$urlControl[$i]){
                include_once "src/View/inicio.php";     
            }
        }
        if(isset($_GET['option'])){
            include_once "src/Controllers/page-controller.php";
        } else {
            include_once "src/View/inicio.php";
        }
    ?>
<?php
    include_once "src/View/footer.php";
?>
</html>