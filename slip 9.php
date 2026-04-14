<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slip 9</title>
</head>
<body>

<form action="" method="GET">
    <label>What is your name</label>
<input type ="text" name="namei" value="<?php echo $_GET['namei']; ?>">
<br> <label>What is your rollno</label>
<input type ="text" name="rollno" value="<?php echo $_GET['rollno']; ?>">
<br> <label>What is your course</label>
<input type ="text" name="course" value="<?php echo $_GET['course'] ?>">

<br><input type ="submit" name="submit" value="submit">

</form>
<?php
if(isset($_GET['submit']))
    {
$name=$_GET['namei'];
$rollno=$_GET['rollno'];

$course=$_GET['course'];

echo"The course is $course <br>";

echo"The name is $name <br>";

echo"The rollno is $rollno <br>";

}

?>





    
</body>
</html>