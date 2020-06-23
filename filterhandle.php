<?php

$title = $_GET["t"];

    require 'vendor/autoload.php'; 

    $collection = (new MongoDB\Client)->xmlproject->nasa;

    $result = $collection->find([
        'title' => $title
    ]);
    foreach($result as $res){
       
        echo '<div class="card" style="width: 400px;"> ';
    echo '<div class="card-body">';
    echo  '<h5 class="card-title" style="font-size: 36px;">' . $res["title"] . '</h5>';
    echo   '<p class="card-text"> ' . $res["description"]  . ' </p> ';
    echo   '<p class="card-text"> ' . $res["pubDate"] . ' </p> ';
    echo   '<a href="' . $res["source"] . ' " class="btn btn-primary">Link</a>';
    echo    '</div>
    </div>';

    }
   

?>