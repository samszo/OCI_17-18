<?php

/*
 * Squelette : ../prive/formulaires/configurer_moderniseur.html
 * Date :      Wed, 21 Feb 2018 10:24:03 GMT
 * Compile :   Wed, 07 Mar 2018 12:35:02 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/formulaires/configurer_moderniseur.html
// Temps de compilation total: 10.001 ms
//

function html_db3875ea8c433ed18cdea4ff595d44a7($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class="formulaire_spip formulaire_configurer formulaire_' .
interdire_scripts(@$Pile[0]['form']) .
' formulaire_' .
interdire_scripts(@$Pile[0]['form']) .
'-' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'id', null), 'nouveau'),true)) .
'">
<h3 class=\'titrem\'><img src="' .
interdire_scripts(chemin_image('compat-24.png')) .
'" class="cadre-icone" />' .
_T('public|spip|ecrire:info_compatibilite_html') .
'</h3>
	' .
(($t1 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'message_ok', null))))!=='' ?
		('<p class="reponse_formulaire reponse_formulaire_ok">' . $t1 . '</p>') :
		'') .
'
	' .
(($t1 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'message_erreur', null))))!=='' ?
		('<p class="reponse_formulaire reponse_formulaire_erreur">' . $t1 . '</p>') :
		'') .
'
	' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'editable', null),true))))!=='' ?
		($t1 . (	'
	<p>' .
	_T('public|spip|ecrire:texte_compatibilite_html') .
	'</p>
	<p class="explication">' .
	_T('public|spip|ecrire:texte_compatibilite_html_attention') .
	'</p>
	<form method=\'post\' action=\'' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'action', null),true)) .
	'\'><div>
		
		' .
		'<div>' .
	form_hidden(@$Pile[0]['action']) .
	'<input name=\'formulaire_action\' type=\'hidden\'
		value=\'' . @$Pile[0]['form'] . '\' />' .
	'<input name=\'formulaire_action_args\' type=\'hidden\'
		value=\'' . @$Pile[0]['formulaire_args']. '\' />' .
	(!empty($Pile[0]['_hidden']) ? @$Pile[0]['_hidden'] : '') .
	'</div>
		<div class="editer-groupe">
			' .
	vide($Pile['vars'][$_zzz=(string)'name'] = 'version_html_max') .
	vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
	'<div class="editer editer_' .
	table_valeur($Pile["vars"], (string)'name', null) .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'obli', null)))!=='' ?
			(' ' . $t2) :
			'') .
	((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
			(' ' . ' ' . 'erreur') :
			'') .
	'">
				' .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
			('
				<span class=\'erreur_message\'>' . $t2 . '</span>
				') :
			'') .
	'<div class="choix">
					<input type="radio" name="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'" id="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'_html4" value="html4"
					' .
	(($t2 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'html5')) ?'' :' '))))!=='' ?
			($t2 . 'checked="checked"') :
			'') .
	' /><label for="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'_html4">' .
	_T('public|spip|ecrire:item_version_html_max_html4') .
	'</label>
				</div>
				<div class="choix">
					<input type="radio" name="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'" id="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'_html5" value="html5"
					' .
	(($t2 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'html5')) ?' ' :''))))!=='' ?
			($t2 . 'checked="checked"') :
			'') .
	' /><label for="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'_html5">' .
	_T('public|spip|ecrire:item_version_html_max_html5') .
	'</label>
				</div>
			</div>
		</div>
	  ' .
	'
	  <!--extra-->
	  <p class=\'boutons\'><span class=\'image_loading\'>&nbsp;</span><input type=\'submit\' class=\'submit\' value=\'' .
	_T('public|spip|ecrire:bouton_enregistrer') .
	'\' /></p>
	</div></form>
	')) :
		'') .
'
</div>
');

	return analyse_resultat_skel('html_db3875ea8c433ed18cdea4ff595d44a7', $Cache, $page, '../prive/formulaires/configurer_moderniseur.html');
}
?>