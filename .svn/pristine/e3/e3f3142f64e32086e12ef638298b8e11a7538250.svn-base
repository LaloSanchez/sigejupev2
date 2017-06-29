<?php
@session_start();

date_default_timezone_set('America/Mexico_City');
header("Content-type: text/html;charset=utf-8");

/*
 * include controllers
 */
include_once("controller/usuario.controller.php");
include_once("controller/menu.controller.php");
include_once("controller/imagenesPersonal.controller.php");
include_once("controller/generico.controller.php");
include_once("controller/programaciones.controller.php");
include_once("controller/solicitudesaudiencias.controller.php");
include_once("controller/juzgadores.controller.php");
include_once("controller/atencionsalas.controller.php");
include_once("controller/secuencias.controller.php");
include_once("controller/ultimoroljuzgador.controller.php");
include_once("controller/edificios.controller.php");
/*
 *
 */
include_once("controller/programacionsalas.controller.php");
include_once("controller/distritos.controller.php");
include_once("controller/atencionjuzgados.controller.php");
include_once("controller/salasjuzgadores.controller.php");
include_once("config.php");

//VALORES POR DEFECTO
$_SESSION['cveSistema'] = 38; /* Indica el identificador del sistema -> para peticiones al WS */
$_SESSION['cveUsuarioSistema'] = 80;
$ruta_local = Constantes::ruta_local; /* Obtiene el valor por defecto la ruta de todo el aplicativo físicamente */
$solicitud = isset($_GET['solicitud']) ? Seguridad($_GET['solicitud']) : '';

if ($solicitud == "iniciar_sesion") {
    $u = isset($_GET['usuario']) ? Seguridad($_GET['usuario']) : '';
    $c = isset($_GET['clave']) ? Seguridad($_GET['clave']) : '';

    $usuario = new Usuario($ruta_local);
    $respuesta = $usuario->Login($u, $c);

    echo $respuesta;
}

if ($solicitud == "obtener_perfiles") {
    $cveUsuario = isset($_GET['cveUsuario']) ? Seguridad($_GET['cveUsuario']) : '';

    $_SESSION['cveUsuarioSistema'] = $cveUsuario;

    $usuario = new Usuario($ruta_local);
    $respuesta = $usuario->Perfiles($cveUsuario);

    echo $respuesta;
}

if ($solicitud == "seleccionar_perfil") {
    $cvePerfil = isset($_GET['cvePerfil']) ? Seguridad($_GET['cvePerfil']) : '';

    $usuario = new Usuario($ruta_local);
    $respuesta = $usuario->Perfil($cvePerfil);
    if ($solicitud == 'DatosUsuario') {
        echo json_encode($_SESSION);
    }
    echo $respuesta;
    $json = json_decode($respuesta, true);
    $_SESSION["cvePerfil"] = $cvePerfil;
    $_SESSION["desAdscripcion"] = ($json['adscripcion']);
    $_SESSION["desGrupo"] = ($json['grupo']);
    $_SESSION["nombre"] = ($json['usuario']);
    $_SESSION["cveGrupo"] = ($json['cveGrupo']);
    //Guardar en bitácora cuando se elimine logicamente un registro
    $genericoBitacora = new Generico($ruta_local, "cat_bitacoramovimientos");
    $camposBitacora['iId_Accion'] = 29;
    $camposBitacora['dFechaMovimiento'] = date("Y-m-d H:i:s");
    $camposBitacora['tObservaciones'] = "Seleccion de Perfil iId_Perfil: " . $_SESSION['cvePerfil'];
    $camposBitacora['iId_Usuario'] = $_SESSION['cveUsuarioSistema'];
    $camposBitacora['iId_Perfil'] = $_SESSION['cvePerfil'];
    $camposBitacora['iId_Adscripcion'] = $_SESSION['cveAdscripcion'];
    $datosBitacora = $genericoBitacora->SaveRecord($camposBitacora);
}

if ($solicitud == 'DatosUsuario') {
    echo json_encode($_SESSION);
}
///////////////////////////////////////////
/*   karina Mill�n Manjarrez     */
///////////////////////////////////////////
if ($solicitud == "fotoPerfil") {
    $ImagenesPersonalCliente = new ImagenesPersonalCliente($ruta_local);
    $numEmpleado = $_SESSION['numEmpleado'];
    $respuesta = $ImagenesPersonalCliente->getFoto($numEmpleado);
    echo $respuesta;
}
///////////////////////////////////////////
/*   CHRYSTOPHER SALVADOR MEDINA      */
///////////////////////////////////////////
if ($solicitud == 'obtener_menu') {
    $menu = new Menu($ruta_local);
    $permisos = $menu->getPermisosByPerfil();
    $permisos = json_decode($permisos, true);
    $_SESSION['permisos'] = $menu->setSessionPermisos($permisos);
    echo $menu->getHtmlMenu($menu->build($permisos));
}

if ($solicitud === 'getEdificios') {
    $region = (isset($_GET['iId_Region'])) ? $_GET['iId_Region'] : '';
    $edificion_client = new Edificio($ruta_local);
    echo json_encode($edificion_client->getEdificiosSelect2Format($region));
}

if ($solicitud === 'procesar_atencion_salas') {

    $iIdJuzgado = isset($_GET['juzgado']) ? addslashes($_GET['juzgado']) : '';
    $atencion_salas_controller = new AtencionSalas($ruta_local);
    $response = $atencion_salas_controller->process($iIdJuzgado);

    echo json_encode($response);

}

if ($solicitud == 'guardar_atencion_salas') {
    $atencion_salas_controller = new AtencionSalas($ruta_local);
    $response = $atencion_salas_controller->save($_POST);
    echo json_encode($response);
}
if ($solicitud === 'procesar_salas_juzgadores') {
    $iIdJuzgado = isset($_GET['juzgado']) ? addslashes($_GET['juzgado']) : '';
    $salas_juzgadores_controller = new SalasJuzgadoresController($ruta_local);
    $response = $salas_juzgadores_controller->process($iIdJuzgado);

    echo json_encode($response);
}

if ($solicitud === 'guardar_salas_juzgadores') {
    $salas_juzgadores_controller = new SalasJuzgadoresController($ruta_local);
    $response = $salas_juzgadores_controller->save($_POST);

    echo json_encode($response);
}

if ($solicitud === 'getDistritos') {

    $distritos_controlles = new DistritosController($ruta_local);
    $region = isset($_GET['iId_Region']) ? $_GET['iId_Region'] : '';

    $temp_distritos = $distritos_controlles->getDistritosSelect2Format($distritos_controlles->getAll($region));

    echo json_encode($temp_distritos);
}

if ($solicitud === 'getAdscripciones') {

    $atencion_juzgados_controller = new AtencionJuzgados($ruta_local);

    echo json_encode($atencion_juzgados_controller->getAdscripciones('', true));

}

if ($solicitud === 'procesar_atencion_juzgados') {

    if (isset($_GET['adscripcion'])) {

        $atencion_juzgados_controller = new AtencionJuzgados($ruta_local);
        $response = $atencion_juzgados_controller->process($_GET['adscripcion']);

        echo json_encode($response);

    }

}

if ($solicitud === 'guardar_atencion_juzgados') {

    $atencion_juzgados_controller = new AtencionJuzgados($ruta_local);
    $response = $atencion_juzgados_controller->save($_POST);

    echo json_encode($response);

}


