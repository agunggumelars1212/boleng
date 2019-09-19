<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Assalaam Book Store</title>
  </head>
  <body>
  <div class="container">
    <div class="row" style="padding:35px;">
        <div class="col-md-11">
        <center><h1>Assalaam Book Store</h1></center>
            <div class="card">
                <div class="card-header"><center><b>Pembelian Buku</b></center></div>
                <div class="card-body">
                <!-- ISI DISINI -->
                <form action="bookstorepro.php" method="POST">
                <div class="form-group">
                    <labe for="">Nama</labe>
                    <input type="hidden" name="nama">
                    <input type="text" name="nama" class="form-control">
                </div>
                <div class="form-group">
                    <labe for="">Alamat</labe>
                    <input type="hidden" name="nama">
                    <textarea name="alamat" class="form-control" rows="8"></textarea>
                </div>
                <div class="form-group">
                    <labe for="">Jenis Kelamin</labe>
                    <input type="radio" name="jk" value="Laki-laki"/>Laki-laki
                    <input type="radio" name="jk" value="Perempuan" 
                    checked="checked"/>Perempuan
                </div>
                <div class="form-group">
                    <labe for="">Tanggal Pembelian</labe>
                    <input type="hidden" name="nama">
                    <input type="date" name="tglpembelian" class="form-control">
                </div>
                <div class="form-group">
                    <labe for="">Jumlah Buku</labe>
                    <input type="hidden" name="nama">
                    <input type="number" name="jmlbuku" class="form-control">
                </div>
                <?php
                    if(isset($_POST["simpan"])){
                        $a = $_POST["nama"];
                        $b = $_POST["alamat"];
                        $c = $_POST["jk"];
                        $d = $_POST["tglpembelian"];
                        $e = $_POST["jmlbuku"];
                    }
                ?>
                 <div class="form-group">
                    <button type="submit" name="simpan" class="byn btn-success">Proses</button>
                    <button type="reset" class="byn btn-danger">Reset</button>
                </div>
                </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>