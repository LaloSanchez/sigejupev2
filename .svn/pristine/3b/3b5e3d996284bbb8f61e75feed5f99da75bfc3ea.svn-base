<?php

/*
 * ************************************************
 * FRAMEWORK V1.0.0 (http://www.pjedomex.gob.mx)
 * Copyright 2009-2015 FACADES
 * Licensed under the MIT license 
 * Autor: *
 * Departamento de Desarrollo de Software
 * Subdireccion de Ingenieria de Software
 * Direccion de Teclogias de Informacion
 * Poder Judicial del Estado de Mexico
 * ************************************************
 */

if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/firmapdf/FirmaPdfController.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

    class FirmaPdfFacade {

        private $proveedor;

        public function __construct() {
            
        }

        public function generaPdf($params, $conFirma = false) {
#VALIDACIONES DE LOS PARAMETROS
            $error = false;
            $descError = "Hacen falta los siguientes campos: ";
            if (!array_key_exists('rutaDestino', $params)) {
                $error = true;
                $descError .= "Ruta Destino, ";
            }
            if (!array_key_exists('idCarpetaJudicial', $params)) {
                $error = true;
                $descError .= "Identificador Carpeta Judicial, ";
            }
            if (!array_key_exists('numCarpeta', $params)) {
                $error = true;
                $descError .= "Numero de Carpeta Judicial, ";
            }
            if (!array_key_exists('anioCarpeta', $params)) {
                $error = true;
                $descError .= "A�o de Carpeta Judicial, ";
            }
            if (!array_key_exists('descTipoCarpeta', $params)) {
                $error = true;
                $descError .= "Descripcion de Carpeta Judicial, ";
            }
            if (!array_key_exists('idActuacion', $params)) {
                $error = true;
                $descError .= "Identificardor de la Actuacion, ";
            }
            if (!array_key_exists('numActuacion', $params)) {
                $error = true;
                $descError .= "Numero de Actuacion, ";
            }
            if (!array_key_exists('anioActuacion', $params)) {
                $error = true;
                $descError .= "A�o de Actuacion, ";
            }
            if (!array_key_exists('descTipoActuacion', $params)) {
                $error = true;
                $descError .= "Descripcion de Actuacion, ";
            }
            if (!array_key_exists('cveJuzgado', $params)) {
                $error = true;
                $descError .= "Identificador de Juzgado, ";
            }
            if (!array_key_exists('descJuzgado', $params)) {
                $error = true;
                $descError .= "Descripcion de Juzgado, ";
            }
            if (!array_key_exists('siglasJuzgados', $params)) {
                $error = true;
                $descError .= "Siglas de Juzgado, ";
            }
            if (!array_key_exists('fechaRegistro', $params)) {
                $error = true;
                $descError .= "Fecha de Registro, ";
            }
            if (!array_key_exists('fechaActualizacion', $params)) {
                $error = true;
                $descError .= "Fecha de Actualizacion, ";
            }
            if (!array_key_exists('texto', $params)) {
                $error = true;
                $descError .= "Texto, ";
            }

            if (!$error) {
                if (($params["idCarpetaJudicial"] != "" && $params["idCarpetaJudicial"] > 0) || ($params["idActuacion"] != "" && $params["idActuacion"] > 0)) {
                    $firmaPdfController = new FirmaPdfController();
                    set_time_limit(600); //10 minutos
                    $firmaPdfController = $firmaPdfController->generaPdf($params, $conFirma);
                    if ($firmaPdfController != "") {
                        if ($firmaPdfController["estatus"] == "ok") {
                            $resultado = $firmaPdfController;
                        } else {
                            $resultado = array("estatus" => "fail",
                                "mensaje" => $firmaPdfController["text"],
                                "cadena" => "",
                                "firma" => "",
                                "sello" => "");
                        }
                    } else {
                        $resultado = array("estatus" => "fail",
                            "mensaje" => "error: controller vacio",
                            "cadena" => "",
                            "firma" => "",
                            "sello" => "");
                    }
                } else {
                    $resultado = array("estatus" => "fail",
                        "mensaje" => "datos de carpeta judicial o actuacion no validos",
                        "cadena" => "",
                        "firma" => "",
                        "sello" => "");
                }
            } else {
                $resultado = array("estatus" => "fail",
                    "mensaje" => utf8_encode(substr($descError, 0, -2)),
                    "cadena" => "",
                    "firma" => "",
                    "sello" => "");
            }
            return $resultado;
        }

    }

