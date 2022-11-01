<div class="ctnr">
    <p>Form Pendapatan</p>
</div>
<hr>
<div class="col-sm-4">

    <form action="<?= base_url("/save") ?>" method="post">

    <div class="form-group">
            <label for="start">Tanggal:</label><br>
            <input class="form-control" type="date" name="tanggal">
        </div>

        <div class="form-group">
            <label>Total Baju</label>
            <input type="text" name="terjual35" class="form-control">
        </div>

        <div class="form-group">
            <label>Baju Harga 35</label>
            <input type="text" name="terjual35" class="form-control">
        </div>

        <div class="form-group">
            <label>Baju Harga 50</label>
            <input type="text" name="terjual10" class="form-control">
        </div>

        <div class="form-group">
            <label>Baju Harga 20</label>
            <input type="text" name="terjual10" class="form-control">
        </div>

        <div class="form-group">
            <label>Jumlah Pendapatan</label>
            <input type="text" name="pendapatan" class="form-control">
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
                font-weight: bold;">Save</button>
    </form>


</div>

