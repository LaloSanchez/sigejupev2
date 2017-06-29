<?php
 /*
*************************************************
*FRAMEWORK V1.0.0 (http://www.pjedomex.gob.mx)
*Copyright 2009-2015 DAOS
* Licensed under the MIT license 
* Autor: *
* Departamento de Desarrollo de Software
* Subdireccion de Ingenieria de Software
* Direccion de Teclogias de Informacion
* Poder Judicial del Estado de Mexico
*************************************************
*/

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/quejosospromociones/QuejosospromocionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class QuejosospromocionesDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertQuejosospromociones($quejosospromocionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblquejosospromociones(";
if($quejosospromocionesDto->getIdQuejosoProm()!=""){
$sql.="idQuejosoProm";
if(($quejosospromocionesDto->getIdActuacion()!="") ||($quejosospromocionesDto->getIdImputadoCarpeta()!="") ||($quejosospromocionesDto->getIdOfendidoCarpeta()!="") ||($quejosospromocionesDto->getPaternoQ()!="") ||($quejosospromocionesDto->getMaternoQ()!="") ||($quejosospromocionesDto->getNombreQ()!="") ||($quejosospromocionesDto->getNombreMoral()!="") ||($quejosospromocionesDto->getCveTipoPersona()!="") ||($quejosospromocionesDto->getCveGenero()!="") ||($quejosospromocionesDto->getDomicilio()!="") ||($quejosospromocionesDto->getEmail()!="") ||($quejosospromocionesDto->getTelefono()!="") ||($quejosospromocionesDto->getCveMunicipio()!="") ||($quejosospromocionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($quejosospromocionesDto->getIdActuacion()!=""){
$sql.="idActuacion";
if(($quejosospromocionesDto->getIdImputadoCarpeta()!="") ||($quejosospromocionesDto->getIdOfendidoCarpeta()!="") ||($quejosospromocionesDto->getPaternoQ()!="") ||($quejosospromocionesDto->getMaternoQ()!="") ||($quejosospromocionesDto->getNombreQ()!="") ||($quejosospromocionesDto->getNombreMoral()!="") ||($quejosospromocionesDto->getCveTipoPersona()!="") ||($quejosospromocionesDto->getCveGenero()!="") ||($quejosospromocionesDto->getDomicilio()!="") ||($quejosospromocionesDto->getEmail()!="") ||($quejosospromocionesDto->getTelefono()!="") ||($quejosospromocionesDto->getCveMunicipio()!="") ||($quejosospromocionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($quejosospromocionesDto->getIdImputadoCarpeta()!=""){
$sql.="idImputadoCarpeta";
if(($quejosospromocionesDto->getIdOfendidoCarpeta()!="") ||($quejosospromocionesDto->getPaternoQ()!="") ||($quejosospromocionesDto->getMaternoQ()!="") ||($quejosospromocionesDto->getNombreQ()!="") ||($quejosospromocionesDto->getNombreMoral()!="") ||($quejosospromocionesDto->getCveTipoPersona()!="") ||($quejosospromocionesDto->getCveGenero()!="") ||($quejosospromocionesDto->getDomicilio()!="") ||($quejosospromocionesDto->getEmail()!="") ||($quejosospromocionesDto->getTelefono()!="") ||($quejosospromocionesDto->getCveMunicipio()!="") ||($quejosospromocionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($quejosospromocionesDto->getIdOfendidoCarpeta()!=""){
$sql.="idOfendidoCarpeta";
if(($quejosospromocionesDto->getPaternoQ()!="") ||($quejosospromocionesDto->getMaternoQ()!="") ||($quejosospromocionesDto->getNombreQ()!="") ||($quejosospromocionesDto->getNombreMoral()!="") ||($quejosospromocionesDto->getCveTipoPersona()!="") ||($quejosospromocionesDto->getCveGenero()!="") ||($quejosospromocionesDto->getDomicilio()!="") ||($quejosospromocionesDto->getEmail()!="") ||($quejosospromocionesDto->getTelefono()!="") ||($quejosospromocionesDto->getCveMunicipio()!="") ||($quejosospromocionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($quejosospromocionesDto->getPaternoQ()!=""){
$sql.="paternoQ";
if(($quejosospromocionesDto->getMaternoQ()!="") ||($quejosospromocionesDto->getNombreQ()!="") ||($quejosospromocionesDto->getNombreMoral()!="") ||($quejosospromocionesDto->getCveTipoPersona()!="") ||($quejosospromocionesDto->getCveGenero()!="") ||($quejosospromocionesDto->getDomicilio()!="") ||($quejosospromocionesDto->getEmail()!="") ||($quejosospromocionesDto->getTelefono()!="") ||($quejosospromocionesDto->getCveMunicipio()!="") ||($quejosospromocionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($quejosospromocionesDto->getMaternoQ()!=""){
$sql.="maternoQ";
if(($quejosospromocionesDto->getNombreQ()!="") ||($quejosospromocionesDto->getNombreMoral()!="") ||($quejosospromocionesDto->getCveTipoPersona()!="") ||($quejosospromocionesDto->getCveGenero()!="") ||($quejosospromocionesDto->getDomicilio()!="") ||($quejosospromocionesDto->getEmail()!="") ||($quejosospromocionesDto->getTelefono()!="") ||($quejosospromocionesDto->getCveMunicipio()!="") ||($quejosospromocionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($quejosospromocionesDto->getNombreQ()!=""){
$sql.="nombreQ";
if(($quejosospromocionesDto->getNombreMoral()!="") ||($quejosospromocionesDto->getCveTipoPersona()!="") ||($quejosospromocionesDto->getCveGenero()!="") ||($quejosospromocionesDto->getDomicilio()!="") ||($quejosospromocionesDto->getEmail()!="") ||($quejosospromocionesDto->getTelefono()!="") ||($quejosospromocionesDto->getCveMunicipio()!="") ||($quejosospromocionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($quejosospromocionesDto->getNombreMoral()!=""){
$sql.="NombreMoral";
if(($quejosospromocionesDto->getCveTipoPersona()!="") ||($quejosospromocionesDto->getCveGenero()!="") ||($quejosospromocionesDto->getDomicilio()!="") ||($quejosospromocionesDto->getEmail()!="") ||($quejosospromocionesDto->getTelefono()!="") ||($quejosospromocionesDto->getCveMunicipio()!="") ||($quejosospromocionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($quejosospromocionesDto->getCveTipoPersona()!=""){
$sql.="cveTipoPersona";
if(($quejosospromocionesDto->getCveGenero()!="") ||($quejosospromocionesDto->getDomicilio()!="") ||($quejosospromocionesDto->getEmail()!="") ||($quejosospromocionesDto->getTelefono()!="") ||($quejosospromocionesDto->getCveMunicipio()!="") ||($quejosospromocionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($quejosospromocionesDto->getCveGenero()!=""){
$sql.="cveGenero";
if(($quejosospromocionesDto->getDomicilio()!="") ||($quejosospromocionesDto->getEmail()!="") ||($quejosospromocionesDto->getTelefono()!="") ||($quejosospromocionesDto->getCveMunicipio()!="") ||($quejosospromocionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($quejosospromocionesDto->getDomicilio()!=""){
$sql.="domicilio";
if(($quejosospromocionesDto->getEmail()!="") ||($quejosospromocionesDto->getTelefono()!="") ||($quejosospromocionesDto->getCveMunicipio()!="") ||($quejosospromocionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($quejosospromocionesDto->getEmail()!=""){
$sql.="email";
if(($quejosospromocionesDto->getTelefono()!="") ||($quejosospromocionesDto->getCveMunicipio()!="") ||($quejosospromocionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($quejosospromocionesDto->getTelefono()!=""){
$sql.="telefono";
if(($quejosospromocionesDto->getCveMunicipio()!="") ||($quejosospromocionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($quejosospromocionesDto->getCveMunicipio()!=""){
$sql.="cveMunicipio";
if(($quejosospromocionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($quejosospromocionesDto->getActivo()!=""){
$sql.="activo";
}
$sql.=") VALUES(";
if($quejosospromocionesDto->getIdQuejosoProm()!=""){
$sql.="'".$quejosospromocionesDto->getIdQuejosoProm()."'";
if(($quejosospromocionesDto->getIdActuacion()!="") ||($quejosospromocionesDto->getIdImputadoCarpeta()!="") ||($quejosospromocionesDto->getIdOfendidoCarpeta()!="") ||($quejosospromocionesDto->getPaternoQ()!="") ||($quejosospromocionesDto->getMaternoQ()!="") ||($quejosospromocionesDto->getNombreQ()!="") ||($quejosospromocionesDto->getNombreMoral()!="") ||($quejosospromocionesDto->getCveTipoPersona()!="") ||($quejosospromocionesDto->getCveGenero()!="") ||($quejosospromocionesDto->getDomicilio()!="") ||($quejosospromocionesDto->getEmail()!="") ||($quejosospromocionesDto->getTelefono()!="") ||($quejosospromocionesDto->getCveMunicipio()!="") ||($quejosospromocionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($quejosospromocionesDto->getIdActuacion()!=""){
$sql.="'".$quejosospromocionesDto->getIdActuacion()."'";
if(($quejosospromocionesDto->getIdImputadoCarpeta()!="") ||($quejosospromocionesDto->getIdOfendidoCarpeta()!="") ||($quejosospromocionesDto->getPaternoQ()!="") ||($quejosospromocionesDto->getMaternoQ()!="") ||($quejosospromocionesDto->getNombreQ()!="") ||($quejosospromocionesDto->getNombreMoral()!="") ||($quejosospromocionesDto->getCveTipoPersona()!="") ||($quejosospromocionesDto->getCveGenero()!="") ||($quejosospromocionesDto->getDomicilio()!="") ||($quejosospromocionesDto->getEmail()!="") ||($quejosospromocionesDto->getTelefono()!="") ||($quejosospromocionesDto->getCveMunicipio()!="") ||($quejosospromocionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($quejosospromocionesDto->getIdImputadoCarpeta()!=""){
$sql.="'".$quejosospromocionesDto->getIdImputadoCarpeta()."'";
if(($quejosospromocionesDto->getIdOfendidoCarpeta()!="") ||($quejosospromocionesDto->getPaternoQ()!="") ||($quejosospromocionesDto->getMaternoQ()!="") ||($quejosospromocionesDto->getNombreQ()!="") ||($quejosospromocionesDto->getNombreMoral()!="") ||($quejosospromocionesDto->getCveTipoPersona()!="") ||($quejosospromocionesDto->getCveGenero()!="") ||($quejosospromocionesDto->getDomicilio()!="") ||($quejosospromocionesDto->getEmail()!="") ||($quejosospromocionesDto->getTelefono()!="") ||($quejosospromocionesDto->getCveMunicipio()!="") ||($quejosospromocionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($quejosospromocionesDto->getIdOfendidoCarpeta()!=""){
$sql.="'".$quejosospromocionesDto->getIdOfendidoCarpeta()."'";
if(($quejosospromocionesDto->getPaternoQ()!="") ||($quejosospromocionesDto->getMaternoQ()!="") ||($quejosospromocionesDto->getNombreQ()!="") ||($quejosospromocionesDto->getNombreMoral()!="") ||($quejosospromocionesDto->getCveTipoPersona()!="") ||($quejosospromocionesDto->getCveGenero()!="") ||($quejosospromocionesDto->getDomicilio()!="") ||($quejosospromocionesDto->getEmail()!="") ||($quejosospromocionesDto->getTelefono()!="") ||($quejosospromocionesDto->getCveMunicipio()!="") ||($quejosospromocionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($quejosospromocionesDto->getPaternoQ()!=""){
$sql.="'".$quejosospromocionesDto->getPaternoQ()."'";
if(($quejosospromocionesDto->getMaternoQ()!="") ||($quejosospromocionesDto->getNombreQ()!="") ||($quejosospromocionesDto->getNombreMoral()!="") ||($quejosospromocionesDto->getCveTipoPersona()!="") ||($quejosospromocionesDto->getCveGenero()!="") ||($quejosospromocionesDto->getDomicilio()!="") ||($quejosospromocionesDto->getEmail()!="") ||($quejosospromocionesDto->getTelefono()!="") ||($quejosospromocionesDto->getCveMunicipio()!="") ||($quejosospromocionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($quejosospromocionesDto->getMaternoQ()!=""){
$sql.="'".$quejosospromocionesDto->getMaternoQ()."'";
if(($quejosospromocionesDto->getNombreQ()!="") ||($quejosospromocionesDto->getNombreMoral()!="") ||($quejosospromocionesDto->getCveTipoPersona()!="") ||($quejosospromocionesDto->getCveGenero()!="") ||($quejosospromocionesDto->getDomicilio()!="") ||($quejosospromocionesDto->getEmail()!="") ||($quejosospromocionesDto->getTelefono()!="") ||($quejosospromocionesDto->getCveMunicipio()!="") ||($quejosospromocionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($quejosospromocionesDto->getNombreQ()!=""){
$sql.="'".$quejosospromocionesDto->getNombreQ()."'";
if(($quejosospromocionesDto->getNombreMoral()!="") ||($quejosospromocionesDto->getCveTipoPersona()!="") ||($quejosospromocionesDto->getCveGenero()!="") ||($quejosospromocionesDto->getDomicilio()!="") ||($quejosospromocionesDto->getEmail()!="") ||($quejosospromocionesDto->getTelefono()!="") ||($quejosospromocionesDto->getCveMunicipio()!="") ||($quejosospromocionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($quejosospromocionesDto->getNombreMoral()!=""){
$sql.="'".$quejosospromocionesDto->getNombreMoral()."'";
if(($quejosospromocionesDto->getCveTipoPersona()!="") ||($quejosospromocionesDto->getCveGenero()!="") ||($quejosospromocionesDto->getDomicilio()!="") ||($quejosospromocionesDto->getEmail()!="") ||($quejosospromocionesDto->getTelefono()!="") ||($quejosospromocionesDto->getCveMunicipio()!="") ||($quejosospromocionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($quejosospromocionesDto->getCveTipoPersona()!=""){
$sql.="'".$quejosospromocionesDto->getCveTipoPersona()."'";
if(($quejosospromocionesDto->getCveGenero()!="") ||($quejosospromocionesDto->getDomicilio()!="") ||($quejosospromocionesDto->getEmail()!="") ||($quejosospromocionesDto->getTelefono()!="") ||($quejosospromocionesDto->getCveMunicipio()!="") ||($quejosospromocionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($quejosospromocionesDto->getCveGenero()!=""){
$sql.="'".$quejosospromocionesDto->getCveGenero()."'";
if(($quejosospromocionesDto->getDomicilio()!="") ||($quejosospromocionesDto->getEmail()!="") ||($quejosospromocionesDto->getTelefono()!="") ||($quejosospromocionesDto->getCveMunicipio()!="") ||($quejosospromocionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($quejosospromocionesDto->getDomicilio()!=""){
$sql.="'".$quejosospromocionesDto->getDomicilio()."'";
if(($quejosospromocionesDto->getEmail()!="") ||($quejosospromocionesDto->getTelefono()!="") ||($quejosospromocionesDto->getCveMunicipio()!="") ||($quejosospromocionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($quejosospromocionesDto->getEmail()!=""){
$sql.="'".$quejosospromocionesDto->getEmail()."'";
if(($quejosospromocionesDto->getTelefono()!="") ||($quejosospromocionesDto->getCveMunicipio()!="") ||($quejosospromocionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($quejosospromocionesDto->getTelefono()!=""){
$sql.="'".$quejosospromocionesDto->getTelefono()."'";
if(($quejosospromocionesDto->getCveMunicipio()!="") ||($quejosospromocionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($quejosospromocionesDto->getCveMunicipio()!=""){
$sql.="'".$quejosospromocionesDto->getCveMunicipio()."'";
if(($quejosospromocionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($quejosospromocionesDto->getActivo()!=""){
$sql.="'".$quejosospromocionesDto->getActivo()."'";
}
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new QuejosospromocionesDTO();
$tmp->setidQuejosoProm($this->_proveedor->lastID());
$tmp = $this->selectQuejosospromociones($tmp,"",$this->_proveedor);
} else {
    $error = true;
}
if ($proveedor == null) {
    $this->_proveedor->close();
}
unset($contador);
unset($sql);
return $tmp;
}
public function updateQuejosospromociones($quejosospromocionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblquejosospromociones SET ";
if($quejosospromocionesDto->getIdQuejosoProm()!=""){
$sql.="idQuejosoProm='".$quejosospromocionesDto->getIdQuejosoProm()."'";
if(($quejosospromocionesDto->getIdActuacion()!="") ||($quejosospromocionesDto->getIdImputadoCarpeta()!="") ||($quejosospromocionesDto->getIdOfendidoCarpeta()!="") ||($quejosospromocionesDto->getPaternoQ()!="") ||($quejosospromocionesDto->getMaternoQ()!="") ||($quejosospromocionesDto->getNombreQ()!="") ||($quejosospromocionesDto->getNombreMoral()!="") ||($quejosospromocionesDto->getCveTipoPersona()!="") ||($quejosospromocionesDto->getCveGenero()!="") ||($quejosospromocionesDto->getDomicilio()!="") ||($quejosospromocionesDto->getEmail()!="") ||($quejosospromocionesDto->getTelefono()!="") ||($quejosospromocionesDto->getCveMunicipio()!="") ||($quejosospromocionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($quejosospromocionesDto->getIdActuacion()!=""){
$sql.="idActuacion='".$quejosospromocionesDto->getIdActuacion()."'";
if(($quejosospromocionesDto->getIdImputadoCarpeta()!="") ||($quejosospromocionesDto->getIdOfendidoCarpeta()!="") ||($quejosospromocionesDto->getPaternoQ()!="") ||($quejosospromocionesDto->getMaternoQ()!="") ||($quejosospromocionesDto->getNombreQ()!="") ||($quejosospromocionesDto->getNombreMoral()!="") ||($quejosospromocionesDto->getCveTipoPersona()!="") ||($quejosospromocionesDto->getCveGenero()!="") ||($quejosospromocionesDto->getDomicilio()!="") ||($quejosospromocionesDto->getEmail()!="") ||($quejosospromocionesDto->getTelefono()!="") ||($quejosospromocionesDto->getCveMunicipio()!="") ||($quejosospromocionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($quejosospromocionesDto->getIdImputadoCarpeta()!=""){
$sql.="idImputadoCarpeta='".$quejosospromocionesDto->getIdImputadoCarpeta()."'";
if(($quejosospromocionesDto->getIdOfendidoCarpeta()!="") ||($quejosospromocionesDto->getPaternoQ()!="") ||($quejosospromocionesDto->getMaternoQ()!="") ||($quejosospromocionesDto->getNombreQ()!="") ||($quejosospromocionesDto->getNombreMoral()!="") ||($quejosospromocionesDto->getCveTipoPersona()!="") ||($quejosospromocionesDto->getCveGenero()!="") ||($quejosospromocionesDto->getDomicilio()!="") ||($quejosospromocionesDto->getEmail()!="") ||($quejosospromocionesDto->getTelefono()!="") ||($quejosospromocionesDto->getCveMunicipio()!="") ||($quejosospromocionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($quejosospromocionesDto->getIdOfendidoCarpeta()!=""){
$sql.="idOfendidoCarpeta='".$quejosospromocionesDto->getIdOfendidoCarpeta()."'";
if(($quejosospromocionesDto->getPaternoQ()!="") ||($quejosospromocionesDto->getMaternoQ()!="") ||($quejosospromocionesDto->getNombreQ()!="") ||($quejosospromocionesDto->getNombreMoral()!="") ||($quejosospromocionesDto->getCveTipoPersona()!="") ||($quejosospromocionesDto->getCveGenero()!="") ||($quejosospromocionesDto->getDomicilio()!="") ||($quejosospromocionesDto->getEmail()!="") ||($quejosospromocionesDto->getTelefono()!="") ||($quejosospromocionesDto->getCveMunicipio()!="") ||($quejosospromocionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($quejosospromocionesDto->getPaternoQ()!=""){
$sql.="paternoQ='".$quejosospromocionesDto->getPaternoQ()."'";
if(($quejosospromocionesDto->getMaternoQ()!="") ||($quejosospromocionesDto->getNombreQ()!="") ||($quejosospromocionesDto->getNombreMoral()!="") ||($quejosospromocionesDto->getCveTipoPersona()!="") ||($quejosospromocionesDto->getCveGenero()!="") ||($quejosospromocionesDto->getDomicilio()!="") ||($quejosospromocionesDto->getEmail()!="") ||($quejosospromocionesDto->getTelefono()!="") ||($quejosospromocionesDto->getCveMunicipio()!="") ||($quejosospromocionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($quejosospromocionesDto->getMaternoQ()!=""){
$sql.="maternoQ='".$quejosospromocionesDto->getMaternoQ()."'";
if(($quejosospromocionesDto->getNombreQ()!="") ||($quejosospromocionesDto->getNombreMoral()!="") ||($quejosospromocionesDto->getCveTipoPersona()!="") ||($quejosospromocionesDto->getCveGenero()!="") ||($quejosospromocionesDto->getDomicilio()!="") ||($quejosospromocionesDto->getEmail()!="") ||($quejosospromocionesDto->getTelefono()!="") ||($quejosospromocionesDto->getCveMunicipio()!="") ||($quejosospromocionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($quejosospromocionesDto->getNombreQ()!=""){
$sql.="nombreQ='".$quejosospromocionesDto->getNombreQ()."'";
if(($quejosospromocionesDto->getNombreMoral()!="") ||($quejosospromocionesDto->getCveTipoPersona()!="") ||($quejosospromocionesDto->getCveGenero()!="") ||($quejosospromocionesDto->getDomicilio()!="") ||($quejosospromocionesDto->getEmail()!="") ||($quejosospromocionesDto->getTelefono()!="") ||($quejosospromocionesDto->getCveMunicipio()!="") ||($quejosospromocionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($quejosospromocionesDto->getNombreMoral()!=""){
$sql.="NombreMoral='".$quejosospromocionesDto->getNombreMoral()."'";
if(($quejosospromocionesDto->getCveTipoPersona()!="") ||($quejosospromocionesDto->getCveGenero()!="") ||($quejosospromocionesDto->getDomicilio()!="") ||($quejosospromocionesDto->getEmail()!="") ||($quejosospromocionesDto->getTelefono()!="") ||($quejosospromocionesDto->getCveMunicipio()!="") ||($quejosospromocionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($quejosospromocionesDto->getCveTipoPersona()!=""){
$sql.="cveTipoPersona='".$quejosospromocionesDto->getCveTipoPersona()."'";
if(($quejosospromocionesDto->getCveGenero()!="") ||($quejosospromocionesDto->getDomicilio()!="") ||($quejosospromocionesDto->getEmail()!="") ||($quejosospromocionesDto->getTelefono()!="") ||($quejosospromocionesDto->getCveMunicipio()!="") ||($quejosospromocionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($quejosospromocionesDto->getCveGenero()!=""){
$sql.="cveGenero='".$quejosospromocionesDto->getCveGenero()."'";
if(($quejosospromocionesDto->getDomicilio()!="") ||($quejosospromocionesDto->getEmail()!="") ||($quejosospromocionesDto->getTelefono()!="") ||($quejosospromocionesDto->getCveMunicipio()!="") ||($quejosospromocionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($quejosospromocionesDto->getDomicilio()!=""){
$sql.="domicilio='".$quejosospromocionesDto->getDomicilio()."'";
if(($quejosospromocionesDto->getEmail()!="") ||($quejosospromocionesDto->getTelefono()!="") ||($quejosospromocionesDto->getCveMunicipio()!="") ||($quejosospromocionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($quejosospromocionesDto->getEmail()!=""){
$sql.="email='".$quejosospromocionesDto->getEmail()."'";
if(($quejosospromocionesDto->getTelefono()!="") ||($quejosospromocionesDto->getCveMunicipio()!="") ||($quejosospromocionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($quejosospromocionesDto->getTelefono()!=""){
$sql.="telefono='".$quejosospromocionesDto->getTelefono()."'";
if(($quejosospromocionesDto->getCveMunicipio()!="") ||($quejosospromocionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($quejosospromocionesDto->getCveMunicipio()!=""){
$sql.="cveMunicipio='".$quejosospromocionesDto->getCveMunicipio()."'";
if(($quejosospromocionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($quejosospromocionesDto->getActivo()!=""){
$sql.="activo='".$quejosospromocionesDto->getActivo()."'";
}
$sql.=" WHERE idQuejosoProm='".$quejosospromocionesDto->getIdQuejosoProm()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new QuejosospromocionesDTO();
$tmp->setidQuejosoProm($quejosospromocionesDto->getIdQuejosoProm());
$tmp = $this->selectQuejosospromociones($tmp,"",$this->_proveedor);
} else {
    $error = true;
}
if ($proveedor == null) {
    $this->_proveedor->close();
}
unset($contador);
unset($sql);
return $tmp;
}
public function deleteQuejosospromociones($quejosospromocionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblquejosospromociones  WHERE idQuejosoProm='".$quejosospromocionesDto->getIdQuejosoProm()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = true;
} else {
$tmp = false;
}
if ($proveedor == null) {
    $this->_proveedor->close();
}
unset($contador);
unset($sql);
return $tmp;
}
public function selectQuejosospromociones($quejosospromocionesDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idQuejosoProm,idActuacion,idImputadoCarpeta,idOfendidoCarpeta,paternoQ,maternoQ,nombreQ,NombreMoral,cveTipoPersona,cveGenero,domicilio,email,telefono,cveMunicipio,activo FROM tblquejosospromociones ";
if(($quejosospromocionesDto->getIdQuejosoProm()!="") ||($quejosospromocionesDto->getIdActuacion()!="") ||($quejosospromocionesDto->getIdImputadoCarpeta()!="") ||($quejosospromocionesDto->getIdOfendidoCarpeta()!="") ||($quejosospromocionesDto->getPaternoQ()!="") ||($quejosospromocionesDto->getMaternoQ()!="") ||($quejosospromocionesDto->getNombreQ()!="") ||($quejosospromocionesDto->getNombreMoral()!="") ||($quejosospromocionesDto->getCveTipoPersona()!="") ||($quejosospromocionesDto->getCveGenero()!="") ||($quejosospromocionesDto->getDomicilio()!="") ||($quejosospromocionesDto->getEmail()!="") ||($quejosospromocionesDto->getTelefono()!="") ||($quejosospromocionesDto->getCveMunicipio()!="") ||($quejosospromocionesDto->getActivo()!="") ){
$sql.=" WHERE ";
}
if($quejosospromocionesDto->getIdQuejosoProm()!=""){
$sql.="idQuejosoProm='".$quejosospromocionesDto->getIdQuejosoProm()."'";
if(($quejosospromocionesDto->getIdActuacion()!="") ||($quejosospromocionesDto->getIdImputadoCarpeta()!="") ||($quejosospromocionesDto->getIdOfendidoCarpeta()!="") ||($quejosospromocionesDto->getPaternoQ()!="") ||($quejosospromocionesDto->getMaternoQ()!="") ||($quejosospromocionesDto->getNombreQ()!="") ||($quejosospromocionesDto->getNombreMoral()!="") ||($quejosospromocionesDto->getCveTipoPersona()!="") ||($quejosospromocionesDto->getCveGenero()!="") ||($quejosospromocionesDto->getDomicilio()!="") ||($quejosospromocionesDto->getEmail()!="") ||($quejosospromocionesDto->getTelefono()!="") ||($quejosospromocionesDto->getCveMunicipio()!="") ||($quejosospromocionesDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($quejosospromocionesDto->getIdActuacion()!=""){
$sql.="idActuacion='".$quejosospromocionesDto->getIdActuacion()."'";
if(($quejosospromocionesDto->getIdImputadoCarpeta()!="") ||($quejosospromocionesDto->getIdOfendidoCarpeta()!="") ||($quejosospromocionesDto->getPaternoQ()!="") ||($quejosospromocionesDto->getMaternoQ()!="") ||($quejosospromocionesDto->getNombreQ()!="") ||($quejosospromocionesDto->getNombreMoral()!="") ||($quejosospromocionesDto->getCveTipoPersona()!="") ||($quejosospromocionesDto->getCveGenero()!="") ||($quejosospromocionesDto->getDomicilio()!="") ||($quejosospromocionesDto->getEmail()!="") ||($quejosospromocionesDto->getTelefono()!="") ||($quejosospromocionesDto->getCveMunicipio()!="") ||($quejosospromocionesDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($quejosospromocionesDto->getIdImputadoCarpeta()!=""){
$sql.="idImputadoCarpeta='".$quejosospromocionesDto->getIdImputadoCarpeta()."'";
if(($quejosospromocionesDto->getIdOfendidoCarpeta()!="") ||($quejosospromocionesDto->getPaternoQ()!="") ||($quejosospromocionesDto->getMaternoQ()!="") ||($quejosospromocionesDto->getNombreQ()!="") ||($quejosospromocionesDto->getNombreMoral()!="") ||($quejosospromocionesDto->getCveTipoPersona()!="") ||($quejosospromocionesDto->getCveGenero()!="") ||($quejosospromocionesDto->getDomicilio()!="") ||($quejosospromocionesDto->getEmail()!="") ||($quejosospromocionesDto->getTelefono()!="") ||($quejosospromocionesDto->getCveMunicipio()!="") ||($quejosospromocionesDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($quejosospromocionesDto->getIdOfendidoCarpeta()!=""){
$sql.="idOfendidoCarpeta='".$quejosospromocionesDto->getIdOfendidoCarpeta()."'";
if(($quejosospromocionesDto->getPaternoQ()!="") ||($quejosospromocionesDto->getMaternoQ()!="") ||($quejosospromocionesDto->getNombreQ()!="") ||($quejosospromocionesDto->getNombreMoral()!="") ||($quejosospromocionesDto->getCveTipoPersona()!="") ||($quejosospromocionesDto->getCveGenero()!="") ||($quejosospromocionesDto->getDomicilio()!="") ||($quejosospromocionesDto->getEmail()!="") ||($quejosospromocionesDto->getTelefono()!="") ||($quejosospromocionesDto->getCveMunicipio()!="") ||($quejosospromocionesDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($quejosospromocionesDto->getPaternoQ()!=""){
$sql.="paternoQ='".$quejosospromocionesDto->getPaternoQ()."'";
if(($quejosospromocionesDto->getMaternoQ()!="") ||($quejosospromocionesDto->getNombreQ()!="") ||($quejosospromocionesDto->getNombreMoral()!="") ||($quejosospromocionesDto->getCveTipoPersona()!="") ||($quejosospromocionesDto->getCveGenero()!="") ||($quejosospromocionesDto->getDomicilio()!="") ||($quejosospromocionesDto->getEmail()!="") ||($quejosospromocionesDto->getTelefono()!="") ||($quejosospromocionesDto->getCveMunicipio()!="") ||($quejosospromocionesDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($quejosospromocionesDto->getMaternoQ()!=""){
$sql.="maternoQ='".$quejosospromocionesDto->getMaternoQ()."'";
if(($quejosospromocionesDto->getNombreQ()!="") ||($quejosospromocionesDto->getNombreMoral()!="") ||($quejosospromocionesDto->getCveTipoPersona()!="") ||($quejosospromocionesDto->getCveGenero()!="") ||($quejosospromocionesDto->getDomicilio()!="") ||($quejosospromocionesDto->getEmail()!="") ||($quejosospromocionesDto->getTelefono()!="") ||($quejosospromocionesDto->getCveMunicipio()!="") ||($quejosospromocionesDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($quejosospromocionesDto->getNombreQ()!=""){
$sql.="nombreQ='".$quejosospromocionesDto->getNombreQ()."'";
if(($quejosospromocionesDto->getNombreMoral()!="") ||($quejosospromocionesDto->getCveTipoPersona()!="") ||($quejosospromocionesDto->getCveGenero()!="") ||($quejosospromocionesDto->getDomicilio()!="") ||($quejosospromocionesDto->getEmail()!="") ||($quejosospromocionesDto->getTelefono()!="") ||($quejosospromocionesDto->getCveMunicipio()!="") ||($quejosospromocionesDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($quejosospromocionesDto->getNombreMoral()!=""){
$sql.="NombreMoral='".$quejosospromocionesDto->getNombreMoral()."'";
if(($quejosospromocionesDto->getCveTipoPersona()!="") ||($quejosospromocionesDto->getCveGenero()!="") ||($quejosospromocionesDto->getDomicilio()!="") ||($quejosospromocionesDto->getEmail()!="") ||($quejosospromocionesDto->getTelefono()!="") ||($quejosospromocionesDto->getCveMunicipio()!="") ||($quejosospromocionesDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($quejosospromocionesDto->getCveTipoPersona()!=""){
$sql.="cveTipoPersona='".$quejosospromocionesDto->getCveTipoPersona()."'";
if(($quejosospromocionesDto->getCveGenero()!="") ||($quejosospromocionesDto->getDomicilio()!="") ||($quejosospromocionesDto->getEmail()!="") ||($quejosospromocionesDto->getTelefono()!="") ||($quejosospromocionesDto->getCveMunicipio()!="") ||($quejosospromocionesDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($quejosospromocionesDto->getCveGenero()!=""){
$sql.="cveGenero='".$quejosospromocionesDto->getCveGenero()."'";
if(($quejosospromocionesDto->getDomicilio()!="") ||($quejosospromocionesDto->getEmail()!="") ||($quejosospromocionesDto->getTelefono()!="") ||($quejosospromocionesDto->getCveMunicipio()!="") ||($quejosospromocionesDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($quejosospromocionesDto->getDomicilio()!=""){
$sql.="domicilio='".$quejosospromocionesDto->getDomicilio()."'";
if(($quejosospromocionesDto->getEmail()!="") ||($quejosospromocionesDto->getTelefono()!="") ||($quejosospromocionesDto->getCveMunicipio()!="") ||($quejosospromocionesDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($quejosospromocionesDto->getEmail()!=""){
$sql.="email='".$quejosospromocionesDto->getEmail()."'";
if(($quejosospromocionesDto->getTelefono()!="") ||($quejosospromocionesDto->getCveMunicipio()!="") ||($quejosospromocionesDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($quejosospromocionesDto->getTelefono()!=""){
$sql.="telefono='".$quejosospromocionesDto->getTelefono()."'";
if(($quejosospromocionesDto->getCveMunicipio()!="") ||($quejosospromocionesDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($quejosospromocionesDto->getCveMunicipio()!=""){
$sql.="cveMunicipio='".$quejosospromocionesDto->getCveMunicipio()."'";
if(($quejosospromocionesDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($quejosospromocionesDto->getActivo()!=""){
$sql.="activo='".$quejosospromocionesDto->getActivo()."'";
}
if($orden!=""){
$sql.=$orden;
}else{
$sql.="";
}
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
$tmp[$contador] = new QuejosospromocionesDTO();
$tmp[$contador]->setIdQuejosoProm($row["idQuejosoProm"]);
$tmp[$contador]->setIdActuacion($row["idActuacion"]);
$tmp[$contador]->setIdImputadoCarpeta($row["idImputadoCarpeta"]);
$tmp[$contador]->setIdOfendidoCarpeta($row["idOfendidoCarpeta"]);
$tmp[$contador]->setPaternoQ($row["paternoQ"]);
$tmp[$contador]->setMaternoQ($row["maternoQ"]);
$tmp[$contador]->setNombreQ($row["nombreQ"]);
$tmp[$contador]->setNombreMoral($row["NombreMoral"]);
$tmp[$contador]->setCveTipoPersona($row["cveTipoPersona"]);
$tmp[$contador]->setCveGenero($row["cveGenero"]);
$tmp[$contador]->setDomicilio($row["domicilio"]);
$tmp[$contador]->setEmail($row["email"]);
$tmp[$contador]->setTelefono($row["telefono"]);
$tmp[$contador]->setCveMunicipio($row["cveMunicipio"]);
$tmp[$contador]->setActivo($row["activo"]);
$contador++;
}
} else {
$error = true;
}
} else {
    $error = true;
}
if ($proveedor == null) {
    $this->_proveedor->close();
}
unset($contador);
unset($sql);
return $tmp;
}
}
?>