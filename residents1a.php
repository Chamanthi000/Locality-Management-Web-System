<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="residents.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <title>residents</title>
  <style>input[type=submit] {
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
    <p>RESIDENTS </p>
</div>
<div class="pic" >
  <img style="width:500px;height:700px;float:right;" src="pics\undraw_urban_design_kpu8.svg">
</div>
<div class="container" method="post" action="residents.php">
              
<table class="table table-hover">
<?php include("residents.php");?>
  </table>
</div>

<div class="post">
  <h1>Want to be a RESIDENT?</h1>
</div>
<form class="form" method="post" action="residents2a.php">

<div class="row">
    <div class="col-lg-8"><label>USER ID</label></div>
</div>

<div class="row part">
        <div class="col-lg-8">
            <input type="text" name="userid"  placeholder="Enter User ID" class="filler">
        </div>
        
</div>
<div class="row">
    <div class="col-lg-8"><label>RESIDENCE</label></div>
</div>

<div class="row part">
        <div class="col-lg-8">
            <input type="text" name="residence"  placeholder="Enter Residence Name" class="filler">
        </div>
        
</div>

<div class="row">
    <div class="col-lg-8"><label>DOOR NO</label></div>
</div>

<div class="row part">
    <div class="col-lg-8">
        <input type="text" name="dno" required placeholder="Enter  Door No" class="filler">
    </div>
</div>   
<div class="row">
     <div class="col-lg-8"><label>RESIDENCE TYPE</label></div>
</div>
  
<div class="row part2">
    <div class="col-lg-8">
        <input type="text" name="type" required placeholder="Enter type of residence" class="filler" >
    </div>
</div>     

<div class="row">
     <div class="col-lg-8"><label>HEAD-OF-THE-FAMILY</label></div>
</div>
  
<div class="row part2">
    <div class="col-lg-8">
        <input type="text" name="head" required placeholder="enter name of the head of the family" class="filler" >
    </div>
</div> 
                           
  </div>  
  <div class="row">
    <div class="col-lg-8"><label>RENT/OWN</label></div>
</div>

<div class="row part">
    <div class="col-lg-8">
        <input type="text" name="ro" required placeholder="Rent/Own" class="filler">
    </div>
</div> 
<input type = "submit" value = "POST" >
</form>
<div class="pic2 ">
  <img src="pics\undraw_energizer_2224.svg">
</div>


<div class="post">
  <h1>Update a RESIDENT</h1>
</div>
<form class="form" method="post" action="residents2au.php">

<div class="row">
    <div class="col-lg-8"><label>USER ID</label></div>
</div>

<div class="row part">
        <div class="col-lg-8">
            <input type="text" name="userid"  placeholder="Enter  User ID" class="filler">
        </div>
        
</div>
<div class="row">
    <div class="col-lg-8"><label>RESIDENCE</label></div>
</div>

<div class="row part">
        <div class="col-lg-8">
            <input type="text" name="residence"  placeholder="Enter  Residence Name" class="filler">
        </div>
        
</div>

<div class="row">
    <div class="col-lg-8"><label>DOOR NO</label></div>
</div>

<div class="row part">
    <div class="col-lg-8">
        <input type="text" name="dno" required placeholder="Enter  Door No" class="filler">
    </div>
</div>   
<div class="row">
     <div class="col-lg-8"><label>RESIDENCE TYPE</label></div>
</div>
  
<div class="row part2">
    <div class="col-lg-8">
        <input type="text" name="type" required placeholder="Enter type of residence" class="filler" >
    </div>
</div>     

<div class="row">
     <div class="col-lg-8"><label>HEAD-OF-THE-FAMILY</label></div>
</div>
  
<div class="row part2">
    <div class="col-lg-8">
        <input type="text" name="head" required placeholder="enter name of the head of the family" class="filler" >
    </div>
</div> 
                           
  </div>  
  <div class="row">
    <div class="col-lg-8"><label>RENT/OWN</label></div>
</div>

<div class="row part">
    <div class="col-lg-8">
        <input type="text" name="ro" required placeholder="Rent/Own" class="filler">
    </div>
</div> 
<input type = "submit" value = "UPDATE" >
</form>
<div class="pic2 ">
  <img src="pics\undraw_fresh_notification_bvtv.svg">
</div>


<div class="post">
  <h1>Delete  a RESIDENT</h1>
</div>
<form class="form" method="post" action="residents2ad.php">

<div class="row">
    <div class="col-lg-8"><label>USER ID</label></div>
</div>

<div class="row part">
        <div class="col-lg-8">
            <input type="text" name="userid"  placeholder="Enter  User ID" class="filler">
        </div>
        
</div>


<input type = "submit" value = "DELETE" >
</form>
</body>
</html>


