<?php

if (!isset($_SESSION)) {
    session_start();
}
//ini_set("error_log", dirname(__FILE__) . "/../../../logs/FirmaElectronicaController.log");
//ini_set("log_errors", 1);
//ini_set('display_errors', 1);
include_once(dirname(__FILE__) . "/../../../webservice/cliente/firmaelectronica/FirmaElectronicaCliente.php");
include_once(dirname(__FILE__) . "/../../../webservice/cliente/imagenes/ImagenesCliente.Class.php");
include_once(dirname(__FILE__) . "/../../../webservice/cliente/reportes/ReportesClienteGeneral.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/select/SelectDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/imagenes/CargaImagenesFirmaController.Class.php");
include_once(dirname(__FILE__) . "/Archivo.php");
include_once(dirname(__FILE__) . "/GeneraPdfFirmaController.php");

class FirmaElectronicaController {

    private $usuario;
    private $contrasena;
    private $entidad;
    private $nameSpaceWS = "www.XMLWebServiceSoapHeaderAuth.net";
    private $urlWebService;
    private $certificado;
    private $ocsp;
    private $soapHeader;
    private $soapHeader2ndVersion;
    private $referencia;
    private $strCadenaOriginal;
    private $strFirma;
    private $strCurp;
    private $nombreFirmante;
    private $numeroSerieFirmante;
    private $firmaCodigo;
    private $oArchivosFirmados;

    public function __construct() {
        
    }

    public function setConfiguracion($strURLWebService, $strUsuario, $strClave, $strEntidad) {
        $this->setUsuario($strUsuario);
        $this->setContrasena($strClave);
        $this->setEntidad($strEntidad);
        $this->setURL($strURLWebService);
    }

    public function setURL($url = null) {
        $this->urlWebService = $url;
    }

    public function getURL() {
        return $this->urlWebService;
    }

