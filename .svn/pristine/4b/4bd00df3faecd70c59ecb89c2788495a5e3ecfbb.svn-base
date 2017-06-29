<?php
date_default_timezone_set('America/Mexico_City');
/**
* 
*/
class SentenciasPublicasServer 
{
	/**
	* 
	**/
	function consultaSentenciasPublicas( $json ){
		$response = array('estado'=>'', 'mensaje'=>'', 'data'=>'');
		$status = 'error';
		$message = '';
		$data = '';

		try {
			include_once dirname(__FILE__) . "/../../../controladores/sigejupe/sentenciaspublicas/SentenciaspublicasController.Class.php";

			//object definition
			$object = json_decode( $json );
			if (json_last_error() === JSON_ERROR_NONE) {

				$court = $object->juzgado;
				$folder = $object->carpeta;
				$number = $object->numero;
				$year = $object->anio;
				$initialDate = $object->fecha_inicio;
				$finalDate = $object->fecha_fin;
				$synthesis = $object->sintesis;

				//Data Consistency Validation*****
				// Court validation
				$statusCourt = false;
				$valores = '';
				if( isset( $object->juzgado ) ){
					if( is_string( $court ) ){
						if( !empty( $court ) ){
							if( preg_match('/^\d+(?:,\d+)*$/', $court, $valores) ){ //String validation. Right format: 11,33,44   Wrong format: 11,abc,44
								$statusCourt = true;
							}else{
								$message .= '*Al menos una clave de Juzgado no es correcta. ';
							}
						}else{
							$message .= '*Debe especificar al menos un Juzgado. ';
						}
					}else{
						$message .= '*El tipo de dato del Juzgado es incorrecto.. ';
					}
				}else{
					$message .= '*Debe especificar el Juzgado. ';
				}

				if( $statusCourt ){
					//Look for type validation*****
					// 2 types:
					// 1st: By Folder and/or Number and/or Year and/or synthesis
					// 2nd: By Date range
					// If type keep '0' value, the search will be through Court coincidences
					$type = 0;
					$typeStatus = true;
					if ( isset( $object->fecha_inicio ) && isset( $object->fecha_fin )) {
						if( !empty( $initialDate ) && !empty( $finalDate ) )
							$type = 2;
					}
					if( isset( $object->carpeta ) && isset( $object->numero ) && isset( $object->anio ) ){
						if( !empty( $folder ) || !empty( $number ) || !empty( $year ) )
							$type = 1;
					}

					// 1st type ******
					if( $type == 1 ){
						$initialDate = '';
						$finalDate = '';

						$folder = filter_var( $folder, FILTER_VALIDATE_INT );
						$number = filter_var( $number, FILTER_VALIDATE_INT );
						$year = filter_var( $year, FILTER_VALIDATE_INT );
						$synthesis = filter_var( $synthesis, FILTER_SANITIZE_STRING );

						if( $folder < 0 ){
							$message .= '*Carpeta no v&aacute;lida. ';
							$typeStatus = false;
						}

						if( $number < 0 ){
							$message .= '*N&uacute;mero de Carpeta no v&aacute;lido. ';
							$typeStatus = false;
						}

						if( $year < 0 ){
							$message .= '*A&ntilde;o de Carpeta no v&aacute;lido. ';
							$typeStatus = false;
						}
					}

					// 2nd type ******
					if( $type == 2 ){

						$folder = '';
						$number = '';
						$year = '';
						$synthesis = '';

						$tmpInitialDate = explode('-', $initialDate);
						$tmpFinalDate = explode('-', $finalDate);

						if( !checkdate( $tmpInitialDate[1], $tmpInitialDate[2], $tmpInitialDate[0] ) ){
							$message .= '*La fecha inicial es incorrecta. ';
							$typeStatus = false;
						}else{
							$initialDate = $tmpInitialDate[2] . '/' . $tmpInitialDate[1] . '/' . $tmpInitialDate[0];
						}

						if( !checkdate( $tmpFinalDate[1], $tmpFinalDate[2], $tmpFinalDate[0] ) ){
							$message .= '*La fecha final es incorrecta. ';
							$typeStatus = false;
						}else{
							$finalDate = $tmpFinalDate[2] . '/' . $tmpFinalDate[1] . '/' . $tmpFinalDate[0];
						}

					}

					//Controller call
					if( $typeStatus ){

						$parameters = array('juzgado' => $court,
											'carpeta' => $folder,
											'numero' => $number,
											'anio' => $year,
											'sintesis' => $synthesis,
											'finicio' => $initialDate,
											'ffinal' => $finalDate);
						$SentenciaspublicasController = new SentenciaspublicasController();
						$data = $SentenciaspublicasController->buscarSentenciaPublicaWS( $parameters );

						$status = $data["status"];
						$message = $data["mensaje"];
						$data = $data["data"];
					}
				}

			}else{
				$message .= 'JSON incorrecto.';
			}
			
		} catch (Exception $e) {
			$message = $e->getMessage();
		}

		//Response data
		$response['estado'] = $status;
		$response['mensaje'] = $message;
		$response['data'] = $data;

		$response = json_encode( $response );
		return $response;
	}
}

ini_set("soap.wsdl_cache_enabled", "0");
$server = new SoapServer("SentenciasPublicasScramble.wsdl");
$server->setClass("SentenciasPublicasServer");
$server->handle();

?>