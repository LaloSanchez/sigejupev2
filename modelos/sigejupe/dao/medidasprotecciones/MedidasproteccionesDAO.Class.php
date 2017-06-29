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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/medidasprotecciones/MedidasproteccionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class MedidasproteccionesDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertMedidasprotecciones($medidasproteccionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblmedidasprotecciones(";
if($medidasproteccionesDto->getidMedidaProteccion()!=""){
$sql.="idMedidaProteccion";
if(($medidasproteccionesDto->getCveTipoProteccion()!="") ||($medidasproteccionesDto->getIdActuacion()!="") ||($medidasproteccionesDto->getIdOfendidoCarpeta()!="") ||($medidasproteccionesDto->getActivo()!="") ||($medidasproteccionesDto->getApelada()!="") ||($medidasproteccionesDto->getFechaInicio()!="") ||($medidasproteccionesDto->getFechaTermino()!="") ||($medidasproteccionesDto->getCveAutoridadEmisora()!="") ){
$sql.=",";
}
}
if($medidasproteccionesDto->getcveTipoProteccion()!=""){
$sql.="cveTipoProteccion";
if(($medidasproteccionesDto->getIdActuacion()!="") ||($medidasproteccionesDto->getIdOfendidoCarpeta()!="") ||($medidasproteccionesDto->getActivo()!="") ||($medidasproteccionesDto->getApelada()!="") ||($medidasproteccionesDto->getFechaInicio()!="") ||($medidasproteccionesDto->getFechaTermino()!="") ||($medidasproteccionesDto->getCveAutoridadEmisora()!="") ){
$sql.=",";
}
}
if($medidasproteccionesDto->getidActuacion()!=""){
$sql.="idActuacion";
if(($medidasproteccionesDto->getIdOfendidoCarpeta()!="") ||($medidasproteccionesDto->getActivo()!="") ||($medidasproteccionesDto->getApelada()!="") ||($medidasproteccionesDto->getFechaInicio()!="") ||($medidasproteccionesDto->getFechaTermino()!="") ||($medidasproteccionesDto->getCveAutoridadEmisora()!="") ){
$sql.=",";
}
}
if($medidasproteccionesDto->getidOfendidoCarpeta()!=""){
$sql.="idOfendidoCarpeta";
if( ($medidasproteccionesDto->getActivo()!="") ||($medidasproteccionesDto->getApelada()!="") ||($medidasproteccionesDto->getFechaInicio()!="") ||($medidasproteccionesDto->getFechaTermino()!="") ||($medidasproteccionesDto->getCveAutoridadEmisora()!="") ){
$sql.=",";
}
}
if($medidasproteccionesDto->getActivo()!=""){
$sql.="activo";
if( ($medidasproteccionesDto->getApelada()!="") ||($medidasproteccionesDto->getFechaInicio()!="") ||($medidasproteccionesDto->getFechaTermino()!="") ||($medidasproteccionesDto->getCveAutoridadEmisora()!="") ){
$sql.=",";
}
}
if($medidasproteccionesDto->getApelada()!=""){
$sql.="Apelada";
if(($medidasproteccionesDto->getFechaInicio()!="") ||($medidasproteccionesDto->getFechaTermino()!="") ||($medidasproteccionesDto->getCveAutoridadEmisora()!="") ){
$sql.=",";
}
}
if($medidasproteccionesDto->getfechaInicio()!=""){
$sql.="fechaInicio";
if(($medidasproteccionesDto->getFechaTermino()!="") ||($medidasproteccionesDto->getCveAutoridadEmisora()!="") ){
$sql.=",";
}
}
if($medidasproteccionesDto->getfechaTermino()!=""){
$sql.="fechaTermino";
if(($medidasproteccionesDto->getCveAutoridadEmisora()!="") ){
$sql.=",";
}
}
if($medidasproteccionesDto->getcveAutoridadEmisora()!=""){
$sql.="cveAutoridadEmisora";
}
$sql.=") VALUES(";
if($medidasproteccionesDto->getidMedidaProteccion()!=""){
$sql.="'".$medidasproteccionesDto->getidMedidaProteccion()."'";
if(($medidasproteccionesDto->getCveTipoProteccion()!="") ||($medidasproteccionesDto->getIdActuacion()!="") ||($medidasproteccionesDto->getIdOfendidoCarpeta()!="") ||($medidasproteccionesDto->getActivo()!="") ||($medidasproteccionesDto->getApelada()!="") ||($medidasproteccionesDto->getFechaInicio()!="") ||($medidasproteccionesDto->getFechaTermino()!="") ||($medidasproteccionesDto->getCveAutoridadEmisora()!="") ){
$sql.=",";
}
}
if($medidasproteccionesDto->getcveTipoProteccion()!=""){
$sql.="'".$medidasproteccionesDto->getcveTipoProteccion()."'";
if(($medidasproteccionesDto->getIdActuacion()!="") ||($medidasproteccionesDto->getIdOfendidoCarpeta()!="") ||($medidasproteccionesDto->getActivo()!="") ||($medidasproteccionesDto->getApelada()!="") ||($medidasproteccionesDto->getFechaInicio()!="") ||($medidasproteccionesDto->getFechaTermino()!="") ||($medidasproteccionesDto->getCveAutoridadEmisora()!="") ){
$sql.=",";
}
}
if($medidasproteccionesDto->getidActuacion()!=""){
$sql.="'".$medidasproteccionesDto->getidActuacion()."'";
if(($medidasproteccionesDto->getIdOfendidoCarpeta()!="") ||($medidasproteccionesDto->getActivo()!="") ||($medidasproteccionesDto->getApelada()!="") ||($medidasproteccionesDto->getFechaInicio()!="") ||($medidasproteccionesDto->getFechaTermino()!="") ||($medidasproteccionesDto->getCveAutoridadEmisora()!="") ){
$sql.=",";
}
}
if($medidasproteccionesDto->getidOfendidoCarpeta()!=""){
$sql.="'".$medidasproteccionesDto->getidOfendidoCarpeta()."'";
if( ($medidasproteccionesDto->getActivo()!="") ||($medidasproteccionesDto->getApelada()!="") ||($medidasproteccionesDto->getFechaInicio()!="") ||($medidasproteccionesDto->getFechaTermino()!="") ||($medidasproteccionesDto->getCveAutoridadEmisora()!="") ){
$sql.=",";
}
}
if($medidasproteccionesDto->getActivo()!=""){
$sql.="'".$medidasproteccionesDto->getActivo()."'";
if( ($medidasproteccionesDto->getApelada()!="") ||($medidasproteccionesDto->getFechaInicio()!="") ||($medidasproteccionesDto->getFechaTermino()!="") ||($medidasproteccionesDto->getCveAutoridadEmisora()!="") ){
$sql.=",";
}
}
if($medidasproteccionesDto->getApelada()!=""){
$sql.="'".$medidasproteccionesDto->getApelada()."'";
if(($medidasproteccionesDto->getFechaInicio()!="") ||($medidasproteccionesDto->getFechaTermino()!="") ||($medidasproteccionesDto->getCveAutoridadEmisora()!="") ){
$sql.=",";
}
}
if($medidasproteccionesDto->getfechaInicio()!=""){
$sql.="'".$medidasproteccionesDto->getfechaInicio()."'";
if(($medidasproteccionesDto->getFechaTermino()!="") ||($medidasproteccionesDto->getCveAutoridadEmisora()!="") ){
$sql.=",";
}
}
if($medidasproteccionesDto->getfechaTermino()!=""){
$sql.="'".$medidasproteccionesDto->getfechaTermino()."'";
if(($medidasproteccionesDto->getCveAutoridadEmisora()!="") ){
$sql.=",";
}
}
if($medidasproteccionesDto->getcveAutoridadEmisora()!=""){
$sql.="'".$medidasproteccionesDto->getcveAutoridadEmisora()."'";
}
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new MedidasproteccionesDTO();
$tmp->setidMedidaProteccion($this->_proveedor->lastID());
$tmp = $this->selectMedidasprotecciones($tmp,"",$this->_proveedor);
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
public function updateMedidasprotecciones($medidasproteccionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblmedidasprotecciones SET ";
if($medidasproteccionesDto->getidMedidaProteccion()!=""){
$sql.="idMedidaProteccion='".$medidasproteccionesDto->getidMedidaProteccion()."'";
if(($medidasproteccionesDto->getCveTipoProteccion()!="") ||($medidasproteccionesDto->getIdActuacion()!="") ||($medidasproteccionesDto->getIdOfendidoCarpeta()!="") ||($medidasproteccionesDto->getActivo()!="") ||($medidasproteccionesDto->getApelada()!="") ||($medidasproteccionesDto->getFechaInicio()!="") ||($medidasproteccionesDto->getFechaTermino()!="") ||($medidasproteccionesDto->getCveAutoridadEmisora()!="") ){
$sql.=",";
}
}
if($medidasproteccionesDto->getcveTipoProteccion()!=""){
$sql.="cveTipoProteccion='".$medidasproteccionesDto->getcveTipoProteccion()."'";
if(($medidasproteccionesDto->getIdActuacion()!="") ||($medidasproteccionesDto->getIdOfendidoCarpeta()!="") ||($medidasproteccionesDto->getActivo()!="") ||($medidasproteccionesDto->getApelada()!="") ||($medidasproteccionesDto->getFechaInicio()!="") ||($medidasproteccionesDto->getFechaTermino()!="") ||($medidasproteccionesDto->getCveAutoridadEmisora()!="") ){
$sql.=",";
}
}
if($medidasproteccionesDto->getidActuacion()!=""){
$sql.="idActuacion='".$medidasproteccionesDto->getidActuacion()."'";
if(($medidasproteccionesDto->getIdOfendidoCarpeta()!="") ||($medidasproteccionesDto->getActivo()!="") ||($medidasproteccionesDto->getApelada()!="") ||($medidasproteccionesDto->getFechaInicio()!="") ||($medidasproteccionesDto->getFechaTermino()!="") ||($medidasproteccionesDto->getCveAutoridadEmisora()!="") ){
$sql.=",";
}
}
if($medidasproteccionesDto->getidOfendidoCarpeta()!=""){
$sql.="idOfendidoCarpeta='".$medidasproteccionesDto->getidOfendidoCarpeta()."'";
if( ($medidasproteccionesDto->getActivo()!="") ||($medidasproteccionesDto->getApelada()!="") ||($medidasproteccionesDto->getFechaInicio()!="") ||($medidasproteccionesDto->getFechaTermino()!="") ||($medidasproteccionesDto->getCveAutoridadEmisora()!="") ){
$sql.=",";
}
}
if($medidasproteccionesDto->getActivo()!=""){
$sql.="activo='".$medidasproteccionesDto->getActivo()."'";
if( ($medidasproteccionesDto->getApelada()!="") ||($medidasproteccionesDto->getFechaInicio()!="") ||($medidasproteccionesDto->getFechaTermino()!="") ||($medidasproteccionesDto->getCveAutoridadEmisora()!="") ){
$sql.=",";
}
}
if($medidasproteccionesDto->getApelada()!=""){
$sql.="Apelada='".$medidasproteccionesDto->getApelada()."'";
if(($medidasproteccionesDto->getFechaInicio()!="") ||($medidasproteccionesDto->getFechaTermino()!="") ||($medidasproteccionesDto->getCveAutoridadEmisora()!="") ){
$sql.=",";
}
}
if($medidasproteccionesDto->getfechaInicio()!=""){
$sql.="fechaInicio='".$medidasproteccionesDto->getfechaInicio()."'";
if(($medidasproteccionesDto->getFechaTermino()!="") ||($medidasproteccionesDto->getCveAutoridadEmisora()!="") ){
$sql.=",";
}
}
if($medidasproteccionesDto->getfechaTermino()!=""){
$sql.="fechaTermino='".$medidasproteccionesDto->getfechaTermino()."'";
if(($medidasproteccionesDto->getCveAutoridadEmisora()!="") ){
$sql.=",";
}
}
if($medidasproteccionesDto->getcveAutoridadEmisora()!=""){
$sql.="cveAutoridadEmisora='".$medidasproteccionesDto->getcveAutoridadEmisora()."'";
}
$sql.=" WHERE idMedidaProteccion='".$medidasproteccionesDto->getidMedidaProteccion()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new MedidasproteccionesDTO();
$tmp->setidMedidaProteccion($medidasproteccionesDto->getidMedidaProteccion());
$tmp = $this->selectMedidasprotecciones($tmp,"",$this->_proveedor);
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
public function deleteMedidasprotecciones($medidasproteccionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblmedidasprotecciones  WHERE idMedidaProteccion='".$medidasproteccionesDto->getidMedidaProteccion()."'";
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
public function selectMedidasprotecciones($medidasproteccionesDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idMedidaProteccion,cveTipoProteccion,idActuacion,idOfendidoCarpeta,activo,Apelada,fechaInicio,fechaTermino,cveAutoridadEmisora FROM tblmedidasprotecciones ";
if(($medidasproteccionesDto->getidMedidaProteccion()!="") ||($medidasproteccionesDto->getcveTipoProteccion()!="") ||($medidasproteccionesDto->getidActuacion()!="") ||($medidasproteccionesDto->getidOfendidoCarpeta()!="") ||($medidasproteccionesDto->getActivo()!="") ||($medidasproteccionesDto->getApelada()!="") ||($medidasproteccionesDto->getfechaInicio()!="") ||($medidasproteccionesDto->getfechaTermino()!="") ||($medidasproteccionesDto->getcveAutoridadEmisora()!="") ){
$sql.=" WHERE ";
}
if($medidasproteccionesDto->getidMedidaProteccion()!=""){
$sql.="idMedidaProteccion='".$medidasproteccionesDto->getIdMedidaProteccion()."'";
if(($medidasproteccionesDto->getCveTipoProteccion()!="") ||($medidasproteccionesDto->getIdActuacion()!="") ||($medidasproteccionesDto->getIdOfendidoCarpeta()!="") ||($medidasproteccionesDto->getActivo()!="") ||($medidasproteccionesDto->getApelada()!="") ||($medidasproteccionesDto->getFechaInicio()!="") ||($medidasproteccionesDto->getFechaTermino()!="") ||($medidasproteccionesDto->getCveAutoridadEmisora()!="") ){
$sql.=" AND ";
}
}
if($medidasproteccionesDto->getcveTipoProteccion()!=""){
$sql.="cveTipoProteccion='".$medidasproteccionesDto->getCveTipoProteccion()."'";
if(($medidasproteccionesDto->getIdActuacion()!="") ||($medidasproteccionesDto->getIdOfendidoCarpeta()!="") ||($medidasproteccionesDto->getActivo()!="") ||($medidasproteccionesDto->getApelada()!="") ||($medidasproteccionesDto->getFechaInicio()!="") ||($medidasproteccionesDto->getFechaTermino()!="") ||($medidasproteccionesDto->getCveAutoridadEmisora()!="") ){
$sql.=" AND ";
}
}
if($medidasproteccionesDto->getidActuacion()!=""){
$sql.="idActuacion='".$medidasproteccionesDto->getIdActuacion()."'";
if(($medidasproteccionesDto->getIdOfendidoCarpeta()!="") ||($medidasproteccionesDto->getActivo()!="") ||($medidasproteccionesDto->getApelada()!="") ||($medidasproteccionesDto->getFechaInicio()!="") ||($medidasproteccionesDto->getFechaTermino()!="") ||($medidasproteccionesDto->getCveAutoridadEmisora()!="") ){
$sql.=" AND ";
}
}
if($medidasproteccionesDto->getidOfendidoCarpeta()!=""){
$sql.="idOfendidoCarpeta='".$medidasproteccionesDto->getIdOfendidoCarpeta()."'";
if( ($medidasproteccionesDto->getActivo()!="") ||($medidasproteccionesDto->getApelada()!="") ||($medidasproteccionesDto->getFechaInicio()!="") ||($medidasproteccionesDto->getFechaTermino()!="") ||($medidasproteccionesDto->getCveAutoridadEmisora()!="") ){
$sql.=" AND ";
}
}
if($medidasproteccionesDto->getActivo()!=""){
$sql.="activo='".$medidasproteccionesDto->getActivo()."'";
if( ($medidasproteccionesDto->getApelada()!="") ||($medidasproteccionesDto->getFechaInicio()!="") ||($medidasproteccionesDto->getFechaTermino()!="") ||($medidasproteccionesDto->getCveAutoridadEmisora()!="") ){
$sql.=" AND ";
}
}
if($medidasproteccionesDto->getApelada()!=""){
$sql.="Apelada='".$medidasproteccionesDto->getApelada()."'";
if(($medidasproteccionesDto->getFechaInicio()!="") ||($medidasproteccionesDto->getFechaTermino()!="") ||($medidasproteccionesDto->getCveAutoridadEmisora()!="") ){
$sql.=" AND ";
}
}
if($medidasproteccionesDto->getFechaInicio()!=""){
$sql.="fechaInicio='".$medidasproteccionesDto->getFechaInicio()."'";
if(($medidasproteccionesDto->getFechaTermino()!="") ||($medidasproteccionesDto->getCveAutoridadEmisora()!="") ){
$sql.=" AND ";
}
}
if($medidasproteccionesDto->getfechaTermino()!=""){
$sql.="fechaTermino='".$medidasproteccionesDto->getFechaTermino()."'";
if(($medidasproteccionesDto->getCveAutoridadEmisora()!="") ){
$sql.=" AND ";
}
}
if($medidasproteccionesDto->getcveAutoridadEmisora()!=""){
$sql.="cveAutoridadEmisora='".$medidasproteccionesDto->getCveAutoridadEmisora()."'";
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
$tmp[$contador] = new MedidasproteccionesDTO();
$tmp[$contador]->setIdMedidaProteccion($row["idMedidaProteccion"]);
$tmp[$contador]->setCveTipoProteccion($row["cveTipoProteccion"]);
$tmp[$contador]->setIdActuacion($row["idActuacion"]);
$tmp[$contador]->setIdOfendidoCarpeta($row["idOfendidoCarpeta"]);
$tmp[$contador]->setActivo($row["activo"]);
$tmp[$contador]->setApelada($row["Apelada"]);
$tmp[$contador]->setFechaInicio($row["fechaInicio"]);
$tmp[$contador]->setFechaTermino($row["fechaTermino"]);
$tmp[$contador]->setCveAutoridadEmisora($row["cveAutoridadEmisora"]);
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