///////////////////////////////////////////
///////////////////////////////////////////
/*           ROMAN JIMENEZ             */
///////////////////////////////////////////
if ($solicitud == "obtener_juzgadores") {
    $criterio = $_GET["term"];
    $usuario = new Usuario($ruta_local);
    $respuesta = json_decode($usuario->selectPersonal_Nombre('', $criterio, ''));
    $listData = $respuesta;
    foreach ($listData as $key => $value) {
        $datos[$key] = ["clave"          => $value->cveUsuario,
                        "numeroEmpleado" => $value->numEmpleado,
                        "paterno"        => $value->paterno,
                        "materno"        => $value->materno,
                        "nombre"         => $value->nombre,
                        "label"          => $value->nombre . " " . $value->paterno . " " . $value->materno,
                        "value"          => $value->nombre . " " . $value->paterno . " " . $value->materno];
    }
    echo json_encode($datos);
}
///////////////////////////////////////////
/*        ALEJANDRO RITO MODESTO         */
//////////////////////////////////////////
if ($solicitud == "obtener_progrmacion_mensual") {
    $mes = isset($_GET['cveMes']) ? $_GET['cveMes'] : '';
    $anio = isset($_GET['anio']) ? $_GET['anio'] : '';
    $juzgado = isset($_GET['juzgado']) ? $_GET['juzgado'] : '';
    $tabla = isset($_GET['tabla']) ? $_GET['tabla'] : '';
    $programacion = new Programaciones($ruta_local, $tabla);
    $datos = $programacion->obtenerFechas($mes, $anio, $juzgado);
    echo json_encode($datos);
}
if ($solicitud == "select_programaciones") {
    $mes = isset($_GET['cveMes']) ? $_GET['cveMes'] : '';
    $anio = isset($_GET['anio']) ? $_GET['anio'] : '';
    $juzgado = isset($_GET['juzgado']) ? $_GET['juzgado'] : '';
    $tablaConsulta = isset($_GET['tabla']) ? $_GET['tabla'] : '';
    $arreglo = array();
    $arreglo['iId_Mes'] = $mes;
    $arreglo['iAnio'] = $anio;
    $arreglo['iId_Juzgado'] = $juzgado;
    $programacion = new Programaciones($ruta_local, $tablaConsulta);
    $resultado = $programacion->selecProgramaciones($arreglo);

    echo json_encode($resultado);
}
if ($solicitud == "select_programacionsalas") {
    $mes = isset($_GET['cveMes']) ? $_GET['cveMes'] : '';
    $anio = isset($_GET['anio']) ? $_GET['anio'] : '';
    $juzgado = isset($_GET['juzgado']) ? $_GET['juzgado'] : '';
    $tablaConsulta = isset($_GET['tabla']) ? $_GET['tabla'] : '';
    $programacionSalas = new programacionSalas($ruta_local, $tablaConsulta);
    $resultado = $programacionSalas->obtenerProgramacionsalas($mes, $anio, $juzgado);
    echo json_encode($resultado);
}
if ($solicitud == "Registrar_ProgramacionSalas") {
    //print_r($_POST);
    //exit;
    $dto = array();
    $bandera = false;
    $arrBandera = array();
    $idProgramacionesInsert = array();
    $idProgramacionesUpdate = array();
    $tipoRegistro = "";
    $registrosInsert = "";
    $registrosUpdate = "";
    $tablaConsulta = isset($_GET['tabla']) ? $_GET['tabla'] : '';
    $programacionSalas = new programacionSalas($ruta_local, $tablaConsulta);
    if ( isset($_POST['valorInput']) ){
        for ($n = 0; $n < count($_POST["valorInput"]); $n ++) {
            $campos = explode("_", $_POST['valorInput'][$n]);
            $id = $campos[0];
            $fechaInicio = $campos[1];
            $fechaTermino = $campos[2];
            $idSala = $campos[3];
            $idProgramacion = $campos[4];
            $idHorario = $campos[5];
            $idCondicion = $campos[6];
            $dto["iId"] = $id;
            $dto["dFechaInicio"] = $fechaInicio;
            $dto["dFechaTermino"] = $fechaTermino;
            $dto["iId_Sala"] = $idSala;
            $dto["iId_Programacion"] = $idProgramacion;
            $dto["iId_Horario"] = $idHorario;
            $dto["iId_Condicion"] = $idCondicion;
            /*
             * Verificar si el registro ya existe en la base de datos, si no existe
             * se insertarï¿½, si existe, se actualiza
             */
            //print_r($datos);
            if ($id == 0) {
                $tipoRegistro = "insercion";
                $dtoInsert = $programacionSalas->insertProgramacionsalas($dto);
                if ($dtoInsert) {
                    $bandera = true;
                    $arrBandera[] = $bandera;
                    //$idProgramacionesInsert[] = $dtoInsert[0]->getIdDisponibilidadSala();
                } else {
                    $bandera = false;
                    $arrBandera[] = $bandera;
                }
            } else if ($id > 0) {
                $tipoRegistro = "actualizacion";
                $programacionsalasDto = $programacionSalas->updateProgramacionsalas($dto);
                if ($programacionsalasDto) {
                    $bandera = true;
                    $arrBandera[] = $bandera;
                    $idProgramacionesUpdate[] = $id;
                } else {
                    $bandera = false;
                    $arrBandera[] = $bandera;
                }
            }
        }
        if (in_array(false, $arrBandera)) {
            echo json_encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL GUARDAR LA INFORMACION"));
        } else {
            echo json_encode(array("totalCount" => "1", "text" => "SE HA GUARDADO LA INFORMACION CORRECTAMENTE"));
            //Guardar en bitácora cuando se inserten registros en cat_programacionsalas
            $genericoBitacora = new Generico($ruta_local, "cat_bitacoramovimientos");
            $camposBitacora['iId_Accion'] = 27;
            $camposBitacora['dFechaMovimiento'] = date("Y-m-d H:i:s");
            $camposBitacora['tObservaciones'] = "Insercion en cat_programacionsalas iId_Programacion: " . $dto["iId_Programacion"] . " iId_Sala: " . $dto["iId_Sala"];
            $camposBitacora['iId_Usuario'] = $_SESSION['cveUsuarioSistema'];
            $camposBitacora['iId_Perfil'] = $_SESSION['cvePerfil'];
            $camposBitacora['iId_Adscripcion'] = $_SESSION['cveAdscripcion'];
            $datosBitacora = $genericoBitacora->SaveRecord($camposBitacora);
        }
    } else {
        echo json_enode(array("totalCount" => "0", "text" => "LA INFORMACIÓN YA ESTÁ GUARDADA EN LA BASE DE DATOS"));
    }
    
}
if ($solicitud == 'Baja_Programaciones') {
    $tabla = isset($_GET['tabla']) ? $_GET['tabla'] : '';
    $id = isset($_GET['id']) ? $_GET['id'] : '';
    $banderaSalas = false;
    $banderaJuzgadores = false;
    //obtener los datos de la programacion seleccionara
    $programaciones = new Programaciones($ruta_local, "cat_programaciones");
    $camposProgramacion['iId'] = $id;
    $datosProgramacion = $programaciones->selecProgramaciones($camposProgramacion);
    $arrDatosProgramacion = get_object_vars($datosProgramacion[0]);
    $programacionSalas = new programacionSalas($ruta_local, "cat_programacionsalas");
    $campos['iId_Programacion'] = $id;
    //validar que no existan salas activas para realizar la eliminacion logica
    $salas = $programacionSalas->selectProgramacionSalas($campos);
    if (!$salas) {
        $banderaSalas = true;
    } else {
        /*if ( $arrDatosProgramacion['iId_Mes'] == date('m') ) {
            $banderaSalas = false;
        } else {
            $banderaSalas = true;
        }*/
        $banderaSalas = false;
    }
    //validar que no haya un rol de juzgadores con el id de la programacion que se desea eliminar
    $juzgadores = $programaciones->selectRolJuzgadores($campos);
    if (!$juzgadores) {
        $banderaJuzgadores = true;
    } else {
        /*if ( $arrDatosProgramacion['iId_Mes'] == date('m') ) {
            $banderaJuzgadores = false;
        } else {
            $banderaJuzgadores = true;
        }*/
        $banderaJuzgadores = false;
    }
    if ($banderaSalas == true && $banderaJuzgadores == true) {
        $generico = new Generico($ruta_local, $tabla);
        $eliminar = $generico->LogicalDelete($id);
        //Guardar en bitácora cuando se elimine logicamente un registro
        $genericoBitacora = new Generico($ruta_local, "cat_bitacoramovimientos");
        $camposBitacora['iId_Accion'] = 26;
        $camposBitacora['dFechaMovimiento'] = date("Y-m-d H:i:s");
        $camposBitacora['tObservaciones'] = "Borrado logico en cat_programaciones iId: " . $id;
        $camposBitacora['iId_Usuario'] = $_SESSION['cveUsuarioSistema'];
        $camposBitacora['iId_Perfil'] = $_SESSION['cvePerfil'];
        $camposBitacora['iId_Adscripcion'] = $_SESSION['cveAdscripcion'];
        $datosBitacora = $genericoBitacora->SaveRecord($camposBitacora);
    } else {
        $eliminar['r'] = false;
        $eliminar['extra'] = "No se puede eliminar el registro, existen salas y/o juzgadores activos con el id de programacion " . $id;
    }

    echo json_encode($eliminar);
}
//eliminado logico de horarios
if ($solicitud == "Baja_Horarios_Salas") {
    $tabla = isset($_GET['tabla']) ? $_GET['tabla'] : 'cat_horarios';
    $id = isset($_GET['id']) ? $_GET['id'] : '';
    $banderaSalas = false;
    $programacionSalas = new programacionSalas($ruta_local, "cat_programacionsalas");

    $salas = $programacionSalas->selectSalasByHorario($id);
    //print_r($salas);
    if (!$salas) {
        $banderaSalas = true;
    } else {
        $banderaSalas = false;
    }
    if ($banderaSalas == true) {
        //echo "true";
        $generico = new Generico($ruta_local, $tabla);
        $eliminar = $generico->LogicalDelete($id);
        //Guardar en bitácora cuando se elimine logicamente un registro
        $genericoBitacora = new Generico($ruta_local, "cat_bitacoramovimientos");
        $camposBitacora['iId_Accion'] = 23;
        $camposBitacora['dFechaMovimiento'] = date("Y-m-d H:i:s");
        $camposBitacora['tObservaciones'] = "Borrado logico en cat_horarios iId: " . $id;
        $camposBitacora['iId_Usuario'] = $_SESSION['cveUsuarioSistema'];
        $camposBitacora['iId_Perfil'] = $_SESSION['cvePerfil'];
        $camposBitacora['iId_Adscripcion'] = $_SESSION['cveAdscripcion'];
        $datosBitacora = $genericoBitacora->SaveRecord($camposBitacora);
    } else {
        //echo "false";
        $eliminar['r'] = false;
        $eliminar['extra'] = "No se puede eliminar el registro, existen salas con el horario activo " . $id;
    }
    echo json_encode($eliminar);
}
/*
 * Eliminado logico en cat_programacionsalas
 */
if ($solicitud == "Baja_Programacionsalas") {
    $tabla = isset($_GET['tabla']) ? $_GET['tabla'] : 'cat_programacionsalas';
    $banderaSalas = false;
    $bandera = array();
    $programacionSalas = new programacionSalas($ruta_local, "cat_programacionsalas");
    //print_r($_POST);
    if (isset($_POST['eliminar'])){
        for ($n = 0; $n < count($_POST['eliminar']); $n ++) {
            $id = $_POST['eliminar'][$n];
            $campo['iId'] = $id;
            $existe = $programacionSalas->selectProgramacionSalas($campo);
            if ($existe) {
                $eliminar = $programacionSalas->eliminarProgramacionSalas($id);
                if ($eliminar) {
                    $bandera[] = true;
                } else {
                    $bandera[] = false;
                }
            } else {
                $bandera[] = false;
            }
        }
        if (in_array(false, $bandera)) {
            $result['r'] = false;
            $result['extra'] = "No se pudieron borrar los registros, consulte a su administrador!";
        } else {
            $result['r'] = true;
            $result['extra'] = "Registros eliminados correctamente";
            //Guardar en bitácora cuando se eliminen logicamente registros en cat_programacionsalas
            $genericoBitacora = new Generico($ruta_local, "cat_bitacoramovimientos");
            $camposBitacora['iId_Accion'] = 28;
            $camposBitacora['dFechaMovimiento'] = date("Y-m-d H:i:s");
            $camposBitacora['tObservaciones'] = "Borrado logico en cat_programacionsalas iId: " . json_encode($_POST['eliminar']);
            $camposBitacora['iId_Usuario'] = $_SESSION['cveUsuarioSistema'];
            $camposBitacora['iId_Perfil'] = $_SESSION['cvePerfil'];
            $camposBitacora['iId_Adscripcion'] = $_SESSION['cveAdscripcion'];
            $datosBitacora = $genericoBitacora->SaveRecord($camposBitacora);
        }
    }else{
        $result['r'] = false;
        $result['extra'] = "Los registros ya fueron eliminados!";
    }    
    echo json_encode($result);
}
/*
 * Registrar configuracion de salas
 */
