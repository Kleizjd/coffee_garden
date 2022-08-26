<?php

    const BASE_URL = "http://localhost/www/CofeeGarden";
    // "http://".$_SERVER["HTTP_HOST"]."/www/SoftwareCalidad";

	const MEDIA = "/public";

	//Zona horaria
	date_default_timezone_set('America/Bogota');

	//Datos de conexión a Base de Datos
	const DB_HOST = "localhost";
	const DB_NAME = "coffe_garden";
	const DB_USER = "root";
	const DB_PASSWORD = "";
	const DB_CHARSET = "utf8";
	const activeSession = 10000000;
	//Para envío de correo
	const ENVIRONMENT = 1; // Local: 0, Produccón: 1;

	//Deliminadores decimal y millar Ej. 24,1989.00
	const SPD = ".";
	const SPM = ",";

	//Simbolo de moneda
	const SMONEY = "$";
	const CURRENCY = "USD";

