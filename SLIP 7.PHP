<HTML>
<HEAD>
<TITLE>AJAX WITH PHP TRIP </TITLE>
<SCRIPT>
function checktrip()
{
var xhr= new XMLHttpRequest();
var city=document.getElementById('city').value;
xhr.onreadystatechange = function()
{

if(this.status==200 && this.readyState==4)
{

document.getElementById('details').innerHTML=this.responseText;
const url=city;
}



}
xhr.open("GET","SLIP 7.php?q="+encodeURIComponent(city),true)
xhr.send();
}

</SCRIPT>   
<body>
<label>Enter CIty name you want to roam </label>
<input type="text" name="city" id="city" onkeyup="checktrip()"> <br>
<input type="submit" name="submit" value="search"">;
<span id="details"> </span>

<?php
if(isset($_GET['q'])&& $_GET['q']!='')
    {
$city=$_GET['q'];
$con=mysqli_connect("localhost","root","","slips");
if($city!='')
{

$query="select * from trip where tname='$city'"; 

$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)>0)
{
while($item = mysqli_fetch_object($result))
    {
echo"trip no:".$item->tno;
echo"<br>";

echo"trip name:".$item->tname;
echo"<br>";


echo"trip source:".$item->Source;
echo"<br>";


echo"trip destination:".$item->Destination;
echo"<br>";


echo"trip cost:".$item->cost;
echo"<br>";
}
}
else
     {
echo"No trips found";


    }
}



mysqli_close($con);
}


    
?>
</body>
</HTML>