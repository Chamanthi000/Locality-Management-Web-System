<?php

$con = mysql_connect('localhost','root','');

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }

 

mysql_select_db("my locality", $con);

 

$sql="INSERT INTO events VALUES ('$_POST[userid]','$_POST[eid]','$_POST[ename]','$_POST[description]')";

 

if (!mysql_query($sql,$con))

  {

  die('Error: ' . mysql_error());

  }

  header("Location:events.php");


 

mysql_close($con)

?>

</body>

</html>

 