<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link text-black d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Search -->
    <form id="pesquisa" style="overflow: auto; position: absolute; top: 16px; max-height: 200px; z-index: 10 !important;" class="d-none d-sm-inline-block form-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        <div class="input-group" style="max-height: 500px; overflow: auto;">
            <input id="buscaAcoesSalas" autocomplete="off" onkeyup="buscaAcoes()" type="text" class="form-control bg-light border-0 small" placeholder="Encontre ações para negociar" aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-dark" type="button">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
        <li class="nav-item dropdown no-arrow d-sm-none">
            <a class="nav-link dropdown-toggle text-black" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
            </a>
            <!-- Dropdown - Messages -->
            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form id="pesquisaXS" class="form-inline mr-auto w-100 navbar-search" style="overflow: auto; max-height: 200px; z-index: 10 !important;">
                    <div class="input-group" style="max-height: 500px; overflow: auto;">
                        <input id="buscaAcoesSalasXS" autocomplete="off" onkeyup="buscaAcoes(true)" type="text" class="form-control bg-light border-0 small" placeholder="Encontre ações para negociar" aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn bg-black text-white" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>

        <!-- Nav Item - Alerts -->

        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-black" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-black small">Usuario</span>
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="meu-perfil.php">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-700"></i>
                    Minha Conta
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="index.php" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-700"></i>
                    Sair
                </a>
            </div>
        </li>

    </ul>

</nav>