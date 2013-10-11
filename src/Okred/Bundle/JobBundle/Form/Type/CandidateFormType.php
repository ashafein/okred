<?php
namespace Okred\Bundle\JobBundle\Form\Type;

use Okred\Bundle\JobBundle\Entity\CandidateInfo;
use Okred\Bundle\UserBundle\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Translation\TranslatorInterface;

class CandidateFormType extends AbstractType
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
                'gender',
                'choice',
                array(
                    'label'              => 'candidate.form.gender.label',
                    'choices'            => array(
                        User::GENDER_MALE   => $trans->trans('candidate.form.gender.male'),
                        User::GENDER_FEMALE => $trans->trans('candidate.form.gender.female'),
                    ),
                    'expanded'           => true,
                    'translation_domain' => 'OkredJobBundle',
                )
            )
            ->add(
                'birthDate',
                'date',
                array(
                    'label'              => 'candidate.form.birth_date',
                    'translation_domain' => 'OkredJobBundle',
                )
            )
            ->add(
                'birthDateHide',
                'checkbox',
                array(
                    'label'              => 'candidate.form.birth_hide',
                    'translation_domain' => 'OkredJobBundle',
                )
            )
            ->add(
                'city',
                null,
                array(
                    'label'              => 'candidate.form.city',
                    'translation_domain' => 'OkredJobBundle',
                )
            )
            ->add(
                'phone1',
                null,
                array(
                    'label'              => 'candidate.form.phone1',
                    'translation_domain' => 'OkredJobBundle',
                )
            )
            ->add(
                'phone2',
                null,
                array(
                    'label'              => 'candidate.form.phone2',
                    'translation_domain' => 'OkredJobBundle',
                )
            )
            ->add(
                'phone3',
                null,
                array(
                    'label'              => 'candidate.form.phone3',
                    'translation_domain' => 'OkredJobBundle',
                )
            )
            ->add(
                'transfer',
                'choice',
                array(
                    'label'              => 'candidate.form.transfer.label',
                    'choices'            => array(
                        CandidateInfo::TRANSFER_IMPOSSIBLE => 'candidate.form.transfer.impossible',
                        CandidateInfo::TRANSFER_POSSIBLE   => 'candidate.form.transfer.possible',
                        CandidateInfo::TRANSFER_DESIRED    => 'candidate.form.transfer.desired',

                    ),
                    'expanded'           => true,
                    'translation_domain' => 'OkredJobBundle',
                )
            )
            ->add(
                'trip',
                'choice',
                array(
                    'label'              => 'candidate.form.trip.label',
                    'choices'            => array(
                        CandidateInfo::TRIP_NEVER     => 'candidate.form.trip.never',
                        CandidateInfo::TRIP_READY     => 'candidate.form.trip.ready',
                        CandidateInfo::TRIP_SOMETIMES => 'candidate.form.trip.sometimes',

                    ),
                    'expanded'           => true,
                    'translation_domain' => 'OkredJobBundle',
                )
            )->add(
                'timeToOffice',
                'choice',
                array(
                    'label'              => 'candidate.form.time_to_office.label',
                    'choices'            => array(
                        CandidateInfo::TIME_TO_OFFICE_ANY           => 'candidate.form.time_to_office.any',
                        CandidateInfo::TIME_TO_OFFICE_HOUR          => 'candidate.form.time_to_office.hour',
                        CandidateInfo::TIME_TO_OFFICE_HOUR_AND_HALF => 'candidate.form.time_to_office.hour_and_half',

                    ),
                    'expanded'           => true,
                    'translation_domain' => 'OkredJobBundle',
                )
            )->add(
                'citizenship',
                'choice',
                array(
                    'label'              => 'candidate.form.time_to_office.label',
                    'choices'            => array(
                        CandidateInfo::TIME_TO_OFFICE_ANY           => 'candidate.form.time_to_office.any',
                        CandidateInfo::TIME_TO_OFFICE_HOUR          => 'candidate.form.time_to_office.hour',
                        CandidateInfo::TIME_TO_OFFICE_HOUR_AND_HALF => 'candidate.form.time_to_office.hour_and_half',

                    ),
                    'expanded'           => true,
                    'translation_domain' => 'OkredJobBundle',
                )
            );
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(
            array(
                'data_class' => 'Okred\Bundle\JobBundle\Entity\CandidateInfo',
                'required'   => false,
            )
        );
    }

    public function getName()
    {
        return 'okred_job_candidate_form';
    }
}
