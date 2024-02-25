<?php
require_once("../../controllers/userController.php");
$obj = new userController();
$obj->delete($_GET['id']);