if ($solicitud == "Registrar_Horarios_Salas") {
    $tabla = isset($_GET['tabla']) ? addslashes($_GET['tabla']) : '';
    $notverify = isset($_GET['notverify']) ? $_GET['notverify'] : false;

    $arreglo = array();
    $generico = new Generico($ruta_local, $tabla);
    $paso = "";
    $nuevo_arreglo = array();
    $campos_aignorar = array('solicitud', 'tabla', 'notverify');

    if (isset($_GET['dFecha'])) {
        $fecha = $_GET['dFecha'];
        if ($fecha == "OBTENER") {
            $_GET['dFecha'] = date('Y-m-d H:i:s');
        }
    }

    $error = "";

    if (isset($_POST['bEsquema'])) {
        $esquemab64 = $_POST['bEsquema'];
        $_GET['bEsquema'] = addslashes(base64_decode($esquemab64));
    }

    if ($error == '') {
        foreach ($_GET as $campo => $valor) {
            if (!in_array($campo, $campos_aignorar) && strpos($campo, "_length") === false && strpos($campo, "ignorar") === false) {
                // if($campo != "solicitud" && strpos($campo, "_length") === false && $campo != "tabla" && strpos($campo, "ignorar") === false && $campo != "notverify")    {
                if (strpos($campo, "ref_") == true && strpos($campo, "_tabla") === false) {
                    foreach ($_GET[$campo] as $opcion_seleccionada) {
                        array_push($nuevo_arreglo, $opcion_seleccionada);
                    }
                    $arreglo[$campo] = $nuevo_arreglo;
                    $nuevo_arreglo = array();
                } else {
                    $arreglo[$campo] = $valor;
                }
            }
        }
        //print_r($arreglo);
        //$resultado = $generico->SaveRecord($arreglo, $notverify);

        $programacionSalas = new programacionSalas($ruta_local, $tabla);
        $camposProgramacion['iId_Juzgado'] = $arreglo['iId_Juzgado'];
        $datosProgramacion = $programacionSalas->selectHorarios($camposProgramacion);
        $bandera = array();
        //print_r($datosProgramacion);
        if (!$datosProgramacion) {
            $resultado = $generico->SaveRecord($arreglo, $notverify);
            $accion = 21;
            $observacion = "Nuevo Registro en cat_horarios iId: " . $resultado['id'];
        } else {
            if (!array_key_exists('iId', $arreglo)) {
                $horaInicio = (int) substr($arreglo['dHorarioInicial'], 0, 2);
                //echo $horaInicio."<br>";
                for ($n = 0; $n < count($datosProgramacion); $n ++) {
                    $inicio = (int) substr($datosProgramacion[$n]['dHorarioInicial'], 0, 2);
                    //echo $inicio."<br>";
                    $fin = (int) substr($datosProgramacion[$n]['dHorarioFinal'], 0, 2);
                    //echo $fin."<br>";
                    if ($horaInicio >= $inicio
                        && $horaInicio < $fin
                    ) {
                        $bandera[] = false;
                    } else {
                        $bandera[] = true;
                    }
                }
                //print_r($bandera);
                if (in_array(false, $bandera)) {
                    $resultado['r'] = false;
                    $resultado['id'] = $error;
                    $resultado['extra'] = "No se puede registrar el horario debido a que hay un horario entre el horario seleccionado favor de verificar";
                } else {
                    $resultado = $generico->SaveRecord($arreglo, $notverify);
                    $accion = 21;
                    $observacion = "Nuevo Registro en cat_horarios iId: " . $resultado['id'];
                }
            } else {
                $resultado = $generico->SaveRecord($arreglo, $notverify);
                $accion = 22;
                $observacion = "Modificacion en cat_horarios iId: " . $resultado['id'];
            }

        }
        if($resultado){
            //Guardar en bitácora cuando se registre un nuevo horario
            $genericoBitacora = new Generico($ruta_local, "cat_bitacoramovimientos");
            $camposBitacora['iId_Accion'] = $accion;
            $camposBitacora['dFechaMovimiento'] = date("Y-m-d H:i:s");
            $camposBitacora['tObservaciones'] = $observacion;
            $camposBitacora['iId_Usuario'] = $_SESSION['cveUsuarioSistema'];
            $camposBitacora['iId_Perfil'] = $_SESSION['cvePerfil'];
            $camposBitacora['iId_Adscripcion'] = $_SESSION['cveAdscripcion'];
            $datosBitacora = $genericoBitacora->SaveRecord($camposBitacora);
            //print_r($datosBitacora);
        }
    } else {
        $resultado['r'] = false;
        $resultado['id'] = $error;
        $resultado['extra'] = "Ocurrio un error, favor de notificar al dministrador del sisitema";
    }

    echo json_encode($resultado);
}
//Peticion para listar salas pertenecientes a un juzgado seleccionado
//por el usuario
if ($solicitud == "procesar_tabla_salas_horarios") {
    $tabla_nombre = isset($_GET['tabla']) ? $_GET['tabla'] : 'cat_salas';

    $formato = isset($_GET['f']) ? addslashes($_GET['f']) : '';
    $columnas = isset($_GET['columnas']) ? $_GET['columnas'] : 'iId,sNombre';
    $modulo = isset($_GET['modulo']) ? $_GET['modulo'] : '';
    $buscapor_columna = isset($_GET['buscapor_columna']) ? addslashes($_GET['buscapor_columna']) : '';
    $buscapor_valor = isset($_GET['buscapor_valor']) ? addslashes($_GET['buscapor_valor']) : '';
    $juzgado = isset($_GET['buscapor_valor']) ? addslashes($_GET['buscapor_valor']) : '';

    $columnas_str = $columnas;
    $columnas = explode(',', $columnas);

    $botones = isset($_GET['btns']) ? addslashes($_GET['btns']) : '';
    if ($botones != '') {
        $botones = explode(',', $botones);
    } else {
        $botones = array();
    }

    $datos = array();
    $tabla = array();
    $d = array();

    $draw = isset($_GET['draw']) ? (int) $_GET['draw'] : 0;
    $draw ++;

    $d['campos'] = $columnas_str;

    $d['sql'] = "";

    if (isset($_GET['search'])) {
        $buscar = $_GET['search'];
        if (isset($buscar['value'])) {
            $buscar = addslashes($buscar['value']);
            if ($buscar != "") {
                $buscar = strtoupper($buscar);
                $d['sql'] .= "AND CONCAT_WS(' ', " . implode(", ", $columnas) . ") LIKE '%$buscar%' ";
            }
        }
    }

    /*if ($buscapor_columna != "") {
        $buscapor_columna = explode(",", $buscapor_columna);
        $buscapor_valor = explode(",", $buscapor_valor);
        foreach ($buscapor_columna as $key => $value) {
            $d['sql'] .= "AND " . $buscapor_columna[$key] . " = '" . $buscapor_valor[$key] . "' ";
        }
    }*/

    /*if (isset($_GET['order'])) {
        $gcolumna = $_GET['order'];
        $gcolumna = $gcolumna[0];
        $gcolumnas = $columnas[$gcolumna['column']];
        if (isset($gcolumna['dir'])) {
            $orden = $gcolumna['dir'];
        } else {
            $orden = 'ASC';
        }
        if ($gcolumnas != '') {
            $d['sql'] .= "ORDER BY $gcolumnas $orden ";
        }
    }*/

    /*if (isset($_GET['start'])) {
        $inicio = $_GET['start'];
        $limite = $_GET['length'];

        if ($limite != '-1') {
            $d['sql'] .= " LIMIT $inicio, $limite";
        }
    }*/

    $objeto = new programacionSalas($ruta_local, $tabla_nombre);

    $lista = $objeto->listaSalasByJuzgado($juzgado);
    //print_r($lista);

    $tabla['draw'] = $draw;
    $tabla['recordsTotal'] = $lista['registros'];
    $tabla['recordsFiltered'] = $lista['registros'];
    $tabla['query'] = $lista['e'];
    // $tabla['x'] = $lista['x'];

    if ($lista['registros'] > 0) {
        $listas = $lista['v'];
        if ($lista['r']) {
            foreach ($listas as $registro) {
                $array_registro = (array) $registro;
                $arreglo = array();
                $label = false;
                $este_id = @$registro->iId;
                $este_valor = @$registro->sNombre;

                $c_valor = $columnas[1];
                $c_llave = $columnas[0];

                $record_id = 0;

                foreach ($registro as $key => $value) {
                    if ($formato == 'e') {
                        if ($key == "iId") {
                            $value = '<button class="btn btn-xs btn-labeled btn-success abre_modal" data-rel="editar" data-id="' . $registro->iId . '"><span class="btn-label icon fa fa-pencil"></span>Editar</button>&nbsp;';
                        }
                        array_push($arreglo, $value);
                    } elseif ($formato == 's') {
                        if ($key == "iId") {
                            $value = '<a class="btn btn-default btn-xs shiny icon-only success abre_modal" href="javascript:void(0);" data-rel="editar" data-id="' . $registro->iId . '" alt="Editar"><i class="fa fa-pencil"></i></a>&nbsp;';
                            $value .= '<a class="btn btn-default btn-xs shiny icon-only danger eliminar_registro" href="javascript:void(0);" data-rel="eliminar_registro" data-id="' . $registro->iId . '" data-info="" alt="Eliminar"><i class="fa fa-trash-o"></i></a>&nbsp;';
                        }
                        array_push($arreglo, $value);
                    } elseif ($formato == 'pe') {
                        $value = '<button class="btn btn-xs btn-labeled btn-success abre_modal" data-rel="editar" data-id="' . $registro->iId . '"><span class="btn-label icon fa fa-pencil"></span>Editar</button>&nbsp;';
                        $value .= '<button class="btn btn-xs btn-labeled btn-danger eliminar_registro" data-rel="eliminar_registro" data-id="' . $registro->iId . '" data-info="' . $registro->sNombre . '"><span class="btn-label icon fa fa-trash-o"></span>Eliminar</button>&nbsp;';
                        if (count($botones) > 0) {
                            for ($i = 0; $i < count($botones); $i ++) {
                                $value .= '<button class="btn btn-xs btn-success class_' . $botones[$i] . '" data-rel="ver" data-id="' . $registro->iId . '">' . $botones[$i] . '</button>&nbsp;';
                            }
                        }
                        array_push($arreglo, $value);
                    } elseif ($formato == 'formatoJuzgador') {
                        if ($key == "iId") {
                            $value = '<button class="btn btn-xs btn-labeled btn-success abre_modal" data-rel="editar" data-id="' . $registro->iId . '"><span class="btn-label icon fa fa-pencil"></span>Editar</button>&nbsp;';
                            $value .= '<button class="btn btn-xs btn-labeled btn-danger eliminar_registro" data-rel="eliminar_registro" data-id="' . $registro->iId . '" data-info="' . $registro->sNombre . '"><span class="btn-label icon fa fa-trash-o"></span>Eliminar</button>';
                        }
                        if ($key == "iSorteo" || $key == "iProgramable") {
                            $value = ($value) ? "S" : "N";
                        }
                        array_push($arreglo, $value);
                    } elseif ($formato == 'salas') {
                        if ($key == "iId") {
                            $value = '<button class="btn btn-xs btn-labeled btn-success abre_modal" data-rel="editar" data-id="' . $registro->iId . '"><span class="btn-label icon fa fa-pencil"></span>Editar</button>&nbsp;';
                            $value .= '<button class="btn btn-xs btn-labeled btn-danger eliminar_registro" data-rel="eliminar_registro" data-id="' . $registro->iId . '" data-info="' . $registro->sNombre . '"><span class="btn-label icon fa fa-trash-o"></span>Eliminar</button>';
                        }
                        if ($key == "iSorteo" || $key == "iComodin" || $key == "iEstado") {
                            $value = ($value) ? "S" : "N";
                        }
                        array_push($arreglo, $value);
                    } elseif ($formato == 'n') {
                        if ($key == "iId") {
                            if (count($botones) > 0) {
                                $value = "";
                                for ($i = 0; $i < count($botones); $i ++) {
                                    $value .= '<button class="btn btn-xs btn-success class_' . $botones[$i] . '" data-rel="editar" data-id="' . $registro->iId . '">' . $botones[$i] . '</button>&nbsp;';
                                }

                                newLog(json_encode($botones));
                            }
                        }
                        array_push($arreglo, $value);
                    } else {

                        if ($record_id == 0) {
                            if (!$label) {
                                $label = true;
                                $value = '<button class="btn btn-xs btn-labeled btn-success agregar_registro" data-rel="agregar" data-tabla="' . $tabla_nombre . '" data-llave="' . $este_id . '" data-valor="' . $array_registro[$c_valor] . '"><span class="btn-label icon fa fa-plus"></span>' . $array_registro[$c_llave] . '</button>&nbsp;';
                            }
                        }
                        array_push($arreglo, $value);
                    }

                    $record_id ++;
                }
                array_push($datos, $arreglo);
            }
        }
    }

    $tabla['data'] = $datos;

    echo json_encode($tabla);
}

