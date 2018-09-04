<?php
	require config.php;
	$errors=array();
	
	if(isset($POST['memberregis']))
	{
		$name=mysql_real_escape_string($POST['name']);
		$email=mysql_real_escape_string($POST['email']);
		$password=mysql_real_escape_string($POST['password']);
		$position=mysql_real_escape_string($POST['position']);
		$education=mysql_real_escape_string($POST['education']);
		$skills=mysql_real_escape_string($POST['skills']);
		$address=mysql_real_escape_string($POST['address']);
		$salary=mysql_real_escape_string($POST['salary']);
		$image=mysql_real_escape_string($POST['image']);
		
		if(empty($name))
		{
			array_push($errors,"name is required");
		}
		if(empty($email))
		{
			array_push($errors,"email is required");
		}
		if(empty($password))
		{
			array_push($errors,"password is required");
		}
		if(empty($position))
		{
			array_push($errors,"position is required");
		}
		if(empty($education))
		{
			array_push($errors,"education is required");
		}
		if(empty($skills))
		{
			array_push($errors,"skills is required");
		}
		if(empty($address))
		{
			array_push($errors,"address is required");
		}
		if(empty($salary))
		{
			array_push($errors,"salary is required");
		}
		if(empty($image))
		{
			array_push($errors,"image  is required");
		}
		
		if(count($errors)==0)
		{
			$sql="INSERT INTO member(name,email,password,position,education,skills,address,salary,image)
							VALUES('$name','$email','$password','$position','$education','$skills','$address','$salary','$image')";
		}
?>