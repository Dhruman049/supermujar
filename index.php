<?
session_start();
include("ClsDatabase.php");
include("config.php");?>

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
    <div class="top_headinglink"><a href="register.php">Registration</a> | <a id="inline" href="login.php"><strong>Log In</strong></a> | <a href="#">Take a Tour</a> | <a href="#">About</a> | <a href="#">Help</a></div>
    
    <div class="logo"><a href="index.html"><a href="index.html"><img src="images/logo.jpg" /></a></div>
  <div class="search_div"> Search : 
      <input name="textfield" type="text" class="search_input" id="textfield" />
      <input name="button" type="submit" class="but_go" id="button" value="" />
      <a href="#" class="link" style="padding-left:5px;">View by Tag</a> </div>
    
    <!--  Menu start here  -->
  <div style="float:left; height:41px;  float:left; margin-top:12px; background:url(images/menu_bg.jpg) repeat-x top; width:960px; margin-top:10px; ">
  <div id="navigation" style="float:left;">
	<ul id="top_level">
    	<li class="top_level_item nav_tab_category_0" id="tab_category_0">
        	<div class="divider_inner">
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
		  </div>
		</li>
    <li class="top_level_item nav_tab_category_1" id="tab_category_1">
            <div class="divider_inner"><a href="#" class="top_level_nav_link" id="top_level_nav_link_category_1" onmouseout="navMouseOut('top_level_nav_link_category_1', 'dropdown_container_category_1');" onmouseover="navMouseOver('top_level_nav_link_category_1', 'dropdown_container_category_1',  'on_home');">parenting</a>
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
	</div>
    </li>
    <li class="top_level_item nav_tab_category_2" id="tab_category_2">
      <div class="divider_inner"><a href="#" class="top_level_nav_link" id="top_level_nav_link_category_2" onmouseout="navMouseOut('top_level_nav_link_category_2', 'dropdown_container_category_2');" onmouseover="navMouseOver('top_level_nav_link_category_2', 'dropdown_container_category_2',  'on_home');">home&nbsp;&amp;&nbsp;food</a>
      	<div class="dropdown_container" id="dropdown_container_category_2" onmouseover="navMouseOver('top_level_nav_link_category_2','dropdown_container_category_2','on_home')" onmouseout="navMouseOut('top_level_nav_link_category_2','dropdown_container_category_2')">
        	
           	<ul class="dropdown_menu" id="dropdown_menu_category_2">
               	<li class="dropdown_item home" onmouseover="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onmouseout="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="recipies.php" class="home" id="home_and_food_recipes" rel="nofollow">&raquo; Recipes</a></li>
                <li class="dropdown_item home" onmouseover="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onmouseout="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="home_and_food_cooking" rel="nofollow">&raquo; Cooking</a></li>
                <li class="dropdown_item home" onmouseover="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onmouseout="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="home_and_food_keeping_house" rel="nofollow">&raquo; Keeping House</a></li>
			</ul>
      	</div>
	</div>
    </li>
    <li class="top_level_item nav_tab_category_3" id="tab_category_3">
      <div class="divider_inner"><a href="#" class="top_level_nav_link" id="top_level_nav_link_category_3" onmouseout="navMouseOut('top_level_nav_link_category_3', 'dropdown_container_category_3');" onmouseover="navMouseOver('top_level_nav_link_category_3', 'dropdown_container_category_3',  'on_home');">body&nbsp;&amp;&nbsp;soul</a>
      	<div class="dropdown_container" id="dropdown_container_category_3" onmouseover="navMouseOver('top_level_nav_link_category_3','dropdown_container_category_3','on_home')" onmouseout="navMouseOut('top_level_nav_link_category_3','dropdown_container_category_3')">
        	
           	<ul class="dropdown_menu" id="dropdown_menu_category_3">
               	<li class="dropdown_item home" onmouseover="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onmouseout="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="body_and_soul_staying_healthy" rel="nofollow">&raquo; Staying Healthy</a></li>
                <li class="dropdown_item home" onmouseover="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onmouseout="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="body_and_soul_illness" rel="nofollow">&raquo; Illness</a></li>
                <li class="dropdown_item home" onmouseover="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onmouseout="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="body_and_soul_emotional_well_being" rel="nofollow">&raquo; Emotional Well-Being</a></li>
			</ul>
      	</div>
	</div>
    </li>
    <li class="top_level_item nav_tab_category_4" id="tab_category_4">
      <div class="divider_inner"><a href="#" class="top_level_nav_link" id="top_level_nav_link_category_4" onmouseout="navMouseOut('top_level_nav_link_category_4', 'dropdown_container_category_4');" onmouseover="navMouseOver('top_level_nav_link_category_4', 'dropdown_container_category_4',  'on_home');">travel</a>
      	<div class="dropdown_container" id="dropdown_container_category_4" onmouseover="navMouseOver('top_level_nav_link_category_4','dropdown_container_category_4','on_home')" onmouseout="navMouseOut('top_level_nav_link_category_4','dropdown_container_category_4')">
        	
           	<ul class="dropdown_menu" id="dropdown_menu_category_4">
               	<li class="dropdown_item home" onmouseover="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onmouseout="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="travel_family" rel="nofollow">&raquo; Family</a></li>
                <li class="dropdown_item home" onmouseover="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onmouseout="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="travel_romantic" rel="nofollow">&raquo; Romantic</a></li>
                <li class="dropdown_item home" onmouseover="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onmouseout="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="travel_single" rel="nofollow">&raquo; Single</a></li>
			</ul>
      	</div>
	</div>
    </li>
    <li class="top_level_item nav_tab_category_5" id="tab_category_5">
      <div class="divider_inner"><a href="#" class="top_level_nav_link" id="top_level_nav_link_category_5" onmouseout="navMouseOut('top_level_nav_link_category_5', 'dropdown_container_category_5');" onmouseover="navMouseOver('top_level_nav_link_category_5', 'dropdown_container_category_5',  'on_home');">style</a>
      	<div class="dropdown_container" id="dropdown_container_category_5" onmouseover="navMouseOver('top_level_nav_link_category_5','dropdown_container_category_5','on_home')" onmouseout="navMouseOut('top_level_nav_link_category_5','dropdown_container_category_5')">
        	
           	<ul class="dropdown_menu" id="dropdown_menu_category_5">
               	<li class="dropdown_item home" onmouseover="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onmouseout="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="style_fashion" rel="nofollow">&raquo; Fashion</a></li>
                <li class="dropdown_item home" onmouseover="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onmouseout="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="style_beauty" rel="nofollow">&raquo;Beauty</a></li>
			</ul>
      	</div>
	</div>
    </li>
    <li class="top_level_item nav_tab_category_6" id="tab_category_6">
      <div class="divider_inner"><a href="#" class="top_level_nav_link" id="top_level_nav_link_category_6" onmouseout="navMouseOut('top_level_nav_link_category_6', 'dropdown_container_category_6');" onmouseover="navMouseOver('top_level_nav_link_category_6', 'dropdown_container_category_6',  'on_home');">career&nbsp;&amp;&nbsp;money</a>
      	<div class="dropdown_container" id="dropdown_container_category_6" onmouseover="navMouseOver('top_level_nav_link_category_6','dropdown_container_category_6','on_home')" onmouseout="navMouseOut('top_level_nav_link_category_6','dropdown_container_category_6')">
        	
           	<ul class="dropdown_menu" id="dropdown_menu_category_6">
               	<li class="dropdown_item home" onmouseover="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onmouseout="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="career_and_money_work" rel="nofollow">&raquo; Work</a></li>
                <li class="dropdown_item home" onmouseover="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onmouseout="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="career_and_money_learning" rel="nofollow">&raquo; Learning</a></li>
                <li class="dropdown_item home" onmouseover="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onmouseout="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="career_and_money_planning" rel="nofollow">&raquo; Planning</a></li>
			</ul>
      	</div>
	</div>
    </li>
    <li class="top_level_item nav_tab_category_7" id="tab_category_7">
      <div class="divider_inner"><a href="#" class="top_level_nav_link" id="top_level_nav_link_category_7" onmouseout="navMouseOut('top_level_nav_link_category_7', 'dropdown_container_category_7');" onmouseover="navMouseOver('top_level_nav_link_category_7', 'dropdown_container_category_7',  'on_home');">play</a>
      <div class="dropdown_container" id="dropdown_container_category_7" onmouseover="navMouseOver('top_level_nav_link_category_7','dropdown_container_category_7','on_home')" onmouseout="navMouseOut('top_level_nav_link_category_7','dropdown_container_category_7')">
      	
       	  <ul class="dropdown_menu" id="dropdown_menu_category_7">
           	  <li class="dropdown_item home" onmouseover="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onmouseout="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="play_words" rel="nofollow">&raquo; Words</a></li>
              <li class="dropdown_item home" onmouseover="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onmouseout="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="play_entertainment" rel="nofollow">&raquo; Entertainment</a></li>
              <li class="dropdown_item home" onmouseover="this.setAttribute(htmlClassAttribute(),'dropdown_item on_home');" onmouseout="this.setAttribute(htmlClassAttribute(),'dropdown_item home');"><a href="#" class="home" id="play_that_s_funny" rel="nofollow">&raquo;That's Funny</a></li>
		  </ul>
      </div>
	</div>
    </li>
  </ul>
