<?php 
    spl_autoload_register(function($model) {
        require_once 'App/Models/'. ucfirst($model) . ".php";
    });
?>