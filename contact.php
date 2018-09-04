<?php
  // $name=$_POST['name'];
// $email=$_POST['email'];
// $telnum=$_POST['telnum'];
// $msg=$_POST['msg'];
// $msg=wordwrap($msg,70);
 // $sub=$name." ".$telnum;
 
//mail("$email","$sub","$msg")


 $mailto = 'abc@gmail.com';
    $mailSub =$_POST['email']."-Contact AlohaIT";
    $mailMsg ="Message: ". $_POST['msg']. "Name:".$_POST['name']." Telnum: ".$_POST['telnum'];
   require 'PHPMailer-master/PHPMailerAutoload.php';
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "mail@gmail.com";
   $mail ->Password = "password";
   $mail ->SetFrom("yourmail@gmail.com");
   $mail ->Subject = $mailSub;
   $mail ->Body = $mailMsg;
   $mail ->AddAddress($mailto);

   if(!$mail->Send())
   {
       echo "<script>
			alert('Mail not sent!!!!');
			window.location.href='index.php';
			</script>" ;
   }
   else
   {
       echo "<script>
			alert('Mail Sent!');
			window.location.href='index.php';
			</script>" ;
   }
?>