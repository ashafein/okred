<?php
// src/Okred/Bundle/JobBundle/Entity/Vacancy.php
namespace Okred\Bundle\JobBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity()
 * @ORM\Table(name="fos_job_vacancy")
 */
class Vacancy
{
    /**
     * @var integer
     * @ORM\Column(type="bigint")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="bigint")
     */
    protected $employer_id;

    /**
     * @ORM\Column(type="text")
     */
    protected $name;

    /**
     * @ORM\Column(type="bigint")
     */
    protected $region_id;

    /**
     * @ORM\Column(type="bigint")
     */
    protected $salary_from;

    /**
     * @ORM\Column(type="bigint")
     */
    protected $salary_to;

    /**
     * @ORM\Column(type="bigint")
     */
    protected $currency_id;

    /**
     * @ORM\Column(type="bigint")
     */
    protected $expirience_id;

    /**
     * @ORM\Column(type="text")
     */
    protected $description;

    /**
     * @ORM\Column(type="text")
     */
    protected $address;

    /**
     * @ORM\Column(type="bigint")
     */
    protected $activity_sphere_id;

    /**
     * @ORM\Column(type="text")
     */
    protected $functions;

    /**
     * @ORM\Column(type="integer")
     */
    protected $education_lvl_id;

    /**
     * @ORM\Column(type="integer")
     */
    protected $schedule;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $created_at;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $updated_at;
    /**
     * @return integer $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set employer_id
     *
     * @param integer $employerId
     * @return Vacancy
     */
    public function setEmployerId($employerId)
    {
        $this->employer_id = $employerId;
    
        return $this;
    }

    /**
     * Get employer_id
     *
     * @return integer 
     */
    public function getEmployerId()
    {
        return $this->employer_id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Vacancy
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set region_id
     *
     * @param integer $regionId
     * @return Vacancy
     */
    public function setRegionId($regionId)
    {
        $this->region_id = $regionId;
    
        return $this;
    }

    /**
     * Get region_id
     *
     * @return integer 
     */
    public function getRegionId()
    {
        return $this->region_id;
    }

    /**
     * Set salary_from
     *
     * @param integer $salaryFrom
     * @return Vacancy
     */
    public function setSalaryFrom($salaryFrom)
    {
        $this->salary_from = $salaryFrom;
    
        return $this;
    }

    /**
     * Get salary_from
     *
     * @return integer 
     */
    public function getSalaryFrom()
    {
        return $this->salary_from;
    }

    /**
     * Set salary_to
     *
     * @param integer $salaryTo
     * @return Vacancy
     */
    public function setSalaryTo($salaryTo)
    {
        $this->salary_to = $salaryTo;
    
        return $this;
    }

    /**
     * Get salary_to
     *
     * @return integer 
     */
    public function getSalaryTo()
    {
        return $this->salary_to;
    }

    /**
     * Set currency_id
     *
     * @param integer $currencyId
     * @return Vacancy
     */
    public function setCurrencyId($currencyId)
    {
        $this->currency_id = $currencyId;
    
        return $this;
    }

    /**
     * Get currency_id
     *
     * @return integer 
     */
    public function getCurrencyId()
    {
        return $this->currency_id;
    }

    /**
     * Set expirience_id
     *
     * @param integer $expirienceId
     * @return Vacancy
     */
    public function setExpirienceId($expirienceId)
    {
        $this->expirience_id = $expirienceId;
    
        return $this;
    }

    /**
     * Get expirience_id
     *
     * @return integer 
     */
    public function getExpirienceId()
    {
        return $this->expirience_id;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Vacancy
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
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
     * @return Vacancy
     */
    public function setAddress($address)
    {
        $this->address = $address;
    
        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set activity_sphere_id
     *
     * @param integer $activitySphereId
     * @return Vacancy
     */
    public function setActivitySphereId($activitySphereId)
    {
        $this->activity_sphere_id = $activitySphereId;
    
        return $this;
    }

    /**
     * Get activity_sphere_id
     *
     * @return integer 
     */
    public function getActivitySphereId()
    {
        return $this->activity_sphere_id;
    }

    /**
     * Set functions
     *
     * @param string $functions
     * @return Vacancy
     */
    public function setFunctions($functions)
    {
        $this->functions = $functions;
    
        return $this;
    }

    /**
     * Get functions
     *
     * @return string 
     */
    public function getFunctions()
    {
        return $this->functions;
    }

    /**
     * Set education_lvl_id
     *
     * @param integer $educationLvlId
     * @return Vacancy
     */
    public function setEducationLvlId($educationLvlId)
    {
        $this->education_lvl_id = $educationLvlId;
    
        return $this;
    }

    /**
     * Get education_lvl_id
     *
     * @return integer 
     */
    public function getEducationLvlId()
    {
        return $this->education_lvl_id;
    }

    /**
     * Set schedule
     *
     * @param integer $schedule
     * @return Vacancy
     */
    public function setSchedule($schedule)
    {
        $this->schedule = $schedule;
    
        return $this;
    }

    /**
     * Get schedule
     *
     * @return integer 
     */
    public function getSchedule()
    {
        return $this->schedule;
    }

    /**
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return Vacancy
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;
    
        return $this;
    }

    /**
     * Get created_at
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set updated_at
     *
     * @param \DateTime $updatedAt
     * @return Vacancy
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updated_at = $updatedAt;
    
        return $this;
    }

    /**
     * Get updated_at
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }
}