<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Trikoder\Bundle\OAuth2Bundle\Manager\ClientManagerInterface' shared service.

include_once \dirname(__DIR__, 4).'/vendor/trikoder/oauth2-bundle/Manager/ClientManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/trikoder/oauth2-bundle/Manager/Doctrine/ClientManager.php';

return $this->services['Trikoder\\Bundle\\OAuth2Bundle\\Manager\\ClientManagerInterface'] = new \Trikoder\Bundle\OAuth2Bundle\Manager\Doctrine\ClientManager(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
