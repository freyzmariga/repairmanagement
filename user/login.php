<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['login']))
  {
    $emailcon=$_POST['emailcont'];
    $password=md5($_POST['password']);
    $query=mysqli_query($con,"select ID from tbluser where  (Email='$emailcon' || MobileNumber='$emailcon') && Password='$password' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['acrsuid']=$ret['ID'];
     header('location:dashboard.php');
    }
    else{

    echo "<script>alert('Invalid Details.');</script>";
    }
  }
  if(isset($_POST['submit']))
  {
    $contactno=$_POST['contactno'];
    $email=$_POST['email'];
$password=md5($_POST['newpassword']);
        $query=mysqli_query($con,"select ID from tbluser where  Email='$email' and MobileNumber='$contactno' ");

    $ret=mysqli_num_rows($query);
    if($ret>0){
      $_SESSION['contactno']=$contactno;
      $_SESSION['email']=$email;
      $query1=mysqli_query($con,"update tbluser set Password='$password'  where  Email='$email' && MobileNumber='$contactno' ");
       if($query1)
   {
echo "<script>alert('Password successfully changed');</script>";

   }

    }
    else{

      echo "<script>alert('Invalid Details. Please try again.');</script>";
    }
  }
  ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <title>Mariga Repairing System :: Login Page</title>


  <!-- Bootstrap core CSS -->
  <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="../lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="../css/style.css" rel="stylesheet">
  <link href="../css/style-responsive.css" rel="stylesheet">
  
</head>

<body>

  <div id="login-page">
    <a href="../index.php" class="logo pull-left"><h2 style="padding-top: 30px;padding-left: 30px;color: blue"><i class="fa fa-home"></i></h2></a>
    <div class="container">
      <form class="form-login" action="" method="post" name="login">
        <h2 class="form-login-heading">sign in now</h2>
        <div class="login-wrap">
          <input type="text" class="form-control" placeholder="Registered Email or Contact Number" autofocus name="emailcont" required="true">
          <br>
          <input type="password" name="password" class="form-control" placeholder="Password">
          <label class="checkbox">

            <span class="pull-right">
            <a data-toggle="modal" href="login.php#myModal"> Forgot Password?</a>
            </span>
            </label>

          <button class="btn btn-theme btn-block" type="submit" name="login"><i class="fa fa-lock"></i> SIGN IN</button>
          <hr>
          <a href="signup.php"> Create an Account</a>
         </div>
        </div></form>
        <!-- Modal -->
        <form class="form-login" method="post" name="changepassword" onsubmit="return checkpass();">
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Forgot Password ?</h4>
              </div>
              <div class="modal-body">
                <p>Enter follwing Details below to reset your password.</p>

                <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
                <br />
                <input type="text" name="contactno" placeholder="Contact Number" autocomplete="off" class="form-control placeholder-no-fix">
                <br />
                <input type="password" name="newpassword" placeholder="New Password" autocomplete="off" class="form-control placeholder-no-fix">
                <br />
                <input type="password" name="confirmpassword" placeholder="Confirm Password" autocomplete="off" class="form-control placeholder-no-fix">
              </div>
              <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                <button class="btn btn-theme" type="submit" name="submit">Reset</button>
              </div>

            </div>
          </div>
        </div>
       </form>
    </div>
  </div>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="../lib/jquery/jquery.min.js"></script>
  <script src="../lib/bootstrap/js/bootstrap.min.js"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="../lib/jquery.backstretch.min.js"></script>
  <script>
    $.backstretch("../img/login-bg.jpg", {
      speed: 500
    });
  </script>
</body>

</html>
