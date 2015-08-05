<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class VitalPostType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->remove('userid')
            ->add('date')
            ->add('weight')
            ->add('bmi')
            ->add('bodyfat')
            ->add('muscle')
            ->add('rmcal')
            ->add('bodyage')
            ->add('visceralfat')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\VitalPost'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'appbundle_vitalpost';
    }
}
