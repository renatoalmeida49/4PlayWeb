<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, inital-scale=1, shrink-to-fit=no" />
      <link rel="icon" type="imagem/png" href="<?php echo BASE_URL; ?>assets/images/logo.png" />
      <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css" />
      <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/styleTemplate.css" />
      <title>Tela inicial</title>
  </head>
  <body class="bg-dark">
    <header>
      <nav class="navbar navbar-expand-md fixed-top navbar-dark">
        <a class="navbar-brand" href="<?php echo BASE_URL; ?>">4Play</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a href="" class="nav-link">Opções</a>
            </li>
            <li class="nav-item">
              <a href="<?php BASE_URL; ?>home/sair" class="nav-link">Sair</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <?php $this->loadViewInTemplate($viewName, $viewData); ?>

    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/script/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/script/bootstrap.min.js"></script>

  </body>
</html>