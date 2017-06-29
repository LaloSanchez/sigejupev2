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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/cataudiencias/CataudienciasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class CataudienciasDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertCataudiencias($cataudienciasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblcataudiencias(";
if($cataudienciasDto->getCveCatAudiencia()!=""){
$sql.="cveCatAudiencia";
if(($cataudienciasDto->getDesCatAudiencia()!="") ||($cataudienciasDto->getFechaInicia()!="") ||($cataudienciasDto->getFechaVigencia()!="") ||($cataudienciasDto->getCausa()!="") ||($cataudienciasDto->getCveEtapaProcesal()!="") ||($cataudienciasDto->getCveNaturaleza()!="") ||($cataudienciasDto->getCveTipoAudiencia()!="") ||($cataudienciasDto->getActivo()!="") ||($cataudienciasDto->getCveCodigo()!="") ||($cataudienciasDto->getAudienciaInicial()!="") ){
$sql.=",";
}
}
if($cataudienciasDto->getDesCatAudiencia()!=""){
$sql.="desCatAudiencia";
if(($cataudienciasDto->getFechaInicia()!="") ||($cataudienciasDto->getFechaVigencia()!="") ||($cataudienciasDto->getCausa()!="") ||($cataudienciasDto->getCveEtapaProcesal()!="") ||($cataudienciasDto->getCveNaturaleza()!="") ||($cataudienciasDto->getCveTipoAudiencia()!="") ||($cataudienciasDto->getActivo()!="") ||($cataudienciasDto->getCveCodigo()!="") ||($cataudienciasDto->getAudienciaInicial()!="") ){
$sql.=",";
}
}
if($cataudienciasDto->getFechaInicia()!=""){
$sql.="fechaInicia";
if(($cataudienciasDto->getFechaVigencia()!="") ||($cataudienciasDto->getCausa()!="") ||($cataudienciasDto->getCveEtapaProcesal()!="") ||($cataudienciasDto->getCveNaturaleza()!="") ||($cataudienciasDto->getCveTipoAudiencia()!="") ||($cataudienciasDto->getActivo()!="") ||($cataudienciasDto->getCveCodigo()!="") ||($cataudienciasDto->getAudienciaInicial()!="") ){
$sql.=",";
}
}
if($cataudienciasDto->getFechaVigencia()!=""){
$sql.="fechaVigencia";
if(($cataudienciasDto->getCausa()!="") ||($cataudienciasDto->getCveEtapaProcesal()!="") ||($cataudienciasDto->getCveNaturaleza()!="") ||($cataudienciasDto->getCveTipoAudiencia()!="") ||($cataudienciasDto->getActivo()!="") ||($cataudienciasDto->getCveCodigo()!="") ||($cataudienciasDto->getAudienciaInicial()!="") ){
$sql.=",";
}
}
if($cataudienciasDto->getCausa()!=""){
$sql.="causa";
if(($cataudienciasDto->getCveEtapaProcesal()!="") ||($cataudienciasDto->getCveNaturaleza()!="") ||($cataudienciasDto->getCveTipoAudiencia()!="") ||($cataudienciasDto->getActivo()!="") ||($cataudienciasDto->getCveCodigo()!="") ||($cataudienciasDto->getAudienciaInicial()!="") ){
$sql.=",";
}
}
if($cataudienciasDto->getCveEtapaProcesal()!=""){
$sql.="cveEtapaProcesal";
if(($cataudienciasDto->getCveNaturaleza()!="") ||($cataudienciasDto->getCveTipoAudiencia()!="") ||($cataudienciasDto->getActivo()!="") ||($cataudienciasDto->getCveCodigo()!="") ||($cataudienciasDto->getAudienciaInicial()!="") ){
$sql.=",";
}
}
if($cataudienciasDto->getCveNaturaleza()!=""){
$sql.="cveNaturaleza";
if(($cataudienciasDto->getCveTipoAudiencia()!="") ||($cataudienciasDto->getActivo()!="") ||($cataudienciasDto->getCveCodigo()!="") ||($cataudienciasDto->getAudienciaInicial()!="") ){
$sql.=",";
}
}
if($cataudienciasDto->getCveTipoAudiencia()!=""){
$sql.="cveTipoAudiencia";
if(($cataudienciasDto->getActivo()!="") ||($cataudienciasDto->getCveCodigo()!="") ||($cataudienciasDto->getAudienciaInicial()!="") ){
$sql.=",";
}
}
if($cataudienciasDto->getActivo()!=""){
$sql.="activo";
if(($cataudienciasDto->getCveCodigo()!="") ||($cataudienciasDto->getAudienciaInicial()!="") ){
$sql.=",";
}
}
if($cataudienciasDto->getCveCodigo()!=""){
$sql.="cveCodigo";
if(($cataudienciasDto->getAudienciaInicial()!="") ){
$sql.=",";
}
}
if($cataudienciasDto->getAudienciaInicial()!=""){
$sql.="audienciaInicial";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($cataudienciasDto->getCveCatAudiencia()!=""){
$sql.="'".$cataudienciasDto->getCveCatAudiencia()."'";
if(($cataudienciasDto->getDesCatAudiencia()!="") ||($cataudienciasDto->getFechaInicia()!="") ||($cataudienciasDto->getFechaVigencia()!="") ||($cataudienciasDto->getCausa()!="") ||($cataudienciasDto->getCveEtapaProcesal()!="") ||($cataudienciasDto->getCveNaturaleza()!="") ||($cataudienciasDto->getCveTipoAudiencia()!="") ||($cataudienciasDto->getActivo()!="") ||($cataudienciasDto->getCveCodigo()!="") ||($cataudienciasDto->getAudienciaInicial()!="") ){
$sql.=",";
}
}
if($cataudienciasDto->getDesCatAudiencia()!=""){
$sql.="'".$cataudienciasDto->getDesCatAudiencia()."'";
if(($cataudienciasDto->getFechaInicia()!="") ||($cataudienciasDto->getFechaVigencia()!="") ||($cataudienciasDto->getCausa()!="") ||($cataudienciasDto->getCveEtapaProcesal()!="") ||($cataudienciasDto->getCveNaturaleza()!="") ||($cataudienciasDto->getCveTipoAudiencia()!="") ||($cataudienciasDto->getActivo()!="") ||($cataudienciasDto->getCveCodigo()!="") ||($cataudienciasDto->getAudienciaInicial()!="") ){
$sql.=",";
}
}
if($cataudienciasDto->getFechaInicia()!=""){
$sql.="'".$cataudienciasDto->getFechaInicia()."'";
if(($cataudienciasDto->getFechaVigencia()!="") ||($cataudienciasDto->getCausa()!="") ||($cataudienciasDto->getCveEtapaProcesal()!="") ||($cataudienciasDto->getCveNaturaleza()!="") ||($cataudienciasDto->getCveTipoAudiencia()!="") ||($cataudienciasDto->getActivo()!="") ||($cataudienciasDto->getCveCodigo()!="") ||($cataudienciasDto->getAudienciaInicial()!="") ){
$sql.=",";
}
}
if($cataudienciasDto->getFechaVigencia()!=""){
$sql.="'".$cataudienciasDto->getFechaVigencia()."'";
if(($cataudienciasDto->getCausa()!="") ||($cataudienciasDto->getCveEtapaProcesal()!="") ||($cataudienciasDto->getCveNaturaleza()!="") ||($cataudienciasDto->getCveTipoAudiencia()!="") ||($cataudienciasDto->getActivo()!="") ||($cataudienciasDto->getCveCodigo()!="") ||($cataudienciasDto->getAudienciaInicial()!="") ){
$sql.=",";
}
}
if($cataudienciasDto->getCausa()!=""){
$sql.="'".$cataudienciasDto->getCausa()."'";
if(($cataudienciasDto->getCveEtapaProcesal()!="") ||($cataudienciasDto->getCveNaturaleza()!="") ||($cataudienciasDto->getCveTipoAudiencia()!="") ||($cataudienciasDto->getActivo()!="") ||($cataudienciasDto->getCveCodigo()!="") ||($cataudienciasDto->getAudienciaInicial()!="") ){
$sql.=",";
}
}
if($cataudienciasDto->getCveEtapaProcesal()!=""){
$sql.="'".$cataudienciasDto->getCveEtapaProcesal()."'";
if(($cataudienciasDto->getCveNaturaleza()!="") ||($cataudienciasDto->getCveTipoAudiencia()!="") ||($cataudienciasDto->getActivo()!="") ||($cataudienciasDto->getCveCodigo()!="") ||($cataudienciasDto->getAudienciaInicial()!="") ){
$sql.=",";
}
}
if($cataudienciasDto->getCveNaturaleza()!=""){
$sql.="'".$cataudienciasDto->getCveNaturaleza()."'";
if(($cataudienciasDto->getCveTipoAudiencia()!="") ||($cataudienciasDto->getActivo()!="") ||($cataudienciasDto->getCveCodigo()!="") ||($cataudienciasDto->getAudienciaInicial()!="") ){
$sql.=",";
}
}
if($cataudienciasDto->getCveTipoAudiencia()!=""){
$sql.="'".$cataudienciasDto->getCveTipoAudiencia()."'";
if(($cataudienciasDto->getActivo()!="") ||($cataudienciasDto->getCveCodigo()!="") ||($cataudienciasDto->getAudienciaInicial()!="") ){
$sql.=",";
}
}
if($cataudienciasDto->getActivo()!=""){
$sql.="'".$cataudienciasDto->getActivo()."'";
if(($cataudienciasDto->getCveCodigo()!="") ||($cataudienciasDto->getAudienciaInicial()!="") ){
$sql.=",";
}
}
if($cataudienciasDto->getFechaRegistro()!=""){
if(($cataudienciasDto->getCveCodigo()!="") ||($cataudienciasDto->getAudienciaInicial()!="") ){
$sql.=",";
}
}
if($cataudienciasDto->getFechaActualizacion()!=""){
if(($cataudienciasDto->getCveCodigo()!="") ||($cataudienciasDto->getAudienciaInicial()!="") ){
$sql.=",";
}
}
if($cataudienciasDto->getCveCodigo()!=""){
$sql.="'".$cataudienciasDto->getCveCodigo()."'";
if(($cataudienciasDto->getAudienciaInicial()!="") ){
$sql.=",";
}
}
if($cataudienciasDto->getAudienciaInicial()!=""){
$sql.="'".$cataudienciasDto->getAudienciaInicial()."'";
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new CataudienciasDTO();
$tmp->setcveCatAudiencia($this->_proveedor->lastID());
$tmp = $this->selectCataudiencias($tmp,"",$this->_proveedor);
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
public function updateCataudiencias($cataudienciasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblcataudiencias SET ";
if($cataudienciasDto->getCveCatAudiencia()!=""){
$sql.="cveCatAudiencia='".$cataudienciasDto->getCveCatAudiencia()."'";
if(($cataudienciasDto->getDesCatAudiencia()!="") ||($cataudienciasDto->getFechaInicia()!="") ||($cataudienciasDto->getFechaVigencia()!="") ||($cataudienciasDto->getCausa()!="") ||($cataudienciasDto->getCveEtapaProcesal()!="") ||($cataudienciasDto->getCveNaturaleza()!="") ||($cataudienciasDto->getCveTipoAudiencia()!="") ||($cataudienciasDto->getActivo()!="") ||($cataudienciasDto->getFechaRegistro()!="") ||($cataudienciasDto->getFechaActualizacion()!="") ||($cataudienciasDto->getCveCodigo()!="") ||($cataudienciasDto->getAudienciaInicial()!="") ){
$sql.=",";
}
}
if($cataudienciasDto->getDesCatAudiencia()!=""){
$sql.="desCatAudiencia='".$cataudienciasDto->getDesCatAudiencia()."'";
if(($cataudienciasDto->getFechaInicia()!="") ||($cataudienciasDto->getFechaVigencia()!="") ||($cataudienciasDto->getCausa()!="") ||($cataudienciasDto->getCveEtapaProcesal()!="") ||($cataudienciasDto->getCveNaturaleza()!="") ||($cataudienciasDto->getCveTipoAudiencia()!="") ||($cataudienciasDto->getActivo()!="") ||($cataudienciasDto->getFechaRegistro()!="") ||($cataudienciasDto->getFechaActualizacion()!="") ||($cataudienciasDto->getCveCodigo()!="") ||($cataudienciasDto->getAudienciaInicial()!="") ){
$sql.=",";
}
}
if($cataudienciasDto->getFechaInicia()!=""){
$sql.="fechaInicia='".$cataudienciasDto->getFechaInicia()."'";
if(($cataudienciasDto->getFechaVigencia()!="") ||($cataudienciasDto->getCausa()!="") ||($cataudienciasDto->getCveEtapaProcesal()!="") ||($cataudienciasDto->getCveNaturaleza()!="") ||($cataudienciasDto->getCveTipoAudiencia()!="") ||($cataudienciasDto->getActivo()!="") ||($cataudienciasDto->getFechaRegistro()!="") ||($cataudienciasDto->getFechaActualizacion()!="") ||($cataudienciasDto->getCveCodigo()!="") ||($cataudienciasDto->getAudienciaInicial()!="") ){
$sql.=",";
}
}
if($cataudienciasDto->getFechaVigencia()!=""){
$sql.="fechaVigencia='".$cataudienciasDto->getFechaVigencia()."'";
if(($cataudienciasDto->getCausa()!="") ||($cataudienciasDto->getCveEtapaProcesal()!="") ||($cataudienciasDto->getCveNaturaleza()!="") ||($cataudienciasDto->getCveTipoAudiencia()!="") ||($cataudienciasDto->getActivo()!="") ||($cataudienciasDto->getFechaRegistro()!="") ||($cataudienciasDto->getFechaActualizacion()!="") ||($cataudienciasDto->getCveCodigo()!="") ||($cataudienciasDto->getAudienciaInicial()!="") ){
$sql.=",";
}
}
if($cataudienciasDto->getCausa()!=""){
$sql.="causa='".$cataudienciasDto->getCausa()."'";
if(($cataudienciasDto->getCveEtapaProcesal()!="") ||($cataudienciasDto->getCveNaturaleza()!="") ||($cataudienciasDto->getCveTipoAudiencia()!="") ||($cataudienciasDto->getActivo()!="") ||($cataudienciasDto->getFechaRegistro()!="") ||($cataudienciasDto->getFechaActualizacion()!="") ||($cataudienciasDto->getCveCodigo()!="") ||($cataudienciasDto->getAudienciaInicial()!="") ){
$sql.=",";
}
}
if($cataudienciasDto->getCveEtapaProcesal()!=""){
$sql.="cveEtapaProcesal='".$cataudienciasDto->getCveEtapaProcesal()."'";
if(($cataudienciasDto->getCveNaturaleza()!="") ||($cataudienciasDto->getCveTipoAudiencia()!="") ||($cataudienciasDto->getActivo()!="") ||($cataudienciasDto->getFechaRegistro()!="") ||($cataudienciasDto->getFechaActualizacion()!="") ||($cataudienciasDto->getCveCodigo()!="") ||($cataudienciasDto->getAudienciaInicial()!="") ){
$sql.=",";
}
}
if($cataudienciasDto->getCveNaturaleza()!=""){
$sql.="cveNaturaleza='".$cataudienciasDto->getCveNaturaleza()."'";
if(($cataudienciasDto->getCveTipoAudiencia()!="") ||($cataudienciasDto->getActivo()!="") ||($cataudienciasDto->getFechaRegistro()!="") ||($cataudienciasDto->getFechaActualizacion()!="") ||($cataudienciasDto->getCveCodigo()!="") ||($cataudienciasDto->getAudienciaInicial()!="") ){
$sql.=",";
}
}
if($cataudienciasDto->getCveTipoAudiencia()!=""){
$sql.="cveTipoAudiencia='".$cataudienciasDto->getCveTipoAudiencia()."'";
if(($cataudienciasDto->getActivo()!="") ||($cataudienciasDto->getFechaRegistro()!="") ||($cataudienciasDto->getFechaActualizacion()!="") ||($cataudienciasDto->getCveCodigo()!="") ||($cataudienciasDto->getAudienciaInicial()!="") ){
$sql.=",";
}
}
if($cataudienciasDto->getActivo()!=""){
$sql.="activo='".$cataudienciasDto->getActivo()."'";
if(($cataudienciasDto->getFechaRegistro()!="") ||($cataudienciasDto->getFechaActualizacion()!="") ||($cataudienciasDto->getCveCodigo()!="") ||($cataudienciasDto->getAudienciaInicial()!="") ){
$sql.=",";
}
}
if($cataudienciasDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$cataudienciasDto->getFechaRegistro()."'";
if(($cataudienciasDto->getFechaActualizacion()!="") ||($cataudienciasDto->getCveCodigo()!="") ||($cataudienciasDto->getAudienciaInicial()!="") ){
$sql.=",";
}
}
if($cataudienciasDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$cataudienciasDto->getFechaActualizacion()."'";
if(($cataudienciasDto->getCveCodigo()!="") ||($cataudienciasDto->getAudienciaInicial()!="") ){
$sql.=",";
}
}
if($cataudienciasDto->getCveCodigo()!=""){
$sql.="cveCodigo='".$cataudienciasDto->getCveCodigo()."'";
if(($cataudienciasDto->getAudienciaInicial()!="") ){
$sql.=",";
}
}
if($cataudienciasDto->getAudienciaInicial()!=""){
$sql.="audienciaInicial='".$cataudienciasDto->getAudienciaInicial()."'";
}
$sql.=" WHERE cveCatAudiencia='".$cataudienciasDto->getCveCatAudiencia()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new CataudienciasDTO();
$tmp->setcveCatAudiencia($cataudienciasDto->getCveCatAudiencia());
$tmp = $this->selectCataudiencias($tmp,"",$this->_proveedor);
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
public function deleteCataudiencias($cataudienciasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblcataudiencias  WHERE cveCatAudiencia='".$cataudienciasDto->getCveCatAudiencia()."'";
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
public function selectCataudiencias($cataudienciasDto,$orden = "",$proveedor = null ,$param = null,$fields = null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}


$sql = "SELECT";
    
if ($fields === null) {
    $sql .= " cveCatAudiencia,desCatAudiencia,fechaInicia,fechaVigencia,causa,cveEtapaProcesal,cveNaturaleza,cveTipoAudiencia,activo,fechaRegistro,fechaActualizacion,cveCodigo,audienciaInicial ";
} else {
    $sql .= $fields;
}
    $sql .= "FROM tblcataudiencias";
    


//$sql="SELECT cveCatAudiencia,desCatAudiencia,fechaInicia,fechaVigencia,causa,cveEtapaProcesal,cveNaturaleza,cveTipoAudiencia,activo,fechaRegistro,fechaActualizacion,cveCodigo,audienciaInicial FROM tblcataudiencias ";
if(($cataudienciasDto->getCveCatAudiencia()!="") ||($cataudienciasDto->getDesCatAudiencia()!="") ||($cataudienciasDto->getFechaInicia()!="") ||($cataudienciasDto->getFechaVigencia()!="") ||($cataudienciasDto->getCausa()!="") ||($cataudienciasDto->getCveEtapaProcesal()!="") ||($cataudienciasDto->getCveNaturaleza()!="") ||($cataudienciasDto->getCveTipoAudiencia()!="") ||($cataudienciasDto->getActivo()!="") ||($cataudienciasDto->getFechaRegistro()!="") ||($cataudienciasDto->getFechaActualizacion()!="") ||($cataudienciasDto->getCveCodigo()!="") ||($cataudienciasDto->getAudienciaInicial()!="") ){
$sql.=" WHERE ";
}
if($cataudienciasDto->getCveCatAudiencia()!=""){
$sql.="cveCatAudiencia='".$cataudienciasDto->getCveCatAudiencia()."'";
if(($cataudienciasDto->getDesCatAudiencia()!="") ||($cataudienciasDto->getFechaInicia()!="") ||($cataudienciasDto->getFechaVigencia()!="") ||($cataudienciasDto->getCausa()!="") ||($cataudienciasDto->getCveEtapaProcesal()!="") ||($cataudienciasDto->getCveNaturaleza()!="") ||($cataudienciasDto->getCveTipoAudiencia()!="") ||($cataudienciasDto->getActivo()!="") ||($cataudienciasDto->getFechaRegistro()!="") ||($cataudienciasDto->getFechaActualizacion()!="") ||($cataudienciasDto->getCveCodigo()!="") ||($cataudienciasDto->getAudienciaInicial()!="") ){
$sql.=" AND ";
}
}
if($cataudienciasDto->getDesCatAudiencia()!=""){
$sql.="desCatAudiencia='".$cataudienciasDto->getDesCatAudiencia()."'";
if(($cataudienciasDto->getFechaInicia()!="") ||($cataudienciasDto->getFechaVigencia()!="") ||($cataudienciasDto->getCausa()!="") ||($cataudienciasDto->getCveEtapaProcesal()!="") ||($cataudienciasDto->getCveNaturaleza()!="") ||($cataudienciasDto->getCveTipoAudiencia()!="") ||($cataudienciasDto->getActivo()!="") ||($cataudienciasDto->getFechaRegistro()!="") ||($cataudienciasDto->getFechaActualizacion()!="") ||($cataudienciasDto->getCveCodigo()!="") ||($cataudienciasDto->getAudienciaInicial()!="") ){
$sql.=" AND ";
}
}
if($cataudienciasDto->getFechaInicia()!=""){
$sql.="fechaInicia='".$cataudienciasDto->getFechaInicia()."'";
if(($cataudienciasDto->getFechaVigencia()!="") ||($cataudienciasDto->getCausa()!="") ||($cataudienciasDto->getCveEtapaProcesal()!="") ||($cataudienciasDto->getCveNaturaleza()!="") ||($cataudienciasDto->getCveTipoAudiencia()!="") ||($cataudienciasDto->getActivo()!="") ||($cataudienciasDto->getFechaRegistro()!="") ||($cataudienciasDto->getFechaActualizacion()!="") ||($cataudienciasDto->getCveCodigo()!="") ||($cataudienciasDto->getAudienciaInicial()!="") ){
$sql.=" AND ";
}
}
if($cataudienciasDto->getFechaVigencia()!=""){
$sql.="fechaVigencia='".$cataudienciasDto->getFechaVigencia()."'";
if(($cataudienciasDto->getCausa()!="") ||($cataudienciasDto->getCveEtapaProcesal()!="") ||($cataudienciasDto->getCveNaturaleza()!="") ||($cataudienciasDto->getCveTipoAudiencia()!="") ||($cataudienciasDto->getActivo()!="") ||($cataudienciasDto->getFechaRegistro()!="") ||($cataudienciasDto->getFechaActualizacion()!="") ||($cataudienciasDto->getCveCodigo()!="") ||($cataudienciasDto->getAudienciaInicial()!="") ){
$sql.=" AND ";
}
}
if($cataudienciasDto->getCausa()!=""){
$sql.="causa='".$cataudienciasDto->getCausa()."'";
if(($cataudienciasDto->getCveEtapaProcesal()!="") ||($cataudienciasDto->getCveNaturaleza()!="") ||($cataudienciasDto->getCveTipoAudiencia()!="") ||($cataudienciasDto->getActivo()!="") ||($cataudienciasDto->getFechaRegistro()!="") ||($cataudienciasDto->getFechaActualizacion()!="") ||($cataudienciasDto->getCveCodigo()!="") ||($cataudienciasDto->getAudienciaInicial()!="") ){
$sql.=" AND ";
}
}
if($cataudienciasDto->getCveEtapaProcesal()!=""){
$sql.="cveEtapaProcesal='".$cataudienciasDto->getCveEtapaProcesal()."'";
if(($cataudienciasDto->getCveNaturaleza()!="") ||($cataudienciasDto->getCveTipoAudiencia()!="") ||($cataudienciasDto->getActivo()!="") ||($cataudienciasDto->getFechaRegistro()!="") ||($cataudienciasDto->getFechaActualizacion()!="") ||($cataudienciasDto->getCveCodigo()!="") ||($cataudienciasDto->getAudienciaInicial()!="") ){
$sql.=" AND ";
}
}
if($cataudienciasDto->getCveNaturaleza()!=""){
$sql.="cveNaturaleza='".$cataudienciasDto->getCveNaturaleza()."'";
if(($cataudienciasDto->getCveTipoAudiencia()!="") ||($cataudienciasDto->getActivo()!="") ||($cataudienciasDto->getFechaRegistro()!="") ||($cataudienciasDto->getFechaActualizacion()!="") ||($cataudienciasDto->getCveCodigo()!="") ||($cataudienciasDto->getAudienciaInicial()!="") ){
$sql.=" AND ";
}
}
if($cataudienciasDto->getCveTipoAudiencia()!=""){
$sql.="cveTipoAudiencia='".$cataudienciasDto->getCveTipoAudiencia()."'";
if(($cataudienciasDto->getActivo()!="") ||($cataudienciasDto->getFechaRegistro()!="") ||($cataudienciasDto->getFechaActualizacion()!="") ||($cataudienciasDto->getCveCodigo()!="") ||($cataudienciasDto->getAudienciaInicial()!="") ){
$sql.=" AND ";
}
}
if($cataudienciasDto->getActivo()!=""){
$sql.="activo='".$cataudienciasDto->getActivo()."'";
if(($cataudienciasDto->getFechaRegistro()!="") ||($cataudienciasDto->getFechaActualizacion()!="") ||($cataudienciasDto->getCveCodigo()!="") ||($cataudienciasDto->getAudienciaInicial()!="") ){
$sql.=" AND ";
}
}
if($cataudienciasDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$cataudienciasDto->getFechaRegistro()."'";
if(($cataudienciasDto->getFechaActualizacion()!="") ||($cataudienciasDto->getCveCodigo()!="") ||($cataudienciasDto->getAudienciaInicial()!="") ){
$sql.=" AND ";
}
}
if($cataudienciasDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$cataudienciasDto->getFechaActualizacion()."'";
if(($cataudienciasDto->getCveCodigo()!="") ||($cataudienciasDto->getAudienciaInicial()!="") ){
$sql.=" AND ";
}
}
if($cataudienciasDto->getCveCodigo()!=""){
$sql.="cveCodigo='".$cataudienciasDto->getCveCodigo()."'";
if(($cataudienciasDto->getAudienciaInicial()!="") ){
$sql.=" AND ";
}
}
if($cataudienciasDto->getAudienciaInicial()!=""){
$sql.="audienciaInicial='".$cataudienciasDto->getAudienciaInicial()."'";
}
    $validacion = new Validacion();
        if ($param != "" || $param != null) {            
            
            if ($param["fechI"] != "" && $param["fechV"] != "") {
                if ($param["fechI"] != "") {
                    $param["fechI"] = $validacion->normalToMysql($param["fechI"]);
                }
                if ($param["fechV"] != "") {
                    $param["fechV"] = $validacion->normalToMysql($param["fechV"]);
                }
                $sql .=" and fechaInicia >= '" . $param["fechI"] . "'";
                $sql .=" and fechaInicia <= '" . $param["fechV"] . "'";
                // $sql .=" and DATE_FORMAT(fechaRegistro, '%Y-%m-%d') between '" . $param["fechaDesde"] . "' and '" . $param["fechaHasta"] . "'";
            }
            
            
            //busqueda por like
//            if ($param["desAudiencia"] != "") {
//                
//                $sql .=" and desCatAudiencia like '%" . $param["desAudiencia"] . "%'";                
//                // $sql .=" and DATE_FORMAT(fechaRegistro, '%Y-%m-%d') between '" . $param["fechaDesde"] . "' and '" . $param["fechaHasta"] . "'";
//            }
            //fin de busqueda por like
            
            if ($param["paginacion"] == "true") {
                if ($param["pag"] > 0) {
                    $inicial = ($param["pag"] - 1) * $param["cantxPag"];
                } else {
                    $inicial = 0;
                }
                
            }
        }
if($orden!=""){
$sql.=$orden;
}else{
$sql.="";
}
if ($param != "" || $param != null) {
    $sql.=" LIMIT " . $inicial . "," . $param["cantxPag"];
}
//echo $sql;
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
    if ($fields === null) {
        $tmp[$contador] = new CataudienciasDTO();
        $tmp[$contador]->setCveCatAudiencia($row["cveCatAudiencia"]);
        $tmp[$contador]->setDesCatAudiencia($row["desCatAudiencia"]);
        $tmp[$contador]->setFechaInicia($row["fechaInicia"]);
        $tmp[$contador]->setFechaVigencia($row["fechaVigencia"]);
        $tmp[$contador]->setCausa($row["causa"]);
        $tmp[$contador]->setCveEtapaProcesal($row["cveEtapaProcesal"]);
        $tmp[$contador]->setCveNaturaleza($row["cveNaturaleza"]);
        $tmp[$contador]->setCveTipoAudiencia($row["cveTipoAudiencia"]);
        $tmp[$contador]->setActivo($row["activo"]);
        $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
        $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
        $tmp[$contador]->setCveCodigo($row["cveCodigo"]);
        $tmp[$contador]->setAudienciaInicial($row["audienciaInicial"]);
        $contador++;
    }
    else
    {   //echo $sql;
        $tmp[$contador] = $row["totalCount"];
        $contador++;
    }
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
//echo $sql;
unset($sql);
return $tmp;
}
}
?>