<?php

$moduleName = basename(dirname(__DIR__, 1));


Route::namespace(buildControllerNamespace($moduleName))->group(function() use ($moduleName){

    Route::namespace('BackEnd')->prefix(buildPrefix($moduleName))->group(function(){
        
        require 'backend.php';
    });
    
    Route::namespace('FrontEnd')->prefix(buildPrefix($moduleName, 'frontend'))->group(function() use ($moduleName){
        
        require 'frontend.php';
    });
});

