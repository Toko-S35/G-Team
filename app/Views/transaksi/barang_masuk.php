<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>



<!-- <div class="page">
    <button class="btn_tampil" onclick="openCity('List')">Daftar Pembelian</button>
    <button class="btn_tampil" onclick="openCity('Input')">Detail</button>

    <hr>

    <div id="List" class="w3-container w3-display-container city">
        <span onclick="this.parentElement.style.display='none'"
            class="w3-button w3-large w3-display-topright">&times;</span>


       

        <div class="ctnr">

            <p>Barang</p>
        </div>

        <hr> -->

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
                        <th>Keterangan</th>
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
                    </tr>
                </thead>
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



                        </tr>
                <?php }
                        endforeach; ?>
                </tbody>

            </table>



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

                                    <small>Pastikan semua data barang sudah sesuai sebelum klik validasi barang,</small><br>
                                    <small>jika data belum sesuai tulis catatan dan tunggu perbaikan sebelum klik tombol validasi barang</small><br>


                                    <div class="col-sm-4">

                                        <form action="<?= base_url('/update_catatan/' . $ekspedisi['id_transaksi']); ?>" method="post">
                                            <input type="hidden" name="_method" value="PUT" /><?= csrf_field(); ?>
                                            <div class="form-group">
                                                <label>Catatan</label>
                                                <textarea name="keterangan" value="<?= $ekspedisi['keterangan']; ?>" class="form-control <?= ($validation->hasError('keterangan')) ?
                                                                                                                                                'is-invalid' : ''; ?>"></textarea>
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('keterangan'); ?>

                                                </div>
                                            </div>
                                            <input type="hidden" name="pesan" value=<?= $ekspedisi['pesan'] = 1 ?>>

                                            <button type="submit" class="btn_tampil">Kirim Catatan</button>
                                        </form><br>


                                        <form action="<?= base_url('/update_status/' . $ekspedisi['id_transaksi']); ?>" method="post" class="d-inline">
                                            <?= csrf_field(); ?>
                                            <input type="hidden" name="_method" value="UPDATE">

                                            <input type="hidden" name="status" value=<?= $ekspedisi['id_transaksi'] = 1 ?>>
                                            <button class="btn alert alert-info" style="font-size: 12px; padding:5px; margin:5px; border:solid;">Validasi Barang</button>
                                        </form>


                                    </div>


                            </div>
            </div>



        <?php } elseif ($ekspedisi['status'] == 1) { ?>
            <button class="btn alert alert-warning" style="font-size: 12px; padding:5px; ">Butuh Validasi Gudang</button>
        <?php } else { ?>
            <button class="btn alert alert-success" style="font-size: 12px; padding:5px; ">Validasi Selesai</button>

        <?php }  ?>
        </div>

        </td>


        </tbody>
        </table>
    </div>
</div>



<?= $this->endSection(); ?>