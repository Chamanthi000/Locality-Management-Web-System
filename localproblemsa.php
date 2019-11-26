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

  <title>local problems-admin</title>
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
    <p>LOCAL PROBLEMS</a></p>
</div>
<div class="pic">
  <img src="pics/localprobs.svg">
</div>
<div class="container">
              
  <table class="table table-hover">
    <tbody>
      
      <?php include('localproblems1.php'); ?>
 
    </tbody>
  </table>
</div>

<div class="post">
  <h1>
    Post a Local-Problem</h1>
</div>
<form class="form" method="post" action="localproblems2a.php">

<div class="row">
    <div class="col-lg-8"><label>USER ID</label></div>
</div>

<div class="row part">
        <div class="col-lg-8">
            <input type="text" name="userid"  placeholder="Enter User ID" class="filler">
        </div>
        
</div>

<div class="row">
    <div class="col-lg-8"><label>PROBLEM ID</label></div>
</div>

<div class="row part">
        <div class="col-lg-8">
            <input type="text" name="pid"  placeholder="Enter  Problem ID" class="filler">
        </div>
        
</div>

<div class="row">
    <div class="col-lg-8"><label>PROBLEM NAME</label></div>
</div>

<div class="row part">
    <div class="col-lg-8">
        <input type="text" name="pname" required placeholder="Enter  Problem Name" class="filler">
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
  <img src="pics\undraw_solution_mindset_34bi.svg">
</div>


<div class="post">
  <h1>UPDATE a Local-Problem</h1>
</div>
<form class="form" method="post" action="localproblems2au.php">

<div class="row">
    <div class="col-lg-8"><label>USER ID</label></div>
</div>

<div class="row part">
        <div class="col-lg-8">
            <input type="text" name="userid"  placeholder="Enter  User ID" class="filler">
        </div>
        
</div>
<div class="row">
    <div class="col-lg-8"><label>PROBLEM ID</label></div>
</div>

<div class="row part">
        <div class="col-lg-8">
            <input type="text" name="pid"  placeholder="Enter  Problem ID" class="filler">
        </div>
        
</div>

<div class="row">
    <div class="col-lg-8"><label>PROBLEM NAME</label></div>
</div>

<div class="row part">
    <div class="col-lg-8">
        <input type="text" name="pname" required placeholder="Enter Problem name" class="filler">
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
  <img src="pics\undraw_ideas_flow_cy7b (1).svg">
</div>

<div class="post">
  <h1>DELETE a Local-Problem</h1>
</div>
<form class="form" method="post" action="localproblems2ad.php">

<div class="row">
    <div class="col-lg-8"><label>USER ID</label></div>
</div>

<div class="row part">
        <div class="col-lg-8">
            <input type="text" name="userid"  placeholder="Enter  User ID" class="filler">
        </div>
        
</div>
<div class="row">
    <div class="col-lg-8"><label>PROBLEM ID</label></div>
</div>

<div class="row part">
        <div class="col-lg-8">
            <input type="text" name="pid"  placeholder="Enter Problem ID" class="filler">
        </div>
</div>

<input type = "submit" value = "DELETE" >
</form>



</body>
</html>
