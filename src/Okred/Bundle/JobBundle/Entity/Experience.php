<?php
namespace Okred\Bundle\JobBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Experience
 * @ORM\Entity
 * @ORM\Table(name="experience")
 */
class Experience
{
    /**
     * @var integer
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="company_name", type="string", length=200, nullable=true)
     */
    private $companyName;

    /**
     * @var integer
     * @ORM\Column(name="city_id", type="integer")
     */
    private $cityId;

    /**
     * @var string
     * @ORM\Column(name="website", type="string", length=200, nullable=true)
     */
    private $website;

    /**
     * @var integer
     * @ORM\Column(name="scope_id", type="integer")
     */
    private $scopeId;

    /**
     * @var string
     * @ORM\Column(name="position", type="string", length=200, nullable=true)
     */
    private $position;

    /**
     * @var \DateTime
     * @ORM\Column(name="start_date", type="datetime", nullable=true)
     */
    private $startDate;

    /**
     * @var \DateTime
     * @ORM\Column(name="end_date", type="datetime", nullable=true)
     */
    private $endDate;

    /**
     * Get id
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set companyName
     *
     * @param string $companyName
     *
     * @return $this;
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * Get companyName
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
     *
     * @return $this
     */
    public function setIdCity($idCity)
    {
        $this->cityId = $idCity;

        return $this;
    }

    /**
     * Get idCity
     * @return integer
     */
    public function getIdCity()
    {
        return $this->cityId;
    }

    /**
     * Set website
     *
     * @param string $website
     *
     * @return $this
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website
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
     *
     * @return $this
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
     * Set position
     *
     * @param string $position
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
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
     *
     * @return $this
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
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
     *
     * @return $this
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }
}
