<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'League\OAuth2\Server\AuthorizationServer' shared service.

include_once \dirname(__DIR__, 4).'/vendor/league/event/src/EmitterAwareInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/league/event/src/EmitterAwareTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/league/oauth2-server/src/AuthorizationServer.php';
include_once \dirname(__DIR__, 4).'/vendor/league/oauth2-server/src/Repositories/RepositoryInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/league/oauth2-server/src/Repositories/ClientRepositoryInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/trikoder/oauth2-bundle/League/Repository/ClientRepository.php';
include_once \dirname(__DIR__, 4).'/vendor/league/oauth2-server/src/Repositories/ScopeRepositoryInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/trikoder/oauth2-bundle/League/Repository/ScopeRepository.php';
include_once \dirname(__DIR__, 4).'/vendor/trikoder/oauth2-bundle/Manager/ScopeManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/trikoder/oauth2-bundle/Manager/InMemory/ScopeManager.php';
include_once \dirname(__DIR__, 4).'/vendor/trikoder/oauth2-bundle/Model/Scope.php';
include_once \dirname(__DIR__, 4).'/vendor/league/oauth2-server/src/CryptKey.php';
include_once \dirname(__DIR__, 4).'/vendor/league/oauth2-server/src/Grant/GrantTypeInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/league/oauth2-server/src/CryptTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/league/oauth2-server/src/Grant/AbstractGrant.php';
include_once \dirname(__DIR__, 4).'/vendor/league/oauth2-server/src/Grant/RefreshTokenGrant.php';
include_once \dirname(__DIR__, 4).'/vendor/league/oauth2-server/src/Repositories/RefreshTokenRepositoryInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/trikoder/oauth2-bundle/League/Repository/RefreshTokenRepository.php';
include_once \dirname(__DIR__, 4).'/vendor/league/oauth2-server/src/Grant/AbstractAuthorizeGrant.php';
include_once \dirname(__DIR__, 4).'/vendor/league/oauth2-server/src/Grant/AuthCodeGrant.php';
include_once \dirname(__DIR__, 4).'/vendor/league/oauth2-server/src/Repositories/AuthCodeRepositoryInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/trikoder/oauth2-bundle/League/Repository/AuthCodeRepository.php';
include_once \dirname(__DIR__, 4).'/vendor/trikoder/oauth2-bundle/Manager/AuthorizationCodeManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/trikoder/oauth2-bundle/Manager/Doctrine/AuthorizationCodeManager.php';
include_once \dirname(__DIR__, 4).'/vendor/trikoder/oauth2-bundle/Converter/ScopeConverterInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/trikoder/oauth2-bundle/Converter/ScopeConverter.php';

$a = ($this->services['Trikoder\\Bundle\\OAuth2Bundle\\Manager\\ClientManagerInterface'] ?? $this->load('getClientManagerInterfaceService.php'));
$b = new \Trikoder\Bundle\OAuth2Bundle\Manager\InMemory\ScopeManager();
$b->save(new \Trikoder\Bundle\OAuth2Bundle\Model\Scope('read'));
$b->save(new \Trikoder\Bundle\OAuth2Bundle\Model\Scope('write'));
$c = ($this->privates['Trikoder\\Bundle\\OAuth2Bundle\\Converter\\ScopeConverter'] ?? ($this->privates['Trikoder\\Bundle\\OAuth2Bundle\\Converter\\ScopeConverter'] = new \Trikoder\Bundle\OAuth2Bundle\Converter\ScopeConverter()));

$this->privates['League\\OAuth2\\Server\\AuthorizationServer'] = $instance = new \League\OAuth2\Server\AuthorizationServer(new \Trikoder\Bundle\OAuth2Bundle\League\Repository\ClientRepository($a), ($this->privates['Trikoder\\Bundle\\OAuth2Bundle\\League\\Repository\\AccessTokenRepository'] ?? $this->load('getAccessTokenRepositoryService.php')), new \Trikoder\Bundle\OAuth2Bundle\League\Repository\ScopeRepository($b, $a, $c, ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService())), new \League\OAuth2\Server\CryptKey($this->getEnv('ECCUBE_OAUTH2_AUTHORIZATION_SERVER_PRIVATE_KEY'), NULL, false), $this->getEnv('ECCUBE_OAUTH2_ENCRYPTION_KEY'));

$d = new \Trikoder\Bundle\OAuth2Bundle\League\Repository\RefreshTokenRepository(($this->privates['Trikoder\\Bundle\\OAuth2Bundle\\Manager\\Doctrine\\RefreshTokenManager'] ?? $this->load('getRefreshTokenManagerService.php')), ($this->privates['Trikoder\\Bundle\\OAuth2Bundle\\Manager\\Doctrine\\AccessTokenManager'] ?? $this->load('getAccessTokenManagerService.php')));

$e = new \League\OAuth2\Server\Grant\RefreshTokenGrant($d);
$e->setRefreshTokenTTL(new \DateInterval('P1M'));
$f = new \League\OAuth2\Server\Grant\AuthCodeGrant(new \Trikoder\Bundle\OAuth2Bundle\League\Repository\AuthCodeRepository(new \Trikoder\Bundle\OAuth2Bundle\Manager\Doctrine\AuthorizationCodeManager(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService())), $a, $c), $d, new \DateInterval('PT10M'));
$f->setRefreshTokenTTL(new \DateInterval('P1M'));

$instance->enableGrantType($e, new \DateInterval('PT1H'));
$instance->enableGrantType($f, new \DateInterval('PT1H'));

return $instance;
