<?php if (session()->has('message')) : ?>
<div style="color:aliceblue; margin-bottom:10px;">
    <?= session('message') ?>
</div>
<?php endif ?>

<?php if (session()->has('error')) : ?>
<div style="color:aliceblue; margin-bottom:10px;">
    <?= session('error') ?>
</div>
<?php endif ?>

<?php if (session()->has('errors')) : ?>
<ul style="color:aliceblue; margin-bottom:10px;">
    <?php foreach (session('errors') as $error) : ?>
    <li><?= $error ?></li>
    <?php endforeach ?>
</ul>
<?php endif ?>