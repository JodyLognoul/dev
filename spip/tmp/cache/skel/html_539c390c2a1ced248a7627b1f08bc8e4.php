<?php

/*
 * Squelette : ../prive/themes/spip/picker.css.html
 * Date :      Thu, 30 Aug 2012 09:12:29 GMT
 * Compile :   Thu, 30 Aug 2012 09:14:45 GMT
 * Boucles :   _objets
 */ 

function BOUCLE_objetshtml_539c390c2a1ced248a7627b1f08bc8e4(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['source'] = array(lister_tables_objets_sql(''));
	$command['sourcemode'] = 'table';
	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_objets';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur");
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
		array('../prive/themes/spip/picker.css.html','html_539c390c2a1ced248a7627b1f08bc8e4','_objets',56,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
' .
vide($Pile['vars'][(string)'petite_icone'] = interdire_scripts(((($a = chemin_image((	interdire_scripts(table_valeur($Pile[$SP]['valeur'], 'icone_objet')) .
		'-12.png'))) OR (is_string($a) AND strlen($a))) ? $a : interdire_scripts(extraire_attribut(filtrer('image_graver', filtrer('image_reduire',chemin_image((	interdire_scripts(table_valeur($Pile[$SP]['valeur'], 'icone_objet')) .
			'-16.png')),'12')),'src'))))) .
'
.item_picker .frame ul li.' .
interdire_scripts(table_valeur($Pile[$SP]['valeur'], 'type')) .
'{background:url(' .
table_valeur($Pile["vars"], (string)'petite_icone', null) .
') no-repeat' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'left', null)))!=='' ?
		(' ' . $t1 . ' ') :
		'') .
'2px;}
ul.item_picked li.' .
interdire_scripts(table_valeur($Pile[$SP]['valeur'], 'type')) .
'{padding-' .
table_valeur($Pile["vars"], (string)'left', null) .
':15px;background-image:url(' .
table_valeur($Pile["vars"], (string)'petite_icone', null) .
');}
');
	}
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette ../prive/themes/spip/picker.css.html
// Temps de compilation total: 5.454 ms
//

