<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.XTXzpkB' shared service.

return $this->privates['.service_locator.XTXzpkB'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'orderPdfService' => ['privates', 'Eccube\\Service\\OrderPdfService', 'getOrderPdfServiceService.php', true],
], [
    'orderPdfService' => 'Eccube\\Service\\OrderPdfService',
]);
