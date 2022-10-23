<div class="ctnr">
    <p>Form Tambah Barang</p>
</div>
<hr>
<div class="col-sm-4">

    <!-- <button style="width: 60px; background-color:#F4EB93; margin:5px; font-size:10px; border-radius:10px; float:right;"
        onclick="openBaru('jual','o_jual')">baru</button> -->



    <form action="<?= base_url("/save_p") ?>" method="post">


        <div class="form-group">
            <label for="start">Tanggal:</label><br>
            <input class="form-control" type="date" name="tanggal">
        </div>

        <div class="form-group">
            <label>Tujuan</label>
            <input type="text" name="tujuan" list="list" class="form-control">
            <datalist id="list">
                <option value="TOKO 1">
                <option value="TOKO 2">
                <option value="TOKO 3">
            </datalist>
        </div>

        <div class="form-group">
            <label>Jarak Tempuh</label>
            <input type="text" name="jarak_tempuh" class="form-control">
        </div>

        <div class="form-group">
            <label>Banyak Barang</label>
            <input type="text" name="banyak_barang" class="form-control">
        </div>

        <div class="form-group">
            <label>Detail Pengiriman</label>
            <textarea type="text" name="detail_pengiriman" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label>Biaya Pengiriman</label>
            <input type="text" name="biaya_pengiriman" class="form-control">
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

<!-- <script>
function openBaru(jual, o_jual) {
    document.getElementById(jual).style.display = "block";
    document.getElementById(o_jual).style.display = "none";

}

function resetElement() {
    document.getElementById("o_jual").style.display = "block";
    document.getElementById("jual").style.display = "none";
}
</script> -->