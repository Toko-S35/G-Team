<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>


<div class="page">
    <button class="btn_tampil" onclick="ipt_brg1()">Transaksi Gudang</button>
    <button class="btn_tampil" onclick="ipt_brg2()">Input Transaksi Gudang</button>

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
                            <th>asal barang</th>
                            <th>Tanggal</th>
                            <th>Biaya Ekspedisi</th>
                            <th>Aksi</th>


                        </tr>
                    </thead>

                    <tbody>
                        <?php $i = 1 ?>
                        <?php foreach ($ekspedisi as $k) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $k['asal_barang']; ?></td>
                                <td><?= $k['tanggal']; ?></td>
                                <td><?= $k['biaya_ekspedisi']; ?></td>


                                <td>
                                    <a href=<?= base_url('detail_gudang/' . $k['id_transaksi']); ?> class="btn btn-primary btn-circle  far fa-arrow-alt-circle-up" title="Selengkapnya">
                                    </a>

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
    function ipt_brg1() {
        location.href = "<?= base_url('/gudang'); ?>"
    }

    function ipt_brg2() {
        location.href = "<?= base_url('/input_gudang'); ?>"
    }
</script>





<?= $this->endSection(); ?>