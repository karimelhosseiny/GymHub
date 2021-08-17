<?php

include "db.php";
if (isset(($_GET['submit'])))
{
	$loc=$_GET['loc'];
$sql = "select * from gyms where region = '$loc'";
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
 	
$id=$result["id"];
 echo"<a href='gym.php?id=$id'>checkthegymoutput </a>";

 }
}

?>  
