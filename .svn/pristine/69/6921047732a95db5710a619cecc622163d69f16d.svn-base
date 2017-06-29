<?php

/*
 * ************************************************
 * FRAMEWORK V1.0.0 (http://www.pjedomex.gob.mx)
 * Copyright 2009-2015 CONTROLLER
 * Licensed under the MIT license 
 * Autor: *
 * Departamento de Desarrollo de Software
 * Subdireccion de Ingenieria de Software
 * Direccion de Teclogias de Informacion
 * Poder Judicial del Estado de Mexico
 * ************************************************
 */

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/avisos/AvisosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/avisos/AvisosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/select/SelectDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");

class AvisosController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarAvisos($AvisosDto) {
        $AvisosDto->setidAviso(strtoupper(str_ireplace("'", "", trim($AvisosDto->getidAviso()))));
        $AvisosDto->setcveGrupo(strtoupper(str_ireplace("'", "", trim($AvisosDto->getcveGrupo()))));
        $AvisosDto->settituloAviso((str_ireplace("'", "", trim($AvisosDto->gettituloAviso()))));
        $AvisosDto->setsubtituloAviso((str_ireplace("'", "", trim($AvisosDto->getsubtituloAviso()))));
        $AvisosDto->settextAviso((str_ireplace("'", "", trim($AvisosDto->gettextAviso()))));
        $AvisosDto->settituloLink((str_ireplace("'", "", trim($AvisosDto->gettituloLink()))));
        $AvisosDto->setlink((str_ireplace("'", "", trim($AvisosDto->getlink()))));
        $AvisosDto->seturlImg((str_ireplace("'", "", trim($AvisosDto->geturlImg()))));
        $AvisosDto->setorden((str_ireplace("'", "", trim($AvisosDto->getorden()))));
        $AvisosDto->setfecInicio(strtoupper(str_ireplace("'", "", trim($AvisosDto->getfecInicio()))));
        $AvisosDto->setfecTermino(strtoupper(str_ireplace("'", "", trim($AvisosDto->getfecTermino()))));
        $AvisosDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($AvisosDto->getfechaRegistro()))));
        $AvisosDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($AvisosDto->getfechaActualizacion()))));
        $AvisosDto->setactivo(strtoupper(str_ireplace("'", "", trim($AvisosDto->getactivo()))));
        return $AvisosDto;
    }

    public function selectAvisos($AvisosDto, $proveedor = null) {
        $AvisosDto = $this->validarAvisos($AvisosDto);
        $AvisosDao = new AvisosDAO();
        $AvisosDto = $AvisosDao->selectAvisos($AvisosDto, $proveedor);
        return $AvisosDto;
    }
    public function consultarAvisos($AvisosDto, $proveedor = null) {
        $AvisosDto = $this->validarAvisos($AvisosDto);
        $AvisosDao = new AvisosDAO();
        $AvisosDto = $AvisosDao->selectAvisos($AvisosDto, $proveedor);
        return $AvisosDto;
    }

    public function insertAvisos($AvisosDto, $proveedor = null) {
        $AvisosDto = $this->validarAvisos($AvisosDto);
        $AvisosDao = new AvisosDAO();
        $AvisosDto = $AvisosDao->insertAvisos($AvisosDto, $proveedor);
        return $AvisosDto;
    }

    public function updateAvisos($AvisosDto, $proveedor = null) {
        $AvisosDto = $this->validarAvisos($AvisosDto);
        $AvisosDao = new AvisosDAO();
//$tmpDto = new AvisosDTO();
//$tmpDto = $AvisosDao->selectAvisos($AvisosDto,$proveedor);
//if($tmpDto!=""){//$AvisosDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $AvisosDto = $AvisosDao->updateAvisos($AvisosDto, $proveedor);
        return $AvisosDto;
//}
//return "";
    }

    public function deleteAvisos($AvisosDto, $proveedor = null) {
        $AvisosDto = $this->validarAvisos($AvisosDto);
        $AvisosDao = new AvisosDAO();
        $AvisosDto = $AvisosDao->deleteAvisos($AvisosDto, $proveedor);
        return $AvisosDto;
    }

    public function getIdAviso() {
        $SelectDAO = new SelectDAO();
        $params["fields"] = " auto_increment  ";
        $params["tables"] = " information_schema.TABLES ";
        $params["conditions"] = " TABLE_NAME ='tblavisos' and TABLE_SCHEMA='htsj_sigejupe' ";
//        $params["groups"] = "";
//        $params["orders"] = " a.idAviso DESC limit 1";

        $rs = $SelectDAO->selectDAO($params);

//        print_r($rs);
        return json_decode($rs);
    }

    public function moverArchivo($file, $tipoAviso) {
        $fileAvisosDir = dirname(__FILE__) . "/../../../vistas/img/avisos/";
//        echo "\n" . var_dump($file) . "\n";
        $tipo = explode("/", $file['type']);
//        var_dump($tipo);
        $idAviso = $this->getIdAviso();
//        $numero = (intval($this->getIdAviso()->resultados[0]->auto_increment));
//        $numero = (intval($this->getIdAviso()->resultados[0]->idAviso) + 1);
        $file['name'] = "aviso-" . $tipoAviso . "-" . $tipo[1] . "-" . (intval($this->getIdAviso()->resultados[0]->auto_increment)) . "." . $tipo[1];
        if (move_uploaded_file($file['tmp_name'], $fileAvisosDir . basename($file['name']))) {
            $files[] = $fileAvisosDir . $file['name'];
//            var_dump($file['name']);
            return $file['name'];
        } else {
            $error = true;
            return $error;
        }
    }

    public function guardarAviso($avisosDto, $filesImagenAviso = null, $filesArchivoEnlaceInformacion = null, $filesArchivoEnlaceImagen = null) {
//        echo "\nguardar Aviso\n";
//        var_dump($fileAvisosDir . basename($file['name']));
//        var_dump($file['tmp_name']);
//        foreach ($filesImagenAviso as $file) {
//        }
//        var_dump($filesImagenAviso);
//        var_dump($filesArchivoEnlaceInformacion);
//        var_dump($filesArchivoEnlaceImagen);
//        var_dump($avisosDto);
//        var_dump($this->getIdAviso()->resultados[0]->idAviso);

        $AvisosDao = new AvisosDAO();
//        $proveedor = new Proveedor('mysql', 'sigejupe');
//        $proveedor->connect();
//        $proveedor->execute("BEGIN");

        if ($avisosDto->getOrden() == 1 || $avisosDto->getOrden() == 2 || $avisosDto->getOrden() == 3) {
//            echo "\n Orden 1 2 3 \n";
            if ($filesImagenAviso != null) {
                $nombrefilesImagenAviso = $this->moverArchivo($filesImagenAviso, 'imagenAviso');
                $avisosDto->setUrlImg($nombrefilesImagenAviso);
            } else {
                
            }
            if ($filesArchivoEnlaceInformacion != null) {
                $nombrefilesArchivoEnlaceInformacion = $this->moverArchivo($filesArchivoEnlaceInformacion, 'archivoEnlaceInformacion');
                $avisosDto->setTituloLink($nombrefilesArchivoEnlaceInformacion);
            } else {
                
            }
            if ($filesArchivoEnlaceImagen != null) {
                $nombrefilesArchivoEnlaceImagen = $this->moverArchivo($filesArchivoEnlaceImagen, 'archivoEnlaceImagen');
                $avisosDto->setLink($nombrefilesArchivoEnlaceImagen);
            } else {
                
            }
//            var_dump($avisosDto);
            $avisosDto = $AvisosDao->insertAvisos($avisosDto);
//            var_dump($avisosDto);
            return $avisosDto;
//            var_dump($avisosDto);
        } else if ($avisosDto->getOrden() == 4) {
//            echo "\n Orden 4 \n";
            if ($filesArchivoEnlaceInformacion != null) {
                $nombrefilesArchivoEnlaceInformacion = $this->moverArchivo($filesArchivoEnlaceInformacion, 'archivoEnlaceInformacion');
                $avisosDto->setTituloLink($nombrefilesArchivoEnlaceInformacion);
//                var_dump($avisosDto);
            } else {
                
            }
            $avisosDto = $AvisosDao->insertAvisos($avisosDto);
//            var_dump($avisosDto);
            return $avisosDto;
        } else if ($avisosDto->getOrden() == 5) {
//            echo "\n Orden 5 \n";
            if ($filesImagenAviso != null) {
                $nombrefilesImagenAviso = $this->moverArchivo($filesImagenAviso, 'imagenAviso');
                $avisosDto->setUrlImg($nombrefilesImagenAviso);
//                $avisosDto->setLink($filesImagenAviso);
//                var_dump($avisosDto);
            } else {
                
            }
            if ($filesArchivoEnlaceImagen != null) {
                $nombrefilesArchivoEnlaceImagen = $this->moverArchivo($filesArchivoEnlaceImagen, 'archivoEnlaceImagen');
                $avisosDto->setLink($nombrefilesArchivoEnlaceImagen);
//                var_dump($avisosDto);
            } else {
                
            }
//            var_dump($avisosDto);
            $avisosDto = $AvisosDao->insertAvisos($avisosDto);
//            var_dump($avisosDto);
            return $avisosDto;
        }

//        $this->moverArchivo($filesImagenAviso, 'imagen-aviso');
//        $this->moverArchivo($filesArchivoEnlaceInformacion, 'archivo-enlace-informacion');
//        $this->moverArchivo($filesArchivoEnlaceImagen, 'archivo-enlace-imagen');
    }

}

?>