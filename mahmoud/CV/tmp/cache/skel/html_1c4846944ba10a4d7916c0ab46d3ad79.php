<?php

/*
 * Squelette : ../plugins-dist/plan/prive/squelettes/head/plan.html
 * Date :      Wed, 21 Feb 2018 10:24:37 GMT
 * Compile :   Wed, 21 Feb 2018 13:26:37 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/plan/prive/squelettes/head/plan.html
// Temps de compilation total: 2.001 ms
//

function html_1c4846944ba10a4d7916c0ab46d3ad79($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/squelettes/head/dist') . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins-dist/plan/prive/squelettes/head/plan.html\',\'html_1c4846944ba10a4d7916c0ab46d3ad79\',\'\',1,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>

' .
(($t1 = strval(timestamp(find_in_path('lib/jstree/dist/themes/default/style.min.css'))))!=='' ?
		('<link rel="stylesheet" href="' . $t1 . '" type="text/css" />') :
		'') .
'
' .
(($t1 = strval(produire_fond_statique( 'css/plan_prive.css' , array(), array('compil'=>array('../plugins-dist/plan/prive/squelettes/head/plan.html','html_1c4846944ba10a4d7916c0ab46d3ad79','',4,$GLOBALS['spip_lang'])), _request('connect'))))!=='' ?
		('<link rel="stylesheet" href="' . $t1 . '" type="text/css" />') :
		'') .
'

' .
(($t1 = strval(timestamp(find_in_path('lib/jstree/dist/jstree.min.js'))))!=='' ?
		('<script src="' . $t1 . '"></script>') :
		'') .
'
' .
(($t1 = strval(timestamp(find_in_path('prive/javascript/spiptree.js'))))!=='' ?
		('<script src="' . $t1 . '"></script>') :
		'') .
'
');

	return analyse_resultat_skel('html_1c4846944ba10a4d7916c0ab46d3ad79', $Cache, $page, '../plugins-dist/plan/prive/squelettes/head/plan.html');
}
?>