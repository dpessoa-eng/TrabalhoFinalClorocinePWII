<?php include "cabecalho.php" ?>

<body>

    <!-- Cor legenda Empresa-->
    <nav class="nav-extended orange darken-2">
        <div class="nav-wrapper">

            <!-- Configuracoes da Pagina cabecario -->
            <ul id="nav-mobile" class="right">
                <ul id="nav-mobile" class="right">
                    <li><a href="galeria.php">Empresas</a></li>
                    <li><a href="cadastar.php">Cadastrar Novas Empresas</a></li>
                </ul>
        </div>

        <!-- Configuracoes letreiro pagina -->
        <div class="nav-header center">
            <h1>ETECIA</h1>
        </div>

        <!-- Configuracoes letreiro pagina -->
        <div class="nav-header center">
            <h2>Research</h2>
        </div>


        <div class="nav-content">
            <!-- Cor cabecario abaixo Empresa -->
            <ul class="tabs tabs-transparent orange darken-4">
                <li class="tab"><a class="active" href="#test1">Empresas</a></li>
                <li class="tab"><a href="#test2">Carteira de Investimentos</a></li>
                <li class="tab"><a href="#test3">Melhores Empresas</a></li>

            </ul>
        </div>
    </nav>
    <div class="row">
    <form method="POST" enctype="multipart/form-data">
      <div class="col s6 offset-s3">
        <div class="card">
          <div class="card-content">
            <span class="card-title">Cadastrar Empresa</span>

            <!-- input titulo-->
            <div class="row">
              <div class="input-field col s12">
                <input id="titulo" type="text" class="validate" name="titulo" required>
                <label for="titulo">Nome Empresa</label>
              </div>
            </div>

            <!-- input sinopse-->
            <div class="row">
              <div class="row">
                <div class="input-field col s12">
                  <textarea name="sinopse" id="sinopse" class="materialize-textarea"></textarea>
                  <label for="sinopse">Ramo de Negocio</label>
                </div>
              </div>
            </div>

            <!-- input nota-->
            <div class="row">
              <div class="input-field col s4">
                <input id="nota" name="nota" type="number" step=".1" min=0 max=10 class="validate" required>
                <label for="nota">Avaliação</label>
              </div>
            </div>

            <!-- input capa -->
            <div class="file-field input-field">
              <div class="btn orange darken-3 lighten-2 black-text">
                <span>Logo</span>
                <input type="file" name="poster_file" accept="image/*">
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" type="text" name="poster">
              </div>
            </div>

            <div class="card-action">
              <a class="btn waves-effect orange darken-3" href="/">Cancelar</a>
              <button type="submit" class="waves-effect waves-light btn orange darken-4">Confirmar</button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</body>