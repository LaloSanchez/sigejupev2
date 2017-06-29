<?php

ini_set('max_execution_time', 600); //300 seconds = 5 minutes
include_once(dirname(__FILE__) . "/MigracionTocasFacade.Class.php");
$MigracionTocasFacade = new MigracionTocasFacade();
$MigracionTocasFacade->getMigrarTocas();