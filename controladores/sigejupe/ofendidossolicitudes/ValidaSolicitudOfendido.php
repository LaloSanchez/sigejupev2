<?php

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ofendidossolicitudes/OfendidossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ofendidossolicitudes/OfendidossolicitudesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/solicitudesaudiencias/SolicitudesaudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/solicitudesaudiencias/SolicitudesaudienciasDAO.Class.php");

/**
 * clase que valida el estatus de la solicitud del ofendido
 * si el estatus de la solicitud del ofendido es 2 o 3(enviada o cancelada) se cancela se regresa error
 * Class ValidaSolicitudOfendido
 */
class ValidaSolicitudOfendido {

    public function validarEstatusSolicitudByIdOfendido($idOfendidoSolicitud, $accion, $modulo, $proveedor = null) {

        try {

            $ofendidosSolicitudesDto = new OfendidossolicitudesDTO();
            $ofendidosSolicitudesDao = new OfendidossolicitudesDAO();

            $solicitudesAudienciaDto = new SolicitudesaudienciasDTO();
            $solicitudesAudienciaDao = new SolicitudesaudienciasDAO();


            $ofendidosSolicitudesDto->setIdOfendidoSolicitud($idOfendidoSolicitud);
            $ofendidosSolicitudesDto->setActivo('S');

            $getOfendido = $ofendidosSolicitudesDao->selectOfendidossolicitudes($ofendidosSolicitudesDto, '', $proveedor);

            if ($getOfendido == '')
                throw new Exception('No se encontro el ofendido para obtener su solicitud y validar el estatus de la misma');

            if (!count($getOfendido))
                throw new Exception('no se encontr&oacute; la solicitud para validar su estatus.' . __LINE__);

            $idSolicitudAudienciaOfendido = $getOfendido[0]->getIdSolicitudAudiencia();


            $solicitudesAudienciaDto->setIdSolicitudAudiencia($idSolicitudAudienciaOfendido);
            $solicitudesAudienciaDto->setActivo('S');

            $getSolicitud = $solicitudesAudienciaDao->selectSolicitudesaudiencias($solicitudesAudienciaDto, '', '', $proveedor);


            if ($getSolicitud == '')
                throw new Exception('no se encontr&oacute; la solicitud para validar su estatus.');

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

                throw new Exception('No se puede ' . $accion . ' el ' . $modulo . ', ya que la solicitud se encuentra ' . $desestatussolicitus);
            }

            $response = [
                'estatus' => 'ok'
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
