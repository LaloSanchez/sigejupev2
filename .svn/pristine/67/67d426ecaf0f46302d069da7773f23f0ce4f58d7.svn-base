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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/terminaciones/TerminacionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class TerminacionesDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertTerminaciones($terminacionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblterminaciones(";
if($terminacionesDto->getCveTerminacion()!=""){
$sql.="cveTerminacion";
if(($terminacionesDto->getDesTerminacion()!="") ||($terminacionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($terminacionesDto->getDesTerminacion()!=""){
$sql.="desTerminacion";
if(($terminacionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($terminacionesDto->getActivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($terminacionesDto->getCveTerminacion()!=""){
$sql.="'".$terminacionesDto->getCveTerminacion()."'";
if(($terminacionesDto->getDesTerminacion()!="") ||($terminacionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($terminacionesDto->getDesTerminacion()!=""){
$sql.="'".$terminacionesDto->getDesTerminacion()."'";
if(($terminacionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($terminacionesDto->getActivo()!=""){
$sql.="'".$terminacionesDto->getActivo()."'";
}
if($terminacionesDto->getFechaRegistro()!=""){
}
if($terminacionesDto->getFechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TerminacionesDTO();
$tmp->setcveTerminacion($this->_proveedor->lastID());
$tmp = $this->selectTerminaciones($tmp,"",$this->_proveedor);
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
public function updateTerminaciones($terminacionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblterminaciones SET ";
if($terminacionesDto->getCveTerminacion()!=""){
$sql.="cveTerminacion='".$terminacionesDto->getCveTerminacion()."'";
if(($terminacionesDto->getDesTerminacion()!="") ||($terminacionesDto->getActivo()!="") ||($terminacionesDto->getFechaRegistro()!="") ||($terminacionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($terminacionesDto->getDesTerminacion()!=""){
$sql.="desTerminacion='".$terminacionesDto->getDesTerminacion()."'";
if(($terminacionesDto->getActivo()!="") ||($terminacionesDto->getFechaRegistro()!="") ||($terminacionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($terminacionesDto->getActivo()!=""){
$sql.="activo='".$terminacionesDto->getActivo()."'";
if(($terminacionesDto->getFechaRegistro()!="") ||($terminacionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($terminacionesDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$terminacionesDto->getFechaRegistro()."'";
if(($terminacionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($terminacionesDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$terminacionesDto->getFechaActualizacion()."'";
}
$sql.=" WHERE cveTerminacion='".$terminacionesDto->getCveTerminacion()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TerminacionesDTO();
$tmp->setcveTerminacion($terminacionesDto->getCveTerminacion());
$tmp = $this->selectTerminaciones($tmp,"",$this->_proveedor);
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
public function deleteTerminaciones($terminacionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblterminaciones  WHERE cveTerminacion='".$terminacionesDto->getCveTerminacion()."'";
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
public function selectTerminaciones($terminacionesDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveTerminacion,desTerminacion,activo,fechaRegistro,fechaActualizacion FROM tblterminaciones ";
if(($terminacionesDto->getCveTerminacion()!="") ||($terminacionesDto->getDesTerminacion()!="") ||($terminacionesDto->getActivo()!="") ||($terminacionesDto->getFechaRegistro()!="") ||($terminacionesDto->getFechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($terminacionesDto->getCveTerminacion()!=""){
$sql.="cveTerminacion='".$terminacionesDto->getCveTerminacion()."'";
if(($terminacionesDto->getDesTerminacion()!="") ||($terminacionesDto->getActivo()!="") ||($terminacionesDto->getFechaRegistro()!="") ||($terminacionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($terminacionesDto->getDesTerminacion()!=""){
$sql.="desTerminacion='".$terminacionesDto->getDesTerminacion()."'";
if(($terminacionesDto->getActivo()!="") ||($terminacionesDto->getFechaRegistro()!="") ||($terminacionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($terminacionesDto->getActivo()!=""){
$sql.="activo='".$terminacionesDto->getActivo()."'";
if(($terminacionesDto->getFechaRegistro()!="") ||($terminacionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($terminacionesDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$terminacionesDto->getFechaRegistro()."'";
if(($terminacionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($terminacionesDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$terminacionesDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new TerminacionesDTO();
$tmp[$contador]->setCveTerminacion($row["cveTerminacion"]);
$tmp[$contador]->setDesTerminacion($row["desTerminacion"]);
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