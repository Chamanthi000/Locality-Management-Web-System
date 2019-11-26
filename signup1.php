<?php
if(isset($_POST['username'])){
    $username = $_POST['username'];
}
if(isset($_POST['email'])){$email=$_POST['email'];}
if(isset($_POST['gen'])){$gender=$_POST['gen'];}
if(isset($_POST['optloc'])){$typeoflocal=$_POST['optloc'];}
if(isset($_POST['designation'])){$designation=$_POST['designation'];}
if(isset($_POST['contactno'])){$contactno=$_POST['contactno'];}
if(isset($_POST['userid'])){$userid=$_POST['userid'];}
if(isset($_POST['password'])){$password=$_POST['password'];}

if((!empty('$username'))||(!empty('$email'))||(!empty('$gender'))||(!empty('$typeoflocal'))||(!empty('$designation'))||(!empty('$contactno'))||(!empty('$userid'))||(!empty('$password')))
{
$host="localhost";
$user="root";
$pass="";
$db="my locality";
$conn=new mysqli($host,$user,$pass,$db);
        if(mysqli_connect_error())
        {die('Connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
        }
        else
        {
            $SELECT="select email from localists where email=? Limit 1";
            $INSERT="insert into localists (local_id,name,email,contact_no,designation,gender,password,optloc) values (?,?,?,?,?,?,?,?)";
            $stmnt=$conn->prepare($SELECT);
            $stmnt->bind_param("s",$email);
            $stmnt->execute();
            $stmnt->bind_result($email);
            $stmnt->store_result();
            $rnum=$stmnt->num_rows;
            if($rnum==0)
            {
                $stmnt->close();
                $stmnt=$conn->prepare($INSERT);
                $stmnt->bind_param("ississss", $userid , $username , $email , $contactno ,$designation,$gender,$password,$typeoflocal);
                $stmnt->execute();
                echo "new record inserted succesfully!!";

            }

            else{
                echo "someone already registered using this email address!";
            }
            $stmnt->close();
            $conn->close();
            

        }
}
else{
    echo"all fields are required!!";
    die();
}
?>