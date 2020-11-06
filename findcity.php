<?php
session_start();
$con=mysql_connect("localhost","root","")or die("invalid");
mysql_select_db("supermurjer",$con) or die("invalid");

$state=$_GET["state"];
$query="SELECT city_id,city_name FROM tbl_cityinfo WHERE state_name='$state'";
$result=mysql_query($query);

?>
<select name="city" class="textfield">
<option selected="" value="Default">Select City</option>
<?php while($row=mysql_fetch_array($result)) 
{ 
?>
<option value="<?php echo $row['city_name']?>"><?php echo $row['city_name']?></option>
<?php
}
?>
</select>