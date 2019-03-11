<?php

namespace App\Form\Security;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class LoginType extends AbstractType
{
    /**
     * @return string
     */
    public function getBlockPrefix(): ?string
    {
        return '';
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('_username', TextType::class, [
                'attr' => [
                    'placeholder' => 'Email',

                ]
            ])
            ->add('_password', PasswordType::class, [
                'attr' => [
                    'placeholder' => 'Password',

                ]
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Connexion',


            ])
        ;
    }

}