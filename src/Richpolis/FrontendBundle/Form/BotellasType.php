<?php

namespace Richpolis\FrontendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BotellasType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('botella')
            ->add('descripcion','textarea', array(
                    'attr' => array(
                        'class' => 'tinymce',
                        'data-theme' => 'advanced' // Skip it if you want to use default theme
                    )
                ))
            ->add('clase')
            ->add('style')
            ->add('file','file',array(
                'label'=>'Imagen',
                'required'=>false,
                ))
            ->add('linkShopMexico','text',array('label'=>'Shop México'))
            ->add('linkShopUsa','text',array('label'=>'Shop USA'))
            ->add('isActive',null,array('label'=>'Activo?','required'=>false))
            ->add('imagen','hidden')
            ->add('createdAt','hidden')
            ->add('updatedAt','hidden')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Richpolis\FrontendBundle\Entity\Botellas'
        ));
    }

    public function getName()
    {
        return 'richpolis_frontendbundle_botellastype';
    }
}
