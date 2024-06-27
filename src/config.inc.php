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
	
	if (("127.0.0.1" == $_SERVER["SERVER_ADDR"]) || ("::1" == $_SERVER["SERVER_ADDR"])) {
		// parameters for a localhost web site (dev, debug, test)
		@include_once(__DIR__."/protected/config-dev.inc.php");
	} else {
		// parameters for a real domain name or IP (release)
		@include_once(__DIR__."/protected/config-release.inc.php");
	}
	// default values for all parameters
	require_once(__DIR__."/protected/config-dist.inc.php");

	if (!defined("CDEBUG")) {
		http_response_code(500);
		die("Debug or release mode ?");
	}

	if (!defined("CLogAsJSONFile")) {
		http_response_code(500);
		if (CDEBUG) {
			die("Do you want to log Ko-fi payment data as JSON files ?");
		}
		else {
			die();
		}
	}

	if (!defined("CVerificationToken")) {
		http_response_code(500);
		if (CDEBUG) {
			die("The verification token is needed.");
		}
		else {
			die();
		}
	}

	if (empty(CVerificationToken)) {
		http_response_code(500);
		if (CDEBUG) {
			die("Empty verification token.");
		}
		else {
			die();
		}
	}

