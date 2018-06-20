<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="../assets/css/styleSuasMusicas.css"/>
        <link rel="icon" type="image/png" href="../assets/images/logo.png"/>
        <script type="text/javascript" src="../assets/script/script.js"></script>
        <title>Suas músicas</title>
    </head>
    
    <body>
        <header></header>
        
        <section>
            <div class="container">
                <div class="styleButtons">
                    <div class="tabelaSuasMusicas">
                        <table>
                            <tr>
                                <td>Nome</td>
                                <td>Artista</td>
                                <td>Tipo</td>
                                <td>Capo</td>
                                <td>Idioma</td>
                                <td>Instrumento</td>
                            </tr>
                            <?php require_once '../results/TableSuasMusicas.php'; 
                            suasMusicas();?>
                        </table>
                    </div>
                    
                    <div class="buttonFooter">
                        <a href="adicionarMusica.php"><button type="button">Adicionar música</button></a>
                    </div>
                </div>
                            
                <div class="styleButtons">
                    <div class="infoMusica" id="infoMusic">
                        <!-- Essa div será preenchida com dados vindos do JavaScript -->
                    </div>
                    
                    <div class="buttonFooter" id="buttonFooter">
                        <!-- Esse será o botão de editar -->
                    </div>
                </div>
                
            
                <div class="letra" id='letra'>
                    A letra da música
                </div>
            </div>
        </section>
        
        <footer>
            <div class="container">
                <a href="telaInicial.php"><button>Voltar</button></a>
            </div>
        </footer>
    </body>
</html>

