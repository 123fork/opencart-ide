<?php

namespace IDE;
/**
 * @author Rodrigo Manara <me@rodrigomanara.co.uk>
 */

Class Model extends AbstractBuilder implements InterfaceBuilder{

    public function init() {

        //find all files
        $this->getFiles();

        $build_list = array();
        foreach ($this->path as $path) {
<<<<<<< HEAD
             
          $build_list[] = $this->getModel($this->getClassName($this->getContent($path)) , $path);
            
        } 
=======
            $build_list[] = $this->getModel($this->getClassName($this->getContent($path)) , $path);
        }
        
>>>>>>> 11d26e60aece5a1c7f1580036bc52072f63a841b
        return $build_list;
    }

}
