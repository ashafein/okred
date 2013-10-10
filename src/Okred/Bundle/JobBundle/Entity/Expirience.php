<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Experience
 *
 * @ORM\Table(name="experience")
 * @ORM\Entity
 */
class Experience
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
    private $workmanId;

    /**
     * @var string
     *
     * @ORM\Column(name="company_name", type="string", length=300, nullable=false)
     */
    private $companyName;

    /**
     * @var integer
     *
     * @ORM\Column(name="city_id", type="integer", nullable=false)
     */
    private $cityId;

    /**
     * @var string
     *
     * @ORM\Column(name="website", type="string", length=1024, nullable=true)
     */
    private $website;

    /**
     * @var integer
     *
     * @ORM\Column(name="scope_id", type="integer", nullable=false)
     */
    private $scopeId;

    /**
     * @var string
     *
     * @ORM\Column(name="position", type="string", length=500, nullable=true)
     */
    private $position;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_date", type="datetime", nullable=true)
     */
    private $startDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_date", type="datetime", nullable=true)
     */
    private $endDate;


}
