<?php
ob_start();
session_start(); // Starting Session
$error = ''; // Variable To Store Error
     $connection = mysqli_connect("127.0.0.1", "root", "", "address");
   
    if($connection === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
    if (isset($_POST['submit'])) {
       
        $query = "SELECT * FROM address";
        $result = mysqli_query($connection, $query);
         if(mysqli_num_rows($result) > 0){
    
        while($row=mysqli_fetch_row($result)){
            echo "<tr>";
                echo "<td>" . $row['Firstname'] . "</td>";
                echo "<td>" . $row['Lastname'] . "</td>";
                echo "<td>" . $row['Branch'] . "</td>";
                echo "<td>" . $row['Department'] . "</td>";
                echo "<td>" . $row['Extension'] . "</td>";
                echo "<td>" . $row['Manager'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
}       
        
    
    mysqli_close($connection); // Closing Connection    
    
?>