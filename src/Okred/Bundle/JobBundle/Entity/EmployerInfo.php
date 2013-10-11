<?php
namespace Okred\Bundle\JobBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Okred\Bundle\UserBundle\Entity\User;

/**
 * @ORM\Entity()
 * @ORM\Table(name="employer_info")
 */
class EmployerInfo
{
    /**
     * @var int
     * @ORM\Column(type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     */

    private $id;


    /**
     * @var User
     * @ORM\OneToOne(targetEntity="Okred\Bundle\UserBundle\Entity\User")
     */
    private $user;

    /**
     * @var string
     * @ORM\Column(name="avatar", type="string", length=255, nullable=true)
     */
    private $avatar;

    /**
     * @var integer
     * * @ORM\Column(name="residence_id", type="string", length=64, nullable=true)
     */
    private $residenceId;

    /**
     * @var integer
     * @ORM\Column(name="country_id", type="integer", nullable=true)
     */
    private $countryId;

    /**
     * @var integer
     * @ORM\Column(name="city_id", type="integer", nullable=true)
     */
    private $cityId;

    /**
     * @var Collection
     * @ORM\OneToMany(targetEntity="Vacancy", mappedBy="employer")
     */
    private $vacancyList;

    /**
     * @var Collection
     * @ORM\ManyToMany(targetEntity="Company", mappedBy="employer")
     */
    private $companyList;

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param User $value
     */
    public function setUser($value)
    {
        $this->user = $value;
    }

    /**
     * @return string
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * @param string $value
     */
    public function setAvatar($value)
    {
        $this->avatar = $value;
    }

    /**
     * @return Collection
     */
    public function getVacancyList()
    {
        return is_null($this->vacancyList) ? new ArrayCollection() : $this->vacancyList;
    }

    /**
     * @param Collection $value
     */
    public function setVacancyList(Collection $value)
    {
        $this->vacancyList = $value;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->vacancyList = new \Doctrine\Common\Collections\ArrayCollection();
        $this->companyList = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set residenceId
     *
     * @param string $residenceId
     * @return EmployerInfo
     */
    public function setResidenceId($residenceId)
    {
        $this->residenceId = $residenceId;

        return $this;
    }

    /**
     * Get residenceId
     *
     * @return string 
     */
    public function getResidenceId()
    {
        return $this->residenceId;
    }

    /**
     * Set countryId
     *
     * @param integer $countryId
     * @return EmployerInfo
     */
    public function setCountryId($countryId)
    {
        $this->countryId = $countryId;

        return $this;
    }

    /**
     * Get countryId
     *
     * @return integer 
     */
    public function getCountryId()
    {
        return $this->countryId;
    }

    /**
     * Set cityId
     *
     * @param integer $cityId
     * @return EmployerInfo
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
     * Add vacancyList
     *
     * @param \Okred\Bundle\JobBundle\Entity\Vacancy $vacancyList
     * @return EmployerInfo
     */
    public function addVacancyList(\Okred\Bundle\JobBundle\Entity\Vacancy $vacancyList)
    {
        $this->vacancyList[] = $vacancyList;

        return $this;
    }

    /**
     * Remove vacancyList
     *
     * @param \Okred\Bundle\JobBundle\Entity\Vacancy $vacancyList
     */
    public function removeVacancyList(\Okred\Bundle\JobBundle\Entity\Vacancy $vacancyList)
    {
        $this->vacancyList->removeElement($vacancyList);
    }

    /**
     * Add companyList
     *
     * @param \Okred\Bundle\JobBundle\Entity\Company $companyList
     * @return EmployerInfo
     */
    public function addCompanyList(\Okred\Bundle\JobBundle\Entity\Company $companyList)
    {
        $this->companyList[] = $companyList;

        return $this;
    }

    /**
     * Remove companyList
     *
     * @param \Okred\Bundle\JobBundle\Entity\Company $companyList
     */
    public function removeCompanyList(\Okred\Bundle\JobBundle\Entity\Company $companyList)
    {
        $this->companyList->removeElement($companyList);
    }

    /**
     * Get companyList
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCompanyList()
    {
        return $this->companyList;
    }
}
