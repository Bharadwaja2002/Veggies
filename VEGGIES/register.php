<?php       
        
$con = mysqli_connect("localhost","root","","veggies");

extract($_POST)
if (isset($save)) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $query    = "INSERT into `register` (username, password, email)
                     VALUES ('$username', '" . md5($password) . "', '$email')";
       $result   = mysqli_query($con, $query);
    $err="<font color='blue'>Registration successfull !!</font>";
    
    } 
?>
    
