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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/juzgadoresapelacateos/JuzgadoresapelacateosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class JuzgadoresapelacateosDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertJuzgadoresapelacateos($juzgadoresapelacateosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tbljuzgadoresapelacateos(";
if($juzgadoresapelacateosDto->getIdJuzgadorApelaCateo()!=""){
$sql.="idJuzgadorApelaCateo";
if(($juzgadoresapelacateosDto->getIdApelacionCateo()!="") ||($juzgadoresapelacateosDto->getIdJuzgador()!="") ||($juzgadoresapelacateosDto->getActivo()!="") ){
$sql.=",";
}
}
if($juzgadoresapelacateosDto->getIdApelacionCateo()!=""){
$sql.="idApelacionCateo";
if(($juzgadoresapelacateosDto->getIdJuzgador()!="") ||($juzgadoresapelacateosDto->getActivo()!="") ){
$sql.=",";
}
}
if($juzgadoresapelacateosDto->getIdJuzgador()!=""){
$sql.="idJuzgador";
if(($juzgadoresapelacateosDto->getActivo()!="") ){
$sql.=",";
}
}
if($juzgadoresapelacateosDto->getActivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($juzgadoresapelacateosDto->getIdJuzgadorApelaCateo()!=""){
$sql.="'".$juzgadoresapelacateosDto->getIdJuzgadorApelaCateo()."'";
if(($juzgadoresapelacateosDto->getIdApelacionCateo()!="") ||($juzgadoresapelacateosDto->getIdJuzgador()!="") ||($juzgadoresapelacateosDto->getActivo()!="") ){
$sql.=",";
}
}
if($juzgadoresapelacateosDto->getIdApelacionCateo()!=""){
$sql.="'".$juzgadoresapelacateosDto->getIdApelacionCateo()."'";
if(($juzgadoresapelacateosDto->getIdJuzgador()!="") ||($juzgadoresapelacateosDto->getActivo()!="") ){
$sql.=",";
}
}
if($juzgadoresapelacateosDto->getIdJuzgador()!=""){
$sql.="'".$juzgadoresapelacateosDto->getIdJuzgador()."'";
if(($juzgadoresapelacateosDto->getActivo()!="") ){
$sql.=",";
}
}
if($juzgadoresapelacateosDto->getActivo()!=""){
$sql.="'".$juzgadoresapelacateosDto->getActivo()."'";
}
if($juzgadoresapelacateosDto->getFechaRegistro()!=""){
}
if($juzgadoresapelacateosDto->getFechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new JuzgadoresapelacateosDTO();
$tmp->setidJuzgadorApelaCateo($this->_proveedor->lastID());
$tmp = $this->selectJuzgadoresapelacateos($tmp,"",$this->_proveedor);
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
public function updateJuzgadoresapelacateos($juzgadoresapelacateosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tbljuzgadoresapelacateos SET ";
if($juzgadoresapelacateosDto->getIdJuzgadorApelaCateo()!=""){
$sql.="idJuzgadorApelaCateo='".$juzgadoresapelacateosDto->getIdJuzgadorApelaCateo()."'";
if(($juzgadoresapelacateosDto->getIdApelacionCateo()!="") ||($juzgadoresapelacateosDto->getIdJuzgador()!="") ||($juzgadoresapelacateosDto->getActivo()!="") ||($juzgadoresapelacateosDto->getFechaRegistro()!="") ||($juzgadoresapelacateosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($juzgadoresapelacateosDto->getIdApelacionCateo()!=""){
$sql.="idApelacionCateo='".$juzgadoresapelacateosDto->getIdApelacionCateo()."'";
if(($juzgadoresapelacateosDto->getIdJuzgador()!="") ||($juzgadoresapelacateosDto->getActivo()!="") ||($juzgadoresapelacateosDto->getFechaRegistro()!="") ||($juzgadoresapelacateosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($juzgadoresapelacateosDto->getIdJuzgador()!=""){
$sql.="idJuzgador='".$juzgadoresapelacateosDto->getIdJuzgador()."'";
if(($juzgadoresapelacateosDto->getActivo()!="") ||($juzgadoresapelacateosDto->getFechaRegistro()!="") ||($juzgadoresapelacateosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($juzgadoresapelacateosDto->getActivo()!=""){
$sql.="activo='".$juzgadoresapelacateosDto->getActivo()."'";
if(($juzgadoresapelacateosDto->getFechaRegistro()!="") ||($juzgadoresapelacateosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($juzgadoresapelacateosDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$juzgadoresapelacateosDto->getFechaRegistro()."'";
if(($juzgadoresapelacateosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($juzgadoresapelacateosDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$juzgadoresapelacateosDto->getFechaActualizacion()."'";
}
$sql.=" WHERE idJuzgadorApelaCateo='".$juzgadoresapelacateosDto->getIdJuzgadorApelaCateo()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new JuzgadoresapelacateosDTO();
$tmp->setidJuzgadorApelaCateo($juzgadoresapelacateosDto->getIdJuzgadorApelaCateo());
$tmp = $this->selectJuzgadoresapelacateos($tmp,"",$this->_proveedor);
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
public function deleteJuzgadoresapelacateos($juzgadoresapelacateosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tbljuzgadoresapelacateos  WHERE idJuzgadorApelaCateo='".$juzgadoresapelacateosDto->getIdJuzgadorApelaCateo()."'";
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
public function selectJuzgadoresapelacateos($juzgadoresapelacateosDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idJuzgadorApelaCateo,idApelacionCateo,idJuzgador,activo,fechaRegistro,fechaActualizacion FROM tbljuzgadoresapelacateos ";
if(($juzgadoresapelacateosDto->getIdJuzgadorApelaCateo()!="") ||($juzgadoresapelacateosDto->getIdApelacionCateo()!="") ||($juzgadoresapelacateosDto->getIdJuzgador()!="") ||($juzgadoresapelacateosDto->getActivo()!="") ||($juzgadoresapelacateosDto->getFechaRegistro()!="") ||($juzgadoresapelacateosDto->getFechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($juzgadoresapelacateosDto->getIdJuzgadorApelaCateo()!=""){
$sql.="idJuzgadorApelaCateo='".$juzgadoresapelacateosDto->getIdJuzgadorApelaCateo()."'";
if(($juzgadoresapelacateosDto->getIdApelacionCateo()!="") ||($juzgadoresapelacateosDto->getIdJuzgador()!="") ||($juzgadoresapelacateosDto->getActivo()!="") ||($juzgadoresapelacateosDto->getFechaRegistro()!="") ||($juzgadoresapelacateosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($juzgadoresapelacateosDto->getIdApelacionCateo()!=""){
$sql.="idApelacionCateo='".$juzgadoresapelacateosDto->getIdApelacionCateo()."'";
if(($juzgadoresapelacateosDto->getIdJuzgador()!="") ||($juzgadoresapelacateosDto->getActivo()!="") ||($juzgadoresapelacateosDto->getFechaRegistro()!="") ||($juzgadoresapelacateosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($juzgadoresapelacateosDto->getIdJuzgador()!=""){
$sql.="idJuzgador='".$juzgadoresapelacateosDto->getIdJuzgador()."'";
if(($juzgadoresapelacateosDto->getActivo()!="") ||($juzgadoresapelacateosDto->getFechaRegistro()!="") ||($juzgadoresapelacateosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($juzgadoresapelacateosDto->getActivo()!=""){
$sql.="activo='".$juzgadoresapelacateosDto->getActivo()."'";
if(($juzgadoresapelacateosDto->getFechaRegistro()!="") ||($juzgadoresapelacateosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($juzgadoresapelacateosDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$juzgadoresapelacateosDto->getFechaRegistro()."'";
if(($juzgadoresapelacateosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($juzgadoresapelacateosDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$juzgadoresapelacateosDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new JuzgadoresapelacateosDTO();
$tmp[$contador]->setIdJuzgadorApelaCateo($row["idJuzgadorApelaCateo"]);
$tmp[$contador]->setIdApelacionCateo($row["idApelacionCateo"]);
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