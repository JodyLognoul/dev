<?php

/*
 * Squelette : ../prive/themes/spip/bando.css.html
 * Date :      Thu, 30 Aug 2012 09:12:29 GMT
 * Compile :   Thu, 30 Aug 2012 09:14:45 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/themes/spip/bando.css.html
// Temps de compilation total: 4.994 ms
//

function html_0538cb35596a6f6c95882194085b1dc2($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
'<?php header("X-Spip-Cache: 360000"); ?>'.'<?php header("Cache-Control: max-age=360000"); ?>'.'<?php header("X-Spip-Statique: oui"); ?>' .
'<'.'?php header("' . 'Content-Type: text/css; charset=iso-8859-15' . '"); ?'.'>' .
'<'.'?php header("' . 'Vary: Accept-Encoding' . '"); ?'.'>#bando_haut { /*font-size: 1em;*/ position: relative; z-index: 9;}
#bando_haut a { text-decoration: none; }


#bando_haut #bando_liens_rapides {position:absolute;top:0;z-index:0;width:100%;}
#bando_haut #bando_liens_rapides.actif {z-index:11;background:#000;min-height:25px;line-height:2em;color: #fff; overflow:hidden; border-bottom:1px solid #222;}
#bando_haut #bando_liens_rapides a {color:#fff;font-weight:bold;}

#bando_haut ul{margin: 0; padding: 0; list-style: none;}

#bando_haut ul.deroulant li { /*position:relative; */float:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
'; display: block; }
#bando_haut ul.deroulant li ul li {float:none;position:static;}
#bando_haut ul.deroulant li.actif,#bando_haut ul.deroulant li.actif_tempo { background-color: #' .
interdire_scripts(filtrer('couleur_eclaircir',filtrer('couleur_eclaircir',entites_html(table_valeur(@$Pile[0], (string)'claire', null),true)))) .
'; z-index: 100; }
#bando_haut ul.deroulant li ul {border: 1px solid #aaaaaa; border-top: 0; text-align:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
'; height: auto; width: auto; display: block; position:absolute; ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
':-3000em;margin-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
':-1px; }
#bando_haut ul.deroulant li.actif ul, #bando_haut ul.deroulant li.actif_tempo ul { ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
':auto;}
#bando_haut ul.deroulant li a { display: block;  color:#444; font-weight:bold;}
#bando_haut ul.deroulant li ul li { background-color: #fff; }
#bando_haut ul.deroulant li ul li a {  }
#bando_haut ul.deroulant li ul li a:hover,
#bando_haut ul.deroulant li ul li a:focus { background-color: #' .
interdire_scripts(filtrer('couleur_eclaircir',filtrer('couleur_eclaircir',entites_html(table_valeur(@$Pile[0], (string)'claire', null),true)))) .
'; }

#bando_identite { line-height:2em; background: #' .
interdire_scripts(filtrer('couleur_eclaircir',filtrer('couleur_eclaircir',entites_html(table_valeur(@$Pile[0], (string)'claire', null),true)))) .
'; color: #666; overflow:hidden; z-index:10;position:relative;}
#bando_identite p { width: 50%; padding: 1px 0; margin:0;}
#bando_identite p img { vertical-align: middle; }
#bando_identite p.nom_site_spip { width: 45%; float:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'right', null),true)) .
';text-align:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'right', null),true)) .
'; }
#bando_identite p.session { width: 55%; float:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
'; text-align:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
'; }
#bando_identite p.session .menu_lang {  }
#bando_identite a, #bando_identite strong, #identite a { color: #666; }
#bando_identite a:hover { text-decoration: underline; }

#bando_outils { bottom:0px; width:100%; clear:both; background: ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'claire', null),true)) .
'; }

#bando_outils li.boussole {margin-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'right', null),true)) .
':20px;}
#bando_outils li.boussole a#boutonbandeautoutsite {display:block;line-height:1em;}
#bando_outils li.boussole a#boutonbandeautoutsite img {padding:2px; }
#bando_outils li.boussole a#boutonbandeautoutsite:hover,#bando_outils li.boussole a#boutonbandeautoutsite:focus {background:#fff;}
#bando_outils li.boussole a .image_loading {float:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'right', null),true)) .
';}

