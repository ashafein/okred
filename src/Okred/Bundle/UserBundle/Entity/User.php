<?php
namespace Okred\Bundle\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Okred\Bundle\JobBundle\Entity as JOB;
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
     * @var integer
     *
     * @ORM\Column(name="state", type="integer", nullable=true)
     */
    protected $state;

    /**
     *
     * @ORM\OneToOne(targetEntity="UserInfo")
     * joinColumns={@ORM\JoinColumn(name="id", referencedColumnName="id")},
     *
     */
    protected $userInfo;

    /**
     * @ORM\OneToOne(targetEntity="Okred\Bundle\JobBundle\Entity\Resume", mappedBy="user")
     */
    protected $resume;

    /**
     * @ORM\OneToMany(targetEntity="Okred\Bundle\JobBundle\Entity\Vacancy", mappedBy="user")
     */
    protected $vacancy;

    /**
     * @ORM\ManyToMany(targetEntity="Okred\Bundle\JobBundle\Entity\Company", mappedBy="users")
     */
    protected $companies;

    /**
     * @ORM\OneToOne(targetEntity="Okred\Bundle\JobBundle\Entity\Company", mappedBy="owner")
     *
     */
    protected $ownCompany;

    /**
     * @ORM\ManyToOne(targetEntity="Okred\Bundle\JobBundle\Entity\City")
     * @ORM\JoinColumn(name="city_id", referencedColumnName="id")
     */
    protected $residence;


    /**
     * @ORM\ManyToOne(targetEntity="Okred\Bundle\JobBundle\Entity\Country")
     * @ORM\JoinColumn(name="country_id", referencedColumnName="id")
     */
    protected $citizenship;


    /**
     * @ORM\ManyToOne(targetEntity="Okred\Bundle\JobBundle\Entity\Region")
     * @ORM\JoinColumn(name="region_id", referencedColumnName="id")
     */
    protected $region;


    /**
     * @ORM\ManyToOne(targetEntity="Okred\Bundle\JobBundle\Entity\EducationLvl")
     * @ORM\JoinColumn(name="education_lvl_id", referencedColumnName="id")
     */
    protected $educationLvl;


    /**
     * @ORM\OneToMany(targetEntity="Okred\Bundle\JobBundle\Entity\Education",  mappedBy="user")
     */
    protected $education;


    /**
     * @ORM\OneToMany(targetEntity="Okred\Bundle\JobBundle\Entity\Experience",mappedBy="user")
     */
    protected $experience;

    /**
     * @ORM\ManyToMany(targetEntity="Okred\Bundle\JobBundle\Entity\Language")
     * @ORM\JoinTable(name="workman_language",
     * joinColumns={@ORM\JoinColumn(name="workman_id", referencedColumnName="id")},
     * inverseJoinColumns={@ORM\JoinColumn(name="language_id", referencedColumnName="id")}
     *)
     */
    protected $language;

    /**
     *@ORM\OneToMany(targetEntity="Okred\Bundle\JobBundle\Entity\Portfolio", mappedBy="user")
     */
    protected $portfolio;

    /**
     * @ORM\ManyToMany(targetEntity="Okred\Bundle\JobBundle\Entity\Country")
     * @ORM\JoinTable(name="workman_job_allow",
     * joinColumns={@ORM\JoinColumn(name="workman_id", referencedColumnName="id")},
     * inverseJoinColumns={@ORM\JoinColumn(name="country_id", referencedColumnName="id")}
     *)
     */
    protected $jobAllow;

    /**
     * @ORM\OneToMany(targetEntity="Okred\Bundle\JobBundle\Entity\Response",  mappedBy="user")
     */
    protected $response;

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
   /* public function getFullname()
    {
        return sprintf("%s %s", $this->getFirstname(), $this->getLastname());
    }
*/
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
