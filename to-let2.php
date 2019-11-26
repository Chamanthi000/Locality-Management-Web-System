<?php

$con = mysql_connect('localhost','root','');

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }

 

mysql_select_db("my locality", $con);

 

$sql="INSERT INTO to_let VALUES ('$_POST[userid]','$_POST[dno]','$_POST[type]','$_POST[rent]')";

 

if (!mysql_query($sql,$con))

  {

  die('Error: ' . mysql_error());

  }

echo "1 record added";
header("Location:to-let.php");
 

mysql_close($con)

?>

</body>

</html>

 