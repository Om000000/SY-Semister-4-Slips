<html>
<head><title>Book Search</title></head>
<body>
<form method="GET" action="">
    Enter Player name: <input type="text" name="player_name"><br>
    <input type="submit" name="submit" value="Search">
</form>

<?php
if(isset($_GET["submit"]))
{

$player_name=$_GET['player_name'];

$xml=simplexml_load_file('slip 15.xml');

foreach($xml->player as $element)
    {
        if($element->name==$player_name)
            {
echo"Player name: ".$element->name."<br>";
echo"Player runs: ".$element->runs."<br>";
echo"Player wicket: ".$element->wickets."<br>";
            }

    }

}

else
    {

echo"Error in loading xml";
    
    }
?>
</body>
</html>
