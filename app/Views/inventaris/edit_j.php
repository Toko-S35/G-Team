<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>



<div class="page">

    <hr>

    <div id="List" class="w3-container w3-display-container city">
        <span onclick="this.parentElement.style.display='none'"
            class="w3-button w3-large w3-display-topright">&times;</span>



        <div class="ctnr">
            <p>Form Ubah Jenis Barang</p>
        </div>
        <hr>
        <div class="col-sm-4">

            <form action="<?= base_url('/update_j/' . $jenisbarang['id_jenis_barang']); ?>" method="post">
                <input type="hidden" name="_method" value="PUT" /><?= csrf_field(); ?>

                <label>Transaksi</label>
                    <select name="id_transaksi" class="form-control">
                        <?php foreach ($gudang as $k) : ?>
                        <option value="<?= $k['id_transaksi']; ?>"><?= $k['asal_barang']; ?>(<?= $k['tanggal']; ?>)</option>

                        <?php endforeach; ?>

                    </select>


                <div class="form-group">
                    <label>Nama Jenis Barang</label>
                    <input type="text" name="nama_jenis_barang" value="<?= $jenisbarang['nama_jenis_barang']; ?>"
                        class="form-control <?= ($validation->hasError('nama_jenis_barang')) ?
                                                                                                                                            'is-invalid' : ''; ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('nama_jenis_barang'); ?>
                    </div>
                </div>

                <div class="form-group">
                    <label>Harga Beli</label>
                    <input type="text" name="harga_beli" value="<?= $jenisbarang['harga_beli']; ?>"
                        class="form-control <?= ($validation->hasError('harga_beli')) ?
                                                                                                                            'is-invalid' : ''; ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('harga_beli'); ?>
                    </div>
                </div>

                <div class="form-group">
                    <label>Harga jual</label>
                    <input type="text" name="harga_jual" value="<?= $jenisbarang['harga_jual']; ?>"
                        class="form-control <?= ($validation->hasError('harga_jual')) ?
                                                                                                                            'is-invalid' : ''; ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('harga_jual'); ?>
                    </div>
                </div>

                <div class="form-group">
                    <label>Banyak Barang</label>
                    <input type="text" name="banyak_barang" value="<?= $jenisbarang['banyak_barang']; ?>"
                        class="form-control <?= ($validation->hasError('banyak_barang')) ?
                                                                                                                                    'is-invalid' : ''; ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('banyak_barang'); ?>
                    </div>
                </div>

                <div class="form-group">
                    <label>Keterangan</label>
                    <input type="text" name="keterangan" value="<?= $jenisbarang['keterangan']; ?>"
                        class="form-control <?= ($validation->hasError('keterangan')) ?
                                                                                                                            'is-invalid' : ''; ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('keterangan'); ?>
                    </div>
                </div>


                <button type="submit" class="btn_tampil">Ubah Data Barang</button>
            </form>


        </div>
    </div>


</div>




<?= $this->endSection(); ?>