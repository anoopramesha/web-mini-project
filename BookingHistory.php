<?php
//include('BookingHistory.html')
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
$sql = "SELECT mname, date, time, tname, seats FROM booking b,theatre t, movies m where b.mid=m.mid AND b.tid=t.tid"; 
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
     echo "mname: " . $row["mid"]. " <br>date: " . $row["date"]. "Time: " . $row["time"]. "<br> tname " . $row["tname"]. "<br>Seats:".$row["seats"]."</br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

