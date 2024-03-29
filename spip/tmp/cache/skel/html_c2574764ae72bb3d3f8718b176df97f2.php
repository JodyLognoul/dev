<?php

/*
 * Squelette : squelettes-dist/sommaire.html
 * Date :      Thu, 30 Aug 2012 09:12:30 GMT
 * Compile :   Thu, 30 Aug 2012 09:14:49 GMT
 * Boucles :   _breves, _forums_liens, _syndic
 */ 

function BOUCLE_breveshtml_c2574764ae72bb3d3f8718b176df97f2(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'breves';
		$command['id'] = '_breves';
		$command['from'] = array('breves' => 'spip_breves');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("breves.date_heure",
		"breves.date_heure AS date",
		"breves.id_breve",
		"breves.titre",
		"breves.texte",
		"breves.lang");
		$command['orderby'] = array('breves.date_heure DESC');
		$command['where'] = 
			array(
quete_condition_statut('breves.statut','publie,prop','publie',''));
		$command['join'] = array();
		$command['limit'] = '0,3';
		$command['having'] = 
			array();
	}
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes-dist/sommaire.html','html_c2574764ae72bb3d3f8718b176df97f2','_breves',34,$GLOBALS['spip_lang'])
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
						' .
(($t1 = strval(interdire_scripts(affdate_jourcourt(normaliser_date($Pile[$SP]['date'])))))!=='' ?
		('<small>' . $t1 . '</small>') :
		'') .
'
						<h3><a href="' .
vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_breve'], 'breve', '', '', true))) .
'">' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a></h3>
						' .
interdire_scripts(filtre_introduction_dist('', $Pile[$SP]['texte'], 300, $connect)) .
'
					</li>
					');
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}


function BOUCLE_forums_lienshtml_c2574764ae72bb3d3f8718b176df97f2(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'forum';
		$command['id'] = '_forums_liens';
		$command['from'] = array('forum' => 'spip_forum');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("forum.date_heure",
		"forum.texte",
		"forum.auteur AS nom",
		"forum.id_forum",
		"forum.titre");
		$command['orderby'] = array('forum.date_heure DESC');
		$command['where'] = 
			array(
quete_condition_statut('forum.statut','publie,prop','publie',''));
		$command['join'] = array();
		$command['limit'] = '0,5';
		$command['having'] = 
			array();
	}
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes-dist/sommaire.html','html_c2574764ae72bb3d3f8718b176df97f2','_forums_liens',50,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
					' .
(($t1 = strval(interdire_scripts(couper(safehtml(propre(interdit_html($Pile[$SP]['texte']), $connect, $Pile[0])),'80'))))!=='' ?
		((	'<li>' .
	(($t2 = strval(interdire_scripts(((($a = typo(supprimer_numero($Pile[$SP]['nom']), "TYPO", $connect, $Pile[0])) OR (is_string($a) AND strlen($a))) ? $a : '...'))))!=='' ?
			($t2 . '&nbsp;: ') :
			'') .
	'<a href="' .
	vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_forum'], 'forum', '', '', true))) .
	'"' .
	(($t2 = strval(interdire_scripts(couper(attribut_html(safehtml(typo(interdit_html($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]))),'80'))))!=='' ?
			(' title="' . $t2 . '"') :
			'') .
	'>') . $t1 . '</a></li>') :
		'') .
'
					');
	}
	$iter->free();
	}
	return $t0;
}


