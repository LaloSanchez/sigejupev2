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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/sentenciasapeladas/SentenciasapeladasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class SentenciasapeladasDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertSentenciasapeladas($sentenciasapeladasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblsentenciasapeladas(";
if($sentenciasapeladasDto->getIdSentenciaApelada()!=""){
$sql.="idSentenciaApelada";
if(($sentenciasapeladasDto->getIdImputadoSentencia()!="") ||($sentenciasapeladasDto->getCveSentido()!="") ||($sentenciasapeladasDto->getNumToca()!="") ||($sentenciasapeladasDto->getAnioToca()!="") ||($sentenciasapeladasDto->getCveSala()!="") ||($sentenciasapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($sentenciasapeladasDto->getIdImputadoSentencia()!=""){
$sql.="idImputadoSentencia";
if(($sentenciasapeladasDto->getCveSentido()!="") ||($sentenciasapeladasDto->getNumToca()!="") ||($sentenciasapeladasDto->getAnioToca()!="") ||($sentenciasapeladasDto->getCveSala()!="") ||($sentenciasapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($sentenciasapeladasDto->getCveSentido()!=""){
$sql.="cveSentido";
if(($sentenciasapeladasDto->getNumToca()!="") ||($sentenciasapeladasDto->getAnioToca()!="") ||($sentenciasapeladasDto->getCveSala()!="") ||($sentenciasapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($sentenciasapeladasDto->getNumToca()!=""){
$sql.="NumToca";
if(($sentenciasapeladasDto->getAnioToca()!="") ||($sentenciasapeladasDto->getCveSala()!="") ||($sentenciasapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($sentenciasapeladasDto->getAnioToca()!=""){
$sql.="AnioToca";
if(($sentenciasapeladasDto->getCveSala()!="") ||($sentenciasapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($sentenciasapeladasDto->getCveSala()!=""){
$sql.="CveSala";
if(($sentenciasapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($sentenciasapeladasDto->getActivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($sentenciasapeladasDto->getIdSentenciaApelada()!=""){
$sql.="'".$sentenciasapeladasDto->getIdSentenciaApelada()."'";
if(($sentenciasapeladasDto->getIdImputadoSentencia()!="") ||($sentenciasapeladasDto->getCveSentido()!="") ||($sentenciasapeladasDto->getNumToca()!="") ||($sentenciasapeladasDto->getAnioToca()!="") ||($sentenciasapeladasDto->getCveSala()!="") ||($sentenciasapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($sentenciasapeladasDto->getIdImputadoSentencia()!=""){
$sql.="'".$sentenciasapeladasDto->getIdImputadoSentencia()."'";
if(($sentenciasapeladasDto->getCveSentido()!="") ||($sentenciasapeladasDto->getNumToca()!="") ||($sentenciasapeladasDto->getAnioToca()!="") ||($sentenciasapeladasDto->getCveSala()!="") ||($sentenciasapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($sentenciasapeladasDto->getCveSentido()!=""){
$sql.="'".$sentenciasapeladasDto->getCveSentido()."'";
if(($sentenciasapeladasDto->getNumToca()!="") ||($sentenciasapeladasDto->getAnioToca()!="") ||($sentenciasapeladasDto->getCveSala()!="") ||($sentenciasapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($sentenciasapeladasDto->getNumToca()!=""){
$sql.="'".$sentenciasapeladasDto->getNumToca()."'";
if(($sentenciasapeladasDto->getAnioToca()!="") ||($sentenciasapeladasDto->getCveSala()!="") ||($sentenciasapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($sentenciasapeladasDto->getAnioToca()!=""){
$sql.="'".$sentenciasapeladasDto->getAnioToca()."'";
if(($sentenciasapeladasDto->getCveSala()!="") ||($sentenciasapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($sentenciasapeladasDto->getCveSala()!=""){
$sql.="'".$sentenciasapeladasDto->getCveSala()."'";
if(($sentenciasapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($sentenciasapeladasDto->getActivo()!=""){
$sql.="'".$sentenciasapeladasDto->getActivo()."'";
}
if($sentenciasapeladasDto->getFechaRegistro()!=""){
}
if($sentenciasapeladasDto->getFechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new SentenciasapeladasDTO();
$tmp->setidSentenciaApelada($this->_proveedor->lastID());
$tmp = $this->selectSentenciasapeladas($tmp,"",$this->_proveedor);
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
public function updateSentenciasapeladas($sentenciasapeladasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblsentenciasapeladas SET ";
if($sentenciasapeladasDto->getIdSentenciaApelada()!=""){
$sql.="idSentenciaApelada='".$sentenciasapeladasDto->getIdSentenciaApelada()."'";
if(($sentenciasapeladasDto->getIdImputadoSentencia()!="") ||($sentenciasapeladasDto->getCveSentido()!="") ||($sentenciasapeladasDto->getNumToca()!="") ||($sentenciasapeladasDto->getAnioToca()!="") ||($sentenciasapeladasDto->getCveSala()!="") ||($sentenciasapeladasDto->getActivo()!="") ||($sentenciasapeladasDto->getFechaRegistro()!="") ||($sentenciasapeladasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($sentenciasapeladasDto->getIdImputadoSentencia()!=""){
$sql.="idImputadoSentencia='".$sentenciasapeladasDto->getIdImputadoSentencia()."'";
if(($sentenciasapeladasDto->getCveSentido()!="") ||($sentenciasapeladasDto->getNumToca()!="") ||($sentenciasapeladasDto->getAnioToca()!="") ||($sentenciasapeladasDto->getCveSala()!="") ||($sentenciasapeladasDto->getActivo()!="") ||($sentenciasapeladasDto->getFechaRegistro()!="") ||($sentenciasapeladasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($sentenciasapeladasDto->getCveSentido()!=""){
$sql.="cveSentido='".$sentenciasapeladasDto->getCveSentido()."'";
if(($sentenciasapeladasDto->getNumToca()!="") ||($sentenciasapeladasDto->getAnioToca()!="") ||($sentenciasapeladasDto->getCveSala()!="") ||($sentenciasapeladasDto->getActivo()!="") ||($sentenciasapeladasDto->getFechaRegistro()!="") ||($sentenciasapeladasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($sentenciasapeladasDto->getNumToca()!=""){
$sql.="NumToca='".$sentenciasapeladasDto->getNumToca()."'";
if(($sentenciasapeladasDto->getAnioToca()!="") ||($sentenciasapeladasDto->getCveSala()!="") ||($sentenciasapeladasDto->getActivo()!="") ||($sentenciasapeladasDto->getFechaRegistro()!="") ||($sentenciasapeladasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($sentenciasapeladasDto->getAnioToca()!=""){
$sql.="AnioToca='".$sentenciasapeladasDto->getAnioToca()."'";
if(($sentenciasapeladasDto->getCveSala()!="") ||($sentenciasapeladasDto->getActivo()!="") ||($sentenciasapeladasDto->getFechaRegistro()!="") ||($sentenciasapeladasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($sentenciasapeladasDto->getCveSala()!=""){
$sql.="CveSala='".$sentenciasapeladasDto->getCveSala()."'";
if(($sentenciasapeladasDto->getActivo()!="") ||($sentenciasapeladasDto->getFechaRegistro()!="") ||($sentenciasapeladasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($sentenciasapeladasDto->getActivo()!=""){
$sql.="activo='".$sentenciasapeladasDto->getActivo()."'";
if(($sentenciasapeladasDto->getFechaRegistro()!="") ||($sentenciasapeladasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($sentenciasapeladasDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$sentenciasapeladasDto->getFechaRegistro()."'";
if(($sentenciasapeladasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($sentenciasapeladasDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$sentenciasapeladasDto->getFechaActualizacion()."'";
}
$sql.=" WHERE idSentenciaApelada='".$sentenciasapeladasDto->getIdSentenciaApelada()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new SentenciasapeladasDTO();
$tmp->setidSentenciaApelada($sentenciasapeladasDto->getIdSentenciaApelada());
$tmp = $this->selectSentenciasapeladas($tmp,"",$this->_proveedor);
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
public function deleteSentenciasapeladas($sentenciasapeladasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblsentenciasapeladas  WHERE idSentenciaApelada='".$sentenciasapeladasDto->getIdSentenciaApelada()."'";
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
public function selectSentenciasapeladas($sentenciasapeladasDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idSentenciaApelada,idImputadoSentencia,cveSentido,NumToca,AnioToca,CveSala,activo,fechaRegistro,fechaActualizacion FROM tblsentenciasapeladas ";
if(($sentenciasapeladasDto->getIdSentenciaApelada()!="") ||($sentenciasapeladasDto->getIdImputadoSentencia()!="") ||($sentenciasapeladasDto->getCveSentido()!="") ||($sentenciasapeladasDto->getNumToca()!="") ||($sentenciasapeladasDto->getAnioToca()!="") ||($sentenciasapeladasDto->getCveSala()!="") ||($sentenciasapeladasDto->getActivo()!="") ||($sentenciasapeladasDto->getFechaRegistro()!="") ||($sentenciasapeladasDto->getFechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($sentenciasapeladasDto->getIdSentenciaApelada()!=""){
$sql.="idSentenciaApelada='".$sentenciasapeladasDto->getIdSentenciaApelada()."'";
if(($sentenciasapeladasDto->getIdImputadoSentencia()!="") ||($sentenciasapeladasDto->getCveSentido()!="") ||($sentenciasapeladasDto->getNumToca()!="") ||($sentenciasapeladasDto->getAnioToca()!="") ||($sentenciasapeladasDto->getCveSala()!="") ||($sentenciasapeladasDto->getActivo()!="") ||($sentenciasapeladasDto->getFechaRegistro()!="") ||($sentenciasapeladasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($sentenciasapeladasDto->getIdImputadoSentencia()!=""){
$sql.="idImputadoSentencia='".$sentenciasapeladasDto->getIdImputadoSentencia()."'";
if(($sentenciasapeladasDto->getCveSentido()!="") ||($sentenciasapeladasDto->getNumToca()!="") ||($sentenciasapeladasDto->getAnioToca()!="") ||($sentenciasapeladasDto->getCveSala()!="") ||($sentenciasapeladasDto->getActivo()!="") ||($sentenciasapeladasDto->getFechaRegistro()!="") ||($sentenciasapeladasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($sentenciasapeladasDto->getCveSentido()!=""){
$sql.="cveSentido='".$sentenciasapeladasDto->getCveSentido()."'";
if(($sentenciasapeladasDto->getNumToca()!="") ||($sentenciasapeladasDto->getAnioToca()!="") ||($sentenciasapeladasDto->getCveSala()!="") ||($sentenciasapeladasDto->getActivo()!="") ||($sentenciasapeladasDto->getFechaRegistro()!="") ||($sentenciasapeladasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($sentenciasapeladasDto->getNumToca()!=""){
$sql.="NumToca='".$sentenciasapeladasDto->getNumToca()."'";
if(($sentenciasapeladasDto->getAnioToca()!="") ||($sentenciasapeladasDto->getCveSala()!="") ||($sentenciasapeladasDto->getActivo()!="") ||($sentenciasapeladasDto->getFechaRegistro()!="") ||($sentenciasapeladasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($sentenciasapeladasDto->getAnioToca()!=""){
$sql.="AnioToca='".$sentenciasapeladasDto->getAnioToca()."'";
if(($sentenciasapeladasDto->getCveSala()!="") ||($sentenciasapeladasDto->getActivo()!="") ||($sentenciasapeladasDto->getFechaRegistro()!="") ||($sentenciasapeladasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($sentenciasapeladasDto->getCveSala()!=""){
$sql.="CveSala='".$sentenciasapeladasDto->getCveSala()."'";
if(($sentenciasapeladasDto->getActivo()!="") ||($sentenciasapeladasDto->getFechaRegistro()!="") ||($sentenciasapeladasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($sentenciasapeladasDto->getActivo()!=""){
$sql.="activo='".$sentenciasapeladasDto->getActivo()."'";
if(($sentenciasapeladasDto->getFechaRegistro()!="") ||($sentenciasapeladasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($sentenciasapeladasDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$sentenciasapeladasDto->getFechaRegistro()."'";
if(($sentenciasapeladasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($sentenciasapeladasDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$sentenciasapeladasDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new SentenciasapeladasDTO();
$tmp[$contador]->setIdSentenciaApelada($row["idSentenciaApelada"]);
$tmp[$contador]->setIdImputadoSentencia($row["idImputadoSentencia"]);
$tmp[$contador]->setCveSentido($row["cveSentido"]);
$tmp[$contador]->setNumToca($row["NumToca"]);
$tmp[$contador]->setAnioToca($row["AnioToca"]);
$tmp[$contador]->setCveSala($row["CveSala"]);
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