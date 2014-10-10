<?php

class Champion_Magerror_Model_Observer
{
    function registerPhpError($observer)
    {
        require_once(dirname(__FILE__) . '/../../../../../../../../../joseph-lenton/php-error/src/php_error.php');
        \php_error\reportErrors();
    }
}