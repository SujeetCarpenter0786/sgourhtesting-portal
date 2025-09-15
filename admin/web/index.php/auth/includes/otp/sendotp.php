<?php
 
/*
* Write your logic to manage the data
* like storing data in database
*/
 
// POST Data
$otp = rand(100000,999999);
$to = $_POST['emid'];
$sub = "$otp is OTP for Registration";
$body = "Here is your OTP for registration is $otp ";
$_SESSION['otp'] = $otp ;
$mailsent = mail($to, $sub, $body );
if($mailsent){
$data['emid'] = "OTP sent successfully";
}
if(!$mailsent){
$data['emid'] = "There was some error sending the OTP";
}
echo json_encode($data);
exit;
 
?>