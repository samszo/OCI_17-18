<?php

/*
 * Squelette : ../plugins-dist/plan/css/plan_prive.css.html
 * Date :      Wed, 21 Feb 2018 10:24:37 GMT
 * Compile :   Wed, 21 Feb 2018 13:26:37 GMT
 * Boucles :   _statuts, _objets_statuts, _icone_objets
 */ 

function BOUCLE_statutshtml_1330d94e4ad07c9d129cd735539c039a(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'table';

	$command['source'] = array(interdire_scripts(safehtml($Pile[$SP]['valeur'])));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_statuts';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur",
		".cle",
		"image");
		$command['orderby'] = array();
		$command['where'] = 
			array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"DATA",
		$command,
		array('../plugins-dist/plan/css/plan_prive.css.html','html_1330d94e4ad07c9d129cd735539c039a','_statuts',28,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
' .
vide($Pile['vars'][$_zzz=(string)'class'] = (	interdire_scripts(safehtml($Pile[$SP-1]['cle'])) .
	'-' .
	interdire_scripts(safehtml($Pile[$SP]['cle'])))) .
'
#mytree_actions .statut form option.' .
table_valeur($Pile["vars"], (string)'class', null) .
'{
	background-image: url(' .
interdire_scripts(chemin_image(interdire_scripts(safehtml((isset($Pile[$SP]['image'])?$Pile[$SP]['image']:((isset($Pile[$SP-1]['image'])?$Pile[$SP-1]['image']:(@$Pile[0]['image'])))))))) .
');
}
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_statuts @ ../plugins-dist/plan/css/plan_prive.css.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_objets_statutshtml_1330d94e4ad07c9d129cd735539c039a(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'table';

	$command['source'] = array(plan_lister_objets_rubrique_statuts(''));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_objets_statuts';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur",
		".cle",
		"image");
		$command['orderby'] = array();
		$command['where'] = 
			array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"DATA",
		$command,
		array('../plugins-dist/plan/css/plan_prive.css.html','html_1330d94e4ad07c9d129cd735539c039a','_objets_statuts',21,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
#mytree_actions .statut.' .
interdire_scripts(safehtml($Pile[$SP]['cle'])) .
' {
	background-image: url(' .
interdire_scripts(extraire_attribut(objet_icone(safehtml($Pile[$SP]['cle']),'16'),'src')) .
');
}
#mytree_actions .statut form optgroup.' .
interdire_scripts(safehtml($Pile[$SP]['cle'])) .
' {
	background-image: url(' .
interdire_scripts(extraire_attribut(objet_icone(safehtml($Pile[$SP]['cle']),'16'),'src')) .
');
}
' .
BOUCLE_statutshtml_1330d94e4ad07c9d129cd735539c039a($Cache, $Pile, $doublons, $Numrows, $SP) .
'
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_objets_statuts @ ../plugins-dist/plan/css/plan_prive.css.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_icone_objetshtml_1330d94e4ad07c9d129cd735539c039a(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'table';

	$command['source'] = array(plan_lister_objets_rubrique(''));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_icone_objets';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur");
		$command['orderby'] = array();
		$command['where'] = 
			array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"DATA",
		$command,
		array('../plugins-dist/plan/css/plan_prive.css.html','html_1330d94e4ad07c9d129cd735539c039a','_icone_objets',47,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
.plan .jstree-icon.' .
interdire_scripts(objet_type(safehtml($Pile[$SP]['valeur']))) .
' {
	background:url(' .
interdire_scripts(extraire_attribut(objet_icone(safehtml($Pile[$SP]['valeur']),'16'),'src')) .
') center center no-repeat;
}
.plan .menu-items.' .
interdire_scripts(table_objet(safehtml($Pile[$SP]['valeur']))) .
' .item > a ,
.plan .menu-items.' .
interdire_scripts(table_objet(safehtml($Pile[$SP]['valeur']))) .
' .item > strong {
	padding-left:20px;
	background:url(' .
interdire_scripts(extraire_attribut(objet_icone(safehtml($Pile[$SP]['valeur']),'16'),'src')) .
') center left no-repeat;
}
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_icone_objets @ ../plugins-dist/plan/css/plan_prive.css.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins-dist/plan/css/plan_prive.css.html
// Temps de compilation total: 32.002 ms
//

function html_1330d94e4ad07c9d129cd735539c039a($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
.plan #contenu p.removable { cursor:pointer; }
.plan #contenu p.removable:hover { opacity:.6; }
#mytree_actions { margin-bottom:1em; margin-top:1em; }
#mytree_actions input,
#mytree_actions .pliage { margin-right:2em; }
#mytree_actions .statut {
	padding-left:20px;
	background: transparent left 5px no-repeat;
	display:inline-block;
}
#mytree_actions .statut form { display:inline; }
#mytree_actions .statut form optgroup {
	margin-top:.3em; padding:5px 5px 5px 25px;
	background: transparent 3px 5px no-repeat;
}
#mytree_actions .statut form option {
	padding:2px 2px 2px 20px;
	background: transparent 2px center no-repeat;
}
' .
BOUCLE_objets_statutshtml_1330d94e4ad07c9d129cd735539c039a($Cache, $Pile, $doublons, $Numrows, $SP) .
'
.plan .jstree-icon.rubrique {
	background:url(' .
extraire_attribut(objet_icone('rubrique','16'),'src') .
') center center no-repeat;
}
.plan .menu-items .menu-items { margin-top:.5em; }
.plan .menu-items .item.group { margin-bottom: 1em; padding-top: 5px; }
.plan .menu-items.rubriques .item > a {
	padding-left:20px;
	background:url(' .
extraire_attribut(objet_icone('rubrique','16'),'src') .
') center left no-repeat;
}
.plan .jstree .puce_objet { margin-right:2px; }
.plan .jstree.drag .item .jstree-icon { cursor: move; }
.plan .jstree.drag .item .jstree-ocl { cursor: pointer; }
' .
BOUCLE_icone_objetshtml_1330d94e4ad07c9d129cd735539c039a($Cache, $Pile, $doublons, $Numrows, $SP) .
'
');

	return analyse_resultat_skel('html_1330d94e4ad07c9d129cd735539c039a', $Cache, $page, '../plugins-dist/plan/css/plan_prive.css.html');
}
?>