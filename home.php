<?php
include("fetch.php");
?>
<html>
<head><title>homepage</title>
<style type="text/css">
div{
background-color: rgb(254, 252, 252);
width: 420px;
border-style:outset;
border-radius: 10px;
margin-top: 80px;
opacity: 0.85;
}
.con{
font-size: 20px;

}
input[type=text] {
width: 98%;
padding: 12px 20px;
margin: 8px 0;
display: inline-block;
border: 1px solid #5a5757;
box-sizing:1px;
border-radius: 10px;}
h1{
text-align: left;
margin-left: 10px;
}
input[type=submit]{
background-color: #04AA6D;
color: white;
padding: 14px 20px;
margin: 8px 0;
border: none;
cursor: pointer;
width: 98%;
border-radius: 10px;
}
#he2{
color:rgb(248, 247, 250);
font-family:'times new roman';
font-size:25px;
font-weight: bold;
text-indent:10px;
opacity: 1;
word-spacing: 80px;
margin-left:0;
}

h3{
font-size: 28px;
}
body{
background-image: url("csebuilding11.png");
}
img{
margin-left: 100px;
}
</style>
<body>
<script>
function validateform()
{
var rollno=document.myform.rollno.value;
var mobilenumber=document.myform.mobilenumber.value;
if (rollno==null || rollno=="")
{
alert("roll no can't be blank");
return false;
}
else if (mobilenumber==null || mobilenumber=="")
{
alert("mobile number can't be blank");
return false;
}
else if(rollno.length<10)
{
alert("roll no should be 10 digits long");
return false;
}

else if(mobilenumber.length<10)
{
alert("mobile number should be 10 digits long");
return false;
}
}
</script>
<form name="my form" method="post" action="result.php" on submit="return validate
form()">
<img src="nbkrist.png" align="left" height=100 width=100 5px>
<h1 id="he1"><center>N.B.K.R INSTITUTE OF SCIENCE AND
TECHNOLOGY<br>(Autonomous)</center></h1><center><h5> Affiliated to JNTUA,
Anathapuramu, NAAC Accreditation with 'A' Grade, Accredited by NBA,"A"Grade
Engineering College Recognized by AP Govt</h5></center>
<center>
<h2 id="he2"><a href="home.php"><font color="#ffffff"><img src="homegif.png"
height=40 width=40>HOME</font></a>
<a href="about.html"><font color="#ffffff"><img src="aboutgif1.png" height=25
width=25>ABOUT</font></a>
<a href="login page.php"><font color="#ffffff"><img src="admingif1.png"
height=40 width=40>ADMINLOGIN</font></a>
<a href="contact.html"><font color="#ffffff"><img src="contactgif.png" height=40
width=40>CONTACTUS</font></a></h2>
</center>
<center>
<div>
<center><h3 >GET RESULTS</h3></center>
<center>
<h1 class="con"> ROLL NO:<br><input type="text" name="rollno"
placeholder="Enter roll number"><br>
PH.NO:<br><input type="text" name="mobile number" placeholder="Enter your
mobile number"> <br>
</center>
<center> <input type="submit" name='submit' value="SUBMIT"></center>

</center>
</div>
</form>
<form>
<button onclick="window.print()">Print this page</button>
</form>
</body>
</html>