<?php

$con = mysql_connect('localhost','root','');

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }

 

mysql_select_db("my locality", $con);

 

$sql="INSERT INTO houses VALUES ('$_POST[userid]','$_POST[residence]','$_POST[dno]','$_POST[type]','$_POST[head]','$_POST[ro]')";

 

if (!mysql_query($sql,$con))

  {

  die('Error: ' . mysql_error());

  }

  header("Location:residents1.php");


 

mysql_close($con)

?>

</body>

</html>

 