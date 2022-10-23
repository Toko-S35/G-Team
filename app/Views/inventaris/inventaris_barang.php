<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>



<div class="page">
    <button class="btn_tampil" onclick="openCity('List')">List Barang</button>
    <button class="btn_tampil" onclick="openCity('Input')">Input Barang</button>

    <hr>

    <div id="List" class="w3-container w3-display-container city">
        <span onclick="this.parentElement.style.display='none'"
            class="w3-button w3-large w3-display-topright">&times;</span>


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
                                <th>NO</th>
                                <th>Harga Jual</th>
                                <th>Tanggal</th>
                                <th>Harga Modal</th>
                                <th>Banyak Barang</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>NO</th>
                                <th>Harga Jual</th>
                                <th>Tanggal</th>
                                <th>Harga Modal</th>
                                <th>Banyak Barang</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php $i = 1 ?>
                            <?php foreach ($barang as $k) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $k['harga_jual']; ?></td>
                                <td><?= $k['tanggal']; ?></td>
                                <td><?= $k['harga_modal']; ?></td>
                                <td><?= $k['banyak_barang']; ?></td>

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