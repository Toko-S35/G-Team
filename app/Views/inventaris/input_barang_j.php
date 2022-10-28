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

            <!-- <button style="width: 60px; background-color:#F4EB93; margin:5px; font-size:10px; border-radius:10px; float:right;"
        onclick="openBaru('jual','o_jual')">baru</button> -->



            <form action="<?= base_url("/save_j") ?>" method="post">

                <div class="form-group">
                    <label>Nama Jenis Barang</label>
                    <input type="text" name="jenis_barang" class="form-control">
                </div>

                <div class="form-group">
                    <label>Harga Beli</label>
                    <input type="text" name="harga_beli" class="form-control">
                </div>

                <div class="form-group">
                    <label>Harga jual</label>
                    <input type="text" name="harga_jual" class="form-control">
                </div>

                <div class="form-group">
                    <label>Banyak Barang</label>
                    <input type="text" name="banyak_barang" class="form-control">
                </div>

                <div class="form-group">
                    <label>Keterangan</label>
                    <input type="text" name="keterangan" class="form-control">
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