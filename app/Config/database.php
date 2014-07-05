<?php

class DATABASE_CONFIG {


	// public $default = array(
	// 	'datasource' => 'Database/Mysql',
	// 	'persistent' => false,
	// 	'host' => 'beeg8p76qqtdo1m1.mysql.clvrcld.net',
	// 	'login' => 'u7u08pcfnipug5r5',
	// 	'password' => '5131f348506948ce8857d287251eaace',
	// 	'database' => 'beeg8p76qqtdo1m1',
	// 	'prefix' => '',
	// 	'encoding' => 'utf8',
	// );

	public $default = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'root',
		'password' => '',
		'database' => 'entrainement',
		'prefix' => '',
		'encoding' => 'utf8',
	);

	// public $mailchimp = array(
	// 	'datasource' => 'Mailchimp.MailchimpSubscriberSource',
	// 	'apikey'  => 'f1d84a7c958fbfc821f7ef78913dbf87-us4',
	// 	'listId'  => '604eb04864',
	// 	'baseUrl' => 'http://us4.api.mailchimp.com/1.3/'
	// );
}