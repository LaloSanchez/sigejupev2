<?php
/*#*/
 if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
include_once (dirname(__FILE__) . "/../../../modelos/sigejupe/dao/select/SelectDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/antecedesactuaciones/AntecedesactuacionesController.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/actuaciones/ActuacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/actuaciones/ActuacionesDAO.Class.php");

class BandejasFacade {

    public function __construct() {
        ;
    }

    public function select($params, $proveedor = null, $paginacion = null) {
        $SelectDAO = new SelectDAO();
        return $SelectDAO->selectDAO($params, $proveedor, $paginacion);
    }

}

  function obtenerPromocionAcordada($idActuacion) {
            $Antecedesactuaciones = new AntecedesactuacionesController();
            $AntecedesactuacionesDto = new AntecedesactuacionesDTO();
            $AntecedesactuacionesDto->setIdActuacionPadre($idActuacion);
            $AntecedesactuacionesDto =  $Antecedesactuaciones->selectAntecedesactuaciones($AntecedesactuacionesDto);
            if($AntecedesactuacionesDto != ""){
                $acordada = false;
                for ($i = 0; $i < count($AntecedesactuacionesDto); $i++) {
                    $ActuacionesDao = new ActuacionesDAO();
                    $ActuacionesDto2 = new ActuacionesDTO();
                    $ActuacionesDto2->setIdActuacion($AntecedesactuacionesDto[$i]->getIdActuacionHija());
                    $ActuacionesDto2->setCveTipoActuacion(2);
                    $ActuacionesDto2 = $ActuacionesDao->selectActuaciones($ActuacionesDto2);
                    if($ActuacionesDto2 != ""){
                        $acordada = true;
                    }else{
                        $acordada = false;
                    }
                }
                if($acordada){
                    return "Acordada";
                }else{
                    return "No Acordada";
                }
            }else{
                return "No Acordada";
            }
        }

