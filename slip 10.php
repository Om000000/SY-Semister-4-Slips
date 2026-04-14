<html>
<head>
<title> </title>

</head>
<body>
<form method="GET" action"">
<label>Enter number 1</label>
<input type="text" name="num1" value="" placeholder="Number 1"><br>
<label>Enter number 2</label>
<input type="text" name="num2" value="" placeholder="Number 2">
<br>
<input type="submit" name="submit" value="calculate">
</form>
<?php

class calculate 
{
public $num1;
public $num2;

public function addition($num1,$num2)
{
$result=$num1+$num2;
echo "The addition is:$result<br>";
}

public function subtract($num1,$num2)
{
$result=$num1-$num2;
echo "The subtraction is:$result<br>";
}

public function multiply($num1,$num2)
{
$result=$num1*$num2;
echo "The multiplication is:$result<br>";
}

public function divide($num1,$num2)
{
$result=$num1/$num2;
echo "The division is:$result<br>";
}
}
if(isset($_GET['submit']))
{

$num1=$_GET['num1'];
$num2=$_GET['num2'];

$obj= new calculate();

$obj->addition($num1,$num2);

$obj->subtract($num1,$num2);

$obj->multiply($num1,$num2);

$obj->divide($num1,$num2);





}
?>
</body>
</html>