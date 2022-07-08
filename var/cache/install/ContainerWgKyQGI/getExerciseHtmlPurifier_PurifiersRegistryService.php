<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'exercise_html_purifier.purifiers_registry' shared service.

include_once \dirname(__DIR__, 4).'/vendor/exercise/htmlpurifier-bundle/src/HTMLPurifiersRegistryInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/exercise/htmlpurifier-bundle/src/HTMLPurifiersRegistry.php';

return $this->privates['exercise_html_purifier.purifiers_registry'] = new \Exercise\HTMLPurifierBundle\HTMLPurifiersRegistry(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'default' => ['privates', 'exercise_html_purifier.default', 'getExerciseHtmlPurifier_DefaultService.php', true],
], [
    'default' => '?',
]));