<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * WorkmanJobAllow
 *
 * @ORM\Table(name="workman_job_allow")
 * @ORM\Entity
 */
class WorkmanJobAllow
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_workman", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idWorkman;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_country", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCountry;


}
