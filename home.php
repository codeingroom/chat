<?php
//include("header.php");
include("js.php");
include("connecction.php");
session_start();
?>
<html>
<head>
<title>Diploma Project</title>
</head>
<link rel="stylesheet" href="css/style.css">
<body>
<style>
*{
	margin:0px;
}
.header{
	margin: 0px;
    background-color: #000;
    width: 100%;
    height: 10%;
    border: 0px;
    box-shadow: 0px 2px 4px black;
	position: fixed;
	z-index: 1;
}
.hd_bt{
	height: 65px;
    border: 0px;
    font-size: medium;
    font-family: cursive;
    margin-right: 5px;
	background-color: black;
    color: #fff;
	padding:15px;
}
.hd_bt:hover{
	background-color:#222121;
}
.ff{
	
    width: 100%;
    display: none;
}
.dp_down:hover .ff{
	display:block;
}
.h{
	background-color: #000;
    color: #fff;
    border: 0px;
    width: 100%;
    height: 50px;
    font-size: medium;
    font-family: cursive;
    /* position: absolute; */
}
.h:hover{
	background-color:#222;
}
.lf{
	
    font-size: larger;
    font-family: cursive;
    padding: 6px;
    margin-left: 75px;
	margin-top: -40px;

}
</style>
<div class="header"><div style="position: absolute;right: 21%;">
<a href="home.php"><button class="hd_bt"><img src="image/home.png" width="100%" height="100%"></button></a>
<a href="#"><button class="hd_bt"><img src="image/not1.png" width="100%" height="100%"></button></a>
<a href="chat.php"><button class="hd_bt"><img src="image/msg.png" width="100%" height="100%"></button></a>

</div>
<div class="dp_down" style="
    position: fixed;
    width: 20%;
    height: 10%;
    right: 0px;
">
<?php
$mysse=$_SESSION['ids'];
$sqlss="SELECT id,profile_image FROM `user` WHERE id='$mysse'";
$red=mysqli_query($conn,$sqlss);
if(mysqli_num_rows($red)>0){
while($rr=mysqli_fetch_array($red)){
	$GLOBALS['dc']=$rr['profile_image'];
	

}	
}

?>
<button class="sh_p" style="width: 36%;height: 100%;background-image: url('upload/<?php echo $dc; ?>');background-size: 100%;border: 0px;"></button><b style="
    position: absolute;
    color: #fff;
    top: 18px;
    font-size: medium;
    font-family: cursive;
    margin-left: 8px;

">

<?php 
$names=$_SESSION['ids'];
$sq="SELECT id,name,profile_image FROM `user` WHERE id='$names'";
$result=mysqli_query($conn,$sq) or die("Connection Failed..");
if(mysqli_num_rows($result)>0){
	while($row=mysqli_fetch_array($result)){
		$GLOBALS['nn']=$row['name'];
	
		$aa=$row['name'];
	echo "{$aa}";
	}
}
; 
?></b>
<div class="ff">
<a href="logout.php"><button class="h">Account Upgrade</button></a>
<a href="logout.php"><button class="h">Profile</button></a>
<a href="logout.php">

<button class="h">Settings</button></a>
<a href="logout.php"><button class="h">LogOut</button></a>
</div>
    
    </div>
	
</div>
<div style="
    position: fixed;
    top: 8px;
    left: 10px;
	z-index: 2;
">
<form>
<input type="search" name="search" id="search" placeholder="Searching..." style="
    width: 75%;
    height: 50px;
    font-size: medium;
    font-family: cursive;
    outline: none;
    border: 0px;
    border-radius: 15px 0px 0px 15px;
padding: 20px;
">
<button id="ser" style="width: 35%;height: 52px;margin-top: -51px;margin-left: 75%;font-family: cursive;font-size: medium;">Search</button>
</form>
</div>
<div id="find"style="
    background-color: #e9e4e2;
    width: 212px;
    position: absolute;
    z-index: 2;
    margin-top: 5%;
    overflow-y: auto;
    box-shadow: 1px 2px 3px black;
">

</div>
<div style="
 
    height: 100%;
    width: 15%;
    position: fixed;
    top: 0px;
    z-index: 1;
"><div style="
    background-color: #dfdfdf;
    width: 100%;
    height: 89%;
    position: absolute;
    top: 70px;
	border: 0px;
    box-shadow: 0px 0px 5px black;
	padding: 5px;
">

<div style="
    
    width: 100%;
    height: 7%;
    margin-top: 8px;
"><div style="
    
    width: 60px;
    height: 41px;
"><img src="image/bhanu.jpg" style="
    width: 66%;
    height: 41px;
    margin-left: 10px;
"></div><p class="lf">Fashion</p></div>
<div style="
    
    width: 100%;
    height: 7%;
    margin-top: 8px;
