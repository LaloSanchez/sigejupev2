<?php
/*
*************************************************
*FRAMEWORK V1.0.0 (http://www.pjedomex.gob.mx)
*Copyright 2009-2015 CONTROLLER
* Licensed under the MIT license 
* Autor: *
* Departamento de Desarrollo de Software
* Subdireccion de Ingenieria de Software
* Direccion de Teclogias de Informacion
* Poder Judicial del Estado de Mexico
*************************************************
*/

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/grupos/GruposDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/grupos/GruposDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/autoresaudiencias/AutoresaudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/autoresaudiencias/AutoresaudienciasController.Class.php");

class GruposController {
private $proveedor;
public function __construct() {
}
public function validarGrupos($GruposDto){
$GruposDto->setcveGrupo(strtoupper(str_ireplace("'","",trim($GruposDto->getcveGrupo()))));
$GruposDto->setdesGrupo(strtoupper(str_ireplace("'","",trim($GruposDto->getdesGrupo()))));
$GruposDto->setactivo(strtoupper(str_ireplace("'","",trim($GruposDto->getactivo()))));
$GruposDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($GruposDto->getfechaRegistro()))));
$GruposDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($GruposDto->getfechaActualizacion()))));
return $GruposDto;
}
public function selectGrupos($GruposDto,$proveedor=null){
$GruposDto=$this->validarGrupos($GruposDto);
$GruposDao = new GruposDAO();
$orden="ORDER BY desGrupo ASC";
$GruposDto = $GruposDao->selectGrupos($GruposDto,$orden,$proveedor);
return $GruposDto;
}

public function consgruposautoresaudiencias($GruposDto,$paramcataudiencia,$proveedor=null){
    $cveGrupo="";
    $desGrupo="";
    $cveGrupoautoresaudiencias="";
    $sancionesE="";
    $sancionesE=array();    
    $sancionesEnvia="";
    $sancionesEnvia=array();
    $respuesta="";
    $respuesta=array();
    
    $sancionesE2="";
    $sancionesE2=array();    
    $sancionesEnvia2="";
    $sancionesEnvia2=array();
    
    $GruposDto=$this->validarGrupos($GruposDto);
    $GruposDao = new GruposDAO();
    $orden="ORDER BY desGrupo ASC";
    $consulta=$GruposDto = $GruposDao->selectGrupos($GruposDto,$orden,$proveedor);
    
    
    $AutoresaudienciasController=new AutoresaudienciasController();    // para registrar un nuevo cataudienciasdistritos
    $AutoresaudienciasDTO=new AutoresaudienciasDTO();
    
    $AutoresaudienciasDTO->setActivo("S");
    $AutoresaudienciasDTO->setCveCatAudiencia($paramcataudiencia["idCatAudiencia"]);
    
    $autoresaudiencias=$AutoresaudienciasController->selectAutoresaudiencias($AutoresaudienciasDTO,$proveedor);
    if($autoresaudiencias!="")
    {
        if($consulta!="")
        {
            foreach ($consulta as $cons)
            {
                $cveGrupo=$cons->getCveGrupo();
                $desGrupo=$cons->getDesGrupo();

                $sancionesE=array("cveGrupo"=>$cveGrupo,
                "desGrupo"=>$desGrupo
                );

            array_push($sancionesEnvia, $sancionesE);
            }


            foreach($autoresaudiencias as $au)
            {
                $cveGrupoautoresaudiencias=$au->getCveGrupo();

                $sancionesE2=array("cveGrupoautoresaudiencias"=>$cveGrupoautoresaudiencias
                );

                array_push($sancionesEnvia2, $sancionesE2);

            }

            $respuesta=array("TotalCountgrupos"=>count($sancionesEnvia),"datosgrupos"=>$sancionesEnvia,"cveGrupoautoresaudiencias"=>$sancionesEnvia2,"estatus" => "ok", "mensaje" => "Registros Encontrados");

        }
        else
        {
            $respuesta = array("TotalCountgrupos" => "0", "datosgrupos" => "", "estatus" => "error", "mensaje" => "No Hay Registros Correspondientes");
        }
        
    }else
    {
        if($consulta!="")
        {
            foreach ($consulta as $cons)
            {
                $cveGrupo=$cons->getCveGrupo();
                $desGrupo=$cons->getDesGrupo();

                $sancionesE=array("cveGrupo"=>$cveGrupo,
                "desGrupo"=>$desGrupo
                );

            array_push($sancionesEnvia, $sancionesE);
            }

            $respuesta=array("TotalCountgrupos"=>count($sancionesEnvia),"datosgrupos"=>$sancionesEnvia,"cveGrupoautoresaudiencias"=>$sancionesEnvia2,"estatus" => "ok", "mensaje" => "Registros Encontrados");

        }
        else
        {
            $respuesta = array("TotalCountgrupos" => "0", "datosgrupos" => "", "estatus" => "error", "mensaje" => "No Hay Registros Correspondientes");
        }
//        $respuesta = array("TotalCountgrupos" => "0", "datosgrupos" => "", "estatus" => "ok", "mensaje" => "No Hay Registros Correspondientes");
    }
    return $respuesta;
}


