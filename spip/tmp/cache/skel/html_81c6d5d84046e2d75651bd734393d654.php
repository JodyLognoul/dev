<?php

/*
 * Squelette : ../prive/themes/spip/forms.css.html
 * Date :      Thu, 30 Aug 2012 09:12:29 GMT
 * Compile :   Thu, 30 Aug 2012 09:14:45 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/themes/spip/forms.css.html
// Temps de compilation total: 8.603 ms
//

function html_81c6d5d84046e2d75651bd734393d654($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<?php header("X-Spip-Cache: 0"); ?>'.'<?php header("Cache-Control: no-cache, must-revalidate"); ?><?php header("Pragma: no-cache"); ?>
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
'/*
	Note sur ecran large et etroit, en [11846]
	large = 540px (ou 600px!)
	etroit = 505px
*/


/* Style des formulaires d\'edition
----------------------------------------------- */
.formulaire_spip {
	padding:0 10px 0;
	border: 1px solid ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'foncee', null),true)) .
';
	color: #333;
	background-color: #f8f8f8;
	margin: ' .
(($t1 = strval(interdire_scripts(mult(entites_html(table_valeur(@$Pile[0], (string)'margin-bottom', null),true),'1.5'))))!=='' ?
		($t1 . 'em') :
		'') .
' 0;
	position:relative; /* pour positionner le ajaxload en automatique */
}

.cadre-formulaire-editer .formulaire_spip { margin-top:0; }
.cadre-formulaire-editer {color: #444; margin-top:' .
(($t1 = strval(interdire_scripts(mult(entites_html(table_valeur(@$Pile[0], (string)'margin-bottom', null),true),'1.5'))))!=='' ?
		($t1 . 'em') :
		'') .
';position:relative;}
.cadre-formulaire-editer.popin {margin-top:0}
.cadre-formulaire-editer .image_loading {position:absolute;right:0;}

.entete-formulaire{ background:white; border:1px solid ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'foncee', null),true)) .
'; border-bottom:0; padding:' .
(($t1 = strval(interdire_scripts(div(entites_html(table_valeur(@$Pile[0], (string)'margin-bottom', null),true),'2'))))!=='' ?
		($t1 . 'em') :
		'') .
' 10px; overflow:hidden;}
.ie6 .entete-formulaire {zoom:1; /* correction IE6 */}
.formulaire_spip .cadre{border: 1px solid ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'foncee', null),true)) .
';}

