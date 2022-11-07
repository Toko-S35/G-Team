<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>

<div class="page">
    <button class="btn_tampil" onclick="ipt_brg1()">Transaksi Toko</button>
    <button class="btn_tampil" onclick="ipt_brg2()">Input Transaksi Toko</button>

    <hr>


    <hr>

    <div class="ctnr">
        <p>Form Tambah Transaksi Toko</p>
    </div>
    <hr>
    <div class="col-sm-4">

        <form action="<?= base_url("/simpan_toko") ?>" method="post">

            <div class="form-group">
                <label>Nama Toko</label>
                <input type="text" name="nama_toko" value="<?= old('nama_toko') ?>" class="form-control <?= ($validation->hasError('nama_toko')) ?
                                                                                                            'is-invalid' : ''; ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('nama_toko'); ?>
                </div>

            </div>

            <div class="form-group">
                <label for="start">Tanggal:</label><br>
                <input type="date" name="tanggal" value="<?= old('tanggal') ?>" class="form-control <?= ($validation->hasError('tanggal')) ?
                                                                                                        'is-invalid' : ''; ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('tanggal'); ?>
                </div>
            </div>


            <div class="form-group">
                <label>Biaya Ekspedisi</label>
                <input type="text" name="biaya_ekspedisi" value="<?= old('biaya_ekspedisi') ?>" class="form-control <?= ($validation->hasError('biaya_ekspedisi')) ?
                                                                                                                        'is-invalid' : ''; ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('biaya_ekspedisi'); ?>
                </div>
            </div>

            <div class="form-group">
                <label>Keterangan </label>
                <input type="text" name="keterangan" value="<?= old('keterangan') ?>" class="form-control <?= ($validation->hasError('keterangan')) ?
                                                                                                                'is-invalid' : ''; ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('keterangan'); ?>
                </div>
            </div>



            <button type="submit" class="btn_tampil">Tambah Transaksi Toko</button>

        </form>
    </div>
</div>

<script>
    function ipt_brg1() {
        location.href = "<?= base_url('/ekspedisi_toko'); ?>"
    }

    function ipt_brg2() {
        location.href = "<?= base_url('/input_jtb_toko'); ?>"
    }
</script>

<?= $this->endSection(); ?>