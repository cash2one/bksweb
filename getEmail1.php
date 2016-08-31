<?php
	
	$name = trim($_POST['name']);
	$email = $_POST['email'];
	$comments = $_POST['comments'];

	$title = '消息来源于访问者 ' . $name;;
	
	$site_owners_email = 'zhaobinhong29@163.com'; // Replace this with your own email address
	$site_owners_name = 'xiaozhao'; // replace with your name
	
	if (strlen($name) < 2) {
		$error['name'] = "请输入您的姓名";	
	}
	
	if (!preg_match('/^[a-z0-9&\'\.\-_\+]+@[a-z0-9\-]+\.([a-z0-9\-]+\.)*+[a-z]{2}/is', $email)) {
		$error['email'] = "请输入一个有效的电子邮件地址

";	
	}
	
	if (strlen($comments) < 3) {
		$error['comments'] = "请留下您的评论";
	}
	
	if (!$error) {
		
		require_once('phpMailer/class.phpmailer.php');
		$mail = new PHPMailer();

		$mail->CharSet ="UTF-8";
		$mail->From = $email;
		$mail->FromName = $name;
		$mail->AddAddress($site_owners_email, $site_owners_name);
		$mail->Body = "Subject: " . $title ."\nEmail: " . $email . "\nName: " . $name .  "\nMessage: " . $comments;
		$mail->Subject = $title;
		
		$mail->Send();
		
		echo "<div class='success'> 你好, " . $name . "<br/>我们已经收到你的反馈信息。</div>";
		
	} # end if no error
	else {

		$response = (isset($error['name'])) ? "<div>" . $error['name'] . "</div> \n" : null;
		$response .= (isset($error['email'])) ? "<div>" . $error['email'] . "</div> \n" : null;
		$response .= (isset($error['comments'])) ? "<div>" . $error['comments'] . "</div>" : null;
		
		echo $response;
	} # end if there was an error sending

?>