<?php

########################################################################
# Extension Manager/Repository config file for ext "cabag_loginas".
#
# Auto generated 09-04-2013 11:05
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'CAB Login As',
	'description' => 'Within the backend you have a button in the fe_user table and in the upper right corner to quickly login as this fe user in frontend.',
	'category' => 'be',
	'shy' => 0,
	'version' => '1.1.7',
	'dependencies' => 'cms',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Dimitri Koenig',
	'author_email' => 'dk@cabag.ch, tm@cabag.ch',
	'author_company' => '',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'cms' => '',
			'typo3' => '4.5.0-4.7.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:16:{s:9:"ChangeLog";s:4:"979f";s:10:"README.txt";s:4:"9132";s:17:"cabag_loginas.css";s:4:"3dd7";s:16:"cabag_loginas.js";s:4:"1e16";s:24:"cabagloginas_toolbar.php";s:4:"59cb";s:25:"class.tx_cabagloginas.php";s:4:"ca05";s:41:"class.tx_cabagloginas_makecontrolhook.php";s:4:"02ac";s:21:"ext_conf_template.txt";s:4:"a03d";s:12:"ext_icon.gif";s:4:"778f";s:17:"ext_localconf.php";s:4:"a16f";s:14:"ext_tables.php";s:4:"f501";s:14:"ext_tables.sql";s:4:"dde4";s:16:"locallang_db.xml";s:4:"b91e";s:19:"doc/wizard_form.dat";s:4:"b11c";s:20:"doc/wizard_form.html";s:4:"1f2f";s:33:"sv1/class.tx_cabagloginas_sv1.php";s:4:"2909";}',
	'suggests' => array(
	),
);

?>