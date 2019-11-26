<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("localhost", "root", "", "my locality");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Attempt select query execution
$sql = "SELECT local_id,name,contact_no,designation,gender,optloc FROM localists";
if($result = $mysqli->query($sql)){
    if($result->num_rows > 0){
        echo "<table width=800px>";
            echo "<tr>";
                echo "<th><pre>USER ID              </pre></th>";
                echo "<th><pre>LOCALIST NAME        </pre></th>";
                echo "<th><pre>CONTACT NO           </pre></th>";
                echo "<th><pre>DESIGNATION                          </pre></th>";
                echo"<th><pre>GENDER             </pre></th>";
                echo"<th><pre>RESIDENT/SERVICER           </pre></th>";
            echo "</tr>";
        while($row = $result->fetch_array()){
            echo "<tr>";
                echo "<td>" . $row['local_id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['contact_no'] . "</td>";
                echo "<td>" . $row['designation'] . "</td>";
                echo "<td>" . $row['gender'] . "</td>";
                echo "<td>" . $row['optloc'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        $result->free();
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$mysqli->close();
?>