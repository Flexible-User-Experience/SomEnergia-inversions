<?php
namespace SomEnergia\InversionsBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class VoluntaryInvestmentAdmin extends Admin
{
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id')
            //->add('type')
            //->add('investDate')
            ->add('year')
            ->add('week')
            ->add('amount')
            ->add('total')
        ;
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('type', 'sonata_type_translatable_choice', array(
                'choices' => array(0 => 'aportaciones voluntarias', 1 => 'titulos participativos'),
                'catalogue' => 'SonataOrderBundle'
            ))
            //->add('investDate')
            ->add('year')
            ->add('week')
            ->add('amount')
            ->add('total')
        ;
    }
}