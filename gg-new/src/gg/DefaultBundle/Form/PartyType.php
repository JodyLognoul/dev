<?php

namespace gg\DefaultBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PartyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Name')
            ->add('Start')
            ->add('End')
            ->add('Place')
            ->add('Host')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'gg\DefaultBundle\Entity\Party'
        ));
    }

    public function getName()
    {
        return 'gg_defaultbundle_partytype';
    }
}
