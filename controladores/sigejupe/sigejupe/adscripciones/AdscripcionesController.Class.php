<?php

include_once(dirname(__FILE__) . "/../../../webservice/cliente/adscripciones/AdscripcionesCliente.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/select/SelectDAO.Class.php");

date_default_timezone_set('America/Mexico_City');

class AdscripcionesController {

    private $dateFormatAMD; //obtiene la fecha en formato aaaa/mm/dd para obtener el nombre del archivo del dia actual

    public function __construct()
    {
        $fechaActual = getdate();
        $this->dateFormatAMD = sprintf("%04d%02d%02d", $fechaActual['year'], $fechaActual['mon'], $fechaActual['mday']);
    }


    public function getAdscripciones()
    {
        try {
            $rutaArchivoAdscripcionesExternas = dirname(__FILE__) . "/../../../archivos/adscripciones" . $this->dateFormatAMD . ".json";

            if (!file_exists($rutaArchivoAdscripcionesExternas)) {
                throw new Exception('No existe el archivo de adscripciones');
            }

            $adscripcionesResponse = file_get_contents($rutaArchivoAdscripcionesExternas);
            $adscripcionesResponse = json_decode($adscripcionesResponse, true);

            if ($adscripcionesResponse['estatus'] != 'ok') {
                throw new Exception('El archivo de adscripciones contiene un error');
            }

            $resultados = $adscripcionesResponse['resultados'];

            $temp_adscripciones = [];

            foreach ($resultados as $adscripcion) {
                $temp_adscripciones[] = [
                    'id'   => $adscripcion['cveAdscripcion'],
                    'text' => $adscripcion['nomAdscripcion']
                ];
            }


            $response = [
                'estatus' => 'ok',
                'mensaje' => 'registros obtenidos correctamente',
                'data'    => $temp_adscripciones
            ];


        } catch (Exception $e) {

            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage()
            ];
        }

        return $response;


    }

    public function getAdscripcionesInternas()
    {

        try {
            $rutaArchivoAdscripcionesExternas = dirname(__FILE__) . "/../../../archivos/juzgados" . $this->dateFormatAMD . ".json";

            if (!file_exists($rutaArchivoAdscripcionesExternas)) {
                throw new Exception('No existe el archivo de adscripciones internas');
            }

            $adscripcionesResponse = file_get_contents($rutaArchivoAdscripcionesExternas);
            $adscripcionesResponse = json_decode($adscripcionesResponse, true);

            if ($adscripcionesResponse['estatus'] != 'ok') {
                throw new Exception('El archivo de adscripciones internas contiene un error');
            }

            $resultados = $adscripcionesResponse['resultados'];

            $temp_adscripciones = [];

            foreach ($resultados as $adscripcion) {
                $temp_adscripciones[] = [
                    'id'   => $adscripcion['idJuzgado'],
                    'text' => $adscripcion['desJuz']
                ];
            }

            $response = [
                'estatus' => 'ok',
                'mensaje' => 'registros obtenidos correctamente',
                'data'    => $temp_adscripciones
            ];


        } catch (Exception $e) {

            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage()
            ];
        }

        return $response;

    }

    public function getAdscripcionExternaById($idAdscripcion)
    {

        try {
            $rutaArchivoAdscripcionesExternas = dirname(__FILE__) . "/../../../archivos/adscripciones" . $this->dateFormatAMD . ".json";

            if (!file_exists($rutaArchivoAdscripcionesExternas)) {
                throw new Exception('No existe el archivo de adscripciones');
            }

            $adscripcionesResponse = file_get_contents($rutaArchivoAdscripcionesExternas);
            $adscripcionesResponse = json_decode($adscripcionesResponse, true);

            if ($adscripcionesResponse['estatus'] != 'ok') {
                throw new Exception('El archivo de adscripciones contiene un error');
            }

            $resultados = $adscripcionesResponse['resultados'];

            if (!count($resultados)) throw new Exception('el archivo de adscripciones externas no contiene resultados');

            if (!isset($resultados[$idAdscripcion])) throw new Exception('No se encontro la adscripcion ' . $idAdscripcion . ' en el archivo de adscripciones externas');

            $adscripcion = $resultados[$idAdscripcion];


            $response = [
                'estatus' => 'ok',
                'mensaje' => 'registro obtenidos correctamente',
                'data'    => $adscripcion
            ];


        } catch (Exception $e) {

            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage()
            ];
        }

        return $response;

    }

    public function getAdscripcionInternaById($idAdscripcion)
    {
        try {
            $rutaArchivoAdscripcionesExternas = dirname(__FILE__) . "/../../../archivos/juzgados" . $this->dateFormatAMD . ".json";

            if (!file_exists($rutaArchivoAdscripcionesExternas)) {
                throw new Exception('No existe el archivo de adscripciones internas');
            }

            $adscripcionesResponse = file_get_contents($rutaArchivoAdscripcionesExternas);
            $adscripcionesResponse = json_decode($adscripcionesResponse, true);

            if ($adscripcionesResponse['estatus'] != 'ok') {
                throw new Exception('El archivo de adscripciones internas contiene un error');
            }

            $resultados = $adscripcionesResponse['resultados'];

            if (!count($resultados)) throw new Exception('el archivo de adscripciones internas no contiene resultados');

            if (!isset($resultados[$idAdscripcion])) throw new Exception('No se encontro la adscripcion ' . $idAdscripcion . ' en el archivo de adscripciones internas');

            $adscripcion = $resultados[$idAdscripcion];


            $response = [
                'estatus' => 'ok',
                'mensaje' => 'registros obtenidos correctamente',
                'data'    => $adscripcion
            ];


        } catch (Exception $e) {

            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage()
            ];
        }

        return $response;
    }

    public function getAdscripcionesInBitacoraMovimientos()
    {

        try {

            $selectDao = new SelectDAO();
            $params['fields'] = 'cveAdscripcion';
            $params['tables'] = 'tblbitacoramovimientos';
            $params['conditions'] = 'cveAdscripcion IS NOT NULL AND cveAdscripcion != 0';
            $params['groups'] = 'cveAdscripcion';
            $getAdscripciones = $selectDao->selectDAO($params);

            $getAdscripciones = json_decode($getAdscripciones, true);

            if ($getAdscripciones['Estatus'] == 'fail') throw new Exception($getAdscripciones['mnj']);


            if ($getAdscripciones['totalCount'] == 0) throw new Exception('no hay adscripciones registradas en bitacoramovimientos');


            $data = [];

            foreach ($getAdscripciones['resultados'] as $adscripcion) {

                $checkAdscripcionInterna = $this->getAdscripcionInternaById($adscripcion['cveAdscripcion']);

                if ($checkAdscripcionInterna['estatus'] == 'ok') {
                    $data[] = [
                        'cveAdscripcion' => $checkAdscripcionInterna['data']['idJuzgado'],
                        'desAdscripcion' => $checkAdscripcionInterna['data']['desJuz']
                    ];

                    continue;
                }

                $checkAdscripcionExterna = $this->getAdscripcionExternaById($adscripcion['cveAdscripcion']);


                if ($checkAdscripcionExterna['estatus'] == 'ok') {
                    $data[] = [
                        'cveAdscripcion' => $checkAdscripcionExterna['data']['cveAdscripcion'],
                        'desAdscripcion' => $checkAdscripcionExterna['data']['nomAdscripcion']
                    ];
                    continue;
                }

            }

            $response = [
                'estatus' => 'ok',
                'mensaje' => '',
                'data'    => $data
            ];

        } catch (Exception $e) {

            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage()
            ];

        }

        return $response;


    }
}