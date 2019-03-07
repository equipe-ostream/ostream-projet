<?php

namespace App\Form;

use App\Entity\Utilisateur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UtilisateurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('password')
            ->add('adresse')
            ->add('email')
            ->add('statut')
            ->add('telephone')
            ->add('username')
            ->add('roles')
            ->add('createdAt')
            ->add('updatedAt')
            ->add('deletedAt')
            ->add('Preferenceutilisateurordinateurs')
            ->add('Preferenceutilisateursmatphones')
            ->add('Preferenceutilisateurtelevisions')
            ->add('lives')
            ->add('nombredeconnexions')
            ->add('articles')
            ->add('interviews')
            ->add('dons')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Utilisateur::class,
        ]);
    }
}
