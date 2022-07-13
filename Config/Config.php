<?php 
	const BASE_URL = "http://localhost/www/";

	//Zona horaria
	date_default_timezone_set('America/Bogota');

	//Datos de conexión a Base de Datos
	const DB_HOST = "localhost";
	const DB_NAME = "formulario";
	const DB_USER = "root";
	const DB_PASSWORD = "";
	const DB_CHARSET = "utf8";

	//Para envío de correo
	const ENVIRONMENT = 0; // Local: 0, Produccón: 1;

	//Deliminadores decimal y millar Ej. 24,1989.00
	const SPD = ".";
	const SPM = ",";

	//Simbolo de moneda
	const SMONEY = "$";
	const CURRENCY = "USD";

	//Datos envio de correo
	const NOMBRE_REMITENTE = "Tienda Virtual";
	// const EMAIL_REMITENTE = "no-reply@abelosh.com";
	const EMAIL_REMITENTE = "jose.jdgo97@gmail.com";
	const NOMBRE_EMPESA = "Tienda Virtual";
	const WEB_EMPRESA = "www.jd.com";

	//Datos Empresa
	const DIRECCION = "Cra 7 Tbis #76-12 Alfonzo Lopez,<br> Cali-Colombia";
	const TELEMPRESA = "+(602)3043459";
	const WHATSAPP = "+57(314)7072792";
	const EMAIL_EMPRESA = "jose.jdgo97@gmail.com";
	const EMAIL_PEDIDOS = "jose.jdgo97@gmail.com"; 
	const EMAIL_SUSCRIPCION = "jose.jdgo97@gmail.com";
	const EMAIL_CONTACTO = "jose.jdgo97@gmail.com";

	const CAT_SLIDER = "1,2,3";
	const CAT_BANNER = "4,5,6";
	const CAT_FOOTER = "1,2,3,4,5";

	//Datos para Encriptar / Desencriptar
	const KEY = 'jose';
	const METHODENCRIPT = "AES-128-ECB";

	//Envío
	const COSTOENVIO = 5;

	//Páginas
	const PINICIO = 1;
	const PTIENDA = 2;
	const PCARRITO = 3;
	const PNOSOTROS = 4;
	const PCONTACTO = 5;
	const PPREGUNTAS = 6;
	const PTERMINOS = 7;
	const PSUCURSALES = 8;
	const PERROR = 9;

	//Roles
	const RADMINISTRADOR = 1;
	const RSUPERVISOR = 2;
	const RCLIENTES = 3;

	const STATUS = array('Completo','Aprobado','Cancelado','Reembolsado','Pendiente','Entregado');



	//REDES SOCIALES
?>