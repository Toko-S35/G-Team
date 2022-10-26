<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content-kp-toko'); ?>



<div class="container-fluid">

    <!-- Page Heading -->
    <?php if (in_groups('bos')) : ?>
    <h1 class="h3 mb-4 text-gray-800">Selamat Datang Bos di Sistem Informasi Toko Kasih Abadi Serba 35</h1>
    <?php endif; ?>
    <?php if (in_groups('kp-toko')) : ?>
    <h1 class="h3 mb-4 text-gray-800">Selamat Datang Kepala Toko di Sistem Informasi Toko Kasih Abadi Serba 35</h1>
    <?php endif; ?>
    <img style="border: radius 2px; width:400px;  padding:50px;" src="<?= base_url(); ?>/img/s35.jpg">

</div>
<?= $this->endSection(); ?>