///////////////////////////////////////////
/* NO TOCAR */
///////////////////////////////////////////
if ($solicitud == "procesar_tabla_juzgadores") {
    $tabla_nombre = isset($_GET['tabla']) ? $_GET['tabla'] : 'cat_clientes';

    $formato = isset($_GET['f']) ? addslashes($_GET['f']) : '';

    $columnas = isset($_GET['columnas']) ? $_GET['columnas'] : 'iId,sNombre';
    $modulo = isset($_GET['modulo']) ? $_GET['modulo'] : '';
    $buscapor_columna = isset($_GET['buscapor_columna']) ? addslashes($_GET['buscapor_columna']) : '';
    $buscapor_valor = isset($_GET['buscapor_valor']) ? addslashes($_GET['buscapor_valor']) : '';
    $juzgado = isset($_GET['juzgado']) ? addslashes($_GET['juzgado']) : '';

    $columnas_str = $columnas;
    $columnas = explode(',', $columnas);

    $botones = isset($_GET['btns']) ? addslashes($_GET['btns']) : '';
    if ($botones != '') {
        $botones = explode(',', $botones);
    } else {
        $botones = array();
    }

    $datos = array();
    $tabla = array();
    $d = array();

    $draw = isset($_GET['draw']) ? (int) $_GET['draw'] : 0;
    $draw ++;

    $d['campos'] = $columnas_str;

    $d['sql'] = "";

    if (isset($_GET['search'])) {
        $buscar = $_GET['search'];
        if (isset($buscar['value'])) {
            $buscar = addslashes($buscar['value']);
            if ($buscar != "") {
                $buscar = strtoupper($buscar);
                $d['sql'] .= "AND CONCAT_WS(' ', " . implode(", ", $columnas) . ") LIKE '%$buscar%' ";
            }
        }
    }

    if ($buscapor_columna != "") {
        $buscapor_columna = explode(",", $buscapor_columna);
        $buscapor_valor = explode(",", $buscapor_valor);
        foreach ($buscapor_columna as $key => $value) {
            $d['sql'] .= "AND " . $buscapor_columna[$key] . " = '" . $buscapor_valor[$key] . "' ";
        }
    }

    if (isset($_GET['order'])) {
        $gcolumna = $_GET['order'];
        $gcolumna = $gcolumna[0];
        $gcolumnas = $columnas[$gcolumna['column']];
        if (isset($gcolumna['dir'])) {
            $orden = $gcolumna['dir'];
        } else {
            $orden = 'ASC';
        }
        if ($gcolumnas != '') {
            $d['sql'] .= "ORDER BY $gcolumnas $orden ";
        }
    }

    if (isset($_GET['start'])) {
        $inicio = $_GET['start'];
        $limite = $_GET['length'];

        if ($limite != '-1') {
            $d['sql'] .= " LIMIT $inicio, $limite";
        }
    }

    $objeto = new Juzgadores($ruta_local, $tabla);

    $lista = $objeto->selectJuzgadoresJuzgados($juzgado);


    $tabla['draw'] = $draw;
    $tabla['recordsTotal'] = $lista['registros'];
    $tabla['recordsFiltered'] = $lista['registros'];
    $tabla['query'] = $lista['e'];
    // $tabla['x'] = $lista['x'];

    if ($lista['registros'] > 0) {
        $listas = $lista['v'];
        if ($lista['r']) {
            foreach ($listas as $registro) {
                $array_registro = (array) $registro;
                $arreglo = array();
                $label = false;
                $este_id = @$registro->iId;
                $este_valor = @$registro->sNombre;

                $c_valor = $columnas[1];
                $c_llave = $columnas[0];

                $record_id = 0;

                foreach ($registro as $key => $value) {
                    if ($formato == 'e') {
                        if ($key == "iId") {
                            $value = '<button class="btn btn-xs btn-labeled btn-success abre_modal" data-rel="editar" data-id="' . $registro->iId . '"><span class="btn-label icon fa fa-pencil"></span>Editar</button>&nbsp;';
                        }
                        array_push($arreglo, $value);
                    } elseif ($formato == 's') {
                        if ($key == "iId") {
                            $value = '<a class="btn btn-default btn-xs shiny icon-only success abre_modal" href="javascript:void(0);" data-rel="editar" data-id="' . $registro->iId . '" alt="Editar"><i class="fa fa-pencil"></i></a>&nbsp;';
                            $value .= '<a class="btn btn-default btn-xs shiny icon-only danger eliminar_registro" href="javascript:void(0);" data-rel="eliminar_registro" data-id="' . $registro->iId . '" data-info="" alt="Eliminar"><i class="fa fa-trash-o"></i></a>&nbsp;';
                        }
                        array_push($arreglo, $value);
                    } elseif ($formato == 'pe') {
                        $value = '<button class="btn btn-xs btn-labeled btn-success abre_modal" data-rel="editar" data-id="' . $registro->iId . '"><span class="btn-label icon fa fa-pencil"></span>Editar</button>&nbsp;';
                        $value .= '<button class="btn btn-xs btn-labeled btn-danger eliminar_registro" data-rel="eliminar_registro" data-id="' . $registro->iId . '" data-info="' . $registro->sNombre . '"><span class="btn-label icon fa fa-trash-o"></span>Eliminar</button>&nbsp;';
                        if (count($botones) > 0) {
                            for ($i = 0; $i < count($botones); $i ++) {
                                $value .= '<button class="btn btn-xs btn-success class_' . $botones[$i] . '" data-rel="ver" data-id="' . $registro->iId . '">' . $botones[$i] . '</button>&nbsp;';
                            }
                        }
                        array_push($arreglo, $value);
                    } elseif ($formato == 'formatoJuzgador') {
                        if ($key == "iId") {
                            $value = '<a class="btn btn-default btn-xs shiny icon-only success abre_modal" href="javascript:void(0);" data-rel="editar" data-id="' . $registro->iId . '" alt="Editar"><i class="fa fa-pencil"></i></a>&nbsp;';
                            $value .= '<a class="btn btn-default btn-xs shiny icon-only danger eliminar_registro" href="javascript:void(0);" data-rel="eliminar_registro" data-id="' . $registro->iId . '" data-info="" alt="Eliminar"><i class="fa fa-trash-o"></i></a>&nbsp;';
                        }
                        if ($key == "iSorteo" || $key == "iProgramable") {
                            $value = ($value) ? "S" : "N";
                        }
                        array_push($arreglo, $value);
                    } elseif ($formato == 'salas') {
                        if ($key == "iId") {
                            $value = '<button class="btn btn-xs btn-labeled btn-success abre_modal" data-rel="editar" data-id="' . $registro->iId . '"><span class="btn-label icon fa fa-pencil"></span>Editar</button>&nbsp;';
                            $value .= '<button class="btn btn-xs btn-labeled btn-danger eliminar_registro" data-rel="eliminar_registro" data-id="' . $registro->iId . '" data-info="' . $registro->sNombre . '"><span class="btn-label icon fa fa-trash-o"></span>Eliminar</button>';
                        }
                        if ($key == "iSorteo" || $key == "iComodin" || $key == "iEstado") {
                            $value = ($value) ? "S" : "N";
                        }
                        array_push($arreglo, $value);
                    } elseif ($formato == 'n') {
                        if ($key == "iId") {
                            if (count($botones) > 0) {
                                $value = "";
                                for ($i = 0; $i < count($botones); $i ++) {
                                    $value .= '<button class="btn btn-xs btn-success class_' . $botones[$i] . '" data-rel="editar" data-id="' . $registro->iId . '">' . $botones[$i] . '</button>&nbsp;';
                                }

                                newLog(json_encode($botones));
                            }
                        }
                        array_push($arreglo, $value);
                    } else {

                        if ($record_id == 0) {
                            if (!$label) {
                                $label = true;
                                $value = '<button class="btn btn-xs btn-labeled btn-success agregar_registro" data-rel="agregar" data-tabla="' . $tabla_nombre . '" data-llave="' . $este_id . '" data-valor="' . $array_registro[$c_valor] . '"><span class="btn-label icon fa fa-plus"></span>' . $array_registro[$c_llave] . '</button>&nbsp;';
                            }
                        }
                        array_push($arreglo, $value);
                    }

                    $record_id ++;
                }
                array_push($datos, $arreglo);
            }
        }
    }

    $tabla['data'] = $datos;

    echo json_encode($tabla);
}
if ($solicitud == "procesar_tabla_ultimoroljuzgador") {
    $tabla_nombre = isset($_GET['tabla']) ? $_GET['tabla'] : 'cat_clientes';

    $formato = isset($_GET['f']) ? addslashes($_GET['f']) : '';

    $columnas = isset($_GET['columnas']) ? $_GET['columnas'] : 'iId,sNombre';
    $modulo = isset($_GET['modulo']) ? $_GET['modulo'] : '';
    $buscapor_columna = isset($_GET['buscapor_columna']) ? addslashes($_GET['buscapor_columna']) : '';
    $buscapor_valor = isset($_GET['buscapor_valor']) ? addslashes($_GET['buscapor_valor']) : '';
    $juzgado = isset($_GET['juzgado']) ? addslashes($_GET['juzgado']) : '';

    $columnas_str = $columnas;
    $columnas = explode(',', $columnas);

    $botones = isset($_GET['btns']) ? addslashes($_GET['btns']) : '';
    if ($botones != '') {
        $botones = explode(',', $botones);
    } else {
        $botones = array();
    }

    $datos = array();
    $tabla = array();
    $d = array();

    $draw = isset($_GET['draw']) ? (int) $_GET['draw'] : 0;
    $draw ++;

    $d['campos'] = $columnas_str;

    $d['sql'] = "";

    if (isset($_GET['search'])) {
        $buscar = $_GET['search'];
        if (isset($buscar['value'])) {
            $buscar = addslashes($buscar['value']);
            if ($buscar != "") {
                $buscar = strtoupper($buscar);
                $d['sql'] .= "AND CONCAT_WS(' ', " . implode(", ", $columnas) . ") LIKE '%$buscar%' ";
            }
        }
    }

    if ($buscapor_columna != "") {
        $buscapor_columna = explode(",", $buscapor_columna);
        $buscapor_valor = explode(",", $buscapor_valor);
        foreach ($buscapor_columna as $key => $value) {
            $d['sql'] .= "AND " . $buscapor_columna[$key] . " = '" . $buscapor_valor[$key] . "' ";
        }
    }

    if (isset($_GET['order'])) {
        $gcolumna = $_GET['order'];
        $gcolumna = $gcolumna[0];
        $gcolumnas = $columnas[$gcolumna['column']];
        if (isset($gcolumna['dir'])) {
            $orden = $gcolumna['dir'];
        } else {
            $orden = 'ASC';
        }
        if ($gcolumnas != '') {
            $d['sql'] .= "ORDER BY $gcolumnas $orden ";
        }
    }

    if (isset($_GET['start'])) {
        $inicio = $_GET['start'];
        $limite = $_GET['length'];

        if ($limite != '-1') {
            $d['sql'] .= " LIMIT $inicio, $limite";
        }
    }

    $objeto = new Ultimoroljuzgador($ruta_local, $tabla);

    $lista = $objeto->selectUltimoRolJuzgador($juzgado);

    $tabla['draw'] = $draw;
    $tabla['recordsTotal'] = $lista['registros'];
    $tabla['recordsFiltered'] = $lista['registros'];
    $tabla['query'] = $lista['e'];
    // $tabla['x'] = $lista['x'];

    if ($lista['registros'] > 0) {
        $listas = $lista['v'];
        if ($lista['r']) {
            foreach ($listas as $registro) {
                $array_registro = (array) $registro;
                $arreglo = array();
                $label = false;
                $este_id = @$registro->iId;
                $este_valor = @$registro->sNombre;

                $c_valor = $columnas[1];
                $c_llave = $columnas[0];

                $record_id = 0;

                foreach ($registro as $key => $value) {
                    if ($formato == 'e') {
                        if ($key == "iId") {
                            $value = '<button class="btn btn-xs btn-labeled btn-success abre_modal" data-rel="editar" data-id="' . $registro->iId . '"><span class="btn-label icon fa fa-pencil"></span>Editar</button>&nbsp;';
                        }
                        array_push($arreglo, $value);
                    } elseif ($formato == 's') {
                        if ($key == "iId") {
                            $value = '<a class="btn btn-default btn-xs shiny icon-only success abre_modal" href="javascript:void(0);" data-rel="editar" data-id="' . $registro->iId . '" alt="Editar"><i class="fa fa-pencil"></i></a>&nbsp;';
                            $value .= '<a class="btn btn-default btn-xs shiny icon-only danger eliminar_registro" href="javascript:void(0);" data-rel="eliminar_registro" data-id="' . $registro->iId . '" data-info="" alt="Eliminar"><i class="fa fa-trash-o"></i></a>&nbsp;';
                        }
                        array_push($arreglo, $value);
                    } elseif ($formato == 'pe') {
                        $value = '<button class="btn btn-xs btn-labeled btn-success abre_modal" data-rel="editar" data-id="' . $registro->iId . '"><span class="btn-label icon fa fa-pencil"></span>Editar</button>&nbsp;';
                        $value .= '<button class="btn btn-xs btn-labeled btn-danger eliminar_registro" data-rel="eliminar_registro" data-id="' . $registro->iId . '" data-info="' . $registro->sNombre . '"><span class="btn-label icon fa fa-trash-o"></span>Eliminar</button>&nbsp;';
                        if (count($botones) > 0) {
                            for ($i = 0; $i < count($botones); $i ++) {
                                $value .= '<button class="btn btn-xs btn-success class_' . $botones[$i] . '" data-rel="ver" data-id="' . $registro->iId . '">' . $botones[$i] . '</button>&nbsp;';
                            }
                        }
                        array_push($arreglo, $value);
                    } elseif ($formato == 'formatoJuzgador') {
                        if ($key == "iId") {
                            $value = '<button class="btn btn-xs btn-labeled btn-success abre_modal" data-rel="editar" data-id="' . $registro->iId . '"><span class="btn-label icon fa fa-pencil"></span>Editar</button>&nbsp;';
                            $value .= '<button class="btn btn-xs btn-labeled btn-danger eliminar_registro" data-rel="eliminar_registro" data-id="' . $registro->iId . '" data-info="' . $registro->sNombre . '"><span class="btn-label icon fa fa-trash-o"></span>Eliminar</button>';
                        }
                        if ($key == "iSorteo" || $key == "iProgramable") {
                            $value = ($value) ? "S" : "N";
                        }
                        array_push($arreglo, $value);
                    } elseif ($formato == 'salas') {
                        if ($key == "iId") {
                            $value = '<button class="btn btn-xs btn-labeled btn-success abre_modal" data-rel="editar" data-id="' . $registro->iId . '"><span class="btn-label icon fa fa-pencil"></span>Editar</button>&nbsp;';
                            $value .= '<button class="btn btn-xs btn-labeled btn-danger eliminar_registro" data-rel="eliminar_registro" data-id="' . $registro->iId . '" data-info="' . $registro->sNombre . '"><span class="btn-label icon fa fa-trash-o"></span>Eliminar</button>';
                        }
                        if ($key == "iSorteo" || $key == "iComodin" || $key == "iEstado") {
                            $value = ($value) ? "S" : "N";
                        }
                        array_push($arreglo, $value);
                    } elseif ($formato == 'n') {
                        if ($key == "iId") {
                            if (count($botones) > 0) {
                                $value = "";
                                for ($i = 0; $i < count($botones); $i ++) {
                                    $value .= '<button class="btn btn-xs btn-success class_' . $botones[$i] . '" data-rel="editar" data-id="' . $registro->iId . '">' . $botones[$i] . '</button>&nbsp;';
                                }

                                newLog(json_encode($botones));
                            }
                        }
                        array_push($arreglo, $value);
                    } else {

                        if ($record_id == 0) {
                            if (!$label) {
                                $label = true;
                                $value = '<button class="btn btn-xs btn-labeled btn-success agregar_registro" data-rel="agregar" data-tabla="' . $tabla_nombre . '" data-llave="' . $este_id . '" data-valor="' . $array_registro[$c_valor] . '"><span class="btn-label icon fa fa-plus"></span>' . $array_registro[$c_llave] . '</button>&nbsp;';
                            }
                        }
                        array_push($arreglo, $value);
                    }

                    $record_id ++;
                }
                array_push($datos, $arreglo);
            }
        }
    }

    $tabla['data'] = $datos;

    echo json_encode($tabla);
}
if ($solicitud == 'Registrar_Secuencia') {
    $tabla = isset($_GET['tabla']) ? addslashes($_GET['tabla']) : '';
    $notverify = isset($_GET['notverify']) ? false : true;
    $arreglo = array();
    $secuencias = new Secuencias($ruta_local, $tabla);
    $paso = "";
    $nuevo_arreglo = array();
    $campos_aignorar = array('solicitud', 'tabla', 'notverify');

    if (isset($_GET['dFecha'])) {
        $fecha = $_GET['dFecha'];
        if ($fecha == "OBTENER") {
            $_GET['dFecha'] = date('Y-m-d H:i:s');
        }
    }

    $error = "";

    if (isset($_POST['bEsquema'])) {
        $esquemab64 = $_POST['bEsquema'];
        $_GET['bEsquema'] = addslashes(base64_decode($esquemab64));
    }
    if ($error == '') {
        foreach ($_GET as $campo => $valor) {
            if (!in_array($campo, $campos_aignorar) && strpos($campo, "_length") === false && strpos($campo, "ignorar") === false) {
                // if($campo != "solicitud" && strpos($campo, "_length") === false && $campo != "tabla" && strpos($campo, "ignorar") === false && $campo != "notverify")    {
                if (strpos($campo, "ref_") == true && strpos($campo, "_tabla") === false) {
                    foreach ($_GET[$campo] as $opcion_seleccionada) {
                        array_push($nuevo_arreglo, $opcion_seleccionada);
                    }
                    $arreglo[$campo] = $nuevo_arreglo;
                    $nuevo_arreglo = array();
                } else {
                    $arreglo[$campo] = $valor;
                }
            }
        }

        $resultado = $secuencias->SaveRecord($arreglo, $notverify);
    } else {
        $resultado['r'] = false;
        $resultado['id'] = $error;
    }

    echo json_encode($resultado);
}
if ($solicitud == 'Baja_Secuencia') {
    $tabla = isset($_GET['tabla']) ? $_GET['tabla'] : '';
    $id = isset($_GET['id']) ? $_GET['id'] : '';

    $secuencias = new Secuencias($ruta_local, $tabla);
    $eliminar = $secuencias->deleteSecueciasUltimorol($id);

    echo json_encode($eliminar);
}
if ($solicitud == "tabla_secuencias_roles") {
    $tabla = array();
    $juzgado = isset($_GET['juzgado']) ? addslashes($_GET['juzgado']) : '';
    $objeto = new Ultimoroljuzgador($ruta_local, $tabla);

    echo $lista = $objeto->selectSecuenciasRoles($juzgado);
}
if ($solicitud == "combo_secuencias_juzgadores") {
    $tabla = array();
    $juzgado = isset($_GET['juzgado']) ? addslashes($_GET['juzgado']) : '';
    $objeto = new Ultimoroljuzgador($ruta_local, $tabla);

    echo $lista = $objeto->comboJuzgadores($juzgado);
}
if ($solicitud == "guarda_ultimo_rol") {
    $ultimorol = isset($_GET['ultimorol']) ? addslashes($_GET['ultimorol']) : '';
    $secuencia = isset($_GET['secuencia']) ? addslashes($_GET['secuencia']) : '';
    $programacion = isset($_GET['programacion']) ? addslashes($_GET['programacion']) : '';
    $idrol = isset($_GET['idrol']) ? addslashes($_GET['idrol']) : '';
    $juez = isset($_GET['juez']) ? addslashes($_GET['juez']) : '';
    $aparicion = isset($_GET['aparicion']) ? addslashes($_GET['aparicion']) : '';
    $semana = isset($_GET['semana']) ? addslashes($_GET['semana']) : '';
    $tabla = array();
    $objeto = new Ultimoroljuzgador($ruta_local, $tabla);
    if (!empty($ultimorol)) {
        $lista = $objeto->guardarUltimoRol($ultimorol, $programacion, $idrol, $juez, $semana, $aparicion);
    } else {
        echo $lista = $objeto->insertaUltimoRol($ultimorol, $programacion, $idrol, $juez, $semana, $aparicion);
    }
}

