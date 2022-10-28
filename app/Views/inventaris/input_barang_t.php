<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>



<div class="page">
    <button class="btn_tampil" onclick="ivt_brg()">Inventaris Barang</button>
    <button class="btn_tampil" onclick="ipt_brg1()">Input Jenis Barang</button>
    <button class="btn_tampil" onclick="ipt_brg2()">Input Tipe Barang</button>

    <hr>

    <div id="List" class="w3-container w3-display-container city">
        <span onclick="this.parentElement.style.display='none'"
            class="w3-button w3-large w3-display-topright">&times;</span>



        <div class="ctnr">
            <p>Form Tambah Barang</p>
        </div>
        <hr>
        <div class="col-sm-4">


            <form action="<?= base_url("/save_t") ?>" method="post">

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
                    <input type="text" name="nama_tipe_barang" class="form-control">
                </div>

                <div class="form-group">
                    <label>Banyak Barang (Tipe)</label>
                    <input type="text" name="banyak_barang_tipe" class="form-control">
                </div>


                <button type="submit" style="
                cursor: pointer;
                border-radius: 10px;
                background-color: #F4EB93;
                padding: 5px 30px 5px 30px;
                font-family: roboto;
                /* margin-left:30%; */
                font-size: 15px;
                color:#171C7B; 
                border-color:#171C7B;         
                font-weight: bold;">Tambah Barang</button>
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