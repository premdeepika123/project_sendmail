<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login Page</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css "  rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
        <div class ="col-lg-8  col-lg-offset-2">
    <h1>Login Page</h1>
    <p>Fill in the details to login!!</p>
    <?php if(isset($_SESSION['success']))  { ?>
      <div class="alert alert-success"><?php echo $_SESSION['success'];?></div>

    <?php
     }
    ?>
    
    <?php echo validation_errors('<div class ="alert alert-danger">','</div>')?>

      <form action="" method="POST">
      <div class ="form-group">
        <label for ="username" >Username:</label>
        <input class="form-control" name="username" id="username" type="text">
    </div>
       <div class ="form-group">
        <label for ="password" >Password:</label>
        <input class="form-control" name="password" id="password" type="password">
    </div>
        <div class="texr-center">
      <button class="btn btn-primary" name="login">Login</button>
    </div>
  

  <a href="<?php echo base_url(); ?>index.php/auth/change_password">Forgot Password?</a><br>
    <a href="<?php echo base_url(); ?>index.php/auth/register">New User ?</a>
  </form>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>