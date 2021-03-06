<?php

 

namespace IDE;


use IDE\Model;
use IDE\System;
use IDE\Writer;
 

/**
 * Description of Installer
 *
 * @author Rodrigo Manara <me@rodrigomanara.co.uk>
 */
class Installer {
    
    public static function Init( ) {
        
        
        preg_match('/(.*?)upload/u', __DIR__, $matches);

        if(isset($matches[1])){
            $dir = $matches[1];
        }else{
            $dir = __DIR__."/../../../../../../../../";
        }
        
        $model = new Model();
 
        //->setPath($dir."upload/admin/model")
        $result_model = $model
 
                ->setPath($dir."upload/catalog/model")
                ->init();

        $engine = new System();
        $result_negine = $engine->setPath($dir."upload/system/library")
                ->init();

        $default = array(
            array('method' => 'Loader', 'type' => '$load'),
        );
        $merge = array_merge($result_model, $result_negine, $default);


        new Writer($merge, $dir."upload/system/engine/controller.php");
    }
}
