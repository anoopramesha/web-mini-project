<!DOCTYPE html>


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


if(isset['Submit'])
$tid=0;
    $tid+=1;
    $sql = "INSERT INTO theatre (tid, price, tname)
    VALUES ('".$tid."','".$_POST["price"]."','".$_POST["tname"]."');";
          $_SESSION['tid']=$tid;

    if ($conn->query($sql) == TRUE) {
    
    echo '<script language="javascript">';
    echo 'alert("Account created")';      
    echo '</script>';
}
    else {
    echo '<script language="javascript">';    
    echo 'alert("Account failed")';
    echo '</script>';
}

  }

?>
<html>
<style>
    body{
            background-image: url('Images/Movies.jpg');
        }
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
/*
button {
    background-color: red;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}
*/

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
    position: absolute;
    top:80%;
    left: 60%;
    float: left;
    width: 30%;
    border-radius: 10px;
    
}
    .proceedbtn{
        position: absolute;
        top: 80%;
        left: 10%;
        width: 30%;
        float: left;
    border-radius: 10px;
    }

/* Add padding to container elements */
.container {
    padding: 10px;
    width: 40%;
    height: 40%;
    background-color:white;
    position: absolute;
    top:30%;
    left:29%;
    border-radius: 10px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both
}

/* Change styles for cancel button and signup button on extra small screens */


}
    div1 {
    width: 150px;
    height: 150px;
    overflow: visible;
}
</style>
<body>

    <?php

  if(isset($_POST['Submit']))
{
    $tid=0;
    $tid+=1;
    $sql = "INSERT INTO theatre (tid, price, tname)
    VALUES ('".$tid."','".$_POST["price"]."','".$_POST["tname"]."')";

    if ($conn->query($sql) == TRUE) {
    echo '<script language="javascript">';
    echo 'alert("Account created")';      
    echo '</script>';
}
    else {
    echo '<script language="javascript">';    
    echo 'alert("Account failed")';
    echo '</script>';
}

  }

?>
    
    
    
    
    
<img src="Images/Showtime.png" style="width: 30%;height: 20%;position: absolute;top: 4%; right:35%">

<form action="Theatre.php",method="post">
  <div class="container">
      <center>
          <br>
          <br>
          <br>
    <label><b>Select Theatre</b></label>
    <select name="tname">
  <option name="tname" value="PVR Orion Mall" >PVR Orion Mall</option>
  <option name="tname" value="Inox Mantri Square">Inox Mantri Square</option>
    <option name="tname" value = "Inox Garuda Mall">Inox Garuda Mall</option>
    <option name="tname" value="PVR Forum Mall">PVR Forum Mall</option>
        <option name="tname" value="Urvashi Theatre">Urvashi Theatre</option>
        <option name="tname" value="The Cinema GT World Mall">The Cinema GT World Mall</option>
</select>
      <br>
      <br>
          <br>
          <br>
          <br>
          <br>
      <label><b>Prices</b></label>
          <br>
          <input type="checkbox" name="price" value="100">Rs 100
          <input type="checkbox" name="price" value="210">Rs 210
          <input type="checkbox" name="price" value="350">Rs 350</br></br>
    
      <button name="Cancel" type="button" >Cancel</button>
<button type="submit" name="Submit" class="btn btn-danger" >Submit</button>
  </div>
</form>
<!--
    <script>
function myFunction() {
    var x = document.getElementById("myBtn").value;
    document.getElementById("demo").innerHTML = x;
}
</script>
-->
</body>
</html>
