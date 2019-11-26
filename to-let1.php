<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("localhost", "root", "", "my locality");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Attempt select query execution
$sql = "SELECT local_id,d_no,type,rent FROM to_let";
if($result = $mysqli->query($sql)){
    if($result->num_rows > 0){
        echo "<table width=1000px>";
            echo "<tr>";
                echo "<th><pre>USER ID                    </pre></th>";
                echo "<th><pre>DOOR NO                    </pre></th>";
                echo "<th><pre>TYPE                    </pre></th>";
                echo "<th><pre>RENT                              </pre></th>";
              
            echo "</tr>";
        while($row = $result->fetch_array()){
            echo "<tr>";
                echo "<td>" . $row['local_id'] . "</td>";
                echo "<td>" . $row['d_no'] . "</td>";
                echo "<td>" . $row['type'] . "</td>";
                echo "<td>" . $row['rent'] . "</td>";
                
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