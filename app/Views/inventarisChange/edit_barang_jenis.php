<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>



<div class="page">
    <button class="btn_tampil" onclick="ivt_brg()">Inventaris Barang</button>
    <button class="btn_tampil" onclick="ipt_brg1()">Jenis Barang Baru</button>
    <button class="btn_tampil" onclick="ipt_brg2()">Tipe Barang Baru</button>

    <hr>

    <div id="List" class="w3-container w3-display-container city">
        <span onclick="this.parentElement.style.display='none'"
            class="w3-button w3-large w3-display-topright">&times;</span>



        <div class="ctnr">
            <p>Form Tambah Barang</p>
        </div>
        <hr>
        <div class="col-sm-4">

            <form action="<?= base_url("/save_j") ?>" method="post">

                <div class="form-group">
                    <label>Nama Jenis Barang</label>
                    <input type="text" name="nama_jenis_barang" class="form-control <?= ($validation->hasError('nama_jenis_barang')) ?
                                                                                        'is-invalid' : ''; ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('nama_jenis_barang'); ?>
                    </div>
                </div>

                <div class="form-group">
                    <label>Harga Beli</label>
                    <input type="text" name="harga_beli" class="form-control <?= ($validation->hasError('harga_beli')) ?
                                                                                    'is-invalid' : ''; ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('harga_beli'); ?>
                    </div>
                </div>

                <div class="form-group">
                    <label>Harga jual</label>
                    <input type="text" name="harga_jual" class="form-control <?= ($validation->hasError('harga_jual')) ?
                                                                                    'is-invalid' : ''; ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('harga_jual'); ?>
                    </div>
                </div>

                <div class="form-group">
                    <label>Banyak Barang</label>
                    <input type="text" name="banyak_barang" class="form-control <?= ($validation->hasError('banyak_barang')) ?
                                                                                    'is-invalid' : ''; ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('banyak_barang'); ?>
                    </div>
                </div>

                <div class="form-group">
                    <label>Keterangan</label>
                    <input type="text" name="keterangan" class="form-control <?= ($validation->hasError('keterangan')) ?
                                                                                    'is-invalid' : ''; ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('keterangan'); ?>
                    </div>
                </div>


                <button type="submit" class="btn_tampil">Tambah Barang</button>
            </form>


        </div>
    </div>


</div>



<script>
function ivt_brg() {
    location.href = "<?= base_url('/inventaris'); ?>"
}

function ipt_brg1() {
    location.href = "<?= base_url('/input_barang_j'); ?>"
}

function ipt_brg2() {
    location.href = "<?= base_url('/input_barang_t'); ?>"
}
</script>



<?= $this->endSection(); ?>