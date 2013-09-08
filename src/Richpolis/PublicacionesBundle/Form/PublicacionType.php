<?php

namespace Richpolis\PublicacionesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Richpolis\PublicacionesBundle\Entity\Publicacion;

class PublicacionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titulo')
            ->add('descripcion','genemu_tinymce',array(
                    'attr'=>array('cols' => 50,'rows' => 10,))
                 )
            ->add('file','file',array(
                'label'=>'Imagen',
                'required'=>false,
                ))
            ->add('posicion','hidden')
            ->add('thumbnail','hidden')
            ->add('isActive',null,array('label'=>'Activo?'))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Richpolis\PublicacionesBundle\Entity\Publicacion'
        ));
    }

    public function getName()
    {
        return 'richpolis_publicacionesbundle_publicaciontype';
    }
}
