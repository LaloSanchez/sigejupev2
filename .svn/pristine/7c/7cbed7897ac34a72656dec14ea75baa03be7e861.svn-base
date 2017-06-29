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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/atencionjuzgados/AtencionjuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/atencionjuzgados/AtencionjuzgadosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgados/JuzgadosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../webservice/cliente/adscripciones/AdscripcionesCliente.php");
include_once(dirname(__FILE__) . "/../../../webservice/cliente/edificios/EdificiosCliente.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/municipios/MunicipiosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/municipios/MunicipiosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/regiones/RegionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/regiones/RegionesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/distritos/DistritosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/distritos/DistritosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/atencionjuzgados/AtencionjuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/atencionjuzgados/AtencionjuzgadosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/bitacoramovimientos/BitacoramovimientosController.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/adscripciones/AdscripcionesController.Class.php");


class AtencionjuzgadosController extends AdscripcionesController {

    private $proveedor;

    public function validarAtencionjuzgados($AtencionjuzgadosDto)
    {
        $AtencionjuzgadosDto->setidAtencionJuzgado(strtoupper(str_ireplace("'", "", trim($AtencionjuzgadosDto->getidAtencionJuzgado()))));
        $AtencionjuzgadosDto->setcveAdscripcion(strtoupper(str_ireplace("'", "", trim($AtencionjuzgadosDto->getcveAdscripcion()))));
        $AtencionjuzgadosDto->setcveJuzgado(strtoupper(str_ireplace("'", "", trim($AtencionjuzgadosDto->getcveJuzgado()))));
        $AtencionjuzgadosDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($AtencionjuzgadosDto->getfechaRegistro()))));
        $AtencionjuzgadosDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($AtencionjuzgadosDto->getfechaActualizacion()))));
        $AtencionjuzgadosDto->setcveCondicion(strtoupper(str_ireplace("'", "", trim($AtencionjuzgadosDto->getcveCondicion()))));

        return $AtencionjuzgadosDto;
    }

    /**
     * @param $idAdscripcion
     * @param $tipoAdscripcion
     * @return array
     */
    public function procesar($idAdscripcion, $tipoAdscripcion)
    {

        try {

            //obtener los juzgados
            $juzgadosDto = new JuzgadosDTO();
            $juzgadosDao = new JuzgadosDAO();

            $orden = " ORDER BY desJuzgado";
            $juzgados = $juzgadosDao->selectJuzgados($juzgadosDto, $orden);

            if ($juzgados == '') throw new Exception('no se encontraron juzgados');

            //obtener los datos de la adscripcion seleccionada
            $adscripcion = '';

            if ($tipoAdscripcion == 'externas') {
                //obtenemos los datos de la adscripcion externa
                $getAdscripcion = $this->getAdscripcionExternaById($idAdscripcion);
                if ($getAdscripcion['estatus'] == 'error') throw new Exception($getAdscripcion['mensaje']);

                $adscripcion = $getAdscripcion['data'];


            } else if ($tipoAdscripcion == 'internas') {

                //obtenemos los datos de la adscripcion interna
                $getAdscripcion = $this->getAdscripcionInternaById($idAdscripcion);
                if ($getAdscripcion['estatus'] == 'error') throw new Exception($getAdscripcion['mensaje']);

                $adscripcion = $getAdscripcion['data'];

            }


            //obtenemos el edificio de la adscripcion
            if ($tipoAdscripcion == 'externas') {

                $edificios_cliente = new EdificiosCliente();
                $edificios = json_decode($edificios_cliente->getEdificios($adscripcion['cveEdificio']), true);

                $adscripcion['cveEdificio'] = (count($edificios['data'])) ? $edificios['data'][0]['NomEdificio'] : 'no se encontro el edificio.';

            } else if ($tipoAdscripcion == 'internas') {

                $adscripcion['cveEdificio'] = "N/A";

            }


            //obtenemos el municipio de la adscripcion
            $municipiosDto = new MunicipiosDTO();
            $municipiosDto->setCveMunicipio($adscripcion['cveMunicipio']);
            $municipiosDao = new MunicipiosDAO();
            $municipio = $municipiosDao->selectMunicipios($municipiosDto);

            $adscripcion['cveMunicipio'] = (count($municipio)) ? $municipio[0]->getDesMunicipio() : 'no se encontro el municipio.';


            //obtenemos la region de la adscripcion
            $regionesDto = new RegionesDTO();
            $regionesDto->setCveRegion($adscripcion['cveRegion']);
            $regionesDao = new RegionesDAO();
            $region = $regionesDao->selectRegiones($regionesDto);

            $adscripcion['cveRegion'] = (count($region)) ? $region['0']->getDesRegion() : 'no se encontro la región.';


            //obtenemos el distrito de la adscripcion
            $distritosDto = new DistritosDTO();
            $distritosDto->setCveDistrito($adscripcion['cveDistrito']);
            $distritosDao = new DistritosDAO();
            $distrito = $distritosDao->selectDistritos($distritosDto);

            $adscripcion['cveDistrito'] = (count($distrito)) ? $distrito['0']->getDesDistrito() : 'no se encontro el distrito.';

            //si la adscripcion es interna guardamos nomAdscripcion:"DEFENSORIA DE OFICIO DE TOLUCA"
            if($tipoAdscripcion == 'internas'){
                $adscripcion['nomAdscripcion'] = $adscripcion['desJuz'];
            }

            $response['adscripcion'] = $adscripcion;


            //obtener todos los registros de la tabla atencionjuzgados en donde el id de adscripcion sea = al seleccionado ($idAdscripcion)
            $atencionJuzgadosDto = new AtencionjuzgadosDTO();
            $atencionJuzgadosDto->setCveAdscripcion($idAdscripcion);
            $atencionJuzgadosDao = new AtencionjuzgadosDAO();

            $atencion_juzgados = $atencionJuzgadosDao->selectAtencionjuzgados($atencionJuzgadosDto);


            //inicia el proceso para comparar los juzgados y los que ya estan agregados en atencionjuzgados
            foreach ($juzgados as $key => $juzgado) {

                $id_atencion_juzgado = 0;
                $id_condicion = 0;

                if (count($atencion_juzgados)) {
                    foreach ($atencion_juzgados as $atencion_juzgado) {
                        if ($juzgado->getCveJuzgado() == $atencion_juzgado->getCveJuzgado()) {
                            $id_atencion_juzgado = $atencion_juzgado->getIdAtencionJuzgado();
                            $id_condicion = $atencion_juzgado->getCveCondicion();
                        }
                    }
                }
                $response['juzgados'][] = [
                    'iId_AtencionJuzgado' => $id_atencion_juzgado,
                    'iId_Juzgado'         => $juzgado->getCveJuzgado(),
                    'sNombre'             => $juzgado->getDesJuzgado(),
                    'iId_Condicion'       => $id_condicion
                ];


            }

            $response = [
                'estatus' => 'ok',
                'mensaje' => 'datos obtenidos correctamente',
                'data'    => $response
            ];

        } catch (Exception $e) {

            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage()
            ];

        }

        return $response;

    }


    /**
     * @param $data
     * @param string $proveedor
     * @return array
     */
    public function guardar($data, $proveedor = '')
    {
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }

        //comienza transaccion
        $this->proveedor->execute('BEGIN');

        $atencionJuzgadosDao = new AtencionjuzgadosDAO();

        $id_adscripcion = $data['iIdAdscripcion'];

        /*
         * cveTipoUsuario con valor defecto 1
         */

        //2 para adscripciones externas

        $cveTipoUsuario = 2;

        //1 para adscripciones internas

        if($data['tipoAdscripcion'] == 'internas') $cveTipoUsuario = 1;



        try {

            foreach ($data['juzgado'] as $id_juzgado => $juzgado) {

                $atencionJuzgadosDto = new AtencionjuzgadosDTO();

                if (isset($juzgado['aplica']) && $juzgado['condicion'] != 0) {

                    /*
                     * si $sala[id_atencion_sala] es diferente de 0 entonces lo editamos
                     */
                    if ($juzgado['id_atencion_juzgado'] > 0) {

                        $atencionJuzgadosDto->setIdAtencionJuzgado($juzgado['id_atencion_juzgado']);
                        $atencionJuzgadosDto->setCveAdscripcion($id_adscripcion);
                        $atencionJuzgadosDto->setCveJuzgado($id_juzgado);
                        $atencionJuzgadosDto->setCveCondicion($juzgado['condicion']);
                        //$atencionJuzgadosDto->setCveTipoUsuario($cveTipoUsuario);
                        $atencionJuzgadosDto->setFechaActualizacion('S');

                        $modificarAtencionJuzgado = $atencionJuzgadosDao->updateAtencionjuzgados($atencionJuzgadosDto, $this->proveedor);

                        if (!count($modificarAtencionJuzgado)) throw new Exception('no se pudo modificar el registro atencion juzgado');


                        /*
                         * agregar en bitacora
                         */
                        $bitacora = new BitacoramovimientosController();

                        $bitacoraEditar = $bitacora->agregar(234, 'EDICION tblatencionjuzgados', 'txt', serialize($atencionJuzgadosDto), '', $this->proveedor);

                        if (!count($bitacoraEditar)) throw new Exception('no se pudo guardar la accion editar en atencionjuzgado en bitacora');
                        /*
                         * termina agregar en bitacora
                         */


                        /*
                         * si $sala[id_atencion_sala] es === 0 entonces lo agregamos el registro
                         */
                    } else if ($juzgado['id_atencion_juzgado'] == 0) {

                        $atencionJuzgadosDto->setCveAdscripcion($id_adscripcion);
                        $atencionJuzgadosDto->setCveJuzgado($id_juzgado);
                        $atencionJuzgadosDto->setCveCondicion($juzgado['condicion']);
                        $atencionJuzgadosDto->setCveTipoUsuario($cveTipoUsuario);
                        $insertarAtencionJuzgado = $atencionJuzgadosDao->insertAtencionjuzgados($atencionJuzgadosDto, $this->proveedor);

                        if (!count($insertarAtencionJuzgado)) throw new Exception('no se pudo insertar el registro atencion juzgado');


                        /*
                         * agregar en bitacora accion agregar registro
                         */
                        $bitacora = new BitacoramovimientosController();

                        $bitacoraAgregar = $bitacora->agregar(233, 'AGREGAR tblatencionjuzgados', 'txt', serialize($atencionJuzgadosDto), '', $this->proveedor);

                        if (!count($bitacoraAgregar)) throw new Exception('no se pudo guardar la accion agregar en atencionjuzgado en bitacora');
                        /*
                         * termina agregar en bitacora
                         */

                    }

                }

                /*
                 * si el id de sala es mayo a 0 y la condicion de la sala es igual a 0 entonces borramos la sala
                 */
                if ($juzgado['id_atencion_juzgado'] > 0 && ($juzgado['condicion'] == 0 || !isset($juzgado['aplica']))) {

                    $atencionJuzgadosDto->setIdAtencionJuzgado($juzgado['id_atencion_juzgado']);
                    $eliminarAtencionJuzgado = $atencionJuzgadosDao->deleteAtencionjuzgados($atencionJuzgadosDto, $this->proveedor);

                    if (!$eliminarAtencionJuzgado) throw new Exception('no se pudo eliminar el registro atencion juzgado');


                    /*
                     * agregar en bitacora accion eliminar registro
                     */

                    $bitacora = new BitacoramovimientosController();

                    $bitacoraEliminar = $bitacora->agregar(235, 'ELIMINAR tblatencionjuzgados', 'txt', serialize($atencionJuzgadosDto), '', $this->proveedor);

                    if (!count($bitacoraEliminar)) throw new Exception('no se pudo guardar la accion eliminar en atencionjuzgado en bitacora');
                    /*
                     * termina agregar en bitacora
                     */

                }
            }

            $this->proveedor->execute("COMMIT");

            return [
                'r' => true,
                'm' => '¡datos guardados correctamente!'
            ];

        } catch (Exception $e) {

            $this->proveedor->execute("ROLLBACK");

            return [
                'r' => false,
                'm' => '¡ocurrio un error al guardar los datos!'
            ];
        }

    }

    public function selectAtencionjuzgados($AtencionjuzgadosDto, $proveedor = null)
    {
        $AtencionjuzgadosDto = $this->validarAtencionjuzgados($AtencionjuzgadosDto);
        $AtencionjuzgadosDao = new AtencionjuzgadosDAO();
        $AtencionjuzgadosDto = $AtencionjuzgadosDao->selectAtencionjuzgados($AtencionjuzgadosDto, $proveedor);

        return $AtencionjuzgadosDto;
    }

    public function insertAtencionjuzgados($AtencionjuzgadosDto, $proveedor = null)
    {
        $AtencionjuzgadosDto = $this->validarAtencionjuzgados($AtencionjuzgadosDto);
        $AtencionjuzgadosDao = new AtencionjuzgadosDAO();
        $AtencionjuzgadosDto = $AtencionjuzgadosDao->insertAtencionjuzgados($AtencionjuzgadosDto, $proveedor);

        return $AtencionjuzgadosDto;
    }

    public function updateAtencionjuzgados($AtencionjuzgadosDto, $proveedor = null)
    {
        $AtencionjuzgadosDto = $this->validarAtencionjuzgados($AtencionjuzgadosDto);
        $AtencionjuzgadosDao = new AtencionjuzgadosDAO();
        $AtencionjuzgadosDto = $AtencionjuzgadosDao->updateAtencionjuzgados($AtencionjuzgadosDto, $proveedor);

        return $AtencionjuzgadosDto;
    }

    public function deleteAtencionjuzgados($AtencionjuzgadosDto, $proveedor = null)
    {
        $AtencionjuzgadosDto = $this->validarAtencionjuzgados($AtencionjuzgadosDto);
        $AtencionjuzgadosDao = new AtencionjuzgadosDAO();
        $AtencionjuzgadosDto = $AtencionjuzgadosDao->deleteAtencionjuzgados($AtencionjuzgadosDto, $proveedor);

        return $AtencionjuzgadosDto;
    }
}
