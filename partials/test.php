<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

function smtp_mailer($to,$subject, $msg){
	$email_array = array("rohit.whitehatifyservices@gmail.com","navdeepbhanderi12@gmail.com");
	$email_password = array("mbzn acke ftuo khlp","kxbx geip fvhu ekoo");
	$countFile = 'email_count.txt';
    if (!file_exists($countFile)) {
        file_put_contents($countFile, '1');
	}
	$countFile1 = 'index_count.txt';
    if (!file_exists($countFile1)) {
        file_put_contents($countFile1, '0');
    }
	$i = intval(file_get_contents($countFile1));
	$count = intval(file_get_contents($countFile));
	
    $email = $email_array[$i];
    $password = $email_password[$i];
    
	
	$mail = new PHPMailer(); 
	$mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'tls'; 
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->Username = $email;
	$mail->Password = $password;
	$mail->SetFrom($email);
	$mail->Subject = $subject;
	$mail->Body =$msg;
	$mail->AddAddress($to);
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if($mail->Send()){
		if($count<35){
			$count++;
			file_put_contents($countFile, $count);
			echo " </br>".$count . " " . $email . " " . $password ;
		}else{
			$count = 1;
			file_put_contents($countFile, $count);
			$i++;
			file_put_contents($countFile1, $i);
		}
		if($i==2){
			$i=0;
			file_put_contents($countFile1, $i);
		}
		return true;

	}else{
		return false;
	}
}
?>