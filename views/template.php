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
      <div class="container">
        <div class="logo">
          <a href="<?php echo BASE_URL; ?>">
            <img src="<?php echo BASE_URL; ?>/assets/images/logo.png" width="45" height="45"/>
            4Play
          </a>
        </div>
        <div class="options">
          <a href="<?php BASE_URL; ?>config">Opções</a>
          <a href="<?php BASE_URL; ?>home/sair">Sair</a>
        </div>
      </div>
    </header>

    <?php $this->loadViewInTemplate($viewName, $viewData); ?>

    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/script/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/script/bootstrap.min.js"></script>

  </body>
</html>