function buildQuery($kindQuery, $paramsGet) {

    switch ($kindQuery) {
        case "1":
            $params["fields"] = 'DATE_FORMAT(A.fechaRegistro,\'%d/%m/%Y %H:%i:%s\') as fechaRegistro, A.idActuacion,A.numActuacion,A.aniActuacion,TA.desTipoActuacion,A.Sintesis,A.destinatario,A.cveUsuario,C.idCarpetaJudicial,C.numero,C.anio,J.desJuzgado,J.cveJuzgado,TC.desTipoCarpeta,TC.cveTipoCarpeta,"" as estadoPorcedencia,"" as juzgadoProcedencia';
            $params["tables"] = "tblactuaciones A,tblcarpetasjudiciales C ,tbltiposactuaciones TA, tbltiposcarpetas TC,tbljuzgados J";
            $params["conditions"] = "A.cveTipoActuacion=TA.cveTipoActuacion
            AND A.cveTipoCarpeta= TC.cveTipoCarpeta
            And A.idReferencia=C.idCarpetaJudicial
            And A.numero=C.numero
            And A.anio=C.anio
            And A.cveJuzgado=C.cveJuzgado
            And A.cveTipoActuacion=" . $paramsGet["cveTipoActuacion"] . "
            And C.cveJuzgado=J.cveJuzgado
            And C.activo='S'
            And A.activo='S'
            And A.fechaRegistro>='" . fechaMysql($paramsGet["fechaInicio"]) . " 00:00:00'
            And A.cveJuzgado=" . $paramsGet["cveJuzgado"] . "
            And A.fechaRegistro<='" . fechaMysql($paramsGet["fechaFinal"]) . " 23:59:59'
            UNION ALL
            Select DATE_FORMAT(A.fechaRegistro,'%d/%m/%Y %H:%i:%s') as fechaRegistro, A.idActuacion,A.numActuacion,A.aniActuacion,TA.desTipoActuacion,A.Sintesis,A.destinatario,A.cveUsuario,E.idExhorto,E.numExhorto,E.aniExhorto,J.desJuzgado,J.cveJuzgado,TC.desTipoCarpeta,TC.cveTipoCarpeta,ED.desEstado as estadoProcedencia,if(JP.cveJuzgado<>0,JP.desJuzgado, E.juzgadoProcedencia) As juzgadoProcedencia
            FROM tblactuaciones A,tblexhortos E LEFT JOIN tbljuzgados JP ON (E.cveJuzgadoProcedencia = JP.cveJuzgado) ,tbltiposactuaciones TA, tbltiposcarpetas TC,tbljuzgados J,tblestados ED
            Where A.cveTipoActuacion=TA.cveTipoActuacion
            AND A.cveTipoCarpeta= TC.cveTipoCarpeta
            AND A.cveTipoCarpeta= 7
            And A.idReferencia=E.idExhorto
            And A.numero=E.numExhorto
            And A.anio=E.aniExhorto
            And A.cveJuzgado=E.cveJuzgado
            And ED.cveEstado=E.cveEstadoProcedencia
            And A.cveTipoActuacion=" . $paramsGet["cveTipoActuacion"] . "
            And E.cveJuzgado=J.cveJuzgado
            And E.activo='S'
            And A.activo='S'
            And A.fechaRegistro>='" . fechaMysql($paramsGet["fechaInicio"]) . " 00:00:00'
            And A.cveJuzgado=" . $paramsGet["cveJuzgado"] . "
            And A.fechaRegistro<='" . fechaMysql($paramsGet["fechaFinal"]) . " 23:59:59'
            UNION ALL
            Select DATE_FORMAT(A.fechaRegistro,'%d/%m/%Y %H:%i:%s') as fechaRegistro, A.idActuacion,A.numActuacion,A.aniActuacion,TA.desTipoActuacion,A.Sintesis,A.destinatario,A.cveUsuario,AM.idAmparo,AM.numAmparo,AM.aniAmparo,J.desJuzgado,J.cveJuzgado,TC.desTipoCarpeta,TC.cveTipoCarpeta,'' as estadoPorcedencia,'' as juzgadoProcedencia
            FROM tblactuaciones A,tblamparos AM ,tbltiposactuaciones TA, tbltiposcarpetas TC,tbljuzgados J
            Where A.cveTipoActuacion=TA.cveTipoActuacion
            AND A.cveTipoCarpeta= TC.cveTipoCarpeta
            AND A.cveTipoCarpeta= 8  
            And A.idReferencia=AM.idAmparo
            And A.numero=AM.numAmparo
            And A.anio=AM.aniAmparo
            And A.cveJuzgado=AM.cveJuzgado
            And A.cveTipoActuacion=" . $paramsGet["cveTipoActuacion"] . "
            And AM.cveJuzgado=J.cveJuzgado
            And AM.activo='S'
            And A.activo='S'
            And A.fechaRegistro>='" . fechaMysql($paramsGet["fechaInicio"]) . " 00:00:00'
            And A.cveJuzgado=" . $paramsGet["cveJuzgado"] . "
            And A.fechaRegistro<='" . fechaMysql($paramsGet["fechaFinal"]) . " 23:59:59'
               UNION ALL
            select DATE_FORMAT(A.fechaRegistro,'%d/%m/%Y %H:%i:%s') as fechaRegistro, A.idActuacion,A.numActuacion,A.aniActuacion,TA.desTipoActuacion,A.Sintesis,A.destinatario,A.cveUsuario, 'Sin carpeta' as idCarpetaJudicial, ' Sin n&uacute;mero' as numero, 'Sin a&ntilde;o' as anio,J.desJuzgado,J.cveJuzgado, 'Sin Carpeta' as desTipoCarpeta, 'Sin Carpeta' as cveTipoCarpeta,'' as estadoPorcedencia,'' as juzgadoProcedencia 
            from tblactuaciones A inner join tbltiposactuaciones TA on (A.cveTipoActuacion = TA.cveTipoActuacion) inner join tbljuzgados J on (A.cveJuzgado = J.cveJuzgado)
            where A.cveTipoCarpeta is NULL
            And A.fechaRegistro>='" . fechaMysql($paramsGet["fechaInicio"]) . " 00:00:00'
            And A.cveTipoActuacion=" . $paramsGet["cveTipoActuacion"] . "
            And A.cveJuzgado=" . $paramsGet["cveJuzgado"] . "

            And A.fechaRegistro<='" . fechaMysql($paramsGet["fechaFinal"]) . " 23:59:59'
            "
            ;
            $params["groups"] = "";
            $params["orders"] = "";
            return $params;
            break;
        case "2":
            $params["fields"] = 'S.idSolicitudAudiencia,CA.desCatAudiencia,JD.desJuzgado, DATE_FORMAT(S.fechaEnvio,\'%d/%m/%Y\') as fechaEnvio,C.numero,C.anio,TC.desTipoCarpeta,J.desJuzgado as pertenece, DATE_FORMAT(A.fechaInicial,\'%d/%m/%Y %H:%i:%s\') as fechaInicial, DATE_FORMAT(A.fechaFinal,\'%d/%m/%Y %H:%i:%s\') as fechaFinal, EA.desEstatusAudiencia';
            $params["tables"] = "tblsolicitudesaudiencias S INNER JOIN tbljuzgados JD on (S.cveJuzgadoDesahoga=JD.cveJuzgado),tblcarpetasjudiciales C, tbljuzgados J,tblestatussolicitudes ES,tbltiposcarpetas TC,tblaudiencias A,tblestatusaudiencias EA,tblcataudiencias CA";
            $params["conditions"] = " S.cveJuzgado=J.cveJuzgado
            And S.activo='S'
            And S.cveEstatusSolicitud=ES.cveEstatusSolicitud
            And A.idSolicitudAudiencia=S.idSolicitudAudiencia            
            And A.cveEstatusAudiencia=EA.cveEstatusAudiencia
            And A.cveCatAudiencia=CA.cveCatAudiencia
            And S.cveCatAudiencia=CA.cveCatAudiencia
            And ES.cveEstatusSolicitud=2
            And J.cveJuzgado=S.cvejuzgado
            And C.activo='S'
            And C.idCarpetaJudicial = S.idReferencia
            And C.cveJuzgado=J.cvejuzgado
            And C.cveJuzgado=S.cvejuzgado
            And C.numero=S.numero
            And C.anio=S.anio
            And C.cveTipoCarpeta=S.cveTipoCarpeta
            And S.cveTipoCarpeta=TC.cveTipoCarpeta
            And C.cvejuzgado=" . $paramsGet["cveJuzgado"] . "
            And A.fechaInicial>='" . fechaMysql($paramsGet["fechaInicio"]) . " 00:00:00'
            And A.fechaInicial<='" . fechaMysql($paramsGet["fechaFinal"]) . " 23:59:59' 
            UNION ALL
            Select S.idSolicitudAudiencia,CA.desCatAudiencia,JD.desJuzgado, DATE_FORMAT(S.fechaEnvio,'%d/%m/%Y') as fechaEnvio, E.numero,E.anio,TC.desTipoCarpeta,J.desJuzgado as pertenece, DATE_FORMAT(A.fechaInicial,'%d/%m/%Y %H:%i:%s') as fechaInicial, DATE_FORMAT(A.fechaFinal,'%d/%m/%Y %H:%i:%s') as fechaFinal,EA.desEstatusAudiencia
            FROM tblsolicitudesaudiencias S INNER JOIN tbljuzgados JD on (S.cveJuzgadoDesahoga=JD.cveJuzgado),tblexhortos E,tbljuzgados J,tblestatussolicitudes ES,tbltiposcarpetas TC,tblaudiencias A,tblestatusaudiencias EA,tblcataudiencias CA
            Where S.cveJuzgado=J.cveJuzgado
            And S.activo='S'
            And S.cveEstatusSolicitud=ES.cveEstatusSolicitud
            And A.idSolicitudAudiencia=S.idSolicitudAudiencia            
            And A.cveEstatusAudiencia=EA.cveEstatusAudiencia
            And A.cveCatAudiencia=CA.cveCatAudiencia
            And S.cveCatAudiencia=CA.cveCatAudiencia
            And ES.cveEstatusSolicitud=2
            And J.cveJuzgado=S.cvejuzgado
            And E.activo='S'
            And E.idExhorto = S.idReferencia
            And E.cveJuzgado=J.cvejuzgado
            And E.cveJuzgado=S.cvejuzgado
            And E.numero=S.numero
            And E.anio=S.anio
            And E.cveTipoCarpeta=S.cveTipoCarpeta
            And S.cveTipoCarpeta=TC.cveTipoCarpeta
            And E.cvejuzgado=" . $paramsGet["cveJuzgado"] . "
            And E.cveTipoCarpeta=7
            And A.fechaInicial>='" . fechaMysql($paramsGet["fechaInicio"]) . " 00:00:00'
            And A.fechaInicial<='" . fechaMysql($paramsGet["fechaFinal"]) . " 23:59:59'
            ";
            $params["groups"] = "";
            $params["orders"] = "";
            return $params;
            break;
        case "3":
            $params["fields"] = 'DATE_FORMAT(SC.fechaRegistro,\'%d/%m/%Y %H:%i:%s\') as fechaRegistro, C.idCateo,C.numeroCateo,C.anioCateo,SC.idSolicitudCateo,SC.numero,SC.anio,TC.desTipoCarpeta,SC.carpetaInv,SC.nuc,J.desJuzgado,JD.desJuzgado,SCE.desEstatusSolicitudCateo, DATE_FORMAT(SC.fechaEnvio,\'%d/%m/%Y\') as fechaEnvio';
            $params["tables"] = "tblsolicitudescateos SC
                                INNER JOIN tbljuzgados JD on (JD.cveJuzgado=SC.cveJuzgadoDesahoga)
                                LEFT JOIN tbltiposcarpetas TC on (TC.cveTipoCarpeta=SC.cveTipoCarpeta),
                                tblestatussolicitudescateos SCE,tbljuzgados J,tblcateos C";
            $params["conditions"] = "SC.cveEstatusSolicitudCateo=SCE.cveEstatusSolicitudCateo
                                    And SC.cveJuzgado=J.cveJuzgado
                                    And SC.cveJuzgado=" . $paramsGet["cveJuzgado"] . "
                                    And SC.fechaRegistro>='" . fechaMysql($paramsGet["fechaInicio"]) . " 00:00:00'
                                    And SC.fechaRegistro<='" . fechaMysql($paramsGet["fechaFinal"]) . " 23:59:59'
                                    And C.idSolicitudCateo=SC.idSolicitudCateo";
            $params["groups"] = "";
            $params["orders"] = "C.anioCateo,C.numeroCateo DESC";
            return $params;
            break;
        case "4":

            $params["fields"] = 'DATE_FORMAT(SO.fechaRegistro,\'%d/%m/%Y %H:%i:%s\') as fechaRegistro, O.idOrden,O.numeroOrden,O.anioOrden,SO.idSolicitudOrden,SO.numero,SO.anio,TC.desTipoCarpeta,SO.carpetaInv,SO.nuc,J.desJuzgado,JD.desJuzgado,SOE.desEstatusSolicitudOrdenes, DATE_FORMAT(SO.fechaEnvio,\'%d/%m/%Y\') as fechaEnvio';
            $params["tables"] = "tblsolicitudesordenes SO
                                  INNER JOIN tbljuzgados JD on (JD.cveJuzgado=SO.cveJuzgadoDesahoga)
                                  LEFT JOIN tbltiposcarpetas TC on (TC.cveTipoCarpeta=SO.cveTipoCarpeta),
                                  tblestatussolicitudesordenes SOE,tbljuzgados J,tblordenes O";
            $params["conditions"] = "SO.cveEstatusSolicitudOrden=SOE.cveEstatusSolicitudOrdenes
                                      And SO.cveJuzgado=J.cveJuzgado
                                      And SO.cveJuzgado=" . $paramsGet["cveJuzgado"] . "
                                      And SO.fechaRegistro>='" . fechaMysql($paramsGet["fechaInicio"]) . " 00:00:00'
                                      And SO.fechaRegistro<='" . fechaMysql($paramsGet["fechaFinal"]) . " 23:59:59'
                                      And O.idSolicitudOrden=SO.idSolicitudOrden";
            $params["groups"] = "";
            $params["orders"] = "O.anioOrden,O.numeroOrden DESC";
            return $params;
            break;
        case "5":
            $params["fields"] = 'DATE_FORMAT(IC.fechaRegistro,\'%d/%m/%Y %H:%i:%s\') as fechaRegistro, S.idSolicitudAudiencia,IC.idIngresoCereso,IC.oficio,IC.carpetaInv,IC.nuc, DATE_FORMAT(IC.FechaHoraIngreso,\'%d/%m/%Y %H:%i:%s\') as FechaHoraIngreso';
            $params["tables"] = "htsj_sigejupe.tblingresosceresos IC LEFT JOIN tblsolicitudesaudiencias S on ((IC.carpetaInv=S.carpetaInv OR IC.nuc=S.nuc) AND S.cveEstatusSolicitud =2 And S.activo='S')";
            $params["conditions"] = "
                                    S.idSolicitudAudiencia is NULL 
                                    And IC.activo='S' 
                                    And IC.fechaRegistro>='" . fechaMysql($paramsGet["fechaInicio"]) . " 00:00:00'
                                    And IC.fechaRegistro<='" . fechaMysql($paramsGet["fechaFinal"]) . " 23:59:59'";
            $params["groups"] = "";
            $params["orders"] = "IC.FechaHoraIngreso DESC";
            return $params;
            break;
        case "6":
            $params["fields"] = 'DATE_FORMAT(E.fechaRegistro,\'%d/%m/%Y %H:%i:%s\') as fechaRegistro, E.idExhorto,IF(E.IdExhortoGenerado is null,"Tradicional","Electronico") as TipoExhorto,E.IdExhortoGenerado,E.numExhorto,E.aniExhorto,E.cveJuzgado,J.desJuzgado,E.cveEstadoProcedencia,ES.desEstado,if(JP.desJuzgado is not null,JP.desJuzgado ,E.juzgadoProcedencia) as Procedencia,E.carpetaInv,E.nuc,E.cveTipoCarpeta,TC.desTipoCarpeta,E.numOficio,E.aniOficio,E.Sintesis,E.cveEstatusExhorto, E.numero, E.anio';
            $params["tables"] = "tblexhortos E LEFT JOIN tbljuzgados JP ON (E.cveJuzgadoProcedencia = JP.cveJuzgado) left join tbltiposcarpetas TC on E.cveTipoCarpeta = TC.cveTipoCarpeta,tbljuzgados J,tblestados ES";
            $params["conditions"] = "J.cveJuzgado=E.cveJuzgado 
                                    And E.activo='S' 
                                    And ES.cveEstado= E.cveEstadoProcedencia
                                    And E.cveJuzgado='" . $paramsGet["cveJuzgado"] . "'
                                    And E.fechaRegistro>='" . fechaMysql($paramsGet["fechaInicio"]) . " 00:00:00'
                                    And E.fechaRegistro<='" . fechaMysql($paramsGet["fechaFinal"]) . " 23:59:59'";
            $params["groups"] = "";
            $params["orders"] = "";
            return $params;
            break;
        case "7":
            $params["fields"] = 'DATE_FORMAT(A.fechaRegistro,\'%d/%m/%Y %H:%i:%s\') as fechaRegistro, A.idAmparo,C.numero,C.anio,C.cveTipoCarpeta,TC.desTipoCarpeta,A.numAmparo,A.aniAmparo,A.cveJuzgado,A.numOficio,A.carpetaInv,J.desJuzgado';
            $params["tables"] = "tblamparos A left join tblcarpetasjudiciales C on (C.IdCarpetajudicial=A.idCarpetaJudicial) left JOIN tbltiposcarpetas TC ON (TC.cveTipoCarpeta=C.cveTipoCarpeta),tbljuzgados J";
            $params["conditions"] = "A.cveJuzgado=J.cveJuzgado
                                    And A.activo='S'
                                    And A.cveJuzgado='" . $paramsGet["cveJuzgado"] . "'
                                    And A.fechaRegistro>='" . fechaMysql($paramsGet["fechaInicio"]) . " 00:00:00'
                                    And A.fechaRegistro<='" . fechaMysql($paramsGet["fechaFinal"]) . " 23:59:59'";
            $params["groups"] = "";
            $params["orders"] = "";
            return $params;
            break;
        case "8":
            $params["fields"] = 'DATE_FORMAT(SP.fechaRegistro,\'%d/%m/%Y %H:%i:%s\') as fechaRegistro, A.idActuacion,A.numActuacion,A.aniActuacion,TA.desTipoActuacion , SP.numeroSolicitud,SP.aniSolicitud,C.numero,C.anio,TC.desTipoCarpeta,J.desJuzgado, DATE_FORMAT(SP.fechaSolicitud,\'%d/%m/%Y %H:%i:%s\') as fechaSolicitud,SP.nombrePerito';
            $params["tables"] = "tblsolicitudesperitosactuaciones SP,tblactuaciones A LEFT JOIN tblcarpetasjudiciales C ON (A.idReferencia=C.idCarpetaJudicial And A.numero=C.numero And A.anio=C.anio And A.cveJuzgado=C.cveJuzgado And A.cveTipoCarpeta=C.cveTipoCarpeta) INNER JOIN tbltiposcarpetas TC ON (C.cveTipoCarpeta=TC.cveTipoCarpeta) INNER JOIN tbljuzgados J ON (J.cveJuzgado=C.cveJuzgado),tbltiposactuaciones TA";
            $params["conditions"] = " A.cveJuzgado=J.cveJuzgado
                                    And A.activo='S'
                                    And A.cveJuzgado='" . $paramsGet["cveJuzgado"] . "'
                                    And SP.fechaRegistro>='" . fechaMysql($paramsGet["fechaInicio"]) . " 00:00:00'
                                    And SP.fechaRegistro<='" . fechaMysql($paramsGet["fechaFinal"]) . " 23:59:59'";
            $params["conditions"] .= " AND SP.idActuacion=A.idActuacion And TA.cveTipoActuacion=18 And SP.activo='S' ";
            $params["conditions"] .= " UNION ALL";
            $params["conditions"] .= " SELECT DATE_FORMAT(SP.fechaRegistro,'%d/%m/%Y %H:%i:%s') as fechaRegistro, A.idActuacion,A.numActuacion,A.aniActuacion,TA.desTipoActuacion , SP.numeroSolicitud,SP.aniSolicitud,E.numero,E.anio,TC.desTipoCarpeta,J.desJuzgado, DATE_FORMAT(SP.fechaSolicitud,'%d/%m/%Y %H:%i:%s') as fechaSolicitud, SP.nombrePerito ";
            $params["conditions"] .= " FROM tblsolicitudesperitosactuaciones SP,tblactuaciones A LEFT JOIN tblexhortos E ON (A.idReferencia=E.idExhorto And A.numero=E.numero And A.anio=E.anio And E.cveJuzgado=A.cveJuzgado And A.cveTipoCarpeta=E.cveTipoCarpeta And E.cveTipoCarpeta=7) INNER JOIN tbltiposcarpetas TC ON (E.cveTipoCarpeta=TC.cveTipoCarpeta) INNER JOIN tbljuzgados J ON (J.cveJuzgado=E.cveJuzgado),tbltiposactuaciones TA";
            $params["conditions"] .= " Where SP.idActuacion=A.idActuacion And TA.cveTipoActuacion=18 And SP.activo='S'";
            $params["conditions"] .= " AND A.cveJuzgado=J.cveJuzgado
                                    And A.activo='S'
                                    And A.cveJuzgado='" . $paramsGet["cveJuzgado"] . "'
                                    And SP.fechaRegistro>='" . fechaMysql($paramsGet["fechaInicio"]) . " 00:00:00'
                                    And SP.fechaRegistro<='" . fechaMysql($paramsGet["fechaFinal"]) . " 23:59:59'";
            $params["groups"] = "";
            $params["orders"] = "";
            return $params;
            break;
    }


//paginacion
//    $paginacion["paginacion"] = "";    
//    $paginacion["pag"] = 1; //pagina actual
//    $paginacion["cantxPag"] = 10;   //registros por pagina a mostrar
}

