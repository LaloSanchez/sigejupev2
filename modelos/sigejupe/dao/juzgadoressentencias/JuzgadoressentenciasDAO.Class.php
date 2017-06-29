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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/juzgadoressentencias/JuzgadoressentenciasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class JuzgadoressentenciasDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertJuzgadoressentencias($juzgadoressentenciasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tbljuzgadoressentencias(";
if($juzgadoressentenciasDto->getIdJuzgadorSentencia()!=""){
$sql.="idJuzgadorSentencia";
if(($juzgadoressentenciasDto->getIdActuacion()!="") ||($juzgadoressentenciasDto->getIdJuzgador()!="") ||($juzgadoressentenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($juzgadoressentenciasDto->getIdActuacion()!=""){
$sql.="idActuacion";
if(($juzgadoressentenciasDto->getIdJuzgador()!="") ||($juzgadoressentenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($juzgadoressentenciasDto->getIdJuzgador()!=""){
$sql.="idJuzgador";
if(($juzgadoressentenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($juzgadoressentenciasDto->getActivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($juzgadoressentenciasDto->getIdJuzgadorSentencia()!=""){
$sql.="'".$juzgadoressentenciasDto->getIdJuzgadorSentencia()."'";
if(($juzgadoressentenciasDto->getIdActuacion()!="") ||($juzgadoressentenciasDto->getIdJuzgador()!="") ||($juzgadoressentenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($juzgadoressentenciasDto->getIdActuacion()!=""){
$sql.="'".$juzgadoressentenciasDto->getIdActuacion()."'";
if(($juzgadoressentenciasDto->getIdJuzgador()!="") ||($juzgadoressentenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($juzgadoressentenciasDto->getIdJuzgador()!=""){
$sql.="'".$juzgadoressentenciasDto->getIdJuzgador()."'";
if(($juzgadoressentenciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($juzgadoressentenciasDto->getActivo()!=""){
$sql.="'".$juzgadoressentenciasDto->getActivo()."'";
}
if($juzgadoressentenciasDto->getFechaRegistro()!=""){
}
if($juzgadoressentenciasDto->getFechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new JuzgadoressentenciasDTO();
$tmp->setidJuzgadorSentencia($this->_proveedor->lastID());
$tmp = $this->selectJuzgadoressentencias($tmp,"",$this->_proveedor);
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
public function updateJuzgadoressentencias($juzgadoressentenciasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tbljuzgadoressentencias SET ";
if($juzgadoressentenciasDto->getIdJuzgadorSentencia()!=""){
$sql.="idJuzgadorSentencia='".$juzgadoressentenciasDto->getIdJuzgadorSentencia()."'";
if(($juzgadoressentenciasDto->getIdActuacion()!="") ||($juzgadoressentenciasDto->getIdJuzgador()!="") ||($juzgadoressentenciasDto->getActivo()!="") ||($juzgadoressentenciasDto->getFechaRegistro()!="") ||($juzgadoressentenciasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($juzgadoressentenciasDto->getIdActuacion()!=""){
$sql.="idActuacion='".$juzgadoressentenciasDto->getIdActuacion()."'";
if(($juzgadoressentenciasDto->getIdJuzgador()!="") ||($juzgadoressentenciasDto->getActivo()!="") ||($juzgadoressentenciasDto->getFechaRegistro()!="") ||($juzgadoressentenciasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($juzgadoressentenciasDto->getIdJuzgador()!=""){
$sql.="idJuzgador='".$juzgadoressentenciasDto->getIdJuzgador()."'";
if(($juzgadoressentenciasDto->getActivo()!="") ||($juzgadoressentenciasDto->getFechaRegistro()!="") ||($juzgadoressentenciasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($juzgadoressentenciasDto->getActivo()!=""){
$sql.="activo='".$juzgadoressentenciasDto->getActivo()."'";
if(($juzgadoressentenciasDto->getFechaRegistro()!="") ||($juzgadoressentenciasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($juzgadoressentenciasDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$juzgadoressentenciasDto->getFechaRegistro()."'";
if(($juzgadoressentenciasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($juzgadoressentenciasDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$juzgadoressentenciasDto->getFechaActualizacion()."'";
}
$sql.=" WHERE idJuzgadorSentencia='".$juzgadoressentenciasDto->getIdJuzgadorSentencia()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new JuzgadoressentenciasDTO();
$tmp->setidJuzgadorSentencia($juzgadoressentenciasDto->getIdJuzgadorSentencia());
$tmp = $this->selectJuzgadoressentencias($tmp,"",$this->_proveedor);
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
public function deleteJuzgadoressentencias($juzgadoressentenciasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tbljuzgadoressentencias  WHERE idJuzgadorSentencia='".$juzgadoressentenciasDto->getIdJuzgadorSentencia()."'";
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
public function selectJuzgadoressentencias($juzgadoressentenciasDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idJuzgadorSentencia,idActuacion,idJuzgador,activo,fechaRegistro,fechaActualizacion FROM tbljuzgadoressentencias ";
if(($juzgadoressentenciasDto->getIdJuzgadorSentencia()!="") ||($juzgadoressentenciasDto->getIdActuacion()!="") ||($juzgadoressentenciasDto->getIdJuzgador()!="") ||($juzgadoressentenciasDto->getActivo()!="") ||($juzgadoressentenciasDto->getFechaRegistro()!="") ||($juzgadoressentenciasDto->getFechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($juzgadoressentenciasDto->getIdJuzgadorSentencia()!=""){
$sql.="idJuzgadorSentencia='".$juzgadoressentenciasDto->getIdJuzgadorSentencia()."'";
if(($juzgadoressentenciasDto->getIdActuacion()!="") ||($juzgadoressentenciasDto->getIdJuzgador()!="") ||($juzgadoressentenciasDto->getActivo()!="") ||($juzgadoressentenciasDto->getFechaRegistro()!="") ||($juzgadoressentenciasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($juzgadoressentenciasDto->getIdActuacion()!=""){
$sql.="idActuacion='".$juzgadoressentenciasDto->getIdActuacion()."'";
if(($juzgadoressentenciasDto->getIdJuzgador()!="") ||($juzgadoressentenciasDto->getActivo()!="") ||($juzgadoressentenciasDto->getFechaRegistro()!="") ||($juzgadoressentenciasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($juzgadoressentenciasDto->getIdJuzgador()!=""){
$sql.="idJuzgador='".$juzgadoressentenciasDto->getIdJuzgador()."'";
if(($juzgadoressentenciasDto->getActivo()!="") ||($juzgadoressentenciasDto->getFechaRegistro()!="") ||($juzgadoressentenciasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($juzgadoressentenciasDto->getActivo()!=""){
$sql.="activo='".$juzgadoressentenciasDto->getActivo()."'";
if(($juzgadoressentenciasDto->getFechaRegistro()!="") ||($juzgadoressentenciasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($juzgadoressentenciasDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$juzgadoressentenciasDto->getFechaRegistro()."'";
if(($juzgadoressentenciasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($juzgadoressentenciasDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$juzgadoressentenciasDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new JuzgadoressentenciasDTO();
$tmp[$contador]->setIdJuzgadorSentencia($row["idJuzgadorSentencia"]);
$tmp[$contador]->setIdActuacion($row["idActuacion"]);
$tmp[$contador]->setIdJuzgador($row["idJuzgador"]);
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