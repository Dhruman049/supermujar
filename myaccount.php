<?
session_start();
include("ClsDatabase.php");
include("config.php");

$name=$_SESSION["sessionem"];
//$regid=$_GET["edid"];

if($_POST["SaveChanges"]== "SaveChanges")

				{$id=$_POST["id"];
						$fn=$_POST["fname"];
	$ln=$_POST["lname"];
	$email=$_POST["email"];
	$pass=$_POST["password1"];
	$gender=$_POST["gender"];
	$birth=$_POST["udate"];
	$country=$_POST["country"];
	$state=$_POST["state"];
	$city=$_POST["city"];
	$zip=$_POST["zipcode"];
	$address=$_POST["address"];
	
	
	$tablename="tbl_frontregister";	
						
						
						$query1=
							array(
				"reg_id"=>$id,				
				"reg_fname"=>$fn,		
				"reg_lname"=>$ln,		
				"reg_email"=>$email,	
				"reg_password"=>$pass,
				"reg_gender"=>$gender,
				"reg_birthdate"=>$birth,	
				"reg_country"=>$country,	
				"reg_state"=>$state,	
				"reg_city"=>$city, 
				"reg_zipcode"=>$zip,	
				"reg_address"=>$address
								);
					
						$con="reg_email='".$name."'";
			
								
					$user = new ClsDatabase();
						
						$p1=$user->updateRecord($tablename,$query1,$con);
						
					if($p1=="Successfully..")
					{
						header("location:myaccount.php");
					}
				}
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SuperMujer - Nos Preocupamos Por Ti</title>
<link href="css/main_style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" language="javascript" src="javascript/base_top_packaged.js"></script>
<script type="text/javascript" language="javascript" src="javascript/public_top_packaged.js"></script>
<script type="text/javascript" src="javascript/show_hide.js"></script>

<script language="javascript" type="text/javascript" src="javascript/datetimepicker_css.js"></script>
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
function getsubcategory(country_name) {		
		
		var strURL="findcountry.php?cat="+country_name;
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('country').innerHTML=req.responseText;						
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}		
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

var fn=document.getElementById("fname");
var ln=document.getElementById("lname");
var em=document.getElementById("email");
var atpos=em.value.indexOf("@");
var dotpos=em.value.lastIndexOf(".");
var cm=document.getElementById("cemail");
var catpos=cm.value.indexOf("@");
var cdotpos=cm.value.lastIndexOf(".");
var pass=document.getElementById("password1");
var cpass=document.getElementById("cpassword");
var country=document.myacc.country;
var state=document.myacc.state;
var city=document.myacc.city;
var zip=document.getElementById("zipcode");
var address=document.getElementById("address");
var gender=document.getElementById("gender");
	
	
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
 else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=em.value.length)
  {
 	 alert("Not a valid e-mail address");
	 em.value = "";
	 em.focus();
 	 return false;
  } 
   else if (catpos<1 || cdotpos<catpos+2 || cdotpos+2>=cm.value.length)
  {
 	 alert("Not a valid e-mail address");
	 cm.value = "";
	 cm.focus();
 	 return false;
  } 
  else if (em.value!=cm.value)  
	{
		alert("Email does not match!")
		cm.value = "";
 	    cm.focus();
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
  	  return false;
  } 
  
