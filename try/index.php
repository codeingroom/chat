<?php
include("conn.php");
$sql="SELECT * FROM `upload`";
$result=mysqli_query($conns,$sql);
if(mysqli_num_rows($result)>0){
	while($row=mysqli_fetch_array($result)){
		$fi=$row['filename'];
	echo "<img src='upload/{$fi}' width='150px' height='150px'><br>";
	}
}

?>
<form action="file.php" method="post" enctype="multipart/form-data" style="
    position: absolute;
    top: 35px;
    left: 0px;
"><input type="file" name="file" id="upload" style="
    position: initial;
    width: 100%;
    height: 50px;
    font-size: medium;
    color: #000;
" hidden>
<label for="upload">Choose File</label>
<button style="
    width: 97%;
    background-color: #dfdfdf;
    border: 0px;
    height: 25px;
    margin-left: 2px;
">Upload</button></form>
