<?php

/*
 * Squelette : ../plugins-dist/breves/prive/objets/liste/breves.html
 * Date :      Thu, 30 Aug 2012 09:12:30 GMT
 * Compile :   Thu, 30 Aug 2012 09:14:46 GMT
 * Boucles :   _liste_bre
 */ 

function BOUCLE_liste_brehtml_5dd895e9f28d576b0841b0159763ceee(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (@$Pile[0]['id_breve']))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	$in1 = array();
	if (!(is_array($a = (@$Pile[0]['id_secteur']))))
		$in1[]= $a;
	else $in1 = array_merge($in1, $a);
	$in2 = array();
	if (!(is_array($a = (@$Pile[0]['id_mot']))))
		$in2[]= $a;
	else $in2 = array_merge($in2, $a);
	$in3 = array();
	if (!(is_array($a = (@$Pile[0]['id_rubrique']))))
		$in3[]= $a;
	else $in3 = array_merge($in3, $a);
	$in4 = array();
	if (!(is_array($a = (@$Pile[0]['statut']))))
		$in4[]= $a;
	else $in4 = array_merge($in4, $a);
	// RECHERCHE
	if (!strlen((isset($Pile[0]["recherche"])?$Pile[0]["recherche"]:(isset($GLOBALS["recherche"])?$GLOBALS["recherche"]:"")))){
		list($rech_select, $rech_where) = array("0 as points","");
	} else
	{
		$prepare_recherche = charger_fonction('prepare_recherche', 'inc');
		list($rech_select, $rech_where) = $prepare_recherche((isset($Pile[0]["recherche"])?$Pile[0]["recherche"]:(isset($GLOBALS["recherche"])?$GLOBALS["recherche"]:"")), "breves", "?","",array (
  'criteres' => 
  array (
    'id_breve' => true,
    'id_rubrique' => true,
    'id_secteur' => true,
  ),
  'lien' => true,
),"id_breve");
	}
	
	$senstri = '';
	$tri = (($t=(isset($Pile[0]['tri'.'_liste_bre']))?$Pile[0]['tri'.'_liste_bre']:interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'date'),true)))?tri_protege_champ($t):'');
	if ($tri){
		$senstri = ((intval($t=(isset($Pile[0]['sens'.'_liste_bre']))?$Pile[0]['sens'.'_liste_bre']:(is_array($s=table_valeur($Pile["vars"], (string)'defaut_tri', null))?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'_liste_bre']))?$Pile[0]['tri'.'_liste_bre']:interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'date'),true)))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s))==-1 OR $t=='inverse')?-1:1);
		$senstri = ($senstri<0)?' DESC':'';
	};
	
	$command['pagination'] = array((isset($Pile[0]['debut_liste_bre']) ? $Pile[0]['debut_liste_bre'] : null), (($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '10'),true)))) ? $a : 10));
	if (!isset($command['table'])) {
		$command['table'] = 'breves';
		$command['id'] = '_liste_bre';
		$command['from'] = array('breves' => 'spip_breves','L1' => 'spip_mots_liens','resultats' => 'spip_resultats');
		$command['type'] = array();
		$command['groupby'] = array("breves.id_breve");
		$command['join'] = array('L1' => array('breves','id_objet','id_breve','L1.objet='.sql_quote('breve')), 'resultats' => array('breves','id','id_breve'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['select'] = array("breves.id_breve",
		"$rech_select",
		"".tri_champ_select($tri)."",
		"breves.statut",
		"breves.id_rubrique",
		"breves.titre",
		"breves.date_heure AS date",
		"breves.lang");
	$command['orderby'] = array(tri_champ_order($tri,$command['from']).$senstri);
	$command['where'] = 
			array((!(is_array(@$Pile[0]['id_breve'])?count(@$Pile[0]['id_breve']):strlen(@$Pile[0]['id_breve'])) ? '' : ((is_array(@$Pile[0]['id_breve'])) ? sql_in('breves.id_breve',sql_quote($in)) : 
			array('=', 'breves.id_breve', sql_quote(@$Pile[0]['id_breve'],'','bigint(21) NOT NULL AUTO_INCREMENT')))), (!(is_array(@$Pile[0]['id_secteur'])?count(@$Pile[0]['id_secteur']):strlen(@$Pile[0]['id_secteur'])) ? '' : ((is_array(@$Pile[0]['id_secteur'])) ? sql_in('breves.id_rubrique',sql_quote($in1)) : 
			array('=', 'breves.id_rubrique', sql_quote(@$Pile[0]['id_secteur'],'','bigint(21) NOT NULL DEFAULT \'0\'')))), (!(is_array(@$Pile[0]['id_mot'])?count(@$Pile[0]['id_mot']):strlen(@$Pile[0]['id_mot'])) ? '' : ((is_array(@$Pile[0]['id_mot'])) ? sql_in('L1.id_mot',sql_quote($in2)) : 
			array('=', 'L1.id_mot', sql_quote(@$Pile[0]['id_mot'],'','bigint(21) NOT NULL DEFAULT \'0\'')))), (!(is_array(@$Pile[0]['id_rubrique'])?count(@$Pile[0]['id_rubrique']):strlen(@$Pile[0]['id_rubrique'])) ? '' : ((is_array(@$Pile[0]['id_rubrique'])) ? sql_in('breves.id_rubrique',sql_quote($in3)) : 
			array('=', 'breves.id_rubrique', sql_quote(@$Pile[0]['id_rubrique'],'','bigint(21) NOT NULL DEFAULT \'0\'')))), ((@$Pile[0]["where"]) ? (@$Pile[0]["where"]) : ''), $rech_where?$rech_where:'', (!(is_array(@$Pile[0]['statut'])?count(@$Pile[0]['statut']):strlen(@$Pile[0]['statut'])) ? '' : ((is_array(@$Pile[0]['statut'])) ? sql_in('breves.statut',sql_quote($in4)) : 
			array('=', 'breves.statut', sql_quote(@$Pile[0]['statut'],'','varchar(6) NOT NULL DEFAULT \'0\'')))));
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins-dist/breves/prive/objets/liste/breves.html','html_5dd895e9f28d576b0841b0159763ceee','_liste_bre',8,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_liste_bre']['compteur_boucle'] = 0;
	$Numrows['_liste_bre']['total'] = @intval($iter->count());
	$debut_boucle = isset($Pile[0]['debut_liste_bre']) ? $Pile[0]['debut_liste_bre'] : _request('debut_liste_bre');
	if(substr($debut_boucle,0,1)=='@'){
		$debut_boucle = $Pile[0]['debut_liste_bre'] = quete_debut_pagination('id_breve',$Pile[0]['@id_breve'] = substr($debut_boucle,1),(($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '10'),true)))) ? $a : 10),$iter);
		$iter->seek(0);
	}
	$debut_boucle = intval($debut_boucle);
	$debut_boucle = (($tout=($debut_boucle == -1))?0:($debut_boucle));
	$debut_boucle = max(0,min($debut_boucle,floor(($Numrows['_liste_bre']['total']-1)/((($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '10'),true)))) ? $a : 10)))*((($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '10'),true)))) ? $a : 10))));
	$fin_boucle = min(($tout ? $Numrows['_liste_bre']['total'] : $debut_boucle+(($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '10'),true)))) ? $a : 10) - 1), $Numrows['_liste_bre']['total'] - 1);
	$Numrows['_liste_bre']['grand_total'] = $Numrows['_liste_bre']['total'];
	$Numrows['_liste_bre']["total"] = max(0,$fin_boucle - $debut_boucle + 1);
	if ($debut_boucle>0 AND $debut_boucle < $Numrows['_liste_bre']['grand_total'] AND $iter->seek($debut_boucle,'continue'))
		$Numrows['_liste_bre']['compteur_boucle'] = $debut_boucle;
	
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$Numrows['_liste_bre']['compteur_boucle']++;
		if ($Numrows['_liste_bre']['compteur_boucle'] <= $debut_boucle) continue;
		if ($Numrows['_liste_bre']['compteur_boucle']-1 > $fin_boucle) break;
		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
		<tr class="' .
