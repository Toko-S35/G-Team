<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>


<div class="page">
    <button class="btn_tampil" onclick="lst_tg()">Transaksi Retur Barang</button>
    <?php if (in_groups('kp-toko')) : ?>
        <button class="btn_tampil" onclick="ipt_tg()">Input Retur Barang</button>
    <?php endif; ?>


    <hr>


    <!-- Page Heading -->

    <div class="ctnr">

        <p>Transaksi Retur Barang</p>
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
                            <th>Tanggal Retur</th>
                            <th>Transaksi di Retur</th>
                            <th>Biaya Ekspedisi</th>
                            <th>Status</th>
                            <th>Aksi</th>


                        </tr>
                    </thead>

                    <tbody>
                        <?php $i = 1 ?>
                        <?php foreach ($ekspedisi as $k) : ?>



                            <?php
                            $namahari = date('l', strtotime($k['data']));
                            ?>
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
                                <td><?= $k['tanggal']; ?></td>
                                <td><?= $daftar_hari[$namahari]; ?>( <?= $k['data']; ?> )
                                </td>
                                <td><?= $k['biaya_ekspedisi']; ?></td>

                                <td>
                                    <?php if ($k['status'] == 0) {
                                        echo '<div class="btn alert-warning">belum dikonfirmasi oleh toko</div>';
                                    } elseif ($k['status'] == 1) {
                                        echo '<button class="btn alert-warning" >proses validasi</button>';
                                    } else {
                                        echo '<div class="btn alert-success">validasi selesai</div>';
                                    } ?></td>

                                <td>

                                    <a href=<?= base_url('/detail_transaksi_toko/' . $k['id_transaksi']); ?> class="btn btn-primary btn-circle  far fa-arrow-alt-circle-up" title="Selengkapnya">
                                    </a>


                                    <form action="<?= base_url('/edit_toko/' . $k['id_transaksi']); ?>" method="post" class="d-inline">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="_method" value="UPDATE">
                                        <button type="submit" class="btn btn-primary btn-circle " title="Ubah">
                                            <i class=" fas fa-edit"></i>
                                        </button>
                                    </form>

                                    <form action="<?= base_url('/delete_retur/' . $k['id_transaksi']); ?>" method="post" class="d-inline">
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
        location.href = "<?= base_url('/retur_barang'); ?>"
    }

    function ipt_tg() {
        location.href = "<?= base_url('/input_retur'); ?>"
    }
</script>





<?= $this->endSection(); ?>