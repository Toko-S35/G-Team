<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>



<div class="page">
    <button class="btn_tampil" onclick="openCity('List')">Toko</button>
    <button class="btn_tampil" onclick="openCity('Input')">Input Toko</button>

    <hr>

    <div id="List" class="w3-container w3-display-container city">
        <span onclick="this.parentElement.style.display='none'"
            class="w3-button w3-large w3-display-topright">&times;</span>


        <!-- Page Heading -->

        <div class="ctnr">
            <p>Toko</p>
        </div>

        <hr>

        <div class="card shadow mb-4">


            <!-- DataTales Example -->

            <div class="card-body">
                <div class="table-responsive">

                    <tbody>

                        <?php foreach ($toko as $k) : ?>

                        <div class="card-kp">
                            <header class="card-h">
                                <img class="img-t" src="<?= base_url(); ?>/img/<?= $k['foto_kp_toko']; ?>">
                                <h3><?= $k['nama_kp_toko']; ?></h3>
                                <hr>
                            </header>
                            <div class="card-f">
                                <div class="card-d"><?= $k['nama_toko']; ?></div>
                                <div class="card-d"><?= $k['nomor_telepon_kp_toko']; ?></div>
                                <div class="card-d"><?= $k['nomor_telepon_kp_toko']; ?></div>
                                <div class="card-d"><?= $k['alamat_toko']; ?></div>


                            </div>
                        </div>
                        <a href=<?= base_url('/details'); ?> class="btn_tampil">Detail</a>
                        <?php endforeach; ?>


                    </tbody>


                </div>
            </div>


        </div>


        <!-- End of Main Content -->
    </div>



</div>
<div class="page">
    <div id="Input" class="w3-container w3-display-container city" style="display:none">
        <span onclick="this.parentElement.style.display='none'"
            class="w3-button w3-midle w3-display-topright">&times;</span>

        <p><?= $this->include('Toko/Input_Toko'); ?></p>
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



<!-- <thead>
                            <tr>
                                <th>NO</th>
                                <th>Nama Toko</th>
                                <th>Alamat Toko</th>
                                <th>Nomor Telepon Toko</th>
                                <th>Nomor Telepon Kepala Toko</th>
                                <th>Nama Kepala Toko</th>
                                <th>Foto Kepala Toko</th>


                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>NO</th>
                                <th>Nama Toko</th>
                                <th>Alamat Toko</th>
                                <th>Nomor Telepon Toko</th>
                                <th>Nomor Telepon Kepala Toko</th>
                                <th>Nama Kepala Toko</th>
                                <th>Foto Kepala Toko</th>
                            </tr>
                        </tfoot> -->