<?php
if(isset($_POST['submit']))
{
$usrname = $_POST['username'];
$password = $_POST['password'];
$confirm password = $_POST['confirm password'];
$hostname='localhost';
$username='root';
$password='';
$dbname ='result';
$con=mysql_connect($hostname,$username,$password,$dbname);
if(!$con){
die('Could not Connect My Sql:' .mysqli_error());
}
$query1="SELECT * FROM admindb WHERE a username='$usrname'";
$result1=mysqli_query($con,$query1);
if($result1)
{
$num=mysqli_num_rows($result1);
if($num>0){
if($password=$confirm password)
{
$sql="UPDATE admindb SET a_password='$password' where
a_username='$usrname'";
$result2=mysqli_query($con,$sql);
if($result2)
{

echo "<script> alert('password changed')</script>" ;
}
}
}
else{
echo "<script> alert('username doesnot exist')</script>";
}
}
else{
echo "error:";
}
}
?>
<html>
<head><title>forgot password</title>
<style type="text/css">
#he1{
color:rgb(242, 13, 128);
font-family:'times new roman';
font-size:45px;
font-weight: bold;
}
h2{
color:rgb(31, 3, 58);
font-family:'times new roman';
font-size:20px;
text-indent:10px;
opacity: 1;
text-align: left;
}
body{
background-attachment:fixed;
opacity: 1;

height: 900;
}
h3{
font-size:15px;
font-weight: bold;
font-family: 'times new roman';
}
input[type=text] {
width: 96%;
padding: 12px 20px;
margin: 8px 0;
display: inline-block;
border: 1px solid #5a5757;
box-sizing:1px;
border-radius: 10px;
margin-left:10px ;}
input[type=password] {
width: 96%;
padding: 12px 20px;
margin: 8px 0;
display: inline-block;
border: 1px solid #5a5757;
box-sizing:1px;
border-radius: 10px;
margin-left:10px ;}
input[type=submit]{
background:linear-gradient(to top right, #33ccff 0%, #6600ff 100%) ;
color: white;
padding: 14px 20px;
margin: 8px 0;
border: none;
cursor: pointer;
width: 96%;
border-radius: 10px;}
div{

background-color: #ccddff;
width: 420px;
border-style:outset;
border-radius: 10px;
margin-top: 80px;
opacity: 0.85;
margin-top: 25;
height: 620px;
}
</style>
</head>
<body background="background22.png" height="1300" width="1300">
<script>
function validation()
{
var username=document.myform.username.value;
var password=document.myform.password.value;
var confirmpassword=document.myform.confirmpassword.value;
if (username==null || username=="")
{
alert("Name can't be blank");
return false;
}
else if( password==null || password=="")
{
alert("password can't be blank");
return false;
}
else if(confirmpassword==null || confirmpassword=="")
{
alert("confirmpassword can't be blank");
return false;
}
else if(password.length<6)
{

alert("Password must be at least 6 characters long");
return false;
}
else if(confirmpassword.length<6)
{
alert("password must be at least 6 characters long");
return false;
}
else if(password!=confirmpassword)
{
alert("password and confirm password should be same");
return false;
}
}
</script>
<h1 id="he1"><center>FORGOT PASSWORD</center></h1>
<form name="myform" action="forgot password.php" method="post" onsubmit="return
validation()">
<center>
<div>
<img src="forgotgif.png" align="center" height="200" width="200">
<h2>
USERNAME :<br><input type="text" name="username" placeholder="Enter
username"><br>
PASSWORD :<br><input type="password" name="password" placeholder="Enter new
password"><br>
CONFIRM PASSWORD :<br><input type="password" name="confirmpassword"
placeholder="confirm your password"><br>
</h2>
<center><input type="submit" name="submit" value="SUBMIT"></center> <br>
<center><input type="submit" value="BACK"></center>
</div>
</center>
</form>
</body></html>