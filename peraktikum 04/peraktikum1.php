<?PHP 
require_once 'header.php';
require_once 'sidebar.php';
?>
<?php
// Buat Array asosiatif nilai
$nilai1 = ["id"=>1, "nim"=>"01101", "uts"=>80, "uas"=>84, "tugas"=>78];
$nilai2 = ["id"=>2, "nim"=>"01102", "uts"=>85, "uas"=>87, "tugas"=>80];
$nilai3 = ["id"=>3, "nim"=>"01103", "uts"=>90, "uas"=>89, "tugas"=>82];
$nilai4 = ["id"=>4, "nim"=>"01104", "uts"=>100, "uas"=>90, "tugas"=>84];

// Buat Array Multidimensi
$kumpulan_nilai = [$nilai1, $nilai2, $nilai3, $nilai4];
echo $kumpulan_nilai[0]["nim"];

//Buat Daftar Nilai Siswa Menggunakan Boostrap 4.6 Tables Dark
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
    <div class="container">
        <h1 class="text-center"> Daftar Nilai Siswa </h1>
        <table class="table table-dark">
  <thead>
        <tr>
            <th scope="col">NO</th>
            <th scope="col">NIM</th>
            <th scope="col">UTS</th>
            <th scope="col">UAS</th>
            <th scope="col">TUGAS</th>
            <th scope="col">NILAI AKHIR</th>
        </tr>
  </thead>
    <tbody>
    
    <?php
        foreach ($kumpulan_nilai as $nilai): ?>
    
    <tr>
        <?php $nilai_akhir = ($nilai["uts"] + $nilai["uas"] + $nilai["tugas"]) / 3; ?>
        <td><?php echo $nilai["id"]?></td>
        <td><?php echo $nilai["nim"]?></td>
        <td><?php echo $nilai["uts"]?></td>
        <td><?php echo $nilai["uas"]?></td>
        <td><?php echo $nilai["tugas"]?></td>
        <td><?php number_format ($nilai_akhir, 2, ",","." ) ?></td>
    </tr>

    <?php endforeach; ?>
  </tbody>
</table>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
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

<?PHP
require_once 'footer.php';
?>