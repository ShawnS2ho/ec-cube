<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Eccube\Service\OrderStateMachine' shared autowired service.

include_once \dirname(__DIR__, 4).'/src/Eccube/Service/OrderStateMachine.php';

return $this->privates['Eccube\\Service\\OrderStateMachine'] = new \Eccube\Service\OrderStateMachine(($this->services['state_machine.order'] ?? $this->getStateMachine_OrderService()), ($this->privates['Eccube\\Repository\\Master\\OrderStatusRepository'] ?? $this->load('getOrderStatusRepositoryService.php')), ($this->privates['Eccube\\Service\\PurchaseFlow\\Processor\\PointProcessor'] ?? $this->load('getPointProcessorService.php')), ($this->privates['Eccube\\Service\\PurchaseFlow\\Processor\\StockReduceProcessor'] ?? $this->load('getStockReduceProcessorService.php')));