<?php
/**
 * Created by PhpStorm.
 * User: elodi
 * Date: 08/03/2019
 * Time: 19:52
 */

namespace App\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use App\Entity\Category;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Article;
use Sonata\AdminBundle\Datagrid\DatagridMapper;


final class ArticlePostAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('Content')
                ->add('title', TextType::class)
                ->add('body', TextareaType::class)
                ->add('date', \DateTime::class)
                ->add('auteur' , TextType::class)
            ->end()

            ->with('Meta data')
                ->add('category', EntityType::class, [
                'class' => Category::class,
                'choice_label' => 'name',
            ])
                ->add('type', TextType::class)
            ->end()
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('title')
            ->add('category.name')
            ->add('draft');
    }

    public function toString($object)
    {
        return $object instanceof Article
            ? $object->getTitre()
            : 'Article Post'; // shown in the breadcrumb on the create view
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper) //Rechercher un article par son titre
    {
        $datagridMapper
            ->add('title')
            ->add('category', null, [], EntityType::class, [
        'class' => Category::class,
        'choice_label' => 'name',
    ]);
    }


}