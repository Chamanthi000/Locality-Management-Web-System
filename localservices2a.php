<?php

$con = mysql_connect('localhost','root','');

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }

 

mysql_select_db("my locality", $con);

 

$sql="INSERT INTO local_services VALUES ('$_POST[userid]','$_POST[shopname]','$_POST[dno]','$_POST[description]','$_POST[ro]')";

 

if (!mysql_query($sql,$con))

  {

  die('Error: ' . mysql_error());

  }

  header("Location:localservicesa.php");


 

mysql_close($con)

?>

</body>

</html>

 