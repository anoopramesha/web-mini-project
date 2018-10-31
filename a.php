
session_start();

if(!isset($_SESSION['username'])){
    echo '<script language="javascript">';
    echo 'alert("Login");'; 
    echo 'window.location.href= "index.php";';  
    echo '</script>';
}

