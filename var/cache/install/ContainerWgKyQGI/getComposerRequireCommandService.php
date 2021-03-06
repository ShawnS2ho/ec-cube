<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Eccube\Command\ComposerRequireCommand' shared autowired service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
include_once \dirname(__DIR__, 4).'/src/Eccube/Command/ComposerRequireCommand.php';

$this->privates['Eccube\\Command\\ComposerRequireCommand'] = $instance = new \Eccube\Command\ComposerRequireCommand(($this->services['Eccube\\Service\\Composer\\ComposerApiService'] ?? $this->load('getComposerApiServiceService.php')));

$instance->setName('eccube:composer:require');

return $instance;
