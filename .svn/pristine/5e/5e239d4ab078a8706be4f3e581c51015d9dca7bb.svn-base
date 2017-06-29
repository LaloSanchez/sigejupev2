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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/gradoparticipaciones/GradoparticipacionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class GradoparticipacionesDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertGradoparticipaciones($gradoparticipacionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblgradoparticipaciones(";
if($gradoparticipacionesDto->getcveGradoParticipacion()!=""){
$sql.="cveGradoParticipacion";
if(($gradoparticipacionesDto->getDesGradoParticipacion()!="") ||($gradoparticipacionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($gradoparticipacionesDto->getdesGradoParticipacion()!=""){
$sql.="desGradoParticipacion";
if(($gradoparticipacionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($gradoparticipacionesDto->getactivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($gradoparticipacionesDto->getcveGradoParticipacion()!=""){
$sql.="'".$gradoparticipacionesDto->getcveGradoParticipacion()."'";
if(($gradoparticipacionesDto->getDesGradoParticipacion()!="") ||($gradoparticipacionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($gradoparticipacionesDto->getdesGradoParticipacion()!=""){
$sql.="'".$gradoparticipacionesDto->getdesGradoParticipacion()."'";
if(($gradoparticipacionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($gradoparticipacionesDto->getactivo()!=""){
$sql.="'".$gradoparticipacionesDto->getactivo()."'";
}
if($gradoparticipacionesDto->getfechaRegistro()!=""){
}
if($gradoparticipacionesDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new GradoparticipacionesDTO();
$tmp->setcveGradoParticipacion($this->_proveedor->lastID());
$tmp = $this->selectGradoparticipaciones($tmp,"",$this->_proveedor);
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
public function updateGradoparticipaciones($gradoparticipacionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblgradoparticipaciones SET ";
if($gradoparticipacionesDto->getcveGradoParticipacion()!=""){
$sql.="cveGradoParticipacion='".$gradoparticipacionesDto->getcveGradoParticipacion()."'";
if(($gradoparticipacionesDto->getDesGradoParticipacion()!="") ||($gradoparticipacionesDto->getActivo()!="") ||($gradoparticipacionesDto->getFechaRegistro()!="") ||($gradoparticipacionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($gradoparticipacionesDto->getdesGradoParticipacion()!=""){
$sql.="desGradoParticipacion='".$gradoparticipacionesDto->getdesGradoParticipacion()."'";
if(($gradoparticipacionesDto->getActivo()!="") ||($gradoparticipacionesDto->getFechaRegistro()!="") ||($gradoparticipacionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($gradoparticipacionesDto->getactivo()!=""){
$sql.="activo='".$gradoparticipacionesDto->getactivo()."'";
if(($gradoparticipacionesDto->getFechaRegistro()!="") ||($gradoparticipacionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($gradoparticipacionesDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$gradoparticipacionesDto->getfechaRegistro()."'";
if(($gradoparticipacionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($gradoparticipacionesDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$gradoparticipacionesDto->getfechaActualizacion()."'";
}
$sql.=" WHERE cveGradoParticipacion='".$gradoparticipacionesDto->getcveGradoParticipacion()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new GradoparticipacionesDTO();
$tmp->setcveGradoParticipacion($gradoparticipacionesDto->getcveGradoParticipacion());
$tmp = $this->selectGradoparticipaciones($tmp,"",$this->_proveedor);
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
public function deleteGradoparticipaciones($gradoparticipacionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblgradoparticipaciones  WHERE cveGradoParticipacion='".$gradoparticipacionesDto->getcveGradoParticipacion()."'";
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
public function selectGradoparticipaciones($gradoparticipacionesDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveGradoParticipacion,desGradoParticipacion,activo,fechaRegistro,fechaActualizacion FROM tblgradoparticipaciones ";
if(($gradoparticipacionesDto->getcveGradoParticipacion()!="") ||($gradoparticipacionesDto->getdesGradoParticipacion()!="") ||($gradoparticipacionesDto->getactivo()!="") ||($gradoparticipacionesDto->getfechaRegistro()!="") ||($gradoparticipacionesDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($gradoparticipacionesDto->getcveGradoParticipacion()!=""){
$sql.="cveGradoParticipacion='".$gradoparticipacionesDto->getCveGradoParticipacion()."'";
if(($gradoparticipacionesDto->getDesGradoParticipacion()!="") ||($gradoparticipacionesDto->getActivo()!="") ||($gradoparticipacionesDto->getFechaRegistro()!="") ||($gradoparticipacionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($gradoparticipacionesDto->getdesGradoParticipacion()!=""){
$sql.="desGradoParticipacion='".$gradoparticipacionesDto->getDesGradoParticipacion()."'";
if(($gradoparticipacionesDto->getActivo()!="") ||($gradoparticipacionesDto->getFechaRegistro()!="") ||($gradoparticipacionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($gradoparticipacionesDto->getactivo()!=""){
$sql.="activo='".$gradoparticipacionesDto->getActivo()."'";
if(($gradoparticipacionesDto->getFechaRegistro()!="") ||($gradoparticipacionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($gradoparticipacionesDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$gradoparticipacionesDto->getFechaRegistro()."'";
if(($gradoparticipacionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($gradoparticipacionesDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$gradoparticipacionesDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new GradoparticipacionesDTO();
$tmp[$contador]->setCveGradoParticipacion($row["cveGradoParticipacion"]);
$tmp[$contador]->setDesGradoParticipacion($row["desGradoParticipacion"]);
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