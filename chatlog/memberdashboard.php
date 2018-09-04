
<?php
session_start();
if (!(isset($_SESSION['un']))){
    header("location:memberlogin.php");
}

?>




<!DOCTYPE html>
<html>
  <head>
  <?php //include('session.php'); ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap Dashboard by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
		
		<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 90%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #87cefa;
    color: white;
	
}

input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 10%;
    background-color: #4CAF50;
    color: white;
    padding: 8px 15px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	float: right;
}

input[type=submit]:hover {
    background-color: #45a049;
}


</style>
		
		
  </head>
    
  <body>
    <!-- Side Navbar -->
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <!-- User Info-->
          <div class="sidenav-header-inner text-center"><?php
			require 'config.php';
			if(isset($_SESSION['un'])){
                $un= $_SESSION['un'];
            $statement="select * from member where Name='$un'";
            $result = mysqli_query($conn, $statement);

            if (mysqli_num_rows($result) > 0)
            {
                while($row = mysqli_fetch_assoc($result))
                {
					echo"<img src=image/".$row['ProfilePic']." width='10%' height='10%' alt='person' class='img-fluid rounded-circle'>";
                }

            }
            else
            {
                echo "Nothing found in db";
            }
			}
            mysqli_close($conn);
			?>
            <h2 class="h5"><?php if(isset($_SESSION['un'])){
                $un= $_SESSION['un'];
        
                echo "$un";

            }
            ?>
              
            </h2><span> profession</span>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>B</strong><strong class="text-primary">D</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
          
          
          
          
          
          <!-- can be updated according to need -->
          
          
          
        <div class="main-menu">
          <h5 class="sidenav-heading">Main</h5>
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li><a href="index.html"> <i class="icon-home"></i>Home                             </a></li>
            <li><a href="forms.html"> <i class="icon-form"></i>on going project                            </a></li>
            <li><a href="charts.html"> <i class="fa fa-bar-chart"></i>work progress                            </a></li>
            <li><a href="userprofile.php"> <i class="icon-grid"></i>profile                           </a></li>
			<li><a href="chat.php"> <i class="icon-grid"></i>chat                           </a></li>
         
            
         
          </ul>
        </div>
   
      </div>
    </nav>
      
      <!-- push notification div  -->
      
    <div class="page">
      <!-- navbar-->
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="index.html" class="navbar-brand">
                  <div class="brand-text d-none d-md-inline-block"><strong class="text-primary">Aloha solutions LTD</strong></div></a></div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Notifications dropdown-->
                <li class="nav-item dropdown"> <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell"></i><span class="badge badge-warning">12</span></a>
                  <ul aria-labelledby="notifications" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification d-flex justify-content-between">
                          <div class="notification-content"><i class="fa fa-envelope"></i>You have 6 new messages </div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification d-flex justify-content-between">
                          <div class="notification-content"><i class="fa fa-twitter"></i>You have 2 followers</div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification d-flex justify-content-between">
                          <div class="notification-content"><i class="fa fa-upload"></i>Server Rebooted</div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification d-flex justify-content-between">
                          <div class="notification-content"><i class="fa fa-twitter"></i>You have 2 followers</div>
                          <div class="notification-time"><small>10 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong> <i class="fa fa-bell"></i>view all notifications                                            </strong></a></li>
                  </ul>
                </li>
                <!-- Messages dropdown-->
                <li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-envelope"></i><span class="badge badge-info">10</span></a>
                  <ul aria-labelledby="notifications" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Jason Doe</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="img/avatar-2.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Frank Williams</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="img/avatar-3.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Ashley Wood</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong> <i class="fa fa-envelope"></i>Read all messages    </strong></a></li>
                  </ul>
                </li>
                <!-- Languages dropdown    -->
                <li class="nav-item dropdown"><a id="languages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link language dropdown-toggle"><img src="img/flags/16/GB.png" alt="English"><span class="d-none d-sm-inline-block">English</span></a>
                  <ul aria-labelledby="languages" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item"> <img src="img/flags/16/DE.png" alt="English" class="mr-2"><span>German</span></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> <img src="img/flags/16/FR.png" alt="English" class="mr-2"><span>French                                                         </span></a></li>
                  </ul>
                </li>
                <!-- Log out-->
                <li class="nav-item"><a href="logout.php" class="nav-link logout"> <span class="d-none d-sm-inline-block">Logout</span><i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
            
        </nav>
          
      </header>
        

     
      
      
      <!-- work within these section for front and back end -->
	  
	  <section>
	  
	
	  <form method="post" action="post.php" align="center"> 
					<textarea name="content" rows="7" cols="64" style="text-align:center;border-collapse: 4px; padding: 12px 20px;margin: 12px 0;display: inline-block;border: 1px solid #ccc;" placeholder=".........Write Someting to post here........" required ></textarea>
					<br>
					<button name="post" style="background-color: #008CBA;color: white;padding: 8px 12px;margin: 8px 0;border: none;border-radius: 4px;cursor: pointer;button-align: right;">POST</button>
					<br>
					<hr>
		</form>
						
	  
	  </section>
      
      <section >
      
      
      
      
	  
	  
	  
	  
	
                    <?php
                        require 'config.php';
                        
                        $sql= "SELECT * FROM `post` ORDER BY `date_created` DESC";

                        $result = mysqli_query($conn, $sql);
                        //echo mysqli_num_rows($result);
                        $i = 0;
                        while($row = mysqli_fetch_assoc($result)){ 
                           
                            $sql2= "SELECT * from `member` where id='".$row['user_id']."'";
                            $result2 = mysqli_query($conn, $sql2);
                            $name=null;
                            while($row2 = mysqli_fetch_assoc($result2))
                            {
                                $name = $row2['Name'];
                            }
                            
                            $comment = null;
                            
                            $sql5= "SELECT * from `post` where post_id='".$row['post_id']."'";
                            $result5 = mysqli_query($conn, $sql5);
                            $comment = mysqli_num_rows($result5);
                            
                            //echo $name;
                            
                    ?> 
					<div style="overflow-x:auto;"><p>
                     <table  width="90%" style="border: 1px dotted blue;" align='center' id="customers">  
                        <tr> <th>
                            <a href='<?=$str?>' > <?=$name?> </a>
                            <span>(<?php				
								
								echo date('F d, Y - H:i:sa', $row['date_created']);
								
						?>)</span>
                              <p>
                               <h4> <?=$row['content']?></h4>
                              </p>
						</th> </td>
                         <tr> <td>  
                            
						<form method="post" action="comment.php">
									<input type="hidden" name="qid" value="<?php echo $row['post_id']; ?>">
                              <input size="140" type="text" placeholder="Type a comment" name="content" required"> 
							  <input type="submit" name="comment"><br><br> 
                            
                            </form>
                            <?php 
                                
                                $sql3= "SELECT * FROM `comment` where `post_id`='".$row['post_id']."' ORDER BY `date_posted` asc";

                                $result3 = mysqli_query($conn, $sql3);
                                //echo mysqli_num_rows($result);
                                while($row3 = mysqli_fetch_assoc($result3)){ 
                                     $sql4;
									if($row3=='admin'){
										$sql4="select * from 'admin_1' where id='".$row3['user_id']."'";
									}
									else{
                                    $sql4= "SELECT * from `member` where id='".$row3['user_id']."'";
									}
                                    $result4 = mysqli_query($conn, $sql4);
                                    $name2=null;
                                    while($row4 = mysqli_fetch_assoc($result4))
                                    {
                                        $name2 = $row4['Name'];
                                    }
                                
                            ?>
                            <tr> <td>  
                            <div>
                              <span>
                                <a href='<?=$str2?>' > <?=$name2?> </a>
                                <span>(<?php				
								
								echo date('F d, Y - H:i:sa', $row3['date_posted']);
								
						?>)</span>
                              </span><br>
                                
                              <?=$row3['content']?>
                              
                            </div>
                            <br/><br/>
                            </td> </tr>
							
                        <?php
                                }
								?>
								</table>
			                          </p></div>
								<?php 
                            //echo $row['text'];
                          //  $i++;
                        }
                        
                       
                    ?>
      
      </section>
      
      <section ></section>
      <section ></section>
      <section ></section>
      
      </div>
      
      <!-- copy entire page for new page to maintain the dashboard design same-->
      
      
      <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/charts-home.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
    </body>
</html>