<?php
session_start();
if (isset($_POST['Login'])) {
    $a = $_POST['user'];
    $b = $_POST['pass'];

    if ($a == "admin" && $b == "123456") {
        $_SESSION['login'] = $a;
        echo "<h1>Anda berhasil LOGIN</h1>";
        echo "<h2>Klik <a href='bookstore.php'>di sini</a>
                untuk menuju ke halaman selanjutnya";
    } else {
        die("username atau password anda salah 
        silahkan kembali login <a href=lo.php> Login </a>");
    }
} else {
    ?>
    <html>

    <head>
    <title>Login here</title>
    </head>
    <body>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <div class="container">
                <div class="row" style="padding:35px;">
                    <div class="col-md-11">
                        <div class="card">
                            <div class="card-header"><center><b>Login Here...</b></center></div>
                                <div class="card-body">
            <center><form action="" method="post">
            Username : <input type="text" name="user"><br>
            Password : <input type="password" name="pass"><br><br>
            <input type="submit" name="Login" value="Login">
            </center>

        </form>
    </body>

    </html>
<?php
}
?>