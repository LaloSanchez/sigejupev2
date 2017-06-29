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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/gruposordenes/GruposordenesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class GruposordenesDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertGruposordenes($gruposordenesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblgruposordenes(";
if($gruposordenesDto->getCveGrupoOrden()!=""){
$sql.="cveGrupoOrden";
if(($gruposordenesDto->getDesGrupoOrden()!="") ||($gruposordenesDto->getActivo()!="") ){
$sql.=",";
}
}
if($gruposordenesDto->getDesGrupoOrden()!=""){
$sql.="desGrupoOrden";
if(($gruposordenesDto->getActivo()!="") ){
$sql.=",";
}
}
if($gruposordenesDto->getActivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($gruposordenesDto->getCveGrupoOrden()!=""){
$sql.="'".$gruposordenesDto->getCveGrupoOrden()."'";
if(($gruposordenesDto->getDesGrupoOrden()!="") ||($gruposordenesDto->getActivo()!="") ){
$sql.=",";
}
}
if($gruposordenesDto->getDesGrupoOrden()!=""){
$sql.="'".$gruposordenesDto->getDesGrupoOrden()."'";
if(($gruposordenesDto->getActivo()!="") ){
$sql.=",";
}
}
if($gruposordenesDto->getActivo()!=""){
$sql.="'".$gruposordenesDto->getActivo()."'";
}
if($gruposordenesDto->getFechaRegistro()!=""){
}
if($gruposordenesDto->getFechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new GruposordenesDTO();
$tmp->setcveGrupoOrden($this->_proveedor->lastID());
$tmp = $this->selectGruposordenes($tmp,"",$this->_proveedor);
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
public function updateGruposordenes($gruposordenesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblgruposordenes SET ";
if($gruposordenesDto->getCveGrupoOrden()!=""){
$sql.="cveGrupoOrden='".$gruposordenesDto->getCveGrupoOrden()."'";
if(($gruposordenesDto->getDesGrupoOrden()!="") ||($gruposordenesDto->getActivo()!="") ||($gruposordenesDto->getFechaRegistro()!="") ||($gruposordenesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($gruposordenesDto->getDesGrupoOrden()!=""){
$sql.="desGrupoOrden='".$gruposordenesDto->getDesGrupoOrden()."'";
if(($gruposordenesDto->getActivo()!="") ||($gruposordenesDto->getFechaRegistro()!="") ||($gruposordenesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($gruposordenesDto->getActivo()!=""){
$sql.="activo='".$gruposordenesDto->getActivo()."'";
if(($gruposordenesDto->getFechaRegistro()!="") ||($gruposordenesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($gruposordenesDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$gruposordenesDto->getFechaRegistro()."'";
if(($gruposordenesDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($gruposordenesDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$gruposordenesDto->getFechaActualizacion()."'";
}
$sql.=" WHERE cveGrupoOrden='".$gruposordenesDto->getCveGrupoOrden()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new GruposordenesDTO();
$tmp->setcveGrupoOrden($gruposordenesDto->getCveGrupoOrden());
$tmp = $this->selectGruposordenes($tmp,"",$this->_proveedor);
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
public function deleteGruposordenes($gruposordenesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblgruposordenes  WHERE cveGrupoOrden='".$gruposordenesDto->getCveGrupoOrden()."'";
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
public function selectGruposordenes($gruposordenesDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT cveGrupoOrden,desGrupoOrden,activo,fechaRegistro,fechaActualizacion FROM tblgruposordenes ";
if(($gruposordenesDto->getCveGrupoOrden()!="") ||($gruposordenesDto->getDesGrupoOrden()!="") ||($gruposordenesDto->getActivo()!="") ||($gruposordenesDto->getFechaRegistro()!="") ||($gruposordenesDto->getFechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($gruposordenesDto->getCveGrupoOrden()!=""){
$sql.="cveGrupoOrden='".$gruposordenesDto->getCveGrupoOrden()."'";
if(($gruposordenesDto->getDesGrupoOrden()!="") ||($gruposordenesDto->getActivo()!="") ||($gruposordenesDto->getFechaRegistro()!="") ||($gruposordenesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($gruposordenesDto->getDesGrupoOrden()!=""){
$sql.="desGrupoOrden='".$gruposordenesDto->getDesGrupoOrden()."'";
if(($gruposordenesDto->getActivo()!="") ||($gruposordenesDto->getFechaRegistro()!="") ||($gruposordenesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($gruposordenesDto->getActivo()!=""){
$sql.="activo='".$gruposordenesDto->getActivo()."'";
if(($gruposordenesDto->getFechaRegistro()!="") ||($gruposordenesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($gruposordenesDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$gruposordenesDto->getFechaRegistro()."'";
if(($gruposordenesDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($gruposordenesDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$gruposordenesDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new GruposordenesDTO();
$tmp[$contador]->setCveGrupoOrden($row["cveGrupoOrden"]);
$tmp[$contador]->setDesGrupoOrden($row["desGrupoOrden"]);
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