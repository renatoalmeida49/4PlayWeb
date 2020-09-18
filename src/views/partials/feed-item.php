<div class="row  justify-content-center feed-item">
    <a href="<?=$base;?>/music/<?=$data->id;?>">
        <div class="music-title"><img src="<?=$base;?>/assets/images/music64.png"/><?=$data->nome;?></div>
        <div class="music-artist"><img src="<?=$base;?>/assets/images/artist-icon.png"/><?=$data->artista;?></div>
        <div class="music-info">
            <img src="<?=$base;?>/assets/images/instrument-icon.png"/>
            <?=$data->instrumento;?>  -
            <img src="<?=$base;?>/assets/images/capo-icon.png"/><?=$data->capotraste;?>
        </div>
    </a>
</div>
