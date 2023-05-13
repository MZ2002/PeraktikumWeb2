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
                                <td>Muhammad Zidan</td>
                                <td>
                                    kp. curug
                                </td>
                                <td>2023-03-23</td>
                                <td>SEPATU RUNNING NIKE ZOOM V2</td>
                                <td>41</td>
                                <td>1</td>
                                <td>088211535753</td>
                                <td>Zidan3237@gmail.com</td>
                                <td>ya endak tau tanya ko tanya saya</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>akatsuki</td>
                                <td>Jl. hokage</td>
                                <td>2023-04-24</td>
                                <td>Jaket Casual</td>
                                <td>L</td>
                                <td>2</td>
                                <td>08888435434</td>
                                <td>konohagakure4324@gmail.com</td>
                                <td>wibu ohh wibu</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>utakata</td>
                                <td>Jl. depok</td>
                                <td>2023-05-15</td>
                                <td>Jaket Varsity Rapersis</td>
                                <td>XL</td>
                                <td>5</td>
                                <td>089817457</td>
                                <td>bangkimoci@gmail.com</td>
                                <td>pamacan</td>
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