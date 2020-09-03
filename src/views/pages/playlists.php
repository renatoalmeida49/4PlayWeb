<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, inital-scale=1, shrink-to-fit=no" />
        <link rel="icon" type="image/png" href="../assets/images/logo.png"/>
        <!-- <link rel="stylesheet" type="text/css" href="../assets/css/stylePlaylists.css"/> -->
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
        <script type="text/javascript" src="../assets/script/bootstrap.min.js"></script>
        <script type="text/javascript" src="../assets/script/script.js"></script>
        <title>Playlists</title>
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center" style="margin-top: 5px">
                <div class="col-1">
                    <img src="../assets/images/logo.png" width="40" height="40"/>
                </div>
                <div class="col-4">
                    <div class="h1">Playlists</div>
                </div>
            </div>
        
            <div class="row">
                <div class="col">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped">
                            <thead class="thead-light">
                                <tr>
                                    <th>Nome</th>
                                    <th>Descrição</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php require_once '../results/TablePlaylist.php'; 
                                tablePlaylists();?>
                            </tbody>
                        </table>
                    </div>
                    
                    <a href="novaPlaylist.php" class="btn btn-success">Nova playlist</a>           
                </div>

                <div class="col">
                    <div class="table-responsive" >
                        <table class="table table-striped" id='tableMusicasPlaylist'>
                            <thead class="thead-light">
                                <tr>
                                    <th>Nome</th>
                                    <th>Artista</th>
                                    <th>Instrumento</th>
                                    <th>Idioma</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    if (isset($_GET['id'])){
                                    require_once '../results/TablePlaylist.php';
                                    musicasPlaylist($_GET['id']);
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>

                    <?php
                    if (isset($_GET['id'])){
                        echo '<a href="editarPlaylist.php?id='.$_GET['id'].'"><button>Editar</button></a>';
                    }
                    ?>
                </div>
                
            </div>
        
            <div class="row justify-content-center">
                <a href="telaInicial.php" class="btn btn-success">Voltar</a>
            </div>
        </div>
    </body>
</html>
