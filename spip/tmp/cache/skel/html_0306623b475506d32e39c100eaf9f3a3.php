<?php

/*
 * Squelette : ../plugins-dist/medias/prive/style_prive_plugin_medias.html
 * Date :      Thu, 30 Aug 2012 09:12:33 GMT
 * Compile :   Thu, 30 Aug 2012 09:14:45 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/medias/prive/style_prive_plugin_medias.html
// Temps de compilation total: 3.671 ms
//

function html_0306623b475506d32e39c100eaf9f3a3($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

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
'.formulaire_editer_document {margin-bottom: 0;}
.formulaire_editer_document .editer_dimensions input {width:7em;}
.formulaire_editer_document .editer_parent {padding-' .
table_valeur($Pile["vars"], (string)'left', null) .
':10px;}
.formulaire_editer_document .editer_parent label {margin-' .
table_valeur($Pile["vars"], (string)'left', null) .
':0;display:block;float:left;padding:2px 0;}

.formulaire_editer_document .taille_modifiee {display:block;color: red;}

.formulaire_editer_document .editer_apercu .tourner {display:block;float:' .
table_valeur($Pile["vars"], (string)'right', null) .
';}
.formulaire_editer_document .editer_apercu .tourner input.image {padding:5px;border:1px solid #eee;}

.formulaire_joindre_document .sourceup {}
.formulaire_joindre_document .infos {}
.formulaire_joindre_document .deballer_zip ul {font-size:0.9em;}
.formulaire_joindre_document .deballer_zip ul ul {font-size:1em;}
.formulaire_joindre_document .deballer_zip ol {padding-' .
table_valeur($Pile["vars"], (string)'left', null) .
':0;margin:0;word-wrap:break-word;}
.lat .formulaire_joindre_document .deballer_zip ol {max-width: 185px;}

.formulaire_joindre_document .deballer_zip .editer_options_upload_zip li {padding:0;}
.formulaire_joindre_document .deballer_zip .editer_options_upload_zip .erreur_message {margin-bottom:1em;}
#navigation .formulaire_joindre_document .sourceup, #extra .formulaire_joindre_document .sourceup {font-size:0.9em;}
#navigation .formulaire_joindre_document .deballer_zip .editer_options_upload_zip > label,
#extra .formulaire_joindre_document .deballer_zip .editer_options_upload_zip > label {float:none;}
#navigation .formulaire_joindre_document .deballer_zip .editer_options_upload_zip .choix input,
#extra .formulaire_joindre_document .deballer_zip .editer_options_upload_zip .choix input {vertical-align:top;}

.formulaire_joindre_document .editer_fichier input.file {display:block;}
.formulaire_joindre_document .editer_refdoc_joindre input.text {width:50%;}

.onglets_simple .medias .image a,.onglets_simple .medias .image strong {padding-left:27px;background: url(' .
interdire_scripts(chemin_image('media-image-16.png')) .
') no-repeat 5px center;}
.onglets_simple .medias .audio a,.onglets_simple .medias .audio strong {padding-left:27px;background: url(' .
interdire_scripts(chemin_image('media-audio-16.png')) .
') no-repeat 5px center;}
.onglets_simple .medias .video a,.onglets_simple .medias .video strong {padding-left:27px;background: url(' .
interdire_scripts(chemin_image('media-video-16.png')) .
') no-repeat 5px center;}

.onglets_simple.second ul.distant li.first,.onglets_simple.second ul.brises li.first,.onglets_simple.second ul.sanstitre li.first {margin-' .
table_valeur($Pile["vars"], (string)'left', null) .
':30px;}

.choix-type, .choix-type li {display:inline;list-style:none;margin:0;padding:0;}
.choix-type {margin:1em 0;padding:0;}


a.bouton_fermer {display:block;text-align:' .
table_valeur($Pile["vars"], (string)'right', null) .
';}

.galerie { float: none; width: 100%; padding:0;}
.galerie .pagination {clear:both;}
.galerie table { width: 100%; border: none; }
.galerie table thead { background: ' .
(($t1 = strval(filtrer('couleur_foncer',table_valeur($Pile["vars"], (string)'foncee', null))))!=='' ?
		('#' . $t1) :
		'') .
';color:#fff; }
.galerie table tbody tr:hover { background: ' .
(($t1 = strval(filtrer('couleur_eclaircir',filtrer('couleur_eclaircir',table_valeur($Pile["vars"], (string)'claire', null)))))!=='' ?
		('#' . $t1) :
		'') .
'; }
.galerie table td { min-height: 100px; vertical-align: top; }
.galerie table th, .galerie table td { padding: 0.5em .3em; border-bottom: 1px solid #ccc; }
.galerie table th.id { text-align: right; }
.galerie table td.id { width: 80px; text-align: right; vertical-align: top; line-height: normal; }
.galerie table td.id strong { font-size: 1.6em; color: #666; font-weight: normal; }
.galerie table td.statut { width: 9px; }
.galerie table td.logo { width: 250px; overflow: hidden; }
.galerie table td.logo img { /*border: 1px solid #666;*/ }
.galerie table .fichier {font-size:0.8em;width:250px;overflow:hidden;font-style:italic;}

