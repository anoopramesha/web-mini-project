<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
    .bs-example{
    	margin: 20px;
    }
    
    .form-group{
        position: absolute;
        left: -10%;
        top: 10%;
    }
    body{
            background-image: url('Images/Movies.jpg');
        }
    
    
    
    input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0; /* <-- Apparently some margin are still there even though it's hidden */
}


</style>
</head>

<?php
$servername = "localhost";
$username = "root";
$password = "welcome";
$dbname = "myDB";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
    
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    
} 
?>
<!Doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="description" content="$1">
<meta name="viewport" content="width=device-width, initial-scale=1">


<title>Credit Sign Up</title>


</head>
<body>

<?php

  if(isset($_POST['Submit']))
{
    $sql = "INSERT INTO credit (cname, cno, ctype, cexp, cvv)
    VALUES ('".$_POST["cname"]."','".$_POST["cno"]."','".$_POST["ctype"]."','".$_POST["cexp"]."','".$_POST["cvv"]."')";

    if ($conn->query($sql) === TRUE) {
    echo '<script language="javascript">';
    echo 'alert("Credit info entered successfully")';      
    echo '</script>';
} else {
    echo '<script language="javascript">';    
    echo 'alert("Credit info Entered is incorrect")';
    echo '</script>';
}

  }

?>
    
<center>
<div class="form-group col-xs-5 col-sm-5 col-md-5col-md-5 col-lg-5  col-sm-offset-5 well offset5">

<form action="credit.php" method="post"> 

<label id="first">Credit card name:</label><br/>
<input type="text" class="form-control" placeholder="Name" name="cname"><br/>
      
<label id="first"> Credit Card number:</label><br/>
<input type="number" class="form-control" placeholder="Credit Card Number" name="cno"><br/>

<label id="first">Credit Card Type:</label><br/>
<input type="text" class="form-control" placeholder="Type" name="ctype"><br/>


<label id="first">Credit Card Expiry Date:</label><br/>
<input type="date" class="form-control" placeholder="Date" name="cexp"><br/>
    
<label id="first">CVV:</label><br/>
<input type="number" class="form-control" placeholder="CVV" name="cvv"><br/>
        
<button type="submit" name="Submit" class="btn btn-danger" >Submit</button>
    
    
</div>
</center>        

</form>
</body>
</html>    