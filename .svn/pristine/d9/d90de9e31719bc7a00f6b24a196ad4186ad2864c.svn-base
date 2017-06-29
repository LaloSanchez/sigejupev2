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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/ofendidoscateos/OfendidoscateosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class OfendidoscateosDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertOfendidoscateos($ofendidoscateosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblofendidoscateos(";
if($ofendidoscateosDto->getidOfendidoCateo()!=""){
$sql.="idOfendidoCateo";
if(($ofendidoscateosDto->getIdSolicitudCateo()!="") ||($ofendidoscateosDto->getActivo()!="") ||($ofendidoscateosDto->getNombre()!="") ||($ofendidoscateosDto->getPaterno()!="") ||($ofendidoscateosDto->getMaterno()!="") ||($ofendidoscateosDto->getCveTipoPersona()!="") ||($ofendidoscateosDto->getNombreMoral()!="") ||($ofendidoscateosDto->getCveGenero()!="") ||($ofendidoscateosDto->getDomicilio()!="") ||($ofendidoscateosDto->getTelefono()!="") ||($ofendidoscateosDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidoscateosDto->getidSolicitudCateo()!=""){
$sql.="idSolicitudCateo";
if(($ofendidoscateosDto->getActivo()!="") ||($ofendidoscateosDto->getNombre()!="") ||($ofendidoscateosDto->getPaterno()!="") ||($ofendidoscateosDto->getMaterno()!="") ||($ofendidoscateosDto->getCveTipoPersona()!="") ||($ofendidoscateosDto->getNombreMoral()!="") ||($ofendidoscateosDto->getCveGenero()!="") ||($ofendidoscateosDto->getDomicilio()!="") ||($ofendidoscateosDto->getTelefono()!="") ||($ofendidoscateosDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidoscateosDto->getactivo()!=""){
$sql.="activo";
if(($ofendidoscateosDto->getNombre()!="") ||($ofendidoscateosDto->getPaterno()!="") ||($ofendidoscateosDto->getMaterno()!="") ||($ofendidoscateosDto->getCveTipoPersona()!="") ||($ofendidoscateosDto->getNombreMoral()!="") ||($ofendidoscateosDto->getCveGenero()!="") ||($ofendidoscateosDto->getDomicilio()!="") ||($ofendidoscateosDto->getTelefono()!="") ||($ofendidoscateosDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidoscateosDto->getnombre()!=""){
$sql.="nombre";
if(($ofendidoscateosDto->getPaterno()!="") ||($ofendidoscateosDto->getMaterno()!="") ||($ofendidoscateosDto->getCveTipoPersona()!="") ||($ofendidoscateosDto->getNombreMoral()!="") ||($ofendidoscateosDto->getCveGenero()!="") ||($ofendidoscateosDto->getDomicilio()!="") ||($ofendidoscateosDto->getTelefono()!="") ||($ofendidoscateosDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidoscateosDto->getpaterno()!=""){
$sql.="paterno";
if(($ofendidoscateosDto->getMaterno()!="") ||($ofendidoscateosDto->getCveTipoPersona()!="") ||($ofendidoscateosDto->getNombreMoral()!="") ||($ofendidoscateosDto->getCveGenero()!="") ||($ofendidoscateosDto->getDomicilio()!="") ||($ofendidoscateosDto->getTelefono()!="") ||($ofendidoscateosDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidoscateosDto->getmaterno()!=""){
$sql.="materno";
if(($ofendidoscateosDto->getCveTipoPersona()!="") ||($ofendidoscateosDto->getNombreMoral()!="") ||($ofendidoscateosDto->getCveGenero()!="") ||($ofendidoscateosDto->getDomicilio()!="") ||($ofendidoscateosDto->getTelefono()!="") ||($ofendidoscateosDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidoscateosDto->getcveTipoPersona()!=""){
$sql.="cveTipoPersona";
if(($ofendidoscateosDto->getNombreMoral()!="") ||($ofendidoscateosDto->getCveGenero()!="") ||($ofendidoscateosDto->getDomicilio()!="") ||($ofendidoscateosDto->getTelefono()!="") ||($ofendidoscateosDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidoscateosDto->getnombreMoral()!=""){
$sql.="nombreMoral";
if(($ofendidoscateosDto->getCveGenero()!="") ||($ofendidoscateosDto->getDomicilio()!="") ||($ofendidoscateosDto->getTelefono()!="") ||($ofendidoscateosDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidoscateosDto->getcveGenero()!=""){
$sql.="cveGenero";
if(($ofendidoscateosDto->getDomicilio()!="") ||($ofendidoscateosDto->getTelefono()!="") ||($ofendidoscateosDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidoscateosDto->getdomicilio()!=""){
$sql.="domicilio";
if(($ofendidoscateosDto->getTelefono()!="") ||($ofendidoscateosDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidoscateosDto->gettelefono()!=""){
$sql.="telefono";
if(($ofendidoscateosDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidoscateosDto->getemail()!=""){
$sql.="email";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($ofendidoscateosDto->getidOfendidoCateo()!=""){
$sql.="'".$ofendidoscateosDto->getidOfendidoCateo()."'";
if(($ofendidoscateosDto->getIdSolicitudCateo()!="") ||($ofendidoscateosDto->getActivo()!="") ||($ofendidoscateosDto->getNombre()!="") ||($ofendidoscateosDto->getPaterno()!="") ||($ofendidoscateosDto->getMaterno()!="") ||($ofendidoscateosDto->getCveTipoPersona()!="") ||($ofendidoscateosDto->getNombreMoral()!="") ||($ofendidoscateosDto->getCveGenero()!="") ||($ofendidoscateosDto->getDomicilio()!="") ||($ofendidoscateosDto->getTelefono()!="") ||($ofendidoscateosDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidoscateosDto->getidSolicitudCateo()!=""){
$sql.="'".$ofendidoscateosDto->getidSolicitudCateo()."'";
if(($ofendidoscateosDto->getActivo()!="") ||($ofendidoscateosDto->getNombre()!="") ||($ofendidoscateosDto->getPaterno()!="") ||($ofendidoscateosDto->getMaterno()!="") ||($ofendidoscateosDto->getCveTipoPersona()!="") ||($ofendidoscateosDto->getNombreMoral()!="") ||($ofendidoscateosDto->getCveGenero()!="") ||($ofendidoscateosDto->getDomicilio()!="") ||($ofendidoscateosDto->getTelefono()!="") ||($ofendidoscateosDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidoscateosDto->getactivo()!=""){
$sql.="'".$ofendidoscateosDto->getactivo()."'";
if(($ofendidoscateosDto->getNombre()!="") ||($ofendidoscateosDto->getPaterno()!="") ||($ofendidoscateosDto->getMaterno()!="") ||($ofendidoscateosDto->getCveTipoPersona()!="") ||($ofendidoscateosDto->getNombreMoral()!="") ||($ofendidoscateosDto->getCveGenero()!="") ||($ofendidoscateosDto->getDomicilio()!="") ||($ofendidoscateosDto->getTelefono()!="") ||($ofendidoscateosDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidoscateosDto->getfechaRegistro()!=""){
if(($ofendidoscateosDto->getNombre()!="") ||($ofendidoscateosDto->getPaterno()!="") ||($ofendidoscateosDto->getMaterno()!="") ||($ofendidoscateosDto->getCveTipoPersona()!="") ||($ofendidoscateosDto->getNombreMoral()!="") ||($ofendidoscateosDto->getCveGenero()!="") ||($ofendidoscateosDto->getDomicilio()!="") ||($ofendidoscateosDto->getTelefono()!="") ||($ofendidoscateosDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidoscateosDto->getfechaActualizacion()!=""){
if(($ofendidoscateosDto->getNombre()!="") ||($ofendidoscateosDto->getPaterno()!="") ||($ofendidoscateosDto->getMaterno()!="") ||($ofendidoscateosDto->getCveTipoPersona()!="") ||($ofendidoscateosDto->getNombreMoral()!="") ||($ofendidoscateosDto->getCveGenero()!="") ||($ofendidoscateosDto->getDomicilio()!="") ||($ofendidoscateosDto->getTelefono()!="") ||($ofendidoscateosDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidoscateosDto->getnombre()!=""){
$sql.="'".$ofendidoscateosDto->getnombre()."'";
if(($ofendidoscateosDto->getPaterno()!="") ||($ofendidoscateosDto->getMaterno()!="") ||($ofendidoscateosDto->getCveTipoPersona()!="") ||($ofendidoscateosDto->getNombreMoral()!="") ||($ofendidoscateosDto->getCveGenero()!="") ||($ofendidoscateosDto->getDomicilio()!="") ||($ofendidoscateosDto->getTelefono()!="") ||($ofendidoscateosDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidoscateosDto->getpaterno()!=""){
$sql.="'".$ofendidoscateosDto->getpaterno()."'";
if(($ofendidoscateosDto->getMaterno()!="") ||($ofendidoscateosDto->getCveTipoPersona()!="") ||($ofendidoscateosDto->getNombreMoral()!="") ||($ofendidoscateosDto->getCveGenero()!="") ||($ofendidoscateosDto->getDomicilio()!="") ||($ofendidoscateosDto->getTelefono()!="") ||($ofendidoscateosDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidoscateosDto->getmaterno()!=""){
$sql.="'".$ofendidoscateosDto->getmaterno()."'";
if(($ofendidoscateosDto->getCveTipoPersona()!="") ||($ofendidoscateosDto->getNombreMoral()!="") ||($ofendidoscateosDto->getCveGenero()!="") ||($ofendidoscateosDto->getDomicilio()!="") ||($ofendidoscateosDto->getTelefono()!="") ||($ofendidoscateosDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidoscateosDto->getcveTipoPersona()!=""){
$sql.="'".$ofendidoscateosDto->getcveTipoPersona()."'";
if(($ofendidoscateosDto->getNombreMoral()!="") ||($ofendidoscateosDto->getCveGenero()!="") ||($ofendidoscateosDto->getDomicilio()!="") ||($ofendidoscateosDto->getTelefono()!="") ||($ofendidoscateosDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidoscateosDto->getnombreMoral()!=""){
$sql.="'".$ofendidoscateosDto->getnombreMoral()."'";
if(($ofendidoscateosDto->getCveGenero()!="") ||($ofendidoscateosDto->getDomicilio()!="") ||($ofendidoscateosDto->getTelefono()!="") ||($ofendidoscateosDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidoscateosDto->getcveGenero()!=""){
$sql.="'".$ofendidoscateosDto->getcveGenero()."'";
if(($ofendidoscateosDto->getDomicilio()!="") ||($ofendidoscateosDto->getTelefono()!="") ||($ofendidoscateosDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidoscateosDto->getdomicilio()!=""){
$sql.="'".$ofendidoscateosDto->getdomicilio()."'";
if(($ofendidoscateosDto->getTelefono()!="") ||($ofendidoscateosDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidoscateosDto->gettelefono()!=""){
$sql.="'".$ofendidoscateosDto->gettelefono()."'";
if(($ofendidoscateosDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidoscateosDto->getemail()!=""){
$sql.="'".$ofendidoscateosDto->getemail()."'";
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new OfendidoscateosDTO();
$tmp->setidOfendidoCateo($this->_proveedor->lastID());
$tmp = $this->selectOfendidoscateos($tmp,"",$this->_proveedor);
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
public function updateOfendidoscateos($ofendidoscateosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblofendidoscateos SET ";
if($ofendidoscateosDto->getidOfendidoCateo()!=""){
$sql.="idOfendidoCateo='".$ofendidoscateosDto->getidOfendidoCateo()."'";
if(($ofendidoscateosDto->getIdSolicitudCateo()!="") ||($ofendidoscateosDto->getActivo()!="") ||($ofendidoscateosDto->getFechaRegistro()!="") ||($ofendidoscateosDto->getFechaActualizacion()!="") ||($ofendidoscateosDto->getNombre()!="") ||($ofendidoscateosDto->getPaterno()!="") ||($ofendidoscateosDto->getMaterno()!="") ||($ofendidoscateosDto->getCveTipoPersona()!="") ||($ofendidoscateosDto->getNombreMoral()!="") ||($ofendidoscateosDto->getCveGenero()!="") ||($ofendidoscateosDto->getDomicilio()!="") ||($ofendidoscateosDto->getTelefono()!="") ||($ofendidoscateosDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidoscateosDto->getidSolicitudCateo()!=""){
$sql.="idSolicitudCateo='".$ofendidoscateosDto->getidSolicitudCateo()."'";
if(($ofendidoscateosDto->getActivo()!="") ||($ofendidoscateosDto->getFechaRegistro()!="") ||($ofendidoscateosDto->getFechaActualizacion()!="") ||($ofendidoscateosDto->getNombre()!="") ||($ofendidoscateosDto->getPaterno()!="") ||($ofendidoscateosDto->getMaterno()!="") ||($ofendidoscateosDto->getCveTipoPersona()!="") ||($ofendidoscateosDto->getNombreMoral()!="") ||($ofendidoscateosDto->getCveGenero()!="") ||($ofendidoscateosDto->getDomicilio()!="") ||($ofendidoscateosDto->getTelefono()!="") ||($ofendidoscateosDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidoscateosDto->getactivo()!=""){
$sql.="activo='".$ofendidoscateosDto->getactivo()."'";
if(($ofendidoscateosDto->getFechaRegistro()!="") ||($ofendidoscateosDto->getFechaActualizacion()!="") ||($ofendidoscateosDto->getNombre()!="") ||($ofendidoscateosDto->getPaterno()!="") ||($ofendidoscateosDto->getMaterno()!="") ||($ofendidoscateosDto->getCveTipoPersona()!="") ||($ofendidoscateosDto->getNombreMoral()!="") ||($ofendidoscateosDto->getCveGenero()!="") ||($ofendidoscateosDto->getDomicilio()!="") ||($ofendidoscateosDto->getTelefono()!="") ||($ofendidoscateosDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidoscateosDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$ofendidoscateosDto->getfechaRegistro()."'";
if(($ofendidoscateosDto->getFechaActualizacion()!="") ||($ofendidoscateosDto->getNombre()!="") ||($ofendidoscateosDto->getPaterno()!="") ||($ofendidoscateosDto->getMaterno()!="") ||($ofendidoscateosDto->getCveTipoPersona()!="") ||($ofendidoscateosDto->getNombreMoral()!="") ||($ofendidoscateosDto->getCveGenero()!="") ||($ofendidoscateosDto->getDomicilio()!="") ||($ofendidoscateosDto->getTelefono()!="") ||($ofendidoscateosDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidoscateosDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$ofendidoscateosDto->getfechaActualizacion()."'";
if(($ofendidoscateosDto->getNombre()!="") ||($ofendidoscateosDto->getPaterno()!="") ||($ofendidoscateosDto->getMaterno()!="") ||($ofendidoscateosDto->getCveTipoPersona()!="") ||($ofendidoscateosDto->getNombreMoral()!="") ||($ofendidoscateosDto->getCveGenero()!="") ||($ofendidoscateosDto->getDomicilio()!="") ||($ofendidoscateosDto->getTelefono()!="") ||($ofendidoscateosDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidoscateosDto->getnombre()!=""){
$sql.="nombre='".$ofendidoscateosDto->getnombre()."'";
if(($ofendidoscateosDto->getPaterno()!="") ||($ofendidoscateosDto->getMaterno()!="") ||($ofendidoscateosDto->getCveTipoPersona()!="") ||($ofendidoscateosDto->getNombreMoral()!="") ||($ofendidoscateosDto->getCveGenero()!="") ||($ofendidoscateosDto->getDomicilio()!="") ||($ofendidoscateosDto->getTelefono()!="") ||($ofendidoscateosDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidoscateosDto->getpaterno()!=""){
$sql.="paterno='".$ofendidoscateosDto->getpaterno()."'";
if(($ofendidoscateosDto->getMaterno()!="") ||($ofendidoscateosDto->getCveTipoPersona()!="") ||($ofendidoscateosDto->getNombreMoral()!="") ||($ofendidoscateosDto->getCveGenero()!="") ||($ofendidoscateosDto->getDomicilio()!="") ||($ofendidoscateosDto->getTelefono()!="") ||($ofendidoscateosDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidoscateosDto->getmaterno()!=""){
$sql.="materno='".$ofendidoscateosDto->getmaterno()."'";
if(($ofendidoscateosDto->getCveTipoPersona()!="") ||($ofendidoscateosDto->getNombreMoral()!="") ||($ofendidoscateosDto->getCveGenero()!="") ||($ofendidoscateosDto->getDomicilio()!="") ||($ofendidoscateosDto->getTelefono()!="") ||($ofendidoscateosDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidoscateosDto->getcveTipoPersona()!=""){
$sql.="cveTipoPersona='".$ofendidoscateosDto->getcveTipoPersona()."'";
if(($ofendidoscateosDto->getNombreMoral()!="") ||($ofendidoscateosDto->getCveGenero()!="") ||($ofendidoscateosDto->getDomicilio()!="") ||($ofendidoscateosDto->getTelefono()!="") ||($ofendidoscateosDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidoscateosDto->getnombreMoral()!=""){
$sql.="nombreMoral='".$ofendidoscateosDto->getnombreMoral()."'";
if(($ofendidoscateosDto->getCveGenero()!="") ||($ofendidoscateosDto->getDomicilio()!="") ||($ofendidoscateosDto->getTelefono()!="") ||($ofendidoscateosDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidoscateosDto->getcveGenero()!=""){
$sql.="cveGenero='".$ofendidoscateosDto->getcveGenero()."'";
if(($ofendidoscateosDto->getDomicilio()!="") ||($ofendidoscateosDto->getTelefono()!="") ||($ofendidoscateosDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidoscateosDto->getdomicilio()!=""){
$sql.="domicilio='".$ofendidoscateosDto->getdomicilio()."'";
if(($ofendidoscateosDto->getTelefono()!="") ||($ofendidoscateosDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidoscateosDto->gettelefono()!=""){
$sql.="telefono='".$ofendidoscateosDto->gettelefono()."'";
if(($ofendidoscateosDto->getEmail()!="") ){
$sql.=",";
}
}
if($ofendidoscateosDto->getemail()!=""){
$sql.="email='".$ofendidoscateosDto->getemail()."'";
}
$sql.=" WHERE idOfendidoCateo='".$ofendidoscateosDto->getidOfendidoCateo()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new OfendidoscateosDTO();
$tmp->setidOfendidoCateo($ofendidoscateosDto->getidOfendidoCateo());
$tmp = $this->selectOfendidoscateos($tmp,"",$this->_proveedor);
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
public function deleteOfendidoscateos($ofendidoscateosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblofendidoscateos  WHERE idOfendidoCateo='".$ofendidoscateosDto->getidOfendidoCateo()."'";
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
public function selectOfendidoscateos($ofendidoscateosDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idOfendidoCateo,idSolicitudCateo,activo,fechaRegistro,fechaActualizacion,nombre,paterno,materno,cveTipoPersona,nombreMoral,cveGenero,domicilio,telefono,email FROM tblofendidoscateos ";
if(($ofendidoscateosDto->getidOfendidoCateo()!="") ||($ofendidoscateosDto->getidSolicitudCateo()!="") ||($ofendidoscateosDto->getactivo()!="") ||($ofendidoscateosDto->getfechaRegistro()!="") ||($ofendidoscateosDto->getfechaActualizacion()!="") ||($ofendidoscateosDto->getnombre()!="") ||($ofendidoscateosDto->getpaterno()!="") ||($ofendidoscateosDto->getmaterno()!="") ||($ofendidoscateosDto->getcveTipoPersona()!="") ||($ofendidoscateosDto->getnombreMoral()!="") ||($ofendidoscateosDto->getcveGenero()!="") ||($ofendidoscateosDto->getdomicilio()!="") ||($ofendidoscateosDto->gettelefono()!="") ||($ofendidoscateosDto->getemail()!="") ){
$sql.=" WHERE ";
}
if($ofendidoscateosDto->getidOfendidoCateo()!=""){
$sql.="idOfendidoCateo='".$ofendidoscateosDto->getIdOfendidoCateo()."'";
if(($ofendidoscateosDto->getIdSolicitudCateo()!="") ||($ofendidoscateosDto->getActivo()!="") ||($ofendidoscateosDto->getFechaRegistro()!="") ||($ofendidoscateosDto->getFechaActualizacion()!="") ||($ofendidoscateosDto->getNombre()!="") ||($ofendidoscateosDto->getPaterno()!="") ||($ofendidoscateosDto->getMaterno()!="") ||($ofendidoscateosDto->getCveTipoPersona()!="") ||($ofendidoscateosDto->getNombreMoral()!="") ||($ofendidoscateosDto->getCveGenero()!="") ||($ofendidoscateosDto->getDomicilio()!="") ||($ofendidoscateosDto->getTelefono()!="") ||($ofendidoscateosDto->getEmail()!="") ){
$sql.=" AND ";
}
}
if($ofendidoscateosDto->getidSolicitudCateo()!=""){
$sql.="idSolicitudCateo='".$ofendidoscateosDto->getIdSolicitudCateo()."'";
if(($ofendidoscateosDto->getActivo()!="") ||($ofendidoscateosDto->getFechaRegistro()!="") ||($ofendidoscateosDto->getFechaActualizacion()!="") ||($ofendidoscateosDto->getNombre()!="") ||($ofendidoscateosDto->getPaterno()!="") ||($ofendidoscateosDto->getMaterno()!="") ||($ofendidoscateosDto->getCveTipoPersona()!="") ||($ofendidoscateosDto->getNombreMoral()!="") ||($ofendidoscateosDto->getCveGenero()!="") ||($ofendidoscateosDto->getDomicilio()!="") ||($ofendidoscateosDto->getTelefono()!="") ||($ofendidoscateosDto->getEmail()!="") ){
$sql.=" AND ";
}
}
if($ofendidoscateosDto->getactivo()!=""){
$sql.="activo='".$ofendidoscateosDto->getActivo()."'";
if(($ofendidoscateosDto->getFechaRegistro()!="") ||($ofendidoscateosDto->getFechaActualizacion()!="") ||($ofendidoscateosDto->getNombre()!="") ||($ofendidoscateosDto->getPaterno()!="") ||($ofendidoscateosDto->getMaterno()!="") ||($ofendidoscateosDto->getCveTipoPersona()!="") ||($ofendidoscateosDto->getNombreMoral()!="") ||($ofendidoscateosDto->getCveGenero()!="") ||($ofendidoscateosDto->getDomicilio()!="") ||($ofendidoscateosDto->getTelefono()!="") ||($ofendidoscateosDto->getEmail()!="") ){
$sql.=" AND ";
}
}
if($ofendidoscateosDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$ofendidoscateosDto->getFechaRegistro()."'";
if(($ofendidoscateosDto->getFechaActualizacion()!="") ||($ofendidoscateosDto->getNombre()!="") ||($ofendidoscateosDto->getPaterno()!="") ||($ofendidoscateosDto->getMaterno()!="") ||($ofendidoscateosDto->getCveTipoPersona()!="") ||($ofendidoscateosDto->getNombreMoral()!="") ||($ofendidoscateosDto->getCveGenero()!="") ||($ofendidoscateosDto->getDomicilio()!="") ||($ofendidoscateosDto->getTelefono()!="") ||($ofendidoscateosDto->getEmail()!="") ){
$sql.=" AND ";
}
}
if($ofendidoscateosDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$ofendidoscateosDto->getFechaActualizacion()."'";
if(($ofendidoscateosDto->getNombre()!="") ||($ofendidoscateosDto->getPaterno()!="") ||($ofendidoscateosDto->getMaterno()!="") ||($ofendidoscateosDto->getCveTipoPersona()!="") ||($ofendidoscateosDto->getNombreMoral()!="") ||($ofendidoscateosDto->getCveGenero()!="") ||($ofendidoscateosDto->getDomicilio()!="") ||($ofendidoscateosDto->getTelefono()!="") ||($ofendidoscateosDto->getEmail()!="") ){
$sql.=" AND ";
}
}
if($ofendidoscateosDto->getnombre()!=""){
$sql.="nombre='".$ofendidoscateosDto->getNombre()."'";
if(($ofendidoscateosDto->getPaterno()!="") ||($ofendidoscateosDto->getMaterno()!="") ||($ofendidoscateosDto->getCveTipoPersona()!="") ||($ofendidoscateosDto->getNombreMoral()!="") ||($ofendidoscateosDto->getCveGenero()!="") ||($ofendidoscateosDto->getDomicilio()!="") ||($ofendidoscateosDto->getTelefono()!="") ||($ofendidoscateosDto->getEmail()!="") ){
$sql.=" AND ";
}
}
if($ofendidoscateosDto->getpaterno()!=""){
$sql.="paterno='".$ofendidoscateosDto->getPaterno()."'";
if(($ofendidoscateosDto->getMaterno()!="") ||($ofendidoscateosDto->getCveTipoPersona()!="") ||($ofendidoscateosDto->getNombreMoral()!="") ||($ofendidoscateosDto->getCveGenero()!="") ||($ofendidoscateosDto->getDomicilio()!="") ||($ofendidoscateosDto->getTelefono()!="") ||($ofendidoscateosDto->getEmail()!="") ){
$sql.=" AND ";
}
}
if($ofendidoscateosDto->getmaterno()!=""){
$sql.="materno='".$ofendidoscateosDto->getMaterno()."'";
if(($ofendidoscateosDto->getCveTipoPersona()!="") ||($ofendidoscateosDto->getNombreMoral()!="") ||($ofendidoscateosDto->getCveGenero()!="") ||($ofendidoscateosDto->getDomicilio()!="") ||($ofendidoscateosDto->getTelefono()!="") ||($ofendidoscateosDto->getEmail()!="") ){
$sql.=" AND ";
}
}
if($ofendidoscateosDto->getcveTipoPersona()!=""){
$sql.="cveTipoPersona='".$ofendidoscateosDto->getCveTipoPersona()."'";
if(($ofendidoscateosDto->getNombreMoral()!="") ||($ofendidoscateosDto->getCveGenero()!="") ||($ofendidoscateosDto->getDomicilio()!="") ||($ofendidoscateosDto->getTelefono()!="") ||($ofendidoscateosDto->getEmail()!="") ){
$sql.=" AND ";
}
}
if($ofendidoscateosDto->getnombreMoral()!=""){
$sql.="nombreMoral='".$ofendidoscateosDto->getNombreMoral()."'";
if(($ofendidoscateosDto->getCveGenero()!="") ||($ofendidoscateosDto->getDomicilio()!="") ||($ofendidoscateosDto->getTelefono()!="") ||($ofendidoscateosDto->getEmail()!="") ){
$sql.=" AND ";
}
}
if($ofendidoscateosDto->getcveGenero()!=""){
$sql.="cveGenero='".$ofendidoscateosDto->getCveGenero()."'";
if(($ofendidoscateosDto->getDomicilio()!="") ||($ofendidoscateosDto->getTelefono()!="") ||($ofendidoscateosDto->getEmail()!="") ){
$sql.=" AND ";
}
}
if($ofendidoscateosDto->getdomicilio()!=""){
$sql.="domicilio='".$ofendidoscateosDto->getDomicilio()."'";
if(($ofendidoscateosDto->getTelefono()!="") ||($ofendidoscateosDto->getEmail()!="") ){
$sql.=" AND ";
}
}
if($ofendidoscateosDto->gettelefono()!=""){
$sql.="telefono='".$ofendidoscateosDto->getTelefono()."'";
if(($ofendidoscateosDto->getEmail()!="") ){
$sql.=" AND ";
}
}
if($ofendidoscateosDto->getemail()!=""){
$sql.="email='".$ofendidoscateosDto->getEmail()."'";
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
$tmp[$contador] = new OfendidoscateosDTO();
$tmp[$contador]->setIdOfendidoCateo($row["idOfendidoCateo"]);
$tmp[$contador]->setIdSolicitudCateo($row["idSolicitudCateo"]);
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