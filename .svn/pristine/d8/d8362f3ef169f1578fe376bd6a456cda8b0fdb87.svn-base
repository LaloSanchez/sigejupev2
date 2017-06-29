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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/medidascautelares/MedidascautelaresDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class MedidascautelaresDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertMedidascautelares($medidascautelaresDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblmedidascautelares(";
if($medidascautelaresDto->getidMedidaCautelar()!=""){
$sql.="idMedidaCautelar";
if(($medidascautelaresDto->getIdActuacion()!="") ||($medidascautelaresDto->getIdImputadoCarpeta()!="") ||($medidascautelaresDto->getApelada()!="") ||($medidascautelaresDto->getActivo()!="") ||($medidascautelaresDto->getFechaInicio()!="") ||($medidascautelaresDto->getFechaTermina()!="") ||($medidascautelaresDto->getCveTipoMedidaCautelar()!="") ||($medidascautelaresDto->getCveAutoridadEmisora()!="") ){
$sql.=",";
}
}
if($medidascautelaresDto->getidActuacion()!=""){
$sql.="idActuacion";
if(($medidascautelaresDto->getIdImputadoCarpeta()!="") ||($medidascautelaresDto->getApelada()!="") ||($medidascautelaresDto->getActivo()!="") ||($medidascautelaresDto->getFechaInicio()!="") ||($medidascautelaresDto->getFechaTermina()!="") ||($medidascautelaresDto->getCveTipoMedidaCautelar()!="") ||($medidascautelaresDto->getCveAutoridadEmisora()!="") ){
$sql.=",";
}
}
if($medidascautelaresDto->getidImputadoCarpeta()!=""){
$sql.="idImputadoCarpeta";
if(($medidascautelaresDto->getApelada()!="") ||($medidascautelaresDto->getActivo()!="") ||($medidascautelaresDto->getFechaInicio()!="") ||($medidascautelaresDto->getFechaTermina()!="") ||($medidascautelaresDto->getCveTipoMedidaCautelar()!="") ||($medidascautelaresDto->getCveAutoridadEmisora()!="") ){
$sql.=",";
}
}
if($medidascautelaresDto->getApelada()!=""){
$sql.="Apelada";
if( ($medidascautelaresDto->getActivo()!="") ||($medidascautelaresDto->getFechaInicio()!="") ||($medidascautelaresDto->getFechaTermina()!="") ||($medidascautelaresDto->getCveTipoMedidaCautelar()!="") ||($medidascautelaresDto->getCveAutoridadEmisora()!="") ){
$sql.=",";
}
}
if($medidascautelaresDto->getActivo()!=""){
$sql.="activo";
if( ($medidascautelaresDto->getFechaInicio()!="") ||($medidascautelaresDto->getFechaTermina()!="") ||($medidascautelaresDto->getCveTipoMedidaCautelar()!="") ||($medidascautelaresDto->getCveAutoridadEmisora()!="") ){
$sql.=",";
}
}
if($medidascautelaresDto->getfechaInicio()!=""){
$sql.="fechaInicio";
if(($medidascautelaresDto->getFechaTermina()!="") ||($medidascautelaresDto->getCveTipoMedidaCautelar()!="") ||($medidascautelaresDto->getCveAutoridadEmisora()!="") ){
$sql.=",";
}
}
if($medidascautelaresDto->getfechaTermina()!=""){
$sql.="fechaTermina";
if(($medidascautelaresDto->getCveTipoMedidaCautelar()!="") ||($medidascautelaresDto->getCveAutoridadEmisora()!="") ){
$sql.=",";
}
}
if($medidascautelaresDto->getcveTipoMedidaCautelar()!=""){
$sql.="cveTipoMedidaCautelar";
if(($medidascautelaresDto->getCveAutoridadEmisora()!="") ){
$sql.=",";
}
}
if($medidascautelaresDto->getcveAutoridadEmisora()!=""){
$sql.="cveAutoridadEmisora";
}
$sql.=") VALUES(";
if($medidascautelaresDto->getidMedidaCautelar()!=""){
$sql.="'".$medidascautelaresDto->getidMedidaCautelar()."'";
if(($medidascautelaresDto->getIdActuacion()!="") ||($medidascautelaresDto->getIdImputadoCarpeta()!="") ||($medidascautelaresDto->getApelada()!="") ||($medidascautelaresDto->getActivo()!="") ||($medidascautelaresDto->getFechaInicio()!="") ||($medidascautelaresDto->getFechaTermina()!="") ||($medidascautelaresDto->getCveTipoMedidaCautelar()!="") ||($medidascautelaresDto->getCveAutoridadEmisora()!="") ){
$sql.=",";
}
}
if($medidascautelaresDto->getidActuacion()!=""){
$sql.="'".$medidascautelaresDto->getidActuacion()."'";
if(($medidascautelaresDto->getIdImputadoCarpeta()!="") ||($medidascautelaresDto->getApelada()!="") ||($medidascautelaresDto->getActivo()!="") ||($medidascautelaresDto->getFechaInicio()!="") ||($medidascautelaresDto->getFechaTermina()!="") ||($medidascautelaresDto->getCveTipoMedidaCautelar()!="") ||($medidascautelaresDto->getCveAutoridadEmisora()!="") ){
$sql.=",";
}
}
if($medidascautelaresDto->getidImputadoCarpeta()!=""){
$sql.="'".$medidascautelaresDto->getidImputadoCarpeta()."'";
if(($medidascautelaresDto->getApelada()!="") ||($medidascautelaresDto->getActivo()!="") ||($medidascautelaresDto->getFechaInicio()!="") ||($medidascautelaresDto->getFechaTermina()!="") ||($medidascautelaresDto->getCveTipoMedidaCautelar()!="") ||($medidascautelaresDto->getCveAutoridadEmisora()!="") ){
$sql.=",";
}
}
if($medidascautelaresDto->getApelada()!=""){
$sql.="'".$medidascautelaresDto->getApelada()."'";
if( ($medidascautelaresDto->getActivo()!="") ||($medidascautelaresDto->getFechaInicio()!="") ||($medidascautelaresDto->getFechaTermina()!="") ||($medidascautelaresDto->getCveTipoMedidaCautelar()!="") ||($medidascautelaresDto->getCveAutoridadEmisora()!="") ){
$sql.=",";
}
}
if($medidascautelaresDto->getActivo()!=""){
$sql.="'".$medidascautelaresDto->getActivo()."'";
if( ($medidascautelaresDto->getFechaInicio()!="") ||($medidascautelaresDto->getFechaTermina()!="") ||($medidascautelaresDto->getCveTipoMedidaCautelar()!="") ||($medidascautelaresDto->getCveAutoridadEmisora()!="") ){
$sql.=",";
}
}
if($medidascautelaresDto->getfechaInicio()!=""){
$sql.="'".$medidascautelaresDto->getfechaInicio()."'";
if(($medidascautelaresDto->getFechaTermina()!="") ||($medidascautelaresDto->getCveTipoMedidaCautelar()!="") ||($medidascautelaresDto->getCveAutoridadEmisora()!="") ){
$sql.=",";
}
}
if($medidascautelaresDto->getfechaTermina()!=""){
$sql.="'".$medidascautelaresDto->getfechaTermina()."'";
if(($medidascautelaresDto->getCveTipoMedidaCautelar()!="") ||($medidascautelaresDto->getCveAutoridadEmisora()!="") ){
$sql.=",";
}
}
if($medidascautelaresDto->getcveTipoMedidaCautelar()!=""){
$sql.="'".$medidascautelaresDto->getcveTipoMedidaCautelar()."'";
if(($medidascautelaresDto->getCveAutoridadEmisora()!="") ){
$sql.=",";
}
}
if($medidascautelaresDto->getcveAutoridadEmisora()!=""){
$sql.="'".$medidascautelaresDto->getcveAutoridadEmisora()."'";
}
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new MedidascautelaresDTO();
$tmp->setidMedidaCautelar($this->_proveedor->lastID());
$tmp = $this->selectMedidascautelares($tmp,"",$this->_proveedor);
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
public function updateMedidascautelares($medidascautelaresDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblmedidascautelares SET ";
if($medidascautelaresDto->getidMedidaCautelar()!=""){
$sql.="idMedidaCautelar='".$medidascautelaresDto->getidMedidaCautelar()."'";
if(($medidascautelaresDto->getIdActuacion()!="") ||($medidascautelaresDto->getIdImputadoCarpeta()!="") ||($medidascautelaresDto->getApelada()!="") ||($medidascautelaresDto->getActivo()!="") ||($medidascautelaresDto->getFechaInicio()!="") ||($medidascautelaresDto->getFechaTermina()!="") ||($medidascautelaresDto->getCveTipoMedidaCautelar()!="") ||($medidascautelaresDto->getCveAutoridadEmisora()!="") ){
$sql.=",";
}
}
if($medidascautelaresDto->getidActuacion()!=""){
$sql.="idActuacion='".$medidascautelaresDto->getidActuacion()."'";
if(($medidascautelaresDto->getIdImputadoCarpeta()!="") ||($medidascautelaresDto->getApelada()!="") ||($medidascautelaresDto->getActivo()!="") ||($medidascautelaresDto->getFechaInicio()!="") ||($medidascautelaresDto->getFechaTermina()!="") ||($medidascautelaresDto->getCveTipoMedidaCautelar()!="") ||($medidascautelaresDto->getCveAutoridadEmisora()!="") ){
$sql.=",";
}
}
if($medidascautelaresDto->getidImputadoCarpeta()!=""){
$sql.="idImputadoCarpeta='".$medidascautelaresDto->getidImputadoCarpeta()."'";
if(($medidascautelaresDto->getApelada()!="") ||($medidascautelaresDto->getActivo()!="") ||($medidascautelaresDto->getFechaInicio()!="") ||($medidascautelaresDto->getFechaTermina()!="") ||($medidascautelaresDto->getCveTipoMedidaCautelar()!="") ||($medidascautelaresDto->getCveAutoridadEmisora()!="") ){
$sql.=",";
}
}
if($medidascautelaresDto->getApelada()!=""){
$sql.="apelada='".$medidascautelaresDto->getApelada()."'";
if( ($medidascautelaresDto->getActivo()!="") || ($medidascautelaresDto->getFechaInicio()!="") ||($medidascautelaresDto->getFechaTermina()!="") ||($medidascautelaresDto->getCveTipoMedidaCautelar()!="") ||($medidascautelaresDto->getCveAutoridadEmisora()!="") ){
$sql.=",";
}
}
if($medidascautelaresDto->getActivo()!=""){
$sql.="activo='".$medidascautelaresDto->getActivo()."'";
if( ($medidascautelaresDto->getFechaInicio()!="") ||($medidascautelaresDto->getFechaTermina()!="") ||($medidascautelaresDto->getCveTipoMedidaCautelar()!="") ||($medidascautelaresDto->getCveAutoridadEmisora()!="") ){
$sql.=",";
}
}
if($medidascautelaresDto->getfechaInicio()!=""){
$sql.="fechaInicio='".$medidascautelaresDto->getfechaInicio()."'";
if(($medidascautelaresDto->getFechaTermina()!="") ||($medidascautelaresDto->getCveTipoMedidaCautelar()!="") ||($medidascautelaresDto->getCveAutoridadEmisora()!="") ){
$sql.=",";
}
}
if($medidascautelaresDto->getfechaTermina()!=""){
$sql.="fechaTermina='".$medidascautelaresDto->getfechaTermina()."'";
if(($medidascautelaresDto->getCveTipoMedidaCautelar()!="") ||($medidascautelaresDto->getCveAutoridadEmisora()!="") ){
$sql.=",";
}
}
if($medidascautelaresDto->getcveTipoMedidaCautelar()!=""){
$sql.="cveTipoMedidaCautelar='".$medidascautelaresDto->getcveTipoMedidaCautelar()."'";
if(($medidascautelaresDto->getCveAutoridadEmisora()!="") ){
$sql.=",";
}
}
if($medidascautelaresDto->getcveAutoridadEmisora()!=""){
$sql.="cveAutoridadEmisora='".$medidascautelaresDto->getcveAutoridadEmisora()."'";
}
$sql.=" WHERE idMedidaCautelar='".$medidascautelaresDto->getidMedidaCautelar()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new MedidascautelaresDTO();
$tmp->setidMedidaCautelar($medidascautelaresDto->getidMedidaCautelar());
$tmp = $this->selectMedidascautelares($tmp,"",$this->_proveedor);
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
public function deleteMedidascautelares($medidascautelaresDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblmedidascautelares  WHERE idMedidaCautelar='".$medidascautelaresDto->getidMedidaCautelar()."'";
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
public function selectMedidascautelares($medidascautelaresDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idMedidaCautelar,idActuacion,idImputadoCarpeta,Apelada,activo,fechaInicio,fechaTermina,cveTipoMedidaCautelar,cveAutoridadEmisora FROM tblmedidascautelares ";
if(($medidascautelaresDto->getidMedidaCautelar()!="") ||($medidascautelaresDto->getidActuacion()!="") ||($medidascautelaresDto->getidImputadoCarpeta()!="") ||($medidascautelaresDto->getApelada()!="") ||($medidascautelaresDto->getActivo()!="") ||($medidascautelaresDto->getfechaInicio()!="") ||($medidascautelaresDto->getfechaTermina()!="") ||($medidascautelaresDto->getcveTipoMedidaCautelar()!="") ||($medidascautelaresDto->getcveAutoridadEmisora()!="") ){
$sql.=" WHERE ";
}
if($medidascautelaresDto->getidMedidaCautelar()!=""){
$sql.="idMedidaCautelar='".$medidascautelaresDto->getIdMedidaCautelar()."'";
if(($medidascautelaresDto->getIdActuacion()!="") ||($medidascautelaresDto->getIdImputadoCarpeta()!="") ||($medidascautelaresDto->getApelada()!="") ||($medidascautelaresDto->getActivo()!="") ||($medidascautelaresDto->getFechaInicio()!="") ||($medidascautelaresDto->getFechaTermina()!="") ||($medidascautelaresDto->getCveTipoMedidaCautelar()!="") ||($medidascautelaresDto->getCveAutoridadEmisora()!="") ){
$sql.=" AND ";
}
}
if($medidascautelaresDto->getidActuacion()!=""){
$sql.="idActuacion='".$medidascautelaresDto->getIdActuacion()."'";
if(($medidascautelaresDto->getIdImputadoCarpeta()!="") ||($medidascautelaresDto->getApelada()!="") ||($medidascautelaresDto->getActivo()!="") ||($medidascautelaresDto->getFechaInicio()!="") ||($medidascautelaresDto->getFechaTermina()!="") ||($medidascautelaresDto->getCveTipoMedidaCautelar()!="") ||($medidascautelaresDto->getCveAutoridadEmisora()!="") ){
$sql.=" AND ";
}
}
if($medidascautelaresDto->getidImputadoCarpeta()!=""){
$sql.="idImputadoCarpeta='".$medidascautelaresDto->getIdImputadoCarpeta()."'";
if(($medidascautelaresDto->getApelada()!="") ||($medidascautelaresDto->getActivo()!="") ||($medidascautelaresDto->getFechaInicio()!="") ||($medidascautelaresDto->getFechaTermina()!="") ||($medidascautelaresDto->getCveTipoMedidaCautelar()!="") ||($medidascautelaresDto->getCveAutoridadEmisora()!="") ){
$sql.=" AND ";
}
}
if($medidascautelaresDto->getApelada()!=""){
$sql.="Apelada='".$medidascautelaresDto->getApelada()."'";
if( ($medidascautelaresDto->getActivo()!="") ||($medidascautelaresDto->getFechaInicio()!="") ||($medidascautelaresDto->getFechaTermina()!="") ||($medidascautelaresDto->getCveTipoMedidaCautelar()!="") ||($medidascautelaresDto->getCveAutoridadEmisora()!="") ){
$sql.=" AND ";
}
}
if($medidascautelaresDto->getActivo()!=""){
$sql.="activo='".$medidascautelaresDto->getActivo()."'";
if( ($medidascautelaresDto->getFechaInicio()!="") ||($medidascautelaresDto->getFechaTermina()!="") ||($medidascautelaresDto->getCveTipoMedidaCautelar()!="") ||($medidascautelaresDto->getCveAutoridadEmisora()!="") ){
$sql.=" AND ";
}
}
if($medidascautelaresDto->getfechaInicio()!=""){
$sql.="fechaInicio='".$medidascautelaresDto->getFechaInicio()."'";
if(($medidascautelaresDto->getFechaTermina()!="") ||($medidascautelaresDto->getCveTipoMedidaCautelar()!="") ||($medidascautelaresDto->getCveAutoridadEmisora()!="") ){
$sql.=" AND ";
}
}
if($medidascautelaresDto->getfechaTermina()!=""){
$sql.="fechaTermina='".$medidascautelaresDto->getFechaTermina()."'";
if(($medidascautelaresDto->getCveTipoMedidaCautelar()!="") ||($medidascautelaresDto->getCveAutoridadEmisora()!="") ){
$sql.=" AND ";
}
}
if($medidascautelaresDto->getcveTipoMedidaCautelar()!=""){
$sql.="cveTipoMedidaCautelar='".$medidascautelaresDto->getCveTipoMedidaCautelar()."'";
if(($medidascautelaresDto->getCveAutoridadEmisora()!="") ){
$sql.=" AND ";
}
}
if($medidascautelaresDto->getcveAutoridadEmisora()!=""){
$sql.="cveAutoridadEmisora='".$medidascautelaresDto->getCveAutoridadEmisora()."'";
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
$tmp[$contador] = new MedidascautelaresDTO();
$tmp[$contador]->setIdMedidaCautelar($row["idMedidaCautelar"]);
$tmp[$contador]->setIdActuacion($row["idActuacion"]);
$tmp[$contador]->setIdImputadoCarpeta($row["idImputadoCarpeta"]);
$tmp[$contador]->setApelada($row["Apelada"]);
$tmp[$contador]->setActivo($row["activo"]);
$tmp[$contador]->setFechaInicio($row["fechaInicio"]);
$tmp[$contador]->setFechaTermina($row["fechaTermina"]);
$tmp[$contador]->setCveTipoMedidaCautelar($row["cveTipoMedidaCautelar"]);
$tmp[$contador]->setCveAutoridadEmisora($row["cveAutoridadEmisora"]);
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