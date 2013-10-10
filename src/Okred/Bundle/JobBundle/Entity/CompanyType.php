<?php
namespace Okred\Bundle\JobBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompanyType
 *
 * @ORM\Entity
 * @ORM\Table(name="company_type")
 */
class CompanyType
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
     *
     * @ORM\Column(name="company_type", type="string", length=200, nullable=true)
     */
    private $companyType;



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
     * Set companyType
     *
     * @param string $companyType
     * @return CompanyType
     */
    public function setCompanyType($companyType)
    {
        $this->companyType = $companyType;

        return $this;
    }

    /**
     * Get companyType
     *
     * @return string 
     */
    public function getCompanyType()
    {
        return $this->companyType;
    }
}
