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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/tipossanciones/TipossancionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class TipossancionesDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertTipossanciones($tipossancionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor; 
}
$sql="INSERT INTO tbltipossanciones(";
if($tipossancionesDto->getCveTipoSancion()!=""){
$sql.="cveTipoSancion";
if(($tipossancionesDto->getDesTipoSancion()!="") ||($tipossancionesDto->getBeneficio()!="") ||($tipossancionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($tipossancionesDto->getDesTipoSancion()!=""){
$sql.="desTipoSancion";
if(($tipossancionesDto->getBeneficio()!="") ||($tipossancionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($tipossancionesDto->getBeneficio()!=""){
$sql.="Beneficio";
if(($tipossancionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($tipossancionesDto->getActivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($tipossancionesDto->getCveTipoSancion()!=""){
$sql.="'".$tipossancionesDto->getCveTipoSancion()."'";
if(($tipossancionesDto->getDesTipoSancion()!="") ||($tipossancionesDto->getBeneficio()!="") ||($tipossancionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($tipossancionesDto->getDesTipoSancion()!=""){
$sql.="'".$tipossancionesDto->getDesTipoSancion()."'";
if(($tipossancionesDto->getBeneficio()!="") ||($tipossancionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($tipossancionesDto->getBeneficio()!=""){
$sql.="'".$tipossancionesDto->getBeneficio()."'";
if(($tipossancionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($tipossancionesDto->getActivo()!=""){
$sql.="'".$tipossancionesDto->getActivo()."'";
}
if($tipossancionesDto->getFechaRegistro()!=""){
}
if($tipossancionesDto->getFechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TipossancionesDTO();
$tmp->setcveTipoSancion($this->_proveedor->lastID());
$tmp = $this->selectTipossanciones($tmp,"",$this->_proveedor);
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
public function updateTipossanciones($tipossancionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tbltipossanciones SET ";
if($tipossancionesDto->getCveTipoSancion()!=""){
$sql.="cveTipoSancion='".$tipossancionesDto->getCveTipoSancion()."'";
if(($tipossancionesDto->getDesTipoSancion()!="") ||($tipossancionesDto->getBeneficio()!="") ||($tipossancionesDto->getActivo()!="") ||($tipossancionesDto->getFechaRegistro()!="") ||($tipossancionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tipossancionesDto->getDesTipoSancion()!=""){
$sql.="desTipoSancion='".$tipossancionesDto->getDesTipoSancion()."'";
if(($tipossancionesDto->getBeneficio()!="") ||($tipossancionesDto->getActivo()!="") ||($tipossancionesDto->getFechaRegistro()!="") ||($tipossancionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tipossancionesDto->getBeneficio()!=""){
$sql.="Beneficio='".$tipossancionesDto->getBeneficio()."'";
if(($tipossancionesDto->getActivo()!="") ||($tipossancionesDto->getFechaRegistro()!="") ||($tipossancionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tipossancionesDto->getActivo()!=""){
$sql.="activo='".$tipossancionesDto->getActivo()."'";
if(($tipossancionesDto->getFechaRegistro()!="") ||($tipossancionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tipossancionesDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$tipossancionesDto->getFechaRegistro()."'";
if(($tipossancionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tipossancionesDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$tipossancionesDto->getFechaActualizacion()."'";
}
$sql.=" WHERE cveTipoSancion='".$tipossancionesDto->getCveTipoSancion()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TipossancionesDTO();
$tmp->setcveTipoSancion($tipossancionesDto->getCveTipoSancion());
$tmp = $this->selectTipossanciones($tmp,"",$this->_proveedor);
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
public function deleteTipossanciones($tipossancionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tbltipossanciones  WHERE cveTipoSancion='".$tipossancionesDto->getCveTipoSancion()."'";
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
public function selectTipossanciones($tipossancionesDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveTipoSancion,desTipoSancion,Beneficio,activo,fechaRegistro,fechaActualizacion FROM tbltipossanciones ";
if(($tipossancionesDto->getCveTipoSancion()!="") ||($tipossancionesDto->getDesTipoSancion()!="") ||($tipossancionesDto->getBeneficio()!="") ||($tipossancionesDto->getActivo()!="") ||($tipossancionesDto->getFechaRegistro()!="") ||($tipossancionesDto->getFechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($tipossancionesDto->getCveTipoSancion()!=""){
$sql.="cveTipoSancion='".$tipossancionesDto->getCveTipoSancion()."'";
if(($tipossancionesDto->getDesTipoSancion()!="") ||($tipossancionesDto->getBeneficio()!="") ||($tipossancionesDto->getActivo()!="") ||($tipossancionesDto->getFechaRegistro()!="") ||($tipossancionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tipossancionesDto->getDesTipoSancion()!=""){
$sql.="desTipoSancion='".$tipossancionesDto->getDesTipoSancion()."'";
if(($tipossancionesDto->getBeneficio()!="") ||($tipossancionesDto->getActivo()!="") ||($tipossancionesDto->getFechaRegistro()!="") ||($tipossancionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tipossancionesDto->getBeneficio()!=""){
$sql.="Beneficio='".$tipossancionesDto->getBeneficio()."'";
if(($tipossancionesDto->getActivo()!="") ||($tipossancionesDto->getFechaRegistro()!="") ||($tipossancionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tipossancionesDto->getActivo()!=""){
$sql.="activo='".$tipossancionesDto->getActivo()."'";
if(($tipossancionesDto->getFechaRegistro()!="") ||($tipossancionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tipossancionesDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$tipossancionesDto->getFechaRegistro()."'";
if(($tipossancionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($tipossancionesDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$tipossancionesDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new TipossancionesDTO();
$tmp[$contador]->setCveTipoSancion($row["cveTipoSancion"]);
$tmp[$contador]->setDesTipoSancion($row["desTipoSancion"]);
$tmp[$contador]->setBeneficio($row["Beneficio"]);
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