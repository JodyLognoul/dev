<?php

/*
 * Squelette : ../plugins-dist/organiseur/prive/style_prive_plugin_organiseur.html
 * Date :      Thu, 30 Aug 2012 09:12:34 GMT
 * Compile :   Thu, 30 Aug 2012 09:14:45 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/organiseur/prive/style_prive_plugin_organiseur.html
// Temps de compilation total: 2.637 ms
//

function html_4f029dbfe3e10d3dbb84405ab7374054($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

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
vide($Pile['vars'][(string)'rtl'] = interdire_scripts(choixsiegal(entites_html(table_valeur(@$Pile[0], (string)'ltr', null),true),'left','','_rtl'))) .
'.item.message .rv {color:#666;font-size:0.9em;padding-' .
table_valeur($Pile["vars"], (string)'left', null) .
':20px;background:url(' .
interdire_scripts(chemin_image('heure-16.png')) .
') no-repeat ' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'left', null)))!=='' ?
		($t1 . ' ') :
		'') .
'top;}
.item.message .rv.on {color:#000;background-image:url(' .
interdire_scripts(chemin_image('heure-on-16.png')) .
');}

.liste-objets.messages tr > .new,
.liste-objets.messages tr > .type,
.liste-objets.messages tr > .isrv {width: 16px; padding-left:2px;padding-right:2px;text-align:center;}
.liste-objets.messages tr.new td {font-weight: bold;}

/* exec=message */
.message #wysiwyg {position: relative;}
.message #wysiwyg .contenu_from .label,
.message #wysiwyg .contenu_destinataires .label,
.message #wysiwyg .contenu_titre .label,
.message #wysiwyg .contenu_date_heure .label,
.message #wysiwyg .contenu_date_fin .label {display: block;float:' .
table_valeur($Pile["vars"], (string)'left', null) .
';width:6em;clear:' .
table_valeur($Pile["vars"], (string)'left', null) .
';text-align:' .
table_valeur($Pile["vars"], (string)'right', null) .
';padding:0 10px;}
.message #wysiwyg .contenu_date_heure img {vertical-align: middle;}
.message #wysiwyg .contenu_date_fin img {vertical-align: middle;visibility: hidden;}
.message #wysiwyg .contenu_from .spip_logos {position: absolute;' .
table_valeur($Pile["vars"], (string)'right', null) .
': 0;top:0;}

.message #wysiwyg .contenu_titre {display: block;}
.message #wysiwyg .contenu_texte {clear:both;border-top: 1px solid #999;margin-top: 1em;padding-top: 1em;}

/* formulaire editer_message */
.formulaire_editer_message span.dest {padding:1px 3px;background:#EEE;border:1px solid #CCC;display:block;float:left;margin:0 4px 3px 0;}
.formulaire_editer_message span.dest:hover {background:#DDD;}
.formulaire_editer_message span.dest img {cursor:pointer;padding:1px;}
.formulaire_editer_message .fake-input {background:#FFF;border:1px solid #999;padding: 3px 3px 0; width: 100%; box-sizing: border-box; -webkit-box-sizing: border-box; -moz-box-sizing: border-box;-ms-box-sizing: border-box;}
.formulaire_editer_message .fake-input input.text {width:200px;border: 0;padding: 1px 0;margin-bottom: 3px;}
.formulaire_editer_message .editer_date_debut {padding-bottom: 0;}
.formulaire_editer_message .editer_date_fin {padding-top: 0;}

/* autocompletion */
.formulaire_editer_message input.ac_loading {	background-image : url(' .
interdire_scripts(chemin_image('searching.gif')) .
');background-position: right center;background-repeat: no-repeat;}
/*.ac_input {	width: 200px; }*/
.ac_results {	padding: 0px;	border: 1px solid WindowFrame;	background-color: Window;	text-align:left;z-index:1000;margin-top: 3px;margin-left: -3px;}
.ac_results ul {	width: 100%;	overflow: hidden !important;list-style-position: outside;	list-style: none;	padding: 0;	margin: 0;}

/*.ac_results iframe {position:absolute;	top:0;	left:0;	z-index:-1;	filter:mask();	width:3000px;	height:3000px;}*/
.ac_results li {	margin: 0px;	padding: 2px 5px;	cursor: pointer;	display: block;	width: 100%;	font-size: 1em;	overflow: hidden;}
.ac_over {	background-color: Highlight;	color: HighlightText;}

/* ?exec=messages*/');

	return analyse_resultat_skel('html_4f029dbfe3e10d3dbb84405ab7374054', $Cache, $page, '../plugins-dist/organiseur/prive/style_prive_plugin_organiseur.html');
}
?>