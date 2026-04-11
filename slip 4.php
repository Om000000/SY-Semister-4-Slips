<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slip 5</title>
    <script>
function showdetails(str)
{
if(str.length==0)
{
document.getElementById("input").innerHTML="";
return;
}
else
{
    var xhr=new XMLHttpRequest();
    xhr.onreadystatechange=function{
    if(this.readyState==4 && this.status==200)
    {
     document.getElementById("input").innerHTML=this.responseText;

    }
    };
    xhr.open("GET","detail.php?q="+str,true);
    xhr.send();
}
}
</script>
</head>
<body>
  <form method="GET" action="">
    <label>Enter name of the student</label>
    <input type="text" name="input" id="input">
    <span id="details">   </span>
    <input type="submit" name="submit" value="search">

</form>  
<?php
if(isset($_POST['submit']))
    {
$con=mysqli_connect('localhost','root','','slips');
if(!$con)
    {
        die("Error connecting database");
    }
else
    {
    $query="Select * from student where name=='$input'";
    $result=mysqli_query($query);
    }
 foreach($result as $item)
    {
    echo"The name of student is: "+item['name'];
    echo"<br>";
    echo"The roll no of student is: "+item['sno'];
    echo"<br>";
    echo"The percent of student is: "+item['per'];
    echo"<br>";
    
    }

}



?>
</body>
</html>