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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/apelantessolicitudes/ApelantessolicitudesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class ApelantessolicitudesDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertApelantessolicitudes($apelantessolicitudesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblapelantessolicitudes(";
if($apelantessolicitudesDto->getIdApelanteSolicitud()!=""){
$sql.="idApelanteSolicitud";
if(($apelantessolicitudesDto->getIdSolicitudAudiencia()!="") ||($apelantessolicitudesDto->getNombre()!="") ||($apelantessolicitudesDto->getPaterno()!="") ||($apelantessolicitudesDto->getMaterno()!="") ||($apelantessolicitudesDto->getCveGenero()!="") ||($apelantessolicitudesDto->getCveTipoPersona()!="") ||($apelantessolicitudesDto->getNombreMoral()!="") ||($apelantessolicitudesDto->getCveTipoApelante()!="") ||($apelantessolicitudesDto->getActivo()!="") ){
$sql.=",";
}
}
if($apelantessolicitudesDto->getIdSolicitudAudiencia()!=""){
$sql.="idSolicitudAudiencia";
if(($apelantessolicitudesDto->getNombre()!="") ||($apelantessolicitudesDto->getPaterno()!="") ||($apelantessolicitudesDto->getMaterno()!="") ||($apelantessolicitudesDto->getCveGenero()!="") ||($apelantessolicitudesDto->getCveTipoPersona()!="") ||($apelantessolicitudesDto->getNombreMoral()!="") ||($apelantessolicitudesDto->getCveTipoApelante()!="") ||($apelantessolicitudesDto->getActivo()!="") ){
$sql.=",";
}
}
if($apelantessolicitudesDto->getNombre()!=""){
$sql.="nombre";
if(($apelantessolicitudesDto->getPaterno()!="") ||($apelantessolicitudesDto->getMaterno()!="") ||($apelantessolicitudesDto->getCveGenero()!="") ||($apelantessolicitudesDto->getCveTipoPersona()!="") ||($apelantessolicitudesDto->getNombreMoral()!="") ||($apelantessolicitudesDto->getCveTipoApelante()!="") ||($apelantessolicitudesDto->getActivo()!="") ){
$sql.=",";
}
}
if($apelantessolicitudesDto->getPaterno()!=""){
$sql.="paterno";
if(($apelantessolicitudesDto->getMaterno()!="") ||($apelantessolicitudesDto->getCveGenero()!="") ||($apelantessolicitudesDto->getCveTipoPersona()!="") ||($apelantessolicitudesDto->getNombreMoral()!="") ||($apelantessolicitudesDto->getCveTipoApelante()!="") ||($apelantessolicitudesDto->getActivo()!="") ){
$sql.=",";
}
}
if($apelantessolicitudesDto->getMaterno()!=""){
$sql.="materno";
if(($apelantessolicitudesDto->getCveGenero()!="") ||($apelantessolicitudesDto->getCveTipoPersona()!="") ||($apelantessolicitudesDto->getNombreMoral()!="") ||($apelantessolicitudesDto->getCveTipoApelante()!="") ||($apelantessolicitudesDto->getActivo()!="") ){
$sql.=",";
}
}
if($apelantessolicitudesDto->getCveGenero()!=""){
$sql.="cveGenero";
if(($apelantessolicitudesDto->getCveTipoPersona()!="") ||($apelantessolicitudesDto->getNombreMoral()!="") ||($apelantessolicitudesDto->getCveTipoApelante()!="") ||($apelantessolicitudesDto->getActivo()!="") ){
$sql.=",";
}
}
if($apelantessolicitudesDto->getCveTipoPersona()!=""){
$sql.="cveTipoPersona";
if(($apelantessolicitudesDto->getNombreMoral()!="") ||($apelantessolicitudesDto->getCveTipoApelante()!="") ||($apelantessolicitudesDto->getActivo()!="") ){
$sql.=",";
}
}
if($apelantessolicitudesDto->getNombreMoral()!=""){
$sql.="nombreMoral";
if(($apelantessolicitudesDto->getCveTipoApelante()!="") ||($apelantessolicitudesDto->getActivo()!="") ){
$sql.=",";
}
}
if($apelantessolicitudesDto->getCveTipoApelante()!=""){
$sql.="cveTipoApelante";
if(($apelantessolicitudesDto->getActivo()!="") ){
$sql.=",";
}
}
if($apelantessolicitudesDto->getActivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($apelantessolicitudesDto->getIdApelanteSolicitud()!=""){
$sql.="'".$apelantessolicitudesDto->getIdApelanteSolicitud()."'";
if(($apelantessolicitudesDto->getIdSolicitudAudiencia()!="") ||($apelantessolicitudesDto->getNombre()!="") ||($apelantessolicitudesDto->getPaterno()!="") ||($apelantessolicitudesDto->getMaterno()!="") ||($apelantessolicitudesDto->getCveGenero()!="") ||($apelantessolicitudesDto->getCveTipoPersona()!="") ||($apelantessolicitudesDto->getNombreMoral()!="") ||($apelantessolicitudesDto->getCveTipoApelante()!="") ||($apelantessolicitudesDto->getActivo()!="") ){
$sql.=",";
}
}
if($apelantessolicitudesDto->getIdSolicitudAudiencia()!=""){
$sql.="'".$apelantessolicitudesDto->getIdSolicitudAudiencia()."'";
if(($apelantessolicitudesDto->getNombre()!="") ||($apelantessolicitudesDto->getPaterno()!="") ||($apelantessolicitudesDto->getMaterno()!="") ||($apelantessolicitudesDto->getCveGenero()!="") ||($apelantessolicitudesDto->getCveTipoPersona()!="") ||($apelantessolicitudesDto->getNombreMoral()!="") ||($apelantessolicitudesDto->getCveTipoApelante()!="") ||($apelantessolicitudesDto->getActivo()!="") ){
$sql.=",";
}
}
if($apelantessolicitudesDto->getNombre()!=""){
$sql.="'".$apelantessolicitudesDto->getNombre()."'";
if(($apelantessolicitudesDto->getPaterno()!="") ||($apelantessolicitudesDto->getMaterno()!="") ||($apelantessolicitudesDto->getCveGenero()!="") ||($apelantessolicitudesDto->getCveTipoPersona()!="") ||($apelantessolicitudesDto->getNombreMoral()!="") ||($apelantessolicitudesDto->getCveTipoApelante()!="") ||($apelantessolicitudesDto->getActivo()!="") ){
$sql.=",";
}
}
if($apelantessolicitudesDto->getPaterno()!=""){
$sql.="'".$apelantessolicitudesDto->getPaterno()."'";
if(($apelantessolicitudesDto->getMaterno()!="") ||($apelantessolicitudesDto->getCveGenero()!="") ||($apelantessolicitudesDto->getCveTipoPersona()!="") ||($apelantessolicitudesDto->getNombreMoral()!="") ||($apelantessolicitudesDto->getCveTipoApelante()!="") ||($apelantessolicitudesDto->getActivo()!="") ){
$sql.=",";
}
}
if($apelantessolicitudesDto->getMaterno()!=""){
$sql.="'".$apelantessolicitudesDto->getMaterno()."'";
if(($apelantessolicitudesDto->getCveGenero()!="") ||($apelantessolicitudesDto->getCveTipoPersona()!="") ||($apelantessolicitudesDto->getNombreMoral()!="") ||($apelantessolicitudesDto->getCveTipoApelante()!="") ||($apelantessolicitudesDto->getActivo()!="") ){
$sql.=",";
}
}
if($apelantessolicitudesDto->getCveGenero()!=""){
$sql.="'".$apelantessolicitudesDto->getCveGenero()."'";
if(($apelantessolicitudesDto->getCveTipoPersona()!="") ||($apelantessolicitudesDto->getNombreMoral()!="") ||($apelantessolicitudesDto->getCveTipoApelante()!="") ||($apelantessolicitudesDto->getActivo()!="") ){
$sql.=",";
}
}
if($apelantessolicitudesDto->getCveTipoPersona()!=""){
$sql.="'".$apelantessolicitudesDto->getCveTipoPersona()."'";
if(($apelantessolicitudesDto->getNombreMoral()!="") ||($apelantessolicitudesDto->getCveTipoApelante()!="") ||($apelantessolicitudesDto->getActivo()!="") ){
$sql.=",";
}
}
if($apelantessolicitudesDto->getNombreMoral()!=""){
$sql.="'".$apelantessolicitudesDto->getNombreMoral()."'";
if(($apelantessolicitudesDto->getCveTipoApelante()!="") ||($apelantessolicitudesDto->getActivo()!="") ){
$sql.=",";
}
}
if($apelantessolicitudesDto->getCveTipoApelante()!=""){
$sql.="'".$apelantessolicitudesDto->getCveTipoApelante()."'";
if(($apelantessolicitudesDto->getActivo()!="") ){
$sql.=",";
}
}
if($apelantessolicitudesDto->getActivo()!=""){
$sql.="'".$apelantessolicitudesDto->getActivo()."'";
}
if($apelantessolicitudesDto->getFechaRegistro()!=""){
}
if($apelantessolicitudesDto->getFechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new ApelantessolicitudesDTO();
$tmp->setidApelanteSolicitud($this->_proveedor->lastID());
$tmp = $this->selectApelantessolicitudes($tmp,"",$this->_proveedor);
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
public function updateApelantessolicitudes($apelantessolicitudesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblapelantessolicitudes SET ";
if($apelantessolicitudesDto->getIdApelanteSolicitud()!=""){
$sql.="idApelanteSolicitud='".$apelantessolicitudesDto->getIdApelanteSolicitud()."'";
if(($apelantessolicitudesDto->getIdSolicitudAudiencia()!="") ||($apelantessolicitudesDto->getNombre()!="") ||($apelantessolicitudesDto->getPaterno()!="") ||($apelantessolicitudesDto->getMaterno()!="") ||($apelantessolicitudesDto->getCveGenero()!="") ||($apelantessolicitudesDto->getCveTipoPersona()!="") ||($apelantessolicitudesDto->getNombreMoral()!="") ||($apelantessolicitudesDto->getCveTipoApelante()!="") ||($apelantessolicitudesDto->getActivo()!="") ||($apelantessolicitudesDto->getFechaRegistro()!="") ||($apelantessolicitudesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($apelantessolicitudesDto->getIdSolicitudAudiencia()!=""){
$sql.="idSolicitudAudiencia='".$apelantessolicitudesDto->getIdSolicitudAudiencia()."'";
if(($apelantessolicitudesDto->getNombre()!="") ||($apelantessolicitudesDto->getPaterno()!="") ||($apelantessolicitudesDto->getMaterno()!="") ||($apelantessolicitudesDto->getCveGenero()!="") ||($apelantessolicitudesDto->getCveTipoPersona()!="") ||($apelantessolicitudesDto->getNombreMoral()!="") ||($apelantessolicitudesDto->getCveTipoApelante()!="") ||($apelantessolicitudesDto->getActivo()!="") ||($apelantessolicitudesDto->getFechaRegistro()!="") ||($apelantessolicitudesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($apelantessolicitudesDto->getNombre()!=""){
$sql.="nombre='".$apelantessolicitudesDto->getNombre()."'";
if(($apelantessolicitudesDto->getPaterno()!="") ||($apelantessolicitudesDto->getMaterno()!="") ||($apelantessolicitudesDto->getCveGenero()!="") ||($apelantessolicitudesDto->getCveTipoPersona()!="") ||($apelantessolicitudesDto->getNombreMoral()!="") ||($apelantessolicitudesDto->getCveTipoApelante()!="") ||($apelantessolicitudesDto->getActivo()!="") ||($apelantessolicitudesDto->getFechaRegistro()!="") ||($apelantessolicitudesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($apelantessolicitudesDto->getPaterno()!=""){
$sql.="paterno='".$apelantessolicitudesDto->getPaterno()."'";
if(($apelantessolicitudesDto->getMaterno()!="") ||($apelantessolicitudesDto->getCveGenero()!="") ||($apelantessolicitudesDto->getCveTipoPersona()!="") ||($apelantessolicitudesDto->getNombreMoral()!="") ||($apelantessolicitudesDto->getCveTipoApelante()!="") ||($apelantessolicitudesDto->getActivo()!="") ||($apelantessolicitudesDto->getFechaRegistro()!="") ||($apelantessolicitudesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($apelantessolicitudesDto->getMaterno()!=""){
$sql.="materno='".$apelantessolicitudesDto->getMaterno()."'";
if(($apelantessolicitudesDto->getCveGenero()!="") ||($apelantessolicitudesDto->getCveTipoPersona()!="") ||($apelantessolicitudesDto->getNombreMoral()!="") ||($apelantessolicitudesDto->getCveTipoApelante()!="") ||($apelantessolicitudesDto->getActivo()!="") ||($apelantessolicitudesDto->getFechaRegistro()!="") ||($apelantessolicitudesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($apelantessolicitudesDto->getCveGenero()!=""){
$sql.="cveGenero='".$apelantessolicitudesDto->getCveGenero()."'";
if(($apelantessolicitudesDto->getCveTipoPersona()!="") ||($apelantessolicitudesDto->getNombreMoral()!="") ||($apelantessolicitudesDto->getCveTipoApelante()!="") ||($apelantessolicitudesDto->getActivo()!="") ||($apelantessolicitudesDto->getFechaRegistro()!="") ||($apelantessolicitudesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($apelantessolicitudesDto->getCveTipoPersona()!=""){
$sql.="cveTipoPersona='".$apelantessolicitudesDto->getCveTipoPersona()."'";
if(($apelantessolicitudesDto->getNombreMoral()!="") ||($apelantessolicitudesDto->getCveTipoApelante()!="") ||($apelantessolicitudesDto->getActivo()!="") ||($apelantessolicitudesDto->getFechaRegistro()!="") ||($apelantessolicitudesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($apelantessolicitudesDto->getNombreMoral()!=""){
$sql.="nombreMoral='".$apelantessolicitudesDto->getNombreMoral()."'";
if(($apelantessolicitudesDto->getCveTipoApelante()!="") ||($apelantessolicitudesDto->getActivo()!="") ||($apelantessolicitudesDto->getFechaRegistro()!="") ||($apelantessolicitudesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($apelantessolicitudesDto->getCveTipoApelante()!=""){
$sql.="cveTipoApelante='".$apelantessolicitudesDto->getCveTipoApelante()."'";
if(($apelantessolicitudesDto->getActivo()!="") ||($apelantessolicitudesDto->getFechaRegistro()!="") ||($apelantessolicitudesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($apelantessolicitudesDto->getActivo()!=""){
$sql.="activo='".$apelantessolicitudesDto->getActivo()."'";
if(($apelantessolicitudesDto->getFechaRegistro()!="") ||($apelantessolicitudesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($apelantessolicitudesDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$apelantessolicitudesDto->getFechaRegistro()."'";
if(($apelantessolicitudesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($apelantessolicitudesDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$apelantessolicitudesDto->getFechaActualizacion()."'";
}
$sql.=" WHERE idApelanteSolicitud='".$apelantessolicitudesDto->getIdApelanteSolicitud()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new ApelantessolicitudesDTO();
$tmp->setidApelanteSolicitud($apelantessolicitudesDto->getIdApelanteSolicitud());
$tmp = $this->selectApelantessolicitudes($tmp,"",$this->_proveedor);
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
public function deleteApelantessolicitudes($apelantessolicitudesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblapelantessolicitudes  WHERE idApelanteSolicitud='".$apelantessolicitudesDto->getIdApelanteSolicitud()."'";
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
public function selectApelantessolicitudes($apelantessolicitudesDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idApelanteSolicitud,idSolicitudAudiencia,nombre,paterno,materno,cveGenero,cveTipoPersona,nombreMoral,cveTipoApelante,activo,fechaRegistro,fechaActualizacion FROM tblapelantessolicitudes ";
if(($apelantessolicitudesDto->getIdApelanteSolicitud()!="") ||($apelantessolicitudesDto->getIdSolicitudAudiencia()!="") ||($apelantessolicitudesDto->getNombre()!="") ||($apelantessolicitudesDto->getPaterno()!="") ||($apelantessolicitudesDto->getMaterno()!="") ||($apelantessolicitudesDto->getCveGenero()!="") ||($apelantessolicitudesDto->getCveTipoPersona()!="") ||($apelantessolicitudesDto->getNombreMoral()!="") ||($apelantessolicitudesDto->getCveTipoApelante()!="") ||($apelantessolicitudesDto->getActivo()!="") ||($apelantessolicitudesDto->getFechaRegistro()!="") ||($apelantessolicitudesDto->getFechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($apelantessolicitudesDto->getIdApelanteSolicitud()!=""){
$sql.="idApelanteSolicitud='".$apelantessolicitudesDto->getIdApelanteSolicitud()."'";
if(($apelantessolicitudesDto->getIdSolicitudAudiencia()!="") ||($apelantessolicitudesDto->getNombre()!="") ||($apelantessolicitudesDto->getPaterno()!="") ||($apelantessolicitudesDto->getMaterno()!="") ||($apelantessolicitudesDto->getCveGenero()!="") ||($apelantessolicitudesDto->getCveTipoPersona()!="") ||($apelantessolicitudesDto->getNombreMoral()!="") ||($apelantessolicitudesDto->getCveTipoApelante()!="") ||($apelantessolicitudesDto->getActivo()!="") ||($apelantessolicitudesDto->getFechaRegistro()!="") ||($apelantessolicitudesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($apelantessolicitudesDto->getIdSolicitudAudiencia()!=""){
$sql.="idSolicitudAudiencia='".$apelantessolicitudesDto->getIdSolicitudAudiencia()."'";
if(($apelantessolicitudesDto->getNombre()!="") ||($apelantessolicitudesDto->getPaterno()!="") ||($apelantessolicitudesDto->getMaterno()!="") ||($apelantessolicitudesDto->getCveGenero()!="") ||($apelantessolicitudesDto->getCveTipoPersona()!="") ||($apelantessolicitudesDto->getNombreMoral()!="") ||($apelantessolicitudesDto->getCveTipoApelante()!="") ||($apelantessolicitudesDto->getActivo()!="") ||($apelantessolicitudesDto->getFechaRegistro()!="") ||($apelantessolicitudesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($apelantessolicitudesDto->getNombre()!=""){
$sql.="nombre='".$apelantessolicitudesDto->getNombre()."'";
if(($apelantessolicitudesDto->getPaterno()!="") ||($apelantessolicitudesDto->getMaterno()!="") ||($apelantessolicitudesDto->getCveGenero()!="") ||($apelantessolicitudesDto->getCveTipoPersona()!="") ||($apelantessolicitudesDto->getNombreMoral()!="") ||($apelantessolicitudesDto->getCveTipoApelante()!="") ||($apelantessolicitudesDto->getActivo()!="") ||($apelantessolicitudesDto->getFechaRegistro()!="") ||($apelantessolicitudesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($apelantessolicitudesDto->getPaterno()!=""){
$sql.="paterno='".$apelantessolicitudesDto->getPaterno()."'";
if(($apelantessolicitudesDto->getMaterno()!="") ||($apelantessolicitudesDto->getCveGenero()!="") ||($apelantessolicitudesDto->getCveTipoPersona()!="") ||($apelantessolicitudesDto->getNombreMoral()!="") ||($apelantessolicitudesDto->getCveTipoApelante()!="") ||($apelantessolicitudesDto->getActivo()!="") ||($apelantessolicitudesDto->getFechaRegistro()!="") ||($apelantessolicitudesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($apelantessolicitudesDto->getMaterno()!=""){
$sql.="materno='".$apelantessolicitudesDto->getMaterno()."'";
if(($apelantessolicitudesDto->getCveGenero()!="") ||($apelantessolicitudesDto->getCveTipoPersona()!="") ||($apelantessolicitudesDto->getNombreMoral()!="") ||($apelantessolicitudesDto->getCveTipoApelante()!="") ||($apelantessolicitudesDto->getActivo()!="") ||($apelantessolicitudesDto->getFechaRegistro()!="") ||($apelantessolicitudesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($apelantessolicitudesDto->getCveGenero()!=""){
$sql.="cveGenero='".$apelantessolicitudesDto->getCveGenero()."'";
if(($apelantessolicitudesDto->getCveTipoPersona()!="") ||($apelantessolicitudesDto->getNombreMoral()!="") ||($apelantessolicitudesDto->getCveTipoApelante()!="") ||($apelantessolicitudesDto->getActivo()!="") ||($apelantessolicitudesDto->getFechaRegistro()!="") ||($apelantessolicitudesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($apelantessolicitudesDto->getCveTipoPersona()!=""){
$sql.="cveTipoPersona='".$apelantessolicitudesDto->getCveTipoPersona()."'";
if(($apelantessolicitudesDto->getNombreMoral()!="") ||($apelantessolicitudesDto->getCveTipoApelante()!="") ||($apelantessolicitudesDto->getActivo()!="") ||($apelantessolicitudesDto->getFechaRegistro()!="") ||($apelantessolicitudesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($apelantessolicitudesDto->getNombreMoral()!=""){
$sql.="nombreMoral='".$apelantessolicitudesDto->getNombreMoral()."'";
if(($apelantessolicitudesDto->getCveTipoApelante()!="") ||($apelantessolicitudesDto->getActivo()!="") ||($apelantessolicitudesDto->getFechaRegistro()!="") ||($apelantessolicitudesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($apelantessolicitudesDto->getCveTipoApelante()!=""){
$sql.="cveTipoApelante='".$apelantessolicitudesDto->getCveTipoApelante()."'";
if(($apelantessolicitudesDto->getActivo()!="") ||($apelantessolicitudesDto->getFechaRegistro()!="") ||($apelantessolicitudesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($apelantessolicitudesDto->getActivo()!=""){
$sql.="activo='".$apelantessolicitudesDto->getActivo()."'";
if(($apelantessolicitudesDto->getFechaRegistro()!="") ||($apelantessolicitudesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($apelantessolicitudesDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$apelantessolicitudesDto->getFechaRegistro()."'";
if(($apelantessolicitudesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($apelantessolicitudesDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$apelantessolicitudesDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new ApelantessolicitudesDTO();
$tmp[$contador]->setIdApelanteSolicitud($row["idApelanteSolicitud"]);
$tmp[$contador]->setIdSolicitudAudiencia($row["idSolicitudAudiencia"]);
$tmp[$contador]->setNombre($row["nombre"]);
$tmp[$contador]->setPaterno($row["paterno"]);
$tmp[$contador]->setMaterno($row["materno"]);
$tmp[$contador]->setCveGenero($row["cveGenero"]);
$tmp[$contador]->setCveTipoPersona($row["cveTipoPersona"]);
$tmp[$contador]->setNombreMoral($row["nombreMoral"]);
$tmp[$contador]->setCveTipoApelante($row["cveTipoApelante"]);
$tmp[$contador]->setActivo($row["activo"]);
$tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
$tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
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