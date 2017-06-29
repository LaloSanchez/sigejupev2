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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/etapasprocesales/EtapasprocesalesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class EtapasprocesalesDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertEtapasprocesales($etapasprocesalesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tbletapasprocesales(";
if($etapasprocesalesDto->getcveEtapaProcesal()!=""){
$sql.="cveEtapaProcesal";
if(($etapasprocesalesDto->getDesEtapaProcesal()!="") ||($etapasprocesalesDto->getActivo()!="") ){
$sql.=",";
}
}
if($etapasprocesalesDto->getdesEtapaProcesal()!=""){
$sql.="desEtapaProcesal";
if(($etapasprocesalesDto->getActivo()!="") ){
$sql.=",";
}
}
if($etapasprocesalesDto->getactivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($etapasprocesalesDto->getcveEtapaProcesal()!=""){
$sql.="'".$etapasprocesalesDto->getcveEtapaProcesal()."'";
if(($etapasprocesalesDto->getDesEtapaProcesal()!="") ||($etapasprocesalesDto->getActivo()!="") ){
$sql.=",";
}
}
if($etapasprocesalesDto->getdesEtapaProcesal()!=""){
$sql.="'".$etapasprocesalesDto->getdesEtapaProcesal()."'";
if(($etapasprocesalesDto->getActivo()!="") ){
$sql.=",";
}
}
if($etapasprocesalesDto->getactivo()!=""){
$sql.="'".$etapasprocesalesDto->getactivo()."'";
}
if($etapasprocesalesDto->getfechaRegistro()!=""){
}
if($etapasprocesalesDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new EtapasprocesalesDTO();
$tmp->setcveEtapaProcesal($this->_proveedor->lastID());
$tmp = $this->selectEtapasprocesales($tmp,"",$this->_proveedor);
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
public function updateEtapasprocesales($etapasprocesalesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tbletapasprocesales SET ";
if($etapasprocesalesDto->getcveEtapaProcesal()!=""){
$sql.="cveEtapaProcesal='".$etapasprocesalesDto->getcveEtapaProcesal()."'";
if(($etapasprocesalesDto->getDesEtapaProcesal()!="") ||($etapasprocesalesDto->getActivo()!="") ||($etapasprocesalesDto->getFechaRegistro()!="") ||($etapasprocesalesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($etapasprocesalesDto->getdesEtapaProcesal()!=""){
$sql.="desEtapaProcesal='".$etapasprocesalesDto->getdesEtapaProcesal()."'";
if(($etapasprocesalesDto->getActivo()!="") ||($etapasprocesalesDto->getFechaRegistro()!="") ||($etapasprocesalesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($etapasprocesalesDto->getactivo()!=""){
$sql.="activo='".$etapasprocesalesDto->getactivo()."'";
if(($etapasprocesalesDto->getFechaRegistro()!="") ||($etapasprocesalesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($etapasprocesalesDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$etapasprocesalesDto->getfechaRegistro()."'";
if(($etapasprocesalesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($etapasprocesalesDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$etapasprocesalesDto->getfechaActualizacion()."'";
}
$sql.=" WHERE cveEtapaProcesal='".$etapasprocesalesDto->getcveEtapaProcesal()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new EtapasprocesalesDTO();
$tmp->setcveEtapaProcesal($etapasprocesalesDto->getcveEtapaProcesal());
$tmp = $this->selectEtapasprocesales($tmp,"",$this->_proveedor);
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
public function deleteEtapasprocesales($etapasprocesalesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tbletapasprocesales  WHERE cveEtapaProcesal='".$etapasprocesalesDto->getcveEtapaProcesal()."'";
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
public function selectEtapasprocesales($etapasprocesalesDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveEtapaProcesal,desEtapaProcesal,activo,fechaRegistro,fechaActualizacion FROM tbletapasprocesales ";
if(($etapasprocesalesDto->getcveEtapaProcesal()!="") ||($etapasprocesalesDto->getdesEtapaProcesal()!="") ||($etapasprocesalesDto->getactivo()!="") ||($etapasprocesalesDto->getfechaRegistro()!="") ||($etapasprocesalesDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($etapasprocesalesDto->getcveEtapaProcesal()!=""){
$sql.="cveEtapaProcesal='".$etapasprocesalesDto->getCveEtapaProcesal()."'";
if(($etapasprocesalesDto->getDesEtapaProcesal()!="") ||($etapasprocesalesDto->getActivo()!="") ||($etapasprocesalesDto->getFechaRegistro()!="") ||($etapasprocesalesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($etapasprocesalesDto->getdesEtapaProcesal()!=""){
$sql.="desEtapaProcesal='".$etapasprocesalesDto->getDesEtapaProcesal()."'";
if(($etapasprocesalesDto->getActivo()!="") ||($etapasprocesalesDto->getFechaRegistro()!="") ||($etapasprocesalesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($etapasprocesalesDto->getactivo()!=""){
$sql.="activo='".$etapasprocesalesDto->getActivo()."'";
if(($etapasprocesalesDto->getFechaRegistro()!="") ||($etapasprocesalesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($etapasprocesalesDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$etapasprocesalesDto->getFechaRegistro()."'";
if(($etapasprocesalesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($etapasprocesalesDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$etapasprocesalesDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new EtapasprocesalesDTO();
$tmp[$contador]->setCveEtapaProcesal($row["cveEtapaProcesal"]);
$tmp[$contador]->setDesEtapaProcesal($row["desEtapaProcesal"]);
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