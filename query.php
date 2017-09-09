<?php

include 'dbcon.php';

$name =isset($_GET['name'])?$_GET['name']:'';

$query = mysqli_query( $conn,"SELECT * FROM movie WHERE name like '%$name%'");

while($row = mysqli_fetch_array($query))
{
    echo "<p>".$row['name']."</p>";
    echo "<p>".$row['year']."</p>";
}

?>
