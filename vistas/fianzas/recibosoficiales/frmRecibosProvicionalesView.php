<?php
session_start();
?>
<style>
    #ifrm_provisional {
        position:relative;
        padding-bottom: 0;
        height: 0;
        overflow: 0;
        -webkit-overflow-scrolling: touch;
    }
    #ifrm_provisional iframe {
        position: absolute;
        top : 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
</style>
<div id="ifrm_provisional" class="bg-white" >
    <iframe id="frmProvisional" onload="iframeLoaded()" frameborder="0" src="http://10.22.165.204/fianzas_prod/vista/sigejupe/vista/recibosoficiales/frmRecibosProvisionales.php" height="100%" width="100%" >t</iframe>
<!--    <iframe id="frmProvisional" onload="iframeLoaded()" frameborder="0" src="http://localhost/fianzasSVN/vista/sigejupe/vista/recibosoficiales/frmRecibosProvisionales.php" height="100%" width="100%" >t</iframe>-->
</div>
<script type="text/javascript">
    function iframeLoaded() {
        var iFrameID = document.getElementById('frmProvisional');
        if (iFrameID) {
            iFrameID.height = "";
            $("#ifrm_provisional").css("height","0px" );
            var height = iFrameID.contentWindow.document.getElementById("first_section").scrollHeight;
            iFrameID.height = iFrameID.contentWindow.document.getElementById("first_section").scrollHeight + "px";
            $("#ifrm_provisional").css("height",(height + 180) +"px" );
        }
    }
    function posicion(scroll){
        $('html, body').animate({scrollTop: scroll}, 800);
    }
</script>   