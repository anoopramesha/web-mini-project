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


<title>test</title>


</head>
<body>

 <?php

  if(isset($_POST['Submit']))
{
    $sql = "INSERT INTO MyGuests (id, firstname, lastname, email, reg_date)
    VALUES ('".$_POST["id"]."','".$_POST["firstname"]."','".$_POST["lastname"]."','".$_POST["email"]."','".$_POST["reg_date"]."')";

    if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

  }

?>

<form action="test.php" method="post"> 

<label id="first">ID</label><br/>
<input type="number" name="id"><br/>

<label id="first"> First name:</label><br/>
<input type="text" name="firstname"><br/>

<label id="first">Last Name:</label><br/>
<input type="text" name="lastname"><br/>

<label id="first">Email:</label><br/>
<input type="text" name="email"><br/>

<label id="first">Registration date:</label><br/>
<input type="text" name="reg_date"><br/>

<button type="submit" name="Submit">save</button>

</form>

</body>
</html>