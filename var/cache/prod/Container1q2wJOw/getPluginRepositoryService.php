<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Eccube\Repository\PluginRepository' shared autowired service.

if ($lazyLoad) {
    return $this->services['Eccube\\Repository\\PluginRepository'] = $this->createProxy('PluginRepository_c4546a6', function () {
        return \PluginRepository_c4546a6::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
            $wrappedInstance = $this->load('getPluginRepositoryService.php', false);

            $proxy->setProxyInitializer(null);

            return true;
        });
    });
}

include_once \dirname(__DIR__, 4).'/src/Eccube/Repository/PluginRepository.php';

return new \Eccube\Repository\PluginRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
