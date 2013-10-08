<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Company
 *
 * @ORM\Table(name="company")
 * @ORM\Entity
 */
class Company
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_company", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCompany;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_employer", type="integer", nullable=true)
     */
    private $idEmployer;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=200, nullable=true)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_company_type", type="integer", nullable=true)
     */
    private $idCompanyType;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_legal_type", type="integer", nullable=true)
     */
    private $idLegalType;

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
     * @ORM\Column(name="phone", type="string", length=100, nullable=true)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="website", type="string", length=1024, nullable=true)
     */
    private $website;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_city", type="integer", nullable=true)
     */
    private $idCity;

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


}
