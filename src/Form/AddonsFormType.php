<?php

namespace App\Form;

use App\Entity\AddonsType;
use App\Entity\Addons;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class AddonsFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('addOnTitle')            
            ->add('time')
            ->add('monthDay', ChoiceType::class, [
                'choices'  => [
                    'Days' => 'Days',
                    'Months' => 'Months'                  
                ]
             ])
            ->add('Price')
            ->add('status', ChoiceType::class, [
                'choices'  => [
                    'Active' => '1',
                    'Inactive' => '0'                  
                ]
             ])            
            ->add('addOnType', EntityType::class, [    
                'class' => AddonsType::class,
                'choice_label' => 'AddonsTitle',            
             ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Addons::class,
        ]);
    }
}
