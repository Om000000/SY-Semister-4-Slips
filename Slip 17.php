<html>
<head>
<script>
function checkcity(str)
{


xhr= new XMLHttpRequest();
document.getElementById('suggestion').innerHTML='';
xhr.onreadystatechange = function()
{
if(this.readyState==4 && this.status==200)
{
document.getElementById('suggestion'). innerHTML=this.responseText;
}

}
console.log("string passed"+str);
xhr.open("GET","Slip 17.php?q="+encodeURIComponent(str),true);
xhr.send();

}
</script>
</head>
<body>
<label>Enter a city name </label>
<input type="text" name="str" onkeyup="checkcity(this.value)"><br>
<span id="suggestion"> </span>


<?php

if(isset($_GET['q']))
{$str=$_GET['q'];


if(strlen($str)<=0)
{

echo"Please enter a city name";
exit();
}


if(strlen($str)>8)
{
echo"Really long city name";
exit();
}
if(strlen($str)<3)
{
echo"really short city name";
exit();
}
echo"valid city name";
}
?>
</body>
</html>