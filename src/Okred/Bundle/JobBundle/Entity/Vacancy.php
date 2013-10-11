<?php
namespace Okred\Bundle\JobBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vacancy
 * @ORM\Table(name="vacancy")
 * @ORM\Entity
 */

class Vacancy
{
    /**
     * @var int
     * @ORM\Column(type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     */

    private $id;

    /**
     * @var string
     * @ORM\Column(name="name", type="string", length=200, nullable=false)
     */
    private $name;

    /**
     * @var integer
     * @ORM\Column(name="region_id", type="integer", nullable=false)
     */
    private $regionId;


    /**
     * @var integer
     * @ORM\Column(name="city_id", type="integer", nullable=false)
     */
    private $cityId;

    /**
     * @var integer
     * @ORM\Column(name="country_id", type="integer", nullable=false)
     */
    private $countryId;

    /**
     * @var integer
     * @ORM\Column(name="salary_from", type="integer", nullable=true)
     */
    private $salaryFrom;

    /**
     * @var integer
     * @ORM\Column(name="salary_to", type="integer", nullable=true)
     */
    private $salaryTo;

    /**
     * @var integer
     * @ORM\Column(name="currency_id", type="integer", nullable=true)
     */
    private $currencyId;

    /**
     * @var integer
     * @ORM\Column(name="experienced_id", type="integer", nullable=true)
     */
    private $experiencedId;

    /**
     * @var string
     * @ORM\Column(name="description", type="string", length=1024, nullable=true)
     */
    private $description;

    /**
     * @var string
     * @ORM\Column(name="address", type="string", length=500, nullable=true)
     */
    private $address;

    /**
     * @var integer
     * @ORM\Column(name="scope_id", type="integer", nullable=true)
     */
    private $scopeId;

    /**
     * @var string
     * @ORM\Column(name="functions", type="string", length=1024, nullable=true)
     */
    private $functions;

    /**
     * @var integer
     * @ORM\Column(name="education_lvl_id", type="integer", nullable=true)
     */
    private $educationLvlId;

    /**
     * @var integer
     * @ORM\Column(name="schedule_id", type="integer", length=500, nullable=true)
     */
    private $scheduleId;

    /**
     * @var integer
     * @ORM\Column(name="state", type="integer", nullable=true)
     */
    private $state;

    /**
     * @var \DateTime
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @ORM\ManyToOne(targetEntity="Scope")
     * @ORM\JoinColumn(name="scope_id", referencedColumnName="id")
     */
    private $scope;

    /**
     * @ORM\ManyToOne(targetEntity="Currency")
     * @ORM\JoinColumn(name="currency_id", referencedColumnName="id")
     */
    private $currency;

    /**
     * @ORM\ManyToOne(targetEntity="EducationLvl")
     * @ORM\JoinColumn(name="education_lvl_id", referencedColumnName="id")
     */
    private $educationLvl;

    /**
     * @ORM\ManyToOne(targetEntity="Schedule")
     * @ORM\JoinColumn(name="schedule_id", referencedColumnName="id")
     */
    private $schedule;

    /**
     * @ORM\ManyToOne(targetEntity="City")
     * @ORM\JoinColumn(name="city_id", referencedColumnName="id")
     */
    private $city;

    /**
     * @ORM\ManyToOne(targetEntity="Region")
     * @ORM\JoinColumn(name="region_id", referencedColumnName="id")
     */
    private $region;

    /**
     * @ORM\ManyToOne(targetEntity="Country")
     * @ORM\JoinColumn(name="country_id", referencedColumnName="id")
     */
    private $country;

    /**
     * @ORM\ManyToMany(targetEntity="Technology")
     * @ORM\JoinTable(name="vacancy_technology",
     * joinColumns={@ORM\JoinColumn(name="vacancy_id", referencedColumnName="id")},
     * inverseJoinColumns={@ORM\JoinColumn(name="technology_id", referencedColumnName="id", unique=true)}
     * )
     */
    private $technology;


    /**
     * @ORM\ManyToOne(targetEntity="EmployerInfo", inversedBy="vacancyList")
     * @ORM\JoinColumn(name="employer_id", referencedColumnName="id")
     */
    private $employer;

    /**
     * @ORM\OneToMany(targetEntity="Response",  mappedBy="vacancy")
     */
    protected $response;

