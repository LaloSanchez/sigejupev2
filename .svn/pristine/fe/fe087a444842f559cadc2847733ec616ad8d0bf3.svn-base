<?php
include_once(dirname(__FILE__) . "/configuracion.php");



$mysqli = new mysqli(hostOrigen, userOrigen, passOrigen, databaseOrigen, portOrigen);
if ($mysqli->connect_error) {
    die("Error en la conexion : " . $mysqli->connect_errno .
            "-" . $mysqli->connect_error);
    exit(0);
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title><?php echo appName; ?></title>

        <!-- Bootstrap Core CSS -->
        <link href="components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

        <!-- Timeline CSS -->
        <!--<link href="dist/css/timeline.css" rel="stylesheet">-->

        <!-- Custom CSS -->
        <link href="dist/css/sb-admin-2.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="components/morrisjs/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <script language="javascript">
        opcion = function (div, ruta) {
            $.post(ruta, {}, function (htmlexterno) {
                $("#" + div).html(htmlexterno);
            });
        }
    </script>

    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
<!--                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>-->
                    <a class="navbar-brand" href="migracion.php"><img src="img/PJ-Leyenda-1.png" width="200" height="50"/></a>
                </div>


                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li>
                                <a href="#"><i class="fa fa-archive fa-fw"></i> Pesta&ntilde;as<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <?php
                                    echo "<li><a href=\"#noir\" onclick=\"opcion('divContent','carpetas.php')\">Causas y auxiliares</a></li>";
                                    echo "<li><a href=\"#noir\" onclick=\"\">Exhortos</a></li>";
                                    echo "<li><a href=\"#noir\" onclick=\"\">Amparos</a></li>";
                                    echo "<li><a href=\"#noir\" onclick=\"\">Promociones</a></li>";
                                    echo "<li><a href=\"#noir\" onclick=\"\">Acuerdos</a></li>";
                                    echo "<li><a href=\"#noir\" onclick=\"\">Exhortos generados</a></li>";
                                    ?>
                                </ul>
                                <!--/.nav-second-level--> 
                            </li>

                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>

            <div id="page-wrapper">
                <div class="row" id="divContent">

                </div>
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="components/jquery/dist/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="components/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="components/metisMenu/dist/metisMenu.min.js"></script>

        <!-- Morris Charts JavaScript -->
        <!--<script src="components/raphael/raphael-min.js"></script>-->
        <!--<script src="components/morrisjs/morris.min.js"></script>-->
        <!--<script src="js/morris-data.js"></script>-->

        <!-- Custom Theme JavaScript -->
        <script src="dist/js/sb-admin-2.js"></script>

    </body>

</html>