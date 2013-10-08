<?php
// src/Okred/Bundle/JobBundle/Entity/Company.php
namespace Okred\Bundle\JobBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity()
 * @ORM\Table(name="fos_job_company")
 */
class Company
{
    /**
     * @var integer
     * @ORM\Column(type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="bigint")
     */
    protected $emloyer_id;

    /**
     * @ORM\Column(type="text")
     */
    protected $name;
    /**
     * @ORM\Column(type="integer")
     */

    protected $id_company_type;

    /**
     * @ORM\Column(type="bigint")
     */
    protected $id_legal_type;

    /**
     * @ORM\Column(type="integer")
     */
    protected $staff;

    /**
     * @ORM\Column(type="text")
     */
    protected $description;

    /**
     * @ORM\Column(type="text")
     */
    protected $logo;

    /**
     * @ORM\Column(type="text")
     */
    protected $slogan;

    /**
     * @ORM\Column(type="string")
     */
    protected $phone;

    /**
     * @ORM\Column(type="text")
     */
    protected $website;

    /**
     * @ORM\Column(type="integer")
     */
    protected $id_city;

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
     * Set emloyer_id
     *
     * @param integer $emloyerId
     * @return Company
     */
    public function setEmloyerId($emloyerId)
    {
        $this->emloyer_id = $emloyerId;
    
        return $this;
    }

    /**
     * Get emloyer_id
     *
     * @return integer 
     */
    public function getEmloyerId()
    {
        return $this->emloyer_id;
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
     * Set id_company_type
     *
     * @param integer $idCompanyType
     * @return Company
     */
    public function setIdCompanyType($idCompanyType)
    {
        $this->id_company_type = $idCompanyType;
    
        return $this;
    }

    /**
     * Get id_company_type
     *
     * @return integer 
     */
    public function getIdCompanyType()
    {
        return $this->id_company_type;
    }

    /**
     * Set id_legal_type
     *
     * @param integer $idLegalType
     * @return Company
     */
    public function setIdLegalType($idLegalType)
    {
        $this->id_legal_type = $idLegalType;
    
        return $this;
    }

    /**
     * Get id_legal_type
     *
     * @return integer 
     */
    public function getIdLegalType()
    {
        return $this->id_legal_type;
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
     * Set id_city
     *
     * @param integer $idCity
     * @return Company
     */
    public function setIdCity($idCity)
    {
        $this->id_city = $idCity;
    
        return $this;
    }

    /**
     * Get id_city
     *
     * @return integer 
     */
    public function getIdCity()
    {
        return $this->id_city;
    }

    /**
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return Company
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
     * @return Company
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