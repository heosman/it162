<?php
/*
portal-config.php

Used to store all of our IT162 configuration information

*/

//prevents data from being sent early
ob_start();

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');


//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

$logo_color = ''; //make logo_color an empty string by default

switch(THIS_PAGE){
    case '../index.php':
        $title = "IT162 Portal Website";
        $logo = 'fa fa-fw fa-bank';
        $PageID = 'Welcome';
    break;

    case 'index.php':
        $title = "Hanan Osman's BIG Website";
        $logo = 'fa-home';
        $PageID = 'Client Questionnaire';
    break;

    case 'flexbox.php':
        $title = "Flexbox";
        $logo = 'fa fa-fw fa-cube';
        $PageID = 'Flexbox Research';
    break;

    case 'galleries.php':
        $title = "Image Galleries";
        $logo = 'fa fa-fw fa-camera-retro';
        $PageID = 'Image Galleries Research';
    break;

    case 'calendar.php':
        $title = "Google Calendar";
        $logo = 'fa fa-fw fa-calendar';
        $PageID = 'Google Calendar';
    break;

    case 'map.php':
        $title = "Google Maps";
        $logo = 'fa fa-fw fa-map-o';
        $PageID = 'Google Maps';
    break;

    case 'youtube.php':
        $title = "Web Accessibility";
        $logo = 'fa fa-fw fa-youtube-square';
        $PageID = 'Video about Web Accessibility';
    break;

    case 'shoppingcarts.php':
        $title = "Monetization";
        $logo = 'fa fa-fw fa-shopping-basket';
        $PageID = 'Shopping Carts Research: Monetizing Websites';
    break;

    case 'siteapp.php':
        $title = "Site vs. App";
        $logo = 'fa fa-fw fa-html5';
        $PageID = 'Responsive Website vs. Mobile App Research';
    break;

    case 'webcam.php':
        $title = "Live Webcams";
        $logo = 'fa fa-fw fa-eye';
        $PageID = 'Live Webcams';
    break;

    default:
        $title = THIS_PAGE;
        $logo = "fa-home";
        $PageID = "Welcome";
   }
    
?>

