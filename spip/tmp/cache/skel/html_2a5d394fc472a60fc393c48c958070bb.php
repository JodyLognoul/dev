<?php

/*
 * Squelette : ../prive/squelettes/inclure/barre-nav.html
 * Date :      Thu, 30 Aug 2012 09:12:29 GMT
 * Compile :   Thu, 30 Aug 2012 09:14:46 GMT
 * Boucles :   _sous, _boutons, _creersous, _creer, _collaborersous, _collaborer
 */ 

function BOUCLE_soushtml_2a5d394fc472a60fc393c48c958070bb(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['source'] = array(interdire_scripts(table_valeur($Pile[$SP]['valeur'], 'sousmenu')));
	$command['sourcemode'] = 'table';
	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_sous';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur",
		".cle");
		$command['orderby'] = array();
		$command['where'] = 
			array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"DATA",
		$command,
		array('../prive/squelettes/inclure/barre-nav.html','html_2a5d394fc472a60fc393c48c958070bb','_sous',42,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (($t1 = strval(interdire_scripts(_T(table_valeur($Pile[$SP]['valeur'], 'libelle')))))!=='' ?
		((	'<li><a
								href="' .
	interdire_scripts(bandeau_creer_url(((($a = table_valeur($Pile[$SP]['valeur'], 'url')) OR (is_string($a) AND strlen($a))) ? $a : interdire_scripts($Pile[$SP]['cle'])),interdire_scripts(table_valeur($Pile[$SP]['valeur'], 'urlArg')),table_valeur($Pile["vars"], (string)'contexte', null))) .
	'"
								class="bando2_' .
	interdire_scripts($Pile[$SP]['cle']) .
	'">') . $t1 . '</a></li>') :
		'');
	}
	$iter->free();
	}
	return $t0;
}


function BOUCLE_boutonshtml_2a5d394fc472a60fc393c48c958070bb(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['source'] = array(table_valeur($Pile["vars"], (string)'boutons', null));
	$command['sourcemode'] = 'table';
	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_boutons';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur",
		".cle");
		$command['orderby'] = array();
		$command['where'] = 
			array(
			array('NOT', 
			array('=', 'cle', "'outils_rapides'")), 
			array('NOT', 
			array('=', 'cle', "'outils_collaboratifs'")));
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"DATA",
		$command,
		array('../prive/squelettes/inclure/barre-nav.html','html_2a5d394fc472a60fc393c48c958070bb','_boutons',37,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
(($t1 = strval(interdire_scripts(((((($Pile[$SP]['cle'] == 'menu_accueil')) OR (interdire_scripts(table_valeur($Pile[$SP]['valeur'], 'sousmenu')))) ?' ' :'') ? ' ':vide($Pile['vars'][(string)'li'] = '')))))!=='' ?
		('<li ' . $t1 . (	' ' .
	vide($Pile['vars'][(string)'li'] = '</li>') .
	(($t2 = strval(unique('first')))!=='' ?
			('class="' . $t2 . '"') :
			'') .
	'><a
						href="' .
	interdire_scripts(bandeau_creer_url(((($a = table_valeur($Pile[$SP]['valeur'], 'url')) OR (is_string($a) AND strlen($a))) ? $a : interdire_scripts($Pile[$SP]['cle'])),interdire_scripts(table_valeur($Pile[$SP]['valeur'], 'urlArg')),table_valeur($Pile["vars"], (string)'contexte', null))) .
	'"
						id="bando1_' .
	interdire_scripts($Pile[$SP]['cle']) .
	'">' .
	interdire_scripts(_T(table_valeur($Pile[$SP]['valeur'], 'libelle'))) .
	'</a>')) :
		'') .
(($t1 = BOUCLE_soushtml_2a5d394fc472a60fc393c48c958070bb($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('<ul>' . $t1 . '</ul>') :
		'') .
table_valeur($Pile["vars"], (string)'li', null));
	}
	$iter->free();
	}
	return $t0;
}


