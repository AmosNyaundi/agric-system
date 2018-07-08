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
            <h1 class="text-center"> Account Reset </h1>
            
          </div>
        </div>
      </div>
    </header>

    <section id="main">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <form id="login" action="confirm.php" class="well" method="post">
              <div class="form-group">
                <h4>Account Recovery</h4>
                <p>Provide a valid email address to recoover your account</p>
               <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" name="username">
                </div>
                <label>Email</label>
                <input type="email" class="form-control" name="email"> 
              </div>
              <div class="form-group">
                <button style="background-color: #00b300;color: #ffffff;" type="submit" class="btn btn-default " name="register">Submit
                </button> 
              </div>
              
            </form>
          </div>
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