    /**
     * Get id
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Vacancy
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set regionId
     *
     * @param integer $regionId
     *
     * @return Vacancy
     */
    public function setRegionId($regionId)
    {
        $this->regionId = $regionId;

        return $this;
    }

    /**
     * Get regionId
     * @return integer
     */
    public function getRegionId()
    {
        return $this->regionId;
    }

    /**
     * Set salaryFrom
     *
     * @param integer $salaryFrom
     *
     * @return Vacancy
     */
    public function setSalaryFrom($salaryFrom)
    {
        $this->salaryFrom = $salaryFrom;

        return $this;
    }

    /**
     * Get salaryFrom
     * @return integer
     */
    public function getSalaryFrom()
    {
        return $this->salaryFrom;
    }

    /**
     * Set salaryTo
     *
     * @param integer $salaryTo
     *
     * @return Vacancy
     */
    public function setSalaryTo($salaryTo)
    {
        $this->salaryTo = $salaryTo;

        return $this;
    }

    /**
     * Get salaryTo
     * @return integer
     */
    public function getSalaryTo()
    {
        return $this->salaryTo;
    }

    /**
     * Set currencyId
     *
     * @param integer $currencyId
     *
     * @return Vacancy
     */
    public function setCurrencyId($currencyId)
    {
        $this->currencyId = $currencyId;

        return $this;
    }

    /**
     * Get currencyId
     * @return integer
     */
    public function getCurrencyId()
    {
        return $this->currencyId;
    }

    /**
     * Set experienceId
     *
     * @param integer $experienceId
     *
     * @return Vacancy
     */
    public function setExperienceId($experienceId)
    {
        $this->experienceId = $experienceId;

        return $this;
    }

