<?PHP 
require_once 'header.php';
require_once 'sidebar.php';
?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Halaman Produk</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Judul</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
              <body>
    <!-- Content -->
    <div class="container-fluid">
        <div class="row p-2">
            <div class="col-md-8">
                <hr>
                <form role="form" method="POST" action="praktikum3.php">
                    <div class="form-group row">
                        <label for="NIM" class="col-4 col-form-label">NIM</label>
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-address-card"></i>
                                    </div>
                                </div>
                                <input id="NIM" name="NIM" type="text" class="form-control" placeholder="Nim">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Nama" class="col-4 col-form-label">Nama Lengkap</label>
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-address-card-o"></i>
                                    </div>
                                </div>
                                <input id="Nama" name="Nama" placeholder="Masukan Nama Lengkap" type="text" required="required" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Jenis Kelamin</label>
                        <div class="col-8">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="JenisKelamin" id="JenisKelamin_0" type="radio" required="required" class="custom-control-input" value="Laki-Laki">
                                <label for="JenisKelamin_0" class="custom-control-label">Laki-Laki</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="JenisKelamin" id="JenisKelamin_1" type="radio" required="required" class="custom-control-input" value="Perempuan">
                                <label for="JenisKelamin_1" class="custom-control-label">Perempuan</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Study" class="col-4 col-form-label">Program Studi</label>
                        <div class="col-8">
                            <select id="Study" name="Study" class="custom-select">
                                <option value="Teknik Infromatika">Teknik Informatika</option>
                                <option value="Sistem Informasi">Sistem Informasi</option>
                                <option value="Bisnis Digital">Bisnis Digital</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Skill Web & Programming</label>
                        <div class="col-8">
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="skill[]" id="Skill[]_0" type="checkbox" class="custom-control-input" value="HTML">
                                <label for="Skill[]_0" class="custom-control-label">HTML</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="skill[]" id="Skill[]_1" type="checkbox" class="custom-control-input" value="CSS">
                                <label for="Skill[]_1" class="custom-control-label">CSS</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="skill[]" id="Skill[]_2" type="checkbox" class="custom-control-input" value="JavaScript">
                                <label for="Skill[]_2" class="custom-control-label">Javascript</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="skill[]" id="Skill[]_3" type="checkbox" class="custom-control-input" value="RWD Bootstrap">
                                <label for="Skill[]_3" class="custom-control-label">RWD Bootstrap</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="skill[]" id="Skill[]_4" type="checkbox" class="custom-control-input" value="PHP">
                                <label for="Skill[]_4" class="custom-control-label">PHP</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="skill[]" id="Skill[]_5" type="checkbox" class="custom-control-input" value="Python">
                                <label for="Skill[]_5" class="custom-control-label">Python</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input name="skill[]" id="Skill[]_6" type="checkbox" class="custom-control-input" value="Java">
                                <label for="Skill[]_6" class="custom-control-label">Java</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="City" class="col-4 col-form-label">Tempat Domisili</label>
                        <div class="col-8">
                            <select id="City" name="City" class="custom-select" required="required">
                                <option value="Jakarta">Jakarta</option>
                                <option value="Bogor">Bogor</option>
                                <option value="Depok">Depok</option>
                                <option value="Tanggerang">Tanggerang</option>
                                <option value="Bekasi">Bekasi</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <input type="submit" value="Kirim" name="kirim" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <hr>
    </div>
</body>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Footer
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php
// Ambil data yang dinput user

// Fungsi Isset untuk mengecek apakah suatu variable terdapat value
if (isset($_POST["kirim"])) {
    // Variable Input Form
    $nim = $_POST["NIM"];
    $nama = $_POST["Nama"];
    $kelamin = $_POST["JenisKelamin"];
    $prodi = $_POST["Study"];
    $skill = $_POST["skill"];
    $address = $_POST["City"];
};
$nilai = 0;
foreach ($skill as $Data) {
    # code...
    switch ($Data) {
        case 'HTML':
            # code...
            $nilai += 10;
            break;
        case 'CSS':
            # code...
            $nilai += 10;
            break;
        case 'JavaScript':
            # code...
            $nilai += 20;
            break;
        case 'RWD Bootstrap':
            $nilai += 20;
            # code...
            break;
        case 'PHP':
            $nilai += 30;
            # code...
            break;
        case 'Python':
            $nilai += 30;
            # code...
            break;
        case 'Java':
            $nilai += 50;
            # code...
            break;
        default:
            # code...
            break;
    };
};
// Function Keterangan Lulus
function predikat($nim, $nama, $kelamin, $prodi, $address, $skill, $nilai)
{
    //    Cetak Hasil
    echo <<<Hasil
            <h4>Hasil Yang Dikirim</h4>
            <p>Nama : $nama</p>
            <p>NIM : $nim</p>
            <p>Jenis Kelamin : $kelamin</p>
            <p>Program Studi : $prodi</p>
            <p>Domisili : $address</p>
            <p>Nilai : $nilai</p>
            Skill : 
            Hasil;
    foreach ($skill as $data) {
        # code...
        echo $data . " ";
    };
    if ($nilai === 0) {
        # code...
        echo "<br>";
        echo "<p>Predikat : Tidak Lulus</p>";
    } elseif ($nilai > 0 && $nilai <= 40) {
        echo "<p>Predikat : Kurang</p>";
    } elseif ($nilai > 40 && $nilai <= 60) {
        echo "<p>Predikat : Cukup</p>";
    } elseif ($nilai > 60 && $nilai <= 100) {
        echo "<p>Predikat : Baik</p>";
    } elseif ($nilai > 100 && $nilai <= 170) {
        echo "<p>Predikat : Sangat Baik</p>";
    };
};
predikat($nim, $nama, $kelamin, $prodi, $address, $skill, $nilai);
?>


<?PHP
require_once 'footer.php';
?>