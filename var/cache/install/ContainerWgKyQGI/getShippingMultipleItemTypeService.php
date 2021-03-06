<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Eccube\Form\Type\ShippingMultipleItemType' shared autowired service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
include_once \dirname(__DIR__, 4).'/src/Eccube/Form/Type/ShippingMultipleItemType.php';

return $this->privates['Eccube\\Form\\Type\\ShippingMultipleItemType'] = new \Eccube\Form\Type\ShippingMultipleItemType(($this->services['Eccube\\Common\\EccubeConfig'] ?? ($this->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($this))), ($this->services['session'] ?? $this->getSessionService()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['Eccube\\Repository\\Master\\PrefRepository'] ?? $this->load('getPrefRepositoryService.php')), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->privates['Eccube\\Service\\OrderHelper'] ?? $this->load('getOrderHelperService.php')));
