<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.provider.oauth2.api' shared service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Core/Authentication/Provider/AuthenticationProviderInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/trikoder/oauth2-bundle/Security/Authentication/Provider/OAuth2Provider.php';
include_once \dirname(__DIR__, 4).'/vendor/league/oauth2-server/src/ResourceServer.php';
include_once \dirname(__DIR__, 4).'/vendor/league/oauth2-server/src/CryptKey.php';
include_once \dirname(__DIR__, 4).'/vendor/trikoder/oauth2-bundle/Security/Authentication/Token/OAuth2TokenFactory.php';

return $this->privates['security.authentication.provider.oauth2.api'] = new \Trikoder\Bundle\OAuth2Bundle\Security\Authentication\Provider\OAuth2Provider(($this->privates['Eccube\\Security\\Core\\User\\MemberProvider'] ?? $this->load('getMemberProviderService.php')), new \League\OAuth2\Server\ResourceServer(($this->privates['Trikoder\\Bundle\\OAuth2Bundle\\League\\Repository\\AccessTokenRepository'] ?? $this->load('getAccessTokenRepositoryService.php')), new \League\OAuth2\Server\CryptKey($this->getEnv('ECCUBE_OAUTH2_RESOURCE_SERVER_PUBLIC_KEY'), NULL, false)), ($this->privates['Trikoder\\Bundle\\OAuth2Bundle\\Security\\Authentication\\Token\\OAuth2TokenFactory'] ?? ($this->privates['Trikoder\\Bundle\\OAuth2Bundle\\Security\\Authentication\\Token\\OAuth2TokenFactory'] = new \Trikoder\Bundle\OAuth2Bundle\Security\Authentication\Token\OAuth2TokenFactory('ROLE_OAUTH2_'))), 'api');
