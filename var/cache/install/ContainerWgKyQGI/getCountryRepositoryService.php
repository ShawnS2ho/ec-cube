<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Eccube\Repository\Master\CountryRepository' shared autowired service.

include_once \dirname(__DIR__, 4).'/src/Eccube/Repository/Master/CountryRepository.php';

return $this->privates['Eccube\\Repository\\Master\\CountryRepository'] = new \Eccube\Repository\Master\CountryRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
