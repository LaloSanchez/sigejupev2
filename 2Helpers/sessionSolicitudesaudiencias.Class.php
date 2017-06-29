<?php
/**
 * Clase para la asignación de variables de sesion en el registro de Solicitudes de Audiencias
 * 
 * @author Juan Carlos Zepeda
 * @author Cristian Moreno
 * @author Alejandro Martín
 * @author Israel Hernández
 */
class sessionSolicitudesaudiencias {
    /**
     * Función para el registro de las variables de sesión
     * @param type $paso
     * @param type $objetoDatos
     * @return int
     */
    public function registraSesion($paso,$objetoDatos){
        switch ($paso){
            case '1':
                $_SESSION['PasoUno']['idSolicitudAudiencia'] = $objetoDatos->getidSolicitudAudiencia();
                $_SESSION['PasoUno']['cveCatAudiencia'] = $objetoDatos->getcveCatAudiencia();
                $_SESSION['PasoUno']['cveJuzgadoDesahoga'] = $objetoDatos->getcveJuzgadoDesahoga();
                $_SESSION['PasoUno']['cveJuzgado'] = $objetoDatos->getcveJuzgado();
                $_SESSION['PasoUno']['cveConsignacion'] = $objetoDatos->getcveConsignacion();
                $_SESSION['PasoUno']['cveEtapaProcesal'] = $objetoDatos->getcveEtapaProcesal();
                $_SESSION['PasoUno']['idReferencia'] = $objetoDatos->getidReferencia();
                $_SESSION['PasoUno']['fechaRegistro'] = $objetoDatos->getfechaRegistro();
                $_SESSION['PasoUno']['fechaActualizacion'] = $objetoDatos->getfechaActualizacion();
                $_SESSION['PasoUno']['fechaEnvio'] = $objetoDatos->getfechaEnvio();
                $_SESSION['PasoUno']['cveTipoCarpeta'] = $objetoDatos->getcveTipoCarpeta();
                $_SESSION['PasoUno']['numero'] = $objetoDatos->getnumero();
                $_SESSION['PasoUno']['anio'] = $objetoDatos->getanio();
                $_SESSION['PasoUno']['activo'] = $objetoDatos->getactivo();
                $_SESSION['PasoUno']['carpetaInv'] = $objetoDatos->getcarpetaInv();
                $_SESSION['PasoUno']['nuc'] = $objetoDatos->getnuc();
                $_SESSION['PasoUno']['cveUsuario'] = $objetoDatos->getcveUsuario();
                $_SESSION['PasoUno']['cveAdscripcionSolicita'] = $objetoDatos->getcveAdscripcionSolicita();
                $_SESSION['PasoUno']['mismoJuzgador'] = $objetoDatos->getmismoJuzgador();
                $_SESSION['PasoUno']['cveEstatusSolicitud'] = $objetoDatos->getcveEstatusSolicitud();
                $_SESSION['PasoUno']['observaciones'] = $objetoDatos->getobservaciones();
                $_SESSION['PasoUno']['numImputados'] = $objetoDatos->getnumImputados();
                $_SESSION['PasoUno']['numDelitos'] = $objetoDatos->getnumDelitos();
                $_SESSION['PasoUno']['numOfendidos'] = $objetoDatos->getnumOfendidos();
                $_SESSION['PasoUno']['cveNaturaleza'] = $objetoDatos->getcveNaturaleza();
                $_SESSION['PasoUno']['cveTipoAudiencia'] = $objetoDatos->getcveTipoAudiencia();
                break;
            case '2':
                break;
            case '3':
                break;
            case '4':
                break;
            case '5':
                break;
            case '6':
                break;
        }
        return 1;
    }
}
