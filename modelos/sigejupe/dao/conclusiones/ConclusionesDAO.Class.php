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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/conclusiones/ConclusionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class ConclusionesDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertConclusiones($conclusionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblconclusiones(";
if($conclusionesDto->getcveConclusion()!=""){
$sql.="cveConclusion";
if(($conclusionesDto->getDesConclusion()!="") ||($conclusionesDto->getJuicio()!="") ||($conclusionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($conclusionesDto->getdesConclusion()!=""){
$sql.="desConclusion";
if(($conclusionesDto->getJuicio()!="") ||($conclusionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($conclusionesDto->getjuicio()!=""){
$sql.="juicio";
if(($conclusionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($conclusionesDto->getactivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($conclusionesDto->getcveConclusion()!=""){
$sql.="'".$conclusionesDto->getcveConclusion()."'";
if(($conclusionesDto->getDesConclusion()!="") ||($conclusionesDto->getJuicio()!="") ||($conclusionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($conclusionesDto->getdesConclusion()!=""){
$sql.="'".$conclusionesDto->getdesConclusion()."'";
if(($conclusionesDto->getJuicio()!="") ||($conclusionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($conclusionesDto->getjuicio()!=""){
$sql.="'".$conclusionesDto->getjuicio()."'";
if(($conclusionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($conclusionesDto->getactivo()!=""){
$sql.="'".$conclusionesDto->getactivo()."'";
}
if($conclusionesDto->getfechaRegistro()!=""){
}
if($conclusionesDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new ConclusionesDTO();
$tmp->setcveConclusion($this->_proveedor->lastID());
$tmp = $this->selectConclusiones($tmp,"",$this->_proveedor);
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
public function updateConclusiones($conclusionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblconclusiones SET ";
if($conclusionesDto->getcveConclusion()!=""){
$sql.="cveConclusion='".$conclusionesDto->getcveConclusion()."'";
if(($conclusionesDto->getDesConclusion()!="") ||($conclusionesDto->getJuicio()!="") ||($conclusionesDto->getActivo()!="") ||($conclusionesDto->getFechaRegistro()!="") ||($conclusionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($conclusionesDto->getdesConclusion()!=""){
$sql.="desConclusion='".$conclusionesDto->getdesConclusion()."'";
if(($conclusionesDto->getJuicio()!="") ||($conclusionesDto->getActivo()!="") ||($conclusionesDto->getFechaRegistro()!="") ||($conclusionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($conclusionesDto->getjuicio()!=""){
$sql.="juicio='".$conclusionesDto->getjuicio()."'";
if(($conclusionesDto->getActivo()!="") ||($conclusionesDto->getFechaRegistro()!="") ||($conclusionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($conclusionesDto->getactivo()!=""){
$sql.="activo='".$conclusionesDto->getactivo()."'";
if(($conclusionesDto->getFechaRegistro()!="") ||($conclusionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($conclusionesDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$conclusionesDto->getfechaRegistro()."'";
if(($conclusionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($conclusionesDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$conclusionesDto->getfechaActualizacion()."'";
}
$sql.=" WHERE cveConclusion='".$conclusionesDto->getcveConclusion()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new ConclusionesDTO();
$tmp->setcveConclusion($conclusionesDto->getcveConclusion());
$tmp = $this->selectConclusiones($tmp,"",$this->_proveedor);
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
public function deleteConclusiones($conclusionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblconclusiones  WHERE cveConclusion='".$conclusionesDto->getcveConclusion()."'";
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
public function selectConclusiones($conclusionesDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveConclusion,desConclusion,juicio,activo,fechaRegistro,fechaActualizacion FROM tblconclusiones ";
if(($conclusionesDto->getcveConclusion()!="") ||($conclusionesDto->getdesConclusion()!="") ||($conclusionesDto->getjuicio()!="") ||($conclusionesDto->getactivo()!="") ||($conclusionesDto->getfechaRegistro()!="") ||($conclusionesDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($conclusionesDto->getcveConclusion()!=""){
$sql.="cveConclusion='".$conclusionesDto->getCveConclusion()."'";
if(($conclusionesDto->getDesConclusion()!="") ||($conclusionesDto->getJuicio()!="") ||($conclusionesDto->getActivo()!="") ||($conclusionesDto->getFechaRegistro()!="") ||($conclusionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($conclusionesDto->getdesConclusion()!=""){
$sql.="desConclusion='".$conclusionesDto->getDesConclusion()."'";
if(($conclusionesDto->getJuicio()!="") ||($conclusionesDto->getActivo()!="") ||($conclusionesDto->getFechaRegistro()!="") ||($conclusionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($conclusionesDto->getjuicio()!=""){
$sql.="juicio='".$conclusionesDto->getJuicio()."'";
if(($conclusionesDto->getActivo()!="") ||($conclusionesDto->getFechaRegistro()!="") ||($conclusionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($conclusionesDto->getactivo()!=""){
$sql.="activo='".$conclusionesDto->getActivo()."'";
if(($conclusionesDto->getFechaRegistro()!="") ||($conclusionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($conclusionesDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$conclusionesDto->getFechaRegistro()."'";
if(($conclusionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($conclusionesDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$conclusionesDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new ConclusionesDTO();
$tmp[$contador]->setCveConclusion($row["cveConclusion"]);
$tmp[$contador]->setDesConclusion($row["desConclusion"]);
$tmp[$contador]->setJuicio($row["juicio"]);
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