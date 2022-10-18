<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>

<div style="    
    background-color: #F14080;
    width: 500px;
    min-height: 520px;
    margin: 7em auto;
    border-radius: 1.5em;
    box-shadow: 0px 11px 35px 2px rgba(0, 0, 0, 0.14);">

    <div style="margin:7rem;">

        <h2 style="    
                padding: 30px 30px 0px 30px;
                text-align: center;
                color: #171C7B;
                font-family: roboto;
                font-weight: bold;
                font-size: 23px;">
            <?= lang('Auth.register') ?></h2>

        <?= view('Myth\Auth\Views\_message_block') ?>

        <form style="
            width: 100%;
            color:#171C7B;
            font-weight: bold;
            font-size: 15px;
            
            " action="<?= url_to('register') ?>" method="post">
            <?= csrf_field() ?>


            <label for="email"><?= lang('Auth.email') ?></label>
            <input type="email" style="
                margin-top: 8px; 
                margin-bottom: 8px; 
                width:270px;
                height:30px;
                border-radius: 5px;
                border-color:#F4EB93;
                font-family: roboto;
                font: size 13px;
            
            <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" aria-describedby="emailHelp"
                placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>">
            <!-- <small id="emailHelp"><?= lang('Auth.weNeverShare') ?></small> -->


            <div>
                <label for="username"><?= lang('Auth.username') ?></label>
                <input type="text" style="
                margin-top: 8px; 
                margin-bottom: 8px; 
                width:270px;
                height:30px;
                border-radius: 5px;
                border-color:#F4EB93;
                font-family: roboto;
                font: size 13px;

                <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username"
                    placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>">
            </div>

            <div>
                <label for="password"><?= lang('Auth.password') ?></label>
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
                    placeholder="<?= lang('Auth.password') ?>" autocomplete="off">
            </div>

            <div>
                <label for="pass_confirm"><?= lang('Auth.repeatPassword') ?></label>
                <input type="password" name="pass_confirm" style="
                margin-top: 8px; 
                margin-bottom: 8px; 
                width:270px;
                height:30px;
                border-radius: 5px;
                border-color:#F4EB93;
                font-family: roboto;
                font: size 13px;

                <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>"
                    placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
            </div>

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
            " onMouseOver="this.style.color='#F14080'"
                onMouseOut="this.style.color='#171C7B'"><?= lang('Auth.register') ?></button>
        </form>


        <hr>

        <p> <a style="margin-left:45%;color:#F8F8FF;" onMouseOver="this.style.color='#171C7B'"
                onMouseOut="this.style.color='#F8F8FF'" href="<?= url_to('login') ?>"><?= lang('Auth.signIn') ?></a>
        </p>




    </div>
</div>

<?= $this->endSection() ?>