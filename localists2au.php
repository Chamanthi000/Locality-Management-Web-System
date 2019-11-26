<?php

$con = mysql_connect('localhost','root','');

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }

 

mysql_select_db("my locality", $con);

 

$sql="UPDATE localists set name='$_POST[name]',email='$_POST[email]',contact_no='$_POST[contactno]',designation='$_POST[designation]',gender='$_POST[gender]',optloc='$_POST[optloc]',password='$_POST[password]' where local_id='$_POST[userid]'";

 

if (!mysql_query($sql,$con))

  {

  die('Error: ' . mysql_error());

  }

  header("Location:localists1a.php");


 

mysql_close($con)

?>

</body>

</html>

 