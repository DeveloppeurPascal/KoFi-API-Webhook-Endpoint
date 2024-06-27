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
	
	require_once(__DIR__."/config.inc.php");
	
	$data = (isset($_POST) && isset($_POST["data"]))?$_POST["data"]:"";
	if (! empty($data)) {
		$json = json_decode($data);
		if (is_object($json)) {
			if (isset($json->verification_token) && (! empty($json->verification_token)) && ($json->verification_token == CVerificationToken)) {
				if (CLogAsJSONFile) {
					$filename = "kofi-data/".date("YmdHis")."-";
					$nb = mt_rand(5,15);
					for ($i = 0; $i<$nb; $i++) {
						$c = mt_rand(0,35); // 0-9, a-z
						if (($c >= 0) && ($c < 10)) {
							$filename .= chr(ord('0')+$c);
						}
						else if (($c >= 10) && ($c < 35)) {
							$filename .= chr(ord('a')+$c-10);
						}
						else {
							http_response_code(500);
							if (CDEBUG) {
								die("Unknow random value ".$c." as filename ID");
							}
							else {
								die();
							}
						}
					}
					$filename .= ".json";
					file_put_contents($filename, json_encode($json));
				}
				if ((! empty(CFUNCTION_FILENAME)) && file_exists(CFUNCTION_FILENAME)) {
					require_once(__DIR__."/".CFUNCTION_FILENAME);
					if ((! empty(CFUNCTION_NAME)) && function_exists(CFUNCTION_NAME)) {
						call_user_func(CFUNCTION_NAME, $json);
					}
				}
				if (! empty(CSendJSONTextToEmail)) {
					mail(CSendJSONTextToEmail,CSendJSONTextEmailTitle,$data);
				}
				print("OK");
			}
			else {
				print("NOK");
			}
		}
		else {
			print("NOK");
		}
	}
	else {
		print("NOK");
	}
