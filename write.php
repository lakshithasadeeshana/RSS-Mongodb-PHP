<?php



$feed_url = "http://localhost/XML_Project/nasa.xml";

$object = new DOMDocument();

$object->load($feed_url);

$content = $object->getElementsByTagName("item");


?>

<!DOCTYPE html>
<html>
 <head>
  <title>Read RSS Feed in PHP</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 </head>
 <body>
  <div class="container">
   <br />
   <h2 align="center">Write RSS Feed in PHP</h2>
   <br />

  

  <div class="container">
    <div class="row">
    
    <?php
    
    foreach($content as $c)
    {
    
     require 'vendor/autoload.php';

       $client = new MongoDB\Client("mongodb://localhost:27017");
       $collection = $client->xmlproject->nasa;

      $result = $collection->insertOne( [ 'title' => $c->getElementsByTagName("title")->item(0)->nodeValue,
      'description' => $c->getElementsByTagName("description")->item(0)->nodeValue,
      'pubDate' => $c->getElementsByTagName("pubDate")->item(0)->nodeValue,
      'source' =>$c->getElementsByTagName("source")->item(0)->nodeValue 
      
      ] );
      echo "Inserted with Object ID '{$result->getInsertedId()}'";
     
    }
 
    ?>
   
    
    
    </div>
  </div>

  </div>
 </body>
</html>
