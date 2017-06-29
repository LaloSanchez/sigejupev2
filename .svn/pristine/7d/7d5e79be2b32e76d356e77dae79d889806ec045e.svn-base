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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/testigossexualescarpetas/TestigossexualescarpetasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class TestigossexualescarpetasDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertTestigossexualescarpetas($testigossexualescarpetasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tbltestigossexualescarpetas(";
if($testigossexualescarpetasDto->getidTestigoSexualCarpeta()!=""){
$sql.="idTestigoSexualCarpeta";
if(($testigossexualescarpetasDto->getIdSexualCarpeta()!="") ||($testigossexualescarpetasDto->getPaterno()!="") ||($testigossexualescarpetasDto->getMaterno()!="") ||($testigossexualescarpetasDto->getNombre()!="") ||($testigossexualescarpetasDto->getCveGenero()!="") ||($testigossexualescarpetasDto->getActivo()!="") ){
$sql.=",";
}
}
if($testigossexualescarpetasDto->getidSexualCarpeta()!=""){
$sql.="idSexualCarpeta";
if(($testigossexualescarpetasDto->getPaterno()!="") ||($testigossexualescarpetasDto->getMaterno()!="") ||($testigossexualescarpetasDto->getNombre()!="") ||($testigossexualescarpetasDto->getCveGenero()!="") ||($testigossexualescarpetasDto->getActivo()!="") ){
$sql.=",";
}
}
if($testigossexualescarpetasDto->getpaterno()!=""){
$sql.="paterno";
if(($testigossexualescarpetasDto->getMaterno()!="") ||($testigossexualescarpetasDto->getNombre()!="") ||($testigossexualescarpetasDto->getCveGenero()!="") ||($testigossexualescarpetasDto->getActivo()!="") ){
$sql.=",";
}
}
if($testigossexualescarpetasDto->getmaterno()!=""){
$sql.="materno";
if(($testigossexualescarpetasDto->getNombre()!="") ||($testigossexualescarpetasDto->getCveGenero()!="") ||($testigossexualescarpetasDto->getActivo()!="") ){
$sql.=",";
}
}
if($testigossexualescarpetasDto->getnombre()!=""){
$sql.="nombre";
if(($testigossexualescarpetasDto->getCveGenero()!="") ||($testigossexualescarpetasDto->getActivo()!="") ){
$sql.=",";
}
}
if($testigossexualescarpetasDto->getcveGenero()!=""){
$sql.="cveGenero";
if(($testigossexualescarpetasDto->getActivo()!="") ){
$sql.=",";
}
}
if($testigossexualescarpetasDto->getactivo()!=""){
$sql.="activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($testigossexualescarpetasDto->getidTestigoSexualCarpeta()!=""){
$sql.="'".$testigossexualescarpetasDto->getidTestigoSexualCarpeta()."'";
if(($testigossexualescarpetasDto->getIdSexualCarpeta()!="") ||($testigossexualescarpetasDto->getPaterno()!="") ||($testigossexualescarpetasDto->getMaterno()!="") ||($testigossexualescarpetasDto->getNombre()!="") ||($testigossexualescarpetasDto->getCveGenero()!="") ||($testigossexualescarpetasDto->getActivo()!="") ){
$sql.=",";
}
}
if($testigossexualescarpetasDto->getidSexualCarpeta()!=""){
$sql.="'".$testigossexualescarpetasDto->getidSexualCarpeta()."'";
if(($testigossexualescarpetasDto->getPaterno()!="") ||($testigossexualescarpetasDto->getMaterno()!="") ||($testigossexualescarpetasDto->getNombre()!="") ||($testigossexualescarpetasDto->getCveGenero()!="") ||($testigossexualescarpetasDto->getActivo()!="") ){
$sql.=",";
}
}
if($testigossexualescarpetasDto->getpaterno()!=""){
$sql.="'".$testigossexualescarpetasDto->getpaterno()."'";
if(($testigossexualescarpetasDto->getMaterno()!="") ||($testigossexualescarpetasDto->getNombre()!="") ||($testigossexualescarpetasDto->getCveGenero()!="") ||($testigossexualescarpetasDto->getActivo()!="") ){
$sql.=",";
}
}
if($testigossexualescarpetasDto->getmaterno()!=""){
$sql.="'".$testigossexualescarpetasDto->getmaterno()."'";
if(($testigossexualescarpetasDto->getNombre()!="") ||($testigossexualescarpetasDto->getCveGenero()!="") ||($testigossexualescarpetasDto->getActivo()!="") ){
$sql.=",";
}
}
if($testigossexualescarpetasDto->getnombre()!=""){
$sql.="'".$testigossexualescarpetasDto->getnombre()."'";
if(($testigossexualescarpetasDto->getCveGenero()!="") ||($testigossexualescarpetasDto->getActivo()!="") ){
$sql.=",";
}
}
if($testigossexualescarpetasDto->getcveGenero()!=""){
$sql.="'".$testigossexualescarpetasDto->getcveGenero()."'";
if(($testigossexualescarpetasDto->getActivo()!="") ){
$sql.=",";
}
}
if($testigossexualescarpetasDto->getactivo()!=""){
$sql.="'".$testigossexualescarpetasDto->getactivo()."'";
}
if($testigossexualescarpetasDto->getfechaRegistro()!=""){
}
if($testigossexualescarpetasDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TestigossexualescarpetasDTO();
$tmp->setidTestigoSexualCarpeta($this->_proveedor->lastID());
$tmp = $this->selectTestigossexualescarpetas($tmp,"",$this->_proveedor);
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
public function updateTestigossexualescarpetas($testigossexualescarpetasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tbltestigossexualescarpetas SET ";
if($testigossexualescarpetasDto->getidTestigoSexualCarpeta()!=""){
$sql.="idTestigoSexualCarpeta='".$testigossexualescarpetasDto->getidTestigoSexualCarpeta()."'";
if(($testigossexualescarpetasDto->getIdSexualCarpeta()!="") ||($testigossexualescarpetasDto->getPaterno()!="") ||($testigossexualescarpetasDto->getMaterno()!="") ||($testigossexualescarpetasDto->getNombre()!="") ||($testigossexualescarpetasDto->getCveGenero()!="") ||($testigossexualescarpetasDto->getActivo()!="") ||($testigossexualescarpetasDto->getFechaRegistro()!="") ||($testigossexualescarpetasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($testigossexualescarpetasDto->getidSexualCarpeta()!=""){
$sql.="idSexualCarpeta='".$testigossexualescarpetasDto->getidSexualCarpeta()."'";
if(($testigossexualescarpetasDto->getPaterno()!="") ||($testigossexualescarpetasDto->getMaterno()!="") ||($testigossexualescarpetasDto->getNombre()!="") ||($testigossexualescarpetasDto->getCveGenero()!="") ||($testigossexualescarpetasDto->getActivo()!="") ||($testigossexualescarpetasDto->getFechaRegistro()!="") ||($testigossexualescarpetasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($testigossexualescarpetasDto->getpaterno()!=""){
$sql.="paterno='".$testigossexualescarpetasDto->getpaterno()."'";
if(($testigossexualescarpetasDto->getMaterno()!="") ||($testigossexualescarpetasDto->getNombre()!="") ||($testigossexualescarpetasDto->getCveGenero()!="") ||($testigossexualescarpetasDto->getActivo()!="") ||($testigossexualescarpetasDto->getFechaRegistro()!="") ||($testigossexualescarpetasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($testigossexualescarpetasDto->getmaterno()!=""){
$sql.="materno='".$testigossexualescarpetasDto->getmaterno()."'";
if(($testigossexualescarpetasDto->getNombre()!="") ||($testigossexualescarpetasDto->getCveGenero()!="") ||($testigossexualescarpetasDto->getActivo()!="") ||($testigossexualescarpetasDto->getFechaRegistro()!="") ||($testigossexualescarpetasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($testigossexualescarpetasDto->getnombre()!=""){
$sql.="nombre='".$testigossexualescarpetasDto->getnombre()."'";
if(($testigossexualescarpetasDto->getCveGenero()!="") ||($testigossexualescarpetasDto->getActivo()!="") ||($testigossexualescarpetasDto->getFechaRegistro()!="") ||($testigossexualescarpetasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($testigossexualescarpetasDto->getcveGenero()!=""){
$sql.="cveGenero='".$testigossexualescarpetasDto->getcveGenero()."'";
if(($testigossexualescarpetasDto->getActivo()!="") ||($testigossexualescarpetasDto->getFechaRegistro()!="") ||($testigossexualescarpetasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($testigossexualescarpetasDto->getactivo()!=""){
$sql.="activo='".$testigossexualescarpetasDto->getactivo()."'";
if(($testigossexualescarpetasDto->getFechaRegistro()!="") ||($testigossexualescarpetasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($testigossexualescarpetasDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$testigossexualescarpetasDto->getfechaRegistro()."'";
if(($testigossexualescarpetasDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($testigossexualescarpetasDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$testigossexualescarpetasDto->getfechaActualizacion()."'";
}
$sql.=" WHERE idTestigoSexualCarpeta='".$testigossexualescarpetasDto->getidTestigoSexualCarpeta()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TestigossexualescarpetasDTO();
$tmp->setidTestigoSexualCarpeta($testigossexualescarpetasDto->getidTestigoSexualCarpeta());
$tmp = $this->selectTestigossexualescarpetas($tmp,"",$this->_proveedor);
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
public function deleteTestigossexualescarpetas($testigossexualescarpetasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tbltestigossexualescarpetas  WHERE idTestigoSexualCarpeta='".$testigossexualescarpetasDto->getidTestigoSexualCarpeta()."'";
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
public function selectTestigossexualescarpetas($testigossexualescarpetasDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idTestigoSexualCarpeta,idSexualCarpeta,paterno,materno,nombre,cveGenero,activo,fechaRegistro,fechaActualizacion FROM tbltestigossexualescarpetas ";
if(($testigossexualescarpetasDto->getidTestigoSexualCarpeta()!="") ||($testigossexualescarpetasDto->getidSexualCarpeta()!="") ||($testigossexualescarpetasDto->getpaterno()!="") ||($testigossexualescarpetasDto->getmaterno()!="") ||($testigossexualescarpetasDto->getnombre()!="") ||($testigossexualescarpetasDto->getcveGenero()!="") ||($testigossexualescarpetasDto->getactivo()!="") ||($testigossexualescarpetasDto->getfechaRegistro()!="") ||($testigossexualescarpetasDto->getfechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($testigossexualescarpetasDto->getidTestigoSexualCarpeta()!=""){
$sql.="idTestigoSexualCarpeta='".$testigossexualescarpetasDto->getIdTestigoSexualCarpeta()."'";
if(($testigossexualescarpetasDto->getIdSexualCarpeta()!="") ||($testigossexualescarpetasDto->getPaterno()!="") ||($testigossexualescarpetasDto->getMaterno()!="") ||($testigossexualescarpetasDto->getNombre()!="") ||($testigossexualescarpetasDto->getCveGenero()!="") ||($testigossexualescarpetasDto->getActivo()!="") ||($testigossexualescarpetasDto->getFechaRegistro()!="") ||($testigossexualescarpetasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($testigossexualescarpetasDto->getidSexualCarpeta()!=""){
$sql.="idSexualCarpeta='".$testigossexualescarpetasDto->getIdSexualCarpeta()."'";
if(($testigossexualescarpetasDto->getPaterno()!="") ||($testigossexualescarpetasDto->getMaterno()!="") ||($testigossexualescarpetasDto->getNombre()!="") ||($testigossexualescarpetasDto->getCveGenero()!="") ||($testigossexualescarpetasDto->getActivo()!="") ||($testigossexualescarpetasDto->getFechaRegistro()!="") ||($testigossexualescarpetasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($testigossexualescarpetasDto->getpaterno()!=""){
$sql.="paterno='".$testigossexualescarpetasDto->getPaterno()."'";
if(($testigossexualescarpetasDto->getMaterno()!="") ||($testigossexualescarpetasDto->getNombre()!="") ||($testigossexualescarpetasDto->getCveGenero()!="") ||($testigossexualescarpetasDto->getActivo()!="") ||($testigossexualescarpetasDto->getFechaRegistro()!="") ||($testigossexualescarpetasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($testigossexualescarpetasDto->getmaterno()!=""){
$sql.="materno='".$testigossexualescarpetasDto->getMaterno()."'";
if(($testigossexualescarpetasDto->getNombre()!="") ||($testigossexualescarpetasDto->getCveGenero()!="") ||($testigossexualescarpetasDto->getActivo()!="") ||($testigossexualescarpetasDto->getFechaRegistro()!="") ||($testigossexualescarpetasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($testigossexualescarpetasDto->getnombre()!=""){
$sql.="nombre='".$testigossexualescarpetasDto->getNombre()."'";
if(($testigossexualescarpetasDto->getCveGenero()!="") ||($testigossexualescarpetasDto->getActivo()!="") ||($testigossexualescarpetasDto->getFechaRegistro()!="") ||($testigossexualescarpetasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($testigossexualescarpetasDto->getcveGenero()!=""){
$sql.="cveGenero='".$testigossexualescarpetasDto->getCveGenero()."'";
if(($testigossexualescarpetasDto->getActivo()!="") ||($testigossexualescarpetasDto->getFechaRegistro()!="") ||($testigossexualescarpetasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($testigossexualescarpetasDto->getactivo()!=""){
$sql.="activo='".$testigossexualescarpetasDto->getActivo()."'";
if(($testigossexualescarpetasDto->getFechaRegistro()!="") ||($testigossexualescarpetasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($testigossexualescarpetasDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$testigossexualescarpetasDto->getFechaRegistro()."'";
if(($testigossexualescarpetasDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($testigossexualescarpetasDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$testigossexualescarpetasDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new TestigossexualescarpetasDTO();
$tmp[$contador]->setIdTestigoSexualCarpeta($row["idTestigoSexualCarpeta"]);
$tmp[$contador]->setIdSexualCarpeta($row["idSexualCarpeta"]);
$tmp[$contador]->setPaterno($row["paterno"]);
$tmp[$contador]->setMaterno($row["materno"]);
$tmp[$contador]->setNombre($row["nombre"]);
$tmp[$contador]->setCveGenero($row["cveGenero"]);
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