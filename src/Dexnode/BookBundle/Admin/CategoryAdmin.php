<?php

namespace Dexnode\BookBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Validator\ErrorElement;

class CategoryAdmin extends Admin
{
    
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('nameEn', 'text', array('label' => 'Name English'))
            ->add('nameFr', 'text', array('label' => 'Name French'))
            ->add('slugEn', 'text', array('label' => 'Slug English'))
            ->add('slugFr', 'text', array('label' => 'Slug French'))
            ->add('isActive', 'checkbox', array('label' => 'Actif'))
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('isActive')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('nameEn')
            ->add('nameFr')
            ->add('isActive')
        ;
    }
}