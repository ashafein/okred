<?php
// src/Okred/Bundle/JobBundle/Entity/Resume.php
namespace Okred\Bundle\JobBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity()
 * @ORM\Table(name="fos_job_resume")
 */
class Resume
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
    protected $workman_id;

    /**
     * @ORM\Column(type="text")
     */
    protected $name;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $birth_date;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $gender;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $residence;

    /**
     * @ORM\Column(type="integer")
     */
    protected $movement_id;

    /**
     * @ORM\Column(type="integer")
     */
    protected $business_trip_id;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $citizenship;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $job_allow;

    /**
     * @ORM\Column(type="integer")
     */
    protected $time_to_arrive;

    /**
     * @ORM\Column(type="text")
     */
    protected $mail;

    /**
     * @ORM\Column(type="string")
     */
    protected $phone;

    /**
     * @ORM\Column(type="text")
     */
    protected $position_wanted;

    /**
     * @ORM\Column(type="bigint")
     */
    protected $activity_sphere_id;

    /**
     * @ORM\Column(type="bigint")
     */
    protected $salary;

    /**
     * @ORM\Column(type="bigint")
     */
    protected $currency_id;

    /**
     * @ORM\Column(type="integer")
     */
    protected $employment_id;

    /**
     * @ORM\Column(type="integer")
     */
    protected $schedule_id;

    /**
     * @ORM\Column(type="text")
     */
    protected $additional_info;

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
     * Set workman_id
     *
     * @param integer $workmanId
     * @return Resume
     */
    public function setWorkmanId($workmanId)
    {
        $this->workman_id = $workmanId;
    
        return $this;
    }

    /**
     * Get workman_id
     *
     * @return integer 
     */
    public function getWorkmanId()
    {
        return $this->workman_id;
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
     * Set birth_date
     *
     * @param boolean $birthDate
     * @return Resume
     */
    public function setBirthDate($birthDate)
    {
        $this->birth_date = $birthDate;
    
        return $this;
    }

    /**
     * Get birth_date
     *
     * @return boolean 
     */
    public function getBirthDate()
    {
        return $this->birth_date;
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
     * Set movement_id
     *
     * @param integer $movementId
     * @return Resume
     */
    public function setMovementId($movementId)
    {
        $this->movement_id = $movementId;
    
        return $this;
    }

    /**
     * Get movement_id
     *
     * @return integer 
     */
    public function getMovementId()
    {
        return $this->movement_id;
    }

    /**
     * Set business_trip_id
     *
     * @param integer $businessTripId
     * @return Resume
     */
    public function setBusinessTripId($businessTripId)
    {
        $this->business_trip_id = $businessTripId;
    
        return $this;
    }

    /**
     * Get business_trip_id
     *
     * @return integer 
     */
    public function getBusinessTripId()
    {
        return $this->business_trip_id;
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
     * Set job_allow
     *
     * @param boolean $jobAllow
     * @return Resume
     */
    public function setJobAllow($jobAllow)
    {
        $this->job_allow = $jobAllow;
    
        return $this;
    }

    /**
     * Get job_allow
     *
     * @return boolean 
     */
    public function getJobAllow()
    {
        return $this->job_allow;
    }

    /**
     * Set time_to_arrive
     *
     * @param integer $timeToArrive
     * @return Resume
     */
    public function setTimeToArrive($timeToArrive)
    {
        $this->time_to_arrive = $timeToArrive;
    
        return $this;
    }

    /**
     * Get time_to_arrive
     *
     * @return integer 
     */
    public function getTimeToArrive()
    {
        return $this->time_to_arrive;
    }

    /**
     * Set mail
     *
     * @param string $mail
     * @return Resume
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    
        return $this;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set phone
     *
     * @param string $phone
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
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set position_wanted
     *
     * @param string $positionWanted
     * @return Resume
     */
    public function setPositionWanted($positionWanted)
    {
        $this->position_wanted = $positionWanted;
    
        return $this;
    }

    /**
     * Get position_wanted
     *
     * @return string 
     */
    public function getPositionWanted()
    {
        return $this->position_wanted;
    }

    /**
     * Set activity_sphere_id
     *
     * @param integer $activitySphereId
     * @return Resume
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
     * Set currency_id
     *
     * @param integer $currencyId
     * @return Resume
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
     * Set employment_id
     *
     * @param integer $employmentId
     * @return Resume
     */
    public function setEmploymentId($employmentId)
    {
        $this->employment_id = $employmentId;
    
        return $this;
    }

    /**
     * Get employment_id
     *
     * @return integer 
     */
    public function getEmploymentId()
    {
        return $this->employment_id;
    }

    /**
     * Set schedule_id
     *
     * @param integer $scheduleId
     * @return Resume
     */
    public function setScheduleId($scheduleId)
    {
        $this->schedule_id = $scheduleId;
    
        return $this;
    }

    /**
     * Get schedule_id
     *
     * @return integer 
     */
    public function getScheduleId()
    {
        return $this->schedule_id;
    }

    /**
     * Set additional_info
     *
     * @param string $additionalInfo
     * @return Resume
     */
    public function setAdditionalInfo($additionalInfo)
    {
        $this->additional_info = $additionalInfo;
    
        return $this;
    }

    /**
     * Get additional_info
     *
     * @return string 
     */
    public function getAdditionalInfo()
    {
        return $this->additional_info;
    }

    /**
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return Resume
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
     * @return Resume
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