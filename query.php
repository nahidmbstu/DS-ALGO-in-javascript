<?php

include 'dbcon.php';

if (isset($_GET['name'])) {

    $name = $_GET['name'];
	
// $name =isset($_GET['name'])?$_GET['name']:'';


$query = mysqli_query( $conn,"SELECT * FROM movie WHERE name = '$name'");

while($row = mysqli_fetch_array($query))
{
    echo "<p>".$row['name']."</p>";
    echo "<p>".$row['year']."</p>";
}

}

?>
