<?php

namespace App\Controller;

use App\Entity\Addons;
use App\Repository\AddonsRepository;
use App\Form\AddonsFormType;
use Pagerfanta\Doctrine\ORM\QueryAdapter;
use Pagerfanta\Pagerfanta;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class AddonsController extends AbstractController
{
    private $addonsRepository;

    public function __construct(AddonsRepository $addonsRepository)
    {
        $this->addonsRepository = $addonsRepository;
    }

    #[Route('/addons', name: 'app_addons')]
    public function index(Request $request): Response
    {
        $searchBy = $request->query->get('searchBy', null);         
        $sortBy = $request->query->get('sortby', null);    
        $filterBy = $request->query->get('category', null);      
        if($sortBy == '')
        {
            $sortByFeild = 'a.createdAt'; 
            $order = 'DESC';             
        }
        else
        {
            $sortbyexpd = explode('-',$sortBy);  
            $sortByFeild = $sortbyexpd[0];
            $order = $sortbyexpd[1];
        }
        $queryBuilder = $this->addonsRepository->createPaginatedQueryBuilder($sortByFeild,$order,$searchBy,$filterBy);
        $adapter = new QueryAdapter($queryBuilder);
        $addons = Pagerfanta::createForCurrentPageWithMaxPerPage(
            $adapter,
            intval($request->query->get('page', 1)),
            intval($request->query->get('limit', 5))
        );
        
        return $this->render('addons/index.html.twig', [
            'addons' => $addons,
            'limit' => intval($request->query->get('limit', 5)),
            'sortby' => $sortByFeild,
            'order' => $order,
            'searchBy' => $searchBy,
            'filterBy' => $filterBy
        ]);
    }
    #[Route('/addons/create', name: 'create_addons')]
    public function create(Request $request, ValidatorInterface $validator): Response
    {
        $addons  = new Addons();
        $form = $this->createForm(AddonsFormType::class,$addons);
        
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {              
            $data = json_encode($request->request->all());
            $decode_data = json_decode($data,true);
            
            $addOnType = $decode_data['addons_form']['addOnType'];
                     
            $AddOn_Type_Json = array();
            $AddOn_Type_Json['Task_Manager'] = 'off';
            $AddOn_Type_Json['File_Manager'] = 'off';
            $AddOn_Type_Json['E_Commerce'] = 'off';
            $AddOn_Type_Json['Template_Customization'] = 'off';
            $AddOn_Type_Json['Live_Report_Client_Mobile_App'] = 'off';
            

            if($addOnType == '6')
            {
                

                if($request->request->get('Task_Manager') == 'on'){

                    $AddOn_Type_Json['Task_Manager'] = 'on';
                }                

                if($request->request->get('File_Manager') == 'on'){

                    $AddOn_Type_Json['File_Manager'] = 'on';
                }

                if($request->request->get('E_Commerce') == 'on'){

                    $AddOn_Type_Json['E_Commerce'] = 'on';
                }

                if($request->request->get('Template_Customization') == 'on'){

                    $AddOn_Type_Json['Template_Customization'] = 'on';
                }

                if($request->request->get('Live_Report_Client_Mobile_App') == 'on'){

                    $AddOn_Type_Json['Live_Report_Client_Mobile_App'] = 'on';
                }
            }
            else{               

                $AddOn_Type_Json = array('size' => $request->request->get('size'));
            }

            $addons->setAddOnTypeJson(json_encode($AddOn_Type_Json));      
            $this->addonsRepository->save($addons,true);            
            $this->addFlash('success', 'Addons Created!');
            return $this->redirectToRoute('app_addons');
        }

        return $this->render('addons/create.html.twig',[
            'form' => $form->createView()
        ]);
    }
    #[Route('/addons/edit/{id}', name: 'edit_addons')]
    public function update($id, Request $request) : Response 
    {
         $addon = $this->addonsRepository->find($id);

         $form = $this->createForm(AddonsFormType::class, $addon);
         $form->handleRequest($request);
         if ($form->isSubmitted() && $form->isValid()) {
            
            $data = json_encode($request->request->all());
            $decode_data = json_decode($data,true);
            
            $addOnType = $decode_data['addons_form']['addOnType'];
                     
            $AddOn_Type_Json = array();
            $AddOn_Type_Json['Task_Manager'] = 'off';
            $AddOn_Type_Json['File_Manager'] = 'off';
            $AddOn_Type_Json['E_Commerce'] = 'off';
            $AddOn_Type_Json['Template_Customization'] = 'off';
            $AddOn_Type_Json['Live_Report_Client_Mobile_App'] = 'off';
            

            if($addOnType == '6')
            {
                

                if($request->request->get('Task_Manager') == 'on'){

                    $AddOn_Type_Json['Task_Manager'] = 'on';
                }                

                if($request->request->get('File_Manager') == 'on'){

                    $AddOn_Type_Json['File_Manager'] = 'on';
                }

                if($request->request->get('E_Commerce') == 'on'){

                    $AddOn_Type_Json['E_Commerce'] = 'on';
                }

                if($request->request->get('Template_Customization') == 'on'){

                    $AddOn_Type_Json['Template_Customization'] = 'on';
                }

                if($request->request->get('Live_Report_Client_Mobile_App') == 'on'){

                    $AddOn_Type_Json['Live_Report_Client_Mobile_App'] = 'on';
                }
            }
            else{               

                $AddOn_Type_Json = array('size' => $request->request->get('size'));
            }

            $addon->setAddOnTypeJson(json_encode($AddOn_Type_Json));

            $this->addonsRepository->save($addon,true);            
            $this->addFlash('success', 'Addon Updated!');
            return $this->redirectToRoute('app_addons');
         }
         return $this->render('addons/edit.html.twig', [
             'addon' => $addon,
             'form' => $form->createView()
         ]);
    }
    #[Route('/addons/delete/{id}', name: 'delete_addons')]
    public function delete($id): Response
    {        
        $addon = $this->addonsRepository->find($id);
        $this->addonsRepository->remove($addon,true);        

        $this->addFlash('success', 'Addon Deleted!');
        return $this->redirectToRoute('app_addons');
    }
}
