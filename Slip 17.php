<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET" action="">
<label>Enter the book name</label>
<input type="text" name="bname"><br>
<input type="submit" name="submit">


</form>
<?php
if(isset($_GET['submit']))
{$xml= simplexml_load_file('slip 13.xml');
$book=$_GET['bname'];
foreach($xml as $element)
    {
if($xml->bookname==$book)
{
echo"<table border='1'>";
echo"<tr>";
echo"<th>bookcode</th>";
echo"<th>bookname</th>";
echo"<th>author</th>";
echo"<th>year</th>";

echo"<th>price</th>";
echo"</tr>";

echo"<tr>";
echo"<td>$xml->bookcode</th>";
echo"<th>$xml->bookname</th>";
echo"<th>$xml->author</th>";
echo"<th>$xml->year</th>";

echo"<th>$xml->price</th>";
echo"</tr>";


}
}
}

?>


</body>
</html>