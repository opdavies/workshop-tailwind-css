<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class HomeController extends BaseController
{
    /**
     * @Route("/", name="home")
     */
    public function __invoke(): Response
    {
        $content = $this->twig->render('pages/home.html.twig');

        return new Response($content);
    }
}
