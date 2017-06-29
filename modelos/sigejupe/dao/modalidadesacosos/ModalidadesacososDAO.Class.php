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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/modalidadesacosos/ModalidadesacososDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class ModalidadesacososDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertModalidadesacosos($modalidadesacososDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblmodalidadesacosos(";
if($modalidadesacososDto->getcveModalidadAcoso()!=""){
$sql.="cveModalidadAcoso";
if(($modalidadesacososDto->getDesModalidadAcoso()!="") ||($modalidadesacososDto->getActivo()!="") ){
$sql.=",";
}
}
if($modalidadesacososDto->getdesModalidadAcoso()!=""){
$sql.="desModalidadAcoso";
if(($modalidadesacososDto->getActivo()!="") ){
$sql.=",";
}
}
if($modalidadesacososDto->getactivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($modalidadesacososDto->getcveModalidadAcoso()!=""){
$sql.="'".$modalidadesacososDto->getcveModalidadAcoso()."'";
if(($modalidadesacososDto->getDesModalidadAcoso()!="") ||($modalidadesacososDto->getActivo()!="") ){
$sql.=",";
}
}
if($modalidadesacososDto->getdesModalidadAcoso()!=""){
$sql.="'".$modalidadesacososDto->getdesModalidadAcoso()."'";
if(($modalidadesacososDto->getActivo()!="") ){
$sql.=",";
}
}
if($modalidadesacososDto->getactivo()!=""){
$sql.="'".$modalidadesacososDto->getactivo()."'";
}
if($modalidadesacososDto->getfechaRegistro()!=""){
}
if($modalidadesacososDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new ModalidadesacososDTO();
$tmp->setcveModalidadAcoso($this->_proveedor->lastID());
$tmp = $this->selectModalidadesacosos($tmp,"",$this->_proveedor);
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
public function updateModalidadesacosos($modalidadesacososDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblmodalidadesacosos SET ";
if($modalidadesacososDto->getcveModalidadAcoso()!=""){
$sql.="cveModalidadAcoso='".$modalidadesacososDto->getcveModalidadAcoso()."'";
if(($modalidadesacososDto->getDesModalidadAcoso()!="") ||($modalidadesacososDto->getActivo()!="") ||($modalidadesacososDto->getFechaRegistro()!="") ||($modalidadesacososDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($modalidadesacososDto->getdesModalidadAcoso()!=""){
$sql.="desModalidadAcoso='".$modalidadesacososDto->getdesModalidadAcoso()."'";
if(($modalidadesacososDto->getActivo()!="") ||($modalidadesacososDto->getFechaRegistro()!="") ||($modalidadesacososDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($modalidadesacososDto->getactivo()!=""){
$sql.="activo='".$modalidadesacososDto->getactivo()."'";
if(($modalidadesacososDto->getFechaRegistro()!="") ||($modalidadesacososDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($modalidadesacososDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$modalidadesacososDto->getfechaRegistro()."'";
if(($modalidadesacososDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($modalidadesacososDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$modalidadesacososDto->getfechaActualizacion()."'";
}
$sql.=" WHERE cveModalidadAcoso='".$modalidadesacososDto->getcveModalidadAcoso()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new ModalidadesacososDTO();
$tmp->setcveModalidadAcoso($modalidadesacososDto->getcveModalidadAcoso());
$tmp = $this->selectModalidadesacosos($tmp,"",$this->_proveedor);
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
public function deleteModalidadesacosos($modalidadesacososDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblmodalidadesacosos  WHERE cveModalidadAcoso='".$modalidadesacososDto->getcveModalidadAcoso()."'";
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
public function selectModalidadesacosos($modalidadesacososDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveModalidadAcoso,desModalidadAcoso,activo,fechaRegistro,fechaActualizacion FROM tblmodalidadesacosos ";
if(($modalidadesacososDto->getcveModalidadAcoso()!="") ||($modalidadesacososDto->getdesModalidadAcoso()!="") ||($modalidadesacososDto->getactivo()!="") ||($modalidadesacososDto->getfechaRegistro()!="") ||($modalidadesacososDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($modalidadesacososDto->getcveModalidadAcoso()!=""){
$sql.="cveModalidadAcoso='".$modalidadesacososDto->getCveModalidadAcoso()."'";
if(($modalidadesacososDto->getDesModalidadAcoso()!="") ||($modalidadesacososDto->getActivo()!="") ||($modalidadesacososDto->getFechaRegistro()!="") ||($modalidadesacososDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($modalidadesacososDto->getdesModalidadAcoso()!=""){
$sql.="desModalidadAcoso='".$modalidadesacososDto->getDesModalidadAcoso()."'";
if(($modalidadesacososDto->getActivo()!="") ||($modalidadesacososDto->getFechaRegistro()!="") ||($modalidadesacososDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($modalidadesacososDto->getactivo()!=""){
$sql.="activo='".$modalidadesacososDto->getActivo()."'";
if(($modalidadesacososDto->getFechaRegistro()!="") ||($modalidadesacososDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($modalidadesacososDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$modalidadesacososDto->getFechaRegistro()."'";
if(($modalidadesacososDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($modalidadesacososDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$modalidadesacososDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new ModalidadesacososDTO();
$tmp[$contador]->setCveModalidadAcoso($row["cveModalidadAcoso"]);
$tmp[$contador]->setDesModalidadAcoso($row["desModalidadAcoso"]);
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