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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/especialidades/EspecialidadesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class EspecialidadesDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertEspecialidades($especialidadesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblespecialidades(";
if($especialidadesDto->getcveEspecialidad()!=""){
$sql.="cveEspecialidad";
if(($especialidadesDto->getDesSala()!="") ||($especialidadesDto->getActivo()!="") ){
$sql.=",";
}
}
if($especialidadesDto->getdesSala()!=""){
$sql.="desSala";
if(($especialidadesDto->getActivo()!="") ){
$sql.=",";
}
}
if($especialidadesDto->getactivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($especialidadesDto->getcveEspecialidad()!=""){
$sql.="'".$especialidadesDto->getcveEspecialidad()."'";
if(($especialidadesDto->getDesSala()!="") ||($especialidadesDto->getActivo()!="") ){
$sql.=",";
}
}
if($especialidadesDto->getdesSala()!=""){
$sql.="'".$especialidadesDto->getdesSala()."'";
if(($especialidadesDto->getActivo()!="") ){
$sql.=",";
}
}
if($especialidadesDto->getactivo()!=""){
$sql.="'".$especialidadesDto->getactivo()."'";
}
if($especialidadesDto->getfechaRegistro()!=""){
}
if($especialidadesDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new EspecialidadesDTO();
$tmp->setcveEspecialidad($this->_proveedor->lastID());
$tmp = $this->selectEspecialidades($tmp,"",$this->_proveedor);
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
public function updateEspecialidades($especialidadesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblespecialidades SET ";
if($especialidadesDto->getcveEspecialidad()!=""){
$sql.="cveEspecialidad='".$especialidadesDto->getcveEspecialidad()."'";
if(($especialidadesDto->getDesSala()!="") ||($especialidadesDto->getActivo()!="") ||($especialidadesDto->getFechaRegistro()!="") ||($especialidadesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($especialidadesDto->getdesSala()!=""){
$sql.="desSala='".$especialidadesDto->getdesSala()."'";
if(($especialidadesDto->getActivo()!="") ||($especialidadesDto->getFechaRegistro()!="") ||($especialidadesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($especialidadesDto->getactivo()!=""){
$sql.="activo='".$especialidadesDto->getactivo()."'";
if(($especialidadesDto->getFechaRegistro()!="") ||($especialidadesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($especialidadesDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$especialidadesDto->getfechaRegistro()."'";
if(($especialidadesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($especialidadesDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$especialidadesDto->getfechaActualizacion()."'";
}
$sql.=" WHERE cveEspecialidad='".$especialidadesDto->getcveEspecialidad()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new EspecialidadesDTO();
$tmp->setcveEspecialidad($especialidadesDto->getcveEspecialidad());
$tmp = $this->selectEspecialidades($tmp,"",$this->_proveedor);
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
public function deleteEspecialidades($especialidadesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblespecialidades  WHERE cveEspecialidad='".$especialidadesDto->getcveEspecialidad()."'";
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
public function selectEspecialidades($especialidadesDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveEspecialidad,desSala,activo,fechaRegistro,fechaActualizacion FROM tblespecialidades ";
if(($especialidadesDto->getcveEspecialidad()!="") ||($especialidadesDto->getdesSala()!="") ||($especialidadesDto->getactivo()!="") ||($especialidadesDto->getfechaRegistro()!="") ||($especialidadesDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($especialidadesDto->getcveEspecialidad()!=""){
$sql.="cveEspecialidad='".$especialidadesDto->getCveEspecialidad()."'";
if(($especialidadesDto->getDesSala()!="") ||($especialidadesDto->getActivo()!="") ||($especialidadesDto->getFechaRegistro()!="") ||($especialidadesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($especialidadesDto->getdesSala()!=""){
$sql.="desSala='".$especialidadesDto->getDesSala()."'";
if(($especialidadesDto->getActivo()!="") ||($especialidadesDto->getFechaRegistro()!="") ||($especialidadesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($especialidadesDto->getactivo()!=""){
$sql.="activo='".$especialidadesDto->getActivo()."'";
if(($especialidadesDto->getFechaRegistro()!="") ||($especialidadesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($especialidadesDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$especialidadesDto->getFechaRegistro()."'";
if(($especialidadesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($especialidadesDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$especialidadesDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new EspecialidadesDTO();
$tmp[$contador]->setCveEspecialidad($row["cveEspecialidad"]);
$tmp[$contador]->setDesSala($row["desSala"]);
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