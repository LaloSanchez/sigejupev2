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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/tipospersonas/TipospersonasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class TipospersonasDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertTipospersonas($tipospersonasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tbltipospersonas(";
if($tipospersonasDto->getcveTipoPersona()!=""){
$sql.="cveTipoPersona";
if(($tipospersonasDto->getDesTipoPersona()!="") ||($tipospersonasDto->getActivo()!="") ){
$sql.=",";
}
}
if($tipospersonasDto->getdesTipoPersona()!=""){
$sql.="desTipoPersona";
if(($tipospersonasDto->getActivo()!="") ){
$sql.=",";
}
}
if($tipospersonasDto->getactivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($tipospersonasDto->getcveTipoPersona()!=""){
$sql.="'".$tipospersonasDto->getcveTipoPersona()."'";
if(($tipospersonasDto->getDesTipoPersona()!="") ||($tipospersonasDto->getActivo()!="") ){
$sql.=",";
}
}
if($tipospersonasDto->getdesTipoPersona()!=""){
$sql.="'".$tipospersonasDto->getdesTipoPersona()."'";
if(($tipospersonasDto->getActivo()!="") ){
$sql.=",";
}
}
if($tipospersonasDto->getactivo()!=""){
$sql.="'".$tipospersonasDto->getactivo()."'";
}
if($tipospersonasDto->getfechaRegistro()!=""){
}
if($tipospersonasDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TipospersonasDTO();
$tmp->setcveTipoPersona($this->_proveedor->lastID());
$tmp = $this->selectTipospersonas($tmp,"",$this->_proveedor);
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
public function updateTipospersonas($tipospersonasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tbltipospersonas SET ";
if($tipospersonasDto->getcveTipoPersona()!=""){
$sql.="cveTipoPersona='".$tipospersonasDto->getcveTipoPersona()."'";
if(($tipospersonasDto->getDesTipoPersona()!="") ||($tipospersonasDto->getActivo()!="") ||($tipospersonasDto->getFechaRegistro()!="") ||($tipospersonasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tipospersonasDto->getdesTipoPersona()!=""){
$sql.="desTipoPersona='".$tipospersonasDto->getdesTipoPersona()."'";
if(($tipospersonasDto->getActivo()!="") ||($tipospersonasDto->getFechaRegistro()!="") ||($tipospersonasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tipospersonasDto->getactivo()!=""){
$sql.="activo='".$tipospersonasDto->getactivo()."'";
if(($tipospersonasDto->getFechaRegistro()!="") ||($tipospersonasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tipospersonasDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$tipospersonasDto->getfechaRegistro()."'";
if(($tipospersonasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($tipospersonasDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$tipospersonasDto->getfechaActualizacion()."'";
}
$sql.=" WHERE cveTipoPersona='".$tipospersonasDto->getcveTipoPersona()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TipospersonasDTO();
$tmp->setcveTipoPersona($tipospersonasDto->getcveTipoPersona());
$tmp = $this->selectTipospersonas($tmp,"",$this->_proveedor);
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
public function deleteTipospersonas($tipospersonasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tbltipospersonas  WHERE cveTipoPersona='".$tipospersonasDto->getcveTipoPersona()."'";
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
public function selectTipospersonas($tipospersonasDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveTipoPersona,desTipoPersona,activo,SoloVictima,fechaRegistro,fechaActualizacion FROM tbltipospersonas ";
if(($tipospersonasDto->getcveTipoPersona()!="") ||($tipospersonasDto->getdesTipoPersona()!="") ||($tipospersonasDto->getactivo()!="") ||($tipospersonasDto->getfechaRegistro()!="") ||($tipospersonasDto->getfechaActualizacion()!="") || ($tipospersonasDto->getSoloVictima()!="") ){
$sql.=" WHERE ";
}
if($tipospersonasDto->getcveTipoPersona()!=""){
$sql.="cveTipoPersona='".$tipospersonasDto->getCveTipoPersona()."'";
if(($tipospersonasDto->getDesTipoPersona()!="") ||($tipospersonasDto->getActivo()!="") ||($tipospersonasDto->getFechaRegistro()!="") ||($tipospersonasDto->getFechaActualizacion()!="") || ($tipospersonasDto->getSoloVictima()!="") ){
$sql.=" AND ";
}
}
if($tipospersonasDto->getdesTipoPersona()!=""){
$sql.="desTipoPersona='".$tipospersonasDto->getDesTipoPersona()."'";
if(($tipospersonasDto->getActivo()!="") ||($tipospersonasDto->getFechaRegistro()!="") ||($tipospersonasDto->getFechaActualizacion()!="") || ($tipospersonasDto->getSoloVictima()!="") ){
$sql.=" AND ";
}
}
if($tipospersonasDto->getactivo()!=""){
$sql.="activo='".$tipospersonasDto->getActivo()."'";
if(($tipospersonasDto->getFechaRegistro()!="") ||($tipospersonasDto->getFechaActualizacion()!="") || ($tipospersonasDto->getSoloVictima()!="") ){
$sql.=" AND ";
}
}
if($tipospersonasDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$tipospersonasDto->getFechaRegistro()."'";
if(($tipospersonasDto->getFechaActualizacion()!="") || ($tipospersonasDto->getSoloVictima()!="")){
$sql.=" AND ";
}
}
if($tipospersonasDto->getSoloVictima()!=""){
$sql.="SoloVictima='".$tipospersonasDto->getSoloVictima()."'";
if(($tipospersonasDto->getFechaActualizacion()!="")){
$sql.=" AND ";
}
}
if($tipospersonasDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$tipospersonasDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new TipospersonasDTO();
$tmp[$contador]->setCveTipoPersona($row["cveTipoPersona"]);
$tmp[$contador]->setDesTipoPersona($row["desTipoPersona"]);
$tmp[$contador]->setActivo($row["activo"]);
$tmp[$contador]->setSoloVictima($row["SoloVictima"]);
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