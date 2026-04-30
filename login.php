<html>
<head><title>login</title>
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
background-color: rgb(254, 252, 252);
width: 420px;
border-style:outset;
border-radius: 10px;
margin-top: 80px;
opacity: 0.85;
margin-top: 25;
height: 600px;
}
</style>
</head>
<body background="background22.png" height="1300" width="1300">
<script>
alert("welcome to login page!");
function validation()
{
var username=document.myform.username.value;
var password=document.myform.password.value;
if (username==null || username=="" )
{
alert("Name can't be blank");
return false;
}
else if( password==null || password=="")
{
alert("password can't be blank");

return false;
}
else if(password.length<6)
{
alert("Password must be at least 6 characters long");
return false;
}
else if
{
alert("successfully loggedin");
}
}
else{
alert("Not a valid user");
window.location="login page.php";
}
</script>
<form name="myform" action="authentication1.php" onsubmit = "return validation()"
method="POST">
<h1 id="he1"><center>LOGIN HERE</center></h1>
<center>
<div>
<img src="admingif1.png" align="center" height="200" width="200">
<h2>USERNAME :<br><input type="text" name="username" placeholder="Enter
username"><br>
PASSWORD :<br><input type="password" name="password" placeholder="Enter your
password"></font</h2><br>
<center><h3><a href="forgot password.php">forgot password </a></h3></center>
<center><input type="submit" value="SUBMIT"></center> <br>
<center><input type="submit" value="BACK"></center>
</div>
</center>
</form>
</body>
</html>