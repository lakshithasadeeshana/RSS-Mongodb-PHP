<?php

session_start();
require 'vendor/autoload.php'; 



    $collection = (new MongoDB\Client)->xmlproject->nasa;

             





if (isset($_GET['id'])) {
    $document = $collection->findOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id'])]);

   // echo($document->title);
}


if(isset($_POST['submit'])){


   $collection->updateOne(
       ['_id' => new MongoDB\BSON\ObjectID($_GET['id'])
    
    ],
       ['$set' => [  'title' => $_POST['title'],'description' => $_POST['description'],'pubDate' => $_POST['pubDate']]]
       
      
   );


   $_SESSION['success'] = "RSS updated successfully";
   header("Location: fromdb.php");
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
   <h1>Edit RSS</h1>
   <a href="index.php" class="btn btn-primary">Back</a>
     <br><br>

   <form method="POST">
      <div class="form-group">
         <strong>Title:</strong>
         <input type="text" name="title" value="<?php echo $document->title; ?>" required="" class="form-control" placeholder="Title">
      </div>
      <div class="form-group">
         <strong>Description:</strong>
         <input type="text" name="description" value="<?php echo $document->description; ?>" required="" class="form-control" placeholder="Description">
      </div>
      <div class="form-group">
         <strong>Publish Date:</strong>
         <input type="text" name="pubDate" value="<?php echo $document->pubDate; ?>" required="" class="form-control" placeholder="Date">
      </div>
  
         <button type="submit" name="submit" class="btn btn-success">Submit</button>
      </div>
   </form>
</div>


</body>
</html>