///////////////////////////////////////////
/*              PASO 1                   */
///////////////////////////////////////////
if ($solicitud == "consultar_cmbJuzgados") {
    $sesion = $_GET["sesion"];
    $listaJ = new solicitudaudiencia($ruta_local);
    $iIdJuzgados = $listaJ->cmbJuzgados($sesion);
    echo $iIdJuzgados;
}
if ($solicitud == "consultar_cmbAudiencias") {
    $sesion = $_GET["sesion"];
    $listaA = new solicitudaudiencia($ruta_local);
    $iIdaudiencias = $listaA->cmbAudiencias($sesion);
    echo $iIdaudiencias;
}
if ($solicitud == "consultar_carpeta") {

    $tipo = $_GET["tipo"];
    if ($tipo == "a") {
        $iId_Juzgado = $_GET["iId_Juzgado"];
        $iId_TipoCarpeta = $_GET["iId_TipoCarpeta"];
        $iNumero = $_GET["iNumero"];
        $iAnio = $_GET["iAnio"];
        $array = array("tipo"            => $tipo,
                       "iId_Juzgado"     => $iId_Juzgado,
                       "iId_TipoCarpeta" => $iId_TipoCarpeta,
                       "iNumero"         => $iNumero,
                       "iAnio"           => $iAnio);
    }
    if ($tipo == "b") {
        $sCarpetaInv = $_GET["sCarpetaInv"];
        $array = array("tipo"        => $tipo,
                       "sCarpetaInv" => $sCarpetaInv);
    }
    if ($tipo == "c") {
        $sNuc = $_GET["sNuc"];
        $array = array("tipo" => $tipo,
                       "sNuc" => $sNuc);
    }
    if ($tipo == "d") {
        + $iId_Juzgado = $_GET["iId_Juzgado"];
        $iId_TipoCarpeta = $_GET["iId_TipoCarpeta"];
        $iNumero = $_GET["iNumero"];
        $iAnio = $_GET["iAnio"];
        $sCarpetaInv = $_GET["sCarpetaInv"];
        $sNuc = $_GET["sNuc"];
        $array = array("tipo"            => $tipo,
                       "iId_Juzgado"     => $iId_Juzgado,
                       "iId_TipoCarpeta" => $iId_TipoCarpeta,
                       "iNumero"         => $iNumero,
                       "iAnio"           => $iAnio,
                       "sCarpetaInv"     => $sCarpetaInv,
                       "sNuc"            => $sNuc);
    }
    $solicitud = new solicitudaudiencia($ruta_local);
    $arraySolicitud = $solicitud->consulta_carpetas($array);
    echo $arraySolicitud;
}
if ($solicitud == "consultar_foraneas") {

    $iId_Audiencia = $_GET["iId_Audiencia"];
    $array = array("iId_Audiencia" => $iId_Audiencia);


    $solicitud_fk = new solicitudaudiencia($ruta_local);
    $arraySolicitud_fk = $solicitud_fk->consulta_fk_audiencias($array);
    echo $arraySolicitud_fk;
}
if ($solicitud == "consultar_solicitudesA") {

    $iId_Juzgado = $_GET["iId_Juzgado"];
    $iId_TipoCarpeta = $_GET["iId_TipoCarpeta"];
    $iNumero = $_GET["iNumero"];
    $iAnio = $_GET["iAnio"];
    $sCarpetaInv = $_GET["sCarpetaInv"];
    $sNuc = $_GET["sNuc"];
    $f1 = $_GET["f1"];
    $f2 = $_GET["f2"];
    $pagina = $_GET["pagina"];
    $array = array("iId_Juzgado"     => $iId_Juzgado,
                   "iId_TipoCarpeta" => $iId_TipoCarpeta,
                   "iNumero"         => $iNumero,
                   "iAnio"           => $iAnio,
                   "sCarpetaInv"     => $sCarpetaInv,
                   "sNuc"            => $sNuc,
                   "f1"              => $f1,
                   "f2"              => $f2,
                   "pagina"          => $pagina);

    $Consulta_SolicitudesA = new solicitudaudiencia($ruta_local);
    $arrayConsulta_SolicitudesA = $Consulta_SolicitudesA->consulta_solicitudes_audiencias($array);
    echo $arrayConsulta_SolicitudesA;
}

