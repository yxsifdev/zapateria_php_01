<?php
    require_once("../../controllers/userController.php");
    
    $id_zapato = $_POST['id'];
    $precio = $_POST['precio'];
    $color = $_POST['color'];
    $estilo = $_POST['estilo'];
    $talla = $_POST['talla'];
    $genero = $_POST['genero'];
    $cantidad = $_POST['cantidad'];
    

    $obj = new userController();
    $obj->update($id_zapato, $precio, $color, $estilo, $talla, $genero, $cantidad);
