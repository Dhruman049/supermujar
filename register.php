<?
session_start();
include("ClsDatabase.php");
include("config.php");

if(isset($_REQUEST['Submit'])){
	// code for check server side validation
	if(empty($_SESSION['6_letters_code'] ) ||
		strcasecmp($_SESSION['6_letters_code'], $_POST['6_letters_code']) != 0)
	{  
		$msg="The Validation code does not match!";
	}else{
		// Captcha verification is Correct. Final Code Execute here!
	}
}	

if($_POST["fname"]!=NULL)
{
	$fn=$_POST["fname"];
	$ln=$_POST["lname"];
	$email=$_POST["email"];
	$pass=$_POST["password1"];
	$country=$_POST["country"];
	$state=$_POST["state"];
	$city=$_POST["city"];
	$zip=$_POST["zipcode"];
	$address=$_POST["address"];
	$birth=$_POST["udate"];
	$gender=$_POST["gender"];
	$sub=$_POST["subscription"];
	$pri=$_POST["privacy"];
	$tablename="tbl_frontregister";
	$query=array
			(
				"reg_fname"=>$fn,		
				"reg_lname"=>$ln,		
				"reg_email"=>$email,	
				"reg_password"=>$pass,	
				"reg_country"=>$country,	
				"reg_state"=>$state,	
				"reg_city"=>$city, 
				"reg_zipcode"=>$zip,	
				"reg_address"=>$address,	
				"reg_birthdate"=>$birth, 	
				"reg_gender"=>$gender,
				"reg_subscription"=>$sub,
				"reg_privacy"=>$pri
			);

	$user=new ClsDatabase();
	$res=$user->insertRecord($tablename,$query);
		$_SESSION["sessionregid"]="reg_id";
		$_SESSION["sessionfn"]="reg_fname";
echo $res;
}


?>
<style type="text/css">
.table{
	font-family:Arial, Helvetica, sans-serif;
	font-size:12px;
	color:#333;
	background-color:#E4E4E4;	
}
.table td{
	background-color:#F8F8F8;	
}
</style>
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
var country=document.reg.country;
var state=document.reg.state;
var city=document.reg.city;
var zip=document.getElementById("zipcode");
var address=document.getElementById("address");
var day=document.reg.day;
var month=document.reg.month1;
var year=document.reg.year1;
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
	else if(day.value=="Default")
	{
		alert("day must bi select!")
		day.focus();
 	    return false;
	}
	else if(month.value=="Default")
	{
		alert("month must bi select!")
		month.focus();
 	    return false;
	}
	else if(year.value=="Default")
	{
		alert("year must bi select!")
		year.focus();
 	    return false;
	}
	else if(!document.getElementById('Male').checked && !document.getElementById('Female').checked )
 {
 	 alert("Gender must be selected");
  	return false;
  } 

else
{
}

  
}

 
</script>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SuperMujer - Nos Preocupamos Por Ti</title>
<link href="css/main_style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" language="javascript" src="javascript/base_top_packaged.js"></script>
<script type="text/javascript" language="javascript" src="javascript/public_top_packaged.js"></script>
</head>

