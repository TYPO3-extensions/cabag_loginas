<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "cabag_loginas".
 *
 * Auto generated 24-07-2013 17:01
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'CAB Login As',
	'description' => 'Within the backend you have a button in the fe_user table and in the upper right corner to quickly login as this fe user in frontend.',
	'category' => 'be',
	'shy' => 0,
	'version' => '1.1.9',
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
	'_md5_values_when_last_written' => 'a:15:{s:17:"cabag_loginas.css";s:4:"2ec9";s:16:"cabag_loginas.js";s:4:"f5b4";s:24:"cabagloginas_toolbar.php";s:4:"be08";s:9:"ChangeLog";s:4:"853b";s:25:"class.tx_cabagloginas.php";s:4:"6b7c";s:41:"class.tx_cabagloginas_makecontrolhook.php";s:4:"e7e4";s:34:"class.tx_cabagloginas_userauth.php";s:4:"6cc6";s:21:"ext_conf_template.txt";s:4:"a03d";s:12:"ext_icon.gif";s:4:"778f";s:17:"ext_localconf.php";s:4:"3084";s:14:"ext_tables.php";s:4:"a780";s:14:"ext_tables.sql";s:4:"dde4";s:16:"locallang_db.xml";s:4:"08c9";s:10:"README.txt";s:4:"9132";s:33:"sv1/class.tx_cabagloginas_sv1.php";s:4:"eaf1";}',
	'suggests' => array(
	),
);

?>