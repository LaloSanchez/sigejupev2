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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/autosapelados/AutosapeladosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class AutosapeladosDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertAutosapelados($autosapeladosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblautosapelados(";
if($autosapeladosDto->getIdAutoApelado()!=""){
$sql.="idAutoApelado";
if(($autosapeladosDto->getIdAutoImputado()!="") ||($autosapeladosDto->getCveSentido()!="") ||($autosapeladosDto->getNumToca()!="") ||($autosapeladosDto->getAnioToca()!="") ||($autosapeladosDto->getCveSala()!="") ){
$sql.=",";
}
}
if($autosapeladosDto->getIdAutoImputado()!=""){
$sql.="idAutoImputado";
if(($autosapeladosDto->getCveSentido()!="") ||($autosapeladosDto->getNumToca()!="") ||($autosapeladosDto->getAnioToca()!="") ||($autosapeladosDto->getCveSala()!="") ){
$sql.=",";
}
}
if($autosapeladosDto->getCveSentido()!=""){
$sql.="cveSentido";
if(($autosapeladosDto->getNumToca()!="") ||($autosapeladosDto->getAnioToca()!="") ||($autosapeladosDto->getCveSala()!="") ){
$sql.=",";
}
}
if($autosapeladosDto->getNumToca()!=""){
$sql.="NumToca";
if(($autosapeladosDto->getAnioToca()!="") ||($autosapeladosDto->getCveSala()!="") ){
$sql.=",";
}
}
if($autosapeladosDto->getAnioToca()!=""){
$sql.="AnioToca";
if(($autosapeladosDto->getCveSala()!="") ){
$sql.=",";
}
}
if($autosapeladosDto->getCveSala()!=""){
$sql.="CveSala";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($autosapeladosDto->getIdAutoApelado()!=""){
$sql.="'".$autosapeladosDto->getIdAutoApelado()."'";
if(($autosapeladosDto->getIdAutoImputado()!="") ||($autosapeladosDto->getCveSentido()!="") ||($autosapeladosDto->getNumToca()!="") ||($autosapeladosDto->getAnioToca()!="") ||($autosapeladosDto->getCveSala()!="") ){
$sql.=",";
}
}
if($autosapeladosDto->getIdAutoImputado()!=""){
$sql.="'".$autosapeladosDto->getIdAutoImputado()."'";
if(($autosapeladosDto->getCveSentido()!="") ||($autosapeladosDto->getNumToca()!="") ||($autosapeladosDto->getAnioToca()!="") ||($autosapeladosDto->getCveSala()!="") ){
$sql.=",";
}
}
if($autosapeladosDto->getcveSentido()!=""){
$sql.="'".$autosapeladosDto->getcveSentido()."'";
if(($autosapeladosDto->getNumToca()!="") ||($autosapeladosDto->getAnioToca()!="") ||($autosapeladosDto->getCveSala()!="") ){
$sql.=",";
}
}
if($autosapeladosDto->getNumToca()!=""){
$sql.="'".$autosapeladosDto->getNumToca()."'";
if(($autosapeladosDto->getAnioToca()!="") ||($autosapeladosDto->getCveSala()!="") ){
$sql.=",";
}
}
if($autosapeladosDto->getAnioToca()!=""){
$sql.="'".$autosapeladosDto->getAnioToca()."'";
if(($autosapeladosDto->getCveSala()!="") ){
$sql.=",";
}
}
if($autosapeladosDto->getCveSala()!=""){
$sql.="'".$autosapeladosDto->getCveSala()."'";
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new AutosapeladosDTO();
$tmp->setIdAutoApelado($this->_proveedor->lastID());
$tmp = $this->selectAutosapelados($tmp,"",$this->_proveedor);
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
public function updateAutosapelados($autosapeladosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblautosapelados SET ";
if($autosapeladosDto->getIdAutoApelado()!=""){
$sql.="idAutoApelado='".$autosapeladosDto->getIdAutoApelado()."'";
if(($autosapeladosDto->getIdAutoImputado()!="") ||($autosapeladosDto->getCveSentido()!="") ||($autosapeladosDto->getNumToca()!="") ||($autosapeladosDto->getAnioToca()!="") ||($autosapeladosDto->getCveSala()!="") ||($autosapeladosDto->getActivo()!="") ||($autosapeladosDto->getFechaRegistro()!="") ||($autosapeladosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($autosapeladosDto->getIdAutoImputado()!=""){
$sql.="idAutoImputado='".$autosapeladosDto->getIdAutoImputado()."'";
if(($autosapeladosDto->getCveSentido()!="") ||($autosapeladosDto->getNumToca()!="") ||($autosapeladosDto->getAnioToca()!="") ||($autosapeladosDto->getCveSala()!="") ||($autosapeladosDto->getActivo()!="") ||($autosapeladosDto->getFechaRegistro()!="") ||($autosapeladosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($autosapeladosDto->getCveSentido()!=""){
$sql.="cveSentido='".$autosapeladosDto->getCveSentido()."'";
if(($autosapeladosDto->getNumToca()!="") ||($autosapeladosDto->getAnioToca()!="") ||($autosapeladosDto->getCveSala()!="") ||($autosapeladosDto->getActivo()!="") ||($autosapeladosDto->getFechaRegistro()!="") ||($autosapeladosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($autosapeladosDto->getNumToca()!=""){
$sql.="NumToca='".$autosapeladosDto->getNumToca()."'";
if(($autosapeladosDto->getAnioToca()!="") ||($autosapeladosDto->getCveSala()!="") ||($autosapeladosDto->getActivo()!="") ||($autosapeladosDto->getFechaRegistro()!="") ||($autosapeladosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($autosapeladosDto->getAnioToca()!=""){
$sql.="AnioToca='".$autosapeladosDto->getAnioToca()."'";
if(($autosapeladosDto->getCveSala()!="") ||($autosapeladosDto->getActivo()!="") ||($autosapeladosDto->getFechaRegistro()!="") ||($autosapeladosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($autosapeladosDto->getCveSala()!=""){
$sql.="CveSala='".$autosapeladosDto->getCveSala()."'";
if(($autosapeladosDto->getActivo()!="") || ($autosapeladosDto->getFechaRegistro()!="") ||($autosapeladosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($autosapeladosDto->getActivo()!=""){
$sql.="activo='".$autosapeladosDto->getActivo()."'";
if(($autosapeladosDto->getFechaRegistro()!="") ||($autosapeladosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($autosapeladosDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$autosapeladosDto->getfechaRegistro()."'";
if(($autosapeladosDto->getFechaActualizacion()!="") ){
$sql.=",";
}
}
if($autosapeladosDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$autosapeladosDto->getFechaActualizacion()."'";
}
$sql.=" WHERE idAutoApelado='".$autosapeladosDto->getIdAutoApelado()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new AutosapeladosDTO();
$tmp->setIdAutoApelado($autosapeladosDto->getIdAutoApelado());
$tmp = $this->selectAutosapelados($tmp,"",$this->_proveedor);
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
public function deleteAutosapelados($autosapeladosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblautosapelados  WHERE idAutoApelado='".$autosapeladosDto->getIdAutoApelado()."'";
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
public function selectAutosapelados($autosapeladosDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idAutoApelado,idAutoImputado,cveSentido,NumToca,AnioToca,CveSala,fechaRegistro,fechaActualizacion FROM tblautosapelados ";
if(($autosapeladosDto->getIdAutoApelado()!="") ||($autosapeladosDto->getIdAutoImputado()!="") ||($autosapeladosDto->getCveSentido()!="") ||($autosapeladosDto->getNumToca()!="") ||($autosapeladosDto->getAnioToca()!="") ||($autosapeladosDto->getCveSala()!="") ||($autosapeladosDto->getFechaRegistro()!="") ||($autosapeladosDto->getFechaActualizacion()!="") ){
$sql.=" WHERE ";
}
if($autosapeladosDto->getIdAutoApelado()!=""){
$sql.="idAutoApelado='".$autosapeladosDto->getIdAutoApelado()."'";
if(($autosapeladosDto->getIdAutoImputado()!="") ||($autosapeladosDto->getCveSentido()!="") ||($autosapeladosDto->getNumToca()!="") ||($autosapeladosDto->getAnioToca()!="") ||($autosapeladosDto->getCveSala()!="") ||($autosapeladosDto->getFechaRegistro()!="") ||($autosapeladosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($autosapeladosDto->getIdAutoImputado()!=""){
$sql.="idAutoImputado='".$autosapeladosDto->getIdAutoImputado()."'";
if(($autosapeladosDto->getCveSentido()!="") ||($autosapeladosDto->getNumToca()!="") ||($autosapeladosDto->getAnioToca()!="") ||($autosapeladosDto->getCveSala()!="") ||($autosapeladosDto->getFechaRegistro()!="") ||($autosapeladosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($autosapeladosDto->getcveSentido()!=""){
$sql.="cveSentido='".$autosapeladosDto->getCveSentido()."'";
if(($autosapeladosDto->getNumToca()!="") ||($autosapeladosDto->getAnioToca()!="") ||($autosapeladosDto->getCveSala()!="") ||($autosapeladosDto->getFechaRegistro()!="") ||($autosapeladosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($autosapeladosDto->getNumToca()!=""){
$sql.="NumToca='".$autosapeladosDto->getNumToca()."'";
if(($autosapeladosDto->getAnioToca()!="") ||($autosapeladosDto->getCveSala()!="") ||($autosapeladosDto->getFechaRegistro()!="") ||($autosapeladosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($autosapeladosDto->getAnioToca()!=""){
$sql.="AnioToca='".$autosapeladosDto->getAnioToca()."'";
if(($autosapeladosDto->getCveSala()!="") ||($autosapeladosDto->getFechaRegistro()!="") ||($autosapeladosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($autosapeladosDto->getCveSala()!=""){
$sql.="CveSala='".$autosapeladosDto->getCveSala()."'";
if(($autosapeladosDto->getFechaRegistro()!="") ||($autosapeladosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($autosapeladosDto->getFechaRegistro()!=""){
$sql.="fechaRegistro='".$autosapeladosDto->getFechaRegistro()."'";
if(($autosapeladosDto->getFechaActualizacion()!="") ){
$sql.=" AND ";
}
}
if($autosapeladosDto->getFechaActualizacion()!=""){
$sql.="fechaActualizacion='".$autosapeladosDto->getFechaActualizacion()."'";
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
$tmp[$contador] = new AutosapeladosDTO();
$tmp[$contador]->setIdAutoApelado($row["idAutoApelado"]);
$tmp[$contador]->setIdAutoImputado($row["idAutoImputado"]);
$tmp[$contador]->setNumToca($row["NumToca"]);
$tmp[$contador]->setAnioToca($row["AnioToca"]);
$tmp[$contador]->setCveSala($row["CveSala"]);
$tmp[$contador]->setCveSentido($row["cveSentido"]);
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