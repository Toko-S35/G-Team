<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>



<div class="page">

    <hr>

    <div id="List" class="w3-container w3-display-container city">
        <span onclick="this.parentElement.style.display='none'" class="w3-button w3-large w3-display-topright">&times;</span>



        <div class="ctnr">
            <p>Form Ubah Data Gudang</p>
        </div>
        <hr>
        <div class="col-sm-4">

            <form action="<?= base_url('/update_toko/' . $ekspedisi['id_transaksi']); ?>" method="post">
                <input type="hidden" name="_method" value="PUT" /><?= csrf_field(); ?>

                <div class="form-group">
                    <label>Nama Toko</label>
                    <input type="text" name="nama_toko" value="<?= $ekspedisi['nama_toko']; ?>" class="form-control <?= ($validation->hasError('nama_toko')) ?
                                                                                                                        'is-invalid' : ''; ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('nama_toko'); ?>
                    </div>

                </div>

                <div class="form-group">
                    <label for="start">Tanggal:</label><br>
                    <input type="date" name="tanggal" value="<?= $ekspedisi['tanggal']; ?>" class="form-control <?= ($validation->hasError('tanggal')) ?
                                                                                                                    'is-invalid' : ''; ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('tanggal'); ?>
                    </div>
                </div>


                <div class="form-group">
                    <label>Biaya Ekspedisi</label>
                    <input type="text" name="biaya_ekspedisi" value="<?= $ekspedisi['biaya_ekspedisi']; ?>" class="form-control <?= ($validation->hasError('biaya_ekspedisi')) ?
                                                                                                                                    'is-invalid' : ''; ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('biaya_ekspedisi'); ?> </div>
                </div>

                <div class="form-group">
                    <label>Keterangan </label>
                    <input type="text" name="keterangan" value="<?= $ekspedisi['keterangan']; ?>" class="form-control <?= ($validation->hasError('keterangan')) ?
                                                                                                                            'is-invalid' : ''; ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('keterangan'); ?>
                    </div>
                </div>



                <button type="submit" class="btn_tampil">Ubah Data Toko</button>
            </form>


        </div>
    </div>


</div>




<?= $this->endSection(); ?>