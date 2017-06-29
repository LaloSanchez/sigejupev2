<?php

include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/reportes/PaginacionController.Class.php");

class BitacoraMovimientosController extends Paginacion {

    public function validate($data)
    {
        $data->cveAdscripcion = strtoupper(str_ireplace("'", "", trim($data->cveAdscripcion)));
        $data->cveAccion = strtoupper(str_ireplace("'", "", trim($data->cveAccion)));
        $data->fechaInicio = strtoupper(str_ireplace("'", "", trim($data->fechaInicio)));
        $data->fechaFin = strtoupper(str_ireplace("'", "", trim($data->fechaFin)));

        return $data;
    }

    public function validateConsulta($data)
    {

        try {


            if ($data->cveAdscripcion == '') {
                throw new Exception('El campo adscripcion es requerido');
            }

            if ($data->fechaInicio == '') {
                throw new Exception('La fecha Inicial es requerida');
            }

            if ($data->fechaFin == '') {
                throw new Exception('La fecha final es requerida');
            }

            if (strtotime($data->fechaFin) < strtotime($data->fechaInicio)) {
                throw new Exception('la fecha de fin tiene que ser mayor a la fecha incial.');
            }


            if ($data->cveAdscripcion == '' && $data->cveAccion == '' && $data->fechaInicio == '' && $data->fechaFin == '') {
                throw new Exception('Tienes que ingresar minimo un parametro de busqueda');
            }

            if ($data->fechaInicio != '' && $data->fechaFin == '') {
                throw new Exception('Ingresa la fecha de fin');
            }

            if ($data->fechaInicio == '' && $data->fechaFin != '') {
                throw new Exception('Ingresa la fecha inicial');
            }

            $response = [
                'estatus' => 'ok',
                'mensaje' => 'ok'
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
     * @param null $proveedor
     * @return mixed
     */
    public function consultar($data, $proveedor = null)
    {

        $data = $this->validate($data);

        $validate = $this->validateConsulta($data);

        if ($validate['estatus'] == 'error') return $validate;

        try {

            $parametros = $this->armaParametros($data);

            $getTotal = $this->getPaginas($parametros);

            if ($getTotal['estatus'] == 'error') throw new Exception($getTotal['mensaje']);

            $getRegistros = $this->getRegistros($parametros);

            if ($getRegistros['estatus'] == 'error') throw new Exception($getRegistros['mensaje']);

            //cortar cada uno de los registros a 100 caracteres \n
            foreach ($getRegistros['data'] as $index => $registro) {
                $getRegistros['data'][$index]['observaciones'] = wordwrap($registro['observaciones'], 90, "<br>\n", true);
            }


            $response = [
                'estatus' => 'ok',
                'mensaje' => 'resultado de la consulta',
                'total'   => $getTotal['data'],
                'pagina'  => $data->pagina,
                'data'    => $getRegistros['data']
            ];

        } catch (Exception $e) {

            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage()
            ];

        }

        return $response;

    }

    public function armaParametros($datos)
    {
        $parametros = [];

        $parametros['fields'] = 'a.cveAccion, a.desAccion, bm.observaciones, DATE_FORMAT(CAST(bm.fechaMovimiento as DATETIME),"%d/%m/%Y %r") as fechaMovimiento';
        $parametros['tables'] = 'tblbitacoramovimientos bm LEFT JOIN tblacciones a ON (bm.cveAccion = a.cveAccion AND a.activo = "S")';

        $parametros['conditions'] = '';

        if ($datos->cveAdscripcion != '') {
            $parametros['conditions'] .= 'bm.cveAdscripcion = "' . $datos->cveAdscripcion . '"';
            if ($datos->cveAccion != '' || ($datos->fechaInicio != '' && $datos->fechaFin != '')) {
                $parametros['conditions'] .= ' AND ';
            }
        }

        if ($datos->cveAccion != '') {
            $parametros['conditions'] .= 'bm.cveAccion = "' . $datos->cveAccion . '"';
            if ($datos->fechaInicio != '' && $datos->fechaFin != '') {
                $parametros['conditions'] .= ' AND ';
            }
        }

        if ($datos->fechaInicio != '' && $datos->fechaFin != '') {
            $parametros['conditions'] .= '(CAST(bm.fechaMovimiento as DATE)) >= "' . $this->dateToMysqlFormat($datos->fechaInicio) . '" AND (CAST(bm.fechaMovimiento as DATE)) <= "' . $this->dateToMysqlFormat($datos->fechaFin) . '"';
        }

        $parametros['orders'] = 'bm.fechaMovimiento LIMIT ' . $datos->porPagina . ' OFFSET ' . $datos->offset;


        return $parametros;

    }

}