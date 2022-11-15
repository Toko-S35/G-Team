<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>

<?php
function rupiah($angka)
{
    return number_format($angka, 0, ',', '.');
}
?>

<div class="ctnr">
    <p>Detail Transaksi Gudang</p>
</div>

<hr>

<p><a href="<?= base_url('gudang'); ?>" class="btn_tampil" style="margin:10px ;">Back</a></p>


<div class="card shadow mb-4">


    <!-- DataTales Example -->

    <div class="card-body">

        <tbody>

            <div class="card-kp-n">
                <header class="card-h">
                    <?= $ekspedisi['keterangan']; ?>

                    <hr>
                </header>
                <div class="card-f">
                    <div class="card-d"><?= $ekspedisi['asal_barang']; ?></div>
                    <div class="card-d"><?= $ekspedisi['tanggal']; ?></div>
                    <div class="card-d"><?= 'Rp.', rupiah($ekspedisi['biaya_ekspedisi']); ?></div>


                </div>
            </div>
            <img class="img-n" src="<?= base_url(); ?>/img/<?= $ekspedisi['nota']; ?>">



        </tbody>


    </div>

    <?= $this->endSection(); ?>