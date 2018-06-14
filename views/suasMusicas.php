<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="../assets/css/styleSuasMusicas.css"/>
        <link rel="icon" type="image/png" href="../assets/images/logo.png"/>
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
                        </table>
                    </div>
                    
                    <div class="buttonFooter">
                        <a href="adicionarMusica.php"><button type="button">Adicionar música</button></a>
                    </div>
                </div>
                            
                <div class="styleButtons">
                    <div class="infoMusica">
                        <img src="" height="" width=""/>Nome:<br/>
                        <img src="../assets/images/artist-icon.png" height="32" width=32/> Artista:<br/>
                        <img src="../assets/images/type-icon.png" height=32 width="32"/> Tipo:<br/>
                        <img src="../assets/images/capo-icon.png" height="32" width="32"/> Capo:<br/>
                        <img src="../assets/images/language-icon.png" height="32" width="32"/> Idioma:<br/>
                        <img src="../assets/images/instrument-icon.png" height="32" width="32"/> Instrumento:<br/>
                    </div>
                    
                    <div class="buttonFooter">
                        <a href="editarMusica.php"><button>Editar</button></a>
                    </div>
                </div>
                
            
                <div class="letra">
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

