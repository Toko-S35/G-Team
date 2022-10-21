<div class="ctnr">
    <p>Form Tambah Barang</p>
</div>
<hr>
<div class="col-sm-4">

    <button style="width: 60px; background-color:#F4EB93; margin:5px; font-size:10px; border-radius:10px; float:right;"
        onclick="openBaru('jual','o_jual')">baru</button>



    <form role="" action="" method="">

        <div id="jual" class="w3-container w3-display-container city">
            <span onclick="resetElement() " class="w3-button w3-large w3-display-topright">&times;</span>

            <div class="form-group">
                <label>Harga jual</label>
                <input type="text" name="terbit_bk" class="form-control">
            </div>

        </div>


        <div id="o_jual" style="visibility: none;">
            <label for="harga jual">Harga Jual</label><br>
            <select class="form-control">
                <option> </option>
                <option value="premium">50.000</option>
                <option value="reguler">35.000</option>
                <option value="ekonomis">10.000</option>
            </select>
        </div>


        <div class="form-group">
            <label for="start">Tanggal:</label><br>
            <input class="form-control" type="date" id="start" name="trip-start" value="2018-07-22" min="2018-01-01"
                max="2035-12-31">
        </div>

        <div class="form-group">
            <label>Harga Modal</label>
            <input type="text" name="terbit_bk" class="form-control">
        </div>

        <div class="form-group">
            <label>Banyak Barang</label>
            <input type="text" name="genre_bk" class="form-control">
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

<script>
function openBaru(jual, o_jual) {
    document.getElementById(jual).style.display = "block";
    document.getElementById(o_jual).style.display = "none";

}

function resetElement() {
    document.getElementById("o_jual").style.display = "block";
    document.getElementById("jual").style.display = "none";
}
</script>