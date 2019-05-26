<?php

function myLoad($name) {

    $namespace = "YYDH";
    $baseDir = "App";

    //$name = YYDH\Human
    if(strncmp($namespace, $name, strlen($namespace)) == 0) {
        $realName = substr($name, strlen($namespace));

        require $baseDir . str_replace("\\", "/", $realName) . ".php";
        // require $baseDir . $realName;
    }

}

function GondrLoad($name) {

    $namespace = "Gondr";
    $baseDir = "Gondr";

    //$name = YYDH\Human
    if(strncmp($namespace, $name, strlen($namespace)) == 0) {
        $realName = substr($name, strlen($namespace));

        require $baseDir . str_replace("\\", "/", $realName) . ".php";
        // require $baseDir . $realName;
    }

}

spl_autoload_register("myLoad");
spl_autoload_register("GondrLoad");