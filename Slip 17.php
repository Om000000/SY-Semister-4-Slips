<html>
<head>
<script>
function checkcity(str)
{


xhr= new XMLHttpRequest()

xhr.onreadystatechange = function()
{
if(this.readyState==4 && this.status==200)
{
document.getElementById('suggestion'). innerHTML=this.responseText;
}

}
xhr.open("GET","Slip17.php?q="+str,true);
xhr.send();

}
</script>
</head>
<body>
<input type="text" name="str" onkeyup="checkcity(this.value)">
<span id="suggestion"> </span>


<?php
$str=$_GET['q'];
if(empty($str))
{

echo"Please enter a city name"
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

?>
</body>
</html>