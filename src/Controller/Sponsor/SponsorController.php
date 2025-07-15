<?php

namespace App\Controller\Sponsor;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SponsorController extends AbstractController
{
    
    #[Route('/sponsor', name: 'app_sponsor')]
    public function sponsor(): Response
    {
        $this->denyAccessUnlessGranted('ROLE_SPONSOR');
        return $this->render('sponsor/index.html.twig');
    }
}
