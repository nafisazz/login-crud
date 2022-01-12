<?php
session_start();

	session_destroy();
	unset($_SESSION['id']);
	header("Location: ../tugas3/index.html");

?>