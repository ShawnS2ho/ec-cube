<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Eccube\Repository\DeliveryTimeRepository' shared autowired service.

include_once \dirname(__DIR__, 4).'/src/Eccube/Repository/DeliveryTimeRepository.php';

return $this->privates['Eccube\\Repository\\DeliveryTimeRepository'] = new \Eccube\Repository\DeliveryTimeRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