</div>
  <div  style="float:right;font-size:13px; line-height:30px;color:#333; margin-right:5px;">Text Size: <a href="#" style="font-size:13px;color:#333;">A</a> &nbsp; <a href="#" style="font-size:15px;color:#333;">A<span style="text-transform:uppercase; font-size:12px;color:#333;">+</span></a> &nbsp; <a href="#" style="font-size:19px;color:#333;">A<span style="text-transform:uppercase; font-size:12px;">++</span></a></div>
  
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
       	  <div class="top_cont_div">
          	<!--  Animated images div start  -->
            <div class="animated_div">
            <div id="content" class="">
      <div class="" style="padding-right:none;">
  
    <div class="component c_00">
      <div class="big_daddy_feature_article">
        <div style="display:none;" class="landscape" id="bigdaddy_feature_0">
          <div class="featured_image"> <a rel="nofollow" href="#"><img alt="name" class="photo" src="images/photo1.jpg" /></a> </div>
          <div class="featured_category" style="width:220px;"> <a title="Title" class="img_head" href="#">Lorem ipsum dolor 1</a><br />
              <br />
            By : <a title="Author name" class="red_blue" href="#">Jignesh Patel</a> <br />
              <br />
              <span class="txt">When Eat, Pray, Love author Elizabeth Gilbert went searching for pleasure, she headed to Rome, which turned out to be an excellent choice. Pleasure has been the focus of Roman life since ancient times when folks lounged around in the public baths...</span><br />
              <br />
              <span><a rel="nofollow" keep_space="true" class="red_org" href="#">Read more &gt;&gt;</a></span></div>
          <div class="float_clear"></div>
        </div>
        <div style="display:none;" class="landscape" id="bigdaddy_feature_1">
          <div class="featured_image"> <a rel="nofollow" href="#"><img alt="name" class="photo" src="images/photo2.jpg" /></a> </div>
          <div class="featured_category" style="width:220px;"> <a title="Title" class="img_head" href="#">Lorem ipsum dolor 2</a><br />
              <br />
            By : <a title="Author name" class="red_blue" href="#">Tejas Joshi</a> <br />
              <br />
              <span class="txt">When Eat, Pray, Love author Elizabeth Gilbert went searching for pleasure, she headed to Rome, which turned out to be an excellent choice. Pleasure has been the focus of Roman life since ancient times when folks lounged around in the public baths...</span><br />
              <br />
              <span><a rel="nofollow" keep_space="true" class="red_org" href="#">Read more &gt;&gt;</a></span></div>
          <div class="float_clear"></div>
        </div>
        <div style="display:none;" class="landscape" id="bigdaddy_feature_2">
          <div class="featured_image"> <a rel="nofollow" href="#"><img alt="Name" class="photo" src="images/photo3.jpg" /></a> </div>
          <div class="featured_category" style="width:220px;"> <a title="Title" class="img_head" href="#">Lorem ipsum dolor 3</a><br />
              <br />
            By : <a title="Author name" class="red_blue" href="#">Pritesh Brahmbhatt</a> <br />
              <br />
              <span class="txt">When Eat, Pray, Love author Elizabeth Gilbert went searching for pleasure, she headed to Rome, which turned out to be an excellent choice. Pleasure has been the focus of Roman life since ancient times when folks lounged around in the public baths...</span><br />
              <br />
              <span><a rel="nofollow" keep_space="true" class="red_org" href="#">Read more &gt;&gt;</a></span></div>
          <div class="float_clear"></div>
        </div>
        <div style="display:none;" class="landscape" id="bigdaddy_feature_3">
          <div class="featured_image"> <a rel="nofollow" href="#"><img alt="Name" class="photo" src="images/photo4.jpg" /></a> </div>
          <div class="featured_category" style="width:220px;"> <a title="Title" class="img_head" href="#">Lorem ipsum dolor 4</a><br />
              <br />
            By : <a title="Author name" class="red_blue" href="#">Manjur Hussain</a> <br />
              <br />
              <span class="txt">When Eat, Pray, Love author Elizabeth Gilbert went searching for pleasure, she headed to Rome, which turned out to be an excellent choice. Pleasure has been the focus of Roman life since ancient times when folks lounged around in the public baths...</span><br />
              <br />
              <span><a rel="nofollow" keep_space="true" class="red_org" href="#">Read more &gt;&gt;</a></span></div>
          <div class="float_clear"></div>
        </div>
        <div style="display:none;" class="landscape" id="bigdaddy_feature_4">
          <div class="featured_image"> <a rel="nofollow" href="#"><img alt="Name" class="photo" src="images/photo5.jpg" /></a> </div>
          <div class="featured_category" style="width:220px;"> <a title="Title" class="img_head" href="#">Lorem ipsum dolor 5</a><br />
              <br />
            By : <a title="Author name" class="red_blue" href="#">Kamal Patel</a> <br />
              <br />
              <span class="txt">When Eat, Pray, Love author Elizabeth Gilbert went searching for pleasure, she headed to Rome, which turned out to be an excellent choice. Pleasure has been the focus of Roman life since ancient times when folks lounged around in the public baths...</span><br />
              <br />
              <span><a rel="nofollow" keep_space="true" class="red_org" href="#">Read more &gt;&gt;</a></span></div>
        </div>
        <div id="bd_nav"> <a class="bd_nav_button pause" href="#" id="bd_nav_pause_off" onclick="startSlideShow('bigdaddy_feature_','bd_nav_',true); return false;" style="display:none"><img alt="Bd_pause_off" name="bd_pause_off" src="images/buttons/bd_pause_off.jpg" /></a> <a onclick="stopSlideShow('bd_nav_'); return false;" id="bd_nav_pause_on" href="#" class="bd_nav_button pause"><img alt="Bd_pause_on" name="bd_pause_on" src="images/buttons/bd_pause_on.jpg" /></a> <a class="bd_nav_button" href="#" id="bd_nav_4_off" onclick="showBDArticle('bigdaddy_feature_','bd_nav_',4,true); return false;" onmouseout="document.bd_5.src = 'images/buttons/bd_5_off.jpg'" onmouseover="document.bd_5.src = 'images/buttons/bd_5_on.jpg'"><img alt="Bd_5_off" name="bd_5" src="images/buttons/bd_5_off.jpg" /></a> <img alt="Bd_5_on" class="bd_nav_button" id="bd_nav_4_on" src="images/buttons/bd_5_on.jpg" style="display:none" /> <a class="bd_nav_button" href="#" id="bd_nav_3_off" onclick="showBDArticle('bigdaddy_feature_','bd_nav_',3,true); return false;" onmouseout="document.bd_4.src = 'images/buttons/bd_4_off.jpg'" onmouseover="document.bd_4.src = 'images/buttons/bd_4_on.jpg'"><img alt="Bd_4_off" name="bd_4" src="images/buttons/bd_4_off.jpg" /></a> <img alt="Bd_4_on" class="bd_nav_button" id="bd_nav_3_on" src="images/buttons/bd_4_on.jpg" style="display:none" /> <a class="bd_nav_button" href="#" id="bd_nav_2_off" onclick="showBDArticle('bigdaddy_feature_','bd_nav_',2,true); return false;" onmouseout="document.bd_3.src = 'images/buttons/bd_3_off.jpg'" onmouseover="document.bd_3.src = 'images/buttons/bd_3_on.jpg'"><img alt="Bd_3_off" name="bd_3" src="images/buttons/bd_3_off.jpg" /></a> <img alt="Bd_3_on" class="bd_nav_button" id="bd_nav_2_on" src="images/buttons/bd_3_on.jpg" style="display:none" /> <a class="bd_nav_button" href="#" id="bd_nav_1_off" onclick="showBDArticle('bigdaddy_feature_','bd_nav_',1,true); return false;" onmouseout="document.bd_2.src = 'images/buttons/bd_2_off.jpg'" onmouseover="document.bd_2.src = 'images/buttons/bd_2_on.jpg'"><img alt="Bd_2_off" name="bd_2" src="images/buttons/bd_2_off.jpg" /></a> <img alt="Bd_2_on" class="bd_nav_button" id="bd_nav_1_on" src="images/buttons/bd_2_on.jpg" style="display:none" /> <a class="bd_nav_button" href="#" id="bd_nav_0_off" onclick="showBDArticle('bigdaddy_feature_','bd_nav_',0,true); return false;" onmouseout="document.bd_1.src = 'images/buttons/bd_1_off.jpg'" onmouseover="document.bd_1.src = 'images/buttons/bd_1_on.jpg'"><img alt="Bd_1_off" name="bd_1" src="images/buttons/bd_1_off.jpg" /></a> <img alt="Bd_1_on" class="bd_nav_button" id="bd_nav_0_on" src="images/buttons/bd_1_on.jpg" style="display:none" />
            <div class="float_clear"></div>
        </div>
      </div>
      <div class="float_clear"></div>
