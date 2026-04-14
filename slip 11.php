<html>
<head>
</head>
<body>
    <form method="GET" action="">
    <label>Enter your course: </label>
<input type="text" name="course">
<input type="submit" value="submit" name="submit">

</form>
    <?php
$xml= new SimpleXMLElement('<student/>');

$rollno=$xml->addchild('rollno',10);

$name=$xml->addchild('name','Omkar');

$address=$xml->addchild('address','kuruli');

$college=$xml->addchild('college','HRM');

$course=$xml->addchild('course','BBA');



if($xml->asXML('slip 11.xml'))
    {
        echo"XML Saved successfully";
    }
if(isset($_GET['submit']))
{
$coursee=$_GET['course'];

    if($xml->course==$coursee)
        {
        echo"<table border=1>";
        echo"<tr>";
        echo"<th>Name</th>";
        echo"<th>Rollno</th>";
        echo"<th>Address</th>";
        echo"<th>College</th>";
        echo"<th>Course</th>";
        echo"</tr>";
        echo"<tr>";
        echo"<td>$xml->name</td>";
        echo"<td>$xml->rollno</td>";
        echo"<td>$xml->address</td>";
        echo"<td>$xml->college</td>";
        echo"<td>$xml->course</td>";
        echo"</tr>";
        echo"</table>";
        }

    }

?>



</body>    
</html>