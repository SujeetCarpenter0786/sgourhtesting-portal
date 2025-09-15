<?php
include('includes/config.php');
$success = false;
session_start();
if(isset($_POST['fsecret']) && $_POST['fsecret'] == "ahkwebsolutions_reset"){
  $username = mysqli_real_escape_string($conn,$_POST['username']);
  $_SESSION['tmpuser'] = $username;
  $res = mysqli_query($conn,"SELECT * FROM `usertable` WHERE phone='$username' or emailid='$username' or userid='$username' ");
  if(mysqli_num_rows($res)==1){
    $userdata = mysqli_fetch_assoc($res);
    
    $otp = rand(00000,99999);
    $ires = mysqli_query($conn,"UPDATE `usertable` SET `otp`='$otp' WHERE phone='$username' or emailid='$username' or userid='$username' ");
    if($ires){

 // Mail STart From Here

 $mob_no = $userdata['phone'];
 $fromName = $ahkweb['name'];

 $subject_home = "Password Reset OTP ";
 
 
 include('ahkmailer/PHPMailerAutoload.php');
 $msg= "Hello Dear , " . $userdata['name'].  " <br> Your Password Reset OTP is:  "  . $otp. " \n\n <br>Mobile Number is  " .  $mob_no.  "\n\n<br>Username : ".$username .  "<br>";
 
 
  // echo $mlto;
  $mail = new PHPMailer(); 
  //  $mail->SMTPDebug  = 3;
  $mail->IsSMTP(); 
  $mail->SMTPAuth = true; 
  $mail->SMTPSecure = 'tls'; 
  $mail->Host = "smtp.hostinger.in";
  $mail->Port = 587; 
  $mail->IsHTML(true);
  $mail->CharSet = 'UTF-8';
  $mail->Username = $emailfrom;
  $mail->Password = $smtp_password;
  $mail->SetFrom($emailfrom,$fromName);
  $mail->Subject = $subject_home;
  $mail->Body =$msg;
  $mail->addAddress($userdata['emailid']);
  $mail->SMTPOptions=array('ssl'=>array(
      'verify_peer'=>false,
      'verify_peer_name'=>false,
      'allow_self_signed'=>false
  ));
  if(!$mail->Send()){
      echo $mail->ErrorInfo;
  }else{
       $success = true;
  }
 
  if($success == true){
    ?>
    <script>
      $(function(){
        Swal.fire(
          'Success!',
          'OTP Sent to Your Email Id!',
          'success'
        )
      });
    </script>
    <?php
  }
  else{
      echo " Mail Not Sent";
  }
  
  // EndMail 
    }


  }else{
    ?>
    <script>
      $(function(){
        Swal.fire(
          'Opps!',
          'Entered Username or email not exist!',
          'error'
        )
      });
      window.setTimeout(function() {
      window.location.href = "forgot-password.php";
      }, 1500);
    </script>
    <?php
  }

}

//Update Password 
if(isset($_POST['preset']) && $_POST['preset'] == "ahkweb_preset"){
  $v_username = mysqli_real_escape_string($conn,$_POST['username']);
  $v_otp = mysqli_real_escape_string($conn,$_POST['v_otp']);
  $password = mysqli_real_escape_string($conn,$_POST['password']);
  $cpassword = mysqli_real_escape_string($conn,$_POST['cpassword']);
  
  $check = mysqli_query($conn,"SELECT * FROM usertable WHERE userid='$v_username' or emailid='$v_username' or phone='$v_username' ");
  if(mysqli_num_rows($check)==1){
    $data = mysqli_fetch_assoc($check);
    if($v_otp == $data['otp']){
      if($password == $cpassword){
        $vpassword = password_hash($cpassword, PASSWORD_DEFAULT);
        $usql = mysqli_query($conn,"UPDATE usertable SET password='$vpassword', otp='' WHERE userid='$v_username' or emailid='$v_username' or phone='$v_username' ");
        if($usql){
          ?>
          <script>
            $(function(){
              Swal.fire(
                'Success!',
                'Password Reset Successfully! You can Login Now',
                'success'
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
          $(function(){
            Swal.fire(
              'Error!',
              'Confirm Password Not Match!',
              'error'
            )
          });
          window.setTimeout(function() {
  window.location.href = "forgot-password.php";
  }, 1500);
        </script>
        <?php
      }
    }else{
      ?>
      <script>
        $(function(){
          Swal.fire(
            'Opps!',
            'Incorrect OTP!',
            'error'
          )
        });
        window.setTimeout(function() {
  window.location.href = "forgot-password.php";
  }, 1500);
      </script>
      <?php
    }

  }else{
    ?>
    <script>
      $(function(){
        Swal.fire(
          'Opps!',
          'You are Termapring Something in this page Sorry  we cannot proceed!',
          'error'
        )
      });
      window.setTimeout(function() {
  window.location.href = "index.php";
  }, 1500);
    </script>
    <?php
  }
}


// Form Showing 
if($success == true){
  ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> <?php echo $ahkweb['name'] ?> | Recover Password</title>

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
    <a href="./admin/index.php"><b><?php echo $ahkweb['name'] ?></b>Portal</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">You are only one step a way from your new password, recover your password now.</p>

      <form action="" method="post">
        <input type="hidden" name="preset" value="ahkweb_preset">
        <input type="hidden" name="username" value="<?php echo $_SESSION['tmpuser']; ?>">
        <div class="input-group mb-3">
          <input type="text" name="v_otp" class="form-control" placeholder="OTP">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="cpassword" class="form-control" placeholder="Confirm Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Change password</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mt-3 mb-1">
        <a href="login.php">Login</a>
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
     <a href="https://wa.me/917479422453" target="_blank"><img src="https://crsorgeigove.in/admin/uploads/whatsappimg.png" style="width:60px;height:60px;" /></a>
</div>



</body>
</html>

  <?php

}
?>
