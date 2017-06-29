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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/detallesconductas/DetallesconductasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class DetallesconductasDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertDetallesconductas($detallesconductasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tbldetallesconductas(";
if($detallesconductasDto->getcveDetalleConducta()!=""){
$sql.="cveDetalleConducta";
if(($detallesconductasDto->getCveConducta()!="") ||($detallesconductasDto->getDesDetalleConducta()!="") ||($detallesconductasDto->getActivo()!="") ){
$sql.=",";
}
}
if($detallesconductasDto->getcveConducta()!=""){
$sql.="cveConducta";
if(($detallesconductasDto->getDesDetalleConducta()!="") ||($detallesconductasDto->getActivo()!="") ){
$sql.=",";
}
}
if($detallesconductasDto->getdesDetalleConducta()!=""){
$sql.="desDetalleConducta";
if(($detallesconductasDto->getActivo()!="") ){
$sql.=",";
}
}
if($detallesconductasDto->getactivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($detallesconductasDto->getcveDetalleConducta()!=""){
$sql.="'".$detallesconductasDto->getcveDetalleConducta()."'";
if(($detallesconductasDto->getCveConducta()!="") ||($detallesconductasDto->getDesDetalleConducta()!="") ||($detallesconductasDto->getActivo()!="") ){
$sql.=",";
}
}
if($detallesconductasDto->getcveConducta()!=""){
$sql.="'".$detallesconductasDto->getcveConducta()."'";
if(($detallesconductasDto->getDesDetalleConducta()!="") ||($detallesconductasDto->getActivo()!="") ){
$sql.=",";
}
}
if($detallesconductasDto->getdesDetalleConducta()!=""){
$sql.="'".$detallesconductasDto->getdesDetalleConducta()."'";
if(($detallesconductasDto->getActivo()!="") ){
$sql.=",";
}
}
if($detallesconductasDto->getactivo()!=""){
$sql.="'".$detallesconductasDto->getactivo()."'";
}
if($detallesconductasDto->getfechaRegistro()!=""){
}
if($detallesconductasDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new DetallesconductasDTO();
$tmp->setcveDetalleConducta($this->_proveedor->lastID());
$tmp = $this->selectDetallesconductas($tmp,"",$this->_proveedor);
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
public function updateDetallesconductas($detallesconductasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tbldetallesconductas SET ";
if($detallesconductasDto->getcveDetalleConducta()!=""){
$sql.="cveDetalleConducta='".$detallesconductasDto->getcveDetalleConducta()."'";
if(($detallesconductasDto->getCveConducta()!="") ||($detallesconductasDto->getDesDetalleConducta()!="") ||($detallesconductasDto->getActivo()!="") ||($detallesconductasDto->getFechaRegistro()!="") ||($detallesconductasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($detallesconductasDto->getcveConducta()!=""){
$sql.="cveConducta='".$detallesconductasDto->getcveConducta()."'";
if(($detallesconductasDto->getDesDetalleConducta()!="") ||($detallesconductasDto->getActivo()!="") ||($detallesconductasDto->getFechaRegistro()!="") ||($detallesconductasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($detallesconductasDto->getdesDetalleConducta()!=""){
$sql.="desDetalleConducta='".$detallesconductasDto->getdesDetalleConducta()."'";
if(($detallesconductasDto->getActivo()!="") ||($detallesconductasDto->getFechaRegistro()!="") ||($detallesconductasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($detallesconductasDto->getactivo()!=""){
$sql.="activo='".$detallesconductasDto->getactivo()."'";
if(($detallesconductasDto->getFechaRegistro()!="") ||($detallesconductasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($detallesconductasDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$detallesconductasDto->getfechaRegistro()."'";
if(($detallesconductasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($detallesconductasDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$detallesconductasDto->getfechaActualizacion()."'";
}
$sql.=" WHERE cveDetalleConducta='".$detallesconductasDto->getcveDetalleConducta()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new DetallesconductasDTO();
$tmp->setcveDetalleConducta($detallesconductasDto->getcveDetalleConducta());
$tmp = $this->selectDetallesconductas($tmp,"",$this->_proveedor);
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
public function deleteDetallesconductas($detallesconductasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tbldetallesconductas  WHERE cveDetalleConducta='".$detallesconductasDto->getcveDetalleConducta()."'";
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
public function selectDetallesconductas($detallesconductasDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveDetalleConducta,cveConducta,desDetalleConducta,activo,fechaRegistro,fechaActualizacion FROM tbldetallesconductas ";
if(($detallesconductasDto->getcveDetalleConducta()!="") ||($detallesconductasDto->getcveConducta()!="") ||($detallesconductasDto->getdesDetalleConducta()!="") ||($detallesconductasDto->getactivo()!="") ||($detallesconductasDto->getfechaRegistro()!="") ||($detallesconductasDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($detallesconductasDto->getcveDetalleConducta()!=""){
$sql.="cveDetalleConducta='".$detallesconductasDto->getCveDetalleConducta()."'";
if(($detallesconductasDto->getCveConducta()!="") ||($detallesconductasDto->getDesDetalleConducta()!="") ||($detallesconductasDto->getActivo()!="") ||($detallesconductasDto->getFechaRegistro()!="") ||($detallesconductasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($detallesconductasDto->getcveConducta()!=""){
$sql.="cveConducta='".$detallesconductasDto->getCveConducta()."'";
if(($detallesconductasDto->getDesDetalleConducta()!="") ||($detallesconductasDto->getActivo()!="") ||($detallesconductasDto->getFechaRegistro()!="") ||($detallesconductasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($detallesconductasDto->getdesDetalleConducta()!=""){
$sql.="desDetalleConducta='".$detallesconductasDto->getDesDetalleConducta()."'";
if(($detallesconductasDto->getActivo()!="") ||($detallesconductasDto->getFechaRegistro()!="") ||($detallesconductasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($detallesconductasDto->getactivo()!=""){
$sql.="activo='".$detallesconductasDto->getActivo()."'";
if(($detallesconductasDto->getFechaRegistro()!="") ||($detallesconductasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($detallesconductasDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$detallesconductasDto->getFechaRegistro()."'";
if(($detallesconductasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($detallesconductasDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$detallesconductasDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new DetallesconductasDTO();
$tmp[$contador]->setCveDetalleConducta($row["cveDetalleConducta"]);
$tmp[$contador]->setCveConducta($row["cveConducta"]);
$tmp[$contador]->setDesDetalleConducta($row["desDetalleConducta"]);
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