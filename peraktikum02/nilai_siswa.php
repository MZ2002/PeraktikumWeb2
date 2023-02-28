<?PHP 
//Tangkap Hasil Inputan
$proses = $_POST["kirim"];
$nama_siswa = $_POST["Nama"];
$mata_kuliah = $_POST["MATKUL"];
$nilai_uts = $_POST["UTS"];
$nilai_uas = $_POST["UAS"];
$nilai_tugas = $_POST["TUGAS"];

//Buat Variable Total Nilai 
$total_nilai = ($nilai_uts + $nilai_uas + $nilai_tugas) / 3;

//Buat Logic Untuk Status
$status;

if ($total_nilai >= 60) {
    $status = "Lulus";
} else {
    $status = "Tidak Lulus";
}

//Buat Logic Grading

$grade;
if ($total_nilai >= 85 && $total_nilai <=100) {
    $grade = "A";
} elseif ($total_nilai >= 70 && $total_nilai < 85) {
    $grade = "B";
} elseif ($total_nilai >= 56 && $total_nilai < 70) {
    $grade = "C";
} elseif ($total_nilai >= 36 && $total_nilai < 56) {
    $grade = "D";
} else {
    $grade = "E";
}

echo$grade;

//Buat Logic Predikat
$predikat;

switch ($grade) {
    case "A";
       $predikat = "Sangat Memuaskan";
        break;
    case "B";
        $predikat = "Memuaskan";
        break;
    case "C";
        $predikat = "Cukup";
        break;
    case "D";
        $predikat = "Kurang";
        break;
    case "E";
        $predikat = "Sangat Kurang";
        break;
    default:
        $predikat = "Tidak Ada";
        break;
}

echo "Grade: " . $grade. "<br>";
echo "Predikat:".$predikat;

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <h1>nilai siswa</h1>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Mata kuliah</th>
      <th scope="col">Nilai UTS</th>
      <th scope="col">Nilai UAS</th>
      <th scope="col">Nilai Tugas</th>
      <th scope="col">Grade</th>
      <th scope="col">Predikat</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?php $nama_siswa; ?></td>
      <td><?php $mata_kuliah; ?></td>
      <td><?php $nilai_uts; ?></td>
      <td><?php $nilai_uas; ?></td>
      <td><?php $nilai_tugas; ?></td>
      <td><?php $grade; ?></td>
      <td><?php $predikat; ?></td>
      <td><?php $status; ?></td>
    </tr>
  </tbody>
</table>
    </div>

    
     

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

  </body>
</html>