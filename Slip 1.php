<html>
<head>
</head>
<body>
<form action="" method="POST">
<input type="text" name="num1"><br>
<label>Check Palindrome number</label><input type="radio" name="opr" value="checkpal"><br>
<label>Reverse number</label><input type="radio" name="opr" value="revnum"><br>


<input type="submit" value="check number" name="submit"><br>
</form>


<?php
$num=$_POST['num1'];
$opr=$_POST['opr'];
$rev;


function reverse($num,$rev)
{
if($num<10)
{
echo $num;
return;
}

echo $num%10;
reverse($num/10,$rev);

}

function palindrome($num,$rev)
{
$rev=strrev($num);
if($rev===$num)
{
echo"The number is palindrome";
}
else{
echo"The number is not palindrome";
}

}

if($opr=='checkpal')
{
palindrome($num,$rev);
}

if($opr=='revnum')
{
reverse($num,$rev);
}
?>

</body>
</html>