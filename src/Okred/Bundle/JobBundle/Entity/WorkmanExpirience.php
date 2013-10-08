<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * WorkmanExpirience
 *
 * @ORM\Table(name="workman_expirience")
 * @ORM\Entity
 */
class WorkmanExpirience
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_expirience", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idExpirience;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_workman", type="integer", nullable=false)
     */
    private $idWorkman;

    /**
     * @var string
     *
     * @ORM\Column(name="company_name", type="string", length=300, nullable=false)
     */
    private $companyName;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_city", type="integer", nullable=false)
     */
    private $idCity;

    /**
     * @var string
     *
     * @ORM\Column(name="website", type="string", length=1024, nullable=true)
     */
    private $website;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_activity_sphere", type="integer", nullable=false)
     */
    private $idActivitySphere;

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
