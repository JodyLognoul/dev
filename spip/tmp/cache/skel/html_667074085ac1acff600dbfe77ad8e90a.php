<?php

/*
 * Squelette : ../prive/themes/spip/typo.css.html
 * Date :      Thu, 30 Aug 2012 09:12:29 GMT
 * Compile :   Thu, 30 Aug 2012 09:14:45 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/themes/spip/typo.css.html
// Temps de compilation total: 9.881 ms
//

function html_667074085ac1acff600dbfe77ad8e90a($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

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
'/* Valeurs par defaut :
' .
vide($Pile['vars'][(string)'font-size'] = interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'font-size', null), '1em'),true))) .
(($t1 = strval(table_valeur($Pile["vars"], (string)'font-size', null)))!=='' ?
		(' font-size: ' . $t1 . ';') :
		'') .
'
' .
vide($Pile['vars'][(string)'line-height'] = interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'line-height', null), '1.2em'),true))) .
(($t1 = strval(table_valeur($Pile["vars"], (string)'line-height', null)))!=='' ?
		(' line-height: ' . $t1 . ';') :
		'') .
'
' .
vide($Pile['vars'][(string)'margin-bottom'] = interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'margin-bottom', null), '1.2em'),true))) .
(($t1 = strval(table_valeur($Pile["vars"], (string)'margin-bottom', null)))!=='' ?
		(' margin-bottom: ' . $t1 . ';') :
		'') .
'
' .
vide($Pile['vars'][(string)'text-indent'] = interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'text-indent', null), '50px'),true))) .
(($t1 = strval(table_valeur($Pile["vars"], (string)'text-indent', null)))!=='' ?
		(' text-indent: ' . $t1 . ';') :
		'') .
'
' .
vide($Pile['vars'][(string)'font-family'] = interdire_scripts(sinon(table_valeur(@$Pile[0], (string)'font-family', null), 'Verdana, Geneva, sans-serif'))) .
(($t1 = strval(table_valeur($Pile["vars"], (string)'font-family', null)))!=='' ?
		(' font-family: ' . $t1 . ';') :
		'') .
'
' .
vide($Pile['vars'][(string)'background-color'] = interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'background-color', null), (	'#F8F7F3')),true))) .
(($t1 = strval(table_valeur($Pile["vars"], (string)'background-color', null)))!=='' ?
		(' background-color : ' . $t1 . ';') :
		'') .
'
' .
vide($Pile['vars'][(string)'color'] = interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'color', null), '#000000'),true))) .
(($t1 = strval(table_valeur($Pile["vars"], (string)'color', null)))!=='' ?
		(' color: ' . $t1 . ';') :
		'') .
'
*/

html { font-size: 100.01%; } /* Cf.: http://www.pompage.net/pompe/definir-des-tailles-de-polices-en-CSS/ */
body { background: ' .
table_valeur($Pile["vars"], (string)'background-color', null) .
'; font: ' .
table_valeur($Pile["vars"], (string)'font-size', null) .
'/' .
table_valeur($Pile["vars"], (string)'line-height', null) .
(($t1 = strval(table_valeur($Pile["vars"], (string)'font-family', null)))!=='' ?
		(' ' . $t1) :
		'') .
'; color: ' .
table_valeur($Pile["vars"], (string)'color', null) .
'; }

/* Titraille / Intertitres */
h1,h2,h3,h4,h5,h6,
.h1,.h2,.h3,.h4,.h5,.h6 { margin: 0; padding: 0; font-size: 100%; font-weight: normal; }
hr { height: 1px; margin:' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'margin-bottom', null)))!=='' ?
		(' ' . $t1) :
		'') .
' 0; border: 0; background: ' .
table_valeur($Pile["vars"], (string)'color', null) .
'; color: ' .
table_valeur($Pile["vars"], (string)'color', null) .
'; }

/* Titraille Blueprint
Cf. : http://www.blueprintcss.org/tests/parts/elements.html
h1 { font-size: 3em; line-height: 1; margin-bottom: 0.5em; }
h2 { font-size: 2em; margin-bottom: 0.75em; }
h3 { font-size: 1.5em; line-height: 1; margin-bottom: 1em; }
h4 { font-size: 1.2em; line-height: 1.25; margin-bottom: 1.25em; }
h5 { font-size: 1em; font-weight: bold; margin-bottom: 1.5em; }
h6 { font-size: 1em; font-weight: bold; }*/

' .
vide($Pile['vars'][(string)'coeff'] = div(div(plus(table_valeur($Pile["vars"], (string)'line-height', null),'2'),'2'),table_valeur($Pile["vars"], (string)'line-height', null))) .
vide($Pile['vars'][(string)'coeffinv'] = div('1',table_valeur($Pile["vars"], (string)'coeff', null))) .
'h1,.h1 {' .
(($t1 = strval(mult(table_valeur($Pile["vars"], (string)'line-height', null),table_valeur($Pile["vars"], (string)'coeff', null))))!=='' ?
		(' font-size: ' . $t1 . 'em') :
		'') .
';' .
(($t1 = strval(mult(table_valeur($Pile["vars"], (string)'coeffinv', null),'2')))!=='' ?
		(' line-height: ' . $t1 . 'em') :
		'') .
';' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'coeffinv', null)))!=='' ?
		(' margin-bottom: ' . $t1 . 'em;') :
		'') .
