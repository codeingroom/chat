<?php
include("connecction.php");
session_start();

?>
<html>
<head>
<title>
Chat With Me
</title>
</head>
<body>
<div>
<form>
<input type="text" name="search" id="search_input" Placeholder="Searching..." class="search">
<button id="search_btn" class="btn">Search</button>
</form>
</div>
<div id='search_result'>

</div>

<hr>
<div id="chat_show" class="chat">

</div>

<form id="mechatform">
<input type="text" id="message" placeholder="Enter Your Messaage...">
<button id="msg_send">Send</button>
</form>

<script type="text/javascript" src="js/jquery.js"></script>

<script>
//===================Search Code=============================
function displayDate(){
	var aq=document.getElementById('dd').value;
console.log(aq);
	console.log(Date());

	
	
}
	document.getElementById('search_btn').addEventListener('click',search_fun);
function search_fun(e){
	e.preventDefault();
	console.log("Searching Function Work");
	var search_inputs=document.getElementById('search_input').value;
	
	$.ajax({
		url:"read.php",
		type:"GET",
		data:{search:search_inputs},
		success:function(data){
			document.getElementById('search_result').innerHTML=data;
			
		}
		
	});
	


}

	
//=====================Message Code=============================

document.getElementById('msg_send').addEventListener('click',message_send_u);
function message_send_u(e){
	e.preventDefault();
	console.log("Function Work");
}
//========================================================
</script>
</body>
</html>