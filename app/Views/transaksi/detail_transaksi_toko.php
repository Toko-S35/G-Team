<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>

<p><a href="<?= base_url('ekspedisi_toko'); ?>" class="btn_tampil" style="margin:10px ;">Back</a></p>

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
                        <th>Tanggal</th>
                        <th>Nama Toko</th>
                        <th>Biaya Ekspedisi</th>
                        <th>Laporan</th>
                    </tr>

                    </tfoot>
                <tbody>
                    <?php $i = 1 ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $ekspedisi['tanggal']; ?></td>
                        <td><?= $ekspedisi['nama_toko']; ?></td>
                        <td><?= $ekspedisi['biaya_ekspedisi']; ?></td>
                        <td><?= $ekspedisi['keterangan']; ?></td>

                    </tr>

                </tbody>

            </table>
        </div>


    </div>


    <!-- End of Main Content -->

    <div class="card shadow mb-4">

        <!-- DataTales Example -->


        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Jenis Barang</th>
                            <th>Tipe Barang</th>
                            <th>Banyak Barang</th>
                            <th>Aksi</th>
                        </tr>

                    <tbody>

                        <?php $i = 1 ?>

                        <?php foreach ($ekspedisijtb as $k) : ?>
                            <tr>
                                <?php if ($id_transaksi == $k['id_transaksi']) {

                                ?>
                                    <td><?= $i++; ?></td>
                                    <td><?= $k['jenis_barang']; ?></td>
                                    <td><?= $k['tipe_barang']; ?></td>
                                    <td><?= $k['banyak_barang']; ?></td>
                                    <td>

                                        <form action="<?= base_url('/edit_jtb/' . $k['id_jtb']); ?>" method="post" class="d-inline">
                                            <?= csrf_field(); ?>
                                            <input type="hidden" name="_method" value="UPDATE">
                                            <button type="submit" class="btn btn-primary btn-circle " title="Ubah">
                                                <i class=" fas fa-edit"></i>
                                            </button>
                                        </form>

                                        <form action="<?= base_url('/delete_jtb_toko/' . $k['id_jtb']); ?>" method="post" class="d-inline">
                                            <?= csrf_field(); ?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-primary btn-circle " title="Hapus" onclick="return confirm('apa kamu yakin akan hapus data?')">
                                                <i class=" fas fa-trash"></i>
                                            </button>
                                        </form>

                            </tr>
                    <?php  }
                            endforeach; ?>

                    </tbody>

                </table>
                <?php if ($ekspedisi['status'] == 0) { ?>
                    <?= aksi($i) ?>
                <?php }  ?>

            </div>
        </div>



        <div class="card-body">
            <table class="table table-bordered" width="100%" cellspacing="0">


                <thead>

                    <tr>
                        <?php if ($ekspedisi['status'] == 0) { ?>
                            <th>Aksi</th>
                        <?php }  ?>
                    </tr>
                </thead>
                <tbody>
                    <td>

                        <div style="margin-right: 10px; ">
                            <?php if ($ekspedisi['status'] == 0) { ?>

                                <small>Balas setiap catatan dari toko agar notifikasi hilang</small><br>


                                <div class="col-sm-4">

                                    <form action="<?= base_url('/update_catatan_t/' . $ekspedisi['id_transaksi']); ?>" method="post">
                                        <input type="hidden" name="_method" value="PUT" /><?= csrf_field(); ?>
                                        <div class="form-group">
                                            <label>Catatan</label>
                                            <textarea name="keterangan" value="<?= $ekspedisi['keterangan']; ?>" class="form-control <?= ($validation->hasError('keterangan')) ?
                                                                                                                                            'is-invalid' : ''; ?>"></textarea>
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('keterangan'); ?>

                                            </div>
                                        </div>
                                        <input type="hidden" name="pesan" value=<?= $ekspedisi['pesan'] = 0 ?>>

                                        <button type="submit" class="btn_tampil">Kirim Catatan</button>
                                    </form><br>

                                    <button class="btn alert alert-warning">Butuh Validasi Toko</button>



                                </div>


                        </div>
        </div>



    <?php } elseif ($ekspedisi['status'] == 1) { ?>
        <form action="<?= base_url('/update_status/' . $ekspedisi['id_transaksi']); ?>" method="post" class="d-inline">
            <?= csrf_field(); ?>
            <input type="hidden" name="_method" value="UPDATE">

            <input type="hidden" name="status" value=<?= $ekspedisi['id_transaksi'] = 2 ?>>
            <button class="btn alert alert-info" style="font-size: 12px; padding:5px; margin:5px; border:solid;">Butuh Validasi Gudang</button>
        </form>
    <?php } else { ?>
        <button class="btn alert alert-success" style="font-size: 12px; padding:5px; ">Validasi Selesai</button>

    <?php }  ?>
    </div>

    </td>


    </tbody>
    </table>
</div>



</div>

<?php
function aksi($i)
{

    echo '<a href="/input_jtb_toko" class="fas fa-edit" style="margin:10px;" title="Tambah"></a>';
}

?>


<?= $this->endSection(); ?>