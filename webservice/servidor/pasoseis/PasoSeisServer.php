<?php

include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/violencia/ViolenciaController.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/bitacoraws/BitacorawsDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/bitacoraws/BitacorawsDAO.Class.php");

date_default_timezone_set('America/Mexico_City');

class PasoSeisServer {

    public function agregar($data = '', $u = '', $p = '') {
        
    }

    public function agregarEfectoViolenciaGenero($data, $u = '', $p = '') {
        try {
            if ($data != '' && $this->isJSON($data)) {
                $bitacoraWsDto = new BitacorawsDTO();
                $BitacoraWsRespDto = new BitacorawsDTO();
                $bitacoraWsDao = new BitacorawsDAO();
                $fechaRegistro = date("Y-m-d H:i:s");
                $bitacoraWsDto->setCveAccionws(23); //cREA SOLICITUD AUDIENCIA
                $bitacoraWsDto->setObservacionesOrigen($data);
                $bitacoraWsDto->setHrefOrigen("agregar Efecto Violencia Genero");
                $bitacoraWsDto->setFechaRegistro($fechaRegistro);
                $rsBitacoraWsDto = $bitacoraWsDao->insertBitacoraws($bitacoraWsDto);

                $violenciaController = new ViolenciaController();

                $response = $violenciaController->agregarEfectoViolenciaGenero($data);

                if ($rsBitacoraWsDto != "") {
                    $BitacoraWsRespDto->setIdBitacoraws($rsBitacoraWsDto[0]->getIdBitacoraws());
                    $BitacoraWsRespDto->setDescEstatusBitacoraws("");
                    $BitacoraWsRespDto->setObservacionesDestino(json_encode($response));
                    $rsRespuestaBitacora = $bitacoraWsDao->updateBitacoraws($BitacoraWsRespDto);
                }
            } else {
                $response = [
                    'estatus' => 'error',
                    'mensaje' => utf8_encode('El json a recibir se encuentra vacío')
                ];
            }
        } catch (Exception $e) {

            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage()
            ];
        }

