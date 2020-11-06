<?php 
include("ClsDatabase.php");
include("config.php"); 
include("header.php");
$user = new ClsDatabase();
//http://stackoverflow.com/questions/13336624/php-display-hide-dropdown-list-due-to-selection


if($_POST["txtpagename"]!=NULL)
{
   
 $pn=$_POST["txtpagename"]; 
 $ed=$_POST["editor1"]; 
 $pt=$_POST["pagetype"]; 
 $pc=$_POST["parentclass"];   
  
 
 $tablename="tbl_pageinfo";
 $query=array(
		"page_name"=>"$pn",
		"page_disc"=>"$ed",
		"page_type"=>"$pt",
		"page_parentpage"=>"$pc"
		);
 //  $user = new ClsDatabase();
 if($_POST["submit"] == "submit")
{
$result=$user->insertRecord($tablename,$query);
if ($result==1)
{
    ?>

<!-- <script language="javascript">
		window.location="addcmspage.php?iid=1";
	</script> -->
<?php

}
echo $result;
}
} 


if($_POST["update"] = "update")
{
$con = "page_id ='".$page_id."'";
	$res = $user->updateRecord($table,$data,$con);
	//$res = mysql_query($update);
	if($res!=NULL)
	{
	?>
<!--<script language="javascript">
		window.location="addcmspage.php?iid=3";
	</script> -->
  <?php
	}
}

?>

 <script src="ckeditor/ckeditor.js"></script>
	<script src="ckeditor/samples/sample.js"></script>
	
	<meta name="ckeditor-sample-required-plugins" content="sourcearea">
	<meta name="ckeditor-sample-name" content="Full page support">
	<meta name="ckeditor-sample-group" content="Plugins">
	<meta name="ckeditor-sample-description" content="CKEditor inserted with a JavaScript call and used to edit the whole page from &lt;html&gt; to &lt;/html&gt;.">
 
<!DOCTYPE html>
<!--
     <title>Startup Factory </title>
	<meta charset="utf-8">
        <script src="ckeditor/ckeditor.js"></script>
	<script src="ckeditor/samples/sample.js"></script>
	<link href="samples/sample.css" rel="stylesheet">
	<meta name="ckeditor-sample-required-plugins" content="sourcearea">
	<meta name="ckeditor-sample-name" content="Full page support">
	<meta name="ckeditor-sample-group" content="Plugins">
	<meta name="ckeditor-sample-description" content="CKEditor inserted with a JavaScript call and used to edit the whole page from &lt;html&gt; to &lt;/html&gt;.">
   -->

    
        <script language="javascript">
       function getval()
		{
			//alert ("hello");
			var str= document.form1.pagetype.value;
			test = document.getElementById("showme");
			if(str == "child")
			{
				
				test.style.display = "table-row";
			}
			if(str == "parent")
			{
				test.style.display = "none";
			}
		}
	
	
            function checkform()
		 { 
			
                var pagename=document.getElementById("txtpagename");
  		
                if(pagename.value=="" || pagename.value=="NULL")
	          {				
                     alert("Please Enter Page Name..!!");
                    pagename.focus();
                    return false;						
	          }
		  }
                  
	
		
		  
		  
        </script>
  <!-- START .grid_9 - LEFT CONTENT -->  
  <div class="grid_9 cnt" id="left">
 
    <div id="lipsum">
     
<!--SYSTEM MESSAGE EXAMPLES-->
 <?php if($p!=NULL) { ?>
      <p class="notice">Notice or Alert Message<span>X</span></p>
      <p class="success">Success Message<span>X</span></p>
      <p class="info">Informative Message<span>X</span></p>
      <p class="error">Error Message<span>X</span></p>
      <?php } ?>
   
 <?php 
$p = $_GET["iid"];       
if($p == 1)
{
?>
            <p class="success">Cms add successfully.....<span>X</span></p>
 <?php
 }
