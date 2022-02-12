<?php
include("js.php");
include("connecction.php");
$sql="SELECT DISTINCT other_id FROM `chat`";
$result=mysqli_query($conn,$sql) or die('SQL not work..');

if(mysqli_num_rows($result)>1){
	$aa=array();
	while($row=mysqli_fetch_array($result)){
		$data=$row['other_id'];
		echo ($data)."<br>";
		}
		

	
	}
	
?>
<script type="text/javascript" src="sc.js"></script>

