<?php

namespace App\Controller\User;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EventController extends AbstractController
{
    #[Route('/event', name: 'app_event')]
    public function event(): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        return $this->render('event/index.html.twig');
    }
}
