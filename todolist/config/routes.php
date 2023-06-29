<?php
//filename: config/routes.php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$routes = new RouteCollection();

$routes->add('todo_index', new Route('/todo', ['_controller' => 'ModernFramework\Controller\TodoController::index',]));

$routes->add('todo_new', new Route('/todo/new', ['_controller' => 'ModernFramework\Controller\TodoController::new',]));

$routes->add('todo_done', new Route('/todo/{id}/done', ['_controller' => 'ModernFramework\Controller\TodoController::done',]));

$routes->add('todo_edit', new Route('/todo/{id}/edit', ['_controller' => 'ModernFramework\Controller\TodoController::edit',]));

$routes->add('todo_delete', new Route('/todo/{id}/delete', ['_controller' => 'ModernFramework\Controller\TodoController::delete',]));
