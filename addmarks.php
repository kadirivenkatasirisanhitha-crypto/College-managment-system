<?php
if(isset($_POST['submit']))
{
$ID=$_POST['ID'];
$first=$_POST['CE'];

$second=$_POST['AP'];
$third=$_POST['BEE'];
$fourth=$_POST['EM1'];
$fifth=$_POST['PPS'];
if(empty($ID)||empty($first)||empty($second)||empty($third)||empty($fourth)||empty($fifth)){
echo "<script> alert('No fiels should be empty') </script>";
}
elseif(!preg_match("/^[a-zA-Z0-9]*$/",$ID)){
echo "<script> alert('Invalid ID') </script>";
}
elseif(!preg_match("/^[0-9]$/",$first)||!preg_match("/^[0-
9]$/",$second)||!preg_match("/^[0-9]$/",$third)||!preg_match("/^[0-
9]$/",$fourth)||!preg_match("/^[0-9]*$/",$fifth)){
echo "<script> alert('Invalid Marks') </script>";
}
else
{
$hostName="localhost";
$userName="root";
$password="";
$databaseName="result";
$con=mysqli_connect($hostName,$userName,$password,$databaseName);
if($con->connect_error){
die("connection failed:".$con->connect_error);
}
$query="INSERT INTO 11aids_sem(ID,CE,AP,BEE,EM1,PPS)
VALUES('$ID','$first','$second','$third','$fourth','$fifth')";
$answer=mysqli_query($con,$query);
if($answer){
echo "<script> alert('INSERTED SUCCESSFULLY')</script>";
}

else{
echo "<script> alert('ERROR')</script>";
}
}
}
if(isset($_POST['back'])){
header("location:addlist.php");
}
?>
<html>
<head><title>Semester</title>
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
margin-top:100 ;
color: black;
width: 10px;
}
</style>
</head>
<body background="add4.jpg">
<h1 id="he1"><center>Semester Examination marks</center></h1>
<center>
<form action="#" method="post">
<table border="1" width="800" 5px >
<tr>
<th>Roll Number</th>
<th>communicative engilish</th>
<th>Applied physics</th>
<th>Basic electrical engineering</th>
<th>Engineering mathematics 1</th>
<th>Programming for problem solving</th>
</tr>
<?php
for($i=1;$i<=1;$i++)
{
?>
<tr>
<td>
<input type="text" name="ID">
</td>
<td>
<input type="text" name="CE">
</td>

<td>
<input type="text" name="AP">
</td>
<td>
<input type="text" name="BEE">
</td>
<td>
<input type="text" name="EM1">
</td>
<td>
<input type="text" name="PPS">
</td>
</tr>
<?php
}
?>
</table>
<pre>
<center><input type="submit" name="submit" value="Submit"></center>
<center><button type="back" name="back">BACK</button></center>
</pre>
</center>
</form>
</pre>
</body>
</html>