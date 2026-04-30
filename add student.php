<?php
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$rollno=$_POST['rollno'];
$year=$_POST['year'];
$branch=$_POST['branch'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$mpersonal=$_POST['mpersonal'];
$mparent=$_POST['mparent'];
$address=$_POST['address'];
$stay=$_POST['stay'];
$busno=$_POST['busno'];
$hostName="localhost";
$userName="root";
$password="";
$databaseName="result";
$con=mysqli_connect($hostName,$userName,$password,$databaseName);
if($con->connect_error){
die("connection failed:".$con->connect_error);
}
$sql1="SELECT * FROM addstudent WHERE name='$name'";
$result1=mysqli_query($con,$sql1);
if($result1){
$num=mysqli_num_rows($result1);
if($num>0){
echo "<script> alert('USER ALREADY EXIST')</script>" ;
$user=1;
}
else{

$query="INSERT INTO addstudent
VALUES('$name','$rollno','$year','$branch','$fname','$mname','$mpersonal','$mparent','$addres
s','$stay','$busno')";
$result=mysqli_query($con,$query);
if($result){
echo "<script> alert('INSERTED SUCCESSFULLY')</script>";
}
else{
echo "<script> alert('ERROR')</script>";
}
}
}
}
if(isset($_POST['back'])){
header("location:activities.php");
}
?>
<html>
<head><title>add student</title>
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
}
table{
color: black;
width: 10px;
}
</style>
</head>
<body background="add4.jpg">
<h1 id="he1"><center>ADD STUDENT..</center></h1>
<center>
<table border="1">
<tr>
<td>
<pre>
<form action="addStudent.php" method="post">
<h2>Name :<input type="text" name="name"></h2>
<h2>Rollno :<input type="text" name="rollno"></h2>
<h2>Year :<input type="text" name="year"></h2>
<h2>Branch :<input type="text" name="branch"></h2>
<h2>Father's name:<input type="text" name="fname"></h2>
<h2>Mother's name:<input type="text" name="mname"></h2>
<h2>Mobile-no(personal):<input type="text" name="mpersonal"></h2>
<h2>Mobile-no(parent):<input type="text" name="mparent"></h2>
<h2>Address :<input type="text" name="address"></h2>
<h2>Dayscholar/Hostel:<input type="text" name="stay"></h2>
<h2>bus no:<input type="text" name="busno"></h2>
<center><button type="submit" name="submit">SUBMIT</button></center>
<center><button type="back" name="back">BACK<button></center>
</pre>
</td>

</tr>
</table>
</center>
</body>
</html>
