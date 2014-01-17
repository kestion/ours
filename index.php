<?php

	$link = mysql_connect('localhost', 'root', '');
	if (!$link) {
	   die('Impossible de se connecter : ' . mysql_error());
	}

	// Rendre la base de données foo, la base courante
	$db_selected = mysql_select_db('ours', $link);
	if (!$db_selected) {
	   die ('Impossible de sélectionner la base de données : ' . mysql_error());
	}


	
	function get_menus($arg1, $arg2){	
		$menu = array();
		$query = sprintf
		("SELECT ".$arg2." FROM ".$arg1."");

		// Exécution de la requête
		$result = mysql_query($query);

		// Vérification du résultat
		// Ceci montre la requête envoyée à MySQL ainsi que l'erreur. Utile pour déboguer.
		if (!$result) {
	    $message  = 'Requête invalide : ' . mysql_error() . "\n";
	    $message .= 'Requête complète : ' . $query;
	    die($message);
		}
		else{
			while($row = mysql_fetch_assoc($result)){
				array_push($menu, $row['label']);
			}
			return $menu;
		}
	}
	$multimedia = get_menus('multimedia', 'label');
	$logistics = get_menus('logistics', 'label');
	$memories = get_menus('memories', 'label');
	$us = get_menus('us', 'label');
	include 'main.html';

?>