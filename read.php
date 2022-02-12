<?php
include("connecction.php");

	$search=$_GET['search'];
	$sql="SELECT id, username FROM `user` WHERE username='$search'";
	//$sql="SELECT id, username FROM `user`";
	$result=mysqli_query($conn,$sql)or die("Connection Faild..");
	
	if(mysqli_num_rows($result)>0){

	while($row=mysqli_fetch_assoc($result)){
		$id=$row['id'];
		$us=$row['username'];
		
	echo "<button id='dd' value='{$id}' onclick='displayDate()'>".$id,$us."</button><br>";
	
	
	}
	
	
	}
	else{
		echo "Something worng";
	}
?>
<script type="text/javascript" src="sc.js"></script>