function BOUCLE_creersoushtml_2a5d394fc472a60fc393c48c958070bb(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['source'] = array(interdire_scripts(table_valeur($Pile[$SP]['valeur'], 'sousmenu')));
	$command['sourcemode'] = 'table';
	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_creersous';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur",
		".cle");
		$command['orderby'] = array();
		$command['where'] = 
			array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"DATA",
		$command,
		array('../prive/squelettes/inclure/barre-nav.html','html_2a5d394fc472a60fc393c48c958070bb','_creersous',62,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (($t1 = strval(interdire_scripts(_T(table_valeur($Pile[$SP]['valeur'], 'libelle')))))!=='' ?
		((	'<li class="bouton"><a
						href="' .
	interdire_scripts(bandeau_creer_url(((($a = table_valeur($Pile[$SP]['valeur'], 'url')) OR (is_string($a) AND strlen($a))) ? $a : interdire_scripts($Pile[$SP]['cle'])),interdire_scripts(table_valeur($Pile[$SP]['valeur'], 'urlArg')),table_valeur($Pile["vars"], (string)'contexte', null))) .
	'"
						title="' .
	interdire_scripts(attribut_html(_T(table_valeur($Pile[$SP]['valeur'], 'libelle')))) .
	'"
						class="bando2_' .
	interdire_scripts($Pile[$SP]['cle']) .
	'"><span>') . $t1 . '</span></a></li>') :
		'');
	}
	$iter->free();
	}
	return $t0;
}


function BOUCLE_creerhtml_2a5d394fc472a60fc393c48c958070bb(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['source'] = array(table_valeur($Pile["vars"], (string)'boutons', null));
	$command['sourcemode'] = 'table';
	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_creer';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur");
		$command['orderby'] = array();
		$command['where'] = 
			array(
			array('=', 'cle', "'outils_rapides'"));
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"DATA",
		$command,
		array('../prive/squelettes/inclure/barre-nav.html','html_2a5d394fc472a60fc393c48c958070bb','_creer',60,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= BOUCLE_creersoushtml_2a5d394fc472a60fc393c48c958070bb($Cache, $Pile, $doublons, $Numrows, $SP);
	}
	$iter->free();
	}
	return $t0;
}


function BOUCLE_collaborersoushtml_2a5d394fc472a60fc393c48c958070bb(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['source'] = array(interdire_scripts(table_valeur($Pile[$SP]['valeur'], 'sousmenu')));
	$command['sourcemode'] = 'table';
	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_collaborersous';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur",
		".cle");
		$command['orderby'] = array();
		$command['where'] = 
			array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"DATA",
		$command,
		array('../prive/squelettes/inclure/barre-nav.html','html_2a5d394fc472a60fc393c48c958070bb','_collaborersous',73,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (($t1 = strval(interdire_scripts(_T(table_valeur($Pile[$SP]['valeur'], 'libelle')))))!=='' ?
		((	'<li class="bouton"><a
							href="' .
	interdire_scripts(bandeau_creer_url(((($a = table_valeur($Pile[$SP]['valeur'], 'url')) OR (is_string($a) AND strlen($a))) ? $a : interdire_scripts($Pile[$SP]['cle'])),interdire_scripts(table_valeur($Pile[$SP]['valeur'], 'urlArg')),table_valeur($Pile["vars"], (string)'contexte', null))) .
	'"
							title="' .
	interdire_scripts(attribut_html(_T(table_valeur($Pile[$SP]['valeur'], 'libelle')))) .
	'"
							class="bando2_' .
	interdire_scripts($Pile[$SP]['cle']) .
	'"><span>') . $t1 . '</span></a></li>') :
		'');
	}
	$iter->free();
	}
	return $t0;
}


