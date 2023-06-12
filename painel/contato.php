<?php include('include/head.php'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 id="titulo" class="d-inline d-md-block h3 mb-0 text-gray-800">Contato Real Grana</h1>
  </div>

  <div class="row">
    <div class="col-12">
      <div class="card shadow mb-4">
        <div class="card-header card-main py-3">
          <h6 class="m-0">Contato - Suporte Real Grana</h6>
        </div>
        <div class="container">
          <form class="user">
            <div class="form-group pt-3">
              <p class="text-muted">Assunto:</p>
              <input id="assunto" type="text" required="" class="form-control" name='assunto' placeholder="Assunto">
            </div>
            <div class="form-group">
              <p class="text-muted">Mensagem:</p>
              <textarea type="text" step="1" required="" class="form-control" style="min-height: 150px;" id='mensagem' placeholder="Mensagem"></textarea>
            </div>
            <button id="envio" type="button" style="cursor: pointer;" onclick="enviaMensagem(<?php echo $usuario['id']; ?>)" class="btn btn-main f-15 btn-block mb-4">
              Enviar mensagem
            </button>
            <p class="center" id="msg" class="text-muted">Aguarde...</p>

          </form>
        </div>

      </div>
    </div>
  </div>
  <p class="center">Este é um simulador. Você não está adquirindo ações reais.</p>
</div>
<!-- /.container-fluid -->

<?php include('include/footer.php'); ?>