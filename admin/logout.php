<?php
session_start();
session_unset();
session_destroy();
if(!isset($_SESSION['admin_user'])){
	header('location: login.php');
}

?>