<?php
$xml=simplexml_load_file('breakfast.xml');    //LOADED XML

$juice=[['name'=>'Orange Juice','Price'=>'45/- Rs','caleries'=>'45'],
['name'=>'APPLE Juice','Price'=>'45/- Rs','caleries'=>'65']
];                                                                             //MAKE CHANGES ARRAY
foreach($juice as $items)
    {
        $food= $xml->addChild('food');
    $food->addChild('name',$items['name']);                                              //MAKE CHANGES IN XML 
    $food->addChild('price',$items['Price']);
    $food->addChild('caleries',$items['caleries']);
    $food->addChild('description','Nice and Cold drink');
    }

    $xml->saveXML('breakfast.xml');   //SAVED THE XML
        
      echo"Saved the file";             //GIVE MESSAGE

    




?>