





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
   <h2 align="center"> <button  type="button" class="btn btn-info"onclick="location.href = 'nasaupdate.xml';">View </button></h2>
   <br />
   
   <br>
  

  <div class="container">
    <div class="row">
    
    <?php
    echo("<br>");


    require 'vendor/autoload.php'; 


    $collection = (new MongoDB\Client)->xmlproject->nasa;

              $cursor = $collection->find();

              

            ////////////////////////////////////////////
            
           



$documentsArray = array();

foreach($cursor as $document){
    array_push($documentsArray, $document);
}
createXMLfile($documentsArray);






function createXMLfile($documentsArray){
  
   $filePath = 'nasaupdate.xml';
   $dom     = new DOMDocument('1.0', 'utf-8'); 
   $root      = $dom->createElement('items'); 

   for($i=0; $i<count($documentsArray); $i++){
     
     $bookId        =  $documentsArray[$i]['_id'];  
     $bookName = htmlspecialchars($documentsArray[$i]['title']);
     $description    =  $documentsArray[$i]['description']; 
     $publishdate     =  $documentsArray[$i]['pubDate']; 


    


     $book = $dom->createElement('item');
     $book->setAttribute('id', $bookId);
     $name     = $dom->createElement('title', $bookName); 
     $book->appendChild($name); 
     
     $des   = $dom->createElement('description', $description); 
     $book->appendChild($des);

     $date    = $dom->createElement('pubDate',$publishdate); 
     $book->appendChild($date ); 

  
 
     $root->appendChild($book);
    
   }
   $dom->appendChild($root); 
   $dom->save($filePath); 
  
 } 

            /////////////////////////////////////

      
          
                
 
    ?>
   
    
    
    </div>
  </div>

  </div>
 </body>
</html>
      