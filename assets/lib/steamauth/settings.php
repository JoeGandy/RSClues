<?php
$api_key = "171E3487633D91D69EA27789DD6C24D4"; // Your Steam WebAPI-Key found at http://steamcommunity.com/dev/apikey
$domainname = "csgo.joegandy.co.uk"; // The main URL of your website displayed in the login page
$button_style = "large_no"; // Style of the login button [small|large_no|large]
$logout_page = ""; // Page to redirect to after a successfull logout (from the root folder of your website)

// System stuff
if (empty($api_key)) {die("<div style='display: block; width: 100%; background-color: red; text-align: center;'>SteamAuth:<br>Please supply a API-Key!</div>");}
if (empty($domainname)) {$domainname = "localhost";}
if ($button_style != "small" and $button_style != "large_no" and $button_style != "large") {$button_style = "large_no";}
$logout_page = "..".$logout_page;
?>