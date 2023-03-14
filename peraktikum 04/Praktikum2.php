<?PHP 
require_once 'header.php';
require_once 'sidebar.php';
?>
<style>
    h1 {
      color: maroon;
      font-family: 'Arial';
      font-size: 40px;
      text-align: center;
      padding-top: 1em;
      padding-bottom: 0.5em;
    
    }
    body {
      font-family: 'Roboto', sans-serif;
      background-color: #f4f4f5;
    }
    .container1{
      background-color: white;
      border: 2px solid white;
      border-radius: 1em;
      padding: 6px 6px 6px 6px;
    }
    .container2{
      background-color: white;
      border: 2px solid white;
      border-radius: 1em;
      padding: 6px 6px 6px 6px;
    }
    </style>
    <?php
    
    $customer = $_POST ['customer'];
    $produk = $_POST ['produk'];
    $jumlah = $_POST ['jumlah'];
    
    echo "<br/>Customer :  {$customer} ";
    echo "<br/>Produk : {$produk}";
    echo "<br/>Jumlah Pembelian : {$jumlah}";
    
    function rupiah($angka){
        
        $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
        return $hasil_rupiah;
     
    }
    if ($produk == "tv"){
      $total = 4200000 * $jumlah;
      echo '<br/>Total Belanja :'.rupiah($total);
    }
    elseif ($produk == "kulkas"){
      $total = 3100000 *$jumlah;
      echo '<br/> Total Belanja :'.rupiah($total);
    }
    else{
      $total = 3800000*$jumlah;
      echo '<br/>Total belanja :'.rupiah($total);
    }
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
    <h1>Form Belanja</h1>
<div class="container">
  <div class="row">
    <div class="col-sm-8">
    <form class="form-horizontal" method="POST" action="FormBelanja.php">
<fieldset>

<!-- Form Name -->
<div class="container1">
<legend>Data Pesanan Customer</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="customer"><b>Nama Customer</b></label>  
  <div class="col-md-5">
  <input id="customer" name="customer" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>
<br/>
<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="produk"><b>Pilih Produk</b></label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="produk-0">
      <input type="radio" name="produk" id="produk-0" value="tv">
      TV
    </label> 
    <label class="radio-inline" for="produk-1">
      <input type="radio" name="produk" id="produk-1" value="kulkas">
      Kulkas
    </label> 
    <label class="radio-inline" for="produk-2">
      <input type="radio" name="produk" id="produk-2" value="mesin cuci">
      Mesin Cuci
    </label>
  </div>
</div>
<br/>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="jumlah"><b>Jumlah</b></label>  
  <div class="col-md-4">
  <input id="jumlah" name="jumlah" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="proses"></label>
  <div class="col-md-4">
    <button id="proses" name="proses" class="btn btn-success">Kirim</button>
  </div>
</div>
</fieldset>
</form>
    </div>
    <div class="col-sm-4">
    <div class="container2">
    <ul class="list-group">
        <li class="list-group-item active" aria-current="true">Daftar Harga</li>
        <li class="list-group-item">TV : Rp.4.200.000</li>
        <li class="list-group-item">Kulkas : Rp.3.100.000</li>
        <li class="list-group-item">Mesin Cuci : Rp.3.800.000</li>
        <li class="list-group-item active" aria-current="true">Harga Dapat Berubah Setiap Saat</li>
    </ul>
    </div>
    </div>
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

<?PHP
require_once 'footer.php';
?>