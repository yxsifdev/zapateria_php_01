<?php include("../../config/connect.php"); ?>
<?php include("../../templates/header.php"); ?>

<div class="box-agregar">
    <div class="box-form">
        <div class="agg-form-header">
            <h1>Agregar zapato</h1>
        </div>
        <div class="agg-form-content">
            <form action="../../actions/productos/create_process.php" method="post">
                <label for="">Ingresa los datos requeridos</label>
                <input type="text" name="id" placeholder="0" readonly>
                <input type="text" required name="precio" placeholder="Ingresa el precio">
                <input type="text" required name="color" placeholder="Ingresa el color">
                <input type="text" required name="estilo" placeholder="Ingresa el estilo">
                <input type="text" required name="talla" placeholder="Ingresa la talla">
                <input type="text" required name="genero" placeholder="Ingresa el genero">
                <input type="text" required name="cantidad" placeholder="Ingresa el cantidad">
                <div class="btn-submit">
                    <button type="submit" name="create_process">Enviar</button>
                </div>
                <div class="btn-submit">
                    <a style="color: #000; font-weight: 600; font-size: 16px; text-decoration: none" href="index.php">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include("../../templates/footer.php"); ?>

<style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Poppins', sans-serif;
        background-color: #000;
        background-image: url("../../assets/images/zp-nike2.png");
        background-repeat: no-repeat;
        background-size: cover;
        color: #fff;
    }

    .box-agregar {
        display: flex;
        justify-content: center;
        margin-top: 5vh;
    }

    .box-form {
        display: flex;
        background-color: #fff;
        box-shadow: #000 0 0 10px 1px;
        padding: 30px 50px;
        color: #000;
        border-radius: 5px;
        flex-direction: column;
    }

    .agg-form-header h1 {
        font-weight: 600;
        color: #22b477;
    }

    .agg-form-content form {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .agg-form-content label {
        color: gray;
        text-align: center;
    }

    .agg-form-content form input {
        padding: 5px 10px;
        border-radius: 3px;
        border: 1px solid #000;
        font-family: 'Poppins', sans-serif;
    }

    .btn-submit {
        background-color: #22b477;
        display: flex;
        padding: 6px;
        border-radius: 5px;
        justify-content: center;
    }

    .btn-submit button {
        background: none;
        border: 0;
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
    }
</style>