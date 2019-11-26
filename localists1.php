<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="localists.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <title>localists</title>


</head>

<body>
  <div class="header">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspMY LOCALITY
    <span><button><a href="tutlogin.php">log out</a></button></span>
  </div>
<div class="head">
    <p>LOCALISTS</p>
</div>
<div class="pic" >
  <img style="width:500px;height:700px;float:right;" src="pics\undraw_team_chat_y27k.svg">
</div>
<div class="container" method="post" action="localists.php">
              
<table class="table table-hover" >
      
<?php include("localists.php");?>
        
</table>
</div>

</body>
</html>


