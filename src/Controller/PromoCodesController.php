<?php

namespace App\Controller;

use App\Entity\PromoCodes;
use App\Form\PromoCodesFormType;
use App\Dto\PromoCodesDto;
use App\Repository\PromoCodesRepository;
use Pagerfanta\Doctrine\ORM\QueryAdapter;
use Pagerfanta\Pagerfanta;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class PromoCodesController extends AbstractController
{
    private $promoCodesRepository;

    public function __construct(PromoCodesRepository $promoCodesRepository)
    {
        $this->promoCodesRepository = $promoCodesRepository;
    }

    #[Route('/promocodes', name: 'app_promo_codes')]
    public function index(Request $request): Response
    {
        $searchBy = $request->query->get('searchBy', null);         
        $sortBy = $request->query->get('sortby', null);        
        if($sortBy == '')
        {
            $sortByFeild = 'p.createdAt'; 
            $order = 'DESC';             
        }
        else
        {
            $sortbyexpd = explode('-',$sortBy);  
            $sortByFeild = $sortbyexpd[0];
            $order = $sortbyexpd[1];
        }

        $queryBuilder = $this->promoCodesRepository->createPaginatedQueryBuilder($sortByFeild,$order,$searchBy);
        $adapter = new QueryAdapter($queryBuilder);
        $promocodes = Pagerfanta::createForCurrentPageWithMaxPerPage(
            $adapter,
            intval($request->query->get('page', 1)),
            intval($request->query->get('limit', 5))
        );

        return $this->render('promo_codes/index.html.twig', [
            'promocodes' => $promocodes,
            'limit' => intval($request->query->get('limit', 5)),
            'sortby' => $sortByFeild,
            'order' => $order,
            'searchBy' => $searchBy
        ]);
    }
    #[Route('/promocodes/create', name: 'create_promocodes')]
    public function create(Request $request, ValidatorInterface $validator): Response
    {
        $promoCodesDto  = new PromoCodesDto();
        $form = $this->createForm(PromoCodesFormType::class,$promoCodesDto);
                
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {  
            
            $promoName = $promoCodesDto->getPromoName();
            $promoDescription = $promoCodesDto->getPromoDescription();
            $promoType = $promoCodesDto->getPromoType();
            $discountAmount = $promoCodesDto->getDiscountAmount();
            $maximumDiscountAmount = $promoCodesDto->getMaximumDiscountAmount();
            $maximumOrderValue = $promoCodesDto->getMaximumOrderValue();
            $startDate = $promoCodesDto->getStartDate();
            $endDate = $promoCodesDto->getEndDate();
            $startTime = $promoCodesDto->getStartTime();
            $endTime = $promoCodesDto->getEndTime();
            $userType = $promoCodesDto->getUserType();
            $userCategory = $promoCodesDto->getUserCategory();
            $lifeOfCode = $promoCodesDto->getLifeOfCode();
            $usePerUser = $promoCodesDto->getUsePerUser();
            $termsCondition = $promoCodesDto->getTermsCondition();
            $displayOnPortal = $promoCodesDto->getDisplayOnPortal();
            $status = $promoCodesDto->getStatus();
            
            $startDate = new \DateTimeImmutable(date('Y-m-d H:i:s', strtotime($startDate.' '.$startTime)));
            $endDate = new \DateTimeImmutable(date('Y-m-d H:i:s', strtotime($endDate.' '.$endTime)));

            $promoCode = new PromoCodes(); 

            $promoCode->setPromoName($promoName);
            $promoCode->setPromoDescription($promoDescription);
            $promoCode->setPromoType($promoType);
            $promoCode->setDiscountAmount($discountAmount);
            $promoCode->setMaximumDiscountAmount($maximumDiscountAmount);
            $promoCode->setMaximumOrderValue($maximumOrderValue);
            $promoCode->setStartDate($startDate);
            $promoCode->setEndDate($endDate);
            $promoCode->setUserType($userType);
            $promoCode->setUserCategory($userCategory);
            $promoCode->setLifeOfCode($lifeOfCode);
            $promoCode->setUsePerUser($usePerUser);
            $promoCode->setTermsCondition($termsCondition);
            $promoCode->setDisplayOnPortal($displayOnPortal);
            $promoCode->setStatus($status);

            
            $this->promoCodesRepository->save($promoCode,true);            
            $this->addFlash('success', 'Promo Code Created!');
            return $this->redirectToRoute('app_promo_codes');
        }

        return $this->render('promo_codes/create.html.twig',[
            'form' => $form->createView()
        ]);
    }
    #[Route('/promocodes/edit/{id}', name: 'edit_promocodes')]
    public function update($id, Request $request) : Response 
    {
        $promoCode = $this->promoCodesRepository->find($id);
        
        $promoName = $promoCode->getPromoName();
        $promoDescription = $promoCode->getPromoDescription();
        $promoType = $promoCode->getPromoType();
        $discountAmount = $promoCode->getDiscountAmount();
        $maximumDiscountAmount = $promoCode->getMaximumDiscountAmount();
        $maximumOrderValue = $promoCode->getMaximumOrderValue();
        $startDateObj = $promoCode->getStartDate();
        $endDateObj = $promoCode->getEndDate(); 
        $startDate = $startDateObj->format('Y-m-d'); 
        $endDate = $endDateObj->format('Y-m-d'); 
        $startTime = $startDateObj->format('H:i:s'); 
        $endTime = $endDateObj->format('H:i:s'); 
        $userType = $promoCode->getUserType();
        $userCategory = $promoCode->getUserCategory();
        $lifeOfCode = $promoCode->getLifeOfCode();
        $usePerUser = $promoCode->getUsePerUser();
        $termsCondition = $promoCode->getTermsCondition();
        $displayOnPortal = $promoCode->getDisplayOnPortal();
        $status = $promoCode->getStatus();

        $promoCodesDto  = new PromoCodesDto();

        $promoCodesDto->setPromoName($promoName);
        $promoCodesDto->setPromoDescription($promoDescription);
        $promoCodesDto->setPromoType($promoType);
        $promoCodesDto->setDiscountAmount($discountAmount);
        $promoCodesDto->setMaximumDiscountAmount($maximumDiscountAmount);
        $promoCodesDto->setMaximumOrderValue($maximumOrderValue);
        $promoCodesDto->setStartDate($startDate);
        $promoCodesDto->setEndDate($endDate);
        $promoCodesDto->setStartTime($startTime);
        $promoCodesDto->setEndTime($endTime);
        $promoCodesDto->setUserType($userType);
        $promoCodesDto->setUserCategory($userCategory);
        $promoCodesDto->setLifeOfCode($lifeOfCode);
        $promoCodesDto->setUsePerUser($usePerUser);
        $promoCodesDto->setTermsCondition($termsCondition);
        $promoCodesDto->setDisplayOnPortal(filter_var($displayOnPortal, FILTER_VALIDATE_BOOLEAN));
        $promoCodesDto->setStatus($status);

         $form = $this->createForm(PromoCodesFormType::class, $promoCodesDto);
         $form->handleRequest($request);
         if ($form->isSubmitted() && $form->isValid()) {  
            
            $promoName = $promoCodesDto->getPromoName();
            $promoDescription = $promoCodesDto->getPromoDescription();
            $promoType = $promoCodesDto->getPromoType();
            $discountAmount = $promoCodesDto->getDiscountAmount();
            $maximumDiscountAmount = $promoCodesDto->getMaximumDiscountAmount();
            $maximumOrderValue = $promoCodesDto->getMaximumOrderValue();
            $startDate = $promoCodesDto->getStartDate();
            $endDate = $promoCodesDto->getEndDate();
            $startTime = $promoCodesDto->getStartTime();
            $endTime = $promoCodesDto->getEndTime();
            $userType = $promoCodesDto->getUserType();
            $userCategory = $promoCodesDto->getUserCategory();
            $lifeOfCode = $promoCodesDto->getLifeOfCode();
            $usePerUser = $promoCodesDto->getUsePerUser();
            $termsCondition = $promoCodesDto->getTermsCondition();
            $displayOnPortal = $promoCodesDto->getDisplayOnPortal();
            $status = $promoCodesDto->getStatus();
            
            $startDate = new \DateTimeImmutable(date('Y-m-d H:i:s', strtotime($startDate.' '.$startTime)));
            $endDate = new \DateTimeImmutable(date('Y-m-d H:i:s', strtotime($endDate.' '.$endTime)));

            $promoCode->setPromoName($promoName);
            $promoCode->setPromoDescription($promoDescription);
            $promoCode->setPromoType($promoType);
            $promoCode->setDiscountAmount($discountAmount);
            $promoCode->setMaximumDiscountAmount($maximumDiscountAmount);
            $promoCode->setMaximumOrderValue($maximumOrderValue);
            $promoCode->setStartDate($startDate);
            $promoCode->setEndDate($endDate);
            $promoCode->setUserType($userType);
            $promoCode->setUserCategory($userCategory);
            $promoCode->setLifeOfCode($lifeOfCode);
            $promoCode->setUsePerUser($usePerUser);
            $promoCode->setTermsCondition($termsCondition);
            $promoCode->setDisplayOnPortal($displayOnPortal);
            $promoCode->setStatus($status);

            $this->promoCodesRepository->save($promoCode,true);            
            $this->addFlash('success', 'Promo Code Updated!');
            return $this->redirectToRoute('app_promo_codes');
         }
         return $this->render('promo_codes/edit.html.twig', [
             'promoCode' => $promoCode,
             'form' => $form->createView()
         ]);
    }
    #[Route('/promocodes/delete/{id}', name: 'delete_promocodes')]
    public function delete($id): Response
    {        
        $promoCode = $this->promoCodesRepository->find($id);
        $this->promoCodesRepository->remove($promoCode,true);        

        $this->addFlash('success', 'Promo Code Deleted!');
        return $this->redirectToRoute('app_promo_codes');
    }
}
