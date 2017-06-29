<?php

/*
 * ************************************************
 * FRAMEWORK V1.0.0 (http://www.pjedomex.gob.mx)
 * Copyright 2009-2015 FACADES
 * Licensed under the MIT license 
 * Autor: *
 * Departamento de Desarrollo de Software
 * Subdireccion de Ingenieria de Software
 * Direccion de Teclogias de Informacion
 * Poder Judicial del Estado de Mexico
 * ************************************************
 */

if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/personaautorizadas/PersonaautorizadasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/personaautorizadas/PersonaautorizadasController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");
include_once(dirname(__FILE__) . "/../../../webservice/cliente/personasautorizadaselectronico/PersonasautorizadaselectronicoCliente.php");

class PersonaautorizadaelectronicoFacade {

    private $proveedor;

    public function __construct() {
        
    }
    private function confirmarPersonaAutorizadas($CveRegistroComprobante) {
        $personaAutorizadaCliente = new PersonasautorizadaselectronicoCliente();
        $json = '{"cveRegistroComprobante":' . json_encode(utf8_encode($CveRegistroComprobante));
        $json .= "}";
        $respuesta=$personaAutorizadaCliente->esPersonaAutorizada($json);
        return $respuesta;
    }
    public function esPersonaAutorizada($CveRegistroComprobante){
        $respuesta=$this->confirmarPersonaAutorizadas($CveRegistroComprobante);
        return $respuesta;
        /*if ($respuesta != "") {
            return $respuesta;
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));*/
    }
    public function insertPersonaAutorizada($relacionExpedienteJuzgado){
        $json = '{"idtblPersonasAutorizadas":' . json_encode(utf8_encode($relacionExpedienteJuzgado["idtblPersonasAutorizadas"])).",";
        $json .= '"Nombre":' . json_encode(utf8_encode($relacionExpedienteJuzgado["nombre"])).",";
        $json .= '"Paterno":' . json_encode(utf8_encode($relacionExpedienteJuzgado["paterno"])).",";
        $json .= '"Materno":' . json_encode(utf8_encode($relacionExpedienteJuzgado["materno"])).",";
        $json .= '"Titulo":' . json_encode(utf8_encode($relacionExpedienteJuzgado["titulo"])).",";
        $json .= '"FechaNacimiento":' . json_encode(utf8_encode($relacionExpedienteJuzgado["ffechaNacimiento"])).",";
        $json .= '"CURP":' . json_encode(utf8_encode($relacionExpedienteJuzgado["curp"])).",";
        $json .= '"Cedula":' . json_encode(utf8_encode($relacionExpedienteJuzgado["cedula"])).",";
        $json .= '"email":' . json_encode(utf8_encode($relacionExpedienteJuzgado["email"])).",";
        $json .= '"FechaAlta":' . json_encode(utf8_encode($relacionExpedienteJuzgado["fechaAlta"])).",";
        $json .= '"FechaBaja":' . json_encode(utf8_encode($relacionExpedienteJuzgado["fechaBaja"])).",";
        $json .= '"FechaModificacion":' . json_encode(utf8_encode($relacionExpedienteJuzgado["fechaModificacion"])).",";
        $json .= '"Activo":' . json_encode(utf8_encode($relacionExpedienteJuzgado["activo"])).",";
        $json .= '"emailAlternativo":' . json_encode(utf8_encode($relacionExpedienteJuzgado["emailAlternativo"])).",";
        $json .= '"cveTipoAbogado":' . json_encode(utf8_encode($relacionExpedienteJuzgado["cveTipoAbogado"])).",";
        $json .= '"Usuario":' . json_encode(utf8_encode($relacionExpedienteJuzgado["usuario"])).",";
        $json .= '"Password":' . json_encode(utf8_encode($relacionExpedienteJuzgado["password"])).",";
        $json .= '"Direccion":' . json_encode(utf8_encode($relacionExpedienteJuzgado["direccion"])).",";
        $json .= '"Telefono":' . json_encode(utf8_encode($relacionExpedienteJuzgado["telefono"])).",";
        $json .= '"Perito":' . json_encode(utf8_encode($relacionExpedienteJuzgado["perito"])).",";
        $json .= '"CveEstatusRegistro":' . json_encode(utf8_encode($relacionExpedienteJuzgado["cveEstatusRegistro"])).",";
        $json .= '"StatusGenercionCorreo":' . json_encode(utf8_encode($relacionExpedienteJuzgado["statusGenercionCorreo"])).",";
        $json .= '"PasswordCifrado":' . json_encode(utf8_encode($relacionExpedienteJuzgado["passwordCifrado"])).",";
        $json .= '"SelloDigital":' . json_encode(utf8_encode($relacionExpedienteJuzgado["selloDigital"])).",";
        $json .= 'Ciudad:' . json_encode(utf8_encode($relacionExpedienteJuzgado["ciudad"]));
        $json .= "}";
        $personaAutorizadaCliente = new PersonasautorizadaselectronicoCliente();
        $respuesta=$personaAutorizadaCliente->insertPersonaAutorizada($json);
        return $respuesta;
    }
    public function buscarPersonaAutorizada($relacionExpedienteJuzgado,$param){
        $json = '{"nombre":' . json_encode(utf8_encode($relacionExpedienteJuzgado["nombre"])).",";
        $json .= '"paterno":' . json_encode(utf8_encode($relacionExpedienteJuzgado["paterno"])).",";
        $json .= '"materno":' . json_encode(utf8_encode($relacionExpedienteJuzgado["materno"])).",";
        $json .= '"cedula":' . json_encode(utf8_encode($relacionExpedienteJuzgado["cedula"])).",";
        $json .= '"email":' . json_encode(utf8_encode($relacionExpedienteJuzgado["email"])).",";
        $json .= '"cveTipoAbogado":' . json_encode(utf8_encode($relacionExpedienteJuzgado["cveTipoAbogado"])).",";
        $json .= '"cveEstatusRegistro":' . json_encode(utf8_encode($relacionExpedienteJuzgado["cveEstatusRegistro"])).",";
        $json .= '"statusGenercionCorreo":' . json_encode(utf8_encode($relacionExpedienteJuzgado["statusGenercionCorreo"])).",";
        $json .= '"letra":' . json_encode(utf8_encode($relacionExpedienteJuzgado["letra"])).",";
        $json .= '"activo":' . json_encode(utf8_encode($relacionExpedienteJuzgado["activo"])).",";
        $json .= '"pag":' . json_encode(utf8_encode($param["pag"])).",";
        $json .= '"cantxPag":' . json_encode(utf8_encode($param["cantxPag"])).",";
        $json .= '"paginacion":' . json_encode(utf8_encode($param["paginacion"])).",";
        $json .= '"fechaDesde":' . json_encode(utf8_encode($param["fechaDesde"])).",";
        $json .= '"fechaHasta":' . json_encode(utf8_encode($param["fechaHasta"])).",";
        $json .= '"ORDER_BY":' . json_encode(utf8_encode($param["ORDER_BY"]));
        $json .= "}";
        $personaAutorizadaCliente = new PersonasautorizadaselectronicoCliente();
        $respuesta=$personaAutorizadaCliente->buscarPersonaAutorizada($json);
        return $respuesta;
    }
    public function getPaginasPersonaAutorizada($relacionExpedienteJuzgado,$param){
        $json = '{"nombre":' . json_encode(utf8_encode($relacionExpedienteJuzgado["nombre"])).",";
        $json .= '"paterno":' . json_encode(utf8_encode($relacionExpedienteJuzgado["paterno"])).",";
        $json .= '"materno":' . json_encode(utf8_encode($relacionExpedienteJuzgado["materno"])).",";
        $json .= '"cedula":' . json_encode(utf8_encode($relacionExpedienteJuzgado["cedula"])).",";
        $json .= '"email":' . json_encode(utf8_encode($relacionExpedienteJuzgado["email"])).",";
        $json .= '"cveTipoAbogado":' . json_encode(utf8_encode($relacionExpedienteJuzgado["cveTipoAbogado"])).",";
        $json .= '"cveEstatusRegistro":' . json_encode(utf8_encode($relacionExpedienteJuzgado["cveEstatusRegistro"])).",";
        $json .= '"statusGenercionCorreo":' . json_encode(utf8_encode($relacionExpedienteJuzgado["statusGenercionCorreo"])).",";
        $json .= '"letra":' . json_encode(utf8_encode($relacionExpedienteJuzgado["letra"])).",";
        $json .= '"activo":' . json_encode(utf8_encode($relacionExpedienteJuzgado["activo"])).",";
        $json .= '"pag":' . json_encode(utf8_encode($param["pag"])).",";
        $json .= '"cantxPag":' . json_encode(utf8_encode($param["cantxPag"])).",";
        $json .= '"paginacion":' . json_encode(utf8_encode($param["paginacion"])).",";
        $json .= '"fechaDesde":' . json_encode(utf8_encode($param["fechaDesde"])).",";
        $json .= '"fechaHasta":' . json_encode(utf8_encode($param["fechaHasta"]));
        $json .= "}";
        $personaAutorizadaCliente = new PersonasautorizadaselectronicoCliente();
        $respuesta=$personaAutorizadaCliente->getPaginasPersonaAutorizada($json);
        return $respuesta;
    }
}

