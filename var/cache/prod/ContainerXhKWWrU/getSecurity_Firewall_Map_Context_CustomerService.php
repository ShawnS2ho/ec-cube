<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.firewall.map.context.customer' shared service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallContext.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Http/Util/TargetPathTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Http/Firewall/ExceptionListener.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Http/EntryPoint/AuthenticationEntryPointInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Http/EntryPoint/FormAuthenticationEntryPoint.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Http/Firewall/AbstractListener.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Http/Firewall/ListenerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Http/Firewall/LegacyListenerTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Http/Firewall/LogoutListener.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Http/Logout/LogoutSuccessHandlerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Http/Logout/DefaultLogoutSuccessHandler.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallConfig.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Http/Logout/LogoutHandlerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security/Http/Logout/SessionLogoutHandler.php';

$a = ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService());
$b = ($this->privates['security.http_utils'] ?? $this->load('getSecurity_HttpUtilsService.php'));
$c = new \Symfony\Component\Security\Http\Firewall\LogoutListener($a, $b, new \Symfony\Component\Security\Http\Logout\DefaultLogoutSuccessHandler($b, 'homepage'), ['csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'logout', 'logout_path' => 'logout']);
$c->addHandler(($this->privates['security.logout.handler.csrf_token_clearing'] ?? $this->load('getSecurity_Logout_Handler_CsrfTokenClearingService.php')));
$c->addHandler(($this->privates['security.logout.handler.session'] ?? ($this->privates['security.logout.handler.session'] = new \Symfony\Component\Security\Http\Logout\SessionLogoutHandler())));
$c->addHandler(($this->privates['security.authentication.rememberme.services.simplehash.customer'] ?? $this->load('getSecurity_Authentication_Rememberme_Services_Simplehash_CustomerService.php')));

return $this->privates['security.firewall.map.context.customer'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () {
    yield 0 => ($this->privates['security.channel_listener'] ?? $this->load('getSecurity_ChannelListenerService.php'));
    yield 1 => ($this->privates['security.context_listener.1'] ?? $this->load('getSecurity_ContextListener_1Service.php'));
    yield 2 => ($this->privates['security.authentication.listener.form.customer'] ?? $this->load('getSecurity_Authentication_Listener_Form_CustomerService.php'));
    yield 3 => ($this->privates['security.authentication.listener.rememberme.customer'] ?? $this->load('getSecurity_Authentication_Listener_Rememberme_CustomerService.php'));
    yield 4 => ($this->privates['security.authentication.listener.anonymous.customer'] ?? $this->load('getSecurity_Authentication_Listener_Anonymous_CustomerService.php'));
    yield 5 => ($this->privates['security.access_listener'] ?? $this->load('getSecurity_AccessListenerService.php'));
}, 6), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($a, ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))), $b, 'customer', new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint(($this->services['http_kernel'] ?? $this->getHttpKernelService()), $b, 'mypage_login', false), NULL, NULL, ($this->privates['monolog.logger.security'] ?? $this->load('getMonolog_Logger_SecurityService.php')), false), $c, new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('customer', 'security.user_checker', '.security.request_matcher.3UEFixr', true, false, 'Eccube\\Security\\Core\\User\\CustomerProvider', 'customer', 'security.authentication.form_entry_point.customer', NULL, NULL, [0 => 'form_login', 1 => 'remember_me', 2 => 'anonymous'], NULL));
