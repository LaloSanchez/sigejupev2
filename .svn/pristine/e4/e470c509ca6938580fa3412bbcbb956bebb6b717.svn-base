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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/imputadossentencias/ImputadossentenciasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class ImputadossentenciasDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertImputadossentencias($imputadossentenciasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblimputadossentencias(";
if($imputadossentenciasDto->getIdImputadoSentencia()!=""){
$sql.="idImputadoSentencia";
if(($imputadossentenciasDto->getIdActuacion()!="") ||($imputadossentenciasDto->getIdImpOfeDelCarpeta()!="") ||($imputadossentenciasDto->getApelacion()!="") ||($imputadossentenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($imputadossentenciasDto->getIdActuacion()!=""){
$sql.="idActuacion";
if(($imputadossentenciasDto->getIdImpOfeDelCarpeta()!="") ||($imputadossentenciasDto->getApelacion()!="") ||($imputadossentenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($imputadossentenciasDto->getIdImpOfeDelCarpeta()!=""){
$sql.="idImpOfeDelCarpeta";
if(($imputadossentenciasDto->getApelacion()!="") ||($imputadossentenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($imputadossentenciasDto->getApelacion()!=""){
$sql.="Apelacion";
if(($imputadossentenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($imputadossentenciasDto->getActivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($imputadossentenciasDto->getIdImputadoSentencia()!=""){
$sql.="'".$imputadossentenciasDto->getIdImputadoSentencia()."'";
if(($imputadossentenciasDto->getIdActuacion()!="") ||($imputadossentenciasDto->getIdImpOfeDelCarpeta()!="") ||($imputadossentenciasDto->getApelacion()!="") ||($imputadossentenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($imputadossentenciasDto->getIdActuacion()!=""){
$sql.="'".$imputadossentenciasDto->getIdActuacion()."'";
if(($imputadossentenciasDto->getIdImpOfeDelCarpeta()!="") ||($imputadossentenciasDto->getApelacion()!="") ||($imputadossentenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($imputadossentenciasDto->getIdImpOfeDelCarpeta()!=""){
$sql.="'".$imputadossentenciasDto->getIdImpOfeDelCarpeta()."'";
if(($imputadossentenciasDto->getApelacion()!="") ||($imputadossentenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($imputadossentenciasDto->getApelacion()!=""){
$sql.="'".$imputadossentenciasDto->getApelacion()."'";
if(($imputadossentenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($imputadossentenciasDto->getActivo()!=""){
$sql.="'".$imputadossentenciasDto->getActivo()."'";
}
if($imputadossentenciasDto->getFechaRegistro()!=""){
}
if($imputadossentenciasDto->getFechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new ImputadossentenciasDTO();
$tmp->setidImputadoSentencia($this->_proveedor->lastID());
$tmp = $this->selectImputadossentencias($tmp,"",$this->_proveedor);
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
public function updateImputadossentencias($imputadossentenciasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblimputadossentencias SET ";
if($imputadossentenciasDto->getIdImputadoSentencia()!=""){
$sql.="idImputadoSentencia='".$imputadossentenciasDto->getIdImputadoSentencia()."'";
if(($imputadossentenciasDto->getIdActuacion()!="") ||($imputadossentenciasDto->getIdImpOfeDelCarpeta()!="") ||($imputadossentenciasDto->getApelacion()!="") ||($imputadossentenciasDto->getActivo()!="") ||($imputadossentenciasDto->getFechaRegistro()!="") ||($imputadossentenciasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($imputadossentenciasDto->getIdActuacion()!=""){
$sql.="idActuacion='".$imputadossentenciasDto->getIdActuacion()."'";
if(($imputadossentenciasDto->getIdImpOfeDelCarpeta()!="") ||($imputadossentenciasDto->getApelacion()!="") ||($imputadossentenciasDto->getActivo()!="") ||($imputadossentenciasDto->getFechaRegistro()!="") ||($imputadossentenciasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($imputadossentenciasDto->getIdImpOfeDelCarpeta()!=""){
$sql.="idImpOfeDelCarpeta='".$imputadossentenciasDto->getIdImpOfeDelCarpeta()."'";
if(($imputadossentenciasDto->getApelacion()!="") ||($imputadossentenciasDto->getActivo()!="") ||($imputadossentenciasDto->getFechaRegistro()!="") ||($imputadossentenciasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($imputadossentenciasDto->getApelacion()!=""){
$sql.="Apelacion='".$imputadossentenciasDto->getApelacion()."'";
if(($imputadossentenciasDto->getActivo()!="") ||($imputadossentenciasDto->getFechaRegistro()!="") ||($imputadossentenciasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($imputadossentenciasDto->getActivo()!=""){
$sql.="activo='".$imputadossentenciasDto->getActivo()."'";
if(($imputadossentenciasDto->getFechaRegistro()!="") ||($imputadossentenciasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($imputadossentenciasDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$imputadossentenciasDto->getFechaRegistro()."'";
if(($imputadossentenciasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($imputadossentenciasDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$imputadossentenciasDto->getFechaActualizacion()."'";
}
$sql.=" WHERE idImputadoSentencia='".$imputadossentenciasDto->getIdImputadoSentencia()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new ImputadossentenciasDTO();
$tmp->setidImputadoSentencia($imputadossentenciasDto->getIdImputadoSentencia());
$tmp = $this->selectImputadossentencias($tmp,"",$this->_proveedor);
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
public function deleteImputadossentencias($imputadossentenciasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblimputadossentencias  WHERE idImputadoSentencia='".$imputadossentenciasDto->getIdImputadoSentencia()."'";
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
public function selectImputadossentencias($imputadossentenciasDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idImputadoSentencia,idActuacion,idImpOfeDelCarpeta,Apelacion,activo,fechaRegistro,fechaActualizacion FROM tblimputadossentencias ";
if(($imputadossentenciasDto->getIdImputadoSentencia()!="") ||($imputadossentenciasDto->getIdActuacion()!="") ||($imputadossentenciasDto->getIdImpOfeDelCarpeta()!="") ||($imputadossentenciasDto->getApelacion()!="") ||($imputadossentenciasDto->getActivo()!="") ||($imputadossentenciasDto->getFechaRegistro()!="") ||($imputadossentenciasDto->getFechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($imputadossentenciasDto->getIdImputadoSentencia()!=""){
$sql.="idImputadoSentencia='".$imputadossentenciasDto->getIdImputadoSentencia()."'";
if(($imputadossentenciasDto->getIdActuacion()!="") ||($imputadossentenciasDto->getIdImpOfeDelCarpeta()!="") ||($imputadossentenciasDto->getApelacion()!="") ||($imputadossentenciasDto->getActivo()!="") ||($imputadossentenciasDto->getFechaRegistro()!="") ||($imputadossentenciasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($imputadossentenciasDto->getIdActuacion()!=""){
$sql.="idActuacion='".$imputadossentenciasDto->getIdActuacion()."'";
if(($imputadossentenciasDto->getIdImpOfeDelCarpeta()!="") ||($imputadossentenciasDto->getApelacion()!="") ||($imputadossentenciasDto->getActivo()!="") ||($imputadossentenciasDto->getFechaRegistro()!="") ||($imputadossentenciasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($imputadossentenciasDto->getIdImpOfeDelCarpeta()!=""){
$sql.="idImpOfeDelCarpeta='".$imputadossentenciasDto->getIdImpOfeDelCarpeta()."'";
if(($imputadossentenciasDto->getApelacion()!="") ||($imputadossentenciasDto->getActivo()!="") ||($imputadossentenciasDto->getFechaRegistro()!="") ||($imputadossentenciasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($imputadossentenciasDto->getApelacion()!=""){
$sql.="Apelacion='".$imputadossentenciasDto->getApelacion()."'";
if(($imputadossentenciasDto->getActivo()!="") ||($imputadossentenciasDto->getFechaRegistro()!="") ||($imputadossentenciasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($imputadossentenciasDto->getActivo()!=""){
$sql.="activo='".$imputadossentenciasDto->getActivo()."'";
if(($imputadossentenciasDto->getFechaRegistro()!="") ||($imputadossentenciasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($imputadossentenciasDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$imputadossentenciasDto->getFechaRegistro()."'";
if(($imputadossentenciasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($imputadossentenciasDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$imputadossentenciasDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new ImputadossentenciasDTO();
$tmp[$contador]->setIdImputadoSentencia($row["idImputadoSentencia"]);
$tmp[$contador]->setIdActuacion($row["idActuacion"]);
$tmp[$contador]->setIdImpOfeDelCarpeta($row["idImpOfeDelCarpeta"]);
$tmp[$contador]->setApelacion($row["Apelacion"]);
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