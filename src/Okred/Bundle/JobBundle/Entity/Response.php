<?php
namespace Okred\Bundle\JobBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Response
 *
 * @ORM\Entity
 * @ORM\Table(name="response")
 */
class Response
{
    /**
     * @var integer
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="vacancy_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $vacancyId;

    /**
     * @var integer
     *
     * @ORM\Column(name="resume_id", type="integer", nullable=false)
     *
     */
    private $resumeId;

    /**
     * @var integer
     *
     * @ORM\Column(name="employer_id", type="integer", nullable=false)
     */
    private $employerId;

    /**
     * @var integer
     *
     * @ORM\Column(name="workman_id", type="integer", nullable=false)
     */
    private $workmanId;

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
