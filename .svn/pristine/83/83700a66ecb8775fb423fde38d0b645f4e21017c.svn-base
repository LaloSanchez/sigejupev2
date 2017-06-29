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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/magistradosproyectistas/MagistradosproyectistasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class MagistradosproyectistasDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertMagistradosproyectistas($magistradosproyectistasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblmagistradosproyectistas(";
if($magistradosproyectistasDto->getIdMagistradoProyectista()!=""){
$sql.="idMagistradoProyectista";
if(($magistradosproyectistasDto->getCveUsuarioMagistrado()!="") ||($magistradosproyectistasDto->getCveUsuarioProyectista()!="") ||($magistradosproyectistasDto->getActivo()!="") ){
$sql.=",";
}
}
if($magistradosproyectistasDto->getCveUsuarioMagistrado()!=""){
$sql.="cveUsuarioMagistrado";
if(($magistradosproyectistasDto->getCveUsuarioProyectista()!="") ||($magistradosproyectistasDto->getActivo()!="") ){
$sql.=",";
}
}
if($magistradosproyectistasDto->getCveUsuarioProyectista()!=""){
$sql.="cveUsuarioProyectista";
if(($magistradosproyectistasDto->getActivo()!="") ){
$sql.=",";
}
}
if($magistradosproyectistasDto->getActivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($magistradosproyectistasDto->getIdMagistradoProyectista()!=""){
$sql.="'".$magistradosproyectistasDto->getIdMagistradoProyectista()."'";
if(($magistradosproyectistasDto->getCveUsuarioMagistrado()!="") ||($magistradosproyectistasDto->getCveUsuarioProyectista()!="") ||($magistradosproyectistasDto->getActivo()!="") ){
$sql.=",";
}
}
if($magistradosproyectistasDto->getCveUsuarioMagistrado()!=""){
$sql.="'".$magistradosproyectistasDto->getCveUsuarioMagistrado()."'";
if(($magistradosproyectistasDto->getCveUsuarioProyectista()!="") ||($magistradosproyectistasDto->getActivo()!="") ){
$sql.=",";
}
}
if($magistradosproyectistasDto->getCveUsuarioProyectista()!=""){
$sql.="'".$magistradosproyectistasDto->getCveUsuarioProyectista()."'";
if(($magistradosproyectistasDto->getActivo()!="") ){
$sql.=",";
}
}
if($magistradosproyectistasDto->getActivo()!=""){
$sql.="'".$magistradosproyectistasDto->getActivo()."'";
}
if($magistradosproyectistasDto->getFechaRegistro()!=""){
}
if($magistradosproyectistasDto->getFechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new MagistradosproyectistasDTO();
$tmp->setidMagistradoProyectista($this->_proveedor->lastID());
$tmp = $this->selectMagistradosproyectistas($tmp,"",$this->_proveedor);
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
public function updateMagistradosproyectistas($magistradosproyectistasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblmagistradosproyectistas SET ";
if($magistradosproyectistasDto->getIdMagistradoProyectista()!=""){
$sql.="idMagistradoProyectista='".$magistradosproyectistasDto->getIdMagistradoProyectista()."'";
if(($magistradosproyectistasDto->getCveUsuarioMagistrado()!="") ||($magistradosproyectistasDto->getCveUsuarioProyectista()!="") ||($magistradosproyectistasDto->getActivo()!="") ||($magistradosproyectistasDto->getFechaRegistro()!="") ||($magistradosproyectistasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($magistradosproyectistasDto->getCveUsuarioMagistrado()!=""){
$sql.="cveUsuarioMagistrado='".$magistradosproyectistasDto->getCveUsuarioMagistrado()."'";
if(($magistradosproyectistasDto->getCveUsuarioProyectista()!="") ||($magistradosproyectistasDto->getActivo()!="") ||($magistradosproyectistasDto->getFechaRegistro()!="") ||($magistradosproyectistasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($magistradosproyectistasDto->getCveUsuarioProyectista()!=""){
$sql.="cveUsuarioProyectista='".$magistradosproyectistasDto->getCveUsuarioProyectista()."'";
if(($magistradosproyectistasDto->getActivo()!="") ||($magistradosproyectistasDto->getFechaRegistro()!="") ||($magistradosproyectistasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($magistradosproyectistasDto->getActivo()!=""){
$sql.="activo='".$magistradosproyectistasDto->getActivo()."'";
if(($magistradosproyectistasDto->getFechaRegistro()!="") ||($magistradosproyectistasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($magistradosproyectistasDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$magistradosproyectistasDto->getFechaRegistro()."'";
if(($magistradosproyectistasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($magistradosproyectistasDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$magistradosproyectistasDto->getFechaActualizacion()."'";
}
$sql.=" WHERE idMagistradoProyectista='".$magistradosproyectistasDto->getIdMagistradoProyectista()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new MagistradosproyectistasDTO();
$tmp->setidMagistradoProyectista($magistradosproyectistasDto->getIdMagistradoProyectista());
$tmp = $this->selectMagistradosproyectistas($tmp,"",$this->_proveedor);
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
public function deleteMagistradosproyectistas($magistradosproyectistasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblmagistradosproyectistas  WHERE idMagistradoProyectista='".$magistradosproyectistasDto->getIdMagistradoProyectista()."'";
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
public function selectMagistradosproyectistas($magistradosproyectistasDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idMagistradoProyectista,cveUsuarioMagistrado,cveUsuarioProyectista,activo,fechaRegistro,fechaActualizacion FROM tblmagistradosproyectistas ";
if(($magistradosproyectistasDto->getIdMagistradoProyectista()!="") ||($magistradosproyectistasDto->getCveUsuarioMagistrado()!="") ||($magistradosproyectistasDto->getCveUsuarioProyectista()!="") ||($magistradosproyectistasDto->getActivo()!="") ||($magistradosproyectistasDto->getFechaRegistro()!="") ||($magistradosproyectistasDto->getFechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($magistradosproyectistasDto->getIdMagistradoProyectista()!=""){
$sql.="idMagistradoProyectista='".$magistradosproyectistasDto->getIdMagistradoProyectista()."'";
if(($magistradosproyectistasDto->getCveUsuarioMagistrado()!="") ||($magistradosproyectistasDto->getCveUsuarioProyectista()!="") ||($magistradosproyectistasDto->getActivo()!="") ||($magistradosproyectistasDto->getFechaRegistro()!="") ||($magistradosproyectistasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($magistradosproyectistasDto->getCveUsuarioMagistrado()!=""){
$sql.="cveUsuarioMagistrado='".$magistradosproyectistasDto->getCveUsuarioMagistrado()."'";
if(($magistradosproyectistasDto->getCveUsuarioProyectista()!="") ||($magistradosproyectistasDto->getActivo()!="") ||($magistradosproyectistasDto->getFechaRegistro()!="") ||($magistradosproyectistasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($magistradosproyectistasDto->getCveUsuarioProyectista()!=""){
$sql.="cveUsuarioProyectista='".$magistradosproyectistasDto->getCveUsuarioProyectista()."'";
if(($magistradosproyectistasDto->getActivo()!="") ||($magistradosproyectistasDto->getFechaRegistro()!="") ||($magistradosproyectistasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($magistradosproyectistasDto->getActivo()!=""){
$sql.="activo='".$magistradosproyectistasDto->getActivo()."'";
if(($magistradosproyectistasDto->getFechaRegistro()!="") ||($magistradosproyectistasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($magistradosproyectistasDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$magistradosproyectistasDto->getFechaRegistro()."'";
if(($magistradosproyectistasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($magistradosproyectistasDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$magistradosproyectistasDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new MagistradosproyectistasDTO();
$tmp[$contador]->setIdMagistradoProyectista($row["idMagistradoProyectista"]);
$tmp[$contador]->setCveUsuarioMagistrado($row["cveUsuarioMagistrado"]);
$tmp[$contador]->setCveUsuarioProyectista($row["cveUsuarioProyectista"]);
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