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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/victimadeviolenciadegenero/VictimadeviolenciadegeneroDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class VictimadeviolenciadegeneroDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertVictimadeviolenciadegenero($victimadeviolenciadegeneroDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblvictimadeviolenciadegenero(";
if($victimadeviolenciadegeneroDto->getcveVictimaDeViolenciaDeGenero()!=""){
$sql.="cveVictimaDeViolenciaDeGenero";
if(($victimadeviolenciadegeneroDto->getDesVictimaDeViolenciaDeGenero()!="") ||($victimadeviolenciadegeneroDto->getActivo()!="") ){
$sql.=",";
}
}
if($victimadeviolenciadegeneroDto->getdesVictimaDeViolenciaDeGenero()!=""){
$sql.="desVictimaDeViolenciaDeGenero";
if(($victimadeviolenciadegeneroDto->getActivo()!="") ){
$sql.=",";
}
}
if($victimadeviolenciadegeneroDto->getactivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($victimadeviolenciadegeneroDto->getcveVictimaDeViolenciaDeGenero()!=""){
$sql.="'".$victimadeviolenciadegeneroDto->getcveVictimaDeViolenciaDeGenero()."'";
if(($victimadeviolenciadegeneroDto->getDesVictimaDeViolenciaDeGenero()!="") ||($victimadeviolenciadegeneroDto->getActivo()!="") ){
$sql.=",";
}
}
if($victimadeviolenciadegeneroDto->getdesVictimaDeViolenciaDeGenero()!=""){
$sql.="'".$victimadeviolenciadegeneroDto->getdesVictimaDeViolenciaDeGenero()."'";
if(($victimadeviolenciadegeneroDto->getActivo()!="") ){
$sql.=",";
}
}
if($victimadeviolenciadegeneroDto->getactivo()!=""){
$sql.="'".$victimadeviolenciadegeneroDto->getactivo()."'";
}
if($victimadeviolenciadegeneroDto->getfechaRegistro()!=""){
}
if($victimadeviolenciadegeneroDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new VictimadeviolenciadegeneroDTO();
$tmp->setcveVictimaDeViolenciaDeGenero($this->_proveedor->lastID());
$tmp = $this->selectVictimadeviolenciadegenero($tmp,"",$this->_proveedor);
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
public function updateVictimadeviolenciadegenero($victimadeviolenciadegeneroDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblvictimadeviolenciadegenero SET ";
if($victimadeviolenciadegeneroDto->getcveVictimaDeViolenciaDeGenero()!=""){
$sql.="cveVictimaDeViolenciaDeGenero='".$victimadeviolenciadegeneroDto->getcveVictimaDeViolenciaDeGenero()."'";
if(($victimadeviolenciadegeneroDto->getDesVictimaDeViolenciaDeGenero()!="") ||($victimadeviolenciadegeneroDto->getActivo()!="") ||($victimadeviolenciadegeneroDto->getFechaRegistro()!="") ||($victimadeviolenciadegeneroDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($victimadeviolenciadegeneroDto->getdesVictimaDeViolenciaDeGenero()!=""){
$sql.="desVictimaDeViolenciaDeGenero='".$victimadeviolenciadegeneroDto->getdesVictimaDeViolenciaDeGenero()."'";
if(($victimadeviolenciadegeneroDto->getActivo()!="") ||($victimadeviolenciadegeneroDto->getFechaRegistro()!="") ||($victimadeviolenciadegeneroDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($victimadeviolenciadegeneroDto->getactivo()!=""){
$sql.="activo='".$victimadeviolenciadegeneroDto->getactivo()."'";
if(($victimadeviolenciadegeneroDto->getFechaRegistro()!="") ||($victimadeviolenciadegeneroDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($victimadeviolenciadegeneroDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$victimadeviolenciadegeneroDto->getfechaRegistro()."'";
if(($victimadeviolenciadegeneroDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($victimadeviolenciadegeneroDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$victimadeviolenciadegeneroDto->getfechaActualizacion()."'";
}
$sql.=" WHERE cveVictimaDeViolenciaDeGenero='".$victimadeviolenciadegeneroDto->getcveVictimaDeViolenciaDeGenero()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new VictimadeviolenciadegeneroDTO();
$tmp->setcveVictimaDeViolenciaDeGenero($victimadeviolenciadegeneroDto->getcveVictimaDeViolenciaDeGenero());
$tmp = $this->selectVictimadeviolenciadegenero($tmp,"",$this->_proveedor);
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
public function deleteVictimadeviolenciadegenero($victimadeviolenciadegeneroDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblvictimadeviolenciadegenero  WHERE cveVictimaDeViolenciaDeGenero='".$victimadeviolenciadegeneroDto->getcveVictimaDeViolenciaDeGenero()."'";
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
public function selectVictimadeviolenciadegenero($victimadeviolenciadegeneroDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveVictimaDeViolenciaDeGenero,desVictimaDeViolenciaDeGenero,activo,fechaRegistro,fechaActualizacion FROM tblvictimadeviolenciadegenero ";
if(($victimadeviolenciadegeneroDto->getcveVictimaDeViolenciaDeGenero()!="") ||($victimadeviolenciadegeneroDto->getdesVictimaDeViolenciaDeGenero()!="") ||($victimadeviolenciadegeneroDto->getactivo()!="") ||($victimadeviolenciadegeneroDto->getfechaRegistro()!="") ||($victimadeviolenciadegeneroDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($victimadeviolenciadegeneroDto->getcveVictimaDeViolenciaDeGenero()!=""){
$sql.="cveVictimaDeViolenciaDeGenero='".$victimadeviolenciadegeneroDto->getCveVictimaDeViolenciaDeGenero()."'";
if(($victimadeviolenciadegeneroDto->getDesVictimaDeViolenciaDeGenero()!="") ||($victimadeviolenciadegeneroDto->getActivo()!="") ||($victimadeviolenciadegeneroDto->getFechaRegistro()!="") ||($victimadeviolenciadegeneroDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($victimadeviolenciadegeneroDto->getdesVictimaDeViolenciaDeGenero()!=""){
$sql.="desVictimaDeViolenciaDeGenero='".$victimadeviolenciadegeneroDto->getDesVictimaDeViolenciaDeGenero()."'";
if(($victimadeviolenciadegeneroDto->getActivo()!="") ||($victimadeviolenciadegeneroDto->getFechaRegistro()!="") ||($victimadeviolenciadegeneroDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($victimadeviolenciadegeneroDto->getactivo()!=""){
$sql.="activo='".$victimadeviolenciadegeneroDto->getActivo()."'";
if(($victimadeviolenciadegeneroDto->getFechaRegistro()!="") ||($victimadeviolenciadegeneroDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($victimadeviolenciadegeneroDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$victimadeviolenciadegeneroDto->getFechaRegistro()."'";
if(($victimadeviolenciadegeneroDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($victimadeviolenciadegeneroDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$victimadeviolenciadegeneroDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new VictimadeviolenciadegeneroDTO();
$tmp[$contador]->setCveVictimaDeViolenciaDeGenero($row["cveVictimaDeViolenciaDeGenero"]);
$tmp[$contador]->setDesVictimaDeViolenciaDeGenero($row["desVictimaDeViolenciaDeGenero"]);
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