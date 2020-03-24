<?php
include 'config.php';

$username = ($_POST['username']);
$password = (md5($_POST['password']));

$query = "SELECT * FROM `login` WHERE username = '$username' AND password = '$password' ";
$sql = mysqli_query ($koneksi, $query);

if(mysqli_num_rows($sql)){
  session_start();
  $_SESSION["username"] = $username;
  header("location: user.php");
}else{
  echo "<h1>Username atau Password salah!!</h1>";
  echo "<div class='form'>
        <h3>
          <br/>Klik untuk <a href='index.php'>login lagi</a>
        </h3>
        </div>";
}
 ?>
