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
                    'class' => 'form-control'
                ]
            ])
            ->add('nom', TextType::class, [
                'attr' => [
                    'placeholder' => 'form.user.nom',
                    'class' => 'form-control'
                ]
            ])
            ->add('password', RepeatedType::class, array(
                'type' => PasswordType::class,
                'invalid_message' => 'form.user.password',
                'first_options'  => array('label' => 'form.user.password', 'attr' => [
                    'placeholder' => 'form.user.password',
                    'class' => 'form-control'
                ]),
                'second_options' => array('label' => 'form.user.passwordConfirm', 'attr' => [
                    'placeholder' => 'form.user.passwordConfirm',
                    'class' => 'form-control'
                ]),
            ))
            ->add('submit', SubmitType::class, [
                'label' => 'form.user.enregistrer',
                'attr' => [
                    'class' => 'btn btn-primary',
                ]
            ])
        ;
    }

}