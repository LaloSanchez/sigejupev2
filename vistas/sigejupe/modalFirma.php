<div class="modal fade" id="firmaElectronicaModal" role="dialog">
    <div style="" class="firmtobtns" >                                                                        <!--<input id="btnPdfToSign" name="btnPdfToSign" type="button" class="frmBoton" style="display: none;" value="Vo.Bo. Firma" onclick="javascript:firma.doPdfSign()">-->
        <input type="hidden" id="hddDigestiones" />
        <input type="hidden" id="hddUrlPdf" value=""/>
        <form id="frmGeneraJar" method="POST" action="controladores/sigejupe/firmaelectronicahtml5/FirmaElectronicaController.php">
            <input type="hidden" id="hddIdUsuario" value="<?php echo $_SESSION["cveUsuarioSistema"]; ?>" />
            <input type="hidden" value="GeneracionJarFirma" id="action" name="accion">
            <input type="hidden" value="" id="codigo" name="codigo">
        </form>
        <input id="btnSign" name="btnSign" type="button" class="frmBoton" style="display: none;" value="Firmar Documento" onclick="javascript:firma.doSign()">
    </div>
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header panel-heading" style="padding:25px 40px;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4  class="panel-title" id="h5tituloFirmaElectronica">Proporciona los datos de Firma Electr&oacute;nica</h4>
            </div>
            <div class="modal-body"  style="padding:25px 20px;">
                <div class="row">
                    <div class="col-md-12 txtresponseModal" ></div>
                    <div class="col-md-12">
                        <div class="col-md-12" id="divKey" style="padding-left: 3px;">
                            <h6><span class="label label-primary">SELECCIONA ARCHIVO .KEY</span></h6>
                            <input class="btn btn-default btn-sm cert CertificadosKey" id="key" name="CertificadosKey" type="file" accept=".key">
                        </div>
                        <div class="col-md-12" id="divCer" style="padding-left: 3px;">
                            <h6><span class="label label-primary">SELECCIONA ARCHIVO .CER</span></h6>
                            <input class="btn btn-default btn-sm cert Certificados" id="cer" name="Certificados" type="file" accept=".cer">
                        </div>
                        <div class="col-md-12" style="padding-left: 3px;">
                            <h6><span class="label label-primary">CONTRASE&Ntilde;A</span></h6>
                            <input class="btn btn-default form-control btn-sm cert Certificados" id="pass_firma" name="FirmaPass" type="password">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer" >
                <span id="spanMnjFirma" style="display: none"></span>
                <button class="btn btn-primary" id="btnEnviar" style="display: none;" onclick="enviarAPeritos();">Enviar a Peritos</button>
                <button class="btn btn-primary" id="botonUrlPdf" style="display: none;" onclick="javascript:firma.descargarUrlPDF();
                        return false;" >Ver Documento</button>
                <button class="btn btn-success" id="botonFirmar" onclick="javascript:firma.verificarFirmaLogin();
                        return false;" >Firmar Documento</button>
            </div>
        </div>
    </div>
</div>