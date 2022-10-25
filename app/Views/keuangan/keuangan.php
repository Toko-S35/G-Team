<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>



<div class="page">
    <button class="btn_tampil" onclick="openCity('List')">List Keuangan</button>
    <button class="btn_tampil" onclick="openCity('Input')">Input Keuangan</button>

    <hr>

    <div id="List" class="w3-container w3-display-container city">
        <span onclick="this.parentElement.style.display='none'"
            class="w3-button w3-large w3-display-topright">&times;</span>


        <!-- Page Heading -->

        <div class="ctnr">

            <p>Keuangan</p>
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
                                <th>Tanggal</th>
                                <th>terjual  50000</th>
                                <th>terjual  35000</th>
                                <th>terjual  10000</th>
                                <th>Pendapatan</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                            <th>NO</th>
                                <th>Tanggal</th>
                                <th>terjual  50000</th>
                                <th>terjual  35000</th>
                                <th>terjual  10000</th>
                                <th>Pendapatan</th>
                            </tr>
                        </tfoot>
                        <tbody>
                    
                            <tr>
                            <td>1</td>
                            <td>10-10-2022</td>
                            <td>10</td>
                            <td>20</td>
                            <td>30</td>
                            <td>1400000</td>

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

        <p><?= $this->include('keuangan/Input_Keuangan'); ?></p>
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