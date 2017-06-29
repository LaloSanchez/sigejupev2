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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/instancias/InstanciasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class InstanciasDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertInstancias($instanciasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblinstancias(";
if($instanciasDto->getcveInstancia()!=""){
$sql.="cveInstancia";
if(($instanciasDto->getDesInstancia()!="") ||($instanciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($instanciasDto->getdesInstancia()!=""){
$sql.="desInstancia";
if(($instanciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($instanciasDto->getactivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($instanciasDto->getcveInstancia()!=""){
$sql.="'".$instanciasDto->getcveInstancia()."'";
if(($instanciasDto->getDesInstancia()!="") ||($instanciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($instanciasDto->getdesInstancia()!=""){
$sql.="'".$instanciasDto->getdesInstancia()."'";
if(($instanciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($instanciasDto->getactivo()!=""){
$sql.="'".$instanciasDto->getactivo()."'";
}
if($instanciasDto->getfechaRegistro()!=""){
}
if($instanciasDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new InstanciasDTO();
$tmp->setcveInstancia($this->_proveedor->lastID());
$tmp = $this->selectInstancias($tmp,"",$this->_proveedor);
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
public function updateInstancias($instanciasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblinstancias SET ";
if($instanciasDto->getcveInstancia()!=""){
$sql.="cveInstancia='".$instanciasDto->getcveInstancia()."'";
if(($instanciasDto->getDesInstancia()!="") ||($instanciasDto->getActivo()!="") ||($instanciasDto->getFechaRegistro()!="") ||($instanciasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($instanciasDto->getdesInstancia()!=""){
$sql.="desInstancia='".$instanciasDto->getdesInstancia()."'";
if(($instanciasDto->getActivo()!="") ||($instanciasDto->getFechaRegistro()!="") ||($instanciasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($instanciasDto->getactivo()!=""){
$sql.="activo='".$instanciasDto->getactivo()."'";
if(($instanciasDto->getFechaRegistro()!="") ||($instanciasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($instanciasDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$instanciasDto->getfechaRegistro()."'";
if(($instanciasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($instanciasDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$instanciasDto->getfechaActualizacion()."'";
}
$sql.=" WHERE cveInstancia='".$instanciasDto->getcveInstancia()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new InstanciasDTO();
$tmp->setcveInstancia($instanciasDto->getcveInstancia());
$tmp = $this->selectInstancias($tmp,"",$this->_proveedor);
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
public function deleteInstancias($instanciasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblinstancias  WHERE cveInstancia='".$instanciasDto->getcveInstancia()."'";
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
public function selectInstancias($instanciasDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveInstancia,desInstancia,activo,fechaRegistro,fechaActualizacion FROM tblinstancias ";
if(($instanciasDto->getcveInstancia()!="") ||($instanciasDto->getdesInstancia()!="") ||($instanciasDto->getactivo()!="") ||($instanciasDto->getfechaRegistro()!="") ||($instanciasDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($instanciasDto->getcveInstancia()!=""){
$sql.="cveInstancia='".$instanciasDto->getCveInstancia()."'";
if(($instanciasDto->getDesInstancia()!="") ||($instanciasDto->getActivo()!="") ||($instanciasDto->getFechaRegistro()!="") ||($instanciasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($instanciasDto->getdesInstancia()!=""){
$sql.="desInstancia='".$instanciasDto->getDesInstancia()."'";
if(($instanciasDto->getActivo()!="") ||($instanciasDto->getFechaRegistro()!="") ||($instanciasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($instanciasDto->getactivo()!=""){
$sql.="activo='".$instanciasDto->getActivo()."'";
if(($instanciasDto->getFechaRegistro()!="") ||($instanciasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($instanciasDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$instanciasDto->getFechaRegistro()."'";
if(($instanciasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($instanciasDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$instanciasDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new InstanciasDTO();
$tmp[$contador]->setCveInstancia($row["cveInstancia"]);
$tmp[$contador]->setDesInstancia($row["desInstancia"]);
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