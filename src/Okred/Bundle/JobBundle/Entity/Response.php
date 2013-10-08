<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Response
 *
 * @ORM\Table(name="response")
 * @ORM\Entity
 */
class Response
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_vacancy", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idVacancy;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_resume", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idResume;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_employer", type="integer", nullable=false)
     */
    private $idEmployer;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_workman", type="integer", nullable=false)
     */
    private $idWorkman;

    /**
     * @var boolean
     *
     * @ORM\Column(name="approved_by_employer", type="boolean", nullable=true)
     */
    private $approvedByEmployer;

    /**
     * @var boolean
     *
     * @ORM\Column(name="approved_by_workman", type="boolean", nullable=true)
     */
    private $approvedByWorkman;

    /**
     * @var boolean
     *
     * @ORM\Column(name="deleted_by_employer", type="boolean", nullable=true)
     */
    private $deletedByEmployer;

    /**
     * @var boolean
     *
     * @ORM\Column(name="deleted_by_workman", type="boolean", nullable=true)
     */
    private $deletedByWorkman;

    /**
     * @var boolean
     *
     * @ORM\Column(name="delayed_by_employer", type="boolean", nullable=true)
     */
    private $delayedByEmployer;

    /**
     * @var boolean
     *
     * @ORM\Column(name="rejected_by_employer", type="boolean", nullable=true)
     */
    private $rejectedByEmployer;

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
