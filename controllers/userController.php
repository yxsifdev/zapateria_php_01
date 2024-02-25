<?php
class userController
{
    private $model;

    public function __construct()
    {
        require_once("../../models/userModel.php");
        $this->model = new userModel();
    }

    public function guardar($precio, $color, $estilo, $talla, $genero, $cantidad)
    {
        $id = $this->model->insertar($precio, $color, $estilo, $talla, $genero, $cantidad);
        return ($id != false) ? header("Location: ../../pages/view/index.php") : header("Location: ../../index.php");
    }
    public function index()
    {
        return ($this->model->index()) ? $this->model->index() : false;
    }
    public function update($id_zapato, $precio, $color, $estilo, $talla, $genero, $cantidad)
    {
        return ($this->model->update($id_zapato, $precio, $color, $estilo, $talla, $genero, $cantidad) != false) ? header("Location: ../../pages/view/index.php") : header("Location: ../../index.php");
    }


    public function show($id_zapato)
    {
        return ($this->model->show($id_zapato) != false) ? $this->model->show($id_zapato) : header("Location: ../../index.php");
    }

    public function delete($id_zapato)
    {
        return ($this->model->delete($id_zapato)) ? header("Location: ../../pages/view/index.php") : header("Location: ../../index.php");
    }

    // public function showAll()
    // {
    //     return ($this->model->showAll() != false) ? $this->model->showAll() : header("Location: ../../index.php");
    // }
}