function BOUCLE_syndichtml_c2574764ae72bb3d3f8718b176df97f2(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'syndic_articles';
		$command['id'] = '_syndic';
		$command['from'] = array('syndic_articles' => 'spip_syndic_articles','L1' => 'spip_syndic');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("syndic_articles.date",
		"syndic_articles.url",
		"L1.url_site",
		"L1.nom_site",
		"syndic_articles.titre");
		$command['orderby'] = array('syndic_articles.date DESC');
		$command['where'] = 
			array(
quete_condition_statut('L1.statut','publie,prop','publie',''), 
quete_condition_statut('syndic_articles.statut','publie,prop','publie',''), 
			array('<', 'LEAST((UNIX_TIMESTAMP(NOW())-UNIX_TIMESTAMP(syndic_articles.date))/86400,
	TO_DAYS(NOW())-TO_DAYS(syndic_articles.date),
	DAYOFMONTH(NOW())-DAYOFMONTH(syndic_articles.date)+30.4368*(MONTH(NOW())-MONTH(syndic_articles.date))+365.2422*(YEAR(NOW())-YEAR(syndic_articles.date)))', "180"));
		$command['join'] = array('L1' => array('syndic_articles','id_syndic'));
		$command['limit'] = '0,5';
		$command['having'] = 
			array();
	}
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes-dist/sommaire.html','html_c2574764ae72bb3d3f8718b176df97f2','_syndic',62,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
					<li>' .
(($t1 = strval(interdire_scripts(affdate_jourcourt(normaliser_date($Pile[$SP]['date'])))))!=='' ?
		($t1 . ' &ndash; ') :
		'') .
'<a href="' .
vider_url($Pile[$SP]['url']) .
'"' .
(($t1 = strval(interdire_scripts(couper(attribut_html(typo(supprimer_numero(calculer_url($Pile[$SP]['url_site'],$Pile[$SP]['nom_site'], 'titre', $connect, false)), "TYPO", $connect, $Pile[0])),'80'))))!=='' ?
		(' title="' . $t1 . '"') :
		'') .
' class="spip_out">' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a></li>
					');
	}
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette squelettes-dist/sommaire.html
// Temps de compilation total: 12.521 ms
//

