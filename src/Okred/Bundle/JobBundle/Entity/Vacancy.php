<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Vacancy
 *
 * @ORM\Table(name="vacancy")
 * @ORM\Entity
 */
class Vacancy
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_vacancy", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idVacancy;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_employer", type="integer", nullable=false)
     */
    private $idEmployer;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=200, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_region", type="integer", nullable=false)
     */
    private $idRegion;

    /**
     * @var integer
     *
     * @ORM\Column(name="salary_from", type="integer", nullable=true)
     */
    private $salaryFrom;

    /**
     * @var integer
     *
     * @ORM\Column(name="salary_to", type="integer", nullable=true)
     */
    private $salaryTo;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_currency", type="integer", nullable=true)
     */
    private $idCurrency;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_experience", type="integer", nullable=true)
     */
    private $idExperience;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=1024, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=500, nullable=true)
     */
    private $address;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_activity_sphere", type="integer", nullable=true)
     */
    private $idActivitySphere;

    /**
     * @var string
     *
     * @ORM\Column(name="functions", type="string", length=500, nullable=true)
     */
    private $functions;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_education_lvl", type="integer", nullable=true)
     */
    private $idEducationLvl;

    /**
     * @var string
     *
     * @ORM\Column(name="schedule", type="string", length=500, nullable=true)
     */
    private $schedule;

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", length=20, nullable=true)
     */
    private $state;

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
