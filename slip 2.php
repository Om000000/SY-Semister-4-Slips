<?php 



$xml= new SimpleXMLElement('<xml/>'); //initialization


$breakfast=$xml->addChild('breakfast');                      //All tags
$food=$breakfast->addChild("food");
$name=$food->addChild("name","French-Fries");
$price=$food->addChild("price","45Rs/-");
$description=$food->addChild("description","Young youths are very much intrested to eat it ");
$caleries=$food->addChild("caleries","450");

if($xml->asXML('breakfast.xml'))   //Saving
{
echo"XML saved successfully";

}






?>