alterner($Numrows['_liste_bre']['compteur_boucle'],'row_odd','row_even') .
'">
			<td class=\'statut\'>' .
interdire_scripts(filtre_puce_statut_dist($Pile[$SP]['statut'],'breve',$Pile[$SP]['id_breve'],$Pile[$SP]['id_rubrique'])) .
'</td>
			<td class=\'titre principale\'>' .
filtrer('image_graver',filtrer('image_reduire',
((!is_array($l = quete_logo('id_breve', 'ON', $Pile[$SP]['id_breve'],'', 0))) ? '':
 ("<img class=\"spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'20','26')) .
'<a href="' .
generer_url_entite($Pile[$SP]['id_breve'],'breve') .
'"
																																						title="' .
attribut_html(_T('public|spip|ecrire:info_numero_abbreviation')) .
' ' .
$Pile[$SP]['id_breve'] .
'">' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a></td>
			<td class=\'date secondaire\'>' .
interdire_scripts(affdate_jourcourt(normaliser_date($Pile[$SP]['date']))) .
'</td>
			<td class=\'id\'>' .
invalideur_session($Cache, (((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('modifier', 'breve', invalideur_session($Cache, $Pile[$SP]['id_breve']))?" ":"") ? (	'<a href="' .
	invalideur_session($Cache, generer_url_ecrire('breve_edit',(	'id_breve=' .
		invalideur_session($Cache, $Pile[$SP]['id_breve'])))) .
	'">' .
	invalideur_session($Cache, $Pile[$SP]['id_breve']) .
	'</a>'):(	invalideur_session($Cache, $Pile[$SP]['id_breve']) .
	'
			'))) .
'</td>
		</tr>
	');
	}
	lang_select();
	$iter->free();
	}
	return $t0;
}

//
// Fonction principale du squelette ../plugins-dist/breves/prive/objets/liste/breves.html
// Temps de compilation total: 6.396 ms
//

function html_5dd895e9f28d576b0841b0159763ceee($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(vide($Pile['vars'][(string)'defaut_tri'] = array('date' => interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'date_sens', null), '-1'),true)), 'date_heure' => interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'date_sens', null), '-1'),true)), 'titre' => '1', 'id_breve' => '1', 'points' => '-1
'))))!=='' ?
		($t1 . '
') :
		'') .
(($t1 = BOUCLE_liste_brehtml_5dd895e9f28d576b0841b0159763ceee($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
' .
		filtre_pagination_dist($Numrows["_liste_bre"]["grand_total"],
 		'_liste_bre',
		isset($Pile[0]['debut_liste_bre'])?$Pile[0]['debut_liste_bre']:intval(_request('debut_liste_bre')),
		(($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '10'),true)))) ? $a : 10), false, '', '', array()) .
		'
