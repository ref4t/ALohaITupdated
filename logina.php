<?php

session_start();
require 'config.php';
$un=$_POST['un'];
$pw=$_POST['pw'];

$statement="select * from admin_1 where Name='$un' and Password='$pw'";

$result = mysqli_query($conn, $statement);

            if (mysqli_num_rows($result)==1)
            {
				while($row= mysqli_fetch_assoc($result)){
				$_SESSION['id']= $row['ID'];
				$_SESSION['type']= "admin";
				$_SESSION['un']=$row['Name'];
				}
				
				
            	header("location:adminhome.php");
    		}
            else
            {
                echo "User Name or Password is wrong";
            }
            mysqli_close($conn);

            ?>