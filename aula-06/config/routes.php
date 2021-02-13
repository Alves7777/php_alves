<?php

use App\Controller\Api\VehicleApiController;
use App\Controller\CustomerController;
use App\Controller\VehicleController;

function creatRoute(string $controllerName, string $actionName): array
{
    return [
        'controller' =>$controllerName,
        'action' =>$actionName,
    ];
}

return [
    '/'=>creatRoute(VehicleController::class,'listAction'),
    '/veiculos/listar'=>creatRoute(VehicleController::class,'listAction'),
    '/veiculos/adicionar'=>creatRoute(VehicleController::class,'addAction'),
    '/veiculos/excluir'=>creatRoute(VehicleController::class,'removeAction'),
    '/veiculos/editar'=>creatRoute(VehicleController::class,'editAction'),
    '/clientes/listar'=>creatRoute(CustomerController::class,'listAction'),
    '/api/veiculos'=>creatRoute(VehicleApiController::class,'getAction'),
    ];
