<?php
$xml=SimpleXMLElement("<books/>");
$book=$xml->addchild("book");
$book_name=$book->addchild("book_name","Harrypotter");
$category=$book->addchild("category","fiction");
$price=$book->addchild("price","450");
$publication=$book->addchild("publication","Ram");

$book1=$xml->addchild("book1");
$book_name1=$book1->addchild("book_name","Laravel_Introduction");
$category1=$book1->addchild("category","Educational");
$price1=$book1->addchild("price","450");
$publication1=$book->addchild("publication","Sham");

$book2=$xml->addchild("book2");
$book_name2=$book2->addchild("book_name","Laravel_Introduction");
$category2=$book2->addchild("category","Educational");
$price2=$book2->addchild("price","450");
$publication=$book->addchild("publication","Suhan");

if($xml->asXML("Slip 14.php"))
{
echo"XML saved";

}

?>