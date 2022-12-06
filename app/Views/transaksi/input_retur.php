<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>


<div class="page">
    <button class="btn_tampil" onclick="lst_tg()">Transaksi Retur Barang</button>
    <?php if (in_groups('kp-toko')) : ?>
        <button class="btn_tampil" onclick="ipt_tg()">Input Detail Retur Barang</button>
    <?php endif; ?>

    <hr>


    <hr>

    <div class="ctnr">
        <p>Form Tambah Transaksi Toko</p>
    </div>
    <hr>
    <div class="col-sm-4">

        <form action="<?= base_url("/simpan_retur") ?>" method="post">

            <div class="form-group">
                <label>Transaksi Toko</label>
                <select name="data" class="form-control">
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

                        <?php if ($k['nama_toko'] == user()->username) { ?>
                            <option name="data" value="<?= $daftar_hari[$namahari]; ?> <?= $k['tanggal']; ?> <?= $k['nama_toko']; ?>">
                                <?= $k['nama_toko']; ?> <?= $daftar_hari[$namahari]; ?> (<?= date('d F Y', strtotime($k['tanggal'])); ?>)</option>
                        <?php } ?>

                    <?php endforeach; ?>

                </select>

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





            <button type="submit" class="btn_tampil">Tambah Transaksi Toko</button>

        </form>
    </div>
</div>

<script>
    function lst_tg() {
        location.href = "<?= base_url('/retur_barang'); ?>"
    }

    function ipt_tg() {
        location.href = "<?= base_url('/input_jtb_retur'); ?>"
    }
</script>

<?= $this->endSection(); ?>