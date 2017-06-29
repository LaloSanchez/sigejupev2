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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/medidasproapeladas/MedidasproapeladasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class MedidasproapeladasDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertMedidasproapeladas($medidasproapeladasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblmedidasproapeladas(";
if($medidasproapeladasDto->getIdMedidaProApelada()!=""){
$sql.="idMedidaProApelada";
if(($medidasproapeladasDto->getIdMedidaProteccion()!="") ||($medidasproapeladasDto->getCveSentido()!="") ||($medidasproapeladasDto->getNumToca()!="") ||($medidasproapeladasDto->getAnioToca()!="") ||($medidasproapeladasDto->getCveSala()!="") ||($medidasproapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($medidasproapeladasDto->getIdMedidaProteccion()!=""){
$sql.="idMedidaProteccion";
if(($medidasproapeladasDto->getCveSentido()!="") ||($medidasproapeladasDto->getNumToca()!="") ||($medidasproapeladasDto->getAnioToca()!="") ||($medidasproapeladasDto->getCveSala()!="") ||($medidasproapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($medidasproapeladasDto->getCveSentido()!=""){
$sql.="cveSentido";
if(($medidasproapeladasDto->getNumToca()!="") ||($medidasproapeladasDto->getAnioToca()!="") ||($medidasproapeladasDto->getCveSala()!="") ||($medidasproapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($medidasproapeladasDto->getNumToca()!=""){
$sql.="NumToca";
if(($medidasproapeladasDto->getAnioToca()!="") ||($medidasproapeladasDto->getCveSala()!="") ||($medidasproapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($medidasproapeladasDto->getAnioToca()!=""){
$sql.="AnioToca";
if(($medidasproapeladasDto->getCveSala()!="") ||($medidasproapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($medidasproapeladasDto->getCveSala()!=""){
$sql.="CveSala";
if(($medidasproapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($medidasproapeladasDto->getActivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($medidasproapeladasDto->getIdMedidaProApelada()!=""){
$sql.="'".$medidasproapeladasDto->getIdMedidaProApelada()."'";
if(($medidasproapeladasDto->getIdMedidaProteccion()!="") ||($medidasproapeladasDto->getCveSentido()!="") ||($medidasproapeladasDto->getNumToca()!="") ||($medidasproapeladasDto->getAnioToca()!="") ||($medidasproapeladasDto->getCveSala()!="") ||($medidasproapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($medidasproapeladasDto->getIdMedidaProteccion()!=""){
$sql.="'".$medidasproapeladasDto->getIdMedidaProteccion()."'";
if(($medidasproapeladasDto->getCveSentido()!="") ||($medidasproapeladasDto->getNumToca()!="") ||($medidasproapeladasDto->getAnioToca()!="") ||($medidasproapeladasDto->getCveSala()!="") ||($medidasproapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($medidasproapeladasDto->getCveSentido()!=""){
$sql.="'".$medidasproapeladasDto->getCveSentido()."'";
if(($medidasproapeladasDto->getNumToca()!="") ||($medidasproapeladasDto->getAnioToca()!="") ||($medidasproapeladasDto->getCveSala()!="") ||($medidasproapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($medidasproapeladasDto->getNumToca()!=""){
$sql.="'".$medidasproapeladasDto->getNumToca()."'";
if(($medidasproapeladasDto->getAnioToca()!="") ||($medidasproapeladasDto->getCveSala()!="") ||($medidasproapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($medidasproapeladasDto->getAnioToca()!=""){
$sql.="'".$medidasproapeladasDto->getAnioToca()."'";
if(($medidasproapeladasDto->getCveSala()!="") ||($medidasproapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($medidasproapeladasDto->getCveSala()!=""){
$sql.="'".$medidasproapeladasDto->getCveSala()."'";
if(($medidasproapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($medidasproapeladasDto->getActivo()!=""){
$sql.="'".$medidasproapeladasDto->getActivo()."'";
}
if($medidasproapeladasDto->getFechaRegistro()!=""){
}
if($medidasproapeladasDto->getFechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new MedidasproapeladasDTO();
$tmp->setIdMedidaProApelada($this->_proveedor->lastID());
$tmp = $this->selectMedidasproapeladas($tmp,"",$this->_proveedor);
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
public function updateMedidasproapeladas($medidasproapeladasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblmedidasproapeladas SET ";
if($medidasproapeladasDto->getIdMedidaProApelada()!=""){
$sql.="idMedidaProApelada='".$medidasproapeladasDto->getIdMedidaProApelada()."'";
if(($medidasproapeladasDto->getIdMedidaProteccion()!="") ||($medidasproapeladasDto->getCveSentido()!="") ||($medidasproapeladasDto->getNumToca()!="") ||($medidasproapeladasDto->getAnioToca()!="") ||($medidasproapeladasDto->getCveSala()!="") ||($medidasproapeladasDto->getActivo()!="") ||($medidasproapeladasDto->getFechaRegistro()!="") ||($medidasproapeladasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($medidasproapeladasDto->getIdMedidaProteccion()!=""){
$sql.="idMedidaProteccion='".$medidasproapeladasDto->getIdMedidaProteccion()."'";
if(($medidasproapeladasDto->getCveSentido()!="") ||($medidasproapeladasDto->getNumToca()!="") ||($medidasproapeladasDto->getAnioToca()!="") ||($medidasproapeladasDto->getCveSala()!="") ||($medidasproapeladasDto->getActivo()!="") ||($medidasproapeladasDto->getFechaRegistro()!="") ||($medidasproapeladasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($medidasproapeladasDto->getCveSentido()!=""){
$sql.="cveSentido='".$medidasproapeladasDto->getCveSentido()."'";
if(($medidasproapeladasDto->getNumToca()!="") ||($medidasproapeladasDto->getAnioToca()!="") ||($medidasproapeladasDto->getCveSala()!="") ||($medidasproapeladasDto->getActivo()!="") ||($medidasproapeladasDto->getFechaRegistro()!="") ||($medidasproapeladasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($medidasproapeladasDto->getNumToca()!=""){
$sql.="NumToca='".$medidasproapeladasDto->getNumToca()."'";
if(($medidasproapeladasDto->getAnioToca()!="") ||($medidasproapeladasDto->getCveSala()!="") ||($medidasproapeladasDto->getActivo()!="") ||($medidasproapeladasDto->getFechaRegistro()!="") ||($medidasproapeladasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($medidasproapeladasDto->getAnioToca()!=""){
$sql.="AnioToca='".$medidasproapeladasDto->getAnioToca()."'";
if(($medidasproapeladasDto->getCveSala()!="") ||($medidasproapeladasDto->getActivo()!="") ||($medidasproapeladasDto->getFechaRegistro()!="") ||($medidasproapeladasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($medidasproapeladasDto->getCveSala()!=""){
$sql.="CveSala='".$medidasproapeladasDto->getCveSala()."'";
if( ($medidasproapeladasDto->getActivo()!="") ||($medidasproapeladasDto->getFechaRegistro()!="") ||($medidasproapeladasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($medidasproapeladasDto->getActivo()!=""){
$sql.="activo='".$medidasproapeladasDto->getActivo()."'";
if( ($medidasproapeladasDto->getFechaRegistro()!="") ||($medidasproapeladasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($medidasproapeladasDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$medidasproapeladasDto->getFechaRegistro()."'";
if(($medidasproapeladasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($medidasproapeladasDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$medidasproapeladasDto->getFechaActualizacion()."'";
}
$sql.=" WHERE idMedidaProApelada='".$medidasproapeladasDto->getIdMedidaProApelada()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new MedidasproapeladasDTO();
$tmp->setIdMedidaProApelada($medidasproapeladasDto->getIdMedidaProApelada());
$tmp = $this->selectMedidasproapeladas($tmp,"",$this->_proveedor);
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
public function deleteMedidasproapeladas($medidasproapeladasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblmedidasproapeladas  WHERE idMedidaProApelada='".$medidasproapeladasDto->getIdMedidaProApelada()."'";
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
public function selectMedidasproapeladas($medidasproapeladasDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idMedidaProApelada,idMedidaProteccion,cveSentido,NumToca,AnioToca,CveSala,activo,fechaRegistro,fechaActualizacion FROM tblmedidasproapeladas ";
if(($medidasproapeladasDto->getIdMedidaProApelada()!="") ||($medidasproapeladasDto->getIdMedidaProteccion()!="") ||($medidasproapeladasDto->getCveSentido()!="") ||($medidasproapeladasDto->getNumToca()!="") ||($medidasproapeladasDto->getAnioToca()!="") ||($medidasproapeladasDto->getCveSala()!="") ||($medidasproapeladasDto->getActivo()!="") ||($medidasproapeladasDto->getFechaRegistro()!="") ||($medidasproapeladasDto->getFechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($medidasproapeladasDto->getIdMedidaProApelada()!=""){
$sql.="idMedidaProApelada='".$medidasproapeladasDto->getIdMedidaProApelada()."'";
if(($medidasproapeladasDto->getIdMedidaProteccion()!="") ||($medidasproapeladasDto->getCveSentido()!="") ||($medidasproapeladasDto->getNumToca()!="") ||($medidasproapeladasDto->getAnioToca()!="") ||($medidasproapeladasDto->getCveSala()!="") ||($medidasproapeladasDto->getActivo()!="") ||($medidasproapeladasDto->getFechaRegistro()!="") ||($medidasproapeladasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($medidasproapeladasDto->getIdMedidaProteccion()!=""){
$sql.="idMedidaProteccion='".$medidasproapeladasDto->getIdMedidaProteccion()."'";
if(($medidasproapeladasDto->getCveSentido()!="") ||($medidasproapeladasDto->getNumToca()!="") ||($medidasproapeladasDto->getAnioToca()!="") ||($medidasproapeladasDto->getCveSala()!="") ||($medidasproapeladasDto->getActivo()!="") ||($medidasproapeladasDto->getFechaRegistro()!="") ||($medidasproapeladasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($medidasproapeladasDto->getCveSentido()!=""){
$sql.="cveSentido='".$medidasproapeladasDto->getCveSentido()."'";
if(($medidasproapeladasDto->getNumToca()!="") ||($medidasproapeladasDto->getAnioToca()!="") ||($medidasproapeladasDto->getCveSala()!="") ||($medidasproapeladasDto->getActivo()!="") ||($medidasproapeladasDto->getFechaRegistro()!="") ||($medidasproapeladasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($medidasproapeladasDto->getNumToca()!=""){
$sql.="NumToca='".$medidasproapeladasDto->getNumToca()."'";
if(($medidasproapeladasDto->getAnioToca()!="") ||($medidasproapeladasDto->getCveSala()!="") ||($medidasproapeladasDto->getActivo()!="") ||($medidasproapeladasDto->getFechaRegistro()!="") ||($medidasproapeladasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($medidasproapeladasDto->getAnioToca()!=""){
$sql.="AnioToca='".$medidasproapeladasDto->getAnioToca()."'";
if(($medidasproapeladasDto->getCveSala()!="") ||($medidasproapeladasDto->getActivo()!="") ||($medidasproapeladasDto->getFechaRegistro()!="") ||($medidasproapeladasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($medidasproapeladasDto->getCveSala()!=""){
$sql.="CveSala='".$medidasproapeladasDto->getCveSala()."'";
if( ($medidasproapeladasDto->getActivo()!="") ||($medidasproapeladasDto->getFechaRegistro()!="") ||($medidasproapeladasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($medidasproapeladasDto->getActivo()!=""){
$sql.="activo='".$medidasproapeladasDto->getActivo()."'";
if( ($medidasproapeladasDto->getFechaRegistro()!="") ||($medidasproapeladasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($medidasproapeladasDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$medidasproapeladasDto->getFechaRegistro()."'";
if(($medidasproapeladasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($medidasproapeladasDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$medidasproapeladasDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new MedidasproapeladasDTO();
$tmp[$contador]->setIdMedidaProApelada($row["idMedidaProApelada"]);
$tmp[$contador]->setIdMedidaProteccion($row["idMedidaProteccion"]);
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