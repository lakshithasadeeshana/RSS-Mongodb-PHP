

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
   <h2 align="center">Rss Data</h2>
   <br />
   <button type="button" class="btn btn-warning"  onclick="location.href = 'index.php';"> Home</button>
   <br>
  

  <div class="container">
    <div class="row">
    
    <?php
    echo("<br>");


    require 'vendor/autoload.php'; 

    // $client = new MongoDB\Client("mongodb://localhost:27017");
     //$collection = $client->xmlproject->nasa;

    //$result = $collection->find ();
    
   // echo($result);

    $collection = (new MongoDB\Client)->xmlproject->nasa;

              $cursor = $collection->find();

             

      
          // var_dump($restaurant);

           $data  = "<table style='border:1px solid red;";
           $data .= "border-collapse:collapse' border='1px'>";
           $data .= "<thead>";
           $data .= "<tr>";
           $data .= "<th>Title</th>";
           $data .= "<th>description</th>";
           $data .= "<th>pubDate</th>";
           $data .= "<th>Link</th>";
           $data .="<th>Action</th>";
           $data .= "</tr>";
           $data .= "</thead>";
           $data .= "<tbody>";
        
           try{
               
               foreach($cursor as $document){
                   $data .= "<tr>";
                   $data .= "<td>" . $document["title"] . "</td>";
                   $data .= "<td>" . $document["description"]."</td>";
                   $data .= "<td>" . $document["pubDate"]."</td>";
                   $data .= "<td>" . $document["source"]."</td>";
                   $data .= "<td>";
                   $data .= "  '<a href='edit.php?id=".$document->_id."' class='btn btn-primary'>Edit</a>' ";
                    $data .= "</td>" ; 

                   $data .= "</tr>";
               }
               $data .= "</tbody>";
               $data .= "</table>";
               echo $data;
        
           }catch(MongoException $mongoException){
               print $mongoException;
               exit;
           }
    
 
    ?>
   
    
    
    </div>
  </div>

  </div>
 </body>
</html>
      