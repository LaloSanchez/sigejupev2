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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/victimadeacoso/VictimadeacosoDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class VictimadeacosoDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertVictimadeacoso($victimadeacosoDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblvictimadeacoso(";
if($victimadeacosoDto->getCveVictimaDeAcoso()!=""){
$sql.="cveVictimaDeAcoso";
if(($victimadeacosoDto->getDesVictimaDeAcoso()!="") ||($victimadeacosoDto->getActivo()!="") ){
$sql.=",";
}
}
if($victimadeacosoDto->getDesVictimaDeAcoso()!=""){
$sql.="desVictimaDeAcoso";
if(($victimadeacosoDto->getActivo()!="") ){
$sql.=",";
}
}
if($victimadeacosoDto->getActivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($victimadeacosoDto->getCveVictimaDeAcoso()!=""){
$sql.="'".$victimadeacosoDto->getCveVictimaDeAcoso()."'";
if(($victimadeacosoDto->getDesVictimaDeAcoso()!="") ||($victimadeacosoDto->getActivo()!="") ){
$sql.=",";
}
}
if($victimadeacosoDto->getDesVictimaDeAcoso()!=""){
$sql.="'".$victimadeacosoDto->getDesVictimaDeAcoso()."'";
if(($victimadeacosoDto->getActivo()!="") ){
$sql.=",";
}
}
if($victimadeacosoDto->getActivo()!=""){
$sql.="'".$victimadeacosoDto->getActivo()."'";
}
if($victimadeacosoDto->getFechaRegistro()!=""){
}
if($victimadeacosoDto->getFechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new VictimadeacosoDTO();
$tmp->setcveVictimaDeAcoso($this->_proveedor->lastID());
$tmp = $this->selectVictimadeacoso($tmp,"",$this->_proveedor);
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
public function updateVictimadeacoso($victimadeacosoDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblvictimadeacoso SET ";
if($victimadeacosoDto->getCveVictimaDeAcoso()!=""){
$sql.="cveVictimaDeAcoso='".$victimadeacosoDto->getCveVictimaDeAcoso()."'";
if(($victimadeacosoDto->getDesVictimaDeAcoso()!="") ||($victimadeacosoDto->getActivo()!="") ||($victimadeacosoDto->getFechaRegistro()!="") ||($victimadeacosoDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($victimadeacosoDto->getDesVictimaDeAcoso()!=""){
$sql.="desVictimaDeAcoso='".$victimadeacosoDto->getDesVictimaDeAcoso()."'";
if(($victimadeacosoDto->getActivo()!="") ||($victimadeacosoDto->getFechaRegistro()!="") ||($victimadeacosoDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($victimadeacosoDto->getActivo()!=""){
$sql.="activo='".$victimadeacosoDto->getActivo()."'";
if(($victimadeacosoDto->getFechaRegistro()!="") ||($victimadeacosoDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($victimadeacosoDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$victimadeacosoDto->getFechaRegistro()."'";
if(($victimadeacosoDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($victimadeacosoDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$victimadeacosoDto->getFechaActualizacion()."'";
}
$sql.=" WHERE cveVictimaDeAcoso='".$victimadeacosoDto->getCveVictimaDeAcoso()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new VictimadeacosoDTO();
$tmp->setcveVictimaDeAcoso($victimadeacosoDto->getCveVictimaDeAcoso());
$tmp = $this->selectVictimadeacoso($tmp,"",$this->_proveedor);
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
public function deleteVictimadeacoso($victimadeacosoDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblvictimadeacoso  WHERE cveVictimaDeAcoso='".$victimadeacosoDto->getCveVictimaDeAcoso()."'";
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
public function selectVictimadeacoso($victimadeacosoDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveVictimaDeAcoso,desVictimaDeAcoso,activo,fechaRegistro,fechaActualizacion FROM tblvictimadeacoso ";
if(($victimadeacosoDto->getCveVictimaDeAcoso()!="") ||($victimadeacosoDto->getDesVictimaDeAcoso()!="") ||($victimadeacosoDto->getActivo()!="") ||($victimadeacosoDto->getFechaRegistro()!="") ||($victimadeacosoDto->getFechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($victimadeacosoDto->getCveVictimaDeAcoso()!=""){
$sql.="cveVictimaDeAcoso='".$victimadeacosoDto->getCveVictimaDeAcoso()."'";
if(($victimadeacosoDto->getDesVictimaDeAcoso()!="") ||($victimadeacosoDto->getActivo()!="") ||($victimadeacosoDto->getFechaRegistro()!="") ||($victimadeacosoDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($victimadeacosoDto->getDesVictimaDeAcoso()!=""){
$sql.="desVictimaDeAcoso='".$victimadeacosoDto->getDesVictimaDeAcoso()."'";
if(($victimadeacosoDto->getActivo()!="") ||($victimadeacosoDto->getFechaRegistro()!="") ||($victimadeacosoDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($victimadeacosoDto->getActivo()!=""){
$sql.="activo='".$victimadeacosoDto->getActivo()."'";
if(($victimadeacosoDto->getFechaRegistro()!="") ||($victimadeacosoDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($victimadeacosoDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$victimadeacosoDto->getFechaRegistro()."'";
if(($victimadeacosoDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($victimadeacosoDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$victimadeacosoDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new VictimadeacosoDTO();
$tmp[$contador]->setCveVictimaDeAcoso($row["cveVictimaDeAcoso"]);
$tmp[$contador]->setDesVictimaDeAcoso($row["desVictimaDeAcoso"]);
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