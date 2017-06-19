<?php
	header('Content-Type:text/html; charset=utf-8');
	// $username = $_GET['username'];
	// $password = $_GET['password'];

	$username = $_POST['username'];
	$password = $_POST['password'];


	if($username === 'admin888' && $password === 'admin888') {
		$oReturn = array('status' => 1, 'text' => '帅哥');
	} else {
		$oReturn = array('status' => -1, 'text' => '煞笔');
	}

	echo json_encode($oReturn);

	//echo '你输入的名称是：'.$username.'；密码是：'.$password;
?>