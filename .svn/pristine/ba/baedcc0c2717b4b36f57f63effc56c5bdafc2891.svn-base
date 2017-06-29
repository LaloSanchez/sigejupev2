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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/imputadosordenes/ImputadosordenesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class ImputadosordenesDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertImputadosordenes($imputadosordenesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblimputadosordenes(";
if($imputadosordenesDto->getIdImputadoOrden()!=""){
$sql.="idImputadoOrden";
if(($imputadosordenesDto->getIdSolicitudOrden()!="") ||($imputadosordenesDto->getActivo()!="") ||($imputadosordenesDto->getNombre()!="") ||($imputadosordenesDto->getPaterno()!="") ||($imputadosordenesDto->getMaterno()!="") ||($imputadosordenesDto->getAlias()!="") ||($imputadosordenesDto->getCveGenero()!="") ||($imputadosordenesDto->getDetenido()!="") ||($imputadosordenesDto->getCveTipoPersona()!="") ||($imputadosordenesDto->getNombreMoral()!="") ||($imputadosordenesDto->getDomicilio()!="") ||($imputadosordenesDto->getTelefono()!="") ||($imputadosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($imputadosordenesDto->getIdSolicitudOrden()!=""){
$sql.="idSolicitudOrden";
if(($imputadosordenesDto->getActivo()!="") ||($imputadosordenesDto->getNombre()!="") ||($imputadosordenesDto->getPaterno()!="") ||($imputadosordenesDto->getMaterno()!="") ||($imputadosordenesDto->getAlias()!="") ||($imputadosordenesDto->getCveGenero()!="") ||($imputadosordenesDto->getDetenido()!="") ||($imputadosordenesDto->getCveTipoPersona()!="") ||($imputadosordenesDto->getNombreMoral()!="") ||($imputadosordenesDto->getDomicilio()!="") ||($imputadosordenesDto->getTelefono()!="") ||($imputadosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($imputadosordenesDto->getActivo()!=""){
$sql.="activo";
if(($imputadosordenesDto->getNombre()!="") ||($imputadosordenesDto->getPaterno()!="") ||($imputadosordenesDto->getMaterno()!="") ||($imputadosordenesDto->getAlias()!="") ||($imputadosordenesDto->getCveGenero()!="") ||($imputadosordenesDto->getDetenido()!="") ||($imputadosordenesDto->getCveTipoPersona()!="") ||($imputadosordenesDto->getNombreMoral()!="") ||($imputadosordenesDto->getDomicilio()!="") ||($imputadosordenesDto->getTelefono()!="") ||($imputadosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($imputadosordenesDto->getNombre()!=""){
$sql.="nombre";
if(($imputadosordenesDto->getPaterno()!="") ||($imputadosordenesDto->getMaterno()!="") ||($imputadosordenesDto->getAlias()!="") ||($imputadosordenesDto->getCveGenero()!="") ||($imputadosordenesDto->getDetenido()!="") ||($imputadosordenesDto->getCveTipoPersona()!="") ||($imputadosordenesDto->getNombreMoral()!="") ||($imputadosordenesDto->getDomicilio()!="") ||($imputadosordenesDto->getTelefono()!="") ||($imputadosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($imputadosordenesDto->getPaterno()!=""){
$sql.="paterno";
if(($imputadosordenesDto->getMaterno()!="") ||($imputadosordenesDto->getAlias()!="") ||($imputadosordenesDto->getCveGenero()!="") ||($imputadosordenesDto->getDetenido()!="") ||($imputadosordenesDto->getCveTipoPersona()!="") ||($imputadosordenesDto->getNombreMoral()!="") ||($imputadosordenesDto->getDomicilio()!="") ||($imputadosordenesDto->getTelefono()!="") ||($imputadosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($imputadosordenesDto->getMaterno()!=""){
$sql.="materno";
if(($imputadosordenesDto->getAlias()!="") ||($imputadosordenesDto->getCveGenero()!="") ||($imputadosordenesDto->getDetenido()!="") ||($imputadosordenesDto->getCveTipoPersona()!="") ||($imputadosordenesDto->getNombreMoral()!="") ||($imputadosordenesDto->getDomicilio()!="") ||($imputadosordenesDto->getTelefono()!="") ||($imputadosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($imputadosordenesDto->getAlias()!=""){
$sql.="alias";
if(($imputadosordenesDto->getCveGenero()!="") ||($imputadosordenesDto->getDetenido()!="") ||($imputadosordenesDto->getCveTipoPersona()!="") ||($imputadosordenesDto->getNombreMoral()!="") ||($imputadosordenesDto->getDomicilio()!="") ||($imputadosordenesDto->getTelefono()!="") ||($imputadosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($imputadosordenesDto->getCveGenero()!=""){
$sql.="cveGenero";
if(($imputadosordenesDto->getDetenido()!="") ||($imputadosordenesDto->getCveTipoPersona()!="") ||($imputadosordenesDto->getNombreMoral()!="") ||($imputadosordenesDto->getDomicilio()!="") ||($imputadosordenesDto->getTelefono()!="") ||($imputadosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($imputadosordenesDto->getDetenido()!=""){
$sql.="detenido";
if(($imputadosordenesDto->getCveTipoPersona()!="") ||($imputadosordenesDto->getNombreMoral()!="") ||($imputadosordenesDto->getDomicilio()!="") ||($imputadosordenesDto->getTelefono()!="") ||($imputadosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($imputadosordenesDto->getCveTipoPersona()!=""){
$sql.="cveTipoPersona";
if(($imputadosordenesDto->getNombreMoral()!="") ||($imputadosordenesDto->getDomicilio()!="") ||($imputadosordenesDto->getTelefono()!="") ||($imputadosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($imputadosordenesDto->getNombreMoral()!=""){
$sql.="nombreMoral";
if(($imputadosordenesDto->getDomicilio()!="") ||($imputadosordenesDto->getTelefono()!="") ||($imputadosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($imputadosordenesDto->getDomicilio()!=""){
$sql.="domicilio";
if(($imputadosordenesDto->getTelefono()!="") ||($imputadosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($imputadosordenesDto->getTelefono()!=""){
$sql.="telefono";
if(($imputadosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($imputadosordenesDto->getEmail()!=""){
$sql.="email";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($imputadosordenesDto->getIdImputadoOrden()!=""){
$sql.="'".$imputadosordenesDto->getIdImputadoOrden()."'";
if(($imputadosordenesDto->getIdSolicitudOrden()!="") ||($imputadosordenesDto->getActivo()!="") ||($imputadosordenesDto->getNombre()!="") ||($imputadosordenesDto->getPaterno()!="") ||($imputadosordenesDto->getMaterno()!="") ||($imputadosordenesDto->getAlias()!="") ||($imputadosordenesDto->getCveGenero()!="") ||($imputadosordenesDto->getDetenido()!="") ||($imputadosordenesDto->getCveTipoPersona()!="") ||($imputadosordenesDto->getNombreMoral()!="") ||($imputadosordenesDto->getDomicilio()!="") ||($imputadosordenesDto->getTelefono()!="") ||($imputadosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($imputadosordenesDto->getIdSolicitudOrden()!=""){
$sql.="'".$imputadosordenesDto->getIdSolicitudOrden()."'";
if(($imputadosordenesDto->getActivo()!="") ||($imputadosordenesDto->getNombre()!="") ||($imputadosordenesDto->getPaterno()!="") ||($imputadosordenesDto->getMaterno()!="") ||($imputadosordenesDto->getAlias()!="") ||($imputadosordenesDto->getCveGenero()!="") ||($imputadosordenesDto->getDetenido()!="") ||($imputadosordenesDto->getCveTipoPersona()!="") ||($imputadosordenesDto->getNombreMoral()!="") ||($imputadosordenesDto->getDomicilio()!="") ||($imputadosordenesDto->getTelefono()!="") ||($imputadosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($imputadosordenesDto->getActivo()!=""){
$sql.="'".$imputadosordenesDto->getActivo()."'";
if(($imputadosordenesDto->getNombre()!="") ||($imputadosordenesDto->getPaterno()!="") ||($imputadosordenesDto->getMaterno()!="") ||($imputadosordenesDto->getAlias()!="") ||($imputadosordenesDto->getCveGenero()!="") ||($imputadosordenesDto->getDetenido()!="") ||($imputadosordenesDto->getCveTipoPersona()!="") ||($imputadosordenesDto->getNombreMoral()!="") ||($imputadosordenesDto->getDomicilio()!="") ||($imputadosordenesDto->getTelefono()!="") ||($imputadosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($imputadosordenesDto->getNombre()!=""){
$sql.="'".$imputadosordenesDto->getNombre()."'";
if(($imputadosordenesDto->getPaterno()!="") ||($imputadosordenesDto->getMaterno()!="") ||($imputadosordenesDto->getAlias()!="") ||($imputadosordenesDto->getCveGenero()!="") ||($imputadosordenesDto->getDetenido()!="") ||($imputadosordenesDto->getCveTipoPersona()!="") ||($imputadosordenesDto->getNombreMoral()!="") ||($imputadosordenesDto->getDomicilio()!="") ||($imputadosordenesDto->getTelefono()!="") ||($imputadosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($imputadosordenesDto->getPaterno()!=""){
$sql.="'".$imputadosordenesDto->getPaterno()."'";
if(($imputadosordenesDto->getMaterno()!="") ||($imputadosordenesDto->getAlias()!="") ||($imputadosordenesDto->getCveGenero()!="") ||($imputadosordenesDto->getDetenido()!="") ||($imputadosordenesDto->getCveTipoPersona()!="") ||($imputadosordenesDto->getNombreMoral()!="") ||($imputadosordenesDto->getDomicilio()!="") ||($imputadosordenesDto->getTelefono()!="") ||($imputadosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($imputadosordenesDto->getMaterno()!=""){
$sql.="'".$imputadosordenesDto->getMaterno()."'";
if(($imputadosordenesDto->getAlias()!="") ||($imputadosordenesDto->getCveGenero()!="") ||($imputadosordenesDto->getDetenido()!="") ||($imputadosordenesDto->getCveTipoPersona()!="") ||($imputadosordenesDto->getNombreMoral()!="") ||($imputadosordenesDto->getDomicilio()!="") ||($imputadosordenesDto->getTelefono()!="") ||($imputadosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($imputadosordenesDto->getAlias()!=""){
$sql.="'".$imputadosordenesDto->getAlias()."'";
if(($imputadosordenesDto->getCveGenero()!="") ||($imputadosordenesDto->getDetenido()!="") ||($imputadosordenesDto->getCveTipoPersona()!="") ||($imputadosordenesDto->getNombreMoral()!="") ||($imputadosordenesDto->getDomicilio()!="") ||($imputadosordenesDto->getTelefono()!="") ||($imputadosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($imputadosordenesDto->getCveGenero()!=""){
$sql.="'".$imputadosordenesDto->getCveGenero()."'";
if(($imputadosordenesDto->getDetenido()!="") ||($imputadosordenesDto->getCveTipoPersona()!="") ||($imputadosordenesDto->getNombreMoral()!="") ||($imputadosordenesDto->getDomicilio()!="") ||($imputadosordenesDto->getTelefono()!="") ||($imputadosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($imputadosordenesDto->getDetenido()!=""){
$sql.="'".$imputadosordenesDto->getDetenido()."'";
if(($imputadosordenesDto->getCveTipoPersona()!="") ||($imputadosordenesDto->getNombreMoral()!="") ||($imputadosordenesDto->getDomicilio()!="") ||($imputadosordenesDto->getTelefono()!="") ||($imputadosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($imputadosordenesDto->getCveTipoPersona()!=""){
$sql.="'".$imputadosordenesDto->getCveTipoPersona()."'";
if(($imputadosordenesDto->getNombreMoral()!="") ||($imputadosordenesDto->getDomicilio()!="") ||($imputadosordenesDto->getTelefono()!="") ||($imputadosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($imputadosordenesDto->getNombreMoral()!=""){
$sql.="'".$imputadosordenesDto->getNombreMoral()."'";
if(($imputadosordenesDto->getDomicilio()!="") ||($imputadosordenesDto->getTelefono()!="") ||($imputadosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($imputadosordenesDto->getFechaRegistro()!=""){
if(($imputadosordenesDto->getDomicilio()!="") ||($imputadosordenesDto->getTelefono()!="") ||($imputadosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($imputadosordenesDto->getFechaActualizacion()!=""){
if(($imputadosordenesDto->getDomicilio()!="") ||($imputadosordenesDto->getTelefono()!="") ||($imputadosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($imputadosordenesDto->getDomicilio()!=""){
$sql.="'".$imputadosordenesDto->getDomicilio()."'";
if(($imputadosordenesDto->getTelefono()!="") ||($imputadosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($imputadosordenesDto->getTelefono()!=""){
$sql.="'".$imputadosordenesDto->getTelefono()."'";
if(($imputadosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($imputadosordenesDto->getEmail()!=""){
$sql.="'".$imputadosordenesDto->getEmail()."'";
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new ImputadosordenesDTO();
$tmp->setidImputadoOrden($this->_proveedor->lastID());
$tmp = $this->selectImputadosordenes($tmp,"",$this->_proveedor);
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
public function updateImputadosordenes($imputadosordenesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblimputadosordenes SET ";
if($imputadosordenesDto->getIdImputadoOrden()!=""){
$sql.="idImputadoOrden='".$imputadosordenesDto->getIdImputadoOrden()."'";
if(($imputadosordenesDto->getIdSolicitudOrden()!="") ||($imputadosordenesDto->getActivo()!="") ||($imputadosordenesDto->getNombre()!="") ||($imputadosordenesDto->getPaterno()!="") ||($imputadosordenesDto->getMaterno()!="") ||($imputadosordenesDto->getAlias()!="") ||($imputadosordenesDto->getCveGenero()!="") ||($imputadosordenesDto->getDetenido()!="") ||($imputadosordenesDto->getCveTipoPersona()!="") ||($imputadosordenesDto->getNombreMoral()!="") ||($imputadosordenesDto->getFechaRegistro()!="") ||($imputadosordenesDto->getFechaActualizacion()!="") ||($imputadosordenesDto->getDomicilio()!="") ||($imputadosordenesDto->getTelefono()!="") ||($imputadosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($imputadosordenesDto->getIdSolicitudOrden()!=""){
$sql.="idSolicitudOrden='".$imputadosordenesDto->getIdSolicitudOrden()."'";
if(($imputadosordenesDto->getActivo()!="") ||($imputadosordenesDto->getNombre()!="") ||($imputadosordenesDto->getPaterno()!="") ||($imputadosordenesDto->getMaterno()!="") ||($imputadosordenesDto->getAlias()!="") ||($imputadosordenesDto->getCveGenero()!="") ||($imputadosordenesDto->getDetenido()!="") ||($imputadosordenesDto->getCveTipoPersona()!="") ||($imputadosordenesDto->getNombreMoral()!="") ||($imputadosordenesDto->getFechaRegistro()!="") ||($imputadosordenesDto->getFechaActualizacion()!="") ||($imputadosordenesDto->getDomicilio()!="") ||($imputadosordenesDto->getTelefono()!="") ||($imputadosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($imputadosordenesDto->getActivo()!=""){
$sql.="activo='".$imputadosordenesDto->getActivo()."'";
if(($imputadosordenesDto->getNombre()!="") ||($imputadosordenesDto->getPaterno()!="") ||($imputadosordenesDto->getMaterno()!="") ||($imputadosordenesDto->getAlias()!="") ||($imputadosordenesDto->getCveGenero()!="") ||($imputadosordenesDto->getDetenido()!="") ||($imputadosordenesDto->getCveTipoPersona()!="") ||($imputadosordenesDto->getNombreMoral()!="") ||($imputadosordenesDto->getFechaRegistro()!="") ||($imputadosordenesDto->getFechaActualizacion()!="") ||($imputadosordenesDto->getDomicilio()!="") ||($imputadosordenesDto->getTelefono()!="") ||($imputadosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($imputadosordenesDto->getNombre()!=""){
$sql.="nombre='".$imputadosordenesDto->getNombre()."'";
if(($imputadosordenesDto->getPaterno()!="") ||($imputadosordenesDto->getMaterno()!="") ||($imputadosordenesDto->getAlias()!="") ||($imputadosordenesDto->getCveGenero()!="") ||($imputadosordenesDto->getDetenido()!="") ||($imputadosordenesDto->getCveTipoPersona()!="") ||($imputadosordenesDto->getNombreMoral()!="") ||($imputadosordenesDto->getFechaRegistro()!="") ||($imputadosordenesDto->getFechaActualizacion()!="") ||($imputadosordenesDto->getDomicilio()!="") ||($imputadosordenesDto->getTelefono()!="") ||($imputadosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($imputadosordenesDto->getPaterno()!=""){
$sql.="paterno='".$imputadosordenesDto->getPaterno()."'";
if(($imputadosordenesDto->getMaterno()!="") ||($imputadosordenesDto->getAlias()!="") ||($imputadosordenesDto->getCveGenero()!="") ||($imputadosordenesDto->getDetenido()!="") ||($imputadosordenesDto->getCveTipoPersona()!="") ||($imputadosordenesDto->getNombreMoral()!="") ||($imputadosordenesDto->getFechaRegistro()!="") ||($imputadosordenesDto->getFechaActualizacion()!="") ||($imputadosordenesDto->getDomicilio()!="") ||($imputadosordenesDto->getTelefono()!="") ||($imputadosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($imputadosordenesDto->getMaterno()!=""){
$sql.="materno='".$imputadosordenesDto->getMaterno()."'";
if(($imputadosordenesDto->getAlias()!="") ||($imputadosordenesDto->getCveGenero()!="") ||($imputadosordenesDto->getDetenido()!="") ||($imputadosordenesDto->getCveTipoPersona()!="") ||($imputadosordenesDto->getNombreMoral()!="") ||($imputadosordenesDto->getFechaRegistro()!="") ||($imputadosordenesDto->getFechaActualizacion()!="") ||($imputadosordenesDto->getDomicilio()!="") ||($imputadosordenesDto->getTelefono()!="") ||($imputadosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($imputadosordenesDto->getAlias()!=""){
$sql.="alias='".$imputadosordenesDto->getAlias()."'";
if(($imputadosordenesDto->getCveGenero()!="") ||($imputadosordenesDto->getDetenido()!="") ||($imputadosordenesDto->getCveTipoPersona()!="") ||($imputadosordenesDto->getNombreMoral()!="") ||($imputadosordenesDto->getFechaRegistro()!="") ||($imputadosordenesDto->getFechaActualizacion()!="") ||($imputadosordenesDto->getDomicilio()!="") ||($imputadosordenesDto->getTelefono()!="") ||($imputadosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($imputadosordenesDto->getCveGenero()!=""){
$sql.="cveGenero='".$imputadosordenesDto->getCveGenero()."'";
if(($imputadosordenesDto->getDetenido()!="") ||($imputadosordenesDto->getCveTipoPersona()!="") ||($imputadosordenesDto->getNombreMoral()!="") ||($imputadosordenesDto->getFechaRegistro()!="") ||($imputadosordenesDto->getFechaActualizacion()!="") ||($imputadosordenesDto->getDomicilio()!="") ||($imputadosordenesDto->getTelefono()!="") ||($imputadosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($imputadosordenesDto->getDetenido()!=""){
$sql.="detenido='".$imputadosordenesDto->getDetenido()."'";
if(($imputadosordenesDto->getCveTipoPersona()!="") ||($imputadosordenesDto->getNombreMoral()!="") ||($imputadosordenesDto->getFechaRegistro()!="") ||($imputadosordenesDto->getFechaActualizacion()!="") ||($imputadosordenesDto->getDomicilio()!="") ||($imputadosordenesDto->getTelefono()!="") ||($imputadosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($imputadosordenesDto->getCveTipoPersona()!=""){
$sql.="cveTipoPersona='".$imputadosordenesDto->getCveTipoPersona()."'";
if(($imputadosordenesDto->getNombreMoral()!="") ||($imputadosordenesDto->getFechaRegistro()!="") ||($imputadosordenesDto->getFechaActualizacion()!="") ||($imputadosordenesDto->getDomicilio()!="") ||($imputadosordenesDto->getTelefono()!="") ||($imputadosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($imputadosordenesDto->getNombreMoral()!=""){
$sql.="nombreMoral='".$imputadosordenesDto->getNombreMoral()."'";
if(($imputadosordenesDto->getFechaRegistro()!="") ||($imputadosordenesDto->getFechaActualizacion()!="") ||($imputadosordenesDto->getDomicilio()!="") ||($imputadosordenesDto->getTelefono()!="") ||($imputadosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($imputadosordenesDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$imputadosordenesDto->getFechaRegistro()."'";
if(($imputadosordenesDto->getFechaActualizacion()!="") ||($imputadosordenesDto->getDomicilio()!="") ||($imputadosordenesDto->getTelefono()!="") ||($imputadosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($imputadosordenesDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$imputadosordenesDto->getFechaActualizacion()."'";
if(($imputadosordenesDto->getDomicilio()!="") ||($imputadosordenesDto->getTelefono()!="") ||($imputadosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($imputadosordenesDto->getDomicilio()!=""){
$sql.="domicilio='".$imputadosordenesDto->getDomicilio()."'";
if(($imputadosordenesDto->getTelefono()!="") ||($imputadosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($imputadosordenesDto->getTelefono()!=""){
$sql.="telefono='".$imputadosordenesDto->getTelefono()."'";
if(($imputadosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($imputadosordenesDto->getEmail()!=""){
$sql.="email='".$imputadosordenesDto->getEmail()."'";
}
$sql.=" WHERE idImputadoOrden='".$imputadosordenesDto->getIdImputadoOrden()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new ImputadosordenesDTO();
$tmp->setidImputadoOrden($imputadosordenesDto->getIdImputadoOrden());
$tmp = $this->selectImputadosordenes($tmp,"",$this->_proveedor);
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
public function deleteImputadosordenes($imputadosordenesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblimputadosordenes  WHERE idImputadoOrden='".$imputadosordenesDto->getIdImputadoOrden()."'";
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
public function selectImputadosordenes($imputadosordenesDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idImputadoOrden,idSolicitudOrden,activo,nombre,paterno,materno,alias,cveGenero,detenido,cveTipoPersona,nombreMoral,fechaRegistro,fechaActualizacion,domicilio,telefono,email FROM tblimputadosordenes ";
if(($imputadosordenesDto->getIdImputadoOrden()!="") ||($imputadosordenesDto->getIdSolicitudOrden()!="") ||($imputadosordenesDto->getActivo()!="") ||($imputadosordenesDto->getNombre()!="") ||($imputadosordenesDto->getPaterno()!="") ||($imputadosordenesDto->getMaterno()!="") ||($imputadosordenesDto->getAlias()!="") ||($imputadosordenesDto->getCveGenero()!="") ||($imputadosordenesDto->getDetenido()!="") ||($imputadosordenesDto->getCveTipoPersona()!="") ||($imputadosordenesDto->getNombreMoral()!="") ||($imputadosordenesDto->getFechaRegistro()!="") ||($imputadosordenesDto->getFechaActualizacion()!="") ||($imputadosordenesDto->getDomicilio()!="") ||($imputadosordenesDto->getTelefono()!="") ||($imputadosordenesDto->getEmail()!="") ){
$sql.=" WHERE ";
}
if($imputadosordenesDto->getIdImputadoOrden()!=""){
$sql.="idImputadoOrden='".$imputadosordenesDto->getIdImputadoOrden()."'";
if(($imputadosordenesDto->getIdSolicitudOrden()!="") ||($imputadosordenesDto->getActivo()!="") ||($imputadosordenesDto->getNombre()!="") ||($imputadosordenesDto->getPaterno()!="") ||($imputadosordenesDto->getMaterno()!="") ||($imputadosordenesDto->getAlias()!="") ||($imputadosordenesDto->getCveGenero()!="") ||($imputadosordenesDto->getDetenido()!="") ||($imputadosordenesDto->getCveTipoPersona()!="") ||($imputadosordenesDto->getNombreMoral()!="") ||($imputadosordenesDto->getFechaRegistro()!="") ||($imputadosordenesDto->getFechaActualizacion()!="") ||($imputadosordenesDto->getDomicilio()!="") ||($imputadosordenesDto->getTelefono()!="") ||($imputadosordenesDto->getEmail()!="") ){
$sql.=" AND ";
}
}
if($imputadosordenesDto->getIdSolicitudOrden()!=""){
$sql.="idSolicitudOrden='".$imputadosordenesDto->getIdSolicitudOrden()."'";
if(($imputadosordenesDto->getActivo()!="") ||($imputadosordenesDto->getNombre()!="") ||($imputadosordenesDto->getPaterno()!="") ||($imputadosordenesDto->getMaterno()!="") ||($imputadosordenesDto->getAlias()!="") ||($imputadosordenesDto->getCveGenero()!="") ||($imputadosordenesDto->getDetenido()!="") ||($imputadosordenesDto->getCveTipoPersona()!="") ||($imputadosordenesDto->getNombreMoral()!="") ||($imputadosordenesDto->getFechaRegistro()!="") ||($imputadosordenesDto->getFechaActualizacion()!="") ||($imputadosordenesDto->getDomicilio()!="") ||($imputadosordenesDto->getTelefono()!="") ||($imputadosordenesDto->getEmail()!="") ){
$sql.=" AND ";
}
}
if($imputadosordenesDto->getActivo()!=""){
$sql.="activo='".$imputadosordenesDto->getActivo()."'";
if(($imputadosordenesDto->getNombre()!="") ||($imputadosordenesDto->getPaterno()!="") ||($imputadosordenesDto->getMaterno()!="") ||($imputadosordenesDto->getAlias()!="") ||($imputadosordenesDto->getCveGenero()!="") ||($imputadosordenesDto->getDetenido()!="") ||($imputadosordenesDto->getCveTipoPersona()!="") ||($imputadosordenesDto->getNombreMoral()!="") ||($imputadosordenesDto->getFechaRegistro()!="") ||($imputadosordenesDto->getFechaActualizacion()!="") ||($imputadosordenesDto->getDomicilio()!="") ||($imputadosordenesDto->getTelefono()!="") ||($imputadosordenesDto->getEmail()!="") ){
$sql.=" AND ";
}
}
if($imputadosordenesDto->getNombre()!=""){
$sql.="nombre='".$imputadosordenesDto->getNombre()."'";
if(($imputadosordenesDto->getPaterno()!="") ||($imputadosordenesDto->getMaterno()!="") ||($imputadosordenesDto->getAlias()!="") ||($imputadosordenesDto->getCveGenero()!="") ||($imputadosordenesDto->getDetenido()!="") ||($imputadosordenesDto->getCveTipoPersona()!="") ||($imputadosordenesDto->getNombreMoral()!="") ||($imputadosordenesDto->getFechaRegistro()!="") ||($imputadosordenesDto->getFechaActualizacion()!="") ||($imputadosordenesDto->getDomicilio()!="") ||($imputadosordenesDto->getTelefono()!="") ||($imputadosordenesDto->getEmail()!="") ){
$sql.=" AND ";
}
}
if($imputadosordenesDto->getPaterno()!=""){
$sql.="paterno='".$imputadosordenesDto->getPaterno()."'";
if(($imputadosordenesDto->getMaterno()!="") ||($imputadosordenesDto->getAlias()!="") ||($imputadosordenesDto->getCveGenero()!="") ||($imputadosordenesDto->getDetenido()!="") ||($imputadosordenesDto->getCveTipoPersona()!="") ||($imputadosordenesDto->getNombreMoral()!="") ||($imputadosordenesDto->getFechaRegistro()!="") ||($imputadosordenesDto->getFechaActualizacion()!="") ||($imputadosordenesDto->getDomicilio()!="") ||($imputadosordenesDto->getTelefono()!="") ||($imputadosordenesDto->getEmail()!="") ){
$sql.=" AND ";
}
}
if($imputadosordenesDto->getMaterno()!=""){
$sql.="materno='".$imputadosordenesDto->getMaterno()."'";
if(($imputadosordenesDto->getAlias()!="") ||($imputadosordenesDto->getCveGenero()!="") ||($imputadosordenesDto->getDetenido()!="") ||($imputadosordenesDto->getCveTipoPersona()!="") ||($imputadosordenesDto->getNombreMoral()!="") ||($imputadosordenesDto->getFechaRegistro()!="") ||($imputadosordenesDto->getFechaActualizacion()!="") ||($imputadosordenesDto->getDomicilio()!="") ||($imputadosordenesDto->getTelefono()!="") ||($imputadosordenesDto->getEmail()!="") ){
$sql.=" AND ";
}
}
if($imputadosordenesDto->getAlias()!=""){
$sql.="alias='".$imputadosordenesDto->getAlias()."'";
if(($imputadosordenesDto->getCveGenero()!="") ||($imputadosordenesDto->getDetenido()!="") ||($imputadosordenesDto->getCveTipoPersona()!="") ||($imputadosordenesDto->getNombreMoral()!="") ||($imputadosordenesDto->getFechaRegistro()!="") ||($imputadosordenesDto->getFechaActualizacion()!="") ||($imputadosordenesDto->getDomicilio()!="") ||($imputadosordenesDto->getTelefono()!="") ||($imputadosordenesDto->getEmail()!="") ){
$sql.=" AND ";
}
}
if($imputadosordenesDto->getCveGenero()!=""){
$sql.="cveGenero='".$imputadosordenesDto->getCveGenero()."'";
if(($imputadosordenesDto->getDetenido()!="") ||($imputadosordenesDto->getCveTipoPersona()!="") ||($imputadosordenesDto->getNombreMoral()!="") ||($imputadosordenesDto->getFechaRegistro()!="") ||($imputadosordenesDto->getFechaActualizacion()!="") ||($imputadosordenesDto->getDomicilio()!="") ||($imputadosordenesDto->getTelefono()!="") ||($imputadosordenesDto->getEmail()!="") ){
$sql.=" AND ";
}
}
if($imputadosordenesDto->getDetenido()!=""){
$sql.="detenido='".$imputadosordenesDto->getDetenido()."'";
if(($imputadosordenesDto->getCveTipoPersona()!="") ||($imputadosordenesDto->getNombreMoral()!="") ||($imputadosordenesDto->getFechaRegistro()!="") ||($imputadosordenesDto->getFechaActualizacion()!="") ||($imputadosordenesDto->getDomicilio()!="") ||($imputadosordenesDto->getTelefono()!="") ||($imputadosordenesDto->getEmail()!="") ){
$sql.=" AND ";
}
}
if($imputadosordenesDto->getCveTipoPersona()!=""){
$sql.="cveTipoPersona='".$imputadosordenesDto->getCveTipoPersona()."'";
if(($imputadosordenesDto->getNombreMoral()!="") ||($imputadosordenesDto->getFechaRegistro()!="") ||($imputadosordenesDto->getFechaActualizacion()!="") ||($imputadosordenesDto->getDomicilio()!="") ||($imputadosordenesDto->getTelefono()!="") ||($imputadosordenesDto->getEmail()!="") ){
$sql.=" AND ";
}
}
if($imputadosordenesDto->getNombreMoral()!=""){
$sql.="nombreMoral='".$imputadosordenesDto->getNombreMoral()."'";
if(($imputadosordenesDto->getFechaRegistro()!="") ||($imputadosordenesDto->getFechaActualizacion()!="") ||($imputadosordenesDto->getDomicilio()!="") ||($imputadosordenesDto->getTelefono()!="") ||($imputadosordenesDto->getEmail()!="") ){
$sql.=" AND ";
}
}
if($imputadosordenesDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$imputadosordenesDto->getFechaRegistro()."'";
if(($imputadosordenesDto->getFechaActualizacion()!="") ||($imputadosordenesDto->getDomicilio()!="") ||($imputadosordenesDto->getTelefono()!="") ||($imputadosordenesDto->getEmail()!="") ){
$sql.=" AND ";
}
}
if($imputadosordenesDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$imputadosordenesDto->getFechaActualizacion()."'";
if(($imputadosordenesDto->getDomicilio()!="") ||($imputadosordenesDto->getTelefono()!="") ||($imputadosordenesDto->getEmail()!="") ){
$sql.=" AND ";
}
}
if($imputadosordenesDto->getDomicilio()!=""){
$sql.="domicilio='".$imputadosordenesDto->getDomicilio()."'";
if(($imputadosordenesDto->getTelefono()!="") ||($imputadosordenesDto->getEmail()!="") ){
$sql.=" AND ";
}
}
if($imputadosordenesDto->getTelefono()!=""){
$sql.="telefono='".$imputadosordenesDto->getTelefono()."'";
if(($imputadosordenesDto->getEmail()!="") ){
$sql.=" AND ";
}
}
if($imputadosordenesDto->getEmail()!=""){
$sql.="email='".$imputadosordenesDto->getEmail()."'";
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
$tmp[$contador] = new ImputadosordenesDTO();
$tmp[$contador]->setIdImputadoOrden($row["idImputadoOrden"]);
$tmp[$contador]->setIdSolicitudOrden($row["idSolicitudOrden"]);
$tmp[$contador]->setActivo($row["activo"]);
$tmp[$contador]->setNombre($row["nombre"]);
$tmp[$contador]->setPaterno($row["paterno"]);
$tmp[$contador]->setMaterno($row["materno"]);
$tmp[$contador]->setAlias($row["alias"]);
$tmp[$contador]->setCveGenero($row["cveGenero"]);
$tmp[$contador]->setDetenido($row["detenido"]);
$tmp[$contador]->setCveTipoPersona($row["cveTipoPersona"]);
$tmp[$contador]->setNombreMoral($row["nombreMoral"]);
$tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
$tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
$tmp[$contador]->setDomicilio($row["domicilio"]);
$tmp[$contador]->setTelefono($row["telefono"]);
$tmp[$contador]->setEmail($row["email"]);
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