function esFecha($fecha) {
    if (preg_match('/^\d{1,2}\/\d{1,2}\/\d{4}$/', $fecha)) {
        return true;
    }
    return false;
}

function esFechaMysql($fecha) {
    if (preg_match('/^\d{4}\-\d{1,2}\-\d{1,2}$/', $fecha)) {
        return true;
    }
    return false;
}

function fechaMysql($fecha) {
    list($dia, $mes, $year) = explode("/", $fecha);
    return $year . "-" . $mes . "-" . $dia;
}

function fechaNormal($fecha) {
    $arrFecha = explode(" ", $fecha);
    list($dia, $mes, $year) = explode("-", $arrFecha[0]);
    return $dia . "/" . $mes . "/" . $year . " " . $arrFecha[1];
}

@$action = $_POST["action"];
@$cveTipoActuacion = $_POST["cveTipoActuacion"];
@$cveJuzgado = $_POST["cveJuzgado"];

if ($cveJuzgado == "") {
    $cveJuzgado = $_SESSION["cveAdscripcion"];
}

@$fechaInicio = $_POST["fechaInicio"];
@$fechaFinal = $_POST["fechaFinal"];
@$consultaAcordada = $_POST["consultaAcordada"];
$params = "";
switch ($action) {
    case "getActuacionesTray":
        $paramSend["cveTipoActuacion"] = $cveTipoActuacion;
        $paramSend["cveJuzgado"] = $cveJuzgado;
        $paramSend["fechaInicio"] = $fechaInicio;
        $paramSend["fechaFinal"] = $fechaFinal;
        $params = buildQuery("1", $paramSend);
        $BandejasFacade = new BandejasFacade();
        $bandejaResult =  $BandejasFacade->select($params);
        if($consultaAcordada == "true"){
            $bandejaResult = json_decode($bandejaResult);
            for ($i=0; $i < $bandejaResult->totalCount; $i++) { 
                $bandejaResult->resultados[$i]->acordada = obtenerPromocionAcordada($bandejaResult->resultados[$i]->idActuacion);
            }
            $bandejaResult = json_encode($bandejaResult);
        }
        echo $bandejaResult;
        break;

    case "getSolicitudesTray":

        $paramSend["cveTipoActuacion"] = $cveTipoActuacion;
        $paramSend["cveJuzgado"] = $cveJuzgado;
        $paramSend["fechaInicio"] = $fechaInicio;
        $paramSend["fechaFinal"] = $fechaFinal;
        $params = buildQuery("2", $paramSend);
        $BandejasFacade = new BandejasFacade();
        echo $BandejasFacade->select($params);
        break;

    case "getSolicitudesCateoTray":

        $paramSend["cveTipoActuacion"] = $cveTipoActuacion;
        $paramSend["cveJuzgado"] = $cveJuzgado;
        $paramSend["fechaInicio"] = $fechaInicio;
        $paramSend["fechaFinal"] = $fechaFinal;
        $params = buildQuery("3", $paramSend);
        $BandejasFacade = new BandejasFacade();
        echo $BandejasFacade->select($params);
        break;

    case "getSolicitudesOrdenesTray":

        $paramSend["cveTipoActuacion"] = $cveTipoActuacion;
        $paramSend["cveJuzgado"] = $cveJuzgado;
        $paramSend["fechaInicio"] = $fechaInicio;
        $paramSend["fechaFinal"] = $fechaFinal;
        $params = buildQuery("4", $paramSend);
        $BandejasFacade = new BandejasFacade();
        echo $BandejasFacade->select($params);
        break;

    case "getIngresoCeresoTray":

        $paramSend["fechaInicio"] = $fechaInicio;
        $paramSend["fechaFinal"] = $fechaFinal;
        $params = buildQuery("5", $paramSend);
        $BandejasFacade = new BandejasFacade();
        echo $BandejasFacade->select($params);
        break;
    case "getExorthosTray":
        $paramSend["cveJuzgado"] = $cveJuzgado;
        $paramSend["fechaInicio"] = $fechaInicio;
        $paramSend["fechaFinal"] = $fechaFinal;
        $params = buildQuery("6", $paramSend);
        $BandejasFacade = new BandejasFacade();
        echo $BandejasFacade->select($params);
        break;
    case "getAmparosTray":
        $paramSend["cveJuzgado"] = $cveJuzgado;
        $paramSend["fechaInicio"] = $fechaInicio;
        $paramSend["fechaFinal"] = $fechaFinal;
        $params = buildQuery("7", $paramSend);
        $BandejasFacade = new BandejasFacade();
        echo $BandejasFacade->select($params);
        break;

    case "getPeritosTray":
        $paramSend["cveJuzgado"] = $cveJuzgado;
        $paramSend["fechaInicio"] = $fechaInicio;
        $paramSend["fechaFinal"] = $fechaFinal;
        $params = buildQuery("8", $paramSend);
        $BandejasFacade = new BandejasFacade();
        echo $BandejasFacade->select($params);
        break;
}




} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}