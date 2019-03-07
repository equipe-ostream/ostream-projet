<?php

namespace App\Form;

use App\Entity\Preferenceutilisateursmartphone;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PreferenceutilisateursmartphoneType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('ActiverModeHorsLigne')
            ->add('resolution')
            ->add('fondEcran')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Preferenceutilisateursmartphone::class,
        ]);
    }
}
