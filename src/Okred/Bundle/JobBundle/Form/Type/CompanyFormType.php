<?php
namespace Okred\Bundle\JobBundle\Form\Type;

use Okred\Bundle\JobBundle\Entity\Company;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Translation\TranslatorInterface;

class CompanyFormType extends AbstractType
{
    /** @var TranslatorInterface */
    private $translator;

    public function __construct(TranslatorInterface $translator)
    {
        $this->translator = $translator;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $trans = $this->translator;

        $builder
            ->add(
                'name',
                null,
                array(
                    'label'              => 'company.name',
                    'translation_domain' => 'OkredJobBundle',
                )
            )
            ->add(
                'phone',
                null,
                array(
                    'label'              => 'company.phone',
                    'translation_domain' => 'OkredJobBundle',
                )
            )
            ->add(
                'companyType',
                'choice',
                array(
                    'label'              => 'company.companyType',
                    'choices'            => array(
                        Company::COMPANY_TYPE1 => ('1'),
                        Company::COMPANY_TYPE2 => ('2'),
                    ),
                    'translation_domain' => 'OkredJobBundle',
                )
            )
            ->add(
                'slogan',
                'textarea',
                array(
                    'label'              => 'company.slogan',
                    'translation_domain' => 'OkredJobBundle',
                )
            );
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(
            array(
                'data_class' => 'Okred\Bundle\JobBundle\Entity\Company',
                'required'   => false,
            )
        );
    }

    public function getName()
    {
        return 'okred_job_company_form';
    }
}
