<?
 	$ServerName		= "localhost";
	$DataBaseName	= "supermurjer";
	$UserName		= "root";
	$Password		= "";
	$user = new ClsDatabase();
	$user->makeConnection($ServerName,$UserName,$Password,$DataBaseName);

?>