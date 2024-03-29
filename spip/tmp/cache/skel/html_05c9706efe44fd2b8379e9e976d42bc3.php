<?php

/*
 * Squelette : ../plugins-dist/forum/prive/style_prive_plugin_forum.html
 * Date :      Thu, 30 Aug 2012 09:12:32 GMT
 * Compile :   Thu, 30 Aug 2012 09:14:45 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/forum/prive/style_prive_plugin_forum.html
// Temps de compilation total: 6.096 ms
//

function html_05c9706efe44fd2b8379e9e976d42bc3($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

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
'.onglets_simple ul.statut_forum li.publie strong,.onglets_simple ul.statut_forum li.publie a {background-image:url(' .
interdire_scripts(chemin_image('forum-statut-publie-24.png')) .
');padding-' .
table_valeur($Pile["vars"], (string)'left', null) .
':27px;}
.onglets_simple ul.statut_forum li.off strong,.onglets_simple ul.statut_forum li.off a {background-image:url(' .
interdire_scripts(chemin_image('forum-statut-off-24.png')) .
');padding-' .
table_valeur($Pile["vars"], (string)'left', null) .
':27px;}
.onglets_simple ul.statut_forum li.spam strong,.onglets_simple ul.statut_forum li.spam a {background-image:url(' .
interdire_scripts(chemin_image('forum-statut-spam-24.png')) .
');padding-' .
table_valeur($Pile["vars"], (string)'left', null) .
':27px;}
.onglets_simple ul.statut_forum li.prop strong,.onglets_simple ul.statut_forum li.prop a {background-image:url(' .
interdire_scripts(chemin_image('forum-statut-prop-24.png')) .
');padding-' .
table_valeur($Pile["vars"], (string)'left', null) .
':27px;}

.onglets_simple ul.statut_forum li.prive strong,.onglets_simple ul.statut_forum li.prive a {background-image:url(' .
interdire_scripts(chemin_image('forum-statut-prive-24.png')) .
');padding-' .
table_valeur($Pile["vars"], (string)'left', null) .
':27px;}
.onglets_simple ul.statut_forum li.privadm strong,.onglets_simple ul.statut_forum li.privadm a {background-image:url(' .
interdire_scripts(chemin_image('forum-statut-privadm-24.png')) .
');padding-' .
table_valeur($Pile["vars"], (string)'left', null) .
':27px;}
.onglets_simple ul.statut_forum li.privrac strong,.onglets_simple ul.statut_forum li.privrac a {background-image:url(' .
interdire_scripts(chemin_image('forum-statut-privrac-24.png')) .
');padding-' .
table_valeur($Pile["vars"], (string)'left', null) .
':27px;}
.onglets_simple ul.statut_forum li.privoff strong,.onglets_simple ul.statut_forum li.privoff a {background-image:url(' .
interdire_scripts(chemin_image('forum-statut-privoff-24.png')) .
');padding-' .
table_valeur($Pile["vars"], (string)'left', null) .
':27px;}

.controler_forum .annule_filtre {float:' .
table_valeur($Pile["vars"], (string)'right', null) .
';}
.controler_forum #actiongroup button {width:100%;margin:5px 0;}

/* Habillage des forums en liste pour moderation
---------------------------------------------- */
ul.forums li.item { margin: 15px 0; padding: 0 0 .8em 0; background: #eee url(' .
interdire_scripts(chemin_image('forum-bg-item-64.png')) .
'); border: 1px solid #ccc; border-top: 8px solid #ccc; position:relative;}
ul.forums li.item:hover { background-color: #e9e9e9; }

ul.forums li.statut_publie { background-image: none; border-color: #B2BF6B; }
ul.forums li.statut_off,
ul.forums li.statut_privoff,
ul.forums li.statut_off:hover,
ul.forums li.statut_privoff:hover { background-color: #edd3d3; border-color: #FF5F5F; }
ul.forums li.statut_spam,
ul.forums li.statut_spam:hover  { background-color: #ddd; border-color: #666; }
ul.forums li.statut_prop,
ul.forums li.statut_prop:hover { background-color: #FFFBEF; border-color: #EFCA68; }

ul.forums li .cartouche { min-height: 30px; padding: 5px; padding-' .
table_valeur($Pile["vars"], (string)'left', null) .
': 30px; border-bottom: 1px solid #eee; }
ul.forums li .cartouche .numero {position: absolute;right: 5px;font-size: 1.5em;color:#bbb;font-weight: bold;font-style: italic;}
ul.forums li.statut_off .cartouche,
ul.forums li.statut_privoff .cartouche { border-color: #edd3d3; }
ul.forums li.statut_spam .cartouche { border-color: #ddd; }
ul.forums li.statut_prop .cartouche { border-color: #FFFBEF; }
ul.forums li .cartouche h3 {font-size:1.1em;margin-bottom:0.25em;}
ul.forums li .cartouche .date,ul.forums li .cartouche .par {display:inline;}
ul.forums li .cartouche .info_statut {display:block;float:' .
table_valeur($Pile["vars"], (string)'left', null) .
';margin-' .
table_valeur($Pile["vars"], (string)'left', null) .
':-30px;position:relative;display:inline;}
ul.forums li .cartouche .reponse_a {font-weight:bold;}
ul.forums li .cartouche .reponse_a a {font-weight:normal;}
ul.forums li .cartouche .lien_admin {display:block;}
ul.forums li .cartouche .statut{ float:right; width:20%; font-style:italic; text-align:right; }

ul.forums li.item .texte,ul.forums li.item .site,ul.forums li.item .urls { margin: 0; padding: 0 30px;max-height:15em;overflow-y:auto;}
ul.forums li.item .urls {border-top:1px dotted #eee;color:#666;word-wrap:break-word;}
ul.forums li.item .urls h4 {margin:0;cursor:hand;cursor:pointer;}
ul.forums li.item .texte p { margin: 0; padding: .8em 0; }

ul.forums >li.item .actions.moderer {padding-top:5px;padding-bottom:5px;margin-' .
table_valeur($Pile["vars"], (string)'right', null) .
':5px;background:url(' .
interdire_scripts(chemin_image('actions-filigrane-24.png')) .
') no-repeat bottom right;padding-' .
table_valeur($Pile["vars"], (string)'right', null) .
':30px;}
ul.forums >li.item .actions.moderer > div {visibility:hidden;}
ul.forums >li.item:hover .actions.moderer > div,ul.forums >li.item.hover .actions.moderer > div{visibility:visible;}

ul.forums li .actions .bruler input.submit {color:#af976d;}
ul.forums li .actions .supprimer input.submit {color:#cf4d4d;}
ul.forums li .checkbox {position:absolute;top:50%;left:1px;}

/* controle des forums : afficher les liens */
.controle a {
	position: relative !important;
	left:0 !important;
	right:0 !important;
	top:0 !important;
	bottom: 0 !important;
}
.controle a:after {	display: inline; content: " [\\27a0" attr(href) "]";}

/* Habillage des forums en thread pour participation
---------------------------------------------- */
.repondre { clear: both; margin-top: 2.50em; margin-right: 1em; text-align: right; font-weight: bold; }

/* Habillage des forums */
ul.forum { display: block; clear: both; margin: 0; padding: 0; font-size:11px; }
ul.forum, ul.forum ul { list-style: none; }
.forum-fil { margin-top: 1.50em; }
.forum-fil ul { display: block; margin: 0; padding: 0; margin-left: 1em; }
.forum-chapo .forum-titre, .forum-chapo .forum-titre a { display: block; margin: 0; padding: 0; font-weight: bold; color: #333; }
.forum-texte { margin: 0; padding: 0.50em 1em; color: #333; }
.forum-texte .hyperlien {}
.forum-texte .repondre { margin: 0; padding: 0.10em 0; text-align: right; }

/* Boite d\'un forum : eclaircissement progressif des bords */
' .
vide($Pile['vars'][(string)'border'] = table_valeur($Pile["vars"], (string)'foncee', null)) .
'ul .forum-message { background:#fff; border: 1px solid ' .
table_valeur($Pile["vars"], (string)'border', null) .
'; margin: 0; padding: 0; margin-bottom: 1em; }
' .
vide($Pile['vars'][(string)'border'] = (	'#' .
	filtrer('couleur_eclaircir',table_valeur($Pile["vars"], (string)'border', null)))) .
'ul ul .forum-message { border: 1px solid ' .
table_valeur($Pile["vars"], (string)'border', null) .
'; }
' .
vide($Pile['vars'][(string)'border'] = (	'#' .
	filtrer('couleur_eclaircir',table_valeur($Pile["vars"], (string)'border', null)))) .
'ul ul ul .forum-message { border: 1px solid ' .
table_valeur($Pile["vars"], (string)'border', null) .
'; }
' .
vide($Pile['vars'][(string)'border'] = (	'#' .
	filtrer('couleur_eclaircir',table_valeur($Pile["vars"], (string)'border', null)))) .
'ul ul ul ul .forum-message { border: 1px solid ' .
table_valeur($Pile["vars"], (string)'border', null) .
'; }
' .
vide($Pile['vars'][(string)'border'] = (	'#' .
	filtrer('couleur_eclaircir',table_valeur($Pile["vars"], (string)'border', null)))) .
'ul ul ul ul ul .forum-message { border: 1px solid ' .
table_valeur($Pile["vars"], (string)'border', null) .
'; }
' .
vide($Pile['vars'][(string)'border'] = (	'#' .
	filtrer('couleur_eclaircir',table_valeur($Pile["vars"], (string)'border', null)))) .
'ul ul ul ul ul ul .forum-message { border: 1px dotted ' .
table_valeur($Pile["vars"], (string)'border', null) .
'; }

/* Boite de titre d\'un forum : mise en couleur selon la profondeur du forum */
' .
vide($Pile['vars'][(string)'fond'] = (	'#' .
	filtrer('couleur_eclaircir',table_valeur($Pile["vars"], (string)'claire', null)))) .
'ul .forum-chapo { border: 0; border-bottom: 1px dotted #B8B8B8; margin: 0; padding: 3px 6px 2px 6px; background: ' .
table_valeur($Pile["vars"], (string)'fond', null) .
'; }
' .
vide($Pile['vars'][(string)'fond'] = (	'#' .
	filtrer('couleur_eclaircir',table_valeur($Pile["vars"], (string)'fond', null)))) .
'ul ul .forum-chapo { background: ' .
table_valeur($Pile["vars"], (string)'fond', null) .
'; }
' .
vide($Pile['vars'][(string)'fond'] = (	'#' .
	filtrer('couleur_eclaircir',table_valeur($Pile["vars"], (string)'fond', null)))) .
'ul ul ul .forum-chapo { background: ' .
table_valeur($Pile["vars"], (string)'fond', null) .
'; }
' .
vide($Pile['vars'][(string)'fond'] = (	'#' .
	filtrer('couleur_eclaircir',table_valeur($Pile["vars"], (string)'fond', null)))) .
'ul ul ul ul .forum-chapo { background: ' .
table_valeur($Pile["vars"], (string)'fond', null) .
'; border-bottom: 1px dotted #E0E0E0; }
' .
vide($Pile['vars'][(string)'fond'] = (	'#' .
	filtrer('couleur_eclaircir',table_valeur($Pile["vars"], (string)'fond', null)))) .
'ul ul ul ul ul .forum-chapo { background: ' .
table_valeur($Pile["vars"], (string)'fond', null) .
'; }


/* ?? */
/*
a.icone36.suivi-forum-24 { width: 100px; }
.cadre-forum { background-color: #fff; border: 1px solid #aaa; margin-bottom: 0; }
.cadre-forum div.cadre-titre { background-color: ' .
table_valeur($Pile["vars"], (string)'claire', null) .
'; border-bottom: 1px solid #aaa; color: #000; }
.cadre-thread-forum { background-color: #eee; border: 1px solid #ccc; border-top: 0; margin-bottom: 0; }
.cadre-thread-forum div.cadre-titre { background-color: #ccc; color: #000; }
*/

');

	return analyse_resultat_skel('html_05c9706efe44fd2b8379e9e976d42bc3', $Cache, $page, '../plugins-dist/forum/prive/style_prive_plugin_forum.html');
}
?>