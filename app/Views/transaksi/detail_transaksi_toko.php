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
                        <th>Tanggal</th>
                        <th>Nama Toko</th>
                        <th>Biaya Ekspedisi</th>
                        <th>Keterangan</th>
                    </tr>

                    </tfoot>
                <tbody>
                    <?php $i = 1 ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $ekspedisi['tanggal']; ?></td>
                        <td><?= $ekspedisi['nama_toko']; ?></td>
                        <td><?= $ekspedisi['biaya_ekspedisi']; ?></td>
                        <td><?= $ekspedisi['keterangan']; ?></td>

                    </tr>

                </tbody>

            </table>
        </div>
    </div>


</div>


<!-- End of Main Content -->

<div class="card shadow mb-4">

    <!-- DataTales Example -->


    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Jenis Barang</th>
                        <th>Tipe Barang</th>
                        <th>Banyak Barang</th>
                        <th>Aksi</th>
                    </tr>

                <tbody>

                    <?php $i = 1 ?>

                    <?php foreach ($ekspedisijtb as $k) : ?>
                        <tr>
                            <?php if ($id_transaksi == $k['id_transaksi']) {

                            ?>
                                <td><?= $i++; ?></td>
                                <td><?= $k['jenis_barang']; ?></td>
                                <td><?= $k['tipe_barang']; ?></td>
                                <td><?= $k['banyak_barang']; ?></td>
                                <td>

                                    <form action="<?= base_url('/edit_jtb/' . $k['id_jtb']); ?>" method="post" class="d-inline">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="_method" value="UPDATE">
                                        <button type="submit" class="btn btn-primary btn-circle " title="Ubah">
                                            <i class=" fas fa-edit"></i>
                                        </button>
                                    </form>

                                    <form action="<?= base_url('/delete_jtb_toko/' . $k['id_jtb']); ?>" method="post" class="d-inline">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-primary btn-circle " title="Hapus" onclick="return confirm('apa kamu yakin akan hapus data?')">
                                            <i class=" fas fa-trash"></i>
                                        </button>
                                    </form>

                        </tr>
                <?php  }
                        endforeach; ?>

                </tbody>

            </table><?= aksi($i) ?>
        </div>
    </div>


</div>

<?php
function aksi($i)
{
    if ($i == 1) {
        echo '<a href="/input_jtb_toko" class="fas fa-edit" style="margin:10px;" title="Tambah"></a>';
    } else {
        echo ('');
    }
}

?>



<?= $this->endSection(); ?>