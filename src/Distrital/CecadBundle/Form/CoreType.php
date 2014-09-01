<?php

namespace Distrital\CecadBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CoreType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('sistemaOperativo')
            ->add('programasInstalados')
            ->add('tiempoSolicitado')
           // ->add('proyecto')
            ->add('paquete')
            /*, 'choice', array(
					'required' => true,
				))*/
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Distrital\CecadBundle\Entity\Core'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'distrital_cecadbundle_core';
    }
}
