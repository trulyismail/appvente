<?php

namespace ContainerD6LQfyU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContactCrudControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Admin\ContactCrudController' shared autowired service.
     *
     * @return \App\Controller\Admin\ContactCrudController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'easycorp'.\DIRECTORY_SEPARATOR.'easyadmin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Contracts'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'CrudControllerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'easycorp'.\DIRECTORY_SEPARATOR.'easyadmin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractCrudController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'Admin'.\DIRECTORY_SEPARATOR.'ContactCrudController.php';

        $container->services['App\\Controller\\Admin\\ContactCrudController'] = $instance = new \App\Controller\Admin\ContactCrudController();

        $instance->setContainer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'router' => ['services', 'router', 'getRouterService', false],
            'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
            'http_kernel' => ['services', 'http_kernel', 'getHttpKernelService', false],
            'serializer' => ['privates', 'debug.serializer', 'getDebug_SerializerService', false],
            'security.authorization_checker' => ['privates', 'security.authorization_checker', 'getSecurity_AuthorizationCheckerService', false],
            'twig' => ['privates', 'twig', 'getTwigService', false],
            'form.factory' => ['privates', 'form.factory', 'getForm_FactoryService', true],
            'security.token_storage' => ['privates', 'security.token_storage', 'getSecurity_TokenStorageService', false],
            'security.csrf.token_manager' => ['privates', 'security.csrf.token_manager', 'getSecurity_Csrf_TokenManagerService', false],
            'parameter_bag' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'web_link.http_header_serializer' => ['privates', 'web_link.http_header_serializer', 'getWebLink_HttpHeaderSerializerService', false],
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'event_dispatcher' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\ActionFactory' => ['privates', 'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\ActionFactory', 'getActionFactoryService', false],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider' => ['privates', 'EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider', 'getAdminContextProviderService', false],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminUrlGenerator' => [false, 'EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminUrlGenerator', 'getAdminUrlGeneratorService', false],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\ControllerFactory' => ['privates', 'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\ControllerFactory', 'getControllerFactoryService', false],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\EntityFactory' => ['privates', 'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\EntityFactory', 'getEntityFactoryService', false],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Orm\\EntityRepository' => ['privates', 'EasyCorp\\Bundle\\EasyAdminBundle\\Orm\\EntityRepository', 'getEntityRepositoryService', true],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Orm\\EntityUpdater' => ['privates', 'EasyCorp\\Bundle\\EasyAdminBundle\\Orm\\EntityUpdater', 'getEntityUpdaterService', true],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\FieldProvider' => ['privates', 'EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\FieldProvider', 'getFieldProviderService', true],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\FilterFactory' => ['privates', 'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\FilterFactory', 'getFilterFactoryService', true],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\FormFactory' => ['privates', 'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\FormFactory', 'getFormFactoryService', true],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\PaginatorFactory' => ['privates', 'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\PaginatorFactory', 'getPaginatorFactoryService', true],
        ], [
            'router' => '?',
            'request_stack' => '?',
            'http_kernel' => '?',
            'serializer' => '?',
            'security.authorization_checker' => '?',
            'twig' => '?',
            'form.factory' => '?',
            'security.token_storage' => '?',
            'security.csrf.token_manager' => '?',
            'parameter_bag' => '?',
            'web_link.http_header_serializer' => '?',
            'doctrine' => '?',
            'event_dispatcher' => '?',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\ActionFactory' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\ActionFactory',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminUrlGenerator' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminUrlGenerator',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\ControllerFactory' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\ControllerFactory',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\EntityFactory' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\EntityFactory',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Orm\\EntityRepository' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Orm\\EntityRepository',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Orm\\EntityUpdater' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Orm\\EntityUpdater',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\FieldProvider' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\FieldProvider',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\FilterFactory' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\FilterFactory',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\FormFactory' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\FormFactory',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\PaginatorFactory' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\PaginatorFactory',
        ]))->withContext('App\\Controller\\Admin\\ContactCrudController', $container));

        return $instance;
    }
}