/* dans les formulaires de configuration */
h3.titrem {position:relative;}
.formulaire_spip h3.titrem {background-color: ' .
(($t1 = strval(interdire_scripts(filtrer('couleur_eclaircir',entites_html(table_valeur(@$Pile[0], (string)'foncee', null),true)))))!=='' ?
		('#' . $t1) :
		'') .
';color: #4A4A4A;}

/* ul li -----*/
.formulaire_spip fieldset {padding-left:10px;padding-right:10px;}
.formulaire_spip ul {padding: ' .
(($t1 = strval(interdire_scripts(div(entites_html(table_valeur(@$Pile[0], (string)'margin-bottom', null),true),'4'))))!=='' ?
		($t1 . 'em') :
		'') .
' 0;}
.formulaire_spip ul ul,.formulaire_spip .fieldset fieldset {margin:0;}
.formulaire_spip ul,.formulaire_spip fieldset,.formulaire_spip fieldset ul, .formulaire_spip .boutons,.formulaire_spip .titrem,.formulaire_spip .legend {margin-left: -10px;margin-right: -10px;}

.formulaire_spip li {padding: ' .
(($t1 = strval(interdire_scripts(div(entites_html(table_valeur(@$Pile[0], (string)'margin-bottom', null),true),'2'))))!=='' ?
		($t1 . 'em') :
		'') .
' 10px;clear:both;overflow:hidden;}

/* label -----*/

/* Formulaires alignes a gauche c\'est le par defaut des formulaires de Spip */
.formulaire_spip li,
.formulaire_spip li.gauche {padding-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
':140px;}
/* et le redefaire pour les listes spip :( */
.formulaire_spip .spip li {padding:0;clear:none;overflow:visible;}

.formulaire_spip li label,
.formulaire_spip li.gauche label {
	color: #4444;
	width: 114px;
	float:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
';
	margin-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
':-130px;
	text-align: ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
';
	/*vertical-align: top;*/
}
.ie6 .formulaire_spip li label,.ie6 .formulaire_spip li.gauche label {position:relative;display:inline;}

.formulaire_spip .long_label {padding-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
':270px;}
.formulaire_spip .long_label label {width: 250px;margin-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
':-260px;}

/* Formulaires avec label en haut */
/* les cas particuliers des edition pleines largeur */
.formulaire_spip .editer_parent,
.formulaire_spip .editer_groupe_mot,
.formulaire_spip .editer_descriptif,
.formulaire_spip .editer_chapo,
.formulaire_spip .editer_texte,
.formulaire_spip .editer_ps,
.formulaire_spip .haut,
.formulaire_spip .pleine_largeur { padding-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
':10px;}

.formulaire_spip .editer_parent label,
.formulaire_spip .editer_groupe_mot label,
.formulaire_spip .editer_descriptif label,
.formulaire_spip .editer_chapo label,
.formulaire_spip .editer_texte label,
.formulaire_spip .editer_ps label,
.formulaire_spip .haut label,
.formulaire_spip .pleine_largeur label {display: block;float: none;width:auto;margin-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
': 0;}

.formulaire_spip li.obligatoire label,
.formulaire_spip li.obligatoire.gauche label {color: black;font-weight: bold;}

/* cas exotique d\'un label dans une erreur (ie confirmez que vous etes sur ) */
.formulaire_spip .erreur_message label { float:none;display:inline;font-weight:normal;margin-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
': 0;}


/* elements du formulaire */
.formulaire_spip input.text,
.formulaire_spip input.password,
.formulaire_spip textarea,
.formulaire_spip select { font-size:1em;padding: 3px; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box;-ms-box-sizing: border-box; box-sizing: border-box;}

.lte7 .formulaire_spip input.text,
.lte7 .formulaire_spip input.password,
.lte7 .formulaire_spip textarea,
.lte7 .formulaire_spip select { width: 96%;margin:0;display: inline;margin-left:0;}
.lte7 .formulaire_spip textarea {margin-left: 10px;}

.formulaire_spip input.text,
.formulaire_spip input.password,
.formulaire_spip input.file,
.formulaire_spip select { font-size: inherit;font-family:inherit}
.formulaire_spip textarea {padding: ' .
(($t1 = strval(interdire_scripts(div(entites_html(table_valeur(@$Pile[0], (string)'margin-bottom', null),true),'4'))))!=='' ?
		($t1 . 'em') :
		'') .
' 5px;overflow: auto;font-size: inherit;font-family:inherit;line-height: inherit;}

.formulaire_spip input.placeholder,
.formulaire_spip textarea.placeholder {color:#888;}
.formulaire_spip li.obligatoire input.text {font-weight: bold;}


.formulaire_spip .erreur {background-color:#FBE3E4;}
.formulaire_spip li .erreur_message {	display: block;color: #8A1F11;font-weight:bold;}
.formulaire_spip .erreur input.text,
.formulaire_spip .erreur input.password,
.formulaire_spip .erreur textarea {border:2px solid #FBC2C4;}

/* sous choix */
.formulaire_spip .choix label {font-weight:normal;text-transform: none;float:none;display:inline;margin-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
': 5px;color: #666666;}
.formulaire_spip .choix .radio,
.formulaire_spip .choix .checkbox {width:auto;}

/* reponses succes/erreur */

.formulaire_spip .reponse_formulaire,
.error,.success,.notice {border:2px solid;color:#333;font-weight: normal;padding:' .
(($t1 = strval(interdire_scripts(div(entites_html(table_valeur(@$Pile[0], (string)'margin-bottom', null),true),'2'))))!=='' ?
		($t1 . 'em') :
		'') .
' 10px;padding-left:40px;min-height:24px;background-repeat:no-repeat;background-position: 2px 5px;margin-bottom:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'margin-bottom', null),true)) .
';margin-top:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'margin-bottom', null),true)) .
';}
.formulaire_spip .reponse_formulaire_ok, .success {color: #264409;border-color: #C6D880;background-color:#E6EFC2;background-image:url(' .
interdire_scripts(chemin_image('ok-24.png')) .
');}
.formulaire_spip .reponse_formulaire_erreur, .error {color: #8A1F11;border-color: #FBC2C4;background-color:#FBE3E4;background-image:url(' .
interdire_scripts(chemin_image('erreur-24.png')) .
');}
.notice {color: #514721;border-color: #FFD324;background-color:#FFF6BF;background-image:url(' .
interdire_scripts(chemin_image('warning-24.png')) .
');}


/* Explications */
.formulaire_spip p {}
.formulaire_spip .explication {display:block;padding: 5px;background-color: #e9e9e9;margin:0;}
.formulaire_spip li .explication a {}

/* Remarques importantes */
.formulaire_spip .attention { display: block; margin-bottom: ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'margin-bottom', null),true)) .
'; font-weight: normal; }



.formulaire_spip input.submit,
.formulaire_spip input.reset,
.formulaire_spip input.button {
	width: auto;
}

/* icone d\'aide */
.formulaire_spip li .aide {padding-top: 0px;}


/* Fieldset */
.formulaire_spip li.fieldset {padding:0;}
.formulaire_spip fieldset {border: 0;width:auto;border-top: 1px solid #ccc;margin-top: ' .
(($t1 = strval(interdire_scripts(div(entites_html(table_valeur(@$Pile[0], (string)'margin-bottom', null),true),'4'))))!=='' ?
		($t1 . 'em') :
		'') .
';padding-bottom:' .
(($t1 = strval(interdire_scripts(div(entites_html(table_valeur(@$Pile[0], (string)'margin-bottom', null),true),'4'))))!=='' ?
		($t1 . 'em') :
		'') .
';}

.formulaire_spip h3.legend,
.formulaire_spip legend {display: block;padding-top: 7px;padding-bottom: 7px;background-color: #eee;color: black;font-weight: normal;padding-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
': 10px;padding-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'right', null),true)) .
': 5px;}

.formulaire_spip li fieldset label {color: #444444;}
.formulaire_spip li fieldset input.text, .formulaire_spip li fieldset textarea.textarea {border: 1px solid #aaaaaa;}


/* boutons */
.formulaire_spip .boutons { margin-bottom:0;clear:both;padding: ' .
(($t1 = strval(interdire_scripts(div(entites_html(table_valeur(@$Pile[0], (string)'margin-bottom', null),true),'2'))))!=='' ?
		($t1 . 'em') :
		'') .
' 10px;text-align: ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'right', null),true)) .
';background-color: #' .
interdire_scripts(filtrer('couleur_eclaircir',entites_html(table_valeur(@$Pile[0], (string)'claire', null),true))) .
';border-top: 1px solid ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'claire', null),true)) .
';}

#navigation .formulaire_spip .boutons,
#extra .formulaire_spip .boutons { padding: ' .
(($t1 = strval(interdire_scripts(div(entites_html(table_valeur(@$Pile[0], (string)'margin-bottom', null),true),'4'))))!=='' ?
		($t1 . 'em') :
		'') .
' 5px}

.formulaire_spip .boutons .image_loading {float:none;}
/* Bouton de validation */
input[type="file"] {border: none;background-color: transparent;}
/* Pour IE, qui grossit le bouton submit */
input[type="submit"],input[type="reset"] {font-size: inherit;}


/*
 * Formulaires compactes en colonnes laterales
 */
.lat .formulaire_spip,.lat .formulaire_spip fieldset {padding:0 5px;}
.lat .formulaire_spip ul,.lat .formulaire_spip fieldset,.lat .formulaire_spip .boutons,.lat .formulaire_spip .titrem,.lat .formulaire_spip .legend {margin-left: -5px;margin-right: -5px;}

.lte7 .lat .formulaire_spip input.text,.lte7 .lat .formulaire_spip textarea {margin-left: 5px;} /* BUG IE7 */
.lat .formulaire_spip {}
.lat .formulaire_spip h3.titrem {font-size:1em;/*padding:' .
(($t1 = strval(interdire_scripts(div(entites_html(table_valeur(@$Pile[0], (string)'margin-bottom', null),true),'4'))))!=='' ?
		($t1 . 'em') :
		'') .
' 5px;*/}

.lat .formulaire_spip li {padding: ' .
(($t1 = strval(interdire_scripts(div(entites_html(table_valeur(@$Pile[0], (string)'margin-bottom', null),true),'4'))))!=='' ?
		($t1 . 'em') :
		'') .
' 5px;}

.lat .formulaire_spip li label {text-transform: none;color: #444444;display:block;font-weight: normal;float:none;padding: 0;width:auto;margin-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
':0;}
.lat .formulaire_spip select { width:auto;padding:1px 0;}
.lat .formulaire_spip input {padding: 1px 0;}
.lat .formulaire_spip textarea {padding: 2px;}
.lat .formulaire_spip input.file {font-size: 0.9em;}

.lat .formulaire_spip li .choix label {display:inline;}

/* Champs particuliers, trans-forms */
.formulaire_spip .editer_parent,
.formulaire_spip .editer_groupe_mot,
.formulaire_editer_auteur .editer_statut {background-color: ' .
(($t1 = strval(interdire_scripts(filtrer('couleur_eclaircir',entites_html(table_valeur(@$Pile[0], (string)'couleur_claire', null),true)))))!=='' ?
		('#' . $t1) :
		'') .
';margin-top:5px;padding-bottom:' .
(($t1 = strval(interdire_scripts(div(entites_html(table_valeur(@$Pile[0], (string)'margin-bottom', null),true),'2'))))!=='' ?
		($t1 . 'em') :
		'') .
';}
.formulaire_spip .editer_parent .rubrique_actuelle {clear:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
';}

.formulaire_spip li.editer_parent label,
.formulaire_spip li.editer_groupe_mot label {
	color: black;
	font-weight: bold;
}


/* Formulaires particuliers ----------------------------------------------------------------*/
.formulaire_editer_article li.editer_liens_sites {border-bottom: 1px solid #ccc;}

/* edition d\'un auteur */
.formulaire_editer_auteur .editer_identification fieldset{' .
(($t1 = strval(interdire_scripts(filtrer('couleur_eclaircir',filtrer('couleur_eclaircir',entites_html(table_valeur(@$Pile[0], (string)'claire', null),true))))))!=='' ?
		('background-color: #' . $t1 . ';') :
		'') .
'}
.formulaire_editer_auteur li.editer_statut {	padding-top:10px;}
.formulaire_editer_auteur li.editer_statut .instituer_auteur {margin-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
':-130px;margin-top:10px;}
.formulaire_editer_auteur li.editer_statut .rubriques_restreintes > p {margin-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
':0;margin-bottom:0;margin-top:10px;}


.formulaire_spip .toggle_box_link {position:absolute;top:5px;' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'right', null),true)) .
':5px;}

.formulaire_editer_logo {}
#navigation .formulaire_editer_logo .apercu,#navigation .formulaire_editer_logo .ajouter_survol {text-align: center;}
.formulaire_editer_logo .taille {font-size: 0.9em;}

.formulaire_configurer_multilinguisme #langues_bloquees li,
.formulaire_configurer_multilinguisme #langues_proposees li { padding:0 5px;margin-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'right', null),true)) .
':10px;float:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
';width:45%;clear:none;}
.formulaire_configurer_multilinguisme .traduite label {text-decoration:underline;}
.formulaire_configurer_multilinguisme #langues_bloquees label {color: ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'foncee', null),true)) .
';font-weight: bold; }

/* config/reducteur */
.formulaire_configurer_reducteur .vignette_reducteur {text-align: center; float: ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
';padding:2px; border:2px solid #ddd; width:154px;padding-top:150px;margin:2px;background-position: top center;background-repeat: no-repeat;}
.formulaire_configurer_reducteur .vignette_reducteur:hover {border-color:#bbb;background-color:#ddd;}
.formulaire_configurer_reducteur .vignette_reducteur.on { font-weight: bold; border:2px solid ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'claire', null),true)) .
';background-color:#fff; }
.formulaire_configurer_reducteur .vignette_reducteur.on:hover {border-color:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'foncee', null),true)) .
';}

/* dater */
.formulaire_dater li {padding-bottom:0;padding-top:0;}
.formulaire_dater li label {font-weight: bold;text-transform: uppercase;font-size:0.9em;}
.formulaire_dater .aide {float:' .
table_valeur($Pile["vars"], (string)'right', null) .
'}
.lte7 .formulaire_dater a.aide {margin-top: -16px;position: relative;display: inline;}
.formulaire_dater .affiche {font-weight: bold;text-transform: uppercase;}
.formulaire_dater .saisie_redac {display:block;}

/* editer_liens */
.formulaire_editer_liens .liste-objets {border:0;margin-left:-10px;margin-right:-10px;}
.formulaire_editer_liens .liste-objets-associer .caption {font-size:0.9em;}
.formulaire_editer_liens .liste-objets-associer .caption span.recherche {float:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'right', null),true)) .
';margin-top:-3px;font-size:0.9em;}
.formulaire_editer_liens .liste-objets-associer .caption span.recherche .tout_voir {font-size:0.8em;}
.formulaire_editer_liens h3,.formulaire_editer_liens .titrem {margin:0 -10px;padding:' .
(($t1 = strval(interdire_scripts(div(entites_html(table_valeur(@$Pile[0], (string)'margin-bottom', null),true),'2'))))!=='' ?
		($t1 . 'em') :
		'') .
';}
.formulaire_editer_liens .liste-objets-lies {margin-bottom: 0;}
.formulaire_editer_liens .selecteur > .titrem {margin-bottom:0;}
.formulaire_editer_liens .selecteur .tout_voir {visibility:hidden;}
.formulaire_editer_liens .selecteur.filtre .tout_voir {visibility:visible;}
.formulaire_editer_liens.non_editable input,.formulaire_editer_liens.non_editable button {display:none;}
.formulaire_editer_liens .action {text-align: ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'right', null),true)) .
';}
.formulaire_editer_liens .liste-objets tr > .action {text-align: ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'right', null),true)) .
';width:120px;}
.lte7 .formulaire_editer_liens .liste-objets tr > .action button {font-size: 1em;}
.formulaire_editer_liens .liste-objets tr > .action button img {float:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'right', null),true)) .
';margin-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
':5px;}
.lte7 .formulaire_editer_liens .liste-objets tr > .action button img {display: inline;float: none;}

.formulaire_editer_liens .associer_mot.obligatoire.nonvu {background-color:#FFCDAF;}
.formulaire_editer_liens .associer_mot select,.formulaire_editer_liens .associer_mot input.text {width:75%;}
.formulaire_editer_liens .associer_mot .submit {float:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'right', null),true)) .
';font-weight:normal;}

/* retour visuel a la suppression et a l\'ajout */
.remove {background-color:#FFD0BF;}
.append {background-color:#E0FFCF;}

/* formulaire de recherche : */
/* version old style */
.spip_recherche { float: ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'right', null),true)) .
'; border:0;background:none;}
.spip_recherche .recherche { float:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
';padding:3px;padding-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'right', null),true)) .
':30px;width: 186px;/*font-size: 10px;*/ border: 1px solid #fff; background-color: ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'foncee', null),true)) .
'; color: #fff; margin: 0 0 6px; }
.spip_recherche .submit {float: ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
';margin-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
':-24px;margin-top:1px;}
/* version moderne */
.formulaire_spip.formulaire_recherche { float: ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'right', null),true)) .
'; border:0;background:none;border: 1px solid #fff; background-color: ' .
(($t1 = strval(interdire_scripts(filtrer('couleur_foncer',entites_html(table_valeur(@$Pile[0], (string)'foncee', null),true)))))!=='' ?
		('#' . $t1) :
		'') .
'; margin: 0 0 6px;position:relative;padding:0;z-index:1;}
.box_mediabox .formulaire_spip.formulaire_recherche {z-index:1} /* focus dans la mediabox */
.largeur .formulaire_spip.formulaire_recherche .text,.box_mediabox .formulaire_spip.formulaire_recherche .text{ float:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
';padding:3px;width: 200px;background-color:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'foncee', null),true)) .
';border:none;border-right:1px solid #fff;/*font-size: 10px;*/ color: #fff;  margin:0;min-height:20px;}
.lte8 .largeur .formulaire_spip.formulaire_recherche .text {min-height:14px} /* IE<=8 ne supporte pas -ms-box-sizing:border-box; */
.formulaire_spip.formulaire_recherche .text.cancelable {padding-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
':20px}
.formulaire_spip.formulaire_recherche .text::-webkit-input-placeholder { color:#eee; }
.formulaire_spip.formulaire_recherche .text:-moz-placeholder { color:#eee; }
.formulaire_spip.formulaire_recherche .text.placeholder { color:#eee; }

.formulaire_spip.formulaire_recherche .cancel {float: ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
';line-height:1px;position:absolute;top:2px;left:2px;}
.formulaire_spip.formulaire_recherche label {display:none;}
.formulaire_spip.formulaire_recherche .submit,.formulaire_spip.formulaire_recherche .image {float: ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
';margin-top:0px;padding:0 2px;}

/* formulaire_traduire */
.formulaire_traduire .liste-objets {margin-top:0;margin-bottom:0;}
.formulaire_traduire .liste-objets .first_row {display:none;}
.formulaire_traduire .supprimer_trad {float:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'right', null),true)) .
';}

/* les boutons action */
form.bouton_action_post, form.bouton_action_post div {display:inline;}
form.bouton_action_post.link button.submit, .formulaire_spip .boutons input.link,.formulaire_spip button.link {margin:0;font-weight:normal;}

.formulaire_spip button {cursor:pointer;}
form.bouton_action_post.link button.submit, .formulaire_spip .boutons input.link,.formulaire_spip button.link {background:none;border:0;cursor:pointer;padding:0 0 1px;color:#444;}
form.bouton_action_post.link button.submit:hover, .formulaire_spip .boutons input.link:hover,.formulaire_spip button.link:hover {border-bottom:1px solid;padding:0;}

/* formulaire_editer_logo */
.formulaire_editer_logo .titrem,.formulaire_editer_logo .ajouter_survol {text-transform: uppercase;}');

	return analyse_resultat_skel('html_81c6d5d84046e2d75651bd734393d654', $Cache, $page, '../prive/themes/spip/forms.css.html');
}
?>