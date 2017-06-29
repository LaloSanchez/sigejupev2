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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/autosimputados/AutosimputadosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class AutosimputadosDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertAutosimputados($autosimputadosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblautosimputados(";
if($autosimputadosDto->getidAutoImputado()!=""){
$sql.="idAutoImputado";
if(($autosimputadosDto->getIdActuacion()!="") ||($autosimputadosDto->getIdImputadoCarpeta()!="") ||($autosimputadosDto->getApelacion()!="") ){
$sql.=",";
}
}
if($autosimputadosDto->getidActuacion()!=""){
$sql.="idActuacion";
if(($autosimputadosDto->getIdImputadoCarpeta()!="") ||($autosimputadosDto->getApelacion()!="") ){
$sql.=",";
}
}
if($autosimputadosDto->getidImputadoCarpeta()!=""){
$sql.="idImputadoCarpeta";
if(($autosimputadosDto->getApelacion()!="") ){
$sql.=",";
}
}
if($autosimputadosDto->getApelacion()!=""){
$sql.="Apelacion";
}
$sql.=") VALUES(";
if($autosimputadosDto->getidAutoImputado()!=""){
$sql.="'".$autosimputadosDto->getidAutoImputado()."'";
if(($autosimputadosDto->getIdActuacion()!="") ||($autosimputadosDto->getIdImputadoCarpeta()!="") ||($autosimputadosDto->getApelacion()!="") ){
$sql.=",";
}
}
if($autosimputadosDto->getidActuacion()!=""){
$sql.="'".$autosimputadosDto->getidActuacion()."'";
if(($autosimputadosDto->getIdImputadoCarpeta()!="") ||($autosimputadosDto->getApelacion()!="") ){
$sql.=",";
}
}
if($autosimputadosDto->getidImputadoCarpeta()!=""){
$sql.="'".$autosimputadosDto->getidImputadoCarpeta()."'";
if(($autosimputadosDto->getApelacion()!="") ){
$sql.=",";
}
}
if($autosimputadosDto->getApelacion()!=""){
$sql.="'".$autosimputadosDto->getApelacion()."'";
}
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new AutosimputadosDTO();
$tmp->setidAutoImputado($this->_proveedor->lastID());
$tmp = $this->selectAutosimputados($tmp,"",$this->_proveedor);
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
public function updateAutosimputados($autosimputadosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblautosimputados SET ";
if($autosimputadosDto->getidAutoImputado()!=""){
$sql.="idAutoImputado='".$autosimputadosDto->getidAutoImputado()."'";
if(($autosimputadosDto->getIdActuacion()!="") ||($autosimputadosDto->getIdImputadoCarpeta()!="") ||($autosimputadosDto->getApelacion()!="") ||($autosimputadosDto->getActivo()!="") ){
$sql.=",";
}
}
if($autosimputadosDto->getidActuacion()!=""){
$sql.="idActuacion='".$autosimputadosDto->getidActuacion()."'";
if(($autosimputadosDto->getIdImputadoCarpeta()!="") ||($autosimputadosDto->getApelacion()!="") ||($autosimputadosDto->getActivo()!="") ){
$sql.=",";
}
}
if($autosimputadosDto->getidImputadoCarpeta()!=""){
$sql.="idImputadoCarpeta='".$autosimputadosDto->getidImputadoCarpeta()."'";
if(($autosimputadosDto->getApelacion()!="") ||($autosimputadosDto->getActivo()!="") ){
$sql.=",";
}
}
if($autosimputadosDto->getApelacion()!=""){
$sql.="Apelacion='".$autosimputadosDto->getApelacion()."'";
if(($autosimputadosDto->getActivo()!="") ){
$sql.=",";
}
}
if($autosimputadosDto->getActivo()!=""){
$sql.="activo='".$autosimputadosDto->getActivo()."'";
}
$sql.=" WHERE idAutoImputado='".$autosimputadosDto->getidAutoImputado()."'";
error_log('update autos imputados: '.$sql);
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new AutosimputadosDTO();
$tmp->setidAutoImputado($autosimputadosDto->getidAutoImputado());
$tmp = $this->selectAutosimputados($tmp,"",$this->_proveedor);
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
public function deleteAutosimputados($autosimputadosDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblautosimputados  WHERE idAutoImputado='".$autosimputadosDto->getidAutoImputado()."'";
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
public function selectAutosimputados($autosimputadosDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idAutoImputado,idActuacion,idImputadoCarpeta,Apelacion FROM tblautosimputados ";
if(($autosimputadosDto->getidAutoImputado()!="") ||($autosimputadosDto->getidActuacion()!="") ||($autosimputadosDto->getidImputadoCarpeta()!="") ||($autosimputadosDto->getApelacion()!="") ||($autosimputadosDto->getActivo()!="") ){
$sql.=" WHERE ";
}
if($autosimputadosDto->getidAutoImputado()!=""){
$sql.="idAutoImputado='".$autosimputadosDto->getIdAutoImputado()."'";
if(($autosimputadosDto->getIdActuacion()!="") ||($autosimputadosDto->getIdImputadoCarpeta()!="") ||($autosimputadosDto->getApelacion()!="") ||($autosimputadosDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($autosimputadosDto->getidActuacion()!=""){
$sql.="idActuacion='".$autosimputadosDto->getIdActuacion()."'";
if(($autosimputadosDto->getIdImputadoCarpeta()!="") ||($autosimputadosDto->getApelacion()!="") ||($autosimputadosDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($autosimputadosDto->getidImputadoCarpeta()!=""){
$sql.="idImputadoCarpeta='".$autosimputadosDto->getIdImputadoCarpeta()."'";
if(($autosimputadosDto->getApelacion()!="") ||($autosimputadosDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($autosimputadosDto->getApelacion()!=""){
$sql.="Apelacion='".$autosimputadosDto->getApelacion()."'";
if(($autosimputadosDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($autosimputadosDto->getActivo()!=""){
$sql.="activo='".$autosimputadosDto->getActivo()."'";
}
if($orden!=""){
$sql.=$orden;
}else{
$sql.="";
}
error_log('autosimputados: '.$sql);
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
$tmp[$contador] = new AutosimputadosDTO();
$tmp[$contador]->setIdAutoImputado($row["idAutoImputado"]);
$tmp[$contador]->setIdActuacion($row["idActuacion"]);
$tmp[$contador]->setIdImputadoCarpeta($row["idImputadoCarpeta"]);
$tmp[$contador]->setApelacion($row["Apelacion"]);
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