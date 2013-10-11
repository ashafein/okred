<?php
namespace Okred\Bundle\JobBundle\Form\Type;

use Okred\Bundle\JobBundle\Entity\Resume;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Translation\TranslatorInterface;

class ResumeFormType extends AbstractType
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
                'title',
                null,
                array(
                    'label'              => 'resume.title',
                    'translation_domain' => 'OkredJobBundle',
                )
            )
            ->add(
                'salary',
                null,
                array(
                    'label'              => 'resume.salary',
                    'translation_domain' => 'OkredJobBundle',
                )
            )
            ->add(
                'employment',
                'choice',
                array(
                    'label'              => 'resume.employment.label',
                    'choices'            => array(
                        Resume::EMPLOYMENT_FULLTIME => $trans->trans('resume.employment.fulltime'),
                        Resume::EMPLOYMENT_PARTTIME => $trans->trans('resume.employment.parttime'),
                    ),
                    'translation_domain' => 'OkredJobBundle',
                )
            )
            ->add(
                'keySkills',
                'textarea',
                array(
                    'label'              => 'resume.key_skills',
                    'translation_domain' => 'OkredJobBundle',
                )
            );
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(
            array(
                'data_class' => 'Okred\Bundle\JobBundle\Entity\Resume',
                'required'   => false,
            )
        );
    }

    public function getName()
    {
        return 'okred_job_resume_form';
    }
}
