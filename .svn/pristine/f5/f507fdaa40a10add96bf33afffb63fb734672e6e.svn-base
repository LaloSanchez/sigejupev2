<?php
/*
*************************************************
*FRAMEWORK V1.0.0 (http://www.pjedomex.gob.mx)
*Copyright 2009-2015 CONTROLLER
* Licensed under the MIT license 
* Autor: *
* Departamento de Desarrollo de Software
* Subdireccion de Ingenieria de Software
* Direccion de Teclogias de Informacion
* Poder Judicial del Estado de Mexico
*************************************************
*/

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/apelantessolicitudes/ApelantessolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/apelantessolicitudes/ApelantessolicitudesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/generos/GenerosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/generos/GenerosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tipospersonas/TipospersonasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tipospersonas/TipospersonasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposapelantes/TiposapelantesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposapelantes/TiposapelantesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/solicitudesaudiencias/SolicitudesaudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/solicitudesaudiencias/SolicitudesaudienciasDAO.Class.php");

class ApelantessolicitudesController {

    private $proveedor;

    public function __construct()
    {
    }

    public function validarApelantessolicitudes($ApelantessolicitudesDto)
    {
        $ApelantessolicitudesDto->setidApelanteSolicitud(strtoupper(str_ireplace("'", "", trim($ApelantessolicitudesDto->getidApelanteSolicitud()))));
        $ApelantessolicitudesDto->setidSolicitudAudiencia(strtoupper(str_ireplace("'", "", trim($ApelantessolicitudesDto->getidSolicitudAudiencia()))));
        $ApelantessolicitudesDto->setnombre(strtoupper(str_ireplace("'", "", trim($ApelantessolicitudesDto->getnombre()))));
        $ApelantessolicitudesDto->setpaterno(strtoupper(str_ireplace("'", "", trim($ApelantessolicitudesDto->getpaterno()))));
        $ApelantessolicitudesDto->setmaterno(strtoupper(str_ireplace("'", "", trim($ApelantessolicitudesDto->getmaterno()))));
        $ApelantessolicitudesDto->setcveGenero(strtoupper(str_ireplace("'", "", trim($ApelantessolicitudesDto->getcveGenero()))));
        $ApelantessolicitudesDto->setcveTipoPersona(strtoupper(str_ireplace("'", "", trim($ApelantessolicitudesDto->getcveTipoPersona()))));
        $ApelantessolicitudesDto->setnombreMoral(strtoupper(str_ireplace("'", "", trim($ApelantessolicitudesDto->getnombreMoral()))));
        $ApelantessolicitudesDto->setcveTipoApelante(strtoupper(str_ireplace("'", "", trim($ApelantessolicitudesDto->getcveTipoApelante()))));
        $ApelantessolicitudesDto->setactivo(strtoupper(str_ireplace("'", "", trim($ApelantessolicitudesDto->getactivo()))));
        $ApelantessolicitudesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($ApelantessolicitudesDto->getfechaRegistro()))));
        $ApelantessolicitudesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($ApelantessolicitudesDto->getfechaActualizacion()))));

        return $ApelantessolicitudesDto;
    }

    public function utfEncodeApelante($apelanteResponse)
    {

        foreach ($apelanteResponse as $index => $objetoApelante) {
            $apelanteResponse[$index]->setIdApelanteSolicitud(utf8_encode($objetoApelante->getIdApelanteSolicitud()));
            $apelanteResponse[$index]->setIdSolicitudAudiencia(utf8_encode($objetoApelante->getIdSolicitudAudiencia()));
            $apelanteResponse[$index]->setNombre(utf8_encode($objetoApelante->getNombre()));
            $apelanteResponse[$index]->setPaterno(utf8_encode($objetoApelante->getPaterno()));
            $apelanteResponse[$index]->setMaterno(utf8_encode($objetoApelante->getMaterno()));
            $apelanteResponse[$index]->setCveGenero(utf8_encode($objetoApelante->getCveGenero()));
            $apelanteResponse[$index]->setCveTipoPersona(utf8_encode($objetoApelante->getCveTipoPersona()));
            $apelanteResponse[$index]->setNombreMoral(utf8_encode($objetoApelante->getNombreMoral()));
            $apelanteResponse[$index]->setCveTipoApelante(utf8_encode($objetoApelante->getCveTipoApelante()));
            $apelanteResponse[$index]->setActivo(utf8_encode($objetoApelante->getActivo()));
        }

        return $apelanteResponse;

    }

    public function validaEstatusSolicitud($idSolicitudAudiencia, $accion)
    {
        $solicitudesAudienciaDto = new SolicitudesaudienciasDTO();
        $solicitudesAudienciaDao = new SolicitudesaudienciasDAO();

        $solicitudesAudienciaDto->setIdSolicitudAudiencia($idSolicitudAudiencia);
        $solicitudesAudienciaDto->setActivo('S');


        $getSolicitud = $solicitudesAudienciaDao->selectSolicitudesaudiencias($solicitudesAudienciaDto);

        $estatusSolicitud = $getSolicitud[0]->getCveEstatusSolicitud();

        if ($estatusSolicitud == 2 || $estatusSolicitud == 3) {

            $desestatussolicitus = '';

            switch ($estatusSolicitud) {
                case 2:
                    $desestatussolicitus = 'enviada';
                    break;
                case 3:
                    $desestatussolicitus = 'cancelada';
                    break;
            }

            $response = [
                'estatus' => 'error',
                'mensaje' => 'No se puede ' . $accion . ' el apelante, ya que la solicitud se encuentra ' . $desestatussolicitus
            ];

        } else {

            $response = [
                'estatus' => 'ok',
                'mensaje' => ''
            ];

        }

        return $response;

    }

    public function selectApelantessolicitudes($ApelantessolicitudesDto, $proveedor = null)
    {
        try {

            $ApelantessolicitudesDto = $this->validarApelantessolicitudes($ApelantessolicitudesDto);
            $ApelantessolicitudesDao = new ApelantessolicitudesDAO();
            $ApelantessolicitudesDto = $ApelantessolicitudesDao->selectApelantessolicitudes($ApelantessolicitudesDto, $proveedor);

            if ($ApelantessolicitudesDto == '') throw new Exception('no se encontraron apelantes con los parametros especificados');

            $ApelantessolicitudesDto = $this->utfEncodeApelante($ApelantessolicitudesDto);

            $apelantesDtoToArray = [];

            foreach ($ApelantessolicitudesDto as $index => $objetoApelante) {

                $desGenero = 'N/A';
                $desTipoPersona = '';
                $desTipoApelante = '';


                /*
                 * obtenemos la descripcion del genero del apelante
                 */
                if ($objetoApelante->getCveGenero() == null || $objetoApelante->getCveGenero() == '') {
                    $desGenero = 'N/A';
                } else {
                    $generosDao = new GenerosDAO();
                    $generosDto = new GenerosDTO();

                    $generosDto->setCveGenero($objetoApelante->getCveGenero());
                    $generosDto->setActivo('S');

                    $generosDto = $generosDao->selectGeneros($generosDto);

                    if ($generosDto != '' || $generosDto == null) $desGenero = $generosDto[0]->getDesGenero();
                }


                /*
                 * termina descripcion del genero del apelante
                 */


                /*
                 * obtenemos la descripcion del tipo de persona del apelante
                 */
                $tipoPersonaDao = new TipospersonasDAO();
                $tipoPersonaDto = new TipospersonasDTO();

                $tipoPersonaDto->setCveTipoPersona($objetoApelante->getCveTipoPersona());
                $tipoPersonaDto->setActivo('S');

                $tipoPersonaDto = $tipoPersonaDao->selectTipospersonas($tipoPersonaDto);

                if ($tipoPersonaDto != '') $desTipoPersona = $tipoPersonaDto[0]->getDesTipoPersona();
                /*
                 * termina la descripcion del tipo de persona del apelante
                 */


                /*
                 * obtenemos descripcion del tipo de apelante
                 */
                $tiposApelantesDao = new TiposapelantesDAO();
                $tiposApelantesDto = new TiposapelantesDTO();

                $tiposApelantesDto->setCveTipoApelante($objetoApelante->getCveTipoApelante());
                $tiposApelantesDto->setActivo('S');

                $tiposApelantesDto = $tiposApelantesDao->selectTiposapelantes($tiposApelantesDto);

                if ($tiposApelantesDto != '') $desTipoApelante = $tiposApelantesDto[0]->getDesTipoApelante();
                /*
                 * termina descripcion del tipo de apelante
                 */

                $apelantesDtoToArray[$index] = [
                    'idApelanteSolicitud'  => $objetoApelante->getIdApelanteSolicitud(),
                    'idSolicitudAudiencia' => $objetoApelante->getIdSolicitudAudiencia(),
                    'nombre'               => $objetoApelante->getNombre(),
                    'paterno'              => $objetoApelante->getPaterno(),
                    'materno'              => $objetoApelante->getMaterno(),
                    'cveGenero'            => $objetoApelante->getCveGenero(),
                    'desGenero'            => $desGenero,
                    'cveTipoPersona'       => $objetoApelante->getCveTipoPersona(),
                    'desTipoPersona'       => $desTipoPersona,
                    'nombreMoral'          => $objetoApelante->getNombreMoral(),
                    'cveTipoApelante'      => $objetoApelante->getCveTipoApelante(),
                    'desTipoApelante'      => $desTipoApelante,
                    'activo'               => $objetoApelante->getActivo()
                ];

            }


            $response = [
                'totalCount' => count($apelantesDtoToArray),
                'mensaje'    => 'la consulta tiene resultados',
                'data'       => $apelantesDtoToArray
            ];

        } catch (Exception $e) {

            $response = [
                'totalCount' => '0',
                'mensaje'    => $e->getMessage(),
                'data'       => '0'
            ];

        }


        return $response;
    }

    public function insertApelantessolicitudes($ApelantessolicitudesDto, $proveedor = null)
    {
        $ApelantessolicitudesDto = $this->validarApelantessolicitudes($ApelantessolicitudesDto);
        $ApelantessolicitudesDao = new ApelantessolicitudesDAO();

        try {

            $validaEstatusSolicitud = $this->validaEstatusSolicitud($ApelantessolicitudesDto->getIdSolicitudAudiencia(), 'agregar');
            if ($validaEstatusSolicitud['estatus'] == 'error') throw new Exception($validaEstatusSolicitud['mensaje']);

            $ApelantessolicitudesDto = $ApelantessolicitudesDao->insertApelantessolicitudes($ApelantessolicitudesDto, $proveedor);

            if ($ApelantessolicitudesDto == '') throw new Exception('No se pudo guardar correctamente los datos del apelante');

            $ApelantessolicitudesDto = $this->utfEncodeApelante($ApelantessolicitudesDto);
            $response = [
                'status'  => 'ok',
                'mensaje' => 'Apelante guardado correctamente',
                'data'    => $ApelantessolicitudesDto[0]->toString(),
            ];

        } catch (Exception $e) {

            $response = [
                'status'  => 'error',
                'mensaje' => [$e->getMessage()],
                'data'    => ''
            ];

        }


        return $response;
    }

    public function updateApelantessolicitudes($ApelantessolicitudesDto, $proveedor = null)
    {
        $ApelantessolicitudesDto = $this->validarApelantessolicitudes($ApelantessolicitudesDto);
        $ApelantessolicitudesDao = new ApelantessolicitudesDAO();

        try {

            $validaEstatusSolicitud = $this->validaEstatusSolicitud($ApelantessolicitudesDto->getIdSolicitudAudiencia(), 'modificar');
            if ($validaEstatusSolicitud['estatus'] == 'error') throw new Exception($validaEstatusSolicitud['mensaje']);

            $ApelantessolicitudesDto = $ApelantessolicitudesDao->updateApelantessolicitudes($ApelantessolicitudesDto, $proveedor);

            if ($ApelantessolicitudesDto == '') throw new Exception('No se pudo editar correctamente los datos del apelante');

            $ApelantessolicitudesDto = $this->utfEncodeApelante($ApelantessolicitudesDto);

            $response = [
                'status'  => 'ok',
                'mensaje' => 'Apelante editado correctamente',
                'data'    => $ApelantessolicitudesDto[0]->toString(),
            ];

        } catch (Exception $e) {

            $response = [
                'status'  => 'error',
                'mensaje' => [$e->getMessage()],
                'data'    => ''
            ];

        }

        return $response;
    }

    public function deleteApelantessolicitudes($ApelantessolicitudesDto, $proveedor = null)
    {
        try {

            $validaEstatusSolicitud = $this->validaEstatusSolicitud($ApelantessolicitudesDto->getIdSolicitudAudiencia(), 'eliminar');
            if ($validaEstatusSolicitud['estatus'] == 'error') throw new Exception($validaEstatusSolicitud['mensaje']);

            $ApelantessolicitudesDto = $this->validarApelantessolicitudes($ApelantessolicitudesDto);
            $ApelantessolicitudesDao = new ApelantessolicitudesDAO();

            $ApelantessolicitudesDto->setActivo('N');

            $ApelantessolicitudesDto = $ApelantessolicitudesDao->updateApelantessolicitudes($ApelantessolicitudesDto, $proveedor);

            if ($ApelantessolicitudesDto == '') throw new Exception('No se pudo eliminar el apelante seleccionado');

            $ApelantessolicitudesDto = $this->utfEncodeApelante($ApelantessolicitudesDto);

            $response = [
                'status'  => 'ok',
                'mensaje' => 'Apelante eliminado corretamente',
                'data'    => $ApelantessolicitudesDto[0]->toString()
            ];

        } catch (Exception $e) {
            $response = [
                'status'  => 'error',
                'mensaje' => $e->getMessage()
            ];
        }

        return $response;

    }

    public function validaApelantes($apelantesSolicitudesDto, $proveedor = null)
    {
        try {

            $apelantesSolicitudDao = new ApelantessolicitudesDAO();
            $apelantesSolicitudDto = new ApelantessolicitudesDTO();

            $apelantesSolicitudDto->setIdSolicitudAudiencia($apelantesSolicitudesDto->getIdSolicitudAudiencia());
            $apelantesSolicitudDto->setActivo('S');

            $getApelantesSolicitud = $apelantesSolicitudDao->selectApelantessolicitudes($apelantesSolicitudDto, '', $proveedor);

            if ($getApelantesSolicitud == '') throw new Exception('La solicitud de audiencia debe de tener al menos 1 apelante');

            $response = [
                'estatus' => 'ok',
                'mensaje' => 'ok'
            ];

        } catch (Exception $e) {
            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage()
            ];
        }

        return $response;

    }
}