<?php

$con = mysql_connect('localhost','root','');

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }

 

mysql_select_db("my locality", $con);

 

$sql="DELETE from miniservices  where local_id='$_POST[userid]' and s_id='$_POST[sid]'";

 

if (!mysql_query($sql,$con))

  {

  die('Error: ' . mysql_error());

  }

  header("Location:minia.php");


 

mysql_close($con)

?>

</body>

</html>

 