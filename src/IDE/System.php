<?php

namespace IDE;

/**
 * @author Rodrigo Manara <me@rodrigomanara.co.uk>
 */
Class System extends AbstractBuilder implements InterfaceBuilder {

    public function init() {
        // no recursive search
        $this->depth = true;

        //find all files
        $this->getFiles();

        $build_list = array();
        foreach ($this->path as $path) {

            $build_list[] = $this->getModel($this->getClassName($this->getContent($path)));
        
        }
        
        return $build_list;
    }


}
