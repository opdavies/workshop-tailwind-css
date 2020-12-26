<?php

declare(strict_types=1);

namespace App\Controller;

use Twig\Environment;

abstract class BaseController
{
    protected Environment $twig;

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }
}
