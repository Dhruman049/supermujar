<?php include("header.php");
session_start();?>
  <!-- START .grid_9 - LEFT CONTENT -->  
  <div class="grid_9 cnt" id="left">
    <h1>Welcome to Admin Panel</h1>
    <div id="lipsum">
    
   <?php
    include("ClsDatabase.php");
	include("config.php");
	
	$query="select * from tbl_admininfo";
	$user = new ClsDatabase();
	$p=$user->selectRecord($query);
	
	while($record=mysql_fetch_array($p))
{	
	if($_SESSION["sessionun"]==$record["admin_uname"]&& $_SESSION["sessionpw"]==$record["admin_password"])
	{
	 ?>
     <form action="" class="nice">
<table width="400" border="">
	<tr><td><br /><b><h4>Id</b></h4></td>
    <td><br /><b><h4><?php echo $record["admin_id"];?></h4></b></td></tr>
	<tr><td><br />Firstname:</td>
    <td><br /><?php echo $record["admin_fname"];?></td></tr>
    <tr><td><br />Lastname:</td>
    <td><br /><?php echo $record["admin_lname"];?></td></tr>
    <tr><td><br />Gender:</td>
    <td><br /><?php echo $record["admin_gender"];?></td></tr>
    <tr><td><br />State:</td>
    <td><br /><?php echo $record["admin_state"];?></td></tr>
    <tr><td><br />City:</td>
    <td><br /><?php echo $record["admin_city"];?></td></tr>
    <tr><td><br />Phone:</td>
    <td><br /><?php echo $record["admin_phone"];?></td></tr>
    <tr><td><br />Email: </td>
    <td><br /><?php echo $record["admin_email"];?></td></tr>
    <tr><td><br />Address:</td>
    <td><br /><?php echo $record["admin_address"];?></td></tr>
    
    </table></form>
        <?
	}
	}
?>
   
      
<!-- WYSIWYG Div --><!--SYSTEM MESSAGE EXAMPLES-->        
     
<!--END SYSTEM MESSAGE EXAMPLES--> 
     
<!--TABLE EXAMPLE-->      
      
      
<!--END TABLE EXAMPLE-->

<!--FORM ELEMENTS EXAMPLE-->            
      
      
    </div>
<!--END FORM ELEMENTS EXAMPLE-->     
    
<!--TABBED PANEL EXAMPLE-->     
    
			
<!-- END TABBED PANEL EXAMPLE-->   

<!-- LIST EXAMPLES-->              
    
    
    
<!-- LIST EXAMPLES-->      
  </div>
<!-- END LEFT CONTENT-->  

<!-- START RIGHT CONTENT - Widget menu -->    
  <div class="grid_3">
  <!-- TODO WIDGET -->
  	<div class="widget" id="todo">
   	  <h3 class="todo">To-do list</h3>
   	  <p class="todoitem">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sapien  dolor, ultrices a rutrum quis, convallis nec nisi.<a class="close" href="#">X</a></p>
   	  <p class="todoitem">Lorem ipsum dolor sit amet, consectetur adipiscing elit.<a class="close" href="#">X</a></p>
      <p class="todoitem">Nam sapien dolor, ultrices a rutrum quis, convallis nec nisi.<a class="close" href="#">X</a></p>
      <a href="#" class="view_all">View all todo items.</a>  	</div>
	<br />
    <!-- CALENDAR WIDGET -->
    <div class="widget">
    	<h3 class="calendar">Calendar</h3>
		<div id="datepicker" align="center"></div>
    </div>
	<br />
    <!-- COMMENTS WIDGET -->
    <div class="widget" id="comments">
      <h3 class="comments">Latest Comments</h3>
      <p><span><a href="#">by Danny - 15/05/2009 - 13:24</a></span>This is a sample comment on one of our articles in the website’s content part1...</p>
      <p><span><a href="#">by Danny - 15/05/2009 - 13:24</a></span>This is a sample comment on one of our articles in the website’s content part1...</p>
      <p><span><a href="#">by Danny - 15/05/2009 - 13:24</a></span>This is a sample comment on one of our articles in the website’s content part1...</p>            
      <a href="#" class="view_all">View full comment list.</a>    </div>  
	<br />
    <!-- PHOTOS WIDGET -->
    <div class="widget" id="photos">
      <h3 class="photos">Photos</h3>
      <p><a href="#"><img alt="image" src="images/cnt_img_1.jpg" width="50" height="50" /></a><a href="#"><img alt="image" src="images/cnt_img_2.jpg" width="50" height="50" /></a><a href="#"><img alt="image" src="images/cnt_img_3.jpg" width="50" height="50" /></a><a href="#"><img alt="image" src="images/cnt_img_4.jpg" width="50" height="50" /></a><a href="#"><img alt="image" src="images/cnt_img_5.jpg" width="50" height="50" /></a><a href="#"><img alt="image" src="images/cnt_img_6.jpg" width="50" height="50" /></a><a href="#"><img alt="image" src="images/cnt_img_7.jpg" width="50" height="50" /></a><a href="#"><img alt="image" src="images/cnt_img_8.jpg" width="50" height="50" /></a><a href="#"><img alt="image" src="images/cnt_img_9.jpg" width="50" height="50" /></a></p>
      <div class="clear"></div>
      <a href="#" class="view_all">View all photos.</a>
    </div>
    <br />
    <!-- BLANK WIDGET -->
    <div class="widget">
    	<h3>Basic Blank Widget</h3>
    	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sapien  dolor, ultrices a rutrum quis, convallis nec nisi. Morbi lorem est,  pellentesque ac suscipit ut, fringilla sit amet elit. Cras blandit  turpis vitae augue laoreet gravida. Suspendisse potenti.</p>
    	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sapien  dolor, ultrices a rutrum quis, convallis nec nisi. Morbi lorem est,  pellentesque ac suscipit ut, fringilla sit amet elit. Cras blandit  turpis vitae augue laoreet gravida. Suspendisse potenti.</p>
   		 <a href="#" class="view_all">A "more of this" link.</a>
    </div>        
  </div>
  <!-- end .grid_13 - RIGHT CONTENT - Widget menu  -->
  <div class="clear"></div>
  <!--FOOTER START-->
  <div class="grid_12 cnt" id="footer">This is a basic Footer - Copyright and other information can go here. | <a href="#">link 1</a> | <a href="#">link 2</a> | <a href="#">link 3</a> | <a href="#">link 4</a></div>
  <!--FOOTER END-->
  <div class="clear"></div>
</div>
</body>
</html>
