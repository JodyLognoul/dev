<?php

/*
 * Squelette : ../prive/formulaires/recherche_ecrire.html
 * Date :      Thu, 30 Aug 2012 09:12:29 GMT
 * Compile :   Thu, 30 Aug 2012 09:14:46 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/formulaires/recherche_ecrire.html
// Temps de compilation total: 2.036 ms
//

function html_1e6b2236660bebf8bcdbd9967ea8f239($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class="formulaire_spip formulaire_recherche" role=\'search\'>
<form action="' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'action', null),true)) .
'" method="get"><div>
	' .
interdire_scripts(form_hidden(entites_html(table_valeur(@$Pile[0], (string)'action', null),true))) .
'
	' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'lang', null),true))))!=='' ?
		('<input type="hidden" name="lang" value="' . $t1 . '" />') :
		'') .
'
	<label for="' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'_id_champ', null), 'recherche'),true)) .
'">' .
_T('public|spip|ecrire:info_rechercher_02') .
'</label>
	<input type="text"
				 class="text' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'recherche', null),true)) ?' ' :''))))!=='' ?
		($t1 . ' cancelable') :
		'') .
'"
				 size="10"
				 name="recherche"
				 id="' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'_id_champ', null), 'recherche'),true)) .
'"
				 placeholder="' .
attribut_html(_T('public|spip|ecrire:info_rechercher')) .
'"' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'recherche', null),true))))!=='' ?
		('
				 value="' . $t1 . '"') :
		'') .
'
	/>' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'recherche', null),true)) ?' ' :''))))!=='' ?
		('<a
	' . $t1 . (	'
		class="cancel' .
	(($t2 = strval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'class', null), ''),true))))!=='' ?
			(' ' . $t2) :
			'') .
	'"
		href="' .
	interdire_scripts(parametre_url(entites_html(table_valeur(@$Pile[0], (string)'action', null),true),'recherche','')) .
	'"
		onclick="$(this).siblings(\'input.text\').val(\'\')"
		title=\'' .
	attribut_html(_T('public|spip|ecrire:annuler_recherche')) .
	'\'>' .
	interdire_scripts(inserer_attribut(filtre_balise_img_dist(chemin_image('fermer-16.png')),'alt',_T('public|spip|ecrire:annuler_recherche'))) .
	'</a>')) :
		'') .
'<input type=\'image\'
					 src=\'' .
interdire_scripts(chemin_image('rechercher-20.png')) .
'\'
					 class="image"
					 alt=\'' .
attribut_html(_T('public|spip|ecrire:info_rechercher')) .
'\'
					 onclick="return recherche_submit_' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'_id_champ', null), 'recherche'),true)) .
'.apply(this);"
					 onkeypress="return recherche_submit_' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'_id_champ', null), 'recherche'),true)) .
'.apply(this);"
	/><a class="none' .
(($t1 = strval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'class', null), ''),true))))!=='' ?
		(' ' . $t1) :
		'') .
' refresh" href="' .
interdire_scripts(parametre_url(entites_html(table_valeur(@$Pile[0], (string)'action', null),true),'recherche','')) .
'">' .
_T('public|spip|ecrire:info_rechercher') .
'</a>
</div></form>
<script type="text/javascript">/*<![CDATA[*/
function recherche_submit_' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'_id_champ', null), 'recherche'),true)) .
'(){
$.placeholderLabel.disable_placeholder_fields.apply($(this).parents(\'form\').eq(0));
var a=$(this).siblings(\'a.refresh\');
a.attr(\'href\',parametre_url(a.attr(\'href\'),\'recherche\',$(this).siblings(\'input.text\').val())).followLink();
return false;
}/*]]>*/</script>
</div>
');

	return analyse_resultat_skel('html_1e6b2236660bebf8bcdbd9967ea8f239', $Cache, $page, '../prive/formulaires/recherche_ecrire.html');
}
?>