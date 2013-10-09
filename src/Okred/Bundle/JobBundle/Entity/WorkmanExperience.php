<?php
namespace Okred\Bundle\JobBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Schedule
 *
 * @ORM\Entity
 * @ORM\Table(name="workman_experience")
 */
class Schedule
{
    /**
     * @var integer
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="workman_id", type="integer")
     */
    private $workmanId;

    /**
     * @var string
     *
     * @ORM\Column(name="company_name", type="string", length=200, nullable=true)
     */
    private $companyName;

    /**
     * @var integer
     *
     * @ORM\Column(name="city_id", type="integer")
     */
    private $cityId;

    /**
     * @var string
     *
     * @ORM\Column(name="company_name", type="string", length=200, nullable=true)
     */
    private $website;

    /**
     * @var integer
     *
     * @ORM\Column(name="scope_id", type="integer")
     */
    private $scopeId;

    /**
     * @var string
     *
     * @ORM\Column(name="position", type="string", length=200, nullable=true)
     */
    private $position;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_date", type="datetime", nullable=true)
     */
    private $startDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_date", type="datetime", nullable=true)
     */
    private $endDate;


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
     * @return WorkmanExperience
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
     * Set companyName
     *
     * @param string $companyName
     * @return WorkmanExperience
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * Get companyName
     *
     * @return string 
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Set idCity
     *
     * @param integer $idCity
     * @return WorkmanExperience
     */
    public function setIdCity($idCity)
    {
        $this->idCity = $idCity;

        return $this;
    }

    /**
     * Get idCity
     *
     * @return integer 
     */
    public function getIdCity()
    {
        return $this->idCity;
    }

    /**
     * Set website
     *
     * @param string $website
     * @return WorkmanExperience
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website
     *
     * @return string 
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set scopeId
     *
     * @param integer $scopeId
     * @return WorkmanExperience
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
     * Set position
     *
     * @param string $position
     * @return WorkmanExperience
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return string 
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     * @return WorkmanExperience
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime 
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     * @return WorkmanExperience
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime 
     */
    public function getEndDate()
    {
        return $this->endDate;
    }
}