if ($solicitud == "consultar_carpetaJReferencia") {

    $iId_Juzgado = $_GET["iId_Juzgado"];
    $iId_TipoCarpeta = $_GET["iId_TipoCarpeta"];
    $iNumero = $_GET["iNumero"];
    $iAnio = $_GET["iAnio"];
    $sCarpetaInv = $_GET["sCarpetaInv"];
    $sNuc = $_GET["sNuc"];
    $iId = $_GET["iId"];
    $array = array("iId_Juzgado"     => $iId_Juzgado,
                   "iId_TipoCarpeta" => $iId_TipoCarpeta,
                   "iNumero"         => $iNumero,
                   "iAnio"           => $iAnio,
                   "sCarpetaInv"     => $sCarpetaInv,
                   "sNuc"            => $sNuc,
                   "iId"             => $iId);

    $Consulta_CarpetaJR = new solicitudaudiencia($ruta_local);
    $arrayConsulta_CarpetaJR = $Consulta_CarpetaJR->consulta_carpetas_judicialesR($array);
    echo $arrayConsulta_CarpetaJR;
}
if ($solicitud == 'Actualiza') {
    $tabla = isset($_GET['tabla']) ? $_GET['tabla'] : '';
    $registros_nuevos = isset($_GET['nuevos']) ? $_GET['nuevos'] : '';
    $registros_referencia = isset($_GET['referencia']) ? $_GET['referencia'] : '';
    $id = isset($_GET['iId']) ? $_GET['iId'] : '';

    $generico = new Generico($ruta_local, $tabla);
    $actualizar = $generico->Update($registros_referencia, $registros_nuevos, $id);

    echo json_encode($actualizar);
}
if ($solicitud == "consultar_solicitudesE") {

    $iId_Audiencia = $_GET["iId_Audiencia"];
    $iId_Juzgado = $_GET["iId_Juzgado"];
    $iId_TipoCarpeta = $_GET["iId_TipoCarpeta"];
    $iNumero = $_GET["iNumero"];
    $iAnio = $_GET["iAnio"];
    $sCarpetaInv = $_GET["sCarpetaInv"];
    $sNuc = $_GET["sNuc"];
    $array = array("iId_Audiencia"   => $iId_Audiencia,
                   "iId_Juzgado"     => $iId_Juzgado,
                   "iId_TipoCarpeta" => $iId_TipoCarpeta,
                   "iNumero"         => $iNumero,
                   "iAnio"           => $iAnio,
                   "sCarpetaInv"     => $sCarpetaInv,
                   "sNuc"            => $sNuc,);

    $Consulta_SolicitudesE = new solicitudaudiencia($ruta_local);
    $arrayConsulta_SolicitudesE = $Consulta_SolicitudesE->consulta_solicitudes_audienciasE($array);
    echo $arrayConsulta_SolicitudesE;
}

///////////////////////////////////////////
/*            FIN  PASO 1            */
///////////////////////////////////////////


///////////////////////////////////////////
/* NO TOCAR */
///////////////////////////////////////////

