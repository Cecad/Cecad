<?php

namespace Distrital\CecadBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProyectoType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('presupuesto', 'money', array("label"=>"Presupuesto  $","currency"=>"COP"))
            ->add('fechaInicio')
            ->add('fechaFinal')
            ->add('descripcion', 'textarea', array('label' => 'Descripción'))
            ->add('objetivos')
         //   ->add('estado')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Distrital\CecadBundle\Entity\Proyecto'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'distrital_cecadbundle_proyecto';
    }
}
