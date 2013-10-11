<?php
namespace Okred\Bundle\JobBundle\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * Experience
 * @ORM\Entity
 * @ORM\Table(name="experience")
 */
class Experience
{
    /**
     * @var int
     * @ORM\Column(type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue()
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="company_name", type="string", length=200, nullable=true)
     */
    private $companyName;

    /**
     * @var string
     * @ORM\Column(name="position", type="string", length=200, nullable=true)
     */
    private $position;

    /**
     * @var DateTime
     * @ORM\Column(name="start_date", type="datetime", nullable=true)
     */
    private $startDate;

    /**
     * @var DateTime
     * @ORM\Column(name="end_date", type="datetime", nullable=true)
     */
    private $endDate;

    /**
     * @var string
     * @ORM\Column(name="website", type="string", length=200, nullable=true)
     */
    private $website;

    /**
     * @var City
     * @ORM\ManyToOne(targetEntity="City")
     */
    private $city;

    /**
     * @var Scope
     * @ORM\ManyToOne(targetEntity="Scope")
     */
    private $scope;


    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
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
     * Set companyName
     * @param string $value
     * @return $this;
     */
    public function setCompanyName($value)
    {
        $this->companyName = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setPosition($value)
    {
        $this->position = $value;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param DateTime $value
     * @return $this
     */
    public function setStartDate(DateTime $value)
    {
        $this->startDate = $value;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param DateTime $value
     * @return $this
     */
    public function setEndDate(DateTime $value)
    {
        $this->endDate = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setWebsite($value)
    {
        $this->website = $value;

        return $this;
    }

    /**
     * @return City
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param City $value
     */
    public function setCity($value)
    {
        $this->city = $value;
    }

    /**
     * @return Scope
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * @param Scope $value
     */
    public function setScope(Scope $value)
    {
        $this->scope = $value;
    }
}
