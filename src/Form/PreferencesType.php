<?php

namespace App\Form;

use App\Entity\Preferences;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PreferencesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('activeModeHorsligne', ChoiceType::class, [
                'expanded' => true,
                'multiple' => false,
                'choices'  => [
                    'Oui' => true,
                    'Non' => false,
                ],
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('resolution', NumberType::class, [
                'attr' => [
                    'placeholder' => 'resolution',
                    'class' => 'form-control'
                ]
            ])
            ->add('tempsAttenteAvantDiffusion', NumberType::class, [
                'attr' => [
                    'placeholder' => 'tempsAttenteAvantDiffusion',
                    'class' => 'form-control'
                ]
            ])
            ->add('fondEcran', ChoiceType::class, [
                'expanded' => true,
                'multiple' => false,
                'choices'  => [
                    'Oui' => true,
                    'Non' => false,
                ],
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Editer',
                'attr' => [
                    'class' => 'btn btn-primary btn-block',
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Preferences::class,
        ]);
    }
}
