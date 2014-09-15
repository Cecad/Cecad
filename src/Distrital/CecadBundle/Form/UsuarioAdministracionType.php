<?php

namespace Distrital\CecadBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UsuarioAdministracionType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cedula', 'text', array('label' => 'Cedula'))
            ->add('clave', 'repeated', array(
					'type' => 'password',
					'invalid_message' => 'Las claves deben ser iguales.',
					'options' => array('attr' => array('class' => 'password-field')),
					'required' => true,
					'first_options'  => array('label' => 'Clave'),
					'second_options' => array('label' => 'Repita la clave')
				)
			)
            ->add('nombre', 'text', array('label' => 'Nombres'))
            ->add('apellido', 'text', array('label' => 'Apellidos'))
//          ->add('fecha', 'date', array('label' => 'Fecha Nacimiento'))
            ->add('correo', 'email', array('label' => 'Correo'))
            ->add('celular', 'text', array('label' => 'Celular'))
            ->add('telefono', 'text', array('label' => 'Telefono'))
            ->add('profesion', 'text', array('label' => 'Profesion'))
             ->add('estado', 'choice', array('label' => 'Rol',
             'choices' => array(
             	'X'=> 'Administrador',
             	'A'=> 'Usuario',
             	'D'=> 'Docente',
             	
             )
             ))

//            ->add('salt')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Distrital\CecadBundle\Entity\Usuario'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'distrital_cecadbundle_usuario';
    }
}
