<?php
session_start();
include("ClsDatabase.php");
include("config.php");
if($_POST["admin_uname"]!=NULL && $_POST["admin_password"]!=NULL)
{

$query="select * from tbl_admininfo";
$user= new ClsDatabase();
$p=$user->selectRecord($query);
while($record=mysql_fetch_array($p))
{
$un=$record["admin_uname"];
$ps=$record["admin_password"];
$txt1=$_POST["admin_uname"];
$txt2=$_POST["admin_password"];


	if($un== $txt1 && $ps == $txt2)
	{
	$_SESSION["sessionun"]=$_POST["admin_uname"];
	$_SESSION["sessionpw"]=$_POST["admin_password"];
	header("Location:adminwelcome.php");
	}
	else
	{
	$error="incorrect username or password";
}
}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login | Sleek Admin</title>
<script type="text/javascript">
function validateForm()
{
var p1=document.getElementById("admin_uname");
var p2=document.getElementById("admin_password");
 if (p1.value==null || p1.value=="")
  {
  	alert("User Name must be filled out");
	p1.focus();
 	 return false;
  }    
else if (p2.value==null || p2.value=="")
  {
 	 alert("Password must be filled out");
	 p2.focus();
 	 return false;
  } 
  else 
  {
  	
  }
  }
 </script>



<link href="css/login.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="container">
	<img src="images/logo_login.gif" width="300" height="93" border="0" alt="Sleek Admin" />
    <div class="login_form">
    <h1>Restricted Area</h1>

   
    <?php if($error!=NULL){ ?>
     <p class="error"><?php echo $error;?>
     </p><?php }?>
    <form action="login.php" onsubmit="return validateForm() "method="post">
        <label>Username</label>
        <input type="text" class="inputText" name="admin_uname" id="admin_uname"/>
        <label>Password</label>
        <input type="password" class="inputText"name="admin_password" id="admin_password" />
        <br clear="all" />

        <input type="submit"  class="green"/>
      <p><a href="#">Forgot your username or password?</a></p>
    </form></div>
</div>
</body>
</html>
