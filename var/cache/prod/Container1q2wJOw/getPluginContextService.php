<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Eccube\Service\PluginContext' shared autowired service.

include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PluginContext.php';

return $this->privates['Eccube\\Service\\PluginContext'] = new \Eccube\Service\PluginContext(($this->services['Eccube\\Common\\EccubeConfig'] ?? ($this->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($this))));
