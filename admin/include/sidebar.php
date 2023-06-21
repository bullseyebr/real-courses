<?php

// $menuItems[0];
// $menuItems[1];
// $menuItems["identificador1"];


// print_r($menuItems[3]['link']);
// exit();

?>

<div class="bg-dark col-auto col-md-2 min-vh-100">
    <div class="bg-dark p-2">
        <a class="d-flex text decoration-none mt-1 align-items-center text-white">
            <a img src="assets/img/logo-real-cursos.png" alt="" width="10%" height="10%">></a>
            <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                    <img src="assets/img/logo-real-cursos.png" alt="" width="20%" height="20%">
                </li>
                <!-- MESMA COISA: for ($i=0; $i < count($menuItems); $i++) -->
                <?php foreach ($menuItems as $key => $itemIterator) { ?>
                    <?php include 'components/menuItem.php' ?>
                <?php } ?>
                <!-- <li class="nav-item">
                    <a href="#" class="nav-link text-white">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">Cursos</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">Categorias</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">Usuários</a>
                </li> -->
            </ul>
    </div>
</div>