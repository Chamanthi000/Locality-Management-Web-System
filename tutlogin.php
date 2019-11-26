<?php
   include("connect.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
   
      if(isset($_POST['userid'])){$myuserid=$_POST['userid'];}
      if(isset($_POST['password'])){$mypassword=$_POST['password'];} 
      
      
      $sql = "SELECT local_id FROM localists WHERE local_id = '$myuserid' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     
      $active = isset($row['active']) ? $row['active'] : '';
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
	if($count == 1) {
         
        if(($myuserid=="123")&&($mypassword=="123")){ 
         
         header("location: admin.html");}
         else{$_SESSION['userid'] = $myuserid;
            header("location: mainpg.html");
         }
      }
      else {
        echo"error:invalid username or password";
      }
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="login1.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style>
 
input[type=submit] {
  width: 200px;
  
  padding: 12px 60px;
  margin-top: 10px;
  margin-left:15px;
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
    border:ipx solid mediumturquoise;
}
    </style>
  <title>login</title>


</head>
   
   <body>
   <div class="header">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspMY LOCALITY</div>
    <div class="pic">
        <img src="pics/loginpg.svg">
    </div>
      
         
               
               <form action = "" method = "post" style="margin-left:200px;margin-top:-500px;">
               <div class="row">
            <div class="col-lg-8"><label>User ID</label></div>

        </div>
        
        <div class="row part">
            <div class="col-lg-8">
                <input type="text" name="userid" required  placeholder=" Enter your User ID" class="filler">
            </div>
        </div>

        <div class="row">
                <div class="col-lg-8"><label> Password</label></div>
            </div>


            <div class="row part">
                <div class="col-lg-8">
                    <input type="password" name="password" required placeholder=" password" class="filler">
                </div>
            </div>

                  
                  <input type = "submit" value = "LOGIN"/><br />
                  
                  
                  <button type="button" class=" button col-lg-2"><a href="signup.html">SIGNUP&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a></button>
               </form>
   </body>
</html>
 