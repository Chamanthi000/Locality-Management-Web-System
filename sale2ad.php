<?php

$con = mysql_connect('localhost','root','');

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }

 

mysql_select_db("my locality", $con);

 

$sql="DELETE from sale  where local_id='$_POST[userid]' and d_no='$_POST[dno]'";

 

if (!mysql_query($sql,$con))

  {

  die('Error: ' . mysql_error());

  }

  header("Location:salea.php");


 

mysql_close($con)

?>

</body>

</html>

 