<?php

if (!isset($_SESSION)) {
    session_start();
}

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/atencionsalas/AtencionsalasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/atencionsalas/AtencionsalasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgados/JuzgadosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/salas/SalasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/salas/SalasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/atencionsalas/AtencionsalasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/atencionsalas/AtencionsalasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../webservice/cliente/edificios/EdificiosCliente.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/bitacoramovimientos/BitacoramovimientosController.Class.php");

class AtencionsalasController {

    private $proveedor;

    /**
     * @param $AtencionsalasDto
     * @return mixed
     */
    public function validarAtencionsalas($AtencionsalasDto) {
        $AtencionsalasDto->setidAtencionSala(strtoupper(str_ireplace("'", "", trim($AtencionsalasDto->getidAtencionSala()))));
        $AtencionsalasDto->setcveSala(strtoupper(str_ireplace("'", "", trim($AtencionsalasDto->getcveSala()))));
        $AtencionsalasDto->setcveJuzgado(strtoupper(str_ireplace("'", "", trim($AtencionsalasDto->getcveJuzgado()))));
        $AtencionsalasDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($AtencionsalasDto->getfechaRegistro()))));
        $AtencionsalasDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($AtencionsalasDto->getfechaActualizacion()))));
        $AtencionsalasDto->setcveCondicion(strtoupper(str_ireplace("'", "", trim($AtencionsalasDto->getcveCondicion()))));

        return $AtencionsalasDto;
    }

    /**
     * @param $idJuzgado
     * @return array
     */
    public function procesar($idJuzgado) {
        $edificios = new EdificiosCliente();
        $juzgadosDto = new JuzgadosDTO();
        $juzgadosDao = new JuzgadosDAO();

        $response = [];

        $juzgadosDto->setCveJuzgado($idJuzgado);
        $juzgadosDto->setActivo('S');

        $juzgado = $juzgadosDao->selectJuzgadoByCve($juzgadosDto);

        if (!count($juzgado)) {

            return [
                'estatus' => 'error',
                'mensaje' => 'no se encontro el juzgado seleccionado o está inactivo'
            ];
        }

        $juzgado = $juzgado[0]->toString();

        $juzgado_region = $juzgado['cveRegion'];

        $edificios_by_region = json_decode($edificios->getEdificios('', '', $juzgado_region), true);

        $edificio_name = array_column($edificios_by_region['data'], 'NomEdificio', 'CveEdificio');
        $edificios = array_column($edificios_by_region['data'], 'cveRegion', 'CveEdificio');

        $juzgado['desEdificio'] = isset($edificio_name[$juzgado['cveEdificio']]) ? $edificio_name[$juzgado['cveEdificio']] : 'No se encontro el edificio...';

        //print_r($juzgado);
        $response['juzgado'] = $juzgado;

        //consultar las salas y se ordenan por el campo sNombre
        $salasDto = new SalasDTO();
        $salasDao = new SalasDAO();

        $salas = $salasDao->selectSalas($salasDto);


        //consultar la tabla atencion salas
        $atencionSalasDto = new AtencionsalasDTO();
        $atencionSalasDao = new AtencionsalasDAO();
        $atencionSalasDto->setCveJuzgado($idJuzgado);
        $atencion_salas = $atencionSalasDao->selectAtencionsalas($atencionSalasDto);


        foreach ($salas as $sala) {
            //si el edificio de la sala esta en en el array de $edificios,
            // entonces la sala esta esta dentro de la región y comparamos con la tabla de cat_atencionsalas.
            if (array_key_exists($sala->getCveEdificio(), $edificios)) {
                //ver si la sala esta atencion_salas
                $condicion = 0;
                $id_atencion_sala = 0;

                if (is_array($atencion_salas) || is_object($atencion_salas)) {
                    foreach ($atencion_salas as $atencion_sala) {
                        if ($sala->getCveSala() == $atencion_sala->getCveSala()) {
                            $condicion = $atencion_sala->getCveCondicion();
                            $id_atencion_sala = $atencion_sala->getIdAtencionSala();
                            break;
                            continue;
                        }
                    }
                }
                $response['salas'][] = [
                    'iId_AtencionSala' => $id_atencion_sala,
                    'iId_Sala' => $sala->getCveSala(),
                    'sNombre' => utf8_encode($sala->getDesSala()),
                    'iId_Condicion' => $condicion
                ];
            }
        }

        $response['estatus'] = 'ok';

        return $response;
    }

    /**
     * @param $data
     * @param string $proveedor
     * @return array
     */
    public function guardar($data, $proveedor = '') {
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }

        $this->proveedor->execute('BEGIN');

        $idJuzgado = $data['iIdJuzgado'];

        $atencionsalasDao = new AtencionsalasDAO();

        try {

            foreach ($data['sala'] as $id_sala => $sala) {

                $atencionsalasDto = new AtencionsalasDTO();

                if (isset($sala['aplica']) && $sala['condicion'] != 0) {

                    //si $sala[id_atencion_sala] es diferente de 0 entonces lo editamos
                    if ($sala['id_atencion_sala'] > 0) {


                        $atencionsalasDto->setIdAtencionSala($sala['id_atencion_sala']);
                        $atencionsalasDto->setCveSala($id_sala);
                        $atencionsalasDto->setCveJuzgado($idJuzgado);
                        $atencionsalasDto->setFechaActualizacion('S');
                        $atencionsalasDto->setCveCondicion($sala['condicion']);

                        $modificarAtencionSala = $atencionsalasDao->updateAtencionsalas($atencionsalasDto, $this->proveedor);

                        if (!count($modificarAtencionSala))
                            throw new Exception('no se pudo modificar el registro atencion sala');


                        /*
                         * agregar en bitacora
                         */
                        $bitacora = new BitacoramovimientosController();

                        $bitacoraEditar = $bitacora->agregar(237, 'EDICION tblatencionsalas', 'txt', serialize($atencionsalasDto), '', $this->proveedor);

                        if (!count($bitacoraEditar))
                            throw new Exception('no se pudo guardar la accion editar en atencionsalas en bitacora');
                        /*
                         * termina agregar en bitacora
                         */


                        /*
                         * si $sala[id_atencion_sala] es === 0 entonces lo agregamos el registro
                         */
                    } else if ($sala['id_atencion_sala'] == 0) {

                        $atencionsalasDto->setIdAtencionSala("");
                        $atencionsalasDto->setCveSala($id_sala);
                        $atencionsalasDto->setCveJuzgado($idJuzgado);
                        $atencionsalasDto->setCveCondicion($sala['condicion']);

                        $insertarAtencionSala = $atencionsalasDao->insertAtencionsalas($atencionsalasDto, $this->proveedor);

                        if (!count($insertarAtencionSala))
                            throw new Exception('no se pudo insertar el registro atencion sala');


                        /*
                         * agregar en bitacora accion agregar registro
                         */
                        $bitacora = new BitacoramovimientosController();

                        $bitacoraAgregar = $bitacora->agregar(236, 'AGREGAR tblatencionsalas', 'txt', serialize($atencionsalasDto), '', $this->proveedor);

                        if (!count($bitacoraAgregar))
                            throw new Exception('no se pudo guardar la accion agregar en atencionsalas en bitacora');
                        /*
                         * termina agregar en bitacora
                         */
                    }
                }

                /*
                 * si el id de sala es mayo a 0 y la condicion de la sala es igual a 0 entonces borramos la sala
                 */
                if ($sala['id_atencion_sala'] > 0 && ($sala['condicion'] == 0 || !isset($sala['aplica']))) {

                    $atencionsalasDto->setIdAtencionSala($sala['id_atencion_sala']);
                    $eliminarAtencionSala = $atencionsalasDao->deleteAtencionsalas($atencionsalasDto, $this->proveedor);

                    if (!$eliminarAtencionSala)
                        throw new Exception('no se pudo eliminar el registro atencion sala');


                    /*
                     * agregar en bitacora accion eliminar registro
                     */

                    $bitacora = new BitacoramovimientosController();

                    $bitacoraEliminar = $bitacora->agregar(238, 'ELIMINAR tblatencionsalas', 'txt', serialize($atencionsalasDto), '', $this->proveedor);

                    if (!count($bitacoraEliminar))
                        throw new Exception('no se pudo guardar la accion eliminar en atencionsalas en bitacora');
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

    /**
     * @param $AtencionsalasDto
     * @param null $proveedor
     * @return array
     */
    public function selectAtencionsalas($AtencionsalasDto, $proveedor = null) {
        $AtencionsalasDto = $this->validarAtencionsalas($AtencionsalasDto);
        $AtencionsalasDao = new AtencionsalasDAO();
        $AtencionsalasDto = $AtencionsalasDao->selectAtencionsalas($AtencionsalasDto, $proveedor);

        return $AtencionsalasDto;
    }

    /**
     * @param $AtencionsalasDto
     * @param null $proveedor
     * @return array|AtencionsalasDTO
     */
    public function insertAtencionsalas($AtencionsalasDto, $proveedor = null) {
        $AtencionsalasDto = $this->validarAtencionsalas($AtencionsalasDto);
        $AtencionsalasDao = new AtencionsalasDAO();
        $AtencionsalasDto = $AtencionsalasDao->insertAtencionsalas($AtencionsalasDto, $proveedor);

        return $AtencionsalasDto;
    }

    /**
     * @param $AtencionsalasDto
     * @param null $proveedor
     * @return array|AtencionsalasDTO
     */
    public function updateAtencionsalas($AtencionsalasDto, $proveedor = null) {
        $AtencionsalasDto = $this->validarAtencionsalas($AtencionsalasDto);
        $AtencionsalasDao = new AtencionsalasDAO();
        $AtencionsalasDto = $AtencionsalasDao->updateAtencionsalas($AtencionsalasDto, $proveedor);

        return $AtencionsalasDto;
    }

    /**
     * @param $AtencionsalasDto
     * @param null $proveedor
     * @return bool|string
     */
    public function deleteAtencionsalas($AtencionsalasDto, $proveedor = null) {
        $AtencionsalasDto = $this->validarAtencionsalas($AtencionsalasDto);
        $AtencionsalasDao = new AtencionsalasDAO();
        $AtencionsalasDto = $AtencionsalasDao->deleteAtencionsalas($AtencionsalasDto, $proveedor);

        return $AtencionsalasDto;
    }

    public function getatencionsalasbycveadscripcion() {
        // 1.-cambio de moy al solo mostrar las salas en atencion salas - viernes 27 de mayo 2016

        try {

            $idJuzgado = $_SESSION['cveAdscripcion'];

            //$atencionSalas = $this->procesar($idJuzgado);


            $atencionSalasDao = new AtencionsalasDAO();
            $atencionSalasDto = new AtencionsalasDTO();

            $atencionSalasDto->setCveJuzgado($idJuzgado);

            $selectAtencionSalas = $atencionSalasDao->selectAtencionsalas($atencionSalasDto);

            if ($selectAtencionSalas == '')
                throw new Exception('no se encontraron salas configuradas en atencion salas, contacta al administrador');

            $atencionSalas = [];

            foreach ($selectAtencionSalas as $atencionSala) {

                $salasDao = new SalasDAO();
                $salasDto = new SalasDto();
                $salasDto->setCveSala($atencionSala->getCveSala());
                $salasDto->setActivo('S');
                $selectSala = $salasDao->selectSalas($salasDto);

                if ($selectSala != '' && (count($selectSala) > 0)) {                  
                                                           
                    $atencionSalas['salas'][] = [
                        "iId_AtencionSala" => $atencionSala->getIdAtencionSala(),
                        "iId_Sala" => $selectSala[0]->getCveSala(),
                        "sNombre" => $selectSala[0]->getDesSala(),
                        "iId_Condicion" => $atencionSala->getCveCondicion()
                    ];
                }
            }


            if (!(isset($atencionSalas['salas']) && count($atencionSalas['salas'])))
                throw new Exception('no se encontraron salas');

            $response = [
                'estatus' => 'ok',
                'mensaje' => 'salas consultadas correctamente',
                'data' => $atencionSalas['salas']
            ];
        } catch (Exception $e) {

            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage()
            ];
        }

        return $response;



//        return "ok";
    }

}

if (!function_exists('array_column')) {

    function array_column(array $input, $column_key, $index_key = null) {

        $result = array();
        foreach ($input as $k => $v)
            $result[$index_key ? $v[$index_key] : $k] = $v[$column_key];

        return $result;
    }

}

