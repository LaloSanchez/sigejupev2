<?php
	
	date_default_timezone_set('America/Mexico_City');

	function newlog($texto)	{
		$fecha		= date('Y-m-d');
		$archivo	= "../logs/" . $fecha . "_log.log";

		$texto		= date('H:i:s') . " " . $texto . "\r\n\r\n";

		file_put_contents($archivo, $texto, FILE_APPEND | LOCK_EX);

		return false;
	}

	class array_a_objeto{
		function array_a_objeto($array_objecto) {  
			reset($array_objecto);  
			while (list($key, $value) = each($array_objecto)) {
				$this->$key = $value;  
			}
		}
	}

?>