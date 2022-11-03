<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>

<div class="page">
    <button class="btn_tampil" onclick="ipt_brg1()">Transaksi Gudang</button>
    <button class="btn_tampil" onclick="ipt_brg2()">Input Transaksi Gudang</button>

    <hr>


    <hr>

    <div class="ctnr">
        <p>Form Input Transaksi Gudang</p>
    </div>
    <hr>
    <div class="col-sm-4">

        <form action="<?= base_url("/simpan_gudang") ?>" method="post">

            <div class="form-group">
                <label>Asal Barang</label>
                <input type="text" name="asal_barang" value="<?= old('asal_barang') ?>"
                    class="form-control <?= ($validation->hasError('asal_barang')) ?
                                                                                                                'is-invalid' : ''; ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('asal_barang'); ?>
                </div>

            </div>

            <div class="form-group">
                <label for="start">Tanggal:</label><br>
                <input type="date" name="tanggal" value="<?= old('tanggal') ?>"
                    class="form-control <?= ($validation->hasError('tanggal')) ?
                                                                                                        'is-invalid' : ''; ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('tanggal'); ?>
                </div>
            </div>


            <div class="form-group">
                <label>Biaya Ekspedisi</label>
                <input type="text" name="biaya_ekspedisi" value="<?= old('biaya_ekspedisi') ?>"
                    class="form-control <?= ($validation->hasError('biaya_ekspedisi')) ?
                                                                                                                        'is-invalid' : ''; ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('biaya_ekspedisi'); ?>
                </div>
            </div>

            <div class="form-group">
                <label>Keterangan </label>
                <input type="text" name="keterangan" value="<?= old('keterangan') ?>"
                    class="form-control <?= ($validation->hasError('keterangan')) ?
                                                                                                                'is-invalid' : ''; ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('keterangan'); ?>
                </div>
            </div>

            <div class="form-group">
                <label>Foto Nota</label>
                <input type="text" name="nota" value="<?= old('nota') ?>"
                    class="form-control <?= ($validation->hasError('nota')) ?
                                                                                                    'is-invalid' : ''; ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('nota'); ?>
                </div>
            </div>


            <button type="submit" class="btn_tampil">Tambah Transaksi Gudang</button>

        </form>
    </div>
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