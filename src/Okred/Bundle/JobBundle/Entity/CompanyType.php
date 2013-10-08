<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * CompanyType
 *
 * @ORM\Table(name="company_type")
 * @ORM\Entity
 */
class CompanyType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_company_type", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCompanyType;

    /**
     * @var string
     *
     * @ORM\Column(name="company_type", type="string", length=200, nullable=true)
     */
    private $companyType;


}
