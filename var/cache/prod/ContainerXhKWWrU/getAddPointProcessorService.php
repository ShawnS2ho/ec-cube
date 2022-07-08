<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Eccube\Service\PurchaseFlow\Processor\AddPointProcessor' shared autowired service.

include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/ValidatorTrait.php';
include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/ItemHolderPostValidator.php';
include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/Processor/AddPointProcessor.php';

return $this->privates['Eccube\\Service\\PurchaseFlow\\Processor\\AddPointProcessor'] = new \Eccube\Service\PurchaseFlow\Processor\AddPointProcessor(($this->privates['Eccube\\Repository\\BaseInfoRepository'] ?? $this->getBaseInfoRepositoryService()));