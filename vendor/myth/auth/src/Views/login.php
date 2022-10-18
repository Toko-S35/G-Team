<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>

<!-- for container -->
<div style="    
    background-color: #F14080;
    width: 500px;
    min-height: 500px;
    margin: 7em auto;
    border-radius: 1.5em;
    box-shadow: 0px 11px 35px 2px rgba(0, 0, 0, 0.14);">


    <!-- for login text -->
    <div style="margin:7rem;">

        <h2 style="    
        padding: 30px;
        text-align: center;
        color: #171C7B;
        font-family: roboto;
        font-weight: bold;
        font-size: 23px;">
            <?= lang('Auth.loginTitle') ?></h2>


        <?= view('Myth\Auth\Views\_message_block') ?>

        <!-- for form -->
        <form style="
            width: 100%;
            color:#171C7B;
            font-weight: bold;
            font-size: 15px;
            
            
            
            " action="<?= url_to('login') ?>" method="post">
            <?= csrf_field() ?>

            <?php if ($config->validFields === ['email']) : ?>


            <div>
                <label><?= lang('Auth.email') ?></label>
                <input type="email <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login"
                    placeholder="<?= lang('Auth.email') ?>">
                <?= session('errors.login') ?>



                <?php else : ?>
                <!-- <div class="form-group"> -->
                <label><?= lang('Auth.emailOrUsername') ?></label>
                <input type="text" style="
                margin-top: 8px; 
                margin-bottom: 8px; 
                width:270px;
                height:30px;
                border-radius: 5px;
                border-color:#F4EB93;
                font-family: roboto;
                font: size 13px;
                
                <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login"
                    placeholder="<?= lang('Auth.emailOrUsername') ?>">

                <?= session('errors.login') ?>

                <?php endif; ?>

                <!-- <div class="form-group"> -->
                <br>
                <label><?= lang('Auth.password') ?></label>
                <br>

                <input type="password" name="password" style="
                margin-top: 8px; 
                margin-bottom: 8px; 
                width:270px;
                height:30px;
                border-radius: 5px;
                border-color:#F4EB93;
                font-family: roboto;
                font: size 13px;

                    <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>"
                    placeholder="<?= lang('Auth.password') ?>">
                <?= session('errors.password') ?>


                <?php if ($config->allowRemembering) : ?>
                <!-- <div class="form-check"> -->
                <label>
                    <input type="checkbox" name="remember" <?php if (old('remember')) : ?> checked <?php endif ?>>
                    <?= lang('Auth.rememberMe') ?>
                </label>
            </div>
            <?php endif; ?>

            <br>

            <button type="submit" style="
            cursor: pointer;
            border-radius: 5em;
            background-color: #F4EB93;
            padding-left: 40px;
            padding-right: 40px;
            padding-bottom: 10px;
            padding-top: 10px;
            font-family: roboto;
            margin-left:30%;
            font-size: 15px;
            color:#171C7B; 
            border-color:#171C7B;         
            font-weight: bold;
            " onMouseOver="this.style.color='#F14080'" onMouseOut="this.style.color='#171C7B'">

                <?= lang('Auth.loginAction') ?></button>
        </form>

        <hr>

        <?php if ($config->allowRegistration) : ?>
        <p><a style="margin-left:33%;color:#F8F8FF;" onMouseOver="this.style.color='#171C7B'"
                onMouseOut="this.style.color='#F8F8FF'"
                href="<?= url_to('register') ?>"><?= lang('Auth.needAnAccount') ?></a></p>
        <?php endif; ?>
        <!-- <?php if ($config->activeResetter) : ?>
        <p><a style="margin-left:28%;color:#F8F8FF;" onMouseOver="this.style.color='#171C7B'"
                onMouseOut="this.style.color='#F8F8FF'"
                href="<?= url_to('forgot') ?>"><?= lang('Auth.forgotYourPassword') ?></a></p>
        <?php endif; ?> -->

    </div>

</div>

</div>

<?= $this->endSection() ?>