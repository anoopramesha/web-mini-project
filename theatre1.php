<?php
session_start();
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
<?php
function setTh($thid){
    $thid=0;
    return $thid;
}

function increm(){
    if(isset($thid))
    {
        ++$thid;
        return $thid;
        
    }
    else
    {
        $thid=0;
        ++$thid;
        return $thid;
    }
}


  if(isset($_POST['Submit']))
{
    $tid=increm();
    $tid=1;
    $_SESSION['tid']=$tid;
    $sql = "INSERT INTO theatre (tid, price, tname)
    VALUES
    ('".$tid."','".$_POST["price"]."','".$_POST["tname"]."');";
    
    if ($conn->query($sql) == TRUE) {
    echo '<script language="javascript">';
    echo 'alert("Theatre entered")';
    echo 'window.location.href= "Booking.php";';  
    echo '</script>';
}
    else {
    echo '<script language="javascript">';    
    echo 'alert("Failed")';
    echo '</script>';
}   

  }
  
?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 


<html>
<!DOCTYPE html>


<html>
    <head>
<style>
    
    .form-group{
        position: relative;
        left: -10%;
        top: 30%;
    }
    body{
            background-image: url('Images/Movies.jpg');
            
        }
    
    
</style>
</head>  
<body>    
<img src="Images/Showtime.png" style="width: 30%;height: 20%;position: absolute;top: 4%; right:35%">

<div class="form-group col-xs-5 col-sm-5 col-md-5col-md-5 col-lg-5  col-sm-offset-5 well offset5">

<form action="theatre1.php" method="post"> 

  <label id="first">Rates</label><br/>
  <input type="checkbox" name="price" value="100"> 100&nbsp;
  <input type="checkbox" name="price" v alue="210"> 200&nbsp;
    <input type="checkbox" name="price" value="350"> 350&nbsp;</br>
    
    <label id="first">Theatre Name:</label><br/>
    <input list="tname" name="tname"><br/>    
    <datalist id="tname" size="4" multiple><br/ >
  <option value="PVR Orion Mall">PVR Orion Mall</option>
  <option value="Inox Mantri Square">Inox Mantri Square</option>
  <option value="Inox Garuda Mall">Inox Garuda Mall</option>
  <option value="PVR Forum Mall">PVR Forum Mall</option>
  <option value="Urvashi Theatre">Urvashi Theatre</option>
  <option value="The Cinema GT World Mall">The Cinema GT World Mall</option>
</datalist><br/>
<br/><button type="submit" name="Submit" class="btn btn-danger" >Submit</button>
</form>
    </div>
</body>
</html>