<?php
class userModel
{
    private $connection;

    public function __construct()
    {
        require_once("../../config/connect.php");
        $con = new db();
        $this->connection = $con->connection();
    }

    public function insertar($precio, $color, $estilo, $talla, $genero, $cantidad)
    {
        try {
            $stament = $this->connection->prepare("INSERT INTO tabla_final (precio, color, estilo, talla, genero, cantidad) VALUES (:precio, :color, :estilo, :talla, :genero, :cantidad)");
            $stament->bindParam(":precio", $precio);
            $stament->bindParam(":color", $color);
            $stament->bindParam(":estilo", $estilo);
            $stament->bindParam(":talla", $talla);
            $stament->bindParam(":genero", $genero);
            $stament->bindParam(":cantidad", $cantidad);
            return ($stament->execute()) ? $this->connection->lastInsertId() : false;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function index()
    {
        $stament = $this->connection->prepare("SELECT * FROM tabla_final");
        return ($stament->execute()) ? $stament->fetchAll() : false;
    }

    public function update($id_zapato, $precio, $color, $estilo, $talla, $genero, $cantidad)
    {
            $stament = $this->connection->prepare("UPDATE tabla_final SET precio = :precio, color = :color, estilo = :estilo, talla = :talla, genero = :genero, cantidad = :cantidad WHERE id_zapato = :id_zapato");
            $stament->bindParam(":id_zapato", $id_zapato);
            $stament->bindParam(":precio", $precio);
            $stament->bindParam(":color", $color);
            $stament->bindParam(":estilo", $estilo);
            $stament->bindParam(":talla", $talla);
            $stament->bindParam(":genero", $genero);
            $stament->bindParam(":cantidad", $cantidad);
            return ($stament->execute()) ? $id_zapato : false;
    }

    public function show($id_zapato)
    {
            $stament = $this->connection->prepare("SELECT * FROM tabla_final WHERE id_zapato = :id_zapato LIMIT 1");
            $stament->bindParam(":id_zapato", $id_zapato);
            return ($stament->execute()) ? $stament->fetch() : false;
    }

    public function delete($id_zapato)
    {
        try {
            $stament = $this->connection->prepare("DELETE FROM tabla_final WHERE id_zapato = :id_zapato");
            $stament->bindParam(":id_zapato", $id_zapato);
            return ($stament->execute()) ? true : false;
        } catch (PDOException $e) {
            return false;
        }
    }

    // public function showAll()
    // {
    //     try {
    //         $stament = $this->connection->prepare("SELECT * FROM tabla_final");
    //         return ($stament->execute()) ? $stament->fetchAll(PDO::FETCH_ASSOC) : false;
    //     } catch (PDOException $e) {
    //         return false;
    //     }
    // }
}
