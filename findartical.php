<?php
include('ClsDatabase.php');
include('config.php');
//http://waliaz.com/read-more-script---php.html
session_start();
$con=mysql_connect("localhost","root","")or die("invalid");
mysql_select_db("supermurjer",$con) or die("invalid");

$state=$_GET["rep_subcat"];

$query="SELECT * FROM tbl_addrep WHERE rep_subcat='$state'";

$user = new ClsDatabase();
$result1=$user->selectRecord($query);
//$result=mysql_query($query);


while($row1=mysql_fetch_array($result1)) 
{ 
  ?>
  
 
  	    <div class="category_area"><a href="#" class="title_link"><?php echo $row1['rep_name'];?></a><br />
          	  	  <br />
   	  	      <span class="category_txt"><?php echo $row1['rep_ingre'];?><a href="#" class="red_blue">Read More &gt;&gt;</a></span></div>
            </div>
            
     <?php 
                
           
   }      ?></div>   
            
                            