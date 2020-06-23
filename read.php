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
   <h2 align="center">Read RSS Feed in PHP</h2>
   <br />

   <button type="button" class="btn btn-danger" onclick="location.href = 'write.php';"> Add to MongoDB</button>

  <div class="container">
    <div class="row">
    
    <?php
    
    foreach($content as $c)
    {
    // echo '<br>';
     echo '<div class="card" style="width: 400px;"> ';
     echo '<div class="card-body">';
     echo  '<h5 class="card-title" style="font-size: 36px;">' . $c->getElementsByTagName("title")->item(0)->nodeValue . '</h5>';
     echo  '<p class="card-text"> ' . $c->getElementsByTagName("description")->item(0)->nodeValue . ' </p> ';
     echo   '<p class="card-text"> ' . $c->getElementsByTagName("pubDate")->item(0)->nodeValue . ' </p> ';
     echo   '<a href="' . $c->getElementsByTagName("source")->item(0)->nodeValue . ' " class="btn btn-info">source</a>';
     echo        '</div>
     </div>';
     
    }
 
    ?>
   
    
    
    </div>
  </div>

  </div>
 </body>
</html>