    /**
     * Get experienceId
     * @return integer
     */
    public function getExperienceId()
    {
        return $this->experienceId;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Vacancy
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return Vacancy
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set scopeId
     *
     * @param integer $scopeId
     *
     * @return Vacancy
     */
    public function setScopeId($scopeId)
    {
        $this->scopeId = $scopeId;

        return $this;
    }

    /**
     * Get scopeId
     * @return integer
     */
    public function getScopeId()
    {
        return $this->scopeId;
    }

    /**
     * Set functions
     *
     * @param string $functions
     *
     * @return Vacancy
     */
    public function setFunctions($functions)
    {
        $this->functions = $functions;

        return $this;
    }

    /**
     * Get functions
     * @return string
     */
    public function getFunctions()
    {
        return $this->functions;
    }

    /**
     * Set educationLvlId
     *
     * @param integer $educationLvlId
     *
     * @return Vacancy
     */
    public function setEducationLvlId($educationLvlId)
    {
        $this->educationLvlId = $educationLvlId;

        return $this;
    }

    /**
     * Get educationLvlId
     * @return integer
     */
    public function getEducationLvlId()
    {
        return $this->educationLvlId;
    }

    /**
     * Set scheduleId
     *
     * @param integer $scheduleId
     *
     * @return Vacancy
     */
    public function setScheduleId($scheduleId)
    {
        $this->scheduleId = $scheduleId;

        return $this;
    }

    /**
     * Get scheduleId
     * @return integer
     */
    public function getScheduleId()
    {
        return $this->scheduleId;
    }

    /**
     * Set state
     *
     * @param integer $state
     *
     * @return Vacancy
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     * @return integer
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Vacancy
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Vacancy
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->technology = new \Doctrine\Common\Collections\ArrayCollection();
        $this->response = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set cityId
     *
     * @param integer $cityId
     * @return Vacancy
     */
    public function setCityId($cityId)
    {
        $this->cityId = $cityId;

        return $this;
    }

    /**
     * Get cityId
     *
     * @return integer 
     */
    public function getCityId()
    {
        return $this->cityId;
    }

    /**
     * Set countryId
     *
     * @param integer $countryId
     * @return Vacancy
     */
    public function setCountryId($countryId)
    {
        $this->countryId = $countryId;

        return $this;
    }

    /**
     * Get countryId
     *
     * @return integer 
     */
    public function getCountryId()
    {
        return $this->countryId;
    }

    /**
     * Set experiencedId
     *
     * @param integer $experiencedId
     * @return Vacancy
     */
    public function setExperiencedId($experiencedId)
    {
        $this->experiencedId = $experiencedId;

        return $this;
    }

    /**
     * Get experiencedId
     *
     * @return integer 
     */
    public function getExperiencedId()
    {
        return $this->experiencedId;
    }

    /**
     * Set scope
     *
     * @param \Okred\Bundle\JobBundle\Entity\Scope $scope
     * @return Vacancy
     */
    public function setScope(\Okred\Bundle\JobBundle\Entity\Scope $scope = null)
    {
        $this->scope = $scope;

        return $this;
    }

    /**
     * Get scope
     *
     * @return \Okred\Bundle\JobBundle\Entity\Scope 
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * Set currency
     *
     * @param \Okred\Bundle\JobBundle\Entity\Currency $currency
     * @return Vacancy
     */
    public function setCurrency(\Okred\Bundle\JobBundle\Entity\Currency $currency = null)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get currency
     *
     * @return \Okred\Bundle\JobBundle\Entity\Currency 
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set educationLvl
     *
     * @param \Okred\Bundle\JobBundle\Entity\EducationLvl $educationLvl
     * @return Vacancy
     */
    public function setEducationLvl(\Okred\Bundle\JobBundle\Entity\EducationLvl $educationLvl = null)
    {
        $this->educationLvl = $educationLvl;

        return $this;
    }

    /**
     * Get educationLvl
     *
     * @return \Okred\Bundle\JobBundle\Entity\EducationLvl 
     */
    public function getEducationLvl()
    {
        return $this->educationLvl;
    }

    /**
     * Set schedule
     *
     * @param \Okred\Bundle\JobBundle\Entity\Schedule $schedule
     * @return Vacancy
     */
    public function setSchedule(\Okred\Bundle\JobBundle\Entity\Schedule $schedule = null)
    {
        $this->schedule = $schedule;

        return $this;
    }

    /**
     * Get schedule
     *
     * @return \Okred\Bundle\JobBundle\Entity\Schedule 
     */
    public function getSchedule()
    {
        return $this->schedule;
    }

    /**
     * Set city
     *
     * @param \Okred\Bundle\JobBundle\Entity\City $city
     * @return Vacancy
     */
    public function setCity(\Okred\Bundle\JobBundle\Entity\City $city = null)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return \Okred\Bundle\JobBundle\Entity\City 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set region
     *
     * @param \Okred\Bundle\JobBundle\Entity\Region $region
     * @return Vacancy
     */
    public function setRegion(\Okred\Bundle\JobBundle\Entity\Region $region = null)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return \Okred\Bundle\JobBundle\Entity\Region 
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set country
     *
     * @param \Okred\Bundle\JobBundle\Entity\Country $country
     * @return Vacancy
     */
    public function setCountry(\Okred\Bundle\JobBundle\Entity\Country $country = null)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return \Okred\Bundle\JobBundle\Entity\Country 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Add technology
     *
     * @param \Okred\Bundle\JobBundle\Entity\Technology $technology
     * @return Vacancy
     */
    public function addTechnology(\Okred\Bundle\JobBundle\Entity\Technology $technology)
    {
        $this->technology[] = $technology;

        return $this;
    }

    /**
     * Remove technology
     *
     * @param \Okred\Bundle\JobBundle\Entity\Technology $technology
     */
    public function removeTechnology(\Okred\Bundle\JobBundle\Entity\Technology $technology)
    {
        $this->technology->removeElement($technology);
    }

    /**
     * Get technology
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTechnology()
    {
        return $this->technology;
    }

    /**
     * Set employer
     *
     * @param \Okred\Bundle\JobBundle\Entity\EmployerInfo $employer
     * @return Vacancy
     */
    public function setEmployer(\Okred\Bundle\JobBundle\Entity\EmployerInfo $employer = null)
    {
        $this->employer = $employer;

        return $this;
    }

    /**
     * Get employer
     *
     * @return \Okred\Bundle\JobBundle\Entity\EmployerInfo 
     */
    public function getEmployer()
    {
        return $this->employer;
    }

    /**
     * Add response
     *
     * @param \Okred\Bundle\JobBundle\Entity\Response $response
     * @return Vacancy
     */
    public function addResponse(\Okred\Bundle\JobBundle\Entity\Response $response)
    {
        $this->response[] = $response;

        return $this;
    }

    /**
     * Remove response
     *
     * @param \Okred\Bundle\JobBundle\Entity\Response $response
     */
    public function removeResponse(\Okred\Bundle\JobBundle\Entity\Response $response)
    {
        $this->response->removeElement($response);
    }

    /**
     * Get response
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getResponse()
    {
        return $this->response;
    }
}
