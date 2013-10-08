<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Resume
 *
 * @ORM\Table(name="resume")
 * @ORM\Entity
 */
class Resume
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_resume", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idResume;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_workman", type="integer", nullable=false)
     */
    private $idWorkman;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=200, nullable=true)
     */
    private $name;

    /**
     * @var boolean
     *
     * @ORM\Column(name="avatar", type="boolean", nullable=true)
     */
    private $avatar;

    /**
     * @var boolean
     *
     * @ORM\Column(name="birth_date", type="boolean", nullable=true)
     */
    private $birthDate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="gender", type="boolean", nullable=true)
     */
    private $gender;

    /**
     * @var boolean
     *
     * @ORM\Column(name="residence", type="boolean", nullable=true)
     */
    private $residence;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_movement", type="integer", nullable=false)
     */
    private $idMovement;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_business_trip", type="integer", nullable=false)
     */
    private $idBusinessTrip;

    /**
     * @var boolean
     *
     * @ORM\Column(name="citizenship", type="boolean", nullable=true)
     */
    private $citizenship;

    /**
     * @var boolean
     *
     * @ORM\Column(name="job_allow", type="boolean", nullable=true)
     */
    private $jobAllow;

    /**
     * @var boolean
     *
     * @ORM\Column(name="time_to_arrive", type="boolean", nullable=true)
     */
    private $timeToArrive;

    /**
     * @var boolean
     *
     * @ORM\Column(name="mail", type="boolean", nullable=true)
     */
    private $mail;

    /**
     * @var boolean
     *
     * @ORM\Column(name="phone", type="boolean", nullable=true)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="position_wanted", type="string", length=1024, nullable=true)
     */
    private $positionWanted;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_activity_sphere", type="integer", nullable=false)
     */
    private $idActivitySphere;

    /**
     * @var integer
     *
     * @ORM\Column(name="salary", type="integer", nullable=true)
     */
    private $salary;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_currency", type="integer", nullable=false)
     */
    private $idCurrency;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_employment", type="integer", nullable=false)
     */
    private $idEmployment;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_schedule", type="integer", nullable=false)
     */
    private $idSchedule;

    /**
     * @var string
     *
     * @ORM\Column(name="additional_info", type="string", length=1024, nullable=true)
     */
    private $additionalInfo;

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
