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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/terminos/TerminosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class TerminosDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertTerminos($terminosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblterminos(";
if($terminosDto->getidTermino()!=""){
$sql.="idTermino";
if(($terminosDto->getTexto()!="") ||($terminosDto->getActivo()!="") ||($terminosDto->getCveTipoTermino()!="") ){
$sql.=",";
}
}
if($terminosDto->gettexto()!=""){
$sql.="texto";
if(($terminosDto->getActivo()!="") ||($terminosDto->getCveTipoTermino()!="") ){
$sql.=",";
}
}
if($terminosDto->getactivo()!=""){
$sql.="activo";
if(($terminosDto->getCveTipoTermino()!="") ){
$sql.=",";
}
}
if($terminosDto->getcveTipoTermino()!=""){
$sql.="cveTipoTermino";
}
$sql.=") VALUES(";
if($terminosDto->getidTermino()!=""){
$sql.="'".$terminosDto->getidTermino()."'";
if(($terminosDto->getTexto()!="") ||($terminosDto->getActivo()!="") ||($terminosDto->getCveTipoTermino()!="") ){
$sql.=",";
}
}
if($terminosDto->gettexto()!=""){
$sql.="'".$terminosDto->gettexto()."'";
if(($terminosDto->getActivo()!="") ||($terminosDto->getCveTipoTermino()!="") ){
$sql.=",";
}
}
if($terminosDto->getactivo()!=""){
$sql.="'".$terminosDto->getactivo()."'";
if(($terminosDto->getCveTipoTermino()!="") ){
$sql.=",";
}
}
if($terminosDto->getcveTipoTermino()!=""){
$sql.="'".$terminosDto->getcveTipoTermino()."'";
}
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TerminosDTO();
$tmp->setidTermino($this->_proveedor->lastID());
$tmp = $this->selectTerminos($tmp,"",$this->_proveedor);
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
public function updateTerminos($terminosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblterminos SET ";
if($terminosDto->getidTermino()!=""){
$sql.="idTermino='".$terminosDto->getidTermino()."'";
if(($terminosDto->getTexto()!="") ||($terminosDto->getActivo()!="") ||($terminosDto->getCveTipoTermino()!="") ){
$sql.=",";
}
}
if($terminosDto->gettexto()!=""){
$sql.="texto='".$terminosDto->gettexto()."'";
if(($terminosDto->getActivo()!="") ||($terminosDto->getCveTipoTermino()!="") ){
$sql.=",";
}
}
if($terminosDto->getactivo()!=""){
$sql.="activo='".$terminosDto->getactivo()."'";
if(($terminosDto->getCveTipoTermino()!="") ){
$sql.=",";
}
}
if($terminosDto->getcveTipoTermino()!=""){
$sql.="cveTipoTermino='".$terminosDto->getcveTipoTermino()."'";
}
$sql.=" WHERE idTermino='".$terminosDto->getidTermino()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TerminosDTO();
$tmp->setidTermino($terminosDto->getidTermino());
$tmp = $this->selectTerminos($tmp,"",$this->_proveedor);
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
public function deleteTerminos($terminosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblterminos  WHERE idTermino='".$terminosDto->getidTermino()."'";
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
public function selectTerminos($terminosDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idTermino,texto,activo,cveTipoTermino FROM tblterminos ";
if(($terminosDto->getidTermino()!="") ||($terminosDto->gettexto()!="") ||($terminosDto->getactivo()!="") ||($terminosDto->getcveTipoTermino()!="") ){
$sql.=" WHERE ";
}
if($terminosDto->getidTermino()!=""){
$sql.="idTermino='".$terminosDto->getIdTermino()."'";
if(($terminosDto->getTexto()!="") ||($terminosDto->getActivo()!="") ||($terminosDto->getCveTipoTermino()!="") ){
$sql.=" AND ";
}
}
if($terminosDto->gettexto()!=""){
$sql.="texto='".$terminosDto->getTexto()."'";
if(($terminosDto->getActivo()!="") ||($terminosDto->getCveTipoTermino()!="") ){
$sql.=" AND ";
}
}
if($terminosDto->getactivo()!=""){
$sql.="activo='".$terminosDto->getActivo()."'";
if(($terminosDto->getCveTipoTermino()!="") ){
$sql.=" AND ";
}
}
if($terminosDto->getcveTipoTermino()!=""){
$sql.="cveTipoTermino='".$terminosDto->getCveTipoTermino()."'";
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
$tmp[$contador] = new TerminosDTO();
$tmp[$contador]->setIdTermino($row["idTermino"]);
$tmp[$contador]->setTexto($row["texto"]);
$tmp[$contador]->setActivo($row["activo"]);
$tmp[$contador]->setCveTipoTermino($row["cveTipoTermino"]);
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