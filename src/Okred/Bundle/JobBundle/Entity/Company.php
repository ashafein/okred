<?php

// src/Okred/Bundle/JobBundle/Entity/Company.php
namespace Okred\Bundle\JobBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Company
 *
 * @ORM\Table(name="company")
 * @ORM\Entity
 *
 */

class Company
{
    const COMPANY_TYPE1 = 0;
    const COMPANY_TYPE2 = 1;
    /**
     *
     *
     * @var integer
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="owner_id", type="integer", nullable=true)
     */
    private $OwnerId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;


    /**
     * @var integer
     *
     * @ORM\Column(name="staff", type="integer", nullable=true)
     */
    private $staff;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=1024, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="logo", type="string", length=1024, nullable=true)
     */
    private $logo;

    /**
     * @var string
     *
     * @ORM\Column(name="slogan", type="string", length=1024, nullable=true)
     */
    private $slogan;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=20, nullable=true)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="website", type="string", length=1024, nullable=true)
     */
    private $website;


    /**
     *
     * @var int
     * @ORM\Column(type="integer")
     * @ORM\ManyToOne(targetEntity="Okred\Bundle\JobBundle\Entity\CompanyType")
     * @ORM\JoinColumn(name="company_type_id", referencedColumnName="id")
     */
    protected $companyType;


    /**
     * @ORM\ManyToOne(targetEntity="Okred\Bundle\JobBundle\Entity\LegalType")
     * @ORM\JoinColumn(name="legal_type_id", referencedColumnName="id")
     */
    protected $legalType;

    /**
     * @ORM\ManyToOne(targetEntity="Okred\Bundle\JobBundle\Entity\City")
     * @ORM\JoinColumn(name="city_id", referencedColumnName="id")
     */
    protected $city;

    /**
     * @ORM\ManyToOne(targetEntity="Okred\Bundle\JobBundle\Entity\Scope")
     * @ORM\JoinColumn(name="scope_id", referencedColumnName="id")
     */
    protected $scope;

    /**
     * @ORM\ManyToMany(targetEntity="EmployerInfo", inversedBy="companyList")
     * @ORM\JoinTable(name="employer_company",
     *    joinColumns={@ORM\JoinColumn(name="company_id", referencedColumnName="id")},
     *    inverseJoinColumns={@ORM\JoinColumn(name="employer_id", referencedColumnName="id")}
     * )
     */
    private $employer;

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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set employerId
     *
     * @param integer $employerId
     * @return Company
     */
    public function setEmployerId($employerId)
    {
        $this->employerId = $employerId;

        return $this;
    }

    /**
     * Get employerId
     *
     * @return integer
     */
    public function getEmployerId()
    {
        return $this->employerId;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Company
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
     * Set LegalTypeId
     *
     * @param integer $legalTypeId
     * @return Company
     */
    public function setLegalTypeId($legalTypeId)
    {
        $this->LegalTypeId = $legalTypeId;

        return $this;
    }

    /**
     * Get LegalTypeId
     *
     * @return integer
     */
    public function getLegalTypeId()
    {
        return $this->LegalTypeId;
    }

    /**
     * Set staff
     *
     * @param integer $staff
     * @return Company
     */
    public function setStaff($staff)
    {
        $this->staff = $staff;

        return $this;
    }

    /**
     * Get staff
     *
     * @return integer
     */
    public function getStaff()
    {
        return $this->staff;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Company
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
     * Set logo
     *
     * @param string $logo
     * @return Company
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set slogan
     *
     * @param string $slogan
     * @return Company
     */
    public function setSlogan($slogan)
    {
        $this->slogan = $slogan;

        return $this;
    }

    /**
     * Get slogan
     *
     * @return string
     */
    public function getSlogan()
    {
        return $this->slogan;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return Company
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
     * Set website
     *
     * @param string $website
     * @return Company
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
     * Set cityId
     *
     * @param integer $cityId
     * @return Company
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Company
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
     * @return Company
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
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->employer = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set OwnerId
     *
     * @param integer $ownerId
     * @return Company
     */
    public function setOwnerId($ownerId)
    {
        $this->OwnerId = $ownerId;

        return $this;
    }

    /**
     * Get OwnerId
     *
     * @return integer 
     */
    public function getOwnerId()
    {
        return $this->OwnerId;
    }

    /**
     * Set companyType
     *
     * @param \Okred\Bundle\JobBundle\Entity\CompanyType $companyType
     * @return Company
     */
    public function setCompanyType(\Okred\Bundle\JobBundle\Entity\CompanyType $companyType = null)
    {
        $this->companyType = $companyType;

        return $this;
    }

    /**
     * Get companyType
     *
     * @return \Okred\Bundle\JobBundle\Entity\CompanyType 
     */
    public function getCompanyType()
    {
        return $this->companyType;
    }

    /**
     * Set legalType
     *
     * @param \Okred\Bundle\JobBundle\Entity\LegalType $legalType
     * @return Company
     */
    public function setLegalType(\Okred\Bundle\JobBundle\Entity\LegalType $legalType = null)
    {
        $this->legalType = $legalType;

        return $this;
    }

    /**
     * Get legalType
     *
     * @return \Okred\Bundle\JobBundle\Entity\LegalType 
     */
    public function getLegalType()
    {
        return $this->legalType;
    }

    /**
     * Set city
     *
     * @param \Okred\Bundle\JobBundle\Entity\City $city
     * @return Company
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
     * Set scope
     *
     * @param \Okred\Bundle\JobBundle\Entity\Scope $scope
     * @return Company
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
     * Add employer
     *
     * @param \Okred\Bundle\JobBundle\Entity\EmployerInfo $employer
     * @return Company
     */
    public function addEmployer(\Okred\Bundle\JobBundle\Entity\EmployerInfo $employer)
    {
        $this->employer[] = $employer;

        return $this;
    }

    /**
     * Remove employer
     *
     * @param \Okred\Bundle\JobBundle\Entity\EmployerInfo $employer
     */
    public function removeEmployer(\Okred\Bundle\JobBundle\Entity\EmployerInfo $employer)
    {
        $this->employer->removeElement($employer);
    }

    /**
     * Get employer
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEmployer()
    {
        return $this->employer;
    }
}
