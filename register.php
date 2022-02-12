<?php
include("header.php");
include("js.php");
include("connecction.php");

//echo strtoupper(bin2hex(random_bytes(6)));

?>
<html>
<head>
<title>Diploma Project</title>
</head>
<body style="
    background-image: url('image/ho1.jpg');
    background-size: 100%;
">
<div style="
    background-color: #00000094;
    width: 30%;
    color: #fff;
    position: absolute;
    left: 35%;
    padding: 30px;
    top: 25%;
    border-radius: 20px;
">
<img src="image/logo.png" width="75%" height="100%" style="
    width: 50%;
    height: 70px;
    margin-left: 25%;
    margin-top: -30px;
">
<form action="data.php" method="post" class="myform" id="myform" enctype="multipart/form-data" style="
    margin-left: 30%;
">
<input type="text" id="username" placeholder="Enter Your Username.." class="username" name="a" style="
    width: 100%;
    height: 35px;
    outline: none;
    border: 0px;
    border-radius: 10px;
    font-size: initial;
    margin-left: -60px;
"><br><br>
<input type="password" id="password" placeholder="Enter Your password.." class="password" name="b" style="
    width: 100%;
    height: 35px;
    outline: none;
    border: 0px;
    border-radius: 10px;
    font-size: initial;
    margin-left: -60px;
"><br><br>
<input type="number" id="number" placeholder="Enter Your Number.." class="number" name="c" style="
    width: 100%;
    height: 35px;
    outline: none;
    border: 0px;
    border-radius: 10px;
    font-size: initial;
    margin-left: -60px;
"><br><br>
<input type="email" id="email" placeholder="Enter Your Email.." class="email" name="d" style="
    width: 100%;
    height: 35px;
    outline: none;
    border: 0px;
    border-radius: 10px;
    font-size: initial;
    margin-left: -60px;
"><br><br>
<input type="text" id="name" placeholder="Enter Your Name.." class="name" name="e" style="
    width: 100%;
    height: 35px;
    outline: none;
    border: 0px;
    border-radius: 10px;
    font-size: initial;
    margin-left: -60px;
">
<input type="text" id="rc" placeholder="Referral code" class="name" name="ee" style="
    width: 100%;
    height: 35px;
    outline: none;
    border: 0px;
    border-radius: 10px;
    font-size: initial;
    margin-left: -60px;
margin-top: 15px;
">
<input type="file" id="file" placeholder="Profile" class="name" name="f" style="
    width: 100%;
    height: 35px;
    outline: none;
    border: 0px;
    font-size: initial;
    margin-left: -55px;
    margin-top: 20px;
"><br><br>
<button id="res" style="
    width: 100%;
    height: 35px;
    outline: none;
    border: 0px;
    border-radius: 10px;
    font-size: initial;
    margin-left: -60px;
    background-color: #000000a8;
    color: #fff;
">Register</button>
</form>
<div id="rc"></div>
<span class="spans" style="
    position: absolute;
    left: 50%;
    margin-top: 11px;
    font-size: larger;
">Or</span><br><br>
<a href="index.php" style="
    position: absolute;
    left: 48%;
    font-size: larger;
    color: #fff;
    text-decoration: none;
    font-family: cursive;
">login</a>
</div>
<?php
if(isset($_GET['bhanu'])){
	$a=$_GET['bhanu'];
echo "<script>
document.getElementById('rc').value='$a';

</script>";

}
?>
<script>
/*console.log("Code run");
var button=document.getElementById("res");
button.addEventListener("click",regisger);
function regisger(e){
	e.preventDefault();
	console.log("Function work");
	var n=document.getElementById("username").value;
	var n1=document.getElementById("password").value;
	var n2=document.getElementById("number").value;
	var n3=document.getElementById("email").value;
	var n4=document.getElementById("name").value;
	var n5=document.getElementById("file").value;
	$.ajax({
		url:"data.php",
		type:"POST",
		data:{a:n,b:n1,c:n2,d:n3,e:n4,f:n5},
		success:function(data){
document.getElementById('myform').reset();
document.getElementById('rc').innerHTML=data;
		console.log(data);
		}
	});
}*/
</script>
</body>
</html>