//public function consultaraudienciasdistritos($CataudienciasDto,$proveedor=null){
//$CataudienciasDto=$this->validarCataudiencias($CataudienciasDto);
//$CataudienciasDao = new CataudienciasDAO();
//$consulta=$CataudienciasDto = $CataudienciasDao->selectCataudiencias($CataudienciasDto,$proveedor);
//
//$AudienciasdistritosController=new AudienciasdistritosController();    // para registrar un nuevo cataudienciasdistritos
//$AudienciasdistritosDTO=new AudienciasdistritosDTO();
//
//$validacion = new Validacion();
//$cveCatAudiencia="";
//$desCatAudiencia="";
//$cveNaturaleza="";
//$cveEtapaProcesal="";
//$cveTipoAudiencia="";
//$causa="";
//$cveDistrito="";
//$cveCodigo="";
//$fechaInicia="";
//$fechaVigencia="";
//$finSemana="";
//$audienciaInicial="";
//$activo="";
//$minDuracion="";
//$maxDuracion="";
//$holgura="";
//$minHorasDesahogar="";
//$maxHorasDesahogar="";
//
//$sancionesE="";
//$sancionesE=array();    
//$sancionesEnvia="";
//$sancionesEnvia=array();
//$respuesta="";
//$respuesta=array();
//
//    if($consulta!="")
//    {
//        foreach($consulta as $cataudiencias){
//            $cveCatAudiencia=$cataudiencias->getCveCatAudiencia();;
//            $desCatAudiencia=utf8_encode($cataudiencias->getDesCatAudiencia());
//            $cveNaturaleza=$cataudiencias->getCveNaturaleza();
//            $cveEtapaProcesal=$cataudiencias->getCveEtapaProcesal();;
//            $cveTipoAudiencia=$cataudiencias->getCveTipoAudiencia();
//            $causa=$cataudiencias->getCausa();
//            $fechaInicia=$validacion->mysqlToNormal($cataudiencias->getFechaInicia());
//            $fechaVigencia=$validacion->mysqlToNormal($cataudiencias->getFechaVigencia());
//            $finSemana=$cataudiencias->getFinSemana();
//            $audienciaInicial=$cataudiencias->getAudienciaInicial();
//            $activo=$cataudiencias->getActivo();
//            $minDuracion=$cataudiencias->getMinDuracion();
//            $maxDuracion=$cataudiencias->getMaxDuracion();
//            $holgura=$cataudiencias->getHolgura();
//            $minHorasDesahogar=$cataudiencias->getMinHorasDesahogar();
//            $maxHorasDesahogar=$cataudiencias->getMaxHorasDesahogar();
//            $cveCodigo=$cataudiencias->getCveCodigo();
//            
//        }
//
//        $AudienciasdistritosDTO->setActivo("S");
//        $AudienciasdistritosDTO->setCveCatAudiencia($cveCatAudiencia);
//        $distritosctl=$AudienciasdistritosController->selectAudienciasdistritos($AudienciasdistritosDTO,$proveedor);
//        
//        if($distritosctl!="")
//        {
//            foreach($distritosctl as $audienciasdistritos){
//                $cveDistrito=$audienciasdistritos->getCveDistrito();
//            }
//        }
//        else
//        {
//            
//        }
//        
//        $sancionesE=array("cveCatAudiencia"=>$cveCatAudiencia,
//            "desCatAudiencia"=>$desCatAudiencia, 
//            "cveNaturaleza"=>$cveNaturaleza,
//            "cveEtapaProcesal"=>$cveEtapaProcesal,
//            "cveTipoAudiencia"=>$cveTipoAudiencia,
//            "causa"=>$causa, 
//            "fechaInicia"=>$fechaInicia,
//            "fechaVigencia"=>$fechaVigencia,
//            "finSemana"=>$finSemana,
//            "audienciaInicial"=>$audienciaInicial, 
//            "activo"=>$activo,
//            "minDuracion"=>$minDuracion,
//            "maxDuracion"=>$maxDuracion,
//            "holgura"=>$holgura,
//            "minHorasDesahogar"=>$minHorasDesahogar,
//            "maxHorasDesahogar"=>$maxHorasDesahogar,
//            "cveCodigo"=>$cveCodigo
//        );
//
//        array_push($sancionesEnvia, $sancionesE);
//        $respuesta=array("TotalCountCataudiencias"=>count($sancionesEnvia),"datoscataudiencias"=>$sancionesEnvia, "cveDistrito"=>$cveDistrito,"estatus" => "ok", "mensaje" => "Registros Encontrados");
//    }
//    else
//    {
//        $respuesta = array("TotalCountCataudiencias" => "0", "datoscataudiencias" => "", "estatus" => "error", "mensaje" => "No Hay Registros Correspondientes");
//    }
//    return $respuesta;
//}
//

public function insertGrupos($GruposDto,$proveedor=null){
$GruposDto=$this->validarGrupos($GruposDto);
$GruposDao = new GruposDAO();
$GruposDto = $GruposDao->insertGrupos($GruposDto,$proveedor);
return $GruposDto;
}
public function updateGrupos($GruposDto,$proveedor=null){
$GruposDto=$this->validarGrupos($GruposDto);
$GruposDao = new GruposDAO();
//$tmpDto = new GruposDTO();
//$tmpDto = $GruposDao->selectGrupos($GruposDto,$proveedor);
//if($tmpDto!=""){//$GruposDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$GruposDto = $GruposDao->updateGrupos($GruposDto,$proveedor);
return $GruposDto;
//}
//return "";
}
public function deleteGrupos($GruposDto,$proveedor=null){
$GruposDto=$this->validarGrupos($GruposDto);
$GruposDao = new GruposDAO();
$GruposDto = $GruposDao->deleteGrupos($GruposDto,$proveedor);
return $GruposDto;
}
}
?>