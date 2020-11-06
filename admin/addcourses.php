<?php session_start();
include("header.php");
include("ClsDatabase.php");
include("config.php");
 
 

if($_POST["cat"]!=NULL)
{
	$cat=$_POST["cat"];
	$subcat=$_POST["sub_cat"];
	$corname=$_POST["corname"];
	$des=$_POST["editor1"];
	$upload=$_POST["upload"];
	$price=$_POST["doller"];
	
	$tablename="tbl_frontaddcourses";
	$query=array(
					"cat_name"=>$cat,
					"subcat_cat"=>$subcat,
					"cor_name"=>$corname,
					"cor_discreption"=>$des,
					"cor_uploading"=>$upload,
					"cor_prices"=>$price
			);
	$user=new ClsDatabase();
	//die(Print_r($query));
	$res = $user->insertRecord($tablename,$query);
	
	echo $res;
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


var cat=document.courses.cat;
var subcat=document.courses.sub_cat;
var corname=document.getElementById("corname");
var text=document.getElementById("editor1");

if(cat.value=="Default")
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
	else if (corname.value==null || corname.value=="")
	{
    alert("Courses name must be filled out");
	corname.value = "";
	corname.focus();
  	return false;
	}
	else if (text.value==null || text.value=="")
	{
    alert(" Description must be filled out");
	text.value = "";
	text.focus();
  	return false;
	}
	
	else
{
} 
}
	
    </script>


  <!-- START .grid_9 - LEFT CONTENT -->  
  <div class="grid_9 cnt" id="left">
    <h1>Courses</h1>
    <div id="lipsum">
      
<!-- WYSIWYG Div --><!--SYSTEM MESSAGE EXAMPLES-->        
      <?php /*?><?php if($res!=NULL) { ?>
     
      <p class="success">Successfully Insert<span>X</span></p>
    
      <?php } ?><?php */?>
      
    
     
       <h2>Add Courses</h2>
   
      <form action="addcourses.php" method="post" name="courses" class="nice" id="courses"  >
       
            <table>
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
                </select>           </td>
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
                </select>           </td>
           </tr>
           <tr>
          <td><br />Courses Name:</td>
           <td><br /> <input name="corname" type="text" class="inputText" id="corname"  /></td>
           </tr>
           <tr>
                   	
            	<td><br>Ingredients:</td>
                <td><br><input type="text" cols="30" id="editor1"  class="inputText" name="editor1" ></td>
        		</tr>
             	 <tr>
                <td><br>Courses Video</td>
                <td><br><input type="file" id="upload" class="inputText" name="upload" /></td>
                </tr>
                <tr>
                <td><br>Price</td>
                <td><br><input type="text" name="doller" class="inputText" id="doller" /></td>
                <td>
       </td></tr>       
       <tr><td>
       <center><input type="submit" name="submit" id="submit" value="submit" /></center></td></tr>
        </table>
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
