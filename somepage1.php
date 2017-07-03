 <?php

           // Create connection
      $connection = mysql_connect("127.0.0.1", "root", "");
      mysql_select_db("address");
      
        // Check connection
      if ($connection->connect_error) {
          die("Connection failed: " . $connection->connect_error);
      }
       $var = $_POST['search'];
        $query = trim($var);
          
        $search = mysql_real_escape_string($_REQUEST['doSearch']);
        $retval = mysql_query("select * from address WHERE Firstname='$search' || Lastname='$search' || Branch='$search' || Department='$search' || Telephone='$search' || Extension ='$search' || Manager='$search' order by Firstname");
        echo '$( "#log" ).html =""';   
        echo '<table id="table1">';
        echo '<tr class="ta"><th>Firstname</th><th>Lastname</th><th>Branch</th><th>Department</th><th>Telephone</th><th>Extension</th><th>Manager</th></tr>';

         while($row = mysql_fetch_array($retval))
            {
                  echo '<tr><td>'.$row['Firstname'].'</td><td>'.$row['Lastname'].'</td><td>'.$row['Branch'].'</td><td>'.$row['Department'].'</td><td>'.$row['Telephone'].'</td><td>'.$row['Extension'].'</td><td>'.$row['Manager'].'</td></tr>';
            }
       echo "</table>";
  
      ?>