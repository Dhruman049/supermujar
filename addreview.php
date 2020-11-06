<?
session_start();
include("ClsDatabase.php");
include("config.php");
if($_POST["title"]!=NULL)
{	
	$title=$_POST["title"];
	$brand=$_POST["brand"];
	$product=$_POST["product"];
	$ed1=$_POST["editor1"];
	$cat=$_POST["cat"];
	$subcat=$_POST["sub_cat"];
	$tag=$_POST["tags"];
	$tablename="tbl_frontaddreview";
	$query=array
			(
				
				"rew_title"=>$title,		
				"rew_brand"=>$brand,
				"rew_product"=>$product,		
				"rew_text"=>$ed1,	
				"cat_name"=>$cat,
				"subcat_name"=>$subcat,
				"rew_tags"=>$tag
				);
				

	$user=new ClsDatabase();
	$res=$user->insertRecord($tablename,$query);
echo $res;
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
<script src="ckeditor/ckeditor.js"></script>
	<script src="ckeditor/samples/sample.js"></script>
	
	<meta name="ckeditor-sample-required-plugins" content="sourcearea">
	<meta name="ckeditor-sample-name" content="Full page support">
	<meta name="ckeditor-sample-group" content="Plugins">
	<meta name="ckeditor-sample-description" content="CKEditor inserted with a JavaScript call and used to edit the whole page from &lt;html&gt; to &lt;/html&gt;.">
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
	
    </script>
</head>

<body>
<div class="main_div">
  <div class="top_ad" align="center"><img src="images/top_ad.jpg" /></div>
<div class="top_headinglink">
    	<div style="float:left;"><img src="images/user_icon.png" align="absmiddle" /> <a href="#"><?php echo $_SESSION["sessionem"];?></a> | <a href="#">Visit Your Studio</a> | <a href="#">Messages (0)</a> | <a href="#">Friend Requests (0)</a></div>
  <a href="#">Log Out</a> | <a href="#">Take a Tour</a> | <a href="#">About</a> | <a href="#">Help</a></div>
    
    <div class="logo"><a href="index.html"><a href="index.html"><a href="index.html"><a href="index.html"><img src="images/logo.jpg" /></a></a></div>
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
            <li class="dropdown_item home" onmouseover="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onmouseout="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="home_and_food_recipes" rel="nofollow">&raquo; Recipes</a></li>
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
       		  <h2 class="dotted_account_header">Add an Review</h2><br />

           	  <div class="private_info">
                <p style="margin:0; padding-bottom:18px;">Did you just see an excellent movie or suffer your way through a boring  book? Share your first hand experience by writing a Review on a product  or service. To get started, click on the link below.</p>
                <!--   Title and text div start   -->
                <div class="lable_width" style="margin:5px 0px; margin-bottom:15px;">
                <form action="addreview.php" name="review" method="post">
                	<p class="account_header">Write a Review</p>
                    <div class="editer_div">
                   	  <div class="row">Title: 
         <input name="title" type="text" class="textfield" id="title" size="35" style="margin-left:65px;" /></div>
              <div class="note_div"><strong>NOTE:</strong>  Use the name of the product or service in your title.</div>
              <div class="row">Brand/Maker: 
        <input name="brand" type="text" class="textfield" id="brand" size="35" style="margin-left:17px;" /></div>
           <div class="row" style="width:315px;">Product/Title:
        <input name="product" type="text" class="textfield" id="product" size="35" style="margin-left:17px;" /></div>
        <div class="row_large" style="width:660px;">Enter Review Text <br />
        <textarea name="editor1" cols="100" rows="15" class="editor1" id="textarea"> </textarea><script>
			CKEDITOR.replace( 'editor1', {
				fullPage: true,
				extraPlugins: 'wysiwygarea'
			});

		</script></div>
                    </div>
                </div>
                <!--   Title and text div End   -->
                
                <!--   Select Category div start   -->
                <div class="lable_width" style="margin:5px 0px; margin-bottom:15px;">
               	  <p class="account_header">Select Category</p>
                    <div class="editer_div">
                   	  <div class="row_large" style="width:660px;">I would like this review to appear in: <br />
						<table width="660" border="0">
                          <tr>
                            <td width="215"><select name="cat" class="textfield" onchange="getCity(this.value);" id="cat">
           		<option value="">Select Category</option>
                <?php
				$qry = mysql_query("select * from tbl_catinfo");
				
				while($row = mysql_fetch_array($qry))
				{
				
				?>
                	<option value="<?php echo $row["cat_name"]; ?>" ><?php echo $row["cat_name"]; ?></option>
                <?php
				
			
			}
				
				?>
                </select></td>
                            <td width="215"><select name="sub_cat" class="textfield" id="sub_cat" >
           		<option value="">Select Sub Category</option>
                <?php
			$query=mysql_query("SELECT sub_id,sub_name FROM tbl_subcatinfo WHERE cat_name = '$state'");

			while($row1=mysql_fetch_array($query))
			{
			
			?>
		
				<option value=<?php echo $row1["subcat_name"];?> > <?php echo $row1["subcat_name"];?></option>
			<?php
			
			}
			?>
				
                </select></td>
                            <td width="216">&nbsp;</td>
                          </tr>
                        </table>
                      </div>
                  </div>
                </div>
                <!--   Select Category div End   -->
                
                <!--   Tag Div Start   -->
                <div class="lable_width" style="margin:5px 0px; margin-bottom:15px;">
               	  <p class="account_header">Tags <span style="margin-left:5px;">(Optional)</span></p>
                    <div class="editer_div">
                   	  <div class="row_large" style="width:660px;">Tags are key terms about your review that help people search for specific information. You can enter a single word or multiple words, such as "San Antonio" or "frequent flier." <br />
               	      <span class="row_large" style="width:660px;"><span class="row_large" style="width:660px;"><span class="row_large" style="width:660px;">
               	      <textarea name="tags" cols="100" rows="" class="textfield" id="tags"></textarea>
               	      </span></span></span></div>
                  </div>
                </div>
                <!--   Tag Div Start   -->
                    
                <div class="dot_line" style="height:5px; width:690px; float:left;"></div>
                
                <!--   Button Div start  -->
                <div align="right" class="lable_width" style="margin:5px; width:680px;">
                
                <center><input type="submit" name="submit" value="submit" /></center>
                
                <!--<a href="#" class="but_cancel" style="margin-right:12px;">Cancel</a> <a href="#" class="button" style="margin-right:12px;"><span>Save Draft</span></a> <a href="#" class="button"><span>Publish My Review</span></a>--></div>
                <!--   Button Div start  -->
                
              </div>
          	</div>
    	  </div>
          
</div>
        
        
        
  </div></form>
  
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