</div>

<script type="text/javascript">
//<![CDATA[

var stop_flag = false;
var article_size = 5;
var selected = Math.min((article_size - 1), Math.floor(Math.random() * article_size));
article_id_array =
  new Array(77202,76680,59570,76736,76990);
article_name_array =
  new Array('','','','','');

showOneElementInArrayWithNav('bigdaddy_feature_','bd_nav_');

//]]>
</script>
  
  
       
      </div>
</div>
            
            </div>
            <!--  Animated images div End  -->
            
            <!--  Meet a Member div start  -->
            <div class="meet_member">
           	  <div class="meet_member_top">Meet a Member</div>
                <div class="meet_member_mid">                  <a href="#" class="member_headr"><strong>Raspberry Cheesecake</strong></a><br /> 
                  <span class="member_txt"><img src="images/member_img.gif" width="87" height="63" class="member_img" style="float:left; margin-top:3x;" /> Lorem ipsum dolor sit amet, adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat... <br />
                  <a href="#">See Profile&gt;</a></span>
                  <br />
                  <span class="read_this_member"><strong>Read this Member's Stories</strong></span>
                  <ul class="member-story" style="margin:0; padding:0;">
                    <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                    <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                  </ul>
                </div>
              <div class="meet_member_btm"></div>
            </div>
            <!--  Meet a Member div start  -->
            
            <div class="vertical_divider" align="center"><img src="images/top_end_img.jpg" /></div>
            
          </div>
            
          
          <div class="main_cate_div">
          <!--  Category Div Start here  -->
          	<!-- Travel Div Start Here  -->
          	<div class="category">
          	<div class="category_name"><div class="category_link"><a href="#" class="seeall">See all &gt;&gt;</a></div> 
          	<span class="travel_hd">Travel</span></div>
            <div class="category_div">
            	<div class="category_image"><img src="images/img_travel.jpg" width="71" height="49" class="member_img" /></div>
  	    <div class="category_area"><a href="#" class="title_link">Lorem ipsum dolor sit amet, Consectetuer adipiscing elit,</a><br />
          	  	  <br />
   	  	      <span class="category_txt">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna volutpat... <a href="#" class="red_blue">Read More &gt;&gt;</a></span></div>
            </div>
            
          </div>
          	<!-- Travel Div End Here  -->
            
            <!-- Play Div Start Here  -->
          	<div class="category">
          	<div class="category_name"><div class="category_link"><a href="#" class="seeall">See all &gt;&gt;</a></div> 
          	<span class="play_hd">Play</span></div>
            <div class="category_div">
            	<div class="category_image"><img src="images/img_play.jpg" width="71" height="49" class="member_img" /></div>
          	  	<div class="category_area">          	  	  <a href="#" class="title_link">Lorem ipsum dolor sit amet<br />
       	  	    <br />
          	  	</a><span class="category_txt">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna volutpat... <a href="#" class="red_blue">Read More &gt;&gt;</a></span></div>
            </div>
            
          </div>
          	<!-- Play Div End Here  -->
            
            <!-- Home & Food Div Start Here  -->
          	<div class="category">
          	<div class="category_name"><div class="category_link"><a href="#" class="seeall">See all &gt;&gt;</a></div> 
          	<span class="home_food_hd">Home &amp; Food</span></div>
            <div class="category_div">
            	<div class="category_image"><img src="images/img_home_food.jpg" width="71" height="49" class="member_img" /></div>
          	  	<div class="category_area"> 
                <div id="view">
				<?


