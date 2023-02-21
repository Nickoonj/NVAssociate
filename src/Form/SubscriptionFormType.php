<?php

namespace App\Form;

use App\Entity\Subscriptions;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class SubscriptionFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('planTitle')
            ->add('time')
            ->add('monthDay', ChoiceType::class, [
                'choices'  => [
                    'Days' => 'Days',
                    'Months' => 'Months'                  
                ]
             ])
            ->add('noOfClients')
            ->add('noOfClientsLogin')
            ->add('noOfEmployee')
            ->add('noOfTransaction')
            ->add('storageSize')
            ->add('price')
            ->add('displayOnPortal' , CheckboxType::class, [                
                'required' => true
            ])
            ->add('taskManager', CheckboxType::class, [                
                'required' => true
            ])
            ->add('fileManager', CheckboxType::class, [                
                'required' => true
            ])
            ->add('clientLoginApp', CheckboxType::class, [                
                'required' => true
            ])
            ->add('eCommerce', CheckboxType::class, [                
                'required' => true
            ])
            ->add('templateCustomization', CheckboxType::class, [                
                'required' => true
            ])
            ->add('liveReportClientMobileApp', CheckboxType::class, [                
                'required' => true
            ])
            ->add('status', ChoiceType::class, [
                'choices'  => [
                    'Active' => 'Active',
                    'Inactive' => 'Inactive'                  
                ]
             ])
           
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Subscriptions::class,
        ]);
    }
}
