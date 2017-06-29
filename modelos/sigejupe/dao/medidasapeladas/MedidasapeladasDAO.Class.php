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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/medidasapeladas/MedidasapeladasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class MedidasapeladasDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertMedidasapeladas($medidasapeladasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblmedidasapeladas(";
if($medidasapeladasDto->getidMedidaApelada()!=""){
$sql.="idMedidaApelada";
if(($medidasapeladasDto->getIdMedidaCautelar()!="") ||($medidasapeladasDto->getCveSentido()!="") || ($medidasapeladasDto->getNumToca()!="") || ($medidasapeladasDto->getAnioToca()!="") || ($medidasapeladasDto->getCveSala()!="") || ($medidasapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($medidasapeladasDto->getidMedidaCautelar()!=""){
$sql.="idMedidaCautelar";
if(($medidasapeladasDto->getCveSentido()!="") || ($medidasapeladasDto->getNumToca()!="") || ($medidasapeladasDto->getAnioToca()!="") || ($medidasapeladasDto->getCveSala()!="") || ($medidasapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($medidasapeladasDto->getcveSentido()!=""){
$sql.="cveSentido";
if(($medidasapeladasDto->getNumToca()!="") || ($medidasapeladasDto->getAnioToca()!="") || ($medidasapeladasDto->getCveSala()!="") || ($medidasapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($medidasapeladasDto->getNumToca()!=""){
$sql.="numToca";
if(($medidasapeladasDto->getAnioToca()!="") || ($medidasapeladasDto->getCveSala()!="")  || ($medidasapeladasDto->getActivo()!="")){
$sql.=",";
}
}
if($medidasapeladasDto->getAnioToca()!=""){
$sql.="anioToca";
if(($medidasapeladasDto->getCveSala()!="") || ($medidasapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($medidasapeladasDto->getCveSala()!=""){
$sql.="cveSala";
if(($medidasapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($medidasapeladasDto->getActivo()!=""){
$sql.="activo";
}

$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($medidasapeladasDto->getidMedidaApelada()!=""){
$sql.="'".$medidasapeladasDto->getidMedidaApelada()."'";
if(($medidasapeladasDto->getIdMedidaCautelar()!="") ||($medidasapeladasDto->getCveSentido()!="") || ($medidasapeladasDto->getNumToca()!="") || ($medidasapeladasDto->getAnioToca()!="") || ($medidasapeladasDto->getCveSala()!="") || ($medidasapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($medidasapeladasDto->getidMedidaCautelar()!=""){
$sql.="'".$medidasapeladasDto->getidMedidaCautelar()."'";
if(($medidasapeladasDto->getCveSentido()!="") || ($medidasapeladasDto->getNumToca()!="") || ($medidasapeladasDto->getAnioToca()!="") || ($medidasapeladasDto->getCveSala()!="") || ($medidasapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($medidasapeladasDto->getcveSentido()!=""){
$sql.="'".$medidasapeladasDto->getcveSentido()."'";
if(($medidasapeladasDto->getNumToca()!="") || ($medidasapeladasDto->getAnioToca()!="") || ($medidasapeladasDto->getCveSala()!="") || ($medidasapeladasDto->getActivo()!="")){
$sql.=",";
}
}
if($medidasapeladasDto->getNumToca()!=""){
$sql.="'".$medidasapeladasDto->getNumToca()."'";
if(($medidasapeladasDto->getAnioToca()!="") || ($medidasapeladasDto->getCveSala()!="") || ($medidasapeladasDto->getActivo()!="")){
$sql.=",";
}
}
if($medidasapeladasDto->getAnioToca()!=""){
$sql.="'".$medidasapeladasDto->getAnioToca()."'";
if(($medidasapeladasDto->getCveSala()!="") || ($medidasapeladasDto->getActivo()!="")){
$sql.=",";
}
}
if($medidasapeladasDto->getCveSala()!=""){
$sql.="'".$medidasapeladasDto->getCveSala()."'";
if(($medidasapeladasDto->getActivo()!="")){
$sql.=",";
}
}
if($medidasapeladasDto->getActivo()!=""){
$sql.="'".$medidasapeladasDto->getActivo()."'";
}

$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new MedidasapeladasDTO();
$tmp->setidMedidaApelada($this->_proveedor->lastID());
$tmp = $this->selectMedidasapeladas($tmp,"",$this->_proveedor);
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
public function updateMedidasapeladas($medidasapeladasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblmedidasapeladas SET ";
if($medidasapeladasDto->getidMedidaApelada()!=""){
$sql.="idMedidaApelada='".$medidasapeladasDto->getidMedidaApelada()."'";
if(($medidasapeladasDto->getIdMedidaCautelar()!="") ||($medidasapeladasDto->getCveSentido()!="") || ($medidasapeladasDto->getNumToca()!="") || ($medidasapeladasDto->getAnioToca()!="") || ($medidasapeladasDto->getCveSala()!="") || ($medidasapeladasDto->getActivo()!="") ||($medidasapeladasDto->getFechaRegistro()!="") ||($medidasapeladasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($medidasapeladasDto->getidMedidaCautelar()!=""){
$sql.="idMedidaCautelar='".$medidasapeladasDto->getidMedidaCautelar()."'";
if(($medidasapeladasDto->getCveSentido()!="") || ($medidasapeladasDto->getNumToca()!="") || ($medidasapeladasDto->getAnioToca()!="") || ($medidasapeladasDto->getCveSala()!="") || ($medidasapeladasDto->getActivo()!="") ||($medidasapeladasDto->getFechaRegistro()!="") ||($medidasapeladasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($medidasapeladasDto->getcveSentido()!=""){
$sql.="cveSentido='".$medidasapeladasDto->getcveSentido()."'";
if(($medidasapeladasDto->getNumToca()!="") || ($medidasapeladasDto->getAnioToca()!="") || ($medidasapeladasDto->getCveSala()!="") || ($medidasapeladasDto->getActivo()!="") || ($medidasapeladasDto->getFechaRegistro()!="") ||($medidasapeladasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($medidasapeladasDto->getNumToca()!=""){
$sql.="numToca='".$medidasapeladasDto->getNumToca()."'";
if(($medidasapeladasDto->getAnioToca()!="") || ($medidasapeladasDto->getCveSala()!="") || ($medidasapeladasDto->getActivo()!="") || ($medidasapeladasDto->getFechaRegistro()!="") ||($medidasapeladasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($medidasapeladasDto->getAnioToca()!=""){
$sql.="anioToca='".$medidasapeladasDto->getAnioToca()."'";
if(($medidasapeladasDto->getCveSala()!="") || ($medidasapeladasDto->getActivo()!="") || ($medidasapeladasDto->getFechaRegistro()!="") ||($medidasapeladasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($medidasapeladasDto->getCveSala()!=""){
$sql.="cveSala='".$medidasapeladasDto->getCveSala()."'";
if(($medidasapeladasDto->getActivo()!="") || ($medidasapeladasDto->getFechaRegistro()!="") ||($medidasapeladasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($medidasapeladasDto->getActivo()!=""){
$sql.="activo='".$medidasapeladasDto->getActivo()."'";
if(($medidasapeladasDto->getFechaRegistro()!="") ||($medidasapeladasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($medidasapeladasDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$medidasapeladasDto->getfechaRegistro()."'";
if(($medidasapeladasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($medidasapeladasDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$medidasapeladasDto->getfechaActualizacion()."'";
}
$sql.=" WHERE idMedidaApelada='".$medidasapeladasDto->getidMedidaApelada()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new MedidasapeladasDTO();
$tmp->setidMedidaApelada($medidasapeladasDto->getidMedidaApelada());
$tmp = $this->selectMedidasapeladas($tmp,"",$this->_proveedor);
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
public function deleteMedidasapeladas($medidasapeladasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblmedidasapeladas  WHERE idMedidaApelada='".$medidasapeladasDto->getidMedidaApelada()."'";
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
public function selectMedidasapeladas($medidasapeladasDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idMedidaApelada,idMedidaCautelar,cveSentido,numToca,anioToca,cveSala,activo, fechaRegistro,fechaActualizacion FROM tblmedidasapeladas ";
if(($medidasapeladasDto->getidMedidaApelada()!="") ||($medidasapeladasDto->getidMedidaCautelar()!="") ||($medidasapeladasDto->getcveSentido()!="") || ($medidasapeladasDto->getNumToca()!="") || ($medidasapeladasDto->getAnioToca()!="") || ($medidasapeladasDto->getCveSala()!="") || ($medidasapeladasDto->getActivo()!="") ||($medidasapeladasDto->getfechaRegistro()!="") ||($medidasapeladasDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($medidasapeladasDto->getidMedidaApelada()!=""){
$sql.="idMedidaApelada='".$medidasapeladasDto->getIdMedidaApelada()."'";
if(($medidasapeladasDto->getIdMedidaCautelar()!="") ||($medidasapeladasDto->getCveSentido()!="") || ($medidasapeladasDto->getNumToca()!="") || ($medidasapeladasDto->getAnioToca()!="") || ($medidasapeladasDto->getCveSala()!="") || ($medidasapeladasDto->getActivo()!="") ||($medidasapeladasDto->getFechaRegistro()!="") ||($medidasapeladasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($medidasapeladasDto->getidMedidaCautelar()!=""){
$sql.="idMedidaCautelar='".$medidasapeladasDto->getIdMedidaCautelar()."'";
if(($medidasapeladasDto->getCveSentido()!="") || ($medidasapeladasDto->getNumToca()!="") || ($medidasapeladasDto->getAnioToca()!="") || ($medidasapeladasDto->getCveSala()!="") || ($medidasapeladasDto->getActivo()!="") ||($medidasapeladasDto->getFechaRegistro()!="") ||($medidasapeladasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($medidasapeladasDto->getcveSentido()!=""){
$sql.="cveSentido='".$medidasapeladasDto->getCveSentido()."'";
if( ($medidasapeladasDto->getNumToca()!="") || ($medidasapeladasDto->getAnioToca()!="") || ($medidasapeladasDto->getCveSala()!="") || ($medidasapeladasDto->getActivo()!="") || ($medidasapeladasDto->getFechaRegistro()!="") ||($medidasapeladasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($medidasapeladasDto->getNumToca()!=""){
$sql.="numToca='".$medidasapeladasDto->getNumToca()."'";
if(($medidasapeladasDto->getAnioToca()!="") || ($medidasapeladasDto->getCveSala()!="") || ($medidasapeladasDto->getActivo()!="") || ($medidasapeladasDto->getFechaRegistro()!="") ||($medidasapeladasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($medidasapeladasDto->getAnioToca()!=""){
$sql.="anioToca='".$medidasapeladasDto->getAnioToca()."'";
if(($medidasapeladasDto->getCveSala()!="") || ($medidasapeladasDto->getActivo()!="") || ($medidasapeladasDto->getFechaRegistro()!="") ||($medidasapeladasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($medidasapeladasDto->getCveSala()!=""){
$sql.="cveSala='".$medidasapeladasDto->getCveSala()."'";
if( ($medidasapeladasDto->getActivo()!="") || ($medidasapeladasDto->getFechaRegistro()!="") ||($medidasapeladasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($medidasapeladasDto->getActivo()!=""){
$sql.="activo='".$medidasapeladasDto->getActivo()."'";
if( ($medidasapeladasDto->getFechaRegistro()!="") ||($medidasapeladasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($medidasapeladasDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$medidasapeladasDto->getFechaRegistro()."'";
if(($medidasapeladasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($medidasapeladasDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$medidasapeladasDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new MedidasapeladasDTO();
$tmp[$contador]->setIdMedidaApelada($row["idMedidaApelada"]);
$tmp[$contador]->setIdMedidaCautelar($row["idMedidaCautelar"]);
$tmp[$contador]->setCveSentido($row["cveSentido"]);
$tmp[$contador]->setNumToca($row["numToca"]);
$tmp[$contador]->setAnioToca($row["anioToca"]);
$tmp[$contador]->setCveSala($row["cveSala"]);
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