'}
h2,.h2 {' .
(($t1 = strval(mult(table_valeur($Pile["vars"], (string)'line-height', null),'1')))!=='' ?
		(' font-size: ' . $t1 . 'em') :
		'') .
'; line-height: 1; margin-bottom: 1em; font-weight: bold;}
' .
vide($Pile['vars'][(string)'coeff'] = div(div(plus(table_valeur($Pile["vars"], (string)'line-height', null),'1'),'2'),table_valeur($Pile["vars"], (string)'line-height', null))) .
vide($Pile['vars'][(string)'coeffinv'] = div('1',table_valeur($Pile["vars"], (string)'coeff', null))) .
'h3,.h3 {' .
(($t1 = strval(mult(table_valeur($Pile["vars"], (string)'line-height', null),table_valeur($Pile["vars"], (string)'coeff', null))))!=='' ?
		(' font-size: ' . $t1 . 'em') :
		'') .
';' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'coeffinv', null)))!=='' ?
		(' line-height: ' . $t1 . 'em') :
		'') .
';' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'coeffinv', null)))!=='' ?
		(' margin-bottom: ' . $t1 . 'em;') :
		'') .
'font-weight: bold; }
' .
vide($Pile['vars'][(string)'coeff'] = div(div(plus(table_valeur($Pile["vars"], (string)'line-height', null),'3'),'4'),table_valeur($Pile["vars"], (string)'line-height', null))) .
vide($Pile['vars'][(string)'coeffinv'] = div('1',table_valeur($Pile["vars"], (string)'coeff', null))) .
'h4,.h4,caption,.caption-wrap {' .
(($t1 = strval(mult(table_valeur($Pile["vars"], (string)'line-height', null),table_valeur($Pile["vars"], (string)'coeff', null))))!=='' ?
		(' font-size: ' . $t1 . 'em') :
		'') .
';' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'coeffinv', null)))!=='' ?
		(' line-height: ' . $t1 . 'em') :
		'') .
';' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'coeffinv', null)))!=='' ?
		(' margin-bottom: ' . $t1 . 'em;') :
		'') .
