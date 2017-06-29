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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/ofendidosordenes/OfendidosordenesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class OfendidosordenesDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertOfendidosordenes($ofendidosordenesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblofendidosordenes(";
if($ofendidosordenesDto->getIdOfendidoOrden()!=""){
$sql.="idOfendidoOrden";
if(($ofendidosordenesDto->getIdSolicitudOrden()!="") ||($ofendidosordenesDto->getActivo()!="") ||($ofendidosordenesDto->getNombre()!="") ||($ofendidosordenesDto->getPaterno()!="") ||($ofendidosordenesDto->getMaterno()!="") ||($ofendidosordenesDto->getCveTipoPersona()!="") ||($ofendidosordenesDto->getNombreMoral()!="") ||($ofendidosordenesDto->getCveGenero()!="") ||($ofendidosordenesDto->getDomicilio()!="") ||($ofendidosordenesDto->getTelefono()!="") ||($ofendidosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidosordenesDto->getIdSolicitudOrden()!=""){
$sql.="idSolicitudOrden";
if(($ofendidosordenesDto->getActivo()!="") ||($ofendidosordenesDto->getNombre()!="") ||($ofendidosordenesDto->getPaterno()!="") ||($ofendidosordenesDto->getMaterno()!="") ||($ofendidosordenesDto->getCveTipoPersona()!="") ||($ofendidosordenesDto->getNombreMoral()!="") ||($ofendidosordenesDto->getCveGenero()!="") ||($ofendidosordenesDto->getDomicilio()!="") ||($ofendidosordenesDto->getTelefono()!="") ||($ofendidosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidosordenesDto->getActivo()!=""){
$sql.="activo";
if(($ofendidosordenesDto->getNombre()!="") ||($ofendidosordenesDto->getPaterno()!="") ||($ofendidosordenesDto->getMaterno()!="") ||($ofendidosordenesDto->getCveTipoPersona()!="") ||($ofendidosordenesDto->getNombreMoral()!="") ||($ofendidosordenesDto->getCveGenero()!="") ||($ofendidosordenesDto->getDomicilio()!="") ||($ofendidosordenesDto->getTelefono()!="") ||($ofendidosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidosordenesDto->getNombre()!=""){
$sql.="nombre";
if(($ofendidosordenesDto->getPaterno()!="") ||($ofendidosordenesDto->getMaterno()!="") ||($ofendidosordenesDto->getCveTipoPersona()!="") ||($ofendidosordenesDto->getNombreMoral()!="") ||($ofendidosordenesDto->getCveGenero()!="") ||($ofendidosordenesDto->getDomicilio()!="") ||($ofendidosordenesDto->getTelefono()!="") ||($ofendidosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidosordenesDto->getPaterno()!=""){
$sql.="paterno";
if(($ofendidosordenesDto->getMaterno()!="") ||($ofendidosordenesDto->getCveTipoPersona()!="") ||($ofendidosordenesDto->getNombreMoral()!="") ||($ofendidosordenesDto->getCveGenero()!="") ||($ofendidosordenesDto->getDomicilio()!="") ||($ofendidosordenesDto->getTelefono()!="") ||($ofendidosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidosordenesDto->getMaterno()!=""){
$sql.="materno";
if(($ofendidosordenesDto->getCveTipoPersona()!="") ||($ofendidosordenesDto->getNombreMoral()!="") ||($ofendidosordenesDto->getCveGenero()!="") ||($ofendidosordenesDto->getDomicilio()!="") ||($ofendidosordenesDto->getTelefono()!="") ||($ofendidosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidosordenesDto->getCveTipoPersona()!=""){
$sql.="cveTipoPersona";
if(($ofendidosordenesDto->getNombreMoral()!="") ||($ofendidosordenesDto->getCveGenero()!="") ||($ofendidosordenesDto->getDomicilio()!="") ||($ofendidosordenesDto->getTelefono()!="") ||($ofendidosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidosordenesDto->getNombreMoral()!=""){
$sql.="nombreMoral";
if(($ofendidosordenesDto->getCveGenero()!="") ||($ofendidosordenesDto->getDomicilio()!="") ||($ofendidosordenesDto->getTelefono()!="") ||($ofendidosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidosordenesDto->getCveGenero()!=""){
$sql.="cveGenero";
if(($ofendidosordenesDto->getDomicilio()!="") ||($ofendidosordenesDto->getTelefono()!="") ||($ofendidosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidosordenesDto->getDomicilio()!=""){
$sql.="domicilio";
if(($ofendidosordenesDto->getTelefono()!="") ||($ofendidosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidosordenesDto->getTelefono()!=""){
$sql.="telefono";
if(($ofendidosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidosordenesDto->getEmail()!=""){
$sql.="email";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($ofendidosordenesDto->getIdOfendidoOrden()!=""){
$sql.="'".$ofendidosordenesDto->getIdOfendidoOrden()."'";
if(($ofendidosordenesDto->getIdSolicitudOrden()!="") ||($ofendidosordenesDto->getActivo()!="") ||($ofendidosordenesDto->getNombre()!="") ||($ofendidosordenesDto->getPaterno()!="") ||($ofendidosordenesDto->getMaterno()!="") ||($ofendidosordenesDto->getCveTipoPersona()!="") ||($ofendidosordenesDto->getNombreMoral()!="") ||($ofendidosordenesDto->getCveGenero()!="") ||($ofendidosordenesDto->getDomicilio()!="") ||($ofendidosordenesDto->getTelefono()!="") ||($ofendidosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidosordenesDto->getIdSolicitudOrden()!=""){
$sql.="'".$ofendidosordenesDto->getIdSolicitudOrden()."'";
if(($ofendidosordenesDto->getActivo()!="") ||($ofendidosordenesDto->getNombre()!="") ||($ofendidosordenesDto->getPaterno()!="") ||($ofendidosordenesDto->getMaterno()!="") ||($ofendidosordenesDto->getCveTipoPersona()!="") ||($ofendidosordenesDto->getNombreMoral()!="") ||($ofendidosordenesDto->getCveGenero()!="") ||($ofendidosordenesDto->getDomicilio()!="") ||($ofendidosordenesDto->getTelefono()!="") ||($ofendidosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidosordenesDto->getActivo()!=""){
$sql.="'".$ofendidosordenesDto->getActivo()."'";
if(($ofendidosordenesDto->getNombre()!="") ||($ofendidosordenesDto->getPaterno()!="") ||($ofendidosordenesDto->getMaterno()!="") ||($ofendidosordenesDto->getCveTipoPersona()!="") ||($ofendidosordenesDto->getNombreMoral()!="") ||($ofendidosordenesDto->getCveGenero()!="") ||($ofendidosordenesDto->getDomicilio()!="") ||($ofendidosordenesDto->getTelefono()!="") ||($ofendidosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidosordenesDto->getFechaRegistro()!=""){
if(($ofendidosordenesDto->getNombre()!="") ||($ofendidosordenesDto->getPaterno()!="") ||($ofendidosordenesDto->getMaterno()!="") ||($ofendidosordenesDto->getCveTipoPersona()!="") ||($ofendidosordenesDto->getNombreMoral()!="") ||($ofendidosordenesDto->getCveGenero()!="") ||($ofendidosordenesDto->getDomicilio()!="") ||($ofendidosordenesDto->getTelefono()!="") ||($ofendidosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidosordenesDto->getFechaActualizacion()!=""){
if(($ofendidosordenesDto->getNombre()!="") ||($ofendidosordenesDto->getPaterno()!="") ||($ofendidosordenesDto->getMaterno()!="") ||($ofendidosordenesDto->getCveTipoPersona()!="") ||($ofendidosordenesDto->getNombreMoral()!="") ||($ofendidosordenesDto->getCveGenero()!="") ||($ofendidosordenesDto->getDomicilio()!="") ||($ofendidosordenesDto->getTelefono()!="") ||($ofendidosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidosordenesDto->getNombre()!=""){
$sql.="'".$ofendidosordenesDto->getNombre()."'";
if(($ofendidosordenesDto->getPaterno()!="") ||($ofendidosordenesDto->getMaterno()!="") ||($ofendidosordenesDto->getCveTipoPersona()!="") ||($ofendidosordenesDto->getNombreMoral()!="") ||($ofendidosordenesDto->getCveGenero()!="") ||($ofendidosordenesDto->getDomicilio()!="") ||($ofendidosordenesDto->getTelefono()!="") ||($ofendidosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidosordenesDto->getPaterno()!=""){
$sql.="'".$ofendidosordenesDto->getPaterno()."'";
if(($ofendidosordenesDto->getMaterno()!="") ||($ofendidosordenesDto->getCveTipoPersona()!="") ||($ofendidosordenesDto->getNombreMoral()!="") ||($ofendidosordenesDto->getCveGenero()!="") ||($ofendidosordenesDto->getDomicilio()!="") ||($ofendidosordenesDto->getTelefono()!="") ||($ofendidosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidosordenesDto->getMaterno()!=""){
$sql.="'".$ofendidosordenesDto->getMaterno()."'";
if(($ofendidosordenesDto->getCveTipoPersona()!="") ||($ofendidosordenesDto->getNombreMoral()!="") ||($ofendidosordenesDto->getCveGenero()!="") ||($ofendidosordenesDto->getDomicilio()!="") ||($ofendidosordenesDto->getTelefono()!="") ||($ofendidosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidosordenesDto->getCveTipoPersona()!=""){
$sql.="'".$ofendidosordenesDto->getCveTipoPersona()."'";
if(($ofendidosordenesDto->getNombreMoral()!="") ||($ofendidosordenesDto->getCveGenero()!="") ||($ofendidosordenesDto->getDomicilio()!="") ||($ofendidosordenesDto->getTelefono()!="") ||($ofendidosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidosordenesDto->getNombreMoral()!=""){
$sql.="'".$ofendidosordenesDto->getNombreMoral()."'";
if(($ofendidosordenesDto->getCveGenero()!="") ||($ofendidosordenesDto->getDomicilio()!="") ||($ofendidosordenesDto->getTelefono()!="") ||($ofendidosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidosordenesDto->getCveGenero()!=""){
$sql.="'".$ofendidosordenesDto->getCveGenero()."'";
if(($ofendidosordenesDto->getDomicilio()!="") ||($ofendidosordenesDto->getTelefono()!="") ||($ofendidosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidosordenesDto->getDomicilio()!=""){
$sql.="'".$ofendidosordenesDto->getDomicilio()."'";
if(($ofendidosordenesDto->getTelefono()!="") ||($ofendidosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidosordenesDto->getTelefono()!=""){
$sql.="'".$ofendidosordenesDto->getTelefono()."'";
if(($ofendidosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidosordenesDto->getEmail()!=""){
$sql.="'".$ofendidosordenesDto->getEmail()."'";
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new OfendidosordenesDTO();
$tmp->setidOfendidoOrden($this->_proveedor->lastID());
$tmp = $this->selectOfendidosordenes($tmp,"",$this->_proveedor);
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
public function updateOfendidosordenes($ofendidosordenesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblofendidosordenes SET ";
if($ofendidosordenesDto->getIdOfendidoOrden()!=""){
$sql.="idOfendidoOrden='".$ofendidosordenesDto->getIdOfendidoOrden()."'";
if(($ofendidosordenesDto->getIdSolicitudOrden()!="") ||($ofendidosordenesDto->getActivo()!="") ||($ofendidosordenesDto->getFechaRegistro()!="") ||($ofendidosordenesDto->getFechaActualizacion()!="") ||($ofendidosordenesDto->getNombre()!="") ||($ofendidosordenesDto->getPaterno()!="") ||($ofendidosordenesDto->getMaterno()!="") ||($ofendidosordenesDto->getCveTipoPersona()!="") ||($ofendidosordenesDto->getNombreMoral()!="") ||($ofendidosordenesDto->getCveGenero()!="") ||($ofendidosordenesDto->getDomicilio()!="") ||($ofendidosordenesDto->getTelefono()!="") ||($ofendidosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidosordenesDto->getIdSolicitudOrden()!=""){
$sql.="idSolicitudOrden='".$ofendidosordenesDto->getIdSolicitudOrden()."'";
if(($ofendidosordenesDto->getActivo()!="") ||($ofendidosordenesDto->getFechaRegistro()!="") ||($ofendidosordenesDto->getFechaActualizacion()!="") ||($ofendidosordenesDto->getNombre()!="") ||($ofendidosordenesDto->getPaterno()!="") ||($ofendidosordenesDto->getMaterno()!="") ||($ofendidosordenesDto->getCveTipoPersona()!="") ||($ofendidosordenesDto->getNombreMoral()!="") ||($ofendidosordenesDto->getCveGenero()!="") ||($ofendidosordenesDto->getDomicilio()!="") ||($ofendidosordenesDto->getTelefono()!="") ||($ofendidosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidosordenesDto->getActivo()!=""){
$sql.="activo='".$ofendidosordenesDto->getActivo()."'";
if(($ofendidosordenesDto->getFechaRegistro()!="") ||($ofendidosordenesDto->getFechaActualizacion()!="") ||($ofendidosordenesDto->getNombre()!="") ||($ofendidosordenesDto->getPaterno()!="") ||($ofendidosordenesDto->getMaterno()!="") ||($ofendidosordenesDto->getCveTipoPersona()!="") ||($ofendidosordenesDto->getNombreMoral()!="") ||($ofendidosordenesDto->getCveGenero()!="") ||($ofendidosordenesDto->getDomicilio()!="") ||($ofendidosordenesDto->getTelefono()!="") ||($ofendidosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidosordenesDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$ofendidosordenesDto->getFechaRegistro()."'";
if(($ofendidosordenesDto->getFechaActualizacion()!="") ||($ofendidosordenesDto->getNombre()!="") ||($ofendidosordenesDto->getPaterno()!="") ||($ofendidosordenesDto->getMaterno()!="") ||($ofendidosordenesDto->getCveTipoPersona()!="") ||($ofendidosordenesDto->getNombreMoral()!="") ||($ofendidosordenesDto->getCveGenero()!="") ||($ofendidosordenesDto->getDomicilio()!="") ||($ofendidosordenesDto->getTelefono()!="") ||($ofendidosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidosordenesDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$ofendidosordenesDto->getFechaActualizacion()."'";
if(($ofendidosordenesDto->getNombre()!="") ||($ofendidosordenesDto->getPaterno()!="") ||($ofendidosordenesDto->getMaterno()!="") ||($ofendidosordenesDto->getCveTipoPersona()!="") ||($ofendidosordenesDto->getNombreMoral()!="") ||($ofendidosordenesDto->getCveGenero()!="") ||($ofendidosordenesDto->getDomicilio()!="") ||($ofendidosordenesDto->getTelefono()!="") ||($ofendidosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidosordenesDto->getNombre()!=""){
$sql.="nombre='".$ofendidosordenesDto->getNombre()."'";
if(($ofendidosordenesDto->getPaterno()!="") ||($ofendidosordenesDto->getMaterno()!="") ||($ofendidosordenesDto->getCveTipoPersona()!="") ||($ofendidosordenesDto->getNombreMoral()!="") ||($ofendidosordenesDto->getCveGenero()!="") ||($ofendidosordenesDto->getDomicilio()!="") ||($ofendidosordenesDto->getTelefono()!="") ||($ofendidosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidosordenesDto->getPaterno()!=""){
$sql.="paterno='".$ofendidosordenesDto->getPaterno()."'";
if(($ofendidosordenesDto->getMaterno()!="") ||($ofendidosordenesDto->getCveTipoPersona()!="") ||($ofendidosordenesDto->getNombreMoral()!="") ||($ofendidosordenesDto->getCveGenero()!="") ||($ofendidosordenesDto->getDomicilio()!="") ||($ofendidosordenesDto->getTelefono()!="") ||($ofendidosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidosordenesDto->getMaterno()!=""){
$sql.="materno='".$ofendidosordenesDto->getMaterno()."'";
if(($ofendidosordenesDto->getCveTipoPersona()!="") ||($ofendidosordenesDto->getNombreMoral()!="") ||($ofendidosordenesDto->getCveGenero()!="") ||($ofendidosordenesDto->getDomicilio()!="") ||($ofendidosordenesDto->getTelefono()!="") ||($ofendidosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidosordenesDto->getCveTipoPersona()!=""){
$sql.="cveTipoPersona='".$ofendidosordenesDto->getCveTipoPersona()."'";
if(($ofendidosordenesDto->getNombreMoral()!="") ||($ofendidosordenesDto->getCveGenero()!="") ||($ofendidosordenesDto->getDomicilio()!="") ||($ofendidosordenesDto->getTelefono()!="") ||($ofendidosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidosordenesDto->getNombreMoral()!=""){
$sql.="nombreMoral='".$ofendidosordenesDto->getNombreMoral()."'";
if(($ofendidosordenesDto->getCveGenero()!="") ||($ofendidosordenesDto->getDomicilio()!="") ||($ofendidosordenesDto->getTelefono()!="") ||($ofendidosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidosordenesDto->getCveGenero()!=""){
$sql.="cveGenero='".$ofendidosordenesDto->getCveGenero()."'";
if(($ofendidosordenesDto->getDomicilio()!="") ||($ofendidosordenesDto->getTelefono()!="") ||($ofendidosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidosordenesDto->getDomicilio()!=""){
$sql.="domicilio='".$ofendidosordenesDto->getDomicilio()."'";
if(($ofendidosordenesDto->getTelefono()!="") ||($ofendidosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidosordenesDto->getTelefono()!=""){
$sql.="telefono='".$ofendidosordenesDto->getTelefono()."'";
if(($ofendidosordenesDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidosordenesDto->getEmail()!=""){
$sql.="email='".$ofendidosordenesDto->getEmail()."'";
}
$sql.=" WHERE idOfendidoOrden='".$ofendidosordenesDto->getIdOfendidoOrden()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new OfendidosordenesDTO();
$tmp->setidOfendidoOrden($ofendidosordenesDto->getIdOfendidoOrden());
$tmp = $this->selectOfendidosordenes($tmp,"",$this->_proveedor);
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
public function deleteOfendidosordenes($ofendidosordenesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblofendidosordenes  WHERE idOfendidoOrden='".$ofendidosordenesDto->getIdOfendidoOrden()."'";
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
public function selectOfendidosordenes($ofendidosordenesDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idOfendidoOrden,idSolicitudOrden,activo,fechaRegistro,fechaActualizacion,nombre,paterno,materno,cveTipoPersona,nombreMoral,cveGenero,domicilio,telefono,email FROM tblofendidosordenes ";
if(($ofendidosordenesDto->getIdOfendidoOrden()!="") ||($ofendidosordenesDto->getIdSolicitudOrden()!="") ||($ofendidosordenesDto->getActivo()!="") ||($ofendidosordenesDto->getFechaRegistro()!="") ||($ofendidosordenesDto->getFechaActualizacion()!="") ||($ofendidosordenesDto->getNombre()!="") ||($ofendidosordenesDto->getPaterno()!="") ||($ofendidosordenesDto->getMaterno()!="") ||($ofendidosordenesDto->getCveTipoPersona()!="") ||($ofendidosordenesDto->getNombreMoral()!="") ||($ofendidosordenesDto->getCveGenero()!="") ||($ofendidosordenesDto->getDomicilio()!="") ||($ofendidosordenesDto->getTelefono()!="") ||($ofendidosordenesDto->getEmail()!="") ){
$sql.=" WHERE ";
}
if($ofendidosordenesDto->getIdOfendidoOrden()!=""){
$sql.="idOfendidoOrden='".$ofendidosordenesDto->getIdOfendidoOrden()."'";
if(($ofendidosordenesDto->getIdSolicitudOrden()!="") ||($ofendidosordenesDto->getActivo()!="") ||($ofendidosordenesDto->getFechaRegistro()!="") ||($ofendidosordenesDto->getFechaActualizacion()!="") ||($ofendidosordenesDto->getNombre()!="") ||($ofendidosordenesDto->getPaterno()!="") ||($ofendidosordenesDto->getMaterno()!="") ||($ofendidosordenesDto->getCveTipoPersona()!="") ||($ofendidosordenesDto->getNombreMoral()!="") ||($ofendidosordenesDto->getCveGenero()!="") ||($ofendidosordenesDto->getDomicilio()!="") ||($ofendidosordenesDto->getTelefono()!="") ||($ofendidosordenesDto->getEmail()!="") ){
$sql.=" AND ";
}
}
if($ofendidosordenesDto->getIdSolicitudOrden()!=""){
$sql.="idSolicitudOrden='".$ofendidosordenesDto->getIdSolicitudOrden()."'";
if(($ofendidosordenesDto->getActivo()!="") ||($ofendidosordenesDto->getFechaRegistro()!="") ||($ofendidosordenesDto->getFechaActualizacion()!="") ||($ofendidosordenesDto->getNombre()!="") ||($ofendidosordenesDto->getPaterno()!="") ||($ofendidosordenesDto->getMaterno()!="") ||($ofendidosordenesDto->getCveTipoPersona()!="") ||($ofendidosordenesDto->getNombreMoral()!="") ||($ofendidosordenesDto->getCveGenero()!="") ||($ofendidosordenesDto->getDomicilio()!="") ||($ofendidosordenesDto->getTelefono()!="") ||($ofendidosordenesDto->getEmail()!="") ){
$sql.=" AND ";
}
}
if($ofendidosordenesDto->getActivo()!=""){
$sql.="activo='".$ofendidosordenesDto->getActivo()."'";
if(($ofendidosordenesDto->getFechaRegistro()!="") ||($ofendidosordenesDto->getFechaActualizacion()!="") ||($ofendidosordenesDto->getNombre()!="") ||($ofendidosordenesDto->getPaterno()!="") ||($ofendidosordenesDto->getMaterno()!="") ||($ofendidosordenesDto->getCveTipoPersona()!="") ||($ofendidosordenesDto->getNombreMoral()!="") ||($ofendidosordenesDto->getCveGenero()!="") ||($ofendidosordenesDto->getDomicilio()!="") ||($ofendidosordenesDto->getTelefono()!="") ||($ofendidosordenesDto->getEmail()!="") ){
$sql.=" AND ";
}
}
if($ofendidosordenesDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$ofendidosordenesDto->getFechaRegistro()."'";
if(($ofendidosordenesDto->getFechaActualizacion()!="") ||($ofendidosordenesDto->getNombre()!="") ||($ofendidosordenesDto->getPaterno()!="") ||($ofendidosordenesDto->getMaterno()!="") ||($ofendidosordenesDto->getCveTipoPersona()!="") ||($ofendidosordenesDto->getNombreMoral()!="") ||($ofendidosordenesDto->getCveGenero()!="") ||($ofendidosordenesDto->getDomicilio()!="") ||($ofendidosordenesDto->getTelefono()!="") ||($ofendidosordenesDto->getEmail()!="") ){
$sql.=" AND ";
}
}
if($ofendidosordenesDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$ofendidosordenesDto->getFechaActualizacion()."'";
if(($ofendidosordenesDto->getNombre()!="") ||($ofendidosordenesDto->getPaterno()!="") ||($ofendidosordenesDto->getMaterno()!="") ||($ofendidosordenesDto->getCveTipoPersona()!="") ||($ofendidosordenesDto->getNombreMoral()!="") ||($ofendidosordenesDto->getCveGenero()!="") ||($ofendidosordenesDto->getDomicilio()!="") ||($ofendidosordenesDto->getTelefono()!="") ||($ofendidosordenesDto->getEmail()!="") ){
$sql.=" AND ";
}
}
if($ofendidosordenesDto->getNombre()!=""){
$sql.="nombre='".$ofendidosordenesDto->getNombre()."'";
if(($ofendidosordenesDto->getPaterno()!="") ||($ofendidosordenesDto->getMaterno()!="") ||($ofendidosordenesDto->getCveTipoPersona()!="") ||($ofendidosordenesDto->getNombreMoral()!="") ||($ofendidosordenesDto->getCveGenero()!="") ||($ofendidosordenesDto->getDomicilio()!="") ||($ofendidosordenesDto->getTelefono()!="") ||($ofendidosordenesDto->getEmail()!="") ){
$sql.=" AND ";
}
}
if($ofendidosordenesDto->getPaterno()!=""){
$sql.="paterno='".$ofendidosordenesDto->getPaterno()."'";
if(($ofendidosordenesDto->getMaterno()!="") ||($ofendidosordenesDto->getCveTipoPersona()!="") ||($ofendidosordenesDto->getNombreMoral()!="") ||($ofendidosordenesDto->getCveGenero()!="") ||($ofendidosordenesDto->getDomicilio()!="") ||($ofendidosordenesDto->getTelefono()!="") ||($ofendidosordenesDto->getEmail()!="") ){
$sql.=" AND ";
}
}
if($ofendidosordenesDto->getMaterno()!=""){
$sql.="materno='".$ofendidosordenesDto->getMaterno()."'";
if(($ofendidosordenesDto->getCveTipoPersona()!="") ||($ofendidosordenesDto->getNombreMoral()!="") ||($ofendidosordenesDto->getCveGenero()!="") ||($ofendidosordenesDto->getDomicilio()!="") ||($ofendidosordenesDto->getTelefono()!="") ||($ofendidosordenesDto->getEmail()!="") ){
$sql.=" AND ";
}
}
if($ofendidosordenesDto->getCveTipoPersona()!=""){
$sql.="cveTipoPersona='".$ofendidosordenesDto->getCveTipoPersona()."'";
if(($ofendidosordenesDto->getNombreMoral()!="") ||($ofendidosordenesDto->getCveGenero()!="") ||($ofendidosordenesDto->getDomicilio()!="") ||($ofendidosordenesDto->getTelefono()!="") ||($ofendidosordenesDto->getEmail()!="") ){
$sql.=" AND ";
}
}
if($ofendidosordenesDto->getNombreMoral()!=""){
$sql.="nombreMoral='".$ofendidosordenesDto->getNombreMoral()."'";
if(($ofendidosordenesDto->getCveGenero()!="") ||($ofendidosordenesDto->getDomicilio()!="") ||($ofendidosordenesDto->getTelefono()!="") ||($ofendidosordenesDto->getEmail()!="") ){
$sql.=" AND ";
}
}
if($ofendidosordenesDto->getCveGenero()!=""){
$sql.="cveGenero='".$ofendidosordenesDto->getCveGenero()."'";
if(($ofendidosordenesDto->getDomicilio()!="") ||($ofendidosordenesDto->getTelefono()!="") ||($ofendidosordenesDto->getEmail()!="") ){
$sql.=" AND ";
}
}
if($ofendidosordenesDto->getDomicilio()!=""){
$sql.="domicilio='".$ofendidosordenesDto->getDomicilio()."'";
if(($ofendidosordenesDto->getTelefono()!="") ||($ofendidosordenesDto->getEmail()!="") ){
$sql.=" AND ";
}
}
if($ofendidosordenesDto->getTelefono()!=""){
$sql.="telefono='".$ofendidosordenesDto->getTelefono()."'";
if(($ofendidosordenesDto->getEmail()!="") ){
$sql.=" AND ";
}
}
if($ofendidosordenesDto->getEmail()!=""){
$sql.="email='".$ofendidosordenesDto->getEmail()."'";
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
$tmp[$contador] = new OfendidosordenesDTO();
$tmp[$contador]->setIdOfendidoOrden($row["idOfendidoOrden"]);
$tmp[$contador]->setIdSolicitudOrden($row["idSolicitudOrden"]);
$tmp[$contador]->setActivo($row["activo"]);
$tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
$tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
$tmp[$contador]->setNombre($row["nombre"]);
$tmp[$contador]->setPaterno($row["paterno"]);
$tmp[$contador]->setMaterno($row["materno"]);
$tmp[$contador]->setCveTipoPersona($row["cveTipoPersona"]);
$tmp[$contador]->setNombreMoral($row["nombreMoral"]);
$tmp[$contador]->setCveGenero($row["cveGenero"]);
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