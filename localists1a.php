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

  <title>localists-admin</title>
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
    <p>LOCALISTS</p>
</div>

<div class="pic" >
  <img style="width:500px;height:700px;float:right;" src="pics\undraw_team_chat_y27k.svg">
</div>
<div class="container">
              
<table class="table table-hover" >   
<?php include("localistsa.php");?> 
  </table>
</div>


<form class="form" method="post" action="localists2a.php">
<div class="post">
  <h1>Add a Localist</h1>
</div>
<div class="row">
    <div class="col-lg-8"><label>USER ID</label></div>
</div>

<div class="row part">
        <div class="col-lg-8">
            <input type="text" name="userid"  placeholder="Enter User ID" class="filler">
        </div>
        
</div>
<div class="row">
    <div class="col-lg-8"><label>LOCALIST NAME</label></div>
</div>

<div class="row part">
        <div class="col-lg-8">
            <input type="text" name="name"  placeholder="Enter Localist Name" class="filler">
        </div>
        
</div>

<div class="row">
    <div class="col-lg-8"><label>EMAIL-ADDRESS</label></div>
</div>

<div class="row part">
        <div class="col-lg-8">
            <input type="text" name="email"  placeholder="Enter Email Address" class="filler">
        </div>
        
</div>
<div class="row">
    <div class="col-lg-8"><label>CONTACT NO</label></div>
</div>

<div class="row part">
    <div class="col-lg-8">
        <input type="text" name="contactno" placeholder="Enter contact no No" class="filler">
    </div>
</div>   
<div class="row">
     <div class="col-lg-8"><label>DESIGNATION</label></div>
</div>
  
<div class="row part2">
    <div class="col-lg-8">
        <input type="text" name="designation"  placeholder="Enter designation" class="filler" >
    </div>
</div>     

<div class="row">
     <div class="col-lg-8"><label>GENDER</label></div>
</div>
  
<div class="row part2">
    <div class="col-lg-8">
        <input type="text" name="gender" placeholder="enter gender" class="filler" >
    </div>
</div> 
                           
  </div>  
  <div class="row">
    <div class="col-lg-8"><label>RESIDENT/LOCAL-SERVICER</label></div>
</div>

<div class="row part">
    <div class="col-lg-8">
        <input type="text" name="optloc" placeholder="resident/local-servicer/both" class="filler">
    </div>
</div> 

<div class="row">
    <div class="col-lg-8"><label>CREATE A PASSWORD</label></div>
</div>

<div class="row part">
    <div class="col-lg-8">
        <input type="password" name="password"  placeholder="Enter password"  class="filler">
    </div>
</div> 

<input type = "submit" value = "ADD" >
</form>



<form class="form" method="post" action="localists2au.php">
<div class="post">
  <h1 style="margin-top:-5px;margin-left:-50px;">Update a LOCALIST</h1>
</div>

<div class="row">
    <div class="col-lg-8"><label>USER ID</label></div>
</div>

<div class="row part">
        <div class="col-lg-8">
            <input type="text" name="userid"  placeholder="Enter  User ID" class="filler">
        </div>
        
</div>
<div class="row">
    <div class="col-lg-8"><label>LOCALIST NAME</label></div>
</div>

<div class="row part">
        <div class="col-lg-8">
            <input type="text" name="name"  placeholder="Enter Localist Name" class="filler">
        </div>
        
</div>

<div class="row">
    <div class="col-lg-8"><label>EMAIL-ADDRESS</label></div>
</div>

<div class="row part">
        <div class="col-lg-8">
            <input type="text" name="email"  placeholder="Enter email address" class="filler">
        </div>
        
</div>

<div class="row">
    <div class="col-lg-8"><label>CONTACT NO</label></div>
</div>

<div class="row part">
    <div class="col-lg-8">
        <input type="text" name="contactno"  placeholder="Enter Contact No" class="filler">
    </div>
</div>   
<div class="row">
     <div class="col-lg-8"><label>DESIGNATION</label></div>
</div>
  
<div class="row part2">
    <div class="col-lg-8">
        <input type="text" name="designation"  placeholder="Enter designation" class="filler" >
    </div>
</div>     

<div class="row">
     <div class="col-lg-8"><label>GENDER</label></div>
</div>
  
<div class="row part2">
    <div class="col-lg-8">
        <input type="text" name="gender"  placeholder="enter gender" class="filler" >
    </div>
</div> 
                           
  </div>  
  <div class="row">
    <div class="col-lg-8"><label>RESIDENT/LOCAL-SERVICER</label></div>
</div>

<div class="row part">
    <div class="col-lg-8">
        <input type="text" name="optloc"  placeholder="Resident/local-servicer/both" class="filler">
    </div>
</div> 

<div class="row">
    <div class="col-lg-8"><label>UPDATE PASSWORD</label></div>
</div>

<div class="row part">
    <div class="col-lg-8">
        <input type="password" name="password"  placeholder="Enter password" class="filler">
    </div>
</div> 
<input type = "submit" value = "UPDATE" >
</form>


<form class="form" method="post" action="localists2ad.php">
<div class="post">
  <h1 style="margin-top:-550px;">Delete  a LOCALIST</h1>
</div>
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


