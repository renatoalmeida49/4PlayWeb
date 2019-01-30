<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, inital-scale=1, shrink-to-fit=no" />
        <!-- <link rel="stylesheet" type="text/css" href="../assets/css/styleSuasMusicas.css"/>-->
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
        <script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
        <link rel="icon" type="image/png" href="../assets/images/logo.png"/>
        <script type="text/javascript" src="../assets/script/script.js"></script>
        <title>Suas músicas</title>
    </head>
    
    <body>
        <div class="container">
            <div class="row justify-content-center" style="margin-top: 5px">
                <div class="col-1">
                    <img src="../assets/images/logo.png" width="40" height="40"/>
                </div>
                <div class="col-4">
                    <div class="h1">4Play</div>
                </div>
            </div>
        
            <div class="row">
                <div class="col">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped">
                            <thead class="thead-light">
                                <tr class="colunas">
                                    <th>Nome</th>
                                    <th>Artista</th>
                                    <th>Tipo</th>
                                    <th>Capo</th>
                                    <th>Idioma</th>
                                    <th>Instrumento</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                            <?php 
                                require_once '../results/TableSuasMusicas.php'; 
                                suasMusicas();
                            ?>
                            
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="row justify-content-center">
                        <div class="col-2">
                            <a href="adicionarMusica.php" class="btn btn-success">Adicionar música</a>
                        </div>
                    </div>
                </div>
                            
                <div class="col">
                    <div class="infoMusica" id="infoMusic">
                        <!-- Essa div será preenchida com dados vindos do JavaScript -->
                    </div>
                    
                    <div class="buttonFooter" id="buttonFooter">
                        <!-- Esse será o botão de editar -->
                    </div>
                </div>
                
            
                <div class="col" id='letra'>
                    <!-- Essa div será preenchida de alguma forma que não sei como -->
                    <!-- 13/07/2018 Refatorando - Ainda não sei como resolver -->
                </div>
            </div>
        
            <div class="row justify-content-center" style="margin-top: 13px">
                <div class="col-2">
                    <a href="telaInicial.php" class="btn btn-success">Voltar</a>
                </div>
            </div>
        </div>
    </body>
</html>

