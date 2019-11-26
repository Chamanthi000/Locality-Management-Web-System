<?php

$con = mysql_connect('localhost','root','');

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }

 

mysql_select_db("my locality", $con);

 

$sql="INSERT INTO localproblems VALUES ('$_POST[userid]','$_POST[pid]','$_POST[pname]','$_POST[description]')";

 

if (!mysql_query($sql,$con))

  {

  die('Error: ' . mysql_error());

  }


header("Location:localproblems.php");

 

mysql_close($con)

?>

</body>

</html>

 