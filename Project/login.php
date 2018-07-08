<?php
session_start();
$_SESSION['message'] = '';
$mysqli = new mysqli('localhost', 'root', '', 'agric');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $mysqli->real_escape_string($_POST['username']);
  $email = $mysqli->real_escape_string($_POST['email']);
  $password = md5($_POST['password']); //md5 hash password security


}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../../favicon.ico">
    <title>Account Login</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
  </head>

  <body style="background-color: #82e982;">

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center"> Admin Area <small> Account Login</small></h1>
          </div>
        </div>
      </div>
    </header>
      <div class="col-md-4 col-md-offset-4">
        <form id="login" method="post" action="admin.html" autocomplete="off" enctype="multipart/form-data" class="well" >
          <!-- Display error -->
          <div class="alert alert-error"><?= $_SESSION['message'] ?> </div>

          <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" required> 
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="password" required>
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-lg btn-success" name="login" value="Login">
          </div>
          <p>Forgot Password? <a href="reset.php">Reset</a>
          </p>
        </form>
      </div>
    <section id="main">
      <div class="container-fluid">
        <div class="row">
          
        </div>
        </div>
      </div>
    </section>
  

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>