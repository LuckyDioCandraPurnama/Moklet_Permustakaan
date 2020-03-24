<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

  </head>
    <title>Register</title>

  <body>
  <h1>Register</h1>
  <div class="form">
    <span class="welcome"> Register </span>
    <form action="" method="post">
      <input type="text" name="username" placeholder="Username" value="" class="input"><br>
      <input type="email" name="email" placeholder="Email" value="" class="input"><br>
      <input type="password" name="password" placeholder="Password" value="" class="input"><br>
      <input type="submit" name="simpan" value="Daftar" class="submit"><br>
      <br><br>
      <br><br>
    </form>
  </div>
  </body>
</html>

<?php
  include 'config.php';
  if (@s_POST['simpan']){
    $username = @$_POST['username'];
    $email = @$_POST['email'];
    $password = @$_POST['password'];
    $pass = md5($password);

    $query = mysqli_query($koneksi,"INSERT INTO `login` (username, email, password)VALUES ('$username', '$email', '$pass')");

        if($query){
          echo "<div class='login-box'>
          <br><br>
          <br><br>
          <br><br>
          <br><br>
          <br><br>
          <br><br>
          <br><br>
          <br><br>
          <br><br>
          <br><br>
          <br><br>
          <br><br>
          <br><br>

          <h3> Berhasil registrasi akun </h3>
          <br/> Klik untuk <a href='index.php'>Login</a>
          </div>";
        }else{
          echo "<h3> Gagal input data </h3>";
        }
      }
 ?>
