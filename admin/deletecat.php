<?php
include ("header.php");
include("ClsDatabase.php");
include("config.php");

$a=$_GET["did"];
$sql="DELETE FROM tbl_catinfo WHERE cat_id=$a";
$query=mysql_query($sql);
if($query)
{
    ?>
<script language="javascript">
    window.location="managecat.php";
</script>
<?php
}
?>