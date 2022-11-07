<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>



<!-- <div class="page">
    <button class="btn_tampil" onclick="openCity('List')">Daftar Pembelian</button>
    <button class="btn_tampil" onclick="openCity('Input')">Detail</button>

    <hr>

    <div id="List" class="w3-container w3-display-container city">
        <span onclick="this.parentElement.style.display='none'"
            class="w3-button w3-large w3-display-topright">&times;</span>


       

        <div class="ctnr">

            <p>Barang</p>
        </div>

        <hr> -->

        <div class="card shadow mb-4">


            <!-- DataTales Example -->

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Nama Barang</th>
                                <th>Jumlah Barang</th>
                                <th>Kualitas</th>
                                <th>Tanggal Beli</th>
                                <th>Harga Jual</th>
                                <th>Total</th>
                            </tr>
                       
                        </tfoot>
                        <tbody>

                            <tr>
                                <td>1</td>
                                <td>Baju Tidur</td>
                                <td>3</td>
                                <td>Premium</td>
                                <td>03-11-2022</td>
                                <td>45.000</td>
                                <td>135.000</td>

                            </tr>
                        </tbody>

                        </tfoot>
                        <tbody>

                            <tr>
                                <td>2</td>
                                <td>Baju Kaos</td>
                                <td>8</td>
                                <td>Premium</td>
                                <td>03-11-2022</td>
                                <td>45.000</td>
                                <td>360.000</td>

                            </tr>
                        </tbody>

                        </tfoot>
                        <tbody>

                            <tr>
                                <td>3</td>
                                <td>Baju Daster</td>
                                <td>4</td>
                                <td>Premium</td>
                                <td>03-11-2022</td>
                                <td>45.000</td>
                                <td>180.000</td>

                            </tr>
                        </tbody>

                        </tfoot>
                        <tbody>

                            <tr>
                                <td>4</td>
                                <td>Baju Anak</td>
                                <td>4</td>
                                <td>Reguler</td>
                                <td>03-11-2022</td>
                                <td>35.000</td>
                                <td>140.000</td>

                            </tr>
                        </tbody>

                        </tfoot>
                        <tbody>

                            <tr>
                                <td>5</td>
                                <td>Jaket</td>
                                <td>2</td>
                                <td>Reguler</td>
                                <td>03-11-2022</td>
                                <td>35.000</td>
                                <td>70.000</td>

                            </tr>
                        </tbody>

                        </tfoot>
                        <tbody>

                            <tr>
                                <td>6</td>
                                <td>Baju Kaos</td>
                                <td>3</td>
                                <td>Ekonomis</td>
                                <td>03-11-2022</td>
                                <td>35.000</td>
                                <td>105.000</td>

                            </tr>
                        </tbody>

                        </tfoot>
                        <tbody>

                            <tr>
                                <td>7</td>
                                <td>Celana Pendek</td>
                                <td>4</td>
                                <td>Ekonomis</td>
                                <td>03-11-2022</td>
                                <td>35.000</td>
                                <td>140.000</td>

                            </tr>
                        </tbody>


                    </table>
                </div>
            </div>


        </div>


        <!-- End of Main Content -->



<?= $this->endSection(); ?>