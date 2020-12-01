<?php

// --------------------------- //
//       ERRORS DISPLAY        //
// --------------------------- //

//!\\ A enlever lors du déploiement
// error_reporting(E_ERROR | E_PARSE);
// ini_set('display_errors', true);


// --------------------------- //
//          SESSIONS           //
// --------------------------- //
ini_set('session.cookie_lifetime', false);
session_start();

// --------------------------- //
//         CONSTANTS           //
// --------------------------- //

// Paths
define("PATH_REQUIRE", substr($_SERVER['SCRIPT_FILENAME'], 0, -9)); // Pour fonctions d'inclusion php
define("PATH", substr($_SERVER['PHP_SELF'], 0, -9)); // Pour images, fichiers etc (html)

// Website informations
define("WEBSITE_TITLE", "SCORE - Société De Construction Et De Rénovation, BTP - Electricité - Forage");
define("WEBSITE_NAME", "SCORE - Société De Construction Et De Rénovation");
define("WEBSITE_URL", "http://www.score.ci");
define("WEBSITE_DESCRIPTION", "SCORE est une entreprise spécialisée dans les domaines du Bâtiments, des Travaux Publiques, de l’Électricité et du Forage hydraulique");
define("WEBSITE_KEYWORDS", "score, btp, electricité, forage, batiment");
define("WEBSITE_LANGUAGE", "fr");
define("WEBSITE_AUTHOR", "SCORE");
define("WEBSITE_AUTHOR_MAIL", "info@score.ci");

// Facebook Open Graph tags
define("WEBSITE_FACEBOOK_NAME", "SCORE");
define("WEBSITE_FACEBOOK_DESCRIPTION", "SCORE est une entreprise spécialisée dans les domaines du Bâtiments, des Travaux Publiques, de l’Électricité et du Forage hydraulique");
define("WEBSITE_FACEBOOK_URL", "");
define("WEBSITE_FACEBOOK_IMAGE", "");

// DataBase informations
define("DATABASE_HOST", "localhost");
define("DATABASE_NAME", "db_name");
define("DATABASE_USER", "db_user");
define("DATABASE_PASSWORD", "db_password");

