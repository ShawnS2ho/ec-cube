<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.vXG5A3n' shared service.

return $this->privates['.service_locator.vXG5A3n'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'Member' => ['privates', '.errored..service_locator.vXG5A3n.Eccube\\Entity\\Member', NULL, 'Cannot autowire service ".service_locator.vXG5A3n": it references class "Eccube\\Entity\\Member" but no such service exists.'],
], [
    'Member' => 'Eccube\\Entity\\Member',
]);
