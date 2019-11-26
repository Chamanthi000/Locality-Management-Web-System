<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="mini.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <title>events-admin</title>
  <style>
input[type=submit] {
  width: 200px;
  
  padding: 12px 60px;
  margin-top: 10px;
  margin-left:15px;
  margin-bottom:50px;
  height:50px;
  border-radius:5px;
  box-shadow:2px 2px 2px 0px  lightgray;
  box-sizing: border-box;
  border: 1px solid mediumturquoise;
  background-color:mediumturquoise;
  color: white;
}
input[type=submit]:hover {
    background-color:lightgrey;
    color:darkgrey;
    border:none;
}</style>

</head>

<body>
  <div class="header">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspMY LOCALITY-ADMIN
    <span><button><a href="tutlogin.php">log out</a></button></span>
  </div>
<div class="head">
    <p>EVENTS</p>
</div>
<div class="pic">
  <img src="pics/firstpg (1).svg">
</div>
<div class="container">
              
  <table class="table table-hover">
    <tbody>
      <?php include('events1.php'); ?>
    </tbody>
  </table>
</div>

<div class="post">
  <h1>Post an Event</h1>
</div>
<form class="form" method="post" action="events2a.php">

<div class="row">
    <div class="col-lg-8"><label>USER ID</label></div>
</div>

<div class="row part">
        <div class="col-lg-8">
            <input type="text" name="userid"  placeholder="Enter your User ID" class="filler">
        </div>
        
</div>
<div class="row">
    <div class="col-lg-8"><label>EVENT ID</label></div>
</div>

<div class="row part">
        <div class="col-lg-8">
            <input type="text" name="eid"  placeholder="Enter your Event ID" class="filler">
        </div>
        
</div>

<div class="row">
    <div class="col-lg-8"><label>EVENT NAME</label></div>
</div>

<div class="row part">
    <div class="col-lg-8">
        <input type="text" name="ename" required placeholder="Enter your Event name" class="filler">
    </div>
</div>   
<div class="row">
     <div class="col-lg-8"><label>DESCRIPTION</label></div>
</div>
  
<div class="row part2">
    <div class="col-lg-8">
        <input type="text" name="description" required placeholder="Eat.Sleep.Repeat" class="filler3" >
    </div>
</div>               
            <input type = "submit" value = "POST" >
                           
  </div>  
    
</form>
<div class="pic2 ">
  <img src="pics\undraw_diary_99km.svg">
</div>


<div class="post">
  <h1>UPDATE an Event</h1>
</div>
<form class="form" method="post" action="events2au.php">

<div class="row">
    <div class="col-lg-8"><label>USER ID</label></div>
</div>

<div class="row part">
        <div class="col-lg-8">
            <input type="text" name="userid"  placeholder="Enter your User ID" class="filler">
        </div>
        
</div>
<div class="row">
    <div class="col-lg-8"><label>EVENT ID</label></div>
</div>

<div class="row part">
        <div class="col-lg-8">
            <input type="text" name="eid"  placeholder="Enter your Event ID" class="filler">
        </div>
        
</div>

<div class="row">
    <div class="col-lg-8"><label>EVENT NAME</label></div>
</div>

<div class="row part">
    <div class="col-lg-8">
        <input type="text" name="ename" required placeholder="Enter your Event name" class="filler">
    </div>
</div>   
<div class="row">
     <div class="col-lg-8"><label>DESCRIPTION</label></div>
</div>
  
<div class="row part2">
    <div class="col-lg-8">
        <input type="text" name="description" required placeholder="Eat.Sleep.Repeat" class="filler3" >
    </div>
</div>               
            <input type = "submit" value = "UPDATE" >
                           
  </div>  
    
</form>
<div class="pic2 ">
  <img src="pics\undraw_celebrating_bol5.svg">
</div>

<div class="post">
  <h1>DELETE an Event</h1>
</div>
<form class="form" method="post" action="events2ad.php">

<div class="row">
    <div class="col-lg-8"><label>USER ID</label></div>
</div>

<div class="row part">
        <div class="col-lg-8">
            <input type="text" name="userid"  placeholder="Enter your User ID" class="filler">
        </div>
        
</div>
<div class="row">
    <div class="col-lg-8"><label>EVENT ID</label></div>
</div>

<div class="row part">
        <div class="col-lg-8">
            <input type="text" name="eid"  placeholder="Enter your Event ID" class="filler">
        </div>
</div>

<input type = "submit" value = "DELETE" >
</form>
</body>
</html>
