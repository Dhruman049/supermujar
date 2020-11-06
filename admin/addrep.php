<?php session_start();
 include("header.php");
 include("ClsDatabase.php");
 include("config.php");
 
 

if($_POST["rep_name"]!=NULL)
{
	$rep=$_POST["rep_name"];
	$cat=$_POST["cat"];
	$subcat=$_POST["sub_cat"];
	$ed1=$_POST["editor1"];
	$est=$_POST["esttime"];
	$ed2=$_POST["edit2"];
	$tablename="tbl_addrep";
	$query=
			array
			(
					"rep_name"=>"$rep",
					"rep_cat"=>"$cat",
					"subcat_name"=>"$subcat",
					"rep_ingre"=>"$ed1",
					"rep_esttime"=>"$est",
					"rep_procces"=>"$ed2"
			);
	$user=new ClsDatabase();
	$res=$user->insertRecord($tablename,$query);
	
}


?>

<script>
function getXMLHTTP() { 
		var xmlhttp=false;	
		try{
			xmlhttp=new XMLHttpRequest();
		}
		catch(e)	{		
			try{			
				xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e){
				try{
				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
				}
				catch(e1){
					xmlhttp=false;
				}
			}
		}
		 	
		return xmlhttp;
    }
   
	function getCity(cat_name) {		
		var strURL="finsubcat.php?state="+cat_name;
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById("sub_cat").innerHTML=req.responseText;						
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}
				
	}
	function validateForm()
{

var rn=document.getElementById("rep_name");
var cat=document.frmpage.cat;
var subcat=document.frmpage.sub_cat;
var esst=document.getElementById("esttime");

if (rn.value==null || rn.value=="")
	{
    alert("First name must be filled out");
	rn.value = "";
	rn.focus();
  	return false;
	}
	else if(cat.value=="Default")
	{
		alert("Category must bi select!")
		cat.focus();
 	    return false;
	}
	else if(subcat.value=="Default")
	{
		alert("Sub Category must bi select!")
		subcat.focus();
 	    return false;
	}
	else if (esst.value==null || esst.value=="")
	{
    alert(" esstment time must be filled out");
	esst.value = "";
	esst.focus();
  	return false;
	}
	
	else
{
} 
}
	
    </script>


  <!-- START .grid_9 - LEFT CONTENT -->  
  <div class="grid_9 cnt" id="left">
    <h1>Recipes</h1>
    <div id="lipsum">
      
<!-- WYSIWYG Div --><!--SYSTEM MESSAGE EXAMPLES-->        
      <?php if($res!=NULL) { ?>
     
      <p class="success">Successfully Insert<span>X</span></p>
    
      <?php } ?>
      <script src="ckeditor/ckeditor.js"></script>
	<script src="ckeditor/samples/sample.js"></script>
	
	<meta name="ckeditor-sample-required-plugins" content="sourcearea">
	<meta name="ckeditor-sample-name" content="Full page support">
	<meta name="ckeditor-sample-group" content="Plugins">
	<meta name="ckeditor-sample-description" content="CKEditor inserted with a JavaScript call and used to edit the whole page from &lt;html&gt; to &lt;/html&gt;.">
    
     
       <h2>Add Recipes</h2>
   
      <form action="addrep.php" method="post" name="frmpage" class="nice" id="form1"  onsubmit="return validateForm()">
       
                <table>
                  <tr>
          <td><br />Recipies Name:</td>
           <td><br /> <input name="rep_name" type="text" class="inputText" id="rep_name" value="" /></td>
           </tr>
     	
           <tr>
           <td><br />Category:</td>
           <td><br />
            <select name="cat" class="inputText" onchange="getCity(this.value);" id="cat">
           		<option value="Default">Select Category</option>
                <?php
				$qry = mysql_query("select * from tbl_catinfo");
				
				while($row = mysql_fetch_array($qry))
				{
				
				?>
                	<option value="<?php echo $row["cat_name"]; ?>" ><?php echo $row["cat_name"]; ?></option>
                <?php
				
			
			}
				
				?>
                </select>
           		
           </td>
           </tr>
 
   
           <tr>
           <td><br />Sub Category:</td>
           <td><br />
            <select name="sub_cat" class="inputText" id="sub_cat" >
           		<option value="Default">Select Sub Category</option>
                <?php
			$query=mysql_query("SELECT sub_id,sub_name FROM tbl_subcatinfo WHERE cat_name = '$state'");

			while($row1=mysql_fetch_array($query))
			{
			
			?>
		
				<option value=<?php echo $row1["subcat_name"];?> > <?php echo $row1["subcat_name"];?></option>
			<?php
			
			}
			?>
				
                </select>
           		
           </td>
           </tr>
           <tr>
                   	
            	<td>Ingredients:</td>
                <td><br><textarea cols="80" id="editor1" name="editor1" rows="10"></textarea></td>
        		<td>
                
<script>
			CKEDITOR.replace( 'editor1', {
				fullPage: true,
				extraPlugins: 'wysiwygarea'
			});

		</script>
                </td></tr>
              
              
                <tr>
                <td><br>Estem Time:</td>
                <td><br><input type="text" name="esttime" id="esttime" class="inputText"/></td>
                </tr>
                <tr>
                <td><br><label>Recipies Process:</label></td>
                <td><br><textarea cols="80" id="edit2" name="edit2" rows="10"></textarea></td>
        		<td>
                
<script>
			CKEDITOR.replace( 'edit2', {
				fullPage: true,
				extraPlugins: 'wysiwygarea'
			});

		</script>
        </td></tr>
        
          
          
        
                
           		
        </table>
        <center><td><input type="submit" name="submit" value="Submit" /></td></center>
        <div class="clear"></div>
      </form>
    </div>

<!--END SYSTEM MESSAGE EXAMPLES--> 
     
<!--TABLE EXAMPLE-->      
      
      
<!--END TABLE EXAMPLE-->

<!--FORM ELEMENTS EXAMPLE-->  


		
	 

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
