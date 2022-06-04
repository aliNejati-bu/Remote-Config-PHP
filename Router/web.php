<?php

use Phroute\Phroute\RouteCollector;
use MazaresServices\App\Controller\PanelController;

/**
 * @var RouteCollector $router
 */


$router->controller(route("index"), \MazaresServices\App\Controller\IndexController::class);


$router->group(["before" => ["authMiddleware"], "prefix" => route("panel")], function (RouteCollector $router) {
    $router->get("/", function () {
        return (new PanelController)->index();
    });
    $router->controller("/user", \MazaresServices\App\Controller\Admin\UserController::class
    );

    $router->get("/apps", function () {
        return (new \MazaresServices\App\Controller\App\AppController())->index();
    });

    $router->post("/apps", function () {
        return (new \MazaresServices\App\Controller\App\AppController())->doCreateApp();
    });

    $router->get("/apps/panel/{param}", function (string $param) {
        return redirect(route("configApp", $param));
    });

    $router->get("/apps/panel/{param}/configs", function (string $param) {
        return (new \MazaresServices\App\Controller\App\AppController())->config($param);
    });

    $router->get("/apps/panel", function () {
        return (new \MazaresServices\App\Controller\App\AppController())->panelMenu();
    });


    $router->post("/apps/panel/configs", function () {
        return (new \MazaresServices\App\Controller\App\Config\ConfigController)->doCreateConfig();
    });

    $router->get("/apps/panel/{param1}/configs/{param2}", function ($param1, $param2) {
        return (new \MazaresServices\App\Controller\App\Config\ConfigController())->configPage($param1, $param2);
    });

    $router->post("/apps/panel/configs/values", function () {
        return (new \MazaresServices\App\Controller\App\Config\ConfigController())->createValue();
    });


    $router->post("/apps/panel/configs/values/edit", function () {
        return (new \MazaresServices\App\Controller\App\Config\ConfigController())->editValue();
    });

    $router->post("/apps/panel/configs/values/delete", function () {
        return (new \MazaresServices\App\Controller\App\Config\ConfigController())->deleteValue();
    });

    $router->post("/apps/panel/configs/edit",function (){
            return (new \MazaresServices\App\Controller\App\Config\ConfigController())->editConfig();
    });

});
