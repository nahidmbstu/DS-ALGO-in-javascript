<?php

include 'dbcon.php';

if (isset($_POST['name'])) {

    $name = $_POST['name'];

    if (!empty($name)) {


   $query = mysqli_query( $conn,"SELECT * FROM movie WHERE name = '$name'");

   $num_rows = mysqli_num_rows($query);

   if($num_rows==0)
{
   echo "No Match Found";
}
else
{

	while($row = mysqli_fetch_array($query))
{
    echo "<p>".$row['name']."</p>";
    echo "<p>".$row['year']."</p>";
}

}

}
	
else 

{
	echo "Please Enter A Movie Name";
}

}

?>

