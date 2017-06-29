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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/salasjuzgadores/SalasjuzgadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/salasjuzgadores/SalasjuzgadoresDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgados/JuzgadosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgadores/JuzgadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgadores/JuzgadoresDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/salas/SalasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/salas/SalasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../webservice/cliente/edificios/EdificiosCliente.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/bitacoramovimientos/BitacoramovimientosController.Class.php");

class SalasjuzgadoresController {

    private $proveedor;

    public function validarSalasjuzgadores($SalasjuzgadoresDto)
    {
        $SalasjuzgadoresDto->setidSalasJuzgador(strtoupper(str_ireplace("'", "", trim($SalasjuzgadoresDto->getidSalasJuzgador()))));
        $SalasjuzgadoresDto->setcveSala(strtoupper(str_ireplace("'", "", trim($SalasjuzgadoresDto->getcveSala()))));
        $SalasjuzgadoresDto->setidJuzgador(strtoupper(str_ireplace("'", "", trim($SalasjuzgadoresDto->getidJuzgador()))));
        $SalasjuzgadoresDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($SalasjuzgadoresDto->getfechaRegistro()))));
        $SalasjuzgadoresDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($SalasjuzgadoresDto->getfechaActualizacion()))));
        $SalasjuzgadoresDto->setactivo(strtoupper(str_ireplace("'", "", trim($SalasjuzgadoresDto->getactivo()))));
        $SalasjuzgadoresDto->setcveCondicion(strtoupper(str_ireplace("'", "", trim($SalasjuzgadoresDto->getcveCondicion()))));

        return $SalasjuzgadoresDto;
    }

    public function getJuzgadores($idJuzgado)
    {
        $juzgadoresDto = new JuzgadoresDTO();
        $juzgadoresDto->setActivo('S');
        $juzgadoresDao = new JuzgadoresDAO();
        $orden = ' AND idJuzgador IN (SELECT idJuzgador FROM tbljuzgadoresjuzgados WHERE cveJuzgado = ' . $idJuzgado . ')';
        $juzgadores = $juzgadoresDao->selectJuzgadores($juzgadoresDto, $orden);


        $tmp_juzgadores = [];

        if ($juzgadores != "") {
            foreach ($juzgadores as $juzgador) {
                $tmp_juzgadores[] = [
                    'id'   => $juzgador->getIdJuzgador(),
                    'text' => utf8_encode($juzgador->getNombre() . ' ' . $juzgador->getPaterno() . ' ' . $juzgador->getMaterno())
                ];
            }
        }

        return $tmp_juzgadores;
    }

    public function getSalas($idJuzgado)
    {
        $salasDto = new SalasDTO();
        $salasDto->setActivo('S');
        $salasDao = new SalasDAO();
        $orden = ' AND cveSala IN(SELECT cveSala FROM tblatencionsalas WHERE cveJuzgado = ' . $idJuzgado . ')';
        $salas = $salasDao->selectSalas($salasDto, $orden);

        return $salas;
    }

    public function getSalasJuzgadores($idJuzgado)
    {
        $salasJuzgadoresDto = new SalasjuzgadoresDTO();
        $salasJuzgadoresDto->setCveJuzgado($idJuzgado);
        $salasJuzgadoresDao = new SalasjuzgadoresDAO();

        $salas_juzgadores = $salasJuzgadoresDao->selectSalasjuzgadores($salasJuzgadoresDto);

        return $salas_juzgadores;
    }

    /**
     * @param $idJuzgado
     * @return array
     * @throws Exception
     */
    public function procesar($idJuzgado)
    {

        $edificios = new EdificiosCliente();
        $juzgadosDto = new JuzgadosDTO();
        $juzgadosDao = new JuzgadosDAO();

        $response = [];

        try {

            $juzgadosDto->setCveJuzgado($idJuzgado);
            $juzgadosDto->setActivo('S');

            $juzgado = $juzgadosDao->selectJuzgadoByCve($juzgadosDto);

            if (!count($juzgado)) throw new Exception('No se encontro juzgado seleccionado');

            $juzgado = $juzgado[0]->toString();


            $juzgado_region = $juzgado['cveRegion'];

            $edificios_by_region = json_decode($edificios->getEdificios('', '', $juzgado_region), true);

            $edificio_name = array_column($edificios_by_region['data'], 'NomEdificio', 'CveEdificio');

            $juzgado['desEdificio'] = isset($edificio_name[$juzgado['cveEdificio']]) ? $edificio_name[$juzgado['cveEdificio']] : 'No se encontro el edificio...';

            $response['juzgado'] = $juzgado;

            $juzgadores = $this->getJuzgadores($idJuzgado);

            if (!count($juzgadores)) throw new Exception('No se encontraron juzgadores');

            $response['juzgadores'] = $juzgadores;

            $salas = $this->getSalas($idJuzgado);

            if (!count($salas)) throw new Exception('No se encontraron salas para configurar');

            $salas_juzgadores = $this->getSalasJuzgadores($idJuzgado);

            $response['salas'] = [];

            foreach ($salas as $sala) {

                $id_sala_juzgador = 0;
                $id_condicion = 0;
                $id_juzgador = 0;
                $activo = 'N';


                if (count($salas_juzgadores)) {

                    foreach ($salas_juzgadores as $key => $sala_juzgador) {

                        if ($sala->getCveSala() == $sala_juzgador->getCveSala()) {
                            $id_sala_juzgador = $sala_juzgador->getIdSalasJuzgador();
                            $id_condicion = $sala_juzgador->getCveCondicion();
                            $id_juzgador = $sala_juzgador->getIdJuzgador();
                            $activo = $sala_juzgador->getActivo();
                            continue;
                        }
                    }
                }

                $response['salas'][] = [
                    'iId_SalaJuzgador' => $id_sala_juzgador,
                    'iId_Sala'         => $sala->getCveSala(),
                    'sNombre'          => utf8_encode($sala->getDesSala()),
                    'iId_Juzgador'     => $id_juzgador,
                    'iId_Condicion'    => $id_condicion,
                    'activo'           => $activo
                ];


            }

            $response['estatus'] = 'ok';

        } catch (Exception $e) {

            $response['estatus'] = 'error';
            $response['mensaje'] = $e->getMessage();


        }

        return $response;

    }

    public function guardar($data, $proveedor = null)
    {
        if ($proveedor == null) {
            
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
            
        } else {
            
            $this->proveedor = $proveedor;
            
        }
        
        /*
         * inicia transaccion
         */
        $this->proveedor->execute('BEGIN');


        $salasJuzgadoresDao = new SalasjuzgadoresDAO();


        try {

            foreach ($data['sala'] as $id_sala => $sala) {
                if (isset($sala['aplica']) && $sala['condicion'] != 0) {

                    //si $sala[id_sala_juzgador] es diferente de 0 entonces lo editamos
                    if ($sala['id_sala_juzgador'] > 0) {

                        $salasJuzgadoresDto = new SalasjuzgadoresDTO();
                        $salasJuzgadoresDto->setIdSalasJuzgador($sala['id_sala_juzgador']);
                        $salasJuzgadoresDto->setCveSala($id_sala);
                        $salasJuzgadoresDto->setCveJuzgado($data['iIdJuzgado']);
                        $salasJuzgadoresDto->setIdJuzgador($sala['juzgador']);
                        $salasJuzgadoresDto->setCveCondicion($sala['condicion']);
                        $salasJuzgadoresDto->setActivo(isset($sala['activo']) ? 'S' : 'N');
                        $salasJuzgadoresDto->setFechaActualizacion('S');


                        $modificarSalaJuzgador = $salasJuzgadoresDao->updateSalasjuzgadores($salasJuzgadoresDto, $this->proveedor);

                        if (!count($modificarSalaJuzgador)) throw new Exception('no se pudo modificar sala juzgador');
                        
                        /*
                         * agregar en bitacora
                         */
                        $bitacora = new BitacoramovimientosController();
            
                        $bitacoraEditar = $bitacora->agregar(240, 'EDICION TBLSALASJUZGADORES', 'txt', serialize($salasJuzgadoresDto), '', $this->proveedor);

                        if (!count($bitacoraEditar)) throw new Exception('no se pudo guardar la accion editar en SALASJUZGADORES en bitacora');
                        /*
                         * termina agregar en bitacora
                         */


                    /*
                     * si $sala[id_atencion_sala] es === 0 entonces lo agregamos el registro
                     */
                    } else if ($sala['id_sala_juzgador'] == 0) {

                        $salasJuzgadoresDto = new SalasjuzgadoresDTO();
                        $salasJuzgadoresDto->setCveSala($id_sala);
                        $salasJuzgadoresDto->setCveJuzgado($data['iIdJuzgado']);
                        $salasJuzgadoresDto->setIdJuzgador($sala['juzgador']);
                        $salasJuzgadoresDto->setCveCondicion($sala['condicion']);
                        $salasJuzgadoresDto->setActivo(isset($sala['activo']) ? 'S' : 'N');

                        $insertarSalaJuzgador = $salasJuzgadoresDao->insertSalasjuzgadores($salasJuzgadoresDto, $this->proveedor);

                        if (!count($insertarSalaJuzgador)) throw new Exception('no se pudo insertar la sala juzgador');
                        
                        
                         
                        /*
                         * agregar en bitacora accion agregar registro
                         */
                        $bitacora = new BitacoramovimientosController();
            
                        $bitacoraAgregar = $bitacora->agregar(239, 'AGREGAR TBLSALASJUZGADORES', 'txt', serialize($salasJuzgadoresDto), '', $this->proveedor);

                        if (!count($bitacoraAgregar)) throw new Exception('no se pudo guardar la accion agregar en atencionjuzgado en bitacora');
                        /*
                         * termina agregar en bitacora
                         */
                        

                    }

                }

                //si el id de sala es mayo a 0 y la condicion de la sala es igual a 0 entonces borramos la sala
                if ($sala['id_sala_juzgador'] > 0 && !isset($sala['aplica'])) {
                    
                    $salasJuzgadoresDto = new SalasjuzgadoresDTO();
                    $salasJuzgadoresDto->setIdSalasJuzgador($sala['id_sala_juzgador']);
                    $eliminarSalaJuzgador = $salasJuzgadoresDao->deleteSalasjuzgadores($salasJuzgadoresDto, $this->proveedor);
                    
                    if (!$eliminarSalaJuzgador) throw new Exception('no se pudo eliminar la sala juzgador');
                    
                    
                    /*
                     * agregar en bitacora accion eliminar registro
                     */
                    
                    $bitacora = new BitacoramovimientosController();
            
                    $bitacoraEliminar = $bitacora->agregar(241, 'ELIMINAR TBLSALASJUZGADORES', 'txt', serialize($salasJuzgadoresDto), '', $this->proveedor);

                    if (!count($bitacoraEliminar)) throw new Exception('no se pudo guardar la accion eliminar en SALASJUZGADORES en bitacora');
                    /*
                     * termina agregar en bitacora
                     */
                    
                }
            }

            $this->proveedor->execute('COMMIT');

            return [
                'r' => true,
                'm' => '¡datos guardados correctamente!'
            ];

        } catch (Exception $e) {
            $this->proveedor->execute('ROLLBACK');

            return [
                'r' => false,
                'm' => '¡ocurrio un error al guardar los datos!'
            ];
        }
    }

    public function selectSalasjuzgadores($SalasjuzgadoresDto, $proveedor = null)
    {
        $SalasjuzgadoresDto = $this->validarSalasjuzgadores($SalasjuzgadoresDto);
        $SalasjuzgadoresDao = new SalasjuzgadoresDAO();
        $SalasjuzgadoresDto = $SalasjuzgadoresDao->selectSalasjuzgadores($SalasjuzgadoresDto, $proveedor);

        return $SalasjuzgadoresDto;
    }

    public function insertSalasjuzgadores($SalasjuzgadoresDto, $proveedor = null)
    {
        $SalasjuzgadoresDto = $this->validarSalasjuzgadores($SalasjuzgadoresDto);
        $SalasjuzgadoresDao = new SalasjuzgadoresDAO();
        $SalasjuzgadoresDto = $SalasjuzgadoresDao->insertSalasjuzgadores($SalasjuzgadoresDto, $proveedor);

        return $SalasjuzgadoresDto;
    }

    public function updateSalasjuzgadores($SalasjuzgadoresDto, $proveedor = null)
    {
        $SalasjuzgadoresDto = $this->validarSalasjuzgadores($SalasjuzgadoresDto);
        $SalasjuzgadoresDao = new SalasjuzgadoresDAO();
        $SalasjuzgadoresDto = $SalasjuzgadoresDao->updateSalasjuzgadores($SalasjuzgadoresDto, $proveedor);

        return $SalasjuzgadoresDto;
    }

    public function deleteSalasjuzgadores($SalasjuzgadoresDto, $proveedor = null)
    {
        $SalasjuzgadoresDto = $this->validarSalasjuzgadores($SalasjuzgadoresDto);
        $SalasjuzgadoresDao = new SalasjuzgadoresDAO();
        $SalasjuzgadoresDto = $SalasjuzgadoresDao->deleteSalasjuzgadores($SalasjuzgadoresDto, $proveedor);

        return $SalasjuzgadoresDto;
    }
}


if (!function_exists('array_column')) {

    function array_column(array $input, $column_key, $index_key = null)
    {

        $result = array();
        foreach ($input as $k => $v)
            $result[$index_key ? $v[$index_key] : $k] = $v[$column_key];

        return $result;
    }
}