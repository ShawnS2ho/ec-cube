<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sensio_framework_extra.psr7.argument_value_resolver.server_request' shared service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/Request/ArgumentValueResolver/Psr7ServerRequestResolver.php';

return $this->privates['sensio_framework_extra.psr7.argument_value_resolver.server_request'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentValueResolver\Psr7ServerRequestResolver(($this->privates['sensio_framework_extra.psr7.http_message_factory'] ?? $this->load('getSensioFrameworkExtra_Psr7_HttpMessageFactoryService.php')));
