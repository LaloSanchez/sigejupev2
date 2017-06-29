<?php

session_start();
include_once(dirname(__FILE__) . "/../../../webservice/cliente/solicitudperito/CancelacionPeritoCliente.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/solicitudesperitos/SolicitudesperitosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/solicitudesperitos/SolicitudesperitosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/antecedesactuaciones/AntecedesactuacionesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/antecedesactuaciones/AntecedesactuacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/actuaciones/ActuacionesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/actuaciones/ActuacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/actuacionesestatus/ActuacionesestatusDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/actuacionesestatus/ActuacionesestatusDTO.Class.php");

@$idSolicitudPerito = $_POST["idSolicitudPerito"];
@$idPerito = $_POST["idPerito"];
@$cveUsuarioSolicitante = $_POST["cveUsuarioSolicitante"];
@$cvePerfil = $_SESSION["cvePerfil"];
@$cveSistema = $_SESSION["cveSistema"];
@$cveAdscripcion = $_POST["cveAdscripcion"];
@$motivo = strtoupper($_POST["motivo"]);
@$accion = $_POST["accion"];
if ($accion == "cancelacionSolicitudPerito") {
    $proveedor = new Proveedor("mysql", "sigejupe");
    $proveedor->connect();
    $proveedor->execute("BEGIN");
    $SolicitudesPeritosActuacionesDAO = new SolicitudesperitosDAO();
    $SolicitudesPeritosActuacionesDTO = new SolicitudesperitosDTO();
    $SolicitudesPeritosActuacionesDTO->setIdReferencia($idSolicitudPerito);
    $SolicitudesPeritosActuacionesDTO->setActivo("S");
    $resultado = $SolicitudesPeritosActuacionesDAO->selectSolicitudesperitos($SolicitudesPeritosActuacionesDTO, $proveedor);
    if ($resultado == "") {
        $proveedor->execute("ROLLBACK");
        $proveedor->close();
        echo '{"estatus":"fail","totalCount":"0","msj":"ERROR. NO SE LOGRO LOCALIZAR A LA SOLICITUD DE PERITAJE"}';
        exit;
    }
    $SolicitudesPeritosActuacionesDTO->setIdSolicitudPertioActuacion($resultado[0]->getIdSolicitudPertioActuacion());
    $SolicitudesPeritosActuacionesDTO->setActivo("N");
    $SolicitudesPeritosActuacionesDTO->setFechaActualizacion("");
    $SolicitudesPeritosActuacionesDTO->setFechaRegistro("");
    $resultado = $SolicitudesPeritosActuacionesDAO->updateSolicitudesperitos($SolicitudesPeritosActuacionesDTO, $proveedor);
    if ($resultado == "") {
        $proveedor->execute("ROLLBACK");
        $proveedor->close();
        echo '{"estatus":"fail","totalCount":"0","msj":"ERROR. NO SE LOGRO ELIMINAR A LA SOLICITUD DE PERITAJE"}';
        exit;
    }
    $idActuacion = $resultado[0]->getIdActuacion(); //id actuacion de la solicitud de perito
    $antecedesDao = new AntecedesactuacionesDAO();
    $antecedesDto = new AntecedesactuacionesDTO();
    $antecedesDto->setActivo("S");
    $antecedesDto->setIdActuacionHija($idActuacion);
    $resultado = $antecedesDao->selectAntecedesactuaciones($antecedesDto, "", $proveedor);
    if ($resultado == "") {
        $proveedor->execute("ROLLBACK");
        $proveedor->close();
        echo '{"estatus":"faild","totalCount":"0","msj":"ERROR. FALLO AL INTENTAR LOCALIZAR LA SOLICITUD DE PERITO EN EL ARBOL JUDICIAL"}';
        exit;
    }
    $resultado[0]->setFechaActualizacion("");
    $resultado[0]->setFechaRegistro("");
    $resultado[0]->setActivo("N");
    $resultado = $antecedesDao->updateAntecedesactuaciones($resultado[0], $proveedor);
    if ($resultado == "") {
        $proveedor->execute("ROLLBACK");
        $proveedor->close();
        echo '{"estatus":"faild","totalCount":"0","msj":"ERROR. FALLO AL BORRAR LA SOLICITUD DE PERITO DEL ARBOL JUDICIAL"}';
        exit;
    }
    $actuacionesDAO = new ActuacionesDAO();
    $actuacionesDTO = new ActuacionesDTO();
    $actuacionesDTO->setIdActuacion($idActuacion);
    $actuacionesDTO->setActivo("N");
    $resultado = $actuacionesDAO->updateActuaciones($actuacionesDTO, $proveedor);
    if ($resultado == "") {
        $proveedor->execute("ROLLBACK");
        $proveedor->close();
        echo '{"estatus":"faild","totalCount":"0","msj":"ERROR. FALLO AL BORRAR LA SOLICITUD DE PERITO (ACTUACION)"}';
        exit;
    }
    $actuacionEstatusDao = new ActuacionesestatusDAO();
    $actuacionEstatusDto = new ActuacionesestatusDTO();
    $actuacionEstatusDto->setActivo("S");
    $actuacionEstatusDto->setIdActuacion($resultado[0]->getIdActuacion());
    $actuacionEstatusDto->setCveEstatus(50); //50 = registrada (solicitud de perito)
    $resultado = $actuacionEstatusDao->selectActuacionesestatus($actuacionEstatusDto, "", $proveedor);
    if ($resultado == "") {
        $proveedor->execute("ROLLBACK");
        $proveedor->close();
        echo '{"estatus":"faild","totalCount":"0","msj":"ERROR. FALLO AL INTENTAR LOCALIZAR EL ESTATUS DE LA ACTUACION (SOLICITUD DE PERITO)"}';
        exit;
    }
    $resultado[0]->setFechaRegistro("");
    $resultado[0]->setFechaActualizacion("");
    $resultado[0]->setCveEstatus(51);//solicitud de perito cancelada
    if ($actuacionEstatusDao->updateActuacionesestatus($resultado[0], $proveedor) == "") {
        $proveedor->execute("ROLLBACK");
        $proveedor->close();
        echo '{"estatus":"faild","totalCount":"0","msj":"ERROR. FALLO AL INTENTAR ACTUALIZAR EL ESTATUS DE LA ACTUACION (SOLICITUD DE PERITO)"}';
        exit;
    }
    //comienza el proceso de cancelacion de solicitud de peritaje (en el sistema de peritos)
    $SolicitudPeritoCliente = new SolicitudPeritoCliente();
    $json = '{
          "type": "cancelarSolicitud",
          "data": [{
              "idSolicitudePerito": "' . $idSolicitudPerito . '", 
              "idPerito": "' . $idPerito . '",
              "cveUsuarioSolicitante": "' . $cveUsuarioSolicitante . '",
              "cvePerfil": "' . $cvePerfil . '",
              "cveSistema": "' . $cveSistema . '",
              "cveAdscripcion": "' . $cveAdscripcion . '",
              "motivo": ' . json_encode($motivo) . '
          }]
    }';
    $json = $SolicitudPeritoCliente->ServiceSolicitudesPeritos($json);
    $json = json_decode($json);
    if ($json == null) {
        $proveedor->execute("ROLLBACK");
        $proveedor->close();
        echo '{"estatus":"faild","totalCount":"0","msj":"ERROR. FALLO LA RESPUESTA DEL SERVICIO WEB. INTENTELO NUEVAMENTE"}';
        exit;
    }
    if ($json->estatus != "ok") {
        $proveedor->execute("ROLLBACK");
        $proveedor->close();
        $json->msj = "SERVICIO WEB: " . $json->msj;
        echo json_encode($json);
        exit;
    }
    $proveedor->execute("COMMIT");
    $proveedor->close();
    $resultados = json_encode($json->resultados);
    $notificacion = json_encode($json->notificacion);
    echo '{"estatus":"ok","msj":"SOLICITUD DE PERITAJE REGISTRADA EXITOSAMENTE","resultados":' . $resultados . ',"notificacion":' . $notificacion . '}';
    exit;
}
?>
