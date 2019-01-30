<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, inital-scale=1, shrink-to-fit=no" />
        <link rel="icon" type="image/png" href="../assets/images/logo.png"/>
        <!-- <link rel="stylesheet" type="text/css" href="../assets/css/styleAdicionarMusica.css"/> -->
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
        <script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
        <title>Adicionar música</title>
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
        
            <div class="row justify-content-center">
                <form method="post" action="../controllers/MusicController.php">
                    <div class="form-group">
                        <label for="nome">Nome:</label><input id="nome" class="form-control" required type="text" name="nome"/><br/>
                        <label for="artista">Artista:</label>
                        <select name='artista' class="form-control" id='artista' required>
                            <option></option>
                            <?php 
                                require_once '../results/SelectArtistas.php'; 

                                criaSelect();
                            ?>
                        </select>
                        <a href="adicionarArtista.php" style="margin-top: 10px" class="btn btn-success">Novo artista</a><br/>
                        <label for="tipo">Tipo:</label>
                        <select id="tipo" class="form-control" name="tipo" required>
                            <option></option>
                            <option value="Dedilhado">Dedilhado</option>
                            <option value="Ritmo">Ritmo</option>
                            <option value="Mista">Mista</option>
                        </select></br>
                        <label for="capostraste">Capotraste:</label>
                        <select id="capostraste" class="form-control" name="capotraste" required>
                            <option></option>
                            <option value="Sem capo">Sem capo</option>
                            <option value="1ª casa">1ª casa</option>
                            <option value="2ª casa">2ª casa</option>
                            <option value="3ª casa">3ª casa</option>
                            <option value="4ª casa">4ª casa</option>
                            <option value="5ª casa">5ª casa</option>
                            <option value="6ª casa">6ª casa</option>
                            <option value="7ª casa">7ª casa</option>
                        </select><br/>
                        <label for="instrumento">Instrumento:</label>
                        <select id="instrumento" class="form-control" name="instrumento" required>
                            <option></option>
                            <option value="Violão">Violão</option>
                            <option value="Guitarra">Guitarra</option>
                            <option value="Violão/Guitarra">Violão/Guitarra</option>
                        </select><br/>
                        <label for="idioma">Idioma:</label>
                        <select id="idioma" class="form-control" name="idioma" required>
                            <option></option>
                            <option value="Português">Português</option>
                            <option value="Inglês">Inglês</option>
                            <option value="Espanhol">Espanhol</option>
                            <option value="Frances">Francês</option>
                        </select><br/>
                        <label for="letra" class="labelLetra">Letra:</label><textarea id="letra" class="form-control" name="letra" rows="30" cols="80"></textarea>
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-success" name="musicControl" value="Adicionar">Adicionar</button>
                    </div>
                </form>
            </div>
        
            <div class="row justify-content-center">
                <a href="suasmusicas.php" class="btn btn-success">Voltar</a>
            </div>
        </div>
    </body>
</html>
