<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Change Password</title>

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
    <h3><center><font color="blue">Forgot Password</font></center></h3><br>
    <p><b><font color="red">Fill the details to change your password</font></b></p>
    <?php if(isset($_SESSION['success']))  { ?>
      <div class="alert alert-success"><?php echo $_SESSION['success'];?></div>

    <?php
     }
    ?>
    
    <?php echo validation_errors('<div class ="alert alert-danger">','</div>')?>

      <form action="" method="POST">
       <div class ="form-group">
        <label for ="password" >Old Password:</label>
        <input class="form-control" name="old_password" id="name" type="password">
      </div>
          <div class ="form-group">
        <label for ="password" >New Password:</label>
        <input class="form-control" name="new_password" id="newpassword" type="password">
    </div>
    <div class ="form-group">
        <label for ="confirm_password" >Confirm Password:</label>
        <input class="form-control" name="confirm_password" id="confirm_password" type="password">
    </div>
     
    <div class="texr-center">
      <button class="btn btn-success" name="change_password">Change Password</button>
    </div>
  </form>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>