function html_539c390c2a1ced248a7627b1f08bc8e4($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
'<?php header("X-Spip-Cache: 360000"); ?>'.'<?php header("Cache-Control: max-age=360000"); ?>'.'<?php header("X-Spip-Statique: oui"); ?>' .
'<'.'?php header("' . 'Content-Type: text/css; charset=iso-8859-15' . '"); ?'.'>' .
'<'.'?php header("' . 'Vary: Accept-Encoding' . '"); ?'.'>' .
vide($Pile['vars'][(string)'claire'] = (	'#' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'couleur_claire', null), 'edf3fe'),true)))) .
vide($Pile['vars'][(string)'foncee'] = (	'#' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'couleur_foncee', null), '3874b0'),true)))) .
vide($Pile['vars'][(string)'left'] = interdire_scripts(choixsiegal(entites_html(table_valeur(@$Pile[0], (string)'ltr', null),true),'left','left','right'))) .
vide($Pile['vars'][(string)'right'] = interdire_scripts(choixsiegal(entites_html(table_valeur(@$Pile[0], (string)'ltr', null),true),'left','right','left'))) .
'/* Ancien selecteur de rubriques */
.selecteur_parent{font-size: 90%; width: 99%; max-height: 24px;} /* appliquee sur le <select> */
option.selec_rub { background-position: ' .
table_valeur($Pile["vars"], (string)'left', null) .
' center; background-image: url(' .
interdire_scripts(chemin_image('rubrique-12.png')) .
'); background-repeat: no-repeat; padding-' .
table_valeur($Pile["vars"], (string)'left', null) .
': 16px; }
option.niveau_1 { font-weight: bold; background: ' .
table_valeur($Pile["vars"], (string)'claire', null) .
'; background-image: url(' .
interdire_scripts(chemin_image('secteur-12.png')) .
'); background-repeat:  no-repeat; color: #444;}
option.niveau_2 { background:#eee; color: #202020; border-bottom: 1px solid ' .
table_valeur($Pile["vars"], (string)'claire', null) .
'; }
option.niveau_3 { background:#eee; color: #404040; }
option.niveau_4 { background:#eee; color: #606060; }
option.niveau_5 { background:#eee; color: #808080; }
option.niveau_6 { background:#eee; color: #a0a0a0; }


/* plongeur */
div.petite-racine { margin-bottom: -5px; }
div.petite-racine, a.petite-racine { background: ' .
(($t1 = strval(interdire_scripts(choixsiegal(entites_html(table_valeur(@$Pile[0], (string)'ltr', null),true),'left','1','99'))))!=='' ?
		($t1 . '%') :
		'') .
' no-repeat; background-image: url(' .
interdire_scripts(chemin_image('racine-12.png')) .
'); padding-' .
table_valeur($Pile["vars"], (string)'left', null) .
': 15px; background-color: #fff; border: 1px solid ' .
table_valeur($Pile["vars"], (string)'foncee', null) .
'; border-bottom: 0; width: 134px; }
div.petite-rubrique, a.petite-rubrique { background: ' .
(($t1 = strval(interdire_scripts(choixsiegal(entites_html(table_valeur(@$Pile[0], (string)'ltr', null),true),'left','1','99'))))!=='' ?
		($t1 . '%') :
		'') .
' no-repeat; background-image: url(' .
interdire_scripts(chemin_image('rubrique-12.png')) .
'); padding-' .
table_valeur($Pile["vars"], (string)'left', null) .
': 15px; }
div.petit-secteur, a.petit-secteur { background: ' .
(($t1 = strval(interdire_scripts(choixsiegal(entites_html(table_valeur(@$Pile[0], (string)'ltr', null),true),'left','1','99'))))!=='' ?
		($t1 . '%') :
		'') .
' no-repeat; background-image: url(' .
interdire_scripts(chemin_image('secteur-12.png')) .
'); padding-' .
table_valeur($Pile["vars"], (string)'left', null) .
': 15px; }
div.rub-ouverte, a.rub-ouverte { padding-' .
table_valeur($Pile["vars"], (string)'right', null) .
': 10px; background: url(' .
interdire_scripts(chemin_image((	'triangle-droite' .
	table_valeur($Pile["vars"], (string)'rtl', null) .
	'.gif'))) .
') ' .
table_valeur($Pile["vars"], (string)'right', null) .
' center no-repeat; }
/* selecteur ajax */
#choix_parent_principal { background: #fff; border: 1px solid ' .
table_valeur($Pile["vars"], (string)'foncee', null) .
'; position: relative; height: 170px; overflow: auto; margin-top:5px;}
.recherche_rapide_parent {margin-top: -25px;float:right; }
.rubrique_actuelle {height: 25px; }
#selection_rubrique .informer { background: #fff; }
.informer-auteur { background: #fff; padding: 5px; border-top: 0; }

#choix_parent .item { color: #666; background-color: #fff; }
#choix_parent_principal .item { padding: 2px; display: block; }
#choix_parent .item.on { color: #000; background-color: #ccc; }
#choix_parent .item.on a {color:#000;}
#choix_parent .item:hover a { color: #000; cursor: pointer; }

/* ----- */

/* Les éléments propres à chaque objet */
' .
BOUCLE_objetshtml_539c390c2a1ced248a7627b1f08bc8e4($Cache, $Pile, $doublons, $Numrows, $SP) .
'

ul.item_picked {list-style:none;margin:0;padding:0;float:left;}
ul.item_picked li {margin:0 2px 2px;padding:2px;background:#eee;border:1px solid ' .
table_valeur($Pile["vars"], (string)'claire', null) .
';float:' .
table_valeur($Pile["vars"], (string)'left', null) .
';clear:none;background-repeat:no-repeat;background-position: ' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'left', null)))!=='' ?
		($t1 . ' ') :
		'') .
'center;}
ul.item_picked li span.sep {display:none;}
ul.item_picked li label {margin:0;display:inline;float:none;}
.js ul.item_picked li .checkbox {display: none;}


ul.item_picked.select li {padding:2px 0;border:0;font-weight:bold;background:none;float:none;}
ul.item_picked.select ul > li {float:' .
table_valeur($Pile["vars"], (string)'left', null) .
';}
ul.item_picked.changing {}

.picker_bouton {float:' .
table_valeur($Pile["vars"], (string)'right', null) .
';clear:both;}

.item_picker {clear:' .
table_valeur($Pile["vars"], (string)'left', null) .
';font-size:0.95em;}
.item_picker .chemin {border-bottom:1px solid ' .
table_valeur($Pile["vars"], (string)'claire', null) .
';margin:0.5em 0 0.25em;clear:both;}

.item_picker .frame {background:#fff;border:1px solid ' .
table_valeur($Pile["vars"], (string)'foncee', null) .
';width:159px;height:400px;float:' .
table_valeur($Pile["vars"], (string)'left', null) .
';overflow:auto;position:relative;}
.cadre .cadre_padding .item_picker .frame {width:153px;}
.fiche_objet .cadre .cadre_padding .item_picker .frame {width:148px;}
.item_picker .frame.total_3 {margin-' .
table_valeur($Pile["vars"], (string)'left', null) .
':-58px;border-' .
table_valeur($Pile["vars"], (string)'left', null) .
':3px solid ' .
table_valeur($Pile["vars"], (string)'foncee', null) .
';}
.item_picker .frame.frame_0 {margin-' .
table_valeur($Pile["vars"], (string)'left', null) .
':0;z-index:1000;}
.item_picker .frame.frame_1 {z-index:1010;}
.item_picker .frame.frame_2 {z-index:1020;}
.item_picker .frame.frame_3 {z-index:1030;}
.item_picker .frame.frame_4 {z-index:1040;}

.item_picker .frame .frame_close {float:' .
table_valeur($Pile["vars"], (string)'right', null) .
';}
.item_picker .frame h2 {margin:0;padding:5px;background:' .
(($t1 = strval(filtrer('couleur_eclaircir',table_valeur($Pile["vars"], (string)'claire', null))))!=='' ?
		('#' . $t1) :
		'') .
';font-size:1.3em;}
.item_picker .frame .pagination {font-size:0.9em;}

.item_picker .frame ul {list-style:none;margin:0;padding:0;}
.item_picker .frame ul li {display:block;clear:both;list-style:none;margin:0;padding:0 2px;padding-' .
table_valeur($Pile["vars"], (string)'left', null) .
':15px;padding-' .
table_valeur($Pile["vars"], (string)'right', null) .
':16px;position:relative;}

.item_picker .frame ul li:hover,.item_picker .frame ul li.on {background-color:' .
(($t1 = strval(filtrer('couleur_eclaircir',table_valeur($Pile["vars"], (string)'claire', null))))!=='' ?
		('#' . $t1) :
		'') .
';}
.item_picker .frame a:hover,.item_picker .frame a:hover .ouvrir,.item_picker .frame a:hover .add {background-color:' .
table_valeur($Pile["vars"], (string)'claire', null) .
';}

.item_picker .frame ul li .ouvrir {position:absolute;display:block;top:0px;' .
table_valeur($Pile["vars"], (string)'right', null) .
':0px;}
.item_picker .frame ul >li .add {float:' .
table_valeur($Pile["vars"], (string)'left', null) .
';clear:' .
table_valeur($Pile["vars"], (string)'left', null) .
';}
.item_picker .frame ul li a {display:block;}
.item_picker .frame a {text-decoration:none;}

.browser .choix_rapide {font-size:0.9em;}
.browser #picker_id {padding:0;margin:0 5px;border:1px solid;}


/* 
   Selecteurs de rubrique / article 
   ayant une classe li.selecteur_item 
   n\'ont pas de marge a gauche pour occuper toute la largeur 
*/
.formulaire_spip li.selecteur_item {
	padding-' .
table_valeur($Pile["vars"], (string)'left', null) .
':10px;background:#fff;
}
.formulaire_spip li.selecteur_item label {
	margin-' .
table_valeur($Pile["vars"], (string)'left', null) .
':0;display:block;float:left;padding:2px 0;
}

');

	return analyse_resultat_skel('html_539c390c2a1ced248a7627b1f08bc8e4', $Cache, $page, '../prive/themes/spip/picker.css.html');
}
?>