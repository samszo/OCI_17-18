<?php

/*
 * Squelette : ../plugins-dist/compagnon/prive/style_prive_plugin_compagnon.html
 * Date :      Wed, 21 Feb 2018 10:24:44 GMT
 * Compile :   Wed, 21 Feb 2018 11:53:40 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/compagnon/prive/style_prive_plugin_compagnon.html
// Temps de compilation total: 8.001 ms
//

function html_278f66c2582bf623a64375c56f7cac3b($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
'<'.'?php header("X-Spip-Cache: 360000"); ?'.'>'.'<'.'?php header("Cache-Control: max-age=360000"); ?'.'>'.'<'.'?php header("X-Spip-Statique: oui"); ?'.'>' .
'<'.'?php header(' . _q('Content-Type: text/css; charset=iso-8859-15') . '); ?'.'>' .
'<'.'?php header(' . _q('Vary: Accept-Encoding') . '); ?'.'>' .
vide($Pile['vars'][$_zzz=(string)'claire'] = interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'couleur_claire', null), 'edf3fe'),true))) .
vide($Pile['vars'][$_zzz=(string)'foncee'] = interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'couleur_foncee', null), '3874b0'),true))) .
vide($Pile['vars'][$_zzz=(string)'left'] = interdire_scripts(choixsiegal(entites_html(table_valeur(@$Pile[0], (string)'ltr', null),true),'left','left','right'))) .
vide($Pile['vars'][$_zzz=(string)'right'] = interdire_scripts(choixsiegal(entites_html(table_valeur(@$Pile[0], (string)'ltr', null),true),'left','right','left'))) .
vide($Pile['vars'][$_zzz=(string)'abs'] = interdire_scripts(choixsiegal(entites_html(table_valeur(@$Pile[0], (string)'ltr', null),true),'left','-10','483'))) .
'/* ----- compagnon (extends box) ----- */
.compagnon {position:relative;}
.compagnon .inner {
	border:2px solid #' .
table_valeur($Pile["vars"], (string)'foncee', null) .
';
	border-radius:10px;
	color:#333;
	background-color:#fcfcfc;
	background-image:url(' .
interdire_scripts(extraire_attribut(filtrer('image_graver', filtrer('image_sepia',chemin_image('compagnon_gris-64.png'),filtrer('couleur_eclaircir',table_valeur($Pile["vars"], (string)'foncee', null)))),'src')) .
');
	background-position: ' .
table_valeur($Pile["vars"], (string)'abs', null) .
'px -10px;
	background-repeat: no-repeat;
	
}
.compagnon .inner .hd {padding-' .
table_valeur($Pile["vars"], (string)'left', null) .
':60px;}
.compagnon .inner .bd {padding-' .
table_valeur($Pile["vars"], (string)'left', null) .
':60px;}
.compagnon b{}
.compagnon .act {
	background-color: transparent;
	border-top: none;
}
.compagnon .ft {
	padding: 0;
}
.compagnon button.submit {
	font-size:100%;
	border:2px solid #' .
table_valeur($Pile["vars"], (string)'foncee', null) .
';
	border-top-width:2px;
	border-' .
table_valeur($Pile["vars"], (string)'left', null) .
'-width:2px;
	border-' .
table_valeur($Pile["vars"], (string)'right', null) .
'-width:0px;
	border-bottom-width:0px;
	border-top-' .
table_valeur($Pile["vars"], (string)'left', null) .
'-radius:9px;
	border-top-' .
table_valeur($Pile["vars"], (string)'right', null) .
'-radius:0;
	border-bottom-' .
table_valeur($Pile["vars"], (string)'right', null) .
'-radius:9px;
	border-bottom-' .
table_valeur($Pile["vars"], (string)'left', null) .
'-radius:0;
	background: ' .
(($t1 = strval(filtrer('couleur_eclaircir',filtrer('couleur_eclaircir',table_valeur($Pile["vars"], (string)'foncee', null)))))!=='' ?
		('#' . $t1) :
		'') .
';
	padding:3px 4px 4px 3px;
	cursor:pointer;
	margin:0;
	color: #444;
}

.compagnon .target {
	position:absolute; bottom:5px; ' .
table_valeur($Pile["vars"], (string)'left', null) .
':5px;
	display:block; width:32px; height:32px;
	background:url(' .
interdire_scripts(extraire_attribut(filtrer('image_graver', filtrer('image_sepia',chemin_image('target-32.png'),filtrer('couleur_eclaircir',table_valeur($Pile["vars"], (string)'foncee', null)))),'src')) .
');
	cursor:crosshair;
}
#navigation .compagnon .inner .hd {min-height:2.5em;}
#navigation .compagnon .inner .bd {padding-left:10px;}
');

	return analyse_resultat_skel('html_278f66c2582bf623a64375c56f7cac3b', $Cache, $page, '../plugins-dist/compagnon/prive/style_prive_plugin_compagnon.html');
}
?>