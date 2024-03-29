<?php

/*
 * Squelette : ../prive/themes/spip/icons.css.html
 * Date :      Thu, 30 Aug 2012 09:12:29 GMT
 * Compile :   Thu, 30 Aug 2012 09:14:45 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/themes/spip/icons.css.html
// Temps de compilation total: 3.875 ms
//

function html_e55e93bae862d96f8af53d0af9625864($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
'<?php header("X-Spip-Cache: 360000"); ?>'.'<?php header("Cache-Control: max-age=360000"); ?>'.'<?php header("X-Spip-Statique: oui"); ?>' .
'<'.'?php header("' . 'Content-Type: text/css; charset=iso-8859-15' . '"); ?'.'>' .
'<'.'?php header("' . 'Vary: Accept-Encoding' . '"); ?'.'>' .
vide($Pile['vars'][(string)'iconfontsize'] = '0.9em') .
'/* * Style des icones */
/* structure html : <span class="icone danger horizontale s24 left"><a><img><b>texte</b></span> */
.icone { display:block; margin:0;padding:0;text-align: center; /*font-size: 10px;*/}
.icone a,.icone .submit {display:block;margin:0 auto;width:72px;padding: 5px 0;border:0;cursor:hand;cursor:pointer; }
.icone a:hover {text-decoration:none;}
.icone a img,.icone .submit img {margin: 0 auto; display: inline; padding: 4px; background-color: #eee; border: 2px solid ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'foncee', null),true)) .
'; background-repeat:no-repeat;background-position: center center;}
.icone a:hover img,.icone .submit:hover img  { background-color: #fff; border-color: #666; }
.icone a b,.box .icone a b,.icone .submit b,.box .icone .submit b { font-weight: bold; color: ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'foncee', null),true)) .
'; display: block; margin: 2px auto; width: 100%; font-size:' .
table_valeur($Pile["vars"], (string)'iconfontsize', null) .
';height: ' .
(($t1 = strval(interdire_scripts(div(mult(entites_html(table_valeur(@$Pile[0], (string)'line-height', null),true),'2'),table_valeur($Pile["vars"], (string)'iconfontsize', null)))))!=='' ?
		($t1 . 'em') :
		'') .
';line-height:1; }
.icone a:hover b,.icone .submit:hover b { color: #000;}

/*form.bouton_action_post.icone,form.bouton_action_post.icone div,form.bouton_action_post.icone .submit {display:block;}*/


/* alignement */
.icone.left {float:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
';}
.icone.right {float:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'right', null),true)) .
';}
.icone.center a,.icone.center .submit {margin:0 auto;}
.icone.clearleft {clear:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
';}
.icone.clearright {clear:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'right', null),true)) .
';}

/* icone verticale : precision necessaire pour IEx */
.lte7 .icone.verticale.left,.lte7 .icone.verticale.right {width:72px;}

