<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'security.password_encoder' shared service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Core/Encoder/UserPasswordEncoderInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Core/Encoder/UserPasswordEncoder.php';

return $this->services['security.password_encoder'] = new \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder(($this->privates['security.encoder_factory.generic'] ?? $this->load('getSecurity_EncoderFactory_GenericService.php')));
