<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>



<div style="margin:20px;">
    <button style="
            cursor: pointer;
            border-radius: 10px;
            padding: 5px 30px 5px 30px;
            font-family: roboto;
            /* margin-left:30%; */
            font-size: 15px;
            background-color: #F4EB93;
            color:#171C7B; 
            border-color:#171C7B;         
            font-weight: bold;" onclick="openCity('Input')">Input Pengiriman Barang</button>
    <button style="
            cursor: pointer;
            border-radius: 10px;
            padding: 5px 30px 5px 30px;
            font-family: roboto;
            /* margin-left:30%; */
            font-size: 15px;
            background-color: #F4EB93;
            color:#171C7B; 
            border-color:#171C7B;         
            font-weight: bold;" onclick="openCity('List')">List Pengiriman Barang</button>

    <hr>

    <div id="Input" class="w3-container w3-display-container city">
        <span onclick="this.parentElement.style.display='none'"
            class="w3-button w3-large w3-display-topright">&times;</span>

        <div style="
        height:auto;
        padding-top: 20px;
        padding-bottom: 20px;
        background-color:#F14080;
        color:#171C7B;
        padding: 15px;
        border-radius: 20px;
        color:#171C7B;">
            <div class="container-fluid">

                <div style="padding-top: 20px;
 padding-bottom: 20px;
 background-color:#F14080;
 color:#171C7B;
 padding: 15px;
 border-radius: 20px;
 color:#171C7B;">
                    <p>Form Input Pengiriman Barang</p>
                    <hr>
                    <div class="row">
                        <div class="col-sm-4">
                            <form role="form" action="insert.php" method="post">

                                <div>
                                    <label for="start">Tanggal:</label><br>
                                    <input class="form-control" type="date" id="start" name="trip-start"
                                        value="2018-07-22" min="2018-01-01" max="2035-12-31">
                                </div>

                                <div class="form-group">
                                    <label>Pengiriman Ke Toko</label>
                                    <input type="text" name="terbit_bk" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>jarak tempuh</label>
                                    <input type="text" name="genre_bk" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Banyak Muatan</label>
                                    <input type="text" name="genre_bk" class="form-control">
                                </div>

                                <label for="harga jual">Biaya Pengiriman</label><br>
                                <input class="form-control" type="int" name="" value="" id="biaya_pengiriman_barang"
                                    style="
                margin-top: 8px;
                margin-bottom: 8px;
                width:270px;
                height:30px;
                border-radius: 5px;
                border-color:#F4EB93;
                font-family: roboto;
                font: size 13px;">
                                </input>


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
            font-weight: bold;">Tambah Data Pengiriman</button>
                            </form>


                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>






    <div id="List" class="w3-container w3-display-container city" style="display:none">
        <span onclick="this.parentElement.style.display='none'"
            class="w3-button w3-large w3-display-topright">&times;</span>

        <p><?= $this->include('pengiriman_barang/list_pengiriman_barang'); ?></p>
    </div>
</div>



<script>
function openCity(cityName) {
    var i;
    var x = document.getElementsByClassName("city");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    document.getElementById(cityName).style.display = "block";
}
</script>





<?= $this->endSection(); ?>