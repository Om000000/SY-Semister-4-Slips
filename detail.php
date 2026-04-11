<?php
$con=mysqli_connect('localhost','root','','slips');

if(!$con)
{
    die("Error connecting database");
}

$q = $_GET['q'];

$query="SELECT * FROM student WHERE sname LIKE '%$q%'";
$result=mysqli_query($con,$query);

while($row=mysqli_fetch_assoc($result))
{
    echo"<br>"; echo "Name: ".$row['sname']."<br>";
    echo "Roll No: ".$row['sno']."<br>";
    echo "Percent: ".$row['per']."<br><br>";
}
?>