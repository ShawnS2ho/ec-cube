<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'eccube.purchase.flow.order' shared service.

include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/PurchaseFlow.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Collection.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/ArrayCollection.php';
include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/ValidatorTrait.php';
include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/ItemHolderValidator.php';
include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/PurchaseProcessor.php';
include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/Processor/StockDiffProcessor.php';
include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/Processor/PointDiffProcessor.php';
include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/ItemHolderPreprocessor.php';
include_once \dirname(__DIR__, 4).'/app/Plugin/Coupon4/Service/PurchaseFlow/Processor/CouponStateProcessor.php';
include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/ItemHolderPostValidator.php';
include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/Processor/PaymentTotalNegativeValidator.php';

$this->services['eccube.purchase.flow.order'] = $instance = new \Eccube\Service\PurchaseFlow\PurchaseFlow();

$a = new \Eccube\Service\PurchaseFlow\Processor\StockDiffProcessor(($this->privates['Eccube\\Repository\\ProductClassRepository'] ?? $this->getProductClassRepositoryService()));
$b = ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService());

$c = new \Eccube\Service\PurchaseFlow\Processor\PointDiffProcessor($b, ($this->privates['Eccube\\Service\\PointHelper'] ?? $this->load('getPointHelperService.php')));
$d = new \Plugin\Coupon4\Service\PurchaseFlow\Processor\CouponStateProcessor($b, ($this->privates['Plugin\\Coupon4\\Service\\CouponService'] ?? $this->load('getCouponServiceService.php')), ($this->privates['Plugin\\Coupon4\\Repository\\CouponRepository'] ?? $this->load('getCouponRepositoryService.php')), ($this->privates['Plugin\\Coupon4\\Repository\\CouponOrderRepository'] ?? $this->load('getCouponOrderRepositoryService.php')));

$instance->setFlowType('order');
$instance->setItemValidators(new \Doctrine\Common\Collections\ArrayCollection());
$instance->setItemHolderValidators(new \Doctrine\Common\Collections\ArrayCollection([0 => $a, 1 => $c]));
$instance->setItemHolderPreprocessors(new \Doctrine\Common\Collections\ArrayCollection([0 => ($this->privates['Eccube\\Service\\PurchaseFlow\\Processor\\TaxProcessor'] ?? $this->load('getTaxProcessorService.php'))]));
$instance->setDiscountProcessors(new \Doctrine\Common\Collections\ArrayCollection([0 => ($this->privates['Eccube\\Service\\PurchaseFlow\\Processor\\PointProcessor'] ?? $this->load('getPointProcessorService.php'))]));
$instance->setItemHolderPostValidators(new \Doctrine\Common\Collections\ArrayCollection([0 => ($this->privates['Eccube\\Service\\PurchaseFlow\\Processor\\AddPointProcessor'] ?? $this->load('getAddPointProcessorService.php')), 1 => ($this->privates['Eccube\\Service\\PurchaseFlow\\Processor\\PaymentTotalLimitValidator'] ?? $this->load('getPaymentTotalLimitValidatorService.php')), 2 => ($this->privates['Eccube\\Service\\PurchaseFlow\\Processor\\PaymentTotalNegativeValidator'] ?? ($this->privates['Eccube\\Service\\PurchaseFlow\\Processor\\PaymentTotalNegativeValidator'] = new \Eccube\Service\PurchaseFlow\Processor\PaymentTotalNegativeValidator()))]));
$instance->setPurchaseProcessors(new \Doctrine\Common\Collections\ArrayCollection([0 => $a, 1 => $c]));
$instance->addItemHolderPreprocessor($d);
$instance->addItemHolderValidator($d);
$instance->addPurchaseProcessor($d);

return $instance;