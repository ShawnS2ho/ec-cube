<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Plugin\Api\Repository\WebHookRepository' shared autowired service.

include_once \dirname(__DIR__, 4).'/app/Plugin/Api/Repository/WebHookRepository.php';

return $this->privates['Plugin\\Api\\Repository\\WebHookRepository'] = new \Plugin\Api\Repository\WebHookRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
