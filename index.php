<!DOCTYPE html>
<html>
 <head>
  <title>Web Application </title>
  
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
        
        
        

 </head>
 <body>

  
  <div align="center" class="container">
   <br />
   <h1 ><b>Web Application </b></h1>
   
   <br />
 
  
  
     
   
  </div>
   <!-------------NavBar---------------------->

   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse" id="navbarNav" >
    <ul class="navbar-nav" >
      <li class="nav-item " style="margin-right:50px;margin-left:160px;" >
        <a class="nav-link" ><button type="button" class="btn btn-success" onclick="loaddata()">View RSS from mongoDB </button></a>
      </li>
      <li class="nav-item" style="margin-right:50px;">
        <a class="nav-link"> <button type="button" class="btn btn-success" onclick=" readxml()">View RSS Reader Using PHP</button></a>
      </li>
      <li class="nav-item" style="margin-right:50px;">
        <a class="nav-link" ><button type="button" class="btn btn-success" onclick="loaddata()">View RSS from mongoDB </button></a>
      </li>

      <li class="nav-item" style="margin-right:50px;">
        <a class="nav-link" ><button type="button" class="btn btn-success" onclick=" generatexml()">Generate Updated Xml From Database </button></a>
      </li>
      <li class="nav-item" style="margin-right:50px;">
        <a class="nav-link" ><button type="button" class="btn btn-success" onclick="createdata()">Create New XML </button></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" ><button type="button" class="btn btn-success" onclick="filter()">Filter data </button></a>
      </li>
      
    </ul>
  </div>
  
</nav>
   <!-------------NavBar---------------------->

  <div class="content">
  
  
  </div>
<script>
  
  function createdata(){
        $('.content').load('create.php');
  }

  function loaddata(){
        $('.content').load('fromdb.php');
  }

  function generatexml(){
        $('.content').load('newxml.php');
  }

  function readxml(){
        $('.content').load('read.php');
  }

  function filter(){
        $('.content').load('filter.php');
  }

</script>

 </body>
</html>
