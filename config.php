<?php
/*
# This is configuration file.
# Edit values as needed
*/
// Main configuration
// hide warnings
error_reporting(E_ERROR | E_PARSE);

// DataBase connection
mysql_connect('tommy.heliohost.org', 'bailey_github-lx', '}f]5r[~PNVI4');
mysql_select_db('bailey_heliolinkexchange');

//Webmaster Email
$mail_webmaster = 'bailey@bailey.guru';

// URL
$url = 'https://hlx.bailey.guru/';

//Number of sites per page
$nb_site_page = 10;

//Send an email when accepting/rejecting a web site
$mail = true;
//Site name/title
$sname = "Helio Link Exchange";
//Base Site
$surl = "https://hlx.bailey.guru";

// Admin password for accepting or rejecting site
$password = "1234";
?>
<!DOCTYPE html>
<html>
<head>
<meta name="language" content="en-gb"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<meta name="keywords" content="site,top,link,exchange,heliohost,helionet,atoz.ml,mrj,meraj"/>
<meta name="description" content="<?=$dc?>"/>
<link rel="stylesheet" href="http://<?=$surl?>/styles/materialize.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="http://<?=$surl?>/material-icons.min.css">
<link rel="stylesheet" href="http://<?=$surl?>/style.css" type="text/css">
<link rel="shortcut icon" href="http://<?=$surl?>/favicon.ico" type="image/x-icon"/>
<link rel="icon" href="http://<?=$surl?>/favicon.ico" type="image/x-icon"/>
<meta name="title" content="<?=$sname?> - <?=$title?>"/>
<title><?=$sname?> - <?=$title?></title>
</head>
<body>