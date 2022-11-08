<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>


<div class="page">
    <button class="btn_tampil" onclick="lst_tg()">Transaksi Transaksi Toko</button>
    <button class="btn_tampil" onclick="ipt_tg()">Input Transaksi Toko</button>

    <hr>


    <hr>

    <!-- Page Heading -->

    <div class="ctnr">

        <p>Transaksi Gudang</p>
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
                <table class="table table-bordered" id="dataTable2" width="100%" cellspacing="0">

                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Tanggal</th>
                            <th>Nama Toko</th>
                            <th>Biaya Ekspedisi</th>
                            <th>Detail Pengiriman</th>
                            <th>Aksi</th>


                        </tr>
                    </thead>

                    <tbody>
                        <?php $i = 1 ?>
                        <?php foreach ($ekspedisi as $k) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $k['tanggal']; ?></td>
                                <td><?= $k['nama_toko']; ?></td>
                                <td><?= $k['biaya_ekspedisi']; ?></td>
                                <td>
                                    <a href=<?= base_url('/detail_transaksi'); ?> class="fas fa-chevron-circle-right">
                                        Selengkapnya</a>
                                </td>

                                <td>
                                    <form action="<?= base_url('/edit_g/' . $k['id_transaksi']); ?>" method="post" class="d-inline">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="_method" value="UPDATE">
                                        <button type="submit" class="btn btn-primary btn-circle " title="Ubah">
                                            <i class=" fas fa-edit"></i>
                                        </button>
                                    </form>

                                    <form action="<?= base_url('/delete_g/' . $k['id_transaksi']); ?>" method="post" class="d-inline">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-primary btn-circle " title="Hapus" onclick="return confirm('apa kamu yakin akan hapus data?')">
                                            <i class=" fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>

                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>

            </div>
        </div>

    </div>


    <!-- End of Main Content -->
</div>



<script>
    function lst_tg() {
        location.href = "<?= base_url('/ekspedisi_toko'); ?>"
    }

    function ipt_tg() {
        location.href = "<?= base_url('/input_ekspedisi_toko'); ?>"
    }
</script>





<?= $this->endSection(); ?>