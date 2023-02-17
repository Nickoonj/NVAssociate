<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SuperadminController extends AbstractController
{
    #[Route('/superadmin', name: 'app_superadmin')]
    public function index(): Response
    {
        $this->denyAccessUnlessGranted("IS_AUTHENTICATED_FULLY");

        return $this->render('superadmin/index.html.twig', [
            
        ]);
    }
}
