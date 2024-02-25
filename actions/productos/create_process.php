<?php
require_once("../../controllers/userController.php");
$obj = new userController();
$obj->guardar($_POST['precio'], $_POST['color'], $_POST['estilo'], $_POST['talla'], $_POST['genero'], $_POST['cantidad']);
