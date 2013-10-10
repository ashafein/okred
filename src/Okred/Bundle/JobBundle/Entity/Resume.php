<?php

// src/Okred/Bundle/JobBundle/Entity/Resume.php
namespace Okred\Bundle\JobBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Resume
 *
 * @ORM\Table(name="resume")
 * @ORM\Entity
 */

class Resume
{
    /**
     * @var integer
     * @ORM\Column(type="bigint")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     */

    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="workman_id", type="integer", nullable=false)
     */
    private $workmanId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=200, nullable=true)
     */
    private $name;

    /**
     * @var boolean
     *
     * @ORM\Column(name="avatar", type="boolean", nullable=true)
     */
    private $avatar;

    /**
     * @var boolean
     *
     * @ORM\Column(name="birth_date", type="boolean", nullable=true)
     */
    private $birthDate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="gender", type="boolean", nullable=true)
     */
    private $gender;

    /**
     * @var boolean
     *
     * @ORM\Column(name="residence", type="boolean", nullable=true)
     */
    private $residence;

    /**
     * @var integer
     *
     * @ORM\Column(name="movement_id", type="integer", nullable=false)
     */
    private $movementId;

    /**
     * @var integer
     *
     * @ORM\Column(name="business_trip_id", type="integer", nullable=false)
     */
    private $businessTripId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="citizenship", type="boolean", nullable=true)
     */
    private $citizenship;

    /**
     * @var boolean
     *
     * @ORM\Column(name="job_allow", type="boolean", nullable=true)
     */
    private $jobAllow;

    /**
     * @var integer
     *
     * @ORM\Column(name="time_to_arrive", type="integer", nullable=true)
     */
    private $timeToArriveId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="email", type="boolean", nullable=true)
     */
    private $email;

    /**
     * @var boolean
     *
     * @ORM\Column(name="phone", type="boolean", nullable=true)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="position_wanted", type="string", length=1024, nullable=true)
     */
    private $positionWanted;

    /**
     * @var integer
     *
     * @ORM\Column(name="scope_id", type="integer", nullable=false)
     */
    private $scopeId;

    /**
     * @var integer
     *
     * @ORM\Column(name="salary", type="integer", nullable=true)
     */
    private $salary;

    /**
     * @var integer
     *
     * @ORM\Column(name="currency_id", type="integer", nullable=false)
     */
    private $currencyId;

    /**
     * @var integer
     *
     * @ORM\Column(name="employment_id", type="integer", nullable=false)
     */
    private $employmentId;

    /**
     * @var integer
     *
     * @ORM\Column(name="schedule_id", type="integer", nullable=false)
     */
    private $scheduleId;

    /**
     * @var string
     *
     * @ORM\Column(name="additional_info", type="string", length=1024, nullable=true)
     */
    private $additionalInfo;

    /**
     * @var integer
     *
     * @ORM\Column(name="state", type="integer", nullable=true)
     */
    private $state;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @ORM\OneToOne(targetEntity="Okred\Bundle\UserBundle\Entity\User", inversedBy="resume")
     * @ORM\JoinColumn(name="workman_id", referencedColumnName="id")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="Schedule")
     * @ORM\JoinColumn(name="schedule_id", referencedColumnName="id")
     */
    private $schedule;

    /**
     * @ORM\ManyToOne(targetEntity="Movement")
     * @ORM\JoinColumn(name="movement_id", referencedColumnName="id")
     */
    private $movement;

    /**
     * @ORM\ManyToOne(targetEntity="businessTrip")
     * @ORM\JoinColumn(name="business_trip_id", referencedColumnName="id")
     */
    private $businessTrip;


    /**
     * @ORM\ManyToOne(targetEntity="TimeToArrive")
     * @ORM\JoinColumn(name="time_to_arrive_id", referencedColumnName="id")
     */
    private $timeToArrive;

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
     * @ORM\ManyToOne(targetEntity="Employment")
     * @ORM\JoinColumn(name="employment_id", referencedColumnName="id")
     */
    private $employment;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set workmanId
     *
     * @param integer $workmanId
     * @return Resume
     */
    public function setWorkmanId($workmanId)
    {
        $this->workmanId = $workmanId;

        return $this;
    }

    /**
     * Get workmanId
     *
     * @return integer 
     */
    public function getWorkmanId()
    {
        return $this->workmanId;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Resume
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
     * Set avatar
     *
     * @param boolean $avatar
     * @return Resume
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * Get avatar
     *
     * @return boolean 
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Set birthDate
     *
     * @param boolean $birthDate
     * @return Resume
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Get birthDate
     *
     * @return boolean 
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Set gender
     *
     * @param boolean $gender
     * @return Resume
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return boolean 
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set residence
     *
     * @param boolean $residence
     * @return Resume
     */
    public function setResidence($residence)
    {
        $this->residence = $residence;

        return $this;
    }

    /**
     * Get residence
     *
     * @return boolean 
     */
    public function getResidence()
    {
        return $this->residence;
    }

    /**
     * Set movementId
     *
     * @param integer $movementId
     * @return Resume
     */
    public function setMovementId($movementId)
    {
        $this->movementId = $movementId;

        return $this;
    }

    /**
     * Get movementId
     *
     * @return integer 
     */
    public function getMovementId()
    {
        return $this->movementId;
    }

    /**
     * Set businessTripId
     *
     * @param integer $businessTripId
     * @return Resume
     */
    public function setBusinessTripId($businessTripId)
    {
        $this->businessTripId = $businessTripId;

        return $this;
    }

    /**
     * Get businessTripId
     *
     * @return integer 
     */
    public function getBusinessTripId()
    {
        return $this->businessTripId;
    }

    /**
     * Set citizenship
     *
     * @param boolean $citizenship
     * @return Resume
     */
    public function setCitizenship($citizenship)
    {
        $this->citizenship = $citizenship;

        return $this;
    }

    /**
     * Get citizenship
     *
     * @return boolean 
     */
    public function getCitizenship()
    {
        return $this->citizenship;
    }

    /**
     * Set jobAllow
     *
     * @param boolean $jobAllow
     * @return Resume
     */
    public function setJobAllow($jobAllow)
    {
        $this->jobAllow = $jobAllow;

        return $this;
    }

    /**
     * Get jobAllow
     *
     * @return boolean 
     */
    public function getJobAllow()
    {
        return $this->jobAllow;
    }

    /**
     * Set timeToArriveId
     *
     * @param integer $timeToArriveId
     * @return Resume
     */
    public function setTimeToArriveId($timeToArriveId)
    {
        $this->timeToArriveId = $timeToArriveId;

        return $this;
    }

    /**
     * Get timeToArriveId
     *
     * @return integer 
     */
    public function getTimeToArriveId()
    {
        return $this->timeToArriveId;
    }

    /**
     * Set email
     *
     * @param boolean $email
     * @return Resume
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return boolean 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set phone
     *
     * @param boolean $phone
     * @return Resume
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return boolean 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set positionWanted
     *
     * @param string $positionWanted
     * @return Resume
     */
    public function setPositionWanted($positionWanted)
    {
        $this->positionWanted = $positionWanted;

        return $this;
    }

    /**
     * Get positionWanted
     *
     * @return string 
     */
    public function getPositionWanted()
    {
        return $this->positionWanted;
    }

    /**
     * Set scopeId
     *
     * @param integer $scopeId
     * @return Resume
     */
    public function setScopeId($scopeId)
    {
        $this->scopeId = $scopeId;

        return $this;
    }

    /**
     * Get scopeId
     *
     * @return integer 
     */
    public function getScopeId()
    {
        return $this->scopeId;
    }

    /**
     * Set salary
     *
     * @param integer $salary
     * @return Resume
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;

        return $this;
    }

    /**
     * Get salary
     *
     * @return integer 
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * Set currencyId
     *
     * @param integer $currencyId
     * @return Resume
     */
    public function setCurrencyId($currencyId)
    {
        $this->currencyId = $currencyId;

        return $this;
    }

    /**
     * Get currencyId
     *
     * @return integer 
     */
    public function getCurrencyId()
    {
        return $this->currencyId;
    }

    /**
     * Set employmentId
     *
     * @param integer $employmentId
     * @return Resume
     */
    public function setEmploymentId($employmentId)
    {
        $this->employmentId = $employmentId;

        return $this;
    }

    /**
     * Get employmentId
     *
     * @return integer 
     */
    public function getEmploymentId()
    {
        return $this->employmentId;
    }

    /**
     * Set scheduleId
     *
     * @param integer $scheduleId
     * @return Resume
     */
    public function setScheduleId($scheduleId)
    {
        $this->scheduleId = $scheduleId;

        return $this;
    }

    /**
     * Get scheduleId
     *
     * @return integer 
     */
    public function getScheduleId()
    {
        return $this->scheduleId;
    }

    /**
     * Set additionalInfo
     *
     * @param string $additionalInfo
     * @return Resume
     */
    public function setAdditionalInfo($additionalInfo)
    {
        $this->additionalInfo = $additionalInfo;

        return $this;
    }

    /**
     * Get additionalInfo
     *
     * @return string 
     */
    public function getAdditionalInfo()
    {
        return $this->additionalInfo;
    }

    /**
     * Set state
     *
     * @param integer $state
     * @return Resume
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
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
     * @return Resume
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
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
     * @return Resume
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
}
