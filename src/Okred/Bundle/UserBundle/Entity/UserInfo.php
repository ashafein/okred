<?php
namespace Okred\Bundle\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="fos_user_info")
 */
class UserInfo extends BaseUser
{

    /**
     * @var integer
     * @ORM\Column(type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue()
     */
    protected $id;

    /**
     * @var DateTime
     * @ORM\Column(name="date_of_birth", type="datetime", nullable=true)
     */
    protected $dateOfBirth;
    /**
     * @var string
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    protected $gender = UserInterface::GENDER_UNKNOWN; // set the default to unknown

    /**
     * @var string
     * @ORM\Column(type="string", length=8, nullable=true)
     */
    protected $locale;

    /**
     * @var string
     * * @ORM\Column(type="string", length=64, nullable=true)
     */
    protected $timezone;


    /**
     * @var integer
     * * @ORM\Column(type="string", length=64, nullable=true)
     */
    protected $residence_id;

    /**
     * @var integer
     * * @ORM\Column(type="string", length=64, nullable=true)
     */
    protected $citizenship_id;

    /**
     *
     *@ORM\OneToOne(targetEntity = "Resume")
     *
     */
    protected $resume;

    /**
     *
     *@ORM\OneToMany(targetEntity = "Vacancy")
     *
     */
    protected $vacancy;

    /**
     *
     *@ORM\ManyToMany(targetEntity = "Company")
     *
     */
    protected $company;

    /**
     *
     *@ORM\OneToOne(targetEntity = "Company")
     *
     */
    protected $ownCompany;

    /**
     *
     *@ORM\ManyToOne(targetEntity = "City")
     *
     */
    protected $residence;


    /**
     *
     *@ORM\ManyToOne(targetEntity = "Country")
     *
     */
    protected $citizenship;


    /**
     *
     *@ORM\ManyToOne(targetEntity = "Region")
     *
     */
    protected $region;


    /**
     *
     *@ORM\ManyToOne(targetEntity = "EducationLvl")
     *
     */
    protected $educationLvl;


    /**
     *
     *@ORM\OneToMany(targetEntity = "Education")
     *
     */
    protected $education;


    /**
     *
     *@ORM\OneToMany(targetEntity = "Experience")
     *
     */
    protected $experience;

    /**
     *
     *@ORM\ManyToMany(targetEntity = "Language")
     *
     */
    protected $language;

    /**
     *
     *@ORM\ManyToOne(targetEntity = "BusinessTrip")
     *
     */
    protected $businessTrip;

    /**
     *
     *@ORM\OneToMany(targetEntity = "Portfolio")
     *
     */
    protected $portfolio;

    /**
     *
     *@ORM\OneToMany(targetEntity = "Country")
     *
     */
    protected $jobAllow;
}
