<?php

/*
 * Squelette : ../prive/squelettes/head/dist.html
 * Date :      Thu, 30 Aug 2012 09:12:29 GMT
 * Compile :   Thu, 30 Aug 2012 09:14:44 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/head/dist.html
// Temps de compilation total: 0.784 ms
//

function html_339b9b3317d205b510adea7899ec0195($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'

' .
vide($Pile['vars'][(string)'paramcss'] = parametres_css_prive('')) .
pipeline( 'header_prive' , recuperer_fond( 'prive/squelettes/inclure/head' , array('titre' => @$Pile[0]['titre'] ,
	'minipres' => @$Pile[0]['minipres'] ,
	'paramcss' => table_valeur($Pile["vars"], (string)'paramcss', null) ), array('compil'=>array('../prive/squelettes/head/dist.html','html_339b9b3317d205b510adea7899ec0195','',0,$GLOBALS['spip_lang'])), '') ));

	return analyse_resultat_skel('html_339b9b3317d205b510adea7899ec0195', $Cache, $page, '../prive/squelettes/head/dist.html');
}
?>