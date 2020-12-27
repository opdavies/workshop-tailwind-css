<?php

declare(strict_types=1);

namespace App\Controller;

use App\Repository\SpeakerRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

final class HomeController extends BaseController
{
    private SpeakerRepository $speakerRepository;

    public function __construct(Environment $twig, SpeakerRepository $speakerRepository)
    {
        $this->speakerRepository = $speakerRepository;

        parent::__construct($twig);
    }

    /**
     * @Route("/", name="home")
     */
    public function __invoke(): Response
    {
        $content = $this->twig->render('pages/home.html.twig', [
            'featured_speakers' => $this->speakerRepository->findFeatured(),
        ]);

        return new Response($content);
    }
}
