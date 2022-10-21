<?php if (session()->has('message')) : ?>
<div style="background-color: #ddffdd;
  border-left: 6px solid #04AA6D;">
    <?= session('message') ?>
</div>
<?php endif ?>

<?php if (session()->has('error')) : ?>
<div style="background-color: #ffffcc;
    border-left: 6px solid #ffeb3b;">
    <?= session('error') ?>
</div>
<?php endif ?>

<?php if (session()->has('errors')) : ?>
<ul style="background-color: #ffffcc;
    border-left: 6px solid #ffeb3b;">
    <?php foreach (session('errors') as $error) : ?>
    <li><?= $error ?></li>
    <?php endforeach ?>
</ul>
<?php endif ?>