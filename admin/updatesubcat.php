<?php session_start();
 include("header.php");
 include("ClsDatabase.php");
 include("config.php");
$catid=$_GET["edid"];

if($_POST["Update"]== "Update")

				{
						$catid=$_POST["subcatid"];
						$catnm=$_POST["subcatname"];
						$cat=$_POST["cat"];
						$catst=$_POST["status"];
						
						$tblnm="tbl_subcatinfo";
						$query1=
							array(
									"subcat_id"=>$catid,
									"subcat_name"=>$catnm,
									"cat_name"=>$cat,
									"subcat_status"=>$catst
								);
					
						$con="subcat_id=$catid";
			
								
					$user = new ClsDatabase();
						
						$p1=$user->updateRecord($tblnm,$query1,$con);
						
									}
?>



  <!-- START .grid_9 - LEFT CONTENT -->  
  <div class="grid_9 cnt" id="left">
    <h1>Admin Profile</h1>
    <div id="lipsum">
      
<!-- WYSIWYG Div --><!--SYSTEM MESSAGE EXAMPLES-->        
      <?php if($p1!=NULL) { ?>
      <p class="notice">Notice or Alert Message<span>X</span></p>
      <p class="success">Success Message<span>X</span></p>
      <p class="info">Informative Message<span>X</span></p>
      <p class="error">Error Message<span>X</span></p>
      <?php } ?>
<!--END SYSTEM MESSAGE EXAMPLES--> 
     
<!--TABLE EXAMPLE-->      
      
      
<!--END TABLE EXAMPLE-->

<!--FORM ELEMENTS EXAMPLE-->  

<?

/*$query2=mysql_query("select * from tbl_catinfo ");
	
	while($record2=mysql_fetch_array($query2))
	{
	$cat_name=$record2["cat_name"];
	}*/
	

$query=mysql_query("select * from tbl_subcatinfo where subcat_id='".$catid."'");
	
	while($record=mysql_fetch_array($query))
	{
?>	
	      
     <form action="updatesubcat.php"   method="post" name="form1" class="nice" id="form1">
        <h2>Add Your Category</h2>
       <table width="500" border="1">
       <tr>
   
    <td><input name="subcatid" type="hidden" class="inputText"  id="subcatid" value="<?php echo $record["subcat_id"]; ?>"/></td>
  </tr>
 
  <tr>
    <td><br />Enter Your Sub Category:</td>
    <td ><br /><input name="subcatname" type="text" class="inputText"  id="subcatname" value="<?php echo $record["subcat_name"]; ?>"/></td>
  </tr>
  <tr>
    <td><br /> Category:</td>
    <td ><br />
	
	<select name="cat" class="inputText" id="cat">
           		<option value="Default">Select Category</option>
                <?php
				$qry = mysql_query("select * from tbl_catinfo");
				
				while($row = mysql_fetch_array($qry))
				{
				
				?>
                	<option value="<?php echo $row["cat_name"]; ?>" selected="selected" ><?php echo $row["cat_name"]; ?></option>
                <?php
				
			
			}
				
				?>
                </select>
	</td>
  	</tr>
    <tr>
      
			  
    <td><br /> Sub Category Status:</td>
    
 <td> <br /> <select  name=" status" class="inputText">
                <?php
                          echo $record["subcat_status"];
                          if($record["subcat_status"] == "Approved")
                          {
                          ?>
                         
                           <option value="Approved" selected="selected">Approved</option>
                           <option value="Pendding" >Pendding</option>
                      <?php
                          }
                          else
                          {
                          ?>
                            <option value="Approved" >Approved</option>
                           <option value="Pendding" selected="selected">Pendding</option>
                           <?php
                          }
						  
                          ?>
                      
 
     </select></td>
  </tr>
  </table>
   <?php
	  }
	  ?> 
        <center><input type="submit" name="Update" value="Update"></center>
    
      </form>  
        <p class="left">
          

</p>
        
        <p class="right">
        
        	
           
            <br clear="all" />
           
        </p>
        <div class="clear"></div>
        
  
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
      <p><span><a href="#">by Danny - 15/05/2009 - 13:24</a></span>This is a sample comment on one of our articles in the websiteâ€™s content part1...</p>
      <p><span><a href="#">by Danny - 15/05/2009 - 13:24</a></span>This is a sample comment on one of our articles in the websiteâ€™s content part1...</p>
      <p><span><a href="#">by Danny - 15/05/2009 - 13:24</a></span>This is a sample comment on one of our articles in the websiteâ€™s content part1...</p>            
      <a href="#" class="view_all">View full comment list.</a>    </div>  
	<br />
    <!-- PHOTOS WIDGET -->
    <div class="widget" id="photos">
      <h3 class="photos">Photos</h3>
      <p><a href="#"><img alt="image" src="../../dhruman/images/cnt_img_1.jpg" width="50" height="50" /></a><a href="#"><img alt="image" src="../../dhruman/images/cnt_img_2.jpg" width="50" height="50" /></a><a href="#"><img alt="image" src="../../dhruman/images/cnt_img_3.jpg" width="50" height="50" /></a><a href="#"><img alt="image" src="../../dhruman/images/cnt_img_4.jpg" width="50" height="50" /></a><a href="#"><img alt="image" src="../../dhruman/images/cnt_img_5.jpg" width="50" height="50" /></a><a href="#"><img alt="image" src="../../dhruman/images/cnt_img_6.jpg" width="50" height="50" /></a><a href="#"><img alt="image" src="../../dhruman/images/cnt_img_7.jpg" width="50" height="50" /></a><a href="#"><img alt="image" src="../../dhruman/images/cnt_img_8.jpg" width="50" height="50" /></a><a href="#"><img alt="image" src="../../dhruman/images/cnt_img_9.jpg" width="50" height="50" /></a></p>
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