<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.MpCL68i' shared service.

return $this->privates['.service_locator.MpCL68i'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'Tag' => ['privates', '.errored..service_locator.MpCL68i.Eccube\\Entity\\Tag', NULL, 'Cannot autowire service ".service_locator.MpCL68i": it references class "Eccube\\Entity\\Tag" but no such service exists.'],
], [
    'Tag' => 'Eccube\\Entity\\Tag',
]);
