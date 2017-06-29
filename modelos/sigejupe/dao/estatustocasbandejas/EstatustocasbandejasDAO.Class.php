<?php

/*
 * ************************************************
 * FRAMEWORK V1.0.0 (http://www.pjedomex.gob.mx)
 * Copyright 2009-2015 DAOS
 * Licensed under the MIT license 
 * Autor: *
 * Departamento de Desarrollo de Software
 * Subdireccion de Ingenieria de Software
 * Direccion de Teclogias de Informacion
 * Poder Judicial del Estado de Mexico
 * ************************************************
 */

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/estatustocasbandejas/EstatustocasbandejasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class EstatustocasbandejasDAO {

   protected $_proveedor;

   public function __construct($gestor = "mysql", $bd = "gestion") {
      $this->_proveedor = new Proveedor('mysql', 'sigejupe');
   }

   public function _conexion() {
      $this->_proveedor->connect();
   }

   public function insertEstatustocasbandejas($estatustocasbandejasDto, $proveedor = null) {
      $tmp = "";
      $contador = 0;
      if ($proveedor == null) {
         $this->_conexion(null);
//$this->_proveedor->connect();
      } else if ($proveedor != null) {
         $this->_proveedor = $proveedor;
      }
      $sql = "INSERT INTO tblestatustocasbandejas(";
      if ($estatustocasbandejasDto->getIdEstatusTocaBandeja() != "") {
         $sql.="idEstatusTocaBandeja";
         if (($estatustocasbandejasDto->getIdCarpetaJudicial() != "") || ($estatustocasbandejasDto->getRecibido() != "") || ($estatustocasbandejasDto->getCveUsuario() != "") || ($estatustocasbandejasDto->getOrigen() != "") || ($estatustocasbandejasDto->getCveTipoCarpeta() != "") || ($estatustocasbandejasDto->getActivo() != "")) {
            $sql.=",";
         }
      }
      if ($estatustocasbandejasDto->getIdCarpetaJudicial() != "") {
         $sql.="idCarpetaJudicial";
         if (($estatustocasbandejasDto->getRecibido() != "") || ($estatustocasbandejasDto->getCveUsuario() != "") || ($estatustocasbandejasDto->getOrigen() != "") || ($estatustocasbandejasDto->getCveTipoCarpeta() != "") || ($estatustocasbandejasDto->getActivo() != "")) {
            $sql.=",";
         }
      }
      if ($estatustocasbandejasDto->getRecibido() != "") {
         $sql.="recibido";
         if (($estatustocasbandejasDto->getCveUsuario() != "") || ($estatustocasbandejasDto->getOrigen() != "") || ($estatustocasbandejasDto->getCveTipoCarpeta() != "") || ($estatustocasbandejasDto->getActivo() != "")) {
            $sql.=",";
         }
      }
      if ($estatustocasbandejasDto->getCveUsuario() != "") {
         $sql.="cveUsuario";
         if (($estatustocasbandejasDto->getOrigen() != "") || ($estatustocasbandejasDto->getCveTipoCarpeta() != "") || ($estatustocasbandejasDto->getActivo() != "")) {
            $sql.=",";
         }
      }
      if ($estatustocasbandejasDto->getOrigen() != "") {
         $sql.="origen";
         if (($estatustocasbandejasDto->getCveTipoCarpeta() != "") || ($estatustocasbandejasDto->getActivo() != "")) {
            $sql.=",";
         }
      }
      if ($estatustocasbandejasDto->getCveTipoCarpeta() != "") {
         $sql.="cveTipoCarpeta";
         if (($estatustocasbandejasDto->getActivo() != "")) {
            $sql.=",";
         }
      }
      if ($estatustocasbandejasDto->getActivo() != "") {
         $sql.="activo";
      }
      $sql.=",fechaRegistro";
      $sql.=",fechaActualizacion";
      $sql.=") VALUES(";
      if ($estatustocasbandejasDto->getIdEstatusTocaBandeja() != "") {
         $sql.="'" . $estatustocasbandejasDto->getIdEstatusTocaBandeja() . "'";
         if (($estatustocasbandejasDto->getIdCarpetaJudicial() != "") || ($estatustocasbandejasDto->getRecibido() != "") || ($estatustocasbandejasDto->getCveUsuario() != "") || ($estatustocasbandejasDto->getOrigen() != "") || ($estatustocasbandejasDto->getCveTipoCarpeta() != "") || ($estatustocasbandejasDto->getActivo() != "")) {
            $sql.=",";
         }
      }
      if ($estatustocasbandejasDto->getIdCarpetaJudicial() != "") {
         $sql.="'" . $estatustocasbandejasDto->getIdCarpetaJudicial() . "'";
         if (($estatustocasbandejasDto->getRecibido() != "") || ($estatustocasbandejasDto->getCveUsuario() != "") || ($estatustocasbandejasDto->getOrigen() != "") || ($estatustocasbandejasDto->getCveTipoCarpeta() != "") || ($estatustocasbandejasDto->getActivo() != "")) {
            $sql.=",";
         }
      }
      if ($estatustocasbandejasDto->getRecibido() != "") {
         $sql.="'" . $estatustocasbandejasDto->getRecibido() . "'";
         if (($estatustocasbandejasDto->getCveUsuario() != "") || ($estatustocasbandejasDto->getOrigen() != "") || ($estatustocasbandejasDto->getCveTipoCarpeta() != "") || ($estatustocasbandejasDto->getActivo() != "")) {
            $sql.=",";
         }
      }
      if ($estatustocasbandejasDto->getCveUsuario() != "") {
         $sql.="'" . $estatustocasbandejasDto->getCveUsuario() . "'";
         if (($estatustocasbandejasDto->getOrigen() != "") || ($estatustocasbandejasDto->getCveTipoCarpeta() != "") || ($estatustocasbandejasDto->getActivo() != "")) {
            $sql.=",";
         }
      }
      if ($estatustocasbandejasDto->getOrigen() != "") {
         $sql.="'" . $estatustocasbandejasDto->getOrigen() . "'";
         if (($estatustocasbandejasDto->getCveTipoCarpeta() != "") || ($estatustocasbandejasDto->getActivo() != "")) {
            $sql.=",";
         }
      }
      if ($estatustocasbandejasDto->getCveTipoCarpeta() != "") {
         $sql.="'" . $estatustocasbandejasDto->getCveTipoCarpeta() . "'";
         if (($estatustocasbandejasDto->getActivo() != "")) {
            $sql.=",";
         }
      }
      if ($estatustocasbandejasDto->getActivo() != "") {
         $sql.="'" . $estatustocasbandejasDto->getActivo() . "'";
      }
      if ($estatustocasbandejasDto->getFechaRegistro() != "") {
         
      }
      if ($estatustocasbandejasDto->getFechaActualizacion() != "") {
         
      }
      $sql.=",now()";
      $sql.=",now()";
      $sql.=")";
      $this->_proveedor->execute($sql);
      if (!$this->_proveedor->error()) {
         $tmp = new EstatustocasbandejasDTO();
         $tmp->setidEstatusTocaBandeja($this->_proveedor->lastID());
         $tmp = $this->selectEstatustocasbandejas($tmp, "", $this->_proveedor);
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

   public function updateEstatustocasbandejas($estatustocasbandejasDto, $proveedor = null) {
      $tmp = "";
      $contador = 0;
      if ($proveedor == null) {
         $this->_conexion(null);
//$this->_proveedor->connect();
      } else if ($proveedor != null) {
         $this->_proveedor = $proveedor;
      }
      $sql = "UPDATE tblestatustocasbandejas SET ";
      if ($estatustocasbandejasDto->getIdEstatusTocaBandeja() != "") {
         $sql.="idEstatusTocaBandeja='" . $estatustocasbandejasDto->getIdEstatusTocaBandeja() . "'";
         if (($estatustocasbandejasDto->getIdCarpetaJudicial() != "") || ($estatustocasbandejasDto->getRecibido() != "") || ($estatustocasbandejasDto->getCveUsuario() != "") || ($estatustocasbandejasDto->getOrigen() != "") || ($estatustocasbandejasDto->getCveTipoCarpeta() != "") || ($estatustocasbandejasDto->getActivo() != "") || ($estatustocasbandejasDto->getFechaRegistro() != "") || ($estatustocasbandejasDto->getFechaActualizacion() != "")) {
            $sql.=",";
         }
      }
      if ($estatustocasbandejasDto->getIdCarpetaJudicial() != "") {
         $sql.="idCarpetaJudicial='" . $estatustocasbandejasDto->getIdCarpetaJudicial() . "'";
         if (($estatustocasbandejasDto->getRecibido() != "") || ($estatustocasbandejasDto->getCveUsuario() != "") || ($estatustocasbandejasDto->getOrigen() != "") || ($estatustocasbandejasDto->getCveTipoCarpeta() != "") || ($estatustocasbandejasDto->getActivo() != "") || ($estatustocasbandejasDto->getFechaRegistro() != "") || ($estatustocasbandejasDto->getFechaActualizacion() != "")) {
            $sql.=",";
         }
      }
      if ($estatustocasbandejasDto->getRecibido() != "") {
         $sql.="recibido='" . $estatustocasbandejasDto->getRecibido() . "'";
         if (($estatustocasbandejasDto->getCveUsuario() != "") || ($estatustocasbandejasDto->getOrigen() != "") || ($estatustocasbandejasDto->getCveTipoCarpeta() != "") || ($estatustocasbandejasDto->getActivo() != "") || ($estatustocasbandejasDto->getFechaRegistro() != "") || ($estatustocasbandejasDto->getFechaActualizacion() != "")) {
            $sql.=",";
         }
      }
      if ($estatustocasbandejasDto->getCveUsuario() != "") {
         $sql.="cveUsuario='" . $estatustocasbandejasDto->getCveUsuario() . "'";
         if (($estatustocasbandejasDto->getOrigen() != "") || ($estatustocasbandejasDto->getCveTipoCarpeta() != "") || ($estatustocasbandejasDto->getActivo() != "") || ($estatustocasbandejasDto->getFechaRegistro() != "") || ($estatustocasbandejasDto->getFechaActualizacion() != "")) {
            $sql.=",";
         }
      }
      if ($estatustocasbandejasDto->getOrigen() != "") {
         $sql.="origen='" . $estatustocasbandejasDto->getOrigen() . "'";
         if (($estatustocasbandejasDto->getCveTipoCarpeta() != "") || ($estatustocasbandejasDto->getActivo() != "") || ($estatustocasbandejasDto->getFechaRegistro() != "") || ($estatustocasbandejasDto->getFechaActualizacion() != "")) {
            $sql.=",";
         }
      }
      if ($estatustocasbandejasDto->getCveTipoCarpeta() != "") {
         $sql.="cveTipoCarpeta='" . $estatustocasbandejasDto->getCveTipoCarpeta() . "'";
         if (($estatustocasbandejasDto->getActivo() != "") || ($estatustocasbandejasDto->getFechaRegistro() != "") || ($estatustocasbandejasDto->getFechaActualizacion() != "")) {
            $sql.=",";
         }
      }
      if ($estatustocasbandejasDto->getActivo() != "") {
         $sql.="activo='" . $estatustocasbandejasDto->getActivo() . "'";
         if (($estatustocasbandejasDto->getFechaRegistro() != "") || ($estatustocasbandejasDto->getFechaActualizacion() != "")) {
            $sql.=",";
         }
      }
      if ($estatustocasbandejasDto->getFechaRegistro() != "") {
         $sql.="fechaRegistro='" . $estatustocasbandejasDto->getFechaRegistro() . "'";
         if (($estatustocasbandejasDto->getFechaActualizacion() != "")) {
            $sql.=",";
         }
      }
      if ($estatustocasbandejasDto->getFechaActualizacion() != "") {
         $sql.=" fechaActualizacion='" . $estatustocasbandejasDto->getFechaActualizacion() . "'";
      } else {
         $sql.=" , fechaActualizacion=now()";
      }
      $sql.=" WHERE idEstatusTocaBandeja='" . $estatustocasbandejasDto->getIdEstatusTocaBandeja() . "'";
//      var_dump($sql);
      $this->_proveedor->execute($sql);
      if (!$this->_proveedor->error()) {
         $tmp = new EstatustocasbandejasDTO();
         $tmp->setidEstatusTocaBandeja($estatustocasbandejasDto->getIdEstatusTocaBandeja());
         $tmp = $this->selectEstatustocasbandejas($tmp, "", $this->_proveedor);
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

   public function deleteEstatustocasbandejas($estatustocasbandejasDto, $proveedor = null) {
      $tmp = "";
      $contador = 0;
      if ($proveedor == null) {
         $this->_conexion(null);
//$this->_proveedor->connect();
      } else if ($proveedor != null) {
         $this->_proveedor = $proveedor;
      }
      $sql = "DELETE FROM tblestatustocasbandejas  WHERE idEstatusTocaBandeja='" . $estatustocasbandejasDto->getIdEstatusTocaBandeja() . "'";
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

   public function selectEstatustocasbandejas($estatustocasbandejasDto, $orden = "", $proveedor = null) {
      $tmp = "";
      $contador = 0;
      if ($proveedor == null) {
         $this->_conexion(null);
//$this->_proveedor->connect();
      } else if ($proveedor != null) {
         $this->_proveedor = $proveedor;
      }
      $sql = "SELECT idEstatusTocaBandeja,idCarpetaJudicial,recibido,cveUsuario,origen,cveTipoCarpeta,activo,fechaRegistro,fechaActualizacion FROM tblestatustocasbandejas ";
      if (($estatustocasbandejasDto->getIdEstatusTocaBandeja() != "") || ($estatustocasbandejasDto->getIdCarpetaJudicial() != "") || ($estatustocasbandejasDto->getRecibido() != "") || ($estatustocasbandejasDto->getCveUsuario() != "") || ($estatustocasbandejasDto->getOrigen() != "") || ($estatustocasbandejasDto->getCveTipoCarpeta() != "") || ($estatustocasbandejasDto->getActivo() != "") || ($estatustocasbandejasDto->getFechaRegistro() != "") || ($estatustocasbandejasDto->getFechaActualizacion() != "")) {
         $sql.=" WHERE ";
      }
      if ($estatustocasbandejasDto->getIdEstatusTocaBandeja() != "") {
         $sql.="idEstatusTocaBandeja='" . $estatustocasbandejasDto->getIdEstatusTocaBandeja() . "'";
         if (($estatustocasbandejasDto->getIdCarpetaJudicial() != "") || ($estatustocasbandejasDto->getRecibido() != "") || ($estatustocasbandejasDto->getCveUsuario() != "") || ($estatustocasbandejasDto->getOrigen() != "") || ($estatustocasbandejasDto->getCveTipoCarpeta() != "") || ($estatustocasbandejasDto->getActivo() != "") || ($estatustocasbandejasDto->getFechaRegistro() != "") || ($estatustocasbandejasDto->getFechaActualizacion() != "")) {
            $sql.=" AND ";
         }
      }
      if ($estatustocasbandejasDto->getIdCarpetaJudicial() != "") {
         $sql.="idCarpetaJudicial='" . $estatustocasbandejasDto->getIdCarpetaJudicial() . "'";
         if (($estatustocasbandejasDto->getRecibido() != "") || ($estatustocasbandejasDto->getCveUsuario() != "") || ($estatustocasbandejasDto->getOrigen() != "") || ($estatustocasbandejasDto->getCveTipoCarpeta() != "") || ($estatustocasbandejasDto->getActivo() != "") || ($estatustocasbandejasDto->getFechaRegistro() != "") || ($estatustocasbandejasDto->getFechaActualizacion() != "")) {
            $sql.=" AND ";
         }
      }
      if ($estatustocasbandejasDto->getRecibido() != "") {
         $sql.="recibido='" . $estatustocasbandejasDto->getRecibido() . "'";
         if (($estatustocasbandejasDto->getCveUsuario() != "") || ($estatustocasbandejasDto->getOrigen() != "") || ($estatustocasbandejasDto->getCveTipoCarpeta() != "") || ($estatustocasbandejasDto->getActivo() != "") || ($estatustocasbandejasDto->getFechaRegistro() != "") || ($estatustocasbandejasDto->getFechaActualizacion() != "")) {
            $sql.=" AND ";
         }
      }
      if ($estatustocasbandejasDto->getCveUsuario() != "") {
         $sql.="cveUsuario='" . $estatustocasbandejasDto->getCveUsuario() . "'";
         if (($estatustocasbandejasDto->getOrigen() != "") || ($estatustocasbandejasDto->getCveTipoCarpeta() != "") || ($estatustocasbandejasDto->getActivo() != "") || ($estatustocasbandejasDto->getFechaRegistro() != "") || ($estatustocasbandejasDto->getFechaActualizacion() != "")) {
            $sql.=" AND ";
         }
      }
      if ($estatustocasbandejasDto->getOrigen() != "") {
         $sql.="origen='" . $estatustocasbandejasDto->getOrigen() . "'";
         if (($estatustocasbandejasDto->getCveTipoCarpeta() != "") || ($estatustocasbandejasDto->getActivo() != "") || ($estatustocasbandejasDto->getFechaRegistro() != "") || ($estatustocasbandejasDto->getFechaActualizacion() != "")) {
            $sql.=" AND ";
         }
      }
      if ($estatustocasbandejasDto->getCveTipoCarpeta() != "") {
         $sql.="cveTipoCarpeta='" . $estatustocasbandejasDto->getCveTipoCarpeta() . "'";
         if (($estatustocasbandejasDto->getActivo() != "") || ($estatustocasbandejasDto->getFechaRegistro() != "") || ($estatustocasbandejasDto->getFechaActualizacion() != "")) {
            $sql.=" AND ";
         }
      }
      if ($estatustocasbandejasDto->getActivo() != "") {
         $sql.="activo='" . $estatustocasbandejasDto->getActivo() . "'";
         if (($estatustocasbandejasDto->getFechaRegistro() != "") || ($estatustocasbandejasDto->getFechaActualizacion() != "")) {
            $sql.=" AND ";
         }
      }
      if ($estatustocasbandejasDto->getFechaRegistro() != "") {
         $sql.="fechaRegistro='" . $estatustocasbandejasDto->getFechaRegistro() . "'";
         if (($estatustocasbandejasDto->getFechaActualizacion() != "")) {
            $sql.=" AND ";
         }
      }
      if ($estatustocasbandejasDto->getFechaActualizacion() != "") {
         $sql.="fechaActualizacion='" . $estatustocasbandejasDto->getFechaActualizacion() . "'";
      }
      if ($orden != "") {
         $sql.=$orden;
      } else {
         $sql.="";
      }
      $this->_proveedor->execute($sql);
      if (!$this->_proveedor->error()) {
         if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
            while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
               $tmp[$contador] = new EstatustocasbandejasDTO();
               $tmp[$contador]->setIdEstatusTocaBandeja($row["idEstatusTocaBandeja"]);
               $tmp[$contador]->setIdCarpetaJudicial($row["idCarpetaJudicial"]);
               $tmp[$contador]->setRecibido($row["recibido"]);
               $tmp[$contador]->setCveUsuario($row["cveUsuario"]);
               $tmp[$contador]->setOrigen($row["origen"]);
               $tmp[$contador]->setCveTipoCarpeta($row["cveTipoCarpeta"]);
               $tmp[$contador]->setActivo($row["activo"]);
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