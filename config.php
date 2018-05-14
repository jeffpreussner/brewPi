<?php
	// DO NOT EDIT THIS FILE DIRECTLY!
	// This file contains the default settings. These are overruled by config_user.php if it exists
	// If you want to change these settings, copy config_user.php.example to config_user.php and make the changes there

	// Configure the path of the BrewPi script for this instance of the
	// web interface.  Do not include the trailing / on the path.
	$scriptPath = '/home/brewpi';
    $requireLogin = true;
    $adminUsername = 'admin';
    $adminPassword = 'admin';
    $maxLoginAttempts = 3;
    $standDownSeconds = 30;

	if(file_exists('config_user.php')) {
		require_once('config_user.php');
	}
