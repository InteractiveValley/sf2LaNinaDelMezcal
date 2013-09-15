<?php

namespace Richpolis\PublicacionesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Richpolis\PublicacionesBundle\Entity\CategoriasPublicacion;

class CategoriasType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('categoria')
            ->add('descripcion','genemu_tinymce',array(
                    'attr'=>array('cols' => 50,'rows' => 10,))
                 )
            ->add('tipoCategoria','choice',array(
                'label'=>'Tipo',
                'empty_value'=>false,
                'choices'=>Categorias::getArrayTipoCategorias(),
                'preferred_choices'=>Categorias::getPreferedTipoCategoria()
                ))
            ->add('posicion',"hidden")
            ->add('isActive',null,array('label'=>'Activo?'))
            ->add('isCategoria',null,array('label'=>'Categorias?'))    
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Richpolis\PublicacionesBundle\Entity\CategoriasPublicacion'
        ));
    }

    public function getName()
    {
        return 'richpolis_publicacionesbundle_categoriaspublicaciontype';
    }
}