$query=mysql_query("select * from tbl_forntartical where art_status = 'Approved'");
	
	while($record=mysql_fetch_array($query))	
	{ 
	
?>	        	  	  <a href="#" class="title_link"><?php echo $record["art_name"]; ?><br />
          	  	</a><span class="category_txt">
              
              
       	  	  <?php echo $record["art_decription"]; ?> <?php /*?><a href="readmore.php?title=<?php echo $record["art_id"]; ?>"
               class="red_blue">Read More &gt;&gt;</a><?php */?>
               <?php  
//function to truncate text and show read more link  
function truncate($mytext) {  
//Number of characters to show  
$chars = 25;  
$mytext = substr($mytext,10,$chars);  
$mytext = substr($mytext,20,strrpos($mytext,' '));  
$mytext = $mytext." <a href='$link?$var=$id'>read more...</a>";  
return $mytext;  
}  
?> </span></div>
             
                <? } ?>
            </div>
            </div>
          </div>
          	<!-- Home & Food Div End Here  -->
            
            <!-- Courses Div Start Here  -->
            <div class="category">
           	  <h2 class="courses_hd">Courses</h2>
                <div class="category_div">
            	<div class="category_image"><img src="images/img_couses.jpg" width="70" height="49" class="member_img" /></div>
          	  	<div class="category_area">          	  	  <a href="#" class="title_link">Lorem ipsum dolor sit amet</a><span class="category_txt"><br />
          	  	  <br />
       	  	    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna volutpat... <a href="#" class="red_blue">Read More &gt;&gt;</a></span></div>
          	  	<div class="courses_list_div">              	<span class="plus_courses"><br />
       	  	    Plus these Courses</span>
              	  <br />
              	  <br />
              	  <ul class="courses_list" style="margin:0; padding:0;">
              	  <li><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing</a></li>
           	      <li><a href="#">Lorem ipsum dolor sit amet consectetuer</a></li>
              	  <li><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing</a></li>
              	</ul>
              	</div>
          	</div>
            </div>
            <!-- Courses Div End Here  -->
            
            <!--  Advertisement div start here  -->
            <div align="center" class="ad_banner"><a href="#"><img src="images/hr_ads.jpg" /></a></div>
            <!--  Advertisement div End here  -->
            
            <!--  Forum div start here  -->
            <!--  Forum div End here  -->
            <!--  Category Div End here  -->
          </div>
          <div class="right_side_main">
                <!--   Not Missed Div Start Here   -->
