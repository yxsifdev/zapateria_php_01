<?php include("../../config/connect.php"); ?>
<?php
require_once("../../controllers/userController.php");
$obj = new userController();
$rows = $obj->index();
?>
<title>Nike</title>
<link rel="icon" href="../../assets/images/zp-nike1.png">
<header>
    <div class="name-zapateria">
        <img src="../../assets/images/nike-logo.png" alt="">
        <!-- <h1>Zapatería</h1> -->
    </div>
    <nav>
        <ul>
            <li><a class="admin-zapatos" href="../../index.php"><i class="fi fi-br-overview"></i> Inicio</a></li>
            <!-- <li><a class="admin-zapatos" href=""><i class="fi fi-br-edit-alt"></i> Administrar</a></li> -->
        </ul>
    </nav>
</header>

<!--  -->
<div class="add-zta">
    <a class="create-data" href="create.php"><i class="fi fi-br-add-document"></i>Crear nuevo zapato</a>
</div>

<div class="table-list">
    <div class="table-wrapper">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Precio</th>
                    <th>Color</th>
                    <th>Estilo</th>
                    <th>Talla</th>
                    <th>Genero</th>
                    <th>Cantidad</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($rows) : ?>
                    <?php foreach ($rows as $row) : ?>
                        <tr>
                            <td><?= $row[0] ? $row[0] : ''; ?></td>
                            <td><?= $row[1] ? $row[1] : ''; ?></td>
                            <td><?= $row[2] ? $row[2] : ''; ?></td>
                            <td><?= $row[3] ? $row[3] : ''; ?></td>
                            <td><?= $row[4] ? $row[4] : ''; ?></td>
                            <td><?= $row[5] ? $row[5] : ''; ?></td>
                            <td><?= $row[6] ? $row[6] : ''; ?></td>
                            <td><a class="edit-data" href="edit.php?id=<?= $row[0] ? $row[0] : ''; ?>"><i class="fi fi-br-file-edit"></i></a></td>
                            <td><a class="delete-data" hreflang="" href="../../actions/productos/delete_process.php?id=<?= $row[0] ?>"><i class="fi fi-br-trash"></i></a></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<br>
<br>

<!--  -->

<?php include("../../templates/footer.php"); ?>

<style>
    @import url('https://cdn-uicons.flaticon.com/2.1.0/uicons-bold-rounded/css/uicons-bold-rounded.css');
    @import url('https://cdn-uicons.flaticon.com/2.1.0/uicons-bold-rounded/css/uicons-bold-rounded.css');
    /*  */
    @import url('https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Poppins', sans-serif;
        background-color: #000;
        color: #fff;
    }

    a {
        text-decoration: none;
    }

    li {
        list-style: none;
    }

    span {
        color: #22b477;
    }

    /*  */
    header {
        display: flex;
        padding: 20px 15px;
        margin: 20px;
        border-radius: 10px;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
    }

    header .name-zapateria {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    header .name-zapateria h1 {
        color: #fff;
        font-size: 30px;
    }

    header .name-zapateria img {
        width: 80px;
        filter: invert(100%);
    }

    header nav ul {
        display: flex;
        gap: 10px;
        align-items: center;
    }

    header nav ul li a {
        color: #fff;
    }

    header nav ul li .admin-zapatos {
        background-color: #22b477;
        padding: 7px 15px;
        border-radius: 50px;
        color: #000;
        transition: .2s;
    }

    header nav ul li .admin-zapatos:hover {
        box-shadow: #22b477 0 0 5px 1px;
    }

    header nav ul li .admin-zapatos,
    header nav ul li i {
        display: flex;
        gap: 5px;
        align-items: center;
    }

    /*  */
    .table-list {
        display: flex;
        justify-content: center;
        align-items: center;
        /* height: 100vh; */
        margin-top: 50px;
        /* Esto asegurará que el contenedor ocupe al menos toda la altura de la pantalla */
    }

    .table-wrapper {
        border-radius: 10px;
        overflow: hidden;
        /* Esto asegurará que el borde redondeado se aplique correctamente */
    }

    table {
        width: 90%;
        /* Modifica el ancho según tus preferencias */
        height: 100px;
        /* Modifica la altura según tus preferencias */
        margin: auto;
        border-collapse: collapse;
        background-color: #121212;
        color: white;
    }

    thead {
        background-color: #333;
        color: white;
    }

    thead th,
    tbody td {
        border: 1px solid #444;
        padding: 10px 25px;
        text-align: center;
    }

    tbody tr:nth-child(even) {
        background-color: #222;
    }

    tbody tr:hover {
        background-color: #555;
    }

    /*  */

    .add-zta {
        display: flex;
        justify-content: center;
    }

    .add-zta .create-data {
        background-color: #222;
        padding: 10px 30px;
        border-radius: 10px;
        color: #fff;
        /* font-size: 20px; */
    }

    .add-zta .create-data, .add-zta i {
        display: flex;
        gap: 10px;
        align-items: center;
    }

    .add-zta i{
        color: #57F287;
        font-size: 20px;
    }

    .edit-data {
        color: #FEE75C;
        font-size: 20px;
    }

    .delete-data {
        color: #ED4245;
        font-size: 20px;
    }
</style>