<?php

namespace Kb\UserBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RegistrationFormType extends BaseType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        parent::buildForm($builder, $options);

        $builder->add('userType', 'entity', array(
                    'class' => 'KbUserBundle:UserType',
                    'label' => 'form.user_type',
                    'translation_domain' => 'FOSUserBundle',
                    'required' => true))
                ->add('lastname', 'text', array('translation_domain' => 'FOSUserBundle','label' => 'form.lastname'))
                ->add('firstname', 'text', array('translation_domain' => 'FOSUserBundle','label' => 'form.firstname'));
               
    }

   

    public function getName() {
        return 'kb_user_registration';
    }

}