if ($solicitud == "procesar_tabla_generica") {
    $tabla_nombre = isset($_GET['tabla']) ? $_GET['tabla'] : 'cat_clientes';

    $formato = isset($_GET['f']) ? addslashes($_GET['f']) : '';

    $columnas = isset($_GET['columnas']) ? $_GET['columnas'] : 'iId,sNombre';
    $modulo = isset($_GET['modulo']) ? $_GET['modulo'] : '';
    $buscapor_columna = isset($_GET['buscapor_columna']) ? addslashes($_GET['buscapor_columna']) : '';
    $buscapor_valor = isset($_GET['buscapor_valor']) ? addslashes($_GET['buscapor_valor']) : '';

    $columnas_str = $columnas;
    $columnas = explode(',', $columnas);

    if ($tabla_nombre === 'cat_salas' || $tabla_nombre === 'cat_juzgados') {
        $edificios_controller = new Edificio($ruta_local);
        $edificios = $edificios_controller->arrayColumn('NomEdificio', 'CveEdificio');
    }

    $botones = isset($_GET['btns']) ? addslashes($_GET['btns']) : '';
    if ($botones != '') {
        $botones = explode(',', $botones);
    } else {
        $botones = array();
    }

    $datos = array();
    $tabla = array();
    $d = array();

    $draw = isset($_GET['draw']) ? (int) $_GET['draw'] : 0;
    $draw ++;

    $d['campos'] = $columnas_str;

    $d['sql'] = "";

    if (isset($_GET['search'])) {
        $buscar = $_GET['search'];
        if (isset($buscar['value'])) {
            $buscar = addslashes($buscar['value']);
            if ($buscar != "") {
                $buscar = strtoupper($buscar);
                $d['sql'] .= "AND CONCAT_WS(' ', " . implode(", ", $columnas) . ") LIKE '%$buscar%' ";
            }
        }
    }

    if ($buscapor_columna != "") {
        $buscapor_columna = explode(",", $buscapor_columna);
        $buscapor_valor = explode(",", $buscapor_valor);
        foreach ($buscapor_columna as $key => $value) {
            $d['sql'] .= "AND " . $buscapor_columna[$key] . " = '" . $buscapor_valor[$key] . "' ";
        }
    }

    if (isset($_GET['order'])) {
        $gcolumna = $_GET['order'];
        $gcolumna = $gcolumna[0];
        $gcolumnas = $columnas[$gcolumna['column']];
        if (isset($gcolumna['dir'])) {
            $orden = $gcolumna['dir'];
        } else {
            $orden = 'ASC';
        }
        if ($gcolumnas != '') {
            $d['sql'] .= "ORDER BY $gcolumnas $orden ";
        }
    }

    if (isset($_GET['start'])) {
        $inicio = $_GET['start'];
        $limite = $_GET['length'];

        if ($limite != '-1') {
            $d['sql'] .= " LIMIT $inicio, $limite";
        }
    }

    $generico = new Generico($ruta_local, $tabla_nombre);

    $lista = $generico->GetData($d, true, true);

    $tabla['draw'] = $draw;
    $tabla['recordsTotal'] = $lista['registros'];
    $tabla['recordsFiltered'] = $lista['registros'];
    $tabla['query'] = $lista['e'];
    // $tabla['x'] = $lista['x'];

    if ($lista['registros'] > 0) {
        $listas = $lista['v'];
        if ($lista['r']) {
            foreach ($listas as $registro) {
                $array_registro = (array) $registro;
                $arreglo = array();
                $label = false;
                $este_id = @$registro->iId;
                $este_valor = @$registro->sNombre;

                $c_valor = $columnas[1];
                $c_llave = $columnas[0];

                $current_record = 0;

                foreach ($registro as $key => $value) {
                    if ($formato == 'e') {
                        if ($key == "iId") {
                            $value = '<button class="btn btn-xs btn-labeled btn-success abre_modal" data-rel="editar" data-id="' . $registro->iId . '"><span class="btn-label icon fa fa-pencil"></span>Editar</button>&nbsp;';
                        }
                        array_push($arreglo, $value);
                    } elseif ($formato == 's') {
                        if ($key == "iId") {
                            $value = '<a class="btn btn-default btn-xs shiny icon-only success abre_modal" href="javascript:void(0);" data-rel="editar" data-id="' . $registro->iId . '" alt="Editar"><i class="fa fa-pencil"></i></a>&nbsp;';
                            $value .= '<a class="btn btn-default btn-xs shiny icon-only danger eliminar_registro" href="javascript:void(0);" data-rel="eliminar_registro" data-id="' . $registro->iId . '" data-info="" alt="Eliminar"><i class="fa fa-trash-o"></i></a>&nbsp;';
                        }
                        array_push($arreglo, $value);
                    } elseif ($formato == 'pe') {
                        $value = '<button class="btn btn-xs btn-labeled btn-success abre_modal" data-rel="editar" data-id="' . $registro->iId . '"><span class="btn-label icon fa fa-pencil"></span>Editar</button>&nbsp;';
                        $value .= '<button class="btn btn-xs btn-labeled btn-danger eliminar_registro" data-rel="eliminar_registro" data-id="' . $registro->iId . '" data-info="' . $registro->sNombre . '"><span class="btn-label icon fa fa-trash-o"></span>Eliminar</button>&nbsp;';
                        if (count($botones) > 0) {
                            for ($i = 0; $i < count($botones); $i ++) {
                                $value .= '<button class="btn btn-xs btn-success class_' . $botones[$i] . '" data-rel="ver" data-id="' . $registro->iId . '">' . $botones[$i] . '</button>&nbsp;';
                            }
                        }
                        array_push($arreglo, $value);
                    } elseif ($formato == 'formatoJuzgador') {
                        if ($key == "iId") {
                            $value = '<a class="btn btn-default btn-xs shiny icon-only success abre_modal" href="javascript:void(0);" data-rel="editar" data-id="' . $registro->iId . '" alt="Editar"><i class="fa fa-pencil"></i></a>&nbsp;';
                            $value .= '<a class="btn btn-default btn-xs shiny icon-only danger eliminar_registro" href="javascript:void(0);" data-rel="eliminar_registro" data-id="' . $registro->iId . '" data-info="" alt="Eliminar"><i class="fa fa-trash-o"></i></a>&nbsp;';
                        }
                        if ($key == "iSorteo" || $key == "iProgramable") {
                            $value = ($value) ? "S" : "N";
                        }
                        array_push($arreglo, $value);
                    } elseif ($formato == 'salas' || $formato == 'juzgados') {
                        if ($key == "iId") {
                            $value = '<button title="Editar" class="btn btn-xs btn-labeled btn-success abre_modal" data-rel="editar" data-id="' . $registro->iId . '"><span class="btn-label icon fa fa-pencil"></span></button>&nbsp;';
                            $value .= '<button title="Eliminar" class="btn btn-xs btn-labeled btn-danger eliminar_registro" data-rel="eliminar_registro" data-id="' . $registro->iId . '" data-info="' . $registro->sNombre . '"><span class="btn-label icon fa fa-trash-o"></span></button>';
                        }
                        if ($key == "iSorteo" || $key == "iComodin" || $key == "iEstado") {
                            $value = ($value) ? "S" : "N";
                        }
                        if ($key == "iId_Edificio") {
                            $value = $edificios[$value];
                        }
                        array_push($arreglo, $value);
                    } elseif ($formato == 'n') {
                        if ($key == "iId") {
                            if (count($botones) > 0) {
                                $value = "";
                                for ($i = 0; $i < count($botones); $i ++) {
                                    $value .= '<button class="btn btn-xs btn-success class_' . $botones[$i] . '" data-rel="editar" data-id="' . $registro->iId . '">' . $botones[$i] . '</button>&nbsp;';
                                }

                                newLog(json_encode($botones));
                            }
                        }
                        array_push($arreglo, $value);
                    } else {
                        if ($current_record == 0) {
                            if (!$label) {
                                $label = true;
                                $value = '<button class="btn btn-xs btn-labeled btn-success agregar_registro" data-rel="agregar" data-tabla="' . $tabla_nombre . '" data-llave="' . $este_id . '" data-valor="' . $array_registro[$c_valor] . '"><span class="btn-label icon fa fa-plus"></span>' . $array_registro[$c_llave] . '</button>&nbsp;';
                            }
                        }
                        array_push($arreglo, $value);
                    }
                    $current_record ++;
                }
                array_push($datos, $arreglo);
            }
        }
    }

    $tabla['data'] = $datos;

    echo json_encode($tabla);
}
if ($solicitud == "ListarCampos_Genericos") {
    $tabla = isset($_GET['tabla']) ? addslashes($_GET['tabla']) : '';
    $d = array();
    $resultado = array();

    $generico = new Generico($ruta_local, $tabla);

    $lista = $generico->GetFields($d);

    $campos = $lista['v'];

    $tabs = array();

    $inc = 0;

    foreach ($campos as $campo) {

        $valores_enum = array();

        $tipo = explode("(", $campo->COLUMN_TYPE);
        $tipo = $tipo[0];

        preg_match('/\((.+)\)/', $campo->COLUMN_TYPE, $size);
        $size = isset($size[1]) ? $size[1] : '';

        if ($tipo == 'enum') {
            $size = explode(',', $size);
            foreach ($size as $key => $value) {
                array_push($valores_enum, trim($value, "'"));
            }
            // $valores_enum = array_map('trim', explode(',', $size));
            $size = 100;
        } else {
            if (strpos($size, ',') > 0) {
                $size = explode(",", $size);
                $size = trim($size[0]);
            }
        }

        //Divide los datos del comentario:
        $division = explode('|', $campo->COLUMN_COMMENT);
        $c_etiqueta = isset($division[0]) ? $division[0] : $campo->COLUMN_NAME;
        $c_tab = isset($division[1]) ? $division[1] : '';
        $c_regex = isset($division[2]) ? $division[2] : '';
        $c_extras = isset($division[3]) ? $division[3] : '';

        if ($campo->REFERENCED_TABLE_NAME != "") {
            $c_campo_referencia = isset($division[2]) ? $division[2] : '';
        } else {
            $c_campo_referencia = '';
        }

        $default_value = $campo->COLUMN_DEFAULT;
        if ($default_value == '0.000000') {
            $default_value = '0';
        }

        if ($default_value == '0000-00-00 00:00:00') {
            $default_value = date('Y-m-d H:i');
        }

        if ($c_extras != "") {
            $extras = explode(",", $c_extras);
            foreach ($extras as $key => $value) {
                $tipo_extra = explode("=", $value);
                if ($tipo_extra[0] == 'REPETIR') {
                    $resultado[$inc]['repetir_en'] = $tipo_extra[1];
                }
                if ($tipo_extra[0] == 'TIPO_PETICION') {
                    $resultado[$inc]['tipo_peticion'] = $tipo_extra[1];
                }
            }
        }

        $resultado[$inc]['nombre'] = $campo->COLUMN_NAME;
        $resultado[$inc]['tipo'] = $tipo;
        $resultado[$inc]['longitud'] = $size;
        $resultado[$inc]['etiqueta'] = $c_etiqueta;
        $resultado[$inc]['tab'] = $c_tab;
        $resultado[$inc]['nulo'] = $campo->IS_NULLABLE;
        $resultado[$inc]['defecto'] = $default_value;
        $resultado[$inc]['regex'] = $c_regex;
        $resultado[$inc]['referencia_tabla'] = $campo->REFERENCED_TABLE_NAME;
        $resultado[$inc]['referencia_campo'] = $c_campo_referencia;
        $resultado[$inc]['referencia_valor'] = $campo->REFERENCED_COLUMN_NAME;
        $resultado[$inc]['valores_enum'] = $valores_enum;

        // if($tipo == 'int' && $size == 1) {
        //  if($c_extras == 'AJAX' || $c_extras == 'A') {
        //      $resultado[$inc]['tipo_peticion'] = 'ajax';
        //  }   else    {
        //      $resultado[$inc]['tipo_peticion'] = 'simple';
        //  }
        // }
        //Guardar los nombres del tipo (tab) de registro:
        if ($c_tab != "") {
            array_push($tabs, $c_tab);
        }

        $inc ++;
    }

    if (count($tabs) == 0) {
        $tabs[] = "REGISTRAR";
    }

    $resultado['tabs'] = array_unique($tabs);

    $resultado = json_encode($resultado);
    echo $resultado;
}

