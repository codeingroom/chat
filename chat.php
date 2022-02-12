<?php
include("js.php");
include("connecction.php");
session_start();
?>
<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title><?php echo "VCTM Diploma PROJECT" ?></title>
</head>
<link rel="stylesheet" href="css/chat.css" >
<body>
<div class="hed">
<div class="box">

<b class="nn">
<?php 
if(isset($_GET['ser_rel'])){
	$ii=$_GET['ser_rel'];
	//other id
	$GLOBALS['ot']=$GLOBALS['ii'];
	
	$sql="SELECT id,name,profile_image FROM `user` WHERE id='$ii'";
	$result=mysqli_query($conn,$sql)or die("Connection Faild..");
	if(mysqli_num_rows($result)>0){
	while($row=mysqli_fetch_assoc($result)){
		$us=$row['name'];
		$GLOBALS['names']=$GLOBALS['us'];
		$fp=$row['profile_image'];
		echo "
		<div style='
    background-color: red;
    position: absolute;
    top: 1px;
    width: 80px;
    height: 53px;
    margin-top: -16px;
    margin-left: -98px;
'><button style='
    width: 100%;
    height: 100%;
    background-image: url(upload/{$fp});
    background-size: 100%;
    border: 0px;
'></button>
		</div>
		<div>{$names}</div>
		";
		
	}
	}
}
?></b>
<div class="le">
<li></li>
<li></li>
<li></li>

</div>
<img src="image/call.png" width="5%" height="100%" style="
    
    float: right;
    margin-right: 80px;
">
</div>
</div>

<div class="lef">


<div style="
    width: 100%;
    background-color: #1b3f3f;
    height: 8%;
">
<img src="image/logo.png" width="75%" height="100%" style="
    padding-left: 28px;
">
</div>
<div style="
    
    width: 100%;
    height: 8%;
   
">
<form action="chat.php" method="GET"

 style="
    width: 100%;
    height: 100%;
    border-bottom: 1px solid #1b3f3f;
"><input type="text" name="search" placeholder="Search...!" id="search" style="
    width: 100%;
    height: 100%;
    border: 1px;
    padding: 23px;
	font-style: oblique;
    font-size: larger;
">
<button id="ser" class="btn" style="
    width: 20%;
    height: 7%;
    position: absolute;
    top: 56px;
">Search</button>
</form>
<div id="find" style="
    position: absolute;
    width: 100%;
">

</div>
</div>
<div style="margin-top: 0px;overflow: scroll;
    /* width: 100%; */
    height: 92%;
	background-color: #eaecea;">
<?php


$mydid=$_SESSION['ids'];
$sql="SELECT DISTINCT my_id,other_id FROM `chat` WHERE my_id='$mydid'";
$result=mysqli_query($conn,$sql) or die('SQL not work..');
if(mysqli_num_rows($result)>0){
	while($row=mysqli_fetch_array($result)){
		$myidd=$row['other_id'];
		//=========================================
		$sqli="SELECT id,name,profile_image FROM `user` WHERE id='$myidd'";
		$res=mysqli_query($conn,$sqli) or die('SQL not work..');
		
		if(mysqli_num_rows($res)>0){
	while($rows=mysqli_fetch_array($res)){
	$us_id=$rows['id'];
	$us_name=$rows['name'];
	$pf=$rows['profile_image'];
	echo "
<form action='chat.php' method='GET'><input type='hidden' name='ser_rel' value='{$us_id}'>
	<button class='mms_btn'><div class='us'>
<img src='upload/{$pf}' class='user-img'> 
<b class='name'>{$us_name}</b></div></button>
	</form>";
	}
		}
		//==========================================
	
	
	
	
	}
	
}

 ?></b>
</div>


</div>
</div>

<style>
.main{
	background-image:url('image/pc.jpg');
	position:absolute;
	width:100%;
	height:100%;
	    top: 0px;
   
    z-index: -1;
}
</style>
<!----chat---->
<div id="autoloadss" style="
    position: absolute;
    z-index: 1;
   // background-color: red;
    right: 0px;
    bottom: 8%;
    height: 82%;
    width: 80%;
overflow-y: auto;
">
    <?php
	if(isset($ot)){
	$mydd=$_SESSION['ids'];
	$adds=$mydd+$ot;
	//$sql="SELECT message,my_id,other_id,add_value FROM `chat` WHERE add_value='$adds'";
	$sql="SELECT message,my_id,other_id,add_value FROM `chat`";
	$result=mysqli_query($conn,$sql)or die("Connection Faild..");
	if(mysqli_num_rows($result)>0){
	while($row=mysqli_fetch_assoc($result)){
$mdcs=$row['my_id']; 
$msgs=$row['message']; 
$ods=$row['other_id'];
  if($mydd===$mdcs && $ot===$ods){
	  
	   echo "<div  style='
    
    background-color: #c0efff00;
    width: fit-content;
    height: 8%;
    border-radius: 0px 35px;
    font-size: 25px;
    padding: 15px;
    margin: 5px;
    margin-left: 80%;
    border: 1px;
    border-style: solid;
    box-shadow: 15px 9px 50px black;
    color: #fff;
    border-color: #6e6f74;

'><p>{$msgs}</p></div>";
             
  } if($mydd===$ods && $ot===$mdcs){
	  
	   echo "<div  style='
   
    background-color: #c0efff00;
    width: fit-content;
    height: 8%;
    border-radius: 0px 35px;
    font-size: 25px;
    padding: 15px;
    margin: 5px;
    
    border: 1px;
    border-style: solid;
    box-shadow: 15px 9px 50px black;
    color: #fff;
    border-color: #6e6f74;

    
'><p>{$msgs}</p></div>";
             
  }
 
  
			
			
                  
		
	
	}
	}
	}else{
		echo "<div style='
    position: absolute;
    top: 45%;
    left: 40%;
'><button style='
    background-color: #0000006b;
    font-size: xx-large;
    font-family: initial;
    box-shadow: 0px 20px 28px #000000;
    border-bottom-color: #00d7ff;
    border-top-color: transparent;
    border-left-color: #00ffff00;
    border-right-color: transparent;
    border-radius: 30px;
'><a href='home.php' style='
    text-decoration: none;
    color: #fff;
    padding: 30px;
'>Add User</a></button></div>";
	}
	
	?>
</div>
<div class="main">
</div>

<div class="send">
<button class="btn1"><img src="image/smi.png" class="sendbtn1"> </button>
<form class="chat" id="chat">
<input type="text" name="chat" placeholder="Type Your Message..!" class="inpo" id="message">
<input type="hidden"  id="my" value="<?php echo $_SESSION['ids']; ?>">
<input type="hidden" id="other" value="<?php echo $ot; ?>">
<button class="btn" id='msg_send'><img src="image/send.png" class="sendbtn"> </button>
</form>
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
//==========message code=====================
document.getElementById('msg_send').addEventListener('click',message_send_u);
function message_send_u(e){
	e.preventDefault();
	console.log("Function Work");
var msc=document.getElementById("message").value;
var msc1=document.getElementById("my").value;
var msc2=document.getElementById("other").value;
	$.ajax({
		url:"data.php",
		type:"POST",
		data:{send_msg:msc,sd1:msc1,seed:msc2},
		success:function(data){
			console.log(data);
			document.getElementById("chat").reset();
			
			
		}
	});
}

</script>
</body>
</html>