<?php
session_start();
$mid1=$_SESSION['mid1'];
$_SESSION['mid']=$mid1;
header("refresh:0;url='Booking.php'");
?>