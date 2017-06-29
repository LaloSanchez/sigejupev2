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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/respuestasolicitudmuestra/RespuestasolicitudmuestraDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class RespuestasolicitudmuestraDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertRespuestasolicitudmuestra($respuestasolicitudmuestraDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblrespuestasolicitudmuestra(";
if($respuestasolicitudmuestraDto->getCveRespuestaSolicitudMuestra()!=""){
$sql.="cveRespuestaSolicitudMuestra";
if(($respuestasolicitudmuestraDto->getDesRespuestaSolicitudMuestra()!="") ||($respuestasolicitudmuestraDto->getActivo()!="") ){
$sql.=",";
}
}
if($respuestasolicitudmuestraDto->getDesRespuestaSolicitudMuestra()!=""){
$sql.="desRespuestaSolicitudMuestra";
if(($respuestasolicitudmuestraDto->getActivo()!="") ){
$sql.=",";
}
}
if($respuestasolicitudmuestraDto->getActivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($respuestasolicitudmuestraDto->getCveRespuestaSolicitudMuestra()!=""){
$sql.="'".$respuestasolicitudmuestraDto->getCveRespuestaSolicitudMuestra()."'";
if(($respuestasolicitudmuestraDto->getDesRespuestaSolicitudMuestra()!="") ||($respuestasolicitudmuestraDto->getActivo()!="") ){
$sql.=",";
}
}
if($respuestasolicitudmuestraDto->getDesRespuestaSolicitudMuestra()!=""){
$sql.="'".$respuestasolicitudmuestraDto->getDesRespuestaSolicitudMuestra()."'";
if(($respuestasolicitudmuestraDto->getActivo()!="") ){
$sql.=",";
}
}
if($respuestasolicitudmuestraDto->getActivo()!=""){
$sql.="'".$respuestasolicitudmuestraDto->getActivo()."'";
}
if($respuestasolicitudmuestraDto->getFechaRegistro()!=""){
}
if($respuestasolicitudmuestraDto->getFechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new RespuestasolicitudmuestraDTO();
$tmp->setcveRespuestaSolicitudMuestra($this->_proveedor->lastID());
$tmp = $this->selectRespuestasolicitudmuestra($tmp,"",$this->_proveedor);
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
public function updateRespuestasolicitudmuestra($respuestasolicitudmuestraDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblrespuestasolicitudmuestra SET ";
if($respuestasolicitudmuestraDto->getCveRespuestaSolicitudMuestra()!=""){
$sql.="cveRespuestaSolicitudMuestra='".$respuestasolicitudmuestraDto->getCveRespuestaSolicitudMuestra()."'";
if(($respuestasolicitudmuestraDto->getDesRespuestaSolicitudMuestra()!="") ||($respuestasolicitudmuestraDto->getActivo()!="") ||($respuestasolicitudmuestraDto->getFechaRegistro()!="") ||($respuestasolicitudmuestraDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($respuestasolicitudmuestraDto->getDesRespuestaSolicitudMuestra()!=""){
$sql.="desRespuestaSolicitudMuestra='".$respuestasolicitudmuestraDto->getDesRespuestaSolicitudMuestra()."'";
if(($respuestasolicitudmuestraDto->getActivo()!="") ||($respuestasolicitudmuestraDto->getFechaRegistro()!="") ||($respuestasolicitudmuestraDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($respuestasolicitudmuestraDto->getActivo()!=""){
$sql.="activo='".$respuestasolicitudmuestraDto->getActivo()."'";
if(($respuestasolicitudmuestraDto->getFechaRegistro()!="") ||($respuestasolicitudmuestraDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($respuestasolicitudmuestraDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$respuestasolicitudmuestraDto->getFechaRegistro()."'";
if(($respuestasolicitudmuestraDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($respuestasolicitudmuestraDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$respuestasolicitudmuestraDto->getFechaActualizacion()."'";
}
$sql.=" WHERE cveRespuestaSolicitudMuestra='".$respuestasolicitudmuestraDto->getCveRespuestaSolicitudMuestra()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new RespuestasolicitudmuestraDTO();
$tmp->setcveRespuestaSolicitudMuestra($respuestasolicitudmuestraDto->getCveRespuestaSolicitudMuestra());
$tmp = $this->selectRespuestasolicitudmuestra($tmp,"",$this->_proveedor);
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
public function deleteRespuestasolicitudmuestra($respuestasolicitudmuestraDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblrespuestasolicitudmuestra  WHERE cveRespuestaSolicitudMuestra='".$respuestasolicitudmuestraDto->getCveRespuestaSolicitudMuestra()."'";
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
public function selectRespuestasolicitudmuestra($respuestasolicitudmuestraDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveRespuestaSolicitudMuestra,desRespuestaSolicitudMuestra,activo,fechaRegistro,fechaActualizacion FROM tblrespuestasolicitudmuestra ";
if(($respuestasolicitudmuestraDto->getCveRespuestaSolicitudMuestra()!="") ||($respuestasolicitudmuestraDto->getDesRespuestaSolicitudMuestra()!="") ||($respuestasolicitudmuestraDto->getActivo()!="") ||($respuestasolicitudmuestraDto->getFechaRegistro()!="") ||($respuestasolicitudmuestraDto->getFechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($respuestasolicitudmuestraDto->getCveRespuestaSolicitudMuestra()!=""){
$sql.="cveRespuestaSolicitudMuestra='".$respuestasolicitudmuestraDto->getCveRespuestaSolicitudMuestra()."'";
if(($respuestasolicitudmuestraDto->getDesRespuestaSolicitudMuestra()!="") ||($respuestasolicitudmuestraDto->getActivo()!="") ||($respuestasolicitudmuestraDto->getFechaRegistro()!="") ||($respuestasolicitudmuestraDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($respuestasolicitudmuestraDto->getDesRespuestaSolicitudMuestra()!=""){
$sql.="desRespuestaSolicitudMuestra='".$respuestasolicitudmuestraDto->getDesRespuestaSolicitudMuestra()."'";
if(($respuestasolicitudmuestraDto->getActivo()!="") ||($respuestasolicitudmuestraDto->getFechaRegistro()!="") ||($respuestasolicitudmuestraDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($respuestasolicitudmuestraDto->getActivo()!=""){
$sql.="activo='".$respuestasolicitudmuestraDto->getActivo()."'";
if(($respuestasolicitudmuestraDto->getFechaRegistro()!="") ||($respuestasolicitudmuestraDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($respuestasolicitudmuestraDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$respuestasolicitudmuestraDto->getFechaRegistro()."'";
if(($respuestasolicitudmuestraDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($respuestasolicitudmuestraDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$respuestasolicitudmuestraDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new RespuestasolicitudmuestraDTO();
$tmp[$contador]->setCveRespuestaSolicitudMuestra($row["cveRespuestaSolicitudMuestra"]);
$tmp[$contador]->setDesRespuestaSolicitudMuestra($row["desRespuestaSolicitudMuestra"]);
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