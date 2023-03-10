<?php

namespace App\Controller;

use App\Entity\Subscriptions;
use App\Form\SubscriptionFormType;
use App\Repository\SubscriptionsRepository;
use Pagerfanta\Doctrine\ORM\QueryAdapter;
use Pagerfanta\Pagerfanta;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class SubscriptionsController extends AbstractController
{
    private $subscriptionsRepository;

    public function __construct(SubscriptionsRepository $subscriptionsRepository)
    {
        $this->subscriptionsRepository = $subscriptionsRepository;
    }

    #[Route('/subscriptions', name: 'app_subscriptions')]
    public function index(Request $request): Response
    {   
        $searchBy = $request->query->get('searchBy', null);         
        $sortBy = $request->query->get('sortby', null);        
        if($sortBy == '')
        {
            $sortByFeild = 's.createdAt'; 
            $order = 'DESC';             
        }
        else
        {
            $sortbyexpd = explode('-',$sortBy);  
            $sortByFeild = $sortbyexpd[0];
            $order = $sortbyexpd[1];
        }

        $page = intval($request->query->get('page', 1));
        $limit = intval($request->query->get('limit', 5));
        $start_from = ($limit * ($page-1))+1;    

        $queryBuilder = $this->subscriptionsRepository->createPaginatedQueryBuilder($sortByFeild,$order,$searchBy);
        $adapter = new QueryAdapter($queryBuilder);
        $subscriptions = Pagerfanta::createForCurrentPageWithMaxPerPage(
            $adapter,
            $page,
            $limit
        );
           
        return $this->render('subscriptions/index.html.twig', [
            'subscriptions' => $subscriptions,
            'limit' => intval($request->query->get('limit', 5)),
            'sortby' => $sortByFeild,
            'order' => $order,
            'searchBy' => $searchBy,
            'start_from' => $start_from
        ]);
    }
    #[Route('/subscriptions/create', name: 'create_subscriptions')]
    public function create(Request $request, ValidatorInterface $validator): Response
    {
        $subscription  = new Subscriptions();
        $form = $this->createForm(SubscriptionFormType::class,$subscription, ['attr' => ['class' => 'needs-validation','novalidate'=>'']]);
        
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {            
            $this->subscriptionsRepository->save($subscription,true);            
            $this->addFlash('success', 'Subscription Created!');
            return $this->redirectToRoute('app_subscriptions');
        }

        return $this->render('subscriptions/create.html.twig',[
            'form' => $form->createView()
        ]);
    }
    #[Route('/subscriptions/edit/{id}', name: 'edit_subscription')]
    public function update($id, Request $request) : Response 
    {
         $subscription = $this->subscriptionsRepository->find($id);

         $form = $this->createForm(SubscriptionFormType::class, $subscription, ['attr' => ['class' => 'needs-validation','novalidate'=>'']]);
         $form->handleRequest($request);
         if ($form->isSubmitted() && $form->isValid()) {            
            $this->subscriptionsRepository->save($subscription,true);            
            $this->addFlash('success', 'Subscription Updated!');
            return $this->redirectToRoute('app_subscriptions');
         }
         return $this->render('subscriptions/edit.html.twig', [
             'subscription' => $subscription,
             'form' => $form->createView()
         ]);
    }
    #[Route('/subscriptions/delete/{id}', name: 'delete_subscription')]
    public function delete($id): Response
    {        
        $subscription = $this->subscriptionsRepository->find($id);
        $this->subscriptionsRepository->remove($subscription,true);        

        $this->addFlash('success', 'Subscription Deleted!');
        return $this->redirectToRoute('app_subscriptions');
    }
}
