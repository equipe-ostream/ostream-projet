<?php

namespace App\Form\Security;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class RegisterType extends AbstractType
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
            ->add('email', EmailType::class, [
                'attr' => [
                    'placeholder' => 'form.user.email',
                ]
            ])
            ->add('nom', TextType::class, [
                'attr' => [
                    'placeholder' => 'nom',
                ]
            ])
            ->add('telephone', TextType::class, [
                'attr' => [
                    'placeholder' => 'phone',
                ]
            ])
            ->add('adresse', TextType::class, [
                'attr' => [
                    'placeholder' => 'adresse',
                ]
            ])
            ->add('password', RepeatedType::class, array(
                'type' => PasswordType::class,
                'invalid_message' => 'form.user.messagePassword',
                'first_options'  => array('label' => 'register.password', 'attr' => ['placeholder' => 'form.user.password']),
                'second_options' => array('label' => 'register.passwordConfirm', 'attr' => ['placeholder' => 'register.passwordConfirm']),
            ))
            ->add('submit', SubmitType::class, [
                'label' => 'register.inscription',
                'attr' => [
                    'class' => 'btn btn-primary',
                ]
            ])
        ;
    }

}