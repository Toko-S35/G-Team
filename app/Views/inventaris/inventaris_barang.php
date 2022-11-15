<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>

<?php
function rupiah($angka)
{
    return number_format($angka, 0, ',', '.');
}
?>

<div class="page">
    <button class="btn_tampil" onclick="ivt_brg()">Inventaris Barang</button>
    <button class="btn_tampil" onclick="ipt_brg1()">Jenis Barang Baru</button>
    <button class="btn_tampil" onclick="ipt_brg2()">Tipe Barang Baru</button>

    <hr>



    <!-- Page Heading -->

    <div class="ctnr">

        <p>List Barang</p>
    </div>

    <hr>
    <?php if (session()->getFlashdata('pesan_j')) : ?>
        <div class="alert alert-success" role="alert"><?= session()->getFlashdata('pesan_j'); ?></div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('pesan_hapus_j')) : ?>
        <div class="alert alert-warning" role="alert"><?= session()->getFlashdata('pesan_hapus_j'); ?></div>
    <?php endif; ?>

    <div class="card shadow mb-4">


        <!-- DataTales Example -->

        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Transaksi</th>
                            <th>Nama Jenis Barang</th>
                            <th>Banyak Barang</th>
                            <th>Harga Beli</th>
                            <th>Harga Jual</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>

                        </tr>
                    </thead>

                    <tbody>
                        <?php $i = 1 ?>
                        <?php foreach ($gabungj as $g) : ?>

                            <?php
                            $daftar_hari = array(
                                'Sunday' => 'Minggu',
                                'Monday' => 'Senin',
                                'Tuesday' => 'Selasa',
                                'Wednesday' => 'Rabu',
                                'Thursday' => 'Kamis',
                                'Friday' => 'Jumat',
                                'Saturday' => 'Sabtu'
                            );

                            ?>


                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?php echo $g->asal_barang; ?> <br><?= $daftar_hari[date('l', strtotime($g->tanggal))]; ?> <?php echo $g->tanggal; ?></td>
                                <td><?php echo $g->nama_jenis_barang; ?></td>
                                <td><?php echo $g->banyak_barang; ?></td>
                                <td><?php echo 'Rp. ', rupiah($g->harga_beli); ?></td>
                                <td><?php echo 'Rp. ', rupiah($g->harga_jual); ?></td>
                                <td><?php echo $g->nama_jenis_barang; ?></td>
                                <td>



                                    <form action="<?= base_url('/edit_j/' . $g->id_jenis_barang); ?>" method="post" class="d-inline">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="_method" value="UPDATE">
                                        <button type="submit" class="btn btn-primary btn-circle " title="Ubah">
                                            <i class=" fas fa-edit"></i>
                                        </button>
                                    </form>

                                    <form action="<?= base_url('/delete_j/' . $g->id_jenis_barang); ?>" method="post" class="d-inline">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-primary btn-circle " title="Hapus" onclick="return confirm('apa kamu yakin akan hapus data?')">
                                            <i class=" fas fa-trash"></i>
                                        </button>
                                    </form>



                                </td>
                            <?php endforeach; ?>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="page">
    <hr>
    <?php if (session()->getFlashdata('pesan_t')) : ?>
        <div class="alert alert-success" role="alert"><?= session()->getFlashdata('pesan_t'); ?></div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('pesan_hapus_t')) : ?>
        <div class="alert alert-warning" role="alert"><?= session()->getFlashdata('pesan_hapus_t'); ?></div>
    <?php endif; ?>

    <div class="card shadow mb-4">

        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">

                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Tipe Barang</th>
                            <th>Banyak Barang (Tipe)</th>
                            <th>nama Jenis Barang</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                        <!-- <?php foreach ($gabung as $g) : ?>
                        <?php echo $g->nama_jenis_barang; ?>
                        <?php echo $g->nama_tipe_barang; ?>
                        <?php endforeach; ?> -->

                        <?php $j = 1 ?>

                        <?php foreach ($gabung as $g) : ?>
                            <tr>
                                <td><?= $j++; ?></td>
                                <td><?php echo $g->nama_tipe_barang; ?></td>
                                <td><?php echo $g->banyak_barang_tipe; ?></td>

                                <td>
                                    <?php echo $g->nama_jenis_barang; ?>
                                <td>


                                    <form action="<?= base_url('/edit_t/' . $g->id_tipe_barang); ?>" method="post" class="d-inline">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="_method" value="UPDATE">
                                        <button type="submit" class="btn btn-primary btn-circle " title="Ubah">
                                            <i class=" fas fa-edit"></i>
                                        </button>
                                    </form>

                                    <form action="<?= base_url('/delete_t/' . $g->id_tipe_barang); ?>" method="post" class="d-inline">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-primary btn-circle " title="Hapus" onclick="return confirm('apa kamu yakin akan hapus data?')">
                                            <i class=" fas fa-trash"></i>
                                        </button>
                                    </form>


                                </td>
                            <?php endforeach; ?>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- End of Main Content -->



<script>
    function ivt_brg() {
        location.href = "<?= base_url('/inventaris'); ?>"
    }

    function ipt_brg1() {
        location.href = "<?= base_url('/input_barang_j'); ?>"
    }

    function ipt_brg2() {
        location.href = "<?= base_url('/input_barang_t'); ?>"
    }
</script>


<?= $this->endSection(); ?>