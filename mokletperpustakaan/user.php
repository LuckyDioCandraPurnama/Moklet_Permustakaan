<?php
session_start();


if(!isset($_SESSION['username'])){
  header("location: index.php?access_denied");
}
 ?>

 <!DOCTYPE html>
 <html lang="en">
   <head>
     <title>User Page</title>

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
     integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <link rel="stylesheet" href="style.css">
     <style>
       .welcome{
         color: #730800;
         font-size: 35pt;
         font-weight: 900;
       }
     </style>
   </head>
   <body>

     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Beranda</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="../mokletperpustakaan/petugas/tampil_petugas.php">Daftar petugas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../mokletperpustakaan/petugas/proses_edit_petugas.php">Edit petugas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../mokletperpustakaan/petugas/edit_petugas.php">Profil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>
     <br><br>
     <br>
<header>
  <h1 class="welcome">Selamat Datang <?php echo $_SESSION['username']; ?></h1>
  <h2>Pure Skill || No Cheat</h2>
  <h2><a href="logout.php">Klik untuk Logout</a></h2>
</header>

   </body>
 </html>
