<?php
include("conn.php");
$files=$_FILES['file']['name'];
$files1=$_FILES['file']['size'];
$files2=$_FILES['file']['tmp_name'];
$files3=$_FILES['file']['type'];
move_uploaded_file($files2,"upload/".$files);
$sql="INSERT INTO `upload`(`id`, `filename`) VALUES (NULL,'$files')";
$result=mysqli_query($conns,$sql) or die("connection faild");
if($result==true){
	echo "File Location upload<br>";
	echo $files."<br>";
	echo $files1."<br>";
	echo $files2."<br>";
	echo $files3."<br>";
	
	
}else{
	echo "Not Working";
}
?>