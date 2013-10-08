<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * WorkmanHasEducation
 *
 * @ORM\Table(name="workman_has_education")
 * @ORM\Entity
 */
class WorkmanHasEducation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_workman_has_education", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idWorkmanHasEducation;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_workman", type="integer", nullable=false)
     */
    private $idWorkman;

    /**
     * @var string
     *
     * @ORM\Column(name="institute", type="string", length=300, nullable=false)
     */
    private $institute;

    /**
     * @var string
     *
     * @ORM\Column(name="faculty", type="string", length=1024, nullable=false)
     */
    private $faculty;

    /**
     * @var string
     *
     * @ORM\Column(name="speciality", type="string", length=1024, nullable=false)
     */
    private $speciality;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="graduated_at", type="date", nullable=true)
     */
    private $graduatedAt;

    /**
     * @var string
     *
     * @ORM\Column(name="certificate", type="string", length=1024, nullable=true)
     */
    private $certificate;


}