<body>
<div class="main_div">
  <div class="top_ad" align="center"><img src="images/top_ad.jpg" /></div>
  <div class="top_headinglink"> <a href="login.php"><strong>Log In</strong></a> | <a href="#">Take a Tour</a> | <a href="#">About</a> | <a href="#">Help</a></div>
  <div class="logo"><a href="index.html"></a><a href="index.html"></a><a href="index.html"><img src="images/logo.jpg" /></a></div>
  <div class="search_div"> Search :
    <input name="textfield" type="text" class="search_input" id="textfield" />
      <input name="button" type="submit" class="but_go" id="button" value="" />
    <a href="#" class="link" style="padding-left:5px;">View by Tag</a> </div>
  <!--  Menu start here  -->
  <div style="float:left; height:41px;  float:left; margin-top:12px; background:url(images/menu_bg.jpg) repeat-x top; width:960px; margin-top:10px; ">
    <div id="navigation" style="float:left;">
      <ul id="top_level">
        <li class="top_level_item nav_tab_category_0" id="tab_category_0"> <a href="#" class="top_level_nav_link" id="top_level_nav_link_category_0" onMouseOut="navMouseOut('top_level_nav_link_category_0', 'dropdown_container_category_0');" onMouseOver="navMouseOver('top_level_nav_link_category_0', 'dropdown_container_category_0',  'on_home');">relationships</a>
            <div style="display: none;" class="dropdown_container" id="dropdown_container_category_0" onMouseOver="navMouseOver('top_level_nav_link_category_0','dropdown_container_category_0','on_home')" onMouseOut="navMouseOut('top_level_nav_link_category_0','dropdown_container_category_0')">
              <ul class="dropdown_menu" id="dropdown_menu_category_0">
                <li class="dropdown_item home" onMouseOver="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onMouseOut="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="relationships_friendships" rel="nofollow">&raquo;  Friendships</a></li>
                <li class="dropdown_item home" onMouseOver="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onMouseOut="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="relationships_family" rel="nofollow">&raquo; Family</a></li>
                <li class="dropdown_item home" onMouseOver="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onMouseOut="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="relationships_dating" rel="nofollow">&raquo; Dating</a></li>
                <li class="dropdown_item home" onMouseOver="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home')&raquo;;" onMouseOut="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="relationships_partnership" rel="nofollow">&raquo; Partnership</a></li>
                <li class="dropdown_item home" onMouseOver="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onMouseOut="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="relationships_love_and_sex" rel="nofollow">&raquo; Love &amp; Sex</a></li>
                <li class="dropdown_item home" onMouseOver="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onMouseOut="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="relationships_moving_on" rel="nofollow">&raquo; Moving On</a></li>
                <li class="dropdown_item home" onMouseOver="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onMouseOut="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="relationships_reviews" rel="nofollow">&raquo; Reviews</a></li>
                <li class="dropdown_item home" onMouseOver="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onMouseOut="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="relationships_forums" rel="nofollow">&raquo; Forums</a></li>
              </ul>
            </div>
        </li>
        <li class="top_level_item nav_tab_category_1" id="tab_category_1"> <a href="#" class="top_level_nav_link" id="top_level_nav_link_category_1" onMouseOut="navMouseOut('top_level_nav_link_category_1', 'dropdown_container_category_1');" onMouseOver="navMouseOver('top_level_nav_link_category_1', 'dropdown_container_category_1',  'on_home');">parenting</a>
            <div style="display: none;" class="dropdown_container" id="dropdown_container_category_1" onMouseOver="navMouseOver('top_level_nav_link_category_1','dropdown_container_category_1','on_home')" onMouseOut="navMouseOut('top_level_nav_link_category_1','dropdown_container_category_1')">
              <ul class="dropdown_menu" id="dropdown_menu_category_1">
                <li class="dropdown_item home" onMouseOver="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onMouseOut="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="parenting_planning" rel="nofollow">&raquo; Planning</a></li>
                <li class="dropdown_item home" onMouseOver="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onMouseOut="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="parenting_pregnancy" rel="nofollow">&raquo; Pregnancy</a></li>
                <li class="dropdown_item home" onMouseOver="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onMouseOut="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="parenting_raising_kids" rel="nofollow">&raquo; Raising Kids</a></li>
                <li class="dropdown_item home" onMouseOver="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onMouseOut="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="parenting_classroom" rel="nofollow">&raquo; Classroom</a></li>
                <li class="dropdown_item home" onMouseOver="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onMouseOut="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="parenting_mom_s_time" rel="nofollow">&raquo; Mom's Time</a></li>
                <li class="dropdown_item home" onMouseOver="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onMouseOut="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="parenting_working_mom" rel="nofollow">&raquo; Working Mom</a></li>
              </ul>
            </div>
        </li>
        <li class="top_level_item nav_tab_category_2" id="tab_category_2"> <a href="#" class="top_level_nav_link" id="top_level_nav_link_category_2" onMouseOut="navMouseOut('top_level_nav_link_category_2', 'dropdown_container_category_2');" onMouseOver="navMouseOver('top_level_nav_link_category_2', 'dropdown_container_category_2',  'on_home');">home&nbsp;&amp;&nbsp;food</a>
            <div class="dropdown_container" id="dropdown_container_category_2" onMouseOver="navMouseOver('top_level_nav_link_category_2','dropdown_container_category_2','on_home')" onMouseOut="navMouseOut('top_level_nav_link_category_2','dropdown_container_category_2')">
              <ul class="dropdown_menu" id="dropdown_menu_category_2">
                <li class="dropdown_item home" onMouseOver="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onMouseOut="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="recipies.php" class="home" id="home_and_food_recipes" rel="nofollow">&raquo; Recipes</a></li>
                <li class="dropdown_item home" onMouseOver="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onMouseOut="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="home_and_food_cooking" rel="nofollow">&raquo; Cooking</a></li>
                <li class="dropdown_item home" onMouseOver="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onMouseOut="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="home_and_food_keeping_house" rel="nofollow">&raquo; Keeping House</a></li>
              </ul>
            </div>
        </li>
        <li class="top_level_item nav_tab_category_3" id="tab_category_3"> <a href="#" class="top_level_nav_link" id="top_level_nav_link_category_3" onMouseOut="navMouseOut('top_level_nav_link_category_3', 'dropdown_container_category_3');" onMouseOver="navMouseOver('top_level_nav_link_category_3', 'dropdown_container_category_3',  'on_home');">body&nbsp;&amp;&nbsp;soul</a>
            <div class="dropdown_container" id="dropdown_container_category_3" onMouseOver="navMouseOver('top_level_nav_link_category_3','dropdown_container_category_3','on_home')" onMouseOut="navMouseOut('top_level_nav_link_category_3','dropdown_container_category_3')">
              <ul class="dropdown_menu" id="dropdown_menu_category_3">
                <li class="dropdown_item home" onMouseOver="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onMouseOut="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="body_and_soul_staying_healthy" rel="nofollow">&raquo; Staying Healthy</a></li>
                <li class="dropdown_item home" onMouseOver="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onMouseOut="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="body_and_soul_illness" rel="nofollow">&raquo; Illness</a></li>
                <li class="dropdown_item home" onMouseOver="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onMouseOut="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="body_and_soul_emotional_well_being" rel="nofollow">&raquo; Emotional Well-Being</a></li>
              </ul>
            </div>
        </li>
        <li class="top_level_item nav_tab_category_4" id="tab_category_4"> <a href="#" class="top_level_nav_link" id="top_level_nav_link_category_4" onMouseOut="navMouseOut('top_level_nav_link_category_4', 'dropdown_container_category_4');" onMouseOver="navMouseOver('top_level_nav_link_category_4', 'dropdown_container_category_4',  'on_home');">travel</a>
            <div class="dropdown_container" id="dropdown_container_category_4" onMouseOver="navMouseOver('top_level_nav_link_category_4','dropdown_container_category_4','on_home')" onMouseOut="navMouseOut('top_level_nav_link_category_4','dropdown_container_category_4')">
              <ul class="dropdown_menu" id="dropdown_menu_category_4">
                <li class="dropdown_item home" onMouseOver="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onMouseOut="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="travel_family" rel="nofollow">&raquo; Family</a></li>
                <li class="dropdown_item home" onMouseOver="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onMouseOut="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="travel_romantic" rel="nofollow">&raquo; Romantic</a></li>
                <li class="dropdown_item home" onMouseOver="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onMouseOut="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="travel_single" rel="nofollow">&raquo; Single</a></li>
              </ul>
            </div>
        </li>
        <li class="top_level_item nav_tab_category_5" id="tab_category_5"> <a href="#" class="top_level_nav_link" id="top_level_nav_link_category_5" onMouseOut="navMouseOut('top_level_nav_link_category_5', 'dropdown_container_category_5');" onMouseOver="navMouseOver('top_level_nav_link_category_5', 'dropdown_container_category_5',  'on_home');">style</a>
            <div class="dropdown_container" id="dropdown_container_category_5" onMouseOver="navMouseOver('top_level_nav_link_category_5','dropdown_container_category_5','on_home')" onMouseOut="navMouseOut('top_level_nav_link_category_5','dropdown_container_category_5')">
              <ul class="dropdown_menu" id="dropdown_menu_category_5">
                <li class="dropdown_item home" onMouseOver="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onMouseOut="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="style_fashion" rel="nofollow">&raquo; Fashion</a></li>
                <li class="dropdown_item home" onMouseOver="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onMouseOut="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="style_beauty" rel="nofollow">&raquo;Beauty</a></li>
              </ul>
            </div>
        </li>
        <li class="top_level_item nav_tab_category_6" id="tab_category_6"> <a href="#" class="top_level_nav_link" id="top_level_nav_link_category_6" onMouseOut="navMouseOut('top_level_nav_link_category_6', 'dropdown_container_category_6');" onMouseOver="navMouseOver('top_level_nav_link_category_6', 'dropdown_container_category_6',  'on_home');">career&nbsp;&amp;&nbsp;money</a>
            <div class="dropdown_container" id="dropdown_container_category_6" onMouseOver="navMouseOver('top_level_nav_link_category_6','dropdown_container_category_6','on_home')" onMouseOut="navMouseOut('top_level_nav_link_category_6','dropdown_container_category_6')">
              <ul class="dropdown_menu" id="dropdown_menu_category_6">
                <li class="dropdown_item home" onMouseOver="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onMouseOut="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="career_and_money_work" rel="nofollow">&raquo; Work</a></li>
                <li class="dropdown_item home" onMouseOver="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onMouseOut="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="career_and_money_learning" rel="nofollow">&raquo; Learning</a></li>
                <li class="dropdown_item home" onMouseOver="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onMouseOut="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="career_and_money_planning" rel="nofollow">&raquo; Planning</a></li>
              </ul>
            </div>
        </li>
        <li class="top_level_item nav_tab_category_7" id="tab_category_7"> <a href="#" class="top_level_nav_link" id="top_level_nav_link_category_7" onMouseOut="navMouseOut('top_level_nav_link_category_7', 'dropdown_container_category_7');" onMouseOver="navMouseOver('top_level_nav_link_category_7', 'dropdown_container_category_7',  'on_home');">play</a>
            <div class="dropdown_container" id="dropdown_container_category_7" onMouseOver="navMouseOver('top_level_nav_link_category_7','dropdown_container_category_7','on_home')" onMouseOut="navMouseOut('top_level_nav_link_category_7','dropdown_container_category_7')">
              <ul class="dropdown_menu" id="dropdown_menu_category_7">
                <li class="dropdown_item home" onMouseOver="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onMouseOut="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="play_words" rel="nofollow">&raquo; Words</a></li>
                <li class="dropdown_item home" onMouseOver="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onMouseOut="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="play_entertainment" rel="nofollow">&raquo; Entertainment</a></li>
                <li class="dropdown_item home" onMouseOver="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onMouseOut="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="play_that_s_funny" rel="nofollow">&raquo;That's Funny</a></li>
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
    <div class="left_maindiv">
      <div class="main_register_div">
        <div class="main_form_div">
          <h2 class="dotted_header">Register</h2>
          <p>Just complete the information below, click "join SuperMujer" and you'll be in.</p>
          <!--	<p class="error">Error</p>-->
          <div class="register_member">Already a Member? <a href="login.php" class="all_link">Login</a></div>
          <div class="required_field"><span class="red">*</span> Indicates required field</div>
          <!--  Private Information Div Start Here  -->
          <div class="private_info">
          <div class="header_txt">Personal Information </div>
          <form action="register.php" method="post" class="nice" name="reg" onSubmit="return validateForm()">
            <div class="row">
              <div class="label"> <span class="red">*</span> First Name :</div>
              <input type="text" name="fname" id="fname" class="textfield" size="25" />
            </div>
            <div class="row">
              <div class="label"> <span class="red">*</span> Last Name :</div>
              <input type="text" name="lname" id="lname" class="textfield" size="25" />
            </div>
            <div class="row">
              <div class="label"> <span class="red">*</span> Email Address:</div>
              <input type="text" name="email" id="email" class="textfield" size="25" />
            </div>
            <div class="row">
              <div class="label"> <span class="red">*</span> Confirm Email Address :</div>
              <input type="text" name="cemail" id="cemail"class="textfield" size="25" />
            </div>
            <div class="row">
              <div class="label"> <span class="red">*</span> Password :</div>
              <input type="password" name="password1" id="password1" class="textfield" size="25" />
            </div>
            <div class="row">
              <div class="label"> <span class="red">*</span> Confirm Password:</div>
              <input type="password" name="cpassword" id="cpassword" class="textfield" size="25" />
            </div>
            <div class="row">
              <div class="label"> <span class="red">*</span> Country :</div>
              <select name="country" id="country" class="textfield" onChange="getState(this.value)" >
                <option selected="" value="Default">Select Country</option>
                <?php
			$que=mysql_query("select * from tbl_countryinfo");
			while($row=mysql_fetch_array($que))
			{
               
			?>
                <option value="<?php echo $row["country_name"];?>"> <?php echo $row["country_name"];?></option>
                <?php
			
			}
                ?>
              </select>
            </div>
            <div class="row" style="float:left;">
              <div class="label"> <span class="red">*</span> State :</div>
              <select name="state" id="state"class="textfield" onChange="getCity(this.value)">
                <option selected="" value="Default">Select State</option>
                <?php
			$que1=mysql_query("select state_id,state_name from tbl_stateinfo where country_name = '$country'");
			while($row=mysql_fetch_array($que1))
			{
                        
			?>
                <option value=<?php echo $row["state_name"];?> > <?php echo $row["state_name"];?></option>
                <?
			}
                        ?>
              </select>
            </div>
            <div class="row">
              <div class="label"> <span class="red">*</span> City :</div>
              <select name="city" class="textfield" id="city" >
                <option selected="" value="Default">Select City</option>
                <?php
			$que2=mysql_query("SELECT city_id,city_name FROM tbl_cityinfo WHERE state_name = '$state'");
			while($row1=mysql_fetch_array($que2))
			{
			if($row1["city_name"]) 
			{
			?>
                <option value=<?php echo $row1["city_name"];?> > <?php echo $row1["city_name"];?></option>
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
              </select>
            </div>
            <div class="row">
              <div class="label"> <span class="red">*</span> Zip Code:</div>
              <input type="text" name="zipcode" id="zipcode"class="textfield" size="25" />
            </div>
            <div class="row">
              <div class="label"> <span class="red">*</span> Address :</div>
              <textarea name="address"  class="textfield" id="address"></textarea>
            </div>
            <div class="row">
              <div class="label"> <span class="red">*</span> Date of Birth :</div>
              <input id="udate" type="text" name="udate" class="textfield" />
              <img src="images/iconCalendar.gif" 
               onclick="javascript:NewCssCal('udate','yyyymmdd')" style="cursor:pointer"/> </div>
            <div class="row" >
              <div class="label"> <span class="red">*</span> Gender :</div>
              <div style="width:24px; float:left;">
                <input type="radio" name="gender" value="Male" id="Male"style="border:none;" />
              </div>
              <div style="width:55px; float:left;">Female </div>
              <div style="width:24px; float:left;">
                <input type="radio" name="gender" value="Female" id="Female" style="border:none;" />
              </div>
              <div style="width:55px; float:left;">Male</div>
            </div>
            </div>
            <!--  Private Information Div End Here  -->
            <!--  Public Information Div Start Here  -->
            <!--  Public Information Div Start Here  -->
            <div class="private_info">
              <div class="header_txt"> free Newsletter subscription </div>
              <div class="row_line">
                <div class="label1"><strong>SuperMujer  Newsletter</strong></div>
                <input name="subscription" id="subscription"type="checkbox" value="true" style="border:none;"/>
                Sure, Sign me up!</div>
            </div>
            <div class="private_info">
            <div class="header_txt">Terms & Conditions and Privacy</div>
            <div class="row_line">
              <div class="label1">SuperMujer <strong>does not claim ownership</strong><br />
                of anything you write or submit.</div>
              <input name="privacy" id="privacy" type="checkbox" value="true" onClick="if(!this.form.checkbox.checked){alert('You must agree to the terms first.');return false}" />
              I accept the <a href="#" class="all_link">Terms &amp; Conditions and Privacy Policy</a></div>
            
            <div class="row_line" >
             <div class="label1"><strong>Security Check</strong><br />
              Type the code from the image </div>
              <?php if(isset($msg)){?>
    <tr>
      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
    </tr>
				<?php } ?> 
            <div style="float:left;"><img src="captcha_code_file.php?rand=<?php echo rand();?>" id='captchaimg' style="padding-bottom:10px;" /><br />
                <input type="text" name="6_letters_code" id="6_letters_code" class="textfield" />
                 <br>
        Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh
            </div>
            <div class="row_large" style="padding-top:10px; height:160px;">
            <div class="label1">&nbsp;</div>
            <p>
              <input type="submit" name="submit" value="Join Super Mujer"  />
              <!--<a href="#" class="button" onClick="validateForm()"><span>Join Super Mujer</span></a>-->
            </p>
          </form>
          <script type='text/javascript'>
function refreshCaptcha()
{
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script> 
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<div class="right_maindiv">
        	<div class="comein" align="center">           	  <span class="comein_tittle">Why Register?
           	  </span>
        	  <br />
        	
        	  <span class="comein_txt"><strong>With a free membership you</strong>
        	  </span>
        	  <div class="comein_txt" style="width:180px;margin-top:5px; padding-left:15px;" align="left">                › Submit a story
                <br />
                ›  Share a review                  <br />
                ›  Join a forum<br />
                ›  Create a profile page                  <br />
                ›  Comment on stories<br />
              ›  Rating on stories   </diV>    	  
        	</div>
            <div class="v_ad" align="center"><a href="#"><img src="images/v_ad.jpg" width="124" height="604" /></a></div>
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
     Copyright &copy; 2013, SuperMuher. All Rights Reserved  	</div>
  <!--  Footer Section start here  -->
</div>
</body>
</html>