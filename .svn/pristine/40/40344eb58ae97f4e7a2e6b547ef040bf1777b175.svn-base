<?php
date_default_timezone_set('America/Mexico_City');
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/bitacoraasignacionaudiencias/BitacoraasignacionaudienciasDao.Class.php");

class BitacoraasignacionesaudienciasController {

    public function validarConsulta($bitacoraAsignacionDto)
    {
        $estatus = 'ok';
        $mensajes = '';


        if ($bitacoraAsignacionDto->fechaInicial == '' || $bitacoraAsignacionDto->fechaFinal == '') {
            $estatus = 'error';
            $mensajes[] = '*Tienes que ingresar la fecha de inicio y fecha de fin.';
        }

        return [
            'estatus' => $estatus,
            'mensaje' => $mensajes
        ];

    }

    private function convertirFecha($fecha)
    {
        $date = str_replace('/', '-', $fecha);
        $fecha = date('Y-m-d', strtotime($date));

        return $fecha;
    }

    public function consultar($bitacoraAsignacionDto)
    {
        $validaConsulta = $this->validarConsulta($bitacoraAsignacionDto);
        if ($validaConsulta['estatus'] == 'error') return $validaConsulta;

        $bitacoraAsignacionDao = new BitacoraasignacionesaudienciasDAO();

        $bitacoraAsignacionDto->fechaInicial = $this->convertirFecha($bitacoraAsignacionDto->fechaInicial);
        $bitacoraAsignacionDto->fechaFinal = $this->convertirFecha($bitacoraAsignacionDto->fechaFinal);

        $selectBitacoraAsignacionDao = $bitacoraAsignacionDao->selectBitacoraasignacionesaudiencias($bitacoraAsignacionDto);


        if (count($selectBitacoraAsignacionDao['registros'])) {

            $response = [
                'estatus' => 'ok',
                'mensaje' => 'resultado de la consulta',
                'total'   => $selectBitacoraAsignacionDao['total'],
                'pagina'  => $selectBitacoraAsignacionDao['pagina'],
                'data'    => $selectBitacoraAsignacionDao['registros']
            ];

        } else {

            $response = [
                'estatus' => 'error',
                'mensaje' => ['No se encontraron resultados que coincidan con tus parametros de busqueda']
            ];

        }

        return $response;

    }
}