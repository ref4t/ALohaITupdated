<?php

//including the database connection file
    //include("config.php");
    //connect_db();
//getting id of the data from url
   // $mId=$_GET['id'];
      
//deleting the row from table // actually not deleting it just unlinking from the result
   // $result = mysqli_query($conn,"update member set deleted_at=now() WHERE ID='$mId'");
	//close_db();
//redirecting to the display page (listdata.php in our case)
?>
<?php
    include "config.php";
    $id =$_REQUEST['id'];
	$sql="DELETE FROM member WHERE ID = '$id'";
//echo $id;
    // sending query
    $result=mysqli_query($conn,$sql);
      //echo $result;   
	  header("Location:membershow.php");
    ?>
  
