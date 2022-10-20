<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>



<div class="page">
    <button class="btn_tampil" onclick="openCity('List')">List Pengiriman Barang</button>
    <button class="btn_tampil" onclick="openCity('Input')">Input Pengiriman Barang</button>

    <hr>

    <div id="List" class="w3-container w3-display-container city">
        <span onclick="this.parentElement.style.display='none'"
            class="w3-button w3-large w3-display-topright">&times;</span>

        <hr>

        <!-- Page Heading -->

        <div class="ctnr">

            <p>List Barang</p>
        </div>

        <hr>

        <div class="card shadow mb-4">


            <!-- DataTales Example -->

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Tanggal</th>
                                <th>pengiriman Ke Toko</th>
                                <th>Jarak Tempuh</th>
                                <th>Banyak Muatan</th>
                                <th>Biaya Pengiriman</th>

                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Tanggal</th>
                                <th>pengiriman Ke Toko</th>
                                <th>Jarak Tempuh</th>
                                <th>Banyak Muatan</th>
                                <th>Biaya Pengiriman</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php $i = 1 ?>
                            <?php foreach ($ekspedisi as $k) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $k['tanggal']; ?></td>
                                <td><?= $k['pengiriman_ketoko']; ?></td>
                                <td><?= $k['jarak_tempuh']; ?></td>
                                <td><?= $k['banyak_muatan']; ?></td>
                                <td><?= $k['biaya_pengiriman']; ?></td>

                            </tr>
                        </tbody>
                        <?php endforeach; ?>

                    </table>
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

        <p><?= $this->include('inventaris/Input_barang'); ?></p>
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