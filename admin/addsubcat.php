<?php session_start();
 include("header.php");
 include("ClsDatabase.php");
 include("config.php");
 
 

if($_POST["subcat"]!=NULL)
{
	$ctnm=$_POST["subcat"];
	$a=$_POST["subcatname"];
	$tablename="tbl_subcatinfo";
	$query=
			array
			(
					"subcat_name"=>"$ctnm",
					"cat_name"=>"$a"
			);
	$user=new ClsDatabase();
	$res=$user->insertRecord($tablename,$query);
	
}


?>
<script>
	function validateForm()
{

var cat=document.getElementById("subcat");
var subcat=document.form1.subcatname;
 
  if (cat.value==null || cat.value=="")
  {
 	 alert("Sub Category must be filled out");
	 cat.value = "";
 	 cat.focus();
 	 return false;
  } 
    	else if( subcat.value== "Default")
	{
		alert("Category  must bi select!")
		 subcat.focus();
 	    return false;
	}
else
{
} 
}

</script>




  <!-- START .grid_9 - LEFT CONTENT -->  
  <div class="grid_9 cnt" id="left">
    <h1>Sub Category</h1>
    <div id="lipsum">
      
<!-- WYSIWYG Div --><!--SYSTEM MESSAGE EXAMPLES-->        
      <?php if($res!=NULL) { ?>
     
      <p class="success">Successfully Insert<span>X</span></p>
   
      <?php } ?>
<!--END SYSTEM MESSAGE EXAMPLES--> 
     
<!--TABLE EXAMPLE-->      
      
      
<!--END TABLE EXAMPLE-->

<!--FORM ELEMENTS EXAMPLE-->  


		
	      
     <form action="addsubcat.php"   method="post" name="form1" class="nice" id="form1" onsubmit="return validateForm()">
        <h2>Add Your  Sub Category</h2>
        <table width="500" border="1">
 
  <tr>
    <td><br />Enter Your Sub Category:</td>
    <td ><br /><input name="subcat"  class="inputText" type="text"  id="subcat" /></td>
  </tr>
  <tr style="">
    <td><br />Category:</td>
    <td ><br />
	
	<select name="subcatname"  class="inputText" id="subcatname">
           		<option value="Default">select Category</option>
                <?php
				$qry = "select cat_name from tbl_catinfo";
				$res = $user->selectRecord($qry);
				while($row = mysql_fetch_array($res))
				{
				?>
                	<option value="<?php echo $row['cat_name']; ?>"><?php echo $row['cat_name']; ?></option>
                <?php
				}
				?>
                </select>
	</td>
  	</tr>

        <p class="left">
          
</p>
        <p class="right">
        
        	
            <br clear="all" />
           
        </p>
        <div class="clear"></div>
        </table>
        <center><input type="submit" name="submit" value="submit"</center>
      </form>
  
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
