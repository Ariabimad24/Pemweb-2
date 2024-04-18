<?php
include_once 'header.php';
include_once 'sidebar.php';

?>

<!-- main.php -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>PRAKTIKUM</h1>
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
                <h3 class="card-title">Praktikum 4 OOP</h3>

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
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Form Lingkaran</title>
</head>

<body>
    <div class="container">
        <h1>Form Lingkaran</h1>
        <form method="POST" action="#">
            <div class="form-group row">
                <label for="panjang" class="col-4 col-form-label">Jari-jari</label>
                <div class="col-8">
                    <input id="jari" name="jari" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Hitung</button>
                </div>
            </div>
        </form>
            
            <!-- </table> -->
    </div>
    <hr>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>

<?php
if (isset($_POST['submit'])) {
	require_once 'class_lingkaran.php';

	//Tangkap Data dari Form
    $jari = $_POST['jari'];

    //Buat Objek
	$ns = new Lingkaran($phi, $jari,);
	
	//Tampilkan Data
	echo "<h2>Hasil Perhitungan</h2>";
	echo "<p>Keliling: " .$ns->rumusKeliling(). "</p>";
    echo "<p>Luas: " .$ns->rumusLuas(). "</p>";

}   
?>

<br>
<hr>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Form Persegi Panjang</title>
</head>

<body>
    <div class="container">
        <h1>Form Persegi Panjang</h1>
        <form method="POST" action="#">
            <div class="form-group row">
                <label for="panjang" class="col-4 col-form-label">Panjang</label>
                <div class="col-8">
                    <input id="panjang" name="panjang" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="lebar" class="col-4 col-form-label">Lebar</label>
                <div class="col-8">
                    <input id="lebar" name="lebar" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Hitung</button>
                </div>
            </div>
        </form>
            
            <!-- </table> -->
    </div>
    <hr>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>

<?php
if (isset($_POST['submit'])) {
	require_once 'class_persegipanjang.php';

	//Tangkap Data dari Form
    $panjang = $_POST['panjang'];
    $lebar = $_POST['lebar'];

    //Buat Objek
	$ns = new PersegiPanjang($panjang, $lebar,);
	
	//Tampilkan Data
	echo "<h2>Hasil Perhitungan</h2>";
	echo "<p>Keliling: " .$ns->rumusKeliling(). "</p>";
    echo "<p>Luas: " .$ns->rumusLuas(). "</p>";

}   
?>




              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Ini hasil praktikum 4 OOP
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
  include_once 'footer.php';
  ?>