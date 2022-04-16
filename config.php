<?php 
require_once("enviroment.php");

$config = [];

if (ENVIROMENT == 'development') {
	define('BASE_URL', "http://localhost/B7web/PHP_do_zero_ao_profissional/Modulo16_PHP_super_avancado/mvc/");
	//Banco de dados de desenvolvedor
	$config['dbname'] = 'mvc';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}else{
	define('BASE_URL', "https://meusite.com.br");
	//Banco de dados de produção
	$config['dbname'] = 'mvc';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}

global $db;

try {
	$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
} catch (Exception $e) {
	echo "ERRO: ".$e->getMessage();
	exit;
}