    public function setUsuario($usuario = null) {
        $this->usuario = $usuario;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function setContrasena($contrasena = null) {
        $this->contrasena = $contrasena;
    }

    public function getContrasena() {
        return $this->contrasena;
    }

    public function setEntidad($entidad = null) {
        $this->entidad = $entidad;
    }

    public function getEntidad() {
        return $this->entidad;
    }

    public function setReferencia($referencia = "Sin Referencia") {
        $this->referencia = $referencia;
    }

    public function getReferencia() {
        return is_null($this->referencia) ? 'Sin Referencia' : (strcmp($this->referencia, 'undefined') == 0 ? 'Sin Referencia' : $this->referencia);
    }

    public function setCertificado($certificado = null) {
        return $this->certificado = $certificado;
    }

    public function getCertificado() {
        return (strpos($this->certificado, ' ') !== false ? str_replace(' ', '+', $this->certificado) : $this->certificado);
    }

    public function setOCSP($ocsp = true) {
        if ($ocsp == false) {
            $this->ocsp = 1;
        } else {
            $this->ocsp = 2;
        }
    }

    public function getOCSP() {
        return $this->ocsp;
    }

    public function setFirmaCodigo($strFirmaCodigo) {

        $this->firmaCodigo = $strFirmaCodigo;
    }

    public function getFirmaCodigo() {
        return $this->firmaCodigo;
    }

    private function generateHeader() {
        $this->soapHeader = array(
            'Usuario' => $this->getUsuario(),
            'Clave' => $this->getContrasena(),
            'Entidad' => $this->getEntidad()
        );
    }

    private function generateHeader2ndVersion() {
        $this->soapHeader2ndVersion = array(
            'User' => $this->getUsuario(),
            'Password' => $this->getContrasena(),
            'Entity' => $this->getEntidad()
        );
    }

    public function setCadenaOriginal($strCadenaOriginal) {
        $this->strCadenaOriginal = $strCadenaOriginal;
    }

    public function getCadenaOriginal() {
        return (strpos($this->strCadenaOriginal, ' ') !== false ? str_replace(' ', '+', $this->strCadenaOriginal) : $this->strCadenaOriginal);
    }

    public function setFirmaDigitalCadena($strFirmaDigital) {
        $this->strFirma = $strFirmaDigital;
    }

    public function getFirmaDigitalCadena() {
        return (strpos($this->strFirma, ' ') !== false ? str_replace(' ', '+', $this->strFirma) : $this->strFirma);
    }

    public function setCURP($strCurp = null) {
        $this->strCurp = $strCurp;
    }

    public function getCURP() {
        return $this->strCurp;
    }

    public function getNombreFirmante() {
        return $this->nombreFirmante;
    }

    public function getNumeroSerieFirmante() {
        return $this->numeroSerieFirmante;
    }

    public function setNombreFirmante($strNombreFirmante) {
        $this->nombreFirmante = $strNombreFirmante;
    }

    public function setNumeroSerieFirmante($strNumeroSerie) {
        $this->numeroSerieFirmante = $strNumeroSerie;
    }

    /*
     * Decodifica certificado
     */

    public function decodificaCertificado($strTsa = "NA", $strSoapHeader = "AuthSoap") {
        if (is_null($this->urlWebService)) {
            return null;
        }
        $this->generateHeader2ndVersion();
        $header = new SoapHeader($this->nameSpaceWS, $strSoapHeader, $this->soapHeader2ndVersion);
        $payload = array(
            "operation" => $this->getOCSP(),
            "strCertificate" => $this->getCertificado(),
            "reference" => $this->getReferencia(),
            "tsaName" => $strTsa
        );
        $client = new SoapClient($this->getURL());
        $client->__setSoapHeaders($header);
        $result = $client->__soapCall("WSDecodeCertificateExtended", array(
            $payload
        ));
        $strAux = json_encode($result->WSDecodeCertificateExtendedResult);
        $strAux = str_replace("State", "state", $strAux);
        $strAux = str_replace("Description", "description", $strAux);
        echo strtolower($strAux);
    }

    /*
     * Registra operación j03 para firma de archivos , se obtiene código de activación y número de transferencia
     */

    public function registraOperacion($strSoapHeader = "AuthSoapHd") {
        $cliente = new soapclient($this->getURL(), array(
            "trace" => 1
        ));
        $this->generateHeader();
        $header = new SoapHeader($this->nameSpaceWS, $strSoapHeader, $this->soapHeader);
        $payload = array(
            "evcOperacionJar" => "j03",
            "evcReferencia" => $this->getReferencia(),
            "evcAtributoFirmante" => 1,
            "evcValor" => $this->getCURP(),
            "einVigencia" => 100000
        );
        $cliente->__setSoapHeaders($header);
        $resultado = $cliente->__soapCall("RegistroTransferencia", array(
            $payload
        ));
        $salida = $resultado->RegistroTransferenciaResult;
        $strAux = json_encode($salida);
        $strAux = str_replace("Estado", "state", $strAux);
        $strAux = str_replace("Descripcion", "description", $strAux);
        echo $strAux;
    }

    /*
     * Registra las cadenas a firmar para la transferencia obtenida
     */

    public function firmaDigestionArchivos($params, $strSoapHeader = "AuthSoapHd") {

        //consultamos que el documento aun no este firmado por el firmante en cuestion
        $paramsAux = array();
        $paramsAux["idReferencia"] = $params["idReferencia"];
        $paramsAux["cveTipoDocumentoFirma"] = $params["cveTipoDocumentoFirma"];
        $paramsAux["nombreFirmante"] = $params["nombreFirmante"];
        $paramsAux["serieFirmante"] = $params["serieFirmante"];
        $documentosFirmados = json_decode($this->consultarDocumentosFirmados($paramsAux));
        if ($documentosFirmados->estatus == "failConexion") {
            return '{"estatus":"failConexion","msj":"FALLO LA CONEXIÓN, SE PERDIO LA COMUNICACIÓN CON EL SERVICIO WEB DE FIRMA ELECTRONICA (LOCAL), INTENTELO NUEVAMENTE POR FAVOR."}';
        }
        if (isset($documentosFirmados->resultados)) {
            return '{"estatus":"fail","msj":"¡ADVERTENCIA!, USTED (' . $params["nombreFirmante"] . ') YA HA FIRMADO EL DOCUMENTO."}';
        }
        if (isset($params["cveGrupo"]) && $params["cveGrupo"] != "" && $params["cveGrupo"] != "undefined") {
            $paramsAux["cveGrupo"] = $params["cveGrupo"];
        }//se compara que, el nombreUsuairo sea igual al nombre del firmante
        if (isset($params["nombreUsuario"]) && $params["nombreUsuario"] != "" && $params["nombreUsuario"] != "undefined") {
            $aux1 = $this->normalizarCadena($params["nombreUsuario"]);
            $aux2 = $this->normalizarCadena($params["nombreFirmante"]);
            if ($aux1 != $aux2) {
                //return '{"estatus":"fail","msj":"ERROR. USTED NO ES LA PERSONA AUTORIZADA PARA FIRMAR EL DOCUMENTO. DETALLES (firmante: ' . $aux2 . ', firmante que debe de ser: ' . $aux1 . ')"}';
            }
        }
        $paramsAux["nombreFirmante"] = "";
        $paramsAux["serieFirmante"] = "";
        $documentosFirmados = json_decode($this->permisosFirmas($paramsAux));
        if ($documentosFirmados->estatus != "ok") {//si no cuenta con los permisos para firmar
            return json_encode($documentosFirmados);
        }
        $cliente = new soapclient($this->getURL(), array(
            "trace" => 1
        ));
        $this->generateHeader();
        $header = new SoapHeader($this->nameSpaceWS, $strSoapHeader, $this->soapHeader);
        $oArchivos = json_decode($params["archivos"]);
        foreach ($oArchivos as $oArchivo) {
            $payload = array(
                "ebgTransferencia" => (int) $params["idRegistroFirma"],
                "evcTipoOrigen" => "1",
                "evcDescripcion" => $oArchivo->nombre,
                "evcArchivo" => "Digestion:" . str_replace(" ", "+", $oArchivo->digestion)
            );
            $cliente->__setSoapHeaders($header);
            $resultado = $cliente->__soapCall("FirmaDigestionArchivo", array(
                $payload
            ));
            $salida = $resultado->FirmaDigestionArchivoResult;
            $iEstado = $salida->Estado;
            $oArchivoTransferencia = new Archivo();
            if ($iEstado == 0) {//no se produjo ningun error
                $oArchivoTransferencia->setTransferencia($salida->IdRegistro);
            }
            $oArchivoTransferencia->setEstado($iEstado);
            $oArchivoTransferencia->setDescripcion($salida->Descripcion);
            $oArchivoTransferencia->setNombre($oArchivo->nombre);
            $oArchivoTransferencia->setDigestion(str_replace(" ", "+", $oArchivo->digestion));
            $oArchivoTransferencia->setFirma(str_replace(" ", "+", $oArchivo->firma));
            $this->oArchivosFirmados[] = $oArchivoTransferencia;
        }
        //Generamos evidencia OCSP
        return ($this->consultaTransferencia($params));
    }

    private function normalizarCadena($cadena) {
        $originales = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿŔŕ';
        $modificadas = 'aaaaaaaceeeeiiiidnoooooouuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr';
        $cadena = utf8_decode($cadena);
        $cadena = strtr($cadena, utf8_decode($originales), $modificadas);
        $cadena = strtolower($cadena);
        return utf8_encode($cadena);
    }

    private function consultaTransferencia($params) {
        $cliente = new soapclient($this->getURL(), array(
            "trace" => 1
        ));
        $payload = array(
            "evcCodigoActivacion" => $params["tokenFirma"],
            "evcFirma" => $this->getFirmaCodigo(),
            "evcCertificado" => $this->getCertificado()
        );
        $resultado = $cliente->__soapCall("PwuTransferencia_Cn", array(
            $payload
        ));
        $salida = $resultado->PwuTransferencia_CnResult;
        $iEstado = $salida->State;
        if ($iEstado == 0) {
            foreach ($this->oArchivosFirmados as $oArchivo) {
                if ($oArchivo->getEstado() == 0) { //Reportamos la firma para cada cadena registrada
                    $this->reportaFirma($oArchivo, $params["tokenFirma"], $params["idRegistroFirma"]);
                }
            }
            $this->cierraTranferencia($params["tokenFirma"], $params["idRegistroFirma"]);
            $generaPdf = $this->guardarDigestion($params); //se guarda la digestion en el servidor local de firma
            if ($generaPdf["estatus"] == "ok") {
                if ($generaPdf["firmasCompletas"] == "S") {
                    $respuesta = json_decode($this->confirmarFirmaDeArchivos($params));
                    return json_encode($respuesta);
                } else {
                    return ("{\"estatus\":\"ok\",\"msj\":\"Satisfactorio\",\"archivos\":" . json_encode($this->oArchivosFirmados) . "}");
                }
            } else {
                return ("{\"estatus\":\"" . $generaPdf["estatus"] . "\",\"msj\":\"" . $generaPdf["msj"] . "\"}");
            }
        } else {
            $strAux = json_encode($salida);
            $strAux = str_replace("Estado", "estatus", $strAux);
            $strAux = str_replace("Descripcion", "msj", $strAux);
            return strtolower($strAux);
        }
    }

    private function reportaFirma($oArchivo, $strCodigo, $iTransferencia) {
        $cliente = new soapclient($this->getURL(), array(
            "trace" => 1
        ));
        $payload = array(
            "evcCodigoActivacion" => $strCodigo,
            "ebgTransferencia" => (int) $iTransferencia,
            "ebgArchivoFirma" => (int) $oArchivo->getTransferencia(),
            "evcFirma" => $oArchivo->getFirma(),
            "evcNombre" => $this->getNombreFirmante(),
            "evcSerie" => $this->getNumeroSerieFirmante()
        );
        $resultado = $cliente->__soapCall("PwuOperFirmaDigestionArchivo_Rg", array(
            $payload
        ));
        $salida = $resultado->PwuOperFirmaDigestionArchivo_RgResult;
        $iEstado = $salida->State;
        $oArchivo->setReporteFirmaEstado($iEstado);
        $oArchivo->setReporteFirmaDescripcion($salida->Descript);
    }

    private function cierraTranferencia($strCodigo, $iTransferencia) {
        $cliente = new soapclient($this->getURL(), array(
            "trace" => 1
        ));
        $payload = array(
            "evcCodigoActivacion" => $strCodigo,
            "ebgTransferencia" => (int) $iTransferencia,
            "estado" => "0",
            "descripcion" => "Satisfactorio"
        );
        $resultado = $cliente->__soapCall("PwuTransferenciaCierre_Rg", array(
            $payload
        ));
        $salida = $resultado->PwuTransferenciaCierre_RgResult;
    }

    private function guardarDigestion($params) {//guarda la digestino del archivo, asi como datos del firmante
        $datosActualizar = array();
        $datos = array(); //son la llave del registro a actualizar
        $datos[0]["idReferencia"] = $params["idReferencia"];
        $datos[0]["cveTipoDocumentoFirma"] = $params["cveTipoDocumentoFirma"];
        //datos qe se anexaran al registro encontrado (y si no se encuentra, se crea) en el servidor de firmas local
        $datosActualizar[0]["idRegistroFirma"] = $params["idRegistroFirma"];
        $datosActualizar[0]["tokenFirma"] = $params["tokenFirma"];
        $datosActualizar[0]["nombreFirmante"] = $params["nombreFirmante"];
        $datosActualizar[0]["serieFirmante"] = $params["serieFirmante"];
        $datosActualizar[0]["cveUsuario"] = $params["cveUsuario"];
        $datosActualizar[0]["cveAdscripcion"] = $params["cveAdscripcion"];
        $datosActualizar[0]["digestion"] = $this->oArchivosFirmados[0]->getDigestion();
        $datosActualizar[0]["firma"] = $this->oArchivosFirmados[0]->getFirma();
        $datosActualizar[0]["transferencia"] = $this->oArchivosFirmados[0]->getTransferencia();
        $datosActualizar[0]["estado"] = $this->oArchivosFirmados[0]->getEstado();
        $firmaElectronicaCliente = new FirmaElectronicaCliente();
        @$json = json_decode($firmaElectronicaCliente->registrarDigestionWeb($datos, $datosActualizar));
        $aux = array();
        if (!isset($json->estatus)) {
            $aux["estatus"] = "ERROR";
            $aux["msj"] = "SE PERDIO LA CONEXION CON EL SERVICIO WEB DE LA FIRMA ELECTRONICA LOCAL";
        } else {
            $aux["estatus"] = $json->estatus;
            $aux["msj"] = $json->msj;
            $aux["firmasCompletas"] = @$json->firmasCompletas;
        }
        return $aux;
    }

    private function consultarJuzgados() {
        $clienteIndicadores = new ReportesClienteGeneral();
        $json = '{"fields":"idJuzgado,desJuz,nvaInstancia",';
        $json.='"tables":"tbljuzgados",';
        $json.='"conditions":"Activo=\'S\'"}';
        $juzgados = json_decode($clienteIndicadores->selectDAO($json, 4)); //consulta dirigiada al sistema de GESTION
        if (!isset($juzgados->resultados)) {
            return null;
        }
        $relacionJuzgados = array();
        $relacionJuzgados[0] = 0; //indefinido
        for ($i = 0; $i < $juzgados->totalCount; $i++) {
            $relacionJuzgados[$juzgados->resultados[$i]->idJuzgado][0] = $juzgados->resultados[$i]->desJuz;
            $relacionJuzgados[$juzgados->resultados[$i]->idJuzgado][1] = $juzgados->resultados[$i]->nvaInstancia;
        }
        return $relacionJuzgados;
    }
    
    private function uploadFile($params) {
        $platillaFirma = $this->plantillaFirma("upload");
        $url = (string) $platillaFirma->url;

        $service = new SoapClient($url); #PRUEBAS
//        $service = new SoapClient("http://192.168.1.11/WSCommerceAux/WSAux.asmx?WSDL"); #PRODUCCION
        $rs = $service->uploadFile($params);
        return $rs;
    }

    /*
     * Firma de cadenas
     */

    public function firmaPKCS1($strNOM = "NA", $strTsa = "NA", $strSoapHeader = "AuthSoapHd") {
        $cliente = new soapclient($this->getURL(), array(
            "trace" => 1
        ));
        $this->generateHeader();
        $header = new SoapHeader($this->nameSpaceWS, $strSoapHeader, $this->soapHeader);
        $payload = array(
            "evcCadena" => $this->getCadenaOriginal(),
            "code" => 3,
            "evcFirma" => $this->getFirmaDigitalCadena(),
            "evcCertificado" => $this->getCertificado(),
            "evcReferencia" => $this->getReferencia(),
            "tsaName" => $strTsa,
            "nomName" => $strNOM
        );

        $cliente->__setSoapHeaders($header);
        $resultado = $cliente->__soapCall("PwuPkcs1Evidencias", array(
            $payload
        ));
        $strAux = json_encode($resultado->PwuPkcs1EvidenciasResult);
        $strAux = str_replace("Error", "state", $strAux);
        $strAux = str_replace("Descripcion", "description", $strAux);
        return strtolower($strAux);
    }

    public function plantillaFirma($tipoFirma) {
        $objPlantilla = "";
        $xml = simplexml_load_file("../../../tribunal/connectfirma/Configuracion.xml");
        for ($i = 0; $i < count($xml); $i++) {
            $planNombre = $xml->DATOSFIRMA[$i]->attributes()->nombre;
            if ($planNombre == $tipoFirma) {
                $objPlantilla = $xml->DATOSFIRMA[$i];
                break;
            }
        }
        return $objPlantilla;
    }

    public function consultarConfiguracionFirmas($params) {
        $params["orderBy"] = "orden ASC";
        //consulta la configuracion (dependiendo de la actuacion), de quien o quienes puede(n) firmar
        $clienteIndicadores = new ReportesClienteGeneral();
        $condiciones = "";
        if (isset($params["cveTipoDocumentoFirma"]) && $params["cveTipoDocumentoFirma"] != '') {
            $condiciones .= " AND cveTipoDocumento='" . $params["cveTipoDocumentoFirma"] . "'";
        }
        if (isset($params["cveUsuario"]) && $params["cveUsuario"] != "") {
            $condiciones .= " AND cveUsuario='" . $params["cveUsuario"] . "'";
        }
        if (isset($params["cveCategoria"]) && $params["cveCategoria"] != "") {
            $condiciones .= " AND cveCategoria='" . $params["cveCategoria"] . "'";
        }
        if (isset($params["cveAdscripcion"]) && $params["cveAdscripcion"] != "") {
            $condiciones .= " AND cveAdscripcion='" . $params["cveAdscripcion"] . "'";
        }
        if (isset($params["cveUsuario"]) && $params["cveUsuario"] != "") {
            $condiciones .= " AND cveUsuario='" . $params["cveUsuario"] . "'";
        }
        if (isset($params["cveOrganigrama"]) && $params["cveOrganigrama"] != "") {
            $condiciones .= " AND cveOrganigrama='" . $params["cveOrganigrama"] . "'";
        }
        if (isset($params["cveGrupo"]) && $params["cveGrupo"] != "") {
            $condiciones .= " AND cveGrupo='" . $params["cveGrupo"] . "'";
        }
        if (isset($params["requerido"]) && $params["requerido"] != "") {
            $condiciones .= " AND requerido='" . $params["requerido"] . "'";
        }
        if (isset($params["orden"]) && $params["orden"] != "") {
            $condiciones .= " AND orden='" . $params["orden"] . "'";
        }
        $json = '{"fields":"*",';
        $json .= '"tables":"tbldocumentosfirmantes",';
        $json .= '"conditions":"activo=\'S\'' . $condiciones . '"';
        if ($params["orderBy"] != "") {
            $json .= ',"orders":"' . $params["orderBy"] . '"';
        }
        $json .= '}';
        @$consulta = json_decode($clienteIndicadores->selectDAO($json, 3)); //consulta dirigiada al sistema del expediente electronico
        if ($consulta == "" || $consulta == null) {
            return '{"estatus":"failConexion","totalCount":"0","msj":"ERROR. SE PERDIO LA CONEXIÓN CON EL SERVICIO WEB. INTENTELO NUEVAMENTE"}';
        }
        if (!isset($consulta->resultados)) {
            return '{"estatus":"fail","totalCount":"0","msj":"ERROR. FALTA CONFIGURACIÓN DE FIRMA EN DOCUMENTOS FIRMANTES."}';
        }
        return '{"estatus":"ok","totalCount":"' . $consulta->totalCount . '","resultados":' . json_encode($consulta->resultados) . ',"msj":"CONSULTA EXITOSA"}';
    }

    public function consultarDocumentosFirmados($params, $paginacion = null) {
        //consulta la configuracion (dependiendo de la actuacion), de quien o quienes puede(n) firmar
        $clienteIndicadores = new ReportesClienteGeneral();
        $condiciones = "";
        if (isset($params["idDocumentosFirmados"]) && $params["idDocumentosFirmados"] != '') {
            $condiciones .= " AND idDocumentosFirmados='" . $params["idDocumentosFirmados"] . "'";
        }
        if (isset($params["idReferencia"]) && $params["idReferencia"] != "") {
            $condiciones .= " AND idReferencia='" . $params["idReferencia"] . "'";
        }
        if (isset($params["cveUsuario"]) && $params["cveUsuario"] != "") {
            $condiciones .= " AND cveUsuario='" . $params["cveUsuario"] . "'";
        }
        if (isset($params["serieFirmante"]) && $params["serieFirmante"] != "") {
            $condiciones .= " AND serieFirmante='" . $params["serieFirmante"] . "'";
        }
        if (isset($params["nombreFirmante"]) && $params["nombreFirmante"] != "") {
            $condiciones .= " AND nombreFirmante='" . $params["nombreFirmante"] . "'";
        }
        if (isset($params["cveTipoDocumentoFirma"]) && $params["cveTipoDocumentoFirma"] != "") {
            $condiciones .= " AND cveTipoDocumentoFirma='" . $params["cveTipoDocumentoFirma"] . "'";
        }
        if (isset($params["cveAdscripcion"]) && $params["cveAdscripcion"] != "") {
            $condiciones .= " AND cveAdscripcion='" . $params["cveAdscripcion"] . "'";
        }
        if (isset($params["generado"]) && $params["generado"] != "") {
            $condiciones .= " AND generado='" . $params["generado"] . "'";
        }
        if (isset($params["fileNameFirma"]) && $params["fileNameFirma"] != "") {
            $condiciones .= " AND fileNameFirma='" . $params["fileNameFirma"] . "'";
        }
        if (isset($params["singleName"]) && $params["singleName"] != "") {
            $condiciones .= " AND singleName='" . $params["singleName"] . "'";
        }
        if (isset($params["digestion"]) && $params["digestion"] != "") {
            $condiciones .= " AND digestion='" . $params["digestion"] . "'";
        }
        if (isset($params["idImagenOriginal"]) && $params["idImagenOriginal"] != "") {
            $condiciones .= " AND idImagenOriginal='" . $params["idImagenOriginal"] . "'";
        }
        if (isset($params["idImagenFirma"]) && $params["idImagenFirma"] != "") {
            $condiciones .= " AND idImagenFirma='" . $params["idImagenFirma"] . "'";
        }
        if (isset($params["transferenciaFirma"]) && $params["transferenciaFirma"] != "") {
            $condiciones .= " AND transferenciaFirma='" . $params["transferenciaFirma"] . "'";
        }
        if (isset($params["tokenFirma"]) && $params["tokenFirma"] != "") {
            $condiciones .= " AND tokenFirma='" . $params["tokenFirma"] . "'";
        }
        if (isset($params["idRegistroFirma"]) && $params["idRegistroFirma"] != "") {
            $condiciones .= " AND idRegistroFirma='" . $params["idRegistroFirma"] . "'";
        }
        if (isset($params["firmaDocumento"]) && $params["firmaDocumento"] != "") {
            $condiciones .= " AND firmaDocumento='" . $params["firmaDocumento"] . "'";
        }
        $json = '{"fields":"*",';
        $json .= '"tables":"tbldocumentosfirmados",';
        $json .= '"conditions":"activo=\'S\'' . $condiciones . '"';
        if (isset($params["orderBy"]) && $params["orderBy"] != "") {
            $json .= ',"orders":"' . $params["orderBy"] . '"';
        }
        if ($paginacion == null) {
            $paginacion = array();
            $paginacion["paginacion"] = true;
            $paginacion["cantxPag"] = 10;
            $paginacion["pag"] = 1;
        }
        $json .= ',"paginacion":"' . $paginacion["paginacion"] . '"';
        $json .= ',"cantxPag":"' . $paginacion["cantxPag"] . '"';
        $json .= ',"pag":"' . $paginacion["pag"] . '"}';
        @$consulta = json_decode($clienteIndicadores->selectDAO($json, 3)); //consulta dirigiada al sistema del expediente electronico
        if ($consulta == "" && $consulta == null) {
            return '{"estatus":"failConexion","totalCount":"0","msj":"ERROR. SE PERDIO LA CONEXIÓN CON EL SERVICIO WEB. INTENTELO NUEVAMENTE"}';
        }
        if (!isset($consulta->resultados)) {
            return '{"estatus":"fail","totalCount":"0","msj":"SIN RESULTADOS"}';
        }
        return '{"estatus":"ok","totalCount":"' . $consulta->totalCount . '","resultados":' . json_encode($consulta->resultados) . ',"msj":"CONSULTA EXITOSA"}';
    }

    public function permisosFirmas($params) {
        $paramsAux = array();
        $paramsAux["cveTipoDocumentoFirma"] = $params["cveTipoDocumentoFirma"];
        $paramsAux["orderBy"] = "orden ASC";
        $configuracionFirma = json_decode($this->consultarConfiguracionFirmas($paramsAux));
        if ($configuracionFirma->estatus == "failConexion") {
            return '{"estatus":"failConexion","totalCount":"0","msj":"' . $configuracionFirma->msj . '"}';
        }
        if (!isset($configuracionFirma->resultados)) {
            return '{"estatus":"fail","totalCount":"0","msj":"ERROR. NO SE ENCUENTRO CONFIGURACIÓN DE FIMA ELECTRONICA PARA EL TIPO DOCUMENTO PROPORCIONADO. CONTACTE AL DEPARTAMENTO DE TI."}';
        }
        if (isset($params["cveGrupo"]) && $params["cveGrupo"] != "") {//si se proporciono grupo, se valida que la persona pertenesca al grupo
            $grupoCorrecto = false;
            for ($i = 0; $i < $configuracionFirma->totalCount; $i++) {
                if ($configuracionFirma->resultados[$i]->cveGrupo == $params["cveGrupo"]) {
                    $i = $configuracionFirma->totalCount;
                    $grupoCorrecto = true;
                }
            }
            if (!$grupoCorrecto) {
                return '{"estatus":"fail","totalCount":"0","msj":"ERROR. USTED NO PUEDE FIRMAR ESTE DOCUMENTO (NO PERTENECE AL GRUPO)."}';
            }
        }
        $params["orderBy"] = "";
        $documentosFirmados = json_decode($this->consultarDocumentosFirmados($params));
        if ($documentosFirmados->estatus == "failConexion") {
            return '{"estatus":"failConexion","totalCount":"0","msj":"' . $documentosFirmados->msj . '"}';
        }
        if ($configuracionFirma->resultados[0]->orden != "" && $configuracionFirma->resultados[0]->orden > 0) {//obtener el orden de la configuracion de la firma. 
            //Saber quien es el que debe de firmar primero el documento, quien despues, asi..
            $cantFirmas = 1;
            $ordenFirma = $this->obtenerOrdenDeFirmado($params, $configuracionFirma);
            if (isset($documentosFirmados->resultados)) {
                for ($i = 0; $i < $documentosFirmados->totalCount; $i++) {
                    if ($documentosFirmados->resultados[$i]->idRegistroFirma == "") {
                        $cantFirmas++;
                    }
                }
            }
            if ($cantFirmas != $ordenFirma) {
                return '{"estatus":"fail","msj":"¡ADVERTENCIA! AÚN HACEN FALTA FIRMAS PARA QUE USTED PUEDA FIRMAR EL DOCUMENTO."}';
            }
        }
        if (!isset($documentosFirmados->resultados)) {
            if (isset($params["hacerDigestionPdf"]) && $params["hacerDigestionPdf"] == "S") {//se esta indicando que se debe de realizar la digestion del documento (pdf)
                $documentosFirmados = json_decode($this->obtenerPdfDigestion($params)); //se lleva a cabo la digestion
                if (!isset($documentosFirmados->resultados)) {//se produjo un error durante la digestion del documento
                    return json_encode($documentosFirmados);
                }
            } else {
                return '{"estatus":"fail","totalCount":"0","msj":"NO SE ENCUENTRA REGISTRADO EL PDF EN EL SERVICIO WEB DE LA FIRMA ELECTRONICA"}';
            }
        }
        return $this->validarCantidadFirmas($configuracionFirma, $documentosFirmados, $params);
    }
    
    private function obtenerOrdenDeFirmado($params, $configuracionFirma) {
        $debeEncontrar = 0;
        if (isset($params["cveGrupo"]) && $params["cveGrupo"] != "" && $params["cveGrupo"] != "undefined") {
            $cveGrupo = $params["cveGrupo"];
            $debeEncontrar++;
        }
        if (isset($params["cveOrganigrama"]) && $params["cveOrganigrama"] != "" && $params["cveOrganigrama"] != "undefined") {
            $cveOrganigrama = $params["cveOrganigrama"];
            $debeEncontrar++;
        }
        if (isset($params["cveAdscripcion"]) && $params["cveAdscripcion"] != "" && $params["cveAdscripcion"] != "undefined") {
            $cveAdscripcion = $params["cveAdscripcion"];
            $debeEncontrar++;
        }
        if (isset($params["cveCategoria"]) && $params["cveCategoria"] != "" && $params["cveCategoria"] != "undefined") {
            $cveCategoria = $params["cveCategoria"];
            $debeEncontrar++;
        }
        if (isset($params["cveUsuario"]) && $params["cveUsuario"] != "" && $params["cveUsuario"] != "undefined") {
            $cveUsuario = $params["cveUsuario"];
            $debeEncontrar++;
        }
        for ($i = 0; $i < $configuracionFirma->totalCount; $i++) {
            $encontrado = 0;
            if (isset($cveGrupo) && $configuracionFirma->resultados[$i]->cveGrupo == $cveGrupo) {
                $encontrado++;
            }
            if (isset($cveOrganigrama) && $configuracionFirma->resultados[$i]->cveOrganigrama == $cveOrganigrama) {
                $encontrado++;
            }
            if (isset($cveAdscripcion) && $configuracionFirma->resultados[$i]->cveAdscripcion == $cveAdscripcion) {
                $encontrado++;
            }
            if (isset($cveCategoria) && $configuracionFirma->resultados[$i]->cveCategoria == $cveCategoria) {
                $encontrado++;
            }
            if (isset($cveUsuario) && $configuracionFirma->resultados[$i]->cveUsuario == $cveUsuario) {
                $encontrado++;
            }
            if ($debeEncontrar == $encontrado) {
                return $configuracionFirma->resultados[$i]->orden;
            }
        }
        return -1;
    }

    private function validarCantidadFirmas($configuracionFirma, $documentosFirmados, $params) {
        $contConfigFirma = intval($configuracionFirma->totalCount); //cantidad de personas que pueden firmar la actuacion, expediente, etc.
        $contDocFirma = intval($documentosFirmados->totalCount);
        if ($contDocFirma == $contConfigFirma) {//si la cantidad de registros (documentos firmados) es igual a
            //la cantidad de firmas (configuracionFirma), resta por determinar si ya se possen firmados dichos archivos (ya que solo pueden estar creados fisicamente con su respectiva digestion)
            for ($i = 0; $i < $contDocFirma; $i++) {
                if ($documentosFirmados->resultados[$i]->idRegistroFirma == "") {
                    return '{"estatus":"ok","totalCount":"' . $documentosFirmados->totalCount . '","msj":"FALTAN FIRMANTES DEL DOCUMENTO. PUEDE PROCEDER A FIRMARLO.","resultados":' . json_encode($documentosFirmados->resultados) . '}';
                }
                if ($documentosFirmados->resultados[$i]->idImagenFirmada != "") {//ya esta firmado el documento
                    return '{"urlPDF":"S","estatus":"fail","totalCount":"0","msj":"¡ADVERTENCIA! YA SE HAN PROPROCIONADO TODAS LAS FIRMAS DEL DOCUMENTO. YA NO ES POSIBLE FIRMAR ESTE DOCUMENTO."}';
                }
            }
            return $this->confirmarFirmaDeArchivos($params, $documentosFirmados);
        }
        if ($contDocFirma > 0 && $documentosFirmados->resultados[0]->idImagenFirmada != "") {
            return '{"urlPDF":"S","estatus":"fail","totalCount":"0","msj":"¡ADVERTENCIA! YA SE HAN PROPROCIONADO TODAS LAS FIRMAS DEL DOCUMENTO. YA NO ES POSIBLE FIRMAR ESTE DOCUMENTO."}';
        }
        return '{"estatus":"ok","totalCount":"' . $contDocFirma . '","msj":"NO SE HA FIRMADO EL DOCUMENTO. PUEDE PROSEGUIR A FIRMARLO.","resultados":' . json_encode($documentosFirmados->resultados) . '}';
    }

    public function confirmarFirmaDeArchivos($params, $documentosFirmados = null) {
        $params['firmaAutografa'] = "S";
        $paramsAux = array();
        $paramsAux["idReferencia"] = $params["idReferencia"];
        $paramsAux["cveTipoDocumentoFirma"] = $params["cveTipoDocumentoFirma"];
        if ($documentosFirmados == null) {
            $documentosFirmados = json_decode($this->consultarDocumentosFirmados($paramsAux));
            if ($documentosFirmados->estatus == "failConexion") {
                return '{"estatus":"failConexion","msj":"ERROR. FALLO LA CONFIRMACIÓN DE FIRMA(S), SE PERDIO LA COMUNICACIÓN CON EL SERVICIO WEB DE FIRMA ELECTRONICA (LOCAL)"}';
            }
            if (!isset($documentosFirmados->resultados)) {
                return '{"estatus":"fail","msj":"ERROR. FALLO LA CONFIRMACIÓN DE FIRMA(S), NO EXISTEN ARCHIVOS DE TAL DOCUMENTO EN EL SERVIDOR DE FIRMA ELECTRONICA (LOCAL)"}';
            }
        }
        for ($i = 0; $i < $documentosFirmados->totalCount; $i++) {//se verifica que realmente no haga falta ningun firmante
            if ($documentosFirmados->resultados[$i]->idRegistroFirma == "") {
                return '{"estatus":"fail","msj":"ERROR. FALLO LA CONFIRMACIÓN DE FIRMA(S), AÚN HACEN FALTA FIRMANTES."}';
            }
            if ($documentosFirmados->resultados[$i]->idImagenFirmada != "") {//ya esta firmado el documento
                return '{"estatus":"fail","totalCount":"0","msj":"ERROR. FALLO LA CONFIRMACIÓN DE FIRMA(S), YA SE HAN PROPROCIONADO TODAS LAS FIRMAS DEL DOCUMENTO. YA NO ES POSIBLE FIRMAR ESTE DOCUMENTO."}';
            }
        }//por ultimo se confirma que la cantidad de firmas sea igual al total de registros de la configuracion de firmas
        $configuracionFirma = json_decode($this->consultarConfiguracionFirmas($paramsAux));
        if ($configuracionFirma->estatus == "failConexion") {
            return '{"estatus":"failConexion","totalCount":"0","msj":"FALLO LA CONFIRMACIÓN DE FIRMA(S), SE PERDIO LA COMUNICACIÓN CON EL SERVICIO WEB DE FIRMA ELECTRONICA (LOCAL), NO SE OBTUVO LA CONFIGURACIÓN DE LA FIRMA."}';
        }
        if (!isset($configuracionFirma->resultados)) {
            return '{"estatus":"fail","totalCount":"0","msj":"FALLO LA CONFIRMACIÓN DE FIRMA(S). NO SE ENCUENTRO CONFIGURACIÓN DE FIMA ELECTRONICA PARA EL TIPO DOCUMENTO PROPORCIONADO. CONTACTE AL DEPARTAMENTO DE TI."}';
        }
        if (intval($documentosFirmados->totalCount) != intval($configuracionFirma->totalCount)) {
            return '{"estatus":"fail","msj":"ERROR. FALLO LA CONFIRMACION DE FIRMA(S), AÚN HACEN FALTA FIRMANTES PARA EL ENVIO DE LAS FIRMAS."}';
        }//se continua con el proceso de envio de firmas y descarga de archivos firmados.
        $mensaje = ""; //se obtiene las claves de usuarios, en caso de que se requiera firma autografa
        if (isset($params["firmaAutografa"]) && $params["firmaAutografa"] == "S") {//si se desea anexar la firma autografa al documento firmado
            $cveUsuario = "";
            for ($i = 0; $i < $documentosFirmados->totalCount; $i++) {
                $cveUsuario .= $documentosFirmados->resultados[$i]->cveUsuario . ",";
            }
            if ($cveUsuario != "") {//si se posee alguna firma autografa
                $cveUsuario = substr($cveUsuario, 0, -1);
                $imagenesCliente = new ImagenesCliente();
                $imagenesFirmas = $imagenesCliente->getSignImgEmployee($cveUsuario);
                $rutaFirma = array();
                if ($imagenesFirmas != "" && count($imagenesFirmas) > 0) {
                    $imagenesFirmas = json_decode($imagenesFirmas, true);
                    foreach ($imagenesFirmas as $imagenFirma) {
                        $rutaFirma[intval($imagenFirma["cveEmpleado"])] = $imagenFirma["rutaFirma"];
                    }
                } else {
                    return '{"estatus":"failConexion","msj":"ERROR. SE PERDIO LA COMUNICACIÓN CON EL SERVICIO WEB DE GESTIÓN PARA LA OBTENCIÓN DE LA FIRMA AUTOGRAFA."}';
                }
            } else {
                $mensaje .= " NO SE CUENTA CON LA CLAVE DEL USUARIO PARA REALIZAR EL FIRMADO AUTOGRAFO.";
            }
            $juzgados = $this->obtenerJuzgadosGestion();
            if ($juzgados == null) {
                return '{"estatus":"fail","msj":"ERROR. NO FUE POSIBLE ENCONTRAR EL JUZGADO EN EL SISTEMA DE GESTIÓN.."}';
            }
        }
        //consultamos el tipo de documento que es (actuacion, expediente, de que sistema, etc)
        $datosTipoDocumentoFirma = json_decode($this->obtenerDatosTipoDocumentoFirma($params["cveTipoDocumentoFirma"]));
        if (!isset($datosTipoDocumentoFirma->resultados)) {
            return json_encode($datosTipoDocumentoFirma);
        }
        $cargaImagenesController = new CargaImagenesFirmaController();
        $tipoDocumentoFirma = $cargaImagenesController->clasificarReferencia($datosTipoDocumentoFirma->resultados[0]);
        if ($tipoDocumentoFirma["estatus"] != "ok") {
            return '{"estatus":"fail","totalCount":"0","msj":"' . $tipoDocumentoFirma["msj"] . '"}';
        }
        if ($tipoDocumentoFirma["clasificacion"]["cveSistema"] == 30) {//electronico
            $rutaScript = "controller/imagenes/CargaImagenesFirmaController.Class.php";
        } else if ($tipoDocumentoFirma["clasificacion"]["cveSistema"] == 38) {//sigejupe
            $rutaScript = "controladores/sigejupe/imagenes/CargaImagenesFirmaController.Class.php";
        }
        $platillaFirma = $this->plantillaFirma("general");
        if ($platillaFirma != "" && $platillaFirma != null) {
            $url = (string) $platillaFirma->url;
            $usuario = (string) $platillaFirma->usuario;
            $clave = (string) $platillaFirma->clave;
            $entidad = (string) $platillaFirma->entidad;
            $urlAplicacion = (string) $platillaFirma->urlAplicacion;
            $platillaUpload = $this->plantillaFirma("upload");
            $urlUpload = (string) $platillaUpload->url;
        } else {
            return '{"estatus":"fail","msj":"ERROR. NO FUE POSIBLE CARGAR XML DE CONFIGURACIÓN PARA EL FIRMADO."}';
        }
        $firmantesTransferencias = "";
        for ($i = 0; $i < $documentosFirmados->totalCount; $i++) {
            $iTrasnsfer = $documentosFirmados->resultados[$i]->transferenciaFirma;
            //SI REQUIERE FIRMA AUTOGRAFA CONCATENAMOS LA TRANSFERENCIA DEL ARCHIVO CON LA RUTA DE LA FIRMA AUTOGRAFA DE CADA USUARIO
            if (isset($params["firmaAutografa"]) && $params["firmaAutografa"] == "S") {
                if (isset($rutaFirma[intval($documentosFirmados->resultados[$i]->cveUsuario)])) {
                    $firmantesTransferencias .= $iTrasnsfer . "|http://gestion.pjedomex.gob.mx/gestion2/" . $rutaFirma[intval($documentosFirmados->resultados[$i]->cveUsuario)] . ",";
                } else {
                    $firmantesTransferencias .= $iTrasnsfer . ",";
                }
            } else {
                $firmantesTransferencias .= $iTrasnsfer . ",";
            }
        }
        for ($i = 0; $i < 1; $i++) {//solo se envia una vez el documento a firmar y no todos los documentos (que en realidad son copias)
            //for ($i = 0; $i < $documentosFirmados->totalCount; $i++) {
            //OBTENEMOS SELLO DEL JUZGADO SI REQUIERE FIRMA AUTOGRAFA
            $paramsWS = array();
            if (isset($params["firmaAutografa"]) && $params["firmaAutografa"] == "S") {
                $pathSello = json_decode($this->obtenerSelloJuzgado($urlAplicacion, $juzgados, $params["idReferencia"], $tipoDocumentoFirma));
                if (!isset($pathSello->resultados)) {
                    return json_encode($pathSello);
                }
                $paramsWS["pathDigital"] = $pathSello->resultados[0]->pathSello;
            }
            $paramsWS["firmante"] = "ACPJEM";
            $paramsWS["archivoFirmas"] = $firmantesTransferencias;
            $paramsWS["origen"] = $urlAplicacion . $this->obtenerRutaAbsolucta($documentosFirmados->resultados[$i]->fileNameFirma);
            $paramsWS["destino"] = "C:\\Soporte\\pdfs\\" . $documentosFirmados->resultados[$i]->idDocumentosFirmados . ".pdf";
            $auth = array(
                'Usuario' => $usuario,
                'Clave' => $clave,
                'Entidad' => $entidad
            );
            try {
                $service = new SoapClient($url);
                $header = new SoapHeader('www.XMLWebServiceSoapHeaderAuth.net', 'AuthSoapHd', $auth, false);
                $service->__setSoapHeaders($header);
                if (isset($params["firmaAutografa"]) && $params["firmaAutografa"] == "S") {
                    $rs = $service->ObtienePdfSimplePersonalExt($paramsWS); //CON AUTOGRAFA
                } else {
                    $rs = $service->ObtienePdfSimplePersonal($paramsWS); //SIN AUTOGRAFA
                }
            } catch (SoapFault $exception) {
                return '{"estatus":"fail","totalCount":"0","msj":"ERROR. SE PRODUJO UN ERROR CON EL SERVIDOR DE LA FIRMA ELECTRONICA EXTERNO. DETALLES (' . $exception->getMessage() . ')"}';
            }
            if (isset($params["firmaAutografa"]) && $params["firmaAutografa"] == "S") {
                if (!isset($rs->ObtienePdfSimplePersonalExtResult->State)) {
                    return '{"estatus":"failConexion","totalCount":"0","msj":"ERROR. SE PERDIO LA COMUNICACION CON EL SERVIDOR DE FIRMA ELECTRONICA EXTERNO"}';
                }
                if ($rs->ObtienePdfSimplePersonalExtResult->State != 0) {
                    return '{"estatus":"fail","totalCount":"0","msj":"ERROR EN LA RESPUESTA DEL SERVIDOR DE LA FIRMA, CODIGO: ' . $rs->ObtienePdfSimplePersonalExtResult->State . ', descripción: ' . $rs->ObtienePdfSimplePersonalExtResult->Descript . '"}';
                }
            } else {
                if (!isset($rs->ObtienePdfSimplePersonalResult->State)) {
                    return '{"estatus":"failConexion","totalCount":"0","msj":"ERROR. SE PERDIO LA COMUNICACION CON EL SERVIDOR DE FIRMA ELECTRONICA EXTERNO"}';
                }
                if ($rs->ObtienePdfSimplePersonalResult->State != 0) {
                    return '{"estatus":"fail","totalCount":"0","msj":"ERROR EN LA RESPUESTA DEL SERVIDOR DE LA FIRMA, CODIGO: ' . $rs->ObtienePdfSimplePersonalResult->State . ', descripción: ' . $rs->ObtienePdfSimplePersonalResult->Descript . '"}';
                }
            }
            $paramsFirma = array(
                'path' => "C:\\Soporte\\pdfs\\" . $documentosFirmados->resultados[$i]->idDocumentosFirmados . ".pdf",
                'urlScript' => $urlAplicacion . $rutaScript,
                'param' => 'archivo',
                'paramSpecification' => 'detalleParametros',
                'specifications' => '{"idReferencia": "' . $params["idReferencia"] . '",'
                . '"cveTipoDocumentoFirma":"' . $params["cveTipoDocumentoFirma"] . '",'
                . '"idImagenOriginal":"' . $documentosFirmados->resultados[$i]->idImagenOriginal . '",'
                . '"tipoDocumentoFirma":' . json_encode($tipoDocumentoFirma) . '}',
                'optionalUserName' => '',
                'optionalPassword' => ''
            );
            try {
                $service = new SoapClient($urlUpload); #PRODUCCION
                $resp = $service->uploadFile($paramsFirma);
                return '{"urlPDF":"S","estatus":"ok","totalCount":"1","msj":"ARCHIVO(S) FIRMADOS CORRECTAMENTE"}';
            } catch (SoapFault $exception) {
                return '{"estatus":"fail","totalCount":"0","msj":"ERROR. SE PRODUJO UN ERROR AL SUBIR EL ARCHIVO FIRMADO AL SERVIDOR DE LA APLICACIÓN. DETALLES (' . $exception->getMessage() . ')"}';
            }
        }
    }

    private function obtenerRutaAbsolucta($ruta) {
        $arrRuta = explode("/", $ruta);
        $total = count($arrRuta);
        $rutaAux = "";
        for ($i = 0; $i < $total; $i++) {
            if ($arrRuta[$i] !== '..') {
                $rutaAux .= "/" . $arrRuta[$i];
            }
        }
        return $rutaAux;
    }

    private function obtenerJuzgadosGestion($cveJuzgados = "") {
        $json = '{"fields":"desJuz,idJuzgado",';
        $json .= '"tables":"tbljuzgados",';
        $condition = "";
        if ($cveJuzgados != "") {
            $condition = " AND idJuzgado in(" . $cveJuzgados . ")";
        }
        $json .= '"conditions":"activo=\'S\'' . $condition . '"}';
        $clienteGestion = new ReportesClienteGeneral();
        @$clienteGestion = json_decode($clienteGestion->selectDAO($json, 4)); //consulta al servidor de gestion
        $juzgados = null;
        if (isset($clienteGestion->resultados)) {
            $juzgados = array();
            for ($i = 0; $i < $clienteGestion->totalCount; $i++) {
                $juzgados[$clienteGestion->resultados[$i]->idJuzgado] = $clienteGestion->resultados[$i]->desJuz;
            }
        }
        return $juzgados;
    }

    private function obtenerSelloJuzgado($urlAplicacion, $juzgados, $idReferencia, $tipoDocumentoFirma) {
        $query = array();
        $auxPath = "";
        switch ($tipoDocumentoFirma["clasificacion"]["cveSistema"]) {
            case 30: //electronico
                $auxPath = "../../";
                switch ($tipoDocumentoFirma["clasificacion"]["cveTipoExpediente"]) {
                    /* case 1: //actuacion
                      $query["fields"] = "cj.numero,cj.anio,cj.cveAdscripcion as cveJuzgado,cj.cveTipoNumero as cveTipoCarpeta,tc.descTipoNumero as desTipoCarpeta,m.descMateria";
                      $query["tables"] = "tblactuaciones as a,tblcarpetasjudiciales as cj,tbltiposnumeros as tn,tblmaterias as m";
                      $query["conditions"] = "cj.activo='S' AND a.activo='S' AND a.idCarpetaJudicial=cj.idCarpetaJudicial AND m.cveMateria=cj.cveMateria
                      AND a.idActuacion='" . $idReferencia . "' AND tn.cveTipoNumero=cj.cveTipoNumero";
                      break; */
                    default: $query = null;
                }
                break;
            case 38: //sigejupe
                $auxPath = "../../../";
                switch ($tipoDocumentoFirma["clasificacion"]["cveTipoExpediente"]) {
                    case 1: //actuacion
                        $query["fields"] = "a.cveJuzgado";
                        $query["tables"] = "tblactuaciones as a";
                        $query["conditions"] = "a.activo='S' AND a.idActuacion='" . $idReferencia . "'";
                        break;
                    default: $query = null;
                }
                break;
            default: $query = null;
        }
        if ($query == null) {
            return '{"estatus":"fail","msj":"ERROR. NO SE CUENTA CON CONFIGURACIÓN DE FIRMA ELECTRONICA PARA EL SISTEMA (cveSistema = ' . $cveSistema . ')."}';
        }
        $selectDao = new SelectDAO();
        $juzgado = json_decode($selectDao->selectDAOv2($query));
        if (!isset($juzgado->resultados)) {
            return '{"estatus":"fail","totalCount":"0","msj":"ERROR. NO SE ENCONTRO EL JUZGADO DEL DOCUMENTO PARA LA GENERACIÓN DE LA FIRMA."}';
        }
        $pathSello = $urlAplicacion . "vistas/img/sellosJuzgados/sellopjedomex.jpg";
        //VERIFICAMOS SI LA IMAGEN DEL JUZGADO YA EXISTE O SE DEBE DE CREAR
        if (file_exists($auxPath . "vistas/img/sellosJuzgados/" . $juzgado->resultados[0]->cveJuzgado . ".jpg")) {
            $pathSello = $urlAplicacion . "vistas/img/sellosJuzgados/" . $juzgado->resultados[0]->cveJuzgado . ".jpg";
        } else {//SI NO EXISTE EL SELLO LO VA CREAR
            $cadena = @$juzgados[$juzgado->resultados[0]->cveJuzgado]; //descripcion del juzgado
            if ($cadena == "") {
                return '{"estatus":"fail","totalCount":"0","msj":"ERROR. NO SE ENCONTRO LA DESCRIPCIÓN DEL JUZGADO PARA LA GENERACIÓN DE LA FIRMA."}';
            }
            $palabras = explode(" ", $cadena);
            header('Content-Type: image/jpeg');
            //$archivo = fopen($auxPath . "sellopjedomex.jpeg", "w+");
            //fclose($archivo);
            $im = imagecreatefromjpeg($auxPath . "vistas/img/sellosJuzgados/sellopjedomex.jpg"); //vistas/img/sellosJuzgados/
            $negro = imagecolorallocate($im, 0, 0, 0);
            $contadorPalabra = 1;
            $margenY = 60;
            $cadena = "";
            foreach ($palabras as $palabra) {
                $cadena .= $palabra . " ";
                if ($contadorPalabra >= 3) {
                    $px = (imagesx($im) - 5.5 * strlen($cadena)) / 2;
                    $py = imagesy($im) - $margenY;
                    imagestring($im, 2, $px, $py, $cadena, $negro);
                    $margenY = $margenY - 15;
                    $contadorPalabra = 0;
                    $cadena = "";
                }
                $contadorPalabra++;
            }
            if ($cadena != "") {
                $px = (imagesx($im) - 5.5 * strlen($cadena)) / 2;
                $py = imagesy($im) - $margenY;
                imagestring($im, 2, $px, $py, $cadena, $negro);
            }
            imagejpeg($im, $auxPath . "vistas/img/sellosJuzgados/" . $juzgado->resultados[0]->cveJuzgado . ".jpg");
            imagedestroy($im);
            $pathSello = $urlAplicacion . "vistas/img/sellosJuzgados/" . $juzgado->resultados[0]->cveJuzgado . ".jpg";
        }
        return '{"estatus":"ok","totalCount":"1","resultados":[{"pathSello":"' . $pathSello . '"}],"msj":"GENERACIÓN DE PATH SELLO EXITOSO."}';
    }

    public function obtenerDatosTipoDocumentoFirma($cveTipoDocumentoFirma) {
        $clienteIndicadores = new ReportesClienteGeneral();
        $json = '{"fields":"*",';
        $json.='"tables":"tbltiposdocumentosfirmas",';
        $json.='"conditions":"activo=\'S\' AND cveTipoDocumentoFirma=\'' . $cveTipoDocumentoFirma . '\'"}';
        @$datosTipoDocumentoFirma = json_decode($clienteIndicadores->selectDAO($json, 3)); //consulta dirigiada al sistema del expediente electronico
        if ($datosTipoDocumentoFirma == null) {
            return '{"estatus":"failConexion","totalCount":"0","msj":"SE PERDIO LA CONEXION CON EL SERVICIO WEB DEL EXPEDIENTE ELECTRONICO"}';
        }
        if (!isset($datosTipoDocumentoFirma->resultados)) {
            return '{"estatus":"fail","totalCount":"0","msj":"ERROR. NO SE ENCONTRO EL TIPO DOCUMENTO FIRMA (' . $cveTipoDocumentoFirma . ')"}';
        }
        return '{"estatus":"ok","resultados":' . json_encode($datosTipoDocumentoFirma->resultados) . ',"totalCount":"' . $datosTipoDocumentoFirma->totalCount . '","msj":"CONSULTA EXITOSA"}';
    }

    public function obtenerPdfDigestion($params) {
        $datosTipoDocumentoFirma = json_decode($this->obtenerDatosTipoDocumentoFirma($params["cveTipoDocumentoFirma"]));
        if (!isset($datosTipoDocumentoFirma->resultados)) {
            return json_encode($datosTipoDocumentoFirma);
        }
        $documentosFirmados = json_decode($this->consultarDocumentosFirmados($params));
        if ($documentosFirmados->estatus == "failConexion") {
            return json_encode($documentosFirmados);
        }
        if (!isset($documentosFirmados->resultados)) {//si no se encuentra ningun registro
            @$respuestaCliente = json_decode($this->hacerDigestion($params, $datosTipoDocumentoFirma));
        } else {
            if ($documentosFirmados->totalCount < $datosTipoDocumentoFirma->totalCount) {
                @$respuestaCliente = json_decode($this->hacerDigestion($params, $datosTipoDocumentoFirma));
            } else {
                $respuestaCliente = $documentosFirmados;
            }
        }
        if (!isset($respuestaCliente->estatus)) {
            return '{"estatus":"failConexion","totalCount":"0","msj":"ERROR. SE PERDIO LA CONEXION CON EL SERVICO WEB LOCAL DE LA FIRMA ELECTRONICA. INTENTELO DE NUEVO"}';
        }
        if (!isset($respuestaCliente->resultados)) {
            return '{"estatus":"fail","totalCount":"0","msj":"' . $respuestaCliente->msj . '"}';
        }
        return json_encode($respuestaCliente);
    }

    private function hacerDigestion($params, $datosTipoDocumentoFirma) {
        $firmaElectronicaCliente = new FirmaElectronicaCliente();
        //se crea el archivo fisico (pdf) y se agrega su ruta (fisica) en la base de datos
        $genraPdfFirmaController = new GeneraPdfFirmaController();
        $doPdf = json_decode($genraPdfFirmaController->doPdf($params["idReferencia"], $datosTipoDocumentoFirma->resultados[0]));
        if (!isset($doPdf->resultados)) {
            return json_encode($doPdf);
        }//no existen registros de documentosFirmados, se procede a registrar
        $datos = array(); //se registra la firma en tbldocumentosfirmados
        $datos[0]["fileNameFirma"] = $doPdf->resultados[0]->fileName;
        $aux = explode("/", $doPdf->resultados[0]->fileName);
        $datos[0]["singleName"] = $aux[count($aux) - 1]; //obtenemos el nombre del archivo
        $datos[0]["idImagenOriginal"] = $doPdf->resultados[0]->idImagenOriginal;
        $datos[0]["cveTipoDocumentoFirma"] = $params["cveTipoDocumentoFirma"];
        $datos[0]["idReferencia"] = $params["idReferencia"];
        $datos[0]["digestion"] = $genraPdfFirmaController->digest_file($datos[0]["fileNameFirma"]); //se realiza la digestion del archivo pdf
        return $firmaElectronicaCliente->registrarDocumentosFirmados($datos);
    }

    public function estadoActualFirma($params) {//indica en que proceso se encuentra el documento
        $paramsAux = Array();
        $paramsAux["idReferencia"] = $params["idReferencia"];
        $paramsAux["cveTipoDocumentoFirma"] = $params["cveTipoDocumentoFirma"];
        $confFirma = json_decode($firmaWS->consultarConfiguracionFirmas($params));
        if ($confFirma->estatus != "ok") {
            return json_encode($confFirma);
        }
        $documentos = json_decode($this->consultarDocumentosFirmados($paramsAux));
        if ($documentos->estatus != "ok") {
            if ($documentos->estatus == "failConexion") {
                return json_encode($documentos);
            }
            return '{"estatus":"ok","msj":"SE PUEDE DAR INICIO CON EL PROCESO DE FIRMADO."}';
        }
        for ($i = 0; $i < $documentos->totalCount; $i++) {
            if ($documentos->resultados[$i]->generado == "S") {
                return '{"estatus":"fail","msj":"¡ADVERTENCIA! EL DOCUMENTO YA ESTA FIRMADO. YA NO ES POSIBLE HACER NINGÚN CAMBIO O FIRMADO."}';
            }
        }
        return '{"estatus":"ok","msj":"SE PUEDE CONTINUAR CON EL PROCESO DE FIRMADO."}';
    }
    
    public function obtenerUrlPdf($params) {
        $paramsAux = array();
        $paramsAux["idReferencia"] = $params["idReferencia"];
        $paramsAux["cveTipoDocumentoFirma"] = $params["cveTipoDocumentoFirma"];
        $documento = json_decode($this->consultarDocumentosFirmados($paramsAux));
        if (!isset($documento->resultados)) {
            if ($documento->estatus == "fail") {
                return '{"estatus":"fail","msj":"ERROR. NO SE HA FIRMADO EL DOCUMENTO."}';
            }
            return json_encode($documento);
        }
        if ($documento->resultados[0]->idImagenFirmada == "" || $documento->resultados[0]->idImagenFirmada == null) {
            return '{"estatus":"fail","msj":"ERROR. NO SE HA COMPLEADO EL PROCESO DE FIRMADO DEL DOCUMENTO (HACEN FALTA FIRMAS)."}';
        }
        $query = array();
        $query["fields"] = "idImagen,ruta";
        $query["tables"] = "tblimagenes";
        $query["conditions"] = "activo='S' AND idImagen='" . $documento->resultados[0]->idImagenFirmada . "'";
        $selectDao = new SelectDAO();
        $selectDao = json_decode($selectDao->selectDAO($query));
        if (!isset($selectDao->resultados)) {
            return '{"estatus":"fail","msj":"ERROR. SE ENCUENTRA DAÑADO EL REGISTRO DE LA IMAGEN. COMUNIQUESE CON EL DEPARTAMENTO DE TI."}';
        }
        return '{"estatus":"ok","totalCount":"1","msj":"URL DE PDF OBTENIDA EXITOSAMENTE.","imagen":' . json_encode($selectDao->resultados[0]) . '}';
    }
}

$firmaWS = new FirmaElectronicaController();
@$accion = $_POST["accion"];
$params = array();
@$params["cveTipoDocumentoFirma"] = str_ireplace("'", "", $_POST["cveTipoDocumentoFirma"]);
@$params["cveUsuario"] = str_ireplace("'", "", $_POST["cveUsuario"]);
@$params["cveCategoria"] = str_ireplace("'", "", $_POST["cveCategoria"]);
@$params["cveAdscripcion"] = str_ireplace("'", "", $_POST["cveAdscripcion"]);
@$params["cveOrganigrama"] = str_ireplace("'", "", $_POST["cveOrganigrama"]);
@$params["cveGrupo"] = str_ireplace("'", "", $_POST["cveGrupo"]);
@$params["requerido"] = str_ireplace("'", "", $_POST["requerido"]);
@$params["orden"] = str_ireplace("'", "", $_POST["orden"]);
@$params["idReferencia"] = str_ireplace("'", "", $_POST["idReferencia"]);
@$params["hacerDigestionPdf"] = str_ireplace("'", "", $_POST["hacerDigestionPdf"]);
@$params["nombreUsuario"] = str_ireplace("'", "", $_POST["nombreUsuario"]);
$params["orderBy"] = "";
if ($accion == "estadoActualFirma") {//consulta la configuracion de los que pueden firmar dependiendo de la actuacion
    echo $firmaWS->estadoActualFirma($params);
    exit;
} else if ($accion == "selectGeneralStatus") {
    echo $firmaWS->permisosFirmas($params);
    exit;
} else if ($accion == "doPDFDigestion") {
    echo $firmaWS->obtenerPdfDigestion($params);
    exit;
} else if ($accion == "verPdf") {
    echo $firmaWS->obtenerUrlPdf($params);
    exit;
}
@$strMetodo = $_POST["metodo"];
if ($strMetodo != "") {
    $platillaFirma = $firmaWS->plantillaFirma("general");
    $url = (string) $platillaFirma->url;
    $usuario = (string) $platillaFirma->usuario;
    $clave = (string) $platillaFirma->clave;
    $entidad = (string) $platillaFirma->entidad;
    $firmaWS->setConfiguracion($url, $usuario, $clave, $entidad);
}
if (strcmp($_SERVER['REQUEST_METHOD'], 'POST') == 0) {
    if ($strMetodo == 'firmaArchivo') {
        //Tipo de digestiones: MD5, SHA1 y SHA2
        //Validar que esta digestión corresponda con la del archivo que el usuario debería de haber firmado
        //$strTipoDigestion = htmlentities($_POST["tipoDigestion"]);
        @$idReferencia = htmlentities($_POST["idReferencia"]);
        @$cveTipoDocumentoFirma = htmlentities($_POST["cveTipoDocumentoFirma"]);
        @$cveTipoFirmante = htmlentities($_POST["cveTipoFirmante"]);
        @$cveTipoDocumento = htmlentities($_POST["cveTipoDocumento"]);
        @$cveCategoria = htmlentities($_POST["cveCategoria"]);
        @$cveAdscripcion = htmlentities($_POST["cveAdscripcion"]);
        @$cveOrganigrama = htmlentities($_POST["cveOrganigrama"]);
        @$cveGrupo = htmlentities($_POST["cveGrupo"]);
        @$requerido = htmlentities($_POST["requerido"]);
        @$orden = htmlentities($_POST["orden"]);
        if ($cveAdscripcion == "") {
            $cveAdscripcion = $_SESSION["cveAdscripcion"];
        }
        $cveUsuario = @$_POST["cveUsuario"];
        if ($cveUsuario == "") {
            $cveUsuario = $_SESSION["cveUsuarioSistema"];
        }
        $params = array(
            "idReferencia" => $idReferencia,
            "cveTipoDocumentoFirma" => $cveTipoDocumentoFirma,
            "cveTipoFirmante" => $cveTipoFirmante,
            "cveTipoDocumento" => $cveTipoDocumento,
            "cveUsuario" => $cveUsuario,
            "cveCategoria" => $cveCategoria,
            "cveAdscripcion" => $cveAdscripcion,
            "cveOrganigrama" => $cveOrganigrama,
            "cveGrupo" => $cveGrupo,
            "requerido" => $requerido,
            "idRegistroFirma" => htmlentities($_POST["transferencia"]),
            "tokenFirma" => htmlentities($_POST["codigo"]),
            "nombreUsuario" => str_ireplace("'", "", @$_POST["nombreUsuario"]),
            "archivos" => $_POST["jsonData"],
            "nombreFirmante" => $_POST["cn"],
            "serieFirmante" => $_POST["serie"],
            "orden" => $orden
        );
        $firmaWS->setCertificado(str_replace(" ", "+", htmlentities($_POST["cert"])));
        $strFirmaCodigo = str_replace(" ", "+", htmlentities($_POST["firmaCodigo"]));
        $firmaWS->setFirmaCodigo($strFirmaCodigo);
        $firmaWS->setNombreFirmante(htmlentities($_POST["cn"]));
        $firmaWS->setNumeroSerieFirmante(htmlentities($_POST["serie"]));
        echo $firmaWS->firmaDigestionArchivos($params);
        exit;
    } else if ($strMetodo == "firmaSimple") {
        $strCertificado = str_replace(" ", "+", htmlentities($_POST["cert"]));
        $strReferencia = htmlentities($_POST["referencia"]);
        $cadenaOriginal = str_replace(" ", "+", htmlentities($_POST["original"]));
        $firma = str_replace(" ", "+", htmlentities($_POST["firma"]));
        $evidence = htmlentities($_POST["evidence"]);
        $firmaWS->setCadenaOriginal($cadenaOriginal);
        $firmaWS->setFirmaDigitalCadena($firma);
        $firmaWS->setCertificado($strCertificado);
        $firmaWS->setReferencia($strReferencia);
        echo $firmaWS->firmaPKCS1();
        exit;
    } else if ($strMetodo == "decodecert") {
        $strCertificado = str_replace(" ", "+", htmlentities($_POST["cert"]));
        $strReferencia = htmlentities($_POST["referencia"]);
        $firmaWS->setCertificado($strCertificado);
        $firmaWS->setOCSP(htmlentities($_POST["ocsp"]) == "true" ? true : false);
        $firmaWS->setReferencia("Decodificado de certificado");
        $firmaWS->decodificaCertificado();
    } else if ($strMetodo == "getCodeAndTransfer") {
        $strCurp = htmlentities($_POST["curp"]);
        $firmaWS->setCURP($strCurp);
        $firmaWS->registraOperacion();
    } else if (($strMetodo == 'confirmarFirmaArchivos')) {
        echo $firmaWS->confirmarFirmaDeArchivos($params);
        exit;
    }
}
?>