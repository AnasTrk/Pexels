<?php
    spl_autoload_register('Loader');
    function Loader($comName)
    {
        $path='components/';
        $extension='.comp.php';
        $fullPath=$path.$comName.$extension;
       
        include_once $fullPath;
    }
?>