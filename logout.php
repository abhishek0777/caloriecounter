<?php
session_start();
//echo $_SESSION['email'];
session_destroy();
include('login.php');
?>