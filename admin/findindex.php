<?php
include('ClsDatabase.php');
include('config.php');
//http://waliaz.com/read-more-script---php.html
session_start();
$con=mysql_connect("localhost","root","")or die("invalid");
mysql_select_db("supermurjer",$con) or die("invalid");

$state=$_GET["title"];

$query="SELECT * FROM tbl_forntartical WHERE art_title='$state'";

$user = new ClsDatabase();
$result1=$user->selectRecord($query);
//$result=mysql_query($query);

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php while($row=mysql_fetch_array($result)) 
{ 
?>
    
   
    
    
						
             <div class="category_area"> 
                    
		<b><u><?php echo $row['art_title']; ?></u></b>
                        <p><?php $a=$row[art_decription];
                                $b=substr($a,0,4); 
                                //wordwrap($a, 8, "\n", true);
                                //
                                echo "$b \n";
                                //print substr($row['news_desc'],11,5);  ?></p>
                                
                        </div>
    </div>
        
 <!--       
<a  class="read_txt" onclick="readmore(this.value)" >Read More<img src="images/read_more_icon.jpg" align="absmiddle" /></a>
 -->
 <a href="readmore.php?art_id=<?php echo $row["art_id"];?>" class="read_txt">Read More<img src="images/read_more_icon.jpg" align="absmiddle" /></a>   
 
                  
<?php
 }
 ?>
</body>
</html>
