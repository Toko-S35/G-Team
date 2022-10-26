<div class="ctnr">
    <p>Form Toko</p>
</div>
<hr>
<div class="col-sm-4">

    <form action="<?= base_url("/save") ?>" method="post">

        <div class="form-group">
            <label>Nama Toko</label>
            <input type="text" name="nama_toko" list="list" class="form-control">
        </div>

        <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat" class="form-control">
        </div>

        <div class="form-group">
            <label>No.Telepon Toko</label>
            <input type="text" name="nomor_telepon_toko" class="form-control">
        </div>
        <div class="form-group">
            <label>No.Telepon Kepala Toko</label>
            <input type="text" name="nomor_telepon_kp_toko" class="form-control">
        </div>
        <div class="form-group">
            <label>Kepala Toko</label>
            <input type="text" name="nama_kp_toko" class="form-control">
        </div>
        <div class="form-group">
            <label>email kepala Toko</label>
            <input type="text" name="email_kp_toko" class="form-control">
        </div>
        <div class="form-group">
            <label>username kepala Toko</label>
            <input type="text" name="username_kp_toko" class="form-control">
        </div>
        <div class="form-group">
            <label>password kepala Toko</label>
            <input type="text" name="password_kp_toko" class="form-control">
        </div>
        <div class="form-group">
            <label>foto kepala Toko</label>
            <input type="text" name="foto_kp_toko" class="form-control">
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