<?php

/*
 * Squelette : ../prive/themes/spip/content.css.html
 * Date :      Thu, 30 Aug 2012 09:12:29 GMT
 * Compile :   Thu, 30 Aug 2012 09:14:45 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/themes/spip/content.css.html
// Temps de compilation total: 2.703 ms
//

function html_2733936fdd48fcb56a6c5887b834e7d5($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
'<?php header("X-Spip-Cache: 360000"); ?>'.'<?php header("Cache-Control: max-age=360000"); ?>'.'<?php header("X-Spip-Statique: oui"); ?>' .
'<'.'?php header("' . 'Content-Type: text/css; charset=iso-8859-15' . '"); ?'.'>' .
'<'.'?php header("' . 'Vary: Accept-Encoding' . '"); ?'.'>/*  ------------------------------------------
/*  Habillage des elements du contenu
/*  ------------------------------------------ */
html {background-color:#eee;}
#pied {font-size:0.9em;border-top:1px solid #ddd;background:#eee;margin-top:' .
(($t1 = strval(interdire_scripts(div(entites_html(table_valeur(@$Pile[0], (string)'margin-bottom', null),true),'0.9'))))!=='' ?
		($t1 . 'em') :
		'') .
';padding-top:' .
(($t1 = strval(interdire_scripts(div(entites_html(table_valeur(@$Pile[0], (string)'margin-bottom', null),true),'0.9'))))!=='' ?
		($t1 . 'em') :
		'') .
';overflow:hidden;}
#copyright {text-align:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'right', null),true)) .
';}

#chemin { overflow: hidden; margin: 0; padding: 0;	text-align:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
';}
#chemin > a  { color: #444; }
#chemin > a:hover { text-decoration: underline;  }

#chemin .bouton_deplacer {display:block;float:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'right', null),true)) .
';position:relative;padding:3px;padding-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
':20px;}
#chemin .bouton_deplacer .image_loading {position:absolute;top:0;' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
':0;}
.edition #chemin .bouton_deplacer,.edition #chemin #chercher_rubrique {display: none;}

#chemin .aide {padding-top: 0px; }

#haut h1,#contenu h1 {color:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'foncee', null),true)) .
';}

/* Liens hypertexte */
a { text-decoration: none; color: ' .
(($t1 = strval(interdire_scripts(filtrer('couleur_foncer',entites_html(table_valeur(@$Pile[0], (string)'foncee', null),true),'0.25'))))!=='' ?
		('#' . $t1) :
		'') .
'; }
a:hover { text-decoration: underline; }
a.icone { text-decoration: none; }
a.icone:hover { text-decoration: none; }

a.plus_info {display:block;position:absolute;' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'right', null),true)) .
':10px;}

img.puce { width: 7px; height: 7px; border: 0; }
img.lang { width: 12px; height: 12px; border: 0; }


/* * Styles generes par les raccourcis de mise en page */

.chapo { font-weight: bold; color: #333; }

#wysiwyg a { /*color: #604A7F;*/ text-decoration: underline; }
#wysiwyg a:hover { /*color: #f57900;*/ text-decoration: underline; }

.boutonlien { font-weight: bold; font-size: 9px; }
a.boutonlien:hover { color: #454545; text-decoration: none; }
a.boutonlien { color: #808080; text-decoration: none; }

a.triangle_block { margin-top: -3px; margin-bottom: -3px; margin-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'right', null),true)) .
': -3px; filter:alpha(opacity=70); -moz-opacity:0.7; opacity: 0.7; }
a.triangle_block:hover { filter: alpha(opacity=100); -moz-opacity: 1; opacity: 1; }

a.ical { background: url(' .
interdire_scripts(chemin_image('synchro-24.png')) .
') no-repeat; background-position: top center; padding-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
': 30px; padding-bottom: 20px; }

.enfants ul { list-style: none; }
.enfants ul li.rubrique_12 {background:url(' .
interdire_scripts(chemin_image('rubrique-12.png')) .
')' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true))))!=='' ?
		(' ' . $t1) :
		'') .
' center no-repeat; padding: 2px; padding-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
': 18px; margin-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
': 6px;position:relative;}


/* menu langues */
.lang_ecrire { max-height: 24px; border: 1px solid #fff; color: white; width: 100px; background: ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'foncee', null),true)) .
'; }

/* pour les puces de changement rapide de statut ; NB: ca buggue car ca s\'affiche en-dessous du cadre */
/*li .puce_statut { float: ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
'; padding-top: 5px; }
li .puce_article_popup, li.puce_breve_popup,li.puce_site_popup { padding: 0; }*/
.puce_objet { position: relative; }
.puce_objet_fixe { position: relative; }

.puce_objet_popup { position: absolute; margin-top:-2px; visibility: hidden; border: 1px solid #666; background-color: #ccc; z-index: 10; top: 0; ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
': 0;}
.puce_objet_popup img { padding: 2px; border: 0; }
.puce_objet .puce_objet_popup { visibility: hidden; }
.puce_objet.on .puce_objet_popup { visibility: visible; }

.tabs-nav a { color: ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'foncee', null),true)) .
'; }

/* generique */
#voir { overflow: hidden; }

#navigation .infos .numero { font-size: 0.769em;font-weight: bold; text-align: center; text-transform:uppercase;border-bottom: 1px solid #eee;padding-bottom: 10px;}
#navigation .infos .numero p { font-size: 2.4em; margin:5px 0;color:#333; font-family: Verdana, Geneva, sans-serif; }
#navigation .infos .noinfo { color:#ddd;}
#contenu .bandeau_actions { margin:5px 0;clear:both; }
#contenu .bandeau_actions a:hover { background: #fff; }
#contenu .logo_titre { float: ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'right', null),true)) .
'; margin: 5px 0; margin-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
': 5px; }

#contenu .fiche_objet .hd {padding-bottom: 0;}
#contenu .fiche_objet .bd {padding-top: 0;}

.infos .instituer_objet {border-bottom:1px solid #eee;margin-bottom:' .
(($t1 = strval(interdire_scripts(mult(entites_html(table_valeur(@$Pile[0], (string)'margin-bottom', null),true),'0.5'))))!=='' ?
		($t1 . 'em') :
		'') .
';}
.infos .formulaire_instituer {background: none;border: 0;margin:0 -10px;}
.infos .formulaire_instituer .reponse_formulaire {display: none;}
.infos .formulaire_instituer ul {padding-bottom: 0;margin-bottom: 0;}
.infos .formulaire_instituer .editer {padding-left: 10px;padding-right: 10px;}
.infos .formulaire_instituer .show {display:block; margin:0 -10px;padding:10px;background-color: #eee;}
.infos .formulaire_instituer .show select {width: 100%;}
.infos .formulaire_instituer .show select,
.infos .formulaire_instituer .show option {background-repeat:no-repeat;background-position: 4px center;background-color: #eee;color:inherit;}
.infos .formulaire_instituer .show img {border: 1px solid white;}
.infos .formulaire_instituer .boutons {background: none;border-top: 0;}

.infos .formulaire_instituer .statut_prepa .show {background-color: #fff;}
.infos .formulaire_instituer .statut_prop .show {background-color: #f89058;}
.infos .formulaire_instituer .statut_publie .show {background-color: #9dba00;}
.infos .formulaire_instituer .statut_poubelle .show {background-color: #000;color:#fff;}
.infos .formulaire_instituer .statut_poubelle .show select,
.infos .formulaire_instituer .statut_poubelle .show option {color:#333;}
.infos .formulaire_instituer .statut_refuse .show {background-color: #ff0000;}

#wysiwyg .label { clear: both;color:#888;}
#wysiwyg div p { margin-top: 0; }
#wysiwyg .champ {display:block;overflow: hidden;}
#wysiwyg .contenu_ps { background:#dddddd; border:1px solid #666; padding:5px;  margin:1em 0;}
#wysiwyg .contenu_ps.vide {display: none;}
#wysiwyg .contenu_ps .label {display:inline; background:none;color:#666;}
#wysiwyg .contenu_notes { background:#fff; border-top:1px solid #666; padding-top:5px; margin:1em 0; font-size: 0.9em; line-height: 1.3em;}
#wysiwyg .contenu_notes.vide {display: none;}
#wysiwyg .contenu_notes .label {display:inline;font-weight:bold;background:none;color:#000;}
#wysiwyg .contenu_notes .notes { padding-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
': 2em;}
#wysiwyg .contenu_notes .spip_note_ref {display:block;float:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
';margin-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
':-2em;}
#wysiwyg .texte {font-size:1em;}

#wysiwyg { padding:5px;font-size: 1em;clear: both;}

#wysiwyg .contenu_soustitre,
#wysiwyg .contenu_surtitre,
#wysiwyg .contenu_titre {display: none;}
#wysiwyg .vide {display: none;}
#wysiwyg .contenu_descriptif,
#wysiwyg .contenu_nom_site,
#wysiwyg .contenu_bio,
#wysiwyg .contenu_ps { background:#eeeeee; border: 1px solid #ccc; padding: 1em 1em 0em 1em; margin: 1em 0 ;}
#wysiwyg .contenu_nom_site {padding: 1em;}
#wysiwyg .contenu_descriptif .label {color:#000;background:none;display:inline;font-size:1.1em;font-weight:bold;}
#wysiwyg .label{ display: none; }
#wysiwyg .contenu_lien_titre {margin:1em 0;}
#wysiwyg .contenu_lien_titre .label{ color:#000;background:none;display:inline; font-size:1.1em;font-weight:bold;font-family:Georgia,Garamond,Times New Roman,serif;}
#wysiwyg .contenu_lien_titre .lien_titre p { display:inline;}

.site #wysiwyg .contenu_nom_site {display: none;}

.auteur #wysiwyg .contenu_nom,.infos_perso #wysiwyg .contenu_nom {display:none;}
#wysiwyg .contenu_email {margin:0.5em 0;}
#wysiwyg .contenu_email > div {display:inline;}
.auteur #wysiwyg .contenu_nom_site,.infos_perso #wysiwyg .contenu_nom_site {padding:0;border:0;background:none;margin:0.5em 0;}
.auteur #wysiwyg .contenu_nom_site > div,.infos_perso #wysiwyg .contenu_nom_site > div {display:inline;}
#wysiwyg .contenu_pgp .label {display:inline;}
#wysiwyg .contenu_pgp .pgp code {word-wrap:break-word;}


/* fond des miniatures de logos et documents */
.miniature_logo, .miniature_document {
	background: url(' .
interdire_scripts(chemin_image('fond-grille.gif')) .
') top left;
}

h2.titrem { display: block; padding-top: 6px; padding-bottom: 4px; background-repeat: no-repeat;padding-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
':16px;background-color: ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'claire', null),true)) .
';font-size:14px;}

.aide .contenu-aide,.box_mediabox .contenu-aide {padding-top:' .
(($t1 = strval(interdire_scripts(mult(entites_html(table_valeur(@$Pile[0], (string)'margin-bottom', null),true),'1.0'))))!=='' ?
		($t1 . 'em') :
		'') .
';}
.box_mediabox .contenu-aide {min-width:450px;margin-right: 15px;}');

	return analyse_resultat_skel('html_2733936fdd48fcb56a6c5887b834e7d5', $Cache, $page, '../prive/themes/spip/content.css.html');
}
?>