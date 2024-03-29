<?php

/*
 * Squelette : ../prive/themes/spip/box_skins.css.html
 * Date :      Thu, 30 Aug 2012 09:12:29 GMT
 * Compile :   Thu, 30 Aug 2012 09:14:45 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/themes/spip/box_skins.css.html
// Temps de compilation total: 5.051 ms
//

function html_571e0512b73f1d12981f98490c09aeb0($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
'<?php header("X-Spip-Cache: 360000"); ?>'.'<?php header("Cache-Control: max-age=360000"); ?>'.'<?php header("X-Spip-Statique: oui"); ?>' .
'<'.'?php header("' . 'Content-Type: text/css; charset=iso-8859-15' . '"); ?'.'>' .
'<'.'?php header("' . 'Vary: Accept-Encoding' . '"); ?'.'>' .
(($c = find_in_path('prive/themes/spip/box.css')) ? spip_file_get_contents($c) : "") .
'
/* ajustement des marges selon grille verticale en em */
.box{margin:' .
(($t1 = strval(interdire_scripts(mult(entites_html(table_valeur(@$Pile[0], (string)'margin-bottom', null),true),'1.5'))))!=='' ?
		($t1 . 'em') :
		'') .
' 0;}
.bd {padding:' .
(($t1 = strval(interdire_scripts(div(entites_html(table_valeur(@$Pile[0], (string)'margin-bottom', null),true),'2'))))!=='' ?
		($t1 . 'em') :
		'') .
' 10px;}
.bd > :first-child,.bd > :first-child > :first-child {margin-top:0;}
.bd > :last-child {margin-bottom:0;}
.hd, .ft {padding:' .
(($t1 = strval(interdire_scripts(div(entites_html(table_valeur(@$Pile[0], (string)'margin-bottom', null),true),'2'))))!=='' ?
		($t1 . 'em') :
		'') .
' 10px;}
.hd h1,.hd h2,.hd h3,.hd h4,.hd h5,.hd h6 {margin-bottom:0;}

/* **************** BLOCK SKINS ***************** */
/* ====== Contour blocks ====== */
/* remove *background-image:" to default to square corners for IE */
/* ----- simple (extends box) ----- */
.simple .inner {border:1px solid #ccc;background-color:#fcfcfc;color:#333;}
.simple .inner .hd {}
.simple b{}
/* ----- info (extends box) ----- */
.info .inner {border:2px solid ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'claire', null),true)) .
';background:#fcfcfc;}
.info .inner .hd {}
.info b{}
/* ----- note (extends box) ----- */
.note,.note .inner{border:1px solid #c2c2c2;}
.note .inner{border-color:#fff; border-width:4px; background-color:' .
(($t1 = strval(interdire_scripts(filtrer('couleur_eclaircir',entites_html(table_valeur(@$Pile[0], (string)'claire', null),true),'0.85'))))!=='' ?
		('#' . $t1) :
		'') .
';}
.note .inner .hd {}

/* ----- raccourcis (extends box) ----- */
.raccourcis .inner{border:1px solid #ccc;background-color:#eee;}
.note .inner .hd {}

/* ----- important (extends box) ----- */
.important .inner{border: 3px solid ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'foncee', null),true)) .
'; border-bottom-width:10px;background:#fff;}
.important b{}

/* ----- basic (extends box) ----- */
.basic {/*margin-bottom: -1px*/}
.basic .inner {/*padding-bottom: 1px;*/border: 1px solid #aaa;}
.basic .inner .hd {}
.basic b{}

/* ----- error, success, notice (extends box) ----- */
.box.error, .box.success, .box.notice {padding:0;backround-image:none;}
.error .inner,.success .inner,.notice .inner{border:2px solid;font-weight: normal;color:#333;}
.error .bd,.success .bd,.notice .bd {padding-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
':40px;min-height:24px;background-repeat:no-repeat;background-position: 2px 5px;}
.box.error .hd,.box.success .hd,.box.notice .hd {padding-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
':40px;}
.error .ft,.success .ft,.notice .ft {padding-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
':40px;}
.box.error .ft,.box.success .ft,.box.notice .ft {border-color:#ddd;background-color:#eee;}

.success .inner{color: #264409;border-color: #C6D880;background-color:#E6EFC2;}
.success .bd{background-image:url(' .
interdire_scripts(chemin_image('ok-32.png')) .
');}
.box.success .hd {background-color:#C6DF61;}
.box.success .hd h1,.box.success .hd h2,.box.success .hd h3,.box.success .hd h4,.box.success .hd h5,.box.success .hd h6 {background-color:#C6DF61;}

.error .inner{color: #8A1F11;border-color: #FBC2C4;background-color:#FBE3E4;}
.error .bd{background-image:url(' .
interdire_scripts(chemin_image('erreur-32.png')) .
');}
.box.error .hd {background-color:#DF454F;color:#fff;}
.box.error .hd h1,.box.error .hd h2,.box.error .hd h3,.box.error .hd h4,.box.error .hd h5,.box.error .hd h6 {background-color:#DF454F;color:#fff;}

.notice .inner{color: #514721;border-color: #FFD324;background-color:#FFF6BF;}
.notice .bd{background-image:url(' .
interdire_scripts(chemin_image('warning-32.png')) .
');}
.box.notice .hd {background-color:#FFD83F;}
.box.notice .hd h1,.box.notice .hd h2,.box.notice .hd h3,.box.notice .hd h4,.box.notice .hd h5,.box.notice .hd h6 {background-color:#FFD83F;}


/* ====== Background blocks ====== */
.highlight .inner{background-color:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'claire', null),true)) .
';}
.inverse .inner{background-color:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'foncee', null),true)) .
';color:#ffffff}

/* ====== Block headers and footers ====== */
.hd.titrem { background-repeat: no-repeat; padding-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
':16px; padding-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'right', null),true)) .
':10px;
background-color: ' .
(($t1 = strval(interdire_scripts(filtrer('couleur_eclaircir',entites_html(table_valeur(@$Pile[0], (string)'foncee', null),true)))))!=='' ?
		('#' . $t1) :
		'') .
';color: #4A4A4A; font-size:' .
(($t1 = strval(interdire_scripts(mult(entites_html(table_valeur(@$Pile[0], (string)'line-height', null),true),'1'))))!=='' ?
		($t1 . 'em') :
		'') .
';position:relative;line-height: 1;}
.hd.titrem h1,.hd.titrem h2,.hd.titrem h3,.hd.titrem h4,.hd.titrem h5,.hd.titrem h6{ font-size: 1em; color:#4A4A4A;}

.section{ background-repeat: no-repeat; padding-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
':16px; padding-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'right', null),true)) .
':10px;
background-color: ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'foncee', null),true)) .
'; color: #4A4A4A;font-size:1.2em;position:relative;}
.section h1,.section h2,.section h3,.section h4,.section h5,.section h6{font-size:100%;color:#4A4A4A;padding:0;margin:0;}

.bam{ background-repeat: no-repeat; padding-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
':16px; padding-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'right', null),true)) .
':10px;
background-color: ' .
(($t1 = strval(interdire_scripts(filtrer('couleur_foncer',entites_html(table_valeur(@$Pile[0], (string)'foncee', null),true)))))!=='' ?
		('#' . $t1) :
		'') .
'; color: #fff;font-size:1.2em; position:relative;}
.bam h1,.bam h2,.bam h3,.bam h4,.bam h5,.bam h6{font-size:100%;color:#fff;padding:0;margin:0;}

.topper{ background-repeat: no-repeat; padding-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
':16px; padding-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'right', null),true)) .
':10px;
background-color: #fff; color: #4A4A4A;font-size:1.2em; position:relative;}
.topper h1,.topper h2,.topper h3,.topper h4,.topper h5,.topper h6{font-size:100%;color:#4A4A4A;padding:0;margin:0;}

.act{	' .
(($t1 = strval(interdire_scripts(filtrer('couleur_eclaircir',entites_html(table_valeur(@$Pile[0], (string)'claire', null),true)))))!=='' ?
		('background-color: #' . $t1 . ';') :
		'') .
'
	' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'claire', null),true))))!=='' ?
		('border-top: 1px solid ' . $t1 . ';') :
		'') .
'
	margin-top:-1px;
	clear:both;
	text-align: ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'right', null),true)) .
';
}

/* Cas particuliers */
.simple.sous-rub .inner .hd {padding:0}
.simple.sous-rub .inner .hd .logo {margin:0;position:absolute;' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'right', null),true)) .
':0;top:0;z-index:1;}
.simple.sous-rub .sous-sous-rub {margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0;}

/* vieilles boites depliables/repliables
  encore maintenues mais depreciees
*/
.titrem { font-weight: bold; }
div.titrem, h3.titrem { display: block; padding-top: ' .
(($t1 = strval(interdire_scripts(div(entites_html(table_valeur(@$Pile[0], (string)'margin-bottom', null),true),'2'))))!=='' ?
		($t1 . 'em') :
		'') .
'; padding-bottom: ' .
(($t1 = strval(interdire_scripts(div(entites_html(table_valeur(@$Pile[0], (string)'margin-bottom', null),true),'2'))))!=='' ?
		($t1 . 'em') :
		'') .
'; background-repeat: no-repeat; padding-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
':16px; padding-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'right', null),true)) .
':10px;}
div.titrem a.titremancre,h3.titrem a.titremancre {padding:15px 0 0 16px;background-position: ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
' top;background-repeat: no-repeat; position:relative;float:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
';margin-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
':-16px;}
/* Deplier / Replier */
.deplie a.titremancre, .deplie a.titremancre, .depliant a.titremancre, .replie a.titremancre { height: 1px; padding-bottom: 0px; }
.replie a.titremancre { background-image: url(' .
interdire_scripts(chemin_image((	'deplierhaut' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'rtl', null),true)) .
	'.gif'))) .
'); }
.titrem.hover { background-color: ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'claire', null),true)) .
'; }
.deplie a.titremancre { background-image: url(' .
interdire_scripts(chemin_image('deplierbas.gif')) .
'); }
.impliable {}
.js .blocreplie { display: none; }
.js .titrem.blocreplie { display: block; }
.blocdeplie { display: block; background: none; }
');

	return analyse_resultat_skel('html_571e0512b73f1d12981f98490c09aeb0', $Cache, $page, '../prive/themes/spip/box_skins.css.html');
}
?>