<?php

    if(isset($_POST['sbmt']))
    {
        $adminid = $_POST["adminid"]; 
        $password = $_POST["password"]; 

        $result1 = mysqli_query($conn,"SELECT userid, password FROM account WHERE userid = '".$adminid."' AND  password = '".$password."';");

        while($row=mysqli_fetch_assoc($result1))
        {
        $check_adminid=$row['adminid'];
        $check_password=$row['password'];
        }
        if($adminid == $check_adminid && $password == $check_password)
        {    
        echo '<script language="javascript">';
        echo 'alert("Login Success");'; 
        echo 'window.location.href= "AdminHome.php";';  
        echo '</script>';
        }

        else{
        echo '<script language="javascript">';
        echo 'alert("Login Failed")';      
        echo '</script>';
  
        }
    }


?>
