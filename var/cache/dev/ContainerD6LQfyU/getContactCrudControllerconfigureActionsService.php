<?php

namespace ContainerD6LQfyU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContactCrudControllerconfigureActionsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.LHPXyzR.App\Controller\Admin\ContactCrudController::configureActions()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.LHPXyzR.App\\Controller\\Admin\\ContactCrudController::configureActions()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'actions' => ['privates', '.errored..service_locator.LHPXyzR.EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Actions', NULL, 'Cannot autowire service ".service_locator.LHPXyzR": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Actions" but no such service exists.'],
        ], [
            'actions' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Actions',
        ]))->withContext('App\\Controller\\Admin\\ContactCrudController::configureActions()', $container);
    }
}
