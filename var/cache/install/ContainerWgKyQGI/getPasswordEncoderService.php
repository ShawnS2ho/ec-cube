<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Eccube\Security\Core\Encoder\PasswordEncoder' shared autowired service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Core/Encoder/PasswordEncoderInterface.php';
include_once \dirname(__DIR__, 4).'/src/Eccube/Security/Core/Encoder/PasswordEncoder.php';

return $this->privates['Eccube\\Security\\Core\\Encoder\\PasswordEncoder'] = new \Eccube\Security\Core\Encoder\PasswordEncoder(($this->services['Eccube\\Common\\EccubeConfig'] ?? ($this->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($this))));
