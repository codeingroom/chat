<?php

session_start();
session_unset();
session_destroy();
echo "Logout";
header("Location:index.php");
?>