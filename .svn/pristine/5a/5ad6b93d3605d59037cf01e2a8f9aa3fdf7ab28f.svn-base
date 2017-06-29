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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/homicidiosdolosos/HomicidiosdolososDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class HomicidiosdolososDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertHomicidiosdolosos($homicidiosdolososDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblhomicidiosdolosos(";
if($homicidiosdolososDto->getcveHomicidioDoloso()!=""){
$sql.="cveHomicidioDoloso";
if(($homicidiosdolososDto->getDesHomicidioDoloso()!="") ||($homicidiosdolososDto->getActivo()!="") ){
$sql.=",";
}
}
if($homicidiosdolososDto->getdesHomicidioDoloso()!=""){
$sql.="desHomicidioDoloso";
if(($homicidiosdolososDto->getActivo()!="") ){
$sql.=",";
}
}
if($homicidiosdolososDto->getactivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($homicidiosdolososDto->getcveHomicidioDoloso()!=""){
$sql.="'".$homicidiosdolososDto->getcveHomicidioDoloso()."'";
if(($homicidiosdolososDto->getDesHomicidioDoloso()!="") ||($homicidiosdolososDto->getActivo()!="") ){
$sql.=",";
}
}
if($homicidiosdolososDto->getdesHomicidioDoloso()!=""){
$sql.="'".$homicidiosdolososDto->getdesHomicidioDoloso()."'";
if(($homicidiosdolososDto->getActivo()!="") ){
$sql.=",";
}
}
if($homicidiosdolososDto->getactivo()!=""){
$sql.="'".$homicidiosdolososDto->getactivo()."'";
}
if($homicidiosdolososDto->getfechaRegistro()!=""){
}
if($homicidiosdolososDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new HomicidiosdolososDTO();
$tmp->setcveHomicidioDoloso($this->_proveedor->lastID());
$tmp = $this->selectHomicidiosdolosos($tmp,"",$this->_proveedor);
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
public function updateHomicidiosdolosos($homicidiosdolososDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblhomicidiosdolosos SET ";
if($homicidiosdolososDto->getcveHomicidioDoloso()!=""){
$sql.="cveHomicidioDoloso='".$homicidiosdolososDto->getcveHomicidioDoloso()."'";
if(($homicidiosdolososDto->getDesHomicidioDoloso()!="") ||($homicidiosdolososDto->getActivo()!="") ||($homicidiosdolososDto->getFechaRegistro()!="") ||($homicidiosdolososDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($homicidiosdolososDto->getdesHomicidioDoloso()!=""){
$sql.="desHomicidioDoloso='".$homicidiosdolososDto->getdesHomicidioDoloso()."'";
if(($homicidiosdolososDto->getActivo()!="") ||($homicidiosdolososDto->getFechaRegistro()!="") ||($homicidiosdolososDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($homicidiosdolososDto->getactivo()!=""){
$sql.="activo='".$homicidiosdolososDto->getactivo()."'";
if(($homicidiosdolososDto->getFechaRegistro()!="") ||($homicidiosdolososDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($homicidiosdolososDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$homicidiosdolososDto->getfechaRegistro()."'";
if(($homicidiosdolososDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($homicidiosdolososDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$homicidiosdolososDto->getfechaActualizacion()."'";
}
$sql.=" WHERE cveHomicidioDoloso='".$homicidiosdolososDto->getcveHomicidioDoloso()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new HomicidiosdolososDTO();
$tmp->setcveHomicidioDoloso($homicidiosdolososDto->getcveHomicidioDoloso());
$tmp = $this->selectHomicidiosdolosos($tmp,"",$this->_proveedor);
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
public function deleteHomicidiosdolosos($homicidiosdolososDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblhomicidiosdolosos  WHERE cveHomicidioDoloso='".$homicidiosdolososDto->getcveHomicidioDoloso()."'";
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
public function selectHomicidiosdolosos($homicidiosdolososDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveHomicidioDoloso,desHomicidioDoloso,activo,fechaRegistro,fechaActualizacion FROM tblhomicidiosdolosos ";
if(($homicidiosdolososDto->getcveHomicidioDoloso()!="") ||($homicidiosdolososDto->getdesHomicidioDoloso()!="") ||($homicidiosdolososDto->getactivo()!="") ||($homicidiosdolososDto->getfechaRegistro()!="") ||($homicidiosdolososDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($homicidiosdolososDto->getcveHomicidioDoloso()!=""){
$sql.="cveHomicidioDoloso='".$homicidiosdolososDto->getCveHomicidioDoloso()."'";
if(($homicidiosdolososDto->getDesHomicidioDoloso()!="") ||($homicidiosdolososDto->getActivo()!="") ||($homicidiosdolososDto->getFechaRegistro()!="") ||($homicidiosdolososDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($homicidiosdolososDto->getdesHomicidioDoloso()!=""){
$sql.="desHomicidioDoloso='".$homicidiosdolososDto->getDesHomicidioDoloso()."'";
if(($homicidiosdolososDto->getActivo()!="") ||($homicidiosdolososDto->getFechaRegistro()!="") ||($homicidiosdolososDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($homicidiosdolososDto->getactivo()!=""){
$sql.="activo='".$homicidiosdolososDto->getActivo()."'";
if(($homicidiosdolososDto->getFechaRegistro()!="") ||($homicidiosdolososDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($homicidiosdolososDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$homicidiosdolososDto->getFechaRegistro()."'";
if(($homicidiosdolososDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($homicidiosdolososDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$homicidiosdolososDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new HomicidiosdolososDTO();
$tmp[$contador]->setCveHomicidioDoloso($row["cveHomicidioDoloso"]);
$tmp[$contador]->setDesHomicidioDoloso($row["desHomicidioDoloso"]);
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