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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/victimadetrata/VictimadetrataDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class VictimadetrataDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertVictimadetrata($victimadetrataDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblvictimadetrata(";
if($victimadetrataDto->getcveVictimaDeTrata()!=""){
$sql.="cveVictimaDeTrata";
if(($victimadetrataDto->getDesVictimaDeTrata()!="") ||($victimadetrataDto->getActivo()!="") ){
$sql.=",";
}
}
if($victimadetrataDto->getdesVictimaDeTrata()!=""){
$sql.="desVictimaDeTrata";
if(($victimadetrataDto->getActivo()!="") ){
$sql.=",";
}
}
if($victimadetrataDto->getactivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($victimadetrataDto->getcveVictimaDeTrata()!=""){
$sql.="'".$victimadetrataDto->getcveVictimaDeTrata()."'";
if(($victimadetrataDto->getDesVictimaDeTrata()!="") ||($victimadetrataDto->getActivo()!="") ){
$sql.=",";
}
}
if($victimadetrataDto->getdesVictimaDeTrata()!=""){
$sql.="'".$victimadetrataDto->getdesVictimaDeTrata()."'";
if(($victimadetrataDto->getActivo()!="") ){
$sql.=",";
}
}
if($victimadetrataDto->getactivo()!=""){
$sql.="'".$victimadetrataDto->getactivo()."'";
}
if($victimadetrataDto->getfechaRegistro()!=""){
}
if($victimadetrataDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new VictimadetrataDTO();
$tmp->setcveVictimaDeTrata($this->_proveedor->lastID());
$tmp = $this->selectVictimadetrata($tmp,"",$this->_proveedor);
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
public function updateVictimadetrata($victimadetrataDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblvictimadetrata SET ";
if($victimadetrataDto->getcveVictimaDeTrata()!=""){
$sql.="cveVictimaDeTrata='".$victimadetrataDto->getcveVictimaDeTrata()."'";
if(($victimadetrataDto->getDesVictimaDeTrata()!="") ||($victimadetrataDto->getActivo()!="") ||($victimadetrataDto->getFechaRegistro()!="") ||($victimadetrataDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($victimadetrataDto->getdesVictimaDeTrata()!=""){
$sql.="desVictimaDeTrata='".$victimadetrataDto->getdesVictimaDeTrata()."'";
if(($victimadetrataDto->getActivo()!="") ||($victimadetrataDto->getFechaRegistro()!="") ||($victimadetrataDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($victimadetrataDto->getactivo()!=""){
$sql.="activo='".$victimadetrataDto->getactivo()."'";
if(($victimadetrataDto->getFechaRegistro()!="") ||($victimadetrataDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($victimadetrataDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$victimadetrataDto->getfechaRegistro()."'";
if(($victimadetrataDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($victimadetrataDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$victimadetrataDto->getfechaActualizacion()."'";
}
$sql.=" WHERE cveVictimaDeTrata='".$victimadetrataDto->getcveVictimaDeTrata()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new VictimadetrataDTO();
$tmp->setcveVictimaDeTrata($victimadetrataDto->getcveVictimaDeTrata());
$tmp = $this->selectVictimadetrata($tmp,"",$this->_proveedor);
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
public function deleteVictimadetrata($victimadetrataDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblvictimadetrata  WHERE cveVictimaDeTrata='".$victimadetrataDto->getcveVictimaDeTrata()."'";
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
public function selectVictimadetrata($victimadetrataDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveVictimaDeTrata,desVictimaDeTrata,activo,fechaRegistro,fechaActualizacion FROM tblvictimadetrata ";
if(($victimadetrataDto->getcveVictimaDeTrata()!="") ||($victimadetrataDto->getdesVictimaDeTrata()!="") ||($victimadetrataDto->getactivo()!="") ||($victimadetrataDto->getfechaRegistro()!="") ||($victimadetrataDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($victimadetrataDto->getcveVictimaDeTrata()!=""){
$sql.="cveVictimaDeTrata='".$victimadetrataDto->getCveVictimaDeTrata()."'";
if(($victimadetrataDto->getDesVictimaDeTrata()!="") ||($victimadetrataDto->getActivo()!="") ||($victimadetrataDto->getFechaRegistro()!="") ||($victimadetrataDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($victimadetrataDto->getdesVictimaDeTrata()!=""){
$sql.="desVictimaDeTrata='".$victimadetrataDto->getDesVictimaDeTrata()."'";
if(($victimadetrataDto->getActivo()!="") ||($victimadetrataDto->getFechaRegistro()!="") ||($victimadetrataDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($victimadetrataDto->getactivo()!=""){
$sql.="activo='".$victimadetrataDto->getActivo()."'";
if(($victimadetrataDto->getFechaRegistro()!="") ||($victimadetrataDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($victimadetrataDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$victimadetrataDto->getFechaRegistro()."'";
if(($victimadetrataDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($victimadetrataDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$victimadetrataDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new VictimadetrataDTO();
$tmp[$contador]->setCveVictimaDeTrata($row["cveVictimaDeTrata"]);
$tmp[$contador]->setDesVictimaDeTrata($row["desVictimaDeTrata"]);
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