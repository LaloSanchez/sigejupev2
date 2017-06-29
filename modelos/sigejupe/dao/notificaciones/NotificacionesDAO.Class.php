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

include_once(dirname(__FILE__)."/../../../../modelos/sigejupe/dto/notificaciones/NotificacionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../../tribunal/connect/Proveedor.Class.php");
class NotificacionesDAO{
 protected $_proveedor;
public function __construct($gestor = "mysql", $bd = "gestion") {
$this->_proveedor = new Proveedor('mysql', 'sigejupe');
}
public function _conexion(){
$this->_proveedor->connect();
}
public function insertNotificaciones($notificacionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="INSERT INTO tblnotificaciones(";
if($notificacionesDto->getIdNotificacion()!=""){
$sql.="idNotificacion";
if(($notificacionesDto->getIdJuzgadoGestion()!="") ||($notificacionesDto->getIdAcuerdo()!="") ||($notificacionesDto->getFechaNotificacion()!="") ||($notificacionesDto->getIdNotificador()!="") ||($notificacionesDto->getNotificador()!="") ||($notificacionesDto->getTipoDoc()!="") ||($notificacionesDto->getAcuerdo()!="") ||($notificacionesDto->getNumCarpeta()!="") ||($notificacionesDto->getTipoCarpeta()!="") ||($notificacionesDto->getTipoJuzgado()!="") ||($notificacionesDto->getAnexo()!="") ||($notificacionesDto->getIdsDocumentos()!="") ){
$sql.=",";
}
}
if($notificacionesDto->getIdJuzgadoGestion()!=""){
$sql.="idJuzgadoGestion";
if(($notificacionesDto->getIdAcuerdo()!="") ||($notificacionesDto->getFechaNotificacion()!="") ||($notificacionesDto->getIdNotificador()!="") ||($notificacionesDto->getNotificador()!="") ||($notificacionesDto->getTipoDoc()!="") ||($notificacionesDto->getAcuerdo()!="") ||($notificacionesDto->getNumCarpeta()!="") ||($notificacionesDto->getTipoCarpeta()!="") ||($notificacionesDto->getTipoJuzgado()!="") ||($notificacionesDto->getAnexo()!="") ||($notificacionesDto->getIdsDocumentos()!="") ){
$sql.=",";
}
}
if($notificacionesDto->getIdAcuerdo()!=""){
$sql.="idAcuerdo";
if(($notificacionesDto->getFechaNotificacion()!="") ||($notificacionesDto->getIdNotificador()!="") ||($notificacionesDto->getNotificador()!="") ||($notificacionesDto->getTipoDoc()!="") ||($notificacionesDto->getAcuerdo()!="") ||($notificacionesDto->getNumCarpeta()!="") ||($notificacionesDto->getTipoCarpeta()!="") ||($notificacionesDto->getTipoJuzgado()!="") ||($notificacionesDto->getAnexo()!="") ||($notificacionesDto->getIdsDocumentos()!="") ){
$sql.=",";
}
}
if($notificacionesDto->getFechaNotificacion()!=""){
$sql.="FechaNotificacion";
if(($notificacionesDto->getIdNotificador()!="") ||($notificacionesDto->getNotificador()!="") ||($notificacionesDto->getTipoDoc()!="") ||($notificacionesDto->getAcuerdo()!="") ||($notificacionesDto->getNumCarpeta()!="") ||($notificacionesDto->getTipoCarpeta()!="") ||($notificacionesDto->getTipoJuzgado()!="") ||($notificacionesDto->getAnexo()!="") ||($notificacionesDto->getIdsDocumentos()!="") ){
$sql.=",";
}
}
if($notificacionesDto->getIdNotificador()!=""){
$sql.="idNotificador";
if(($notificacionesDto->getNotificador()!="") ||($notificacionesDto->getTipoDoc()!="") ||($notificacionesDto->getAcuerdo()!="") ||($notificacionesDto->getNumCarpeta()!="") ||($notificacionesDto->getTipoCarpeta()!="") ||($notificacionesDto->getTipoJuzgado()!="") ||($notificacionesDto->getAnexo()!="") ||($notificacionesDto->getIdsDocumentos()!="") ){
$sql.=",";
}
}
if($notificacionesDto->getNotificador()!=""){
$sql.="Notificador";
if(($notificacionesDto->getTipoDoc()!="") ||($notificacionesDto->getAcuerdo()!="") ||($notificacionesDto->getNumCarpeta()!="") ||($notificacionesDto->getTipoCarpeta()!="") ||($notificacionesDto->getTipoJuzgado()!="") ||($notificacionesDto->getAnexo()!="") ||($notificacionesDto->getIdsDocumentos()!="") ){
$sql.=",";
}
}
if($notificacionesDto->getTipoDoc()!=""){
$sql.="TipoDoc";
if(($notificacionesDto->getAcuerdo()!="") ||($notificacionesDto->getNumCarpeta()!="") ||($notificacionesDto->getTipoCarpeta()!="") ||($notificacionesDto->getTipoJuzgado()!="") ||($notificacionesDto->getAnexo()!="") ||($notificacionesDto->getIdsDocumentos()!="") ){
$sql.=",";
}
}
if($notificacionesDto->getAcuerdo()!=""){
$sql.="Acuerdo";
if(($notificacionesDto->getNumCarpeta()!="") ||($notificacionesDto->getTipoCarpeta()!="") ||($notificacionesDto->getTipoJuzgado()!="") ||($notificacionesDto->getAnexo()!="") ||($notificacionesDto->getIdsDocumentos()!="") ){
$sql.=",";
}
}
if($notificacionesDto->getNumCarpeta()!=""){
$sql.="NumCarpeta";
if(($notificacionesDto->getTipoCarpeta()!="") ||($notificacionesDto->getTipoJuzgado()!="") ||($notificacionesDto->getAnexo()!="") ||($notificacionesDto->getIdsDocumentos()!="") ){
$sql.=",";
}
}
if($notificacionesDto->getTipoCarpeta()!=""){
$sql.="TipoCarpeta";
if(($notificacionesDto->getTipoJuzgado()!="") ||($notificacionesDto->getAnexo()!="") ||($notificacionesDto->getIdsDocumentos()!="") ){
$sql.=",";
}
}
if($notificacionesDto->getTipoJuzgado()!=""){
$sql.="TipoJuzgado";
if(($notificacionesDto->getAnexo()!="") ||($notificacionesDto->getIdsDocumentos()!="") ){
$sql.=",";
}
}
if($notificacionesDto->getAnexo()!=""){
$sql.="Anexo";
if(($notificacionesDto->getIdsDocumentos()!="") ){
$sql.=",";
}
}
if($notificacionesDto->getIdsDocumentos()!=""){
$sql.="idsDocumentos";
}
$sql.=") VALUES(";
if($notificacionesDto->getIdNotificacion()!=""){
$sql.="'".$notificacionesDto->getIdNotificacion()."'";
if(($notificacionesDto->getIdJuzgadoGestion()!="") ||($notificacionesDto->getIdAcuerdo()!="") ||($notificacionesDto->getFechaNotificacion()!="") ||($notificacionesDto->getIdNotificador()!="") ||($notificacionesDto->getNotificador()!="") ||($notificacionesDto->getTipoDoc()!="") ||($notificacionesDto->getAcuerdo()!="") ||($notificacionesDto->getNumCarpeta()!="") ||($notificacionesDto->getTipoCarpeta()!="") ||($notificacionesDto->getTipoJuzgado()!="") ||($notificacionesDto->getAnexo()!="") ||($notificacionesDto->getIdsDocumentos()!="") ){
$sql.=",";
}
}
if($notificacionesDto->getIdJuzgadoGestion()!=""){
$sql.="'".$notificacionesDto->getIdJuzgadoGestion()."'";
if(($notificacionesDto->getIdAcuerdo()!="") ||($notificacionesDto->getFechaNotificacion()!="") ||($notificacionesDto->getIdNotificador()!="") ||($notificacionesDto->getNotificador()!="") ||($notificacionesDto->getTipoDoc()!="") ||($notificacionesDto->getAcuerdo()!="") ||($notificacionesDto->getNumCarpeta()!="") ||($notificacionesDto->getTipoCarpeta()!="") ||($notificacionesDto->getTipoJuzgado()!="") ||($notificacionesDto->getAnexo()!="") ||($notificacionesDto->getIdsDocumentos()!="") ){
$sql.=",";
}
}
if($notificacionesDto->getIdAcuerdo()!=""){
$sql.="'".$notificacionesDto->getIdAcuerdo()."'";
if(($notificacionesDto->getFechaNotificacion()!="") ||($notificacionesDto->getIdNotificador()!="") ||($notificacionesDto->getNotificador()!="") ||($notificacionesDto->getTipoDoc()!="") ||($notificacionesDto->getAcuerdo()!="") ||($notificacionesDto->getNumCarpeta()!="") ||($notificacionesDto->getTipoCarpeta()!="") ||($notificacionesDto->getTipoJuzgado()!="") ||($notificacionesDto->getAnexo()!="") ||($notificacionesDto->getIdsDocumentos()!="") ){
$sql.=",";
}
}
if($notificacionesDto->getFechaNotificacion()!=""){
$sql.="'".$notificacionesDto->getFechaNotificacion()."'";
if(($notificacionesDto->getIdNotificador()!="") ||($notificacionesDto->getNotificador()!="") ||($notificacionesDto->getTipoDoc()!="") ||($notificacionesDto->getAcuerdo()!="") ||($notificacionesDto->getNumCarpeta()!="") ||($notificacionesDto->getTipoCarpeta()!="") ||($notificacionesDto->getTipoJuzgado()!="") ||($notificacionesDto->getAnexo()!="") ||($notificacionesDto->getIdsDocumentos()!="") ){
$sql.=",";
}
}
if($notificacionesDto->getIdNotificador()!=""){
$sql.="'".$notificacionesDto->getIdNotificador()."'";
if(($notificacionesDto->getNotificador()!="") ||($notificacionesDto->getTipoDoc()!="") ||($notificacionesDto->getAcuerdo()!="") ||($notificacionesDto->getNumCarpeta()!="") ||($notificacionesDto->getTipoCarpeta()!="") ||($notificacionesDto->getTipoJuzgado()!="") ||($notificacionesDto->getAnexo()!="") ||($notificacionesDto->getIdsDocumentos()!="") ){
$sql.=",";
}
}
if($notificacionesDto->getNotificador()!=""){
$sql.="'".$notificacionesDto->getNotificador()."'";
if(($notificacionesDto->getTipoDoc()!="") ||($notificacionesDto->getAcuerdo()!="") ||($notificacionesDto->getNumCarpeta()!="") ||($notificacionesDto->getTipoCarpeta()!="") ||($notificacionesDto->getTipoJuzgado()!="") ||($notificacionesDto->getAnexo()!="") ||($notificacionesDto->getIdsDocumentos()!="") ){
$sql.=",";
}
}
if($notificacionesDto->getTipoDoc()!=""){
$sql.="'".$notificacionesDto->getTipoDoc()."'";
if(($notificacionesDto->getAcuerdo()!="") ||($notificacionesDto->getNumCarpeta()!="") ||($notificacionesDto->getTipoCarpeta()!="") ||($notificacionesDto->getTipoJuzgado()!="") ||($notificacionesDto->getAnexo()!="") ||($notificacionesDto->getIdsDocumentos()!="") ){
$sql.=",";
}
}
if($notificacionesDto->getAcuerdo()!=""){
$sql.="'".$notificacionesDto->getAcuerdo()."'";
if(($notificacionesDto->getNumCarpeta()!="") ||($notificacionesDto->getTipoCarpeta()!="") ||($notificacionesDto->getTipoJuzgado()!="") ||($notificacionesDto->getAnexo()!="") ||($notificacionesDto->getIdsDocumentos()!="") ){
$sql.=",";
}
}
if($notificacionesDto->getNumCarpeta()!=""){
$sql.="'".$notificacionesDto->getNumCarpeta()."'";
if(($notificacionesDto->getTipoCarpeta()!="") ||($notificacionesDto->getTipoJuzgado()!="") ||($notificacionesDto->getAnexo()!="") ||($notificacionesDto->getIdsDocumentos()!="") ){
$sql.=",";
}
}
if($notificacionesDto->getTipoCarpeta()!=""){
$sql.="'".$notificacionesDto->getTipoCarpeta()."'";
if(($notificacionesDto->getTipoJuzgado()!="") ||($notificacionesDto->getAnexo()!="") ||($notificacionesDto->getIdsDocumentos()!="") ){
$sql.=",";
}
}
if($notificacionesDto->getTipoJuzgado()!=""){
$sql.="'".$notificacionesDto->getTipoJuzgado()."'";
if(($notificacionesDto->getAnexo()!="") ||($notificacionesDto->getIdsDocumentos()!="") ){
$sql.=",";
}
}
if($notificacionesDto->getAnexo()!=""){
$sql.="'".$notificacionesDto->getAnexo()."'";
if(($notificacionesDto->getIdsDocumentos()!="") ){
$sql.=",";
}
}
if($notificacionesDto->getIdsDocumentos()!=""){
$sql.="'".$notificacionesDto->getIdsDocumentos()."'";
}
$sql.=")";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new NotificacionesDTO();
$tmp->set($this->_proveedor->lastID());
$tmp = $this->selectNotificaciones($tmp,"",$this->_proveedor);
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
public function updateNotificaciones($notificacionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="UPDATE tblnotificaciones SET ";
if($notificacionesDto->getIdNotificacion()!=""){
$sql.="idNotificacion='".$notificacionesDto->getIdNotificacion()."'";
if(($notificacionesDto->getIdJuzgadoGestion()!="") ||($notificacionesDto->getIdAcuerdo()!="") ||($notificacionesDto->getFechaNotificacion()!="") ||($notificacionesDto->getIdNotificador()!="") ||($notificacionesDto->getNotificador()!="") ||($notificacionesDto->getTipoDoc()!="") ||($notificacionesDto->getAcuerdo()!="") ||($notificacionesDto->getNumCarpeta()!="") ||($notificacionesDto->getTipoCarpeta()!="") ||($notificacionesDto->getTipoJuzgado()!="") ||($notificacionesDto->getAnexo()!="") ||($notificacionesDto->getIdsDocumentos()!="") ){
$sql.=",";
}
}
if($notificacionesDto->getIdJuzgadoGestion()!=""){
$sql.="idJuzgadoGestion='".$notificacionesDto->getIdJuzgadoGestion()."'";
if(($notificacionesDto->getIdAcuerdo()!="") ||($notificacionesDto->getFechaNotificacion()!="") ||($notificacionesDto->getIdNotificador()!="") ||($notificacionesDto->getNotificador()!="") ||($notificacionesDto->getTipoDoc()!="") ||($notificacionesDto->getAcuerdo()!="") ||($notificacionesDto->getNumCarpeta()!="") ||($notificacionesDto->getTipoCarpeta()!="") ||($notificacionesDto->getTipoJuzgado()!="") ||($notificacionesDto->getAnexo()!="") ||($notificacionesDto->getIdsDocumentos()!="") ){
$sql.=",";
}
}
if($notificacionesDto->getIdAcuerdo()!=""){
$sql.="idAcuerdo='".$notificacionesDto->getIdAcuerdo()."'";
if(($notificacionesDto->getFechaNotificacion()!="") ||($notificacionesDto->getIdNotificador()!="") ||($notificacionesDto->getNotificador()!="") ||($notificacionesDto->getTipoDoc()!="") ||($notificacionesDto->getAcuerdo()!="") ||($notificacionesDto->getNumCarpeta()!="") ||($notificacionesDto->getTipoCarpeta()!="") ||($notificacionesDto->getTipoJuzgado()!="") ||($notificacionesDto->getAnexo()!="") ||($notificacionesDto->getIdsDocumentos()!="") ){
$sql.=",";
}
}
if($notificacionesDto->getFechaNotificacion()!=""){
$sql.="FechaNotificacion='".$notificacionesDto->getFechaNotificacion()."'";
if(($notificacionesDto->getIdNotificador()!="") ||($notificacionesDto->getNotificador()!="") ||($notificacionesDto->getTipoDoc()!="") ||($notificacionesDto->getAcuerdo()!="") ||($notificacionesDto->getNumCarpeta()!="") ||($notificacionesDto->getTipoCarpeta()!="") ||($notificacionesDto->getTipoJuzgado()!="") ||($notificacionesDto->getAnexo()!="") ||($notificacionesDto->getIdsDocumentos()!="") ){
$sql.=",";
}
}
if($notificacionesDto->getIdNotificador()!=""){
$sql.="idNotificador='".$notificacionesDto->getIdNotificador()."'";
if(($notificacionesDto->getNotificador()!="") ||($notificacionesDto->getTipoDoc()!="") ||($notificacionesDto->getAcuerdo()!="") ||($notificacionesDto->getNumCarpeta()!="") ||($notificacionesDto->getTipoCarpeta()!="") ||($notificacionesDto->getTipoJuzgado()!="") ||($notificacionesDto->getAnexo()!="") ||($notificacionesDto->getIdsDocumentos()!="") ){
$sql.=",";
}
}
if($notificacionesDto->getNotificador()!=""){
$sql.="Notificador='".$notificacionesDto->getNotificador()."'";
if(($notificacionesDto->getTipoDoc()!="") ||($notificacionesDto->getAcuerdo()!="") ||($notificacionesDto->getNumCarpeta()!="") ||($notificacionesDto->getTipoCarpeta()!="") ||($notificacionesDto->getTipoJuzgado()!="") ||($notificacionesDto->getAnexo()!="") ||($notificacionesDto->getIdsDocumentos()!="") ){
$sql.=",";
}
}
if($notificacionesDto->getTipoDoc()!=""){
$sql.="TipoDoc='".$notificacionesDto->getTipoDoc()."'";
if(($notificacionesDto->getAcuerdo()!="") ||($notificacionesDto->getNumCarpeta()!="") ||($notificacionesDto->getTipoCarpeta()!="") ||($notificacionesDto->getTipoJuzgado()!="") ||($notificacionesDto->getAnexo()!="") ||($notificacionesDto->getIdsDocumentos()!="") ){
$sql.=",";
}
}
if($notificacionesDto->getAcuerdo()!=""){
$sql.="Acuerdo='".$notificacionesDto->getAcuerdo()."'";
if(($notificacionesDto->getNumCarpeta()!="") ||($notificacionesDto->getTipoCarpeta()!="") ||($notificacionesDto->getTipoJuzgado()!="") ||($notificacionesDto->getAnexo()!="") ||($notificacionesDto->getIdsDocumentos()!="") ){
$sql.=",";
}
}
if($notificacionesDto->getNumCarpeta()!=""){
$sql.="NumCarpeta='".$notificacionesDto->getNumCarpeta()."'";
if(($notificacionesDto->getTipoCarpeta()!="") ||($notificacionesDto->getTipoJuzgado()!="") ||($notificacionesDto->getAnexo()!="") ||($notificacionesDto->getIdsDocumentos()!="") ){
$sql.=",";
}
}
if($notificacionesDto->getTipoCarpeta()!=""){
$sql.="TipoCarpeta='".$notificacionesDto->getTipoCarpeta()."'";
if(($notificacionesDto->getTipoJuzgado()!="") ||($notificacionesDto->getAnexo()!="") ||($notificacionesDto->getIdsDocumentos()!="") ){
$sql.=",";
}
}
if($notificacionesDto->getTipoJuzgado()!=""){
$sql.="TipoJuzgado='".$notificacionesDto->getTipoJuzgado()."'";
if(($notificacionesDto->getAnexo()!="") ||($notificacionesDto->getIdsDocumentos()!="") ){
$sql.=",";
}
}
if($notificacionesDto->getAnexo()!=""){
$sql.="Anexo='".$notificacionesDto->getAnexo()."'";
if(($notificacionesDto->getIdsDocumentos()!="") ){
$sql.=",";
}
}
if($notificacionesDto->getIdsDocumentos()!=""){
$sql.="idsDocumentos='".$notificacionesDto->getIdsDocumentos()."'";
}
$sql.=" WHERE ='".$notificacionesDto->get()."'";
$this->_proveedor->execute($sql);
if (!$this->_proveedor->error()) {
$tmp = new NotificacionesDTO();
$tmp->set($notificacionesDto->get());
$tmp = $this->selectNotificaciones($tmp,"",$this->_proveedor);
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
public function deleteNotificaciones($notificacionesDto,$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="DELETE FROM tblnotificaciones  WHERE ='".$notificacionesDto->get()."'";
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
public function selectNotificaciones($notificacionesDto,$orden="",$proveedor=null){
$tmp = "";
$contador = 0;
if ($proveedor == null) {
$this->_conexion(null);
//$this->_proveedor->connect();
} else if ($proveedor != null) {
$this->_proveedor = $proveedor;
}
$sql="SELECT idNotificacion,idJuzgadoGestion,idAcuerdo,FechaNotificacion,idNotificador,Notificador,TipoDoc,Acuerdo,NumCarpeta,TipoCarpeta,TipoJuzgado,Anexo,idsDocumentos FROM tblnotificaciones ";
if(($notificacionesDto->getIdNotificacion()!="") ||($notificacionesDto->getIdJuzgadoGestion()!="") ||($notificacionesDto->getIdAcuerdo()!="") ||($notificacionesDto->getFechaNotificacion()!="") ||($notificacionesDto->getIdNotificador()!="") ||($notificacionesDto->getNotificador()!="") ||($notificacionesDto->getTipoDoc()!="") ||($notificacionesDto->getAcuerdo()!="") ||($notificacionesDto->getNumCarpeta()!="") ||($notificacionesDto->getTipoCarpeta()!="") ||($notificacionesDto->getTipoJuzgado()!="") ||($notificacionesDto->getAnexo()!="") ||($notificacionesDto->getIdsDocumentos()!="") ){
$sql.=" WHERE ";
}
if($notificacionesDto->getIdNotificacion()!=""){
$sql.="idNotificacion='".$notificacionesDto->getIdNotificacion()."'";
if(($notificacionesDto->getIdJuzgadoGestion()!="") ||($notificacionesDto->getIdAcuerdo()!="") ||($notificacionesDto->getFechaNotificacion()!="") ||($notificacionesDto->getIdNotificador()!="") ||($notificacionesDto->getNotificador()!="") ||($notificacionesDto->getTipoDoc()!="") ||($notificacionesDto->getAcuerdo()!="") ||($notificacionesDto->getNumCarpeta()!="") ||($notificacionesDto->getTipoCarpeta()!="") ||($notificacionesDto->getTipoJuzgado()!="") ||($notificacionesDto->getAnexo()!="") ||($notificacionesDto->getIdsDocumentos()!="") ){
$sql.=" AND ";
}
}
if($notificacionesDto->getIdJuzgadoGestion()!=""){
$sql.="idJuzgadoGestion='".$notificacionesDto->getIdJuzgadoGestion()."'";
if(($notificacionesDto->getIdAcuerdo()!="") ||($notificacionesDto->getFechaNotificacion()!="") ||($notificacionesDto->getIdNotificador()!="") ||($notificacionesDto->getNotificador()!="") ||($notificacionesDto->getTipoDoc()!="") ||($notificacionesDto->getAcuerdo()!="") ||($notificacionesDto->getNumCarpeta()!="") ||($notificacionesDto->getTipoCarpeta()!="") ||($notificacionesDto->getTipoJuzgado()!="") ||($notificacionesDto->getAnexo()!="") ||($notificacionesDto->getIdsDocumentos()!="") ){
$sql.=" AND ";
}
}
if($notificacionesDto->getIdAcuerdo()!=""){
$sql.="idAcuerdo='".$notificacionesDto->getIdAcuerdo()."'";
if(($notificacionesDto->getFechaNotificacion()!="") ||($notificacionesDto->getIdNotificador()!="") ||($notificacionesDto->getNotificador()!="") ||($notificacionesDto->getTipoDoc()!="") ||($notificacionesDto->getAcuerdo()!="") ||($notificacionesDto->getNumCarpeta()!="") ||($notificacionesDto->getTipoCarpeta()!="") ||($notificacionesDto->getTipoJuzgado()!="") ||($notificacionesDto->getAnexo()!="") ||($notificacionesDto->getIdsDocumentos()!="") ){
$sql.=" AND ";
}
}
if($notificacionesDto->getFechaNotificacion()!=""){
$sql.="FechaNotificacion='".$notificacionesDto->getFechaNotificacion()."'";
if(($notificacionesDto->getIdNotificador()!="") ||($notificacionesDto->getNotificador()!="") ||($notificacionesDto->getTipoDoc()!="") ||($notificacionesDto->getAcuerdo()!="") ||($notificacionesDto->getNumCarpeta()!="") ||($notificacionesDto->getTipoCarpeta()!="") ||($notificacionesDto->getTipoJuzgado()!="") ||($notificacionesDto->getAnexo()!="") ||($notificacionesDto->getIdsDocumentos()!="") ){
$sql.=" AND ";
}
}
if($notificacionesDto->getIdNotificador()!=""){
$sql.="idNotificador='".$notificacionesDto->getIdNotificador()."'";
if(($notificacionesDto->getNotificador()!="") ||($notificacionesDto->getTipoDoc()!="") ||($notificacionesDto->getAcuerdo()!="") ||($notificacionesDto->getNumCarpeta()!="") ||($notificacionesDto->getTipoCarpeta()!="") ||($notificacionesDto->getTipoJuzgado()!="") ||($notificacionesDto->getAnexo()!="") ||($notificacionesDto->getIdsDocumentos()!="") ){
$sql.=" AND ";
}
}
if($notificacionesDto->getNotificador()!=""){
$sql.="Notificador='".$notificacionesDto->getNotificador()."'";
if(($notificacionesDto->getTipoDoc()!="") ||($notificacionesDto->getAcuerdo()!="") ||($notificacionesDto->getNumCarpeta()!="") ||($notificacionesDto->getTipoCarpeta()!="") ||($notificacionesDto->getTipoJuzgado()!="") ||($notificacionesDto->getAnexo()!="") ||($notificacionesDto->getIdsDocumentos()!="") ){
$sql.=" AND ";
}
}
if($notificacionesDto->getTipoDoc()!=""){
$sql.="TipoDoc='".$notificacionesDto->getTipoDoc()."'";
if(($notificacionesDto->getAcuerdo()!="") ||($notificacionesDto->getNumCarpeta()!="") ||($notificacionesDto->getTipoCarpeta()!="") ||($notificacionesDto->getTipoJuzgado()!="") ||($notificacionesDto->getAnexo()!="") ||($notificacionesDto->getIdsDocumentos()!="") ){
$sql.=" AND ";
}
}
if($notificacionesDto->getAcuerdo()!=""){
$sql.="Acuerdo='".$notificacionesDto->getAcuerdo()."'";
if(($notificacionesDto->getNumCarpeta()!="") ||($notificacionesDto->getTipoCarpeta()!="") ||($notificacionesDto->getTipoJuzgado()!="") ||($notificacionesDto->getAnexo()!="") ||($notificacionesDto->getIdsDocumentos()!="") ){
$sql.=" AND ";
}
}
if($notificacionesDto->getNumCarpeta()!=""){
$sql.="NumCarpeta='".$notificacionesDto->getNumCarpeta()."'";
if(($notificacionesDto->getTipoCarpeta()!="") ||($notificacionesDto->getTipoJuzgado()!="") ||($notificacionesDto->getAnexo()!="") ||($notificacionesDto->getIdsDocumentos()!="") ){
$sql.=" AND ";
}
}
if($notificacionesDto->getTipoCarpeta()!=""){
$sql.="TipoCarpeta='".$notificacionesDto->getTipoCarpeta()."'";
if(($notificacionesDto->getTipoJuzgado()!="") ||($notificacionesDto->getAnexo()!="") ||($notificacionesDto->getIdsDocumentos()!="") ){
$sql.=" AND ";
}
}
if($notificacionesDto->getTipoJuzgado()!=""){
$sql.="TipoJuzgado='".$notificacionesDto->getTipoJuzgado()."'";
if(($notificacionesDto->getAnexo()!="") ||($notificacionesDto->getIdsDocumentos()!="") ){
$sql.=" AND ";
}
}
if($notificacionesDto->getAnexo()!=""){
$sql.="Anexo='".$notificacionesDto->getAnexo()."'";
if(($notificacionesDto->getIdsDocumentos()!="") ){
$sql.=" AND ";
}
}
if($notificacionesDto->getIdsDocumentos()!=""){
$sql.="idsDocumentos='".$notificacionesDto->getIdsDocumentos()."'";
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
$tmp[$contador] = new NotificacionesDTO();
$tmp[$contador]->setIdNotificacion($row["idNotificacion"]);
$tmp[$contador]->setIdJuzgadoGestion($row["idJuzgadoGestion"]);
$tmp[$contador]->setIdAcuerdo($row["idAcuerdo"]);
$tmp[$contador]->setFechaNotificacion($row["FechaNotificacion"]);
$tmp[$contador]->setIdNotificador($row["idNotificador"]);
$tmp[$contador]->setNotificador($row["Notificador"]);
$tmp[$contador]->setTipoDoc($row["TipoDoc"]);
$tmp[$contador]->setAcuerdo($row["Acuerdo"]);
$tmp[$contador]->setNumCarpeta($row["NumCarpeta"]);
$tmp[$contador]->setTipoCarpeta($row["TipoCarpeta"]);
$tmp[$contador]->setTipoJuzgado($row["TipoJuzgado"]);
$tmp[$contador]->setAnexo($row["Anexo"]);
$tmp[$contador]->setIdsDocumentos($row["idsDocumentos"]);
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