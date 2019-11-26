<?php

$con = mysql_connect('localhost','root','');

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }

 

mysql_select_db("my locality", $con);

 

$sql="INSERT INTO miniservices VALUES ('$_POST[userid]','$_POST[sid]','$_POST[sname]','$_POST[description]')";

 

if (!mysql_query($sql,$con))

  {

  die('Error: ' . mysql_error());

  }

  header("Location:minia.php");


 

mysql_close($con)

?>

</body>

</html>

 