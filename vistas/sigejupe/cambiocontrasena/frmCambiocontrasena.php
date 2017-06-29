<?php
if (!isset($_SESSION)) {
   session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
   ?>
   <style type="text/css">

      .alert{
         display: none;
      }

      #divHideForm{
         display: none;
         position: absolute;
         width: 100%;
         height: 100vh;
         opacity: .5;
         z-index: 99999;
         background: #427468;
      }

      #divMenssage{                
         width: 100%;
         height: 40px;
         padding-top: 10px;
         padding-bottom: 10px;
         text-align: center;
         margin-top: 40vh;
         margin-bottom: auto;
         color: #284740;
         background: #FFFFFF;
         text-transform: uppercase;

      }

      #divImgloading{                  
         background: #FFFFFF url(img/cargando_1.gif) no-repeat;
         background-position: center;
         width: 100%;
         height: 70px;
         margin-left: auto;
         margin-right: auto;
      }

      .panel panel-default{
         background: #427468;
         color: #ebf3f1;
      }

      .panel-heading{
         background: #427468;
         color: #ebf3f1;
      }

      .panel-group .panel-heading{
         background: #427468;
         color: #ebf3f1;
      }
      .panel-default > .panel-heading{
         background: #427468;        
         color: #ebf3f1;
      }
      .optionprom{
         height: 10px;
      }

      .required{
         color: red;
      }
      .needed:after {
         color:darkred;
         content: " (*)";
      }



   </style>

   <div class = "panel panel-default" id="">
      <div class="panel-heading">
         <h5 class="panel-title">                                                            
            Cambio de contrase&ntilde;a
         </h5>
      </div>
      <div class="panel-body">

         <div id="divFormulario" class="form-horizontal">
            <div id="divCampos">
               <div class="form-group " style="">
                  <label class="control-label col-md-3 needed">Usuario:</label>
                  <div class="col-md-5">
                     <input type="text" id="txtNombreUsuario" placeholder="Nombre del usuario" class="form-control" value=""/>
                  </div>
               </div>
               <div class="form-group " style="">
                  <label class="control-label col-md-3 needed">Constrase&ntilde;a anterior:</label>
                  <div class="col-md-5">
                     <input type="text" id="txtPwdAnterior" placeholder="Escriba la contrase&ntilde;a" class="form-control" value=""/>
                  </div>
               </div>
               <div class="form-group " style="">
                  <label class="control-label col-md-3 needed">Constrase&ntilde;a:</label>
                  <div class="col-md-5">
                     <input type="text" id="txtPwdNueva1" placeholder="Escriba la contrase&ntilde;a" class="form-control" value=""/>
                  </div>
               </div>
               <div class="form-group " style="">
                  <label class="control-label col-md-3 needed">Repetir contrase&ntilde;a:</label>
                  <div class="col-md-5">
                     <input type="text" id="txtPwdNueva2" placeholder="Vuelva a escribir la contrase&ntilde;a" class="form-control" value=""/>
                  </div>
               </div>
               <div class="form-group">
                  <div class="col-md-offset-3 col-md-9">
                     <div class="col-md-2 botonesAdaptar">
                        <input type="submit" class="btn btn-primary btn-adaptar" id="inputGuardar" value="Guardar" onclick="actualizarUsuario();" >                                                                
                     </div>
                  </div>
               </div>
            </div>
            <div class="form-group" >
               <div id="divAlertWarningForm" class="alert alert-warning alert-dismissable" style="display:none;">                    
                  <strong>Advertencia!</strong> Mensaje
               </div>
               <div id="divAlertSuccesForm" class="alert alert-success alert-dismissable" style="display:none;">

                  <strong>Correcto!</strong> Mensaje
               </div>
               <div id="divAlertDagerForm" class="alert alert-danger alert-dismissable" style="display:none;">

                  <strong>Error!</strong> Mensaje
               </div>
               <div id="divAlertInfoForm" class="alert alert-info alert-dismissable" style="display:none;">

                  <strong>Informaci&oacute;n!</strong> Mensaje
               </div>
            </div>

         </div>
      </div>
   </div>
   <script>
      var ua;
      getPwdAnterior = function () {
         var regreso = "";
         $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/session/session.php",
            async: false,
            dataType: "json",
            data: {
               pwd: $("#txtPwdAnterior").val()
            },
            beforeSend: function (datos) {
            },
            success: function (datos) {
               regreso = datos.pwd;
            },
            error: function (objeto, quepaso, otroobj) {
               regreso = false;
            }
         });
         return regreso;
      };
      usuarioActual = function () {
         var usuarioActual = "";
         $.get("../archivos/" + <?php echo $_SESSION['cveUsuarioSistema'] ?> + ".json",
                 function (response) {
                    console.log(response.login);
                    ua = response.login;
                 }
         );
      };
      actualizarUsuario = function () {
         var usuarioActual = ua;

         $(".required").remove();
         if (usuarioActual == $("#txtNombreUsuario").val()) {
            var rs = null;
            $.get("../archivos/" + <?php echo $_SESSION['cveUsuarioSistema'] ?> + ".json",
                    function (response) {
                       if ($("#txtNombreUsuario").val() != response.login) {
                          console.log("no falla");
                       } else {
                          console.log(response.password);
                          console.log(getPwdAnterior());
                          if (response.password == getPwdAnterior()) {
                             console.log("true");
                             rs = true;
                          } else {
                             console.log("false");
                             rs = false;
                          }
                       }

                    }
            ).done(function () {
               console.log("RS");
               console.log(rs);
               if (rs) {
                  console.log("ACTUALIZA OK ");
                  $(".required").remove();
                  var pwd1 = $("#txtPwdNueva1").val();
                  var pwd2 = $("#txtPwdNueva2").val();
                  if ((pwd1 != pwd2) || pwd1 == "" || pwd2 == "") {
                     $('#txtPwdNueva2').focus();
                     $('#txtPwdNueva2').parent().append("<br class='required'><label class='Arial13Rojo required'>Las contrase&ntilde;as no coinciden</label>");
                  } else {
                     var usuario = <?php echo $_SESSION['cveUsuarioSistema']; ?>;
                     var pwd = $("#txtPwdNueva1").val();
                     /**/
                     bootbox.dialog({
                        message: "&iquest;Esta seguro de cambiar la contrase&ntilde;a?",
                        buttons: {
                           danger: {
                              label: "Aceptar",
                              className: "btn-primary",
                              callback: function () {
                                 $.ajax({
                                    type: "POST",
                                    url: "../fachadas/gestion/usuarios/UsuariosFacade.Class.php",
                                    async: false,
                                    dataType: "json",
                                    data: {
                                       cveUsuario: usuario,
                                       pwd: pwd
                                    },
                                    beforeSend: function (datos) {
                                    },
                                    success: function (datos) {
                                       if (datos.status == "ok") {
                                          $("#divAlertSuccesForm").html('Se aplicaron corractamente los cambios.');
                                          $("#divAlertSuccesForm").show("");
                                          setTimeAlert("divAlertSuccesForm");
                                       } else if (datos.status == "error") {
                                          $("#divAlertInfoForm").html('No se aplicaron los cambios.');
                                          $("#divAlertInfoForm").show("");
                                          setTimeAlert("divAlertInfoForm");
                                       }
                                    },
                                    error: function (objeto, quepaso, otroobj) {

                                    }
                                 });
                              }
                           },
                           success: {
                              label: "Cancelar",
                              className: "btn-primary",
                              callback: function () {

                              }
                           }
                        }
                     });
                     /**/
                  }
               } else {
                  console.log("ACTUALIZA ERROR ");
                  $('#txtPwdAnterior').focus();
                  $('#txtPwdAnterior').parent().append("<br class='required'><label class='Arial13Rojo required'>La constrase&ntilde;a anterior no es correcta !</label>");
               }
            });
         } else {
            $('#txtNombreUsuario').focus();
            $('#txtNombreUsuario').parent().append("<br class='required'><label class='Arial13Rojo required'>El nombre del usuario no es correcto</label>");

         }
      };
      eliminaRequired = function () {
         $(".required").remove();
      };
      (function () {
         usuarioActual();
   //      usuarioActual();
      })();
   </script>
<?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>