<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Plugin\Coupon4\Event' shared autowired service.

include_once \dirname(__DIR__, 4).'/app/Plugin/Coupon4/Event.php';

return $this->privates['Plugin\\Coupon4\\Event'] = new \Plugin\Coupon4\Event(($this->privates['Plugin\\Coupon4\\Repository\\CouponOrderRepository'] ?? $this->load('getCouponOrderRepositoryService.php')), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->privates['Plugin\\Coupon4\\Repository\\CouponRepository'] ?? $this->load('getCouponRepositoryService.php')), ($this->privates['Eccube\\Repository\\OrderRepository'] ?? $this->getOrderRepositoryService()), ($this->services['twig'] ?? $this->getTwigService()));