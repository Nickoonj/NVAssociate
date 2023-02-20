<?php

namespace App\Form;

use App\Entity\Subscriptions;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SubscriptionFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('planTitle')
            ->add('time')
            ->add('monthDay')
            ->add('noOfClients')
            ->add('noOfClientsLogin')
            ->add('noOfEmployee')
            ->add('noOfTransaction')
            ->add('storageSize')
            ->add('price')
            ->add('displayOnPortal')
            ->add('taskManager')
            ->add('fileManager')
            ->add('clientLoginApp')
            ->add('eCommerce')
            ->add('templateCustomization')
            ->add('liveReportClientMobileApp')
            ->add('status')
            ->add('createdAt')
            ->add('updatedAt')
            ->add('deletedAt')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Subscriptions::class,
        ]);
    }
}
