<?php
include("header.php");
include("js.php");
include("connecction.php");
if($_POST==true){
	$urn=$_POST['username'];
	$psw=$_POST['password'];
	$sql="SELECT id,username,password,name FROM `user` WHERE username='$urn' AND password='$psw'";
	$result=mysqli_query($conn,$sql)or die("Connection Faild..");
	if(mysqli_num_rows($result)==1){
	while($row=mysqli_fetch_assoc($result)){
		session_start();
		$_SESSION['ids']=$row['id'];
		$_SESSION['user']=$row['username'];
		$_SESSION['pass']=$row['password'];
		$_SESSION['nm']=$row['name'];
		
		
		
		
		header("Location:home.php");
	}
	}
	else{
	echo "<div>Your user or pass not work</div>";
}

}else{
	//header("Location:index.php");
}
?>
<html>
<head>
<title>VCTM Diploma Project</title>
</head>
<link rel="stylesheet" href="css/style.css">
<body style="
    background-image: url('image/ho1.jpg');
    background-size: 100%;
">
<div style="
    position: absolute;
    top: 40%;
    left: 5%;
    font-size: 26px;
    color: #000;
    text-shadow: 0px 2px 3px #b5601c;
"><h3>Connect With People And Sale<br> Your Product...
</h3></div>
<div style="
        position: absolute;
    right: 5%;
    top: 25%;
    background-color: #00000080;
    width: 20%;
    height: 20%;
    padding: 10%;
    border: 0px;
    box-shadow: 3px 3px 7px black;
    border-radius: 40px;
">
<img src="image/logo.png" width="75%" height="100%" style="
    padding-left: 28px;
    position: absolute;
    width: 50%;
    height: 30%;
    left: 18%;
    top: 0px;
">
<form class="myform" id="myform" action="index.php" method="POST" style="position: sticky;margin-top: -10px;">
<input type="text" id="username" placeholder="Enter Your Username.." class="username" name="username" style="
    height: 45%;
    width: 100%;
    position: absolute;
    border: 0px;
    font-size: initial;
    border-radius: 8px;
    outline: none;
"><br><br>
<input type="password" id="password" placeholder="Enter Your password.." class="password" name="password" style="
    height: 45%;
    width: 100%;
    position: absolute;
    border: 0px;
    font-size: initial;
    border-radius: 8px;
    outline: none;
	margin-top: 15px;
"><br><br>
<button id="log" style="
        width: 60%;
    position: absolute;
    height: 50%;
    left: 61px;
    background-color: #000000b8;
    color: #fff;
    border: 0px;
    border-radius: 12px;
    font-size: larger;
    font-family: cursive;
	margin-top: 30px;
">Login</button>
</form>
<span class="spans" style="
   padding: 55px;
    position: absolute;
    top: 55%;
    left: 40%;
    color: #fff;
    font-size: larger;
">Or</span><br><br>
<a href="register.php" style="
    padding: 35px;
    text-decoration: none;
    position: absolute;
    bottom: 11%;
    left: 40%;
    color: #fff;
    font-style: unset;
    font-family: cursive;
">Register</a>

</div>
<p style="
    position: absolute;
    bottom: 0px;
    left: 35%;
">This is a Diploma 3rd Year Project..</p>
</body>
</html>