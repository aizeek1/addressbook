$var = "scuba";
$query = trim($var);

if(!isset($query)){
    echo "Your search was invalid";
    exit;
} //line 18

$sql = "SELECT * FROM auction WHERE name LIKE '%" . $query . "%'";

$result = mysql_query($sql);
$numrows = mysql_num_rows($result);
mysql_close($dbhost);

if($numrows == 0){
    echo "Sorry, your search did not return any results";
}
else{
?>
<table style='width = 800px;'>
<?php 
    $i = 0;

    while($i < $numrows){
    $row = mysql_fetch_array($result);

    $ID = $row['ID'];
    $name = $row['name'];
    $owner = $row['owner'];
    $holder = $row['holder'];
    $start = $row['sprice'];
    $current = $row['cprice'];
    $instant = $row['iprice'];
    $inc = $row['incprice'];
    $image = $row['img'];
    $time = $row['stime'];
    $length = $row['duration'];
?>
<tr style ="height: 200px;">
<td style ="width: 200px;"></td>
<td style ="width: 300px;">
    <div style ="width: 180px"><?php echo $name; ?></div>
    <div><?php echo $owner; ?></div>
</td>
<td style="width: 200px;">
    <div style="height: 100px;"><?php echo $current; ?></div>
    <div style="height: 50px;"><?php echo $instant; ?></div>
    <div><?php echo $inc; ?></div>
</td>
<td><?php echo $time; ?></td>
</tr>
<?php
      i++;
    } //end of while
} //end of else
?>
<tr>
    <td colspan="4">Displaying <?php echo $numrows; ?> results</td>
</tr>
</table>
</html>