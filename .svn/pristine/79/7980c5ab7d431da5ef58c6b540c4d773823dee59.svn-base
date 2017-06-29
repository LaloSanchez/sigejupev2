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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/testigoscarpetasjudiciales/TestigoscarpetasjudicialesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class TestigoscarpetasjudicialesDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertTestigoscarpetasjudiciales($testigoscarpetasjudicialesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tbltestigoscarpetasjudiciales(";
if($testigoscarpetasjudicialesDto->getIdTestigoCarpetaJudicial()!=""){
$sql.="idTestigoCarpetaJudicial";
if(($testigoscarpetasjudicialesDto->getIdCarpetaJudicial()!="") ||($testigoscarpetasjudicialesDto->getCveTipoCarpeta()!="") ||($testigoscarpetasjudicialesDto->getCveReferenciaTipoParte()!="") ||($testigoscarpetasjudicialesDto->getIdReferenciaParte()!="") ||($testigoscarpetasjudicialesDto->getCveTipoParte()!="") ||($testigoscarpetasjudicialesDto->getNombreTestigo()!="") ||($testigoscarpetasjudicialesDto->getActivo()!="") ){
$sql.=",";
}
}
if($testigoscarpetasjudicialesDto->getIdCarpetaJudicial()!=""){
$sql.="idCarpetaJudicial";
if(($testigoscarpetasjudicialesDto->getCveTipoCarpeta()!="") ||($testigoscarpetasjudicialesDto->getCveReferenciaTipoParte()!="") ||($testigoscarpetasjudicialesDto->getIdReferenciaParte()!="") ||($testigoscarpetasjudicialesDto->getCveTipoParte()!="") ||($testigoscarpetasjudicialesDto->getNombreTestigo()!="") ||($testigoscarpetasjudicialesDto->getActivo()!="") ){
$sql.=",";
}
}
if($testigoscarpetasjudicialesDto->getCveTipoCarpeta()!=""){
$sql.="cveTipoCarpeta";
if(($testigoscarpetasjudicialesDto->getCveReferenciaTipoParte()!="") ||($testigoscarpetasjudicialesDto->getIdReferenciaParte()!="") ||($testigoscarpetasjudicialesDto->getCveTipoParte()!="") ||($testigoscarpetasjudicialesDto->getNombreTestigo()!="") ||($testigoscarpetasjudicialesDto->getActivo()!="") ){
$sql.=",";
}
}
if($testigoscarpetasjudicialesDto->getCveReferenciaTipoParte()!=""){
$sql.="cveReferenciaTipoParte";
if(($testigoscarpetasjudicialesDto->getIdReferenciaParte()!="") ||($testigoscarpetasjudicialesDto->getCveTipoParte()!="") ||($testigoscarpetasjudicialesDto->getNombreTestigo()!="") ||($testigoscarpetasjudicialesDto->getActivo()!="") ){
$sql.=",";
}
}
if($testigoscarpetasjudicialesDto->getIdReferenciaParte()!=""){
$sql.="idReferenciaParte";
if(($testigoscarpetasjudicialesDto->getCveTipoParte()!="") ||($testigoscarpetasjudicialesDto->getNombreTestigo()!="") ||($testigoscarpetasjudicialesDto->getActivo()!="") ){
$sql.=",";
}
}
if($testigoscarpetasjudicialesDto->getCveTipoParte()!=""){
$sql.="cveTipoParte";
if(($testigoscarpetasjudicialesDto->getNombreTestigo()!="") ||($testigoscarpetasjudicialesDto->getActivo()!="") ){
$sql.=",";
}
}
if($testigoscarpetasjudicialesDto->getNombreTestigo()!=""){
$sql.="nombreTestigo";
if(($testigoscarpetasjudicialesDto->getActivo()!="") ){
$sql.=",";
}
}
if($testigoscarpetasjudicialesDto->getActivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaactualizacion";
$sql.=") VALUES(";
if($testigoscarpetasjudicialesDto->getIdTestigoCarpetaJudicial()!=""){
$sql.="'".$testigoscarpetasjudicialesDto->getIdTestigoCarpetaJudicial()."'";
if(($testigoscarpetasjudicialesDto->getIdCarpetaJudicial()!="") ||($testigoscarpetasjudicialesDto->getCveTipoCarpeta()!="") ||($testigoscarpetasjudicialesDto->getCveReferenciaTipoParte()!="") ||($testigoscarpetasjudicialesDto->getIdReferenciaParte()!="") ||($testigoscarpetasjudicialesDto->getCveTipoParte()!="") ||($testigoscarpetasjudicialesDto->getNombreTestigo()!="") ||($testigoscarpetasjudicialesDto->getActivo()!="") ){
$sql.=",";
}
}
if($testigoscarpetasjudicialesDto->getIdCarpetaJudicial()!=""){
$sql.="'".$testigoscarpetasjudicialesDto->getIdCarpetaJudicial()."'";
if(($testigoscarpetasjudicialesDto->getCveTipoCarpeta()!="") ||($testigoscarpetasjudicialesDto->getCveReferenciaTipoParte()!="") ||($testigoscarpetasjudicialesDto->getIdReferenciaParte()!="") ||($testigoscarpetasjudicialesDto->getCveTipoParte()!="") ||($testigoscarpetasjudicialesDto->getNombreTestigo()!="") ||($testigoscarpetasjudicialesDto->getActivo()!="") ){
$sql.=",";
}
}
if($testigoscarpetasjudicialesDto->getCveTipoCarpeta()!=""){
$sql.="'".$testigoscarpetasjudicialesDto->getCveTipoCarpeta()."'";
if(($testigoscarpetasjudicialesDto->getCveReferenciaTipoParte()!="") ||($testigoscarpetasjudicialesDto->getIdReferenciaParte()!="") ||($testigoscarpetasjudicialesDto->getCveTipoParte()!="") ||($testigoscarpetasjudicialesDto->getNombreTestigo()!="") ||($testigoscarpetasjudicialesDto->getActivo()!="") ){
$sql.=",";
}
}
if($testigoscarpetasjudicialesDto->getCveReferenciaTipoParte()!=""){
$sql.="'".$testigoscarpetasjudicialesDto->getCveReferenciaTipoParte()."'";
if(($testigoscarpetasjudicialesDto->getIdReferenciaParte()!="") ||($testigoscarpetasjudicialesDto->getCveTipoParte()!="") ||($testigoscarpetasjudicialesDto->getNombreTestigo()!="") ||($testigoscarpetasjudicialesDto->getActivo()!="") ){
$sql.=",";
}
}
if($testigoscarpetasjudicialesDto->getIdReferenciaParte()!=""){
$sql.="'".$testigoscarpetasjudicialesDto->getIdReferenciaParte()."'";
if(($testigoscarpetasjudicialesDto->getCveTipoParte()!="") ||($testigoscarpetasjudicialesDto->getNombreTestigo()!="") ||($testigoscarpetasjudicialesDto->getActivo()!="") ){
$sql.=",";
}
}
if($testigoscarpetasjudicialesDto->getCveTipoParte()!=""){
$sql.="'".$testigoscarpetasjudicialesDto->getCveTipoParte()."'";
if(($testigoscarpetasjudicialesDto->getNombreTestigo()!="") ||($testigoscarpetasjudicialesDto->getActivo()!="") ){
$sql.=",";
}
}
if($testigoscarpetasjudicialesDto->getNombreTestigo()!=""){
$sql.="'".$testigoscarpetasjudicialesDto->getNombreTestigo()."'";
if(($testigoscarpetasjudicialesDto->getActivo()!="") ){
$sql.=",";
}
}
if($testigoscarpetasjudicialesDto->getActivo()!=""){
$sql.="'".$testigoscarpetasjudicialesDto->getActivo()."'";
}
if($testigoscarpetasjudicialesDto->getFechaRegistro()!=""){
}
if($testigoscarpetasjudicialesDto->getFechaactualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TestigoscarpetasjudicialesDTO();
$tmp->setidTestigoCarpetaJudicial($this->_proveedor->lastID());
$tmp = $this->selectTestigoscarpetasjudiciales($tmp,"",$this->_proveedor);
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
public function updateTestigoscarpetasjudiciales($testigoscarpetasjudicialesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tbltestigoscarpetasjudiciales SET ";
if($testigoscarpetasjudicialesDto->getIdTestigoCarpetaJudicial()!=""){
$sql.="idTestigoCarpetaJudicial='".$testigoscarpetasjudicialesDto->getIdTestigoCarpetaJudicial()."'";
if(($testigoscarpetasjudicialesDto->getIdCarpetaJudicial()!="") ||($testigoscarpetasjudicialesDto->getCveTipoCarpeta()!="") ||($testigoscarpetasjudicialesDto->getCveReferenciaTipoParte()!="") ||($testigoscarpetasjudicialesDto->getIdReferenciaParte()!="") ||($testigoscarpetasjudicialesDto->getCveTipoParte()!="") ||($testigoscarpetasjudicialesDto->getNombreTestigo()!="") ||($testigoscarpetasjudicialesDto->getActivo()!="") ||($testigoscarpetasjudicialesDto->getFechaRegistro()!="") ||($testigoscarpetasjudicialesDto->getFechaactualizacion()!="") ){
$sql.=",";
}
}
if($testigoscarpetasjudicialesDto->getIdCarpetaJudicial()!=""){
$sql.="idCarpetaJudicial='".$testigoscarpetasjudicialesDto->getIdCarpetaJudicial()."'";
if(($testigoscarpetasjudicialesDto->getCveTipoCarpeta()!="") ||($testigoscarpetasjudicialesDto->getCveReferenciaTipoParte()!="") ||($testigoscarpetasjudicialesDto->getIdReferenciaParte()!="") ||($testigoscarpetasjudicialesDto->getCveTipoParte()!="") ||($testigoscarpetasjudicialesDto->getNombreTestigo()!="") ||($testigoscarpetasjudicialesDto->getActivo()!="") ||($testigoscarpetasjudicialesDto->getFechaRegistro()!="") ||($testigoscarpetasjudicialesDto->getFechaactualizacion()!="") ){
$sql.=",";
}
}
if($testigoscarpetasjudicialesDto->getCveTipoCarpeta()!=""){
$sql.="cveTipoCarpeta='".$testigoscarpetasjudicialesDto->getCveTipoCarpeta()."'";
if(($testigoscarpetasjudicialesDto->getCveReferenciaTipoParte()!="") ||($testigoscarpetasjudicialesDto->getIdReferenciaParte()!="") ||($testigoscarpetasjudicialesDto->getCveTipoParte()!="") ||($testigoscarpetasjudicialesDto->getNombreTestigo()!="") ||($testigoscarpetasjudicialesDto->getActivo()!="") ||($testigoscarpetasjudicialesDto->getFechaRegistro()!="") ||($testigoscarpetasjudicialesDto->getFechaactualizacion()!="") ){
$sql.=",";
}
}
if($testigoscarpetasjudicialesDto->getCveReferenciaTipoParte()!=""){
$sql.="cveReferenciaTipoParte='".$testigoscarpetasjudicialesDto->getCveReferenciaTipoParte()."'";
if(($testigoscarpetasjudicialesDto->getIdReferenciaParte()!="") ||($testigoscarpetasjudicialesDto->getCveTipoParte()!="") ||($testigoscarpetasjudicialesDto->getNombreTestigo()!="") ||($testigoscarpetasjudicialesDto->getActivo()!="") ||($testigoscarpetasjudicialesDto->getFechaRegistro()!="") ||($testigoscarpetasjudicialesDto->getFechaactualizacion()!="") ){
$sql.=",";
}
}
if($testigoscarpetasjudicialesDto->getIdReferenciaParte()!=""){
$sql.="idReferenciaParte='".$testigoscarpetasjudicialesDto->getIdReferenciaParte()."'";
if(($testigoscarpetasjudicialesDto->getCveTipoParte()!="") ||($testigoscarpetasjudicialesDto->getNombreTestigo()!="") ||($testigoscarpetasjudicialesDto->getActivo()!="") ||($testigoscarpetasjudicialesDto->getFechaRegistro()!="") ||($testigoscarpetasjudicialesDto->getFechaactualizacion()!="") ){
$sql.=",";
}
}
if($testigoscarpetasjudicialesDto->getCveTipoParte()!=""){
$sql.="cveTipoParte='".$testigoscarpetasjudicialesDto->getCveTipoParte()."'";
if(($testigoscarpetasjudicialesDto->getNombreTestigo()!="") ||($testigoscarpetasjudicialesDto->getActivo()!="") ||($testigoscarpetasjudicialesDto->getFechaRegistro()!="") ||($testigoscarpetasjudicialesDto->getFechaactualizacion()!="") ){
$sql.=",";
}
}
if($testigoscarpetasjudicialesDto->getNombreTestigo()!=""){
$sql.="nombreTestigo='".$testigoscarpetasjudicialesDto->getNombreTestigo()."'";
if(($testigoscarpetasjudicialesDto->getActivo()!="") ||($testigoscarpetasjudicialesDto->getFechaRegistro()!="") ||($testigoscarpetasjudicialesDto->getFechaactualizacion()!="") ){
$sql.=",";
}
}
if($testigoscarpetasjudicialesDto->getActivo()!=""){
$sql.="activo='".$testigoscarpetasjudicialesDto->getActivo()."'";
if(($testigoscarpetasjudicialesDto->getFechaRegistro()!="") ||($testigoscarpetasjudicialesDto->getFechaactualizacion()!="") ){
$sql.=",";
}
}
if($testigoscarpetasjudicialesDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$testigoscarpetasjudicialesDto->getFechaRegistro()."'";
if(($testigoscarpetasjudicialesDto->getFechaactualizacion()!="") ){
$sql.=",";
}
}
if($testigoscarpetasjudicialesDto->getFechaactualizacion()!=""){
$sql.="fechaactualizacion='".$testigoscarpetasjudicialesDto->getFechaactualizacion()."'";
}
$sql.=" WHERE idTestigoCarpetaJudicial='".$testigoscarpetasjudicialesDto->getIdTestigoCarpetaJudicial()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TestigoscarpetasjudicialesDTO();
$tmp->setidTestigoCarpetaJudicial($testigoscarpetasjudicialesDto->getIdTestigoCarpetaJudicial());
$tmp = $this->selectTestigoscarpetasjudiciales($tmp,"",$this->_proveedor);
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
public function deleteTestigoscarpetasjudiciales($testigoscarpetasjudicialesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tbltestigoscarpetasjudiciales  WHERE idTestigoCarpetaJudicial='".$testigoscarpetasjudicialesDto->getIdTestigoCarpetaJudicial()."'";
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
public function selectTestigoscarpetasjudiciales($testigoscarpetasjudicialesDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idTestigoCarpetaJudicial,idCarpetaJudicial,cveTipoCarpeta,cveReferenciaTipoParte,idReferenciaParte,cveTipoParte,nombreTestigo,activo,fechaRegistro,fechaactualizacion FROM tbltestigoscarpetasjudiciales ";
if(($testigoscarpetasjudicialesDto->getIdTestigoCarpetaJudicial()!="") ||($testigoscarpetasjudicialesDto->getIdCarpetaJudicial()!="") ||($testigoscarpetasjudicialesDto->getCveTipoCarpeta()!="") ||($testigoscarpetasjudicialesDto->getCveReferenciaTipoParte()!="") ||($testigoscarpetasjudicialesDto->getIdReferenciaParte()!="") ||($testigoscarpetasjudicialesDto->getCveTipoParte()!="") ||($testigoscarpetasjudicialesDto->getNombreTestigo()!="") ||($testigoscarpetasjudicialesDto->getActivo()!="") ||($testigoscarpetasjudicialesDto->getFechaRegistro()!="") ||($testigoscarpetasjudicialesDto->getFechaactualizacion()!="") ){
$sql.=" WHERE ";
}
if($testigoscarpetasjudicialesDto->getIdTestigoCarpetaJudicial()!=""){
$sql.="idTestigoCarpetaJudicial='".$testigoscarpetasjudicialesDto->getIdTestigoCarpetaJudicial()."'";
if(($testigoscarpetasjudicialesDto->getIdCarpetaJudicial()!="") ||($testigoscarpetasjudicialesDto->getCveTipoCarpeta()!="") ||($testigoscarpetasjudicialesDto->getCveReferenciaTipoParte()!="") ||($testigoscarpetasjudicialesDto->getIdReferenciaParte()!="") ||($testigoscarpetasjudicialesDto->getCveTipoParte()!="") ||($testigoscarpetasjudicialesDto->getNombreTestigo()!="") ||($testigoscarpetasjudicialesDto->getActivo()!="") ||($testigoscarpetasjudicialesDto->getFechaRegistro()!="") ||($testigoscarpetasjudicialesDto->getFechaactualizacion()!="") ){
$sql.=" AND ";
}
}
if($testigoscarpetasjudicialesDto->getIdCarpetaJudicial()!=""){
$sql.="idCarpetaJudicial='".$testigoscarpetasjudicialesDto->getIdCarpetaJudicial()."'";
if(($testigoscarpetasjudicialesDto->getCveTipoCarpeta()!="") ||($testigoscarpetasjudicialesDto->getCveReferenciaTipoParte()!="") ||($testigoscarpetasjudicialesDto->getIdReferenciaParte()!="") ||($testigoscarpetasjudicialesDto->getCveTipoParte()!="") ||($testigoscarpetasjudicialesDto->getNombreTestigo()!="") ||($testigoscarpetasjudicialesDto->getActivo()!="") ||($testigoscarpetasjudicialesDto->getFechaRegistro()!="") ||($testigoscarpetasjudicialesDto->getFechaactualizacion()!="") ){
$sql.=" AND ";
}
}
if($testigoscarpetasjudicialesDto->getCveTipoCarpeta()!=""){
$sql.="cveTipoCarpeta='".$testigoscarpetasjudicialesDto->getCveTipoCarpeta()."'";
if(($testigoscarpetasjudicialesDto->getCveReferenciaTipoParte()!="") ||($testigoscarpetasjudicialesDto->getIdReferenciaParte()!="") ||($testigoscarpetasjudicialesDto->getCveTipoParte()!="") ||($testigoscarpetasjudicialesDto->getNombreTestigo()!="") ||($testigoscarpetasjudicialesDto->getActivo()!="") ||($testigoscarpetasjudicialesDto->getFechaRegistro()!="") ||($testigoscarpetasjudicialesDto->getFechaactualizacion()!="") ){
$sql.=" AND ";
}
}
if($testigoscarpetasjudicialesDto->getCveReferenciaTipoParte()!=""){
$sql.="cveReferenciaTipoParte='".$testigoscarpetasjudicialesDto->getCveReferenciaTipoParte()."'";
if(($testigoscarpetasjudicialesDto->getIdReferenciaParte()!="") ||($testigoscarpetasjudicialesDto->getCveTipoParte()!="") ||($testigoscarpetasjudicialesDto->getNombreTestigo()!="") ||($testigoscarpetasjudicialesDto->getActivo()!="") ||($testigoscarpetasjudicialesDto->getFechaRegistro()!="") ||($testigoscarpetasjudicialesDto->getFechaactualizacion()!="") ){
$sql.=" AND ";
}
}
if($testigoscarpetasjudicialesDto->getIdReferenciaParte()!=""){
$sql.="idReferenciaParte='".$testigoscarpetasjudicialesDto->getIdReferenciaParte()."'";
if(($testigoscarpetasjudicialesDto->getCveTipoParte()!="") ||($testigoscarpetasjudicialesDto->getNombreTestigo()!="") ||($testigoscarpetasjudicialesDto->getActivo()!="") ||($testigoscarpetasjudicialesDto->getFechaRegistro()!="") ||($testigoscarpetasjudicialesDto->getFechaactualizacion()!="") ){
$sql.=" AND ";
}
}
if($testigoscarpetasjudicialesDto->getCveTipoParte()!=""){
$sql.="cveTipoParte='".$testigoscarpetasjudicialesDto->getCveTipoParte()."'";
if(($testigoscarpetasjudicialesDto->getNombreTestigo()!="") ||($testigoscarpetasjudicialesDto->getActivo()!="") ||($testigoscarpetasjudicialesDto->getFechaRegistro()!="") ||($testigoscarpetasjudicialesDto->getFechaactualizacion()!="") ){
$sql.=" AND ";
}
}
if($testigoscarpetasjudicialesDto->getNombreTestigo()!=""){
$sql.="nombreTestigo='".$testigoscarpetasjudicialesDto->getNombreTestigo()."'";
if(($testigoscarpetasjudicialesDto->getActivo()!="") ||($testigoscarpetasjudicialesDto->getFechaRegistro()!="") ||($testigoscarpetasjudicialesDto->getFechaactualizacion()!="") ){
$sql.=" AND ";
}
}
if($testigoscarpetasjudicialesDto->getActivo()!=""){
$sql.="activo='".$testigoscarpetasjudicialesDto->getActivo()."'";
if(($testigoscarpetasjudicialesDto->getFechaRegistro()!="") ||($testigoscarpetasjudicialesDto->getFechaactualizacion()!="") ){
$sql.=" AND ";
}
}
if($testigoscarpetasjudicialesDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$testigoscarpetasjudicialesDto->getFechaRegistro()."'";
if(($testigoscarpetasjudicialesDto->getFechaactualizacion()!="") ){
$sql.=" AND ";
}
}
if($testigoscarpetasjudicialesDto->getFechaactualizacion()!=""){
$sql.="fechaactualizacion='".$testigoscarpetasjudicialesDto->getFechaactualizacion()."'";
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
$tmp[$contador] = new TestigoscarpetasjudicialesDTO();
$tmp[$contador]->setIdTestigoCarpetaJudicial($row["idTestigoCarpetaJudicial"]);
$tmp[$contador]->setIdCarpetaJudicial($row["idCarpetaJudicial"]);
$tmp[$contador]->setCveTipoCarpeta($row["cveTipoCarpeta"]);
$tmp[$contador]->setCveReferenciaTipoParte($row["cveReferenciaTipoParte"]);
$tmp[$contador]->setIdReferenciaParte($row["idReferenciaParte"]);
$tmp[$contador]->setCveTipoParte($row["cveTipoParte"]);
$tmp[$contador]->setNombreTestigo($row["nombreTestigo"]);
$tmp[$contador]->setActivo($row["activo"]);
$tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
$tmp[$contador]->setFechaactualizacion($row["fechaactualizacion"]);
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