if ($solicitud == 'Registrar_Generico') {
    $tabla = isset($_GET['tabla']) ? addslashes($_GET['tabla']) : '';

    $notverify = true; //isset($_GET['notverify']) ? false : false;
    $arreglo = array();
    $generico = new Generico($ruta_local, $tabla);
    $paso = "";
    $nuevo_arreglo = array();
    $campos_aignorar = array('solicitud', 'tabla', 'notverify');

    if (isset($_GET['dFecha'])) {
        $fecha = $_GET['dFecha'];
        if ($fecha == "OBTENER") {
            $_GET['dFecha'] = date('Y-m-d H:i:s');
        }
    }

    $error = "";

    if (isset($_POST['bEsquema'])) {
        $esquemab64 = $_POST['bEsquema'];
        $_GET['bEsquema'] = addslashes(base64_decode($esquemab64));
    }

    if (isset($_FILES)) {
        // newLog("Registrando Imagen " . json_encode($_FILES));
        foreach ($_FILES as $key => $archivo) {
            // newLog(json_encode($archivo));
            $permitidos = array('jpg', 'jpeg', 'png', 'gif');
            $extension = pathinfo($archivo['name'], PATHINFO_EXTENSION);
            if (!in_array(strtolower($extension), $permitidos)) {
                $error = 'No se admite este tipo de archivo';
            } else {
                $ruta_imagen = $archivo['tmp_name'];

                $miniatura_ancho_maximo = 400;
                $miniatura_alto_maximo = 400;

                $info_imagen = getimagesize($ruta_imagen);
                $imagen_ancho = $info_imagen[0];
                $imagen_alto = $info_imagen[1];
                $imagen_tipo = $info_imagen['mime'];

                $proporcion_imagen = $imagen_ancho / $imagen_alto;
                $proporcion_miniatura = $miniatura_ancho_maximo / $miniatura_alto_maximo;

                if ($proporcion_imagen > $proporcion_miniatura) {
                    $miniatura_ancho = $miniatura_ancho_maximo;
                    $miniatura_alto = $miniatura_ancho_maximo / $proporcion_imagen;
                } else if ($proporcion_imagen < $proporcion_miniatura) {
                    $miniatura_ancho = $miniatura_ancho_maximo * $proporcion_imagen;
                    $miniatura_alto = $miniatura_alto_maximo;
                } else {
                    $miniatura_ancho = $miniatura_ancho_maximo;
                    $miniatura_alto = $miniatura_alto_maximo;
                }

                switch ($imagen_tipo) {
                    case "image/jpg":
                    case "image/jpeg":
                        $imagen = imagecreatefromjpeg($ruta_imagen);
                        break;
                    case "image/png":
                        $imagen = imagecreatefrompng($ruta_imagen);
                        break;
                    case "image/gif":
                        $imagen = imagecreatefromgif($ruta_imagen);
                        break;
                }

                $lienzo = imagecreatetruecolor($miniatura_ancho, $miniatura_alto);

                imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho, $miniatura_alto, $imagen_ancho, $imagen_alto);

                imagejpeg($lienzo, $ruta_imagen, 80);

                $data = file_get_contents($ruta_imagen);
                $data = addslashes($data);
                $_GET[$key] = $data;
            }
        }
    }

    if ($error == '') {
        foreach ($_GET as $campo => $valor) {
            if (!in_array($campo, $campos_aignorar) && strpos($campo, "_length") === false && strpos($campo, "ignorar") === false) {
                // if($campo != "solicitud" && strpos($campo, "_length") === false && $campo != "tabla" && strpos($campo, "ignorar") === false && $campo != "notverify")    {
                if (strpos($campo, "ref_") == true && strpos($campo, "_tabla") === false) {
                    foreach ($_GET[$campo] as $opcion_seleccionada) {
                        array_push($nuevo_arreglo, $opcion_seleccionada);
                    }
                    $arreglo[$campo] = $nuevo_arreglo;
                    $nuevo_arreglo = array();
                } else {
                    $arreglo[$campo] = $valor;
                }
            }
        }

        $resultado = $generico->SaveRecord($arreglo, $notverify);
    } else {
        $resultado['r'] = false;
        $resultado['id'] = $error;
    }

    echo json_encode($resultado);
}

if ($solicitud == 'Datos_Genericos') {
    $tabla = isset($_GET['tabla']) ? addslashes($_GET['tabla']) : '';

    $arreglo = array();
    $generico = new Generico($ruta_local, $tabla);
    $id = isset($_GET['id']) ? addslashes($_GET['id']) : 0;

    $recurso = $generico->GetRecord($id);

    echo json_encode($recurso);
}

if ($solicitud == 'Datos_Referencia') {
    //Hace una consulta a una tabla, devuelve dos valores: id, text (Si se le agrega el parÃ¡metro "extras" devuelve los campos)
    // $tabla = Indica la tabla a la que se harÃ¡ la consulta
    // $campo = Indica los campos que aparecerÃ¡n como etiqueta
    // $default = Trae un solo registro por defecto
    // $extras = Trae campos extras al arreglo
    // $funciones = Consulta funciones extras a la consulta simple
    // $buscapor = Consulta por el campo que se define, y busca en base a lo pedido por "$default"
    $tabla = isset($_GET['tabla']) ? addslashes($_GET['tabla']) : 'cat_clientes';
    $campos_i = isset($_GET['campo']) ? addslashes($_GET['campo']) : 'sNombre';
    $llave = isset($_GET['llave']) ? addslashes($_GET['llave']) : 'iId';
    $sql = isset($_GET['q']) ? addslashes($_GET['q']) : '';
    $default = isset($_GET['default']) ? addslashes($_GET['default']) : '';
    $buscapor = isset($_GET['buscapor']) ? addslashes($_GET['buscapor']) : '';
    $extras = isset($_GET['extras']) ? addslashes($_GET['extras']) : '';
    $funciones = isset($_GET['funciones']) ? addslashes($_GET['funciones']) : '';
    $estado = isset($_GET['estado']) ? true : false;
    echo getReferenceData($tabla, $campos_i, $llave, $sql, $default, $buscapor, $extras, $funciones, $estado);
}

if ($solicitud == 'Valores_Referencia') {
    //Solicita todos los valores de una tabla referenciada, basandose en la tabla que los relaciona:
    // $tabla = Indica que tabla va a consultar
    // $tablaval = Indica la tabla desde la que se van a traer los valores como las etiquetas y demás información visual
    // $referencia = Indica que campo es el que va a referenciar o que campo es el indicador de la consulta
    // $id = Indica el id del campo indicado arriba para hacer la consulta y traer los demás valores
    $tabla = isset($_GET['tabla']) ? addslashes($_GET['tabla']) : '';
    $tablaval = isset($_GET['tablaval']) ? addslashes($_GET['tablaval']) : '';
    $referencia = isset($_GET['referencia']) ? addslashes($_GET['referencia']) : '';
    $id = isset($_GET['id']) ? addslashes($_GET['id']) : '';
    $campos = isset($_GET['campos']) ? addslashes($_GET['campos']) : 'sNombre';
    $extras = isset($_GET['extras']) ? addslashes($_GET['extras']) : '';

    echo getReferenceValues($tabla, $tablaval, $referencia, $id, $campos, $extras, "");
}

if ($solicitud == 'Baja') {
    $tabla = isset($_GET['tabla']) ? $_GET['tabla'] : '';
    $id = isset($_GET['id']) ? $_GET['id'] : '';

    $generico = new Generico($ruta_local, $tabla);
    $eliminar = $generico->LogicalDelete($id);

    echo json_encode($eliminar);
}


/* * **
 * - Inician las funciones
 * ** */

function getReferenceData($tabla, $campos_i, $llave, $sql, $default, $buscapor = "", $extras = "", $funcion_adicional = "", $estado)
{
    global $ruta_local;
    $campos = "$llave AS id, CONCAT_WS(' ', $campos_i) AS text";
    if ($extras != "") {
        $campos .= ", $extras";
    }
    $d['campos'] = $campos;
    $d['sql'] = "";

    if ($sql != "") {
        $d['sql'] .= "AND CONCAT_WS(' ', $campos_i) LIKE '%$sql%' ";
    }
    if ($default != "") {
        if ($buscapor == "") {
            $d['sql'] .= "AND $llave IN ($default) ";
        } else {
            $default = explode(',', $default);
            if (strpos($buscapor, ",")) {
                $campos_buscar = explode(",", $buscapor);
                foreach ($campos_buscar as $key => $value) {
                    $d['sql'] .= "AND $value = '" . $default[$key] . "' ";
                }
            } else {
                $val_str = '';
                foreach ($default as $key => $val) {
                    if ($key > 0) {
                        $val_str .= ',';
                    }
                    $val_str .= "'$val'";
                }
                $d['sql'] .= "AND $buscapor IN ($val_str) ";
            }
            $d['sql'] .= "AND $buscapor IN ($val_str) ";
        }
    }

    //Siempre debe verificar que el registro exista lógicamente:
    $d['sql'] . "AND iEstado = 1";
    $d['funcion_adicional'] = $funcion_adicional;
    $generico = new Generico($ruta_local, $tabla,$estado);

    $datos = $generico->GetData($d, false);

    newLog("Solicitud de datos genericos (Recurso: $tabla) \r\nSolicitud: " . json_encode($d) . "\r\nRespuesta: " . json_encode($datos));

    //Aplica funciones extras a la consulta
    if ($funcion_adicional != "") {
        if ($datos['r']) {
            $funciones = array();
            $valores = $datos['v'];
            $val_ini = $datos['v'];
            $funciones_adicionales = explode(",", $funcion_adicional);
            foreach ($funciones_adicionales as $id => $funcion) {
                if ($funcion == 'totalimpuestos') {

                    $valores = ConsultarTotalImpuestosPorProducto($valores);

                    newLog("Solicitud de impuestos por producto \r\nSolicitud: " . json_encode($datos) . "\r\nRespuesta: " . json_encode($valores));
                }
            }
            $datos['v'] = $valores;
        }
    }

    return json_encode($datos);
}

function getReferenceValues($tabla, $tablaval, $referencia, $id, $campos, $extras)
{
    if ($campos == "") {
        $campos = "sNombre";
    }
    global $ruta_local;
    $d['sql'] = "AND $referencia = '$id'";

    $generico = new Generico($ruta_local, $tabla);
    $datos = $generico->GetData($d, false);

    $registros = array();
    $campo_consulta = "";

    if ($datos['r']) {
        $valores = $datos['v'];
        foreach ($valores as $key) {
            foreach ($key as $llave => $value) {
                if ($llave != 'iId' && $llave != 'iEstado' && $llave != $referencia) {
                    $campo_consulta = $llave;
                    array_push($registros, $value);
                }
            }
        }
    }

    $registros = implode(",", $registros);

    if ($registros == "") {
        $registros = "0";
    }
    $buscapor = isset($_GET['buscapor']) ? addslashes($_GET['buscapor']) : '';
    $default = isset($_GET['default']) ? addslashes($_GET['default']) : '';

    if ($buscapor != "") {
        return getReferenceData($tablaval, $campos, "iId", "", $default, $buscapor, $extras);
    } else {
        return getReferenceData($tablaval, $campos, "iId", "", $registros, '', $extras);
    }
}

function ConsultarTotalImpuestosPorProducto($valores)
{
    $regreso_valores = $valores;

    foreach ($valores as $id => $registro) {
        $impuestosjson = getReferenceValues("ref_productos_impuestos", "cat_impuestos", "iId_Producto", $registro->id, "", "dTasa");
        $impuesto = json_decode($impuestosjson);
        $res = array();
        if ($impuesto->r) {
            $res = $impuesto->v;
            $totalimp = 0;
            foreach ($res as $idr => $imp) {
                $res[$idr]->dImporte = ($imp->dTasa / 100) * @$registro->dPrecio;
                $totalimp += $imp->dTasa;
            }
            $t1 = ($totalimp / 100);
            $t2 = @$registro->dPrecio * $t1;
            $valorextra = $t2;
        } else {
            $valorextra = 0;
        }

        $regreso_valores[$id]->sImpuestosJSON = json_encode($res);
        $regreso_valores[$id]->dImpuestoTotal = $valorextra;
    }

    return $regreso_valores;
}

function Seguridad($valor)
{
    return addslashes($valor);
}

?>