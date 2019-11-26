<?php

$con = mysql_connect('localhost','root','');

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }

 

mysql_select_db("my locality", $con);

 

$sql="INSERT INTO sale VALUES ('$_POST[userid]','$_POST[dno]','$_POST[type]')";

 

if (!mysql_query($sql,$con))

  {

  die('Error: ' . mysql_error());

  }

echo "1 record added";
header("Location:sale.php");
 

mysql_close($con)

?>

</body>

</html>

 