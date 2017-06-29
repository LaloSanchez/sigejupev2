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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/actuacionesfirmantes/ActuacionesfirmantesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class ActuacionesfirmantesDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertActuacionesfirmantes($actuacionesfirmantesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblactuacionesfirmantes(";
if($actuacionesfirmantesDto->getIdActuacionFirmante()!=""){
$sql.="idActuacionFirmante";
if(($actuacionesfirmantesDto->getCveTipoActuacion()!="") ||($actuacionesfirmantesDto->getCveTipoCarpeta()!="") ||($actuacionesfirmantesDto->getCveGrupo()!="") ||($actuacionesfirmantesDto->getOrden()!="") ||($actuacionesfirmantesDto->getRelacionado()!="") ||($actuacionesfirmantesDto->getActivo()!="") ){
$sql.=",";
}
}
if($actuacionesfirmantesDto->getCveTipoActuacion()!=""){
$sql.="cveTipoActuacion";
if(($actuacionesfirmantesDto->getCveTipoCarpeta()!="") ||($actuacionesfirmantesDto->getCveGrupo()!="") ||($actuacionesfirmantesDto->getOrden()!="") ||($actuacionesfirmantesDto->getRelacionado()!="") ||($actuacionesfirmantesDto->getActivo()!="") ){
$sql.=",";
}
}
if($actuacionesfirmantesDto->getCveTipoCarpeta()!=""){
$sql.="cveTipoCarpeta";
if(($actuacionesfirmantesDto->getCveGrupo()!="") ||($actuacionesfirmantesDto->getOrden()!="") ||($actuacionesfirmantesDto->getRelacionado()!="") ||($actuacionesfirmantesDto->getActivo()!="") ){
$sql.=",";
}
}
if($actuacionesfirmantesDto->getCveGrupo()!=""){
$sql.="cveGrupo";
if(($actuacionesfirmantesDto->getOrden()!="") ||($actuacionesfirmantesDto->getRelacionado()!="") ||($actuacionesfirmantesDto->getActivo()!="") ){
$sql.=",";
}
}
if($actuacionesfirmantesDto->getOrden()!=""){
$sql.="orden";
if(($actuacionesfirmantesDto->getRelacionado()!="") ||($actuacionesfirmantesDto->getActivo()!="") ){
$sql.=",";
}
}
if($actuacionesfirmantesDto->getRelacionado()!=""){
$sql.="relacionado";
if(($actuacionesfirmantesDto->getActivo()!="") ){
$sql.=",";
}
}
if($actuacionesfirmantesDto->getActivo()!=""){
$sql.="activo";
}
$sql.=",fechaActualizacion";
$sql.=",fechaRegistro";
$sql.=") VALUES(";
if($actuacionesfirmantesDto->getIdActuacionFirmante()!=""){
$sql.="'".$actuacionesfirmantesDto->getIdActuacionFirmante()."'";
if(($actuacionesfirmantesDto->getCveTipoActuacion()!="") ||($actuacionesfirmantesDto->getCveTipoCarpeta()!="") ||($actuacionesfirmantesDto->getCveGrupo()!="") ||($actuacionesfirmantesDto->getOrden()!="") ||($actuacionesfirmantesDto->getRelacionado()!="") ||($actuacionesfirmantesDto->getActivo()!="") ){
$sql.=",";
}
}
if($actuacionesfirmantesDto->getCveTipoActuacion()!=""){
$sql.="'".$actuacionesfirmantesDto->getCveTipoActuacion()."'";
if(($actuacionesfirmantesDto->getCveTipoCarpeta()!="") ||($actuacionesfirmantesDto->getCveGrupo()!="") ||($actuacionesfirmantesDto->getOrden()!="") ||($actuacionesfirmantesDto->getRelacionado()!="") ||($actuacionesfirmantesDto->getActivo()!="") ){
$sql.=",";
}
}
if($actuacionesfirmantesDto->getCveTipoCarpeta()!=""){
$sql.="'".$actuacionesfirmantesDto->getCveTipoCarpeta()."'";
if(($actuacionesfirmantesDto->getCveGrupo()!="") ||($actuacionesfirmantesDto->getOrden()!="") ||($actuacionesfirmantesDto->getRelacionado()!="") ||($actuacionesfirmantesDto->getActivo()!="") ){
$sql.=",";
}
}
if($actuacionesfirmantesDto->getCveGrupo()!=""){
$sql.="'".$actuacionesfirmantesDto->getCveGrupo()."'";
if(($actuacionesfirmantesDto->getOrden()!="") ||($actuacionesfirmantesDto->getRelacionado()!="") ||($actuacionesfirmantesDto->getActivo()!="") ){
$sql.=",";
}
}
if($actuacionesfirmantesDto->getOrden()!=""){
$sql.="'".$actuacionesfirmantesDto->getOrden()."'";
if(($actuacionesfirmantesDto->getRelacionado()!="") ||($actuacionesfirmantesDto->getActivo()!="") ){
$sql.=",";
}
}
if($actuacionesfirmantesDto->getRelacionado()!=""){
$sql.="'".$actuacionesfirmantesDto->getRelacionado()."'";
if(($actuacionesfirmantesDto->getActivo()!="") ){
$sql.=",";
}
}
if($actuacionesfirmantesDto->getActivo()!=""){
$sql.="'".$actuacionesfirmantesDto->getActivo()."'";
}
if($actuacionesfirmantesDto->getFechaActualizacion()!=""){
}
if($actuacionesfirmantesDto->getFechaRegistro()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new ActuacionesfirmantesDTO();
$tmp->setidActuacionFirmante($this->_proveedor->lastID());
$tmp = $this->selectActuacionesfirmantes($tmp,"",$this->_proveedor);
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
public function updateActuacionesfirmantes($actuacionesfirmantesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblactuacionesfirmantes SET ";
if($actuacionesfirmantesDto->getIdActuacionFirmante()!=""){
$sql.="idActuacionFirmante='".$actuacionesfirmantesDto->getIdActuacionFirmante()."'";
if(($actuacionesfirmantesDto->getCveTipoActuacion()!="") ||($actuacionesfirmantesDto->getCveTipoCarpeta()!="") ||($actuacionesfirmantesDto->getCveGrupo()!="") ||($actuacionesfirmantesDto->getOrden()!="") ||($actuacionesfirmantesDto->getRelacionado()!="") ||($actuacionesfirmantesDto->getActivo()!="") ||($actuacionesfirmantesDto->getFechaActualizacion()!="") ||($actuacionesfirmantesDto->getFechaRegistro()!="") ){
$sql.=",";
}
}
if($actuacionesfirmantesDto->getCveTipoActuacion()!=""){
$sql.="cveTipoActuacion='".$actuacionesfirmantesDto->getCveTipoActuacion()."'";
if(($actuacionesfirmantesDto->getCveTipoCarpeta()!="") ||($actuacionesfirmantesDto->getCveGrupo()!="") ||($actuacionesfirmantesDto->getOrden()!="") ||($actuacionesfirmantesDto->getRelacionado()!="") ||($actuacionesfirmantesDto->getActivo()!="") ||($actuacionesfirmantesDto->getFechaActualizacion()!="") ||($actuacionesfirmantesDto->getFechaRegistro()!="") ){
$sql.=",";
}
}
if($actuacionesfirmantesDto->getCveTipoCarpeta()!=""){
$sql.="cveTipoCarpeta='".$actuacionesfirmantesDto->getCveTipoCarpeta()."'";
if(($actuacionesfirmantesDto->getCveGrupo()!="") ||($actuacionesfirmantesDto->getOrden()!="") ||($actuacionesfirmantesDto->getRelacionado()!="") ||($actuacionesfirmantesDto->getActivo()!="") ||($actuacionesfirmantesDto->getFechaActualizacion()!="") ||($actuacionesfirmantesDto->getFechaRegistro()!="") ){
$sql.=",";
}
}
if($actuacionesfirmantesDto->getCveGrupo()!=""){
$sql.="cveGrupo='".$actuacionesfirmantesDto->getCveGrupo()."'";
if(($actuacionesfirmantesDto->getOrden()!="") ||($actuacionesfirmantesDto->getRelacionado()!="") ||($actuacionesfirmantesDto->getActivo()!="") ||($actuacionesfirmantesDto->getFechaActualizacion()!="") ||($actuacionesfirmantesDto->getFechaRegistro()!="") ){
$sql.=",";
}
}
if($actuacionesfirmantesDto->getOrden()!=""){
$sql.="orden='".$actuacionesfirmantesDto->getOrden()."'";
if(($actuacionesfirmantesDto->getRelacionado()!="") ||($actuacionesfirmantesDto->getActivo()!="") ||($actuacionesfirmantesDto->getFechaActualizacion()!="") ||($actuacionesfirmantesDto->getFechaRegistro()!="") ){
$sql.=",";
}
}
if($actuacionesfirmantesDto->getRelacionado()!=""){
$sql.="relacionado='".$actuacionesfirmantesDto->getRelacionado()."'";
if(($actuacionesfirmantesDto->getActivo()!="") ||($actuacionesfirmantesDto->getFechaActualizacion()!="") ||($actuacionesfirmantesDto->getFechaRegistro()!="") ){
$sql.=",";
}
}
if($actuacionesfirmantesDto->getActivo()!=""){
$sql.="activo='".$actuacionesfirmantesDto->getActivo()."'";
if(($actuacionesfirmantesDto->getFechaActualizacion()!="") ||($actuacionesfirmantesDto->getFechaRegistro()!="") ){
$sql.=",";
}
}
if($actuacionesfirmantesDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$actuacionesfirmantesDto->getFechaActualizacion()."'";
if(($actuacionesfirmantesDto->getFechaRegistro()!="") ){
$sql.=",";
}
}
if($actuacionesfirmantesDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$actuacionesfirmantesDto->getFechaRegistro()."'";
}
$sql.=" WHERE idActuacionFirmante='".$actuacionesfirmantesDto->getIdActuacionFirmante()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new ActuacionesfirmantesDTO();
$tmp->setidActuacionFirmante($actuacionesfirmantesDto->getIdActuacionFirmante());
$tmp = $this->selectActuacionesfirmantes($tmp,"",$this->_proveedor);
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
public function deleteActuacionesfirmantes($actuacionesfirmantesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblactuacionesfirmantes  WHERE idActuacionFirmante='".$actuacionesfirmantesDto->getIdActuacionFirmante()."'";
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
public function selectActuacionesfirmantes($actuacionesfirmantesDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idActuacionFirmante,cveTipoActuacion,cveTipoCarpeta,cveGrupo,orden,relacionado,activo,fechaActualizacion,fechaRegistro FROM tblactuacionesfirmantes ";
if(($actuacionesfirmantesDto->getIdActuacionFirmante()!="") ||($actuacionesfirmantesDto->getCveTipoActuacion()!="") ||($actuacionesfirmantesDto->getCveTipoCarpeta()!="") ||($actuacionesfirmantesDto->getCveGrupo()!="") ||($actuacionesfirmantesDto->getOrden()!="") ||($actuacionesfirmantesDto->getRelacionado()!="") ||($actuacionesfirmantesDto->getActivo()!="") ||($actuacionesfirmantesDto->getFechaActualizacion()!="") ||($actuacionesfirmantesDto->getFechaRegistro()!="") ){
$sql.=" WHERE ";
}
if($actuacionesfirmantesDto->getIdActuacionFirmante()!=""){
$sql.="idActuacionFirmante='".$actuacionesfirmantesDto->getIdActuacionFirmante()."'";
if(($actuacionesfirmantesDto->getCveTipoActuacion()!="") ||($actuacionesfirmantesDto->getCveTipoCarpeta()!="") ||($actuacionesfirmantesDto->getCveGrupo()!="") ||($actuacionesfirmantesDto->getOrden()!="") ||($actuacionesfirmantesDto->getRelacionado()!="") ||($actuacionesfirmantesDto->getActivo()!="") ||($actuacionesfirmantesDto->getFechaActualizacion()!="") ||($actuacionesfirmantesDto->getFechaRegistro()!="") ){
$sql.=" AND ";
}
}
if($actuacionesfirmantesDto->getCveTipoActuacion()!=""){
$sql.="cveTipoActuacion='".$actuacionesfirmantesDto->getCveTipoActuacion()."'";
if(($actuacionesfirmantesDto->getCveTipoCarpeta()!="") ||($actuacionesfirmantesDto->getCveGrupo()!="") ||($actuacionesfirmantesDto->getOrden()!="") ||($actuacionesfirmantesDto->getRelacionado()!="") ||($actuacionesfirmantesDto->getActivo()!="") ||($actuacionesfirmantesDto->getFechaActualizacion()!="") ||($actuacionesfirmantesDto->getFechaRegistro()!="") ){
$sql.=" AND ";
}
}
if($actuacionesfirmantesDto->getCveTipoCarpeta()!=""){
$sql.="cveTipoCarpeta='".$actuacionesfirmantesDto->getCveTipoCarpeta()."'";
if(($actuacionesfirmantesDto->getCveGrupo()!="") ||($actuacionesfirmantesDto->getOrden()!="") ||($actuacionesfirmantesDto->getRelacionado()!="") ||($actuacionesfirmantesDto->getActivo()!="") ||($actuacionesfirmantesDto->getFechaActualizacion()!="") ||($actuacionesfirmantesDto->getFechaRegistro()!="") ){
$sql.=" AND ";
}
}
if($actuacionesfirmantesDto->getCveGrupo()!=""){
$sql.="cveGrupo='".$actuacionesfirmantesDto->getCveGrupo()."'";
if(($actuacionesfirmantesDto->getOrden()!="") ||($actuacionesfirmantesDto->getRelacionado()!="") ||($actuacionesfirmantesDto->getActivo()!="") ||($actuacionesfirmantesDto->getFechaActualizacion()!="") ||($actuacionesfirmantesDto->getFechaRegistro()!="") ){
$sql.=" AND ";
}
}
if($actuacionesfirmantesDto->getOrden()!=""){
$sql.="orden='".$actuacionesfirmantesDto->getOrden()."'";
if(($actuacionesfirmantesDto->getRelacionado()!="") ||($actuacionesfirmantesDto->getActivo()!="") ||($actuacionesfirmantesDto->getFechaActualizacion()!="") ||($actuacionesfirmantesDto->getFechaRegistro()!="") ){
$sql.=" AND ";
}
}
if($actuacionesfirmantesDto->getRelacionado()!=""){
$sql.="relacionado='".$actuacionesfirmantesDto->getRelacionado()."'";
if(($actuacionesfirmantesDto->getActivo()!="") ||($actuacionesfirmantesDto->getFechaActualizacion()!="") ||($actuacionesfirmantesDto->getFechaRegistro()!="") ){
$sql.=" AND ";
}
}
if($actuacionesfirmantesDto->getActivo()!=""){
$sql.="activo='".$actuacionesfirmantesDto->getActivo()."'";
if(($actuacionesfirmantesDto->getFechaActualizacion()!="") ||($actuacionesfirmantesDto->getFechaRegistro()!="") ){
$sql.=" AND ";
}
}
if($actuacionesfirmantesDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$actuacionesfirmantesDto->getFechaActualizacion()."'";
if(($actuacionesfirmantesDto->getFechaRegistro()!="") ){
$sql.=" AND ";
}
}
if($actuacionesfirmantesDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$actuacionesfirmantesDto->getFechaRegistro()."'";
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
$tmp[$contador] = new ActuacionesfirmantesDTO();
$tmp[$contador]->setIdActuacionFirmante($row["idActuacionFirmante"]);
$tmp[$contador]->setCveTipoActuacion($row["cveTipoActuacion"]);
$tmp[$contador]->setCveTipoCarpeta($row["cveTipoCarpeta"]);
$tmp[$contador]->setCveGrupo($row["cveGrupo"]);
$tmp[$contador]->setOrden($row["orden"]);
$tmp[$contador]->setRelacionado($row["relacionado"]);
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