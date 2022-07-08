<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.translation_debug' shared service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/TranslationDebugCommand.php';

$this->privates['console.command.translation_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\TranslationDebugCommand(($this->services['translator'] ?? $this->getTranslatorService()), ($this->privates['translation.reader'] ?? $this->load('getTranslation_ReaderService.php')), ($this->privates['translation.extractor'] ?? $this->load('getTranslation_ExtractorService.php')), (\dirname(__DIR__, 4).'/translations'), (\dirname(__DIR__, 4).'/templates'), [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security/Core/Resources/translations'), 3 => (\dirname(__DIR__, 4).'/app/Plugin/Recommend4/Resource/locale'), 4 => (\dirname(__DIR__, 4).'/src/Eccube/Resource/locale/'), 5 => (\dirname(__DIR__, 4).'/app/Customize/Resource/locale/')], [0 => (\dirname(__DIR__, 4).'/app/Plugin/Recommend4/Resource/template'), 1 => (\dirname(__DIR__, 4).'/app/template/'.$this->getEnv('string:ECCUBE_TEMPLATE_CODE')), 2 => (\dirname(__DIR__, 4).'/src/Eccube/Resource/template/default'), 3 => (\dirname(__DIR__, 4).'/app/Plugin'), 4 => (\dirname(__DIR__, 4).'/app/template/admin'), 5 => (\dirname(__DIR__, 4).'/src/Eccube/Resource/template/admin'), 6 => (\dirname(__DIR__, 4).'/app/template/user_data'), 7 => (\dirname(__DIR__, 4).'/src/Eccube/Resource/template/toolbar'), 8 => (\dirname(__DIR__, 4).'/src/Eccube/Resource/template/common'), 9 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Email'), 10 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Form'), 11 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/AbstractController.php'), 12 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/AbstractShoppingController.php'), 13 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/AbstractCsvImportController.php'), 14 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/AdminController.php'), 15 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Content/BlockController.php'), 16 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Content/CacheController.php'), 17 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Content/CssController.php'), 18 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Content/FileController.php'), 19 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Content/JsController.php'), 20 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Content/LayoutController.php'), 21 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Content/MaintenanceController.php'), 22 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Content/NewsController.php'), 23 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Content/PageController.php'), 24 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Customer/CustomerController.php'), 25 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Customer/CustomerDeliveryEditController.php'), 26 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Customer/CustomerEditController.php'), 27 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Order/CsvImportController.php'), 28 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Order/EditController.php'), 29 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Order/MailController.php'), 30 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Order/OrderController.php'), 31 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Order/ShippingController.php'), 32 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Product/CategoryController.php'), 33 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Product/ClassCategoryController.php'), 34 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Product/ClassNameController.php'), 35 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Product/CsvImportController.php'), 36 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Product/ProductClassController.php'), 37 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Product/ProductController.php'), 38 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Product/TagController.php'), 39 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Setting/Shop/CalendarController.php'), 40 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Setting/Shop/CsvController.php'), 41 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Setting/Shop/DeliveryController.php'), 42 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Setting/Shop/MailController.php'), 43 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Setting/Shop/OrderStatusController.php'), 44 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Setting/Shop/PaymentController.php'), 45 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Setting/Shop/ShopController.php'), 46 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Setting/Shop/TaxRuleController.php'), 47 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Setting/System/AuthorityController.php'), 48 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Setting/System/LogController.php'), 49 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Setting/System/LoginHistoryController.php'), 50 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Setting/System/MasterdataController.php'), 51 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Setting/System/MemberController.php'), 52 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Setting/System/SecurityController.php'), 53 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Setting/System/TwoFactorAuthController.php'), 54 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Store/OwnerStoreController.php'), 55 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Store/PluginController.php'), 56 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Store/TemplateController.php'), 57 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Block/CalendarController.php'), 58 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Block/CartController.php'), 59 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Block/SearchProductController.php'), 60 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/CartController.php'), 61 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/ContactController.php'), 62 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/EntryController.php'), 63 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/ForgotController.php'), 64 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/HelpController.php'), 65 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Install/InstallController.php'), 66 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/InstallPluginController.php'), 67 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Mypage/ChangeController.php'), 68 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Mypage/DeliveryController.php'), 69 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Mypage/MypageController.php'), 70 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Mypage/WithdrawController.php'), 71 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/NonMemberShoppingController.php'), 72 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/ProductController.php'), 73 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/ShippingMultipleController.php'), 74 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/ShoppingController.php'), 75 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/SitemapController.php'), 76 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/TopController.php'), 77 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/UserDataController.php'), 78 => (\dirname(__DIR__, 4).'/app/Plugin/Recommend4/Controller/RecommendController.php'), 79 => (\dirname(__DIR__, 4).'/app/Plugin/Recommend4/Controller/RecommendSearchModelController.php'), 80 => (\dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/LocaleAwareListener.php'), 81 => (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/TranslationDebugCommand.php'), 82 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/ChoiceType.php'), 83 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/FileType.php'), 84 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/TransformationFailureExtension.php'), 85 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Validator/Type/UploadValidatorExtension.php'), 86 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Csrf/Type/FormTypeCsrfExtension.php'), 87 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Util/LegacyTranslatorProxy.php'), 88 => (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/CacheWarmer/TranslationsCacheWarmer.php'), 89 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/TranslationExtension.php'), 90 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/Helper/Processor.php')]);

$instance->setName('debug:translation');

return $instance;
