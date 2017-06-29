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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/sentenciastocas/SentenciastocasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class SentenciastocasDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertSentenciastocas($sentenciastocasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblsentenciastocas(";
if($sentenciastocasDto->getIdsentenciatoca()!=""){
$sql.="idsentenciatoca";
if(($sentenciastocasDto->getIdToca()!="") ||($sentenciastocasDto->getCveTipoSentencia()!="") ||($sentenciastocasDto->getIdActuacion()!="") ||($sentenciastocasDto->getActivo()!="") ){
$sql.=",";
}
}
if($sentenciastocasDto->getIdToca()!=""){
$sql.="idToca";
if(($sentenciastocasDto->getCveTipoSentencia()!="") ||($sentenciastocasDto->getIdActuacion()!="") ||($sentenciastocasDto->getActivo()!="") ){
$sql.=",";
}
}
if($sentenciastocasDto->getCveTipoSentencia()!=""){
$sql.="cveTipoSentencia";
if(($sentenciastocasDto->getIdActuacion()!="") ||($sentenciastocasDto->getActivo()!="") ){
$sql.=",";
}
}
if($sentenciastocasDto->getIdActuacion()!=""){
$sql.="idActuacion";
if(($sentenciastocasDto->getActivo()!="") ){
$sql.=",";
}
}
if($sentenciastocasDto->getActivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($sentenciastocasDto->getIdsentenciatoca()!=""){
$sql.="'".$sentenciastocasDto->getIdsentenciatoca()."'";
if(($sentenciastocasDto->getIdToca()!="") ||($sentenciastocasDto->getCveTipoSentencia()!="") ||($sentenciastocasDto->getIdActuacion()!="") ||($sentenciastocasDto->getActivo()!="") ){
$sql.=",";
}
}
if($sentenciastocasDto->getIdToca()!=""){
$sql.="'".$sentenciastocasDto->getIdToca()."'";
if(($sentenciastocasDto->getCveTipoSentencia()!="") ||($sentenciastocasDto->getIdActuacion()!="") ||($sentenciastocasDto->getActivo()!="") ){
$sql.=",";
}
}
if($sentenciastocasDto->getCveTipoSentencia()!=""){
$sql.="'".$sentenciastocasDto->getCveTipoSentencia()."'";
if(($sentenciastocasDto->getIdActuacion()!="") ||($sentenciastocasDto->getActivo()!="") ){
$sql.=",";
}
}
if($sentenciastocasDto->getIdActuacion()!=""){
$sql.="'".$sentenciastocasDto->getIdActuacion()."'";
if(($sentenciastocasDto->getActivo()!="") ){
$sql.=",";
}
}
if($sentenciastocasDto->getActivo()!=""){
$sql.="'".$sentenciastocasDto->getActivo()."'";
}
if($sentenciastocasDto->getFechaRegistro()!=""){
}
if($sentenciastocasDto->getFechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new SentenciastocasDTO();
$tmp->setidsentenciatoca($this->_proveedor->lastID());
$tmp = $this->selectSentenciastocas($tmp,"",$this->_proveedor);
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
public function updateSentenciastocas($sentenciastocasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblsentenciastocas SET ";
if($sentenciastocasDto->getIdsentenciatoca()!=""){
$sql.="idsentenciatoca='".$sentenciastocasDto->getIdsentenciatoca()."'";
if(($sentenciastocasDto->getIdToca()!="") ||($sentenciastocasDto->getCveTipoSentencia()!="") ||($sentenciastocasDto->getIdActuacion()!="") ||($sentenciastocasDto->getActivo()!="") ||($sentenciastocasDto->getFechaRegistro()!="") ||($sentenciastocasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($sentenciastocasDto->getIdToca()!=""){
$sql.="idToca='".$sentenciastocasDto->getIdToca()."'";
if(($sentenciastocasDto->getCveTipoSentencia()!="") ||($sentenciastocasDto->getIdActuacion()!="") ||($sentenciastocasDto->getActivo()!="") ||($sentenciastocasDto->getFechaRegistro()!="") ||($sentenciastocasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($sentenciastocasDto->getCveTipoSentencia()!=""){
$sql.="cveTipoSentencia='".$sentenciastocasDto->getCveTipoSentencia()."'";
if(($sentenciastocasDto->getIdActuacion()!="") ||($sentenciastocasDto->getActivo()!="") ||($sentenciastocasDto->getFechaRegistro()!="") ||($sentenciastocasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($sentenciastocasDto->getIdActuacion()!=""){
$sql.="idActuacion='".$sentenciastocasDto->getIdActuacion()."'";
if(($sentenciastocasDto->getActivo()!="") ||($sentenciastocasDto->getFechaRegistro()!="") ||($sentenciastocasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($sentenciastocasDto->getActivo()!=""){
$sql.="activo='".$sentenciastocasDto->getActivo()."'";
if(($sentenciastocasDto->getFechaRegistro()!="") ||($sentenciastocasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($sentenciastocasDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$sentenciastocasDto->getFechaRegistro()."'";
if(($sentenciastocasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($sentenciastocasDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$sentenciastocasDto->getFechaActualizacion()."'";
}
$sql.=" WHERE idsentenciatoca='".$sentenciastocasDto->getIdsentenciatoca()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new SentenciastocasDTO();
$tmp->setidsentenciatoca($sentenciastocasDto->getIdsentenciatoca());
$tmp = $this->selectSentenciastocas($tmp,"",$this->_proveedor);
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
public function deleteSentenciastocas($sentenciastocasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblsentenciastocas  WHERE idsentenciatoca='".$sentenciastocasDto->getIdsentenciatoca()."'";
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
public function selectSentenciastocas($sentenciastocasDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idsentenciatoca,idToca,cveTipoSentencia,idActuacion,activo,fechaRegistro,fechaActualizacion FROM tblsentenciastocas ";
if(($sentenciastocasDto->getIdsentenciatoca()!="") ||($sentenciastocasDto->getIdToca()!="") ||($sentenciastocasDto->getCveTipoSentencia()!="") ||($sentenciastocasDto->getIdActuacion()!="") ||($sentenciastocasDto->getActivo()!="") ||($sentenciastocasDto->getFechaRegistro()!="") ||($sentenciastocasDto->getFechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($sentenciastocasDto->getIdsentenciatoca()!=""){
$sql.="idsentenciatoca='".$sentenciastocasDto->getIdsentenciatoca()."'";
if(($sentenciastocasDto->getIdToca()!="") ||($sentenciastocasDto->getCveTipoSentencia()!="") ||($sentenciastocasDto->getIdActuacion()!="") ||($sentenciastocasDto->getActivo()!="") ||($sentenciastocasDto->getFechaRegistro()!="") ||($sentenciastocasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($sentenciastocasDto->getIdToca()!=""){
$sql.="idToca='".$sentenciastocasDto->getIdToca()."'";
if(($sentenciastocasDto->getCveTipoSentencia()!="") ||($sentenciastocasDto->getIdActuacion()!="") ||($sentenciastocasDto->getActivo()!="") ||($sentenciastocasDto->getFechaRegistro()!="") ||($sentenciastocasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($sentenciastocasDto->getCveTipoSentencia()!=""){
$sql.="cveTipoSentencia='".$sentenciastocasDto->getCveTipoSentencia()."'";
if(($sentenciastocasDto->getIdActuacion()!="") ||($sentenciastocasDto->getActivo()!="") ||($sentenciastocasDto->getFechaRegistro()!="") ||($sentenciastocasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($sentenciastocasDto->getIdActuacion()!=""){
$sql.="idActuacion='".$sentenciastocasDto->getIdActuacion()."'";
if(($sentenciastocasDto->getActivo()!="") ||($sentenciastocasDto->getFechaRegistro()!="") ||($sentenciastocasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($sentenciastocasDto->getActivo()!=""){
$sql.="activo='".$sentenciastocasDto->getActivo()."'";
if(($sentenciastocasDto->getFechaRegistro()!="") ||($sentenciastocasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($sentenciastocasDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$sentenciastocasDto->getFechaRegistro()."'";
if(($sentenciastocasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($sentenciastocasDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$sentenciastocasDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new SentenciastocasDTO();
$tmp[$contador]->setIdsentenciatoca($row["idsentenciatoca"]);
$tmp[$contador]->setIdToca($row["idToca"]);
$tmp[$contador]->setCveTipoSentencia($row["cveTipoSentencia"]);
$tmp[$contador]->setIdActuacion($row["idActuacion"]);
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