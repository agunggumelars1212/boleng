
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </body>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<head>
<body>
<div class="container">
    <div class="row" style="padding:35px;">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header"><center><b>Pembelian Book Asaalaam</b></center></div>
                <div class="card-body">
                <!-- ISI DISINI -->
                <form action="bookstore.php" method="POST">
                <div class="form-group">
                    <labe for="">Judul</labe>
                    <input type="text" name="judul" class="form-control">
                </div>
                <div class="form-group">
                    <labe for="">Kode Book</labe>
                    <input type="number" name="kodebook" class="form-control" rows="8">
                </div>
                <div class="form-group">
                    <labe for="">Pengarang</labe>
                    <input type="number" name="pengarang" class="form-control" rows="8">
                </div>
                <div class="form-group">
                    <labe for="">Jenis buku</labe>
                    <select class="form-control" name="jnsbuku" id="sel1">
                    <option>--PILIH--</option>
                    <option value="novel">Novel</option>
                    <option value="fiksi">Fiksi</option>
                    <option value="horror">Horror</option>
                    <option value="cergam">Cergam</option>
                    <option value="komik">Komik</option>
                    </select>
                </div>
                <div class="form-group">
                    <labe for="">Harga buku</labe>
                    <input type="number" name="jmlbuku" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" name="simpan" class="byn btn-success">Proses</button>
                    <button type="reset" class="byn btn-danger">Reset</button>
                </div>
                <input type="hidden" name="nama" value="<?php echo $nama?>">
                <input type="hidden" name="alamat" value="<?php echo $alamat?>">
                <input type="hidden" name="jk" value="<?php echo $jeniskel?>">
                <input type="hidden" name="tglpembelian" value="<?php echo $pembelian?>">
                <input type="hidden" name="jml" value="<?php echo $jumlah?>">
                <?php
if(isset($_POST["simpan"])){
$j = $_POST["judul"];
$k = $_POST["alamat"];

$d = $_POST["tglpembelian"];
$e = $_POST["jml"];

?>

                </form>

                
</head>
</body>