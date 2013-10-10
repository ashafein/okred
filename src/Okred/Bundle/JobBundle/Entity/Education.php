<?php
namespace Okred\Bundle\JobBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Education
 *
 * @ORM\Table(name="education")
 * @ORM\Entity
 */
class Education
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="workman_id", type="integer", nullable=false)
     */
    private $workmanID;

    /**
     * @var string
     *
     * @ORM\Column(name="institute", type="string", length=300, nullable=false)
     */
    private $institute;

    /**
     * @var string
     *
     * @ORM\Column(name="faculty", type="string", length=1024, nullable=false)
     */
    private $faculty;

    /**
     * @var string
     *
     * @ORM\Column(name="speciality", type="string", length=1024, nullable=false)
     */
    private $speciality;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="graduated_at", type="date", nullable=true)
     */
    private $graduatedAt;

    /**
     * @var string
     *
     * @ORM\Column(name="certificate", type="string", length=1024, nullable=true)
     */
    private $certificate;

    /**
     * @ORM\ManyToOne(targetEntity="Okred\Bundle\UserBundle\Entity\User", inversedBy="education")
     * @ORM\JoinColumn(name="workman_id", referencedColumnName="id")
     */
    private $user;

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
     * Set workmanID
     *
     * @param integer $workmanID
     * @return WorkmanHasEducation
     */
    public function setWorkmanID($workmanID)
    {
        $this->workmanID = $workmanID;

        return $this;
    }

    /**
     * Get workmanID
     *
     * @return integer 
     */
    public function getWorkmanID()
    {
        return $this->workmanID;
    }

    /**
     * Set institute
     *
     * @param string $institute
     * @return WorkmanHasEducation
     */
    public function setInstitute($institute)
    {
        $this->institute = $institute;

        return $this;
    }

    /**
     * Get institute
     *
     * @return string 
     */
    public function getInstitute()
    {
        return $this->institute;
    }

    /**
     * Set faculty
     *
     * @param string $faculty
     * @return WorkmanHasEducation
     */
    public function setFaculty($faculty)
    {
        $this->faculty = $faculty;

        return $this;
    }

    /**
     * Get faculty
     *
     * @return string 
     */
    public function getFaculty()
    {
        return $this->faculty;
    }

    /**
     * Set speciality
     *
     * @param string $speciality
     * @return WorkmanHasEducation
     */
    public function setSpeciality($speciality)
    {
        $this->speciality = $speciality;

        return $this;
    }

    /**
     * Get speciality
     *
     * @return string 
     */
    public function getSpeciality()
    {
        return $this->speciality;
    }

    /**
     * Set graduatedAt
     *
     * @param \DateTime $graduatedAt
     * @return WorkmanHasEducation
     */
    public function setGraduatedAt($graduatedAt)
    {
        $this->graduatedAt = $graduatedAt;

        return $this;
    }

    /**
     * Get graduatedAt
     *
     * @return \DateTime 
     */
    public function getGraduatedAt()
    {
        return $this->graduatedAt;
    }

    /**
     * Set certificate
     *
     * @param string $certificate
     * @return WorkmanHasEducation
     */
    public function setCertificate($certificate)
    {
        $this->certificate = $certificate;

        return $this;
    }

    /**
     * Get certificate
     *
     * @return string 
     */
    public function getCertificate()
    {
        return $this->certificate;
    }
}
