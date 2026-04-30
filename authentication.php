<?php
include('connection1.php');
$username = $_POST['username'];
$password = $_POST['password'];
//to prevent from mysqli injection
$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysqli_real_escape_string($con, $username);
$password = mysqli_real_escape_string($con, $password);
$sql = "SELECT *from admindb where a_username = '$username' and a_password =
'$password'";
$answer= mysqli_query($con, $sql);
$row = mysqli_fetch_array($answer, MYSQLI_ASSOC);
$count = mysqli_num_rows($answer);
if($count == 1){
header("Location:activities.php"); ;
}
else{
header("Location:login page.php");
}
?>
CONNECTION:
<?php
$host = "localhost";
$user = "root";
$password = '';
$db_name = "result";

$con = mysqli_connect($host, $user, $password, $db_name);
if(mysqli_connect_errno()) {
die("Failed to connect with MySQL: ". mysqli_connect_error());
}
?>
