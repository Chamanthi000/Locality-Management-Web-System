<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("localhost", "root", "", "my locality");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Attempt select query execution
$sql = "SELECT local_id,e_id,ename,e_description FROM events";
if($result = $mysqli->query($sql)){
    if($result->num_rows > 0){
        echo "<table width=1000px>";
            echo "<tr>";
                echo "<th><pre>USER ID                    </pre></th>";
                echo "<th><pre>EVENT ID                    </pre></th>";
                echo "<th><pre>EVENT NAME                  </pre></th>";
                echo "<th><pre>EVENT DESCRIPTION            </pre></th><hr>";
              
            echo "</tr>";
        while($row = $result->fetch_array())
        {
            echo "<tr>";
                echo "<td>" . $row['local_id'] . "</td>";
                echo "<td>" . $row['e_id'] . "</td>";
                echo "<td>" . $row['ename'] . "</td>";
                echo "<td>" . $row['e_description'] . "</td>";
                
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