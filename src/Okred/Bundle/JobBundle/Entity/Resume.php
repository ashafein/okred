<?php
namespace Okred\Bundle\JobBundle\Entity;

use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="resume")
 * @ORM\Entity
 */
class Resume
{
    const EMPLOYMENT_FULLTIME = 0;
    const EMPLOYMENT_PARTTIME = 1;

    /**
     * @var int
     * @ORM\Column(type="bigint")
     * @ORM\Id()
     * @ORM\GeneratedValue()
     */
    private $id;

    /**
     * @var DateTime
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @var DateTime
     * @ORM\Column(name="updated_at", type="datetime")
     */
    private $updatedAt;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @var int
     * @ORM\Column(type="integer", nullable=true)
     */
    private $salary;

    /**
     * Employment (Full-time/part-time)
     * @var int
     * @ORM\Column(type="smallint")
     */
    private $employment;

    /**
     * @var string
     * @ORM\Column(name="key_skills", type="string", length=1024, nullable=true)
     */
    private $keySkills;


    /**
     * @var CandidateInfo
     * @ORM\ManyToOne(targetEntity="CandidateInfo", inversedBy="resumeList")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="user_id")
     */
    private $candidate;

    /**
     * @var Collection
     * @ORM\ManyToMany(targetEntity="Experience")
     */
    private $experienceItems;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param DateTime $value
     * @return $this
     */
    public function setCreatedAt(DateTime $value)
    {
        $this->createdAt = $value;
        return $this;
    }

    /**
     * Get updatedAt
     * @return DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param DateTime $value
     * @return $this
     */
    public function setUpdatedAt($value)
    {
        $this->updatedAt = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setTitle($value)
    {
        $this->title = $value;
        return $this;
    }

    /**
     * @return int
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setSalary($value)
    {
        $this->salary = $value;
        return $this;
    }

    /**
     * @return int
     */
    public function getEmployment()
    {
        return $this->employment;
    }

    /**
     * @param int $value
     */
    public function setEmployment($value)
    {
        $this->employment = $value;
    }

    /**
     * @return string
     */
    public function getKeySkills()
    {
        return $this->keySkills;
    }

    /**
     * @param string $value
     */
    public function setKeySkills($value)
    {
        $this->keySkills = $value;
    }

    /**
     * @return mixed
     */
    public function getCandidate()
    {
        return $this->candidate;
    }

    /**
     * @param CandidateInfo $candidate
     */
    public function setCandidate(CandidateInfo $candidate)
    {
        $this->candidate = $candidate;
    }

    /**
     * @return Collection
     */
    public function getExperienceItems()
    {
        return is_null($this->experienceItems) ? new ArrayCollection() : $this->experienceItems;
    }

    /**
     * @param Collection $value
     */
    public function setExperienceItems(Collection $value)
    {
        $this->experienceItems = $value;
    }
}
