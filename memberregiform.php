   <?php 
   session_start();
   if (!(isset($_SESSION['un']))){
    header("location:memberlogin.php");
}
   ?>
<!DOCTYPE html>
<html>
  <head>
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
	<script src="https://ajax.googlepis.com/ajax/libs/jquery/3.1.0">
		
	</script>
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
          <link rel="stylesheet" href="css/memberregi.css" type="text/css">

  </head>
    
  <body>
    <!-- Side Navbar -->
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <!-- User Info-->
          <div class="sidenav-header-inner text-center">
		  <?php
			require 'config.php';
			if(isset($_SESSION['un'])){
                $un= $_SESSION['un'];
            $statement="select * from admin_1 where Name='$un'";
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
        
			echo "$un";}
				?>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>B</strong><strong class="text-primary">D</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
          
          
          
          
          
          <!-- can be updated according to need -->
          
          
          
        <div class="main-menu">
          <h5 class="sidenav-heading">Main</h5>
            <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li><a href="adminhome.php"> <i class="icon-home"></i>Home                             </a></li>
            <li><a href="ongprojectAdmin.php"> <i class="icon-form"></i>projects                           </a></li>
            <li><a href="memberlist.php"> <i class="fa fa-bar-chart"></i>Memberlist                           </a></li>
            <li><a href="projectinfo.php"> <i class="icon-grid"></i>client and projects                             </a></li>
        
              <li><a href="recentwork.php"> <i class="icon-grid"> update recent work</i>                            </a></li>
              
                
             <li><a href="memberregiform.php"> <i class="icon-grid">Memeber registration</i>                            </a></li>
         
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
               
               
                <!-- Log out-->
                <li class="nav-item"><a href="logout.php" class="nav-link logout"> <span class="d-none d-sm-inline-block">Logout</span><i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
            
        </nav>
          
      </header>
        

     
      
      
      <!-- work within these section for front and back end -->
      
     
        
        <section id="member registration">
        
         <div class="container">
             <div class="form-sec">
  <h4>Memeber information</h4>
       <form  method="post"action="memberregi.php " enctype="multipart/form-data">
    <div class="form-group">
      <label>Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name"required>
    </div>
    <div class="form-group">
      <label>Email:</label>
      <input type="email" class="form-control" id="name" placeholder="Enter Email" name="email">
    </div>
    
    <div class="form-group">
      <label>password.:</label>
      <input type="text" class="form-control" id="password" placeholder="Enter password." name="password" required>
    </div>
	<div class="form-group">
      <label>position:</label>
      <input type="text" class="form-control" id="position" placeholder="position" name="position">
    </div>
	 
	<div class="form-group">
      <label>Education:</label>
      <input type="text" class="form-control" id="Education" placeholder="Education" name="education">
    </div>
           <div class="form-group">
      <label>Skills:</label>
      <input type="text" class="form-control" id="Skills" placeholder="Skills" name="skills">
    </div>
           <div class="form-group">
      <label>address:</label>
      <input type="text" class="form-control" id="address" placeholder="address" name="address">
    </div>
    
                <div class="form-group">
      <label>Given salary:</label>
      <input type="text" class="form-control" id="salary" placeholder="salary" name="salary">
    </div>
         
    <div class="form-group">
      <label>Image:</label>
      <input type="file" class="form-control" id="Image" placeholder="Image" name="image">
    </div>
    <button type="submit" name="submit" class="btn btn-default">Submit</button>
  </form>
            
            
             </div>
             
         </div>
        
        
        
     
        
        
        
        
        </section>
        
        
      </div>
        
        
        
      
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