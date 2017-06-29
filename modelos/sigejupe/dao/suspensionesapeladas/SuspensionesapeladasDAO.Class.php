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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/suspensionesapeladas/SuspensionesapeladasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class SuspensionesapeladasDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertSuspensionesapeladas($suspensionesapeladasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblsuspensionesapeladas(";
if($suspensionesapeladasDto->getIdSuspensionApelada()!=""){
$sql.="idSuspensionApelada";
if(($suspensionesapeladasDto->getIdSuspensionCondicional()!="") ||($suspensionesapeladasDto->getCveSentido()!="") ||($suspensionesapeladasDto->getNumToca()!="") ||($suspensionesapeladasDto->getAnioToca()!="") ||($suspensionesapeladasDto->getCveSala()!="") ||($suspensionesapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($suspensionesapeladasDto->getIdSuspensionCondicional()!=""){
$sql.="idSuspensionCondicional";
if(($suspensionesapeladasDto->getCveSentido()!="") ||($suspensionesapeladasDto->getNumToca()!="") ||($suspensionesapeladasDto->getAnioToca()!="") ||($suspensionesapeladasDto->getCveSala()!="") ||($suspensionesapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($suspensionesapeladasDto->getCveSentido()!=""){
$sql.="cveSentido";
if(($suspensionesapeladasDto->getNumToca()!="") ||($suspensionesapeladasDto->getAnioToca()!="") ||($suspensionesapeladasDto->getCveSala()!="") ||($suspensionesapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($suspensionesapeladasDto->getNumToca()!=""){
$sql.="NumToca";
if(($suspensionesapeladasDto->getAnioToca()!="") ||($suspensionesapeladasDto->getCveSala()!="") ||($suspensionesapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($suspensionesapeladasDto->getAnioToca()!=""){
$sql.="AnioToca";
if(($suspensionesapeladasDto->getCveSala()!="") ||($suspensionesapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($suspensionesapeladasDto->getCveSala()!=""){
$sql.="CveSala";
if(($suspensionesapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($suspensionesapeladasDto->getActivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($suspensionesapeladasDto->getIdSuspensionApelada()!=""){
$sql.="'".$suspensionesapeladasDto->getIdSuspensionApelada()."'";
if(($suspensionesapeladasDto->getIdSuspensionCondicional()!="") ||($suspensionesapeladasDto->getCveSentido()!="") ||($suspensionesapeladasDto->getNumToca()!="") ||($suspensionesapeladasDto->getAnioToca()!="") ||($suspensionesapeladasDto->getCveSala()!="") ||($suspensionesapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($suspensionesapeladasDto->getIdSuspensionCondicional()!=""){
$sql.="'".$suspensionesapeladasDto->getIdSuspensionCondicional()."'";
if(($suspensionesapeladasDto->getCveSentido()!="") ||($suspensionesapeladasDto->getNumToca()!="") ||($suspensionesapeladasDto->getAnioToca()!="") ||($suspensionesapeladasDto->getCveSala()!="") ||($suspensionesapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($suspensionesapeladasDto->getCveSentido()!=""){
$sql.="'".$suspensionesapeladasDto->getCveSentido()."'";
if(($suspensionesapeladasDto->getNumToca()!="") ||($suspensionesapeladasDto->getAnioToca()!="") ||($suspensionesapeladasDto->getCveSala()!="") ||($suspensionesapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($suspensionesapeladasDto->getNumToca()!=""){
$sql.="'".$suspensionesapeladasDto->getNumToca()."'";
if(($suspensionesapeladasDto->getAnioToca()!="") ||($suspensionesapeladasDto->getCveSala()!="") ||($suspensionesapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($suspensionesapeladasDto->getAnioToca()!=""){
$sql.="'".$suspensionesapeladasDto->getAnioToca()."'";
if(($suspensionesapeladasDto->getCveSala()!="") ||($suspensionesapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($suspensionesapeladasDto->getCveSala()!=""){
$sql.="'".$suspensionesapeladasDto->getCveSala()."'";
if(($suspensionesapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($suspensionesapeladasDto->getActivo()!=""){
$sql.="'".$suspensionesapeladasDto->getActivo()."'";
}
if($suspensionesapeladasDto->getFechaRegistro()!=""){
}
if($suspensionesapeladasDto->getFechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new SuspensionesapeladasDTO();
$tmp->setidSuspensionApelada($this->_proveedor->lastID());
$tmp = $this->selectSuspensionesapeladas($tmp,"",$this->_proveedor);
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
public function updateSuspensionesapeladas($suspensionesapeladasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblsuspensionesapeladas SET ";
if($suspensionesapeladasDto->getIdSuspensionApelada()!=""){
$sql.="idSuspensionApelada='".$suspensionesapeladasDto->getIdSuspensionApelada()."'";
if(($suspensionesapeladasDto->getIdSuspensionCondicional()!="") ||($suspensionesapeladasDto->getCveSentido()!="") ||($suspensionesapeladasDto->getNumToca()!="") ||($suspensionesapeladasDto->getAnioToca()!="") ||($suspensionesapeladasDto->getCveSala()!="") ||($suspensionesapeladasDto->getActivo()!="") ||($suspensionesapeladasDto->getFechaRegistro()!="") ||($suspensionesapeladasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($suspensionesapeladasDto->getIdSuspensionCondicional()!=""){
$sql.="idSuspensionCondicional='".$suspensionesapeladasDto->getIdSuspensionCondicional()."'";
if(($suspensionesapeladasDto->getCveSentido()!="") ||($suspensionesapeladasDto->getNumToca()!="") ||($suspensionesapeladasDto->getAnioToca()!="") ||($suspensionesapeladasDto->getCveSala()!="") ||($suspensionesapeladasDto->getActivo()!="") ||($suspensionesapeladasDto->getFechaRegistro()!="") ||($suspensionesapeladasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($suspensionesapeladasDto->getCveSentido()!=""){
$sql.="cveSentido='".$suspensionesapeladasDto->getCveSentido()."'";
if(($suspensionesapeladasDto->getNumToca()!="") ||($suspensionesapeladasDto->getAnioToca()!="") ||($suspensionesapeladasDto->getCveSala()!="") ||($suspensionesapeladasDto->getActivo()!="") ||($suspensionesapeladasDto->getFechaRegistro()!="") ||($suspensionesapeladasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($suspensionesapeladasDto->getNumToca()!=""){
$sql.="NumToca='".$suspensionesapeladasDto->getNumToca()."'";
if(($suspensionesapeladasDto->getAnioToca()!="") ||($suspensionesapeladasDto->getCveSala()!="") ||($suspensionesapeladasDto->getActivo()!="") ||($suspensionesapeladasDto->getFechaRegistro()!="") ||($suspensionesapeladasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($suspensionesapeladasDto->getAnioToca()!=""){
$sql.="AnioToca='".$suspensionesapeladasDto->getAnioToca()."'";
if(($suspensionesapeladasDto->getCveSala()!="") ||($suspensionesapeladasDto->getActivo()!="") ||($suspensionesapeladasDto->getFechaRegistro()!="") ||($suspensionesapeladasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($suspensionesapeladasDto->getCveSala()!=""){
$sql.="CveSala='".$suspensionesapeladasDto->getCveSala()."'";
if(($suspensionesapeladasDto->getActivo()!="") ||($suspensionesapeladasDto->getFechaRegistro()!="") ||($suspensionesapeladasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($suspensionesapeladasDto->getActivo()!=""){
$sql.="activo='".$suspensionesapeladasDto->getActivo()."'";
if(($suspensionesapeladasDto->getFechaRegistro()!="") ||($suspensionesapeladasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($suspensionesapeladasDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$suspensionesapeladasDto->getFechaRegistro()."'";
if(($suspensionesapeladasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($suspensionesapeladasDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$suspensionesapeladasDto->getFechaActualizacion()."'";
}
$sql.=" WHERE idSuspensionApelada='".$suspensionesapeladasDto->getIdSuspensionApelada()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new SuspensionesapeladasDTO();
$tmp->setidSuspensionApelada($suspensionesapeladasDto->getIdSuspensionApelada());
$tmp = $this->selectSuspensionesapeladas($tmp,"",$this->_proveedor);
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
public function deleteSuspensionesapeladas($suspensionesapeladasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblsuspensionesapeladas  WHERE idSuspensionApelada='".$suspensionesapeladasDto->getIdSuspensionApelada()."'";
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
public function selectSuspensionesapeladas($suspensionesapeladasDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idSuspensionApelada,idSuspensionCondicional,cveSentido,NumToca,AnioToca,CveSala,activo,fechaRegistro,fechaActualizacion FROM tblsuspensionesapeladas ";
if(($suspensionesapeladasDto->getIdSuspensionApelada()!="") ||($suspensionesapeladasDto->getIdSuspensionCondicional()!="") ||($suspensionesapeladasDto->getCveSentido()!="") ||($suspensionesapeladasDto->getNumToca()!="") ||($suspensionesapeladasDto->getAnioToca()!="") ||($suspensionesapeladasDto->getCveSala()!="") ||($suspensionesapeladasDto->getActivo()!="") ||($suspensionesapeladasDto->getFechaRegistro()!="") ||($suspensionesapeladasDto->getFechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($suspensionesapeladasDto->getIdSuspensionApelada()!=""){
$sql.="idSuspensionApelada='".$suspensionesapeladasDto->getIdSuspensionApelada()."'";
if(($suspensionesapeladasDto->getIdSuspensionCondicional()!="") ||($suspensionesapeladasDto->getCveSentido()!="") ||($suspensionesapeladasDto->getNumToca()!="") ||($suspensionesapeladasDto->getAnioToca()!="") ||($suspensionesapeladasDto->getCveSala()!="") ||($suspensionesapeladasDto->getActivo()!="") ||($suspensionesapeladasDto->getFechaRegistro()!="") ||($suspensionesapeladasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($suspensionesapeladasDto->getIdSuspensionCondicional()!=""){
$sql.="idSuspensionCondicional='".$suspensionesapeladasDto->getIdSuspensionCondicional()."'";
if(($suspensionesapeladasDto->getCveSentido()!="") ||($suspensionesapeladasDto->getNumToca()!="") ||($suspensionesapeladasDto->getAnioToca()!="") ||($suspensionesapeladasDto->getCveSala()!="") ||($suspensionesapeladasDto->getActivo()!="") ||($suspensionesapeladasDto->getFechaRegistro()!="") ||($suspensionesapeladasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($suspensionesapeladasDto->getCveSentido()!=""){
$sql.="cveSentido='".$suspensionesapeladasDto->getCveSentido()."'";
if(($suspensionesapeladasDto->getNumToca()!="") ||($suspensionesapeladasDto->getAnioToca()!="") ||($suspensionesapeladasDto->getCveSala()!="") ||($suspensionesapeladasDto->getActivo()!="") ||($suspensionesapeladasDto->getFechaRegistro()!="") ||($suspensionesapeladasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($suspensionesapeladasDto->getNumToca()!=""){
$sql.="NumToca='".$suspensionesapeladasDto->getNumToca()."'";
if(($suspensionesapeladasDto->getAnioToca()!="") ||($suspensionesapeladasDto->getCveSala()!="") ||($suspensionesapeladasDto->getActivo()!="") ||($suspensionesapeladasDto->getFechaRegistro()!="") ||($suspensionesapeladasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($suspensionesapeladasDto->getAnioToca()!=""){
$sql.="AnioToca='".$suspensionesapeladasDto->getAnioToca()."'";
if(($suspensionesapeladasDto->getCveSala()!="") ||($suspensionesapeladasDto->getActivo()!="") ||($suspensionesapeladasDto->getFechaRegistro()!="") ||($suspensionesapeladasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($suspensionesapeladasDto->getCveSala()!=""){
$sql.="CveSala='".$suspensionesapeladasDto->getCveSala()."'";
if(($suspensionesapeladasDto->getActivo()!="") ||($suspensionesapeladasDto->getFechaRegistro()!="") ||($suspensionesapeladasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($suspensionesapeladasDto->getActivo()!=""){
$sql.="activo='".$suspensionesapeladasDto->getActivo()."'";
if(($suspensionesapeladasDto->getFechaRegistro()!="") ||($suspensionesapeladasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($suspensionesapeladasDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$suspensionesapeladasDto->getFechaRegistro()."'";
if(($suspensionesapeladasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($suspensionesapeladasDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$suspensionesapeladasDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new SuspensionesapeladasDTO();
$tmp[$contador]->setIdSuspensionApelada($row["idSuspensionApelada"]);
$tmp[$contador]->setIdSuspensionCondicional($row["idSuspensionCondicional"]);
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