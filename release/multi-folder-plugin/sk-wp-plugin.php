<?php

/*
Plugin Name: Multi Folder Plugin
Description: This is a test plugin for checking the Multi folder Private Updates
Plugin Author: Salih K
Plugin URI: https://salih.me
Version: 1.0.0
*/


require 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/salihkulangara/Multi-Folder-Repo/',
	__FILE__,
	'multi-folder-repo'
);
