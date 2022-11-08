<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>


<div class="page">
    <button class="btn_tampil" onclick="lst_tg()">Transaksi Transaksi Toko</button>
    <button class="btn_tampil" onclick="ipt_tg()">Input Transaksi Toko</button>


    <hr>

    <div class="ctnr">
        <p>Form Tambah Transaksi Toko</p>
    </div>
    <hr>


    <div class="col-sm-4">

        <form action="<?= base_url("/simpan_jtb") ?>" method="post">

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
                <select name="jenis_barang[]" class="form-control">
                    <?php foreach ($jns as $k) : ?>

                        <option value="<?= $k['nama_jenis_barang']; ?>"><?= $k['nama_jenis_barang']; ?></option>

                    <?php endforeach; ?>

                </select>

            </div>

            <div class="form-group">
                <label>Nama Tipe Barang</label>
                <select name="tipe_barang[]" class="form-control">
                    <?php foreach ($tpe as $k) : ?>

                        <option value="<?= $k['nama_tipe_barang']; ?>"><?= $k['nama_tipe_barang']; ?></option>

                    <?php endforeach; ?>

                </select>

            </div>


            <div class="form-group">
                <label>Banyak Barang</label>
                <input type="text" name="banyak_barang[]" class="form-control">
            </div>

            <div class="wrapper">
                <div class="form-group">

                </div>
            </div>
            <hr>

            <button class="btn add-btn">Add More</button>

            <input type="submit" class="btn" value="Submit" />
    </div>

</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        // allowed maximum input fields
        var max_input = 100;

        // initialize the counter for textbox
        var x = 1;

        // handle click event on Add More button
        $('.add-btn').click(function(e) {
            e.preventDefault();
            if (x < max_input) { // validate the condition
                x++; // increment the counter
                $('.wrapper').append(`
                <div><hr>
                
                <div class="form-group">
                <label>Nama Jenis Barang</label>
                <select name="jenis_barang[]" class="form-control">
                    <?php foreach ($jns as $k) : ?>

                        <option value="<?= $k['nama_jenis_barang']; ?>"><?= $k['nama_jenis_barang']; ?></option>

                    <?php endforeach; ?>

                </select>

            </div>

            <div class="form-group">
                <label>Nama Tipe Barang</label>
                <select name="tipe_barang[]" class="form-control">
                    <?php foreach ($tpe as $k) : ?>

                        <option value="<?= $k['nama_tipe_barang']; ?>"><?= $k['nama_tipe_barang']; ?></option>

                    <?php endforeach; ?>

                </select>

            </div>
                

            <div class="form-group">
                <label>Banyak Barang</label>
                <input type="text" name="banyak_barang[]" class="form-control">
            </div>
            <a href="#" class="remove-lnk">Remove</a>
          </div>
        `); // add input field
            }
        });

        // handle click event of the remove link
        $('.wrapper').on("click", ".remove-lnk", function(e) {
            e.preventDefault();
            $(this).parent('div').remove(); // remove input field
            x--; // decrement the counter
        })

    });
</script>

<script>
    function lst_tg() {
        location.href = "<?= base_url('/ekspedisi_toko'); ?>"
    }

    function ipt_tg() {
        location.href = "<?= base_url('/input_ekspedisi_toko'); ?>"
    }
</script>


<?= $this->endSection(); ?>