function BOUCLE_collaborerhtml_2a5d394fc472a60fc393c48c958070bb(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['source'] = array(table_valeur($Pile["vars"], (string)'boutons', null));
	$command['sourcemode'] = 'table';
	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_collaborer';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur");
		$command['orderby'] = array();
		$command['where'] = 
			array(
			array('=', 'cle', "'outils_collaboratifs'"));
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"DATA",
		$command,
		array('../prive/squelettes/inclure/barre-nav.html','html_2a5d394fc472a60fc393c48c958070bb','_collaborer',71,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= BOUCLE_collaborersoushtml_2a5d394fc472a60fc393c48c958070bb($Cache, $Pile, $doublons, $Numrows, $SP);
	}
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette ../prive/squelettes/inclure/barre-nav.html
// Temps de compilation total: 9.300 ms
//

function html_2a5d394fc472a60fc393c48c958070bb($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
vide($Pile['vars'][(string)'contexte'] = interdire_scripts(eval('return '.'definir_barre_contexte()'.';'))) .
vide($Pile['vars'][(string)'boutons'] = definir_barre_boutons(table_valeur($Pile["vars"], (string)'contexte', null),'0')) .
'<div id=\'bando_haut\' role=\'navigation\'>
	<div id=\'bando_liens_rapides\'>
		<div class=\'largeur clearfix\'>
			<a href=\'#conteneur\' onclick=\'return focus_zone("#conteneur")\'>Aller au contenu</a> |
			<a href=\'#bando_navigation\' onclick=\'return focus_zone("#bando_navigation")\'>Aller &agrave; la navigation</a> |
			<a href=\'#recherche\' onclick=\'return focus_zone("#recherche")\'>Aller &agrave; la recherche</a>
		</div>
	</div>

	<div id=\'bando_identite\'>
		<div class=\'largeur clearfix\'>
			<p class=\'session\'><a
				   title=\'' .
_T('public|spip|ecrire:icone_informations_personnelles') .
'\'
				   href=\'' .
generer_url_ecrire('infos_perso') .
'\'><strong class=\'nom\'>' .
interdire_scripts(invalideur_session($Cache, couper(typo(((($a = trim(table_valeur($GLOBALS["visiteur_session"], (string)'nom', null))) OR (is_string($a) AND strlen($a))) ? $a : interdire_scripts(invalideur_session($Cache, table_valeur($GLOBALS["visiteur_session"], (string)'login', null))))),'30'))) .
'</strong></a> |
				<a class=\'menu_lang\'
					 href=\'' .
generer_url_ecrire('configurer_langage') .
'\'
					 title=\'' .
_T('public|spip|ecrire:titre_config_langage') .
'\'>' .
interdire_scripts(filtre_balise_img_dist(chemin_image('langues.png'),_T('public|spip|ecrire:titre_config_langage'))) .
traduire_nom_langue(htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang'])) .
'</a> |
				<a class=\'aide popin\' target=\'_blank\'
					href=\'' .
generer_url_ecrire('aide',(	'var_lang=' .
	htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang']))) .
'\'>' .
_T('public|spip|ecrire:icone_aide_ligne') .
'</a> |
				<a href=\'' .
generer_url_action('logout','logout=prive') .
'\'>' .
_T('public|spip|ecrire:icone_deconnecter') .
'</a>
			</p>
			<p class=\'nom_site_spip\'><a
				   class=\'info\'
					 title=\'Informations sur ' .
interdire_scripts(attribut_html(typo(supprimer_numero(calculer_url(@$Pile[0]['url_site'],@$Pile[0]['nom_site'], 'titre', $connect, false)), "TYPO", $connect, $Pile[0]))) .
'\'
					 href=\'' .
generer_url_ecrire('configurer_identite') .
'\'><strong
			 	  class=\'nom\'>' .
(($t1 = strval(interdire_scripts(couper(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0]),'35'))))!=='' ?
		(' ' . $t1 . ' ') :
		'') .
'</strong></a>|
				<a class=\'voir\'
					 href=\'' .
htmlspecialchars(sinon($GLOBALS['meta']['adresse_site'],'.')) .
'\'>' .
_T('public|spip|ecrire:icone_visiter_site') .
'</a>
			</p>
		</div>
	</div>

	<div id=\'bando_navigation\'>
		<div class=\'largeur clearfix\'>
			' .
(($t1 = BOUCLE_boutonshtml_2a5d394fc472a60fc393c48c958070bb($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
			<ul class=\'deroulant\'>
				' . $t1 . '</ul>
			') :
		'') .
'
		</div>
	</div>

	<div id=\'bando_outils\'>
		<div class=\'largeur clearfix\'>
			<ul class=\'bandeau_rubriques deroulant\'>
				<li class=\'boussole\'><a
					href=\'' .
generer_url_ecrire('plan') .
'\'
					id=\'boutonbandeautoutsite\'>' .
interdire_scripts(filtre_balise_img_dist(chemin_image('boussole-24.png'))) .
'</a>
					' .
menu_rubriques('') .
'</li></ul>
			' .
(($t1 = BOUCLE_creerhtml_2a5d394fc472a60fc393c48c958070bb($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
				<ul class=\'rapides creer\'>
					' . $t1 . '
				</ul>
			') :
		'') .
'
			<div id=\'rapides\'>
				' .
(($t1 = BOUCLE_collaborerhtml_2a5d394fc472a60fc393c48c958070bb($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
					<ul class=\'rapides collaborer\'>
					' . $t1 . '
					</ul>
				') :
		'') .
'

				' .
executer_balise_dynamique('FORMULAIRE_RECHERCHE_ECRIRE',
	array(),
	array('../prive/squelettes/inclure/barre-nav.html','html_2a5d394fc472a60fc393c48c958070bb','',82,$GLOBALS['spip_lang'])) .
'
			</div>
		</div>
	</div>

</div>
');

	return analyse_resultat_skel('html_2a5d394fc472a60fc393c48c958070bb', $Cache, $page, '../prive/squelettes/inclure/barre-nav.html');
}
?>