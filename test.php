<?php
/**
 * Created by Dumitru Russu.
 * Date: 7/15/13
 * Time: 10:14 PM
 * To change this template use File | Settings | File Templates.
 */
function __autoload($fileName) {
	require_once $fileName . '.php';
}

$SEPA = new SepaXmlFile();

$SEPA::$_XML_FILES_REPOSITORY = '/sepa/xml_files/';
$SEPA::$_FILE_NAME = 'sepa_test.xml';

//Simple Example of Sepa Xml File Messages
$SEPA::$_MESSAGES = array(
	array('message_id' => 1,
		'group_header' => array(
			'company_name' => 'Amazing SRL ȘȚțș ыаывпавпва '
		),
		'payment_info' => array(
			'FRST' => array(
				'id' => 6222,
				'creditor_iban' => 'MD24 AG00 0225 1000 1310 4168',
				'creditor_bic' => 'AABAFI42',
				'creditor_name' => 'Amazing SRL',
				'scheme_identifier' => 'FR07ZZZ519993',
				'transactions' => array(
					array(
						'id' => 1,
						'endId' => 2,
						'company_name' => 'Roy SRL',
						'amount' => 100.4,
						'umr' => 'SDD000000016PFX0713',
						'iban' => 'FR14 2004 1010 0505 0001 3M02 606',
						'bic' => 'AABAFI22',
						'mandate_sign_date' => '2013-08-03',
						'invoice' => 122
					),
					array(
						'id' => 3,
						'endId' => 3,
						'company_name' => 'Toy SRL',
						'amount' => 10.4,
						'umr' => 'SDD000000016PFX0714',
						'iban' => 'FR14 2004 1010 0505 0001 3M02 606',
						'bic' => 'AABAFI42',
						'mandate_sign_date' => '2013-08-03',
						'invoice' => 1223
					)
				)
			))));

//Sepa Export View
//	$SEPA->export()->view();

//Sepa Export Save
//	$SEPA->export()->save();

//Sepa Export Save and View
//	$SEPA->export()->save()->view();

//Seepa Export View and Save
	$SEPA->export()->view()->save();

