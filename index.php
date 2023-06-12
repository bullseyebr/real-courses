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
    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light  ">
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button> -->
      <!-- <div class="navbar-avatar d-flex justify-content-between " onclick="toggleDropdown()">
        <button class="navbar-toggler mr-auto" type="button" data-toggle="collapse"
          data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <img src="img/avatar.png" alt="" width="25px" height="25px">
        <ul class="navbar-menu" id="dropdown-menu">
          <li class="navbar-item"> -->
            <!-- <div class="dropdown navbar-item"> -->
          <!-- <li><a class="dropdown-item" href="#">Meu perfil</a></li>
          <li><a class="dropdown-item" href="#">Ajuda</a></li>
          <li><a class="dropdown-item" href="#">Logout</a></li>
          </li>
        </ul>
      </div>
    </nav> -->


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <button class="navbar-toggler mr-auto" type="button" data-toggle="collapse"
          data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          </ul>
          <div class="d-flex"  onclick="toggleDropdown()">
            <img src="img/avatar.png" alt="" width="35px" height="35px">
            <ul class="navbar-menu" id="dropdown-menu">
              <li class="navbar-item">
              <li><a class="dropdown-item" href="#">Meu perfil</a></li>
              <li><a class="dropdown-item" href="#">Ajuda</a></li>
              <li><a class="dropdown-item" href="#">Logout</a></li>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
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