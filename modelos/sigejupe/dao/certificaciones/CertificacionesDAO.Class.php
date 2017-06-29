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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/certificaciones/CertificacionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class CertificacionesDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertCertificaciones($certificacionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblcertificaciones(";
if($certificacionesDto->getidCertificacion()!=""){
$sql.="idCertificacion";
if(($certificacionesDto->getIdActuacion()!="") ||($certificacionesDto->getNumEmpleadoAutCertificacion()!="") ||($certificacionesDto->getLugarCertificacion()!="") ||($certificacionesDto->getHoraCertificacion()!="") ){
$sql.=",";
}
}
if($certificacionesDto->getidActuacion()!=""){
$sql.="idActuacion";
if(($certificacionesDto->getNumEmpleadoAutCertificacion()!="") ||($certificacionesDto->getLugarCertificacion()!="") ||($certificacionesDto->getHoraCertificacion()!="")){
$sql.=",";
}
}
if($certificacionesDto->getnumEmpleadoAutCertificacion()!=""){
$sql.="numEmpleadoAutCertificacion";
if(($certificacionesDto->getLugarCertificacion()!="") ||($certificacionesDto->getHoraCertificacion()!="")){
$sql.=",";
}
}
if($certificacionesDto->getlugarCertificacion()!=""){
$sql.="lugarCertificacion";
if(($certificacionesDto->getHoraCertificacion()!="") ){
$sql.=",";
}
}
if($certificacionesDto->gethoraCertificacion()!=""){
$sql.="horaCertificacion";
}
$sql.=") VALUES(";
if($certificacionesDto->getidCertificacion()!=""){
$sql.="'".$certificacionesDto->getidCertificacion()."'";
if(($certificacionesDto->getIdActuacion()!="") ||($certificacionesDto->getNumEmpleadoAutCertificacion()!="") ||($certificacionesDto->getLugarCertificacion()!="") ||($certificacionesDto->getHoraCertificacion()!="") ){
$sql.=",";
}
}
if($certificacionesDto->getidActuacion()!=""){
$sql.="'".$certificacionesDto->getidActuacion()."'";
if(($certificacionesDto->getNumEmpleadoAutCertificacion()!="") ||($certificacionesDto->getLugarCertificacion()!="") ||($certificacionesDto->getHoraCertificacion()!="") ){
$sql.=",";
}
}
if($certificacionesDto->getnumEmpleadoAutCertificacion()!=""){
$sql.="'".$certificacionesDto->getnumEmpleadoAutCertificacion()."'";
if(($certificacionesDto->getLugarCertificacion()!="") ||($certificacionesDto->getHoraCertificacion()!="") ){
$sql.=",";
}
}
if($certificacionesDto->getlugarCertificacion()!=""){
$sql.="'".$certificacionesDto->getlugarCertificacion()."'";
if(($certificacionesDto->getHoraCertificacion()!="") ){
$sql.=",";
}
}
if($certificacionesDto->gethoraCertificacion()!=""){
$sql.="'".$certificacionesDto->gethoraCertificacion()."'";
}
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new CertificacionesDTO();
$tmp->setidCertificacion($this->_proveedor->lastID());
$tmp = $this->selectCertificaciones($tmp,"",$this->_proveedor);
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
public function updateCertificaciones($certificacionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblcertificaciones SET ";
if($certificacionesDto->getidCertificacion()!=""){
$sql.="idCertificacion='".$certificacionesDto->getidCertificacion()."'";
if(($certificacionesDto->getIdActuacion()!="")  ||($certificacionesDto->getNumEmpleadoAutCertificacion()!="") ||($certificacionesDto->getLugarCertificacion()!="") ||($certificacionesDto->getHoraCertificacion()!="")){
$sql.=",";
}
}
if($certificacionesDto->getidActuacion()!=""){
$sql.="idActuacion='".$certificacionesDto->getidActuacion()."'";
if(($certificacionesDto->getNumEmpleadoAutCertificacion()!="") ||($certificacionesDto->getLugarCertificacion()!="") ||($certificacionesDto->getHoraCertificacion()!="")){
$sql.=",";
}
}
if($certificacionesDto->getnumEmpleadoAutCertificacion()!=""){
$sql.="numEmpleadoAutCertificacion='".$certificacionesDto->getnumEmpleadoAutCertificacion()."'";
if(($certificacionesDto->getLugarCertificacion()!="") ||($certificacionesDto->getHoraCertificacion()!="")){
$sql.=",";
}
}
if($certificacionesDto->getlugarCertificacion()!=""){
$sql.="lugarCertificacion='".$certificacionesDto->getlugarCertificacion()."'";
if(($certificacionesDto->getHoraCertificacion()!="")){
$sql.=",";
}
}
if($certificacionesDto->gethoraCertificacion()!=""){
$sql.="horaCertificacion='".$certificacionesDto->gethoraCertificacion()."'";
}
$sql.=" WHERE idCertificacion='".$certificacionesDto->getidCertificacion()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new CertificacionesDTO();
$tmp->setidCertificacion($certificacionesDto->getidCertificacion());
$tmp = $this->selectCertificaciones($tmp,"",$this->_proveedor);
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
public function deleteCertificaciones($certificacionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblcertificaciones  WHERE idCertificacion='".$certificacionesDto->getidCertificacion()."'";
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
public function selectCertificaciones($certificacionesDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idCertificacion,idActuacion,numEmpleadoAutCertificacion,lugarCertificacion,horaCertificacion FROM tblcertificaciones ";
if(($certificacionesDto->getidCertificacion()!="") ||($certificacionesDto->getidActuacion()!="") ||($certificacionesDto->getnumEmpleadoAutCertificacion()!="") ||($certificacionesDto->getlugarCertificacion()!="") ||($certificacionesDto->gethoraCertificacion()!="") ){
$sql.=" WHERE ";
}
if($certificacionesDto->getidCertificacion()!=""){
$sql.="idCertificacion='".$certificacionesDto->getIdCertificacion()."'";
if(($certificacionesDto->getidActuacion()!="") ||($certificacionesDto->getnumEmpleadoAutCertificacion()!="") ||($certificacionesDto->getlugarCertificacion()!="") ||($certificacionesDto->gethoraCertificacion()!="") ){
$sql.=" AND ";
}
}
if($certificacionesDto->getidActuacion()!=""){
$sql.="idActuacion='".$certificacionesDto->getIdActuacion()."'";
if(($certificacionesDto->getnumEmpleadoAutCertificacion()!="") ||($certificacionesDto->getlugarCertificacion()!="") ||($certificacionesDto->gethoraCertificacion()!="") ){
$sql.=" AND ";
}
}
if($certificacionesDto->getnumEmpleadoAutCertificacion()!=""){
$sql.="numEmpleadoAutCertificacion='".$certificacionesDto->getNumEmpleadoAutCertificacion()."'";
if(($certificacionesDto->getlugarCertificacion()!="") ||($certificacionesDto->gethoraCertificacion()!="")){
$sql.=" AND ";
}
}
if($certificacionesDto->getlugarCertificacion()!=""){
$sql.="lugarCertificacion='".$certificacionesDto->getLugarCertificacion()."'";
if(($certificacionesDto->gethoraCertificacion()!="")){
$sql.=" AND ";
}
}
if($certificacionesDto->gethoraCertificacion()!=""){
$sql.="horaCertificacion='".$certificacionesDto->getHoraCertificacion()."'";
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
$tmp[$contador] = new CertificacionesDTO();
$tmp[$contador]->setIdCertificacion($row["idCertificacion"]);
$tmp[$contador]->setIdActuacion($row["idActuacion"]);
$tmp[$contador]->setNumEmpleadoAutCertificacion($row["numEmpleadoAutCertificacion"]);
$tmp[$contador]->setLugarCertificacion($row["lugarCertificacion"]);
$tmp[$contador]->setHoraCertificacion($row["horaCertificacion"]);
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