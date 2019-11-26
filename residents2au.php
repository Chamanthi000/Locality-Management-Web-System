<?php

$con = mysql_connect('localhost','root','');

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }

 

mysql_select_db("my locality", $con);

 

$sql="Update houses set housename='$_POST[residence]',d_no='$_POST[dno]',residence_type='$_POST[type]',head_of_fam='$_POST[head]',r_o='$_POST[ro]' where h_id='$_POST[userid]' ";

 

if (!mysql_query($sql,$con))

  {

  die('Error: ' . mysql_error());

  }

  header("Location:residents1a.php");


 

mysql_close($con)

?>

</body>

</html>

 