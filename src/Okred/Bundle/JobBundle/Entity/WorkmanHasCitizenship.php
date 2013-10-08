<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * WorkmanHasCitizenship
 *
 * @ORM\Table(name="workman_has_citizenship")
 * @ORM\Entity
 */
class WorkmanHasCitizenship
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
