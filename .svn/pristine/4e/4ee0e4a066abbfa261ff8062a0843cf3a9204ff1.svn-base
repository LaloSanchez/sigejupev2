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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/actuacionesfirmadas/ActuacionesfirmadasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class ActuacionesfirmadasDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertActuacionesfirmadas($actuacionesfirmadasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblactuacionesfirmadas(";
if($actuacionesfirmadasDto->getIdActuacionFirmada()!=""){
$sql.="idActuacionFirmada";
if(($actuacionesfirmadasDto->getIdReferencia()!="") ||($actuacionesfirmadasDto->getCveTipoActuacion()!="") ||($actuacionesfirmadasDto->getCveTipoCarpeta()!="") ||($actuacionesfirmadasDto->getCveUsuario()!="") ||($actuacionesfirmadasDto->getCveGrupo()!="") ||($actuacionesfirmadasDto->getFileNameFirma()!="") ||($actuacionesfirmadasDto->getTransferenciaFirma()!="") ||($actuacionesfirmadasDto->getTokenFirma()!="") ||($actuacionesfirmadasDto->getIdRegistroFirma()!="") ||($actuacionesfirmadasDto->getActivo()!="") ){
$sql.=",";
}
}
if($actuacionesfirmadasDto->getIdReferencia()!=""){
$sql.="idReferencia";
if(($actuacionesfirmadasDto->getCveTipoActuacion()!="") ||($actuacionesfirmadasDto->getCveTipoCarpeta()!="") ||($actuacionesfirmadasDto->getCveUsuario()!="") ||($actuacionesfirmadasDto->getCveGrupo()!="") ||($actuacionesfirmadasDto->getFileNameFirma()!="") ||($actuacionesfirmadasDto->getTransferenciaFirma()!="") ||($actuacionesfirmadasDto->getTokenFirma()!="") ||($actuacionesfirmadasDto->getIdRegistroFirma()!="") ||($actuacionesfirmadasDto->getActivo()!="") ){
$sql.=",";
}
}
if($actuacionesfirmadasDto->getCveTipoActuacion()!=""){
$sql.="cveTipoActuacion";
if(($actuacionesfirmadasDto->getCveTipoCarpeta()!="") ||($actuacionesfirmadasDto->getCveUsuario()!="") ||($actuacionesfirmadasDto->getCveGrupo()!="") ||($actuacionesfirmadasDto->getFileNameFirma()!="") ||($actuacionesfirmadasDto->getTransferenciaFirma()!="") ||($actuacionesfirmadasDto->getTokenFirma()!="") ||($actuacionesfirmadasDto->getIdRegistroFirma()!="") ||($actuacionesfirmadasDto->getActivo()!="") ){
$sql.=",";
}
}
if($actuacionesfirmadasDto->getCveTipoCarpeta()!=""){
$sql.="cveTipoCarpeta";
if(($actuacionesfirmadasDto->getCveUsuario()!="") ||($actuacionesfirmadasDto->getCveGrupo()!="") ||($actuacionesfirmadasDto->getFileNameFirma()!="") ||($actuacionesfirmadasDto->getTransferenciaFirma()!="") ||($actuacionesfirmadasDto->getTokenFirma()!="") ||($actuacionesfirmadasDto->getIdRegistroFirma()!="") ||($actuacionesfirmadasDto->getActivo()!="") ){
$sql.=",";
}
}
if($actuacionesfirmadasDto->getCveUsuario()!=""){
$sql.="cveUsuario";
if(($actuacionesfirmadasDto->getCveGrupo()!="") ||($actuacionesfirmadasDto->getFileNameFirma()!="") ||($actuacionesfirmadasDto->getTransferenciaFirma()!="") ||($actuacionesfirmadasDto->getTokenFirma()!="") ||($actuacionesfirmadasDto->getIdRegistroFirma()!="") ||($actuacionesfirmadasDto->getActivo()!="") ){
$sql.=",";
}
}
if($actuacionesfirmadasDto->getCveGrupo()!=""){
$sql.="cveGrupo";
if(($actuacionesfirmadasDto->getFileNameFirma()!="") ||($actuacionesfirmadasDto->getTransferenciaFirma()!="") ||($actuacionesfirmadasDto->getTokenFirma()!="") ||($actuacionesfirmadasDto->getIdRegistroFirma()!="") ||($actuacionesfirmadasDto->getActivo()!="") ){
$sql.=",";
}
}
if($actuacionesfirmadasDto->getFileNameFirma()!=""){
$sql.="fileNameFirma";
if(($actuacionesfirmadasDto->getTransferenciaFirma()!="") ||($actuacionesfirmadasDto->getTokenFirma()!="") ||($actuacionesfirmadasDto->getIdRegistroFirma()!="") ||($actuacionesfirmadasDto->getActivo()!="") ){
$sql.=",";
}
}
if($actuacionesfirmadasDto->getTransferenciaFirma()!=""){
$sql.="transferenciaFirma";
if(($actuacionesfirmadasDto->getTokenFirma()!="") ||($actuacionesfirmadasDto->getIdRegistroFirma()!="") ||($actuacionesfirmadasDto->getActivo()!="") ){
$sql.=",";
}
}
if($actuacionesfirmadasDto->getTokenFirma()!=""){
$sql.="tokenFirma";
if(($actuacionesfirmadasDto->getIdRegistroFirma()!="") ||($actuacionesfirmadasDto->getActivo()!="") ){
$sql.=",";
}
}
if($actuacionesfirmadasDto->getIdRegistroFirma()!=""){
$sql.="idRegistroFirma";
if(($actuacionesfirmadasDto->getActivo()!="") ){
$sql.=",";
}
}
if($actuacionesfirmadasDto->getActivo()!=""){
$sql.="activo";
}
$sql.=",fechaActualizacion";
$sql.=",fechaRegistro";
$sql.=") VALUES(";
if($actuacionesfirmadasDto->getIdActuacionFirmada()!=""){
$sql.="'".$actuacionesfirmadasDto->getIdActuacionFirmada()."'";
if(($actuacionesfirmadasDto->getIdReferencia()!="") ||($actuacionesfirmadasDto->getCveTipoActuacion()!="") ||($actuacionesfirmadasDto->getCveTipoCarpeta()!="") ||($actuacionesfirmadasDto->getCveUsuario()!="") ||($actuacionesfirmadasDto->getCveGrupo()!="") ||($actuacionesfirmadasDto->getFileNameFirma()!="") ||($actuacionesfirmadasDto->getTransferenciaFirma()!="") ||($actuacionesfirmadasDto->getTokenFirma()!="") ||($actuacionesfirmadasDto->getIdRegistroFirma()!="") ||($actuacionesfirmadasDto->getActivo()!="") ){
$sql.=",";
}
}
if($actuacionesfirmadasDto->getIdReferencia()!=""){
$sql.="'".$actuacionesfirmadasDto->getIdReferencia()."'";
if(($actuacionesfirmadasDto->getCveTipoActuacion()!="") ||($actuacionesfirmadasDto->getCveTipoCarpeta()!="") ||($actuacionesfirmadasDto->getCveUsuario()!="") ||($actuacionesfirmadasDto->getCveGrupo()!="") ||($actuacionesfirmadasDto->getFileNameFirma()!="") ||($actuacionesfirmadasDto->getTransferenciaFirma()!="") ||($actuacionesfirmadasDto->getTokenFirma()!="") ||($actuacionesfirmadasDto->getIdRegistroFirma()!="") ||($actuacionesfirmadasDto->getActivo()!="") ){
$sql.=",";
}
}
if($actuacionesfirmadasDto->getCveTipoActuacion()!=""){
$sql.="'".$actuacionesfirmadasDto->getCveTipoActuacion()."'";
if(($actuacionesfirmadasDto->getCveTipoCarpeta()!="") ||($actuacionesfirmadasDto->getCveUsuario()!="") ||($actuacionesfirmadasDto->getCveGrupo()!="") ||($actuacionesfirmadasDto->getFileNameFirma()!="") ||($actuacionesfirmadasDto->getTransferenciaFirma()!="") ||($actuacionesfirmadasDto->getTokenFirma()!="") ||($actuacionesfirmadasDto->getIdRegistroFirma()!="") ||($actuacionesfirmadasDto->getActivo()!="") ){
$sql.=",";
}
}
if($actuacionesfirmadasDto->getCveTipoCarpeta()!=""){
$sql.="'".$actuacionesfirmadasDto->getCveTipoCarpeta()."'";
if(($actuacionesfirmadasDto->getCveUsuario()!="") ||($actuacionesfirmadasDto->getCveGrupo()!="") ||($actuacionesfirmadasDto->getFileNameFirma()!="") ||($actuacionesfirmadasDto->getTransferenciaFirma()!="") ||($actuacionesfirmadasDto->getTokenFirma()!="") ||($actuacionesfirmadasDto->getIdRegistroFirma()!="") ||($actuacionesfirmadasDto->getActivo()!="") ){
$sql.=",";
}
}
if($actuacionesfirmadasDto->getCveUsuario()!=""){
$sql.="'".$actuacionesfirmadasDto->getCveUsuario()."'";
if(($actuacionesfirmadasDto->getCveGrupo()!="") ||($actuacionesfirmadasDto->getFileNameFirma()!="") ||($actuacionesfirmadasDto->getTransferenciaFirma()!="") ||($actuacionesfirmadasDto->getTokenFirma()!="") ||($actuacionesfirmadasDto->getIdRegistroFirma()!="") ||($actuacionesfirmadasDto->getActivo()!="") ){
$sql.=",";
}
}
if($actuacionesfirmadasDto->getCveGrupo()!=""){
$sql.="'".$actuacionesfirmadasDto->getCveGrupo()."'";
if(($actuacionesfirmadasDto->getFileNameFirma()!="") ||($actuacionesfirmadasDto->getTransferenciaFirma()!="") ||($actuacionesfirmadasDto->getTokenFirma()!="") ||($actuacionesfirmadasDto->getIdRegistroFirma()!="") ||($actuacionesfirmadasDto->getActivo()!="") ){
$sql.=",";
}
}
if($actuacionesfirmadasDto->getFileNameFirma()!=""){
$sql.="'".$actuacionesfirmadasDto->getFileNameFirma()."'";
if(($actuacionesfirmadasDto->getTransferenciaFirma()!="") ||($actuacionesfirmadasDto->getTokenFirma()!="") ||($actuacionesfirmadasDto->getIdRegistroFirma()!="") ||($actuacionesfirmadasDto->getActivo()!="") ){
$sql.=",";
}
}
if($actuacionesfirmadasDto->getTransferenciaFirma()!=""){
$sql.="'".$actuacionesfirmadasDto->getTransferenciaFirma()."'";
if(($actuacionesfirmadasDto->getTokenFirma()!="") ||($actuacionesfirmadasDto->getIdRegistroFirma()!="") ||($actuacionesfirmadasDto->getActivo()!="") ){
$sql.=",";
}
}
if($actuacionesfirmadasDto->getTokenFirma()!=""){
$sql.="'".$actuacionesfirmadasDto->getTokenFirma()."'";
if(($actuacionesfirmadasDto->getIdRegistroFirma()!="") ||($actuacionesfirmadasDto->getActivo()!="") ){
$sql.=",";
}
}
if($actuacionesfirmadasDto->getIdRegistroFirma()!=""){
$sql.="'".$actuacionesfirmadasDto->getIdRegistroFirma()."'";
if(($actuacionesfirmadasDto->getActivo()!="") ){
$sql.=",";
}
}
if($actuacionesfirmadasDto->getActivo()!=""){
$sql.="'".$actuacionesfirmadasDto->getActivo()."'";
}
if($actuacionesfirmadasDto->getFechaActualizacion()!=""){
}
if($actuacionesfirmadasDto->getFechaRegistro()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new ActuacionesfirmadasDTO();
$tmp->setidActuacionFirmada($this->_proveedor->lastID());
$tmp = $this->selectActuacionesfirmadas($tmp,"",$this->_proveedor);
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
public function updateActuacionesfirmadas($actuacionesfirmadasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblactuacionesfirmadas SET ";
if($actuacionesfirmadasDto->getIdActuacionFirmada()!=""){
$sql.="idActuacionFirmada='".$actuacionesfirmadasDto->getIdActuacionFirmada()."'";
if(($actuacionesfirmadasDto->getIdReferencia()!="") ||($actuacionesfirmadasDto->getCveTipoActuacion()!="") ||($actuacionesfirmadasDto->getCveTipoCarpeta()!="") ||($actuacionesfirmadasDto->getCveUsuario()!="") ||($actuacionesfirmadasDto->getCveGrupo()!="") ||($actuacionesfirmadasDto->getFileNameFirma()!="") ||($actuacionesfirmadasDto->getTransferenciaFirma()!="") ||($actuacionesfirmadasDto->getTokenFirma()!="") ||($actuacionesfirmadasDto->getIdRegistroFirma()!="") ||($actuacionesfirmadasDto->getActivo()!="") ||($actuacionesfirmadasDto->getFechaActualizacion()!="") ||($actuacionesfirmadasDto->getFechaRegistro()!="") ){
$sql.=",";
}
}
if($actuacionesfirmadasDto->getIdReferencia()!=""){
$sql.="idReferencia='".$actuacionesfirmadasDto->getIdReferencia()."'";
if(($actuacionesfirmadasDto->getCveTipoActuacion()!="") ||($actuacionesfirmadasDto->getCveTipoCarpeta()!="") ||($actuacionesfirmadasDto->getCveUsuario()!="") ||($actuacionesfirmadasDto->getCveGrupo()!="") ||($actuacionesfirmadasDto->getFileNameFirma()!="") ||($actuacionesfirmadasDto->getTransferenciaFirma()!="") ||($actuacionesfirmadasDto->getTokenFirma()!="") ||($actuacionesfirmadasDto->getIdRegistroFirma()!="") ||($actuacionesfirmadasDto->getActivo()!="") ||($actuacionesfirmadasDto->getFechaActualizacion()!="") ||($actuacionesfirmadasDto->getFechaRegistro()!="") ){
$sql.=",";
}
}
if($actuacionesfirmadasDto->getCveTipoActuacion()!=""){
$sql.="cveTipoActuacion='".$actuacionesfirmadasDto->getCveTipoActuacion()."'";
if(($actuacionesfirmadasDto->getCveTipoCarpeta()!="") ||($actuacionesfirmadasDto->getCveUsuario()!="") ||($actuacionesfirmadasDto->getCveGrupo()!="") ||($actuacionesfirmadasDto->getFileNameFirma()!="") ||($actuacionesfirmadasDto->getTransferenciaFirma()!="") ||($actuacionesfirmadasDto->getTokenFirma()!="") ||($actuacionesfirmadasDto->getIdRegistroFirma()!="") ||($actuacionesfirmadasDto->getActivo()!="") ||($actuacionesfirmadasDto->getFechaActualizacion()!="") ||($actuacionesfirmadasDto->getFechaRegistro()!="") ){
$sql.=",";
}
}
if($actuacionesfirmadasDto->getCveTipoCarpeta()!=""){
$sql.="cveTipoCarpeta='".$actuacionesfirmadasDto->getCveTipoCarpeta()."'";
if(($actuacionesfirmadasDto->getCveUsuario()!="") ||($actuacionesfirmadasDto->getCveGrupo()!="") ||($actuacionesfirmadasDto->getFileNameFirma()!="") ||($actuacionesfirmadasDto->getTransferenciaFirma()!="") ||($actuacionesfirmadasDto->getTokenFirma()!="") ||($actuacionesfirmadasDto->getIdRegistroFirma()!="") ||($actuacionesfirmadasDto->getActivo()!="") ||($actuacionesfirmadasDto->getFechaActualizacion()!="") ||($actuacionesfirmadasDto->getFechaRegistro()!="") ){
$sql.=",";
}
}
if($actuacionesfirmadasDto->getCveUsuario()!=""){
$sql.="cveUsuario='".$actuacionesfirmadasDto->getCveUsuario()."'";
if(($actuacionesfirmadasDto->getCveGrupo()!="") ||($actuacionesfirmadasDto->getFileNameFirma()!="") ||($actuacionesfirmadasDto->getTransferenciaFirma()!="") ||($actuacionesfirmadasDto->getTokenFirma()!="") ||($actuacionesfirmadasDto->getIdRegistroFirma()!="") ||($actuacionesfirmadasDto->getActivo()!="") ||($actuacionesfirmadasDto->getFechaActualizacion()!="") ||($actuacionesfirmadasDto->getFechaRegistro()!="") ){
$sql.=",";
}
}
if($actuacionesfirmadasDto->getCveGrupo()!=""){
$sql.="cveGrupo='".$actuacionesfirmadasDto->getCveGrupo()."'";
if(($actuacionesfirmadasDto->getFileNameFirma()!="") ||($actuacionesfirmadasDto->getTransferenciaFirma()!="") ||($actuacionesfirmadasDto->getTokenFirma()!="") ||($actuacionesfirmadasDto->getIdRegistroFirma()!="") ||($actuacionesfirmadasDto->getActivo()!="") ||($actuacionesfirmadasDto->getFechaActualizacion()!="") ||($actuacionesfirmadasDto->getFechaRegistro()!="") ){
$sql.=",";
}
}
if($actuacionesfirmadasDto->getFileNameFirma()!=""){
$sql.="fileNameFirma='".$actuacionesfirmadasDto->getFileNameFirma()."'";
if(($actuacionesfirmadasDto->getTransferenciaFirma()!="") ||($actuacionesfirmadasDto->getTokenFirma()!="") ||($actuacionesfirmadasDto->getIdRegistroFirma()!="") ||($actuacionesfirmadasDto->getActivo()!="") ||($actuacionesfirmadasDto->getFechaActualizacion()!="") ||($actuacionesfirmadasDto->getFechaRegistro()!="") ){
$sql.=",";
}
}
if($actuacionesfirmadasDto->getTransferenciaFirma()!=""){
$sql.="transferenciaFirma='".$actuacionesfirmadasDto->getTransferenciaFirma()."'";
if(($actuacionesfirmadasDto->getTokenFirma()!="") ||($actuacionesfirmadasDto->getIdRegistroFirma()!="") ||($actuacionesfirmadasDto->getActivo()!="") ||($actuacionesfirmadasDto->getFechaActualizacion()!="") ||($actuacionesfirmadasDto->getFechaRegistro()!="") ){
$sql.=",";
}
}
if($actuacionesfirmadasDto->getTokenFirma()!=""){
$sql.="tokenFirma='".$actuacionesfirmadasDto->getTokenFirma()."'";
if(($actuacionesfirmadasDto->getIdRegistroFirma()!="") ||($actuacionesfirmadasDto->getActivo()!="") ||($actuacionesfirmadasDto->getFechaActualizacion()!="") ||($actuacionesfirmadasDto->getFechaRegistro()!="") ){
$sql.=",";
}
}
if($actuacionesfirmadasDto->getIdRegistroFirma()!=""){
$sql.="idRegistroFirma='".$actuacionesfirmadasDto->getIdRegistroFirma()."'";
if(($actuacionesfirmadasDto->getActivo()!="") ||($actuacionesfirmadasDto->getFechaActualizacion()!="") ||($actuacionesfirmadasDto->getFechaRegistro()!="") ){
$sql.=",";
}
}
if($actuacionesfirmadasDto->getActivo()!=""){
$sql.="activo='".$actuacionesfirmadasDto->getActivo()."'";
if(($actuacionesfirmadasDto->getFechaActualizacion()!="") ||($actuacionesfirmadasDto->getFechaRegistro()!="") ){
$sql.=",";
}
}
if($actuacionesfirmadasDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$actuacionesfirmadasDto->getFechaActualizacion()."'";
if(($actuacionesfirmadasDto->getFechaRegistro()!="") ){
$sql.=",";
}
}
if($actuacionesfirmadasDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$actuacionesfirmadasDto->getFechaRegistro()."'";
}
$sql.=" WHERE idActuacionFirmada='".$actuacionesfirmadasDto->getIdActuacionFirmada()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new ActuacionesfirmadasDTO();
$tmp->setidActuacionFirmada($actuacionesfirmadasDto->getIdActuacionFirmada());
$tmp = $this->selectActuacionesfirmadas($tmp,"",$this->_proveedor);
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
public function deleteActuacionesfirmadas($actuacionesfirmadasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblactuacionesfirmadas  WHERE idActuacionFirmada='".$actuacionesfirmadasDto->getIdActuacionFirmada()."'";
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
public function selectActuacionesfirmadas($actuacionesfirmadasDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idActuacionFirmada,idReferencia,cveTipoActuacion,cveTipoCarpeta,cveUsuario,cveGrupo,fileNameFirma,transferenciaFirma,tokenFirma,idRegistroFirma,activo,fechaActualizacion,fechaRegistro FROM tblactuacionesfirmadas ";
if(($actuacionesfirmadasDto->getIdActuacionFirmada()!="") ||($actuacionesfirmadasDto->getIdReferencia()!="") ||($actuacionesfirmadasDto->getCveTipoActuacion()!="") ||($actuacionesfirmadasDto->getCveTipoCarpeta()!="") ||($actuacionesfirmadasDto->getCveUsuario()!="") ||($actuacionesfirmadasDto->getCveGrupo()!="") ||($actuacionesfirmadasDto->getFileNameFirma()!="") ||($actuacionesfirmadasDto->getTransferenciaFirma()!="") ||($actuacionesfirmadasDto->getTokenFirma()!="") ||($actuacionesfirmadasDto->getIdRegistroFirma()!="") ||($actuacionesfirmadasDto->getActivo()!="") ||($actuacionesfirmadasDto->getFechaActualizacion()!="") ||($actuacionesfirmadasDto->getFechaRegistro()!="") ){
$sql.=" WHERE ";
}
if($actuacionesfirmadasDto->getIdActuacionFirmada()!=""){
$sql.="idActuacionFirmada='".$actuacionesfirmadasDto->getIdActuacionFirmada()."'";
if(($actuacionesfirmadasDto->getIdReferencia()!="") ||($actuacionesfirmadasDto->getCveTipoActuacion()!="") ||($actuacionesfirmadasDto->getCveTipoCarpeta()!="") ||($actuacionesfirmadasDto->getCveUsuario()!="") ||($actuacionesfirmadasDto->getCveGrupo()!="") ||($actuacionesfirmadasDto->getFileNameFirma()!="") ||($actuacionesfirmadasDto->getTransferenciaFirma()!="") ||($actuacionesfirmadasDto->getTokenFirma()!="") ||($actuacionesfirmadasDto->getIdRegistroFirma()!="") ||($actuacionesfirmadasDto->getActivo()!="") ||($actuacionesfirmadasDto->getFechaActualizacion()!="") ||($actuacionesfirmadasDto->getFechaRegistro()!="") ){
$sql.=" AND ";
}
}
if($actuacionesfirmadasDto->getIdReferencia()!=""){
$sql.="idReferencia='".$actuacionesfirmadasDto->getIdReferencia()."'";
if(($actuacionesfirmadasDto->getCveTipoActuacion()!="") ||($actuacionesfirmadasDto->getCveTipoCarpeta()!="") ||($actuacionesfirmadasDto->getCveUsuario()!="") ||($actuacionesfirmadasDto->getCveGrupo()!="") ||($actuacionesfirmadasDto->getFileNameFirma()!="") ||($actuacionesfirmadasDto->getTransferenciaFirma()!="") ||($actuacionesfirmadasDto->getTokenFirma()!="") ||($actuacionesfirmadasDto->getIdRegistroFirma()!="") ||($actuacionesfirmadasDto->getActivo()!="") ||($actuacionesfirmadasDto->getFechaActualizacion()!="") ||($actuacionesfirmadasDto->getFechaRegistro()!="") ){
$sql.=" AND ";
}
}
if($actuacionesfirmadasDto->getCveTipoActuacion()!=""){
$sql.="cveTipoActuacion='".$actuacionesfirmadasDto->getCveTipoActuacion()."'";
if(($actuacionesfirmadasDto->getCveTipoCarpeta()!="") ||($actuacionesfirmadasDto->getCveUsuario()!="") ||($actuacionesfirmadasDto->getCveGrupo()!="") ||($actuacionesfirmadasDto->getFileNameFirma()!="") ||($actuacionesfirmadasDto->getTransferenciaFirma()!="") ||($actuacionesfirmadasDto->getTokenFirma()!="") ||($actuacionesfirmadasDto->getIdRegistroFirma()!="") ||($actuacionesfirmadasDto->getActivo()!="") ||($actuacionesfirmadasDto->getFechaActualizacion()!="") ||($actuacionesfirmadasDto->getFechaRegistro()!="") ){
$sql.=" AND ";
}
}
if($actuacionesfirmadasDto->getCveTipoCarpeta()!=""){
$sql.="cveTipoCarpeta='".$actuacionesfirmadasDto->getCveTipoCarpeta()."'";
if(($actuacionesfirmadasDto->getCveUsuario()!="") ||($actuacionesfirmadasDto->getCveGrupo()!="") ||($actuacionesfirmadasDto->getFileNameFirma()!="") ||($actuacionesfirmadasDto->getTransferenciaFirma()!="") ||($actuacionesfirmadasDto->getTokenFirma()!="") ||($actuacionesfirmadasDto->getIdRegistroFirma()!="") ||($actuacionesfirmadasDto->getActivo()!="") ||($actuacionesfirmadasDto->getFechaActualizacion()!="") ||($actuacionesfirmadasDto->getFechaRegistro()!="") ){
$sql.=" AND ";
}
}
if($actuacionesfirmadasDto->getCveUsuario()!=""){
$sql.="cveUsuario='".$actuacionesfirmadasDto->getCveUsuario()."'";
if(($actuacionesfirmadasDto->getCveGrupo()!="") ||($actuacionesfirmadasDto->getFileNameFirma()!="") ||($actuacionesfirmadasDto->getTransferenciaFirma()!="") ||($actuacionesfirmadasDto->getTokenFirma()!="") ||($actuacionesfirmadasDto->getIdRegistroFirma()!="") ||($actuacionesfirmadasDto->getActivo()!="") ||($actuacionesfirmadasDto->getFechaActualizacion()!="") ||($actuacionesfirmadasDto->getFechaRegistro()!="") ){
$sql.=" AND ";
}
}
if($actuacionesfirmadasDto->getCveGrupo()!=""){
$sql.="cveGrupo='".$actuacionesfirmadasDto->getCveGrupo()."'";
if(($actuacionesfirmadasDto->getFileNameFirma()!="") ||($actuacionesfirmadasDto->getTransferenciaFirma()!="") ||($actuacionesfirmadasDto->getTokenFirma()!="") ||($actuacionesfirmadasDto->getIdRegistroFirma()!="") ||($actuacionesfirmadasDto->getActivo()!="") ||($actuacionesfirmadasDto->getFechaActualizacion()!="") ||($actuacionesfirmadasDto->getFechaRegistro()!="") ){
$sql.=" AND ";
}
}
if($actuacionesfirmadasDto->getFileNameFirma()!=""){
$sql.="fileNameFirma='".$actuacionesfirmadasDto->getFileNameFirma()."'";
if(($actuacionesfirmadasDto->getTransferenciaFirma()!="") ||($actuacionesfirmadasDto->getTokenFirma()!="") ||($actuacionesfirmadasDto->getIdRegistroFirma()!="") ||($actuacionesfirmadasDto->getActivo()!="") ||($actuacionesfirmadasDto->getFechaActualizacion()!="") ||($actuacionesfirmadasDto->getFechaRegistro()!="") ){
$sql.=" AND ";
}
}
if($actuacionesfirmadasDto->getTransferenciaFirma()!=""){
$sql.="transferenciaFirma='".$actuacionesfirmadasDto->getTransferenciaFirma()."'";
if(($actuacionesfirmadasDto->getTokenFirma()!="") ||($actuacionesfirmadasDto->getIdRegistroFirma()!="") ||($actuacionesfirmadasDto->getActivo()!="") ||($actuacionesfirmadasDto->getFechaActualizacion()!="") ||($actuacionesfirmadasDto->getFechaRegistro()!="") ){
$sql.=" AND ";
}
}
if($actuacionesfirmadasDto->getTokenFirma()!=""){
$sql.="tokenFirma='".$actuacionesfirmadasDto->getTokenFirma()."'";
if(($actuacionesfirmadasDto->getIdRegistroFirma()!="") ||($actuacionesfirmadasDto->getActivo()!="") ||($actuacionesfirmadasDto->getFechaActualizacion()!="") ||($actuacionesfirmadasDto->getFechaRegistro()!="") ){
$sql.=" AND ";
}
}
if($actuacionesfirmadasDto->getIdRegistroFirma()!=""){
$sql.="idRegistroFirma='".$actuacionesfirmadasDto->getIdRegistroFirma()."'";
if(($actuacionesfirmadasDto->getActivo()!="") ||($actuacionesfirmadasDto->getFechaActualizacion()!="") ||($actuacionesfirmadasDto->getFechaRegistro()!="") ){
$sql.=" AND ";
}
}
if($actuacionesfirmadasDto->getActivo()!=""){
$sql.="activo='".$actuacionesfirmadasDto->getActivo()."'";
if(($actuacionesfirmadasDto->getFechaActualizacion()!="") ||($actuacionesfirmadasDto->getFechaRegistro()!="") ){
$sql.=" AND ";
}
}
if($actuacionesfirmadasDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$actuacionesfirmadasDto->getFechaActualizacion()."'";
if(($actuacionesfirmadasDto->getFechaRegistro()!="") ){
$sql.=" AND ";
}
}
if($actuacionesfirmadasDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$actuacionesfirmadasDto->getFechaRegistro()."'";
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
$tmp[$contador] = new ActuacionesfirmadasDTO();
$tmp[$contador]->setIdActuacionFirmada($row["idActuacionFirmada"]);
$tmp[$contador]->setIdReferencia($row["idReferencia"]);
$tmp[$contador]->setCveTipoActuacion($row["cveTipoActuacion"]);
$tmp[$contador]->setCveTipoCarpeta($row["cveTipoCarpeta"]);
$tmp[$contador]->setCveUsuario($row["cveUsuario"]);
$tmp[$contador]->setCveGrupo($row["cveGrupo"]);
$tmp[$contador]->setFileNameFirma($row["fileNameFirma"]);
$tmp[$contador]->setTransferenciaFirma($row["transferenciaFirma"]);
$tmp[$contador]->setTokenFirma($row["tokenFirma"]);
$tmp[$contador]->setIdRegistroFirma($row["idRegistroFirma"]);
$tmp[$contador]->setActivo($row["activo"]);
$tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
$tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
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