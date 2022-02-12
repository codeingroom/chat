<?php
include("connecction.php");
session_start();
if(isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c']) && isset($_POST['d']) && isset($_POST['e']) && isset($_FILES['f']) && isset($_POST['ee']))
{
$un=$_POST['a'];
$psw=$_POST['b'];
$nb=$_POST['c'];
$em=$_POST['d'];
$nms=$_POST['e'];
$fl=$_POST['f'];
$referrals=$_POST['ee'];

$dq=strtoupper(bin2hex(random_bytes(4)));

$files=$_FILES['f']['name'];
$files2=$_FILES['f']['tmp_name'];
move_uploaded_file($files2,"upload/".$files);
$sql="INSERT INTO `user` (`id`, `username`, `password`, `number`, `email`, `name`,`profile_image`,`referral`) VALUES (NULL, '$un', '$psw', '$nb', '$em','$nms','$files','$dq')";
$result=mysqli_query($conn,$sql) or die("connection faild");
echo "Account Created..";
if($referrals){
	$sql="SELECT id, referral,referral_point FROM `user` WHERE referral='$referrals'";
	$result=mysqli_query($conn,$sql)or die("Connection Faild..");
	if(mysqli_num_rows($result)>0){
	while($row=mysqli_fetch_assoc($result)){
		$isd=$row['id'];
		//$rfc=$row['referral'];
		$rfp=$row['referral_point']+10;
		$up="UPDATE `user` SET `referral_point` = '$rfp' WHERE `user`.`id` = $isd;";
		mysqli_query($conn,$up);
		
	}
	}
	header("Location:index.php");
}
//header("Location:index.php");
}elseif(isset($_GET['a'])){
	$search=$_GET['a'];
	$sql="SELECT id, username,name,email FROM `user` WHERE username='$search'";
	$result=mysqli_query($conn,$sql)or die("Connection Faild..");
	if(mysqli_num_rows($result)>0){
	while($row=mysqli_fetch_assoc($result)){
		$us=$row['name'];
		$id=$row['id'];
		
		/*$email=$row['email'];
		$_SESSION['oth']=$id;
		//$dk=$_SESSION['oth'];*/
		echo "<form action='chat.php' method='GET'
    
'><input type='hidden' name='ser_rel' value='{$id}'><button style='
    width: 100%;
    height: 50px;
    font-size: 20px;
    background-color: black;
    color: #fff;
    border: 0;
    position: relative;
    z-index: 1;
'>{$us}</button></form><br>";
	}
	}else{
		echo "Not Found";
	}
}elseif(isset($_POST['send_msg'])){
	$msg=$_POST['send_msg'];
	$myid=$_POST['sd1'];
	$send_id=$_POST['seed'];
	$addition=$myid+$send_id;
$sql="INSERT INTO `chat`(`id`, `message`, `my_id`, `other_id`,`add_value`) VALUES ('NULL','$msg','$myid','$send_id','$addition')";
$result=mysqli_query($conn,$sql) or die('SQL not work..');
echo 'wwww';
}

else{
	echo "Something Worng";
}

?>