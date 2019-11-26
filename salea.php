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

  <title>sale-admin</title>
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
    <p>FOR SALE</p>
</div>
<div class="pic">
  <img src="pics\bg2.svg">
</div>
<div class="container">
              
  <table class="table table-hover">
    
    <tbody>
      <?php include'sale1.php' ?>;
    </tbody>
  </table>
</div>

<div class="post">
  <h1>
    Put on Sale</h1>
</div>
  <form class="form" method="post" action="sale2a.php" >

  <div class="row">
                <div class="col-lg-8"><label>USER ID </label></div>
    
            </div>
          <div class="row part">
              <div class="col-lg-8">
                  <input type="text" name="userid" placeholder=" Enter user id" class="filler">
              </div>
          </div>


      <div class="row">
              <div class="col-lg-8"><label>DOOR NO</label></div>
  
          </div>
  
  
          <div class="row part">
              <div class="col-lg-8">
                  <input type="text" name=dno placeholder=" Enter door no" class="filler">
              </div>
          </div>
  
          <div class="row">
                  <div class="col-lg-8"><label>TYPE</label></div>
              </div>
  
  
              <div class="row part">
                  <div class="col-lg-8">
                      <input type="text" name="type"placeholder="individual/flat" class="filler">
                  </div>
                </div>
  
              
          
          <input type = "submit" value = "POST" >    
             
            
</form>


<div class="pic2 ">
  <img src="pics\undraw_updated_rr85.svg">
</div>

<div class="post">
  <h1>
    Update on Sale</h1>
</div>
  <form class="form" method="post" action="sale2au.php" >

  <div class="row">
                <div class="col-lg-8"><label>USER ID </label></div>
    
            </div>
          <div class="row part">
              <div class="col-lg-8">
                  <input type="text" name="userid" placeholder=" Enter user id" class="filler">
              </div>
          </div>


      <div class="row">
              <div class="col-lg-8"><label>DOOR NO</label></div>
  
          </div>
  
  
          <div class="row part">
              <div class="col-lg-8">
                  <input type="text" name=dno placeholder=" Enter door no" class="filler">
              </div>
          </div>
  
          <div class="row">
                  <div class="col-lg-8"><label>TYPE</label></div>
              </div>
  
  
              <div class="row part">
                  <div class="col-lg-8">
                      <input type="text" name="type"placeholder="individual/flat" class="filler">
                  </div>
                </div>
  
              
          
          <input type = "submit" value = "UPDATE" >    
             
            
</form>
<div class="pic2 ">
  <img src="pics/undraw_suburbs_8b83.svg">
</div>



<div class="post">
  <h1>
    Delete on Sale</h1>
</div>
  <form class="form" method="post" action="sale2ad.php" >

  <div class="row">
                <div class="col-lg-8"><label>USER ID </label></div>
    
            </div>
          <div class="row part">
              <div class="col-lg-8">
                  <input type="text" name="userid" placeholder=" Enter user id" class="filler">
              </div>
          </div>


      <div class="row">
              <div class="col-lg-8"><label>DOOR NO</label></div>
  
          </div>
  
  
          <div class="row part">
              <div class="col-lg-8">
                  <input type="text" name=dno placeholder=" Enter door no" class="filler">
              </div>
          </div>
           
          <input type = "submit" value = "DELETE" >    
             
            
</form>

</body>
</html>
