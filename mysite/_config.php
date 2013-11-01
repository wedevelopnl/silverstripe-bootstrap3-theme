<?php

global $project;
$project = 'mysite';

global $databaseConfig;
$databaseConfig = array(
	"type" => 'MySQLDatabase',
	"server" => 'localhost',
	"username" => '',
	"password" => '',
	"database" => '',
	"path" => '',
);

if (isset($_SERVER['APPLICATION_ENV']) && $_SERVER['APPLICATION_ENV'] == 'development') {
	Director::set_environment_type("dev");
}

// Set the site locale
i18n::set_locale('nl_NL');

SS_Cache::set_cache_lifetime('any', 86400);
Object::add_extension('SiteConfig', 'CustomSiteConfig');