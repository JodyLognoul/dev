<?php

/*
 * Squelette : ../plugins-dist/petitions/prive/style_prive_plugin_petitions.html
 * Date :      Thu, 30 Aug 2012 09:12:35 GMT
 * Compile :   Thu, 30 Aug 2012 09:14:45 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/petitions/prive/style_prive_plugin_petitions.html
// Temps de compilation total: 2.366 ms
//

function html_146227a3bf63259df0a35135618db22e($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

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
'.onglets_simple ul.statut_petition li.publie strong,.onglets_simple ul.statut_petition li.publie a {background-image:url(' .
interdire_scripts(chemin_image('signature-statut-publie-24.png')) .
');padding-' .
table_valeur($Pile["vars"], (string)'left', null) .
':27px;}
.onglets_simple ul.statut_petition li.poubelle strong,.onglets_simple ul.statut_petition li.poubelle a {background-image:url(' .
interdire_scripts(chemin_image('signature-statut-poubelle-24.png')) .
');padding-' .
table_valeur($Pile["vars"], (string)'left', null) .
':27px;}
.onglets_simple ul.statut_petition li.prop strong,.onglets_simple ul.statut_petition li.prop a {background-image:url(' .
interdire_scripts(chemin_image('signature-statut-prop-24.png')) .
');padding-' .
table_valeur($Pile["vars"], (string)'left', null) .
':27px;}

.controler_petition .annule_filtre {float:' .
table_valeur($Pile["vars"], (string)'right', null) .
';}
.controler_petition #actiongroup button {width:100%;margin:5px 0;}

/* Habillage des signatures en liste pour moderation
---------------------------------------------- */
ul.signatures li.item { margin: 15px 0; padding: 0 0 .8em 0; background: #eee url(' .
interdire_scripts(chemin_image('petition-bg-item-64.png')) .
'); border: 1px solid #ccc; border-top: 8px solid #ccc; position:relative;}
ul.signatures li.item:hover { background-color: #e9e9e9; }

ul.signatures li.statut_publie { background-image: none; border-color: #9dba00; }
ul.signatures li.statut_poubelle { background-color: #edd3d3; border-color: #ff0000; }
ul.signatures li.statut_prop { background-color: #FFFBEF; border-color: #EFCA68; }

ul.signatures li .cartouche { min-height: 30px; padding: 5px; padding-' .
table_valeur($Pile["vars"], (string)'left', null) .
': 30px; border-bottom: 1px solid #eee; }
ul.signatures li.statut_poubelle .cartouche { border-color: #edd3d3; }
ul.signatures li.statut_prop .cartouche { border-color: #FFFBEF; }
ul.signatures li .cartouche h3 {font-size:1.1em;margin-bottom:0.25em;}
ul.signatures li .cartouche .date,
ul.signatures li .cartouche .par {display:inline;}
ul.signatures li .cartouche .info_statut {display:block;float:' .
table_valeur($Pile["vars"], (string)'left', null) .
';margin-' .
table_valeur($Pile["vars"], (string)'left', null) .
':-30px;position:relative;display:inline;}
ul.signatures li .cartouche .reponse_a p {margin:0;}
ul.signatures li .cartouche .reponse_a {font-weight:bold;}
ul.signatures li .cartouche .reponse_a a {font-weight:normal;}
ul.signatures li .cartouche .lien_admin {display:block;}

ul.signatures li.item .texte { margin: 0; padding: .8em 30px; }

ul.signatures >li.item .actions.moderer {padding-top:5px;padding-bottom:5px;margin-' .
table_valeur($Pile["vars"], (string)'right', null) .
':5px;background:url(' .
interdire_scripts(find_in_path('images/actions-filigrane-24.png')) .
') no-repeat bottom right;padding-' .
table_valeur($Pile["vars"], (string)'right', null) .
':30px;}
ul.signatures >li.item:hover .actions.moderer {/*background-image:none;*/}
ul.signatures >li.item .actions.moderer > span {visibility:hidden;}
ul.signatures >li.item:hover .actions.moderer > span,ul.signatures >li.item.hover .actions.moderer > span  {visibility:visible;}

ul.signatures li .actions .supprimer input.submit {color:#cf4d4d;}
ul.signatures li .checkbox {position:absolute;top:50%;left:1px;}
');

	return analyse_resultat_skel('html_146227a3bf63259df0a35135618db22e', $Cache, $page, '../plugins-dist/petitions/prive/style_prive_plugin_petitions.html');
}
?>