<?php

include "db.php";
if (isset(($_GET['id'])))
{
	$id=$_GET["id"];
$sql = "select * from gyms where id = '$id'";
$query = mysqli_query ($db,$sql );
while($result=mysqli_fetch_array($query))
 {
 	echo $result["LOC"]."<br>";
 	echo $result["NAME"]."<br>";
 	echo $result["RATE"]."<br>";
 	echo $result["LINK"]."<br>";
    $img=$result["image link"];

 	echo $result["region"]."<br>";
 	echo "<br><br><br>";
 	echo"<img src='$img'> ";
 	

 
 }
}

?>  
