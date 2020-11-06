<?php
include ("header.php");
include("ClsDatabase.php");
include("config.php");

$a=$_GET["did"];
$sql="DELETE FROM tbl_addrep WHERE rep_id=$a";
$query=mysql_query($sql);
if($query)
{
    ?>
<script language="javascript">
    window.location="manageaddrep.php";
</script>
<?php
}
?>