/* icone horizontale */
.icone.horizontale {}
.icone.horizontale { display:block; clear: both;position:relative;margin:0;padding:2px;text-align: ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
';padding-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
':32px;}
.icone.horizontale a,.icone.horizontale .submit {display:inline;width:auto;padding:0;}
.lte7 .icone.horizontale a,.lte7 .icone.horizontale .submit{display:block;padding:5px 0;height: auto;}
/* pour les navigateurs modernes */
.icone.horizontale a,.icone.horizontale .submit {display:table-cell;vertical-align:middle;height:28px;}
.icone.horizontale.right {text-align: ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'right', null),true)) .
';padding-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'right', null),true)) .
':32px;padding-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
':2px;}
.icone.horizontale a img,.icone.horizontale .submit img {padding:0;border:0;background:none;position:absolute;' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
':4px;top:50%;margin-top:-12px;}
.icone.horizontale a b,.icone.horizontale .submit b {color:#666;display:inline;}
.icone.horizontale a:hover b,.icone.horizontale .submit:hover b { color: #000;}

/* variantes sans texte ou sans image */
.icones_img .icone.verticale b {display:none;}
.icones_texte .icone img {display:none;}

.icones_texte .icone.horizontale {padding:2px;}
.icones_texte .icone.horizontale a,.icones_texte .icone.horizontale .submit {display:block;padding:7px;height:auto;color: #606060;border: 1px solid #ddd; background-color: #f0f0f0;}
.icones_texte .icone.horizontale a:hover,.icones_texte .icone.horizontale .submit:hover  { text-decoration: none; color: #000; border-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'right', null),true)) .
': solid 1px #fff; border-bottom: solid 1px #fff; border-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
': solid 1px #666; border-top: solid 1px #666; background-color: #eee; }

/* danger */
.icone.danger {background:none;}
.icone.danger a,.icone.danger .submit { background: url(' .
interdire_scripts(chemin_image('rayures-sup.gif')) .
'); }
.icone.danger a img,.icone.danger .submit img { background-color: #fff; border-color: #ff9999; }
.icone.danger a:hover img,.icone.danger .submit:hover img { background-color: #fff; border-color: red; }
.icone.horizontale.danger a,.icone.horizontale.danger .submit { background: none; }
.icone.horizontale.danger a img,.icone.horizontale.danger .submit img { background: none; }
.icone.horizontale.danger { background: url(' .
interdire_scripts(chemin_image('rayures-sup.gif')) .
'); }
.icones_texte .icone.horizontale.danger {background:none;}
.icones_texte .icone.horizontale.danger a,.icones_texte .icone.horizontale.danger .submit { background: url(' .
interdire_scripts(chemin_image('rayures-sup.gif')) .
'); }

/* cas particuliers */
.icone.verticale.historique-24 { width: 90px; }
.icone.verticale.suivi-forum-24 { width: 100px; }

.icone.verticale.edition_deja,.icone.verticale.edition_deja a,.icone.verticale.edition_deja a b {width: 100px;}
.icone.verticale.edition_deja a b {height: ' .
(($t1 = strval(interdire_scripts(div(mult(entites_html(table_valeur(@$Pile[0], (string)'line-height', null),true),'3'),table_valeur($Pile["vars"], (string)'iconfontsize', null)))))!=='' ?
		($t1 . 'em') :
		'') .
';}

/* icone en bord haut du cadre */
.cadre-icone {position: absolute; top: -16px; ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
': 10px;z-index:1;}


/* barre onglet historique
<div class=\'barre_onglet\'><ul class=\'clearfix\'>
<li><strong></strong><li><a></a></li>
</ul></div>
*/
/* * Style des onglets historiques */

.barre_onglet {padding:7px;clear:both;text-align:center;}
.barre_onglet ul {
	display:-moz-inline-stack;
	display:inline-block;
	zoom:1;
	*display:inline;
	margin:0 auto;text-align:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
';padding:0;list-style:none;}
.barre_onglet li {float:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
';border: 1px solid ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'foncee', null),true)) .
';margin:0;padding:0;margin-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'right', null),true)) .
': 3px;position:relative;list-style:none;}
.barre_onglet .cadre-icone {top:-8px;left:4px;}
.barre_onglet a,.barre_onglet strong {display:block;font-weight: bold;padding: 5px;text-decoration: none;padding-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
':32px;background-color:#fff;}
.barre_onglet strong {background-color: ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'foncee', null),true)) .
'; color: #fff;}
.barre_onglet a:hover {background-color: ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'claire', null),true)) .
'; color: #fff;text-decoration: none;}


/* onglets simple 1er et second niveau
<div class=\'onglets_simple clearfix\'><ul><li><strong></strong></li><li><a></a></li></ul></div>
<div class=\'onglets_simple second clearfix\'><ul><li><strong></strong></li><li><a></a></li></ul></div>
*/
.onglets_simple { margin:1em 0;clear:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
';border-bottom:1px solid ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'foncee', null),true)) .
';padding-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
':5px;}
.onglets_simple ul {list-style:none;margin-left:1px;padding:0;}
.onglets_simple ul li {float:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
';padding:0;margin:0;margin-bottom:-1px;}

.onglets_simple ul li strong,.onglets_simple ul li a {display:block;float:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
';padding:4px 7px;border:1px solid ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'foncee', null),true)) .
';margin-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
':5px;background-color:#eee;background-position:center left;background-repeat:no-repeat;}
.onglets_simple ul li strong,.onglets_simple ul li a:hover {background-color:#f8f7f3;}
.onglets_simple ul li a:hover {cursor:hand;cursor:pointer;}
.onglets_simple ul li strong {border-bottom:1px solid #f8f7f3;color:#555;}
.onglets_simple .cadre-icone {display: none;}

.onglets_simple.second {font-size:0.9em;border:0;padding-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
':0;}
.onglets_simple.second ul li strong,.onglets_simple.second ul li a {margin-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
':0px;margin-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'right', null),true)) .
':5px;margin-bottom:5px;}
.onglets_simple.second ul li strong {border:1px solid ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'foncee', null),true)) .
';}
.onglets_simple.second ul li strong,.onglets_simple.second ul li a:hover {background-color:#fff;}


.iconeoff { padding: 3px; margin: 1px; border: 1px dashed #ccc; background-color: #f0f0f0; }
.iconeon { cursor: pointer; padding: 3px; margin: 1px; border-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'right', null),true)) .
': solid 1px #fff; border-bottom: solid 1px #fff; border-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
': solid 1px #666; border-top: solid 1px #666; background-color: #eee; }
.iconedanger { padding: 3px; margin: 1px; border: 1px dashed #000; background: url(' .
interdire_scripts(chemin_image('rayures-sup.gif')) .
'); }

/* OLDIES anciennes icones issues de php */
td.icone table {}
td.icone a { color: #000; text-decoration: none; font-size: 10px; font-weight: bold; }
td.icone a:hover { text-decoration: none; }
td.icone a img { border: 0; }
');

	return analyse_resultat_skel('html_e55e93bae862d96f8af53d0af9625864', $Cache, $page, '../prive/themes/spip/icons.css.html');
}
?>