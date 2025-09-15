<?php
include('database.php');
include('links.php');
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
$qr = "../admin/uploads/qr4.png";
$upi = "QR CODE KO SCEEN KARE AUR SUMBIT REQUEST KARE 300 RS ADD KARNE PAR 600 MILE GA AUR YE PORTAL KABHI BAND NAHI HO GA SABHI LOG ID PASSWORD FREE HAI";

// SMTP Password Details
$emailfrom = "support@cr.in";
$smtp_password = "ddffdgf";

$webres = mysqli_query($conn,"SELECT * FROM website  WHERE id='0'");
$url = basename($_SERVER['REQUEST_URI']);
$ahkweb = mysqli_fetch_array($webres);

 if(isset($_SESSION['loggedin']) == true){
    $mail = $_SESSION['emailid'];
    $s_phone = $_SESSION['phone'];

    
    $ures = mysqli_query($conn,"SELECT * from usertable  WHERE emailid='$mail'");
    $udata = mysqli_fetch_assoc($ures);
     $wallet_amount = $udata['walletamount'];
$panwallet_amount = $udata['panwallet'];
  

 }
?>

<link rel="icon" href="http://sonupan.xyz/uploads/all/vjBJlxtgTC4j8umEGN5MRd6lUuPO8Swjxrysl4uM.gif">
