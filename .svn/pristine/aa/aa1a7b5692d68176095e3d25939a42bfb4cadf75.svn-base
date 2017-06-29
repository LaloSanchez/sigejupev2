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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/ordenesapeladas/OrdenesapeladasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class OrdenesapeladasDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertOrdenesapeladas($ordenesapeladasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblordenesapeladas(";
if($ordenesapeladasDto->getIdOrdenApelada()!=""){
$sql.="idOrdenApelada";
if(($ordenesapeladasDto->getIdOrdenImputado()!="") ||($ordenesapeladasDto->getCveSentido()!="") ||($ordenesapeladasDto->getNumToca()!="") ||($ordenesapeladasDto->getAnioToca()!="") ||($ordenesapeladasDto->getCveSala()!="") ||($ordenesapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($ordenesapeladasDto->getIdOrdenImputado()!=""){
$sql.="idOrdenImputado";
if(($ordenesapeladasDto->getCveSentido()!="") ||($ordenesapeladasDto->getNumToca()!="") ||($ordenesapeladasDto->getAnioToca()!="") ||($ordenesapeladasDto->getCveSala()!="") ||($ordenesapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($ordenesapeladasDto->getCveSentido()!=""){
$sql.="cveSentido";
if(($ordenesapeladasDto->getNumToca()!="") ||($ordenesapeladasDto->getAnioToca()!="") ||($ordenesapeladasDto->getCveSala()!="") ||($ordenesapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($ordenesapeladasDto->getNumToca()!=""){
$sql.="NumToca";
if(($ordenesapeladasDto->getAnioToca()!="") ||($ordenesapeladasDto->getCveSala()!="") ||($ordenesapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($ordenesapeladasDto->getAnioToca()!=""){
$sql.="AnioToca";
if(($ordenesapeladasDto->getCveSala()!="") ||($ordenesapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($ordenesapeladasDto->getCveSala()!=""){
$sql.="CveSala";
if(($ordenesapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($ordenesapeladasDto->getActivo()!=""){
$sql.="Activo";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($ordenesapeladasDto->getIdOrdenApelada()!=""){
$sql.="'".$ordenesapeladasDto->getIdOrdenApelada()."'";
if(($ordenesapeladasDto->getIdOrdenImputado()!="") ||($ordenesapeladasDto->getCveSentido()!="") ||($ordenesapeladasDto->getNumToca()!="") ||($ordenesapeladasDto->getAnioToca()!="") ||($ordenesapeladasDto->getCveSala()!="") ||($ordenesapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($ordenesapeladasDto->getIdOrdenImputado()!=""){
$sql.="'".$ordenesapeladasDto->getIdOrdenImputado()."'";
if(($ordenesapeladasDto->getCveSentido()!="") ||($ordenesapeladasDto->getNumToca()!="") ||($ordenesapeladasDto->getAnioToca()!="") ||($ordenesapeladasDto->getCveSala()!="") ||($ordenesapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($ordenesapeladasDto->getCveSentido()!=""){
$sql.="'".$ordenesapeladasDto->getCveSentido()."'";
if(($ordenesapeladasDto->getNumToca()!="") ||($ordenesapeladasDto->getAnioToca()!="") ||($ordenesapeladasDto->getCveSala()!="") ||($ordenesapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($ordenesapeladasDto->getNumToca()!=""){
$sql.="'".$ordenesapeladasDto->getNumToca()."'";
if(($ordenesapeladasDto->getAnioToca()!="") ||($ordenesapeladasDto->getCveSala()!="") ||($ordenesapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($ordenesapeladasDto->getAnioToca()!=""){
$sql.="'".$ordenesapeladasDto->getAnioToca()."'";
if(($ordenesapeladasDto->getCveSala()!="") ||($ordenesapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($ordenesapeladasDto->getCveSala()!=""){
$sql.="'".$ordenesapeladasDto->getCveSala()."'";
if(($ordenesapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($ordenesapeladasDto->getFechaRegistro()!=""){
if(($ordenesapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($ordenesapeladasDto->getFechaActualizacion()!=""){
if(($ordenesapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($ordenesapeladasDto->getActivo()!=""){
$sql.="'".$ordenesapeladasDto->getActivo()."'";
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new OrdenesapeladasDTO();
$tmp->setidOrdenApelada($this->_proveedor->lastID());
$tmp = $this->selectOrdenesapeladas($tmp,"",$this->_proveedor);
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
public function updateOrdenesapeladas($ordenesapeladasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblordenesapeladas SET ";
if($ordenesapeladasDto->getIdOrdenApelada()!=""){
$sql.="idOrdenApelada='".$ordenesapeladasDto->getIdOrdenApelada()."'";
if(($ordenesapeladasDto->getIdOrdenImputado()!="") ||($ordenesapeladasDto->getCveSentido()!="") ||($ordenesapeladasDto->getNumToca()!="") ||($ordenesapeladasDto->getAnioToca()!="") ||($ordenesapeladasDto->getCveSala()!="") ||($ordenesapeladasDto->getFechaRegistro()!="") ||($ordenesapeladasDto->getFechaActualizacion()!="") ||($ordenesapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($ordenesapeladasDto->getIdOrdenImputado()!=""){
$sql.="idOrdenImputado='".$ordenesapeladasDto->getIdOrdenImputado()."'";
if(($ordenesapeladasDto->getCveSentido()!="") ||($ordenesapeladasDto->getNumToca()!="") ||($ordenesapeladasDto->getAnioToca()!="") ||($ordenesapeladasDto->getCveSala()!="") ||($ordenesapeladasDto->getFechaRegistro()!="") ||($ordenesapeladasDto->getFechaActualizacion()!="") ||($ordenesapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($ordenesapeladasDto->getCveSentido()!=""){
$sql.="cveSentido='".$ordenesapeladasDto->getCveSentido()."'";
if(($ordenesapeladasDto->getNumToca()!="") ||($ordenesapeladasDto->getAnioToca()!="") ||($ordenesapeladasDto->getCveSala()!="") ||($ordenesapeladasDto->getFechaRegistro()!="") ||($ordenesapeladasDto->getFechaActualizacion()!="") ||($ordenesapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($ordenesapeladasDto->getNumToca()!=""){
$sql.="NumToca='".$ordenesapeladasDto->getNumToca()."'";
if(($ordenesapeladasDto->getAnioToca()!="") ||($ordenesapeladasDto->getCveSala()!="") ||($ordenesapeladasDto->getFechaRegistro()!="") ||($ordenesapeladasDto->getFechaActualizacion()!="") ||($ordenesapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($ordenesapeladasDto->getAnioToca()!=""){
$sql.="AnioToca='".$ordenesapeladasDto->getAnioToca()."'";
if(($ordenesapeladasDto->getCveSala()!="") ||($ordenesapeladasDto->getFechaRegistro()!="") ||($ordenesapeladasDto->getFechaActualizacion()!="") ||($ordenesapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($ordenesapeladasDto->getCveSala()!=""){
$sql.="CveSala='".$ordenesapeladasDto->getCveSala()."'";
if(($ordenesapeladasDto->getFechaRegistro()!="") ||($ordenesapeladasDto->getFechaActualizacion()!="") ||($ordenesapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($ordenesapeladasDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$ordenesapeladasDto->getFechaRegistro()."'";
if(($ordenesapeladasDto->getFechaActualizacion()!="") ||($ordenesapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($ordenesapeladasDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$ordenesapeladasDto->getFechaActualizacion()."'";
if(($ordenesapeladasDto->getActivo()!="") ){
$sql.=",";
}
}
if($ordenesapeladasDto->getActivo()!=""){
$sql.="Activo='".$ordenesapeladasDto->getActivo()."'";
}
$sql.=" WHERE idOrdenApelada='".$ordenesapeladasDto->getIdOrdenApelada()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new OrdenesapeladasDTO();
$tmp->setidOrdenApelada($ordenesapeladasDto->getIdOrdenApelada());
$tmp = $this->selectOrdenesapeladas($tmp,"",$this->_proveedor);
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
public function deleteOrdenesapeladas($ordenesapeladasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblordenesapeladas  WHERE idOrdenApelada='".$ordenesapeladasDto->getIdOrdenApelada()."'";
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
public function selectOrdenesapeladas($ordenesapeladasDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idOrdenApelada,idOrdenImputado,cveSentido,NumToca,AnioToca,CveSala,fechaRegistro,fechaActualizacion,Activo FROM tblordenesapeladas ";
if(($ordenesapeladasDto->getIdOrdenApelada()!="") ||($ordenesapeladasDto->getIdOrdenImputado()!="") ||($ordenesapeladasDto->getCveSentido()!="") ||($ordenesapeladasDto->getNumToca()!="") ||($ordenesapeladasDto->getAnioToca()!="") ||($ordenesapeladasDto->getCveSala()!="") ||($ordenesapeladasDto->getFechaRegistro()!="") ||($ordenesapeladasDto->getFechaActualizacion()!="") ||($ordenesapeladasDto->getActivo()!="") ){
$sql.=" WHERE ";
}
if($ordenesapeladasDto->getIdOrdenApelada()!=""){
$sql.="idOrdenApelada='".$ordenesapeladasDto->getIdOrdenApelada()."'";
if(($ordenesapeladasDto->getIdOrdenImputado()!="") ||($ordenesapeladasDto->getCveSentido()!="") ||($ordenesapeladasDto->getNumToca()!="") ||($ordenesapeladasDto->getAnioToca()!="") ||($ordenesapeladasDto->getCveSala()!="") ||($ordenesapeladasDto->getFechaRegistro()!="") ||($ordenesapeladasDto->getFechaActualizacion()!="") ||($ordenesapeladasDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($ordenesapeladasDto->getIdOrdenImputado()!=""){
$sql.="idOrdenImputado='".$ordenesapeladasDto->getIdOrdenImputado()."'";
if(($ordenesapeladasDto->getCveSentido()!="") ||($ordenesapeladasDto->getNumToca()!="") ||($ordenesapeladasDto->getAnioToca()!="") ||($ordenesapeladasDto->getCveSala()!="") ||($ordenesapeladasDto->getFechaRegistro()!="") ||($ordenesapeladasDto->getFechaActualizacion()!="") ||($ordenesapeladasDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($ordenesapeladasDto->getCveSentido()!=""){
$sql.="cveSentido='".$ordenesapeladasDto->getCveSentido()."'";
if(($ordenesapeladasDto->getNumToca()!="") ||($ordenesapeladasDto->getAnioToca()!="") ||($ordenesapeladasDto->getCveSala()!="") ||($ordenesapeladasDto->getFechaRegistro()!="") ||($ordenesapeladasDto->getFechaActualizacion()!="") ||($ordenesapeladasDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($ordenesapeladasDto->getNumToca()!=""){
$sql.="NumToca='".$ordenesapeladasDto->getNumToca()."'";
if(($ordenesapeladasDto->getAnioToca()!="") ||($ordenesapeladasDto->getCveSala()!="") ||($ordenesapeladasDto->getFechaRegistro()!="") ||($ordenesapeladasDto->getFechaActualizacion()!="") ||($ordenesapeladasDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($ordenesapeladasDto->getAnioToca()!=""){
$sql.="AnioToca='".$ordenesapeladasDto->getAnioToca()."'";
if(($ordenesapeladasDto->getCveSala()!="") ||($ordenesapeladasDto->getFechaRegistro()!="") ||($ordenesapeladasDto->getFechaActualizacion()!="") ||($ordenesapeladasDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($ordenesapeladasDto->getCveSala()!=""){
$sql.="CveSala='".$ordenesapeladasDto->getCveSala()."'";
if(($ordenesapeladasDto->getFechaRegistro()!="") ||($ordenesapeladasDto->getFechaActualizacion()!="") ||($ordenesapeladasDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($ordenesapeladasDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$ordenesapeladasDto->getFechaRegistro()."'";
if(($ordenesapeladasDto->getFechaActualizacion()!="") ||($ordenesapeladasDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($ordenesapeladasDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$ordenesapeladasDto->getFechaActualizacion()."'";
if(($ordenesapeladasDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($ordenesapeladasDto->getActivo()!=""){
$sql.="Activo='".$ordenesapeladasDto->getActivo()."'";
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
$tmp[$contador] = new OrdenesapeladasDTO();
$tmp[$contador]->setIdOrdenApelada($row["idOrdenApelada"]);
$tmp[$contador]->setIdOrdenImputado($row["idOrdenImputado"]);
$tmp[$contador]->setCveSentido($row["cveSentido"]);
$tmp[$contador]->setNumToca($row["NumToca"]);
$tmp[$contador]->setAnioToca($row["AnioToca"]);
$tmp[$contador]->setCveSala($row["CveSala"]);
$tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
$tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
$tmp[$contador]->setActivo($row["Activo"]);
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