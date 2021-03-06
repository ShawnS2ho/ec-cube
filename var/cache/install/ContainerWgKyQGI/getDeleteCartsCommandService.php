<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Eccube\Command\DeleteCartsCommand' shared autowired service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
include_once \dirname(__DIR__, 4).'/src/Eccube/Command/DeleteCartsCommand.php';

$this->privates['Eccube\\Command\\DeleteCartsCommand'] = $instance = new \Eccube\Command\DeleteCartsCommand($this, ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->privates['Eccube\\Repository\\CartRepository'] ?? $this->getCartRepositoryService()));

$instance->setName('eccube:delete-carts');

return $instance;
