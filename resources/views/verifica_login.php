<?php
if(!$_SESSION['nome']) {
	header('Location: account.php');
	exit();
}
?>