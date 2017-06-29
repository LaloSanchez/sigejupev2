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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/reasignaciontocas/ReasignaciontocasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class ReasignaciontocasDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertReasignaciontocas($reasignaciontocasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblreasignaciontocas(";
if($reasignaciontocasDto->getIdReasignacionToca()!=""){
$sql.="idReasignacionToca";
if(($reasignaciontocasDto->getIdReferenciaOrigen()!="") ||($reasignaciontocasDto->getIdReferenciaDestino()!="") ||($reasignaciontocasDto->getActivo()!="") ){
$sql.=",";
}
}
if($reasignaciontocasDto->getIdReferenciaOrigen()!=""){
$sql.="idReferenciaOrigen";
if(($reasignaciontocasDto->getIdReferenciaDestino()!="") ||($reasignaciontocasDto->getActivo()!="") ){
$sql.=",";
}
}
if($reasignaciontocasDto->getIdReferenciaDestino()!=""){
$sql.="idReferenciaDestino";
if(($reasignaciontocasDto->getActivo()!="") ){
$sql.=",";
}
}
if($reasignaciontocasDto->getActivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($reasignaciontocasDto->getIdReasignacionToca()!=""){
$sql.="'".$reasignaciontocasDto->getIdReasignacionToca()."'";
if(($reasignaciontocasDto->getIdReferenciaOrigen()!="") ||($reasignaciontocasDto->getIdReferenciaDestino()!="") ||($reasignaciontocasDto->getActivo()!="") ){
$sql.=",";
}
}
if($reasignaciontocasDto->getIdReferenciaOrigen()!=""){
$sql.="'".$reasignaciontocasDto->getIdReferenciaOrigen()."'";
if(($reasignaciontocasDto->getIdReferenciaDestino()!="") ||($reasignaciontocasDto->getActivo()!="") ){
$sql.=",";
}
}
if($reasignaciontocasDto->getIdReferenciaDestino()!=""){
$sql.="'".$reasignaciontocasDto->getIdReferenciaDestino()."'";
if(($reasignaciontocasDto->getActivo()!="") ){
$sql.=",";
}
}
if($reasignaciontocasDto->getActivo()!=""){
$sql.="'".$reasignaciontocasDto->getActivo()."'";
}
if($reasignaciontocasDto->getFechaRegistro()!=""){
}
if($reasignaciontocasDto->getFechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new ReasignaciontocasDTO();
$tmp->setidReasignacionToca($this->_proveedor->lastID());
$tmp = $this->selectReasignaciontocas($tmp,"",$this->_proveedor);
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
public function updateReasignaciontocas($reasignaciontocasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblreasignaciontocas SET ";
if($reasignaciontocasDto->getIdReasignacionToca()!=""){
$sql.="idReasignacionToca='".$reasignaciontocasDto->getIdReasignacionToca()."'";
if(($reasignaciontocasDto->getIdReferenciaOrigen()!="") ||($reasignaciontocasDto->getIdReferenciaDestino()!="") ||($reasignaciontocasDto->getActivo()!="") ||($reasignaciontocasDto->getFechaRegistro()!="") ||($reasignaciontocasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($reasignaciontocasDto->getIdReferenciaOrigen()!=""){
$sql.="idReferenciaOrigen='".$reasignaciontocasDto->getIdReferenciaOrigen()."'";
if(($reasignaciontocasDto->getIdReferenciaDestino()!="") ||($reasignaciontocasDto->getActivo()!="") ||($reasignaciontocasDto->getFechaRegistro()!="") ||($reasignaciontocasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($reasignaciontocasDto->getIdReferenciaDestino()!=""){
$sql.="idReferenciaDestino='".$reasignaciontocasDto->getIdReferenciaDestino()."'";
if(($reasignaciontocasDto->getActivo()!="") ||($reasignaciontocasDto->getFechaRegistro()!="") ||($reasignaciontocasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($reasignaciontocasDto->getActivo()!=""){
$sql.="activo='".$reasignaciontocasDto->getActivo()."'";
if(($reasignaciontocasDto->getFechaRegistro()!="") ||($reasignaciontocasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($reasignaciontocasDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$reasignaciontocasDto->getFechaRegistro()."'";
if(($reasignaciontocasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($reasignaciontocasDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$reasignaciontocasDto->getFechaActualizacion()."'";
}
$sql.=" WHERE idReasignacionToca='".$reasignaciontocasDto->getIdReasignacionToca()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new ReasignaciontocasDTO();
$tmp->setidReasignacionToca($reasignaciontocasDto->getIdReasignacionToca());
$tmp = $this->selectReasignaciontocas($tmp,"",$this->_proveedor);
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
public function deleteReasignaciontocas($reasignaciontocasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblreasignaciontocas  WHERE idReasignacionToca='".$reasignaciontocasDto->getIdReasignacionToca()."'";
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
public function selectReasignaciontocas($reasignaciontocasDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idReasignacionToca,idReferenciaOrigen,idReferenciaDestino,activo,fechaRegistro,fechaActualizacion FROM tblreasignaciontocas ";
if(($reasignaciontocasDto->getIdReasignacionToca()!="") ||($reasignaciontocasDto->getIdReferenciaOrigen()!="") ||($reasignaciontocasDto->getIdReferenciaDestino()!="") ||($reasignaciontocasDto->getActivo()!="") ||($reasignaciontocasDto->getFechaRegistro()!="") ||($reasignaciontocasDto->getFechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($reasignaciontocasDto->getIdReasignacionToca()!=""){
$sql.="idReasignacionToca='".$reasignaciontocasDto->getIdReasignacionToca()."'";
if(($reasignaciontocasDto->getIdReferenciaOrigen()!="") ||($reasignaciontocasDto->getIdReferenciaDestino()!="") ||($reasignaciontocasDto->getActivo()!="") ||($reasignaciontocasDto->getFechaRegistro()!="") ||($reasignaciontocasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($reasignaciontocasDto->getIdReferenciaOrigen()!=""){
$sql.="idReferenciaOrigen='".$reasignaciontocasDto->getIdReferenciaOrigen()."'";
if(($reasignaciontocasDto->getIdReferenciaDestino()!="") ||($reasignaciontocasDto->getActivo()!="") ||($reasignaciontocasDto->getFechaRegistro()!="") ||($reasignaciontocasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($reasignaciontocasDto->getIdReferenciaDestino()!=""){
$sql.="idReferenciaDestino='".$reasignaciontocasDto->getIdReferenciaDestino()."'";
if(($reasignaciontocasDto->getActivo()!="") ||($reasignaciontocasDto->getFechaRegistro()!="") ||($reasignaciontocasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($reasignaciontocasDto->getActivo()!=""){
$sql.="activo='".$reasignaciontocasDto->getActivo()."'";
if(($reasignaciontocasDto->getFechaRegistro()!="") ||($reasignaciontocasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($reasignaciontocasDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$reasignaciontocasDto->getFechaRegistro()."'";
if(($reasignaciontocasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($reasignaciontocasDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$reasignaciontocasDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new ReasignaciontocasDTO();
$tmp[$contador]->setIdReasignacionToca($row["idReasignacionToca"]);
$tmp[$contador]->setIdReferenciaOrigen($row["idReferenciaOrigen"]);
$tmp[$contador]->setIdReferenciaDestino($row["idReferenciaDestino"]);
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