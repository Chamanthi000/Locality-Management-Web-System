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

  <title>mini services-admin</title>
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
  <div class="header">
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspMY LOCALITY-ADMIN
    <span><button><a href="tutlogin.php">log out</a></button></span>
  </div>
<div class="head">
    <p>MINI SERVICES</p>
</div>
<div class="pic">
  <img src="pics\undraw_elements_cipa.svg">
</div>
<div class="container">
              
  <table class="table table-hover">
    <tbody>
      <?php include('mini1.php'); ?>
    </tbody>
  </table>
</div>

<div class="post">
  <h1>Post a Mini-Service</h1>
</div>
<form class="form" method="post" action="mini2.php">

<div class="row">
    <div class="col-lg-8"><label>USER ID</label></div>
</div>

<div class="row part">
        <div class="col-lg-8">
            <input type="text" name="userid"  placeholder="Enter your User ID" class="filler">
        </div>
        
</div>
<div class="row">
    <div class="col-lg-8"><label>MINI-SERVICE ID</label></div>
</div>

<div class="row part">
        <div class="col-lg-8">
            <input type="text" name="sid"  placeholder="Enter your Mini-Service ID" class="filler">
        </div>
        
</div>

<div class="row">
    <div class="col-lg-8"><label>MINI-SERVICE NAME</label></div>
</div>

<div class="row part">
    <div class="col-lg-8">
        <input type="text" name="sname" required placeholder="Enter your Mini-Service name" class="filler">
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
</form>
<div class="pic2 ">
  <img src="pics\undraw_services_5tv9.svg">
</div>

<div class="post">
  <h1>Update a Mini-Service</h1>
</div>
<form class="form" method="post" action="mini2au.php">

<div class="row">
    <div class="col-lg-8"><label>USER ID</label></div>
</div>

<div class="row part">
        <div class="col-lg-8">
            <input type="text" name="userid"  placeholder="Enter your User ID" class="filler">
        </div>
        
</div>
<div class="row">
    <div class="col-lg-8"><label>MINI-SERVICE ID</label></div>
</div>

<div class="row part">
        <div class="col-lg-8">
            <input type="text" name="sid"  placeholder="Enter your Mini-Service ID" class="filler">
        </div>
        
</div>

<div class="row">
    <div class="col-lg-8"><label>MINI-SERVICE NAME</label></div>
</div>

<div class="row part">
    <div class="col-lg-8">
        <input type="text" name="sname" required placeholder="Enter your Mini-Service name" class="filler">
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
</form>
<div class="pic2 ">
  <img src="pics\undraw_animating_1rgh.svg">
</div>

<div class="post">
  <h1>Delete a Mini-Service</h1>
</div>
<form class="form" method="post" action="mini2ad.php">

<div class="row">
    <div class="col-lg-8"><label>USER ID</label></div>
</div>

<div class="row part">
        <div class="col-lg-8">
            <input type="text" name="userid"  placeholder="Enter your User ID" class="filler">
        </div>
        
</div>
<div class="row">
    <div class="col-lg-8"><label>MINI-SERVICE ID</label></div>
</div>

<div class="row part">
        <div class="col-lg-8">
            <input type="text" name="sid"  placeholder="Enter your Mini-Service ID" class="filler">
        </div>
        
</div>
<input type = "submit" value = "DELETE" >
</form>

</body>
</html>
