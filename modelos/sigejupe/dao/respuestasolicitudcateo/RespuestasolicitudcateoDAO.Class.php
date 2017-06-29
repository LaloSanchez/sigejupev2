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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/respuestasolicitudcateo/RespuestasolicitudcateoDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class RespuestasolicitudcateoDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertRespuestasolicitudcateo($respuestasolicitudcateoDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblrespuestasolicitudcateo(";
if($respuestasolicitudcateoDto->getcveRespuestaSolicitudCateo()!=""){
$sql.="cveRespuestaSolicitudCateo";
if(($respuestasolicitudcateoDto->getDesRespuestaSolicitudCateo()!="") ||($respuestasolicitudcateoDto->getActivo()!="") ){
$sql.=",";
}
}
if($respuestasolicitudcateoDto->getdesRespuestaSolicitudCateo()!=""){
$sql.="desRespuestaSolicitudCateo";
if(($respuestasolicitudcateoDto->getActivo()!="") ){
$sql.=",";
}
}
if($respuestasolicitudcateoDto->getactivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($respuestasolicitudcateoDto->getcveRespuestaSolicitudCateo()!=""){
$sql.="'".$respuestasolicitudcateoDto->getcveRespuestaSolicitudCateo()."'";
if(($respuestasolicitudcateoDto->getDesRespuestaSolicitudCateo()!="") ||($respuestasolicitudcateoDto->getActivo()!="") ){
$sql.=",";
}
}
if($respuestasolicitudcateoDto->getdesRespuestaSolicitudCateo()!=""){
$sql.="'".$respuestasolicitudcateoDto->getdesRespuestaSolicitudCateo()."'";
if(($respuestasolicitudcateoDto->getActivo()!="") ){
$sql.=",";
}
}
if($respuestasolicitudcateoDto->getactivo()!=""){
$sql.="'".$respuestasolicitudcateoDto->getactivo()."'";
}
if($respuestasolicitudcateoDto->getfechaRegistro()!=""){
}
if($respuestasolicitudcateoDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new RespuestasolicitudcateoDTO();
$tmp->setcveRespuestaSolicitudCateo($this->_proveedor->lastID());
$tmp = $this->selectRespuestasolicitudcateo($tmp,"",$this->_proveedor);
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
public function updateRespuestasolicitudcateo($respuestasolicitudcateoDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblrespuestasolicitudcateo SET ";
if($respuestasolicitudcateoDto->getcveRespuestaSolicitudCateo()!=""){
$sql.="cveRespuestaSolicitudCateo='".$respuestasolicitudcateoDto->getcveRespuestaSolicitudCateo()."'";
if(($respuestasolicitudcateoDto->getDesRespuestaSolicitudCateo()!="") ||($respuestasolicitudcateoDto->getActivo()!="") ||($respuestasolicitudcateoDto->getFechaRegistro()!="") ||($respuestasolicitudcateoDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($respuestasolicitudcateoDto->getdesRespuestaSolicitudCateo()!=""){
$sql.="desRespuestaSolicitudCateo='".$respuestasolicitudcateoDto->getdesRespuestaSolicitudCateo()."'";
if(($respuestasolicitudcateoDto->getActivo()!="") ||($respuestasolicitudcateoDto->getFechaRegistro()!="") ||($respuestasolicitudcateoDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($respuestasolicitudcateoDto->getactivo()!=""){
$sql.="activo='".$respuestasolicitudcateoDto->getactivo()."'";
if(($respuestasolicitudcateoDto->getFechaRegistro()!="") ||($respuestasolicitudcateoDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($respuestasolicitudcateoDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$respuestasolicitudcateoDto->getfechaRegistro()."'";
if(($respuestasolicitudcateoDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($respuestasolicitudcateoDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$respuestasolicitudcateoDto->getfechaActualizacion()."'";
}
$sql.=" WHERE cveRespuestaSolicitudCateo='".$respuestasolicitudcateoDto->getcveRespuestaSolicitudCateo()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new RespuestasolicitudcateoDTO();
$tmp->setcveRespuestaSolicitudCateo($respuestasolicitudcateoDto->getcveRespuestaSolicitudCateo());
$tmp = $this->selectRespuestasolicitudcateo($tmp,"",$this->_proveedor);
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
public function deleteRespuestasolicitudcateo($respuestasolicitudcateoDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblrespuestasolicitudcateo  WHERE cveRespuestaSolicitudCateo='".$respuestasolicitudcateoDto->getcveRespuestaSolicitudCateo()."'";
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
public function selectRespuestasolicitudcateo($respuestasolicitudcateoDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveRespuestaSolicitudCateo,desRespuestaSolicitudCateo,activo,fechaRegistro,fechaActualizacion FROM tblrespuestasolicitudcateo ";
if(($respuestasolicitudcateoDto->getcveRespuestaSolicitudCateo()!="") ||($respuestasolicitudcateoDto->getdesRespuestaSolicitudCateo()!="") ||($respuestasolicitudcateoDto->getactivo()!="") ||($respuestasolicitudcateoDto->getfechaRegistro()!="") ||($respuestasolicitudcateoDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($respuestasolicitudcateoDto->getcveRespuestaSolicitudCateo()!=""){
$sql.="cveRespuestaSolicitudCateo='".$respuestasolicitudcateoDto->getCveRespuestaSolicitudCateo()."'";
if(($respuestasolicitudcateoDto->getDesRespuestaSolicitudCateo()!="") ||($respuestasolicitudcateoDto->getActivo()!="") ||($respuestasolicitudcateoDto->getFechaRegistro()!="") ||($respuestasolicitudcateoDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($respuestasolicitudcateoDto->getdesRespuestaSolicitudCateo()!=""){
$sql.="desRespuestaSolicitudCateo='".$respuestasolicitudcateoDto->getDesRespuestaSolicitudCateo()."'";
if(($respuestasolicitudcateoDto->getActivo()!="") ||($respuestasolicitudcateoDto->getFechaRegistro()!="") ||($respuestasolicitudcateoDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($respuestasolicitudcateoDto->getactivo()!=""){
$sql.="activo='".$respuestasolicitudcateoDto->getActivo()."'";
if(($respuestasolicitudcateoDto->getFechaRegistro()!="") ||($respuestasolicitudcateoDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($respuestasolicitudcateoDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$respuestasolicitudcateoDto->getFechaRegistro()."'";
if(($respuestasolicitudcateoDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($respuestasolicitudcateoDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$respuestasolicitudcateoDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new RespuestasolicitudcateoDTO();
$tmp[$contador]->setCveRespuestaSolicitudCateo($row["cveRespuestaSolicitudCateo"]);
$tmp[$contador]->setDesRespuestaSolicitudCateo($row["desRespuestaSolicitudCateo"]);
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