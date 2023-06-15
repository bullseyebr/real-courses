<?php

include_once("include/head.php");
?>


<?php include_once("include/head.php") ?>

<body>

  <?php include_once("include/topbar.php") ?>




  <main>
    <?php include_once("include/sidebar.php") ?>

    <div class="container-fluid">
      <h1>Página <?= $pageName ?></h1>
      <h3><?php echo $siteSlogan; ?></h3>
    </div>


    <div class="container-fluid">
      <div class="row flex-nowrap">
        <?php
        // Rotas
        switch ($pageName) {
          case 'index':
            include_once("views/home.php");
            break;
          case 'contato':
            include_once("views/contato.php");
            break;
          case 'quem-somos':
            include_once("views/quem-somos.php");
            break;
          case 'perfil':
            include_once("views/quem-somos.php");
            break;
          default:
            echo "<div style='margin-bottom: 200px;'><h1>Erro - Procure o ADMIN do site</h1><h2>Página não encontra</h2></div>";
            break;
        }

        ?>
      </div>
    </div>
  </main>

  <?php include_once("include/footer.php") ?>


</body>

</html>