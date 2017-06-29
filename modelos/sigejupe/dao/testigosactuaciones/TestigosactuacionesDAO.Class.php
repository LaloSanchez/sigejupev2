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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/testigosactuaciones/TestigosactuacionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class TestigosactuacionesDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertTestigosactuaciones($testigosactuacionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tbltestigosactuaciones(";
if($testigosactuacionesDto->getIdTestigoActuacion()!=""){
$sql.="idTestigoActuacion";
if(($testigosactuacionesDto->getIdActuacion()!="") ||($testigosactuacionesDto->getCveReferenciaTipoParte()!="") ||($testigosactuacionesDto->getIdReferenciaParte()!="") ||($testigosactuacionesDto->getCveTipoParte()!="") ||($testigosactuacionesDto->getNombreTestigo()!="") ||($testigosactuacionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($testigosactuacionesDto->getIdActuacion()!=""){
$sql.="idActuacion";
if(($testigosactuacionesDto->getCveReferenciaTipoParte()!="") ||($testigosactuacionesDto->getIdReferenciaParte()!="") ||($testigosactuacionesDto->getCveTipoParte()!="") ||($testigosactuacionesDto->getNombreTestigo()!="") ||($testigosactuacionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($testigosactuacionesDto->getCveReferenciaTipoParte()!=""){
$sql.="cveReferenciaTipoParte";
if(($testigosactuacionesDto->getIdReferenciaParte()!="") ||($testigosactuacionesDto->getCveTipoParte()!="") ||($testigosactuacionesDto->getNombreTestigo()!="") ||($testigosactuacionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($testigosactuacionesDto->getIdReferenciaParte()!=""){
$sql.="idReferenciaParte";
if(($testigosactuacionesDto->getCveTipoParte()!="") ||($testigosactuacionesDto->getNombreTestigo()!="") ||($testigosactuacionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($testigosactuacionesDto->getCveTipoParte()!=""){
$sql.="cveTipoParte";
if(($testigosactuacionesDto->getNombreTestigo()!="") ||($testigosactuacionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($testigosactuacionesDto->getNombreTestigo()!=""){
$sql.="nombreTestigo";
if(($testigosactuacionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($testigosactuacionesDto->getActivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($testigosactuacionesDto->getIdTestigoActuacion()!=""){
$sql.="'".$testigosactuacionesDto->getIdTestigoActuacion()."'";
if(($testigosactuacionesDto->getIdActuacion()!="") ||($testigosactuacionesDto->getCveReferenciaTipoParte()!="") ||($testigosactuacionesDto->getIdReferenciaParte()!="") ||($testigosactuacionesDto->getCveTipoParte()!="") ||($testigosactuacionesDto->getNombreTestigo()!="") ||($testigosactuacionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($testigosactuacionesDto->getIdActuacion()!=""){
$sql.="'".$testigosactuacionesDto->getIdActuacion()."'";
if(($testigosactuacionesDto->getCveReferenciaTipoParte()!="") ||($testigosactuacionesDto->getIdReferenciaParte()!="") ||($testigosactuacionesDto->getCveTipoParte()!="") ||($testigosactuacionesDto->getNombreTestigo()!="") ||($testigosactuacionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($testigosactuacionesDto->getCveReferenciaTipoParte()!=""){
$sql.="'".$testigosactuacionesDto->getCveReferenciaTipoParte()."'";
if(($testigosactuacionesDto->getIdReferenciaParte()!="") ||($testigosactuacionesDto->getCveTipoParte()!="") ||($testigosactuacionesDto->getNombreTestigo()!="") ||($testigosactuacionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($testigosactuacionesDto->getIdReferenciaParte()!=""){
$sql.="'".$testigosactuacionesDto->getIdReferenciaParte()."'";
if(($testigosactuacionesDto->getCveTipoParte()!="") ||($testigosactuacionesDto->getNombreTestigo()!="") ||($testigosactuacionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($testigosactuacionesDto->getCveTipoParte()!=""){
$sql.="'".$testigosactuacionesDto->getCveTipoParte()."'";
if(($testigosactuacionesDto->getNombreTestigo()!="") ||($testigosactuacionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($testigosactuacionesDto->getNombreTestigo()!=""){
$sql.="'".$testigosactuacionesDto->getNombreTestigo()."'";
if(($testigosactuacionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($testigosactuacionesDto->getActivo()!=""){
$sql.="'".$testigosactuacionesDto->getActivo()."'";
}
if($testigosactuacionesDto->getFechaRegistro()!=""){
}
if($testigosactuacionesDto->getFechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TestigosactuacionesDTO();
$tmp->setidTestigoActuacion($this->_proveedor->lastID());
$tmp = $this->selectTestigosactuaciones($tmp,"",$this->_proveedor);
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
public function updateTestigosactuaciones($testigosactuacionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tbltestigosactuaciones SET ";
if($testigosactuacionesDto->getIdTestigoActuacion()!=""){
$sql.="idTestigoActuacion='".$testigosactuacionesDto->getIdTestigoActuacion()."'";
if(($testigosactuacionesDto->getIdActuacion()!="") ||($testigosactuacionesDto->getCveReferenciaTipoParte()!="") ||($testigosactuacionesDto->getIdReferenciaParte()!="") ||($testigosactuacionesDto->getCveTipoParte()!="") ||($testigosactuacionesDto->getNombreTestigo()!="") ||($testigosactuacionesDto->getActivo()!="") ||($testigosactuacionesDto->getFechaRegistro()!="") ||($testigosactuacionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($testigosactuacionesDto->getIdActuacion()!=""){
$sql.="idActuacion='".$testigosactuacionesDto->getIdActuacion()."'";
if(($testigosactuacionesDto->getCveReferenciaTipoParte()!="") ||($testigosactuacionesDto->getIdReferenciaParte()!="") ||($testigosactuacionesDto->getCveTipoParte()!="") ||($testigosactuacionesDto->getNombreTestigo()!="") ||($testigosactuacionesDto->getActivo()!="") ||($testigosactuacionesDto->getFechaRegistro()!="") ||($testigosactuacionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($testigosactuacionesDto->getCveReferenciaTipoParte()!=""){
$sql.="cveReferenciaTipoParte='".$testigosactuacionesDto->getCveReferenciaTipoParte()."'";
if(($testigosactuacionesDto->getIdReferenciaParte()!="") ||($testigosactuacionesDto->getCveTipoParte()!="") ||($testigosactuacionesDto->getNombreTestigo()!="") ||($testigosactuacionesDto->getActivo()!="") ||($testigosactuacionesDto->getFechaRegistro()!="") ||($testigosactuacionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($testigosactuacionesDto->getIdReferenciaParte()!=""){
$sql.="idReferenciaParte='".$testigosactuacionesDto->getIdReferenciaParte()."'";
if(($testigosactuacionesDto->getCveTipoParte()!="") ||($testigosactuacionesDto->getNombreTestigo()!="") ||($testigosactuacionesDto->getActivo()!="") ||($testigosactuacionesDto->getFechaRegistro()!="") ||($testigosactuacionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($testigosactuacionesDto->getCveTipoParte()!=""){
$sql.="cveTipoParte='".$testigosactuacionesDto->getCveTipoParte()."'";
if(($testigosactuacionesDto->getNombreTestigo()!="") ||($testigosactuacionesDto->getActivo()!="") ||($testigosactuacionesDto->getFechaRegistro()!="") ||($testigosactuacionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($testigosactuacionesDto->getNombreTestigo()!=""){
$sql.="nombreTestigo='".$testigosactuacionesDto->getNombreTestigo()."'";
if(($testigosactuacionesDto->getActivo()!="") ||($testigosactuacionesDto->getFechaRegistro()!="") ||($testigosactuacionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($testigosactuacionesDto->getActivo()!=""){
$sql.="activo='".$testigosactuacionesDto->getActivo()."'";
if(($testigosactuacionesDto->getFechaRegistro()!="") ||($testigosactuacionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($testigosactuacionesDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$testigosactuacionesDto->getFechaRegistro()."'";
if(($testigosactuacionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($testigosactuacionesDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$testigosactuacionesDto->getFechaActualizacion()."'";
}
$sql.=" WHERE idTestigoActuacion='".$testigosactuacionesDto->getIdTestigoActuacion()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TestigosactuacionesDTO();
$tmp->setidTestigoActuacion($testigosactuacionesDto->getIdTestigoActuacion());
$tmp = $this->selectTestigosactuaciones($tmp,"",$this->_proveedor);
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
public function deleteTestigosactuaciones($testigosactuacionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tbltestigosactuaciones  WHERE idTestigoActuacion='".$testigosactuacionesDto->getIdTestigoActuacion()."'";
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
public function selectTestigosactuaciones($testigosactuacionesDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idTestigoActuacion,idActuacion,cveReferenciaTipoParte,idReferenciaParte,cveTipoParte,nombreTestigo,activo,fechaRegistro,fechaActualizacion FROM tbltestigosactuaciones ";
if(($testigosactuacionesDto->getIdTestigoActuacion()!="") ||($testigosactuacionesDto->getIdActuacion()!="") ||($testigosactuacionesDto->getCveReferenciaTipoParte()!="") ||($testigosactuacionesDto->getIdReferenciaParte()!="") ||($testigosactuacionesDto->getCveTipoParte()!="") ||($testigosactuacionesDto->getNombreTestigo()!="") ||($testigosactuacionesDto->getActivo()!="") ||($testigosactuacionesDto->getFechaRegistro()!="") ||($testigosactuacionesDto->getFechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($testigosactuacionesDto->getIdTestigoActuacion()!=""){
$sql.="idTestigoActuacion='".$testigosactuacionesDto->getIdTestigoActuacion()."'";
if(($testigosactuacionesDto->getIdActuacion()!="") ||($testigosactuacionesDto->getCveReferenciaTipoParte()!="") ||($testigosactuacionesDto->getIdReferenciaParte()!="") ||($testigosactuacionesDto->getCveTipoParte()!="") ||($testigosactuacionesDto->getNombreTestigo()!="") ||($testigosactuacionesDto->getActivo()!="") ||($testigosactuacionesDto->getFechaRegistro()!="") ||($testigosactuacionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($testigosactuacionesDto->getIdActuacion()!=""){
$sql.="idActuacion='".$testigosactuacionesDto->getIdActuacion()."'";
if(($testigosactuacionesDto->getCveReferenciaTipoParte()!="") ||($testigosactuacionesDto->getIdReferenciaParte()!="") ||($testigosactuacionesDto->getCveTipoParte()!="") ||($testigosactuacionesDto->getNombreTestigo()!="") ||($testigosactuacionesDto->getActivo()!="") ||($testigosactuacionesDto->getFechaRegistro()!="") ||($testigosactuacionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($testigosactuacionesDto->getCveReferenciaTipoParte()!=""){
$sql.="cveReferenciaTipoParte='".$testigosactuacionesDto->getCveReferenciaTipoParte()."'";
if(($testigosactuacionesDto->getIdReferenciaParte()!="") ||($testigosactuacionesDto->getCveTipoParte()!="") ||($testigosactuacionesDto->getNombreTestigo()!="") ||($testigosactuacionesDto->getActivo()!="") ||($testigosactuacionesDto->getFechaRegistro()!="") ||($testigosactuacionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($testigosactuacionesDto->getIdReferenciaParte()!=""){
$sql.="idReferenciaParte='".$testigosactuacionesDto->getIdReferenciaParte()."'";
if(($testigosactuacionesDto->getCveTipoParte()!="") ||($testigosactuacionesDto->getNombreTestigo()!="") ||($testigosactuacionesDto->getActivo()!="") ||($testigosactuacionesDto->getFechaRegistro()!="") ||($testigosactuacionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($testigosactuacionesDto->getCveTipoParte()!=""){
$sql.="cveTipoParte='".$testigosactuacionesDto->getCveTipoParte()."'";
if(($testigosactuacionesDto->getNombreTestigo()!="") ||($testigosactuacionesDto->getActivo()!="") ||($testigosactuacionesDto->getFechaRegistro()!="") ||($testigosactuacionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($testigosactuacionesDto->getNombreTestigo()!=""){
$sql.="nombreTestigo='".$testigosactuacionesDto->getNombreTestigo()."'";
if(($testigosactuacionesDto->getActivo()!="") ||($testigosactuacionesDto->getFechaRegistro()!="") ||($testigosactuacionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($testigosactuacionesDto->getActivo()!=""){
$sql.="activo='".$testigosactuacionesDto->getActivo()."'";
if(($testigosactuacionesDto->getFechaRegistro()!="") ||($testigosactuacionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($testigosactuacionesDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$testigosactuacionesDto->getFechaRegistro()."'";
if(($testigosactuacionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($testigosactuacionesDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$testigosactuacionesDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new TestigosactuacionesDTO();
$tmp[$contador]->setIdTestigoActuacion($row["idTestigoActuacion"]);
$tmp[$contador]->setIdActuacion($row["idActuacion"]);
$tmp[$contador]->setCveReferenciaTipoParte($row["cveReferenciaTipoParte"]);
$tmp[$contador]->setIdReferenciaParte($row["idReferenciaParte"]);
$tmp[$contador]->setCveTipoParte($row["cveTipoParte"]);
$tmp[$contador]->setNombreTestigo($row["nombreTestigo"]);
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