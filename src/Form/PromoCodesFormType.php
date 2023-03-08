<?php

namespace App\Form;

use App\Entity\PromoCodes;
use App\Dto\PromoCodesDto;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class PromoCodesFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('promoName')
            ->add('promoDescription')
            ->add('promoType', ChoiceType::class, [
                'choices'  => [
                    'Percentage' => 'Percentage',
                    'Price' => 'Price'                  
                ]
             ])
            ->add('discountAmount')
            ->add('maximumDiscountAmount')
            ->add('maximumOrderValue')
            ->add('startDate', TextType::class, [
                
            ])
            ->add('endDate', TextType::class, [
                
            ])
            ->add('startTime', TextType::class, [
                
            ])
            ->add('endTime', TextType::class, [
                
            ])

            ->add('userType', ChoiceType::class, [
                'choices'  => [
                    'All' => 'All',
                    'Existing User' => 'Existing User',
                    'New User' => 'New User'                  
                ]
             ])
            ->add('userCategory', ChoiceType::class, [
                'choices'  => [
                    'Accountant' => '1',
                    'CA' => '2',
                    'Tax Consultant' => '3'
                ]
             ])
            ->add('lifeOfCode')
            ->add('usePerUser')
            ->add('termsCondition')
            ->add('displayOnPortal', CheckboxType::class, [                
                'required' => false
            ])
            ->add('status', ChoiceType::class, [
                'choices'  => [
                    'Active' => '1',
                    'Inactive' => '0'                  
                ]
             ])            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => PromoCodesDto::class,
        ]);
    }
}
