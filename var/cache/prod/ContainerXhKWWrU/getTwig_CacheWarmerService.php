<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'twig.cache_warmer' shared service.

@trigger_error('The "twig.cache_warmer" service is deprecated since Symfony 4.4 and will be removed in 5.0.', E_USER_DEPRECATED);

return $this->privates['twig.cache_warmer'] = new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheCacheWarmer(($this->privates['.service_locator.o9nGMXB'] ?? $this->load('get_ServiceLocator_O9nGMXBService.php'))->withContext('twig.cache_warmer', $this), ($this->privates['templating.finder'] ?? $this->load('getTemplating_FinderService.php')), [(\dirname(__DIR__, 4).'/app/Plugin/Recommend4/Resource/template') => 'Recommend4', (\dirname(__DIR__, 4).'/app/Plugin/Coupon4/Resource/template') => 'Coupon4', (\dirname(__DIR__, 4).'/app/template/'.$this->getEnv('string:ECCUBE_TEMPLATE_CODE')) => NULL, (\dirname(__DIR__, 4).'/src/Eccube/Resource/template/default') => NULL, (\dirname(__DIR__, 4).'/app/Plugin') => NULL, (\dirname(__DIR__, 4).'/app/template/admin') => 'admin', (\dirname(__DIR__, 4).'/src/Eccube/Resource/template/admin') => 'admin', (\dirname(__DIR__, 4).'/app/template/user_data') => 'user_data', (\dirname(__DIR__, 4).'/src/Eccube/Resource/template/toolbar') => 'toolbar', (\dirname(__DIR__, 4).'/src/Eccube/Resource/template/common') => 'common', (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Email') => 'email', (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Form') => NULL]);