function html_c2574764ae72bb3d3f8718b176df97f2($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--[if lt IE 7 ]> <html dir="' .
lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
'" lang="' .
htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang']) .
'" xmlns="http://www.w3.org/1999/xhtml" xml:lang="' .
htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang']) .
'" class="' .
lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
(($t1 = strval(htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang'])))!=='' ?
		(' ' . $t1) :
		'') .
' no-js ie ie6"> <![endif]-->
<!--[if IE 7 ]> <html dir="' .
lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
'" lang="' .
htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang']) .
'" xmlns="http://www.w3.org/1999/xhtml" xml:lang="' .
htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang']) .
'" class="' .
lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
(($t1 = strval(htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang'])))!=='' ?
		(' ' . $t1) :
		'') .
' no-js ie ie7"> <![endif]-->
<!--[if IE 8 ]> <html dir="' .
lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
'" lang="' .
htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang']) .
'" xmlns="http://www.w3.org/1999/xhtml" xml:lang="' .
htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang']) .
'" class="' .
lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
(($t1 = strval(htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang'])))!=='' ?
		(' ' . $t1) :
		'') .
' no-js ie ie8"> <![endif]-->
<!--[if IE 9 ]> <html dir="' .
lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
'" lang="' .
htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang']) .
'" xmlns="http://www.w3.org/1999/xhtml" xml:lang="' .
htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang']) .
'" class="' .
lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
(($t1 = strval(htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang'])))!=='' ?
		(' ' . $t1) :
		'') .
' no-js ie ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html dir="' .
lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
'" lang="' .
htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang']) .
'" xmlns="http://www.w3.org/1999/xhtml" xml:lang="' .
htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang']) .
'" class="' .
lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
(($t1 = strval(htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang'])))!=='' ?
		(' ' . $t1) :
		'') .
' no-js"> <!--<![endif]-->
<head>
<script type=\'text/javascript\'>/*<![CDATA[*/(function(H){H.className=H.className.replace(/\\bno-js\\b/,\'js\')})(document.documentElement);/*]]>*/</script>
<title>' .
interdire_scripts(textebrut(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0]))) .
(($t1 = strval(interdire_scripts(textebrut(typo($GLOBALS['meta']['slogan_site'], "TYPO", $connect, $Pile[0])))))!=='' ?
		(' - ' . $t1) :
		'') .
'</title>
' .
(($t1 = strval(interdire_scripts(textebrut(couper(propre($GLOBALS['meta']['descriptif_site'], $connect, $Pile[0]),'150')))))!=='' ?
		('<meta name="description" content="' . $t1 . '" />') :
		'') .
'
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/head') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes-dist/sommaire.html\',\'html_c2574764ae72bb3d3f8718b176df97f2\',\'\',11,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
</head>

<body class="pas_surlignable page_sommaire">
<div class="page">

	' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/header') . ', array(\'home\' => ' . argumenter_squelette('oui') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes-dist/sommaire.html\',\'html_c2574764ae72bb3d3f8718b176df97f2\',\'\',17,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/nav') . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'squelettes-dist/sommaire.html\',\'html_c2574764ae72bb3d3f8718b176df97f2\',\'\',18,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	
	<div class="main">
		<div class="wrapper hfeed">
		<div class="content" id="content">
			' .
(($t1 = strval(interdire_scripts(propre($GLOBALS['meta']['descriptif_site'], $connect, $Pile[0]))))!=='' ?
		('<div class="chapo">' . $t1 . '</div>') :
		'') .
'
			' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/recents') . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'squelettes-dist/sommaire.html\',\'html_c2574764ae72bb3d3f8718b176df97f2\',\'\',24,$GLOBALS[\'spip_lang\']),\'ajax\' => ($v=( ' . argumenter_squelette(@$Pile[0]['ajax']) . '))?$v:true), _request("connect"));
?'.'>
		</div><!--.content-->
		</div><!--.wrapper-->
		
		<div class="aside">
			' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/navsub') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes-dist/sommaire.html\',\'html_c2574764ae72bb3d3f8718b176df97f2\',\'\',29,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
			' .
executer_balise_dynamique('FORMULAIRE_RECHERCHE',
	array(),
	array('squelettes-dist/sommaire.html','html_c2574764ae72bb3d3f8718b176df97f2','',30,$GLOBALS['spip_lang'])) .
'
			
			
			' .
(($t1 = BOUCLE_breveshtml_c2574764ae72bb3d3f8718b176df97f2($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
			<div class="menu menu_breves">
				<h2>' .
		_T('public|spip|ecrire:dernieres_breves') .
		'</h2>
				<ul>
					') . $t1 . '
				</ul>
			</div>
			') :
		'') .
'
			
			
			' .
(($t1 = BOUCLE_forums_lienshtml_c2574764ae72bb3d3f8718b176df97f2($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
			<div class="menu menu_comments">
				<h2>' .
		_T('public|spip|ecrire:derniers_commentaires') .
		'</h2>
				<ul>
					') . $t1 . '
				</ul>
			</div>
			') :
		'') .
'
			
			
			' .
(($t1 = BOUCLE_syndichtml_c2574764ae72bb3d3f8718b176df97f2($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
			<div class="menu">
				<h2>' .
		_T('public|spip|ecrire:nouveautes_web') .
		'</h2>
				<ul>
					') . $t1 . '
				</ul>
			</div>
			') :
		'') .
'
			
			' .
executer_balise_dynamique('FORMULAIRE_INSCRIPTION',
	array(),
	array('squelettes-dist/sommaire.html','html_c2574764ae72bb3d3f8718b176df97f2','',73,$GLOBALS['spip_lang'])) .
'
		</div><!--.aside-->
	</div><!--.main-->
	
	' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/footer') . ', array_merge('.var_export($Pile[0],1).',array(\'self\' => ' . argumenter_squelette(self()) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'squelettes-dist/sommaire.html\',\'html_c2574764ae72bb3d3f8718b176df97f2\',\'\',77,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	
</div><!--.page-->
</body>
</html>
');

	return analyse_resultat_skel('html_c2574764ae72bb3d3f8718b176df97f2', $Cache, $page, 'squelettes-dist/sommaire.html');
}
?>