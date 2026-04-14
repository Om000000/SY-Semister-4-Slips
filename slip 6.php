<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<script>
function checkusername()
{




var xhr=new XMLHttpRequest();
xhr.onreadystatechange = function()
{
if(this.readyState==4 && this.status==200)
{
document.getElementById('suggestion').innerHTML=this.responseText;
}

}
var str=document.getElementById('username');
var str1=document.getElementById('password');
const url="slip 6.php?q="+encodeURIComponent(str.value)+"&password="+encodeURIComponent(str1.value);
console.log("password sent"+str1.value);
xhr.open("GET",url,true);
xhr.send();

}


</script>
<body>
    
    <label>Enter your username</label>
<input type="text" name="username" placeholder="USERNAME" required id='username' onkeyup=checkusername()><br>
    <label>Enter your password</label>
<input type="text" name="password" placeholder="PASSWORD" required id='password' onkeyup=checkusername()><br>

<span id="suggestion"> </span>


<?php
$pass=0;
$use=0;
 if(isset($_GET['q']) && isset($_GET['password']))
{
$username=$_GET['q'];

$password=$_GET['password'];



$pasforma = "/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d).+$/";

if(!preg_match_all($pasforma,$password) )
{
        echo"<br>password must include numbers and alphabets";
}
else
{
echo"<br>valid password";
$pass=1;
}

if(!preg_match_all($pasforma,$username) )
{
        echo"<br>username must include numbers and alphabets";
}
else
{
echo"<br>valid username";
$use++;
}
if($use==1 && $pass==1)
{
$con=mysqli_connect('localhost','root','','slips');
if(!$con)
{
        die("Error connecting to database");
}


$query="insert into users(username,password) values('$username','$password')";
$query1="Select * from users where username='$username'";
$result=mysqli_query($con,$query1);
if(mysqli_num_rows($result) > 0)
{
echo"Username already taken";
}
else
{
echo"Username available";

if(mysqli_query($con,$query))
{
echo"Login successfull";


}
}
mysqli_close($con);




}
}

?>

</body>
</html>