        return json_encode($response);
    }

    public function eliminarEfectoViolenciaGenero($data = '', $u = '', $p = '') {
        try {
            if (!$this->isJSON($data))
                throw new Exception('el parametro recibido no es un json valido');

            $violenciaController = new ViolenciaController();

            $response = $violenciaController->eliminarEfectoViolenciaGenero($data);
        } catch (Exception $e) {

            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage()
            ];
        }

        return json_encode($response);
    }

    public function agregarFactorSocialViolenciaGenero($data = '', $u = '', $p = '') {
        try {
            if ($data != "" && $this->isJSON($data)) {

                $bitacoraWsDto = new BitacorawsDTO();
                $BitacoraWsRespDto = new BitacorawsDTO();
                $bitacoraWsDao = new BitacorawsDAO();

                $fechaRegistro = date("Y-m-d H:i:s");


                $bitacoraWsDto->setCveAccionws(24); //cREA SOLICITUD AUDIENCIA
                $bitacoraWsDto->setObservacionesOrigen($data);
                $bitacoraWsDto->setHrefOrigen("agregar Factor Social Violencia Genero");
                $bitacoraWsDto->setFechaRegistro($fechaRegistro);
                $rsBitacoraWsDto = $bitacoraWsDao->insertBitacoraws($bitacoraWsDto);

                throw new Exception('el parametro recibido no es un json valido');

                $violenciaController = new ViolenciaController();

                $response = $violenciaController->agregarFactorSocialViolenciaGenero($data);

                if ($rsBitacoraWsDto != "") {
                    $BitacoraWsRespDto->setIdBitacoraws($rsBitacoraWsDto[0]->getIdBitacoraws());
                    $BitacoraWsRespDto->setDescEstatusBitacoraws("");
                    $BitacoraWsRespDto->setObservacionesDestino(json_encode($response));
                    $rsRespuestaBitacora = $bitacoraWsDao->updateBitacoraws($BitacoraWsRespDto);
                }
            } else {
                $response = [
                    'estatus' => 'error',
                    'mensaje' => utf8_encode('El json a recibir se encuentra vacío')
                ];
            }
        } catch (Exception $e) {

            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage()
            ];
        }

        return json_encode($response);
    }

    public function eliminarFactorSocialViolenciaGenero($data = '', $u = '', $p = '') {
        try {
            if (!$this->isJSON($data))
                throw new Exception('el parametro recibido no es un json valido');

            $violenciaController = new ViolenciaController();

            $response = $violenciaController->eliminarFactorSocialViolenciaGenero($data);
        } catch (Exception $e) {

            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage()
            ];
        }

        return json_encode($response);
    }

    public function agregarHomicidioDolosoViolenciaGenero($data = '', $u = '', $p = '') {
        try {
            if ($data != "" && $this->isJSON($data)) {

                $violenciaController = new ViolenciaController();

                $bitacoraWsDto = new BitacorawsDTO();
                $BitacoraWsRespDto = new BitacorawsDTO();
                $bitacoraWsDao = new BitacorawsDAO();
                $fechaRegistro = date("Y-m-d H:i:s");

                $bitacoraWsDto->setCveAccionws(25); //cREA SOLICITUD AUDIENCIA
                $bitacoraWsDto->setObservacionesOrigen($data);
                $bitacoraWsDto->setHrefOrigen("agregar Homicidio Doloso Violencia Genero");
                $bitacoraWsDto->setFechaRegistro($fechaRegistro);
                $rsBitacoraWsDto = $bitacoraWsDao->insertBitacoraws($bitacoraWsDto);

                $response = $violenciaController->agregarHomicidioDolosoViolenciaGenero($data);

                if ($rsBitacoraWsDto != "") {
                    $BitacoraWsRespDto->setIdBitacoraws($rsBitacoraWsDto[0]->getIdBitacoraws());
                    $BitacoraWsRespDto->setDescEstatusBitacoraws("");
                    $BitacoraWsRespDto->setObservacionesDestino(json_encode($response));
                    $rsRespuestaBitacora = $bitacoraWsDao->updateBitacoraws($BitacoraWsRespDto);
                }
            } else {
                $response = [
                    'estatus' => 'error',
                    'mensaje' => utf8_encode('El json a recibir se encuentra vacío')
                ];
            }
        } catch (Exception $e) {
            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage()
            ];
        }

        return json_encode($response);
    }

    public function eliminarHomicidioDolosoViolenciaGenero($data = '', $u = '', $p = '') {
        try {
            if (!$this->isJSON($data))
                throw new Exception('el parametro recibido no es un json valido');

            $violenciaController = new ViolenciaController();

            $response = $violenciaController->eliminarHomicidioDolosoViolenciaGenero($data);
        } catch (Exception $e) {

            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage()
            ];
        }

        return json_encode($response);
    }

    public function agregarEfectosGeneral($data = '', $u = '', $p = '') {
        try {
            if ($data != "" && $this->isJSON($data)) {
                $violenciaController = new ViolenciaController();
                $bitacoraWsDto = new BitacorawsDTO();
                $BitacoraWsRespDto = new BitacorawsDTO();
                $bitacoraWsDao = new BitacorawsDAO();

                $fechaRegistro = date("Y-m-d H:i:s");
                $bitacoraWsDto->setCveAccionws(26); //cREA SOLICITUD AUDIENCIA
                $bitacoraWsDto->setObservacionesOrigen($data);
                $bitacoraWsDto->setHrefOrigen("agregarEfectosGeneral");
                $bitacoraWsDto->setFechaRegistro($fechaRegistro);
                $rsBitacoraWsDto = $bitacoraWsDao->insertBitacoraws($bitacoraWsDto);
                $response = $violenciaController->agregarEfectosGeneral($data);

                if ($rsBitacoraWsDto != "") {
                    $BitacoraWsRespDto->setIdBitacoraws($rsBitacoraWsDto[0]->getIdBitacoraws());
                    $BitacoraWsRespDto->setDescEstatusBitacoraws("");
                    $BitacoraWsRespDto->setObservacionesDestino(json_encode($response));
                    $rsRespuestaBitacora = $bitacoraWsDao->updateBitacoraws($BitacoraWsRespDto);
                }
            } else {
                $response = [
                    'estatus' => 'error',
                    'mensaje' => utf8_encode('El json a recibir se encuentra vacío')
                ];
            }
        } catch (Exception $e) {

            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage()
            ];
        }

        return json_encode($response);
    }

    public function eliminarEfectosGeneral($data = '', $u = '', $p = '') {
        try {
            if (!$this->isJSON($data))
                throw new Exception('el parametro recibido no es un json valido');

            $violenciaController = new ViolenciaController();

            $response = $violenciaController->eliminarEfectosGeneral($data);
        } catch (Exception $e) {

            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage()
            ];
        }

        return json_encode($response);
    }

    public function agregarConductaSexual($data = '', $u = '', $p = '') {
        try {
            if ($data != "" && $this->isJSON($data)) {


                $violenciaController = new ViolenciaController();

                $bitacoraWsDto = new BitacorawsDTO();
                $BitacoraWsRespDto = new BitacorawsDTO();
                $bitacoraWsDao = new BitacorawsDAO();
                $fechaRegistro = date("Y-m-d H:i:s");
                $bitacoraWsDto->setCveAccionws(27); //cREA SOLICITUD AUDIENCIA
                $bitacoraWsDto->setObservacionesOrigen($data);
                $bitacoraWsDto->setHrefOrigen("agregar Conducta Sexual");
                $bitacoraWsDto->setFechaRegistro($fechaRegistro);
                $rsBitacoraWsDto = $bitacoraWsDao->insertBitacoraws($bitacoraWsDto);

                $response = $violenciaController->agregarConductaSexual($data);

                if ($rsBitacoraWsDto != "") {
                    $BitacoraWsRespDto->setIdBitacoraws($rsBitacoraWsDto[0]->getIdBitacoraws());
                    $BitacoraWsRespDto->setDescEstatusBitacoraws("");
                    $BitacoraWsRespDto->setObservacionesDestino(json_encode($response));
                    $rsRespuestaBitacora = $bitacoraWsDao->updateBitacoraws($BitacoraWsRespDto);
                }
            } else {
                $response = [
                    'estatus' => 'error',
                    'mensaje' => utf8_encode('El json a recibir se encuentra vacío')
                ];
            }
        } catch (Exception $e) {

            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage()
            ];
        }

        return json_encode($response);
    }

    public function eliminarConductaSexual($data = '', $u = '', $p = '') {
        try {
            if (!$this->isJSON($data))
                throw new Exception('el parametro recibido no es un json valido');

            $violenciaController = new ViolenciaController();

            $response = $violenciaController->eliminarConductaSexual($data);
        } catch (Exception $e) {

            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage()
            ];
        }

        return json_encode($response);
    }

    public function agregarTestigos($data = '', $u = '', $p = '') {
        try {
            if ($data != "" && $this->isJSON($data)) {

                $violenciaController = new ViolenciaController();


                $bitacoraWsDto = new BitacorawsDTO();
                $BitacoraWsRespDto = new BitacorawsDTO();
                $bitacoraWsDao = new BitacorawsDAO();
                $fechaRegistro = date("Y-m-d H:i:s");
                $bitacoraWsDto->setCveAccionws(28); //cREA SOLICITUD AUDIENCIA
                $bitacoraWsDto->setObservacionesOrigen($data);
                $bitacoraWsDto->setHrefOrigen("agregarTestigos");
                $bitacoraWsDto->setFechaRegistro($fechaRegistro);
                $rsBitacoraWsDto = $bitacoraWsDao->insertBitacoraws($bitacoraWsDto);

                $response = $violenciaController->agregarTestigos($data);

                if ($rsBitacoraWsDto != "") {
                    $BitacoraWsRespDto->setIdBitacoraws($rsBitacoraWsDto[0]->getIdBitacoraws());
                    $BitacoraWsRespDto->setDescEstatusBitacoraws("");
                    $BitacoraWsRespDto->setObservacionesDestino(json_encode($response));
                    $rsRespuestaBitacora = $bitacoraWsDao->updateBitacoraws($BitacoraWsRespDto);
                }
            } else {
                $response = [
                    'estatus' => 'error',
                    'mensaje' => $e->getMessage()
                ];
            }
        } catch (Exception $e) {

            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage()
            ];
        }

        return json_encode($response);
    }

    public function eliminarTestigos($data = '', $u = '', $p = '') {
        try {
            if (!$this->isJSON($data))
                throw new Exception('el parametro recibido no es un json valido');

            $violenciaController = new ViolenciaController();

            $response = $violenciaController->eliminarTestigos($data);
        } catch (Exception $e) {

            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage()
            ];
        }

        return json_encode($response);
    }

    public function agregarTrataPersonas($data = '', $u = '', $p = '') {
        try {
            if ($data != "" && $this->isJSON($data)) {
                $violenciaController = new ViolenciaController();

                $bitacoraWsDto = new BitacorawsDTO();
                $BitacoraWsRespDto = new BitacorawsDTO();
                $bitacoraWsDao = new BitacorawsDAO();
                $fechaRegistro = date("Y-m-d H:i:s");
                $bitacoraWsDto->setCveAccionws(29); //cREA SOLICITUD AUDIENCIA
                $bitacoraWsDto->setObservacionesOrigen($data);
                $bitacoraWsDto->setHrefOrigen("agregar Trata Personas");
                $bitacoraWsDto->setFechaRegistro($fechaRegistro);
                $rsBitacoraWsDto = $bitacoraWsDao->insertBitacoraws($bitacoraWsDto);

                $response = $violenciaController->agregarTrataPersonas($data);

                if ($rsBitacoraWsDto != "") {
                    $BitacoraWsRespDto->setIdBitacoraws($rsBitacoraWsDto[0]->getIdBitacoraws());
                    $BitacoraWsRespDto->setDescEstatusBitacoraws("");
                    $BitacoraWsRespDto->setObservacionesDestino(json_encode($response));
                    $rsRespuestaBitacora = $bitacoraWsDao->updateBitacoraws($BitacoraWsRespDto);
                }
            } else {
                $response = [
                    'estatus' => 'error',
                    'mensaje' => $e->getMessage()
                ];
            }
        } catch (Exception $e) {

            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage()
            ];
        }

        return json_encode($response);
    }

    public function eliminarTrataPersonas($data = '', $u = '', $p = '') {

        try {
            if (!$this->isJSON($data))
                throw new Exception('el parametro recibido no es un json valido');

            $violenciaController = new ViolenciaController();

            $response = $violenciaController->eliminarTrataPersonas($data);
        } catch (Exception $e) {

            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage()
            ];
        }

        return json_encode($response);
    }

    public function consultar($data = '', $u = '', $p = '') {

        try {
            if (!$this->isJSON($data))
                throw new Exception('el parametro recibido no es un json valido');

            $violenciaController = new ViolenciaController();

            $response = $violenciaController->consultarPorIdRelacion($data);
        } catch (Exception $e) {

            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage()
            ];
        }

        return json_encode($response);
    }

    private function isValid($user = "", $password = "") {
        $valido = false;
        if (is_dir("../" . $user) == true) {
            if (is_file("../" . $user . "/" . $password . ".pwsd") == true) {
                $valido = true;
            } else {
                $valido = false;
            }
        } else {
            $valido = false;
        }

        return $valido;
    }

    private function isJSON($string) {
        json_decode($string);

        return (json_last_error() == JSON_ERROR_NONE);
    }

}

ini_set("soap.wsdl_cache_enabled", "0");
$server = new SoapServer("PasoSeisScramble.wsdl");
$server->setClass("PasoSeisServer");
$server->handle();
