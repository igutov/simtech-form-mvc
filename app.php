<?php

class App
{
    public function run()
    {
        if (!isset($_GET['controller']) || empty($_GET['controller'])) {
            $_GET['controller'] = 'form';
        }

        if (empty($_GET['action'])) {
            $_GET['action'] = 'index';
        }

        $controller = 'controllers\\' . $_GET['controller'] . 'Controller';

        $action = 'action_' . $_GET['action'];

        if (!class_exists($controller)) {
            throw new \ErrorException('Controller does not exist');
        }

        $objController = new $controller;

        if (!method_exists($objController, $action)) {
            throw new \ErrorException('action does not exist');
        }

        $objController->$action();
    }
}