<div class="multimedia_main">
                	<h2 align="center" class="courses_hd" style="margin:0; font-weight:normal;"><strong>not</strong> to be missed</h2>
                    <div class="missed_main">
                    	<div class="mise_img"><a href="#"><img src="images/img_missed1.jpg" /></a></div>
                        <div class="mise_txt"><a href="#" class="mise_txt">Lorem ipsum dolor sit amet, Consectetuer adipiscing elit,</a></div>
          </div>
                    
<div class="missed_main">
                    	<div class="mise_img"><a href="#"><img src="images/img_missed2.jpg" /></a></div>
                        <div class="mise_txt">Lorem ipsum dolor sit amet, Consectetuer adipiscing elit, sed diam</div>
          </div>
                    
                    <div class="missed_main">
                    	<div class="mise_img"><a href="#"><img src="images/img_missed3.jpg" /></a></div>
                        <div class="mise_txt"><a href="#">Lorem ipsum dolor sit amet, Consectetuer adipiscing elit,</a></div>
                    </div>
                    
                    <div class="missed_main">
                    	<div class="mise_img"><a href="#"><img src="images/img_missed4.jpg" /></a></div>
                        <div class="mise_txt"><a href="#">Lorem ipsum dolor sit amet, Consectetuer adipiscing elit, sed diam</a></div>
                    </div>
                    
                  <div class="missed_main">
                   	  <div class="mise_img"><a href="#"><img src="images/img_missed5.jpg" /></a></div>
                        <div class="mise_txt"><a href="#">Lorem ipsum dolor sit amet, Consectetuer adipiscing elit, sed diam</a></div>
          </div>
            </div>
          		<!--   Not Missed Div End Here   -->
                
                <div class="banner"><a href="#"><img src="images/banner1.jpg" /></a></div>
          </div>
            
        </div>
        
        
        <div class="right_maindiv">
        	<div class="comein" align="center">           	  <span class="comein_tittle">Come in
           	  </span>
        	  <br />
        	  <br />
        	  <span class="comein_txt">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</span>
        	  <br />
        	  <br />
        	  <a href="#" class="comein_txt">add a story ›</a>
        	  <br />
        	  <a href="#" class="comein_txt">take a tour ›</a><br />
        	  <a href="#" class="comein_txt">read about us ›</a>
        	  <a href="#" class="comein_txt"><br />
