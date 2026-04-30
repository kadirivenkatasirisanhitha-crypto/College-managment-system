<?php
if(isset($_POST["update"]))
{
$rollno=$_POST["rollno"];
$name=$_POST["name"];
$year=$_POST["year"];
$branch=$_POST["branch"];
$fname=$_POST["fname"];
$mname=$_POST["mname"];
$mpersonal=$_POST["mpersonal"];
$mparent=$_POST["mparent"];
$address=$_POST["address"];
$stay=$_POST["stay"];
$busno=$_POST["busno"];
$hostName="localhost";
$userName="root";
$password="";
$databaseName="result";
$con=mysqli_connect($hostName,$userName,$password,$databaseName);
if($con->connect_error){
die("connection failed:".$con->connect_error);
}
$query="UPDATE addstudent SET
name='$name',year='$year',branch='$branch',fname='$fname',mname='$mname',mpersonal='$
33
mpersonal',mparent='$mparent',address='$address',stay='$stay',busno='$busno' WHERE
rollno='$rollno'";
$result1=mysqli_query($con,$query);
if($result1){
echo "<script> alert('UPDATED SUCCESSFULLY')</script>";
}
else{
echo "<script> alert('UNSUCCESSFULL')</script>";
}
}
if(isset($_POST['back'])){
header("location:activities.php");
}
?>
<html>
<head><title>update student</title>
<style type="text/css">
#he1{
color:rgb(242, 13, 128);
font-family:'times new roman';
font-size:45px;
font-weight: bold;
text-decoration:underline;
}
h2{
color:rgb(31, 3, 58);
font-family:'times new roman';
font-size:30px;
font-weight: bold;
text-indent:10px;
}
body{
background-attachment:fixed;
background-color:rgb(134, 88, 20);
}
table{
color: black;
width: 10px;
}
</style>
</head>
<body background="add4.jpg">
<h1 id="he1"><center>UPDATE STUDENT..</center></h1>
<center>
<table border="1">
<tr>
<td>
<pre>
<form action="updatestd.php" method="post">
<h2>Rollno :<input type="text" name="rollno"></h2>
<h2>s_Name:<input type="text" name="name"></h2>
<h2>s_Year :<input type="text" name="year"></h2>
<h2>Branch :<input type="text" name="branch"></h2>
<h2>Father's name:<input type="text" name="fname"></h2>
<h2>Mother's name:<input type="text" name="mname"></h2>
<h2>Mobile-no(personal):<input type="text" name="mpersonal" ></h2>
<h2>Mobile-no(parent):<input type="text" name="mparent"></h2>
<h2>s_Address :<input type="text" name="address"></h2>
<h2>Dayscholar/Hostel:<input type="text" name="stay"></h2>
<h2>bus no:<input type="text" name="busno"></h2>
<center><button type="submit" name="update">UPDATE</button></center>
<center><button type="back" name="back">BACK</button></center>
</td>
</tr>
</table>
</center>
</form>
</pre>
</body>
</html>