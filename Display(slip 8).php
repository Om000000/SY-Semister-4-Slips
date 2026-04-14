<?php
if($_POST['submit'])
    {

$name=$_POST['namei'];
$userid=$_POST['userid'];
$address=$_POST['address'];
$email=$_POST['email'];
$mobn=$_POST['mnumber'];

echo"Name: $name <br>";
echo"User ID: $userid <br>";
echo"Address: $address <br>";
echo"Mobile Number: $mobn <br>";
echo"Email: $email <br>";




    }
else{
    echo"Username not found";
}


?>