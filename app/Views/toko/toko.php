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
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Nama Toko</th>
                                <th>Kepala Toko</th>
                                <th>Email</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Details</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>NO</th>
                                <th>Nama Toko</th>
                                <th>Kepala Toko</th>
                                <th>Email</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Details</th>
                            </tr>
                        </tfoot>
                        <tbody>

                            <tr>
                                <td>1</td>
                                <td>Kasih Abadi</td>
                                <td>Muhaymi Udin</td>
                                <td>muhayminurdin28@gmail.com</td>
                                <td>muhaymi69</td>
                                <td>sampah123</td>
                                <td><a href="<?= base_url('/details'); ?>">Details</a></td>

                            </tr>
                        </tbody>

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