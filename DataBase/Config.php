<?php
const BASE_URL = 'http://localhost/portal/';
define('URL_BIBLIOTECA', 'http://localhost/portal/');

$path = dirname(dirname(__FILE__));

define("PATH_DIR", $path . '/');
define("PATH_CONTROLLERS", PATH_DIR . 'Controllers/');
define("PATH_LIBRARIES", PATH_DIR . 'Libraries/');
define("PATH_MODELS", PATH_DIR . 'Models/');
define("PATH_VIEW", PATH_DIR . 'Views/');

define("TIME_SESSION", array('horas' => 2, 'minutos' => 0));

define("PATH_FOTOPERFIL", 'C:/laragon/www/portal/Assets/images/fotoperfil/');
define("PATH_FOTOALCALDE", 'C:/laragon/www/portal/Assets/images/alcalde/');
define("PATH_FOTOEMPRESA", 'C:/laragon/www/portal/Assets/images/empresa/');
define("PATH_DOCREALCALDIA", 'C:/laragon/www/portal/Assets/doc/resoluciones_alcaldia/');
define("PATH_DOCREGERENCIA", 'C:/laragon/www/portal/Assets/doc/resoluciones_gerencia/');
define("PATH_DOCRECONSEJO", 'C:/laragon/www/portal/Assets/doc/resoluciones_consejo/');
// define("PATH_FOTOLIBRO", 'C:/laragon/www/portal/Assets/images/libros/');

date_default_timezone_set('America/Lima');

const DB_PORTAL = 'portal_mdesv';
const VERSION = '0.0.0.7';

const DB_HOST = 'localhost';
const DB_USER = 'root';
const DB_PASSWORD = '';
const SB_CHARSET ='charset=utf8';

define("VER_MEDIA", "1.0.0.0");