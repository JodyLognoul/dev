<?php

/*
 * Squelette : squelettes-dist/inclure/navsub.html
 * Date :      Thu, 30 Aug 2012 09:12:30 GMT
 * Compile :   Thu, 30 Aug 2012 09:14:49 GMT
 * Boucles :   _re, _test_expose, _sous_rubriques, _rubriques, _secteur
 */ 

function BOUCLE_rehtml_534f9f05f55d8dcbf224b3d809f61420(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$save_numrows = (isset($Numrows['_sous_rubriques']) ? $Numrows['_sous_rubriques'] : array());
	$t0 = (($t1 = BOUCLE_sous_rubriqueshtml_534f9f05f55d8dcbf224b3d809f61420($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
			<ul>
				' . $t1 . '
			</ul>
			') :
		'');
	$Numrows['_sous_rubriques'] = ($save_numrows);
	return $t0;
}


function BOUCLE_test_exposehtml_534f9f05f55d8dcbf224b3d809f61420(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_test_expose';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.id_rubrique",
		"rubriques.lang",
		"rubriques.titre");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('=', 'rubriques.id_rubrique', sql_quote($Pile[$SP]['id_parent'],'','bigint(21) NOT NULL AUTO_INCREMENT')));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes-dist/inclure/navsub.html','html_534f9f05f55d8dcbf224b3d809f61420','_test_expose',18,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (calcul_exposer($Pile[$SP]['id_rubrique'], 'id_rubrique', $Pile[0], 0, 'id_rubrique', '') ? ' ' : '');
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}


function BOUCLE_sous_rubriqueshtml_534f9f05f55d8dcbf224b3d809f61420(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_sous_rubriques';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.id_parent",
		"rubriques.id_rubrique",
		"0+rubriques.titre AS num",
		"rubriques.date",
		"rubriques.titre",
		"rubriques.lang");
		$command['orderby'] = array('num', 'rubriques.date DESC');
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('=', 'rubriques.id_parent', sql_quote($Pile[$SP]['id_rubrique'],'','bigint(21) NOT NULL DEFAULT \'0\'')));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes-dist/inclure/navsub.html','html_534f9f05f55d8dcbf224b3d809f61420','_sous_rubriques',16,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (($t1 = BOUCLE_test_exposehtml_534f9f05f55d8dcbf224b3d809f61420($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		($t1 . (	'
				<li><a href="' .
		vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_rubrique'], 'rubrique', '', '', true))) .
		'"' .
		(calcul_exposer($Pile[$SP]['id_rubrique'], 'id_rubrique', $Pile[0], 0, 'id_rubrique', '')  ?
				(' class="' . 'on' . '"') :
				'') .
		'>' .
		interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
		'</a>' .
		BOUCLE_rehtml_534f9f05f55d8dcbf224b3d809f61420($Cache, $Pile, $doublons, $Numrows, $SP) .
		'	</li>
				')) :
		'');
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}


function BOUCLE_rubriqueshtml_534f9f05f55d8dcbf224b3d809f61420(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_rubriques';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.id_rubrique",
		"0+rubriques.titre AS num",
		"rubriques.titre",
		"rubriques.lang");
		$command['orderby'] = array('num', 'rubriques.titre');
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('=', 'rubriques.id_parent', sql_quote($Pile[$SP]['id_rubrique'],'','bigint(21) NOT NULL DEFAULT \'0\'')));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes-dist/inclure/navsub.html','html_534f9f05f55d8dcbf224b3d809f61420','_rubriques',9,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
		<li>
			<a href="' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_rubrique'], 'rubrique', '', '', true))) .
'"' .
(calcul_exposer($Pile[$SP]['id_rubrique'], 'id_rubrique', $Pile[0], 0, 'id_rubrique', '')  ?
		(' class="' . 'on' . '"') :
		'') .
'>' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a>
			' .
(($t1 = BOUCLE_sous_rubriqueshtml_534f9f05f55d8dcbf224b3d809f61420($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
			<ul>
				' . $t1 . '
			</ul>
			') :
		'') .
'
		</li>
	');
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}


function BOUCLE_secteurhtml_534f9f05f55d8dcbf224b3d809f61420(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!($id_rubrique = intval(@$Pile[0]['id_rubrique'])))
		return '';
	$hierarchie = ",$id_rubrique";
	while ($id_rubrique = sql_getfetsel("id_parent","spip_rubriques","id_rubrique=" . $id_rubrique,"","","", "", $connect)) { 
		$hierarchie = ",$id_rubrique$hierarchie";
	}
	if (!$hierarchie) return "";
	$hierarchie = substr($hierarchie,1);
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_secteur';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.id_rubrique",
		"rubriques.titre",
		"rubriques.lang");
		$command['join'] = array();
		$command['limit'] = '0,1';
		$command['having'] = 
			array();
	}
	$command['orderby'] = array("FIELD(rubriques.id_rubrique, $hierarchie)");
	$command['where'] = 
			array(
			array('IN', 'rubriques.id_rubrique', "($hierarchie)"));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes-dist/inclure/navsub.html','html_534f9f05f55d8dcbf224b3d809f61420','_secteur',8,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
' .
(($t1 = BOUCLE_rubriqueshtml_534f9f05f55d8dcbf224b3d809f61420($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
<div class="menu menu_rubriques">
	<h2>' .
		interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
		'</h2>
	<ul>
	') . $t1 . '

	</ul>
</div>
') :
		'') .
'
');
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette squelettes-dist/inclure/navsub.html
// Temps de compilation total: 5.431 ms
//

function html_534f9f05f55d8dcbf224b3d809f61420($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
BOUCLE_secteurhtml_534f9f05f55d8dcbf224b3d809f61420($Cache, $Pile, $doublons, $Numrows, $SP));

	return analyse_resultat_skel('html_534f9f05f55d8dcbf224b3d809f61420', $Cache, $page, 'squelettes-dist/inclure/navsub.html');
}
?>