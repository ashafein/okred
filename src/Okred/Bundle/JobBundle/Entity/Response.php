<?php
namespace Okred\Bundle\JobBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Response
 * @ORM\Entity
 * @ORM\Table(name="response")
 */
class Response
{
    /**
     * @var int
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     * @ORM\Column(name="vacancy_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $vacancyId;

    /**
     * @var integer
     * @ORM\Column(name="resume_id", type="integer", nullable=false)
     */
    private $resumeId;

    /**
     * @var integer
     * @ORM\Column(name="employer_id", type="integer", nullable=false)
     */
    private $employerId;

    /**
     * @var integer
     * @ORM\Column(name="workman_id", type="integer", nullable=false)
     */
    private $workmanId;

    /**
     * @var boolean
     * @ORM\Column(name="approved_by_employer", type="boolean", nullable=true)
     */
    private $approvedByEmployer;

    /**
     * @var boolean
     * @ORM\Column(name="approved_by_workman", type="boolean", nullable=true)
     */
    private $approvedByWorkman;

    /**
     * @var boolean
     * @ORM\Column(name="deleted_by_employer", type="boolean", nullable=true)
     */
    private $deletedByEmployer;

    /**
     * @var boolean
     * @ORM\Column(name="deleted_by_workman", type="boolean", nullable=true)
     */
    private $deletedByWorkman;

    /**
     * @var boolean
     * @ORM\Column(name="rejected_by_employer", type="boolean", nullable=true)
     */
    private $rejectedByEmployer;

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
     * @ORM\ManyToOne(targetEntity="Vacancy",  inversedBy="response")
     */
    protected $vacancy;

    /**
     * @ORM\ManyToOne(targetEntity="Resume",  inversedBy="response")
     */
    protected $resume;

    /**
     * Set id
     *
     * @param integer $id
     *
     * @return Response
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set vacancyId
     *
     * @param integer $vacancyId
     *
     * @return Response
     */
    public function setVacancyId($vacancyId)
    {
        $this->vacancyId = $vacancyId;

        return $this;
    }

    /**
     * Get vacancyId
     * @return integer
     */
    public function getVacancyId()
    {
        return $this->vacancyId;
    }

    /**
     * Set resumeId
     *
     * @param integer $resumeId
     *
     * @return Response
     */
    public function setResumeId($resumeId)
    {
        $this->resumeId = $resumeId;

        return $this;
    }

    /**
     * Get resumeId
     * @return integer
     */
    public function getResumeId()
    {
        return $this->resumeId;
    }

    /**
     * Set employerId
     *
     * @param integer $employerId
     *
     * @return Response
     */
    public function setEmployerId($employerId)
    {
        $this->employerId = $employerId;

        return $this;
    }

    /**
     * Get employerId
     * @return integer
     */
    public function getEmployerId()
    {
        return $this->employerId;
    }

    /**
     * Set workmanId
     *
     * @param integer $workmanId
     *
     * @return Response
     */
    public function setWorkmanId($workmanId)
    {
        $this->workmanId = $workmanId;

        return $this;
    }

    /**
     * Get workmanId
     * @return integer
     */
    public function getWorkmanId()
    {
        return $this->workmanId;
    }

    /**
     * Set approvedByEmployer
     *
     * @param boolean $approvedByEmployer
     *
     * @return Response
     */
    public function setApprovedByEmployer($approvedByEmployer)
    {
        $this->approvedByEmployer = $approvedByEmployer;

        return $this;
    }

    /**
     * Get approvedByEmployer
     * @return boolean
     */
    public function getApprovedByEmployer()
    {
        return $this->approvedByEmployer;
    }

    /**
     * Set approvedByWorkman
     *
     * @param boolean $approvedByWorkman
     *
     * @return Response
     */
    public function setApprovedByWorkman($approvedByWorkman)
    {
        $this->approvedByWorkman = $approvedByWorkman;

        return $this;
    }

    /**
     * Get approvedByWorkman
     * @return boolean
     */
    public function getApprovedByWorkman()
    {
        return $this->approvedByWorkman;
    }

    /**
     * Set deletedByEmployer
     *
     * @param boolean $deletedByEmployer
     *
     * @return Response
     */
    public function setDeletedByEmployer($deletedByEmployer)
    {
        $this->deletedByEmployer = $deletedByEmployer;

        return $this;
    }

    /**
     * Get deletedByEmployer
     * @return boolean
     */
    public function getDeletedByEmployer()
    {
        return $this->deletedByEmployer;
    }

    /**
     * Set deletedByWorkman
     *
     * @param boolean $deletedByWorkman
     *
     * @return Response
     */
    public function setDeletedByWorkman($deletedByWorkman)
    {
        $this->deletedByWorkman = $deletedByWorkman;

        return $this;
    }

    /**
     * Get deletedByWorkman
     * @return boolean
     */
    public function getDeletedByWorkman()
    {
        return $this->deletedByWorkman;
    }

    /**
     * Set rejectedByEmployer
     *
     * @param boolean $rejectedByEmployer
     *
     * @return Response
     */
    public function setRejectedByEmployer($rejectedByEmployer)
    {
        $this->rejectedByEmployer = $rejectedByEmployer;

        return $this;
    }

    /**
     * Get rejectedByEmployer
     * @return boolean
     */
    public function getRejectedByEmployer()
    {
        return $this->rejectedByEmployer;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Response
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
     * @return Response
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
}
