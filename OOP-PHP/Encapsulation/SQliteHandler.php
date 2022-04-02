<?php

require_once 'FileSystem.php';

class SQliteHandler 
{
    //properties

    protected FileSystem $filesystem;

    //method 
    
    public function load($file)
    {
        return $this->filesystem->read($file);
    }


}