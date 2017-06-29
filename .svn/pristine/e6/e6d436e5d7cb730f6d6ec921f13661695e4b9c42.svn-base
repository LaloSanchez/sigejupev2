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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/estatussolicitudesordenes/EstatussolicitudesordenesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class EstatussolicitudesordenesDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertEstatussolicitudesordenes($estatussolicitudesordenesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblestatussolicitudesordenes(";
if($estatussolicitudesordenesDto->getCveEstatusSolicitudOrdenes()!=""){
$sql.="cveEstatusSolicitudOrdenes";
if(($estatussolicitudesordenesDto->getDesEstatusSolicitudOrdenes()!="") ||($estatussolicitudesordenesDto->getActivo()!="") ){
$sql.=",";
}
}
if($estatussolicitudesordenesDto->getDesEstatusSolicitudOrdenes()!=""){
$sql.="desEstatusSolicitudOrdenes";
if(($estatussolicitudesordenesDto->getActivo()!="") ){
$sql.=",";
}
}
if($estatussolicitudesordenesDto->getActivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($estatussolicitudesordenesDto->getCveEstatusSolicitudOrdenes()!=""){
$sql.="'".$estatussolicitudesordenesDto->getCveEstatusSolicitudOrdenes()."'";
if(($estatussolicitudesordenesDto->getDesEstatusSolicitudOrdenes()!="") ||($estatussolicitudesordenesDto->getActivo()!="") ){
$sql.=",";
}
}
if($estatussolicitudesordenesDto->getDesEstatusSolicitudOrdenes()!=""){
$sql.="'".$estatussolicitudesordenesDto->getDesEstatusSolicitudOrdenes()."'";
if(($estatussolicitudesordenesDto->getActivo()!="") ){
$sql.=",";
}
}
if($estatussolicitudesordenesDto->getActivo()!=""){
$sql.="'".$estatussolicitudesordenesDto->getActivo()."'";
}
if($estatussolicitudesordenesDto->getFechaRegistro()!=""){
}
if($estatussolicitudesordenesDto->getFechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new EstatussolicitudesordenesDTO();
$tmp->setcveEstatusSolicitudOrdenes($this->_proveedor->lastID());
$tmp = $this->selectEstatussolicitudesordenes($tmp,"",$this->_proveedor);
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
public function updateEstatussolicitudesordenes($estatussolicitudesordenesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblestatussolicitudesordenes SET ";
if($estatussolicitudesordenesDto->getCveEstatusSolicitudOrdenes()!=""){
$sql.="cveEstatusSolicitudOrdenes='".$estatussolicitudesordenesDto->getCveEstatusSolicitudOrdenes()."'";
if(($estatussolicitudesordenesDto->getDesEstatusSolicitudOrdenes()!="") ||($estatussolicitudesordenesDto->getActivo()!="") ||($estatussolicitudesordenesDto->getFechaRegistro()!="") ||($estatussolicitudesordenesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($estatussolicitudesordenesDto->getDesEstatusSolicitudOrdenes()!=""){
$sql.="desEstatusSolicitudOrdenes='".$estatussolicitudesordenesDto->getDesEstatusSolicitudOrdenes()."'";
if(($estatussolicitudesordenesDto->getActivo()!="") ||($estatussolicitudesordenesDto->getFechaRegistro()!="") ||($estatussolicitudesordenesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($estatussolicitudesordenesDto->getActivo()!=""){
$sql.="activo='".$estatussolicitudesordenesDto->getActivo()."'";
if(($estatussolicitudesordenesDto->getFechaRegistro()!="") ||($estatussolicitudesordenesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($estatussolicitudesordenesDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$estatussolicitudesordenesDto->getFechaRegistro()."'";
if(($estatussolicitudesordenesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($estatussolicitudesordenesDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$estatussolicitudesordenesDto->getFechaActualizacion()."'";
}
$sql.=" WHERE cveEstatusSolicitudOrdenes='".$estatussolicitudesordenesDto->getCveEstatusSolicitudOrdenes()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new EstatussolicitudesordenesDTO();
$tmp->setcveEstatusSolicitudOrdenes($estatussolicitudesordenesDto->getCveEstatusSolicitudOrdenes());
$tmp = $this->selectEstatussolicitudesordenes($tmp,"",$this->_proveedor);
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
public function deleteEstatussolicitudesordenes($estatussolicitudesordenesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblestatussolicitudesordenes  WHERE cveEstatusSolicitudOrdenes='".$estatussolicitudesordenesDto->getCveEstatusSolicitudOrdenes()."'";
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
public function selectEstatussolicitudesordenes($estatussolicitudesordenesDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveEstatusSolicitudOrdenes,desEstatusSolicitudOrdenes,activo,fechaRegistro,fechaActualizacion FROM tblestatussolicitudesordenes ";
if(($estatussolicitudesordenesDto->getCveEstatusSolicitudOrdenes()!="") ||($estatussolicitudesordenesDto->getDesEstatusSolicitudOrdenes()!="") ||($estatussolicitudesordenesDto->getActivo()!="") ||($estatussolicitudesordenesDto->getFechaRegistro()!="") ||($estatussolicitudesordenesDto->getFechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($estatussolicitudesordenesDto->getCveEstatusSolicitudOrdenes()!=""){
$sql.="cveEstatusSolicitudOrdenes='".$estatussolicitudesordenesDto->getCveEstatusSolicitudOrdenes()."'";
if(($estatussolicitudesordenesDto->getDesEstatusSolicitudOrdenes()!="") ||($estatussolicitudesordenesDto->getActivo()!="") ||($estatussolicitudesordenesDto->getFechaRegistro()!="") ||($estatussolicitudesordenesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($estatussolicitudesordenesDto->getDesEstatusSolicitudOrdenes()!=""){
$sql.="desEstatusSolicitudOrdenes='".$estatussolicitudesordenesDto->getDesEstatusSolicitudOrdenes()."'";
if(($estatussolicitudesordenesDto->getActivo()!="") ||($estatussolicitudesordenesDto->getFechaRegistro()!="") ||($estatussolicitudesordenesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($estatussolicitudesordenesDto->getActivo()!=""){
$sql.="activo='".$estatussolicitudesordenesDto->getActivo()."'";
if(($estatussolicitudesordenesDto->getFechaRegistro()!="") ||($estatussolicitudesordenesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($estatussolicitudesordenesDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$estatussolicitudesordenesDto->getFechaRegistro()."'";
if(($estatussolicitudesordenesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($estatussolicitudesordenesDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$estatussolicitudesordenesDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new EstatussolicitudesordenesDTO();
$tmp[$contador]->setCveEstatusSolicitudOrdenes($row["cveEstatusSolicitudOrdenes"]);
$tmp[$contador]->setDesEstatusSolicitudOrdenes($row["desEstatusSolicitudOrdenes"]);
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