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
						$scat=$_POST["subcat"];
						$ed1=$_POST["editor1"];
						$est=$_POST["esttime"];
						$ed2=$_POST["edit2"];
						$st=$_POST["status"];
						
						$tblnm="tbl_addrep";
						$query1=
							array(
									"rep_id "=>"$catid",
									"rep_name"=>"$catnm",
									"rep_cat "=>"$cat",
									"subcat_name"=>"$scat",
									"rep_ingre"=>"$ed1",
									"rep_esttime "=>"$est",
									"rep_procces"=>"$ed2",
									"rep_status"=>"$st"
								);
					
						$con="rep_id=$catid";
			
								
					$user = new ClsDatabase();
						
						$p1=$user->updateRecord($tblnm,$query1,$con);
						
					if($p1=="Successfully..")
					{
						header("location:manageaddrep.php");
					}
				}
?>


<script src="ckeditor/ckeditor.js"></script>
	<script src="ckeditor/samples/sample.js"></script>
	
	<meta name="ckeditor-sample-required-plugins" content="sourcearea">
	<meta name="ckeditor-sample-name" content="Full page support">
	<meta name="ckeditor-sample-group" content="Plugins">
	<meta name="ckeditor-sample-description" content="CKEditor inserted with a JavaScript call and used to edit the whole page from &lt;html&gt; to &lt;/html&gt;.">
    

  <!-- START .grid_9 - LEFT CONTENT -->  
  <div class="grid_9 cnt" id="left">
    <h1>Admin Profile</h1>
    <div id="lipsum">
      
<!-- WYSIWYG Div --><!--SYSTEM MESSAGE EXAMPLES-->        
      <?php if($p!=NULL) { ?>
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


$query=mysql_query("select * from tbl_forntartical where art_id='".$catid."'");
	
	while($record=mysql_fetch_array($query))	
	{ 
	
?>	
	      
     <form action="viewrecipies.php"   method="post" name="form1" class="nice" id="form1">
        <h2>Add Your Category:</h2>
       <table >
       <tr>
    
    <td><input name="artid" type="hidden"  id="artid" value="<?php echo $record["art_id"]; ?>"/></td>
  </tr>
 
  <tr>
    <td><br>Artical Name:</td>
    <td ><br><input name="artname" type="text" align="center" class="inputText" id="artname"
     value="<?php echo $record["art_name"]; ?>"/></td>
  </tr>
  				<tr>
                <td><br>Article:</td>
                <td><br>
                <textarea cols="80" id="editor1" name="editor1"><?php echo $record["art_decription"];?></textarea>
        	<script>
			CKEDITOR.replace( 'editor1', {
				fullPage: true,
				extraPlugins: 'wysiwygarea'
			});

		</script>
                </td></tr>
                <tr>
                <td><br>Photo:</td>
                <td><br><input type="text" name="esttime" id="esttime" value="<?php echo $record["art_image"];?>" class="inputText"/></td>
                </tr>
                
                   
        <tr>
     <?php 
			  if($_GET["edid"]!=NULL)
			  {
			  ?>
   <td><div><br>Artical Status:</div></td>
    
 <td><br><select name=" status" class="inputText">
                <?php
                          echo $record["rep_status"];
                          if($record["rep_status"] == "Approved")
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
						  }
                          ?>
                      
 
     </select></td>
  
  </tr>
  </table>
        <center><input type="submit" name="Update" value="Update"></center>
    
      </form>
      <?php
	  }
	  ?>   
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