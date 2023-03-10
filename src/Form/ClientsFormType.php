<?php

namespace App\Form;

use App\Entity\ClientType;
use App\Dto\ClientDto;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ClientsFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('clientType', EntityType::class, [    
                'class' => ClientType::class,
                'choice_label' => 'name',            
             ])
            ->add('firstName')
            ->add('clientType', ChoiceType::class, [
                'choices'  => [
                    'Propritor' => 'Propritor',
                    'Partnership' => 'Partnership',                    
                ]
             ])
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ClientDto::class,
        ]);
    }
}
