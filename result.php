<?php
include("fetch.php");
?>
<html>
<head><title>result</title>
<style type="text/css">
#he1{
color:rgb(242, 13, 128);
font-family:'times new roman';
font-size:30px;
font-weight: bold;
}
#h1e{
text-align:right;
margin-top: -90;
margin-right: 50px;
}
#h1f{
text-align:left;

margin-left: 50px;
}
div{
background: linear-gradient(to bottom, #ccff99 0%, #ffccff 100%);
width: 900px;
border-style:outset;
border-radius: 10px;
margin-top: 80px;
opacity: 0.85;
margin-top: 25;
height: 750px;
margin-left: 300px;
}
#r1 {
width: 800px;
height: 40px;
margin-left:50px;
background-color: #ffffff;
}
h5{font-size: 15px;
}

#he2{
color:#92497d;
font-family:'times new roman';
font-size:30px;
font-weight: bold;}
#r2{
width: 800px;
margin-left:50px;
background-color: #ffffff;
}
td{
width:100px;
height:50px;
text-align:center;
}
th{
width:100px;
height:50px;
}
</style>
<body>
<div>

<img src="11.jpg" align="left" height=150 width=150 5px>
<img src="10.png" align="right" height=150 width=150 5px>
<h1 id="he2"><center>N.B.K.R INSTITUTE OF SCIENCE AND
TECHNOLOGY<br>(Autonomous)</center></h1>
<center><h5> Affiliated to JNTUA,Anathapuramu, NAAC Accreditation with 'A' Grade,
<br>Accredited by NBA,"A"Grade Engineering College Recognized by AP
Govt</h5></center>
<form action="result.php" method="post">
<?php
// LOOP TILL END OF DATA
while($rows=$result1->fetch_assoc())
{
?>
<table border="1" id="r1">
<tr>
<th rowspan="4">Name:</th>
<th> <?php echo $rows['name'];?></th>
<th>Reg.Number:</th>
<th><?php echo $rows['rollno'] ?></th>
</tr>
</table>
<table border="1" id="r1" align="left">
<tr>

<th rowspan="4">Branch:</th>
<th><?php echo $rows['branch'] ?> </th>
</tr>
<?php
}
?>
</form>
</table>
<form action="result.php" method="get">
<table border="1" id="r2">
<?php
// LOOP TILL END OF DATA
while($rows=$result2->fetch_assoc())
{
?>
<tr>
<th>si.no</th>
<th>Subject code</th>
<th>Subject title</th>
<th>Marks</th>
<th>Grade</th>
<th>credits</th>

<th>Results</th>
</tr>
<tr>
<td><font color="#000000">1.</font></td>
<td><font color="#000000">20***</font></td>
<td><font color="#000000">Subject 1</font></td>
<td><?php echo $rows['CE'];?></td>
<td><?php grade($rows['CE']);?></td>
<td><?php credits($rows['CE']);?></td>
<td><?php results($rows['CE']);?></td>
</tr>
<tr>
<td><font color="#000000">2.</font></td>
<td><font color="#000000">20***</font></td>
<td><font color="#000000">Subject 2</font></td>
<td><?php echo $rows['AP'];?></td>
<td><?php grade($rows['AP']);?></td>
<td><?php credits($rows['AP']);?></td>
<td><?php results($rows['AP']);?></td>
</tr>
<tr>

<td><font color="#000000">3.</font></td>
<td><font color="#000000">20***</font></td>
<td><font color="#000000">Subject 3</font></td>
<td><?php echo $rows['BEE'];?></td>
<td><?php grade($rows['BEE']);?></td>
<td><?php credits($rows['BEE']);?></td>
<td><?php results($rows['BEE']);?></td>
</tr>
<tr>
<td><font color="#000000">4.</font></td>
<td><font color="#000000">20***</font></td>
<td><font color="#000000">Subject 4</font></td>
<td><?php echo $rows['EM1'];?></td>
<td><?php grade($rows['EM1']);?></td>
<td><?php credits($rows['EM1']);?></td>
<td><?php results($rows['EM1']);?></td>
</tr>
<tr>
<td><font color="#000000">6.</font></td>
<td><font color="#000000">20***</font></td>

<td><font color="#000000">Subject 5</font></td>
<td><?php echo $rows['PPS'];?></td>
<td><?php grade($rows['PPS'])?></td>
<td><?php credits($rows['PPS']);?></td>
<td><?php results($rows['PPS']);?></td>
</tr>
</table>
<from>
<pre> <center><b>CGPA:</b><input type="text" value="<?php
cgpa($rows['CE'],$rows['AP'],$rows['BEE'],$rows['EM1'],$rows['PPS']) ;?>" >
</input></center> </pre>
</form>
<?php
}?>
</div>
</body>
</head>
</html>
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
if(isset($_POST['submit']))
{
$rollno=$_POST['rollno'];
$mobileno=$_POST['mobilenumber'];
$query1="SELECT * FROM addstudent WHERE rollno='$rollno' ";
$result1=mysqli_query($con,$query1);
$query2="SELECT * FROM 11aids_sem WHERE ID='$rollno'";
$result2=mysqli_query($con,$query2);
function credits($marks){
if($marks>40){
echo "3";
}
else{
echo "0";
}
}

function grade($marks){
if($marks>=90){
echo "10";
}
elseif($marks>=80 && $marks<90){
echo"9";
}
elseif($marks>=70 && $marks<80){
echo"8";
}
elseif($marks>=60 && $marks<70){
echo"7";
}
elseif($marks>=50 && $marks<60){
echo"6";
}
elseif($marks>=40 && $marks<50){
echo"5";
}
else{
echo "0";
}

}
function results($marks){
if($marks>40){
echo "PASS";
}
else{
echo "FAIL";
}
}
function cgpa($s1,$s2,$s3,$s4,$s5){
$sum=$s1+$s2+$s3+$s4+$s5 ;
$percentage=($sum/500)*100;
$gpa=$percentage/10;
echo $gpa;
}
}
?>