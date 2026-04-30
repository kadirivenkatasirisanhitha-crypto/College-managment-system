<?php
$hostName="localhost";
$userName="root";
$password="";
$databaseName="result";
$con=mysqli_connect($hostName,$userName,$password,$databaseName);
if($con->connect_error)
{
die("connection failed:".$con->connect_error);
}
if(isset($_POST["remove"])){
$rollno=$_POST["roll"];
$query="DELETE FROM addstudent WHERE rollno='$rollno'
";$result=mysqli_query($con,$query);
if($result)
{
echo "<script> alert('successful' )</script>";
}
else{
echo"error". $con->error;
}
}
if(isset($_POST['back'])){
header("location:activities.php");
}
?>
<html>

<head><title>remove student</title>
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
<h1 id="he1"><center>REMOVE STUDENT..</center></h1>
<center>
<table border="1">
<tr>
<td>
<pre>
<form action=RemoveStudent.php method="post">
<h2>Rollno :<input type="text" name="roll"></h2>
<center><button name="remove">REMOVE</button></center>
<center><button type="back" name="back">BACK</button></center>
</td>
</tr>
</table>
</center>
</form>
</pre>
</body> </html>