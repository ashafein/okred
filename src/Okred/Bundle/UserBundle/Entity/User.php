<?php
namespace Okred\Bundle\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="fos_user_user")
 */
class User extends BaseUser
{
    /**
     * @var integer
     * @ORM\Column(type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue()
     */
    protected $id;

    /**
     * @var string
     * @ORM\Column(type="string", length=64, nullable=true)
     */
    protected $phone;


    /**
     * @var string
     * @ORM\Column(type="string", length=64, nullable=true)
     */
    protected $firstname;

    /**
     * @var string
     * @ORM\Column(type="string", length=64, nullable=true)
     */
    protected $lastname;

    /**
     * @var string
     * @ORM\Column(type="string", length=64, nullable=true)
     */
    protected $middlename;

    /**
     * @var DateTime
     * @ORM\Column(name="created_at", type="datetime")
     */
    protected $createdAt;

    /**
     * @var DateTime
     * @ORM\Column(name="updated_at", type="datetime")
     */
    protected $updatedAt;

    /**
     * @var integer
     * @ORM\Column(type="string", length=64, nullable=true)
     */
    protected $emailverified;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=200, nullable=true)
     */
    protected $role;

    /**
     * @var integer
     *
     * @ORM\Column(name="state", type="integer", nullable=true)
     */
    protected $state;

    /**
     *
     * @ORM\OneToOne(targetEntity = "UserInfo")
     * joinColumns={@ORM\JoinColumn(name="id", referencedColumnName="id")},
     *
     */
    protected $userInfo;

    /**
     * @ORM\OneToOne(targetEntity = "Resume")
     * @ORM\JoinColumn(name="workman_id", referencedColumnName="id")
     */
    protected $resume;

    /**
     *
     * @ORM\OneToMany(targetEntity = "Vacancy")
     * @ORM\JoinColumn(name="employer_id", referencedColumnName="id")
     */
    protected $vacancy;

    /**
     * @ORM\ManyToMany(targetEntity = "Company")
     * @ORM\JoinTable(name="employer_company",
     * joinColumns={@ORM\JoinColumn(name="employer_id", referencedColumnName="id")},
     * inverseJoinColumns={@ORM\JoinColumn(name="company_id", referencedColumnName="id")}
     */
    protected $company;

    /**
     * @ORM\OneToOne(targetEntity = "Company")
     * @ORM\JoinColumn(name="owner_id", referencedColumnName="id")
     *
     */
    protected $ownCompany;

    /**
     * @ORM\ManyToOne(targetEntity = "City")
     * @ORM\JoinColumn(name="city_id", referencedColumnName="id")
     */
    protected $residence;


    /**
     * @ORM\ManyToOne(targetEntity = "Country")
     * @ORM\JoinColumn(name="country_id", referencedColumnName="id")
     */
    protected $citizenship;


    /**
     * @ORM\ManyToOne(targetEntity = "Region")
     * @ORM\JoinColumn(name="region_id", referencedColumnName="id")
     */
    protected $region;


    /**
     * @ORM\ManyToOne(targetEntity = "EducationLvl")
     * @ORM\JoinColumn(name="education_lvl_id", referencedColumnName="id")
     */
    protected $educationLvl;


    /**
     * @ORM\OneToMany(targetEntity = "Education")
     * @ORM\JoinColumn(name="workman_id", referencedColumnName="id")
     */
    protected $education;


    /**
     * @ORM\OneToMany(targetEntity = "Experience")
     * @ORM\JoinColumn(name="workman_id", referencedColumnName="id")
     */
    protected $experience;

    /**
     * @ORM\ManyToMany(targetEntity = "Language")
     * @ORM\JoinTable(name="workman_language",
     * joinColumns={@ORM\JoinColumn(name="workman_id", referencedColumnName="id")},
     * inverseJoinColumns={@ORM\JoinColumn(name="language_id", referencedColumnName="id")}
     */
    protected $language;

    /**
     *@ORM\OneToMany(targetEntity = "Portfolio")
     * @ORM\JoinColumn(name="workman_id", referencedColumnName="id")
     */
    protected $portfolio;

    /**
     * @ORM\OneToMany(targetEntity = "Country")
     * @ORM\JoinTable(name="workman_job_allow",
     * joinColumns={@ORM\JoinColumn(name="workman_id", referencedColumnName="id")},
     * inverseJoinColumns={@ORM\JoinColumn(name="country_id", referencedColumnName="id")}

     */
    protected $jobAllow;

    /**
     * @return integer $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getFullname()
    {
        return sprintf("%s %s", $this->getFirstname(), $this->getLastname());
    }

    /**
     * @return array
     */
    public function getRealRoles()
    {
        return $this->roles;
    }

    /**
     * @param array $roles
     */
    public function setRealRoles(array $roles)
    {
        $this->setRoles($roles);
    }

}
