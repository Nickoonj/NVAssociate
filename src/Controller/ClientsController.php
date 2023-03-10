<?php

namespace App\Controller;

use App\Entity\ClientType;
use App\Dto\ClientDto;
use App\Form\ClientsFormType;
use App\Repository\ClientTypeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class ClientsController extends AbstractController
{
    private $clientTypeRepository;

    public function __construct(ClientTypeRepository $clientTypeRepository)
    {
        $this->clientTypeRepository = $clientTypeRepository;
    }

    #[Route('/clients', name: 'app_clients')]
    public function index(): Response
    {
        return $this->render('clients/index.html.twig', [
            'controller_name' => 'ClientsController',
        ]);
    }
    #[Route('/clients/create', name: 'create_clients')]
    public function create(Request $request, ValidatorInterface $validator): Response
    {
        $clientDto  = new ClientDto();
        $form = $this->createForm(ClientsFormType::class,$clientDto);
        return $this->render('clients/create.html.twig',[
            'form' => $form->createView()
        ]);
    }
   
}
