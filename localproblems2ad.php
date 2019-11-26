<?php

$con = mysql_connect('localhost','root','');

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }

 

mysql_select_db("my locality", $con);

 

$sql="DELETE from localproblems  where local_id='$_POST[userid]' and p_id='$_POST[pid]'";

 

if (!mysql_query($sql,$con))

  {

  die('Error: ' . mysql_error());

  }

  header("Location:localproblemsa.php");


 

mysql_close($con)

?>

</body>

</html>

 