<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.Fq8_ztQ' shared service.

return $this->privates['.service_locator.Fq8_ztQ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'App\\Controller\\MainController::show' => ['privates', '.service_locator.VW4xBvb', 'get_ServiceLocator_VW4xBvbService.php', true],
    'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.EbLunuf', 'get_ServiceLocator_EbLunufService.php', true],
    'App\\Controller\\SecurityController::register' => ['privates', '.service_locator.pWfxOQ_', 'get_ServiceLocator_PWfxOQService.php', true],
    'App\\Controller\\MainController:show' => ['privates', '.service_locator.VW4xBvb', 'get_ServiceLocator_VW4xBvbService.php', true],
    'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.EbLunuf', 'get_ServiceLocator_EbLunufService.php', true],
    'App\\Controller\\SecurityController:register' => ['privates', '.service_locator.pWfxOQ_', 'get_ServiceLocator_PWfxOQService.php', true],
], [
    'App\\Controller\\MainController::show' => '?',
    'App\\Controller\\SecurityController::login' => '?',
    'App\\Controller\\SecurityController::register' => '?',
    'App\\Controller\\MainController:show' => '?',
    'App\\Controller\\SecurityController:login' => '?',
    'App\\Controller\\SecurityController:register' => '?',
]);