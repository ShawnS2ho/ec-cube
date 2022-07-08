<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Eccube\Service\Payment\Method\Cash' shared autowired service.

include_once \dirname(__DIR__, 4).'/src/Eccube/Service/Payment/PaymentMethodInterface.php';
include_once \dirname(__DIR__, 4).'/src/Eccube/Service/Payment/Method/Cash.php';

return $this->services['Eccube\\Service\\Payment\\Method\\Cash'] = new \Eccube\Service\Payment\Method\Cash(($this->services['eccube.purchase.flow.shopping'] ?? $this->load('getEccube_Purchase_Flow_ShoppingService.php')));
