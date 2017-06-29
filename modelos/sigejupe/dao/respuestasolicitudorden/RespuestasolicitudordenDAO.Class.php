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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/respuestasolicitudorden/RespuestasolicitudordenDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class RespuestasolicitudordenDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertRespuestasolicitudorden($respuestasolicitudordenDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblrespuestasolicitudorden(";
if($respuestasolicitudordenDto->getCveRespuestaSolicitudOrden()!=""){
$sql.="cveRespuestaSolicitudOrden";
if(($respuestasolicitudordenDto->getDesRespuestaSolicitudOrden()!="") ||($respuestasolicitudordenDto->getActivo()!="") ){
$sql.=",";
}
}
if($respuestasolicitudordenDto->getDesRespuestaSolicitudOrden()!=""){
$sql.="desRespuestaSolicitudOrden";
if(($respuestasolicitudordenDto->getActivo()!="") ){
$sql.=",";
}
}
if($respuestasolicitudordenDto->getActivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($respuestasolicitudordenDto->getCveRespuestaSolicitudOrden()!=""){
$sql.="'".$respuestasolicitudordenDto->getCveRespuestaSolicitudOrden()."'";
if(($respuestasolicitudordenDto->getDesRespuestaSolicitudOrden()!="") ||($respuestasolicitudordenDto->getActivo()!="") ){
$sql.=",";
}
}
if($respuestasolicitudordenDto->getDesRespuestaSolicitudOrden()!=""){
$sql.="'".$respuestasolicitudordenDto->getDesRespuestaSolicitudOrden()."'";
if(($respuestasolicitudordenDto->getActivo()!="") ){
$sql.=",";
}
}
if($respuestasolicitudordenDto->getActivo()!=""){
$sql.="'".$respuestasolicitudordenDto->getActivo()."'";
}
if($respuestasolicitudordenDto->getFechaRegistro()!=""){
}
if($respuestasolicitudordenDto->getFechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new RespuestasolicitudordenDTO();
$tmp->setcveRespuestaSolicitudOrden($this->_proveedor->lastID());
$tmp = $this->selectRespuestasolicitudorden($tmp,"",$this->_proveedor);
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
public function updateRespuestasolicitudorden($respuestasolicitudordenDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblrespuestasolicitudorden SET ";
if($respuestasolicitudordenDto->getCveRespuestaSolicitudOrden()!=""){
$sql.="cveRespuestaSolicitudOrden='".$respuestasolicitudordenDto->getCveRespuestaSolicitudOrden()."'";
if(($respuestasolicitudordenDto->getDesRespuestaSolicitudOrden()!="") ||($respuestasolicitudordenDto->getActivo()!="") ||($respuestasolicitudordenDto->getFechaRegistro()!="") ||($respuestasolicitudordenDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($respuestasolicitudordenDto->getDesRespuestaSolicitudOrden()!=""){
$sql.="desRespuestaSolicitudOrden='".$respuestasolicitudordenDto->getDesRespuestaSolicitudOrden()."'";
if(($respuestasolicitudordenDto->getActivo()!="") ||($respuestasolicitudordenDto->getFechaRegistro()!="") ||($respuestasolicitudordenDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($respuestasolicitudordenDto->getActivo()!=""){
$sql.="activo='".$respuestasolicitudordenDto->getActivo()."'";
if(($respuestasolicitudordenDto->getFechaRegistro()!="") ||($respuestasolicitudordenDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($respuestasolicitudordenDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$respuestasolicitudordenDto->getFechaRegistro()."'";
if(($respuestasolicitudordenDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($respuestasolicitudordenDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$respuestasolicitudordenDto->getFechaActualizacion()."'";
}
$sql.=" WHERE cveRespuestaSolicitudOrden='".$respuestasolicitudordenDto->getCveRespuestaSolicitudOrden()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new RespuestasolicitudordenDTO();
$tmp->setcveRespuestaSolicitudOrden($respuestasolicitudordenDto->getCveRespuestaSolicitudOrden());
$tmp = $this->selectRespuestasolicitudorden($tmp,"",$this->_proveedor);
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
public function deleteRespuestasolicitudorden($respuestasolicitudordenDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblrespuestasolicitudorden  WHERE cveRespuestaSolicitudOrden='".$respuestasolicitudordenDto->getCveRespuestaSolicitudOrden()."'";
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
public function selectRespuestasolicitudorden($respuestasolicitudordenDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveRespuestaSolicitudOrden,desRespuestaSolicitudOrden,activo,fechaRegistro,fechaActualizacion FROM tblrespuestasolicitudorden ";
if(($respuestasolicitudordenDto->getCveRespuestaSolicitudOrden()!="") ||($respuestasolicitudordenDto->getDesRespuestaSolicitudOrden()!="") ||($respuestasolicitudordenDto->getActivo()!="") ||($respuestasolicitudordenDto->getFechaRegistro()!="") ||($respuestasolicitudordenDto->getFechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($respuestasolicitudordenDto->getCveRespuestaSolicitudOrden()!=""){
$sql.="cveRespuestaSolicitudOrden='".$respuestasolicitudordenDto->getCveRespuestaSolicitudOrden()."'";
if(($respuestasolicitudordenDto->getDesRespuestaSolicitudOrden()!="") ||($respuestasolicitudordenDto->getActivo()!="") ||($respuestasolicitudordenDto->getFechaRegistro()!="") ||($respuestasolicitudordenDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($respuestasolicitudordenDto->getDesRespuestaSolicitudOrden()!=""){
$sql.="desRespuestaSolicitudOrden='".$respuestasolicitudordenDto->getDesRespuestaSolicitudOrden()."'";
if(($respuestasolicitudordenDto->getActivo()!="") ||($respuestasolicitudordenDto->getFechaRegistro()!="") ||($respuestasolicitudordenDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($respuestasolicitudordenDto->getActivo()!=""){
$sql.="activo='".$respuestasolicitudordenDto->getActivo()."'";
if(($respuestasolicitudordenDto->getFechaRegistro()!="") ||($respuestasolicitudordenDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($respuestasolicitudordenDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$respuestasolicitudordenDto->getFechaRegistro()."'";
if(($respuestasolicitudordenDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($respuestasolicitudordenDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$respuestasolicitudordenDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new RespuestasolicitudordenDTO();
$tmp[$contador]->setCveRespuestaSolicitudOrden($row["cveRespuestaSolicitudOrden"]);
$tmp[$contador]->setDesRespuestaSolicitudOrden($row["desRespuestaSolicitudOrden"]);
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