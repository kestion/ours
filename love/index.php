<?php

//include 'config.php';

//mysql_pconnect($server, $user, $pass)
//or die("Erreur SQL !<br/>".mysql_error());
//mysql_select_db($db)
//or die("Erreur SQL !<br/>".mysql_error());

//include 'models/get_all.php';

	

if(isset ($_GET['page']))
{
	$template = $_GET['page'];
}
else 
{
	$template = 'home';	
}

if(isset ($_GET['action']))
{
	$action = 'actiongroups/'.$_GET['action'].'.php';
	include $action;
}


include 'views/main.php'

?>