#bando_outils ul.deroulant {font-size:0.9em;}
#bando_outils ul.deroulant li ul {background:#fff;' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'claire', null),true))))!=='' ?
		('border:1px solid ' . $t1 . ';') :
		'') .
'padding:0px;border-top:0;padding-top:0;margin-left:-1px;}
#bando_outils ul.deroulant li ul ul {' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'claire', null),true))))!=='' ?
		('border:1px solid ' . $t1 . ';') :
		'') .
'}
#bando_outils ul.deroulant li li a { padding: 3px 3px;padding-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'right', null),true)) .
':10px;background-repeat:no-repeat;background-position:' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'right', null),true))))!=='' ?
		($t1 . ' ') :
		'') .
'3px;}
#bando_outils ul.deroulant li li { background-repeat:no-repeat;background-position:' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'left', null),true) == 'left') ? '1%':'99%'))))!=='' ?
		($t1 . ' ') :
		'') .
' center;padding-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
':15px;}

#bando_outils ul.deroulant li.haschild > a {background-image:url(' .
interdire_scripts(chemin_image((	'triangle-droite' .
	interdire_scripts(concat(entites_html(table_valeur(@$Pile[0], (string)'rtl', null),true),'.gif'))))) .
');}
#bando_outils ul.deroulant li li {background-image:url(' .
interdire_scripts(chemin_image('secteur-12.png')) .
');}
#bando_outils ul.deroulant li li li {background-image:url(' .
interdire_scripts(chemin_image('rubrique-12.png')) .
');}
#bando_outils ul.deroulant li.toutsite {background-image:none;}

#bando_outils ul.deroulant li ul li {float:none;position:relative;}
#bando_outils ul.deroulant li.actif li ul, #bando_outils ul.deroulant li.actif_tempo li ul { ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
':-3000em;}
#bando_outils ul.deroulant li li.actif >ul,#bando_outils ul.deroulant li li.actif_tempo >ul  {' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
':50px;top:1.5em;}

#bando_outils ul.deroulant li ul {width:770px;}
.large #bando_outils ul.deroulant li ul {width:970px;}
#bando_outils ul.deroulant li ul.cols_1 {width:200px;}
#bando_outils ul.deroulant li ul.cols_1 > li {width:185px;}
#bando_outils ul.deroulant li ul.cols_2 {width:350px;}
#bando_outils ul.deroulant li ul.cols_2 > li {float:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
';width:160px;}
#bando_outils ul.deroulant li ul.cols_3 {width:495px;}
#bando_outils ul.deroulant li ul.cols_3 > li {float:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
';width:150px;}

#bando_outils ul.deroulant li ul.cols_4 {width:620px;}
#bando_outils ul.deroulant li ul.cols_4 > li {float:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
';width:140px;}
.large #bando_outils ul.deroulant li ul.cols_4 {width:800px;}
.large #bando_outils ul.deroulant li ul.cols_4 > li {float:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
';width:185px;}
#bando_outils ul.deroulant li ul.cols_5 > li {float:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
';width:139px;}
.large #bando_outils ul.deroulant li ul.cols_5 > li {float:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
';width:179px;}
#bando_outils ul.deroulant li ul.cols_6 > li {float:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
';width:113px;}
.large #bando_outils ul.deroulant li ul.cols_6 > li {float:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
';width:146px;}
#bando_outils ul.deroulant li ul.cols_7 > li {float:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
';width:113px;}
.large #bando_outils ul.deroulant li ul.cols_7 > li {float:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
';width:123px;}
#bando_outils ul.deroulant li ul.cols_8 > li {float:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
';width:113px;}
.large #bando_outils ul.deroulant li ul.cols_8 > li {float:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
';width:123px;}

