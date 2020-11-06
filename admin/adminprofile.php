<?php session_start();
 include("header.php");
 include("ClsDatabase.php");
include("config.php");
$name=$_SESSION["sessionun"];
 
 
 			if($_POST['update']== "update")

				{
						$query1="UPDATE tbl_admininfo SET admin_fname = '".$_POST["admin_fname"]."',
						admin_lname='".$_POST["admin_lname"]."',
						admin_gender='".$_POST["admin_gender"]."',
						admin_country ='".$_POST["country"]."',
						admin_state ='".$_POST["state"]."',
						admin_city='".$_POST["city"]."',
						admin_email='".$_POST["admin_email"]."',
						admin_phone='".$_POST["admin_phone"]."',
						admin_address='".$_POST["admin_address"]."' 
		        		WHERE admin_uname='".$name."'";
						$res1=mysql_query($query1);
						
				}
			?>


  <!-- START .grid_9 - LEFT CONTENT -->  
  <div class="grid_9 cnt" id="left">
    <h1>Admin Profile</h1>
    <div id="lipsum">
      
<!-- WYSIWYG Div --><!--SYSTEM MESSAGE EXAMPLES-->        
      <?php if($res1!= NULL) { ?>
      
      <p class="success">Update Successfully<span>X</span></p>
      <?php
 }
  ?>
<!--END SYSTEM MESSAGE EXAMPLES--> 
     
<!--TABLE EXAMPLE-->      
      
      
<!--END TABLE EXAMPLE-->

<!--FORM ELEMENTS EXAMPLE-->  
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
	
function getState(country_name) {		
		
		var strURL="findstate.php?country="+country_name;
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('state').innerHTML=req.responseText;						
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}		
	}


function getCity(state_name) {		
		var strURL="findcity.php?state="+state_name;
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('city').innerHTML=req.responseText;						
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

var fn=document.getElementById("admin_fname");
var ln=document.getElementById("admin_lname");
var state=document.form1.state;
var city=document.form1.city;
var em=document.getElementById("admin_email");
var atpos=em.value.indexOf("@");
var dotpos=em.value.lastIndexOf(".");
var p5=document.getElementById("admin_phone");
var address=document.getElementById("admin_address");


if (/[^a-z]/gi.test(fn.value)) {
	alert ("Only characters are valid in First Name"); 
	fn.value = "";
	fn.focus();
	return false;
}
 else if (fn.value==null || fn.value=="")
	{
    alert("First name must be filled out");
  	return false;
	}
	else if (/[^a-z]/gi.test(ln.value))
 {
	alert ("Only characters are valid in Last Name"); // no spaces, full stops or anything but A-Z
	ln.value = "";
	ln.focus();
	return false;
 }
 else if (ln.value==null || ln.value=="")
  {
  	alert("Last name must be filled out");
 	return false;
  } 
  else if(state.value=="Default")
	{
		alert("state must bi select!")
		state.focus();
 	    return false;
	}
	else if(city.value=="Default")
	{
		alert("city must bi select!")
		city.focus();
 	    return false;
	}
	else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=em.value.length)
  {
 	 alert("Not a valid e-mail address");
	 em.value = "";
	 em.focus();
 	 return false;
  } 
  
  
  else if (isNaN(p5.value)) {
  	alert("The phone number is not appropriate.");
 	 p5.value = "";
 	 p5.focus();
  	return false;
 }  
else if (p5.value==null) //|| p4.value=="" || p4.value.length!=10 )
  {
 	 alert("Phone no. must be filled out");
  	 return false;
  }  
else if (p5.value == "") {
 	 alert("You didn't enter a phone number.");
 	 p5.value = "";
 	 p5.focus();
 	 return false;
 }
else if (!(p5.value.length == 10))
 {
	 alert("The phone number is the wrong length. \nPlease enter 10 digit mobile no.");
 	 p5.value = "";
 	 p5.focus();
  	 return false;
 }
	   else if (address.value==null || address.value=="")
	{
    alert("address must be filled out");
	  address.value = "";
 	 address.focus();
  	return false;
	}
		else
		{
} 
}


