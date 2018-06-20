<?php
 
const DEBUG = true; // production : false; dev : true

// Accès base de données
const BD_HOST = 'iutdoua-web.univ-lyon1.fr';
const BD_DBNAME = 'p1602894';
const BD_USER = 'p1602894';
const BD_PWD = '267235';

//Session
const login = 'admin';
const mdp = 'admin';

// footer
const FOOTER = 'Gestion des VIP'; 

//dossiers racines du site
define('PATH_CONTROLLERS','./controllers/c_');
define('PATH_ENTITY','./entities/');
define('PATH_ASSETS','./assets/');
define('PATH_LIB','./lib/');
define('PATH_MODELS','./models/');
define('PATH_VIEWS','./views/v_');
define('PATH_TEXTES','./languages/');

//sous dossiers
define('PATH_CSS', PATH_ASSETS.'css/');
define('PATH_IMAGES', PATH_ASSETS.'images/');
define('PATH_SCRIPTS', PATH_ASSETS.'scripts/');


//fichiers
define('PATH_LOGO', PATH_IMAGES.'canneslogoOr.png');
define('PATH_MENU', PATH_VIEWS.'menu.php');
