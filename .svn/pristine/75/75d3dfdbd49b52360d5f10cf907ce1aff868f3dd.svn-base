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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/delitosexhortos/DelitosexhortosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class DelitosexhortosDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertDelitosexhortos($delitosexhortosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tbldelitosexhortos(";
if($delitosexhortosDto->getIdDelitoExhorto()!=""){
$sql.="idDelitoExhorto";
if(($delitosexhortosDto->getIdExhorto()!="") ||($delitosexhortosDto->getCveDelito()!="") ||($delitosexhortosDto->getActivo()!="") ){
$sql.=",";
}
}
if($delitosexhortosDto->getIdExhorto()!=""){
$sql.="idExhorto";
if(($delitosexhortosDto->getCveDelito()!="") ||($delitosexhortosDto->getActivo()!="") ){
$sql.=",";
}
}
if($delitosexhortosDto->getCveDelito()!=""){
$sql.="cveDelito";
if(($delitosexhortosDto->getActivo()!="") ){
$sql.=",";
}
}
if($delitosexhortosDto->getActivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($delitosexhortosDto->getIdDelitoExhorto()!=""){
$sql.="'".$delitosexhortosDto->getIdDelitoExhorto()."'";
if(($delitosexhortosDto->getIdExhorto()!="") ||($delitosexhortosDto->getCveDelito()!="") ||($delitosexhortosDto->getActivo()!="") ){
$sql.=",";
}
}
if($delitosexhortosDto->getIdExhorto()!=""){
$sql.="'".$delitosexhortosDto->getIdExhorto()."'";
if(($delitosexhortosDto->getCveDelito()!="") ||($delitosexhortosDto->getActivo()!="") ){
$sql.=",";
}
}
if($delitosexhortosDto->getCveDelito()!=""){
$sql.="'".$delitosexhortosDto->getCveDelito()."'";
if(($delitosexhortosDto->getActivo()!="") ){
$sql.=",";
}
}
if($delitosexhortosDto->getActivo()!=""){
$sql.="'".$delitosexhortosDto->getActivo()."'";
}
if($delitosexhortosDto->getFechaRegistro()!=""){
}
if($delitosexhortosDto->getFechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new DelitosexhortosDTO();
$tmp->setidDelitoExhorto($this->_proveedor->lastID());
$tmp = $this->selectDelitosexhortos($tmp,"",$this->_proveedor);
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
public function updateDelitosexhortos($delitosexhortosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tbldelitosexhortos SET ";
if($delitosexhortosDto->getIdDelitoExhorto()!=""){
$sql.="idDelitoExhorto='".$delitosexhortosDto->getIdDelitoExhorto()."'";
if(($delitosexhortosDto->getIdExhorto()!="") ||($delitosexhortosDto->getCveDelito()!="") ||($delitosexhortosDto->getActivo()!="") ||($delitosexhortosDto->getFechaRegistro()!="") ||($delitosexhortosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($delitosexhortosDto->getIdExhorto()!=""){
$sql.="idExhorto='".$delitosexhortosDto->getIdExhorto()."'";
if(($delitosexhortosDto->getCveDelito()!="") ||($delitosexhortosDto->getActivo()!="") ||($delitosexhortosDto->getFechaRegistro()!="") ||($delitosexhortosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($delitosexhortosDto->getCveDelito()!=""){
$sql.="cveDelito='".$delitosexhortosDto->getCveDelito()."'";
if(($delitosexhortosDto->getActivo()!="") ||($delitosexhortosDto->getFechaRegistro()!="") ||($delitosexhortosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($delitosexhortosDto->getActivo()!=""){
$sql.="activo='".$delitosexhortosDto->getActivo()."'";
if(($delitosexhortosDto->getFechaRegistro()!="") ||($delitosexhortosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($delitosexhortosDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$delitosexhortosDto->getFechaRegistro()."'";
if(($delitosexhortosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($delitosexhortosDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$delitosexhortosDto->getFechaActualizacion()."'";
}
$sql.=" WHERE idDelitoExhorto='".$delitosexhortosDto->getIdDelitoExhorto()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new DelitosexhortosDTO();
$tmp->setidDelitoExhorto($delitosexhortosDto->getIdDelitoExhorto());
$tmp = $this->selectDelitosexhortos($tmp,"",$this->_proveedor);
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
public function deleteDelitosexhortos($delitosexhortosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tbldelitosexhortos  WHERE idDelitoExhorto='".$delitosexhortosDto->getIdDelitoExhorto()."'";
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
public function selectDelitosexhortos($delitosexhortosDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idDelitoExhorto,idExhorto,cveDelito,activo,fechaRegistro,fechaActualizacion FROM tbldelitosexhortos ";
if(($delitosexhortosDto->getIdDelitoExhorto()!="") ||($delitosexhortosDto->getIdExhorto()!="") ||($delitosexhortosDto->getCveDelito()!="") ||($delitosexhortosDto->getActivo()!="") ||($delitosexhortosDto->getFechaRegistro()!="") ||($delitosexhortosDto->getFechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($delitosexhortosDto->getIdDelitoExhorto()!=""){
$sql.="idDelitoExhorto='".$delitosexhortosDto->getIdDelitoExhorto()."'";
if(($delitosexhortosDto->getIdExhorto()!="") ||($delitosexhortosDto->getCveDelito()!="") ||($delitosexhortosDto->getActivo()!="") ||($delitosexhortosDto->getFechaRegistro()!="") ||($delitosexhortosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($delitosexhortosDto->getIdExhorto()!=""){
$sql.="idExhorto='".$delitosexhortosDto->getIdExhorto()."'";
if(($delitosexhortosDto->getCveDelito()!="") ||($delitosexhortosDto->getActivo()!="") ||($delitosexhortosDto->getFechaRegistro()!="") ||($delitosexhortosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($delitosexhortosDto->getCveDelito()!=""){
$sql.="cveDelito='".$delitosexhortosDto->getCveDelito()."'";
if(($delitosexhortosDto->getActivo()!="") ||($delitosexhortosDto->getFechaRegistro()!="") ||($delitosexhortosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($delitosexhortosDto->getActivo()!=""){
$sql.="activo='".$delitosexhortosDto->getActivo()."'";
if(($delitosexhortosDto->getFechaRegistro()!="") ||($delitosexhortosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($delitosexhortosDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$delitosexhortosDto->getFechaRegistro()."'";
if(($delitosexhortosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($delitosexhortosDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$delitosexhortosDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new DelitosexhortosDTO();
$tmp[$contador]->setIdDelitoExhorto($row["idDelitoExhorto"]);
$tmp[$contador]->setIdExhorto($row["idExhorto"]);
$tmp[$contador]->setCveDelito($row["cveDelito"]);
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