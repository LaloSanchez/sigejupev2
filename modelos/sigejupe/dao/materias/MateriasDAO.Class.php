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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/materias/MateriasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class MateriasDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertMaterias($materiasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblmaterias(";
if($materiasDto->getcveMateria()!=""){
$sql.="cveMateria";
if(($materiasDto->getDesMateria()!="") ||($materiasDto->getActivo()!="") ){
$sql.=",";
}
}
if($materiasDto->getdesMateria()!=""){
$sql.="desMateria";
if(($materiasDto->getActivo()!="") ){
$sql.=",";
}
}
if($materiasDto->getactivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($materiasDto->getcveMateria()!=""){
$sql.="'".$materiasDto->getcveMateria()."'";
if(($materiasDto->getDesMateria()!="") ||($materiasDto->getActivo()!="") ){
$sql.=",";
}
}
if($materiasDto->getdesMateria()!=""){
$sql.="'".$materiasDto->getdesMateria()."'";
if(($materiasDto->getActivo()!="") ){
$sql.=",";
}
}
if($materiasDto->getactivo()!=""){
$sql.="'".$materiasDto->getactivo()."'";
}
if($materiasDto->getfechaRegistro()!=""){
}
if($materiasDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new MateriasDTO();
$tmp->setcveMateria($this->_proveedor->lastID());
$tmp = $this->selectMaterias($tmp,"",$this->_proveedor);
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
public function updateMaterias($materiasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblmaterias SET ";
if($materiasDto->getcveMateria()!=""){
$sql.="cveMateria='".$materiasDto->getcveMateria()."'";
if(($materiasDto->getDesMateria()!="") ||($materiasDto->getActivo()!="") ||($materiasDto->getFechaRegistro()!="") ||($materiasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($materiasDto->getdesMateria()!=""){
$sql.="desMateria='".$materiasDto->getdesMateria()."'";
if(($materiasDto->getActivo()!="") ||($materiasDto->getFechaRegistro()!="") ||($materiasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($materiasDto->getactivo()!=""){
$sql.="activo='".$materiasDto->getactivo()."'";
if(($materiasDto->getFechaRegistro()!="") ||($materiasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($materiasDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$materiasDto->getfechaRegistro()."'";
if(($materiasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($materiasDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$materiasDto->getfechaActualizacion()."'";
}
$sql.=" WHERE cveMateria='".$materiasDto->getcveMateria()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new MateriasDTO();
$tmp->setcveMateria($materiasDto->getcveMateria());
$tmp = $this->selectMaterias($tmp,"",$this->_proveedor);
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
public function deleteMaterias($materiasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblmaterias  WHERE cveMateria='".$materiasDto->getcveMateria()."'";
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
public function selectMaterias($materiasDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveMateria,desMateria,activo,fechaRegistro,fechaActualizacion FROM tblmaterias ";
if(($materiasDto->getcveMateria()!="") ||($materiasDto->getdesMateria()!="") ||($materiasDto->getactivo()!="") ||($materiasDto->getfechaRegistro()!="") ||($materiasDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($materiasDto->getcveMateria()!=""){
$sql.="cveMateria='".$materiasDto->getCveMateria()."'";
if(($materiasDto->getDesMateria()!="") ||($materiasDto->getActivo()!="") ||($materiasDto->getFechaRegistro()!="") ||($materiasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($materiasDto->getdesMateria()!=""){
$sql.="desMateria='".$materiasDto->getDesMateria()."'";
if(($materiasDto->getActivo()!="") ||($materiasDto->getFechaRegistro()!="") ||($materiasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($materiasDto->getactivo()!=""){
$sql.="activo='".$materiasDto->getActivo()."'";
if(($materiasDto->getFechaRegistro()!="") ||($materiasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($materiasDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$materiasDto->getFechaRegistro()."'";
if(($materiasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($materiasDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$materiasDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new MateriasDTO();
$tmp[$contador]->setCveMateria($row["cveMateria"]);
$tmp[$contador]->setDesMateria($row["desMateria"]);
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