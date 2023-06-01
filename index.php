<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Real Cursos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="index.css">
    <script src="https://kit.fontawesome.com/cafc52a010.js" crossorigin="anonymous"></script>
    <script src="index.js"></script>
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="hamburger-menu">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
            <div class="navbar-avatar" onclick="toggleDropdown()">
                <img src="img/avatar.png" alt="" width="10%" height="10%">
                <ul class="navbar-menu" id="dropdown-menu">
                    <li class="navbar-item">
                        <div class="dropdown navbar-item">
                    <li><a class="dropdown-item" href="#">Meu perfil</a></li>
                    <li><a class="dropdown-item" href="#">Ajuda</a></li>
                    <li><a class="dropdown-item" href="#">Logout</a></li>
            </div>
            </li>
            </ul>
        </nav>
        </div>


    </header>

    <main>
        <?php include_once("home.php") ?>
    </main>
    <footer class="fixed-bottom">
        <div class="text-center p-3">
            <a href="https://www.facebook.com/profile.php?id=100088413534772"><i class="fa-brands fa-facebook"
                    style='font-size:30px'></i></a>
            <a href="https://www.instagram.com/real.grana/"><i class="fa-brands fa-instagram"
                    style='font-size:30px'></i></a>
            <a href="https://twitter.com/RealGrana"><i class="fa-brands fa-twitter" style='font-size:30px'></i></a>
            <a href="https://github.com/bullseyebr"><i class="fa-brands fa-github" style='font-size:30px'></i></a>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">Real Grana © | Uma marca Bullseye ® |
            2020-2023
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    <script src="index.js"></script>
</body>

</html>