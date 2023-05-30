<?php
require_once "header.php";
require_once "sidebar.php";
require_once 'dbkoneksi.php';

$sql = "SELECT produk.*, kategori_produk.nama AS kategori FROM produk
        INNER JOIN kategori_produk ON kategori_produk.id = produk.kategori_produk_id";
$rs = $dbh->query($sql);

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section style="background-color: white;" class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Pesanan Pelanggan</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section style="background-color: white;" class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Lengkap</th>
                                <th scope="col">Alamat Lengkap</th>
                                <th scope="col">Tanggal Pembelian</th>
                                <th scope="col">Produk</th>
                                <th scope="col">Ukuran</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">No.HP</th>
                                <th scope="col">Email</th>
                                <th scope="col">Catatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Rintan Madi Sari</td>
                                <td>Kp.Padurenan</td>
                                <td>2023-03-23</td>
                                <td>Gaun Wanita Galaksi</td>
                                <td>XL</td>
                                <td>1</td>
                                <td>088211711083</td>
                                <td>rintanmadisari09@gmail.com</td>
                                <td>Telornya dua ya mas</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Tsukinaga Leo</td>
                                <td>Jl. Tokyo</td>
                                <td>2023-04-24</td>
                                <td>Kemeja Laki-Laki Levis</td>
                                <td>L</td>
                                <td>2</td>
                                <td>08888765434</td>
                                <td>tsukinagaleo@gmail.com</td>
                                <td>Gausah pake sambel ya</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Otosaka Yuu</td>
                                <td>Jl. in aja dulu</td>
                                <td>2023-05-15</td>
                                <td>Kemeja Laki-Laki Hitam</td>
                                <td>XL</td>
                                <td>5</td>
                                <td>08981725562</td>
                                <td>otosakayuu@gmail.com</td>
                                <td>Kecap nya pake kecap bango ya mbak</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php

require_once "footer.php";

?>