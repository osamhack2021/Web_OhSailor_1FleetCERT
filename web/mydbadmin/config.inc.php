<?php
/**
* All directives are explained in documentation
* at <https://docs.phpmyadmin.net/en/latest/config.html>.
*/
 
$i = 0;
$cfg = array();
 
$cfg['blowfish_secret'] = 'RkyE=T6t6KjX65KPC7/XNQ\Bk9EhBXar'; /* YOU MUST FILL IN THIS FOR COOKIE AUTH! */
$cfg['NavigationTreeEnableGrouping'] = false;
$cfg['MaxNavigationItems'] = '200';
$cfg['FirstLevelNavigationItems'] = '200';
$cfg['ShowDatabasesNavigationAsTree'] = false;
$cfg['NumRecentTables'] = 0;
 
// add new
$i++;
$cfg['Servers'][$i]['host'] = 'localhost';
 
// add new
/*
$i++;
$cfg['Servers'][$i]['host'] = '123.250.250.250';
// $cfg['Servers'][$i]['port'] = '3306';
*/
 
// add new
/*
$i++;
$cfg['Servers'][$i]['host'] = 'mydb.cluster-cf1onrqhtz3u.ap-northeast-2.rds.amazonaws.com';
// $cfg['Servers'][$i]['port'] = '3306';
*/
