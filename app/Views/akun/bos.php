<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>



<div class="page">

    <hr>

    <div id="List" class="w3-container w3-display-container city">
        <span onclick="this.parentElement.style.display='none'"
            class="w3-button w3-large w3-display-topright">&times;</span>



        <div class="ctnr">
            <p>Form Ubah Tipe Barang</p>
        </div>
        <hr>
        <div class="col-sm-4">


            <form action="<?= base_url('/update_t/' . $tipebarang['id_tipe_barang']); ?>" method="post">
                <input type="hidden" name="_method" value="PUT" /><?= csrf_field(); ?>
                <div class="form-group">
                    <label>Nama Jenis Barang</label>
                    <select name="id_jenis_barang" class="form-control">
                        <?php foreach ($jenisbarang as $k) : ?>
                        <option value="<?= $k['id_jenis_barang']; ?>"><?= $k['nama_jenis_barang']; ?></option>

                        <?php endforeach; ?>

                    </select>

                </div>

                <div class="form-group">
                    <label>Nama Tipe Barang</label>
                    <input type="text" name="nama_tipe_barang" value="<?= $tipebarang['nama_tipe_barang']; ?>"
                        class="form-control <?= ($validation->hasError('nama_tipe_barang')) ?
                                                                                                                                        'is-invalid' : ''; ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('nama_tipe_barang'); ?>
                    </div>
                </div>

                <div class="form-group">
                    <label>Banyak Barang (Tipe)</label>
                    <input type="text" name="banyak_barang_tipe" value="<?= $tipebarang['banyak_barang_tipe']; ?>"
                        class="form-control <?= ($validation->hasError('banyak_barang_tipe')) ?
                                                                                                                                            'is-invalid' : ''; ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('banyak_barang_tipe'); ?>
                    </div>
                </div>



                <button type="submit" class="btn_tampil">Ubah Data Barang</button>
            </form>


        </div>
    </div>


</div>


<?= $this->endSection(); ?>