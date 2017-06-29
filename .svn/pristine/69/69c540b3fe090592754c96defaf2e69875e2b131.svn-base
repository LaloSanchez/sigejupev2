<?php

	class Constantes	{
		//BASE DE DATOS
		const bd_servidor	= "localhost";
		const bd_usuario	= "root";
		const bd_clave		= "osve108807";
		const bd_bd			= "htsj_sigejupe_darch";
		//RUTA
		const ruta_local	= "/var/www/html/sigejupeV2/";

		const ruta_ws_login = "http://gestion.pjedomex.gob.mx/gestion2/servidor/";

		const ondev			= true;
	}

	function comoCatalogo($numero, $digitos = 4)	{
		return str_pad($numero, $digitos, "0", STR_PAD_LEFT);
	}
	function comoMoneda($importe, $decimales = 2)	{
		$importe = (float)$importe;
		$locale = localeconv();
		return '$ ' . number_format($importe, $decimales, '.', ',');
	}
	function comoDecimal($importe, $decimales = 2)	{
		$importe = (float)$importe;
		$locale = localeconv();
		return number_format($importe, $decimales, '.', '');
	}
	function comoLlave($cadena, $reemplazo = '_')	{
		return str_replace(" ", $reemplazo, $cadena);
	}
	function GenerarCadena($longitud = 10)	{
		$caracteres = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
		$cadena = "";
		while ($i < $longitud) {
			$char = substr($caracteres, mt_rand(0, strlen($caracteres)-1), 1);
			$cadena .= $char;
			$i++;
		}
		return $cadena;
	}
?>