else if($p == 3)
{
    ?>
         <p class="success">Cms successfully Updated.....<span>X</span></p>   
<?php 

}
  ?>  
            
<!--END SYSTEM MESSAGE EXAMPLES--> 

<!--FORM ELEMENTS EXAMPLE-->  

        <?php

if($_GET["eid"] != NULL)
{
	$page_id = $_GET["eid"];
	$qry = "Select * from tbl_pageinfo where page_id = '".$page_id."'";
	$res = $user->selectRecord($qry);
	$data = mysql_fetch_array($res);
}
?>
<form action="addcmspage.php"  method="post" name="form1" onload="checkform()" class="nice" id="form1">
            <table border="5">
                 <tr>
          <td><label>Page Id:</label></td>
           <td> <input name="page_id" type="hidden" class="inputText" id="page_id" value="<?php echo $date['page_id']; ?>" /></td>
           </tr>
                <tr>
              <td><b><br><label>Page Name</label></td>
               <td><br><input name="txtpagename" type="text" class="inputText" id="txtpagename"/></td>
                </tr>
                
            	<p>    
                <label for="editor1">
                <tr>
            	<td><b><br><label>Page Description</label></td>
                <td><br><textarea cols="80" id="editor1" name="editor1" rows="10"></textarea></td>
             
                <script>
				
				CKEDITOR.replace( 'editor1', {
				fullPage: true,
				extraPlugins: 'wysiwygarea'
				});
				
                </script>
                </tr>
                </p>
                <p>
                <tr>
                <td><b><br><label>Page Type</label></td>
                <td><br><select name="pagetype" class="inputText" onchange="getval()"><br>
			<option value="parent">Parent</option>
                   	<option value="child" >Child</option>
                     </select></td>
                  </tr>
                  </p>
                  
                  <p>   
                  <tr id="showme" style="display:none">
                 <td><b><br><label>Select Parent Class</label></td>
                 <td><br><select name="parentclass" class="inputText">
                 <?php
				$qry = "select page_name from tbl_pageinfo";
				$res = $user->selectRecord($qry);
				while($row = mysql_fetch_array($res))
				{
				?><option value="<?php echo $row['page_name'];?>"> <?php echo $row['page_name']; ?></option>
                <?php
				}
				?>
				<!-- name of parent class -->
                     </select></td>
                 </tr>
                 </p>
<tr>
            <?php
            if($_GET["eid"]==NULL)
			{
			?>
            	<td colspan="2" align="right"><input class="green" type="submit" name="submit" value="submit"/></td>
            <?php
			}
			else
			{
			?>
            <td colspan="2" align="left"><input class="green" type="submit" name="update" value="update"/></td>
			<?php
            }
			?>
            </tr>
           <!--      <tr>
                 <td><br><br><p><input type="submit" onclick="checkform()" id="Insert" name="Insert" value="Insert"></p></td>
                 </tr> -->
            </table>

              <div class="clear"></div>
      </form>
    </div>
<!--END FORM ELEMENTS EXAMPLE-->     
    
<!--TABBED PANEL EXAMPLE-->     

<!-- END TABBED PANEL EXAMPLE-->   

   
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
      <p><img alt="image" src="images/cnt_img_1.jpg" width="50" height="50" /><img alt="image" src="images/cnt_img_2.jpg" width="50" height="50" /><img alt="image" src="images/cnt_img_3.jpg" width="50" height="50" /><img alt="image" src="images/cnt_img_4.jpg" width="50" height="50" /><img alt="image" src="images/cnt_img_5.jpg" width="50" height="50" /><img alt="image" src="images/cnt_img_6.jpg" width="50" height="50" /><img alt="image" src="images/cnt_img_7.jpg" width="50" height="50" /><img alt="image" src="images/cnt_img_8.jpg" width="50" height="50" /><img alt="image" src="images/cnt_img_9.jpg" width="50" height="50" /></p>
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