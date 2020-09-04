<?= $render('header'); ?>
<section class="container main">

    <?= $render('aside', ['activeMenu' => 'settings']); ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <h3 style="color: white">Configurações de conta</h3>
                <form method="post" action="<?=$base;?>/settings/action" class="form-settings">
                    <?php if(!empty($flash)): ?>
                        <div class="flash"><?=$flash;?></div>
                    <?php endif; ?>
                    
                    <label for="name">Nome:</label><br/>
                    <input type="text" value="<?=$user->name;?>" id="name" name="name"><br/>

                    <label for="login">Login:</label><br/>
                    <input type="text" value="<?=$user->login;?>" id="login" name="login"><br/>

                    <label for="password">Nova senha:</label><br/>
                    <input type="password" id="password" name="password"><br/>

                    <label for="repeatPassword">Repita senha:</label><br/>
                    <input type="password" id="repeatPassword" name="repeatPassword"><br/>

                    <input class="btn btn-success" type="submit" value="Enviar">
                </form>
            </div>
    </div>

</section>
<?= $render('footer'); ?>