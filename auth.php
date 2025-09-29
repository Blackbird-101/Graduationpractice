<?php
	$link = mysqli_connect('localhost', 'f1160035_moscow_vitte', 'HlDea4ki', 'f1160035_moscow_vitte');
	if (!empty($_POST['password']) and !empty($_POST['username'])) {
		$login = $_POST['username'];
		$password = $_POST['password'];
		
		$query = "SELECT * FROM mv_users WHERE u_name='$login' AND u_password='$password'";
		$res = mysqli_query($link, $query);
		$user = mysqli_fetch_assoc($res);
		if (!empty($user)) {
			session_start();
			$data['success'] = 'Авторизация прошла успешна';
			$_SESSION['user_auth'] = $user;
		// header('Location: http://www.vk.com/');
		} else {
			$data['error'] = 'Ошибка авторизации';
		}	
		
	};
	



