<?php


// ---------------------------- //
//       ERRORS DISPLAY         //
// ---------------------------- //

//!\\ A Enlever lors du déploiement
error_reporting(E_ALL);
ini_set('display_errors', true);

// ---------------------------- //
//          SESSIONS            //
// ---------------------------- //

ini_set('session.cookie_lifetime', false); // La session existe jusqu'à la fermeture du navigateur
session_start();


// ---------------------------- //
//          CONSTANTS           //
// ---------------------------- //

// Paths
define("PATH_REQUIRE", substr($_SERVER['SCRIPT_FILENAME'], 0, -9)); // Fonction d'inclusion php
define("PATH", substr($_SERVER['PHP_SELF'], 0, -9)); // Pour image, fichiers etc...

// Website informations
define("WEBSITE_TITLE", "Mon Site");
define("WEBSITE_NAME", "Mon Site");
define("WEBSITE_URL", "https://monsite.com");
define("WEBSITE_DESCRIPTION", "Bienvenu sur mon site");
define("WEBSITE_KEYWORDS", "");
define("WEBSITE_LANGUAGE", "Fr");
define("WEBSITE_AUTHOR", "");
define("WEBSITE_AUTHOR_MAIL", "");

// Facebook Open Graph tags
define("WEBSITE_FACEBOOK_NAME", "");
define("WEBSITE_FACEBOOK_DESCRIPTION", "");
define("WEBSITE_FACEBOOK_URL", "");
define("WEBSITE_FACEBOOK_IMAGE", "");

// Database informations
define("DATABASE_HOST", "localhost");
define("DATABASE_NAME", "test");
define("DATABASE_USER", "root");
define("DATABASE_PASSWORD", "Di@bolo76");


