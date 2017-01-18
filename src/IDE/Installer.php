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
        
        
        $dir = __DIR__."/../../../../../";
        
        $model = new Model();
<<<<<<< HEAD
        //->setPath($dir."upload/admin/model")
        $result_model = $model
=======

        $result_model = $model->setPath($dir."upload/admin/model")
>>>>>>> 11d26e60aece5a1c7f1580036bc52072f63a841b
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
