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
        <script>
            function preencheDados(art, tipo, capo, lan, ins, letra){
                var div = document.getElementById("infoMusic");
                
                var imgArtist = "<img src='../assets/images/artist-icon.png' height='32' width='32'/>"+art+"<br/>";
                var imgType = "<img src='../assets/images/type-icon.png' height='32' width='32'/>"+tipo+"<br/>";
                var imgCapo = "<img src='../assets/images/capo-icon.png' height='32' width='32'/>"+capo+"<br/>";
                var imgLanguage = "<img src='../assets/images/language-icon.png' height='32' width='32'/>"+lan+"<br/>";
                var imgInstrument = "<img src='../assets/images/instrument-icon.png' height='32' width='32'/>"+ins+"<br/>" ;
                
                div.innerHTML = imgArtist+imgType+imgCapo+imgLanguage+imgInstrument;
                
                var divLetra = document.getElementById("letra");
                
                divLetra.innerHTML = letra;
            }
        </script>
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
                            <?php require_once '../results/TableSuasMusicas.php'; ?>
                        </table>
                    </div>
                    
                    <div class="buttonFooter">
                        <a href="adicionarMusica.php"><button type="button">Adicionar música</button></a>
                    </div>
                </div>
                            
                <div class="styleButtons">
                    <div class="infoMusica" id="infoMusic">
                        <!-- A ideia é aqui ser o nome da música --><img src="" height="" width=""/><br/>
                    </div>
                    
                    <div class="buttonFooter">
                        <a href="editarMusica.php"><button>Editar</button></a>
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