<div class="liste-objets breves">
<table class=\'spip liste\'>
' .
		(($t3 = strval(interdire_scripts(sinon(table_valeur(@$Pile[0], (string)'titre', null), singulier_ou_pluriel((isset($Numrows['_liste_bre']['grand_total'])
			? $Numrows['_liste_bre']['grand_total'] : $Numrows['_liste_bre']['total']),'breves:info_1_breve','breves:info_nb_breves')))))!=='' ?
				('<caption><strong class="caption">' . $t3 . '</strong></caption>') :
				'') .
		'
	<thead>
		<tr class=\'first_row\'>
			<th class=\'statut\' scope=\'col\'>' .
		lien_ou_expose(parametre_url(self(),(($s=in_array('statut',array('>','<')))?'sens':'tri').'_liste_bre',$s?(strpos('< >','statut')-1):'statut'),(	'<span title="' .
			attribut_html(_T('public|spip|ecrire:lien_trier_statut')) .
			'">#</span>'),$s?(((intval($t=(isset($Pile[0]['sens'.'_liste_bre']))?$Pile[0]['sens'.'_liste_bre']:(is_array($s=table_valeur($Pile["vars"], (string)'defaut_tri', null))?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'_liste_bre']))?$Pile[0]['tri'.'_liste_bre']:interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'date'),true)))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s))==-1 OR $t=='inverse')?-1:1)==(strpos('< >','statut')-1)):((($t=(isset($Pile[0]['tri'.'_liste_bre']))?$Pile[0]['tri'.'_liste_bre']:interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'date'),true)))?tri_protege_champ($t):'')=='statut'),'ajax') .
		'</th>
			<th class=\'titre\' scope=\'col\'>' .
		lien_ou_expose(parametre_url(self(),(($s=in_array('titre',array('>','<')))?'sens':'tri').'_liste_bre',$s?(strpos('< >','titre')-1):'titre'),_T('public|spip|ecrire:info_titre'),$s?(((intval($t=(isset($Pile[0]['sens'.'_liste_bre']))?$Pile[0]['sens'.'_liste_bre']:(is_array($s=table_valeur($Pile["vars"], (string)'defaut_tri', null))?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'_liste_bre']))?$Pile[0]['tri'.'_liste_bre']:interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'date'),true)))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s))==-1 OR $t=='inverse')?-1:1)==(strpos('< >','titre')-1)):((($t=(isset($Pile[0]['tri'.'_liste_bre']))?$Pile[0]['tri'.'_liste_bre']:interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'date'),true)))?tri_protege_champ($t):'')=='titre'),'ajax') .
		'</th>
			<th class=\'date\' scope=\'col\'>' .
		lien_ou_expose(parametre_url(self(),(($s=in_array('date',array('>','<')))?'sens':'tri').'_liste_bre',$s?(strpos('< >','date')-1):'date'),_T('public|spip|ecrire:date'),$s?(((intval($t=(isset($Pile[0]['sens'.'_liste_bre']))?$Pile[0]['sens'.'_liste_bre']:(is_array($s=table_valeur($Pile["vars"], (string)'defaut_tri', null))?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'_liste_bre']))?$Pile[0]['tri'.'_liste_bre']:interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'date'),true)))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s))==-1 OR $t=='inverse')?-1:1)==(strpos('< >','date')-1)):((($t=(isset($Pile[0]['tri'.'_liste_bre']))?$Pile[0]['tri'.'_liste_bre']:interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'date'),true)))?tri_protege_champ($t):'')=='date'),'ajax') .
		'</th>
			<th class=\'id\' scope=\'col\'>' .
		lien_ou_expose(parametre_url(self(),(($s=in_array('id_breve',array('>','<')))?'sens':'tri').'_liste_bre',$s?(strpos('< >','id_breve')-1):'id_breve'),_T('public|spip|ecrire:info_numero_abbreviation'),$s?(((intval($t=(isset($Pile[0]['sens'.'_liste_bre']))?$Pile[0]['sens'.'_liste_bre']:(is_array($s=table_valeur($Pile["vars"], (string)'defaut_tri', null))?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'_liste_bre']))?$Pile[0]['tri'.'_liste_bre']:interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'date'),true)))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s))==-1 OR $t=='inverse')?-1:1)==(strpos('< >','id_breve')-1)):((($t=(isset($Pile[0]['tri'.'_liste_bre']))?$Pile[0]['tri'.'_liste_bre']:interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'date'),true)))?tri_protege_champ($t):'')=='id_breve'),'ajax') .
		'</th>
		</tr>
	</thead>
	<tbody>
	') . $t1 . (	'
	</tbody>
</table>
' .
		(($t3 = strval(filtre_pagination_dist($Numrows["_liste_bre"]["grand_total"],
 		'_liste_bre',
		isset($Pile[0]['debut_liste_bre'])?$Pile[0]['debut_liste_bre']:intval(_request('debut_liste_bre')),
		(($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '10'),true)))) ? $a : 10), true, 'prive', '', array())))!=='' ?
				('<p class=\'pagination\'>' . $t3 . '</p>') :
				'') .
		'
</div>
')) :
		((($t2 = strval(interdire_scripts(sinon(table_valeur(@$Pile[0], (string)'sinon', null), ''))))!=='' ?
			('
<div class="liste-objets breves caption-wrap"><strong class="caption">' . $t2 . '</strong></div>
') :
			''))) .
'
');

	return analyse_resultat_skel('html_5dd895e9f28d576b0841b0159763ceee', $Cache, $page, '../plugins-dist/breves/prive/objets/liste/breves.html');
}
?>