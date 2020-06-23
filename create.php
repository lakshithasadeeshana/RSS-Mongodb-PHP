<?php

session_start();
require 'vendor/autoload.php'; 



    //$collection = (new MongoDB\Client)->xmlproject->nasa;


    $client = new MongoDB\Client("mongodb://localhost:27017");
    $collection = $client->xmlproject->nasa;
             





    if(isset($_POST['submit'])){

      $title =$_POST['title'];

       //echo $title;
       
      $insertOneResult->$collection->insertOne([

            'title' => $title,
            'description' => $_POST['description'],
            'pubDate' => $_POST['pubDate'],
           'source' => $_POST['source']
        ]);
     
     //$collection->save($create);

        $_SESSION['success'] = "XML created successfully";
        header("Location: index.php");
     }

?>


<!DOCTYPE html>
<html>
<head>
   <title>Edit</title>
   <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body>


<div class="container">
   <h1>CREATE NEW XML</h1>
   


   <form method="POST">
      <div class="form-group">
         <strong>Title:</strong>
         <input type="text" name="title" required="" class="form-control" placeholder="Title">
      </div>
      <div class="form-group">
         <strong>Description:</strong>
         <textarea class="form-control" name="description" placeholder="Description" placeholder="Description"></textarea>
      </div>

      <div class="form-group">
         <strong>Date:</strong>
         <input type="text" name="pubDate" required="" class="form-control" placeholder="Date">
      </div>
      
      <div class="form-group">
         <strong>Link:</strong>
         <input type="text" name="source" required="" class="form-control" placeholder="URL">
      </div>
      <div class="form-group">
         <button type="submit" name="submit" class="btn btn-success">Submit</button>
      </div>
   </form>
  
</div>


</body>
</html>