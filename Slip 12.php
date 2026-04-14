<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slip 12</title>
<script>
    function checkusername()
    {
    var xhr= new XMLHttpRequest();
    var username=document.getElementById('username').value;
     
    xhr.onreadystatechange = function()
    {
   
    

    if(this.status==200 && this.readyState==4)
    {
        document.getElementById('suggestions').innerHTML=this.responseText;
        
    }
    
    };
    
    
    
    console.log("THe username is"+username);
   xhr.open("GET","Slip 12.php?q="+username,true);
   xhr.send();
}
    
</script>
</head>
<body>
<label>Enter username</label>
<textarea id="username" onkeyup="checkusername(this.value)"></textarea><br>
<span id=suggestions></span>


    
<?php
if(isset($_GET['q']))
{
$username=$_GET['q'];

    if(empty($username))
        {
            echo"Please Enter a username";
            exit();
        }


if(strlen($username)<3)
    {
        echo"username to short";
        exit();
    }

echo"valid username";
    
    

}




?>
</body>
</html>