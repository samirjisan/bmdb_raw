<?php 
session_start();
$uid=$_SESSION['uid'];
include('connect.php');

$title = $_POST['title'];
$date = $_POST['date'];
$duration = $_POST['duration'];
$director = $_POST['director'];
$writer = $_POST['writer'];
$plot = $_POST['plot'];
$actor = $_POST['actor'];
$gnr = $_POST["cat"];
$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = "image/".$filename;


move_uploaded_file($tempname, $folder);



$sql = "INSERT INTO movie (UserID,Name, Actor, Director, Writer, Plot, Duration, ReleaseDate, Image, Status)
VALUES ('$uid','$title', '$actor', '$director', '$writer', '$plot', '$duration', '$date','$folder', '1')";
if (mysqli_query($conn, $sql)) {
	$last_id = mysqli_insert_id($conn);
	foreach($gnr as $gn)
{
	
	$sql1 = "INSERT INTO moviecategory (Name,MovieID) VALUES ('$gn','$last_id')";
	mysqli_query($conn, $sql1);
}
header("Location: submit_form.php");

 
} else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}




?>