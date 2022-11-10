<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>



<div class="page">

    <hr>

    <div id="List" class="w3-container w3-display-container city">
        <span onclick="this.parentElement.style.display='none'" class="w3-button w3-large w3-display-topright">&times;</span>



        <div class="ctnr">
            <p>Form Ubah Data Detail Toko</p>
        </div>
        <hr>
        <div class="col-sm-4">

            <form action="<?= base_url('/update_jtb/' . $ekspedisi['id_jtb']); ?>" method="post">
                <input type="hidden" name="_method" value="PUT" /><?= csrf_field(); ?>

                <div class="form-group">
                    <label>Transaksi Toko</label>
                    <select name="id_transaksi" class="form-control">
                        <?php foreach ($toko as $k) : ?>

                            <?=
                            $date = date('d F Y', strtotime($k['tanggal']));
                            $namahari = date('l', strtotime($date));
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

                            <option name="id_transaksi[]" value="<?= $k['id_transaksi']; ?>">
                                <?= $k['nama_toko']; ?> <?= $daftar_hari[$namahari]; ?> (<?= date('d F Y', strtotime($k['tanggal'])); ?>)</option>

                        <?php endforeach; ?>

                    </select>
                </div>


                <div class="form-group">
                    <label>Nama Jenis Barang</label>
                    <select name="jenis_barang" class="form-control">
                        <?php foreach ($jns as $k) : ?>

                            <option value="<?= $k['nama_jenis_barang']; ?>"><?= $k['nama_jenis_barang']; ?></option>

                        <?php endforeach; ?>

                    </select>

                </div>

                <div class="form-group">
                    <label>Nama Tipe Barang</label>
                    <select name="tipe_barang" class="form-control">
                        <?php foreach ($tpe as $k) : ?>

                            <option value="<?= $k['nama_tipe_barang']; ?>"><?= $k['nama_tipe_barang']; ?></option>

                        <?php endforeach; ?>

                    </select>

                </div>


                <div class="form-group">
                    <label>Banyak Barang</label>
                    <input type="text" name="banyak_barang" class="form-control" value="<?= old('banyak_barang') ?>" class="form-control <?= ($validation->hasError('banyak_barang')) ?
                                                                                                                                                'is-invalid' : ''; ?>">
                    <div style="color:red; font: size 5px;"><?= $validation->getError('banyak_barang'); ?>
                    </div>
                </div>




                <button type="submit" class="btn_tampil">Ubah Data</button>
            </form>


        </div>
    </div>


</div>




<?= $this->endSection(); ?>