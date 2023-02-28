<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Form Nilai</title>
  </head>
  <body>

    <div class="container">
        <h1>Form Nilai Siswa</h1>
        <hr>
    <form method="POST" action="nilai_siswa.php">
  <div class="form-group row">
    <label for="Nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="Nama" name="Nama" placeholder="Nama Lengkap" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="MATKUL" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="MATKUL" name="MATKUL" class="custom-select">
        <option value="Web">Pemrograman Web</option>
        <option value="DDP">Dasar Dasar Pemrograman</option>
        <option value="SO">Sistem Oprasi</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="UTS" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="UTS" name="UTS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="UAS" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="UAS" name="UAS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="TUGAS" class="col-4 col-form-label">Nilai Tugas</label> 
    <div class="col-8">
      <input id="TUGAS" name="TUGAS" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="batal" type="submit" class="btn btn-danger">Batal</button>
      <button name="kirim" type="submit" class="btn btn-primary">Kirim</button>
    </div>
  </div>
</form>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

  </body>
</html>