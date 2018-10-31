<?php
session_start();

//if(!isset($_SESSION['username'])){
//    echo '<script language="javascript">';
//    echo 'alert("Login bitch");'; 
//    echo 'window.location.href= "index.php";';  
//    echo '</script>';
////    header('location: index.php')
//}
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

  $sql= "SELECT * FROM movies";
  $result=$conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc())
{
      $mid=$row["mid"];
      $mname=$row["mname"];
      $mrating=$row["mrating"];
      $minfo=$row["minfo"];
      $mimage=$row["mimage"];
      $_SESSION['mid1']=$mid; 
  
      echo "<p><b>";
      echo $mname,"<br><br></b>";
      echo "<img src=Images/$mimage height=300 width=700 style=position: relative; left: 56%;><br><br>";
      echo "Rating:",$mrating,"/5<br><br>";
      echo $minfo,"<br><br>"; 

      echo "</br></br></br></br></br></br></br></br></br></br>
    <form action=\"Movies.php\" method=\"post\">
      <button id=\"bttn\" name=\"bkbtn\" onclick=\"mov(this);\">
          Book Now!</button>
          </form>";
      echo "</p>";
  }
}
      echo "<script language=\"javascript1\">
        function mov(bttn){
            var string=$(bttn).attr('value');";

        echo "alert(\"Account created\");
        }</script>";
      
//      echo "</div>";
      ?>
<?php
//    if(isset($_POST['bkbtn']))
//        {
//            $_SESSION['mid']=$mid; 
//            echo '<script language="javascript1">';
//            echo 'alert("Click OK to book tickets");';
//            echo 'window.location.href= "theatre1.php";';  
//            echo '</script>';
//        }      

?>
<!DOCTYPE html>
<html>
<head>
<style>


p{    position: relative;
    right: 0px;
    bottom: -300px;
    font-size: 20px;
    color: white;
    padding-bottom: 50px;
    padding-left: 30px;
    }
    .bkbtn{
        background-color: red;/* Green */
    border: none;
    color: white;
    border-style: double;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    object-position: center;
    }
     body{
            background-image: url('Images/Movies.jpg');
        }
    
    html { overflow-y: scroll; }
    
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    border-radius: 10px;
     position:absolute;
    top:30%;
    left: 35%;
    
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    
}

li a:hover:not(.active) {
    background-color: black;
}

.active {
    background-color: red;
}
    
</style>
</head>
<body>
<img src="Images/Showtime.png" style="width: 30%;height: 20%;position: absolute;top: 4%; right:37%">
    
<ul>
  <li><a class="active" href="Movies.php">Movies</a></li>
  <li><a href="BookingHistory.php">Booking History</a></li>
  <li><a href="AboutPage.php">About</a></li>
</ul>    
</body>

</html>
