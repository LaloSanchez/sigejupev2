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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/grupos/GruposDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class GruposDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertGrupos($gruposDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblgrupos(";
if($gruposDto->getcveGrupo()!=""){
$sql.="cveGrupo";
if(($gruposDto->getDesGrupo()!="") ||($gruposDto->getActivo()!="") ){
$sql.=",";
}
}
if($gruposDto->getdesGrupo()!=""){
$sql.="desGrupo";
if(($gruposDto->getActivo()!="") ){
$sql.=",";
}
}
if($gruposDto->getactivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($gruposDto->getcveGrupo()!=""){
$sql.="'".$gruposDto->getcveGrupo()."'";
if(($gruposDto->getDesGrupo()!="") ||($gruposDto->getActivo()!="") ){
$sql.=",";
}
}
if($gruposDto->getdesGrupo()!=""){
$sql.="'".$gruposDto->getdesGrupo()."'";
if(($gruposDto->getActivo()!="") ){
$sql.=",";
}
}
if($gruposDto->getactivo()!=""){
$sql.="'".$gruposDto->getactivo()."'";
}
if($gruposDto->getfechaRegistro()!=""){
}
if($gruposDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new GruposDTO();
$tmp->setcveGrupo($this->_proveedor->lastID());
$tmp = $this->selectGrupos($tmp,"",$this->_proveedor);
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
public function updateGrupos($gruposDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblgrupos SET ";
if($gruposDto->getcveGrupo()!=""){
$sql.="cveGrupo='".$gruposDto->getcveGrupo()."'";
if(($gruposDto->getDesGrupo()!="") ||($gruposDto->getActivo()!="") ||($gruposDto->getFechaRegistro()!="") ||($gruposDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($gruposDto->getdesGrupo()!=""){
$sql.="desGrupo='".$gruposDto->getdesGrupo()."'";
if(($gruposDto->getActivo()!="") ||($gruposDto->getFechaRegistro()!="") ||($gruposDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($gruposDto->getactivo()!=""){
$sql.="activo='".$gruposDto->getactivo()."'";
if(($gruposDto->getFechaRegistro()!="") ||($gruposDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($gruposDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$gruposDto->getfechaRegistro()."'";
if(($gruposDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($gruposDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$gruposDto->getfechaActualizacion()."'";
}
$sql.=" WHERE cveGrupo='".$gruposDto->getcveGrupo()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new GruposDTO();
$tmp->setcveGrupo($gruposDto->getcveGrupo());
$tmp = $this->selectGrupos($tmp,"",$this->_proveedor);
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
public function deleteGrupos($gruposDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblgrupos  WHERE cveGrupo='".$gruposDto->getcveGrupo()."'";
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
public function selectGrupos($gruposDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveGrupo,desGrupo,activo,fechaRegistro,fechaActualizacion FROM tblgrupos ";
if(($gruposDto->getcveGrupo()!="") ||($gruposDto->getdesGrupo()!="") ||($gruposDto->getactivo()!="") ||($gruposDto->getfechaRegistro()!="") ||($gruposDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($gruposDto->getcveGrupo()!=""){
$sql.="cveGrupo='".$gruposDto->getCveGrupo()."'";
if(($gruposDto->getDesGrupo()!="") ||($gruposDto->getActivo()!="") ||($gruposDto->getFechaRegistro()!="") ||($gruposDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($gruposDto->getdesGrupo()!=""){
$sql.="desGrupo='".$gruposDto->getDesGrupo()."'";
if(($gruposDto->getActivo()!="") ||($gruposDto->getFechaRegistro()!="") ||($gruposDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($gruposDto->getactivo()!=""){
$sql.="activo='".$gruposDto->getActivo()."'";
if(($gruposDto->getFechaRegistro()!="") ||($gruposDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($gruposDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$gruposDto->getFechaRegistro()."'";
if(($gruposDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($gruposDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$gruposDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new GruposDTO();
$tmp[$contador]->setCveGrupo($row["cveGrupo"]);
$tmp[$contador]->setDesGrupo($row["desGrupo"]);
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