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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/imputadosejecsentencias/ImputadosejecsentenciasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class ImputadosejecsentenciasDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertImputadosejecsentencias($imputadosejecsentenciasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblimputadosejecsentencias(";
if($imputadosejecsentenciasDto->getIdImputadoEjecSentencia()!=""){
$sql.="idImputadoEjecSentencia";
if(($imputadosejecsentenciasDto->getIdActuacion()!="") ||($imputadosejecsentenciasDto->getIdImpOfeDelCarpeta()!="") ||($imputadosejecsentenciasDto->getNumExp()!="") ||($imputadosejecsentenciasDto->getAniExp()!="") ||($imputadosejecsentenciasDto->getCveJuzgado()!="") ||($imputadosejecsentenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($imputadosejecsentenciasDto->getIdActuacion()!=""){
$sql.="idActuacion";
if(($imputadosejecsentenciasDto->getIdImpOfeDelCarpeta()!="") ||($imputadosejecsentenciasDto->getNumExp()!="") ||($imputadosejecsentenciasDto->getAniExp()!="") ||($imputadosejecsentenciasDto->getCveJuzgado()!="") ||($imputadosejecsentenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($imputadosejecsentenciasDto->getIdImpOfeDelCarpeta()!=""){
$sql.="idImpOfeDelCarpeta";
if(($imputadosejecsentenciasDto->getNumExp()!="") ||($imputadosejecsentenciasDto->getAniExp()!="") ||($imputadosejecsentenciasDto->getCveJuzgado()!="") ||($imputadosejecsentenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($imputadosejecsentenciasDto->getNumExp()!=""){
$sql.="numExp";
if(($imputadosejecsentenciasDto->getAniExp()!="") ||($imputadosejecsentenciasDto->getCveJuzgado()!="") ||($imputadosejecsentenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($imputadosejecsentenciasDto->getAniExp()!=""){
$sql.="AniExp";
if(($imputadosejecsentenciasDto->getCveJuzgado()!="") ||($imputadosejecsentenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($imputadosejecsentenciasDto->getCveJuzgado()!=""){
$sql.="cveJuzgado";
if(($imputadosejecsentenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($imputadosejecsentenciasDto->getActivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($imputadosejecsentenciasDto->getIdImputadoEjecSentencia()!=""){
$sql.="'".$imputadosejecsentenciasDto->getIdImputadoEjecSentencia()."'";
if(($imputadosejecsentenciasDto->getIdActuacion()!="") ||($imputadosejecsentenciasDto->getIdImpOfeDelCarpeta()!="") ||($imputadosejecsentenciasDto->getNumExp()!="") ||($imputadosejecsentenciasDto->getAniExp()!="") ||($imputadosejecsentenciasDto->getCveJuzgado()!="") ||($imputadosejecsentenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($imputadosejecsentenciasDto->getIdActuacion()!=""){
$sql.="'".$imputadosejecsentenciasDto->getIdActuacion()."'";
if(($imputadosejecsentenciasDto->getIdImpOfeDelCarpeta()!="") ||($imputadosejecsentenciasDto->getNumExp()!="") ||($imputadosejecsentenciasDto->getAniExp()!="") ||($imputadosejecsentenciasDto->getCveJuzgado()!="") ||($imputadosejecsentenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($imputadosejecsentenciasDto->getIdImpOfeDelCarpeta()!=""){
$sql.="'".$imputadosejecsentenciasDto->getIdImpOfeDelCarpeta()."'";
if(($imputadosejecsentenciasDto->getNumExp()!="") ||($imputadosejecsentenciasDto->getAniExp()!="") ||($imputadosejecsentenciasDto->getCveJuzgado()!="") ||($imputadosejecsentenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($imputadosejecsentenciasDto->getNumExp()!=""){
$sql.="'".$imputadosejecsentenciasDto->getNumExp()."'";
if(($imputadosejecsentenciasDto->getAniExp()!="") ||($imputadosejecsentenciasDto->getCveJuzgado()!="") ||($imputadosejecsentenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($imputadosejecsentenciasDto->getAniExp()!=""){
$sql.="'".$imputadosejecsentenciasDto->getAniExp()."'";
if(($imputadosejecsentenciasDto->getCveJuzgado()!="") ||($imputadosejecsentenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($imputadosejecsentenciasDto->getCveJuzgado()!=""){
$sql.="'".$imputadosejecsentenciasDto->getCveJuzgado()."'";
if(($imputadosejecsentenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($imputadosejecsentenciasDto->getActivo()!=""){
$sql.="'".$imputadosejecsentenciasDto->getActivo()."'";
}
if($imputadosejecsentenciasDto->getFechaRegistro()!=""){
}
if($imputadosejecsentenciasDto->getFechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new ImputadosejecsentenciasDTO();
$tmp->setidImputadoEjecSentencia($this->_proveedor->lastID());
$tmp = $this->selectImputadosejecsentencias($tmp,"",$this->_proveedor);
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
public function updateImputadosejecsentencias($imputadosejecsentenciasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblimputadosejecsentencias SET ";
if($imputadosejecsentenciasDto->getIdImputadoEjecSentencia()!=""){
$sql.="idImputadoEjecSentencia='".$imputadosejecsentenciasDto->getIdImputadoEjecSentencia()."'";
if(($imputadosejecsentenciasDto->getIdActuacion()!="") ||($imputadosejecsentenciasDto->getIdImpOfeDelCarpeta()!="") ||($imputadosejecsentenciasDto->getNumExp()!="") ||($imputadosejecsentenciasDto->getAniExp()!="") ||($imputadosejecsentenciasDto->getCveJuzgado()!="") ||($imputadosejecsentenciasDto->getActivo()!="") ||($imputadosejecsentenciasDto->getFechaRegistro()!="") ||($imputadosejecsentenciasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($imputadosejecsentenciasDto->getIdActuacion()!=""){
$sql.="idActuacion='".$imputadosejecsentenciasDto->getIdActuacion()."'";
if(($imputadosejecsentenciasDto->getIdImpOfeDelCarpeta()!="") ||($imputadosejecsentenciasDto->getNumExp()!="") ||($imputadosejecsentenciasDto->getAniExp()!="") ||($imputadosejecsentenciasDto->getCveJuzgado()!="") ||($imputadosejecsentenciasDto->getActivo()!="") ||($imputadosejecsentenciasDto->getFechaRegistro()!="") ||($imputadosejecsentenciasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($imputadosejecsentenciasDto->getIdImpOfeDelCarpeta()!=""){
$sql.="idImpOfeDelCarpeta='".$imputadosejecsentenciasDto->getIdImpOfeDelCarpeta()."'";
if(($imputadosejecsentenciasDto->getNumExp()!="") ||($imputadosejecsentenciasDto->getAniExp()!="") ||($imputadosejecsentenciasDto->getCveJuzgado()!="") ||($imputadosejecsentenciasDto->getActivo()!="") ||($imputadosejecsentenciasDto->getFechaRegistro()!="") ||($imputadosejecsentenciasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($imputadosejecsentenciasDto->getNumExp()!=""){
$sql.="numExp='".$imputadosejecsentenciasDto->getNumExp()."'";
if(($imputadosejecsentenciasDto->getAniExp()!="") ||($imputadosejecsentenciasDto->getCveJuzgado()!="") ||($imputadosejecsentenciasDto->getActivo()!="") ||($imputadosejecsentenciasDto->getFechaRegistro()!="") ||($imputadosejecsentenciasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($imputadosejecsentenciasDto->getAniExp()!=""){
$sql.="AniExp='".$imputadosejecsentenciasDto->getAniExp()."'";
if(($imputadosejecsentenciasDto->getCveJuzgado()!="") ||($imputadosejecsentenciasDto->getActivo()!="") ||($imputadosejecsentenciasDto->getFechaRegistro()!="") ||($imputadosejecsentenciasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($imputadosejecsentenciasDto->getCveJuzgado()!=""){
$sql.="cveJuzgado='".$imputadosejecsentenciasDto->getCveJuzgado()."'";
if(($imputadosejecsentenciasDto->getActivo()!="") ||($imputadosejecsentenciasDto->getFechaRegistro()!="") ||($imputadosejecsentenciasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($imputadosejecsentenciasDto->getActivo()!=""){
$sql.="activo='".$imputadosejecsentenciasDto->getActivo()."'";
if(($imputadosejecsentenciasDto->getFechaRegistro()!="") ||($imputadosejecsentenciasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($imputadosejecsentenciasDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$imputadosejecsentenciasDto->getFechaRegistro()."'";
if(($imputadosejecsentenciasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($imputadosejecsentenciasDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$imputadosejecsentenciasDto->getFechaActualizacion()."'";
}
$sql.=" WHERE idImputadoEjecSentencia='".$imputadosejecsentenciasDto->getIdImputadoEjecSentencia()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new ImputadosejecsentenciasDTO();
$tmp->setidImputadoEjecSentencia($imputadosejecsentenciasDto->getIdImputadoEjecSentencia());
$tmp = $this->selectImputadosejecsentencias($tmp,"",$this->_proveedor);
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
public function deleteImputadosejecsentencias($imputadosejecsentenciasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblimputadosejecsentencias  WHERE idImputadoEjecSentencia='".$imputadosejecsentenciasDto->getIdImputadoEjecSentencia()."'";
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
public function selectImputadosejecsentencias($imputadosejecsentenciasDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idImputadoEjecSentencia,idActuacion,idImpOfeDelCarpeta,numExp,AniExp,cveJuzgado,activo,fechaRegistro,fechaActualizacion FROM tblimputadosejecsentencias ";
if(($imputadosejecsentenciasDto->getIdImputadoEjecSentencia()!="") ||($imputadosejecsentenciasDto->getIdActuacion()!="") ||($imputadosejecsentenciasDto->getIdImpOfeDelCarpeta()!="") ||($imputadosejecsentenciasDto->getNumExp()!="") ||($imputadosejecsentenciasDto->getAniExp()!="") ||($imputadosejecsentenciasDto->getCveJuzgado()!="") ||($imputadosejecsentenciasDto->getActivo()!="") ||($imputadosejecsentenciasDto->getFechaRegistro()!="") ||($imputadosejecsentenciasDto->getFechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($imputadosejecsentenciasDto->getIdImputadoEjecSentencia()!=""){
$sql.="idImputadoEjecSentencia='".$imputadosejecsentenciasDto->getIdImputadoEjecSentencia()."'";
if(($imputadosejecsentenciasDto->getIdActuacion()!="") ||($imputadosejecsentenciasDto->getIdImpOfeDelCarpeta()!="") ||($imputadosejecsentenciasDto->getNumExp()!="") ||($imputadosejecsentenciasDto->getAniExp()!="") ||($imputadosejecsentenciasDto->getCveJuzgado()!="") ||($imputadosejecsentenciasDto->getActivo()!="") ||($imputadosejecsentenciasDto->getFechaRegistro()!="") ||($imputadosejecsentenciasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($imputadosejecsentenciasDto->getIdActuacion()!=""){
$sql.="idActuacion='".$imputadosejecsentenciasDto->getIdActuacion()."'";
if(($imputadosejecsentenciasDto->getIdImpOfeDelCarpeta()!="") ||($imputadosejecsentenciasDto->getNumExp()!="") ||($imputadosejecsentenciasDto->getAniExp()!="") ||($imputadosejecsentenciasDto->getCveJuzgado()!="") ||($imputadosejecsentenciasDto->getActivo()!="") ||($imputadosejecsentenciasDto->getFechaRegistro()!="") ||($imputadosejecsentenciasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($imputadosejecsentenciasDto->getIdImpOfeDelCarpeta()!=""){
$sql.="idImpOfeDelCarpeta='".$imputadosejecsentenciasDto->getIdImpOfeDelCarpeta()."'";
if(($imputadosejecsentenciasDto->getNumExp()!="") ||($imputadosejecsentenciasDto->getAniExp()!="") ||($imputadosejecsentenciasDto->getCveJuzgado()!="") ||($imputadosejecsentenciasDto->getActivo()!="") ||($imputadosejecsentenciasDto->getFechaRegistro()!="") ||($imputadosejecsentenciasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($imputadosejecsentenciasDto->getNumExp()!=""){
$sql.="numExp='".$imputadosejecsentenciasDto->getNumExp()."'";
if(($imputadosejecsentenciasDto->getAniExp()!="") ||($imputadosejecsentenciasDto->getCveJuzgado()!="") ||($imputadosejecsentenciasDto->getActivo()!="") ||($imputadosejecsentenciasDto->getFechaRegistro()!="") ||($imputadosejecsentenciasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($imputadosejecsentenciasDto->getAniExp()!=""){
$sql.="AniExp='".$imputadosejecsentenciasDto->getAniExp()."'";
if(($imputadosejecsentenciasDto->getCveJuzgado()!="") ||($imputadosejecsentenciasDto->getActivo()!="") ||($imputadosejecsentenciasDto->getFechaRegistro()!="") ||($imputadosejecsentenciasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($imputadosejecsentenciasDto->getCveJuzgado()!=""){
$sql.="cveJuzgado='".$imputadosejecsentenciasDto->getCveJuzgado()."'";
if(($imputadosejecsentenciasDto->getActivo()!="") ||($imputadosejecsentenciasDto->getFechaRegistro()!="") ||($imputadosejecsentenciasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($imputadosejecsentenciasDto->getActivo()!=""){
$sql.="activo='".$imputadosejecsentenciasDto->getActivo()."'";
if(($imputadosejecsentenciasDto->getFechaRegistro()!="") ||($imputadosejecsentenciasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($imputadosejecsentenciasDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$imputadosejecsentenciasDto->getFechaRegistro()."'";
if(($imputadosejecsentenciasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($imputadosejecsentenciasDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$imputadosejecsentenciasDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new ImputadosejecsentenciasDTO();
$tmp[$contador]->setIdImputadoEjecSentencia($row["idImputadoEjecSentencia"]);
$tmp[$contador]->setIdActuacion($row["idActuacion"]);
$tmp[$contador]->setIdImpOfeDelCarpeta($row["idImpOfeDelCarpeta"]);
$tmp[$contador]->setNumExp($row["numExp"]);
$tmp[$contador]->setAniExp($row["AniExp"]);
$tmp[$contador]->setCveJuzgado($row["cveJuzgado"]);
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