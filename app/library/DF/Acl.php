<?php
/**
 * Access Control List (ACL) manager
 */

namespace DF;

use \Entity\User;

class Acl
{
    public static function getInstance()
    {
		return \Zend_Registry::get('acl');
    }
    
    public static function __callStatic($name, $arguments)
    {
		$instance = self::getInstance();
		return call_user_func_array(array($instance, $name), $arguments);
    }
}