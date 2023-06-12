<?php

$usuario = array(
  'id' => 1,
  'nome' => 'Juca',
  'sobrenome' => 'Albertina',
  'email' => 'juca@uol.com.br',
  'img' => 'https://i0.wp.com/www.oeco.org.br/wp-content/uploads/2018/02/on%C3%A7a1-1024x683.jpg?resize=640%2C427',
  'cpf' => '111333444-50',
  'cpfHash' => 'sdiaijsdiajsidajsdijasd',
  'telefone' => '32903939393'
);

$userInvestorProfileScore = 25;

?>

<?php include('include/head.php'); ?>

<div class="container-fluid">
  <!-- Page Heading -->
  <div class="card-header card-main d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0">Meu Perfil</h1>
    <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-dark shadow-sm" data-toggle="modal" data-target="#novaSalaModal"><i class="fas fa-plus"></i> Criar nova sala</a> -->
  </div>
  <?php if (!isset($partner)) { ?>
    <!-- Content Row -->
    <div class="row">

      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Patrimônio</div>
                <div id="carteiraTotal" class="h5 mb-0 font-weight-bold text-gray-800">Carregando...</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-wallet fa-2x text-gray-700"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-prmary text-uppercase mb-1">Carteira (Ações)</div>
                <div id="carteiraAcoes" class="h5 mb-0 font-weight-bold text-gray-800">Carregando...</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-clipboard-list fa-2x text-gray-700"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Caixa</div>
                <div id="carteiraDinheiro" class="h5 mb-0 font-weight-bold text-gray-800">Carregando...</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-dollar-sign fa-2x text-gray-700"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Pending Requests Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">salas</div>
                <div id="quantidadeSala" class="h5 mb-0 font-weight-bold text-gray-800">Carregando...</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-comments fa-2x text-gray-700"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  <?php } ?>
  <div class="row">
    <div class="col-lg-6">

      <!-- Default Card Example -->
      <div class="card mb-4">
        <div class="card-header card-main">
          Meus dados
        </div>

        <div class="card-body">
          <div class="justify-content-center">
            <div class="center">
              <img <?php echo "src=\"" . $usuario['img'] . "\"" ?> class="img-profile rounded-circle" width="150px">
            </div>
          </div>
          <div class="pt-3">
            <div class="center" class="d-block">
              <p class="d-block text-muted"><?php echo "Nome: " . $usuario['nome'] . ' ' . $usuario['sobrenome']; ?></p>
              <p class="d-block text-muted"><?php echo "CPF: " . $usuario['cpf']; ?></p>
              <p class="d-block text-muted"><?php echo "Telefone: " . $usuario['telefone']; ?></p>
              <p class="d-block text-muted"><?php echo "E-mail: " . $usuario['email']; ?></p>
              <button id="alterarFoto" data-toggle="modal" data-target="#alterarFotoModal" class="btn btn-main btn-small">Alterar foto</button>
            </div>
          </div>
        </div>
      </div>

      <div class="card shadow mb-4">
        <div class="card-header card-main py-3">
          <h6 class="m-0">Redefinir simulador</h6>
        </div>
        <div class="card-body">
          <p class="text-muted">
            Ao clicar nesse botão TODA a sua carteira SERÁ apagada e você voltará a ter a quantidade inical de dinheiro no simulador (R$ 100.000,00), essa ação NÃO pode ser desfeita.
          </p>
          <button <?php echo "onclick=\"reseta(" . $usuario['id'] . ",'" . $usuario['cpfHash'] . "')\""; ?> class="btn btn-main-alt">Resetar</button>
        </div>
      </div>

      <div class="card shadow mb-4">
        <img src="/assets/img/REAL3-voltou-2023-realgrana.png" class="img-fluid rounded" alt="Responsive image">
      </div>

      <div class="card shadow mb-4">
        <div class="card-header card-main py-3">
          <h6 class="m-0">Nosso muito obrigado!</h6>
        </div>
        <div class="card-body">
          <p class="text-muted text-center">
            Agradecemos e ficamos muito satisfeitos por estar usando o a plataforma de educação financeira e simulação
            de investimentos de bolsa de valores e renda fixa da Real Grana.
            Esperamos que estejam gostando da experiência.
          </p>
          <a href="https://realgrana.com.br/" target="_blank"><button class="btn-outline-success col text-center my-3 rounded text-black text-bold-200">Acessar Portal Real Grana</button></a>
          <a href="https://app.realgrana.com.br/" target="_blank"><button class="btn-main col text-center my-3 rounded">Acessar Plataforma</button></a>
        </div>
      </div>

    </div>
    <div class="col-lg-6">

      <!-- Default Card Example -->
      <div class="card mb-4">
        <div class="card-header card-main">
          Alterar senha
        </div>
        <div class="card-body">
          <form class="user" method="POST" action="">
            <div class="form-group">
              <input name="senhaAntiga" type="password" required="" class="form-control" id="senhaAntiga" placeholder="Senha antiga">
            </div>
            <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
                <input name="senha" required="" type="password" class="form-control" id="senhaNova" placeholder="Senha nova">
                <p id="senhaTamanho" class="text-vermelho f-10">A senha deve ser maior que 8 caracteres.</p>
              </div>
              <div class="col-sm-6">
                <input name="senhaNova" required="" type="password" class="form-control" id="senhaNovaConfirma" placeholder="Confirme a nova senha">
                <p id="erroSenha" class="text-vermelho f-10">As senhas devem ser iguais.</p>
              </div>
            </div>
            <button type="submit" id="botaoSenha" name="alteraSenha" class="btn btn-main f-15 btn-block">
              Alterar senha
            </button>

          </form>
        </div>
      </div>

      <!-- Basic Card Example -->
      <div class="card shadow mb-4">
        <div class="card-header card-main py-3">
          <h6 class="m-0">Meus troféus</h6>
        </div>
        <div class="card-body" style="max-height: 250px; overflow: auto;">
          <div class="container-fluid">
            <div id="conquistas" class="row justify-content-center">

            </div>
          </div>
        </div>
      </div>
      <?php if (isset($partnerBanners['banner_column1']) && $partnerBanners['banner_column1'] != '') : ?>
        <div class="card shadow mb-4">
          <a href="<?= $partnerBanners['link_banner1'] ?>" target="_blank">
            <img src="<?= $partnerBanners['banner_column1'] ?>" class="img-fluid rounded" alt="Banner <?= $partnerBanners['name'] ?>">
          </a>
        </div>
      <?php endif; ?>

      <div class="card shadow mb-4">
        <div class="card-header card-main py-3">
          <h6 class="m-0">Meu Perfil de Investidor</h6>
        </div>
        <div class="card-body">
          <?php if ($userInvestorProfileScore) : ?>
            <div class="center">
              <h2 class="perfil-heading-secundary" style="font-size: 20px;">Você é o <span class="perfil-heading-terciary" style="font-size: inherit;" id='investorProfileName'></span></h2>
              <!-- <h3 class="perfil-heading-terciary" id='investorProfileName'></h3> -->
              <img src="" class="img-fluid" width="300px" alt="" id='investorProfileImage' />
              <p><b>Perfil de Investidor:</b> <span id="printscoreinfo"></span></p>
              <div id="investorProfileText" style="text-align: justify; text-justify: inter-word;"></div>
              <a href="/painel/perfil-investidor.php">
                <button class="perfil-button mt-2">Quer saber mais sobre seu Perfil de Investidor? Clique aqui! 🤠</button>
              </a>
            </div>
          <?php else : ?>
            <div class="center">
              <p class="text-muted">Você ainda não sabe seu perfil de investidor?</p>
              <a href="/painel/perfil-investidor.php">
                <button id="reply-profile" class="perfil-button mt-2 mb-1">Clique aqui e descubra agora 💰</button>
              </a>
            </div>
          <?php endif; ?>
        </div>
      </div>

      <div class="card shadow mb-4">
        <div class="card-header card-main py-3">
          <h6 class="m-0">Instagram</h6>
        </div>
        <div class="card-body">
          <p class=" center text-muted">Você ainda não segue a gente no Instagram? Siga e compartilhe nosso perfil para desbloquear recompensas exclusivas!</p>
          <div style="cursor: pointer" class="center" <?php echo "onclick=\"instagram(" . $usuario['id'] . ", '" . $usuario['cpfHash'] . "')\""; ?>>
            <i class="fab fa-instagram f-50 align-self-center text-verde"></i>
            <p class="text-black">Real Grana</p>
          </div>

        </div>
      </div>

    </div>
  </div>


</div>
<!-- /.container-fluid -->

<?php include('include/footer.php'); ?>