else if (pass.value!=cpass.value)  
	{
		alert("Password does not match!")
		cpass.value = "";
 	   	return false;
	}
		
		else if(!document.getElementById('Male').checked && !document.getElementById('Female').checked )
 {
 	 alert("Gender must be selected");
  	return false;
  }
  	else if(country.value=="Default")
	{
		alert("country must bi select!")
		country.focus();
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

	else if (isNaN(zip.value)) {
  	alert("The zipcode number is not appropriate.");
 	 zip.value = "";
 	 zip.focus();
  	return false;
 }  
else if (zip.value==null) 
  {
 	 alert("zipcode must be filled out");
  	 zip.value = "";
 	 zip.focus();
	 return false;
  }  
else if (zip.value == "") {
 	 alert("You didn't enter a zipcode.");
 	 zip.value = "";
 	 zip.focus();
 	 return false;
 }
else if (!(zip.value.length == 6 ||zip.value.length == 5  ))
 {
	 alert("The zipcode is the wrong length. \nPlease enter 6 digit mobile no.");
 	 zip.value = "";
 	 zip.focus();
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

</head>

<body>
<div class="main_div">
  <div class="top_ad" align="center"><img src="images/top_ad.jpg" /></div>
    <div class="top_headinglink">
    	<div style="float:left;"><img src="images/user_icon.png" align="absmiddle" /> <a href="myaccount.php"><?php echo $_SESSION["sessionem"];?></a> | <a href="#">Visit Your Studio</a> | <a href="#">Messages (0)</a> | <a href="#">Friend Requests (0)</a></div>
  <a href="login.php">Log Out</a> | <a href="#">Take a Tour</a> | <a href="#">About</a> | <a href="#">Help</a></div>
    
    <div class="logo"><a href="index.html"><a href="index.html"><a href="index.html"><img src="images/logo.jpg" /></a></div>
  <div class="search_div"> Search : 
      <input name="textfield" type="text" class="search_input" id="textfield" />
      <input name="button" type="submit" class="but_go" id="button" value="" />
      <a href="#" class="link" style="padding-left:5px;">View by Tag</a> </div>
    
    <!--  Menu start here  -->
  <div style="float:left; height:41px;  float:left; margin-top:12px; background:url(images/menu_bg.jpg) repeat-x top; width:960px; margin-top:10px; ">
  <div id="navigation" style="float:left;">
	<ul id="top_level">
    	<li class="top_level_item nav_tab_category_0" id="tab_category_0">    	  
   	        <a href="#" class="top_level_nav_link" id="top_level_nav_link_category_0" onmouseout="navMouseOut('top_level_nav_link_category_0', 'dropdown_container_category_0');" onmouseover="navMouseOver('top_level_nav_link_category_0', 'dropdown_container_category_0',  'on_home');">relationships</a>
    	  <div style="display: none;" class="dropdown_container" id="dropdown_container_category_0" onmouseover="navMouseOver('top_level_nav_link_category_0','dropdown_container_category_0','on_home')" onmouseout="navMouseOut('top_level_nav_link_category_0','dropdown_container_category_0')">
    	    
    	    <ul class="dropdown_menu" id="dropdown_menu_category_0">
    	      <li class="dropdown_item home" onmouseover="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onmouseout="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="relationships_friendships" rel="nofollow">&raquo;  Friendships</a></li>
                <li class="dropdown_item home" onmouseover="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onmouseout="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="relationships_family" rel="nofollow">&raquo; Family</a></li>
                <li class="dropdown_item home" onmouseover="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onmouseout="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="relationships_dating" rel="nofollow">&raquo; Dating</a></li>
                <li class="dropdown_item home" onmouseover="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home')&raquo;;" onmouseout="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="relationships_partnership" rel="nofollow">&raquo; Partnership</a></li>
                <li class="dropdown_item home" onmouseover="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onmouseout="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="relationships_love_and_sex" rel="nofollow">&raquo; Love &amp; Sex</a></li>
                <li class="dropdown_item home" onmouseover="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onmouseout="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="relationships_moving_on" rel="nofollow">&raquo; Moving On</a></li>
                <li class="dropdown_item home" onmouseover="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onmouseout="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="relationships_reviews" rel="nofollow">&raquo; Reviews</a></li>
                <li class="dropdown_item home" onmouseover="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onmouseout="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="relationships_forums" rel="nofollow">&raquo; Forums</a></li>
			  </ul>
           	    </div>
  	  </li>
        <li class="top_level_item nav_tab_category_1" id="tab_category_1">              <a href="#" class="top_level_nav_link" id="top_level_nav_link_category_1" onmouseout="navMouseOut('top_level_nav_link_category_1', 'dropdown_container_category_1');" onmouseover="navMouseOver('top_level_nav_link_category_1', 'dropdown_container_category_1',  'on_home');">parenting</a>
          <div style="display: none;" class="dropdown_container" id="dropdown_container_category_1" onmouseover="navMouseOver('top_level_nav_link_category_1','dropdown_container_category_1','on_home')" onmouseout="navMouseOut('top_level_nav_link_category_1','dropdown_container_category_1')">
            
            <ul class="dropdown_menu" id="dropdown_menu_category_1">
              <li class="dropdown_item home" onmouseover="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onmouseout="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="parenting_planning" rel="nofollow">&raquo; Planning</a></li>
              <li class="dropdown_item home" onmouseover="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onmouseout="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="parenting_pregnancy" rel="nofollow">&raquo; Pregnancy</a></li>
              <li class="dropdown_item home" onmouseover="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onmouseout="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="parenting_raising_kids" rel="nofollow">&raquo; Raising Kids</a></li>
              <li class="dropdown_item home" onmouseover="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onmouseout="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="parenting_classroom" rel="nofollow">&raquo; Classroom</a></li>
              <li class="dropdown_item home" onmouseover="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onmouseout="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="parenting_mom_s_time" rel="nofollow">&raquo; Mom's Time</a></li>
              <li class="dropdown_item home" onmouseover="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onmouseout="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="parenting_working_mom" rel="nofollow">&raquo; Working Mom</a></li>
		      </ul>
       	      </div>
        </li>
      <li class="top_level_item nav_tab_category_2" id="tab_category_2">          <a href="#" class="top_level_nav_link" id="top_level_nav_link_category_2" onmouseout="navMouseOut('top_level_nav_link_category_2', 'dropdown_container_category_2');" onmouseover="navMouseOver('top_level_nav_link_category_2', 'dropdown_container_category_2',  'on_home');">home&nbsp;&amp;&nbsp;food</a>
        <div class="dropdown_container" id="dropdown_container_category_2" onmouseover="navMouseOver('top_level_nav_link_category_2','dropdown_container_category_2','on_home')" onmouseout="navMouseOut('top_level_nav_link_category_2','dropdown_container_category_2')">
          
          <ul class="dropdown_menu" id="dropdown_menu_category_2">
            <li class="dropdown_item home" onmouseover="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onmouseout="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="recipies.php" class="home" id="home_and_food_recipes" rel="nofollow">&raquo; Recipes</a></li>
              <li class="dropdown_item home" onmouseover="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onmouseout="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="home_and_food_cooking" rel="nofollow">&raquo; Cooking</a></li>
              <li class="dropdown_item home" onmouseover="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onmouseout="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="home_and_food_keeping_house" rel="nofollow">&raquo; Keeping House</a></li>
		    </ul>
   	      </div>
      </li>
    <li class="top_level_item nav_tab_category_3" id="tab_category_3">        <a href="#" class="top_level_nav_link" id="top_level_nav_link_category_3" onmouseout="navMouseOut('top_level_nav_link_category_3', 'dropdown_container_category_3');" onmouseover="navMouseOver('top_level_nav_link_category_3', 'dropdown_container_category_3',  'on_home');">body&nbsp;&amp;&nbsp;soul</a>
      <div class="dropdown_container" id="dropdown_container_category_3" onmouseover="navMouseOver('top_level_nav_link_category_3','dropdown_container_category_3','on_home')" onmouseout="navMouseOut('top_level_nav_link_category_3','dropdown_container_category_3')">
        
        <ul class="dropdown_menu" id="dropdown_menu_category_3">
          <li class="dropdown_item home" onmouseover="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onmouseout="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="body_and_soul_staying_healthy" rel="nofollow">&raquo; Staying Healthy</a></li>
              <li class="dropdown_item home" onmouseover="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onmouseout="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="body_and_soul_illness" rel="nofollow">&raquo; Illness</a></li>
              <li class="dropdown_item home" onmouseover="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onmouseout="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="body_and_soul_emotional_well_being" rel="nofollow">&raquo; Emotional Well-Being</a></li>
		    </ul>
   	      </div>
    </li>
    <li class="top_level_item nav_tab_category_4" id="tab_category_4">        <a href="#" class="top_level_nav_link" id="top_level_nav_link_category_4" onmouseout="navMouseOut('top_level_nav_link_category_4', 'dropdown_container_category_4');" onmouseover="navMouseOver('top_level_nav_link_category_4', 'dropdown_container_category_4',  'on_home');">travel</a>
      <div class="dropdown_container" id="dropdown_container_category_4" onmouseover="navMouseOver('top_level_nav_link_category_4','dropdown_container_category_4','on_home')" onmouseout="navMouseOut('top_level_nav_link_category_4','dropdown_container_category_4')">
        
        <ul class="dropdown_menu" id="dropdown_menu_category_4">
          <li class="dropdown_item home" onmouseover="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onmouseout="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="travel_family" rel="nofollow">&raquo; Family</a></li>
              <li class="dropdown_item home" onmouseover="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onmouseout="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="travel_romantic" rel="nofollow">&raquo; Romantic</a></li>
              <li class="dropdown_item home" onmouseover="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onmouseout="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="travel_single" rel="nofollow">&raquo; Single</a></li>
		    </ul>
   	      </div>
    </li>
    <li class="top_level_item nav_tab_category_5" id="tab_category_5">        <a href="#" class="top_level_nav_link" id="top_level_nav_link_category_5" onmouseout="navMouseOut('top_level_nav_link_category_5', 'dropdown_container_category_5');" onmouseover="navMouseOver('top_level_nav_link_category_5', 'dropdown_container_category_5',  'on_home');">style</a>
      <div class="dropdown_container" id="dropdown_container_category_5" onmouseover="navMouseOver('top_level_nav_link_category_5','dropdown_container_category_5','on_home')" onmouseout="navMouseOut('top_level_nav_link_category_5','dropdown_container_category_5')">
        
        <ul class="dropdown_menu" id="dropdown_menu_category_5">
          <li class="dropdown_item home" onmouseover="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onmouseout="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="style_fashion" rel="nofollow">&raquo; Fashion</a></li>
              <li class="dropdown_item home" onmouseover="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onmouseout="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="style_beauty" rel="nofollow">&raquo;Beauty</a></li>
		    </ul>
   	      </div>
    </li>
    <li class="top_level_item nav_tab_category_6" id="tab_category_6">        <a href="#" class="top_level_nav_link" id="top_level_nav_link_category_6" onmouseout="navMouseOut('top_level_nav_link_category_6', 'dropdown_container_category_6');" onmouseover="navMouseOver('top_level_nav_link_category_6', 'dropdown_container_category_6',  'on_home');">career&nbsp;&amp;&nbsp;money</a>
      <div class="dropdown_container" id="dropdown_container_category_6" onmouseover="navMouseOver('top_level_nav_link_category_6','dropdown_container_category_6','on_home')" onmouseout="navMouseOut('top_level_nav_link_category_6','dropdown_container_category_6')">
        
        <ul class="dropdown_menu" id="dropdown_menu_category_6">
          <li class="dropdown_item home" onmouseover="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onmouseout="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="career_and_money_work" rel="nofollow">&raquo; Work</a></li>
              <li class="dropdown_item home" onmouseover="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onmouseout="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="career_and_money_learning" rel="nofollow">&raquo; Learning</a></li>
              <li class="dropdown_item home" onmouseover="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onmouseout="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="career_and_money_planning" rel="nofollow">&raquo; Planning</a></li>
		    </ul>
   	      </div>
    </li>
    <li class="top_level_item nav_tab_category_7" id="tab_category_7">      <a href="#" class="top_level_nav_link" id="top_level_nav_link_category_7" onmouseout="navMouseOut('top_level_nav_link_category_7', 'dropdown_container_category_7');" onmouseover="navMouseOver('top_level_nav_link_category_7', 'dropdown_container_category_7',  'on_home');">play</a>
      <div class="dropdown_container" id="dropdown_container_category_7" onmouseover="navMouseOver('top_level_nav_link_category_7','dropdown_container_category_7','on_home')" onmouseout="navMouseOut('top_level_nav_link_category_7','dropdown_container_category_7')">
        
        <ul class="dropdown_menu" id="dropdown_menu_category_7">
          <li class="dropdown_item home" onmouseover="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onmouseout="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="play_words" rel="nofollow">&raquo; Words</a></li>
              <li class="dropdown_item home" onmouseover="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onmouseout="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="play_entertainment" rel="nofollow">&raquo; Entertainment</a></li>
              <li class="dropdown_item home" onmouseover="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onmouseout="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="play_that_s_funny" rel="nofollow">&raquo;That's Funny</a></li>
	        </ul>
        </div>
    </li>
  </ul>
</div>
  <div  style="float:right;font-size:13px; line-height:30px;color:#333; margin-right:5px;">Text Size: <a href="#" style="font-size:13px;color:#333; text-decoration:none;">A</a> &nbsp; <a href="#" style="font-size:15px;color:#333; text-decoration:none;">A<span style="text-transform:uppercase; font-size:12px;color:#333;">+</span></a> &nbsp; <a href="#" style="font-size:19px;color:#333; text-decoration:none;">A<span style="text-transform:uppercase; font-size:12px;">++</span></a></div>
  
  </div>
  <!-- This contains the hidden content for inline calls -->
		<div class="hidden">
			<div id='inline_example1' style='padding:10px; background:#fff; float:left;'>
			<p><strong>This content comes from a hidden element on this page.</strong></p>
			<p>The inline option preserves bound JavaScript events and changes, and it puts the content back where it came from when it is closed.</p>
			
			<p><strong>If you try to open a new ColorBox while it is already open, it will update itself with the new content.</strong></p>
			<p>Updating Content Example:</p>
		</div>
        </div>
<!-- This contains the hidden content for inline End-->
    <!--  Menu End here  -->
  <div class="main_contentdiv">
  		<div class="user_hader">
        	<div class="user_view_profile"><a href="#"><img src="images/but_view_profile.png" alt="#" /></a></div>	
       	  <div class="user_photo" align="center"><img src="images/user_photo.jpg" /><br /><a href="#">Change image</a></div>
          <div class="user_hd_div">
          	<h2 class="user_hd">My Studio</h2>
            <p class="user_hd_txt"><?php echo $_SESSION["sessionem"];?>, India</p>
          </div>
          
        </div>
  		<!--   Member Left Div Start  -->
  		<div class="member_left_maindiv">
        	<div class="account_div">
            	<p class="account_header">Manage</p>
                <ul class="account_link" style="margin:0; padding:0px; margin-top:10px;">
                	<li><a href="myaccount.php">My Account</a></li>
                    <li><a href="my_friend.html">My Friends</a></li>
                  	<li><a href="addartical.php">Add Article</a></li>
                    <li><a href="myartical.php?regid=<? echo $_SESSION["sessionem"]; ?>">My Articles</a></li>
                  <li><a href="addreview.php">My Reviews</a></li>
                  <li><a href="#">My Liked &amp; Favorites</a></li>
                    <li><a href="#">Notifications &amp; Newsletters</a></li>
                    <li><a href="#">Message Center</a></li>
                    <li><a href="#">Search Courses</a></li>
                </ul>
            </div>
            
            <div class="v_ad" align="center"><a href="#"><img src="images/v_ad.jpg" width="124" height="604" /></a></div>
            
        </div>
        <!--   Member Left Div End  -->
    	<div class="member_right_maindiv">
    	  <div class="right_account">
          
          	<div class="main_form_div">
       		  <h2 class="dotted_account_header">Manage Account Settings</h2>
            	<p>You can change your emails address, password and location here. Please be sure to click "Save Changes" at the bottom of the page.</p>
                <div class="required_field" style="margin-top:5px;"><span class="red">*</span> Indicates required field</div>
                
              <div class="private_info">
              <?php
$con=mysql_connect("localhost","root","")or die("invalid");
mysql_select_db("supermurjer",$con) or die("invalid");
$query="select * from tbl_frontregister WHERE reg_email ='".$name."'";
$res=mysql_query($query);
while($result=mysql_fetch_array($res))
{
	$country = $result["reg_country"];
	$state = $result["reg_state"];
   $radio = $result["reg_gender"];
		if($radio == "Male" ){
			$male = "checked";
		}
		else{
			$female = "checked";
		}
		
		
	
?>     
              <form action="myaccount.php" name="myacc" onsubmit="return validateForm()" method="post">
               	<p class="account_header">Personal Information</p>
                    <!--   Frist Name & Last Name Div  Start   -->	
                    <!-- <input type="hidden" class="textfield" name="id" id="id"size="25"
                     value="<?php /*?><?php echo $result["reg_id"]; ?><?php */?>"/></div>-->
                    <div class="lable_width">
                    <div class="row"><div class="smllabel"> <span class="red">*</span> First Name :</div>
                    <input type="text" class="textfield" name="fname" id="fname"size="25"
                     value="<?php echo $result["reg_fname"]; ?>"/></div>
                    
                    <div class="row"><div class="label"> <span class="red">*</span> Last Name :</div>
                    <input type="text" class="textfield" name="lname" id="lname" size="25"
                     value="<?php echo $result["reg_lname"]; ?>" /></div>
                    </div>
                    <!--   Frist Name & Last Name Div  End    -->
                    
                    <!--  Email Address Div Start -->
                    <div class="lable_width">
                    <div class="row"><div class="smllabel"> <span class="red">*</span> Email Address:</div>
                    <input type="text" class="textfield" size="25" name="email" id="email" 
                    value="<?php echo $result["reg_email"]; ?>" /></div>
                    
                    <div class="row"><div class="label"> <span class="red">*</span> Re-type Email Address :</div>
                    <input type="text" class="textfield" name="cemail" id="cemail" size="25" 
                    value="<?php echo $result["reg_email"]; ?>"/></div>
                    </div>
                     <!--  Email Address Div End here -->
                    
                    <!--  Password Div Start here -->
                <div id="password_hide" class="lable_width">
                  <div class="row" style="width:375px;"><div class="smllabel">Password :</div> 
                      <a class="text_link" style="cursor:pointer;" onclick="showdiv('password_show');">Click here</a>  to update your password</div>
                    </div>
                    
                    <div id="password_show" class="lable_width" style="display:none;">
                    <div class="row">
                      <div class="smllabel"> <span class="red">*</span> New Password :</div>
                      <input type="password" class="textfield" name="password1" id="password1" size="25"value="<?php echo $result				                       ["reg_password"]; ?>"/></div>
                    
                    <div class="row"><div class="label"> <span class="red">*</span> Re-Type Password:</div>
                    <input type="password" class="textfield" name="cpassword" id="cpassword" value="<?php echo $result
					["reg_password"]; ?>" size="25" /></div>
                </div>
                    <!--  Password Div End here -->
                    
                    <!--  Gender Div Start here -->
                <div class="row" ><div class="smllabel"> <span class="red">*</span> Gender :</div>
                <input type="radio" name="gender" id="Male" value="Male"
                 <?php echo $male; ?> style="border:none;" />
				<?php echo Male; ?>   
                
                 <input type="radio" name="gender" id="Female" value="Female" 
				 <?php echo $female; ?> style="border:none;" />
				 <?php echo Female; ?></div>
                      
                      <div class="row"><div class="label"> <span class="red">*</span> Date of Birth :</div>
              <input id="udate" type="text" name="udate" value="<?php echo $result["reg_birthdate"]; ?>" class="textfield"> 		             <img src="images/iconCalendar.gif" onclick="javascript:NewCssCal('udate','yyyymmdd')" style="cursor:pointer"/>
            </div>
            <!--  Gender Div End here -->
                      
                    <div class="row">
            		<div class="smllabel"> <span class="red">*</span> Country :</div>
           			 <select name="country" id="country" class="textfield" onChange="getState(this.value)" >
		<option  value="Default" >Select Country</option>
		<?php
			$que=mysql_query("select * from tbl_countryinfo");
			while($row=mysql_fetch_array($que))
			{
			if($row["country_name"] == $result["reg_country"])
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
          			</div>
                    
                    <div class="row" style="float:left;">
                   		<div class="label"> <span class="red">*</span> State :</div>
                   		<select name="state" id="state" class="textfield" onChange="getCity(this.value)">
		<option value="Default" >Select State</option>
		
		<?php
			$que1=mysql_query("select state_id,state_name from tbl_stateinfo where country_name = '$country'");
			while($row2=mysql_fetch_array($que1))
			{
             if($row2["state_name"] == $result["reg_state"])
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
                  	</div>
                   
            		<div class="row">
            			<div class="smllabel"> <span class="red">*</span> City :</div>
            			<select name="city" class="textfield" id="city" >
              <option  value="Default" selected="selected">Select City</option>
 					<?php
			$que2=mysql_query("SELECT city_id,city_name FROM tbl_cityinfo WHERE state_name = '$state'");
			while($row1=mysql_fetch_array($que2))
			{
			if($row1["city_name"] == $result["reg_city"])
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
			
    </select>		</div>
                    
                    <div class="row">
                   <div class="label"> <span class="red">*</span> Zip Code:</div>
                   <input type="text" class="textfield" name="zipcode" id="zipcode" size="25"
                    value="<?php echo $result["reg_zipcode"]; ?>" />
                   </div>
                <div class="row">
                   <div class="smllabel"> <span class="red">*</span> Address :</div>
                  <textarea name="address" cols="22" rows="3" class="textfield" id="address" ><?php echo $result["reg_address"]; ?></textarea>
                </div>
                   
                     <div class="lable_width">
                   	   <div class="row"><div class="smllabel">&nbsp;</div>
                       <!--<a href="#" class="button">-->
                       <input type="submit" name="SaveChanges" value="SaveChanges"  /><span></span><!--</a>--></div>
                     </div>
                     </form>
                     <?php }?> 
                     <div class="lable_width">
                     <p>Please be assured that SuperMujer will not share your email addresses with anyone. Read our <a href="#" class="text_link">Privacy Policy</a></p></div>
                     
                </div>
                
			</div>
    	  </div>
          
</div>
        
        
        
  </div>
  
	<!--  Footer Section start here  -->
   <div  class="foot_add" style="float:left;">
    
    <div class="foot_add_img"><a href="#"><img src="images/advertise_down.gif" width="906" height="76" border="0" /></a> </div>
    
    </div>
    
    
    
  	<div class="footer" align="center">  	  <a href="#">Home</a> &nbsp;| &nbsp;<a href="#">Who We Are</a> &nbsp;| &nbsp;<a href="#">Courses</a> &nbsp;| &nbsp;<a href="#">Relationships</a> &nbsp;| &nbsp;<a href="#">Parenting</a> &nbsp;| &nbsp;<a href="#">Home &amp; Food</a> &nbsp;| &nbsp;<a href="#">Body &amp; Soul</a> &nbsp;| &nbsp;<a href="#">Travel</a> &nbsp;| &nbsp;<a href="#">Style</a> &nbsp;| &nbsp;<a href="#">Money</a> &nbsp;| &nbsp;<a href="#">Play</a> &nbsp;| &nbsp;<a href="#"><img src="images/rss_footer.jpg" width="24" height="13" align="absmiddle" /></a><br />
  	  <br />
  	  <a href="#">About SuperMuher</a> &nbsp;| &nbsp;<a href="#">Help</a> &nbsp;| &nbsp;<a href="#">Terms &amp; Conditions</a> &nbsp;| &nbsp;<a href="#">Privacy Policy</a> &nbsp;| &nbsp;<a href="#">Sitemap</a> &nbsp;| &nbsp;<a href="#">Contact us</a>
  	  <br />
  	  <br />
     Copyright &copy; 2009, SuperMuher. All Rights Reserved  	</div>
  <!--  Footer Section start here  -->
</div>



</body>
</html>
