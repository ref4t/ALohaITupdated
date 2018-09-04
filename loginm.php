<?php

session_start();
require 'config.php';
$un=$_POST['un'];
$pw=$_POST['pw'];

$statement="select * from member where Name='$un' and Password='$pw';";

$result = mysqli_query($conn, $statement);
			
            if (mysqli_num_rows($result)>0)
            {
            	while($row =mysqli_fetch_assoc($result)){
				$_SESSION['id']= $row['ID'];
				$_SESSION['type']= "member";
				$_SESSION['un']=$row['Name'];
				//echo $row['id'];
				}
            	header("location:memberdashboard.php");
               
    		}
            else
            {
                echo "User Name or Password is wrong";
            }
            mysqli_close($conn);

            ?>