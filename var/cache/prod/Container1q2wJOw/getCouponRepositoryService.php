<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Plugin\Coupon4\Repository\CouponRepository' shared autowired service.

include_once \dirname(__DIR__, 4).'/app/Plugin/Coupon4/Repository/CouponRepository.php';

return $this->privates['Plugin\\Coupon4\\Repository\\CouponRepository'] = new \Plugin\Coupon4\Repository\CouponRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
