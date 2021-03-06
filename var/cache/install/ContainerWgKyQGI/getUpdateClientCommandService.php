<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Trikoder\Bundle\OAuth2Bundle\Command\UpdateClientCommand' shared service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
include_once \dirname(__DIR__, 4).'/vendor/trikoder/oauth2-bundle/Command/UpdateClientCommand.php';

$this->privates['Trikoder\\Bundle\\OAuth2Bundle\\Command\\UpdateClientCommand'] = $instance = new \Trikoder\Bundle\OAuth2Bundle\Command\UpdateClientCommand(($this->services['Trikoder\\Bundle\\OAuth2Bundle\\Manager\\ClientManagerInterface'] ?? $this->load('getClientManagerInterfaceService.php')));

$instance->setName('trikoder:oauth2:update-client');

return $instance;
