<?php

namespace App\Controller;

use App\Entity\Subscriptions;
use App\Form\SubscriptionFormType;
use App\Repository\SubscriptionsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class SubscriptionsController extends AbstractController
{
    private $subscriptionsRepository;

    public function __construct(SubscriptionsRepository $subscriptionsRepository)
    {
        $this->subscriptionsRepository = $subscriptionsRepository;
    }

    #[Route('/subscriptions', name: 'app_subscriptions')]
    public function index(): Response
    {
        $subscriptions = $this->subscriptionsRepository->findAll();
        return $this->render('subscriptions/index.html.twig', [
            'subscriptions' => $subscriptions
        ]);
    }
    #[Route('/subscriptions/create', name: 'create_subscriptions')]
    public function create(Request $request): Response
    {
        $subscription  = new Subscriptions();
        $form = $this->createForm(SubscriptionFormType::class,$subscription);
        
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $this->subscriptionsRepository->save($subscription,true);            
            
            return $this->redirectToRoute('app_subscriptions');
        }
        
        return $this->render('subscriptions/create.html.twig',[
            'form' => $form->createView()
        ]);
    }
}
