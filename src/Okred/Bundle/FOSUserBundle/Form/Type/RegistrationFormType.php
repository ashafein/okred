<?php
namespace Okred\Bundle\FOSUserBundle\Form\Type;

use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationFormType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        $builder
            ->add(
                'firstname',
                null,
                array('label' => 'form.first_name', 'translation_domain' => 'FOSUserBundle')
            )
            ->add(
                'lastname',
                null,
                array('label' => 'form.last_name', 'translation_domain' => 'FOSUserBundle')
            )
            ->add(
                'middlename',
                null,
                array('label' => 'form.middle_name', 'translation_domain' => 'FOSUserBundle')
            );
    }

    public function getName()
    {
        return 'okred_fos_user_registration';
    }
}