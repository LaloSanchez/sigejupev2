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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/defensoresofendidoscarpetas/DefensoresofendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/defensoresofendidoscarpetas/DefensoresofendidoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/validacion/Validacion.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/bitacoramovimientos/BitacoramovimientosController.Class.php");
class DefensoresofendidoscarpetasController {
    private $proveedor;
    public function __construct() {
    }
    public function validarDefensoresofendidoscarpetas($DefensoresofendidoscarpetasDto){
        $DefensoresofendidoscarpetasDto->setidDefensorOfendidoCarpeta(strtoupper(str_ireplace("'","",trim($DefensoresofendidoscarpetasDto->getidDefensorOfendidoCarpeta()))));
        $DefensoresofendidoscarpetasDto->setidOfendidoCarpeta(strtoupper(str_ireplace("'","",trim($DefensoresofendidoscarpetasDto->getidOfendidoCarpeta()))));
        $DefensoresofendidoscarpetasDto->setcveTipoDefensor(strtoupper(str_ireplace("'","",trim($DefensoresofendidoscarpetasDto->getcveTipoDefensor()))));
        $DefensoresofendidoscarpetasDto->setnombre(strtoupper(str_ireplace("'","",trim($DefensoresofendidoscarpetasDto->getnombre()))));
        $DefensoresofendidoscarpetasDto->settelefono(strtoupper(str_ireplace("'","",trim($DefensoresofendidoscarpetasDto->gettelefono()))));
        $DefensoresofendidoscarpetasDto->setcelular(strtoupper(str_ireplace("'","",trim($DefensoresofendidoscarpetasDto->getcelular()))));
        $DefensoresofendidoscarpetasDto->setemail(strtoupper(str_ireplace("'","",trim($DefensoresofendidoscarpetasDto->getemail()))));
        $DefensoresofendidoscarpetasDto->setactivo(strtoupper(str_ireplace("'","",trim($DefensoresofendidoscarpetasDto->getactivo()))));
        $DefensoresofendidoscarpetasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($DefensoresofendidoscarpetasDto->getfechaRegistro()))));
        $DefensoresofendidoscarpetasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($DefensoresofendidoscarpetasDto->getfechaActualizacion()))));
        return $DefensoresofendidoscarpetasDto;
    }
    
    public function validarDefensor($DefensoresofendidoscarpetasDto)
    {
        $validacion = new Validacion();
        $estatus = 'ok';
        $msg = [];

        if (!$validacion->num(1, 2, $DefensoresofendidoscarpetasDto->getCveTipoDefensor())) {
            if ($DefensoresofendidoscarpetasDto->getCveTipoDefensor() <= 0) {
                $estatus = 'error';
                $msg[] = '* El tipo de defensor no es válido';
            }

        }

        if (!$validacion->between(1, 500, $DefensoresofendidoscarpetasDto->getNombre())) {
            $estatus = 'error';
            $msg[] = '* El nombre debe contener entre 1 y 500 caracteres y ser un texto';
        }

        if ($DefensoresofendidoscarpetasDto->getTelefono() != '') {
            if (!$validacion->num(9, 9, $DefensoresofendidoscarpetasDto->getTelefono())) {
                $estatus = 'error';
                $msg[] = '* El teléfono debe ser numerico y contener 10 digitos';
            }
        }

        if ($DefensoresofendidoscarpetasDto->getCelular() != '') {
            if (!$validacion->num(9, 9, $DefensoresofendidoscarpetasDto->getCelular())) {
                $estatus = 'error';
                $msg[] = '* El celular debe ser numerico y contener 10 digitos';
            }
        }


        //validaciones a la base de datos
        if ($estatus == "ok" && $DefensoresofendidoscarpetasDto->getIdOfendidoCarpeta() == "") {
            $defensorValidateDto = new DefensoresofendidoscarpetasDTO();
            $defensorValidateDto->setIdOfendidoCarpeta($DefensoresofendidoscarpetasDto->getIdOfendidoCarpeta());
            $defensorValidateDto->setNombre($DefensoresofendidoscarpetasDto->getNombre());
            $defensorValidateDto->setActivo('S');

            $selectDefensores = $this->selectDefensoresofendidoscarpetas($defensorValidateDto);
            //var_dump($selectDefensores);
            if (count($selectDefensores)) {
                $estatus = "error";
                $msg[] = '* El nombre del defensor ya esta registrado';
            }
        }

        $response = [
            'status'  => $estatus,
            'mensaje' => $msg
        ];

        return $response;
    }
    
    public function selectDefensoresofendidoscarpetas($DefensoresofendidoscarpetasDto,$proveedor=null){
        $DefensoresofendidoscarpetasDto=$this->validarDefensoresofendidoscarpetas($DefensoresofendidoscarpetasDto);
        //var_dump($DefensoresofendidoscarpetasDto);
        $DefensoresofendidoscarpetasDao = new DefensoresofendidoscarpetasDAO();
        $DefensoresofendidoscarpetasDto = $DefensoresofendidoscarpetasDao->selectDefensoresofendidoscarpetas($DefensoresofendidoscarpetasDto,$proveedor);
        return $DefensoresofendidoscarpetasDto;
    }
    
    public function agregarDefensorOfendido($DefensoresofendidoscarpetasDto, $proveedor = '')
    {
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }

        $DefensoresofendidoscarpetasDto = $this->validarDefensoresofendidoscarpetas($DefensoresofendidoscarpetasDto);
        $validate = $this->validarDefensor($DefensoresofendidoscarpetasDto);
        if ($validate['status'] == 'error') return $validate;

        $this->proveedor->execute('BEGIN');

        try {

            $DefensoresofendidoscarpetasDao = new DefensoresofendidoscarpetasDAO();
            $defensorResponse = $DefensoresofendidoscarpetasDao->insertDefensoresofendidoscarpetas($DefensoresofendidoscarpetasDto, $this->proveedor);

            if (!count($defensorResponse)) {
                throw new Exception('no se pudo guardar el defensor');
                $this->proveedor->execute('ROLLBACK');
            }

            $bitacora = new BitacoramovimientosController();
            $bitacoraDefensor = $bitacora->agregar(198, 'INSERCION tbldefensoresofendidoscarpetas', 'txt', serialize($defensorResponse[0]), '', $this->proveedor);

            if (!count($bitacoraDefensor)) {
                $this->proveedor->execute('ROLLBACK');
                throw new Exception('no se pudo guardar la accion agregar defensor en bitacora');
            }

            $this->proveedor->execute('COMMIT');

            return [
                'status'  => 'ok',
                'mensaje' => 'Defensor guardado correctamente!',
                'data'    => [
                    'idDefensorOfendidoCarpeta' => $defensorResponse[0]->getIdDefensorOfendidoCarpeta(),
                    'idOfendidoCarpeta'         => $defensorResponse[0]->getIdOfendidoCarpeta(),
                    'cveTipoDefensor'           => $defensorResponse[0]->getCveTipoDefensor(),
                    'nombre'                    => utf8_encode($defensorResponse[0]->getNombre()),
                    'telefono'                  => $defensorResponse[0]->getTelefono(),
                    'celular'                   => $defensorResponse[0]->getCelular(),
                    'email'                     => $defensorResponse[0]->getEmail(),
                    'activo'                    => $defensorResponse[0]->getActivo(),
                    'fechaRegistro'             => $defensorResponse[0]->getFechaRegistro(),
                    'fechaActualizacion'        => $defensorResponse[0]->getFechaActualizacion()
                ]
            ];


        } catch (Exception $e) {
            return [
                'status'  => 'error',
                'mensaje' => 'No se pudo guardar el Defensor.'
            ];
        }


    }

    public function modificarDefensorOfendido($DefensoresofendidoscarpetasDto, $proveedor = '')
    {

        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }

        $DefensoresofendidoscarpetasDto = $this->validarDefensoresofendidoscarpetas($DefensoresofendidoscarpetasDto);
        $validate = $this->validarDefensor($DefensoresofendidoscarpetasDto);

        if ($validate['status'] == 'error') return $validate;

        $this->proveedor->execute('BEGIN');

        try {

            $DefensoresofendidoscarpetasDao = new DefensoresofendidoscarpetasDAO();
            $defensorResponse = $DefensoresofendidoscarpetasDao->modificarDefensoresofendidoscarpetas($DefensoresofendidoscarpetasDto, $this->proveedor);

            if (!count($defensorResponse)) throw new Exception('no se pudo modificar el defensor');

            $selectDefensorDto = new DefensoresofendidoscarpetasDTO();
            $selectDefensorDto->setIdDefensorOfendidoCarpeta($DefensoresofendidoscarpetasDto->getIdDefensorOfendidoCarpeta());

            $selectDefensor = $DefensoresofendidoscarpetasDao->selectDefensoresofendidoscarpetas($selectDefensorDto, "", $this->proveedor);

            $bitacora = new BitacoramovimientosController();
            $bitacoraDefensor = $bitacora->agregar(199, 'ACTUALIZACION tbldefensoresofendidoscarpetas', 'txt', 'Datos antes de editar >>> ' . serialize($selectDefensor[0]) . '    Datos despues de editar>>>' . serialize($defensorResponse[0]), '', $this->proveedor);

            if (!count($bitacoraDefensor)) throw new Exception('no se pudo guardar la accion editar defensor en bitacora');

            $this->proveedor->execute('COMMIT');

            return [
                'status'  => 'ok',
                'mensaje' => 'Defensor editado correctamente!',
                'data'    => [
                    'idDefensorOfendidoCarpeta' => $defensorResponse[0]->getIdDefensorOfendidoCarpeta(),
                    'idOfendidoCarpeta'         => $defensorResponse[0]->getIdOfendidoCarpeta(),
                    'cveTipoDefensor'           => $defensorResponse[0]->getCveTipoDefensor(),
                    'nombre'                    => utf8_encode($defensorResponse[0]->getNombre()),
                    'telefono'                  => $defensorResponse[0]->getTelefono(),
                    'celular'                   => $defensorResponse[0]->getCelular(),
                    'email'                     => $defensorResponse[0]->getEmail(),
                    'activo'                    => $defensorResponse[0]->getActivo(),
                    'fechaRegistro'             => $defensorResponse[0]->getFechaRegistro(),
                    'fechaActualizacion'        => $defensorResponse[0]->getFechaActualizacion()
                ]
            ];


        } catch (Exception $e) {

            $this->proveedor->execute('ROLLBACK');

            return [
                'status'  => 'error',
                'mensaje' => ['No se pudo editar el Defensor, intenta nuevamente.']
            ];
        }


    }

    public function eliminarDefensor($DefensoresofendidoscarpetasDto, $proveedor = '')
    {
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }

        $this->proveedor->execute('BEGIN');
        try {
            $DefensoresofendidoscarpetasDao = new DefensoresofendidoscarpetasDAO();
            $DefensoresofendidoscarpetasDto->setActivo('N');
            $defensorResponse = $DefensoresofendidoscarpetasDao->eliminarDefensorOfendidoByIdOfendidoCarpeta($DefensoresofendidoscarpetasDto, $this->proveedor);

            if (!$defensorResponse) throw new Exception('no se pudo eliminar el defensor');

            $bitacora = new BitacoramovimientosController();
            $bitacoraDefensor = $bitacora->agregar(200, 'ELIMINACION tbldefensoresofendidoscarpetas', 'txt', serialize($DefensoresofendidoscarpetasDto), '' , $this->proveedor);

            if (!count($bitacoraDefensor)) throw new Exception('no se pudo guardar la accion editar tutor ofendido en bitacora');


            $this->proveedor->execute('COMMIT');

            return [
                'status'  => 'ok',
                'mensaje' => 'Defensor eliminado correctamente!',
                'data'    => []
            ];
        } catch (Exception $e) {
            $this->proveedor->execute('ROLLBACK');

            return [
                'status'  => 'error',
                'mensaje' => 'No se pudo eliminar el Defensor.'
            ];
        }

    }
    
    public function insertDefensoresofendidoscarpetas($DefensoresofendidoscarpetasDto,$proveedor=null){
        $DefensoresofendidoscarpetasDto=$this->validarDefensoresofendidoscarpetas($DefensoresofendidoscarpetasDto);
        $DefensoresofendidoscarpetasDao = new DefensoresofendidoscarpetasDAO();
        $DefensoresofendidoscarpetasDto = $DefensoresofendidoscarpetasDao->insertDefensoresofendidoscarpetas($DefensoresofendidoscarpetasDto,$proveedor);
        return $DefensoresofendidoscarpetasDto;
    }
    
    public function updateDefensoresofendidoscarpetas($DefensoresofendidoscarpetasDto,$proveedor=null){
        $DefensoresofendidoscarpetasDto=$this->validarDefensoresofendidoscarpetas($DefensoresofendidoscarpetasDto);
        $DefensoresofendidoscarpetasDao = new DefensoresofendidoscarpetasDAO();
        //$tmpDto = new DefensoresofendidoscarpetasDTO();
        //$tmpDto = $DefensoresofendidoscarpetasDao->selectDefensoresofendidoscarpetas($DefensoresofendidoscarpetasDto,$proveedor);
        //if($tmpDto!=""){//$DefensoresofendidoscarpetasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $DefensoresofendidoscarpetasDto = $DefensoresofendidoscarpetasDao->updateDefensoresofendidoscarpetas($DefensoresofendidoscarpetasDto,$proveedor);
        return $DefensoresofendidoscarpetasDto;
        //}
        //return "";
    }
    
    public function deleteDefensoresofendidoscarpetas($DefensoresofendidoscarpetasDto,$proveedor=null){
        $DefensoresofendidoscarpetasDto=$this->validarDefensoresofendidoscarpetas($DefensoresofendidoscarpetasDto);
        $DefensoresofendidoscarpetasDao = new DefensoresofendidoscarpetasDAO();
        $DefensoresofendidoscarpetasDto = $DefensoresofendidoscarpetasDao->deleteDefensoresofendidoscarpetas($DefensoresofendidoscarpetasDto,$proveedor);
        return $DefensoresofendidoscarpetasDto;
    }
}
?>