@$CveRegistroComprobante = $_POST["CveRegistroComprobante"];
@$accion = $_POST["accion"];

$relacionExpedienteJuzgado=array();
@$relacionExpedienteJuzgado["idtblPersonasAutorizadas"]=$_POST['idtblPersonasAutorizadas'];
@$relacionExpedienteJuzgado["nombre"]=$_POST['nombre'];
@$relacionExpedienteJuzgado["paterno"]=$_POST['paterno'];
@$relacionExpedienteJuzgado["materno"]=$_POST['materno'];
@$relacionExpedienteJuzgado["titulo"]=$_POST['titulo'];
@$relacionExpedienteJuzgado["fechaNacimiento"]=$_POST['fechaNacimiento'];
@$relacionExpedienteJuzgado["curp"]=$_POST['curp'];
@$relacionExpedienteJuzgado["cedula"]=$_POST['cedula'];
@$relacionExpedienteJuzgado["email"]=$_POST['email'];
@$relacionExpedienteJuzgado["fechaAlta"]=$_POST['fechaAlta'];
@$relacionExpedienteJuzgado["fechaBaja"]=$_POST['fechaBaja'];
@$relacionExpedienteJuzgado["fechaModificacion"]=$_POST['fechaModificacion'];
@$relacionExpedienteJuzgado["activo"]=$_POST['activo'];
@$relacionExpedienteJuzgado["emailAlternativo"]=$_POST['emailAlternativo'];
@$relacionExpedienteJuzgado["cveTipoAbogado"]=$_POST['cveTipoAbogado'];
@$relacionExpedienteJuzgado["usuario"]=$_POST['ausuario'];
@$relacionExpedienteJuzgado["password"]=$_POST['password'];
@$relacionExpedienteJuzgado["direccion"]=$_POST['direccion'];
@$relacionExpedienteJuzgado["telefono"]=$_POST['telefono'];
@$relacionExpedienteJuzgado["perito"]=$_POST['perito'];
@$relacionExpedienteJuzgado["cveEstatusRegistro"]=$_POST['cveEstatusRegistro'];
@$relacionExpedienteJuzgado["statusGenercionCorreo"]=$_POST['statusGenercionCorreo'];
@$relacionExpedienteJuzgado["passwordCifrado"]=$_POST['passwordCifrado'];
@$relacionExpedienteJuzgado["selloDigital"]=$_POST['selloDigital'];
@$relacionExpedienteJuzgado["ciudad"]=$_POST['ciudad'];
@$relacionExpedienteJuzgado["letra"]=$_POST['letra'];

