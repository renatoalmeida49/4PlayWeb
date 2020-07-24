<!DOCTYPE html>
<html>
    <head>
	   <meta charset="utf-8" />
       <meta name="viewport" content="width=device-width, inital-scale=1, shrink-to-fit=no" />
       <link rel="icon" type="imagem/png" href="<?php echo BASE_URL; ?>assets/images/logo.png" />
       <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css" />
	   <title>Tela inicial</title>
    </head>
      <body>

    <?php $this->loadViewInTemplate($viewName, $viewData); ?>

    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/script/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/script/bootstrap.min.js"></script>

    </body>
</html>