<?php
//session_start();
if (!isset($_SESSION['id_user_log']) || empty($_SESSION['id_user_log'])) {
	header("Location: index.php");
}
 ?>