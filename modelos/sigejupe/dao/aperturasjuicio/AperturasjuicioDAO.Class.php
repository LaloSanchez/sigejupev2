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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/aperturasjuicio/AperturasjuicioDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class AperturasjuicioDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertAperturasjuicio($aperturasjuicioDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblaperturasjuicio(";
if($aperturasjuicioDto->getIdAperturaJuicio()!=""){
$sql.="idAperturaJuicio";
if(($aperturasjuicioDto->getIdActuacion()!="") ||($aperturasjuicioDto->getIdImputadoCarpeta()!="") ||($aperturasjuicioDto->getIdAudienciaJuicio()!="") ||($aperturasjuicioDto->getApelada()!="") ||($aperturasjuicioDto->getActivo()!="") ||($aperturasjuicioDto->getFechaInicio()!="") ){
$sql.=",";
}
}
if($aperturasjuicioDto->getIdActuacion()!=""){
$sql.="idActuacion";
if(($aperturasjuicioDto->getIdImputadoCarpeta()!="") ||($aperturasjuicioDto->getIdAudienciaJuicio()!="") ||($aperturasjuicioDto->getApelada()!="") ||($aperturasjuicioDto->getActivo()!="") ||($aperturasjuicioDto->getFechaInicio()!="") ){
$sql.=",";
}
}
if($aperturasjuicioDto->getIdImputadoCarpeta()!=""){
$sql.="idImputadoCarpeta";
if(($aperturasjuicioDto->getIdAudienciaJuicio()!="") ||($aperturasjuicioDto->getApelada()!="") ||($aperturasjuicioDto->getActivo()!="") ||($aperturasjuicioDto->getFechaInicio()!="") ){
$sql.=",";
}
}
if($aperturasjuicioDto->getIdAudienciaJuicio()!=""){
$sql.="IdAudienciaJuicio";
if(($aperturasjuicioDto->getApelada()!="") ||($aperturasjuicioDto->getActivo()!="") ||($aperturasjuicioDto->getFechaInicio()!="") ){
$sql.=",";
}
}
if($aperturasjuicioDto->getApelada()!=""){
$sql.="Apelada";
if(($aperturasjuicioDto->getActivo()!="") ||($aperturasjuicioDto->getFechaInicio()!="") ){
$sql.=",";
}
}
if($aperturasjuicioDto->getActivo()!=""){
$sql.="activo";
if(($aperturasjuicioDto->getFechaInicio()!="") ){
$sql.=",";
}
}
if($aperturasjuicioDto->getFechaInicio()!=""){
$sql.="fechaInicio";
}
$sql.=") VALUES(";
if($aperturasjuicioDto->getIdAperturaJuicio()!=""){
$sql.="'".$aperturasjuicioDto->getIdAperturaJuicio()."'";
if(($aperturasjuicioDto->getIdActuacion()!="") ||($aperturasjuicioDto->getIdImputadoCarpeta()!="") ||($aperturasjuicioDto->getIdAudienciaJuicio()!="") ||($aperturasjuicioDto->getApelada()!="") ||($aperturasjuicioDto->getActivo()!="") ||($aperturasjuicioDto->getFechaInicio()!="") ){
$sql.=",";
}
}
if($aperturasjuicioDto->getIdActuacion()!=""){
$sql.="'".$aperturasjuicioDto->getIdActuacion()."'";
if(($aperturasjuicioDto->getIdImputadoCarpeta()!="") ||($aperturasjuicioDto->getIdAudienciaJuicio()!="") ||($aperturasjuicioDto->getApelada()!="") ||($aperturasjuicioDto->getActivo()!="") ||($aperturasjuicioDto->getFechaInicio()!="") ){
$sql.=",";
}
}
if($aperturasjuicioDto->getIdImputadoCarpeta()!=""){
$sql.="'".$aperturasjuicioDto->getIdImputadoCarpeta()."'";
if(($aperturasjuicioDto->getIdAudienciaJuicio()!="") ||($aperturasjuicioDto->getApelada()!="") ||($aperturasjuicioDto->getActivo()!="") ||($aperturasjuicioDto->getFechaInicio()!="") ){
$sql.=",";
}
}
if($aperturasjuicioDto->getIdAudienciaJuicio()!=""){
$sql.="'".$aperturasjuicioDto->getIdAudienciaJuicio()."'";
if(($aperturasjuicioDto->getApelada()!="") ||($aperturasjuicioDto->getActivo()!="") ||($aperturasjuicioDto->getFechaInicio()!="") ){
$sql.=",";
}
}
if($aperturasjuicioDto->getApelada()!=""){
$sql.="'".$aperturasjuicioDto->getApelada()."'";
if(($aperturasjuicioDto->getActivo()!="") ||($aperturasjuicioDto->getFechaInicio()!="") ){
$sql.=",";
}
}
if($aperturasjuicioDto->getActivo()!=""){
$sql.="'".$aperturasjuicioDto->getActivo()."'";
if(($aperturasjuicioDto->getFechaInicio()!="") ){
$sql.=",";
}
}
if($aperturasjuicioDto->getFechaInicio()!=""){
$sql.="'".$aperturasjuicioDto->getFechaInicio()."'";
}
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new AperturasjuicioDTO();
$tmp->setidAperturaJuicio($this->_proveedor->lastID());
$tmp = $this->selectAperturasjuicio($tmp,"",$this->_proveedor);
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
public function updateAperturasjuicio($aperturasjuicioDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblaperturasjuicio SET ";
if($aperturasjuicioDto->getIdAperturaJuicio()!=""){
$sql.="idAperturaJuicio='".$aperturasjuicioDto->getIdAperturaJuicio()."'";
if(($aperturasjuicioDto->getIdActuacion()!="") ||($aperturasjuicioDto->getIdImputadoCarpeta()!="") ||($aperturasjuicioDto->getIdAudienciaJuicio()!="") ||($aperturasjuicioDto->getApelada()!="") ||($aperturasjuicioDto->getActivo()!="") ||($aperturasjuicioDto->getFechaInicio()!="") ){
$sql.=",";
}
}
if($aperturasjuicioDto->getIdActuacion()!=""){
$sql.="idActuacion='".$aperturasjuicioDto->getIdActuacion()."'";
if(($aperturasjuicioDto->getIdImputadoCarpeta()!="") ||($aperturasjuicioDto->getIdAudienciaJuicio()!="") ||($aperturasjuicioDto->getApelada()!="") ||($aperturasjuicioDto->getActivo()!="") ||($aperturasjuicioDto->getFechaInicio()!="") ){
$sql.=",";
}
}
if($aperturasjuicioDto->getIdImputadoCarpeta()!=""){
$sql.="idImputadoCarpeta='".$aperturasjuicioDto->getIdImputadoCarpeta()."'";
if(($aperturasjuicioDto->getIdAudienciaJuicio()!="") ||($aperturasjuicioDto->getApelada()!="") ||($aperturasjuicioDto->getActivo()!="") ||($aperturasjuicioDto->getFechaInicio()!="") ){
$sql.=",";
}
}
if($aperturasjuicioDto->getIdAudienciaJuicio()!=""){
$sql.="IdAudienciaJuicio='".$aperturasjuicioDto->getIdAudienciaJuicio()."'";
if(($aperturasjuicioDto->getApelada()!="") ||($aperturasjuicioDto->getActivo()!="") ||($aperturasjuicioDto->getFechaInicio()!="") ){
$sql.=",";
}
}
if($aperturasjuicioDto->getApelada()!=""){
$sql.="Apelada='".$aperturasjuicioDto->getApelada()."'";
if(($aperturasjuicioDto->getActivo()!="") ||($aperturasjuicioDto->getFechaInicio()!="") ){
$sql.=",";
}
}
if($aperturasjuicioDto->getActivo()!=""){
$sql.="activo='".$aperturasjuicioDto->getActivo()."'";
if(($aperturasjuicioDto->getFechaInicio()!="") ){
$sql.=",";
}
}
if($aperturasjuicioDto->getFechaInicio()!=""){
$sql.="fechaInicio='".$aperturasjuicioDto->getFechaInicio()."'";
}
$sql.=" WHERE idAperturaJuicio='".$aperturasjuicioDto->getIdAperturaJuicio()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new AperturasjuicioDTO();
$tmp->setidAperturaJuicio($aperturasjuicioDto->getIdAperturaJuicio());
$tmp = $this->selectAperturasjuicio($tmp,"",$this->_proveedor);
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
public function deleteAperturasjuicio($aperturasjuicioDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblaperturasjuicio  WHERE idAperturaJuicio='".$aperturasjuicioDto->getIdAperturaJuicio()."'";
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
public function selectAperturasjuicio($aperturasjuicioDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idAperturaJuicio,idActuacion,idImputadoCarpeta,IdAudienciaJuicio,Apelada,activo,fechaInicio FROM tblaperturasjuicio ";
if(($aperturasjuicioDto->getIdAperturaJuicio()!="") ||($aperturasjuicioDto->getIdActuacion()!="") ||($aperturasjuicioDto->getIdImputadoCarpeta()!="") ||($aperturasjuicioDto->getIdAudienciaJuicio()!="") ||($aperturasjuicioDto->getApelada()!="") ||($aperturasjuicioDto->getActivo()!="") ||($aperturasjuicioDto->getFechaInicio()!="") ){
$sql.=" WHERE ";
}
if($aperturasjuicioDto->getIdAperturaJuicio()!=""){
$sql.="idAperturaJuicio='".$aperturasjuicioDto->getIdAperturaJuicio()."'";
if(($aperturasjuicioDto->getIdActuacion()!="") ||($aperturasjuicioDto->getIdImputadoCarpeta()!="") ||($aperturasjuicioDto->getIdAudienciaJuicio()!="") ||($aperturasjuicioDto->getApelada()!="") ||($aperturasjuicioDto->getActivo()!="") ||($aperturasjuicioDto->getFechaInicio()!="") ){
$sql.=" AND ";
}
}
if($aperturasjuicioDto->getIdActuacion()!=""){
$sql.="idActuacion='".$aperturasjuicioDto->getIdActuacion()."'";
if(($aperturasjuicioDto->getIdImputadoCarpeta()!="") ||($aperturasjuicioDto->getIdAudienciaJuicio()!="") ||($aperturasjuicioDto->getApelada()!="") ||($aperturasjuicioDto->getActivo()!="") ||($aperturasjuicioDto->getFechaInicio()!="") ){
$sql.=" AND ";
}
}
if($aperturasjuicioDto->getIdImputadoCarpeta()!=""){
$sql.="idImputadoCarpeta='".$aperturasjuicioDto->getIdImputadoCarpeta()."'";
if(($aperturasjuicioDto->getIdAudienciaJuicio()!="") ||($aperturasjuicioDto->getApelada()!="") ||($aperturasjuicioDto->getActivo()!="") ||($aperturasjuicioDto->getFechaInicio()!="") ){
$sql.=" AND ";
}
}
if($aperturasjuicioDto->getIdAudienciaJuicio()!=""){
$sql.="IdAudienciaJuicio='".$aperturasjuicioDto->getIdAudienciaJuicio()."'";
if(($aperturasjuicioDto->getApelada()!="") ||($aperturasjuicioDto->getActivo()!="") ||($aperturasjuicioDto->getFechaInicio()!="") ){
$sql.=" AND ";
}
}
if($aperturasjuicioDto->getApelada()!=""){
$sql.="Apelada='".$aperturasjuicioDto->getApelada()."'";
if(($aperturasjuicioDto->getActivo()!="") ||($aperturasjuicioDto->getFechaInicio()!="") ){
$sql.=" AND ";
}
}
if($aperturasjuicioDto->getActivo()!=""){
$sql.="activo='".$aperturasjuicioDto->getActivo()."'";
if(($aperturasjuicioDto->getFechaInicio()!="") ){
$sql.=" AND ";
}
}
if($aperturasjuicioDto->getFechaInicio()!=""){
$sql.="fechaInicio='".$aperturasjuicioDto->getFechaInicio()."'";
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
$tmp[$contador] = new AperturasjuicioDTO();
$tmp[$contador]->setIdAperturaJuicio($row["idAperturaJuicio"]);
$tmp[$contador]->setIdActuacion($row["idActuacion"]);
$tmp[$contador]->setIdImputadoCarpeta($row["idImputadoCarpeta"]);
$tmp[$contador]->setIdAudienciaJuicio($row["IdAudienciaJuicio"]);
$tmp[$contador]->setApelada($row["Apelada"]);
$tmp[$contador]->setActivo($row["activo"]);
$tmp[$contador]->setFechaInicio($row["fechaInicio"]);
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