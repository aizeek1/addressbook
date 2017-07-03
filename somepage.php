<?php
       // Create connection
      $connection = mysql_connect("127.0.0.1", "root", "");
      mysql_select_db("address");
      
        // Check connection
      if ($connection->connect_error) {
          die("Connection failed: " . $connection->connect_error);
      }
     ob_clean();            
     ob_start();
          $retval = mysql_query("select * from address order by Firstname");
          echo '<table id="log">';
          echo '<tr class="ta1"><th>Firstname</th><th>Lastname</th><th>Branch</th><th>Department</th><th>Telephone</th><th>Extension</th><th>Manager</th></tr>';
     
         while($row = mysql_fetch_array($retval))
            {
                  echo '<tr><td>'.$row['Firstname'].'</td><td>'.$row['Lastname'].'</td><td>'.$row['Branch'].'</td><td>'.$row['Department'].'</td><td>'.$row['Telephone'].'</td><td>'.$row['Extension'].'</td><td>'.$row['Manager'].'</td></tr>';
            }
        echo "</table>";  

        ?>