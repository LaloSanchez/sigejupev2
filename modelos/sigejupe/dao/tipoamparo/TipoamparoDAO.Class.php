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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/tipoamparo/TipoamparoDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class TipoamparoDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertTipoamparo($tipoamparoDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tbltipoamparo(";
if($tipoamparoDto->getCveTipoAmparo()!=""){
$sql.="CveTipoAmparo";
if(($tipoamparoDto->getDesTipoAmparo()!="") ){
$sql.=",";
}
}
if($tipoamparoDto->getDesTipoAmparo()!=""){
$sql.="DesTipoAmparo";
}
$sql.=") VALUES(";
if($tipoamparoDto->getCveTipoAmparo()!=""){
$sql.="'".$tipoamparoDto->getCveTipoAmparo()."'";
if(($tipoamparoDto->getDesTipoAmparo()!="") ){
$sql.=",";
}
}
if($tipoamparoDto->getDesTipoAmparo()!=""){
$sql.="'".$tipoamparoDto->getDesTipoAmparo()."'";
}
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TipoamparoDTO();
$tmp->setCveTipoAmparo($this->_proveedor->lastID());
$tmp = $this->selectTipoamparo($tmp,"",$this->_proveedor);
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
public function updateTipoamparo($tipoamparoDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tbltipoamparo SET ";
if($tipoamparoDto->getCveTipoAmparo()!=""){
$sql.="CveTipoAmparo='".$tipoamparoDto->getCveTipoAmparo()."'";
if(($tipoamparoDto->getDesTipoAmparo()!="") ){
$sql.=",";
}
}
if($tipoamparoDto->getDesTipoAmparo()!=""){
$sql.="DesTipoAmparo='".$tipoamparoDto->getDesTipoAmparo()."'";
}
$sql.=" WHERE CveTipoAmparo='".$tipoamparoDto->getCveTipoAmparo()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new TipoamparoDTO();
$tmp->setCveTipoAmparo($tipoamparoDto->getCveTipoAmparo());
$tmp = $this->selectTipoamparo($tmp,"",$this->_proveedor);
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
public function deleteTipoamparo($tipoamparoDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tbltipoamparo  WHERE CveTipoAmparo='".$tipoamparoDto->getCveTipoAmparo()."'";
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
public function selectTipoamparo($tipoamparoDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT CveTipoAmparo,DesTipoAmparo FROM tbltipoamparo ";
if(($tipoamparoDto->getCveTipoAmparo()!="") ||($tipoamparoDto->getDesTipoAmparo()!="") ){
$sql.=" WHERE ";
}
if($tipoamparoDto->getCveTipoAmparo()!=""){
$sql.="CveTipoAmparo='".$tipoamparoDto->getCveTipoAmparo()."'";
if(($tipoamparoDto->getDesTipoAmparo()!="") ){
$sql.=" AND ";
}
}
if($tipoamparoDto->getDesTipoAmparo()!=""){
$sql.="DesTipoAmparo='".$tipoamparoDto->getDesTipoAmparo()."'";
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
$tmp[$contador] = new TipoamparoDTO();
$tmp[$contador]->setCveTipoAmparo($row["CveTipoAmparo"]);
$tmp[$contador]->setDesTipoAmparo($row["DesTipoAmparo"]);
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