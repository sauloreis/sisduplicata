<?php


// Caminho absoluto para pasta interna
$pastaInterna = "sisduplicata/";
define("URL_BASE", "http://{$_SERVER['HTTP_HOST']}/{$pastaInterna}");

//Caminho absoluto para as requisições do servidor

if (substr($_SERVER['DOCUMENT_ROOT'], -1) =="/") {
 
    define("DIR_REQ","{$_SERVER['DOCUMENT_ROOT']}{$pastaInterna}");
} else {
    
    define("DIR_REQ", "{$_SERVER['DOCUMENT_ROOT']}/{$pastaInterna}");
}

//Caminhos especifico css,js,img
define("DIR_IMG",URL_BASE."assets/img/");
define("DIR_CSS",URL_BASE."assets/css/");
define("DIR_JS",URL_BASE."assets/js/");
define("DIR_FONT",URL_BASE."assets/fonts/");
