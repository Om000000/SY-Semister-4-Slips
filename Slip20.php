
<?php
$xml=simplexml_load_file('Slip20.xml');
$player_name=$_GET['q'];
foreach($xml->player as $element)
{
if($element->name==$player_name)
{
echo"Player name:".$element->name."<br>";
echo"Player runs:".$element->runs."<br>";
echo"Player wickets:".$element->wicket."<br>";
echo"Player country:".$element->country."<br>";
exit();

}

}
echo"Player not found";
?>
