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

include_once(dirname(__FILE__) . "/../../../../modelos/sigejupe/dto/imagenes/ImagenesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../../tribunal/connect/Proveedor.Class.php");

class ImagenesDAO {

    protected $_proveedor;

    public function __construct($gestor = "mysql", $bd = "gestion") {
        $this->_proveedor = new Proveedor('mysql', 'sigejupe');
    }

    public function _conexion() {
        $this->_proveedor->connect();
    }

    public function insertImagenes($imagenesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "INSERT INTO tblimagenes(";
        if ($imagenesDto->getIdImagen() != "") {
            $sql.="idImagen";
            if (($imagenesDto->getIdDocumentoImg() != "") || ($imagenesDto->getFojas() != "") || ($imagenesDto->getRuta() != "") || ($imagenesDto->getPosicion() != "") || ($imagenesDto->getActivo() != "") || ($imagenesDto->getFechaImagen() != "") || ($imagenesDto->getAdjunto() != "") || ($imagenesDto->getBase64() != "")) {
                $sql.=",";
            }
        }
        if ($imagenesDto->getIdDocumentoImg() != "") {
            $sql.="idDocumentoImg";
            if (($imagenesDto->getFojas() != "") || ($imagenesDto->getRuta() != "") || ($imagenesDto->getPosicion() != "") || ($imagenesDto->getActivo() != "") || ($imagenesDto->getFechaImagen() != "") || ($imagenesDto->getAdjunto() != "") || ($imagenesDto->getBase64() != "")) {
                $sql.=",";
            }
        }
        if ($imagenesDto->getFojas() != "") {
            $sql.="fojas";
            if (($imagenesDto->getRuta() != "") || ($imagenesDto->getPosicion() != "") || ($imagenesDto->getActivo() != "") || ($imagenesDto->getFechaImagen() != "") || ($imagenesDto->getAdjunto() != "") || ($imagenesDto->getBase64() != "")) {
                $sql.=",";
            }
        }
        if ($imagenesDto->getRuta() != "") {
            $sql.="ruta";
            if (($imagenesDto->getPosicion() != "") || ($imagenesDto->getActivo() != "") || ($imagenesDto->getFechaImagen() != "") || ($imagenesDto->getAdjunto() != "") || ($imagenesDto->getBase64() != "")) {
                $sql.=",";
            }
        }
        if ($imagenesDto->getPosicion() != "") {
            $sql.="posicion";
            if (($imagenesDto->getActivo() != "") || ($imagenesDto->getFechaImagen() != "") || ($imagenesDto->getAdjunto() != "") || ($imagenesDto->getBase64() != "")) {
                $sql.=",";
            }
        }
        if ($imagenesDto->getActivo() != "") {
            $sql.="activo";
            if (($imagenesDto->getFechaImagen() != "") || ($imagenesDto->getAdjunto() != "") || ($imagenesDto->getBase64() != "")) {
                $sql.=",";
            }
        }
        if ($imagenesDto->getFechaImagen() != "") {
            $sql.="fechaImagen";
            if (($imagenesDto->getAdjunto() != "") || ($imagenesDto->getBase64() != "")) {
                $sql.=",";
            }
        }
        if ($imagenesDto->getAdjunto() != "") {
            $sql.="adjunto";
            if ($imagenesDto->getBase64() != "") {
                $sql.=",";
            }
        }
        if ($imagenesDto->getBase64() != "") {
            $sql.="base64";
        }
        $sql.=",fechaActualizacion";
        $sql.=",fechaRegistro";
        $sql.=") VALUES(";
        if ($imagenesDto->getIdImagen() != "") {
            $sql.="'" . $imagenesDto->getIdImagen() . "'";
            if (($imagenesDto->getIdDocumentoImg() != "") || ($imagenesDto->getFojas() != "") || ($imagenesDto->getRuta() != "") || ($imagenesDto->getPosicion() != "") || ($imagenesDto->getActivo() != "") || ($imagenesDto->getFechaImagen() != "") || ($imagenesDto->getAdjunto() != "") || ($imagenesDto->getBase64() != "")) {
                $sql.=",";
            }
        }
        if ($imagenesDto->getIdDocumentoImg() != "") {
            $sql.="'" . $imagenesDto->getIdDocumentoImg() . "'";
            if (($imagenesDto->getFojas() != "") || ($imagenesDto->getRuta() != "") || ($imagenesDto->getPosicion() != "") || ($imagenesDto->getActivo() != "") || ($imagenesDto->getFechaImagen() != "") || ($imagenesDto->getAdjunto() != "") || ($imagenesDto->getBase64() != "")) {
                $sql.=",";
            }
        }
        if ($imagenesDto->getFojas() != "") {
            $sql.="'" . $imagenesDto->getFojas() . "'";
            if (($imagenesDto->getRuta() != "") || ($imagenesDto->getPosicion() != "") || ($imagenesDto->getActivo() != "") || ($imagenesDto->getFechaImagen() != "") || ($imagenesDto->getAdjunto() != "") || ($imagenesDto->getBase64() != "")) {
                $sql.=",";
            }
        }
        if ($imagenesDto->getRuta() != "") {
            $sql.="'" . $imagenesDto->getRuta() . "'";
            if (($imagenesDto->getPosicion() != "") || ($imagenesDto->getActivo() != "") || ($imagenesDto->getFechaImagen() != "") || ($imagenesDto->getAdjunto() != "") || ($imagenesDto->getBase64() != "")) {
                $sql.=",";
            }
        }
        if ($imagenesDto->getPosicion() != "") {
            $sql.="'" . $imagenesDto->getPosicion() . "'";
            if (($imagenesDto->getActivo() != "") || ($imagenesDto->getFechaImagen() != "") || ($imagenesDto->getAdjunto() != "") || ($imagenesDto->getBase64() != "")) {
                $sql.=",";
            }
        }
        if ($imagenesDto->getActivo() != "") {
            $sql.="'" . $imagenesDto->getActivo() . "'";
            if (($imagenesDto->getFechaImagen() != "") || ($imagenesDto->getAdjunto() != "") || ($imagenesDto->getBase64() != "")) {
                $sql.=",";
            }
        }
        if ($imagenesDto->getFechaImagen() != "") {
            $sql.="'" . $imagenesDto->getFechaImagen() . "'";
            if (($imagenesDto->getAdjunto() != "") || ($imagenesDto->getBase64() != "")) {
                $sql.=",";
            }
        }
        if ($imagenesDto->getFechaActualizacion() != "") {
            if (($imagenesDto->getAdjunto() != "") || ($imagenesDto->getBase64() != "")) {
                $sql.=",";
            }
        }
        if ($imagenesDto->getFechaRegistro() != "") {
            if (($imagenesDto->getAdjunto() != "") || ($imagenesDto->getBase64() != "")) {
                $sql.=",";
            }
        }
        if ($imagenesDto->getAdjunto() != "") {
            $sql.="'" . $imagenesDto->getAdjunto() . "'";
            if (($imagenesDto->getBase64() != "")) {
                $sql.=",";
            }
        }
        if ($imagenesDto->getBase64() != "") {
            $sql.="'" . $imagenesDto->getBase64() . "'";
        }
        $sql.=",now()";
        $sql.=",now()";
        $sql.=")";
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ImagenesDTO();
            $tmp->setidImagen($this->_proveedor->lastID());
            $tmp = $this->selectImagenes($tmp, "", $this->_proveedor);
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

    public function updateImagenes($imagenesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "UPDATE tblimagenes SET ";
        if ($imagenesDto->getIdImagen() != "") {
            $sql.="idImagen='" . $imagenesDto->getIdImagen() . "'";
            if (($imagenesDto->getIdDocumentoImg() != "") || ($imagenesDto->getFojas() != "") || ($imagenesDto->getRuta() != "") || ($imagenesDto->getPosicion() != "") || ($imagenesDto->getActivo() != "") || ($imagenesDto->getFechaImagen() != "") || ($imagenesDto->getFechaActualizacion() != "") || ($imagenesDto->getFechaRegistro() != "") || ($imagenesDto->getAdjunto() != "") || ($imagenesDto->getBase64() != "")) {
                $sql.=",";
            }
        }
        if ($imagenesDto->getIdDocumentoImg() != "") {
            $sql.="idDocumentoImg='" . $imagenesDto->getIdDocumentoImg() . "'";
            if (($imagenesDto->getFojas() != "") || ($imagenesDto->getRuta() != "") || ($imagenesDto->getPosicion() != "") || ($imagenesDto->getActivo() != "") || ($imagenesDto->getFechaImagen() != "") || ($imagenesDto->getFechaActualizacion() != "") || ($imagenesDto->getFechaRegistro() != "") || ($imagenesDto->getAdjunto() != "") || ($imagenesDto->getBase64() != "")) {
                $sql.=",";
            }
        }
        if ($imagenesDto->getFojas() != "") {
            $sql.="fojas='" . $imagenesDto->getFojas() . "'";
            if (($imagenesDto->getRuta() != "") || ($imagenesDto->getPosicion() != "") || ($imagenesDto->getActivo() != "") || ($imagenesDto->getFechaImagen() != "") || ($imagenesDto->getFechaActualizacion() != "") || ($imagenesDto->getFechaRegistro() != "") || ($imagenesDto->getAdjunto() != "") || ($imagenesDto->getBase64() != "")) {
                $sql.=",";
            }
        }
        if ($imagenesDto->getRuta() != "") {
            $sql.="ruta='" . $imagenesDto->getRuta() . "'";
            if (($imagenesDto->getPosicion() != "") || ($imagenesDto->getActivo() != "") || ($imagenesDto->getFechaImagen() != "") || ($imagenesDto->getFechaActualizacion() != "") || ($imagenesDto->getFechaRegistro() != "") || ($imagenesDto->getAdjunto() != "") || ($imagenesDto->getBase64() != "")) {
                $sql.=",";
            }
        }
        if ($imagenesDto->getPosicion() != "") {
            $sql.="posicion='" . $imagenesDto->getPosicion() . "'";
            if (($imagenesDto->getActivo() != "") || ($imagenesDto->getFechaImagen() != "") || ($imagenesDto->getFechaActualizacion() != "") || ($imagenesDto->getFechaRegistro() != "") || ($imagenesDto->getAdjunto() != "") || ($imagenesDto->getBase64() != "")) {
                $sql.=",";
            }
        }
        if ($imagenesDto->getActivo() != "") {
            $sql.="activo='" . $imagenesDto->getActivo() . "'";
            if (($imagenesDto->getFechaImagen() != "") || ($imagenesDto->getFechaActualizacion() != "") || ($imagenesDto->getFechaRegistro() != "") || ($imagenesDto->getAdjunto() != "") || ($imagenesDto->getBase64() != "")) {
                $sql.=",";
            }
        }
        if ($imagenesDto->getFechaImagen() != "") {
            $sql.="fechaImagen='" . $imagenesDto->getFechaImagen() . "'";
            if (($imagenesDto->getFechaActualizacion() != "") || ($imagenesDto->getFechaRegistro() != "") || ($imagenesDto->getAdjunto() != "") || ($imagenesDto->getBase64() != "")) {
                $sql.=",";
            }
        }
        if ($imagenesDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $imagenesDto->getFechaActualizacion() . "'";
            if (($imagenesDto->getFechaRegistro() != "") || ($imagenesDto->getAdjunto() != "") || ($imagenesDto->getBase64() != "")) {
                $sql.=",";
            }
        }
        if ($imagenesDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $imagenesDto->getFechaRegistro() . "'";
            if (($imagenesDto->getAdjunto() != "") || ($imagenesDto->getBase64() != "")) {
                $sql.=",";
            }
        }
        if ($imagenesDto->getAdjunto() != "") {
            $sql.="adjunto='" . $imagenesDto->getAdjunto() . "'";
            if (($imagenesDto->getBase64() != "")) {
                $sql.=",";
            }
        }
        if ($imagenesDto->getBase64() != "") {
            $sql.="base64='" . $imagenesDto->getBase64() . "'";
        }
        $sql.=" WHERE idImagen='" . $imagenesDto->getIdImagen() . "'";
//        echo $sql;
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ImagenesDTO();
            $tmp->setidImagen($imagenesDto->getIdImagen());
            $tmp = $this->selectImagenes($tmp, "", $this->_proveedor);
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

    public function deleteImagenes($imagenesDto, $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "DELETE FROM tblimagenes  WHERE idImagen='" . $imagenesDto->getIdImagen() . "'";
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

    public function selectImagenes($imagenesDto, $orden = "", $proveedor = null) {
        $tmp = "";
        $contador = 0;
        if ($proveedor == null) {
            $this->_conexion(null);
//$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }
        $sql = "SELECT idImagen,idDocumentoImg,fojas,ruta,posicion,activo,fechaImagen,fechaActualizacion,fechaRegistro,adjunto,base64 FROM tblimagenes ";
        if (($imagenesDto->getIdImagen() != "") || ($imagenesDto->getIdDocumentoImg() != "") || ($imagenesDto->getFojas() != "") || ($imagenesDto->getRuta() != "") || ($imagenesDto->getPosicion() != "") || ($imagenesDto->getActivo() != "") || ($imagenesDto->getFechaImagen() != "") || ($imagenesDto->getFechaActualizacion() != "") || ($imagenesDto->getFechaRegistro() != "") || ($imagenesDto->getAdjunto() != "") || ($imagenesDto->getBase64() != "")) {
            $sql.=" WHERE ";
        }
        if ($imagenesDto->getIdImagen() != "") {
            $sql.="idImagen='" . $imagenesDto->getIdImagen() . "'";
            if (($imagenesDto->getIdDocumentoImg() != "") || ($imagenesDto->getFojas() != "") || ($imagenesDto->getRuta() != "") || ($imagenesDto->getPosicion() != "") || ($imagenesDto->getActivo() != "") || ($imagenesDto->getFechaImagen() != "") || ($imagenesDto->getFechaActualizacion() != "") || ($imagenesDto->getFechaRegistro() != "") || ($imagenesDto->getAdjunto() != "") || ($imagenesDto->getBase64() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imagenesDto->getIdDocumentoImg() != "") {
            $sql.="idDocumentoImg='" . $imagenesDto->getIdDocumentoImg() . "'";
            if (($imagenesDto->getFojas() != "") || ($imagenesDto->getRuta() != "") || ($imagenesDto->getPosicion() != "") || ($imagenesDto->getActivo() != "") || ($imagenesDto->getFechaImagen() != "") || ($imagenesDto->getFechaActualizacion() != "") || ($imagenesDto->getFechaRegistro() != "") || ($imagenesDto->getAdjunto() != "") || ($imagenesDto->getBase64() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imagenesDto->getFojas() != "") {
            $sql.="fojas='" . $imagenesDto->getFojas() . "'";
            if (($imagenesDto->getRuta() != "") || ($imagenesDto->getPosicion() != "") || ($imagenesDto->getActivo() != "") || ($imagenesDto->getFechaImagen() != "") || ($imagenesDto->getFechaActualizacion() != "") || ($imagenesDto->getFechaRegistro() != "") || ($imagenesDto->getAdjunto() != "") || ($imagenesDto->getBase64() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imagenesDto->getRuta() != "") {
            $sql.="ruta='" . $imagenesDto->getRuta() . "'";
            if (($imagenesDto->getPosicion() != "") || ($imagenesDto->getActivo() != "") || ($imagenesDto->getFechaImagen() != "") || ($imagenesDto->getFechaActualizacion() != "") || ($imagenesDto->getFechaRegistro() != "") || ($imagenesDto->getAdjunto() != "") || ($imagenesDto->getBase64() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imagenesDto->getPosicion() != "") {
            $sql.="posicion='" . $imagenesDto->getPosicion() . "'";
            if (($imagenesDto->getActivo() != "") || ($imagenesDto->getFechaImagen() != "") || ($imagenesDto->getFechaActualizacion() != "") || ($imagenesDto->getFechaRegistro() != "") || ($imagenesDto->getAdjunto() != "") || ($imagenesDto->getBase64() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imagenesDto->getActivo() != "") {
            $sql.="activo='" . $imagenesDto->getActivo() . "'";
            if (($imagenesDto->getFechaImagen() != "") || ($imagenesDto->getFechaActualizacion() != "") || ($imagenesDto->getFechaRegistro() != "") || ($imagenesDto->getAdjunto() != "") || ($imagenesDto->getBase64() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imagenesDto->getFechaImagen() != "") {
            $sql.="fechaImagen='" . $imagenesDto->getFechaImagen() . "'";
            if (($imagenesDto->getFechaActualizacion() != "") || ($imagenesDto->getFechaRegistro() != "") || ($imagenesDto->getAdjunto() != "") || ($imagenesDto->getBase64() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imagenesDto->getFechaActualizacion() != "") {
            $sql.="fechaActualizacion='" . $imagenesDto->getFechaActualizacion() . "'";
            if (($imagenesDto->getFechaRegistro() != "") || ($imagenesDto->getAdjunto() != "") || ($imagenesDto->getBase64() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imagenesDto->getFechaRegistro() != "") {
            $sql.="fechaRegistro='" . $imagenesDto->getFechaRegistro() . "'";
            if (($imagenesDto->getAdjunto() != "") || ($imagenesDto->getBase64() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imagenesDto->getAdjunto() != "") {
            $sql.="adjunto='" . $imagenesDto->getAdjunto() . "'";
            if (($imagenesDto->getBase64() != "")) {
                $sql.=" AND ";
            }
        }
        if ($imagenesDto->getBase64() != "") {
            $sql.="base64='" . $imagenesDto->getBase64() . "'";
        }
        if ($orden != "") {
            $sql.=$orden;
        } else {
            $sql.="";
        }
//	echo $sql;
        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            if ($this->_proveedor->rows($this->_proveedor->stmt) > 0) {
                while ($row = $this->_proveedor->fetch_array($this->_proveedor->stmt, 0)) {
                    $tmp[$contador] = new ImagenesDTO();
                    $tmp[$contador]->setIdImagen($row["idImagen"]);
                    $tmp[$contador]->setIdDocumentoImg($row["idDocumentoImg"]);
                    $tmp[$contador]->setFojas($row["fojas"]);
                    $tmp[$contador]->setRuta($row["ruta"]);
                    $tmp[$contador]->setPosicion($row["posicion"]);
                    $tmp[$contador]->setActivo($row["activo"]);
                    $tmp[$contador]->setFechaImagen($row["fechaImagen"]);
                    $tmp[$contador]->setFechaActualizacion($row["fechaActualizacion"]);
                    $tmp[$contador]->setFechaRegistro($row["fechaRegistro"]);
                    $tmp[$contador]->setAdjunto($row["adjunto"]);
                    $tmp[$contador]->setBase64($row["base64"]);
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

    public function updateImagenPosicion($imagenesDto = "", $proveedor = null) {
        $tmp = "";

        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }

        $sql = "UPDATE tblimagenes set posicion = '" . $imagenesDto->getPosicion() . "'
                WHERE idImagen='" . $imagenesDto->getIdImagen() . "'";

        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ImagenesDTO();
            $tmp->setIdImagen($imagenesDto->getIdImagen());
            $tmp = $this->selectImagenes($tmp, "", $proveedor);
        }


        if ($proveedor == null) {
            $this->_proveedor->close();
        }
        return $tmp;
    }

    public function updateImagenActivo($imagenesDto = "", $proveedor = null) {
        $tmp = "";

        if ($proveedor == null) {
            $this->_conexion(null);
            //$this->_proveedor->connect();
        } else if ($proveedor != null) {
            $this->_proveedor = $proveedor;
        }

        $sql = "UPDATE tblimagenes set activo = '" . $imagenesDto->getActivo() . "' 
            WHERE idImagen='" . $imagenesDto->getIdImagen() . "'";

        $this->_proveedor->execute($sql);
        if (!$this->_proveedor->error()) {
            $tmp = new ImagenesDTO();
            $tmp->setIdImagen($imagenesDto->getIdImagen());
            $tmp = $this->selectImagenes($tmp, "", $proveedor);
        }


        if ($proveedor == null) {
            $this->_proveedor->close();
        }
        return $tmp;
    }

}

?>
