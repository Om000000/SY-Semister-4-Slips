<html>      
<head>      
<script>      
function checkvalidations()      
{      
var xhr= new XMLHttpRequest();      
var name=document.getElementById('name').value;      
var age=document.getElementById('age').value;      
var nationality=document.getElementById('nationality').value;      xhr.onreadystatechange = function()
{
if(xhr.readyState==4 && xhr.status==200)
{

document.getElementById('suggestion').innerHTML=this.responseText;

}
}
xhr.open("GET","Slip19.php?q="+encodeURIComponent(name)+"&age="+encodeURIComponent (age)+"&nationality="+encodeURIComponent(nationality),true)
xhr.send();
}
</script>

</head>      
<body>      
<label>Enter your name</label>      
<input type="text" name="name1" id="name" onkeyup="checkvalidations()"><br>      
<label>Enter your age</label>      
<input type="text" name="age" id="age" onkeyup="checkvalidations()"><br>      <label>Enter your nationality</label>
<input type="text" name="nationality" id="nationality"      
onkeyup="checkvalidations()"><br>
<span id="suggestion"></span>

<?php      
$name=$_GET['q'];      
$age=$_GET['age'];      
$nationality=$_GET['nationality'];      
      
if($nationality!="Indian" && $nationality!="indian" && $nationality!="INDIAN")      
{      
echo"Invalid country";      
exit();    
      
}      
    
if($age<18)      
{      
echo"Minors are not allowed";      
exit();      
}      
    
      
if(strtoupper($name)!=$name)      
{    
echo"Invalid username";      
exit();      
}      
echo"All input fields are valid";    
?>      </body>      
</html>