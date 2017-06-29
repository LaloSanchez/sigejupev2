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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/suspensioncondicionales/SuspensioncondicionalesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class SuspensioncondicionalesDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertSuspensioncondicionales($suspensioncondicionalesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblsuspensioncondicionales(";
if($suspensioncondicionalesDto->getIdSuspensionCondicional()!=""){
$sql.="idSuspensionCondicional";
if(($suspensioncondicionalesDto->getIdActuacion()!="") ||($suspensioncondicionalesDto->getIdImputadoCarpeta()!="") ||($suspensioncondicionalesDto->getCveTipoSuspensionCondicional()!="") ||($suspensioncondicionalesDto->getApelada()!="") ||($suspensioncondicionalesDto->getActivo()!="") ||($suspensioncondicionalesDto->getFechaInicio()!="") ||($suspensioncondicionalesDto->getFechaTermina()!="") ){
$sql.=",";
}
}
if($suspensioncondicionalesDto->getIdActuacion()!=""){
$sql.="idActuacion";
if(($suspensioncondicionalesDto->getIdImputadoCarpeta()!="") ||($suspensioncondicionalesDto->getCveTipoSuspensionCondicional()!="") ||($suspensioncondicionalesDto->getApelada()!="") ||($suspensioncondicionalesDto->getActivo()!="") ||($suspensioncondicionalesDto->getFechaInicio()!="") ||($suspensioncondicionalesDto->getFechaTermina()!="") ){
$sql.=",";
}
}
if($suspensioncondicionalesDto->getIdImputadoCarpeta()!=""){
$sql.="idImputadoCarpeta";
if(($suspensioncondicionalesDto->getCveTipoSuspensionCondicional()!="") ||($suspensioncondicionalesDto->getApelada()!="") ||($suspensioncondicionalesDto->getActivo()!="") ||($suspensioncondicionalesDto->getFechaInicio()!="") ||($suspensioncondicionalesDto->getFechaTermina()!="") ){
$sql.=",";
}
}
if($suspensioncondicionalesDto->getCveTipoSuspensionCondicional()!=""){
$sql.="cveTipoSuspensionCondicional";
if(($suspensioncondicionalesDto->getApelada()!="") ||($suspensioncondicionalesDto->getActivo()!="") ||($suspensioncondicionalesDto->getFechaInicio()!="") ||($suspensioncondicionalesDto->getFechaTermina()!="") ){
$sql.=",";
}
}
if($suspensioncondicionalesDto->getApelada()!=""){
$sql.="Apelada";
if(($suspensioncondicionalesDto->getActivo()!="") ||($suspensioncondicionalesDto->getFechaInicio()!="") ||($suspensioncondicionalesDto->getFechaTermina()!="") ){
$sql.=",";
}
}
if($suspensioncondicionalesDto->getActivo()!=""){
$sql.="activo";
if(($suspensioncondicionalesDto->getFechaInicio()!="") ||($suspensioncondicionalesDto->getFechaTermina()!="") ){
$sql.=",";
}
}
if($suspensioncondicionalesDto->getFechaInicio()!=""){
$sql.="fechaInicio";
if(($suspensioncondicionalesDto->getFechaTermina()!="") ){
$sql.=",";
}
}
if($suspensioncondicionalesDto->getFechaTermina()!=""){
$sql.="fechaTermina";
}
$sql.=") VALUES(";
if($suspensioncondicionalesDto->getIdSuspensionCondicional()!=""){
$sql.="'".$suspensioncondicionalesDto->getIdSuspensionCondicional()."'";
if(($suspensioncondicionalesDto->getIdActuacion()!="") ||($suspensioncondicionalesDto->getIdImputadoCarpeta()!="") ||($suspensioncondicionalesDto->getCveTipoSuspensionCondicional()!="") ||($suspensioncondicionalesDto->getApelada()!="") ||($suspensioncondicionalesDto->getActivo()!="") ||($suspensioncondicionalesDto->getFechaInicio()!="") ||($suspensioncondicionalesDto->getFechaTermina()!="") ){
$sql.=",";
}
}
if($suspensioncondicionalesDto->getIdActuacion()!=""){
$sql.="'".$suspensioncondicionalesDto->getIdActuacion()."'";
if(($suspensioncondicionalesDto->getIdImputadoCarpeta()!="") ||($suspensioncondicionalesDto->getCveTipoSuspensionCondicional()!="") ||($suspensioncondicionalesDto->getApelada()!="") ||($suspensioncondicionalesDto->getActivo()!="") ||($suspensioncondicionalesDto->getFechaInicio()!="") ||($suspensioncondicionalesDto->getFechaTermina()!="") ){
$sql.=",";
}
}
if($suspensioncondicionalesDto->getIdImputadoCarpeta()!=""){
$sql.="'".$suspensioncondicionalesDto->getIdImputadoCarpeta()."'";
if(($suspensioncondicionalesDto->getCveTipoSuspensionCondicional()!="") ||($suspensioncondicionalesDto->getApelada()!="") ||($suspensioncondicionalesDto->getActivo()!="") ||($suspensioncondicionalesDto->getFechaInicio()!="") ||($suspensioncondicionalesDto->getFechaTermina()!="") ){
$sql.=",";
}
}
if($suspensioncondicionalesDto->getCveTipoSuspensionCondicional()!=""){
$sql.="'".$suspensioncondicionalesDto->getCveTipoSuspensionCondicional()."'";
if(($suspensioncondicionalesDto->getApelada()!="") ||($suspensioncondicionalesDto->getActivo()!="") ||($suspensioncondicionalesDto->getFechaInicio()!="") ||($suspensioncondicionalesDto->getFechaTermina()!="") ){
$sql.=",";
}
}
if($suspensioncondicionalesDto->getApelada()!=""){
$sql.="'".$suspensioncondicionalesDto->getApelada()."'";
if(($suspensioncondicionalesDto->getActivo()!="") ||($suspensioncondicionalesDto->getFechaInicio()!="") ||($suspensioncondicionalesDto->getFechaTermina()!="") ){
$sql.=",";
}
}
if($suspensioncondicionalesDto->getActivo()!=""){
$sql.="'".$suspensioncondicionalesDto->getActivo()."'";
if(($suspensioncondicionalesDto->getFechaInicio()!="") ||($suspensioncondicionalesDto->getFechaTermina()!="") ){
$sql.=",";
}
}
if($suspensioncondicionalesDto->getFechaInicio()!=""){
$sql.="'".$suspensioncondicionalesDto->getFechaInicio()."'";
if(($suspensioncondicionalesDto->getFechaTermina()!="") ){
$sql.=",";
}
}
if($suspensioncondicionalesDto->getFechaTermina()!=""){
$sql.="'".$suspensioncondicionalesDto->getFechaTermina()."'";
}
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new SuspensioncondicionalesDTO();
$tmp->setidSuspensionCondicional($this->_proveedor->lastID());
$tmp = $this->selectSuspensioncondicionales($tmp,"",$this->_proveedor);
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
public function updateSuspensioncondicionales($suspensioncondicionalesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblsuspensioncondicionales SET ";
if($suspensioncondicionalesDto->getIdSuspensionCondicional()!=""){
$sql.="idSuspensionCondicional='".$suspensioncondicionalesDto->getIdSuspensionCondicional()."'";
if(($suspensioncondicionalesDto->getIdActuacion()!="") ||($suspensioncondicionalesDto->getIdImputadoCarpeta()!="") ||($suspensioncondicionalesDto->getCveTipoSuspensionCondicional()!="") ||($suspensioncondicionalesDto->getApelada()!="") ||($suspensioncondicionalesDto->getActivo()!="") ||($suspensioncondicionalesDto->getFechaInicio()!="") ||($suspensioncondicionalesDto->getFechaTermina()!="") ){
$sql.=",";
}
}
if($suspensioncondicionalesDto->getIdActuacion()!=""){
$sql.="idActuacion='".$suspensioncondicionalesDto->getIdActuacion()."'";
if(($suspensioncondicionalesDto->getIdImputadoCarpeta()!="") ||($suspensioncondicionalesDto->getCveTipoSuspensionCondicional()!="") ||($suspensioncondicionalesDto->getApelada()!="") ||($suspensioncondicionalesDto->getActivo()!="") ||($suspensioncondicionalesDto->getFechaInicio()!="") ||($suspensioncondicionalesDto->getFechaTermina()!="") ){
$sql.=",";
}
}
if($suspensioncondicionalesDto->getIdImputadoCarpeta()!=""){
$sql.="idImputadoCarpeta='".$suspensioncondicionalesDto->getIdImputadoCarpeta()."'";
if(($suspensioncondicionalesDto->getCveTipoSuspensionCondicional()!="") ||($suspensioncondicionalesDto->getApelada()!="") ||($suspensioncondicionalesDto->getActivo()!="") ||($suspensioncondicionalesDto->getFechaInicio()!="") ||($suspensioncondicionalesDto->getFechaTermina()!="") ){
$sql.=",";
}
}
if($suspensioncondicionalesDto->getCveTipoSuspensionCondicional()!=""){
$sql.="cveTipoSuspensionCondicional='".$suspensioncondicionalesDto->getCveTipoSuspensionCondicional()."'";
if(($suspensioncondicionalesDto->getApelada()!="") ||($suspensioncondicionalesDto->getActivo()!="") ||($suspensioncondicionalesDto->getFechaInicio()!="") ||($suspensioncondicionalesDto->getFechaTermina()!="") ){
$sql.=",";
}
}
if($suspensioncondicionalesDto->getApelada()!=""){
$sql.="Apelada='".$suspensioncondicionalesDto->getApelada()."'";
if(($suspensioncondicionalesDto->getActivo()!="") ||($suspensioncondicionalesDto->getFechaInicio()!="") ||($suspensioncondicionalesDto->getFechaTermina()!="") ){
$sql.=",";
}
}
if($suspensioncondicionalesDto->getActivo()!=""){
$sql.="activo='".$suspensioncondicionalesDto->getActivo()."'";
if(($suspensioncondicionalesDto->getFechaInicio()!="") ||($suspensioncondicionalesDto->getFechaTermina()!="") ){
$sql.=",";
}
}
if($suspensioncondicionalesDto->getFechaInicio()!=""){
$sql.="fechaInicio='".$suspensioncondicionalesDto->getFechaInicio()."'";
if(($suspensioncondicionalesDto->getFechaTermina()!="") ){
$sql.=",";
}
}
if($suspensioncondicionalesDto->getFechaTermina()!=""){
$sql.="fechaTermina='".$suspensioncondicionalesDto->getFechaTermina()."'";
}
$sql.=" WHERE idSuspensionCondicional='".$suspensioncondicionalesDto->getIdSuspensionCondicional()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new SuspensioncondicionalesDTO();
$tmp->setidSuspensionCondicional($suspensioncondicionalesDto->getIdSuspensionCondicional());
$tmp = $this->selectSuspensioncondicionales($tmp,"",$this->_proveedor);
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
public function deleteSuspensioncondicionales($suspensioncondicionalesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblsuspensioncondicionales  WHERE idSuspensionCondicional='".$suspensioncondicionalesDto->getIdSuspensionCondicional()."'";
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
public function selectSuspensioncondicionales($suspensioncondicionalesDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idSuspensionCondicional,idActuacion,idImputadoCarpeta,cveTipoSuspensionCondicional,Apelada,activo,fechaInicio,fechaTermina FROM tblsuspensioncondicionales ";
if(($suspensioncondicionalesDto->getIdSuspensionCondicional()!="") ||($suspensioncondicionalesDto->getIdActuacion()!="") ||($suspensioncondicionalesDto->getIdImputadoCarpeta()!="") ||($suspensioncondicionalesDto->getCveTipoSuspensionCondicional()!="") ||($suspensioncondicionalesDto->getApelada()!="") ||($suspensioncondicionalesDto->getActivo()!="") ||($suspensioncondicionalesDto->getFechaInicio()!="") ||($suspensioncondicionalesDto->getFechaTermina()!="") ){
$sql.=" WHERE ";
}
if($suspensioncondicionalesDto->getIdSuspensionCondicional()!=""){
$sql.="idSuspensionCondicional='".$suspensioncondicionalesDto->getIdSuspensionCondicional()."'";
if(($suspensioncondicionalesDto->getIdActuacion()!="") ||($suspensioncondicionalesDto->getIdImputadoCarpeta()!="") ||($suspensioncondicionalesDto->getCveTipoSuspensionCondicional()!="") ||($suspensioncondicionalesDto->getApelada()!="") ||($suspensioncondicionalesDto->getActivo()!="") ||($suspensioncondicionalesDto->getFechaInicio()!="") ||($suspensioncondicionalesDto->getFechaTermina()!="") ){
$sql.=" AND ";
}
}
if($suspensioncondicionalesDto->getIdActuacion()!=""){
$sql.="idActuacion='".$suspensioncondicionalesDto->getIdActuacion()."'";
if(($suspensioncondicionalesDto->getIdImputadoCarpeta()!="") ||($suspensioncondicionalesDto->getCveTipoSuspensionCondicional()!="") ||($suspensioncondicionalesDto->getApelada()!="") ||($suspensioncondicionalesDto->getActivo()!="") ||($suspensioncondicionalesDto->getFechaInicio()!="") ||($suspensioncondicionalesDto->getFechaTermina()!="") ){
$sql.=" AND ";
}
}
if($suspensioncondicionalesDto->getIdImputadoCarpeta()!=""){
$sql.="idImputadoCarpeta='".$suspensioncondicionalesDto->getIdImputadoCarpeta()."'";
if(($suspensioncondicionalesDto->getCveTipoSuspensionCondicional()!="") ||($suspensioncondicionalesDto->getApelada()!="") ||($suspensioncondicionalesDto->getActivo()!="") ||($suspensioncondicionalesDto->getFechaInicio()!="") ||($suspensioncondicionalesDto->getFechaTermina()!="") ){
$sql.=" AND ";
}
}
if($suspensioncondicionalesDto->getCveTipoSuspensionCondicional()!=""){
$sql.="cveTipoSuspensionCondicional='".$suspensioncondicionalesDto->getCveTipoSuspensionCondicional()."'";
if(($suspensioncondicionalesDto->getApelada()!="") ||($suspensioncondicionalesDto->getActivo()!="") ||($suspensioncondicionalesDto->getFechaInicio()!="") ||($suspensioncondicionalesDto->getFechaTermina()!="") ){
$sql.=" AND ";
}
}
if($suspensioncondicionalesDto->getApelada()!=""){
$sql.="Apelada='".$suspensioncondicionalesDto->getApelada()."'";
if(($suspensioncondicionalesDto->getActivo()!="") ||($suspensioncondicionalesDto->getFechaInicio()!="") ||($suspensioncondicionalesDto->getFechaTermina()!="") ){
$sql.=" AND ";
}
}
if($suspensioncondicionalesDto->getActivo()!=""){
$sql.="activo='".$suspensioncondicionalesDto->getActivo()."'";
if(($suspensioncondicionalesDto->getFechaInicio()!="") ||($suspensioncondicionalesDto->getFechaTermina()!="") ){
$sql.=" AND ";
}
}
if($suspensioncondicionalesDto->getFechaInicio()!=""){
$sql.="fechaInicio='".$suspensioncondicionalesDto->getFechaInicio()."'";
if(($suspensioncondicionalesDto->getFechaTermina()!="") ){
$sql.=" AND ";
}
}
if($suspensioncondicionalesDto->getFechaTermina()!=""){
$sql.="fechaTermina='".$suspensioncondicionalesDto->getFechaTermina()."'";
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
$tmp[$contador] = new SuspensioncondicionalesDTO();
$tmp[$contador]->setIdSuspensionCondicional($row["idSuspensionCondicional"]);
$tmp[$contador]->setIdActuacion($row["idActuacion"]);
$tmp[$contador]->setIdImputadoCarpeta($row["idImputadoCarpeta"]);
$tmp[$contador]->setCveTipoSuspensionCondicional($row["cveTipoSuspensionCondicional"]);
$tmp[$contador]->setApelada($row["Apelada"]);
$tmp[$contador]->setActivo($row["activo"]);
$tmp[$contador]->setFechaInicio($row["fechaInicio"]);
$tmp[$contador]->setFechaTermina($row["fechaTermina"]);
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