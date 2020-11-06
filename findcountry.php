<?php 

$r=mysql_connect("localhost","root","") or die("Server not Connected");
mysql_select_db("supermurjer",$r) or die("Databse not found");
$cat=$_GET['country'];
$query="SELECT country_id,country_name FROM tbl_countryinfo WHERE country_name='$cat'";
$result=mysql_query($query);

?>
<select name="country" class="textfield" >
<option selected="" value="Default">Select Country</option>
<?php while($row=mysql_fetch_array($result)) 
{ 
?>
<option value="<?php echo $row['country_name']?>"><?php echo $row['country_name']?></option>
<?php
}
?>
</select>
