<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>



<div class="page">
    <button class="btn_tampil" onclick="openCity('List')">List Pendapatan</button>
    <button class="btn_tampil" onclick="openCity('Input')">Input Pendapatan</button>

    <hr>

    <div id="List" class="w3-container w3-display-container city">
        <span onclick="this.parentElement.style.display='none'"
            class="w3-button w3-large w3-display-topright">&times;</span>


        <!-- Page Heading -->

        <div class="ctnr">

            <p>Pendapatan</p>
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
                                <th>Nama Barang</th>
                                <th>Jumlah Terjual</th>
                                <th>Harga Barang</th>
                                <th>Total Pendapatan</th>
                            </tr>
                        </tfoot>
                        <tbody>
                    
                            <tr>
                            <td>1</td>
                            <td>01-11-2022</td>
                            <td>Baju Tidur</td>
                            <td>4</td>
                            <td>35000</td>
                            <td>140000</td>

                            </tr>
                        </tbody>
                        <tbody>
                    
                    <tr>
                    <td>2</td>
                    <td>01-11-2022</td>
                    <td>Baju Kaos</td>
                    <td>7</td>
                    <td>35000</td>
                    <td>245000</td>

                    </tr>
                </tbody>
                <tbody>
                    
                    <tr>
                    <td>3</td>
                    <td>01-11-2022</td>
                    <td>Baju Anak-anak</td>
                    <td>3</td>
                    <td>50000</td>
                    <td>150000</td>

                    </tr>
                </tbody>
                <thead>
                            <tr>
                            <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th>Total Pendapatan</th>
                                <th>535000</th>
                            </tr>
                        </tfoot>


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

        <p><?= $this->include('pendapatan/Input_Pendapatan'); ?></p>
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