"><div style="
    
    width: 60px;
    height: 41px;
"><img src="image/bhanu.jpg" style="
    width: 66%;
    height: 41px;
    margin-left: 10px;
"></div><p class="lf">Electronics</p></div>
<div style="
    
    width: 100%;
    height: 7%;
    margin-top: 8px;
"><div style="
    
    width: 60px;
    height: 41px;
"><img src="image/bhanu.jpg" style="
    width: 66%;
    height: 41px;
    margin-left: 10px;
"></div><p class="lf">Home</p></div><div style="
    
    width: 100%;
    height: 7%;
    margin-top: 8px;
"><div style="
    
    width: 60px;
    height: 41px;
"><img src="image/bhanu.jpg" style="
    width: 66%;
    height: 41px;
    margin-left: 10px;
"></div><p class="lf">Sports</p></div><div style="
    
    width: 100%;
    height: 7%;
    margin-top: 8px;
"><div style="
    
    width: 60px;
    height: 41px;
"><img src="image/bhanu.jpg" style="
    width: 66%;
    height: 41px;
    margin-left: 10px;
"></div><p class="lf">Furniture</p></div><div style="
    
    width: 100%;
    height: 7%;
    margin-top: 8px;
"><div style="
    
    width: 60px;
    height: 41px;
"><img src="image/bhanu.jpg" style="
    width: 66%;
    height: 41px;
    margin-left: 10px;
"></div><p class="lf">Toys & Baby</p></div><div style="
    
    width: 100%;
    height: 7%;
    margin-top: 8px;
"><div style="
    
    width: 60px;
    height: 41px;
"><img src="image/bhanu.jpg" style="
    width: 66%;
    height: 41px;
    margin-left: 10px;
"></div><p class="lf">Beauty</p></div><div style="
    
    width: 100%;
    height: 7%;
    margin-top: 8px;
"><div style="
    
    width: 60px;
    height: 41px;
"><img src="image/bhanu.jpg" style="
    width: 66%;
    height: 41px;
    margin-left: 10px;
"></div><p class="lf">Software</p></div>
<div style="
    
    width: 100%;
    height: 7%;
    margin-top: 8px;
"><div style="
    
    width: 60px;
    height: 41px;
"><img src="image/bhanu.jpg" style="
    width: 66%;
    height: 41px;
    margin-left: 10px;
"></div><p class="lf">Games</p></div>
<div style="
    
    width: 100%;
    height: 7%;
    margin-top: 8px;
">
<div style="
    
    width: 60px;
    height: 41px;
"><img src="image/bhanu.jpg" style="
    width: 66%;
    height: 41px;
    margin-left: 10px;
"></div>
<p class="lf">Food & More</p></div>
<div style="
    
    width: 100%;
    height: 7%;
    margin-top: 8px;
">
<div style="
    
    width: 60px;
    height: 41px;
"><img src="image/bhanu.jpg" style="
    width: 66%;
    height: 41px;
    margin-left: 10px;
"></div>
<p class="lf">Mobiles</p></div>
<p style="
   
    position: absolute;
    bottom: 12px;
    text-align: center;
    left: 19px;
">Diploma Project 2021 ! </p>
</div></div>
<div style="
   
    width: 100%;
    height: 100%;
    position: absolute;
    
">
<div style="
 background-color: #dfdfdf;
    width: 68%;
    position: absolute;
    height: 25%;
    overflow-y: hidden;
    border: 0px;
    box-shadow: 0px 1px 5px black;
    left: 16%;
    top: 11%;
">
<div style="
    background-color: black;
    position: absolute;
    width: 20%;
    height: 100%;
">
<form action="home.php" method="post" enctype="multipart/form-data" style="
    position: absolute;
    top: 35px;
    left: 0px;
">
<h4 style="
    color: #fff;
    font-size: x-large;
    font-family: cursive;
    margin-top: -19px;
">Select Product Image..</h4>
<input type="file" name="file" style="
    position: initial;
    width: 100%;
    height: 50px;
    font-size: medium;
    color: #fff;
	margin-top: 10px;
">
<input type="text" name="pd_name" placeholder="Enter Product Name..." style="
    position: absolute;
    width: 200%;
    height: 33px;
    border: 0px;
    margin-left: 100px;
    top: -22px;
    font-size: medium;
    font-family: cursive;
	outline:none;
">
<textarea name="dpt" placeholder="Enter Description..." style="
    position: absolute;
    width: 200%;
    margin-left: 100px;
    top: 30px;
    border: 0px;
    height: 72px;
    font-size: x-large;
    font-family: cursive;
	outline:none;
"></textarea>

