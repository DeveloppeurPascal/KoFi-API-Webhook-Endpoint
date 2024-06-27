<?php
	// Ko-fi API webhook endpoint
	// (c) Patrick Prémartin
	//
	// Distributed under license AGPL-3.0 license.
	//
	// Infos and updates :
	// https://github.com/DeveloppeurPascal/KoFi-API-Webhook-Endpoint

	// !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
	// !!! NEVER CHANGE THIS FILE ON YOUR SITES !!!
	// !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

	// This file will be overwritten each time you update your site from the code 
	// repository. Never modify it directly.
	
	// This file contains the default settings of the software.
	//
	// For localhost server, copy your defines in a protected/config-dev.inc.php file.
	//
	// For real domaine or IP, copy your defines in a protected/config-release.inc.php file.

	// Verification token (given by Ko-fi)
	if (!defined("CVerificationToken"))
		define("CVerificationToken", "");

	// Debug mode (send readable error codes and texts)
	if (!defined("CDEBUG"))
		define("CDEBUG", false);

	// Log data as JSON files
	if (!defined("CLogAsJSONFile"))
		define("CLogAsJSONFile", true);

	// Send data by email as JSON text => receiver email
	// Remark : one of your addresses, don't share confidential data from those emails)
	if (!defined("CSendJSONTextToEmail"))
		define("CSendJSONTextToEmail", ""); // type your receiver email address

	// Send data by email as JSON text
	if (!defined("CSendJSONTextEmailTitle"))
		define("CSendJSONTextEmailTitle", "Valid received transaction from Ko-fi"); // title of the received email

	// PHP file to include if you want to personalize the action for each webhook call
	if (!defined("CFUNCTION_FILENAME"))
		define("CFUNCTION_FILENAME", "");

	// Name of the function (from CFUNCTION_FILENAME) to call for each webhook call
	// Remark : This function will be called with one argument : the JSON object value of received "data" variable.
	if (!defined("CFUNCTION_NAME"))
		define("CFUNCTION_NAME", "");
