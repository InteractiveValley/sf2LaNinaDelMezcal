<?php

namespace Richpolis\FrontendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Richpolis\FrontendBundle\Repository\BotellasRepository;

class MensajesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titulo')
            ->add('mensaje','textarea', array(
                    'attr' => array(
                        'class' => 'tinymce',
                        'data-theme' => 'advanced' // Skip it if you want to use default theme
                    )
                ))
            ->add('file','file',array(
                'label'=>'Imagen',
                'required'=>false,
                ))
            ->add('clase')
            ->add('style')
            ->add('isHowToMix',null,array('label'=>'How to Mix?','required'=>false))
            ->add('isActive',null,array('label'=>'Activo?','required'=>false))
            ->add('botella','entity', array(
                'class' => 'FrontendBundle:Botellas',
                'query_builder' => function(BotellasRepository $er) {
                        return $er->createQueryBuilder('u')
                                ->orderBy('u.id', 'ASC');
                },
                'property'  => 'botella',
                'label'     => 'Botella',
                'multiple'  => false
            ))
            ->add('imagen','hidden')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Richpolis\FrontendBundle\Entity\Mensajes'
        ));
    }

    public function getName()
    {
        return 'richpolis_frontendbundle_mensajestype';
    }
}
