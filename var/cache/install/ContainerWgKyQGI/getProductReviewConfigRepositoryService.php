<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Plugin\ProductReview4\Repository\ProductReviewConfigRepository' shared autowired service.

include_once \dirname(__DIR__, 4).'/app/Plugin/ProductReview4/Repository/ProductReviewConfigRepository.php';

return $this->privates['Plugin\\ProductReview4\\Repository\\ProductReviewConfigRepository'] = new \Plugin\ProductReview4\Repository\ProductReviewConfigRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
