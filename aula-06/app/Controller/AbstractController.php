<?php

declare(strict_types=1);

namespace App\Controller;


abstract class AbstractController
{
    public function render(string $viewName): void
    {
        include "../views/{$viewName}.phtml";
    }
}