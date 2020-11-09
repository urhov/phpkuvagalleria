<?php 

// Xml-tiedostoon tallennus
   function saveDataToXml($data, $filename){
    
    saveDataToXml($data){
        var_dump($data)
    };

    $author = $data['author'];
    $xml = simplexml_load_file('data/galleria.xml')

$new_pic = $xml->addChild('picture');
$new_pic->addChild('filename', $filename);
$new_pic->addChild('author', $author);
$new_pic->addChild('date', date());
$new_pic->addChild('time', time());

//tallennus 
$dom = new DOMDocument("1.0");
$dom->preserveWhiteSpace = false;
$dom->formatOutput = true;
$dome->loadXML($xml->asXML());
$dom->save('data/galleria.xml');


}
?>


    
