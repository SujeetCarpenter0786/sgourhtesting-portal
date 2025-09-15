 <?php
include('includes/config.php');
if (isset($_POST['reg']) && $_POST['reg'] == "ahkweb"  ) {
  
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);

  if (!empty($password) && !empty($cpassword) && $mobile != "ADMIN" && $email != "ADMIN") {
    if ($password == $cpassword) {

      $fpassword = password_hash($cpassword, PASSWORD_DEFAULT);
      $checksql = mysqli_query($conn, "SELECT * FROM usertable WHERE emailid='$email' OR phone='$mobile'");
      if (
        !empty($name) &&
        !empty($mobile) &&
        !empty($email) &&
        !empty($password) &&
        !empty($cpassword)
      ) {
        if (mysqli_num_rows($checksql) == 0) {
    
          $sql = "INSERT INTO `usertable` (`phone`, `emailid`, `name`, `password`, `city`, `state`, `userid`, `status`, `profilepic`, `createdby`, `joineddate`, `joinedtime`, `usertype`, `walletamount`,`otp`) VALUES ('$mobile', '$email', '$name', '$fpassword', 'cc', 'sdds', '$mobile', 'verified', '', NULL, '', '', 'OPERATER', '0','');";
          $res = mysqli_query($conn,$sql);
          // 
          if($res){
            ?>
            <script>
              // alert('Your Account Register Successfully!, You can Login');
              $(function() {
        Swal.fire(
            'Success',
            'Register Successfully You can Login',
            'success'
        )
    });

  
  window.setTimeout(function() {
  window.location.href = "login.php";
  }, 1500);

    
            </script>
            <?php
          }else{
            ?>
            <script>
              // alert('Account Not Created ,Try Again!!');
              $(function(){
                Swal.fire(
                  'Opps!',
                  'Internet Server Error, Please Try Again Later!',
                  'error'
                )
    
              });
            </script>
            <?php
          }
          // 
        }else{
          ?>
          <script>
            // alert('Your  email or phone  already exist!');
            $(function() {
        Swal.fire(
            'Opps!',
            'Your  email or phone  already exist!',
            'error'
        )
    });
      
  window.setTimeout(function() {
  window.location.href = "login.php";
  }, 1500);
          </script>
          <?php
        }
      }else{
        ?>
        <script>
             $(function() {
        Swal.fire(
            'Opps!',
            'Please Fill All data',
            'error'
        )
    });
        </script>
        <?php
      }
    }else{
      // echo "Confirm Password Not Match";
      ?>
      <script>
           $(function() {
    Swal.fire(
        'Opps!',
        'Confirm Password Not Match!',
        'error'
    )
});
      </script>
      <?php
    }
  }else{
    ?>
      <script>
           $(function() {
    Swal.fire(
        'WOW trying to Cheat!!!',
        'You Are A Cheater  GET OUT!',
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
  <title> <?php echo $ahkweb['name']; ?> | Registration </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./admin/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="./admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./admin/dist/css/adminlte.min.css">
</head>

<body class="hold-transition register-page">
  <div class="register-box">
    <div class="register-logo">
      <a href="index.php">कभी भी अपनी जिंदगी में किसी इंसान पर घमंड मत करना//मैंने किया था टूट कर रह गया यारो</a>
    </div>

    <div class="card">
      <div class="card-body register-card-body">
        <p class="login-box-msg">Register as a New Member</p>

        <form action="" method="POST">
          <div class="input-group mb-3">
            <input type="text" name="name" class="form-control" placeholder="Full name">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="mobile" placeholder="Mobile Number">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-phone"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="email" class="form-control" name="email" placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" name="password" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" name="cpassword" placeholder="Retype password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="hidden" name="reg" value="ahkweb">
               
                <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                <label for="agreeTerms">
                  I agree to the <a href="#">terms</a>
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Register</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        <!-- <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i>
          Sign up using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i>
          Sign up using Google+
        </a>
      </div> -->

        <a href="login.php" class="text-center">I already have a membership</a>
      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
  <!-- /.register-box -->

  <!-- jQuery -->
  <script src="./admin/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="./admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="./admin/dist/js/adminlte.min.js"></script>
  
  
<div style ="width:60px;height:60px;position:fixed;right:20px;bottom:20px;">
     <a href="https://wa.me/91MobileNo." target="_blank"><img src="http://sonupan.xyz/admin/uploads/whatsappimg.png" style="width:60px;height:60px;" /></a>
</div>
  
  
</body>

</html>