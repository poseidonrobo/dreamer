<?php
//require('../dbconnect.php');
//if (!empty($_POST)) {
	$sql ='SELECT * FROM `dr_users` WHERE `email`=?';
	$data = array($_SESSION['login_user']['email']);
	$stmt = $dbh->prepare($sql);
	$stmt->execute($data);
	$read_users = $stmt->fetch(PDO::FETCH_ASSOC);
	$_SESSION['user_id']=$read_users['user_id'];
//}
?>