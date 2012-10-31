<?php

/*
 * Squelette : ../plugins-dist/mots/prive/style_prive_plugin_mots.html
 * Date :      Thu, 30 Aug 2012 09:12:34 GMT
 * Compile :   Thu, 30 Aug 2012 09:14:45 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/mots/prive/style_prive_plugin_mots.html
// Temps de compilation total: 0.401 ms
//

function html_2ddbd370b195138f4f1316a83a728d1d($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
'<?php header("X-Spip-Cache: 360000"); ?>'.'<?php header("Cache-Control: max-age=360000"); ?>'.'<?php header("X-Spip-Statique: oui"); ?>' .
'<'.'?php header("' . 'Content-Type: text/css; charset=iso-8859-15' . '"); ?'.'>' .
'<'.'?php header("' . 'Vary: Accept-Encoding' . '"); ?'.'>.groupe_mots #wysiwyg {clear:none;margin-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'right', null),true)) .
':100px;}');

	return analyse_resultat_skel('html_2ddbd370b195138f4f1316a83a728d1d', $Cache, $page, '../plugins-dist/mots/prive/style_prive_plugin_mots.html');
}
?>