<?php 
session_start();
//include("conn/connection.php");
$r=mysql_connect("localhost","root","") or die("Server not Connected");
mysql_select_db("supermurjer",$r) or die("Databse not found");
$state=$_GET['state'];
$query="SELECT subcat_id,subcat_name FROM tbl_subcatinfo WHERE cat_name='$state'";
$result=mysql_query($query);

?>
<select name="sub_cat" >
<option value="">Select Sub Category</option>
<?php while($row1=mysql_fetch_array($result)) 
{ 
?>
			<option value=<?php echo $row1['subcat_name']?>><?php echo $row1['subcat_name']?>
</option>
<?php
 }
 ?>
</select>