#QUITAR
//$_POST['json'] = '{
//    "type": "generaPdfFirma",
//    "rutaDestino": "../../../imagenes/761/2016/CAUSA_DE_CONTROL/1690/145938ACU.pdf",
//    "idImagen": "145938",
//    "idCarpetaJudicial": "1690",
//    "numCarpeta": "1",
//    "anioCarpeta": "2016",
//    "descTipoCarpeta": "CAUSA DE CONTROL",
//    "cveTipoCarpeta": "2",
//    "idActuacion": "93574",
//    "numActuacion": "1",
//    "anioActuacion": "2016",
//    "descTipoActuacion": "ACUERDOS",
//    "cveTipoActuacion": "2",
//    "cveJuzgado": "761",
//    "descJuzgado": "JUZGADO DE CONTROL DE TENANCINGO",
//    "siglasJuzgados": "CTL-TNG",
//    "fechaRegistro": "2016-04-29 12:42:45",
//    "fechaActualizacion": "2016-04-29 12:42:45",
//    "texto": "<div class=&QUOT;main-column&QUOT;><article class=&QUOT;section-content&QUOT; itemscope=&QUOT;&QUOT; itemtype=&QUOT;http://schema.org/Article&QUOT;><div itemprop=&QUOT;articleBody&QUOT; class=&QUOT;article-body&QUOT;><section id=&QUOT;condiciones-del-servicio-de-firefox-hello&QUOT;><h1>Condiciones del servicio de Firefox Hello</h1><p datetime=&QUOT;2014-11-25&QUOT;>martes, 25 de noviembre de 2014</p><section id=&QUOT;1-introduccion&QUOT;><h3>1. Introducci�n</h3><p>Firefox Hello es un servicio de mensajer�a en tiempo real mediante  v�deo y voz de extremo a extremo (en adelante, &quot;Servicio&quot;) facilitado  por Mozilla. &nbsp;Lea detenidamente el presente documento (en adelante,  &quot;Condiciones&quot;), puesto que detalla los derechos y las responsabilidades  que conlleva usar Firefox Hello para enviar o recibir mensajes.</p></section><section id=&QUOT;2-registro-de-cuentas&QUOT;><h3>2. Registro de cuentas</h3><p>Es posible que deba crearse una cuenta de Firefox para usar  determinadas funciones del Servicio, como la importaci�n de contactos de  otro servicio o la creaci�n de nuevos contactos. &nbsp;Si crea una cuenta de  Firefox, acepta las <a href=&QUOT;https://www.mozilla.org/about/legal/terms/services&QUOT;>Condiciones del servicio</a> y el <a href=&QUOT;https://www.mozilla.org/privacy/firefox-cloud&QUOT;>Aviso de privacidad</a> de las cuentas de Firefox.</p></section><section id=&QUOT;3-caracteristicas&QUOT;><h3>3. Caracter�sticas</h3><p>El Servicio se ofrece en colaboraci�n con TokBox, Inc. (TokBox  tambi�n se menciona en este documento como otorgante de licencias). &nbsp;El  Servicio se suministra integrado en Firefox, de forma que se pueden  realizar f�cilmente llamadas de voz y v�deo entre Firefox y usuarios de  cualquier navegador o dispositivo basado en WebRTC. &nbsp;El Servicio est�  sujeto a cambios. &nbsp;Visite la <a href=&QUOT;https://support.mozilla.org/products/firefox&QUOT;>p�gina de ayuda</a> de Mozilla si tiene alguna duda en relaci�n con las caracter�sticas.</p></section><section id=&QUOT;4-politica-de-privacidad&QUOT;><h3>4. Pol�tica de privacidad</h3><p>El <a href=&QUOT;https://www.mozilla.org/privacy/&QUOT;>Aviso de privacidad de Firefox Hello</a> explica qu� informaci�n se env�a durante el uso del Servicio y c�mo se gestiona dicha informaci�n.</p></section><section id=&QUOT;5-contenido-y-uso&QUOT;><h3>5. Contenido y uso</h3><p>Usted comprende que el Servicio permite a los usuarios transferir  determinada informaci�n, como v�deo o im�genes (en adelante,  &quot;Contenido&quot;). &nbsp;Mediante el presente, concede a Mozilla y a nuestros  otorgantes de licencias todos los derechos necesarios para ofrecer el  Servicio y garantiza que utilizar� el Servicio de acuerdo con las <a href=&QUOT;https://www.mozilla.org/about/legal/acceptable-use&QUOT;>Condiciones de uso</a> de Mozilla. Usted es el �nico responsable del Contenido que transfiere, as� como de sus consecuencias.</p><p>Para obtener m�s informaci�n sobre la notificaci�n de infracciones en  relaci�n con los derechos de autor o las marcas comerciales, haga clic <a href=&QUOT;https://www.mozilla.org/about/legal/report-abuse/&QUOT;>aqu�</a>.</p></section><section id=&QUOT;6-derechos-de-propiedad-de-mozilla-y-tokbox&QUOT;><h3>6. Derechos de propiedad de Mozilla y TokBox</h3><p>Ni Mozilla ni sus otorgantes de licencias le otorgan ning�n derecho  de propiedad intelectual en el Servicio que no est� estipulado  espec�ficamente en las presentes Condiciones. &nbsp;Por ejemplo, las  presentes Condiciones no le otorgan el derecho a utilizar ninguno de los  derechos de autor, nombres comerciales, marcas comerciales, marcas de  servicio, logotipos, nombres de dominio u otras caracter�sticas  distintivas de Mozilla o de sus otorgantes de licencias.</p><p>El software de Mozilla se distribuye con arreglo a la versi�n actual  de la Licencia P�blica de Mozilla u otras licencias de permisividad  similar.</p></section><section id=&QUOT;7-interrupcion-del-servicio-duracion-y-rescision&QUOT;><h3>7. Interrupci�n del servicio, duraci�n y rescisi�n</h3><p>Ocasionalmente, es posible que debamos llevar a cabo tareas de  mantenimiento o mejora del Servicio, o suspender temporalmente parte o  la totalidad del Servicio. No siempre es posible notificarlo  previamente. No tendr� derecho a reclamar ning�n gasto o da�o ocasionado  por dicha suspensi�n o limitaci�n del uso del Servicio.</p><p>Se aplicar�n las presentes Condiciones al uso del Servicio hasta que  usted, Mozilla o TokBox decidan rescindirlas. Puede rescindirlas en  cualquier momento y por cualquier motivo simplemente con dejar de usar  el Servicio.</p><p>Podemos suspender o cancelar su acceso al Servicio o a su cuenta de  Firefox en cualquier momento y por cualquier motivo, incluyendo, entre  otros casos, si consideramos que: (i) ha incumplido las presentes  Condiciones; (ii) genera un riesgo o una posible responsabilidad legal  para Mozilla o TokBox; o (iii) la prestaci�n del Servicio deja de ser  viable a nivel comercial. Si es posible, realizaremos esfuerzos  razonables para informarle de ello a trav�s de la direcci�n de correo  electr�nico asociada a su cuenta de Firefox o la siguiente vez que  intente acceder al Servicio.</p><p>En dichos casos, se rescindir�n las presentes Condiciones,  incluyendo, entre otras, su licencia de uso del Servicio, excepto las  siguientes secciones, que seguir�n vigentes: indemnizaci�n, exclusi�n de  garant�as y limitaci�n de responsabilidad, y aspectos varios.</p></section><section id=&QUOT;8-indemnizacion&QUOT;><h3>8. Indemnizaci�n</h3><p>Usted acepta defender, indemnizar y eximir de responsabilidad a  Mozilla, TokBox y a las empresas matrices y subsidiarias  correspondientes, as� como a sus contratistas, colaboradores, otorgantes  de licencias, socios, directivos, empleados y agentes (en adelante,  &quot;Partes indemnizadas&quot;), frente a las reclamaciones o gastos de terceros,  incluidos los honorarios de los abogados, derivados del uso que usted  haga del Servicio o relacionados con dicho uso (incluyendo, entre otros,  los ocasionados por el Contenido que usted transfiera).</p></section><section id=&QUOT;9-exclusion-de-garantias-y-limitacion-de-responsabilidad&QUOT;><h3>9. Exclusi�n de garant�as y limitaci�n de responsabilidad</h3><p>LOS SERVICIOS SE PRESTAN &quot;TAL Y COMO EST�N&quot;, CON TODOS SUS FALLOS. EN  LA MEDIDA EN QUE LA LEY LO PERMITA, LAS PARTES INDEMNIZADAS RENUNCIAN  POR LA PRESENTE A TODAS LAS GARANT�AS, EXPRESAS O IMPL�CITAS, QUE  INCLUYEN, SIN LIMITACI�N, CUALQUIER GARANT�A DE QUE LOS SERVICIOS NO  CONTIENEN DEFECTOS, SON COMERCIALIZABLES, SE AJUSTAN A UN DETERMINADO  PROP�SITO Y NO VULNERAN NINGUNA DISPOSICI�N.</p><p>USTED ASUME TODOS LOS RIESGOS CON RESPECTO A LA SELECCI�N DE LOS  SERVICIOS PARA SUS FINALIDADES, AS� COMO A LA CALIDAD Y AL RENDIMIENTO  DE LOS MISMOS, INCLUYENDO, ENTRE OTROS ASPECTOS, EL RIESGO DE QUE SE  ELIMINE SU CONTENIDO, DE QUE SE CORROMPA O DE QUE OTRAS PERSONAS PUEDAN  ACCEDER A SU CUENTA.</p><p>ESTA LIMITACI�N SE APLICAR� INDEPENDIENTEMENTE DE QUE FALLE CUALQUIER  RECURSO EN SU FIN FUNDAMENTAL. ALGUNAS JURISDICCIONES NO ADMITEN LA  EXCLUSI�N O LIMITACI�N DE GARANT�AS IMPL�CITAS, POR LO QUE ES POSIBLE  QUE ESTA EXCLUSI�N NO LE AFECTE.</p><p>EXCEPTO CUANDO LA LEY AS� LO REQUIERA, LAS PARTES INDEMNIZADAS NO  SER�N RESPONSABLES DE NING�N DA�O INDIRECTO, ESPECIAL, FORTUITO,  RESULTANTE NI EJEMPLAR QUE DERIVE DE LAS PRESENTES CONDICIONES, O DEL  USO O DE LA INCAPACIDAD DE USO DE LOS SERVICIOS, O QUE EST� RELACIONADO  DE CUALQUIER OTRA FORMA CON LOS MISMOS; INCLUYENDO, ENTRE OTROS, LOS  DA�OS DIRECTOS O INDIRECTOS CAUSADOS POR P�RDIDAS DE FONDO DE COMERCIO,  HUELGAS, P�RDIDAS DE BENEFICIOS, P�RDIDAS DE DATOS Y FALLOS O PROBLEMAS  INFORM�TICOS, AUNQUE SE HAYA AVISADO DE LA POSIBILIDAD DE QUE SURGIESEN  DICHOS DA�OS E INDEPENDIENTEMENTE DE LA TEOR�A LEGAL (CONTRATO, AGRAVIO,  ETC.) SOBRE LA QUE SE BASE LA RECLAMACI�N. LA RESPONSABILIDAD COLECTIVA  DE LAS PARTES INDEMNIZADAS CONFORME AL PRESENTE ACUERDO NO SUPERAR� LOS  500&nbsp;USD (QUINIENTOS D�LARES). ALGUNAS JURISDICCIONES NO ADMITEN LA  EXCLUSI�N O LIMITACI�N DE DA�OS FORTUITOS, RESULTANTES O ESPECIALES, POR  LO QUE ES POSIBLE QUE ESTA EXCLUSI�N Y LIMITACI�N NO LE AFECTE.</p></section><section id=&QUOT;10-modificaciones-de-las-presentes-condiciones&QUOT;><h3>10. Modificaciones de las presentes Condiciones</h3><p>Las presentes Condiciones pueden actualizarse peri�dicamente con el  fin de adecuarlas a nuevas caracter�sticas del Servicio o de aclarar  alguna disposici�n. La versi�n actualizada de las Condiciones se  publicar� en l�nea. Si los cambios realizados fuesen sustanciales,  anunciaremos la actualizaci�n mediante los canales que Mozilla utiliza  habitualmente para tal fin, como las publicaciones en blogs y los foros.  En caso de que, tras la fecha de entrada en vigor de las  modificaciones, siga usando el Servicio, se entender� que acepta tales  cambios. Para que le resulte m�s c�modo revisar las presentes  Condiciones, publicaremos la fecha de entrada en vigor de las  modificaciones en la parte superior de esta p�gina.</p></section><section id=&QUOT;11-aspectos-varios&QUOT;><h3>11. Aspectos varios</h3><p>Las presentes Condiciones constituyen la totalidad del acuerdo entre  usted, Mozilla y TokBox con respecto al uso del Servicio y se rigen por  las leyes del estado de California, EE.&nbsp;UU., excluyendo sus  disposiciones sobre conflicto de leyes. Si alguna parte de las presentes  Condiciones se considera no v�lida o no ejecutable, el resto tendr�  plena vigencia y efecto. En caso de que existan discrepancias entre una  versi�n traducida de las presentes Condiciones y la versi�n en ingl�s,  ser� esta �ltima la que rija.</p></section><section id=&QUOT;12-pongase-en-contacto-con-nosotros&QUOT;><h3>12. P�ngase en contacto con nosotros</h3><p>P�ngase en contacto con Mozilla a trav�s de: Mozilla Corporation (a  la atenci�n de: Mozilla ? Legal Notices, 2 Harrison Street, San  Francisco CA 94105) o mediante correo electr�nico en: <a href=&QUOT;mailto:legal-notices@mozilla.com&QUOT;>legal-notices@mozilla.com</a>.</p></section></section></div></article></div>",
//    "firmantes": [
//        {
//            "nombre": "ilhuitemoc ricardo",
//            "curp": "qwerty12345",
//            "firma": "tVpEqgd-gxrdiN46kpZK6ZT6Hf8bJVJySIob1K1BUDYb9xAzkFtk1qTQEPVNGB",
//            "fechaFirma": "2016-05-05 14:50:00",
//            "numEmpleado": "7512"
//        },
//        {
//            "nombre": "karina millan",
//            "curp": "asdfg123456",
//            "firma": "kKjUsIEogBYRqyRl-w442PhhAkhODSw2q2_FZQRqdfwGHEvdlC62aYpMRf8",
//            "fechaFirma": "2016-05-05 14:52:00",
//            "numEmpleado": "7787"
//        }
//    ]
//}';
//print_r($_POST);
    $jsonDecode = new Decode_JSON();
    $firmaPdfFacade = new FirmaPdfFacade();
    @$params = json_decode($_POST['json'], true);
    if (array_key_exists('type', $params)) {
        if ($params["type"] == "generaPdf") {
            $respuesta = $firmaPdfFacade->generaPdf($params, false);
            echo json_encode($respuesta);
        } else if ($params["type"] == "generaPdfFirma") {
            $respuesta = $firmaPdfFacade->generaPdf($params, true);
            echo utf8_encode(json_encode($respuesta));
        } else {
            $resultado = array("estatus" => "fail",
                "mensaje" => "Accion no reconocida",
                "cadena" => "",
                "firma" => "",
                "sello" => "");
            echo json_encode($resultado);
        }
    } else {
        $resultado = array("estatus" => "fail",
            "mensaje" => "No se especifico la accion",
            "cadena" => "",
            "firma" => "",
            "sello" => "");
        echo json_encode($resultado);
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>
