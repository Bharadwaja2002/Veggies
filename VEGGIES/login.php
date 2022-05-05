<?php
        
$con = mysqli_connect("localhost","root","","veggies");

if (isset($_POST['save']))
{  $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
 

	if($email=="" || $password=="")
	{
	$err="<font color='red'>fill all the fileds first</font>";
	}
	else
	{
$pass=md5($p);

$sql=mysqli_query($conn,"select * from register where email='$email' and pass='$password'");
 $r=mysqli_num_rows($sql);

if($r==1)
{
$_SESSION['sucess']="You have logged in!";
header('location:index.html');
}

else
{

array_push($errors, "Username or password incorrect");

}
}
}

?>

