<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.0E9CRYB' shared service.

return $this->privates['.service_locator.0E9CRYB'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'Payment' => ['privates', '.errored..service_locator.0E9CRYB.Eccube\\Entity\\Payment', NULL, 'Cannot autowire service ".service_locator.0E9CRYB": it references class "Eccube\\Entity\\Payment" but no such service exists.'],
], [
    'Payment' => 'Eccube\\Entity\\Payment',
]);
