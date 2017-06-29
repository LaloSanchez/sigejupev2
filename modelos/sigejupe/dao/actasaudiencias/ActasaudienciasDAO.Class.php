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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/actasaudiencias/ActasaudienciasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class ActasaudienciasDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertActasaudiencias($actasaudienciasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblactasaudiencias(";
if($actasaudienciasDto->getidActasAudiencia()!=""){
$sql.="idActasAudiencia";
if(($actasaudienciasDto->getIdActuacion()!="") ||($actasaudienciasDto->getIdAudiencia()!="") ){
$sql.=",";
}
}
if($actasaudienciasDto->getidActuacion()!=""){
$sql.="idActuacion";
if(($actasaudienciasDto->getIdAudiencia()!="") ){
$sql.=",";
}
}
if($actasaudienciasDto->getidAudiencia()!=""){
$sql.="idAudiencia";
}
$sql.=",fechaRegistro";
$sql.=",fechaActualizacion";
$sql.=") VALUES(";
if($actasaudienciasDto->getidActasAudiencia()!=""){
$sql.="'".$actasaudienciasDto->getidActasAudiencia()."'";
if(($actasaudienciasDto->getIdActuacion()!="") ||($actasaudienciasDto->getIdAudiencia()!="") ){
$sql.=",";
}
}
if($actasaudienciasDto->getidActuacion()!=""){
$sql.="'".$actasaudienciasDto->getidActuacion()."'";
if(($actasaudienciasDto->getIdAudiencia()!="") ){
$sql.=",";
}
}
if($actasaudienciasDto->getidAudiencia()!=""){
$sql.="'".$actasaudienciasDto->getidAudiencia()."'";
}
if($actasaudienciasDto->getfechaRegistro()!=""){
}
if($actasaudienciasDto->getfechaActualizacion()!=""){
}
$sql.=",now()";
$sql.=",now()";
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new ActasaudienciasDTO();
$tmp->setidActasAudiencia($this->_proveedor->lastID());
$tmp = $this->selectActasaudiencias($tmp,"",$this->_proveedor);
} else {
	$msg = $this->_proveedor->error();
    $error = true;
}
if ($proveedor == null) {
    $this->_proveedor->close();
}
unset($contador);
unset($sql);
return $tmp;
}
public function updateActasaudiencias($actasaudienciasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblactasaudiencias SET ";
if($actasaudienciasDto->getidActasAudiencia()!=""){
$sql.="idActasAudiencia='".$actasaudienciasDto->getidActasAudiencia()."'";
if(($actasaudienciasDto->getIdActuacion()!="") ||($actasaudienciasDto->getIdAudiencia()!="") ||($actasaudienciasDto->getFechaRegistro()!="") ||($actasaudienciasDto->getFechaActualizacion()!="") || ($actasaudienciasDto->getActivo()!="")){
$sql.=",";
}
}
if($actasaudienciasDto->getidActuacion()!=""){
$sql.="idActuacion='".$actasaudienciasDto->getidActuacion()."'";
if(($actasaudienciasDto->getIdAudiencia()!="") ||($actasaudienciasDto->getFechaRegistro()!="") ||($actasaudienciasDto->getFechaActualizacion()!="") || ($actasaudienciasDto->getActivo()!="")){
$sql.=",";
}
}
if($actasaudienciasDto->getidAudiencia()!=""){
$sql.="idAudiencia='".$actasaudienciasDto->getidAudiencia()."'";
if(($actasaudienciasDto->getFechaRegistro()!="") ||($actasaudienciasDto->getFechaActualizacion()!="") || ($actasaudienciasDto->getActivo()!="")){
$sql.=",";
}
}
if($actasaudienciasDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$actasaudienciasDto->getfechaRegistro()."'";
if(($actasaudienciasDto->getFechaActualizacion()!="") || ($actasaudienciasDto->getActivo()!="")){
$sql.=",";
}
}
if($actasaudienciasDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$actasaudienciasDto->getfechaActualizacion()."'";
if(($actasaudienciasDto->getActivo()!="") ){
$sql.=",";
}
}
if($actasaudienciasDto->getActivo()!=""){
$sql.="activo='".$actasaudienciasDto->getActivo()."'";
}
$sql.=" WHERE idActasAudiencia='".$actasaudienciasDto->getidActasAudiencia()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new ActasaudienciasDTO();
$tmp->setidActasAudiencia($actasaudienciasDto->getidActasAudiencia());
$tmp = $this->selectActasaudiencias($tmp,"",$this->_proveedor);
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

public function updateAudiencia($actasaudienciasDto,$proveedor=null){
	$tmp = "";
	$contador = 0;
	if ($proveedor == null) {
	$this->_conexion(null);
	//$this->_proveedor->connect();
	} else if ($proveedor != null) {
	$this->_proveedor = $proveedor;
	}
	$sql="UPDATE tblactasaudiencias SET "
	."idAudiencia='".$actasaudienciasDto->getidAudiencia()."', fechaActualizacion=now() "
	."WHERE idActuacion='".$actasaudienciasDto->getIdActuacion()."'";
	$this->_proveedor->execute($sql);
	if (!$this->_proveedor->error()) {
	$tmp = new ActasaudienciasDTO();
	$tmp->setidActasAudiencia($actasaudienciasDto->getidActasAudiencia());
	$tmp = $this->selectActasaudiencias($tmp,"",$this->_proveedor);
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

public function borradoLogico($actasaudienciasDto,$proveedor=null){
	$tmp = "";
	$contador = 0;
	if ($proveedor == null) {
		$this->_conexion(null);
	} else if ($proveedor != null) {
		$this->_proveedor = $proveedor;
	}

	$sql="UPDATE tblactasaudiencias SET ";
	$sql.="fechaActualizacion=now(), ";
	$sql.="activo='N' ";
	$sql.=" WHERE idActuacion='".$actasaudienciasDto->getIdActuacion()."'";
	$this->_proveedor->execute($sql);
	if (!$this->_proveedor->error()) {
		$tmp = new ActasaudienciasDTO();
		$tmp->setidActasAudiencia($actasaudienciasDto->getidActasAudiencia());
		$tmp = $this->selectActasaudiencias($tmp,"",$this->_proveedor);
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

public function deleteActasaudiencias($actasaudienciasDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblactasaudiencias  WHERE idActasAudiencia='".$actasaudienciasDto->getidActasAudiencia()."'";
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

public function selectActasaudienciasRegistrado($actasaudienciasDto,$orden="",$proveedor=null){
	$tmp = "";
	$contador = 0;
	if ($proveedor == null) {
		$this->_conexion(null);
	} else if ($proveedor != null) {
		$this->_proveedor = $proveedor;
	}
	$sql="SELECT idActasAudiencia FROM tblactasaudiencias WHERE idAudiencia='".$actasaudienciasDto->getIdAudiencia()."' AND activo='N'";
	$this->_proveedor->execute($sql);
	if (!$this->_proveedor->error()) {
		if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
			$row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0);
			$idActasAudiencia = $row["idActasAudiencia"];
		} else {
			$idActasAudiencia = 0;
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
	return $idActasAudiencia;
}
public function selectActasaudiencias($actasaudienciasDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idActasAudiencia,idActuacion,idAudiencia,fechaRegistro,fechaActualizacion, activo FROM tblactasaudiencias ";
if(($actasaudienciasDto->getidActasAudiencia()!="") ||($actasaudienciasDto->getidActuacion()!="") ||($actasaudienciasDto->getidAudiencia()!="") ||($actasaudienciasDto->getfechaRegistro()!="") ||($actasaudienciasDto->getfechaActualizacion()!="") ||($actasaudienciasDto->getActivo()!="") ){
$sql.=" WHERE ";
}
if($actasaudienciasDto->getidActasAudiencia()!=""){
$sql.="idActasAudiencia='".$actasaudienciasDto->getIdActasAudiencia()."'";
if(($actasaudienciasDto->getIdActuacion()!="") ||($actasaudienciasDto->getIdAudiencia()!="") ||($actasaudienciasDto->getFechaRegistro()!="") ||($actasaudienciasDto->getFechaActualizacion()!="") ||($actasaudienciasDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($actasaudienciasDto->getidActuacion()!=""){
$sql.="idActuacion='".$actasaudienciasDto->getIdActuacion()."'";
if(($actasaudienciasDto->getIdAudiencia()!="") ||($actasaudienciasDto->getFechaRegistro()!="") ||($actasaudienciasDto->getFechaActualizacion()!="") ||($actasaudienciasDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($actasaudienciasDto->getidAudiencia()!=""){
$sql.="idAudiencia='".$actasaudienciasDto->getIdAudiencia()."'";
if(($actasaudienciasDto->getFechaRegistro()!="") ||($actasaudienciasDto->getFechaActualizacion()!="") ||($actasaudienciasDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($actasaudienciasDto->getfechaRegistro()!=""){
$sql.="fechaRegistro='".$actasaudienciasDto->getFechaRegistro()."'";
if(($actasaudienciasDto->getFechaActualizacion()!="") ||($actasaudienciasDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($actasaudienciasDto->getfechaActualizacion()!=""){
$sql.="fechaActualizacion='".$actasaudienciasDto->getFechaActualizacion()."'";
if(($actasaudienciasDto->getActivo()!="") ){
$sql.=" AND ";
}
}
if($actasaudienciasDto->getActivo()!=""){
$sql.="activo='".$actasaudienciasDto->getActivo()."'";
}
if($orden!=""){
$sql.=$orden;
}else{
$sql.="";
}
error_log('actas audiencias: '.$sql);
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
$tmp[$contador] = new ActasaudienciasDTO();
$tmp[$contador]->setIdActasAudiencia($row["idActasAudiencia"]);
$tmp[$contador]->setIdActuacion($row["idActuacion"]);
$tmp[$contador]->setIdAudiencia($row["idAudiencia"]);
$tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
$tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
$tmp[$contador]->setActivo($row["activo"]);
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