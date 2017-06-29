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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/quejapromociones/QuejapromocionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class QuejapromocionesDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertQuejapromociones($quejapromocionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblquejapromociones(";
if($quejapromocionesDto->getIdQuejaProm()!=""){
$sql.="idQuejaProm";
if(($quejapromocionesDto->getIdActuacion()!="") ||($quejapromocionesDto->getIdJuzgador()!="") ||($quejapromocionesDto->getAcuerdo()!="") ||($quejapromocionesDto->getFechaAcuerdo()!="") ||($quejapromocionesDto->getResolucion()!="") ||($quejapromocionesDto->getFechaResolucion()!="") ||($quejapromocionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($quejapromocionesDto->getIdActuacion()!=""){
$sql.="idActuacion";
if(($quejapromocionesDto->getIdJuzgador()!="") ||($quejapromocionesDto->getAcuerdo()!="") ||($quejapromocionesDto->getFechaAcuerdo()!="") ||($quejapromocionesDto->getResolucion()!="") ||($quejapromocionesDto->getFechaResolucion()!="") ||($quejapromocionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($quejapromocionesDto->getIdJuzgador()!=""){
$sql.="idJuzgador";
if(($quejapromocionesDto->getAcuerdo()!="") ||($quejapromocionesDto->getFechaAcuerdo()!="") ||($quejapromocionesDto->getResolucion()!="") ||($quejapromocionesDto->getFechaResolucion()!="") ||($quejapromocionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($quejapromocionesDto->getAcuerdo()!=""){
$sql.="acuerdo";
if(($quejapromocionesDto->getFechaAcuerdo()!="") ||($quejapromocionesDto->getResolucion()!="") ||($quejapromocionesDto->getFechaResolucion()!="") ||($quejapromocionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($quejapromocionesDto->getFechaAcuerdo()!=""){
$sql.="fechaAcuerdo";
if(($quejapromocionesDto->getResolucion()!="") ||($quejapromocionesDto->getFechaResolucion()!="") ||($quejapromocionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($quejapromocionesDto->getResolucion()!=""){
$sql.="resolucion";
if(($quejapromocionesDto->getFechaResolucion()!="") ||($quejapromocionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($quejapromocionesDto->getFechaResolucion()!=""){
$sql.="fechaResolucion";
if(($quejapromocionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($quejapromocionesDto->getActivo()!=""){
$sql.="activo";
}
$sql.=") VALUES(";
if($quejapromocionesDto->getIdQuejaProm()!=""){
$sql.="'".$quejapromocionesDto->getIdQuejaProm()."'";
if(($quejapromocionesDto->getIdActuacion()!="") ||($quejapromocionesDto->getIdJuzgador()!="") ||($quejapromocionesDto->getAcuerdo()!="") ||($quejapromocionesDto->getFechaAcuerdo()!="") ||($quejapromocionesDto->getResolucion()!="") ||($quejapromocionesDto->getFechaResolucion()!="") ||($quejapromocionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($quejapromocionesDto->getIdActuacion()!=""){
$sql.="'".$quejapromocionesDto->getIdActuacion()."'";
if(($quejapromocionesDto->getIdJuzgador()!="") ||($quejapromocionesDto->getAcuerdo()!="") ||($quejapromocionesDto->getFechaAcuerdo()!="") ||($quejapromocionesDto->getResolucion()!="") ||($quejapromocionesDto->getFechaResolucion()!="") ||($quejapromocionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($quejapromocionesDto->getIdJuzgador()!=""){
$sql.="'".$quejapromocionesDto->getIdJuzgador()."'";
if(($quejapromocionesDto->getAcuerdo()!="") ||($quejapromocionesDto->getFechaAcuerdo()!="") ||($quejapromocionesDto->getResolucion()!="") ||($quejapromocionesDto->getFechaResolucion()!="") ||($quejapromocionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($quejapromocionesDto->getAcuerdo()!=""){
$sql.="'".$quejapromocionesDto->getAcuerdo()."'";
if(($quejapromocionesDto->getFechaAcuerdo()!="") ||($quejapromocionesDto->getResolucion()!="") ||($quejapromocionesDto->getFechaResolucion()!="") ||($quejapromocionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($quejapromocionesDto->getFechaAcuerdo()!=""){
$sql.="'".$quejapromocionesDto->getFechaAcuerdo()."'";
if(($quejapromocionesDto->getResolucion()!="") ||($quejapromocionesDto->getFechaResolucion()!="") ||($quejapromocionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($quejapromocionesDto->getResolucion()!=""){
$sql.="'".$quejapromocionesDto->getResolucion()."'";
if(($quejapromocionesDto->getFechaResolucion()!="") ||($quejapromocionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($quejapromocionesDto->getFechaResolucion()!=""){
$sql.="'".$quejapromocionesDto->getFechaResolucion()."'";
if(($quejapromocionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($quejapromocionesDto->getActivo()!=""){
$sql.="'".$quejapromocionesDto->getActivo()."'";
}
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new QuejapromocionesDTO();
$tmp->setidQuejaProm($this->_proveedor->lastID());
$tmp = $this->selectQuejapromociones($tmp,"",$this->_proveedor);
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
public function updateQuejapromociones($quejapromocionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblquejapromociones SET ";
if($quejapromocionesDto->getIdQuejaProm()!=""){
$sql.="idQuejaProm='".$quejapromocionesDto->getIdQuejaProm()."'";
if(($quejapromocionesDto->getIdActuacion()!="") ||($quejapromocionesDto->getIdJuzgador()!="") ||($quejapromocionesDto->getAcuerdo()!="") ||($quejapromocionesDto->getFechaAcuerdo()!="") ||($quejapromocionesDto->getResolucion()!="") ||($quejapromocionesDto->getFechaResolucion()!="") ||($quejapromocionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($quejapromocionesDto->getIdActuacion()!=""){
$sql.="idActuacion='".$quejapromocionesDto->getIdActuacion()."'";
if(($quejapromocionesDto->getIdJuzgador()!="") ||($quejapromocionesDto->getAcuerdo()!="") ||($quejapromocionesDto->getFechaAcuerdo()!="") ||($quejapromocionesDto->getResolucion()!="") ||($quejapromocionesDto->getFechaResolucion()!="") ||($quejapromocionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($quejapromocionesDto->getIdJuzgador()!=""){
$sql.="idJuzgador='".$quejapromocionesDto->getIdJuzgador()."'";
if(($quejapromocionesDto->getAcuerdo()!="") ||($quejapromocionesDto->getFechaAcuerdo()!="") ||($quejapromocionesDto->getResolucion()!="") ||($quejapromocionesDto->getFechaResolucion()!="") ||($quejapromocionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($quejapromocionesDto->getAcuerdo()!=""){
$sql.="acuerdo='".$quejapromocionesDto->getAcuerdo()."'";
if(($quejapromocionesDto->getFechaAcuerdo()!="") ||($quejapromocionesDto->getResolucion()!="") ||($quejapromocionesDto->getFechaResolucion()!="") ||($quejapromocionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($quejapromocionesDto->getFechaAcuerdo()!=""){
$sql.="fechaAcuerdo='".$quejapromocionesDto->getFechaAcuerdo()."'";
if(($quejapromocionesDto->getResolucion()!="") ||($quejapromocionesDto->getFechaResolucion()!="") ||($quejapromocionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($quejapromocionesDto->getResolucion()!=""){
$sql.="resolucion='".$quejapromocionesDto->getResolucion()."'";
if(($quejapromocionesDto->getFechaResolucion()!="") ||($quejapromocionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($quejapromocionesDto->getFechaResolucion()!=""){
$sql.="fechaResolucion='".$quejapromocionesDto->getFechaResolucion()."'";
if(($quejapromocionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($quejapromocionesDto->getActivo()!=""){
$sql.="activo='".$quejapromocionesDto->getActivo()."'";
}
$sql.=" WHERE idQuejaProm='".$quejapromocionesDto->getIdQuejaProm()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new QuejapromocionesDTO();
$tmp->setidQuejaProm($quejapromocionesDto->getIdQuejaProm());
$tmp = $this->selectQuejapromociones($tmp,"",$this->_proveedor);
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
public function deleteQuejapromociones($quejapromocionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblquejapromociones  WHERE idQuejaProm='".$quejapromocionesDto->getIdQuejaProm()."'";
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
public function selectQuejapromociones($quejapromocionesDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idQuejaProm,idActuacion,idJuzgador,acuerdo,fechaAcuerdo,resolucion,fechaResolucion,activo FROM tblquejapromociones ";
if(($quejapromocionesDto->getIdQuejaProm()!="") ||($quejapromocionesDto->getIdActuacion()!="") ||($quejapromocionesDto->getIdJuzgador()!="") ||($quejapromocionesDto->getAcuerdo()!="") ||($quejapromocionesDto->getFechaAcuerdo()!="") ||($quejapromocionesDto->getResolucion()!="") ||($quejapromocionesDto->getFechaResolucion()!="") ||($quejapromocionesDto->getActivo()!="") ){
$sql.=" WHERE ";
}
if($quejapromocionesDto->getIdQuejaProm()!=""){
$sql.="idQuejaProm='".$quejapromocionesDto->getIdQuejaProm()."'";
if(($quejapromocionesDto->getIdActuacion()!="") ||($quejapromocionesDto->getIdJuzgador()!="") ||($quejapromocionesDto->getAcuerdo()!="") ||($quejapromocionesDto->getFechaAcuerdo()!="") ||($quejapromocionesDto->getResolucion()!="") ||($quejapromocionesDto->getFechaResolucion()!="") ||($quejapromocionesDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($quejapromocionesDto->getIdActuacion()!=""){
$sql.="idActuacion='".$quejapromocionesDto->getIdActuacion()."'";
if(($quejapromocionesDto->getIdJuzgador()!="") ||($quejapromocionesDto->getAcuerdo()!="") ||($quejapromocionesDto->getFechaAcuerdo()!="") ||($quejapromocionesDto->getResolucion()!="") ||($quejapromocionesDto->getFechaResolucion()!="") ||($quejapromocionesDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($quejapromocionesDto->getIdJuzgador()!=""){
$sql.="idJuzgador='".$quejapromocionesDto->getIdJuzgador()."'";
if(($quejapromocionesDto->getAcuerdo()!="") ||($quejapromocionesDto->getFechaAcuerdo()!="") ||($quejapromocionesDto->getResolucion()!="") ||($quejapromocionesDto->getFechaResolucion()!="") ||($quejapromocionesDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($quejapromocionesDto->getAcuerdo()!=""){
$sql.="acuerdo='".$quejapromocionesDto->getAcuerdo()."'";
if(($quejapromocionesDto->getFechaAcuerdo()!="") ||($quejapromocionesDto->getResolucion()!="") ||($quejapromocionesDto->getFechaResolucion()!="") ||($quejapromocionesDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($quejapromocionesDto->getFechaAcuerdo()!=""){
$sql.="fechaAcuerdo='".$quejapromocionesDto->getFechaAcuerdo()."'";
if(($quejapromocionesDto->getResolucion()!="") ||($quejapromocionesDto->getFechaResolucion()!="") ||($quejapromocionesDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($quejapromocionesDto->getResolucion()!=""){
$sql.="resolucion='".$quejapromocionesDto->getResolucion()."'";
if(($quejapromocionesDto->getFechaResolucion()!="") ||($quejapromocionesDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($quejapromocionesDto->getFechaResolucion()!=""){
$sql.="fechaResolucion='".$quejapromocionesDto->getFechaResolucion()."'";
if(($quejapromocionesDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($quejapromocionesDto->getActivo()!=""){
$sql.="activo='".$quejapromocionesDto->getActivo()."'";
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
$tmp[$contador] = new QuejapromocionesDTO();
$tmp[$contador]->setIdQuejaProm($row["idQuejaProm"]);
$tmp[$contador]->setIdActuacion($row["idActuacion"]);
$tmp[$contador]->setIdJuzgador($row["idJuzgador"]);
$tmp[$contador]->setAcuerdo($row["acuerdo"]);
$tmp[$contador]->setFechaAcuerdo($row["fechaAcuerdo"]);
$tmp[$contador]->setResolucion($row["resolucion"]);
$tmp[$contador]->setFechaResolucion($row["fechaResolucion"]);
$tmp[$contador]->setActivo($row["activo"]);
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