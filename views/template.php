<!DOCTYPE html>
<html>
    <head>
	<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, inital-scale=1, shrink-to-fit=no" />
        <link rel="icon" type="imagem/png" href="<?php echo BASE_URL; ?>assets/images/logo.png" />
        <!-- <link rel="stylesheet" type="text/css" href="../assets/css/styleTelaInicial.css"> -->
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css" />
        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/script/bootstrap.min.js"></script>
	<title>Tela inicial</title>
    </head>
      <body>

    <?php $this->loadViewInTemplate($viewName, $viewData); ?>

    </body>
</html>