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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/ordenesimputados/OrdenesimputadosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class OrdenesimputadosDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertOrdenesimputados($ordenesimputadosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblordenesimputados(";
if($ordenesimputadosDto->getIdOrdenImputado()!=""){
$sql.="idOrdenImputado";
if(($ordenesimputadosDto->getIdImputadoCarpeta()!="") ||($ordenesimputadosDto->getIdActuacion()!="") ||($ordenesimputadosDto->getCveTipoOrden()!="") ||($ordenesimputadosDto->getApelacion()!="") ||($ordenesimputadosDto->getActivo()!="") ){
$sql.=",";
}
}
if($ordenesimputadosDto->getIdImputadoCarpeta()!=""){
$sql.="idImputadoCarpeta";
if(($ordenesimputadosDto->getIdActuacion()!="") ||($ordenesimputadosDto->getCveTipoOrden()!="") ||($ordenesimputadosDto->getApelacion()!="") ||($ordenesimputadosDto->getActivo()!="") ){
$sql.=",";
}
}
if($ordenesimputadosDto->getIdActuacion()!=""){
$sql.="idActuacion";
if(($ordenesimputadosDto->getCveTipoOrden()!="") ||($ordenesimputadosDto->getApelacion()!="") ||($ordenesimputadosDto->getActivo()!="") ){
$sql.=",";
}
}
if($ordenesimputadosDto->getCveTipoOrden()!=""){
$sql.="cveTipoOrden";
if(($ordenesimputadosDto->getApelacion()!="") ||($ordenesimputadosDto->getActivo()!="") ){
$sql.=",";
}
}
if($ordenesimputadosDto->getApelacion()!=""){
$sql.="Apelacion";
if(($ordenesimputadosDto->getActivo()!="") ){
$sql.=",";
}
}
if($ordenesimputadosDto->getActivo()!=""){
$sql.="Activo";
}
$sql.=") VALUES(";
if($ordenesimputadosDto->getIdOrdenImputado()!=""){
$sql.="'".$ordenesimputadosDto->getIdOrdenImputado()."'";
if(($ordenesimputadosDto->getIdImputadoCarpeta()!="") ||($ordenesimputadosDto->getIdActuacion()!="") ||($ordenesimputadosDto->getCveTipoOrden()!="") ||($ordenesimputadosDto->getApelacion()!="") ||($ordenesimputadosDto->getActivo()!="") ){
$sql.=",";
}
}
if($ordenesimputadosDto->getIdImputadoCarpeta()!=""){
$sql.="'".$ordenesimputadosDto->getIdImputadoCarpeta()."'";
if(($ordenesimputadosDto->getIdActuacion()!="") ||($ordenesimputadosDto->getCveTipoOrden()!="") ||($ordenesimputadosDto->getApelacion()!="") ||($ordenesimputadosDto->getActivo()!="") ){
$sql.=",";
}
}
if($ordenesimputadosDto->getIdActuacion()!=""){
$sql.="'".$ordenesimputadosDto->getIdActuacion()."'";
if(($ordenesimputadosDto->getCveTipoOrden()!="") ||($ordenesimputadosDto->getApelacion()!="") ||($ordenesimputadosDto->getActivo()!="") ){
$sql.=",";
}
}
if($ordenesimputadosDto->getCveTipoOrden()!=""){
$sql.="'".$ordenesimputadosDto->getCveTipoOrden()."'";
if(($ordenesimputadosDto->getApelacion()!="") ||($ordenesimputadosDto->getActivo()!="") ){
$sql.=",";
}
}
if($ordenesimputadosDto->getApelacion()!=""){
$sql.="'".$ordenesimputadosDto->getApelacion()."'";
if(($ordenesimputadosDto->getActivo()!="") ){
$sql.=",";
}
}
if($ordenesimputadosDto->getActivo()!=""){
$sql.="'".$ordenesimputadosDto->getActivo()."'";
}
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new OrdenesimputadosDTO();
$tmp->setidOrdenImputado($this->_proveedor->lastID());
$tmp = $this->selectOrdenesimputados($tmp,"",$this->_proveedor);
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
public function updateOrdenesimputados($ordenesimputadosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblordenesimputados SET ";
if($ordenesimputadosDto->getIdOrdenImputado()!=""){
$sql.="idOrdenImputado='".$ordenesimputadosDto->getIdOrdenImputado()."'";
if(($ordenesimputadosDto->getIdImputadoCarpeta()!="") ||($ordenesimputadosDto->getIdActuacion()!="") ||($ordenesimputadosDto->getCveTipoOrden()!="") ||($ordenesimputadosDto->getApelacion()!="") ||($ordenesimputadosDto->getActivo()!="") ){
$sql.=",";
}
}
if($ordenesimputadosDto->getIdImputadoCarpeta()!=""){
$sql.="idImputadoCarpeta='".$ordenesimputadosDto->getIdImputadoCarpeta()."'";
if(($ordenesimputadosDto->getIdActuacion()!="") ||($ordenesimputadosDto->getCveTipoOrden()!="") ||($ordenesimputadosDto->getApelacion()!="") ||($ordenesimputadosDto->getActivo()!="") ){
$sql.=",";
}
}
if($ordenesimputadosDto->getIdActuacion()!=""){
$sql.="idActuacion='".$ordenesimputadosDto->getIdActuacion()."'";
if(($ordenesimputadosDto->getCveTipoOrden()!="") ||($ordenesimputadosDto->getApelacion()!="") ||($ordenesimputadosDto->getActivo()!="") ){
$sql.=",";
}
}
if($ordenesimputadosDto->getCveTipoOrden()!=""){
$sql.="cveTipoOrden='".$ordenesimputadosDto->getCveTipoOrden()."'";
if(($ordenesimputadosDto->getApelacion()!="") ||($ordenesimputadosDto->getActivo()!="") ){
$sql.=",";
}
}
if($ordenesimputadosDto->getApelacion()!=""){
$sql.="Apelacion='".$ordenesimputadosDto->getApelacion()."'";
if(($ordenesimputadosDto->getActivo()!="") ){
$sql.=",";
}
}
if($ordenesimputadosDto->getActivo()!=""){
$sql.="Activo='".$ordenesimputadosDto->getActivo()."'";
}
$sql.=" WHERE idOrdenImputado='".$ordenesimputadosDto->getIdOrdenImputado()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new OrdenesimputadosDTO();
$tmp->setidOrdenImputado($ordenesimputadosDto->getIdOrdenImputado());
$tmp = $this->selectOrdenesimputados($tmp,"",$this->_proveedor);
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
public function deleteOrdenesimputados($ordenesimputadosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblordenesimputados  WHERE idOrdenImputado='".$ordenesimputadosDto->getIdOrdenImputado()."'";
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
public function selectOrdenesimputados($ordenesimputadosDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idOrdenImputado,idImputadoCarpeta,idActuacion,cveTipoOrden,Apelacion,Activo FROM tblordenesimputados ";
if(($ordenesimputadosDto->getIdOrdenImputado()!="") ||($ordenesimputadosDto->getIdImputadoCarpeta()!="") ||($ordenesimputadosDto->getIdActuacion()!="") ||($ordenesimputadosDto->getCveTipoOrden()!="") ||($ordenesimputadosDto->getApelacion()!="") ||($ordenesimputadosDto->getActivo()!="") ){
$sql.=" WHERE ";
}
if($ordenesimputadosDto->getIdOrdenImputado()!=""){
$sql.="idOrdenImputado='".$ordenesimputadosDto->getIdOrdenImputado()."'";
if(($ordenesimputadosDto->getIdImputadoCarpeta()!="") ||($ordenesimputadosDto->getIdActuacion()!="") ||($ordenesimputadosDto->getCveTipoOrden()!="") ||($ordenesimputadosDto->getApelacion()!="") ||($ordenesimputadosDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($ordenesimputadosDto->getIdImputadoCarpeta()!=""){
$sql.="idImputadoCarpeta='".$ordenesimputadosDto->getIdImputadoCarpeta()."'";
if(($ordenesimputadosDto->getIdActuacion()!="") ||($ordenesimputadosDto->getCveTipoOrden()!="") ||($ordenesimputadosDto->getApelacion()!="") ||($ordenesimputadosDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($ordenesimputadosDto->getIdActuacion()!=""){
$sql.="idActuacion='".$ordenesimputadosDto->getIdActuacion()."'";
if(($ordenesimputadosDto->getCveTipoOrden()!="") ||($ordenesimputadosDto->getApelacion()!="") ||($ordenesimputadosDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($ordenesimputadosDto->getCveTipoOrden()!=""){
$sql.="cveTipoOrden='".$ordenesimputadosDto->getCveTipoOrden()."'";
if(($ordenesimputadosDto->getApelacion()!="") ||($ordenesimputadosDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($ordenesimputadosDto->getApelacion()!=""){
$sql.="Apelacion='".$ordenesimputadosDto->getApelacion()."'";
if(($ordenesimputadosDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($ordenesimputadosDto->getActivo()!=""){
$sql.="Activo='".$ordenesimputadosDto->getActivo()."'";
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
$tmp[$contador] = new OrdenesimputadosDTO();
$tmp[$contador]->setIdOrdenImputado($row["idOrdenImputado"]);
$tmp[$contador]->setIdImputadoCarpeta($row["idImputadoCarpeta"]);
$tmp[$contador]->setIdActuacion($row["idActuacion"]);
$tmp[$contador]->setCveTipoOrden($row["cveTipoOrden"]);
$tmp[$contador]->setApelacion($row["Apelacion"]);
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