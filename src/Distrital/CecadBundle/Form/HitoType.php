<?php

namespace Distrital\CecadBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class HitoType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('entregaHito')
            ->add('nombreEntrega')
            ->add('fechaInicio')
            ->add('fechaEntrega')
            ->add('calificacionHito')
            ->add('estadoHito')
            ->add('correciones')
            ->add('proyecto')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Distrital\CecadBundle\Entity\Hito'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'distrital_cecadbundle_hito';
    }
}
