<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>


<?php
function rupiah($angka)
{
    return number_format($angka, 0, ',', '.');
}
?>


<div class="page">
    <button class="btn_tampil" onclick="lst_tg()">Transaksi Toko</button>
    <?php if (in_groups('kp-gudang')) : ?>
        <button class="btn_tampil" onclick="ipt_tg()">Input Transaksi Toko</button>
    <?php endif; ?>


    <hr>


    <!-- Page Heading -->

    <div class="ctnr">

        <p>Transaksi Toko</p>
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
                            <th>Status</th>
                            <th>Aksi</th>


                        </tr>
                    </thead>

                    <?php if (in_groups('kp-gudang')) : ?>
                        <tbody>
                            <?php $i = 1 ?>
                            <?php foreach ($ekspedisi as $k) : ?>

                                <?php
                                $namahari = date('l', strtotime($k['tanggal']));
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
                                    <td><?= $daftar_hari[$namahari]; ?> <?= $k['tanggal']; ?></td>
                                    <td><?= $k['nama_toko']; ?></td>
                                    <td><?= 'Rp. ', rupiah($k['biaya_ekspedisi']); ?></td>

                                    <td>
                                        <?php if ($k['status'] == 0) {
                                            echo '<div class="btn alert-warning">Butuh Validasi Toko</div>';
                                            if ($k['pesan'] == 1) {
                                                echo '<div class="far fa-bell alert-danger" style="float:right;"><div>';
                                            }
                                        } elseif ($k['status'] == 1) {
                                            echo '<button class="btn alert-info" >Butuh Validasi Gudang</button>';
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

                                        <form action="<?= base_url('/delete_toko/' . $k['id_transaksi']); ?>" method="post" class="d-inline">
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
                    <?php endif; ?>




                    <?php if (in_groups('kp-toko')) : ?>
                        <tbody>
                            <?php $i = 1 ?>
                            <?php foreach ($ekspedisi as $k) : ?>
                                <tr>

                                    <?php
                                    $namahari = date('l', strtotime($k['tanggal']));
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

                                    <?php if ($k['nama_toko'] == user()->username) {
                                    ?>

                                        <td><?= $i++; ?></td>
                                        <td><?= $daftar_hari[$namahari]; ?> <?= $k['tanggal']; ?></td>
                                        <td><?= $k['nama_toko']; ?></td>
                                        <td><?= 'Rp. ', rupiah($k['biaya_ekspedisi']); ?></td>

                                        <td>
                                            <?php if ($k['status'] == 0) {
                                                echo '<div class="btn alert-info">Butuh Validasi Toko</div>';
                                            } elseif ($k['status'] == 1) {
                                                echo '<button class="btn alert-warning" >Butuh Validasi Gudang</button>';
                                            } else {
                                                echo '<div class="btn alert-success">validasi selesai</div>';
                                            } ?></td>


                                        <td>

                                            <a href=<?= base_url('/barang_masuk/' . $k['id_transaksi']); ?> class="btn btn-primary btn-circle  far fa-arrow-alt-circle-up" title="Selengkapnya">
                                            </a>

                                        </td>



                                </tr>
                            <?php } ?>
                        <?php endforeach; ?>


                        </tbody>
                    <?php endif; ?>




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