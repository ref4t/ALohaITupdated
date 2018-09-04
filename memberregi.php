<?php

 require 'config.php';
  // Initialize message variable
  $msg = "";
	session_start();
if (!(isset($_SESSION['un']))){
    header("location:memberregis.php");
}

  // If upload button is clicked ...
  if (isset($_POST['submit'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
     
  	// Get text
  //	$image_text = $_POST['image'];
      $name = $_POST['name'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      
      $address = $_POST['address'];
      $position =  $_POST['position'];
       $salary = $_POST['salary'];

      $education = $_POST['education'];
      $skill = $_POST['skills'];
  	// image file directory
  	$target = "image/".basename($image);

  	$sql = "INSERT INTO member (Name,Password,Email,Position,Salary,ProfilePic,Education,Skills,Location) VALUES ('$name', '$password','$email','$position','$salary','$image','$education','$skill','$address')";

      // execute query
  	mysqli_query($conn, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		
		echo "<script>
alert('Image uploaded successfully');
</script>" ;
  	}else{
  		$msg = "Failed to upload image";
        
  	}
  }
 
	$msgbody="You have been successfully registed!!! \n Username: ".$name." and Password: ".$password;
	$mailto =$email ;
    $mailSub = "Login Info - AlohaIT";
    $mailMsg = $msgbody;
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
			window.location.href='memberregiform.php';
			</script>" ;
   }
   else
   {
       echo "<script>
			alert('Mail Sent!');
			window.location.href='memberregiform.php';
			</script>" ;
   }
?>
        
