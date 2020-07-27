<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="h3">4Play - Bem vindo, <?php echo $_SESSION['nome']; ?></div>
        </div>
    </div>
    
    <hr/>
    
    <div class="row align-items-center justify-content-center">
        <div class="col-2">
            <a href="suasMusicas.php" class="btn btn-success">Suas músicas</a>
        </div>
        <div class="col-3">
            <img src="<?php echo BASE_URL; ?>assets/images/logo.png" width="200" height="200" />
        </div>
        <div class="col-2">
            <a href="playlists.php" class="btn btn-success">Playlists</a>
        </div>
    </div>
    
    <hr/>
    
    <div class="row justify-content-center">
        <div class="col-6">
            <img src="<?php echo BASE_URL; ?>assets/images/music-composition-symbols.png" class="img-fluid" />
        </div>
    </div>
</div>