$param = array();
@$param["pag"] = $_POST['pag'];
@$param["cantxPag"] = $_POST['cantxPag'];
@$param["paginacion"] = $_POST['paginacion'];//true
@$param["fechaDesde"] = $_POST['fechaDesde'];
@$param["fechaHasta"] = $_POST['fechaHasta'];
@$param["ORDER_BY"] = $_POST['ORDER_BY'];

$personaautorizadaselectronicoFacade = new PersonaautorizadaelectronicoFacade();

if($accion=="guardar-persona-autorizada"){
    $personaautorizadasDto = $personaautorizadaselectronicoFacade->insertPersonaAutorizada($relacionExpedienteJuzgado);
    echo $personaautorizadasDto;
}else if($accion=="confirmarRegistroAutorizado"){
    $personaautorizadasDto = $personaautorizadaselectronicoFacade->esPersonaAutorizada($CveRegistroComprobante );
    echo $personaautorizadasDto;
}else if($accion=="consultarRelacionExpediente"){
    $personaautorizadasDto = $personaautorizadaselectronicoFacade->buscarPersonaAutorizada($relacionExpedienteJuzgado,$param);
    echo $personaautorizadasDto;
}else if($accion=="getPaginasRelacionExpediente"){
    $personaautorizadasDto = $personaautorizadaselectronicoFacade->getPaginasPersonaAutorizada($relacionExpedienteJuzgado,$param);
    echo $personaautorizadasDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>