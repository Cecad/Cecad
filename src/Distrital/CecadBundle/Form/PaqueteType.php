<?php

namespace Distrital\CecadBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PaqueteType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
			->add('categoria', 'choice',  array('label' => 'Tipo reporte', 
		    		'choices' => array(
						'General'   => 'Computo General',
						'AltaRAM'   => 'Alta RAM',
						'AltoProcesamiento'   => 'Alto Procesamiento',
					)))
            ->add('ram', 'integer', array('label' => 'Memoria RAM (GB)'))
            ->add('procesador', 'integer', array('label' => 'Cantidad de nucleos'))
            ->add('almacenamiento', 'integer', array('label' => 'Disco duro en GB'))
            ->add('precio', 'number', array('label' => 'Precio $/Hora '))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Distrital\CecadBundle\Entity\Paquete'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'distrital_cecadbundle_paquete';
    }
}
