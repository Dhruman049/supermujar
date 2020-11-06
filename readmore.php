<?php


session_start();
$con=mysql_connect("localhost","root","")or die("invalid");
mysql_select_db("supermurjer",$con) or die("invalid");

$state=$_GET["art_id"];
$query="SELECT * FROM tbl_forntartical WHERE art_id='".$state."'";
$result=mysql_query($query);
//die(print_r(art_it));

?>
  <form action="" method="post">
<?php while($row=mysql_fetch_array($result)) 
{ 
?>
    
    
			<b><u><?php echo $row['art_title']; ?></u></b>
			
             <p><?php echo $row['art_decription']; ?></p>
                               
        
 
 
<?php
 }
 ?>
</form>
 

