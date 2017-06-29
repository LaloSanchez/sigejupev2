<?php

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/select/SelectDAO.Class.php");
date_default_timezone_set('America/Mexico_City');

class Paginacion {

    public function getPaginas($parametros)
    {
        try {

            unset($parametros['orders']);

            $selectDao = new SelectDAO();
            $getPaginas = $selectDao->selectDAO($parametros);

            $getPaginas = json_decode($getPaginas, true);

            if ($getPaginas['Estatus'] == 'Fail') throw new Exception($getPaginas['mnj']);

            if ($getPaginas['totalCount'] == 0) throw new Exception('no hay registros encontrados en la consulta');


            $response = [
                'estatus' => 'ok',
                'mensaje' => 'la consulta contiene registros',
                'data'    => $getPaginas['totalCount']
            ];

        } catch (Exception $e) {
            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage()
            ];
        }

        return $response;


    }

    public function getRegistros($parametros)
    {

        try {

            $selectDao = new SelectDAO();
            $getRegistros = $selectDao->selectDAO($parametros);

            $getRegistros = json_decode($getRegistros, true);

            if ($getRegistros['Estatus'] == 'Fail') throw new Exception($getRegistros['mnj']);

            if ($getRegistros['totalCount'] == 0) throw new Exception('no hay registros encontrados en la consulta');


            $response = [
                'estatus' => 'ok',
                'mensaje' => 'la consulta contiene registros',
                'data'    => $getRegistros['resultados']
            ];

        } catch (Exception $e) {

            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage()
            ];

        }

        return $response;

    }

    public function dateToMysqlFormat($fecha)
    {
        $date = str_replace('/', '-', $fecha);
        $fecha = date('Y-m-d', strtotime($date));

        return $fecha;
    }

}