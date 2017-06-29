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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/meses/MesesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class MesesDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertMeses($mesesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblmeses(";
if($mesesDto->getcveMes()!=""){
$sql.="cveMes";
if(($mesesDto->getDesMes()!="") ){
$sql.=",";
}
}
if($mesesDto->getdesMes()!=""){
$sql.="desMes";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($mesesDto->getcveMes()!=""){
$sql.="'".$mesesDto->getcveMes()."'";
if(($mesesDto->getDesMes()!="") ){
$sql.=",";
}
}
if($mesesDto->getdesMes()!=""){
$sql.="'".$mesesDto->getdesMes()."'";
}
if($mesesDto->getfechaRegistro()!=""){
}
if($mesesDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new MesesDTO();
$tmp->setcveMes($this->_proveedor->lastID());
$tmp = $this->selectMeses($tmp,"",$this->_proveedor);
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
public function updateMeses($mesesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblmeses SET ";
if($mesesDto->getcveMes()!=""){
$sql.="cveMes='".$mesesDto->getcveMes()."'";
if(($mesesDto->getDesMes()!="") ||($mesesDto->getFechaRegistro()!="") ||($mesesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($mesesDto->getdesMes()!=""){
$sql.="desMes='".$mesesDto->getdesMes()."'";
if(($mesesDto->getFechaRegistro()!="") ||($mesesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($mesesDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$mesesDto->getfechaRegistro()."'";
if(($mesesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($mesesDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$mesesDto->getfechaActualizacion()."'";
}
$sql.=" WHERE cveMes='".$mesesDto->getcveMes()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new MesesDTO();
$tmp->setcveMes($mesesDto->getcveMes());
$tmp = $this->selectMeses($tmp,"",$this->_proveedor);
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
public function deleteMeses($mesesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblmeses  WHERE cveMes='".$mesesDto->getcveMes()."'";
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
public function selectMeses($mesesDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveMes,desMes,fechaRegistro,fechaActualizacion FROM tblmeses ";
if(($mesesDto->getcveMes()!="") ||($mesesDto->getdesMes()!="") ||($mesesDto->getfechaRegistro()!="") ||($mesesDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($mesesDto->getcveMes()!=""){
$sql.="cveMes='".$mesesDto->getCveMes()."'";
if(($mesesDto->getDesMes()!="") ||($mesesDto->getFechaRegistro()!="") ||($mesesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($mesesDto->getdesMes()!=""){
$sql.="desMes='".$mesesDto->getDesMes()."'";
if(($mesesDto->getFechaRegistro()!="") ||($mesesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($mesesDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$mesesDto->getFechaRegistro()."'";
if(($mesesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($mesesDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$mesesDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new MesesDTO();
$tmp[$contador]->setCveMes($row["cveMes"]);
$tmp[$contador]->setDesMes($row["desMes"]);
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