'font-weight: bold; }
h5,.h5 { font-size: 1em; font-weight: bold; margin-bottom: ' .
table_valeur($Pile["vars"], (string)'margin-bottom', null) .
'; }
h6,.h6 { font-size: 1em; font-weight: bold; }

#haut h1,h1.grostitre {margin-top:' .
(($t1 = strval(interdire_scripts(div(div(mult(entites_html(table_valeur(@$Pile[0], (string)'margin-bottom', null),true),'1.5'),'2'),table_valeur($Pile["vars"], (string)'line-height', null)))))!=='' ?
		($t1 . 'em') :
		'') .
'}

/* Enrichissements typographiques */
strong, b { font-weight: bold; }
em, i { font-style: italic; }
small, .small { font-size: 80%; }
big, .big { font-size: 150%; }
abbr[title], acronym[title] { border-bottom: .1em dotted; cursor: help; }
dfn { font-weight: bold; font-style: italic; }
del { text-decoration: line-through; }
ins { text-decoration: none; background-color: #FFC; }
sup, sub { font-size: .8em; font-variant: normal; line-height: 0; }
sup { vertical-align: super; }
.ie sup { vertical-align: text-top; }
sub { vertical-align: sub; }
.ie sub { vertical-align: text-bottom; }
.caps { font-variant: small-caps; }

/* Listes */
ul, ol, li, dl, dt, dd {}
ul ul, ol ol, ul ol, ol ul { margin-top: 0; margin-bottom: 0; }

dl dt { font-weight: bold; }
dl dd {}

/* Tableaux */
table { margin-bottom: ' .
table_valeur($Pile["vars"], (string)'margin-bottom', null) .
'; width: 100%; }
th { font-weight: bold; }
thead th {color:inherit; background: ' .
(($t1 = strval(interdire_scripts(filtrer('couleur_eclaircir',entites_html(table_valeur(@$Pile[0], (string)'claire', null),true),'0.4'))))!=='' ?
		('#' . $t1) :
		'') .
'; }
table.spip td, table.spip th, /* annuler spip-styles */
th,td,caption {' .
(($t1 = strval(div(table_valeur($Pile["vars"], (string)'line-height', null),'2')))!=='' ?
		(' padding: ' . $t1 . 'em;') :
		'') .
' }

tbody tr:nth-child(even) td,tbody tr:nth-child(even) th,
tbody tr.even td,tbody tr.even th { background: ' .
(($t1 = strval(interdire_scripts(filtrer('couleur_eclaircir',entites_html(table_valeur(@$Pile[0], (string)'claire', null),true),'0.80'))))!=='' ?
		('#' . $t1) :
		'') .
'; }
tfoot { font-style: italic; }
caption { background: #eee; }

/* Citations, code et poesie */
q { font-style: italic; }
blockquote { padding: 0 ' .
table_valeur($Pile["vars"], (string)'text-indent', null) .
'; font-style: italic; }
cite { font-style: italic; }

address { font-style: italic; }

pre,code,kbd,samp,var,tt { font-family: \'lucida console\',monospace; font-size: 1em; }
pre { margin:' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'margin-bottom', null)))!=='' ?
		(' ' . $t1 . ' ') :
		'') .
'0; white-space: pre; }
kbd { background-color: ' .
table_valeur($Pile["vars"], (string)'color', null) .
'; color: ' .
table_valeur($Pile["vars"], (string)'background-color', null) .
'; }
samp { font-weight: bold; }
var { font-style: italic; }

/* Paragraphes */
p, .p, dl, dd, blockquote, address, pre, table, fieldset { margin-bottom: ' .
table_valeur($Pile["vars"], (string)'margin-bottom', null) .
'; }

/* Liens */
a {}
a:hover {}
a[hreflang]:after { content: "\\0000a0(" attr(hreflang) ")"; }
.on { font-weight: bold; }

/* end */

/*
 * Specificites de code SPIP (ex spip-styles.css)
 */

/* Listes SPIP */
ul.spip,.formulaire_spip ul.spip { list-style: square; margin-bottom:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'margin-bottom', null),true)) .
';}
ul.spip ul { list-style: circle; }
ol.spip { list-style: decimal; margin-bottom:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'margin-bottom', null),true)) .
';}

ul.spip li, ol.spip li, .formulaire_spip ul.spip li {margin-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
':' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'text-indent', null),true)) .
';}
ul.spip li li, ol.spip li li, .formulaire_spip ul.spip li li {margin-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
':' .
(($t1 = strval(interdire_scripts(div(entites_html(table_valeur(@$Pile[0], (string)'text-indent', null),true),'2'))))!=='' ?
		($t1 . 'px') :
		'') .
';}

/* Citations, code et poesie */
/*blockquote.spip { margin: 2em 0; padding-left: 1em; border-left: 0.30em solid; }
blockquote.spip_poesie { margin: 2em 0; padding-left: 1em; border-left: 1px solid; font-family: Garamond, Georgia, Times, serif; }
blockquote.spip_poesie div { text-indent: -3em; margin-left: 3em; }
*/
.spip_code, .spip_cadre { color: #336; }
.spip_cadre { width: 99%; background-color: #F3F3F3; border: 1px dotted #ddd; padding:5px;-ms-box-sizing:border-box;-webkit-box-sizing:border-box;box-sizing:border-box;}
div.spip_code, .spip_cadre { margin-bottom: ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'margin-bottom', null),true)) .
'; }

.spip_surligne { background: #FF6; }

/* Tableaux */
table.spip { max-width: 99%; margin-right: auto; margin-left: auto; margin-bottom: ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'margin-bottom', null),true)) .
'; border-collapse: collapse; border-spacing: 0;}
table.spip caption { caption-side: top; /* bottom pas pris en compte par IE */ text-align: center; margin-right: auto; margin-left: auto; font-weight: bold; }
table.spip th, table.spip td { /*padding: 0.20em 0.40em; text-align: left; */border: 1px solid #ccc; }
table.spip td.numeric {text-align:right;}

/* Logos, documents et images */
img, .spip_logos { margin: 0; padding: 0; border: 0; }
.spip_documents { text-align: center; }
.spip_documents p { margin: 0.10em; padding: 0; }
.spip_documents_center { display: block; clear: both; width: 100%; margin: ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'margin-bottom', null),true)) .
' auto; }
.spip_documents_left { float: ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
'; margin-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'right', null),true)) .
': 15px; margin-bottom: ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'margin-bottom', null),true)) .
'; }
.spip_documents_right { float: ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'right', null),true)) .
'; margin-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
': 15px; margin-bottom: ' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'margin-bottom', null),true)) .
'; }
.spip_doc_titre { margin-right: auto; margin-left: auto; font-weight: bold; font-size: 0.90em; }
.spip_doc_descriptif { clear: both; margin-right: auto; margin-left: auto; font-size: 0.90em; }

/* modeles par defaut */
.spip_modele { float: right; display: block; padding: 1em; border: 1px solid; width: 180px; }

/* Couleurs des liens de SPIP */
a.spip_note {} /* liens vers notes de bas de page */
a.spip_ancre {} /* liens internes a la page */
a.spip_in {} /* liens internes */
a.spip_mail { color: #900; }
a.spip_mail:before { content: "\\002709"; } /* liens vers un email */
a.spip_out,a[rel=external] { color: #009; } /* liens sortants */
a.spip_url { color: #009; } /* liens url sortants */
a.spip_glossaire { color: #060; } /* liens vers encyclopedie */
a.spip_glossaire:hover { text-decoration: underline overline; }
a[hreflang]:after { content: "\\0000a0(" attr(hreflang) ")"; }
.on { font-weight: bold; } /* liens exposes */
');

	return analyse_resultat_skel('html_667074085ac1acff600dbfe77ad8e90a', $Cache, $page, '../prive/themes/spip/typo.css.html');
}
?>