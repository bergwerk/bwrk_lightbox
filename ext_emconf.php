<?php

$EM_CONF[$_EXTKEY] = array(
	'title' => 'BERGWERK Lightbox 2',
	'description' => 'This extension adds the Lightbox 2 from Lokesh Dhakar to your TYPO3',
	'category' => 'fe',
	'author' => 'BERGWERK',
  	'author_email' => 'technik@bergwerk.ag',
  	'author_company' => 'BERGWERK Werbeagentur GmbH',
  	'state' => 'stable',
	'version' => '1.1.2',
	'constraints' => array(
		'depends' => array(
			'typo3' => '6.2.0-6.2.99',
		),
		'conflicts' => array(
			'bwrk_monsterkill' => '3.3.0'
		),
		'suggests' => array(),
	),
);