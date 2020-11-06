<?php include("header.php");
session_start();
  
   
 $name=$_SESSION["sessionun"];
 $pass=$_SESSION["sessionpw"];
 $cp=$_POST["textfield"];
 $np=$_POST["admin_password"];
 $cnp=$_POST["admin_cpassword"];

 

	
	 include("ClsDatabase.php");
	 include("config.php");
	if($cp == $pass)
	{
		if($np == $cnp)
		{
			$query1="UPDATE tbl_admininfo SET admin_password = '".$_POST["admin_password"]."' WHERE     				         admin_uname='".$name."'";
			$result =mysql_query($query1); 
			
		}
	}
	?>
<script>
function validateForm()
{
var cupass=document.getElementById("textfield");
var pass=document.getElementById("admin_password");
var cpass=document.getElementById("admin_cpassword");

if (cupass.value==null || cupass.value=="")
  {
 	 alert("Current Password must be filled out");
	 cupass.value = "";
 	 cupass.focus();
 	 return false;
  } 
else if (pass.value==null || pass.value=="")
  {
 	 alert("Password must be filled out");
	 pass.value = "";
 	 pass.focus();
 	 return false;
  }   
 
  
else if (cpass.value==null || cpass.value=="")
  {
	  alert("Confirm Password must be filled out");
	   cpass.value = "";
 	 cpass.focus();
  	  return false;
  } 
  
else if (pass.value!=cpass.value)  
	{
		alert("Password does not match!")
		cpass.value = "";
 	   	
 	    return false;
	}
	else
{
}

  
}



 </script> 
 <div class="grid_9 cnt" id="left">
    <h1>Change Password</h1>
    <div id="lipsum">
  <!-- START .grid_9 - LEFT CONTENT -->
<!-- WYSIWYG Div --><!--SYSTEM MESSAGE EXAMPLES--> 
<?php if($result!=NULL) { ?>
     
      <p class="success">Success Message<span>X</span></p>
      
      <?php } ?>       
     
<!--END SYSTEM MESSAGE EXAMPLES--> 
     
<!--TABLE EXAMPLE-->      
      
      
<!--END TABLE EXAMPLE-->

<!--FORM ELEMENTS EXAMPLE-->  
<?php
$con=mysql_connect("localhost","root","")or die("invalid");
mysql_select_db("supermurjer",$con) or die("invalid");
$query="select * from tbl_admininfo WHERE admin_uname ='".$name."'";
$res=mysql_query($query);
while($result=mysql_fetch_array($res))
{?>          
      <p></p>
      <form action="adminchangepassword.php" method="post"  name="form1" class="nice" id="form1"  onSubmit ="return validateForm()">
        <h2>Update Your Password</h2>
        <table>
  <tr>
    <td><br />CurrentPassword:</td>
    <td><br /><input name="textfield" type="password" class="inputText" id="textfield" value="<?php echo $result["admin_password"]; ?>" /></td>
  </tr>
  <tr>
    <td><br />New Password: </td>
    <td><br /><input name="admin_password" type="password" class="inputText" id="admin_password" /></td>
  </tr>
  <tr>
    <td><br />Confirn New Password:</td>
    <td><br /><input name="admin_cpassword" type="password" class="inputText" id="admin_cpassword" /></td>
  </tr>
  
   <tr>
    <td></td>
    <td> <input type="submit"> </td>
  </tr>
</table>

        <p class="left">
          
          
            
          
            
		</p>
        <p class="right">
        
        	
            <br clear="all" />
           
        </p>
        <div class="clear"></div>
      </form>
      <?php }?> 
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
