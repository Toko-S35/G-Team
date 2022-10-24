<div class="ctnr">
    <p>Form Toko</p>
</div>
<hr>
<div class="col-sm-4">

    <form action="<?= base_url("/save") ?>" method="post">

        <div class="form-group">
            <label>Nama Toko</label>
            <input type="text" name="toko" list="list" class="form-control">
        </div>

        <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat" class="form-control">
        </div>

        <div class="form-group">
            <label>No.Telepon</label>
            <input type="text" name="no.telepon" class="form-control">
        </div>

        <div class="form-group">
            <label>Kepala Toko</label>
            <input type="text" name="kepala_toko" class="form-control">
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

