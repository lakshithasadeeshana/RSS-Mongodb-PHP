<!DOCTYPE html>
<html>
 <head>
  <title>Web Application </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 </head>
 <body>
  <div align="center" class="container">
  <br />
   <h1 >Filter Data </h1>
<!-- <form action="filterHandle.php" method="post"> -->
  <div class="form-group">
    <label for="#">Input Title</label>
    <input type="text" class="form-control" id="title" name="title"  placeholder="Enter Title">
  </div>
  
  <button  class="btn btn-primary" onclick="getData()">Submit</button>
<!-- </form> -->
<div id="output">
        </div>
   
</div>
   
   </div>
   <script>
      function getData() {
        var data = document.getElementById('title').value;
            // alert(data);
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("output").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "filterhandle.php?t="+ data, true);
            xhttp.send();
        }
  </script>
  </body>
 </html>