.galerie table td.exif { width: 140px;  }
.galerie table td.exif small { display: inline; }
.galerie table td.exif .extension {}
.galerie table td.exif .dimensions { font-size: .9em; }
.galerie table td.exif .taille { font-size: .9em; font-weight: bold; color: #666; }
.galerie table td.exif .date { font-size: .9em; }
.galerie table td.descriptif { }

.galerie table .supprimer {display:block;font-size:0.8em;margin-top:1em;}

.galerie.media-image h2 { background: url(' .
interdire_scripts(chemin_image('media-image-32.png')) .
') no-repeat center left; padding: 6px;padding-left: 40px;}
.galerie.media-audio h2 { background: url(' .
interdire_scripts(chemin_image('media-audio-32.png')) .
') no-repeat center left; padding: 6px;padding-left: 40px;}
.galerie.media-video h2 { background: url(' .
interdire_scripts(chemin_image('media-video-32.png')) .
') no-repeat center left; padding: 6px;padding-left: 40px;}

.galerie table td.exif { background-repeat: no-repeat; background-position: top right; }

.popin-choisir_document {}
.popin-choisir_document .onglets_simple.second {display:none;}
.popin-choisir_document .galerie table td.id  {width:40px;}
.popin-choisir_document .galerie table td.logo  {width:200px;}
.popin-choisir_document .galerie table td.exif {width:120px;}
.popin-choisir_document .galerie table td.descriptif {max-width:150px;}
.popin-choisir_document .galerie table td {word-wrap: break-word;}

.spip_documents_legende {border:1px solid ' .
table_valeur($Pile["vars"], (string)'foncee', null) .
';text-align:center;font-size:0.9em;margin:0 0 1em;}
.spip_documents_legende dt {background:' .
table_valeur($Pile["vars"], (string)'foncee', null) .
';color:#fff;padding:5px 3px;font-weight:bold;}
.spip_documents_legende dd {padding:3px 0;margin:0;}
.spip_documents_legende dd.vignette {margin:5px 0;} 

.document_utilisations li.item {position:relative;padding-' .
table_valeur($Pile["vars"], (string)'right', null) .
':24px;}
.document_utilisations li.item .vu {position:absolute;top:0;right:0;}


.pagination .tris {float:left;}

p.actions {clear:both;}

#documents_joints {margin-top:25px;}
#documents_joints .item {text-align:center;margin-bottom:25px;padding:0;border:1px solid ' .
table_valeur($Pile["vars"], (string)'foncee', null) .
';overflow:visible;}
#documents_joints .item.image {background:#fff;}
#documents_joints .item.document {background:#ddd;}
#documents_joints .item .infos {padding:6px;}
#documents_joints .item .titrem {margin-top:0px;text-align:left;background:' .
table_valeur($Pile["vars"], (string)'foncee', null) .
';padding:5px;padding-left:16px;font-weight:bold;margin-bottom:5px;position:relative;font-size:x-small;}
#documents_joints .item .titrem .fichier {display:block;color:#fff;overflow:hidden;}
#documents_joints .item .titrem .titre {display:block;color:#000;}
#documents_joints .item .titrem .image_loading {position:absolute;bottom:-20px;right:0;}
#documents_joints .item .type {font-size:x-small;}
#documents_joints .item .raccourcis {font-size:x-small;padding:2px;}
#documents_joints .item .raccourcis span {display:block;font-weight:bold;text-align:left;}
#documents_joints .item div.mode {text-align:right;}
#documents_joints .item .actions {display:block;text-align:right;font-size:x-small;}
.lte7 #documents_joints .item div.mode button,.lte7 #documents_joints .item .actions button {font-size: 11px;}
#documents_joints .item .tourner {display:block;float:' .
table_valeur($Pile["vars"], (string)'right', null) .
';}
#documents_joints .item .tourner button {padding:1px;border:1px solid #eee;display:block;}
#documents_joints .item .tourner button img {margin:0px;}

#documents_joints .item .actions > *,
#documents_joints .item .tourner,
#documents_joints .item .mode {opacity:0.1;-moz-opacity:0.1;}
#documents_joints .item .actions a.editbox {visibility:visible;opacity:1;-moz-opacity:1;font-weight:bold;}
#documents_joints .item:hover .actions > *,
#documents_joints .item:hover .tourner,
#documents_joints .item:hover .mode,
#documents_joints .item.hover .actions > *,
#documents_joints .item.hover .tourner,
#documents_joints .item.hover .mode {visibility:visible;opacity:1;-moz-opacity:1;}

#portfolios {}
#portfolios h3 {background-color:' .
table_valeur($Pile["vars"], (string)'claire', null) .
';padding:2px 10px;color:#000;margin-bottom:0;}
#portfolios .liste_items {margin-top:0;}
#portfolios .item {clear:both;padding-' .
table_valeur($Pile["vars"], (string)'left', null) .
':82px;padding-' .
table_valeur($Pile["vars"], (string)'right', null) .
':2px;}
#portfolios .item .tourner {display:block;float:' .
table_valeur($Pile["vars"], (string)'right', null) .
';}
#portfolios .item .tourner button {border:1px solid #999;padding:0;display:block;float:' .
table_valeur($Pile["vars"], (string)'left', null) .
';margin-' .
table_valeur($Pile["vars"], (string)'left', null) .
':4px;}

#portfolios .item .spip_logos {margin-' .
table_valeur($Pile["vars"], (string)'left', null) .
':-80px;float:' .
table_valeur($Pile["vars"], (string)'left', null) .
';}
.ie6 #portfolios .item .spip_logos {display:inline;position:relative;}
#portfolios .item .titrem {margin:0 0 5px;font-size:1em;}
#portfolios .item .titrem .fichier {font-weight:normal;font-size:0.9em;font-style:italic;}
#portfolios .item .titrem .titre {display:block;font-size:1.1em;}
#portfolios .item .infos {display:block;float:' .
table_valeur($Pile["vars"], (string)'left', null) .
';}
#portfolios .item div.mode {display:block;float:' .
table_valeur($Pile["vars"], (string)'right', null) .
';clear:' .
table_valeur($Pile["vars"], (string)'right', null) .
';margin-top:-1.5em;position:relative;padding:0.2em 0.2em 0;padding-' .
table_valeur($Pile["vars"], (string)'right', null) .
':0;}
#portfolios .item .actions {display:block;float:' .
table_valeur($Pile["vars"], (string)'right', null) .
';clear:' .
table_valeur($Pile["vars"], (string)'right', null) .
';position:relative;}
#portfolios .item div.mode,#portfolios .item .actions,
#portfolios .item div.mode button,#portfolios .item .actions button {font-size:x-small;}

#portfolios .item .actions > *,
#portfolios .item .tourner,
#portfolios .item .mode {opacity:0.1;-moz-opacity:0.1;}
#portfolios .item .actions a.editbox {visibility:visible;opacity:1;-moz-opacity:1;font-weight:bold;}
#portfolios .item:hover .actions > *,
#portfolios .item:hover .tourner,
#portfolios .item:hover .mode {visibility:visible;opacity:1;-moz-opacity:1;z-index:1000;background:' .
(($t1 = strval(filtrer('couleur_eclaircir',filtrer('couleur_eclaircir',table_valeur($Pile["vars"], (string)'claire', null)))))!=='' ?
		('#' . $t1) :
		'') .
';}
#portfolios .item.hover .actions > *,
#portfolios .item.hover .tourner,
#portfolios .item.hover .mode {visibility:visible;opacity:1;-moz-opacity:1;z-index:1000;}

#portfolios .item .titre > .sanstitre {opacity:0.1;-moz-opacity:0.1;}

#portfolios .tout_supprimer span {display:block;text-align:' .
table_valeur($Pile["vars"], (string)'right', null) .
';}

.item.vu_oui {background:#f9f9f9;}');

	return analyse_resultat_skel('html_0306623b475506d32e39c100eaf9f3a3', $Cache, $page, '../plugins-dist/medias/prive/style_prive_plugin_medias.html');
}
?>