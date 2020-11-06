<?php
session_start();
if($_SESSION["sessionun"]==NULL && $_SESSION["sessionpw"]==Null)
{
	header("location:login.php");
	exit();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dashboard | Admin</title>
  


<!--960 Grid system-->
<link href="css/reset.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/text.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/960.css" rel="stylesheet" type="text/css" media="all" />
<!--MAIN STYLE SHEET - you can change this to orange.css or sand.css to change the theme -->
<link href="css/orange.css" rel="stylesheet" type="text/css" media="all" />
<!--jQuery UI style-->
<link rel="stylesheet" type="text/css" href="ui/css/sleek/style.css"/>
<script src="ui/jquery-1.3.2.min.js" type="text/javascript"></script>
<script src="ui/jquery-ui-1.7.1.custom.js" type="text/javascript"></script>
<script src="js/components.js" type="text/javascript"></script>
<script src="js/effects.js" type="text/javascript"></script>
<!--[if IE 6]>
<style type="text/css" >
p.error span, p.info span, p.notice span, p.success span { 
	postion:static;
    margin-right:15px;
}
p.todoitem a.close {
	margin-right:10px;
}
button.green, button.brown {
	padding:0px !important;
}
</style>
<![endif]-->


</head>

<body>
<!-- start .grid_12 - the container -->
<div class="container_12">
<div class="grid_5">
  <a href="#" class="logo"></a>
</div>
	<!-- end .grid_5 -->
	<div class="grid_7" id="login_data">
  <p>
<strong>Welcome <?php echo $_SESSION["sessionun"];?>!</strong><br />
	    <a href="adminprofile.php"><strong>Profile</strong></a><strong> | <a href="adminchangepassword.php">Change Password</a> | <a href="logout.php">Logout</a></strong></p>
</div>
	<!-- end .grid_7 - HEADER -->
	<div class="clear"></div>
  <div class="grid_12">
    <ul id="menu">	
   	    <li><a href="adminwelcome.php">Home</a></li>
          <li><a href="#" class="active">Manage Cooking</a>
          <ul>
	<li><a href="addcat.php">Add Category</a></li>
	<li><a href="managecat.php">Manage Category</a></li>

	<li><a href="addsubcat.php">Add Sub Category</a></li>
	<li><a href="managesubcat.php">Manage Sub Catagory</a></li>
	<li><a href="addrep.php">Add Recipes</a></li>
	<li><a href="manageaddrep.php">Manage Add Recipies</a></li>
    <li><a href="viewrecipies.php">Manage Artical</a></li>
	
	</ul>
          </li>
          <li><a href="#">Courses</a>
          <ul>
	<li><a href="addcourses.php">Add Courses</a></li>
	</ul>
          </li>
          
          <li><a href="#">Menu item 4</a></li>
          <li><a href="#">Menu item 5</a></li>
          <li><a href="#">Menu item 6</a></li>
    </ul>
    
  </div>
   <!-- end .grid_12 - MENU -->
  <!--<div class="grid_12" id="submenu">
  	<ul>
    	<li><a href="#">Submenu item 1</a></li>
    	<li><a href="#" class="active">Submenu item 2</a></li>        
       	<li><a href="#">Submenu item 3</a></li>
       	<li><a href="#">Submenu item 4</a></li>
       	<li><a href="#">Submenu item 5</a></li>      
        <li><a href="#">Submenu item 6</a></li>   
        <li><a href="#">Submenu item 7</a></li>             
    </ul>
  </div>-->
  <!-- end .grid_12 - SUBMENU -->
  <div class="clear"></div>