#bando_outils ul.creer {float:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
';}
#bando_outils ul.collaborer {float:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
';margin-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'right', null),true)) .
':20px;}
#bando_outils ul.rapides li.bouton{ float:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
'; }
#bando_outils ul.rapides li.bouton a{ display:block; padding:2px;background-position:center;background-repeat:no-repeat; }
#bando_outils ul.rapides li.bouton a span { visibility:hidden;display:block;height:24px;width:24px;overflow:hidden; }
#bando_outils ul.rapides li.bouton a:hover, #bando_outils ul.rapides li.bouton a:focus{background-color:#' .
interdire_scripts(filtrer('couleur_eclaircir',entites_html(table_valeur(@$Pile[0], (string)'claire', null),true))) .
';}
#bando_outils ul.rapides li.bouton{ margin-top:0px;}

#bando_outils #rapides {float:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'right', null),true)) .
';}
#bando_outils #rapides .formulaire_recherche {margin:3px 0;clear:none;}

#bando_navigation ul.deroulant > li {min-width:85px; max-width:115px; text-align:center; }
#bando_navigation ul li ul {min-width: 85px; max-width:250px;z-index:1;}
#bando_navigation ul li ul li {width: auto;float:none;text-align:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
';position:static;}

#bando_navigation { position: relative;z-index: 10; }
#bando_navigation { clear:both; background: #fff; }
#bando_navigation ul li a { display: block; padding: .8em 0.5em; font-weight: bold; }
#bando_navigation ul li a:hover,
#bando_navigation ul li a:focus { text-decoration: underline; }

#bando_navigation ul li.first { }
#bando_navigation ul.deroulant > li > a { color:#333; }

#bando_navigation .largeur { position:relative; }
#bando_navigation #masquer_outils{ position:absolute; ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'right', null),true)) .
':-33px; bottom:-23px; height:18px; width:18px; background:transparent url(' .
find_in_theme('images/fermer-16.png') .
') center center no-repeat;}
.navigation_sans_outils #bando_navigation { border-bottom:1px solid #ddd; }
.navigation_sans_outils #bando_navigation #masquer_outils{background-image:url(' .
find_in_theme('images/ouvrir-16.png') .
'); }
#bando_navigation #masquer_outils span{ display: none; }


/* par defaut on style pour des icones standards en 48px
Les styles pour les icones pochoir de diala sont dans themes/spip/style_prive_theme
*/

.navigation_avec_icones #bando_navigation ul.deroulant > li > a { }
.navigation_avec_icones #bando_navigation ul.deroulant > li > a:hover,
.navigation_avec_icones #bando_navigation ul.deroulant > li > a:focus { background-color: #' .
interdire_scripts(filtrer('couleur_eclaircir',entites_html(table_valeur(@$Pile[0], (string)'claire', null),true))) .
'; }

.navigation_avec_icones #bando_navigation ul li a {background-position:center 5px;background-repeat:no-repeat;padding-top:60px;}
.navigation_avec_icones #bando_navigation ul li ul li a {margin-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
':7px; margin-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'right', null),true)) .
': 1.0em; background-position:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
' center;margin-top:0;padding-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
':24px;padding-top:0.8em;}

.navigation .sous_navigation .item a {display:block;background-position:left center;margin-left:7px;padding:2px;padding-left:24px;background-repeat:no-repeat;}


/* messages de statut et d\'avertissement dans le bandeau */
div.wrap-messages, div.en_lignes { padding: 5px; border-bottom: 1px solid ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'foncee', null),true)) .
'; font-weight: bold;}
div.wrap-messages {background:#333;color:#fff;}
div.messages {margin-top:0;/*font-size: 11px;*/}
div.messages ul {text-align:left;}

div.en_lignes { /*font-size: 10px;*/}

' .
bando_images_background('') .
'
');

	return analyse_resultat_skel('html_0538cb35596a6f6c95882194085b1dc2', $Cache, $page, '../prive/themes/spip/bando.css.html');
}
?>