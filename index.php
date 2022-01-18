<?php
/**
 * Campaign: GoogleT1
 * Created: 2022-01-17 12:13:26 UTC
 */

require 'leadcloak-164rbxv5bvpi.php';

// ---------------------------------------------------
// Configuration

// Set this to false if application is properly installed.
$enableDebugging = true;

// Set this to false if you won't want to log error messages
$enableLogging = true;

if ($enableDebugging) {
	isApplicationReadyToRun();
}

$data = httpRequestMakePayload($campaignId, $campaignSignature);

$response = httpRequestExec($data);

$handler = httpHandleResponse($response, $enableLogging);

if ($handler) {
	exit();
}

?>