<button style="
   width: 97%;
    background-color: #000000;
    border: 0px;
    height: 46px;
    margin-left: 275%;
    position: absolute;
    color: #fff;
    font-size: x-large;
    border-radius: 7px;
    font-family: cursive;
    box-shadow: 0px 3px 7px black;
	margin-top: -55px;
">Post</button></form>
<?php 
if(isset($_FILES['file'])){
	$other_ids=$_SESSION['ids'];
$files=$_FILES['file']['name'];
$files2=$_FILES['file']['tmp_name'];
$nns=$_POST['pd_name'];
$dp=$_POST['dpt'];
move_uploaded_file($files2,"upload/".$files);
$sql="INSERT INTO `upload`(`id`,`upload_id`,`file_name`,`name`,`description`,`name_us`) VALUES (NULL,'$other_ids','$files','$nns','$dp','$nn')";
$result=mysqli_query($conn,$sql) or die("connection faild");
if($result==true){
	echo "<center style='
    position: absolute;
    bottom: 18px;
    left: 413%;
'><h4 style='
    color: #000;
'>
Post Public</h4></center>";
	
	
	
}else{
	echo "Not Working";
}

}

?>
<div>
</div></div></div>
<div style="
 
    width: 68%;
    height: 89%;
    position: absolute;
    left: 16%;
    top: 38%;
	//background-color:red;
">

<?php
//$myses=$_SESSION['ids'];
$sqlss="SELECT * FROM `upload`";
$resultss=mysqli_query($conn,$sqlss);
if(mysqli_num_rows($resultss)>0){
	while($row=mysqli_fetch_array($resultss)){
		$up_id=$row['upload_id'];
		$fl_nm=$row['file_name'];
		$n_m=$row['name'];
		$dis_cp=$row['description'];
		$ut_nm=$row['name_us'];
		$sqx="SELECT id,profile_image FROM `user` WHERE id='$up_id'";
		$resq=mysqli_query($conn,$sqx);
		if($resq==true){
			while($ros=mysqli_fetch_array($resq)){
				$GLOBALS['dsk']=$ros['profile_image'];
				
				
			}
		}
		echo "<div style='
    background-color: #dfdfdf;
    width: 100%;
    height: 65%;
   margin-top:0%;
	
    box-shadow: 0px 2px 4px black;
'><div style='
    background-color: pink;
    width: 45%;
    height: 100%;
'>
<div style='
    background-color: #dfdfdf;
    width: 100%;
    height: 15%;
	
'><button style='
    width: 20%;
    height: 100%;
    background-image: url(upload/{$dsk});
    background-size: 100%;
    border: 0px;
'></button><b style='
    position:absolute;
	margin-top: 15px;
    margin-left: 15px;
	font-size: medium;
    font-family: cursive;
'>{$ut_nm}</b></div>
<img src='upload/{$fl_nm}' style='
    width: 100%;
    height: 85%;
'>
</div><div style='
    background-color: #dfdfdf;
    width: 55%;
    height: 15%;
   margin-top: -41%;
    margin-left: 45%;
	
'>
<h3 style='
   margin: 12px;
    margin-left: 40px;
    font-size: xx-large;
    left: 25px;
    font-family: fantasy;
'>{$n_m}</h3>
</div><div style='
    
    width: 50%;
   margin-left: 50%;
    height: 42%;
'>
<b style='
   
    text-align: left;
    
    font-size: medium;
    font-family: fangsong;
	'>{$dis_cp}</b>
</div><div style='
   
    width: 55%;
    margin-left: 45%;
	margin-top: 0%;
    height: 13%;
'><form action='chat.php' method='get'  style='
    position: absolute;
    left: 22%;
'><input type='hidden' name='ser_rel' value='{$up_id}'><button style='
    background-color: #000;
    color: #fff;
    border: 0px;
    border-radius: 6px;
    width: 220%;
    height: 50px;
    font-size: large;
    font-family: cursive;
	margin-left: 246%;
'>Message Send</button></form></div></div><br>";
	}
}

?>

<!----------------ddd-------------->
</div><div style="
    
    width: 15%;
    height: 90%;
    position: fixed;
    right: 0px;
	top:67px;
"><div style="
    background-color: #dfdfdf;
    width: 100%;
    height: 99%;
    position: absolute;
    top: 4px;
	border: 0px;
    box-shadow: 0px 0px 5px black;
"></div>

</div>


</div>

<script>
var button=document.getElementById("ser");
button.addEventListener("click",searching);
function searching(e){
	e.preventDefault();
	console.log("Function Work..");
	var ss=document.getElementById("search").value;
	$.ajax({
		url:"data.php",
		type:"GET",
		data:{a:ss},
		success:function(data){
			//console.log(data);
			var dk=document.getElementById("find").innerHTML=data;
			
			
		}
	});
}


</script>
</body>
</html>