</script>



     
<?php
$con=mysql_connect("localhost","root","")or die("invalid");
mysql_select_db("supermurjer",$con) or die("invalid");
$query="select * from tbl_admininfo WHERE admin_uname='".$name."'";
$res=mysql_query($query);
while($result=mysql_fetch_array($res))
{
	$country = $result["admin_country"];
	$state = $result["admin_state"];
   $radio = $result["admin_gender"];
		if($radio == "Male" ){
			$male = "checked";
		}
		else{
			$female = "checked";
		}
		
		
	
?>     
      
     <form action="adminprofile.php"  onsubmit="return validateForm()" method="post" name="form1" class="nice" id="form1">
        <h2>Update Your Profile</h2>
        <table width="500" border="1">
  <tr>
    
    <td><input name="admin_id" type="hidden" id="admin_id" value="<?php echo $result["admin_id"]; ?>" /></td>
  </tr>
  <tr>
    <td ><br />First Name:</td>
    <td ><br /><input name="admin_fname"  class="inputText"type="text"  id="admin_fname" value="<?php echo $result["admin_fname"]; ?>"/></td>
  </tr>
  <tr>
    <td><br />Last Name:</td>
    <td><br /><input name="admin_lname" class="inputText" type="text"  id="admin_lname" value="<?php echo $result["admin_lname"]; ?>" /></td>
  </tr>
  <tr>
    <td><br />Gender:</td>
    <td><br /><input name="admin_gender" type="radio" class="" id="admin_gender" value="Male" <?php echo $male; ?>/><?php echo Male; ?>
    <input name="admin_gender" type="radio" class="" id="admin_gender" value="Female" <?php echo $female; ?>/><?php echo Female; ?></td>
  </tr>
  <tr>
  <td><br />Country:</td>
  <td><br /><select name="country" id="country" class="inputText" onChange="getState(this.value)" >
		<option  value="Default" >Select Country</option>
		<?php
			$que=mysql_query("select * from tbl_countryinfo");
			while($row=mysql_fetch_array($que))
			{
			if($row["country_name"] == $result["admin_country"])
			{
			?>
		
				<option value="<?php echo $row["country_name"];?>" selected="selected"> <?php echo $row["country_name"];?>
                </option>
			
			<?php
			}
			else
			{
               
			?>
		
				<option value="<?php echo $row["country_name"];?>"> <?php echo $row["country_name"];?></option>
			
			<?php
			}
			}
                ?>
		</select>
        </td>
  </tr>


	
    <tr>
    <td><br />State:</td>
    <td ><br />
			<select name="state" id="state" class="inputText" onChange="getCity(this.value)">
		<option value="Default" >Select State</option>
		
		<?php
			$que1=mysql_query("select state_id,state_name from tbl_stateinfo where country_name ='$country'");
			while($row2=mysql_fetch_array($que1))
			{
             if($row2["state_name"] == $result["admin_state"])
			{
					?>
		
				<option value="<?php echo $row2["state_name"];?> " selected="selected" > <?php echo $row2["state_name"];?>
                </option>
			<?php
			}
			else
			{           
			?>
		
				<option value=<?php echo $row2["state_name"];?> > <?php echo $row2["state_name"];?></option>
			<?
			}
			}
                        ?>
		</select>
 
	</td>
  	</tr>
    <tr>
    <td><br />city:</td>
    <td><br />				<select name="city" class="inputText" id="city" >
              <option  value="Default" selected="selected">Select City</option>
 					<?php
			$que2=mysql_query("SELECT city_id,city_name FROM tbl_cityinfo WHERE state_name = '$state'");
			while($row1=mysql_fetch_array($que2))
			{
			if($row1["city_name"] == $result["admin_city"])
			{
			?>
		
		<option value=<?php echo $row1["city_name"];?> selected="selected" > <?php echo $row1["city_name"];?></option>
			<?php
			}
			else
			{
			?>
                   <option value=<?php echo $row1["city_name"];?> > <?php echo $row1["city_name"];?></option>
			<?php
			}
			}
			?>
			
    </select>	</td>
    </tr>

  <tr>
    <td><br />E-mail:</td>
    <td><br /><input name="admin_email" class="inputText" type="text" id="admin_email" value="<?php echo $result["admin_email"]; ?>" /></td>
  </tr>
  <tr>
    <td><br />Phone no:</td>
    <td><br /><input name="admin_phone" class="inputText"type="text"  id="admin_phone" value="<?php echo $result["admin_phone"]; ?>" /></td>
  </tr>
  <tr>
    <td><br />Address:</td>
    <td><br /><textarea name="admin_address"  class="inputText"id="admin_address" ><?php echo $result["admin_address"]; ?>"</textarea></td>
  </tr>
</table>
<input type="submit"  align="middle" name="update" value="update" id="update"/>

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
