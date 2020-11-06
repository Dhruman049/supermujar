<?php 
session_start();
$r=mysql_connect("localhost","root","") or die("Server not Connected");
mysql_select_db("supermurjer",$r) or die("Databse not found");

$country=$_GET['country'];
$query="SELECT state_id,state_name FROM tbl_stateinfo WHERE country_name='$country'";
$result=mysql_query($query);

?>
<select name="state" class="textfield" >
<option selected="" value="Default">Select State</option>
<?php while($row=mysql_fetch_array($result)) 
{ 
?>
<option value="<?php echo $row['state_name']?>"><?php echo $row['state_name']?></option>
<?php
}
?>
</select>
