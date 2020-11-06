<?php 
session_start();
//include("conn/connection.php");
$r=mysql_connect("localhost","root","") or die("Server not Connected");
mysql_select_db("supermurjer",$r) or die("Databse not found");
$cat=$_GET['subcat_name'];
$qry1="select * from tbl_addrep where subcat_name='$cat' ";
$res1 = $user->selectRecord($qry1);
?>
<select name="sub_cat" id="sub_ca" >
<option value="">Select Sub Category</option>
<?
while($row1=mysql_fetch_array($res1)) 
{ 
  ?>

		<option value=<?php echo $row1['subcat_name']?>><?php echo $row1['subcat_name']?>
</option>
<?php
 }
 ?>
</select>
