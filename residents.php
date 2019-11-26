<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("localhost", "root", "", "my locality");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Attempt select query execution
$sql = "SELECT h_id,housename,d_no,residence_type,head_of_fam,r_o FROM houses,localists where h_id=local_id";
if($result = $mysqli->query($sql)){
    if($result->num_rows > 0){
        echo "<table width=800px>";
            echo "<tr>";
                echo "<th><pre>USER ID          </pre></th>";
                echo "<th><pre>RESIDENCE             </pre></th>";
                echo "<th><pre>DOOR NO                  </pre></th>";
                echo "<th><pre>RESIDENCE TYPE           </pre></th>";
                echo"<th><pre>HEAD OF THE FAMILY            </pre></th>";
                echo"<th><pre>RENT/OWN      </pre></th>";
            echo "</tr>";
        while($row = $result->fetch_array()){
            echo "<tr>";
                echo "<td>" . $row['h_id'] . "</td>";
                echo "<td>" . $row['housename'] . "</td>";
                echo "<td>" . $row['d_no'] . "</td>";
                echo "<td>" . $row['residence_type'] . "</td>";
                echo "<td>" . $row['head_of_fam'] . "</td>";
                echo "<td>" . $row['r_o'] . "</td>";
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