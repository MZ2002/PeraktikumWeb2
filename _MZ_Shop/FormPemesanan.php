<?php require_once "header.php" ?>

<!-- inner page section -->
<section class="inner_page_head">
    <div class="container_fuild">
        <div class="row">
            <div class="col-md-12">
                <div class="full text-center"> <!-- Tambahkan kelas CSS text-center di sini -->
                    <h3>Form Pemesanan</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end inner page section -->
<!-- why section -->
<section class="why_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="full">
                    <form method="POST" action="thankyou.php">
                        <div class="form-group row">
                            <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
                            <div class="col-8">
                                <input id="nama" name="nama" placeholder="Masukkan Nama Lengkap" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alamat" class="col-4 col-form-label">Alamat Lengkap</label>
                            <div class="col-8">
                                <input id="alamat" name="alamat" placeholder="Masukkan Alamat Lengkap" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tanggal" class="col-4 col-form-label">Tanggal Pembelian</label>
                            <div class="col-8">
                                <input id="tanggal" name="tanggal" type="date" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                            <div class="col-8">
                                <input id="jumlah" name="jumlah" placeholder="Masukkan Jumlah Barang" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="hp" class="col-4 col-form-label">No. HP</label>
                            <div class="col-8">
                                <input id="hp" name="hp" placeholder="Masukkan Nomor Handphone" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-4 col-form-label">Email</label>
                            <div class="col-8">
                                <input id="email" name="email" placeholder="Masukkan Email" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="catatan" class="col-4 col-form-label">Catatan</label>
                            <div class="col-8">
                                <textarea id="catatan" name="catatan" cols="40" rows="5" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-4 col-8">
                                <a href="Terimakasih.php" class="btn" style="background-color: #333; color: white; width: 200px; height: 50px;" role="button">Submit</a>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once "footer.php" ?>