<?php include("config/connect.php"); ?>
<title>Nike</title>
<link rel="icon" href="./assets/images/zp-nike1.png">
<header>
    <div class="name-zapateria">
        <img src="./assets/images/nike-logo.png" alt="">
        <!-- <h1>Zapatería</h1> -->
    </div>
    <nav>
        <ul>
            <li><a class="admin-zapatos" href="./pages/view/index.php"><i class="fi fi-br-overview"></i> Zapatos</a></li>
            <!-- <li><a class="admin-zapatos" href=""><i class="fi fi-br-edit-alt"></i> Administrar</a></li> -->
        </ul>
    </nav>
</header>

<!--  -->
<div class="zapatilla-nike">
    <div class="announce">
        <h1>NIKE <span>ZTA</span><br>SUPREME</h1>
        <p><span>$299.99</span></p>
    </div>
    <div class="nike-img">
        <img src="./assets/images/zp-nike1.png" alt="">
    </div>
</div>
<!--  -->

<?php include("templates/footer.php"); ?>

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

    header {
        display: flex;
        padding: 20px 15px;
        margin: 20px;
        border-radius: 10px;
        align-items: center;
        justify-content: space-between;
        /* background-color: #0f0f0f; */
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


    .zapatilla-nike {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-around;
    }

    .zapatilla-nike .announce h1 {
        color: #fff;
        font-size: 5rem;
        font-weight: bold;
    }

    .zapatilla-nike .announce p {
        font-size: 30px;
        font-weight: 600;
    }
</style>