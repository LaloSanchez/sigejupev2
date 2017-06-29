<?php
 /*
*************************************************
*FRAMEWORK V1.0.0 (http://www.pjedomex.gob.mx)
*Copyright 2009-2015 DTOS
* Licensed under the MIT license 
* Autor: *
* Departamento de Desarrollo de Software
* Subdireccion de Ingenieria de Software
* Direccion de Teclogias de Informacion
* Poder Judicial del Estado de Mexico
*************************************************
*/

class TipoamparoDTO {
    private $CveTipoAmparo;
    private $DesTipoAmparo;
    public function getCveTipoAmparo(){
        return $this->CveTipoAmparo;
    }
    public function setCveTipoAmparo($CveTipoAmparo){
        $this->CveTipoAmparo=$CveTipoAmparo;
    }
    public function getDesTipoAmparo(){
        return $this->DesTipoAmparo;
    }
    public function setDesTipoAmparo($DesTipoAmparo){
        $this->DesTipoAmparo=$DesTipoAmparo;
    }
    public function toString(){
        return array("CveTipoAmparo"=>$this->CveTipoAmparo,
"DesTipoAmparo"=>$this->DesTipoAmparo);
    }
}
?>