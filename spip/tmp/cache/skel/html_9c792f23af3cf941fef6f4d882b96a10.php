<?php

/*
 * Squelette : ../plugins-dist/svp/prive/style_prive_plugin_svp.html
 * Date :      Thu, 30 Aug 2012 09:12:36 GMT
 * Compile :   Thu, 30 Aug 2012 09:14:45 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/svp/prive/style_prive_plugin_svp.html
// Temps de compilation total: 2.376 ms
//

function html_9c792f23af3cf941fef6f4d882b96a10($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
'<?php header("X-Spip-Cache: 360000"); ?>'.'<?php header("Cache-Control: max-age=360000"); ?>'.'<?php header("X-Spip-Statique: oui"); ?>' .
'<'.'?php header("' . 'Content-Type: text/css; charset=iso-8859-15' . '"); ?'.'>' .
'<'.'?php header("' . 'Vary: Accept-Encoding' . '"); ?'.'>/* **************** EXEC ADMIN PLUGIN ***************** */
.box .inner .hd h3 img.close { float: ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'right', null),true)) .
'; }
.box .inner .hd h3 img.close:hover { cursor: pointer; }
.onglets_simple.second ul.verrouille li.first {margin-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
':30px;}
.onglets_simple.second ul li span.off {
	display: block;
	float: left;
	padding: 4px 7px;
	margin-bottom: 5px;
	margin-left: 0;
	margin-right: 5px;
	border: 1px solid #909090;
	background-color: #eeeeee;
	color: #6c6c6c;
	opacity: 0.6;
}

.actions_multiples .boutons { }
.actions_multiples .action { width: 30%; }

.liste-plugins fieldset,
.liste-plugins .liste.plugins,
.liste-plugins .liste.plugins .liste-items { margin-bottom: 0; }
.liste-plugins .liste-items .item {padding-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'right', null),true)) .
':30px;}
.liste-plugins .liste-items .item .check {float:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'right', null),true)) .
';margin-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'right', null),true)) .
':-25px;}

.liste-plugins .liste-items .item .cfg_link {position: absolute;top:4px; ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'right', null),true)) .
': 24px;}

.liste-plugins .liste-items .item h3 a { color: ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'foncee', null),true)) .
'; }

.liste-plugins .liste-items .item .actions { float:none;position:absolute;' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'right', null),true)) .
':0;bottom:0;padding:5px;padding-bottom:0; background: #e8e8e8; filter: alpha(opacity=60); -moz-opacity: 0.6; opacity: 0.6; z-index: 100; }
.liste-plugins .liste-items .item:hover .actions { filter: alpha(opacity=100); -moz-opacity: 1; opacity: 1; }

.liste-plugins .liste-items .item .picto_actif {position: absolute;top:4px;' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
': 4px;}
.liste-plugins .liste-items .item .picto_err {position: absolute;top:4px;' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
': 4px;}
.liste-plugins .liste-items .item .picto_verrou {position: absolute;top:24px;' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
': 4px;filter: alpha(opacity=60); -moz-opacity: 0.6; opacity: 0.6;}

.liste-plugins .liste-items .item .picto_up { position: absolute; ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'right', null),true)) .
': 46px; top:4px; }

.liste-plugins .liste-items .item.actif {  background: #e8e8e8; }
.liste-plugins .liste-items .item.actif:hover {background:#eee;}
.liste-plugins .liste-items .item.verrou { background: #e8e8e8; }
.liste-plugins .liste-items .item.inactif { background: #ffffff; }
.liste-plugins .liste-items .item.inactif:hover { background: #eee;  }
.liste-plugins .liste-items .item.inactif:hover .actions { background: #eee; }


.liste-plugins .liste-items .item .details { clear: both;}
.liste-plugins .liste-items .item .details dl { float: none; width: auto; margin-bottom: 0; }
.liste-plugins .liste-items .item .details dl.tech { float: none; clear: both; width: auto; text-align: ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
'; font-size: 1em; word-wrap: break-word; }
.liste-plugins .liste-items .item .details dl dt { float: ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
'; padding-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'right', null),true)) .
': 0.5em; }
.liste-plugins .liste-items .item .details dd { margin-bottom:0;}
.liste-plugins .liste-items .item .details .description .desc { margin-bottom: 10px; }

#afficher_incompatibles { float: right; padding: 0.5em 0; }

/* Styles des etats provoquant un affichage specifique des plugins */
/* -- installe (donc actif) */
.installe { color: #999; background: url(' .
interdire_scripts(chemin_image('fond-installe.png')) .
') repeat fixed 0 0 !important; }
.installe:hover {	background-color:#F0F0F0 !important; }
/* -- verrouille (plugins_dist)
.verrou { background:url(' .
interdire_scripts(chemin_image('fond-verrou.png')) .
') repeat fixed 0 0 #FDFDFD !important;}
.verrou:hover {	background-color:#F0F0F0 !important; }
*/
/* -- obsolete, incompatible */
.disabled,.disabled { background:url(' .
interdire_scripts(chemin_image('fond-obsolete.png')) .
') repeat fixed 0 0 #ddd !important;}
.disabled:hover {	background-color:#ccc !important; }
.liste-plugins .liste-items .item.disabled:hover .actions {background:url(' .
interdire_scripts(chemin_image('fond-obsolete.png')) .
') repeat fixed 0 0 #ccc !important}

.liste-plugins .liste-items .item.disabled h3 a { color: #aaa; }
.liste-plugins .liste-items .item.disabled .icon {filter: alpha(opacity=60); -moz-opacity: 0.6; opacity: 0.6; }
/* -- Notice d\'information sur le plugin */
.liste-plugins .liste-items .item .information { color: #8A1F11;font-weight: bold;}

/* Liste des depots */
.liste-objets.depots .caption {
    background-image: url(' .
interdire_scripts(chemin_image('depot-24.png')) .
');
    padding-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
': 30px;
}

/* Validation des actions par popin */
#colorbox #charger_plugin_confirm {font-size:110%; padding-bottom:25px;}
#colorbox #charger_plugin_confirm .reponse_formulaire {margin-bottom:1em; line-height: 1.4em;}
#colorbox #charger_plugin_confirm .boutons {
	font-size:120%;
	margin-top:.5em; margin-bottom:0;
	display:block;
	text-align:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'right', null),true)) .
';
	background:#b8beb2;
	border-radius:3px;
	position:absolute; bottom:0; width:100%;
}
#colorbox #charger_plugin_confirm .boutons .submit {
	margin-top:.5em;
	margin-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'right', null),true)) .
':.5em;
	margin-bottom:.5em;
	margin-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
':0;
}

/* Presentation des actions effectuees */
.svp_retour .fail {color:#c30000;}
.svp_retour ul {margin-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
': 0.5em;}
.svp_retour li {list-style-type:square; margin-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
': 0.5em;}
');

	return analyse_resultat_skel('html_9c792f23af3cf941fef6f4d882b96a10', $Cache, $page, '../plugins-dist/svp/prive/style_prive_plugin_svp.html');
}
?>