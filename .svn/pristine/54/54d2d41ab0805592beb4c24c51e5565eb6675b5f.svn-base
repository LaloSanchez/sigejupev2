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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/antecedesactuaciones/AntecedesactuacionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class AntecedesactuacionesDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertAntecedesactuaciones($antecedesactuacionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblantecedesactuaciones(";
if($antecedesactuacionesDto->getIdAntecedesActuacion()!=""){
$sql.="idAntecedesActuacion";
if(($antecedesactuacionesDto->getIdActuacionPadre()!="") ||($antecedesactuacionesDto->getIdActuacionHija()!="") ||($antecedesactuacionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($antecedesactuacionesDto->getIdActuacionPadre()!=""){
$sql.="idActuacionPadre";
if(($antecedesactuacionesDto->getIdActuacionHija()!="") ||($antecedesactuacionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($antecedesactuacionesDto->getIdActuacionHija()!=""){
$sql.="idActuacionHija";
if(($antecedesactuacionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($antecedesactuacionesDto->getActivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($antecedesactuacionesDto->getIdAntecedesActuacion()!=""){
$sql.="'".$antecedesactuacionesDto->getIdAntecedesActuacion()."'";
if(($antecedesactuacionesDto->getIdActuacionPadre()!="") ||($antecedesactuacionesDto->getIdActuacionHija()!="") ||($antecedesactuacionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($antecedesactuacionesDto->getIdActuacionPadre()!=""){
$sql.="'".$antecedesactuacionesDto->getIdActuacionPadre()."'";
if(($antecedesactuacionesDto->getIdActuacionHija()!="") ||($antecedesactuacionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($antecedesactuacionesDto->getIdActuacionHija()!=""){
$sql.="'".$antecedesactuacionesDto->getIdActuacionHija()."'";
if(($antecedesactuacionesDto->getActivo()!="") ){
$sql.=",";
}
}
if($antecedesactuacionesDto->getActivo()!=""){
$sql.="'".$antecedesactuacionesDto->getActivo()."'";
}
if($antecedesactuacionesDto->getFechaRegistro()!=""){
}
if($antecedesactuacionesDto->getFechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new AntecedesactuacionesDTO();
$tmp->setidAntecedesActuacion($this->_proveedor->lastID());
$tmp = $this->selectAntecedesactuaciones($tmp,"",$this->_proveedor);
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
public function updateAntecedesactuaciones($antecedesactuacionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblantecedesactuaciones SET ";
if($antecedesactuacionesDto->getIdAntecedesActuacion()!=""){
$sql.="idAntecedesActuacion='".$antecedesactuacionesDto->getIdAntecedesActuacion()."'";
if(($antecedesactuacionesDto->getIdActuacionPadre()!="") ||($antecedesactuacionesDto->getIdActuacionHija()!="") ||($antecedesactuacionesDto->getActivo()!="") ||($antecedesactuacionesDto->getFechaRegistro()!="") ||($antecedesactuacionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($antecedesactuacionesDto->getIdActuacionPadre()!=""){
$sql.="idActuacionPadre='".$antecedesactuacionesDto->getIdActuacionPadre()."'";
if(($antecedesactuacionesDto->getIdActuacionHija()!="") ||($antecedesactuacionesDto->getActivo()!="") ||($antecedesactuacionesDto->getFechaRegistro()!="") ||($antecedesactuacionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($antecedesactuacionesDto->getIdActuacionHija()!=""){
$sql.="idActuacionHija='".$antecedesactuacionesDto->getIdActuacionHija()."'";
if(($antecedesactuacionesDto->getActivo()!="") ||($antecedesactuacionesDto->getFechaRegistro()!="") ||($antecedesactuacionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($antecedesactuacionesDto->getActivo()!=""){
$sql.="activo='".$antecedesactuacionesDto->getActivo()."'";
if(($antecedesactuacionesDto->getFechaRegistro()!="") ||($antecedesactuacionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($antecedesactuacionesDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$antecedesactuacionesDto->getFechaRegistro()."'";
if(($antecedesactuacionesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($antecedesactuacionesDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$antecedesactuacionesDto->getFechaActualizacion()."'";
}
$sql.=" WHERE idAntecedesActuacion='".$antecedesactuacionesDto->getIdAntecedesActuacion()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new AntecedesactuacionesDTO();
$tmp->setidAntecedesActuacion($antecedesactuacionesDto->getIdAntecedesActuacion());
$tmp = $this->selectAntecedesactuaciones($tmp,"",$this->_proveedor);
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
public function deleteAntecedesactuaciones($antecedesactuacionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblantecedesactuaciones  WHERE idAntecedesActuacion='".$antecedesactuacionesDto->getIdAntecedesActuacion()."'";
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
public function selectAntecedesactuaciones($antecedesactuacionesDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idAntecedesActuacion,idActuacionPadre,idActuacionHija,activo,fechaRegistro,fechaActualizacion FROM tblantecedesactuaciones ";
if(($antecedesactuacionesDto->getIdAntecedesActuacion()!="") ||($antecedesactuacionesDto->getIdActuacionPadre()!="") ||($antecedesactuacionesDto->getIdActuacionHija()!="") ||($antecedesactuacionesDto->getActivo()!="") ||($antecedesactuacionesDto->getFechaRegistro()!="") ||($antecedesactuacionesDto->getFechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($antecedesactuacionesDto->getIdAntecedesActuacion()!=""){
$sql.="idAntecedesActuacion='".$antecedesactuacionesDto->getIdAntecedesActuacion()."'";
if(($antecedesactuacionesDto->getIdActuacionPadre()!="") ||($antecedesactuacionesDto->getIdActuacionHija()!="") ||($antecedesactuacionesDto->getActivo()!="") ||($antecedesactuacionesDto->getFechaRegistro()!="") ||($antecedesactuacionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($antecedesactuacionesDto->getIdActuacionPadre()!=""){
$sql.="idActuacionPadre='".$antecedesactuacionesDto->getIdActuacionPadre()."'";
if(($antecedesactuacionesDto->getIdActuacionHija()!="") ||($antecedesactuacionesDto->getActivo()!="") ||($antecedesactuacionesDto->getFechaRegistro()!="") ||($antecedesactuacionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($antecedesactuacionesDto->getIdActuacionHija()!=""){
$sql.="idActuacionHija='".$antecedesactuacionesDto->getIdActuacionHija()."'";
if(($antecedesactuacionesDto->getActivo()!="") ||($antecedesactuacionesDto->getFechaRegistro()!="") ||($antecedesactuacionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($antecedesactuacionesDto->getActivo()!=""){
$sql.="activo='".$antecedesactuacionesDto->getActivo()."'";
if(($antecedesactuacionesDto->getFechaRegistro()!="") ||($antecedesactuacionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($antecedesactuacionesDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$antecedesactuacionesDto->getFechaRegistro()."'";
if(($antecedesactuacionesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($antecedesactuacionesDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$antecedesactuacionesDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new AntecedesactuacionesDTO();
$tmp[$contador]->setIdAntecedesActuacion($row["idAntecedesActuacion"]);
$tmp[$contador]->setIdActuacionPadre($row["idActuacionPadre"]);
$tmp[$contador]->setIdActuacionHija($row["idActuacionHija"]);
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