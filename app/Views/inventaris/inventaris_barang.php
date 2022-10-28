<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>



<div class="page">
    <button class="btn_tampil" onclick="ivt_brg()">Inventaris Barang</button>
    <button class="btn_tampil" onclick="ipt_brg1()">Input Jenis Barang</button>
    <button class="btn_tampil" onclick="ipt_brg2()">Input Tipe Barang</button>

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
                                <th>Nama Jenis Barang</th>
                                <th>Banyak Barang</th>
                                <th>Harga Beli</th>
                                <th>Harga Jual</th>
                                <th>Keterangan</th>

                                <th>Nama Tipe Barang</th>
                                <th>Banyak Barang (Tipe)</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>NO</th>
                                <th>Nama Jenis Barang</th>
                                <th>Banyak Barang</th>
                                <th>Harga Beli</th>
                                <th>Harga Jual</th>
                                <th>Keterangan</th>

                                <th>Nama Tipe Barang</th>
                                <th>Banyak Barang (Tipe)</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php $i = 1 ?>
                            <?php foreach ($jenisbarang as $k) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $k['nama_jenis_barang']; ?></td>
                                <td><?= $k['banyak_barang']; ?></td>
                                <td><?= $k['harga_beli']; ?></td>
                                <td><?= $k['harga_jual']; ?></td>
                                <td><?= $k['keterangan']; ?></td>
                                <?php endforeach; ?>


                                <td><?= "|"; ?><?php foreach ($tipebarang as $t) : ?>
                                    <?= $t['nama_tipe_barang'];
                                                    echo " |"; ?> <?php endforeach; ?>
                                </td>

                                <td><?= "|"; ?><?php foreach ($tipebarang as $t) : ?>
                                    <?= $t['banyak_barang_tipe'];
                                                    echo " |"; ?><?php endforeach; ?>
                                </td>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>


        </div>


        <!-- End of Main Content -->
    </div>



</div>


<script>
function ivt_brg() {
    location.href = "<?= base_url('/inventaris'); ?>"
}

function ipt_brg1() {
    location.href = "<?= base_url('/input_barang_j'); ?>"
}

function ipt_brg2() {
    location.href = "<?= base_url('/input_barang_t'); ?>"
}
</script>


<?= $this->endSection(); ?>