<?php 
if(!isset($_SESSION))
{ 
    session_start(); 
} 
include('includes/config.php');
if(isset($_SESSION['loggedin']) == true){
  ?>
  <script> 
  window.setTimeout(function() {
  window.location.href = "admin";
  }, 1500);
  </script>
  
    <?php
}  
if(isset($_POST['secret']) && $_POST['secret'] == "ahkwebsolutions" && !empty($_POST['username']) && !empty($_POST['password'])){
  $username = mysqli_real_escape_string($conn,$_POST['username']);
  $password = mysqli_real_escape_string($conn,$_POST['password']);

  $res = mysqli_query($conn,"SELECT * FROM `usertable` WHERE phone='$username'  OR emailid='$username' OR userid='$username' ");

  if(mysqli_num_rows($res) == 1 ){
    $userdata = mysqli_fetch_assoc($res);
    $vpass = password_verify($password,$userdata['password']);
    if($vpass){
      if($userdata['status'] == "verified"){
        
        if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
        ?>
			<script>
				$(function(){
					Swal.fire(
						'Success!',
						'You Are Logged In Successfully!',
						'success'
					)
				});
			</script>
			<?php
      
      $_SESSION['loggedin'] = true;
      $_SESSION['userid'] = $userdata['userid'];
      $_SESSION['name'] = $userdata['name'];
      $_SESSION['emailid'] = $userdata['emailid'];
      $_SESSION['phone'] = $userdata['phone'];
      $_SESSION['walletamount'] = $userdata['walletamount'];
      $_SESSION['usertype'] = $userdata['usertype'];
     
      ?>
      <script>
      window.setTimeout(function() {
      window.location.href = "admin";
      }, 1500);
      </script>
      
        <?php

        // 
      }else{
        ?>
        <script>
          $(function(){
            Swal.fire(
              'Opps!',
              'Your Account is Blocked or inactive Please Contact With Admin',
              'error'
            )
          });
        </script>
        <?php

      }


    }else{
      ?>
      <script>
        $(function(){
          Swal.fire(
            'Opps!',
            'Password Wrong!',
            'error'
          )
        });
      </script>
      <?php
    }

  }else{
    ?>
    <script>
      $(function(){
        Swal.fire(
          'Opps!',
          'Entered username Wrong or Not Exist',
          'error'
        )

      });

    </script>
    <?php
  }



}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $ahkweb['name'] ?> | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./admin/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="./admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./admin/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="index.php"> Birth and Death Registration Certificates for the india</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your portal</p>

      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="text" name="username" required class="form-control" placeholder="Email phone or Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" required class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="hidden" name="secret" value="ahkwebsolutions">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div> -->
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot-password.php">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.php" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="./admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="./admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="./admin/dist/js/adminlte.min.js"></script>


<div style ="width:60px;height:60px;position:fixed;right:20px;bottom:20px;">
     <a href="https://wa.me/91MobileNo." target="_blank"><img src="https://crsorgiigoov.in/admin/uploads/whatsappimg.png" style="width:60px;height:60px;" /></a>
</div>


</body>
</html>
