<div class="ctnr">
    <p>Form Tambah Barang</p>
</div>
<hr>
<div class="col-sm-4">
    <form role="form" action="insert.php" method="post">

        <label for="harga jual">Harga Jual</label><br>
        <select class="form-control">
            <option> </option>
            <option value="premium">50.000</option>
            <option value="reguler">35.000</option>
            <option value="ekonomis">10.000</option>
            <option value="new">lainya</option>
        </select>

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