Tell a friend ›</a> <br />
<a href="#" class="comein_txt"><img src="images/rss_comein.jpg" width="9" height="9" /> rss feed ›</a></div>
        	<div class="v_ad" align="center"><a href="#"><img src="images/v_ad.jpg" width="124" height="604" /></a></div>
            
            <div class="newsletter">
            	<div class="tr"><img src="images/newsletter_tl.jpg" style="float:left;" /></div>
                <div class="md">               	  
                  <div align="center"><span class="news_hd" al >Our Newsletter</span>
                  </div>
                  <diV class="news_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</diV><br />

                  <input name="textfield2" type="text"  style="margin-left:10px;" class="newsletter_input" id="textfield2"  value="Enter&nbsp;Your&nbsp;Email&nbsp;Address" onblur="if (value=='') {value='Enter&nbsp;Your&nbsp;Email&nbsp;Address'}" onfocus="if (value=='Enter&nbsp;Your&nbsp;Email&nbsp;Address') {value=''}" />
                  <input name="button2" type="submit" class="but_submit" id="button2" value=""  style="margin-top:10px; margin-left:55px; margin-bottom:10px;"/>
              </div>
                <div class="br"><img src="images/newsletter_bl.jpg" style="float:left;" /></div>
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
     Copyright &copy; 2013, SuperMuher. All Rights Reserved  	</div>
    
    
  <!--  Footer Section start here  -->
</div>



</body>
</html>
