<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-midth, initial-scale=1.0">
    <meta http-equiv="X-UA Compatible"> content="ie_edge"
    <meta charset="utf-8">
  </head>
    <title>Login</title>
    <link rel="stylesheet" href="style1.css">
  <body>
    <div class="login-box">
    <form action="login.php" method="post">

  <h1>Login</h1>
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input  type="text" name="username" placeholder="Username" >
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" name="password" placeholder="Password">
  </div>
    <input  type="submit" class="btn" name="login" value="Login">
  </form>

<form action="register.php" method="post">
  <input  type="submit" class="btn" name="daftar" value="Daftar">
</form>
</div>
  </body>
</html>
